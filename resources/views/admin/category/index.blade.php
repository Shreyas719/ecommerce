@extends('layouts.admin')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Category
                        <a href="{{url('category')}}"><button class="btn btn-outline-secondary mx-2 float-end">Back</button></a>
                        <a href="{{url('admin/category/create')}}"><button class="btn btn-outline-primary mx-2 float-end">Add Category</button></a>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($category as $value)

                                <tr>
                                    <td></td>
                                </tr>

                                @empty
                                        <tr>
                                            <td class="text-small text-danger text-center" colspan="6">No Data Found</td>
                                        </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
