<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Document</title>
</head>
<body>

    <div id="app">
        <section>
            <div class="container py-5">
                <h1>{{title}}</h1>

            </div>
            

            <div class="container py-5">
                <ul class="list-group">
                    <li class="list-group-item" v-for="todo in todos" :key="todo" >
                        {{ todo.text }}
                    </li>
                </ul>
            </div>
        </section>
    </div>



    <script src="./app.js"></script>

</body>
</html>