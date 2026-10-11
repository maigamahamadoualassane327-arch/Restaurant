@extends(' layout admin.master')
@section('title')
dashboard
@endsection

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>orders</h1>
       <!-- <a href="addProduct.php" class="btn btn-primary">Add Product</a>-->
    </section>
    <section class="content">
        <!-- Contenu des produits -->
        <div class="row">
    <!-- Main Content -->
   <main class="col-md-10 p-4">

      <div class="card shadow-sm">
        <div class="card-header bg-white">
          <strong>All Orders</strong>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped align-middle">
            <thead class="table-light">
              <tr>
                <th>Date</th>
                <th>Client Name</th>
                <th>Orders</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2024-11-01</td>
                <td>John Doe</td>
                <td>4</td>
                <td>
                  <button class="btn btn-primary btn-sm btn-action">
                    👁 View
                  </button>
                </td>
              </tr>
              <tr>
                <td>2024-11-05</td>
                <td>Jane Smith</td>
                <td>5</td>
                <td>
                  <button class="btn btn-primary btn-sm btn-action">
                    👁 View
                  </button>
                </td>
              </tr>
              <tr>
                <td>2024-12-10</td>
                <td>Michael Brown</td>
                <td>3</td>
                <td>
                  <button class="btn btn-primary btn-sm btn-action">
                    👁 View
                  </button>
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