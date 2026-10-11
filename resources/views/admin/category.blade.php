@extends(' layout admin.master')
@section('title')
category
@endsection
 
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>Categories</h1>
          <a href="{{url("/admin/addcategory")}}" class="btn btn-primary">Add category</a> 
        
    </section>
    @if (Session::has("status"))
        
        <div class="alert alert-success">
            {{Session::get('status')}}
        
    </div>
    @endif
    <input type="hidden" {{$increment=1}}>
    <section class="content">
        <!-- Code pour afficher les catégories -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Exemple de données -->
                @foreach ($categories as $category)
                    <tr>
                    <td>{{$increment}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>
                    <a href="{{url('admin/editcategory/'.$category->id)}}" class="btn btn-primary">Edit</a>

    
                  <form action="  {{url('admin/deletecategory/'.$category->id)}}"
                        method="POST">
                        @csrf
                        @method("DELETE")
                       <input type="submit" id="delete" class="btn btn-danger" value="delete">
                    </form>
                    </td>
                </tr>
                <input type="hidden" {{$increment++}}>
                @endforeach
            
            </tbody>
        </table>
    </section>
</div>

@endsection 