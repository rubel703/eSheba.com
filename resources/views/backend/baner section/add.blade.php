@extends('backend.master')

@section('title', 'Create Banner.')

@section('content')
    <div class="container px-4 ">
        <h3 class="text-center fw-bold text-dark" style="margin-top: 6%" >Add New Banner</h3>
        <hr class="text-primary">
        <div class="col-8 offset-2 ">
            @if (Session::get('notification'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('notification') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form method="POST" action="{{ route('banerSection.store') }}" enctype="multipart/form-data">
                @csrf 
                <div class="mb-3">
                    <label for="title" class="form-label">Title One</label>
                    <input type="text" class="form-control" name="title_one" id="title_one" aria-describedby="">
                    @error('title_one')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title Two</label>
                    <input type="text" class="form-control" name="title_two" id="title_two" aria-describedby="">
                    @error('title_two')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Image</label>
                    <input type="file" id="imgInp" class="form-control" name="image" accept="images/*" aria-describedby=""/>
                    <img src="" id="categoryImage" alt=""/>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="col-md-3 form-label mt-3">Publications status</label>
                    <div class="col-md-9 pt-3">
                        <label><input type="radio" value="1" checked name="status"><span>Published</span></label>
                        <label><input type="radio" value="0" name="status"><span>Unpublished</span></label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Banner</button>
            </form>
        </div>
    </div>
    @endsection
