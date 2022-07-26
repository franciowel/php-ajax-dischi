<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi php-ajax</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include __DIR__ . '/database.php'; ?>
    <!-- HEADER -->
    <header>
            <div>
                <img src="https://www.geekslab.it/wp-content/uploads/2019/03/logo-spotify.png" class="logo" alt="logo">
            </div>
    </header>
    <!-- CONTENT CON DISCHI -->
    <div class="container_disk">
        <?php foreach($database as $disk) { ?>
            <div class="disk p-3 text-center">

                <img src=<?php echo $disk['poster']; ?> alt=<?php echo $disk['title']; ?> />
                <h3><?php echo $disk['title']; ?></h3>
                <p><?php echo $disk['author']; ?></p>
                <p class="year"><?php echo $disk['year']; ?></p>

            </div>
        <?php } ?>
    </div>
    
</body>

</html>