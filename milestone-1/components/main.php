<?php
    require __DIR__ . '/../data/db.php';
?>

<main>
    <div class="disks-container">
        <?php foreach($discs as $key => $value) { ?>
        <div class="disk">
            <div class="disk-card">
                <img src="<?php echo $value['poster'];?>" alt="">
                <div class="disk-desc">    
                    <h2><?php echo $value['title'];?></h2>
                    <p><?php echo $value['author']?></p>
                    <p><?php echo $value['year']?></p>
                </div>
            </div>    
        </div>
        <?php } ?>
    </div>
</main>