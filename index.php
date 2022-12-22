

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do-list</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <link href="CSS/style.css" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="blue">
            <div class="container pt-5">
                <h1 class="white display-1 text-center mb-4">Todo List</h1>
            
                <ul class="list-group w-50 m-auto mb-4">
                    <li class="list-group-item" v-for="elemento in lista">{{elemento.impegno}}</li>
                </ul>

                <form action="" class="input-group w-50 m-auto">
                    <input type="text" class="form-control" placeholder="Inserisci un elemento" aria-label="Inserisci un elemento" aria-describedby="button-addon2">
                    <button class="btn btn-outline-warning" type="button" id="button-addon2">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="JS/main.js"></script>
</body>
</html>