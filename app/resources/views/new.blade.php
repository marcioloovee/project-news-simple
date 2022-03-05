<!doctype html>
<html lang="en">
  <head>
    <title>Notícias - {{ $new->title }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif
        }
        body {
            min-height:100vh;
            margin:0;
            position:relative;
        }
        body::after {
            content: '';
            display: block;
            height: 50px; /* Set same as footer's height */
        }

        a, a:hover, a:active {
            color: inherit;
            text-decoration: inherit;
        }
        .card:hover {
            background-color: #f7f7f7;
        }
        .footer {
            background-color: #EEE;
            color: #333;
            font-size: 12px;
            padding: 10px;
            text-align: center;
        }
    </style>
  </head>
  <body>

    <div class="container">
        <div class="jumbotron card card-image" style="background-image: url('https://png.pngtree.com/thumb_back/fw800/back_our/20190628/ourmid/pngtree-white-geometric-origami-background-material-image_281799.jpg');">
            <div class="text-center px-4">
                <div>
                    <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Detalhes da notícia</strong></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="text-right">
                    <a class="btn btn-link" href="javascript:history.back()" role="button"><< voltar</a>
                </div>
            </div>
        </div>

        <div class="card mt-3 mb-3 d-flex">
            <div class="card-body">
                <h4 class="card-title"> {{ $new->title }} <br> <small>{{ $new->subtitle }}</small></h4>
                <hr>
                <p class="card-text d-flex">
                    <img class="img-fluid rounded-top rounded-bottom mr-3 mb-3" src="{{ $new->image }}" alt="{{ $new->title }}" style="vertical-align:middle" height="200" width="300">
                    {{ $new->body }}
                </p>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-6">
                        <div class="text-left">
                            <small>{{ date('d/m/Y H:m', strtotime($new->created_at)) }}</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <small><i>Autor: {{ $new->author }}</i></small>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="container-fluid" style="bottom: 0px; position: absolute;">
        <div class="row">
            <div class="col-12 footer">
                {{ date('Y') }} - Todos os direitos reservados
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
