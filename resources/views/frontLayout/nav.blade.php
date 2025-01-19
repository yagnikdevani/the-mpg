<nav class="border-b border-slate-100 dark:bg-zinc-800 print:hidden flex items-center fixed top-0 right-0 left-0 bg-white z-10 dark:border-zinc-700">

    <div class="flex items-center justify-between w-full">
        <div class="topbar-brand flex items-center">
            <div class="navbar-brand flex items-center justify-between shrink px-5 h-[70px] border-r bg-slate-50 border-r-gray-50 dark:border-zinc-700 dark:bg-zinc-800">
                <a href="#" class="flex items-center font-bold text-lg  dark:text-white">
                    <img src="{{env_asset('assets/images/logo-sm.svg')}}" alt="" class="ltr:mr-2 rtl:ml-2 inline-block mt-1 h-6" />
                    <span class="hidden xl:block align-middle"> The Mpg</span>
                </a>
            </div>
            <button type="button" class="text-gray-600 dark:text-white h-[70px] ltr:-ml-10 ltr:mr-6 rtl:-mr-10 rtl:ml-10 vertical-menu-btn" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            
        </div>
        <div class="flex items-center">

            <div>
                <div class="dropdown relative sm:hidden block">
                    {{-- <button type="button" class="text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 dropdown-toggle" data-dropdown-toggle="navNotifications">
                        <i data-feather="search" class="h-5 w-5"></i>
                    </button> --}}
                
                    <div class="dropdown-menu absolute px-4 -left-36 top-0 mx-4 w-72 z-50 hidden list-none border border-gray-50 rounded bg-white shadow dark:bg-zinc-800 dark:border-zinc-600 dark:text-gray-300" id="navNotifications">
                        <form class="py-3 dropdown-item" aria-labelledby="navNotifications">
                            <div class="form-group m-0">
                                <div class="flex w-full">
                                    <input type="text" class="border-gray-100 dark:border-zinc-600 dark:text-zinc-100 w-fit" placeholder="Search ..." aria-label="Search Result">
                                    <button class="btn btn-primary border-l-0 rounded-l-none bg-violet-500 border-transparent text-white" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            
            <div>
                <button type="button" class="light-dark-mode text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 hidden sm:block ">
                    <i data-feather="moon" class="h-5 w-5 block dark:hidden"></i>
                    <i data-feather="sun" class="h-5 w-5 hidden dark:block"></i>
            </div>

            

            


            
        </div>
    </div>
</nav>