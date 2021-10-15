<!DOCTYPE html>

<?php 
    
include_once __DIR__ . '/db/database.php'; 

?>

<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
</head>
<body>

    <!-- Main -->
    <section class="main_color_bg">
        <div class="container">

            <?php foreach ($dischiArray as $dischi) { ?>
                <?php foreach ($dischi as $singoloDisco) { ?>
                    <div class="album">
                        <div class="img-container">
                            <img src="<?php echo $singoloDisco['poster'] ?>" alt="<?php echo $singoloDisco['title'] ?>">
                        </div>

                        <h3> <?php echo $singoloDisco['title'] ?> </h3>
                        <h3> <?php echo $singoloDisco['author'] ?> </h3>
                        <h4> <?php echo $singoloDisco['year'] ?> </h4>
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
    </section>
    
</body>
</html>

