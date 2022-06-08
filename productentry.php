<?php
  require_once("login.php");

  try{
    $pdo=new PDO($attribute, $user, $password);
    // echo "Lidhja me sukses";
  }
  catch(PDOException $e)
  {
    echo "Gabim i ndohur ne lidhje". $e->getMessage();
  }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Futje Produkti </title>
    <link rel="stylesheet" type="text/css" href="katalog.css">
    <style >

fieldset
{
  width:30%;
  padding:20px;
margin: auto;
}
#left
{
  display:block;

  margin:15px;
  width:70%;
}
    </style>
  </head>
  <body>
    <div class="header">
      <h2>Insert Product</h2>
      <nav>
              <ul>
                <li><a href="datatest.php" >Katalog</a></li>
                <li><a href="search.php">Kerko Jasteke</a></li>

                <li><a href="productentry.php" class="actual">Shto Jastek</a></li>
              </ul>
            </nav>
    </div>
    <br>
<fieldset>
  <form class="" action="" method="post">
     <input type="text" name="name" id="left" value="" placeholder="Emri">
     <input type="text" name="description" id="left" value="" placeholder="Pershrkimi">
     <input type="text" name="productpicture" id="left" value="" placeholder="Vendodhja e figures">
     <input type="number" name="price" id="left" value="" placeholder="Cmimi">
    <input type="submit" name="submit" id="left"  value="Krijo Jastekun e Ri" >
  </form>
</fieldset>



   <?php
   if(isset($_POST["name"])&&isset($_POST["description"])&&isset($_POST["productpicture"])&&isset($_POST["price"])){

   $txtName = $_POST["name"];
   $txtDescription = $_POST['description'];
   $filePicture = $_POST['productpicture'];
   $numPrice = $_POST['price'];
   $sql = "INSERT INTO product (name, description, picture, price)
     VALUES ('$txtName', '$txtDescription', '$filePicture','$numPrice')";

if(!$result=$pdo->query($sql))
{
  echo "errror";
}
else{
  echo "Produkti u fut dhe ka :";
  echo $pdo->lastInsertID();
}


   }?>
    <footer>
<p>Author: Johan Cipi<br>
<a href="mailto:cipijohan@gmail.com">cipijohan@gmail.com</a></p>
</footer>
  </body>
</html>
