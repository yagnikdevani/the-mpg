{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
 --}}

 {{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
 --}}

 <!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Login - The-Mpg Admin </title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      content="The-Mpg"
      name="description"
    />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{env_asset('assets/images/favicon.ico')}}" />


   <link rel="stylesheet" href="{{env_asset('./assets/libs/swiper/swiper-bundle.min.css')}}">

    <link rel="stylesheet" href="{{env_asset('assets/css/icons.css')}}" />
    <link rel="stylesheet" href="{{env_asset('assets/css/tailwind.css')}}" />



</head>
    
<body data-mode="light" data-sidebar-size="lg">


   
    <div class="container-fluid">
        <div class="h-screen md:overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-12 ">
                <div class="col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 relative z-50">
                    <div class="w-full bg-white xl:p-12 p-10 dark:bg-zinc-800">
                        <div class="flex h-[90vh] flex-col">
                                <div class="mx-auto">
                                <a href="index.html" class="">
                                    <img src="{{env_asset('assets/images/logo-sm.svg')}}" alt="" class="h-8 inline"> <span class="text-xl align-middle font-medium ltr:ml-2 rtl:mr-2 dark:text-white">The Mpg</span>
                                </a>
                            </div>

                            <div class="my-auto">
                                <div class="text-center">
                                    <h5 class="text-gray-600 dark:text-gray-100">Welcome Back !</h5>
                                    <p class="text-gray-500 dark:text-gray-100/60 mt-1">Sign in to continue to The Mpg.</p>
                                </div>


                                

                                <form class="mt-4 pt-2" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="text-gray-600 dark:text-gray-100 font-medium mb-2 block">Email</label>
                                        <input type="email" 
                                            class="w-full rounded placeholder:text-sm py-2 border-gray-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60" 
                                            id="email" name="email" value="{{old('email')}}" placeholder="Enter email">
                                            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="flex">
                                            <div class="flex-grow-1">
                                                <label class="text-gray-600 dark:text-gray-100 font-medium mb-2 block">Password</label>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <div class="ltr:ml-auto rtl:mr-auto">
                                                    <a href="{{ route('password.request') }}" class="text-gray-500 dark:text-gray-100">Forgot password?</a>
                                                </div>
                                            @endif
                                        </div>

                                        
                                        <div class="flex">
                                            <input type="password" class="w-full rounded ltr:rounded-r-none rtl:rounded-l-none placeholder:text-sm py-2 border-gray-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60" name="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                            <button class="bg-gray-50 px-4 rounded ltr:rounded-l-none rtl:rounded-r-none border border-gray-100 ltr:border-l-0 rtl:border-r-0 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            @error('password') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                        </div>
                                    </div>



                                    <div class="row mb-6">
                                        <div class="col">
                                            <div >
                                                <input type="checkbox" 
                                                class="h-4 w-4 border border-gray-300 rounded bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain ltr:float-left rtl:float-right ltr:mr-2 rtl:ml-2 cursor-pointer focus:ring-offset-0" checked name="remember" id="remember_me">
                                                <label class="align-middle text-gray-600 dark:text-gray-100 font-medium">
                                                    Remember me
                                                </label>
                                            </div>  
                                        </div>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn border-transparent bg-violet-500 w-full py-2.5 text-white w-100 waves-effect waves-light shadow-md shadow-violet-200 dark:shadow-zinc-600" type="submit">Log In</button>
                                    </div>
                                </form>
                            </div>

                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-7 lg:col-span-8 xl:col-span-9">
                    <div class="h-screen bg-cover relative p-5 bg-[url('../images/auth-bg.jpg')]">
                        <div class="absolute inset-0 bg-violet-500/90"></div>

                        <ul class="bg-bubbles absolute top-0 left-0 w-full h-full overflow-hidden animate-square">
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[10%] "></li>
                            <li class="h-28 w-28 rounded-3xl bg-white/10 absolute left-[20%]"></li>
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[40%]"></li>
                            <li class="h-24 w-24 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-32 w-32 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[32%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[55%]"></li>
                            <li class="h-12 w-12 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[90%]"></li>
                        </ul>

                        <div class="grid grid-cols-12 content-center h-screen">
                            <div class="col-span-8 col-start-3">
                                <div class="swiper login-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <i class="bx bxs-quote-alt-left text-green-600 text-5xl"></i>
                                                <h3 class="mt-4 text-white text-22">“I feel confident imposing change on myself. It's a lot more progressing fun than looking back. That's why I ultricies enim at malesuada nibh diam on tortor neaded to throw curve balls.”</h3>
                                                
                                        </div>
                                        
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{env_asset('assets/libs/@popperjs/core/umd/popper.min.js')}}"></script>
    <script src="{{env_asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{env_asset('assets/libs/metismenujs/metismenujs.min.js')}}"></script>
    <script src="{{env_asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{env_asset('assets/libs/feather-icons/feather.min.js')}}"></script>

    <script src="./assets/libs/swiper/swiper-bundle.min.js"></script>
    
    <script src="{{env_asset('assets/js/pages/login.init.js')}}"></script>

    <script src="{{env_asset('assets/js/app.js')}}"></script>
</body>

</html>