@extends('pages.frontend.parent')

@section('content')
    <!-- START: HERO -->
    <section class="flex items-center hero">
        <div class="w-full absolute z-20 inset-0 md:relative md:w-1/2 text-center flex flex-col justify-center hero-caption">
            <h1 class="text-3xl md:text-5xl leading-tight font-semibold">
                The Room <br class="" />You've Dreaming
            </h1>
            <h2 class="px-8 text-base md:px-0 md:text-lg my-6 tracking-wide">
                Kami menyediakan furniture berkelas yang
                <br class="hidden lg:block" />membuat ruangan terasa homey
            </h2>
            <div>
                <a href="#browse-the-room"
                    class="bg-pink-400 text-black hover:bg-black hover:text-pink-400 rounded-full px-8 py-3 mt-4 inline-block flex-none transition duration-200">Explore
                    Now</a>
            </div>
        </div>
        <div class="w-full inset-0 md:relative md:w-1/2">
            <div class="relative hero-image">
                <div class="overlay inset-0 bg-black opacity-35 z-10"></div>
                <div class="overlay right-0 bottom-0 md:inset-0">
                    <button class="video hero-cta focus:outline-none z-30 modal-trigger"
                        data-content='<div class="w-screen pb-56 md:w-88 md:pb-56 relative z-50">
              <div class="absolute w-full h-full">
                <iframe
                  width="100%"
                  height="100%"
                  src="https://www.youtube.com/embed/3h0_v1cdUIA"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen
                ></iframe>
              </div>
            </div>'></button>
                </div>
                <img src="{{ asset('frontend/images/content/image-section-1.png') }}" alt="hero 1"
                    class="absolute inset-0 md:relative w-full h-full object-cover object-center" />
            </div>
        </div>
    </section>
    <!-- END: HERO -->

    <!-- START: BROWSE THE ROOM -->
    <section class="flex bg-gray-100 py-16 px-4" id="browse-the-room">
        <div class="container mx-auto">
            <div class="flex flex-start mb-4">
                <h3 class="text-2xl capitalize font-semibold">
                    browse the room <br class="" />that we designed for you
                </h3>
            </div>
            <div class="grid grid-rows-2 grid-cols-9 gap-4">
                <div class="relative col-span-9 row-span-1 md:col-span-4 card" style="height: 180px">
                    <div class="card-shadow rounded-xl">
                        <img src="{{ asset('frontend/images/content/image-catalog-1.png') }}" alt=""
                            class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl" />
                    </div>
                    <div class="overlay left-0 top-0 bottom-0 flex justify-center flex-col pl-48 md:pl-72">
                        <h5 class="text-lg font-semibold">Living Room</h5>
                        <span class="">18.309 items</span>
                    </div>
                    <a href="details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
                <div class="relative col-span-9 row-span-1 md:col-span-2 md:row-span-2 card">
                    <div class="card-shadow rounded-xl">
                        <img src="{{ asset('frontend/images/content/image-catalog-3.png') }}" alt=""
                            class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl" />
                    </div>
                    <div
                        class="overlay right-0 left-0 top-0 bottom-0 md:bottom-auto flex justify-center md:items-center flex-col pl-48 md:pl-0 pt-0 md:pt-12">
                        <h5 class="text-lg font-semibold">Decoration</h5>
                        <span class="">77.392 items</span>
                    </div>
                    <a href="details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
                <div class="relative col-span-9 row-span-1 md:col-span-3 md:row-span-2 card">
                    <div class="card-shadow rounded-xl">
                        <img src="{{ asset('frontend/images/content/image-catalog-4.png') }}" alt=""
                            class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl" />
                    </div>
                    <div
                        class="overlay right-0 left-0 top-0 bottom-0 md:bottom-auto flex justify-center md:items-center flex-col pl-48 md:pl-0 pt-0 md:pt-12">
                        <h5 class="text-lg font-semibold">Living Room</h5>
                        <span class="">22.094 items</span>
                    </div>
                    <a href="details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
                <div class="relative col-span-9 row-span-1 md:col-span-4 card">
                    <div class="card-shadow rounded-xl">
                        <img src="{{ asset('frontend/images/content/image-catalog-2.png') }}" alt=""
                            class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl" />
                    </div>
                    <div class="overlay left-0 top-0 bottom-0 flex justify-center flex-col pl-48 md:pl-72">
                        <h5 class="text-lg font-semibold">Children Room</h5>
                        <span class="">837 items</span>
                    </div>
                    <a href="details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END: BROWSE THE ROOM -->

    <!-- START: CLIENTS -->
    <section class="container mx-auto">
        <div class="flex justify-center flex-wrap">
            <div class="w-full flex-auto md:w-auto md:flex-initial px-4 md:px-6 my-4 md:my-0">
                <img src="{{ asset('frontend/images/content/logo-adobe.svg') }}" alt="" class="mx-auto" />
            </div>
            <div class="w-full flex-auto md:w-auto md:flex-initial px-4 md:px-6 my-4 md:my-0">
                <img src="{{ asset('frontend/images/content/logo-ikea.svg') }}" alt="" class="mx-auto" />
            </div>
            <div class="w-full flex-auto md:w-auto md:flex-initial px-4 md:px-6 my-4 md:my-0">
                <img src="{{ asset('frontend/images/content/logo-hermanmiller.svg') }}" alt="" class="mx-auto" />
            </div>
            <div class="w-full flex-auto md:w-auto md:flex-initial px-4 md:px-6 my-4 md:my-0">
                <img src="{{ asset('frontend/images/content/logo-miele.svg') }}" alt="" class="mx-auto" />
            </div>
        </div>
    </section>
    <!-- END: CLIENTS -->

    <!-- START: ASIDE MENU -->
    <section class="">
        <div class="border-t border-b border-gray-200 py-12 mt-16 px-4">
            <div class="flex justify-center mb-8">
                <img src="images/content/logo.png" alt="Luxspace | Fulfill your house with beautiful furniture" />
            </div>
            <aside class="container mx-auto">
                <div class="flex flex-wrap -mx-4 justify-center">
                    <div class="px-4 w-full md:w-2/12 mb-4 md:mb-0 accordion">
                        <h5 class="text-lg font-semibold mb-2 relative">Overview</h5>
                        <ul class="h-0 invisible md:h-auto md:visible overflow-hidden">
                            <li>
                                <a href="#" class="hover:underline py-1 block">Shipping</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline py-1 block">Refund</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline py-1 block">Promotion</a>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4 w-full md:w-2/12 mb-4 md:mb-0 accordion">
                        <h5 class="text-lg font-semibold mb-2 relative">Company</h5>
                        <ul class="h-0 invisible md:h-auto md:visible overflow-hidden">
                            <li>
                                <a href="#" class="hover:underline py-1 block">About</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline py-1 block">Career</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline py-1 block">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4 w-full md:w-2/12 mb-4 md:mb-0 accordion">
                        <h5 class="text-lg font-semibold mb-2 relative">Explore</h5>
                        <ul class="h-0 invisible md:h-auto md:visible overflow-hidden">
                            <li>
                                <a href="#" class="hover:underline py-1 block">Terms & Conds</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline py-1 block">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline py-1 block">For Developer</a>
                            </li>
                        </ul>
                    </div>
                    <div class="px-4 w-full md:w-3/12 mb-4 md:mb-0">
                        <h5 class="text-lg font-semibold mb-2 relative">
                            Special Letter
                        </h5>
                        <form action="#">
                            <label class="relative w-full">
                                <input type="text" class="bg-gray-100 rounded-xl py-3 px-5 w-full focus:outline-none"
                                    placeholder="Your email adress" />
                                <button class="bg-pink-400 absolute rounded-xl right-0 p-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.6177 0.411971C23.6163 0.410624 23.6152 0.409187 23.6138 0.407839C23.6124 0.406492 23.6109 0.405414 23.6095 0.404157C23.236 0.049307 22.7002 -0.0573008 22.2098 0.126411L0.833871 8.13353C0.268743 8.34518 -0.0623361 8.87521 0.0098048 9.4523C0.0821332 10.0294 0.53462 10.4694 1.13589 10.547L11.5833 11.8968C11.6028 11.8994 11.6185 11.9143 11.6212 11.9332L13.0301 21.9417C13.1112 22.5177 13.5704 22.9512 14.1729 23.0204C14.2279 23.0268 14.2824 23.0298 14.3364 23.0298C14.8735 23.0298 15.3486 22.7229 15.5495 22.231L23.9077 1.75274C24.0994 1.28302 23.9882 0.76983 23.6177 0.411971ZM1.30534 9.34475C1.2819 9.34169 1.27136 9.34039 1.26728 9.30788C1.26325 9.27537 1.27319 9.27159 1.29508 9.26347L21.2946 1.77187L11.9404 10.7333C11.8794 10.7163 1.30534 9.34475 1.30534 9.34475ZM14.37 21.7892C14.3614 21.8102 14.358 21.8198 14.3236 21.8158C14.2897 21.8119 14.2883 21.8017 14.2852 21.7794C14.2852 21.7794 12.8535 11.6495 12.8358 11.5911L22.19 2.62972L14.37 21.7892Z"
                                            fill="white" />
                                    </svg>
                                </button>
                            </label>
                        </form>
                    </div>
                </div>
            </aside>
        </div>
    </section>
    <!-- END: ASIDE MENU -->
@endsection
