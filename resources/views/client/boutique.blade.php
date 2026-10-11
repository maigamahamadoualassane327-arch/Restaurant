@extends('client layout.master')
   @section('title')
  boutique
  @endsection

@section('contenue')

    <div class="page-header">
      <h1>Notre boutique</h1>
      <p>
        Injectez ici la liste de vos produits depuis la base de données. Utilisez les attributs <code>data-product-*</code>
        pour faciliter le rendu dynamique.
      </p>
    </div>

    <form class="filters" action="#" method="get">
      <input type="search" name="q" placeholder="Rechercher un produit..." data-filter="search">
      <select name="category" data-filter="category">
        <option value="">Catégorie (toutes)</option>
        <option value="fruits">Fruits</option>
        <option value="legumes">Légumes</option>
        <option value="bio">Bio</option>
      </select>
      <select name="sort" data-filter="sort">
        <option value="featured">Tri : populaires</option>
        <option value="price-asc">Prix croissant</option>
        <option value="price-desc">Prix décroissant</option>
      </select>
    </form>

    <section class="product-grid" data-repeat="products">
      <article class="product-card">
        <div class="product-image" data-field="product-image-placeholder">
          <img
          src="frontend/img/photoBan.jpg"
          alt="Illustration Fresh Shop"
          style="width: 30ch; object-fit: cover;">
        </div>
        <div class="product-body">
          <h2 class="product-title" data-field="product-name">Banane</h2>
          <p class="product-description" data-field="product-description">
            Description provenant de la base de données. Présentez les avantages, l'origine, etc.
          </p>
          <div class="product-footer">
            <span class="product-price" data-field="product-price">€0,00</span>
            <button class="btn btn-primary" type="button" data-action="add-to-cart" data-product-id="ID_PRODUIT">
              Ajouter
            </button>
          </div>
        </div>
      </article>

      <article class="product-card">
        <div class="product-image">Produit bio</div>
        <div class="product-body">
          <h2 class="product-title">Échantillon dynamique</h2>
          <p class="product-description">
            Dupliquez cette carte côté serveur pour chaque produit de votre catalogue.
          </p>
          <div class="product-footer">
            <span class="product-price">€4,90</span>
            <button class="btn btn-primary" type="button">Ajouter</button>
          </div>
        </div>
      </article>

      <article class="product-card">
        <div class="product-image">Panier saison</div>
        <div class="product-body">
          <h2 class="product-title">Panier saisonnier</h2>
          <p class="product-description">
            Utilisez vos données pour afficher les stocks et prix en temps réel.
          </p>
          <div class="product-footer">
            <span class="product-price">€19,90</span>
            <button class="btn btn-primary" type="button">Ajouter</button>
          </div>
        </div>
      </article>
    </section>
  
 @endsection

 