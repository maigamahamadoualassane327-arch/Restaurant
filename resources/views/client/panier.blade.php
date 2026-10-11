@extends('client layout.master')
   @section('title')
  panier
  @endsection

@section('contenue')
    <h1>Votre panier</h1>

    <div class="empty-state" data-if="cart-empty">
      <p>Votre panier est vide pour le moment. Parcourez la boutique pour ajouter des produits.</p>
      <a class="btn btn-primary" href="{{url("/boutique")}}">Aller à la boutique</a>
    </div>

    <table data-if="cart-has-items">
      <thead>
        <tr>
          <th>Produit</th>
          <th>Prix unitaire</th>
          <th>Quantité</th>
          <th>Total</th>
          <th></th>
        </tr>
      </thead>
      <tbody data-repeat="cart-items">
        <tr>
          <td>
            <div class="product-cell">
              <div class="product-thumb" data-field="product-initials">FS</div>
              <div>
                <strong data-field="product-name">Nom du produit</strong><br>
                <small data-field="product-meta">Variété / poids</small>
              </div>
            </div>
          </td>
          <td data-field="unit-price">€0,00</td>
          <td>
            <input class="quantity-input" type="number" min="1" value="1" data-field="quantity">
          </td>
          <td data-field="line-total">€0,00</td>
          <td>
            <button type="button" data-action="remove-item" style="background: none; border: none; color: crimson; font-weight: 600; cursor: pointer;">
              Retirer
            </button>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="cart-mobile" data-if="cart-has-items">
      <article class="cart-card" data-repeat="cart-items-mobile">
        <div class="row">
          <strong data-field="product-name">Nom du produit</strong>
          <span data-field="unit-price">€0,00</span>
        </div>
        <div class="row">
          <span>Quantité</span>
          <input class="quantity-input" type="number" min="1" value="1" data-field="quantity">
        </div>
        <div class="row">
          <span>Total</span>
          <strong data-field="line-total">€0,00</strong>
        </div>
        <button type="button" data-action="remove-item" style="background: none; border: none; color: crimson; font-weight: 600; cursor: pointer;">
          Retirer
        </button>
      </article>
    </div>

    <aside class="summary" data-if="cart-has-items">
      <h2>Résumé de commande</h2>
      <div class="summary-row">
        <span>Sous-total</span>
        <span data-field="subtotal">€0,00</span>
      </div>
      <div class="summary-row">
        <span>Livraison</span>
        <span data-field="shipping">À calculer</span>
      </div>
      <div class="summary-row summary-total">
        <span>Total TTC</span>
        <span data-field="grand-total">€0,00</span>
      </div>
      <a class="btn btn-primary" href="{{url("/paiement")}}">Passer au paiement</a>
    </aside>
  @endsection