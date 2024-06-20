<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>

    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="row">
                        <div class="col-md-6" v-for="album in data" :key="album.artist">
                            <div class="card mt-4">
                                <img :src="album.cover" class="card-img-top card-img-custom" alt="Album cover">
                                <div class="card-body">
                                    <h5 class="card-title">{{ album.song }}</h5>
                                    <p class="card-text">Artist: {{ album.artist }}</p>
                                    <span class="card-text">Year: {{ album.year }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./main.js"></script>
</body>

</html>