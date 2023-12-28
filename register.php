<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <!-- Shortcut icon -->
    <link rel="shortcut icon" href="img/donation-removebg-preview.png"
    type="image/x-icon">

    <!-- CSS link -->
    <link rel="stylesheet" href="login-style.css" />

    <!-- Bootstrap link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
  
<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-size: cover;
      background-repeat: no-repeat;
      background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url("img/pexels-fauxels-3182781.jpg");
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.5) !important;
      backdrop-filter: saturate(200%) blur(5px);
    }

    .btn{
      box-shadow: 3px 5px;
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
      <img src="img/370628981_770102005131583_2516729348802605080_n-removebg-preview.png" alt="" width="500" height="500">
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

<form action="register.php" method="post">
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form action="register.php">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" id="username" name="username" class="form-control" required/>
                <label class="form-label" for="form3Example3">Username</label>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="address" name="address" class="form-control" required/>
                <label class="form-label" for="form3Example3">Address</label>
              </div>

              <label class="form-label" for="form3Example3">Campus</label>
              <div class="form-outline mb-4">
                <select name="campus" id="campus">
                  <option value="Alaminos">Alaminos</option>
                  <option value="Asingan">Asingan</option>
                  <option value="Bayambang">Bayambang</option>
                  <option value="Binmaley">Binmaley</option>
                  <option value="Infanta">Infanta</option>
                  <option value="Lingayen">Lingayen</option>
                  <option value="San Carlos City">San Carlos City</option>
                  <option value="Santa Maria">Santa Maria</option>
                  <option value="Urdaneta City">Urdaneta City</option>
                </select>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="age" name="age" class="form-control" required/>
                <label class="form-label" for="form3Example3">Age</label>
              </div>
              
              <div class="form-outline mb-4">
                <input type="text" id="birthdate" name="birthdate" class="form-control" required/>
                <label class="form-label" for="form3Example3">Birthdate</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control" required/>
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <!-- Submit button -->
              <button type="submit" name="submit" id="submit" class="btn btn-success btn-block mb-4 w-100">
                Create account
              </button>
</form>
<?php
include('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $campus= mysqli_real_escape_string($conn, $_POST['campus']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $checkQuery = "SELECT id FROM users WHERE username = '$username'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        echo "Username already taken. Please choose a different username.";
    } else {
        $insertQuery = "INSERT INTO users (username, address, campus, age, birthdate, password) VALUES ('$username', '$address', '$campus', '$age', '$birthdate','$password')";
        $conn->query($insertQuery);

        echo "Registration successful. You can now <a href='login.php'>login</a>.";
    }
}
?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
