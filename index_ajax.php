<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi php-ajax</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>

<body>
    <div id="app">
        <!-- HEAD -->
        <header>
            <div>
                <img src="https://www.geekslab.it/wp-content/uploads/2019/03/logo-spotify.png" class="logo" alt="logo">
            </div>
        </header>
        <!-- MAIN CHE CONTIENE DISCHI -->
        <div class="container_disk">
            <div v-for="item in diskArray" class="disk">
                <img :src="item.poster"/>
                <h3>{{item.title}}</h3>
                <p>{{item.author}}</p>
                <p class="year">{{item.year}}</p>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    
</body>
</html>