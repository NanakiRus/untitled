<?php
$arr = file(__DIR__ . '/../data/data.txt');
?>

<ul>
    <?php foreach ($arr as $item) : ?>
        <li><?php echo $item; ?></li>
    <?php endforeach; ?>
</ul>
