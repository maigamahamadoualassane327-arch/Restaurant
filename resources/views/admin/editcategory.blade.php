@extends(' layout admin.master')
@section('title')
edit category
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Category</h1>
    </section>
    @if (Session::has("status"))
        <br>
        <div class="alert alert-success">
            {{Session::get('status')}}
        
    </div>
    @endif
   
    <section class="content">
        <form action="{{url('admin/updatecategory/'.$category->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="categoryName">Category Name</label>
                <input type="text" class="form-control" id="categoryName" name="categoryName"
                 value="{{$category->category_name}}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </section>
</div>
    <!-- /.content -->
    @endsection 