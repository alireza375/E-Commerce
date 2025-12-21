@extends('teacher.dashboard')
@section('content')

<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body mt-5">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb mt-5">
                                    
                                </ol>
                            </div>
                            <h3 class="page-title text-center">Show Attendence</h3>
                        </div>
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    {{-- <th>Sl</th> --}}
                                    <th>Course Name</th>
                                    <th>Course Code</th>
                                    {{-- <th>Teacher Id</th> --}}
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($attendences as $key => $item)
                                @php
                                $date = App\models\Attendence::where('date', $item->date)->first();
                                @endphp
                                <tr>
                                    <td>{{ $item['course']['course_name'] }}</td>
                                    <td>{{ $item['course']['course_code'] }}</td>
                                    {{-- <td>{{ $item->teacher_id }}</td> --}}
                                    <input type="hidden"
                                        value="{{ Carbon\Carbon::parse($date->date)->format('d-m-Y') }}" name="date[]">
                        
                                    <td>{{ Carbon\Carbon::parse($date->date)->format('d-m-Y') }}</td>
                                    <td>
                                        <a href="{{ route('edit.attendence.teacher', [$date->date, $item['course']['id']]) }}"
                                            class="btn btn-blue rounded-pill waves-effect waves-light">Edit</a>

                                        <a href="{{ route('detail.attendence.teacher', [$date->date, $item['course']['id']]) }}"
                                            class="btn btn-danger rounded-pill waves-effect waves-light">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('teacher') }}" class="w-100 btn btn-success mb-4"> Back to Dashboard </a>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->




    </div> <!-- container -->

</div> <!-- content -->


@endsection