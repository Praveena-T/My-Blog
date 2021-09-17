<?php
include '../../db/conn.php';
include('../include/header.php')
?>
<div class="container-fluid p-5">
    <h3 class="card-title mb-4 text-center">Contact Me</h3>
    <div class="container d-flex justify-content-center">
        <div class="card mb-3 p-2 shadow bg-white rounded" style="max-width:1000px">
            <div class="row g-0">
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title mb-4 text-center">Contact Form</h5>
                        <form action="contact_me.php" method="post">
                            <div class="form-group row mb-2">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Name: </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control field-input" id="name" name="name" minlength="3" required>
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Email: </label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control field-input" id="email" name="email" minlength="11" required>
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Comment: </label>
                                <div class="col-sm-8">
                                    <textarea type="text" class="form-control field-input" rows="5" cols="50" id="comment" name="comment" minlength="3" required></textarea>
                                </div>
                            </div>
                            <p class="card-text mt-3 text-center">
                                <button type="submit" name="submit" id="submit" class="btn btn-rounded button-design text-center">Submit</button>
                                <button type="button" id="click" class="btn text-center">Clik Me</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#click').on('click', function() {
        Swal.fire(
            'The Internet?',
            'That thing is still around?',
            'question'
        )
    })
</script>
<?php
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
include('../include/footer.php')
?>