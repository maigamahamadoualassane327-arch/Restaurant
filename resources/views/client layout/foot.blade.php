<footer>
    <div class="container footer-grid">
      <div>
        <h4>Fresh Shop</h4>
        <p>
          Texte dynamique pour présenter votre entreprise. Actualisez ce bloc avec les informations issues de votre base.
        </p>
      </div>
      <div>
        <h4>Liens utiles</h4>
        <ul style="list-style: none; padding: 0; margin: 0;">
          <li><a href="{{url("/boutique")}}">Boutique</a></li>
          <li><a href="{{url("/panier")}}">Panier</a></li>
          <li><a href="{{url("/paiement")}}">Paiement</a></li>
        </ul>
      </div>
      <div>
        <h4>Contact</h4>
        <p data-bind="contact-address">123 Rue du Marché, Paris</p>
        <p>Téléphone : <span data-bind="contact-phone">01 23 45 67 89</span></p>
        <p>Email : <a href="{{url("/mailto:contact@freshshop.fr")}}mailto:contact@freshshop.fr" data-bind="contact-email">contact@freshshop.fr</a></p>
      </div>
    </div>
  </footer>
   
  