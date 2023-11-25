<head>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="js/sweetalert2.all.min.js"></script>
</head>

<?php
include("./koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["username"];
    $fullname = $_POST["fullName"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $nomor = $_POST["noHp"];

    // Validate form data (add more validation as needed)
    // if (empty($username) || empty($fullname) || empty($password) || empty($email) || empty($alamat) || empty($nomor)) {
    //     // Handle validation errors (for example, redirect back to the registration page with an error message)
    //     header("Location: registration.php?error=empty_fields");
    //     exit();
    // }

    // Hash the password (for a more secure approach, consider using bcrypt)
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO user (username, fullName, password, email, alamat, noHp, role) VALUES ('$username', '$fullname', '$password', '$email', '$alamat', '$nomor', 'Guest')";

    if ($conn->query($sql) === TRUE) {
        // Successful registration

        echo '<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>';
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '
        <script type="text/javascript">

            $(document).ready(function(){

            Swal({
                position: "top-end",
                type: "success",
                title: "Your work has been saved",
                showConfirmButton: false,
                timer: 1500
            })
            });

        </script>';
        header("Location: login.php");
        // exit(); // Important: exit after echoing JavaScript to prevent further PHP execution
    } else {
        // Handle registration error
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("Location: regist.php?error=wrong");
    }
}

// Close the database connection
$conn->close();
?>
