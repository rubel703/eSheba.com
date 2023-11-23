@extends('backend.master')

@section('title', 'Managed Dept.')

@section('content')
    <section class="p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2 ">
                    <div class="card card-header" >
                        <h3 class="text-center fw-bold mb-3">Total Department: {{ $department->count() }}</h3>
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
                                    <th scope="col" class="text-center">Dept. Name</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($department as $dept)
                                    <tr>
                                        <th scope="row">{{ $dept->id }}</th>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $dept->dept_name }}</td>
                                        <td align="center">
                                            <a href="{{ route('edit', $dept->id) }}" class="btn btn-primary">
                                                <i class="fa fa-edit  "></i>
                                            </a>
                                            <a href="{{ route('destroy', $dept->id) }}" class="btn btn-primary">
                                                <i class="fa fa-trash  "></i>
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
