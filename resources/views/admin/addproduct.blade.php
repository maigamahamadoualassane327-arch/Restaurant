@extends(' layout admin.master')
@section('title')
category
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Add Product</h1>
    </section>
    <section class="content">
        <form>
        <label for="product-name">Nom du Produit</label>
        <input type="text" id="product-name" name="product-name" required>

        <label for="product-price">Prix du Produit</label>
        <input type="number" id="product-price" name="product-price" step="0.01" required>

        <label for="product-category">Catégorie du Produit</label>
        <select id="product-category" name="product-category" required>
            <option value="">Sélectionner une catégorie</option>
            <option value="electronics">Électronique</option>
            <option value="clothing">Vêtements</option>
            <option value="furniture">Mobilier</option>
        </select>

        <label for="product-image">Image du Produit</label>
        <input type="file" id="product-image" name="product-image" accept="image/*" required>

        <button type="submit">Enregistrer</button>
    </form>
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
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }
        input[type="text"],
        input[type="number"],
        input[type="file"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
@endsection
