@extends(' layout admin.master')
@section('title')
category
@endsection

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>Add Slider</h1>
    </section>
    @if (count($errors)> 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>    
        </div>
        
    @endif

     @if (Session::has("status"))
        <br>
        <div class="alert alert-success">
            {{Session::get('status')}}
        
    </div>
    @endif
    
    <section class="content">
        <form action="{{url('admin/saveslider')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="slidersName">slidersName </label>
                <input type="text" class="form-control" id="slidersName" name="slidersName" required>
                <label for="sliderImage">Slider Image</label>
                <input type="file" class="form-control" id="sliderImage" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </section>
</div>
    <!-- /.content -->

@endsection 