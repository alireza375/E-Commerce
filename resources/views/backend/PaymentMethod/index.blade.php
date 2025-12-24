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
                            <a href="" class="btn btn-primary rounded-pill waves-effect waves-light">Add Payment Method </a>
                        </ol>
                    </div>
                    <h4 class="page-title">All Payment Method</h4>
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
                                    <th>Name</th>
                                    <th>Types</th>
                                    <th>Clint ID</th>
                                    <th>Client Secret</th>
                                    <th>Mode</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($paymentMethods as $key=> $payment)
                                <tr>
                                    {{-- <td>{{ $key+1 }}</td> --}}
                                    <td>{{ $payment->name }}</td>
                                    <td>{{ $payment->type }}</td>
                                    <td>{{ $payment->config['clientId'] ?? '' }}</td>
                                    <td>{{ $payment->config['clientSecret'] ?? '' }}</td>
                                    <td>{{ $payment->config['mode'] ?? '' }}</td>

                                    <td>
                                        <a href="#"
                                            class="btn btn-blue rounded-pill waves-effect waves-light">Edit</a>

                                        <a href="#"
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
