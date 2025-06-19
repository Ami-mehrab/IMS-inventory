@extends('backend.master')

@section('content')
<div class="container-fluid">
    <div class="row">


        <!-- Main content area -->
        <div class="col-md-10 offset-md-1 mt-4">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
                    <h4 class="mb-5 ">Category List</h4>
                    <a class="btn btn-light btn-sm " href="{{ route('cat.create') }}">Create Category</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">


                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cat as $cats)
                        
                                <tr>
                                    <td>{{$cats->id}}</td>
                                    <td>{{$cats->name}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-warning" href="">Edit</a>
                                        <a class="btn btn-sm btn-danger" href="{{route('cat.delete', $cats->id)}}"
                                           onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
                                    </td>
                                </tr>
                           
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
