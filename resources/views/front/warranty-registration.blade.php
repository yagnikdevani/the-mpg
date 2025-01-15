@extends('frontLayout.app')
<div class="main-content">
    <div class="page-content dark:bg-zinc-700">
        
        <div class="container-fluid px-[0.625rem]">

            <div class="grid grid-cols-1 mb-5">
                <div class="flex items-center justify-between">
                    <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Warranty Registration</h4>
                    
                </div>
            </div>
            

            <div class="grid grid-cols-1">
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    {{-- <div class="card-body pb-0">
                        <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Textual inputs</h6>
                    </div> --}}
                    <div class="card-body">
                        <form action="{{route('front.warranty-registration-submit')}}" id="warranty-registration-form" method="post">
                            @csrf
                            <div class="grid grid-cols-12 gap-5">

                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Select Product</label>
                                        <select class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100" name="select_product">
                                            <option value="">Select Product</option>
                                            @foreach ($products as $product)
                                                <option value="{{$product->id}}">{{$product->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('product_serial') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>

                                <!-- Product Serial No. -->
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Product Serial No.</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" name="product_serial" placeholder="Product Serial No." id="product-serial">
                                        @error('product_serial') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                        
                                <!-- Machine Serial No. -->
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Machine Serial No.</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" name="machine_serial" placeholder="Machine Serial No." id="machine-serial">
                                        @error('machine_serial') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                        
                                <!-- Customer Name -->
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Customer Name</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" name="customer_name" type="text" placeholder="Customer Name" id="customer-name">
                                        @error('customer_name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>

                                <!-- Country -->
                                
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-3">
                                        <label class="block font-medium text-gray-700 dark:text-zinc-100 mb-2">Country</label>
                                        <select class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100" name="country" id="choices-single-default" data-trigger>
                                            <option value="">Select Country</option>
                                            
                                            @foreach ($countries as $key => $country)
                                                <option value="{{$key}}">{{$country}}</option>
                                            @endforeach
                                            
                                        </select>
                                        @error('country') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                        
                                <!-- City -->
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">City</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" name="city" type="text" placeholder="City" id="city">
                                        @error('city') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                        
                                <!-- PassKey -->
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-2">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">PassKey</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" name="passkey" type="text" placeholder="Passkey" id="passkey">
                                        @error('passkey') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
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
           @include('frontLayout.footer')
        </div>
    </div>
</div>
@push('script')

<!-- init js -->
<script src="assets/js/pages/form-advanced.init.js"></script>

<script>
    $(document).ready(function () {
       
        $('#warranty-registration-form').on('submit', function (e) {
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
                        $('#warranty-registration-form')[0].reset();
                        window.location.href = '/';
                    });
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        // Display validation errors
                        const errors = xhr.responseJSON.errors;
                        for (let field in errors) {
                            let errorMessage = errors[field][0]; // Get the first error message
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