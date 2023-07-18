 <?php 
 include("connect.php");

 if 
 (isset($_POST["submit"])) {
   $tmp_name = $_FILES["plik"]["tmp_name"];
   $name = basename($_FILES["plik"]["name"]);
   move_uploaded_file($tmp_name, "uploads/".$name);
 }

mysqli_query($dbc,"INSERT INTO exe(`picture`) VALUES ('$name')");

mysqli_query($dbc,"SELECT picture FROM `exe` WHERE picture='$name'");

echo '<img src="uploads/'.$name.'">';;

?>