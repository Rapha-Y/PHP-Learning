<?php
    $loggedIn = false;
    echo ($loggedIn ? 'You are logged in' : 'You are not logged in');
    echo '<br>';

    $isRegistered = $loggedIn ? 'true' : 'false';
    echo $isRegistered;
    echo '<br>';

    $age = 20;
    $score = 15;
    echo 
    'Your score is: ' . 
    ($score > 10 ? 
    ($age > 10 ? 'Average' : 'Exceptional') : 
    ($age > 10 ? 'Horrible' : 'Average'));
    echo '<br>';

    $arr = [1, 2, 3, 4];
?>

<div>
    <?php if ($loggedIn) { ?>
        <h1>Welcome user</h1>
    <?php } else { ?>
        <h1>Welcome guest</h1>
    <?php } ?>
</div>

<div>
    <?php if ($loggedIn) : ?>
        <h1>Welcome user</h1>
    <?php else: ?>
        <h1>Welcome guest</h1>
    <?php endif; ?>
</div>

<div>
    <?php foreach ($arr as $val) : ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>

<div>
    <?php for ($i = 0; $i < 4; $i++) : ?>
        <?php echo $i + 1; ?>
    <?php endfor; ?>
</div>