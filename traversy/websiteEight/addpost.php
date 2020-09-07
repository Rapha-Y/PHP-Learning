<?php
    require('config/config.php'); //for root
    require('config/db.php'); //for connection

    if (isset($_POST['submit'])) {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

        $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";
        if (mysqli_query($conn, $query)) {
            header('Location: ' . ROOT_URL . '');
        } else {
            echo 'ERROR: ' . mysqli_error($conn);
        }
    }
?>

<?php include('inc/header.php') ?>
    <div class="container">
        <h1>Add Post</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" class="form-control">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
<?php include('inc/footer.php') ?>