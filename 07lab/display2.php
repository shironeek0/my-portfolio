<?php
$conn = new mysqli("localhost", "root", "", "info");

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM registration_info";
$result = $conn->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<h4> <a href="07Lab.php">Back to Registration</a></h4>
<!-- idk it still the same as the table the only difference is how you write it -->
<main class="st_viewport">
    
    <div class="st_wrap_table" data-table_id="0">
        <header class="st_table_header">
            <h2>Table header one</h2>
            <div class="st_row">
                <div class="st_column _id">
                    ID
                </div>
                <div class="st_column _lname">
                    Last Name
                </div>
                <div class="st_column _fname">
                    First Name
                </div>
                <div class="st_column _mname">
                    Middle Name
                </div>
                <div class="st_column _age">
                    Age
                </div>
                <div class="st_column _no">
                    Contact No.
                </div>
                <div class="st_column _email">
                    Email
                </div>
                <div class="st_column _address">
                    Address
                </div>
            </div>
        </header>
        <div class="st_table">
            <?php
                if ($result->num_rows > 0):
                while($row = $result->fetch_assoc()):
            ?>
            <div class="st_row">
                <div class="st_column _id">
                    <?=$row['id']?>
                </div>
                <div class="st_column _lname">
                    <?=$row['last_name']?>
                </div>
                <div class="st_column _fname">
                    <?=$row['first_name']?>
                </div>
                <div class="st_column _mname">
                    <?=$row['middle_initial']?>
                </div>
                <div class="st_column _age">
                    <?=$row['age']?>
                </div>
                <div class="st_column _no">
                    <?=$row['contact_no']?>
                </div>
                <div class="st_column _email">
                    <?=$row['email']?>
                </div>
                <div class="st_column _address">
                    <?=$row['address']?>
                </div>
            </div>
            <?php
                endwhile;
                else:
            ?>
            <div class="st_row">
                <div class="st_column" colspan="8">No records found.</div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</main>

</body>
</html>

<!-- <h2>List of Registered Users</h2>
<h4> <a href="07Lab.php">Back to Registration</a></h4>

<table>
    <tr>
        <th>ID</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Middle Initial</th>
        <th>Age</th>
        <th>Contact No.</th>
        <th>Email</th>
        <th>Adress</th>
    </tr>

    

<tr>
    <td colspan="8" style="text-align: center;">No Records Found.</td>
</tr>



<!--$formInfo = new FormInfoClass();

$formInfo->setLastName($_POST['lastName']);
$formInfo->setFirstName($_POST['firstName']);
$formInfo->setMiddleInitial($_POST['middleInitial']);
$formInfo->setAge($_POST['age']);
$formInfo->setContactNo($_POST['contactNo']);
$formInfo->setEmail($_POST['email']);
$formInfo->setAddress($_POST['address']);

echo "<h2>Registered Information</h2>";
echo "Last Name: " . $formInfo->getLastName() . "<br>";
echo "First Name: " . $formInfo->getFirstName() . "<br>";
echo "Middle Initial: " . $formInfo->getMiddleInitial() . "<br>";
echo "Age: " . $formInfo->getAge() . "<br>";
echo "Contact No.: " . $formInfo->getContactNo() . "<br>";
echo "Email: " . $formInfo->getEmail() . "<br>";
echo "Address: " . $formInfo->getAddress() . "<br>"; -->