<?php
    require __DIR__ . '/../data/db.php';
?>

<main>
    <div class="disks-container">
        <?php foreach($discs as $key => $value) { ?>
        <div class="disk">
            <img src="<?php echo $value['poster'];?>" alt="">
            <div class="disk-desc">    
                <h1><?php echo $value['title'];?></h1>
                <p><?php echo $value['author']?></p>
                <p><?php echo $value['year']?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</main>