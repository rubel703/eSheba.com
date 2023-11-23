@extends('backend.master')
@section('title', 'manage banner')
@section('content')
    <section class="p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-header mb-3">
                        <h3 class="text-center fw-bold mb-3">Total Banner Module: {{ $banners->count() }}</h3>
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
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">ID</th>
                                    <th scope="col" class="text-center">No.</th>
                                    <th scope="col" class="text-center">Title one</th>
                                    <th scope="col" class="text-center">Title two</th>
                                    <th scope="col" class="text-center">Image</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($banners as $banner)
                                    <tr>
                                        <th scope="row" class="text-center">{{ $banner->id }}</th>
                                        <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $banner->title_one }}</td>
                                        <td class="text-center">{{ $banner->title_two }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset($banner->image) }}" alt="" height="50"
                                                width="50">
                                        </td>
                                        <td class="text-center">{{ $banner->status == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td align="center">
                                            <a href="{{ route('banerSection.edit', $banner->id) }}" class="btn btn-primary mb-2">
                                                <i class="fa fa-edit  "></i>
                                            </a>
                                            <form action="{{ route('banerSection.destroy', $banner->id) }}"method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure delete this');"><i class="fa fa-trash"></i></button>
                                            </form>
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
