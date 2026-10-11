@extends(' layout admin.master')
@section('title')
add category
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
        <h1>Add Category</h1>
    </section>
    @if (Session::has("status"))
        <br>
        <div class="alert alert-success">
            {{Session::get('status')}}
        
    </div>
    @endif
   
    <section class="content">
        <form action="{{url('admin/saveCategory')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="categoryName">Category Name</label>
                <input type="text" class="form-control" id="categoryName" name="categoryName" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </section>
</div>
    <!-- /.content -->
    @endsection 