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
                        <form action="{{route('front.service-request-submit')}}" id="service-request-form" method="post">
                            @csrf
                            <div class="grid grid-cols-12 gap-5">

                                <div class="col-span-12 lg:col-span-4">
                                    <div class="mb-4">
                                        <label for="select-product" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">
                                            Select Product
                                        </label>
                                        <select class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-300 py-2.5 text-sm text-gray-700 focus:border focus:border-violet-500 focus:ring-0 dark:placeholder:text-zinc-100 dark:text-zinc-100" 
                                            name="select_product" 
                                            id="select-product" 
                                            aria-describedby="select-product-error">
                                            <option value="">Select Product</option>
                                            @foreach ($products as $product)
                                                <option value="{{$product->id}}">{{$product->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('select_product') 
                                        <p id="select-product-error" class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            
                                <!-- Product Serial No -->
                                <div class="col-span-10 lg:col-span-4 relative">
                                    <div class="mb-4">
                                        <label for="product-serial" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">
                                            Product Serial No.
                                        </label>
                                        <div class="w-full relative">
                                            <input 
                                                class="w-full rounded border-gray-300 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" 
                                                name="product_serial" 
                                                type="text" 
                                                placeholder="Product Serial No." 
                                                id="product-serial" 
                                                aria-describedby="product-serial-error">
                                            <button 
                                                class="py-2.5 px-2.5 text-white bg-violet-500 absolute top-1 right-1 rounded shadow hover:bg-violet-600 focus:ring focus:ring-violet-200" 
                                                id="get-data" 
                                                type="button">
                                                <i class="bx bx-search-alt align-middle"></i>
                                            </button>
                                        </div>
                                        @error('product_serial') 
                                        <p id="product-serial-error" class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            
                                <!-- Machine Serial No -->
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="mb-4">
                                        <label for="machine-serial" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">
                                            Machine Serial No.
                                        </label>
                                        <input 
                                            class="w-full rounded border-gray-300 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" 
                                            type="text" 
                                            name="machine_serial" 
                                            placeholder="Machine Serial No." 
                                            id="machine-serial" 
                                            aria-describedby="machine-serial-error">
                                        @error('machine_serial') 
                                        <p id="machine-serial-error" class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                        
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Customer Contact Name</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" 
                                            name="customer_name" type="text" placeholder="Customer Contact Name" id="customer-name">
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Customer Contact No</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" 
                                            name="customer_phone" type="text" placeholder="Customer Contact No" id="customer-phone">
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Service Eng. Name</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" 
                                            name="service_eng_name" type="text" placeholder="Service Eng. Name" id="service-eng-name">
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Service Eng. Phone</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" 
                                            name="service_eng_phone" type="text" placeholder="Service Eng. Phone" id="service-eng-phone">
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Complain</label>
                                        <select class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100" 
                                            name="complain" id="complain">
                                            <option value="">Select Complain</option>
                                            @foreach ($complains as $complain)
                                                <option value="{{$complain->id}}">{{$complain->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
    
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Describe Your Issue</label>
    
                                        <textarea class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" 
                                        name="describe_issue" id="describe-issue" cols="30" rows="5"></textarea>
                                        
                                    </div>
                                </div>

                                <div class="form-group lg:col-span-8">
                                    <div class="form-check">
                                        <input type="checkbox" class="rounded align-middle focus:ring-0  focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-400 dark:checked:bg-violet-500" name="terms_condition" id="terms-condition">
                                        <label class="ml-2 font-medium text-gray-700 dark:text-zinc-100" for="terms-condition">I hereby confirm that the information provided is accurate and complete to the best of my knowledge and belief.</label>
                                    </div>
                                </div> 
                        
                                <!-- Submit Button -->
                                <div class="col-span-12 mt-3">
                                    <button type="submit" class="btn bg-violet-500 border-transparent text-white font-medium w-28 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50">Submit</button>
                                </div>
                            </div>
                        </form>
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

@push('script')

<!-- init js -->
{{-- <script src="{{env_asset('assets/js/pages/form-advanced.init.js')}}"></script> --}}
<script>
    $(document).ready(function () {

        $('#service-request-form').on('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission
            
            // Clear any previous errors
            $('.error').remove();

            // AJAX request
            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: $(this).serialize(),
                success: function (response) {
                    Swal.fire({
                        title: 'Success!',
                        text: response.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        // Reset the form after the success alert
                        $('#service-request-form')[0].reset();
                        window.location.href = "{{route('front.registration-and-request')}}";
                    });
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        // Display validation errors
                        const errors = xhr.responseJSON.errors;
                        for (let field in errors) {
                            let errorMessage = errors[field][0]; // Get the first error message
                            if (field === "terms_condition") {
                                $('#terms-condition')
                                    .closest('.form-check')
                                    .append(`<p class="error text-red-500 text-sm mt-1">${errorMessage}</p>`);
                            } else {
                                // Display error messages for other inputs
                                $(`[name="${field}"]`).after(`<p class="error text-red-500 text-sm mt-1">${errorMessage}</p>`);
                            }
                        }
                    } else {
                        alert('An unexpected error occurred.');
                    }
                }
            });
        });

        $("#get-data").on('click',function(){
            const productSerial = $("#product-serial").val();
            const productId = $("#select-product").val();
            $('.error').remove();
            $.ajax({
                url: '{{route("front.get-registration")}}',
                method: 'GET',
                dataType: 'json',
                data: { // Pass the product serial as a parameter
                    product_serial: productSerial,
                    select_product: productId
                },
                success: function (data) {
                    
                    $("#select-product").val(data.product_id);
                    $("#machine-serial").val(data.machine_serial);
                },
                error: function (xhr, status, error) {
                    if (xhr.status === 422) {
                        // Display validation errors
                        const errors = xhr.responseJSON.errors;
                        for (let field in errors) {
                            let errorMessage = errors[field][0]; // Get the first error message
                            $(`[name="${field}"]`).next('.error').remove();
                            $(`[name="${field}"]`).after(`<p class="error text-red-500 text-sm mt-1">${errorMessage}</p>`);
                        }
                    } else {
                        alert('An unexpected error occurred.');
                    }
                }
            });
            
        });
        
    });
</script>

@endpush