<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{asset('../frontend/css/styleAcc.css')}}"/>
  <link rel="stylesheet" href="{{asset('../frontend/css/styleBout.css')}}"/>
  <link rel="stylesheet" href="{{asset('../frontend/css/stylePaie.css')}}"/>
  <link rel="stylesheet" href="{{asset('../frontend/css/stylePanier.css')}}"/>
  <link rel="stylesheet" href="{{asset('../frontend/css/enr.css')}}"/>
    <link rel="stylesheet" href="{{asset('../frontend/css/sauv.css')}}"/>
  
  
  
</head>
<body class="page-home">
  {{-- debut nav--}}
  @include('client layout.nav')
  {{-- fin nav--}}

  <main class="container">
  {{--debut contenue --}}
  @yield('contenue')
    
  {{--debut contenue --}}
  </main>
  
  {{--debut foot --}}
    @include('client layout.foot')
  {{--fin foot --}}

  <script src="{{asset('frontend/js/bout.js')}}"></script> 
  <script src="{{asset('frontend/js/paiement.js')}}"></script>
  <script src="{{asset('frontend/js/panier.js')}}"></script>
  <script src="{{asset('frontend/js/enr.js')}}"></script>
  <script src="{{asset('frontend/js/sauv.js')}}"></script>
  
  

</body>

</html>