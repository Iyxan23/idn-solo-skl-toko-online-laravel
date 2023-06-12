<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class FrontendController extends Controller
{
    public function index()
    {
        $categoryName = Category::latest()->get();
        $products = Product::with(['galleries'])->latest()->get();

        return view('pages.frontend.index', compact('categoryName', 'products'));
    }

    public function detailProduct($slug)
    {
        $categoryName = Category::latest()->get();
        $product = Product::with(['galleries'])->where('slug', $slug)->firstOrFail();
        $recommendation = Product::with(['galleries'])->inRandomOrder()->limit(4)->get();

        return view('pages.frontend.detail_product', compact('product', 'categoryName', 'recommendation'));
    }

    public function detailCategory($slug)
    {
        $categoryName = Category::latest()->get();
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::with(['galleries'])->where('category_id', $category->id)->get();

        return view('pages.frontend.detail_category', compact('products', 'category', 'categoryName'));
    }

    public function cart(Request $request)
    {
        $categoryName = Category::latest()->get();
        $items = Cart::latest()->get();

        return view('pages.frontend.cart', compact('categoryName', 'items'));
    }

    public function addToCart(Request $request, $id)
    {
        Cart::create([
            'users_id' => Auth::user()->id,
            'products_id' => $id,
        ]);

        return redirect()->route('cart');
    }

    public function deleteCart($id)
    {
        Cart::findOrFail($id)->delete();

        return redirect()->back();
    }

    public function checkout(CheckoutRequest $request)
    {
        $data = $request->all();

        $cart = Cart::with(['product'])
            ->where('users_id', Auth::user()->id)
            ->get();

        $data['users_id'] = Auth::user()->id;
        $data['total_price'] = $cart->sum('product.price');

        $transaction = Transaction::create($data);

        foreach ($cart as $row) {
            $item[] = TransactionItem::create([
                'users_id' => Auth::user()->id,
                'products_id' => $row->products_id,
                'transactions_id' => $transaction->id
            ]);
        }

        Cart::where('users_id', Auth::user()->id)->delete();

        // midtrans
        \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
        \Midtrans\Config::$clientKey = config('services.midtrans.clientKey');
        \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
        \Midtrans\Config::$isSanitized = config('services.midtrans.isSanitized');
        \Midtrans\Config::$is3ds = config('services.midtrans.is_3ds');

        // MIDTRANS_SERVER_KEY="SB-Mid-server-tkfHxnzgG_DH5kLI-ArS2OT9"
        // MIDTRANS_CLIENT_KEY="SB-Mid-client-W87RXhnCgw5o1smQ"
        // MIDTRANS_IS_PRODUCTION="false"
        // MIDTRANS_IS_SANITIZED="true"
        // MIDTRANS_IS_3DS="true"

        $midtrans = [
            'transaction_details' => [
                'order_id' => 'ORDER-NURIHSANALGHIFARI-' . $transaction->id,
                'gross_amount' => 99999999998
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email
            ],
            'enabled_payments' => [
                'gopay',
                'bank_transfer'
            ],
            'vtweb' => []
        ];

        try {
            $paymentUrl = \Midtrans\Snap::createTransaction($midtrans)->redirect_url;

            $transaction->payment_url = $paymentUrl;
            $transaction->save();

            return redirect($paymentUrl);

        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}