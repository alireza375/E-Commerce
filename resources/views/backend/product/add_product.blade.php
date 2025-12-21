@extends('admin.admin_dashboard')
@section('admin')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="m-0 breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Add Product</a></li>

                            </ol>
                        </div>
                        <h4 class="page-title">Add Product</h4>
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
                                <form id="myForm" method="post" action="{{ route('store.product') }}" enctype="multipart/form-data">
                                    @csrf

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Add Product
                                    </h5>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="firstname" class="form-label">Product Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter Product Name">

                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="firstname" class="form-label">Category </label>
                                                <select name="category_id" class="form-select">
                                                    <option selected disabled>Select Category </option>
                                                    @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach

                                                </select>

                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="firstname" class="form-label">Product Quantity</label>
                                                <input type="number" name="stock" class="form-control"
                                                    placeholder="Enter product Quantity" min="0" step="0.01">

                                            </div>
                                        </div>

                                        {{-- give priduct unit as dropdown in default value --}}


                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="firstname" class="form-label">Product Unit</label>
                                                <select name="unit" class="form-select">
                                                    <option selected disabled>Select Unit </option>
                                                    <option value="kg">Kilogram (kg)</option>
                                                    <option value="g">Gram (g)</option>
                                                    <option value="pcs">Pieces (pcs)</option>
                                                </select>

                                            </div>
                                        </div>




                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="firstname" class="form-label">Buying Price (৳) </label>
                                                <input type="number" step="0.01" min="0" name="buying_price" class="form-control" placeholder="Enter product Buying Price">

                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="firstname" class="form-label">Selling Price (৳)</label>
                                                <input type="number" step="0.01" min="0" name="selling_price" class="form-control" placeholder="Enter product Selling Price">

                                            </div>
                                        </div>


                                      <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="product_details" class="form-label">Product Details</label>
                                            <textarea name="description" class="form-control" rows="3" placeholder="Enter product details"></textarea>
                                        </div>
                                    </div>





                                        <div class="col-md-12">
                                            <div class="mb-3 form-group">
                                                <label for="example-fileinput" class="form-label">Product Image</label>
                                                <input type="file" name="image" id="image"
                                                    class="form-control">

                                            </div>
                                        </div> <!-- end col -->


                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="example-fileinput" class="form-label"> </label>
                                              <img id="showImage" src="{{ url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail" alt="product-image">


                                            </div>
                                        </div> <!-- end col -->


                                        <div class="col-md-2">
                                        <div class="mb-3 form-group">
                                            <label for="status" class="form-label">Status</label>
                                            <select name="status" class="form-select">
                                                <option selected disabled>Select Status </option>
                                                <option value="1">Active
                                                </option>
                                                <option value="0">Inactive
                                                </option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="mt-2 btn btn-success waves-effect waves-light"><i
                                                class="mdi mdi-content-save"></i> Save</button>
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

@endsection
