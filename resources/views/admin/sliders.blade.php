@extends(' layout admin.master')
@section('title')
dashboard
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Sliders</h1>
        <a href="{{url("/admin/addsliders")}}" class="btn btn-primary">Add sliders</a>
    </section>
    <section class="content">
        <!-- Code pour afficher les catégories -->
        <table class="table table-bordered">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Image</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Slide 1</td>
            <td><img src="{{asset('https://via.placeholder.com/100')}}" alt="Image Slider 1"></td>
            <td>Description une du slide 1</td>
            <td>
                <div class="action-buttons">
                    <button class="btn btn-view">Voir</button>
                    <button class="btn btn-edit">Modifier</button>
                    <button class="btn btn-delete">Supprimer</button>
                </div>
            </td>
        </tr>
        <tr>
            <td>Slide 2</td>
            <td><img src="{{asset('https://via.placeholder.com/100')}}" alt="Image Slider 2"></td>
            <td>Description une du slide 2</td>
            <td>
                <div class="action-buttons">
                    <button class="btn btn-view">Voir</button>
                    <button class="btn btn-edit">Modifier</button>
                    <button class="btn btn-delete">Supprimer</button>
                </div>
            </td>
        </tr>
        <tr>
            <td>Slide 3</td>
            <td><img src="{{asset('https://via.placeholder.com/100')}}" alt="Image Slider 3"></td>
            <td>Description une du slide 3</td>
            <td>
                <div class="action-buttons">
                    <button class="btn btn-view">Voir</button>
                    <button class="btn btn-edit">Modifier</button>
                    <button class="btn btn-delete">Supprimer</button>
                </div>
            </td>
        </tr>
    </tbody>
    </table>
    </section>
</div>
@endsection 

@section('styles')
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .action-buttons {
            display: flex;
            gap: 5px;
        }
        .btn {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
        }
        .btn-edit {
            background-color: #28a745;
        }
        .btn-delete {
            background-color: #dc3545;
        }
        .btn-view {
            background-color: #007bff;
        }
    </style>
@endsection