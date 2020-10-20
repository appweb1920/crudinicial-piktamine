<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/a22a55698a.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("#tabla").hide();
  });
  $("#show").click(function(){
    $("#tabla").show();
  });
});
</script>

</head>
<style>
    body{
        background-color: #F8F8FF;
    }
    a{
        color:gray;
    }
    .divform{
        background-color:gray;
    }
</style>

<body>
  <div class="pricing-header px-5 py-3 pt-md-5 pb-md-4 mx-auto text-center">
   <a href="{{ route('r-index') }}">
   <span style="font-size: 80px; color: green;">
   <i class="fas fa-recycle 2"></i>
   </span> 
   <br>
   <h7 id="incio">Inicio</h7>
   </a>
    @yield('seccionbody')
  </div>
</body>
</html>