<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/style.css">
    <title>CRUD | Create</title>
</head>
<body>

    <div class="container-fluid">
        <header>
                <div class="row">
                    <div class="col g-0">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="container-fluid">
                        <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="Logo" class="logo"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="/products/create">Criar produto</a></li>
                        </ul>
                        <form class="d-flex search" action="/" method="get">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit"><ion-icon name="search-outline" style="font-size: 20pt;"></ion-icon></button>
                        </form>
                        </div>
                        </div>
                        </nav>{{--navbar nav--}}
                    </div>
                </div>
            </header>{{--cabecalho--}}

            <div class="row">
                <div class="col g-0">
                    <div class="container">
                        <div class="container-create">
                        <h2 class="text-dark text-center">Criar Produto</h2>
                        <hr>

                        <form action="/create" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Escolha uma foto</label>
                                <input name="image" class="form-control" type="file" id="formFile">
                                <br>
                                <label for="exampleFormControlInput1" class="form-label">Nome do produto</label>
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Digite o nome do produto">
                                </div>
                                <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Descrição do produto</label>
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                <br><br>
                                <input type="submit" class="btn btn-dark" value="Criar">
                            </div>
                        </form>

                        </div>{{--container create--}}
                    </div>{{--container--}}
                </div>
            </div>

            <div class="row">
            <div class="col g-0 bg-dark">
                <div class="container">
                    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                        <div class="col-md-4 d-flex align-items-center">
                            <img src="/img/logo.png" alt="logo" style="width: 100px;">
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>{{--container-fluid--}}

<script  type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" > </script>
<script  nomodule  src = "https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js" > </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
