<?php
    require('config/config.php'); //for root
    require('config/db.php'); //for connection

    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = 'SELECT * FROM posts WHERE id = ' . $id;
    $result = mysqli_query($conn, $query);
    $post = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
?>

<?php include('inc/header.php') ?>
    <div class="container">
        <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
        <h1>
            <?php echo $post['title']; ?>
        </h1>
        <small>
            Created on <?php echo $post['created_at']; ?> 
            by <?php echo $post['author']; ?>
        </small>
        <p>
            <?php echo $post['body']; ?>
        </p>
    </div>
<?php include('inc/footer.php') ?>