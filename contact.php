<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style2.css">
</head>

<body>
    <div class="container-fluid" style="height: 100vh;">
        <div class="row" style="height:100%">
            <div class="col-2" id="aside">
                <ul>
                    <li><a href="./index.php">Inicio</a></li>
                    <li><a href="./index.php">Productos</a></li>
                    <li><a href="#">Acerca De</a></li>
                    <li><a href="./contact.php">Contacto</a></li>
                </ul>
            </div>
            <div class="col-10" id="content">
                <div class="row" style="display: grid; padding: 10px;">
                    <div class="jumbotron col">
                        <h1 class="display-3">Vidriería Manuel Santander</h1>
                        <p class="lead">+569 ...</p>
                        <hr class="my-2">
                    </div>
                </div>
                <div class="row" style="display: grid; padding: 10px;">
                    <div class="w-75 justify-content-center">
                        <form id="contactForm p-3" class="px-2">
                            <div class="mb-3">
                                <label class="form-label" for="name">Nombre</label>
                                <input class="form-control" id="name" type="text" placeholder="Nombre" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="emailAddress">Email</label>
                                <input class="form-control" id="emailAddress" type="email" placeholder="Email" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="message">Mensaje</label>
                                <textarea class="form-control" id="message" type="text" placeholder="Mensaje" style="height: 10rem;"></textarea>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <footer class="footer">
        <p>Teléfono: +569 86003209 Email: msantanderf16@gmail.com Dirección: Carlos Aguirre Luco 046, Puente Alto</p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>