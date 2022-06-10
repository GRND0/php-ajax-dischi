<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Milestone 1</title>
</head>

<body>


    <?php include "database.php";  ?>

    <main>
        <div class="wrapper">
            <section class="contenitore-brani">
                <?php foreach ($database as $element) { ?>
                    <div class="contenitore-card">
                        <img src="<?php echo $element["poster"];  ?>" alt="">
                        <h3> <?php echo $element["author"];  ?> </h3>
                        <small><?php echo $element["author"];  ?></small>
                        <small><?php echo $element["year"];  ?> </small>
                    </div>
                <?php  } ?>
            </section>
        </div>
    </main>

    <img src="" alt="">

</body>

</html>