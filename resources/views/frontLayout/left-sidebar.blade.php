<div class="hidden">
    <div class="fixed inset-0 bg-black/40 transition-opacity z-40"></div>
    <div class="h-screen z-50 bg-white fixed w-80 right-0" data-simplebar>
        <div class="flex items-center p-4 border-b border-gray-100">
            <h5 class="m-0 mr-2">Theme Customizer</h5>
            <a href="javascript:void(0);" class="h-6 w-6 text-center bg-gray-700 ml-auto rounded-full" >
                <i class="mdi mdi-close text-15 align-middle text-white leading-relaxed"></i>
            </a>
        </div>
        <div class="p-4">
            <h6 class="mb-3">Layout</h6>
            <div class="flex gap-4">
                <div>
                    <input class="focus:ring-0" checked type="radio" name="layout" id="layout-vertical" value="vertical">
                    <label class="align-middle" for="layout-vertical">Vertical</label>
                </div>
                <div>
                    <input class="focus:ring-0" type="radio" name="layout" id="layout-horizontal" value="horizontal">
                    <label class="align-middle" for="layout-horizontal">Horizontal</label>
                </div>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>
            <div class="flex gap-4">
                <div>
                    <input class="focus:ring-0" checked type="radio" name="layout-mode" id="layout-mode-light" value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div>
                    <input class="focus:ring-0" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

            <div class="flex gap-4">
                <div>
                    <input class="focus:ring-0" checked type="radio" name="layout-width" id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                </div>
                <div>
                    <input class="focus:ring-0" type="radio" name="layout-width" id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>
            <div class="flex gap-4">
                <div>
                    <input class="focus:ring-0" checked type="radio" name="layout-position" id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                    <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                </div>
                <div>
                    <input class="focus:ring-0" checked type="radio" name="layout-position" id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                    <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                </div>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>
            <div class="flex gap-4">
                <div>
                    <input class="focus:ring-0" checked type="radio" name="topbar-color" id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div>
                    <input class="focus:ring-0" type="radio" name="topbar-color" id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>
            </div>

            <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

            <div class="space-y-1">
                <div class="form-check sidebar-setting">
                    <input class="focus:ring-0" checked type="radio" name="sidebar-size" id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                </div>
            </div>

            <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>
            <div class="space-y-1">
                <div class="form-check sidebar-setting">
                    <input class="focus:ring-0" checked type="radio" name="sidebar-color" id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                    <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                </div>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Direction</h6>
            <div class="space-y-1">
                <div>
                    <input class="focus:ring-0" checked type="radio" name="layout-direction" id="layout-direction-ltr" value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div>
                    <input class="focus:ring-0" type="radio" name="layout-direction" id="layout-direction-rtl" value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu rtl:right-0 fixed ltr:left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">

    <div data-simplebar class="h-full">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{route('front.registration-and-request')}}" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard"> Home</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="javascript: void(0);" aria-expanded="false" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps"> Apps</span>
                    </a>                    
                </li>


                <li>
                    <a href="javascript: void(0);" aria-expanded="false"  class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="users"></i>
                        <span data-key="t-auth">Authentication</span>
                    </a>
                </li> --}}

                 

                

                

            </ul>

            {{-- <div class="sidebar-alert text-center mx-5 my-12">
                <div class="card-body bg-primary rounded bg-violet-50/50 dark:bg-zinc-700/60">
                    <img src="assets/images/giftbox.png" alt="" class="block mx-auto">
                    <div class="mt-4">
                        <h5 class="text-violet-500 mb-3 font-medium">Unlimited Access</h5>
                        <p class="text-slate-600 text-13 dark:text-gray-50">Upgrade your plan from a Free trial, to select ‘Business Plan’.</p>
                        <a href="#!" class="btn bg-violet-500 text-white border-transparent mt-6">Upgrade Now</a>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->