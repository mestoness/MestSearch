<?php
// google
if (isset($_POST["gonder"])){
  $query=$_POST["query"];

if (strlen($query)<1) {
echo "<script>alert('Boşluk bırakmayınız')</script>";
}
else {

  header("location:https://www.google.com/search?q=$query");

}
}




// yandex
if (isset($_POST["gonder2"])){
$query=$_POST["query"];


if (strlen($query)<1) {
echo "<script>alert('Boşluk bırakmayınız')</script>";
}
else {

header("location:https://yandex.com.tr/search/?text=$query");
}
}





//duckduckgo
if (isset($_POST["gonder3"])){
$query=$_POST["query"];


if (strlen($query)<1) {
echo "<script>alert('Boşluk bırakmayınız')</script>";
}
else {

header("location:https://duckduckgo.com/?q=$query");
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css">
    <title>Search Engine</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="app.css">

  </head>
  <body>
<center>

    <div class="main">
      <h3 class="text-center text-light">MestSearch</h3><hr>
      <form method="post" class="SearchForm">
      <input type="text" name="query" placeholder="Search..."><br>
      <button  name="gonder"><i class="fab fa-google" ></i></button>
      <button  name="gonder2"><i class="fab fa-yandex"></i></button>
      <button  name="gonder3"><img src="icons.png" style="height:30px;width:32px"></button>

    </form>
  </div>
</center>
  </body>
</html>
