@extends(' layout admin.master')
@section('title')
dashboard
@endsection

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>Products</h1>
        <a href="{{url("/admin/addproduct")}}" class="btn btn-primary">Add Product</a>
    </section>
    <section class="content">
        <!-- Contenu des produits -->
        <div class="row">
    <!-- Main Content -->
    <main class="col-md-10 p-4">
      <div class="card shadow-sm">
        <div class="card-header">
          <strong>All Products</strong>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-hover table-striped align-middle">
            <thead class="table-light">
              <tr>
                <th>Num.</th>
                <th>Picture</th>
                <th>Product Name</th>
                <th>Product Category</th>
                <th>Product Price</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><img src="{{asset('https://via.placeholder.com/50')}}" alt="User Image" class="product-img"></td>
                <td>Windows 95+</td>
                <td>Software</td>
                <td>$50</td>
                <td>
                  <button class="btn btn-success btn-sm btn-action">Unactivate</button>
                  <button class="btn btn-primary btn-sm btn-action">Edit</button>
                  <button class="btn btn-danger btn-sm btn-action">Delete</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td><img src="{{asset('https://via.placeholder.com/50')}}" alt="User Image" class="product-img"></td>
                <td>Windows 11</td>
                <td>Operating System</td>
                <td>$120</td>
                <td>
                  <button class="btn btn-warning btn-sm btn-action">Activate</button>
                  <button class="btn btn-primary btn-sm btn-action">Edit</button>
                  <button class="btn btn-danger btn-sm btn-action">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
    </section>
</div>


@endsection 