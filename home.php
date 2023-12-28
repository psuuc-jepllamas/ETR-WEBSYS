<?php

// Include your existing database connection file
require_once 'dbConnect.php';

if(isset($_POST['submit'])){

$amount = $_POST['donationAmount'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$sql = "INSERT INTO transactions (amount, firstName, lastName)
           VALUES ('$amount', '$firstName', '$lastName')";

$result = mysqli_query($conn, $sql);

}
// // Function to insert data into the database
// function insertDonationData($amount, $firstName, $lastName,$conn) {
//     // Prepare the SQL statement to insert data
//     $sql = "INSERT INTO transactions (amount, firstName, lastName)
//             VALUES ('$amount', '$firstName', '$lastName')";

//     // Execute the query
//     if ($conn->query($sql) === TRUE) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

// // Check if form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     // Retrieve form data
//     $amount = $_GET['donationAmount'];
//     $firstName = $_GET['firstName'];
//     $lastName = $_GET['lastName'];

//     // Call the function to insert data into the database
//     insertDonationData($amount, $firstName, $lastName, $conn);
// }
?>

<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<header>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold text-light" href="#">
                <img src="fundme.png" alt="Logo" width="40" height="34" class="d-inline-block align-text-top "> <i>FundMe</i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="campaign.php">Campaign Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#Footer">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="login.html">
                            <button class="btn btn-info" type="button">Log Out</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<br>


    <div class="container">
        <div class="py-5 text-center">
            <h2>Transaction</h2>
        </div>
        <div class="row">
            <div class="col-md-12 order-md-1">
                <form class="needs-validation" method="POST" action="home.php">
                <div class="mb-3">
                        <label for="donationAmount">Donation Amount</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">&#8369;</span>
                            </div>
                            <input type="number" class="form-control" name="donationAmount" value="15000" required>
                            <div class="invalid-feedback">Please enter the amount you want to donate.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" name="firstName" value="John" required>
                            <div class="invalid-feedback"> Valid first name is required. </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" name="lastName" value="Doe" required>
                            <div class="invalid-feedback"> Valid last name is required. </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Mobile</label>
                        <input type="number" class="form-control" name="mobile" value="639171234567">
                        <div class="invalid-feedback"> Please enter a valid mobile number. </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="johndoe@gmail.com">
                        <div class="invalid-feedback"> Please enter a valid email address. </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" value="1 Main Street" required>
                        <div class="invalid-feedback"> Please enter your address. </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                        <label for="address">City</label>
                        <input type="text" class="form-control" name="city" value="San Jose" required>
                        <div class="invalid-feedback"> Please enter a valid city. </div>
                        </div>
                        <div class="col-md-6 mb-3">
                        <label for="address">State</label>
                        <input type="text" class="form-control" name="state" value="California" required>
                        <div class="invalid-feedback"> Please enter a valid state. </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mb-3">
                        <label for="address">Country</label>
                        <input type="text" class="form-control" name="address" value="USA" required>
                        <div class="invalid-feedback"> Please enter a valid country. </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" name="zip" value="95131" required>
                            <div class="invalid-feedback"> Zip code required. </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-info btn-lg btn-block" name="submit" type="submit">Submit</button>
                    <br>
                    <hr class="mb-4">
                    <button class="btn btn-info btn-lg btn-block"><a href="payment.php" class="text-light">Confirm Donation</a></button>
                </form>
            </div>
        </div>  
    </div>

    <br>

    <footer class="bg-dark text-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 mb-3">
                <h5>FundMe</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About Us</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-4 mb-3">
                <h5>Contact</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">fundMe@gmail.com</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">+63 912 5100 133</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">#20 Washington Urdaneta, States</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-4 mb-0 lead fw-semibold">
                <p>"PSU-FundMe"</p>
            </div>
        </div>
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>&copy; 2023 FundMe, Inc. All rights reserved.</p>
        </div>
    </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<?php 
session_destroy()
?>