@extends('client layout.master')
@section('title')
accueil
@endsection

@section('contenue')
    
    <section class="hero">
      <div>
        <h1>Des produits frais livrés à votre porte</h1>
        <p>
          Découvrez notre sélection de fruits, légumes, et produits bio sourcés directement auprès des producteurs locaux.
          Insérez ici le contenu dynamique issu de votre base de données pour personnaliser l'expérience client.
        </p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="{{url("/boutique")}}">Découvrir la boutique</a>
          <a class="btn btn-outline" href="{{url("/paiement")}}">Modes de paiement</a>
        </div>
      </div>
      <div>
       
        <img
          src="frontend/img/photoAcc.jpg"
          alt="Illustration Fresh Shop"
          style="width: 80ch; border-radius: 400%; max-height: 520px; object-fit: cover;">
          
      </div>
    </section>

    <section class="features">
      <article class="feature-card">
        <h3>Produits locaux</h3>
        <p data-bind="feature-local">
          Contenu dynamique : ajoutez ici un texte provenant de la base de données pour décrire vos engagements locaux.
        </p>
      </article>
      <article class="feature-card">
        <h3>Livraison rapide</h3>
        <p data-bind="feature-delivery">
          Contenu dynamique : précisez vos délais de livraison et zones desservies depuis votre BDD.
        </p>
      </article>
      <article class="feature-card">
        <h3>Paiement sécurisé</h3>
        <p data-bind="feature-secure">
          Contenu dynamique : mettez en avant les moyens de paiement et la sécurité des transactions.
        </p>
      </article>
    </section>

    <section>
      <div class="section-title">
        <h2>Témoignages clients</h2>
        <p>Affichez automatiquement les avis collectés grâce à votre base de données.</p>
      </div>
      <div class="testimonial-grid">
        <article class="testimonial-card" data-repeat="testimonials">
          <p data-field="testimonial-text">
            “Remplacez ce texte par un avis client récupéré depuis votre base de données.”
          </p>
          <strong data-field="testimonial-author">Nom du client</strong><br>
          <small data-field="testimonial-location">Ville, Pays</small>
        </article>
        <article class="testimonial-card">
          <p>
            “Ajoutez autant de cartes que nécessaire grâce à votre logique serveur ou votre framework préféré.”
          </p>
          <strong>Client(e) fidèle</strong><br>
          <small>Lyon, France</small>
        </article>
        <article class="testimonial-card">
          <p>
            “Utilisez des boucles côté serveur pour générer ces témoignages automatiquement.”
          </p>
          <strong>Client(e) premium</strong><br>
          <small>Marseille, France</small>
        </article>
      </div>
    </section>
          
@endsection

  
 

  