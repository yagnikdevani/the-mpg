@extends('frontLayout.app')
<div class="main-content">
    <div class="page-content dark:bg-zinc-700">
        
        <div class="container-fluid px-[0.625rem]">

            <div class="grid grid-cols-1 gap-5">
                <div class="card dark:bg-zinc-800 dark:border-zinc-600 mb-4">
                    
                    <div class="card-body flex-wrap gap-4 items-center">
                            
                        <div class="grid grid-cols-12 gap-4">
                            
                            <a href="{{ route('front.warranty-registration') }}" class="block col-span-12 md:col-span-6 xl:col-span-4">
                                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                    <div class="card-body">
                                        <div class="p-2">
                                            <div class="col-xl-3 col-lg-4 col-sm-6 flex items-center justify-center">
                                                <img src="{{env_asset('assets/images/front-images/w-registration.svg')}}" height="100px" width="100px" alt="">
                                            </div>
                                            <h4 class="mt-3 text-gray-600 dark:text-gray-100 text-center">
                                                Warranty Registration
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            

                            <a href="{{ route('front.technical-literature-request') }}" class="block col-span-12 md:col-span-6 xl:col-span-4">
                                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                    <div class="card-body">
                                        <div class="p-2">
                                            <div class="col-xl-3 col-lg-4 col-sm-6 flex items-center justify-center">
                                                <img src="{{env_asset('assets/images/front-images/technical-l-r.svg')}}" height="100px" width="100px" alt="">
                                            </div>
                                            <h4 class="mt-3 text-gray-600 dark:text-gray-100 text-center">
                                                Technical Literature Request
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="{{route('front.service-request')}}" class="block col-span-12 md:col-span-6 xl:col-span-4">
                                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                                    <div class="card-body">
                                        <div class="p-2">
                                            <div class="col-xl-3 col-lg-4 col-sm-6 flex items-center justify-center">
                                                <img src="{{env_asset('assets/images/front-images/service-request.svg')}}" height="100px" width="100px" alt="">
                                            </div>
                                            <h4 class="mt-3 text-gray-600 dark:text-gray-100 text-center">
                                                Service Request
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </a>


                        </div>
                        
                    </div>

                </div>
                <div class="text-center mb-6">
                    <h2 class="mt-8 mb-4 text-white">Let's get started with The Mtg</h2>
                    <p class="text-base text-white/50">Embarking on a new journey is both exciting and challenging. Every big achievement begins with a single step, and today is the perfect day to take yours. Believe in your potential, embrace your goals, and stay committed to your vision. With determination and hard work, you’ll turn dreams into reality. Let’s ignite your passion, fuel your ambition, and move forward with confidence—because your journey to greatness starts now!</p>
                </div>
            </div>
      
           
          

            <!-- Footer Start -->
            @include('frontLayout.footer')
            <!-- end Footer -->
        </div>
    </div>
</div>