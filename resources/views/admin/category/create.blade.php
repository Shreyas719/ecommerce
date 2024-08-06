@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Category
                    <a href="{{url('category')}}"><button
                            class="btn btn-outline-secondary mx-2 float-end">Back</button></a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{}}" method="post">
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
