<?php

echo $ProductName = $_POST['ProductName'];
echo $ProductDescription = $_POST['ProductDescription'];
echo $ProductPrice = $_POST['ProductPrice'];
echo $ProductRating = $_POST['ProductRating'];

include('config.php');

mysqli_query($con,"INSERT INTO `product` (`ProductID`,`ProductName`,`ProductDescription`,`ProductPrice`,`ProductRating`) VALUES (NULL,'$ProductName','$ProductDescription','$ProductPrice','$ProductRating')");

echo "<script language = 'javascript'>";
echo 'location="../index.php"';
echo "</script>";

?>