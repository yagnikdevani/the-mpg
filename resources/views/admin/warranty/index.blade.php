@extends('adminLayout.app')
<div class="main-content">
    <div class="page-content dark:bg-zinc-700">
        
        <div class="container-fluid px-[0.625rem]">

            <div class="grid grid-cols-1 mb-5">
                <div class="flex items-center justify-between">
                    <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Warranty Registration List</h4>
                </div>
            </div>
            

            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                <div class="card-body pb-0">
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
                </div>
                <div class="card-body">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-sm text-gray-700 dark:text-gray-100">
                                <tr>
                                    
                                    <th scope="col" class="px-6 py-3.5">
                                        Product
                                    </th>
                                    <th scope="col" class="px-6 py-3.5">
                                        Product Serial
                                    </th>
                                    <th scope="col" class="px-6 py-3.5">
                                        Machine Serial
                                    </th>
                                    <th scope="col" class="px-6 py-3.5">
                                        Customer Name
                                    </th>
                                    <th scope="col" class="px-6 py-3.5">
                                        Country
                                    </th>
                                    <th scope="col" class="px-6 py-3.5">
                                        State
                                    </th>
                                    <th scope="col" class="px-6 py-3.5">
                                        Added By
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($warrantyData as $warranty)    
                                    <tr class="bg-gray-50/60 dark:bg-zinc-600/50">
                                        
                                        <td class="px-6 py-3.5 dark:text-zinc-100">
                                            {{$warranty->product->name}}
                                        </td>
                                        <td class="px-6 py-3.5 dark:text-zinc-100">
                                            {{$warranty->product_serial}}
                                        </td>
                                        <td class="px-6 py-3.5 dark:text-zinc-100">
                                            {{$warranty->machine_serial}}
                                        </td>
                                        <td class="px-6 py-3.5 dark:text-zinc-100">
                                            {{$warranty->customer_name}}
                                        </td>
                                        <td class="px-6 py-3.5 dark:text-zinc-100">
                                            {{$warranty->getCountry->name}}
                                        </td>
                                        <td class="px-6 py-3.5 dark:text-zinc-100">
                                            {{$warranty->getState->name}}
                                        </td>
                                        <td class="px-6 py-3.5 dark:text-zinc-100">
                                            {{$warranty->managerUser->name}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            
            <!-- Footer Start -->
            @include('adminLayout.footer')
            <!-- end Footer -->
        </div>
    </div>
</div>










