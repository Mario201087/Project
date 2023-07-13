<?php
include("connect.php");

$name= $_POST['name'];
$password=$_POST['password'];

$sql= mysqli_query($dbc ,"SELECT * FROM users WHERE name='$name' AND password='$password'");

$count=mysqli_num_rows ( $sql );

if($count>0)
{ 
    $row = $sql->fetch_assoc();
    $_SESSION["premissions"]=$row['premissions'];
    header('Location: dashboard.php');
    exit;
}
else
{
    echo '<!doctype html>
          <html lang="en">
            <head>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Bootstrap demo</title>
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
            </head>
            <body style="width: 100vw ;height: 100vh;">
            <section class="container-fluid" style="background-color: #8fc4b7; height: 100vh;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                  <div class="card rounded-3">
                    <div class="card-body p-4 p-md-5">
                      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 ">BŁĄD LOGOWANIA</h3>

                      <div class="row p-1 justify-content-center">
                        <p><a class="link-opacity-70-hover" href="index.php">POWRÓT</a></p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            </body>
          </html>';
}
?>