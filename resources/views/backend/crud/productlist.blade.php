@extends('backend.master')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="mb-4"> Product List</h2>
                    <a class="btn btn-primary mb-3" href="{{route('product.create')}}">Create product </a>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product as $products)

                                <tr>
                                    <td>{{$products->id}}</td>
                                    <td>{{$products->name}}</td>
                                    <td>{{$products->price}}</td>
                                    <td>{{$products->quantity}}</td>
                                    <td>{{$products->desc}}</td>
                                    <td><img src="" class=""> </td>
                                    <td>
                                        <a href="{{route('product.delete',$products->id)}}" class="btn btn-info btn-sm">Delete</a>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                </tr>

                            </tbody>
                            @endforeach
                        </table>

                    </div>
                </div> <!-- End col -->
            </div> <!-- End row -->
        </div> <!-- End container-fluid -->
    </div> <!-- End content -->
</div> <!-- End content-page -->
@endsection