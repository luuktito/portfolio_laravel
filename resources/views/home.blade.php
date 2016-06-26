@extends('layout')
@section('content')
   <!-- Jumbotron -->
   <div class="jumbotron" id="header">
      <h1>Welkom!</h1>
      <p class="lead">Mijn naam is Luuk Tito, student Informatica, en dit is mijn portfolio.</p>
   </div>

   <!-- Example row of columns -->
   <div class="row">
      <div class="col-lg-4">
         <h2 class="text-center">Wie ben ik</h2>
         <a href="{{ url('about') }}"><img src="img/whoami.png" alt="whoami-thumbnail" class="img-thumbnail"></a>
         <p>Op deze pagina vertel ik een beetje over mezelf. Je vind hier alle informatie over mijn achtergrond, interesses en waarom ik gekozen heb voor de studie Informatica.</p>
         <p class="text-center"><a class="btn btn-primary" href="{{ url('about') }}" role="button">Bekijk details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
         <h2 class="text-center">Curriculum Vitae</h2>
         <a href="{{ url('cv') }}"><img src="img/CV2.png" alt="cv-thumbnail" class="img-thumbnail"></a>
         <p>Op deze pagina kan je mijn cv bekijken. Dit is ook een handig overzicht voor het snel zien van mijn opleidingen, cursussen, werkervaring en persoonlijke informatie.</p>
         <p class="text-center"><a class="btn btn-primary" href="{{ url('cv') }}" role="button">Bekijk details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
         <h2 class="text-center">Projecten</h2>
         <a href="{{ url('project') }}"><img src="img/filmpje2.jpg" alt="filmpje-thumbnail" class="img-thumbnail"></a>
         <p>Tijdens een HBO opleiding maak je af en toe wel is een leuk project. Wanneer het een succes is komt het op deze pagina terecht.</p>
         <p class="text-center"><a class="btn btn-primary" href="{{ url('projects') }}" role="button">Bekijk details &raquo;</a></p>
      </div>
   </div>
@stop