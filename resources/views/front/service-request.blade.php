@extends('frontLayout.app')
<div class="main-content">
    <div class="page-content dark:bg-zinc-700">
        
        <div class="container-fluid px-[0.625rem]">

            <div class="grid grid-cols-1 mb-5">
                <div class="flex items-center justify-between">
                    <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Service Request</h4>
                    
                </div>
            </div>
            

            <div class="grid grid-cols-1">
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    {{-- <div class="card-body pb-0">
                        <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Textual inputs</h6>
                    </div> --}}
                    <div class="card-body">
                        <div class="grid grid-cols-12 gap-5">
                            <!-- Product Serial No. -->
                            <div class="col-span-12 lg:col-span-6">
                                <div class="mb-4">
                                    <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Product Serial No.</label>
                                    <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" placeholder="Product Serial No." id="product-serial">
                                </div>
                            </div>
                    
                            <!-- Machine Serial No. -->
                            <div class="col-span-12 lg:col-span-6">
                                <div class="mb-4">
                                    <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Machine Serial No.</label>
                                    <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" placeholder="Machine Serial No." id="machine-serial">
                                </div>
                            </div>
                    
                            <!-- Customer Name -->
                            <div class="col-span-12 lg:col-span-6">
                                <div class="mb-4">
                                    <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Complain</label>
                                    <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" name="complain" type="text" placeholder="Complain" id="complain">
                                </div>
                            </div>
                    
                            <div class="col-span-12 lg:col-span-6">
                                <div class="mb-4">
                                    <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Customer Contact Name</label>
                                    <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" name="complain" type="text" placeholder="Customer Contact Name" id="customer-name">
                                </div>
                            </div>

                            <div class="col-span-12 lg:col-span-6">
                                <div class="mb-4">
                                    <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Descripe Your Issue</label>

                                    <textarea class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" name="describe_issue" id="describe-issue" cols="30" rows="5"></textarea>
                                    
                                </div>
                            </div>
                    
                            <!-- Submit Button -->
                            <div class="col-span-12 mt-3">
                                <button type="submit" class="btn bg-violet-500 border-transparent text-white font-medium w-28 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50">Submit</button>
                            </div>
                        </div>
                    </div>
                    
                </div>

                
            </div>
            
            
            <!-- Footer Start -->
            <footer class="footer absolute bottom-0 right-0 left-0 border-t border-gray-50 py-5 px-5 bg-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-200">
                <div class="grid grid-cols-2">
                    <div class="grow">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Minia
                    </div>
                    <div class="hidden md:inline-block text-end">Design & Develop by <a href="" class="text-violet-500 underline">Themesbrand</a></div>

                </div>
            </footer>
            <!-- end Footer -->
        </div>
    </div>
</div>