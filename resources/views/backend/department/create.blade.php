@extends('backend.master')

@section('title', 'Create Dept.')

@section('content')
    <div class="container px-4 ">
        <h3 class="text-center fw-bold text-dark" style="margin-top: 6%" >Add Department</h3>
        <hr class="text-primary">
        <div class="col-8 offset-2 ">
            @if (Session::get('notification'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('notification') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form method="POST" action="{{ route('store') }}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Department Name</label>
                    <input type="text" class="form-control" name="dept_name" id="title" aria-describedby="">
                    @error('dept_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Add Department</button>
            </form>
        </div>
    </div>
    @endsection
