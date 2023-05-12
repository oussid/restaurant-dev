<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="{{ asset( "css/fontawesome.min.css")}}" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>atlasty</title>
  <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    nav{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center; 
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        background: #fff;
        z-index: 9;
        padding-inline: 1rem;
    }
    nav .tab{
        text-decoration: none;
        font-size: 1.1rem;
        font-weight: 500;
        color: #C8AF6F;
    }
    nav .section{
        display: flex;
        gap: 1rem;
    }
    .container{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 70vh;;
    }
    .container .section.links{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center; 
        gap: 5rem;
    }
    .container .section.links .link{
        text-decoration: none;
        padding: 1rem;
        background: #C8AF6F;
        border-radius: 3px;
        font-size: 1.1rem;
        font-weight: 500;
        color: #fff;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        transition: all .3s ease-in-out;
    }
    .container .section.links .link:hover{
        transform: translateY(-6px)
    }
    .container .section.links .link:active{
        transition: 0s ;
        transform: translateY(0)
    }

  </style>
</head>
<body>
  
<nav>
    <div class="section">
        <a href="/"><img width="200px" src="images/logo.jpg" alt=""></a>
    </div>
    <div class="section">

    </div>
    <div class="section">
        <a class="tab" href="/">Accueil</a>
        <a class="tab" href="{{route('facture.liste')}}">Factures</a>
        <a class="tab" href="{{route('facture.liste')}}">Créer</a>
    </div>
</nav>

  <div class="container">
    <div class="section links">
        <a class="link" href="{{route('facture.create')}}">Créer une Facture</a>
        <a class="link" href="{{route('facture.liste')}}">Mes Factures</a>
    </div>
  </div>
  

</table>
</body>
</html>