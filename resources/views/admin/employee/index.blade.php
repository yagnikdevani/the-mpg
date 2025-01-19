@extends('adminLayout.app')
<div class="main-content">
    <div class="page-content dark:bg-zinc-700">
        
        <div class="container-fluid px-[0.625rem]">

            <div class="grid grid-cols-1 mb-5">
                <div class="flex items-center justify-between">
                    <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Manage User</h4>
                </div>
            </div>
            

            <div class=" grid grid-cols-1">
                <div class="grid grid-cols-12 items-stretch">
                    <div class="col-span-12 lg:col-span-6 self-center">
                        <h5 class="text-15 text-gray-600 dark:text-gray-100">User List <span class="text-gray-500 font-normal ml-2 dark:text-zinc-100">({{$managerUser->count()}})</span></h5>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="flex flex-wrap items-center gap-2 mt-5 lg:mt-0 lg:justify-end">
                            
                            <div>
                                <a href="#" class="btn bg-gray-50 border-gray-50 dark:bg-zinc-600/50 dark:border-zinc-600 dark:text-gray-100"><i class="bx bx-plus me-1"></i> Add New</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="mt-5">
                    <div class="flex flex-wrap items-center">
                        
                        <div class="ltr:md:ml-auto rtl:md:mr-auto mt-4 md:mt-0">
                            <label class="dar
                            text-gray-100">Search:
                                <input type="search" class="py-0.5 px-1 w-40 rounded border-gray-100 ml-2 dark:bg-zinc-700/50 dark:border-zinc-600" placeholder="" aria-controls="">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mt-5 relative overflow-x-auto">
                    <table class="w-full">
                        <thead class="border-b border-gray-50 cursor-pointer dark:border-zinc-600">
                            <tr class="text-gray-700 dark:text-gray-100">
                                
                                <th class="relative text-start p-4 dark:text-gray-100">Name</th>
                                <th class="relative text-start p-4 dark:text-gray-100">Code</th>
                                <th class="relative w-28 text-start p-4 dark:text-gray-100">Edit</th>
                                <th class="relative w-28 text-start p-4 dark:text-gray-100">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($managerUser as $user)
                                
                                <tr class="border-b border-gray-50 text-gray-600 dark:border-zinc-600">
                                    
                                    <td class="inline-flex items-center p-4">
                                        <img src="{{env_asset('assets/images/users/avatar-2.jpg')}}" alt="" class="h-8 w-8 rounded-full ltr:mr-2 rtl:ml-2">&nbsp;
                                        <a href="#" class="text-gray-700 dark:text-gray-100">{{$user->name}}</a>
                                    </td>
                                
                                    <td class="p-4 dark:text-zinc-50">
                                        <div class="text-11 bg-violet-50/50 hover:bg-violet-50 cursor-pointer transition-all duration-300 inline-block text-violet-500 px-1 py-[1px] rounded font-medium dark:bg-violet-500/20 dark:text-violet-300">{{$user->code}}</div>
                                    </td>
                                    
                                    <td>
                                        <a href="">
                                            <i class="bx bx-pen h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="">
                                            <i class="bx bx-trash h-10 w-10 border border-gray-50 text-xl text-center leading-loose rounded-full text-gray-300 ltr:mr-5 rtl:ml-5 group-hover:border-transparent group-hover:bg-violet-50/50 group-hover:text-violet-500 transition-all duration-300 align-middle dark:border-zinc-600 dark:group-hover:border-transparent dark:group-hover:bg-violet-500/20"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="flex items-center place-content-between mt-4 mb-16">
                    {{-- <div class="mt-4 mb-2">
                        <p class="text-gray-600 dark:text-zinc-100">Showing 1 to 10 of 12 entries</p>
                    </div> --}}
                    {{-- <div class="flex mt-2.5">
                        <nav aria-label="Page navigation example border">
                             <ul class="flex list-style-none">
                                <li class="border rounded-l border-gray-100 dark:border-zinc-500 dark:bg-zinc-800" disabled>
                                    <a class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-400 hover:text-violet-500 focus:shadow-none hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 pointer-events-none" 
                                    href="#">Previous</a></li>
                                    <li class="border border-l-0 border-r-0 border-violet-500 group hover:border-gray-200 transition-all duration-300 dark:border-zinc-500 dark:bg-zinc-800">
                                        <a class="page-link relative block py-2 px-3 border-0 group-hover bg-violet-500 outline-none text-white hover:text-violet-500 group-hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none transition-all duration-300"
                                        href="#">1</a></li>
                                <li class="border border-l-0 border-r-0 border-gray-100 dark:border-zinc-500 dark:bg-zinc-800"><a
                                    class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 dark:text-zinc-100 hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"
                                    href="#">2</a></li>
                                     <li class="border rounded-l border-gray-100 dark:border-zinc-500 dark:bg-zinc-800" disabled>
                                    <a class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-100 hover:text-violet-500 focus:shadow-none hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 pointer-events-none" 
                                    href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div> --}}
                    {{ $managerUser->links('pagination::bootstrap-4') }}
                    
                </div>
            </div>
            
            <!-- Footer Start -->
            @include('adminLayout.footer')
            <!-- end Footer -->
        </div>
    </div>
</div>