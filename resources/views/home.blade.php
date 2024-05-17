


@extends('layouts.app')

@section('content')

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Toko online</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <div class="container p-0 mb-4 mt-4 rounded-3 shadow bg-info">
            <!--menu-->

            <nav class="navbar navbar-expand-lg bg-info">
                <div class="container-fluid">
                    <h1 class="navbar-brand">Kantin Jajan</h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-3 mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#Home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="products">Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Makanan">Makanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Minuman">Minuman</a>
                            </li>
                        </ul>
                        <form class="d-flex ms-auto" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>

            <style>
                .navbar-brand {
                    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                    font-size: 2.5em;
                    font-weight: bold;
                    color: #5b7289;
                    margin-right: 30px;
                    transition: transform 0.3s ease;
                }

                .navbar-brand:hover {
                    transform: translateY(-5px);
                }

                .navbar-nav .nav-link {
                    font-size: 1.2em;
                    color: #5b7289;
                    transition: transform 0.3s ease;
                }

                .navbar-nav .nav-link:hover {
                    color: #333;
                    transform: translateY(-3px);
                }
            </style>




            <!--bannerwikrama-->
            <div class="px-0  mb-4">
                <div id="Home">
                    <img src="https://smkwikrama1garut.sch.id/wp-content/uploads/2022/11/IMG_8136-min-1024x575.jpg"
                        height="670" class="w-100" />
                </div>

                <!--Makanan-->
                <h3 class="text-center" id="Makanan">Makanan Kami</h3>
                <div class="text-center w-50 mx-auto fw-light">Silahkan</div>

                <div class="row row-cols-md-3 row-cols-2 gx-5 p-5">
                    <div class="col mb-2">
                        <div class="card">
                            <img src="https://i0.wp.com/www.tokomesin.com/wp-content/uploads/2017/09/Cara-Membuat-Nugget-Ayam-Yang-Praktis-Di-Rumah-tokomesin2.jpg?fit=800%2C534&ssl=1"
                                class="card-img-top">
                            <div class="card-body">
                                <div class align="center">
                                    <p class="card-text">Nugget</p>
                                </div>
                            </div>
                            <div class="card-footer d-md-flex">
                                <a class="btn btn-sm btn-primary d-block btnDetail">Beli</a>
                                <span class="ms-auto text danger fw-bold d-block text-center harga">13.000,00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card">
                            <img src="https://asset.kompas.com/crops/lELGZvUDhfkXiM12iGWDpUPwWkI=/0x94:1080x814/750x500/data/photo/2020/10/07/5f7d91b619ab2.jpg"
                                class="card-img-top">
                            <div class="card-body">
                                <div class align="center">
                                    <p class="card-text">Japanese Food</p>
                                </div>
                            </div>
                            <div class="card-footer d-md-flex">
                                <a class="btn btn-sm btn-primary d-block btnDetail">Beli</a>
                                <span class="ms-auto text danger fw-bold d-block text-center harga">18.000,00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card shadow">
                            <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/11/15080337/jadi-camilan-favorit-ini-kalori-pisang-goreng-yang-perlu-diketahui-halodoc.jpg.webp"
                                class="card-img-top">
                            <div class="card-body">
                                <div class align="center">
                                    <p class="card-text">Pisang Goreng</p>
                                </div>
                            </div>
                            <div class="card-footer d-md-flex">
                                <a class="btn btn-sm btn-primary d-block btnDetail">Beli</a>
                                <span class="ms-auto text danger fw-bold d-block text-center harga">10.000,00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card">
                            <img src="https://img.kurio.network/VYbE04-U3EHekyTf5Ny82V8ytYc=/1200x675/filters:quality(80)/https://kurio-img.kurioapps.com/21/08/09/98ddd8be-bda3-49db-b7b3-3b3d88601bf7.jpe"
                                class="card-img-top">
                            <div class="card-body">
                                <div class align="center">
                                    <p class="card-text">Pisang Goreng</p>
                                </div>
                            </div>
                            <div class="card-footer d-md-flex">
                                <a class="btn btn-sm btn-primary d-block btnDetail">Beli</a>
                                <span class="ms-auto text danger fw-bold d-block text-center harga">3.000,00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card">
                            <img src="https://img-global.cpcdn.com/recipes/f8ed17f8cee0cad2/1200x630cq70/photo.jpg"
                                class="card-img-top">
                            <div class="card-body">
                                <div class align="center">
                                    <p class="card-text">Sosis Bakar</p>
                                </div>
                            </div>
                            <div class="card-footer d-md-flex">
                                <a class="btn btn-sm btn-primary d-block btnDetail">Beli</a>
                                <span class="ms-auto text danger fw-bold d-block text-center harga">7.000,00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card">
                            <img src="https://cdn.idntimes.com/content-images/post/20210525/eho-maki-c9472015a17a4e80a981cea4092fa592-bd60631a1e28fbeb592d774caebfd9a7.jpg"
                                class="card-img-top">
                            <div class="card-body">
                                <div class align="center">
                                    <p class="card-text">Sushi</p>
                                </div>
                            </div>
                            <div class="card-footer d-md-flex">
                                <a class="btn btn-sm btn-primary d-block btnDetail">Beli</a>
                                <span class="ms-auto text danger fw-bold d-block text-center harga">4.000,00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!--tentang wikrama-->

                <div id="Wikramaku" class="px-0 mb-4 text-center">
                    <div class="px-0  mb-4">
                        <h3>Wikramaku</h3>
                        <img src="https://smkwikrama.sch.id/storage/1684465382-post.png" height="670" class="w-100" />
                    </div>
                </div>

                <!--Minuman-->

                <div id="Minuman" class="px-4 py-4 bg-       text-center">
                    <div class="mx-auto w-75">
                        <h3>Minuman</h3>
                        <p class align="center">Silahkan</p>
                    </div>
                </div>
                <div class="row row-cols-md-3 row-cols-2 gx-5 p-5">
                    <div class="col mb-2">
                        <div class="card">
                            <img src="https://cdn.idntimes.com/content-images/post/20190211/pop-es-f7ece6a75647cbeb7524a5b17213421d.jpg"
                                class="card-img-top">
                            <div class="card-body">
                                <div class align="center">
                                    <p class="card-text">Pop Ice</p>
                                </div>
                            </div>
                            <div class="card-footer d-md-flex">
                                <a class="btn btn-sm btn-primary d-block btnDetail">Beli</a>
                                <span class="ms-auto text danger fw-bold d-block text-center harga">5.000,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card" <div class="card">
                            <img src="https://storage.nu.or.id/storage/post/1_1/mid/es-teh-manis-medium_1661054506.webp"
                                class="card-img-top">
                            <div class="card-body">
                                <div class align="center">
                                    <p class="card-text"Es Teh Manis></p>
                                </div>
                            </div>
                            <div class="card-footer d-md-flex">
                                <a class="btn btn-sm btn-primary d-block btnDetail">Beli</a>
                                <span class="ms-auto text danger fw-bold d-block text-center harga">6.000,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card shadow">
                            <img src="https://i.ytimg.com/vi/J9JAY0JwZK4/maxresdefault.jpg" class="card-img-top">
                            <div class="card-body">
                                <div class align="center">
                                    <p class="card-text">Es Sop Buah Cup</p>
                                </div>
                            </div>
                            <div class="card-footer d-md-flex">
                                <a class="btn btn-sm btn-primary d-block btnDetail">Beli</a>
                                <span class="ms-auto text danger fw-bold d-block text-center harga">9.000,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card">
                            <img src="https://awsimages.detik.net.id/community/media/visual/2019/09/20/1a5fe9ba-ffa9-4ada-acd9-f2d913e6b06b.jpeg?w=600&q=90"
                                class="card-img-top">
                            <div class="card-body">
                                <div class align="center">
                                    <p class="card-text">Jus Alpukat+Topping Chocolate</p>
                                </div>
                            </div>
                            <div class="card-footer d-md-flex">
                                <a class="btn btn-sm btn-primary d-block btnDetail">Beli</a>
                                <span class="ms-auto text danger fw-bold d-block text-center harga">15.000,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card">
                            <img src="https://i.ytimg.com/vi/-TpnCZ-fVq0/maxresdefault.jpg" class="card-img-top">
                            <div class="card-body">
                                <div class align="center">
                                    <p class="card-text">Es Jelly Susu Santan</p>
                                </div>
                            </div>
                            <div class="card-footer d-md-flex">
                                <a class="btn btn-sm btn-primary d-block btnDetail">Beli</a>
                                <span class="ms-auto text danger fw-bold d-block text-center harga">7.500,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card">
                            <img src="https://simplyhomecooked.com/wp-content/uploads/2023/04/Brown-sugar-boba-6.jpg"
                                class="card-img-top">
                            <div class="card-body">
                                <div class align="center">
                                    <p class="card-text">Brown Sugar Boba</p>
                                </div>
                            </div>
                            <div class="card-footer d-md-flex">
                                <a class="btn btn-sm btn-primary d-block btnDetail">Beli</a>
                                <span class="ms-auto text danger fw-bold d-block text-center harga">27.000,00</span>
                            </div>
                        </div>
                    </div>
                </div>


                <!--copyright-->
                <div class="text-center p-4 border-top">&copy; 2024 Kantin Sederhana</div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
            <script src="javascript/main.js"></script>

    </body>

    </html>



    @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">Aplikasi kasir</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="products">product</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Menu
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Makanan</a></li>
                                                <li><a class="dropdown-item" href="#">Minuman</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">sesuatu yang lain</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search"
                                            aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://wallpapers.com/images/hd/good-background-iegpv34e167xjt5i.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.creativefabrica.com/wp-content/uploads/2023/05/08/Background-Graphics-69189184-1.png"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>
                            <br>
                            <hr>
                            <div class align="center">
                                <p class="fst-italic">{{ __('Tentang Saya') }}</p>
                            </div>
                            <img src="..." class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
