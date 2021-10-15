<?php 
    
include_once __DIR__ . '/db/database.php'; 

?>

<?php foreach ($dischiArray as $dischi); { ?>

    <?php foreach($dischi as $singoloDisco) { ?>
        <p> <?php echo $singoloDisco['title'] ?> </p>
    <?php } ?>
    
<?php } ?>

