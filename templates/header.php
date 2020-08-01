<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <title>7DW - Wiki Games</title>
    <style>
      body {background-color: white;}
      h1   {color: blue;}
      p {color: white;}
      .tipekuat    {color: red;}
      .tipehp      {color: yellow;}
      .tipeagil    {color: blue;}
      .detailbtn    {background-color: red; color: white; border: none; height: 25px; padding-top: 0%;}
      .card         {background-color: grey;}
     
      </style>
  </head>

  <body> 
    <nav class="navbar navbar-expand-lg navbar-light"> 
      <div class="collapse navbar-collapse navbar-list margin-top: 0px" id="navbarSupportedContent">
        <a class="navbar-brand" href="#">
          <img class="navbar-img" src="img/logo7dw.jpg">
        </a>
        <form class="form-inline ml-auto">
          <button class="btn btn-sm btn-outline-secondary" type="button"><a class="nav-link height:7px" href= "<?php echo BASE_URL."index.php?page=createhero.php"; ?> "> Add Hero </a></button>
          <button class="btn btn-sm btn-outline-secondary" type="button"><a class="nav-link" href= "<?php echo BASE_URL."index.php?page=createtype.php"; ?>" > Add Type</a></button>
        </form>
      </div> 
    </nav> 
    <div id="content">

      <?php
        $filename = "$page.php";

        if (file_exists($filename)){
          include_once($filename);
        }
        else {
          echo "Maaf, file tidak terdapat di dalam sistem";
        }
      ?>

    </div>

    </body>
</html>