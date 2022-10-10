
<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Welcome Page</title>
</head>
<body>
<section style="background-color: #eee;">
  <div class="container py-0">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#" style="text-decoration:none; color:darkcyan">Accueil</a></li>
            <li class="breadcrumb-item"><a href="#" style="text-decoration:none; color:darkcyan">Utilisateur</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profil</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="images/avatar.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo $row['name'] ?> </h5>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn"  style="background:darkcyan;">Suivre</button>
              <button type="button" class="btn btn-outline-primary ms-1" >Message</button>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nom Complet</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['name'] ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['email'] ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Code</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['code'] ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mot de passe</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['password'] ?></p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <a href='logout.php' class="btn btn-danger">Logout</a>
      


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
