<?php

 ?>
 <div class="header">
   <h2>Insert Product</h2>
 </div>

<form class="" action="" method="post">
  Name: <input type="text" name="name" value=""><br>
  Description: <input type="text" name="description" value=""><br>
  Picture: <input type="text" name="productpicture" value=""><br>
  Price: <input type="number" name="price" value=""><br>

  <input type="submit" name="submit" value="Submit">

</form>
<?php
$con = mysqli_connect('localhost', 'root', '','projekt');
$txtName = $_POST['name'];
$txtDescription = $_POST['description'];
$filePicture = $_POST['productpicture'];
$numPrice = $_POST['price'];

$sql = "INSERT INTO product (name, description, picture,price)
  VALUES ('$txtName', '$txtDescription', '$filePicture','$numPrice')";
$rs= mysqli_query($con, $sql);
  if($rs)
{
	echo "Produkti u fut me sukses";
}
$con=null;
 ?>
