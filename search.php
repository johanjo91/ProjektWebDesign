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
    <title>Kerkim Produkti ne baze cmimi </title>
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
      <h2>Kerko Produkt</h2>
      <nav>
              <ul>
                <li><a href="datatest.php" >Katalog</a></li>
                <li><a href="search.php" class="actual">Kerko Jasteke</a></li>

                <li><a href="productentry.php">Shto Jastek</a></li>
              </ul>
            </nav>
    </div>
    <br>
<fieldset>
  <form class="" action="" method="post">
     <input type="number" name="vleramin" id="left" value="" placeholder="Vlera minimale e cmimit qe kerkoni">
     <input type="number" name="vleramax" id="left" value="" placeholder="Vlera maximale e cmimit qe kerkoni">
     <input type="submit" name="submit" id="left"  value="Futi vlerat e kerkimit te cmimeve" >
  </form>
</fieldset>



   <?php
   if(isset($_POST["vleramin"])&&isset($_POST["vleramax"])){
     $vleraMin = $_POST["vleramin"];
     $vleraMax = $_POST['vleramax'];
     $query="SELECT * FROM product";

     if(!$result=$pdo->query($query))
         echo "Gabim ne ekzekutim";
     else {
       while($row=$result->fetch(PDO::FETCH_BOTH))
       {
  if (($row["price"]>$vleraMin) && ($row["price"]<$vleraMax)) {



    ?>



<div class="card">

       <img class="figure" src="<?php echo ($row['picture']); ?>" style="width:100%" />
    <h2> <?php echo $row['name']; ?></h2>
    <p class="price">$ <?php echo $row["price"];?></p>

<form class="" action="produkt.php" method="post">
<p> <input type="submit" name="" value="View in details"></p>
</form>
</div>

    <br>
<?php }}}} ?>


    <footer>
<p>Author: Johan Cipi<br>
<a href="mailto:cipijohan@gmail.com">cipijohan@gmail.com</a></p>
</footer>
  </body>
</html>
