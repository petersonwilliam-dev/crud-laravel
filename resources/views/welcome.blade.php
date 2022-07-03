<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/style.css">
    <title>CRUD</title>
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
                    <input class="form-control me-2" type="search" placeholder="Pesquise" name="search" aria-label="Search">
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
                <div class="intro">
                    <h1 class="text-center text-dark">Crud<ion-icon name="logo-laravel"></ion-icon></h1>
                    <p class="lead text-dark text-center">Projeto de crud de produtos feito com Laravel</p>
                    <hr class="divider-featurette">
                </div>
            </div>
        </div>
    <br><br><br>
        <div class="row">
            <div class="col g-0">
                @if ($search)
                    <h2 class="text-center text-dark">Produtos com: <span style="font-weight: bold;">{{$search}}</span></h2>
                @else
                    <h2 class="text-center text-dark">Lista de produtos</h2>
                @endif



                @if(count($product) > 0)
                <div class="container-products">
                    <div class="row">
                        <div class="col-4"><span style="font-weight: bold; font-size: 16pt;">Nome</span></div>
                        <div class="col-4"><span style="font-weight: bold; font-size: 16pt;">Descrição</span></div>
                    </div>
                    @foreach($product as $products)
                        <div class="row row-product">
                            <div class="col col-product-1"><a class="nav-link" href="/show/{{$products->id}}">{{$products->name}}</a></div>
                            <div class="col col-product-2"><p class="text-dark">{{$products->description}}</a></div>
                            <div class="col col-product-3">
                                <a class="btn btn-primary rounded-circle" style="margin: 10px 15px;" href="/product/edit/{{$products->id}}"><ion-icon style="font-size: 20pt;" name="pencil-outline"></ion-icon></a>

                                <form action="/delete/{{$products->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger rounded-circle" style="margin: 10px 15px;"><ion-icon style="font-size: 20pt;" name="trash-outline"></ion-icon></button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>{{--container products--}}
                @elseif (count($product) == 0 && $search)
                    <h5 class="text-center text-dark">Não há produtos com: {{$search}}, para cadastrar clique <a href="/products/create">aqui</a</h5>
                @else
                    <h5 class="text-center text-dark">Não há produtos cadastrados, para cadastrar clique <a href="/products/create">aqui</a></h3>
                @endif
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
