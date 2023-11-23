@extends('backend.master')

@section('title','view appoinment')

@section('content')
<section class="p-3">
    <div class="container">
        <div class="row" >
            <div class="col-md-12">
                <div class="card card-header" style="margin-top: 8%" >
                    <h3 class="text-center fw-bold mb-3">Total Appoinment: {{ $appoinment->count() }}</h3>
                </div>
                @if (Session::get('notification'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('notification') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card card-body">
                    <div class="col-12">
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">No.</th>
                                <th scope="col" class="text-center">Dept.Name</th>
                                <th scope="col" class="text-center">Doctor Name</th>
                                <th scope="col" class="text-center">Date</th>
                                <th scope="col" class="text-center">Time</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Phone</th>
                                <th scope="col" class="text-center">Message</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($appoinment as $app)
                                <tr>
                                    <th scope="row">{{ $app->id }}</th>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $app->dept_name }}</td>                                
                                    <td class="text-center">{{ $app->doctor_name }}</td>                                
                                    <td class="text-center">{{ $app->date }}</td>                                
                                    <td class="text-center">{{ $app->time }}</td>                                
                                    <td class="text-center">{{ $app->name }}</td>                                
                                    <td class="text-center">{{ $app->phone }}</td>                                
                                    <td class="text-center">{{ $app->message }}</td>                                
                                    <td align="center">
                                        <a href="{{ route('app_delete_message', $app->id) }}" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection