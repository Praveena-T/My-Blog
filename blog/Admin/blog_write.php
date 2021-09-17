<?php
include '../../db/conn.php';
include('../include/header.php')
?>
<div class="container-fluid px-5 py-2">
    <form method="post" action="blog_write.php">
        <h3 class="card-title mb-2 text-center">My Content</h3>
        <div class="container">
            <div class="container">
                <div class="my-1 p-0">
                    <input type="text" class="title-input border-stylish-color" placeholder="Blog Title" id="title" name="title" style="font-size:20px;" />
                </div>
                <div class="col-lg-12 page-main" id="editor">
                    <div class="new-post">
                        <textarea id="content" name="content" class="" placeholder="Blog Title" style="color:black; background-color: #fff8f5;">
                    </textarea>
                    </div>

                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" name="submit" id="submit" onclick="logHtmlContent()" class="mt-4 btn btn-rounded button-design"><i class="fa fa-plus"></i> Add Post</button>
            <input type="hidden" name="quill-html" id="quill-html">
        </div>
    </form>
</div>
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });
    // When the submit button is clicked, update output
    $('#submit').on('click', () => {
        // Get HTML content
        var html = quill.root.innerHTML;
        // Copy HTML content in hidden form
        $('#quill-html').val(html)
        // Post form
        myForm.submit();
    })
</script>
<?php
$title = $_POST['title'];
$content = $_POST['quill-html'];
$status = "";
$sql = "INSERT INTO blog_content (title, content)
VALUES('$title', '$content')";
if (mysqli_query($con, $sql)) {
    $status = "save";
    echo "<script>
    alert($title.'Add Post');
</script>";
} else {
    $status = "error";
    echo "Error: " . $sql . "<brl>" . $con->error;
}
include('../include/footer.php');
?>