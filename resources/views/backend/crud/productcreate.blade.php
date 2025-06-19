@extends('backend.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product Form</title>
  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar (optional) -->
    <!-- You may already have a sidebar here; no need to touch this -->

    <!-- Main content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-5">
      <div class="card shadow-sm rounded">
        <div class="card-body">
          <h3 class="mb-4">Add New Product</h3>
          <form action="{{Route('product.store')}}" method="post">
            @csrf


            <div class="mb-3">
              <label for="productName" class="form-label">Product Name</label>
              <input type="text" class="form-control" id="" name="name" required>
            </div>

            <!-- <div class="mb-3">
              <label for="productCategory" class="form-label">Category</label>
              <select class="form-select" id="productCategory" name="category" required>
                <option value="">Select Category</option>
           
              </select>
            </div> -->

            <div class="mb-3">
              <label for="price" class="form-label">Price[BDT]</label>
              <input type="text" class="form-control" id="" name="price" required>
            </div>

            <div class="mb-3">
              <label for="quantity" class="form-label">Quantity</label>
              <input type="text" class="form-control" id="" name="quantity" required>
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" name="desc" rows="4"></textarea>
            </div>
               <!-- <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input class="form-control" id="description" name="image" >
            </div> -->

            <button type="submit" class="btn btn-primary">Save Product</button>
          </form>
        </div>
      </div>
    </main>
  </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
@endsection