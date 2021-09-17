<?php
include('./conn.php');
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$statusf = "";
//inser data into database
$sql = "INSERT INTO contact(name, email, comment) 
            VALUES('$name', '$email', '$comment')";
if (mysqli_query($con, $sql)) {
    $statusf = "save";
} else {
    $statusf = "error";
    echo "Error: " . $sql . "<br>" . $con->error;
}
//alert message on saving data
//alert when data saved successfully
if ($statusf) {
    echo '<script>

                window.location.href = "../blog/blog_content/contact_me.php";
            </script>';
}
// window.location.href = "../blog/blog_content/contact_me.php";
//alert when data  saving is wrong
else {
    echo '<script>
        alert("New record Not created successfully");
        window.location.href = "../blog/blog_content/contact_me.php";
    </script>';
}
