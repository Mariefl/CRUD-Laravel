<!doctype html>
<html lang="en" style="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body style="background:#F2F2F2">
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

   <a style="margin-right:50px;margin-top:15px; font-size:17px; float:right"  href="/employé">Retour</a>

  @if(session('message'))
     <div class="alert alert-success">
      {{ session('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float:right"></button>
    </div>
  @endif

  <ul> 
    @foreach($errors->all() as $error)
     <li class="alert alert-danger"> {{ $error }}</li>
    @endforeach
  </ul>

  <form action="/ajouter/traitement" method="POST" style=" margin-top:6%;margin-left:35%; width:400px;border:none; height:550px; border-radius:20px;background:white">
   @csrf

  <div> <h2 style="text-align:center"> Ajouter Employé</h2> <div>
  
 <div class="mb-3" style="margin-top:50px;width:350px; margin-left:25px;">
    <input name="nom" style="border-bottom: 5px solid #CFE2FF;"type="text" class="form-control" placeholder="Nom">
  </div>
  
  <div class="mb-3" style="margin-top:40px;width:350px; margin-left:25px;">
  <input name="prenom" style="border-bottom: 5px solid #CFE2FF;"type="text" class="form-control" placeholder="Prenom">
  </div>
 
  <div class="mb-3" style="margin-top:40px;width:350px; margin-left:25px;">
  <input name="fonction"style="border-bottom: 5px solid #CFE2FF;"type="text" class="form-control" placeholder="Fonction">
  </div>
  
  <div class="mb-3" style="margin-top:40px;width:350px; margin-left:25px;">
  <input name="email" style="border-bottom: 5px solid #CFE2FF;"type="email" class="form-control" placeholder="Email">
  </div>
  
  <div class="mb-3" style="margin-top:40px;width:350px; margin-left:25px;">
  <input name="numéro" style="border-bottom: 5px solid #CFE2FF;"type="tel" min="8" class="form-control" placeholder="Numéro">
  </div>
  
  <button  style="float:right;margin-right:25px" type="submit" class="btn btn-primary">Ajouter</button>
  </form> 





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>