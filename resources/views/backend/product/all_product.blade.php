@extends('admin.admin_dashboard')
@section('admin')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="m-0 breadcrumb">
                            <a href="{{ route('add.product') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add Product </a>
                        </ol>
                    </div>
                    <h4 class="page-title">All Product</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">


                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Buying Price</th>
                                    <th>Selling Price</th>
                                    <th>Stock</th>
                                    <th>Unit</th>
                                    <th>Description</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $key=> $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td> <img src="{{ asset($item->image) }}" style="width:50px; height: 40px;"> </td>
                                    {{-- <td>{{ $item->name }}</td> --}}
                                    <td>{{ \Illuminate\Support\Str::limit($item->name, 15, '...') }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ $item->buying_price }}</td>
                                    <td>{{ $item->selling_price }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>{{ $item->unit }}</td>
                                    {{-- <td class="">{{ $item->description}}</td> --}}
                                    <td>{{ \Illuminate\Support\Str::limit($item->description, 50, '...') }}</td>

                                    <td>{{ $item->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        {{-- {{ route('edit.category',$item->id) }} --}}
                                        <a href="{{ route('edit.product',$item->id) }}"
                                            class="btn btn-blue rounded-pill waves-effect waves-light">Edit</a>
                                        <a href="{{ route('product.delete',$item->id) }}"
                                            class="btn btn-danger rounded-pill waves-effect waves-light"
                                            id="delete">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->




    </div> <!-- container -->

</div> <!-- content -->


@endsection
