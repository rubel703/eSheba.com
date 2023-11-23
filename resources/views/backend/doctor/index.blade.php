@extends('backend.master')

@section('title', 'Managed Doctors.')

@section('content')
    <section class="p-3">
        <div class="container">
            <div class="row" >
                <div class="col-md-12">
                    <div class="card card-header" style="margin-top: 8%">
                        <h3 class="text-center fw-bold mb-3">Available Doctors: {{ $doctors->count() }}</h3>
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
                                    <th scope="col" class="text-center">Department Name</th>
                                    <th scope="col" class="text-center">Doctor Name</th>
                                    <th scope="col" class="text-center">Designition</th>
                                    <th scope="col" class="text-center">Description</th>
                                    <th scope="col" class="text-center">Phone</th>
                                    <th scope="col" class="text-center">Image</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <th scope="row">{{ $doctor->id }}</th>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $doctor->department->dept_name }}</td>
                                        <td class="text-center">{{ $doctor->name }}</td>
                                        <td class="text-center">{{ $doctor->designition }}</td>
                                        <td class="text-center">{{ $doctor->description }}</td>
                                        <td class="text-center">{{ $doctor->phone }}</td>
                                        <td><img src="{{ $doctor->image }}" alt="" height="50" width="50">
                                        </td>
                                        <td>{{ $doctor->status == 1 ? 'Active' : 'Inactive' }}</td>

                                        <td align="center">
                                            <a href="{{ route('editdoctor', $doctor->id) }}" class="btn btn-primary">
                                                <i class="fa fa-edit  "></i>
                                            </a>
                                            <a href="{{ route('destroydoctor', $doctor->id) }}" class="btn btn-danger">
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
