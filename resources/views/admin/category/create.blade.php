@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if(session('success'))
            <x-alert type="success">
                {{session('success')}}
            </x-alert>
        @elseif(session('error'))
            <x-alert type="error">
                {{session('error')}}
            </x-alert>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Add Category
                    <a href="{{url('admin/dashboard')}}"><button
                            class="btn btn-outline-secondary mx-2 float-end">Back</button></a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="col-md-6 form-group mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control">
                        @error('name')
                            <span class="text-danger text-small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group mb-2">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control">
                        @error('slug')
                            <span class="text-danger text-small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 form-group mb-2">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                        @error('description')
                            <span class="text-danger text-small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group mb-2">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                            <span class="text-danger text-small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="status" class="form-check-label ml-3">Status</label>
                        <input type="checkbox" name="status" id="status" class="form-check-input">
                    </div>
                    <div class="col-md-12 mt-3 mb-3  form-group mb-2">
                        <h4>SEO Tags</h4>
                    </div>
                    <div class="col-md-12 form-group mb-2">
                        <label for="meta_title" class="form-label">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                        @error('meta_title')
                            <span class="text-danger text-small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 form-group mb-2">
                        <label for="meta_keyword" class="form-label">Meta Keyword</label>
                        <textarea name="meta_keyword" id="meta_keyword" class="form-control"></textarea>
                        @error('meta_keyword')
                            <span class="text-danger text-small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 form-group mb-2">
                        <label for="meta_description" class="form-label">Meta Description</label>
                        <textarea name="meta_description" id="meta_description" class="form-control"></textarea>
                        @error('meta_description')
                            <span class="text-danger text-small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 form-group mb-2">
                        <button class="btn btn-primary mt-2 mx-2 float-end" type="submit">Save</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
