<?php
    require('config/config.php'); //for root
    require('config/db.php'); //for connection

    $query = 'SELECT * FROM posts ORDER BY created_at DESC';
    $result = mysqli_query($conn, $query);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($conn);
?>

<?php include('inc/header.php') ?>
    <div class="container">
        <h1>Posts</h1>
        <?php foreach($posts as $post) : ?>
            <div class="card border-secondary mb-3" style="max-width: 20rem;">
                <div class="card-body">
                    <h3>
                        <?php echo $post['title']; ?>
                    </h3>
                    <small>
                        Created on <?php echo $post['created_at']; ?> 
                        by <?php echo $post['author']; ?>
                    </small>
                    <p>
                        <?php echo $post['body']; ?>
                    </p>
                    <a 
                        class="btn btn-secondary" 
                        href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>"
                    >
                        Read More
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php include('inc/footer.php') ?>