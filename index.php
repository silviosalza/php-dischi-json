<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id="app">
        <div class="wrapper">
            <div class="header">
                <img class="logo" src="./img/Spotify_Logo_CMYK_Green.png" alt="">
            </div>
            <div class="row">
                <div v-for="(disc,index) in dischi" :key="index" class="col-4 d-flex justify-content-center">
                    <div class="card my-5" style="width: 18rem;">
                        <img :src="disc.poster"  class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="card-text">{{disc.title}}</p>
                            <h3>{{disc.author}}</h3>
                            <p>{{disc.year}}</p>
                        </div>
                    </div>
                </div>
            </row>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>