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
                    <h3>Category
                        <a href="{{url('admin/dashboard')}}"><button class="btn btn-outline-secondary mx-2 float-end">Back</button></a>
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
                                    <td>{{$value['id']}}</td>
                                    <td>{{$value['name']}}</td>
                                    <td>{{$value['description']}}</td>
                                    <td><img src="{{asset('uploads/category/'.$value['image'])}}" style="width: 70px;height: 70px;" alt="No Image Found"></td>
                                    <td>{{$value['status'] === 0 ? 'Visible' : 'Hidden'}}</td>
                                    <td>
                                        <a href="{{url('admin/category/'.$value['id'].'/edit')}}"><button class="btn btn-outline-warning m-1"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                        <a href="{{url('admin/category/'.$value['id'].'/delete')}}"><button class="btn btn-outline-danger m-1" onclick="return confirm('Are you sure..!')"><i class="fa-solid fa-trash"></i></button></a>
                                    </td>
                                </tr>

                                @empty
                                        <tr>
                                            <td class="text-small text-danger text-center" colspan="6">No Data Found</td>
                                        </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="mt-2">{{ $category->links() }}</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
