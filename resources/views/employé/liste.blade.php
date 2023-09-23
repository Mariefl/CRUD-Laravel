<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
   <nav class ="navbar navbar-expand-lg bg-primary" style=height:50px>
   
   <div class="container-fluid">
    <a style="color:white; margin-left:50px; font-size:30px" class="navbar-brand"href="/employé">SOCIETY</a>

    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a  style="color:white; margin-left:50px; font-size:20px;" class="nav-link active" aria-current="page" href="/employé">Accueil</a>
        </li>
      </ul>
    </div>
  </div>
   </nav>
   
     <h2 style="margin-left:60px;float:Left;margin-top:49px;" >Liste des Employés</h2>
     <a  class="btn btn-primary" style="margin-right:75px;float:right;margin-top:49px;" href="/ajouter"> Ajouter employés</a> 

   @if(session('message'))
     <div class="alert alert-success">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float:right"></button>
     </div>
   @endif
    
   <table class="table" style="margin-top:100px; width:1400px; margin-left:60px;text-align:center">

   <thead class="table-primary" style="">
    <tr>
      <th >N°</th>
      <th >Nom</th>
      <th >Prenom</th>
      <th >Fonction</th>
      <th >Email</th>
      <th >Numéro</th>
      <th >Actions</th>
    </tr>
  </thead>
     
  <tbody>
      @php 
       $ide = 1;
      @endphp
      @foreach($employés as $employe)
  <tr>
      <th>{{ $ide}}</th>
      <td>{{ $employe->nom }}</td>
      <td>{{ $employe->prenom }}</td>
      <td>{{ $employe->fonction }}</td>
      <td>{{ $employe->email }}</td>
      <td>{{ $employe->numéro }}</td>
      <td>
          <a class="btn btn-primary" href="/modifier-employé/{{ $employe->id }}" type="button" style="display:inline">modifier</a>
          <form action="/supprimer-employé/{{ $employe->id}}" onsubmit="return confirm('Voulez supprimer cet employé?')" type="button" style="margin-left:10px ; display:inline">
           @csrf
            @method('DELETE')
           <button class="btn btn-danger" > supprimer </button>

          </form>
        
      </td> 
    </tr>

        
    @php
         $ide +=1;
        @endphp

       @endforeach
  </tbody>
 
   </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>