<?php
// FormInfoClass
class FormInfoClass {
    public $lastName, $firstName, $middleInitial, $age, $contactNo, $email, $address;

    function __construct($data) {
        $this->lastName = $data['lastName'];
        $this->firstName = $data['firstName'];
        $this->middleInitial = $data['middleInitial'];
        $this->age = $data['age'];
        $this->contactNo = $data['contactNo'];
        $this->email = $data['email'];
        $this->address = $data['address'];
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="title">Online Registration Form</div>
        <div class="link"><a href="display2.php">Registered Persons </a> </div>
        <div class="content">    
            <form method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" name="lastName" required></div>
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="firstName" required></div>
                    <div class="input-box">
                        <span class="details">Middle Initial</span>
                        <input type="text" name="middleInitial">
                    </div>
                    <div class="input-box">
                        <span class="details">Age</span>
                        <input type="number" name="age" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Contact No.</span>
                        <input type="text" name="contactNo" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" name="address" required>
                    </div>
                    <div class="input-box">
                    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database Connection
    $conn = new mysqli("localhost", "root", "", "info");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $form = new FormInfoClass($_POST);

    $stmt = $conn->prepare("INSERT INTO registration_info (last_name, first_name, middle_initial, age, contact_no, email, address) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssisss", $form->lastName, $form->firstName, $form->middleInitial, $form->age, $form->contactNo, $form->email, $form->address);

    if ($stmt->execute()) {
        echo "<br><br><h3>Registration successful!</h3>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
                    ?>
                    </div>

                </div>
                <div class="button">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>
    </div>
</body>
</html>