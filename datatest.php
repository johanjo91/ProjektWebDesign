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
<html>
  <head>
    <title>Katalog thjeshte jastiqesh </title>
<link rel="stylesheet" type="text/css" href="katalog.css">
  </head>
  <body>

  <div class="header">
    <h1>Katalog i thjeshte jastekesh</h1>
    <nav>
            <ul>
              <li><a href="datatest.php" class="actual">Katalog</a></li>
              <li><a href="search.php">Kerko Jasteke</a></li>

              <li><a href="productentry.php">Shto Jastek</a></li>
            </ul>
          </nav>

  </div>

<br>

<?php
        $query="SELECT * FROM product";

        if(!$result=$pdo->query($query))
            echo "Gabim ne ekzekutim";
        else {
          while($row=$result->fetch(PDO::FETCH_BOTH))
          {


       ?>
 <div class="card">

            <img class="figure" src="<?php echo ($row['picture']); ?>" style="width:100%" />
         <h2> <?php echo $row['name']; ?></h2>
         <p class="price">$ <?php echo $row["price"];?></p>

<form class="" action="produkt.php" method="post">
  <input type="text" name="idTest" value="<?php echo $row[0]; ?>" hidden>
  <p> <input type="submit" name="" value="View in details" ></p>
</form>
</div>

         <br>
    <?php }} ?>


    <footer>
<p>Author: Johan Cipi<br>
<a href="mailto:cipijohan@gmail.com">cipijohan@gmail.com</a></p>
</footer>

</body>
</html>
