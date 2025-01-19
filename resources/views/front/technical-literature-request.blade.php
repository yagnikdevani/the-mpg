@extends('frontLayout.app')
<div class="main-content">
    <div class="page-content dark:bg-zinc-700">
        
        <div class="container-fluid px-[0.625rem]">

            <div class="grid grid-cols-1 mb-5">
                <div class="flex items-center justify-between">
                    <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Technical Literature Request</h4>
                    
                </div>
            </div>
            

            <div class="grid grid-cols-1">
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    {{-- <div class="card-body pb-0">
                        <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Textual inputs</h6>
                    </div> --}} 
                    <div class="card-body">
                        <form action="{{route('front.technical-literature-submit')}}" id="technical-literature-form" method="post">
                            @csrf
                            <div class="grid grid-cols-12 gap-5">

                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Select Product</label>
                                        <select class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100" name="select_product" id="select-product">
                                            <option value="">Select Product</option>
                                            @foreach ($products as $product)
                                                <option value="{{$product->id}}">{{$product->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('select_product') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>

                                <!-- Product Serial No. -->
                                <div class="col-span-10 lg:col-span-4">
                                    <div class="mb-4">

                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Product Serial No.</label>
                                        <div class="w-full relative inline-block">
                                            
                                            <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" name="product_serial" type="text" placeholder="Product Serial No." id="product-serial">
                                            
                                        </div>
                                        <button class="py-3.5 px-3.5 text-white bg-violet-500 inline-block absolute ltr:right-1 rounded shadow shadow-violet-100 dark:shadow-gray-900 rtl:left-1 rtl:right-auto" id="get-data" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                                        
                                    </div>
                                    @error('product_serial') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
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
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Company Name</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" name="company_name" type="text" placeholder="Company Name" id="company-name">
                                        @error('customer_name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                        
                                
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Email</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" name="email" type="email" placeholder="Email" id="email">
                                        @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                        
                                
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Contact No.</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" name="contact_no" type="text" placeholder="Contact No" id="contact-no">
                                        @error('contact_no') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                        
                                <!-- PassKey -->
                                <!-- Country -->
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="mb-3">
                                        <label class="block font-medium text-gray-700 dark:text-zinc-100 mb-2">Country</label>
                                        <select class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100" name="country" id="country" data-trigger>
                                            <option value="">Select Country</option>
                                            
                                            @foreach ($countries as $key => $country)
                                                <option value="{{$key}}">{{$country}}</option>
                                            @endforeach
                                            
                                        </select>
                                        @error('country') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                    <div class="mb-3">
                                        <label class="block font-medium text-gray-700 dark:text-zinc-100 mb-2">State</label>
                                        <select class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100" name="state" id="state" data-trigger>
                                            <option value="">Select State</option>
                                        </select>
                                        @error('state') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>

                                <!-- City -->
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="mb-4">
                                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">City</label>
                                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" name="city" type="text" placeholder="City" id="city">
                                        @error('city') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
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
            
            @include('frontLayout.footer')
        </div>
    </div>
</div>


@push('script')

<!-- init js -->
<script src="{{env_asset('assets/js/pages/form-advanced.init.js')}}"></script>
<script>
    $(document).ready(function () {

        function setSelected(choiceInstance, value, label) {
            // Set the selected country dynamically
            choiceInstance.setChoices(
                [
                    {
                        value: value,
                        label: label,
                        selected: true,
                    },
                ],
                "value",
                "label",
                false // Reset Choices.js list before adding new items
            );

            // Trigger the change event on the underlying select element
            
        }

      

        const countryChoice = new Choices('#country', { removeItemButton: true });
        const stateChoice = new Choices('#state', { removeItemButton: true });

        $('#country').on('change', function () {
            const countryId = $(this).val();

            // Clear existing state options
            stateChoice.clearStore();
            stateChoice.setChoices([{ value: '', label: 'Select State', selected: true }], 'value', 'label');

            if (countryId) {
                // Fetch states using AJAX
                $.ajax({
                    url: `get-states?country_id=${countryId}`,
                    method: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        const stateOptions = data.map(state => ({
                            value: state.id,
                            label: state.name
                        }));
                        stateChoice.setChoices(stateOptions, 'value', 'label');
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching states:', error);
                    }
                });
            }
        });

        $('#technical-literature-form').on('submit', function (e) {
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
                        $('#technical-literature-form')[0].reset();
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
                    console.log(data);
                    $("#select-product").val(data.product_id);
                    $("#machine-serial").val(data.machine_serial);
                    //$("#company-name").val(data.customer_name);
                    $("#city").val(data.city);
                    $("#state").val(data.state.id);
                    
                    //const countryChoice = new Choices("#country", { searchEnabled: true });
                    //const stateChoice = new Choices("#state", { searchEnabled: true });

                    // Function to set selected value in Choices.js
                    

                     // Predefine the initial country and state
                    const initialCountry = data.country.id; // Preselect country value (e.g., Canada)
                    const initialState = data.state.id; // Preselect state value
                    const initialAllState = data.country.states; // Preselect state value
                    const countryLabel = data.country.name;
                    const stateLabel = data.state.name;

                    // Set initial selected country
                    setSelected(countryChoice, initialCountry, countryLabel);

                    //map state
                    const stateOptions = initialAllState.map(state => ({
                            value: state.id,
                            label: state.name
                        }));
                    stateChoice.setChoices(stateOptions, 'value', 'label');

                    setSelected(stateChoice, initialState, stateLabel);

                    
                    $("#country").val(data.country.id);
                    
                    
                    
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