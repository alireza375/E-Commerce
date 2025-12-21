@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="m-0 breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Product</a></li>

                            </ol>
                        </div>
                        <h4 class="page-title">Edit Product</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">


                <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">





                            <!-- end timeline content-->

                            <div class="tab-pane" id="settings">
                                {{--  --}}
                                <form id="myForm" method="post" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $product->id }}">

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Edit Product
                                    </h5>

                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="firstname" class="form-label">Product Name</label>
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ $product->name }}">

                                            </div>
                                        </div>

                                        {{-- Product Category --}}
                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="firstname" class="form-label">Category </label>
                                                <select name="category_id" class="form-select" id="example-select">
                                                    <option selected disabled>Select Category </option>
                                                    @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                    @endforeach

                                                </select>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 form-group">
                                            <label for="firstname" class="form-label">Product Stock </label>
                                            <input type="num" name="stock" class="form-control "
                                                value="{{ $product->stock }}">

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3 form-group">
                                            <label for="firstname" class="form-label">Buying Price </label>
                                            <input type="text" name="buying_price" class="form-control "
                                                value="{{ $product->buying_price }}">

                                        </div>
                                    </div>

                                    </div>

                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 form-group">
                                            <label for="firstname" class="form-label">Selling Price </label>
                                            <input type="text" name="selling_price" class="form-control "
                                                value="{{ $product->selling_price }}">

                                        </div>
                                    </div>

                                       <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">Product Unit</label>
                                                <select name="unit" class="form-select">
                                                    <option disabled>Select Unit</option>
                                                    <option value="kg" {{ $product->unit == 'kg' ? 'selected' : '' }}>Kilogram (kg)</option>
                                                    <option value="g" {{ $product->unit == 'g' ? 'selected' : '' }}>Gram (g)</option>
                                                    <option value="pcs" {{ $product->unit == 'pcs' ? 'selected' : '' }}>Pieces (pcs)</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 form-group">
                                            <label for="example-fileinput" class="form-label">Image</label>
                                            <input type="file" name="image" id="image"
                                                class="form-control">

                                        </div>
                                    </div> <!-- end col -->

                                    <div class="col-md-6">
                                        <div class="mb-3 form-group">
                                            <label for="firstname" class="form-label">Product Description </label>
                                            <input type="text" name="description" class="form-control "
                                                value="{{ $product->description }}">

                                        </div>
                                    </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="example-fileinput" class="form-label"> </label>
                                            <img id="showImage" src="{{ asset($product->image) }}"
                                                class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                        </div>
                                    </div> <!-- end col -->

                                    {{-- Status --}}
                                    <div class="col-md-2">
                                        <div class="mb-3 form-group">
                                            <label for="status" class="form-label">Status</label>
                                            <select name="status" class="form-select" id="example-select">
                                                <option selected disabled>Select Status </option>
                                                <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active
                                                </option>
                                                <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactive
                                                </option>

                                            </select>

                                        </div>
                                    </div>

                                </div> <!-- end row -->



                                <div class="text-end">
                                    <button type="submit" class="mt-2 btn btn-success waves-effect waves-light"><i
                                            class="mdi mdi-content-save"></i> Update</button>
                                </div>
                                </form>
                        </div>
                        <!-- end settings content-->


                    </div>
                </div> <!-- end card-->

            </div> <!-- end col -->
        </div>
        <!-- end row-->

    </div> <!-- container -->

    </div> <!-- content -->


    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    product_name: {
                        required: true,
                    },
                    category_id: {
                        required: true,
                    },
                    stock: {
                        required: true,
                    },
                    buying_date: {
                        required: true,
                    },

                    buying_price: {
                        required: true,
                    },
                    selling_price: {
                        required: true,
                    },
                    product_image: {
                        required: true,
                    },
                },
                messages: {
                    product_name: {
                        required: 'Please Enter Product Name',
                    },
                    category_id: {
                        required: 'Please Select Category',
                    },
                    stock: {
                        required: 'Please Enter Product Store',
                    },
                    buying_price: {
                        required: 'Please Enter Buying Price',
                    },
                    selling_price: {
                        required: 'Please Enter Selling Price',
                    },
                    product_image: {
                        required: 'Please Select Product Image',
                    },

                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
