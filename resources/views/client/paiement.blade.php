<@extends('client layout.master')
   @section('title')
  paiement
  @endsection

@section('contenue')

    <h1>Mode de paiement</h1>

    <section class="payment-grid">
      <article class="card">
        <h2>Paiement sécurisé</h2>
        <p>
          Renseignez ici les instructions dynamiques de paiement. Les champs du formulaire peuvent être remplis automatiquement
          à partir des informations clients présentes dans votre base de données.
        </p>
        <span class="badge">SSL 256-bit</span>

        <form action="/paiement" method="post">
          <div class="field">
            <label for="card-name">Nom sur la carte</label>
            <input id="card-name" name="card_name" type="text" placeholder="Ex. Jeanne Martin" data-bind="customer-card-name" required>
          </div>

          <div class="field">
            <label for="card-number">Numéro de carte</label>
            <input id="card-number" name="card_number" type="text" inputmode="numeric" placeholder="XXXX XXXX XXXX XXXX" maxlength="19" required>
          </div>

          <div class="row-2">
            <div class="field">
              <label for="card-expiry">Date d'expiration</label>
              <input id="card-expiry" name="card_expiry" type="text" placeholder="MM/AA" maxlength="5" required>
            </div>
            <div class="field">
              <label for="card-cvv">CVV</label>
              <input id="card-cvv" name="card_cvv" type="password" placeholder="123" maxlength="4" required>
            </div>
          </div>

          <div class="field">
            <label for="billing-address">Adresse de facturation</label>
            <input id="billing-address" name="billing_address" type="text" placeholder="Insérez l'adresse de facturation" data-bind="customer-billing-address" required>
          </div>

          <div class="row-2">
            <div class="field">
              <label for="billing-city">Ville</label>
              <input id="billing-city" name="billing_city" type="text" placeholder="Paris" data-bind="customer-billing-city" required>
            </div>
            <div class="field">
              <label for="billing-zip">Code postal</label>
              <input id="billing-zip" name="billing_zip" type="text" placeholder="75000" data-bind="customer-billing-zip" required>
            </div>
          </div>

          <button class="btn btn-primary" type="submit">Confirmer le paiement</button>
        </form>
      </article>

      <article class="card">
        <h2>Autres méthodes de paiement</h2>
        <p>
          Listez ici les moyens de paiement alternatifs disponibles. Ces éléments peuvent être générés dynamiquement
          depuis votre BDD ou votre CMS headless.
        </p>
        <div class="payment-methods" data-repeat="payment-methods">
          <div class="method" data-field="method-name">Carte bancaire</div>
          <div class="method">Apple Pay</div>
          <div class="method">Google Pay</div>
          <div class="method">PayPal</div>
          <div class="method">Virement SEPA</div>
        </div>
      </article>

      <article class="card">
        <h2>Résumé de commande</h2>
        <p>Affichez ici les informations finales avant validation.</p>
        <ul style="list-style: none; padding: 0; margin: 0;">
          <li style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
            <span>Sous-total</span>
            <strong data-field="subtotal">€0,00</strong>
          </li>
          <li style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
            <span>Livraison</span>
            <strong data-field="shipping">€0,00</strong>
          </li>
          <li style="display: flex; justify-content: space-between; margin-bottom: 1rem;">
            <span>Taxes</span>
            <strong data-field="taxes">€0,00</strong>
          </li>
          <li style="display: flex; justify-content: space-between; font-size: 1.2rem;">
            <span>Total TTC</span>
            <strong data-field="grand-total">€0,00</strong>
          </li>
        </ul>
      </article>
    </section>
  
 @endsection