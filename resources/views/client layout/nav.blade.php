<header>
    <div class="container">
      <nav>
        <a  
           class="brand" href="{{url("/")}}">Fresh Shop</a>
        <div class="nav-links">
           <a class="nav-iten {{request()->is('/') ?'active':''}}" 
            class="nav-link"  href="{{url("/")}}" >accueil</a>

        <a class="nav-iten {{request()->is('boutique') ?'active':''}}" 
           class="nav-link" href="{{url("/boutique")}}">Boutique</a>

          <a  class="nav-iten {{request()->is('panier') ?'active':''}}" 
            class="nav-link" href="{{url("/panier")}}" >Panier</a>

          <a  class="nav-iten {{request()->is('paiement') ?'active':''}}"
             class="nav-link"  href="{{url("/paiement")}}" >Paiement</a>

          <a  class="nav-iten {{request()->is('enregistrer') ?'active':''}}"
             class="nav-link" href="{{url("/enregistrer")}}">enregistrer</a>

           <a  class="nav-iten {{request()->is('sauvegarder') ?'active':''}}"
             class="nav-link" href="{{url("/sauvegarder")}}">sauvegarder</a>
           
        </div>
      </nav>
    </div>
  </header>

  {{--<li class="nav-iten {{request()->is('boutique') ?'active':''}}">--}}