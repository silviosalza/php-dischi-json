<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div v-for="(disc,index) in dischi" :key="index" class="col-4">
                    <div class="card" style="width: 18rem;">
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
</body>
</html>