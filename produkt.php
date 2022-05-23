<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($link,'projekt');
$query = "SELECT * FROM product";
$query_run = mysqli_query($link,$query);
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
  </div>
<br>
<?php while($row = mysqli_fetch_array($query_run)){
  if ($row['id']==1) {?>


 <div class="card">

            <img class="figure" src="<?php echo ($row['picture']); ?>" style="width:100%" />
         <h2> <?php echo $row['name']; ?></h2>
         <p class="price">$ <?php echo $row['price'];?></p>

         </div>
         <br>
    <?php } }?>

    <footer>
<p>Author: Johan Cipi<br>
<a href="mailto:cipijohan@gmail.com">cipijohan@gmail.com</a></p>
</footer>

</body>
</html>
