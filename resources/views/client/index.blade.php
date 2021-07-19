<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Trang chủ</title>

    <style>
        .sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            background-color: #fff;
            font-size: 20px;
            z-index: 999999;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-top pt-3">
            <div class="container d-flex justify-content-between">
                <span>HOTLINE: 086-89-83-309</span>
                <span>Language: Tiếng Việt</span>
            </div>
        </div>
    </header>
    <hr>
    <div class="content container">
        <div class="sticky">
            <div class="logo">
                <center><img src="{{asset('storage/img/logo.png')}}" width="200px" alt=""></center>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('trang-chu')}}">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('bai-viet')}}">Bài viết</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Danh mục game
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{route('danh-muc', ['slug' => 'ninja-school-online'])}}">Ninja school</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('danh-muc', ['slug' => 'ngoc-rong-online'])}}">Ngọc rồng</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('danh-muc', ['slug' => 'avatar'])}}">Avatar</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('danh-muc', ['slug' => 'lien-quan-mobile'])}}">Liên quân</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('danh-muc', ['slug' => 'free-fire'])}}">Free fire</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dịch vụ
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{route('dich-vu', ['slug' => 'ban-xu-ninja'])}}">Bán xu Ninja</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('dich-vu', ['slug' => 'ban-luong-ninja'])}}">Bán lượng Ninja</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('dich-vu', ['slug' => 'thue-nhiem-vu-ninja'])}}">Thuê nhiệm vụ Ninja</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('dich-vu', ['slug' => 'ban-vang-ngoc-rong'])}}">Bán vàng Ngọc rồng</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('dich-vu', ['slug' => 'ban-ngoc-ngoc-rong'])}}">Bán ngọc Ngọc rồng</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('dich-vu', ['slug' => 'thue-nhiem-vu-ngoc-rong'])}}">Thuê nhiệm vụ Ngọc rồng</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('lich-su')}}">Lịch sử</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

        <div class="row category">
            <center>
                <h2 class="my-3 text-danger">Danh mục game</h2>
            </center>
            @foreach($categories as $c)
            <div class="col-3">
                <div class="card mb-3">
                    <img src="{{asset('storage/' . $c->image)}}" class="card-img-top" alt="ninja-school-online-kizshop">
                    <div class="card-body">
                        <h5 class="card-title">{{$c->name}}</h5>
                        <p class="card-text">
                            Số lượng tài khoản: {{$c->products->count()}} <br>
                        </p>
                        <a href="{{route('danh-muc', ['slug' => $c->slug])}}" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row service">
            <center>
                <h2 class="my-3 text-danger">Dịch vụ game</h2>
            </center>
            @foreach($services as $s)
            <div class="col-3">
                <div class="card mb-3">
                    <img src="{{asset('storage/' . $s->image)}}" class="card-img-top" alt="ninja-school-online-kizshop">
                    <div class="card-body">
                        <h5 class="card-title">{{$s->name}}</h5>
                        <p class="card-text">
                            Số lượng dịch vụ: 1 <br>
                        </p>
                        <a href="{{route('dich-vu', ['slug' => $s->slug])}}" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- 
        <div class="row nso">
            <center>
                <h2 class="my-3 text-danger">Ninja school online</h2>
            </center>
            @foreach($nso as $n1)
            <div class="col-2">
                <div class="card mb-3">
                    <img src="{{asset('storage/' . $n1->image)}}" class="card-img-top" alt="ninja-school-online-kizshop">
                    <div class="card-body">
                        <h5 class="card-title">{{$n1->name}}</h5>
                        <p class="card-text">
                            LV: {{$n1->lv}} <br>
                            Server: {{$n1->server->name}} <br>
                            Class: {{$n1->class->name}} <br>
                            Tộc trưởng: <?= ($n1->vip == 1) ? 'Có' : 'Không' ?> <br>
                            Đăng ký: <?= ($n1->signup == 1) ? 'Có sim' : 'Không sim' ?> <br>
                            Giá: {{$n1->price}} <br>
                        </p>
                        <a href="{{route('chi-tiet-san-pham', ['id' => $n1->id])}}" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row nro">
            <center>
                <h2 class="my-3 text-danger">Ngọc rồng online</h2>
            </center>
            @foreach($nro as $n2)
            <div class="col-2">
                <div class="card mb-3">
                    <img src="{{asset('storage/' . $n2->image)}}" class="card-img-top" alt="ngoc-rong-online-kizshop">
                    <div class="card-body">
                        <h5 class="card-title">{{$n2->name}}</h5>
                        <p class="card-text">
                            Sức mạnh: {{$n2->exp}} <br>
                            Server: {{$n2->server->name}} <br>
                            Hành tinh: {{$n2->class->name}} <br>
                            Bông tai: <?= ($n2->vip == 1) ? 'Có' : 'Không' ?> <br>
                            Đăng ký: <?= ($n2->signup == 1) ? 'Thật' : 'Ảo' ?> <br>
                            Giá: {{$n2->price}} <br>
                        </p>
                        <a href="{{route('chi-tiet-san-pham', ['id' => $n2->id])}}" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row llplk">
            <center>
                <h2 class="my-3 text-danger">Làng lá phiêu lưu ký</h2>
            </center>
            @foreach($llplk as $l)
            <div class="col-2">
                <div class="card mb-3">
                    <img src="{{asset('storage/' . $l->image)}}" class="card-img-top" alt="lang-la-kizshop">
                    <div class="card-body">
                        <h5 class="card-title">{{$l->name}}</h5>
                        <p class="card-text">
                            LV: {{$l->lv}} <br>
                            Vũ khí: +{{$l->weapon}} <br>
                            Server: {{$l->server->name}} <br>
                            Class: {{$l->class->name}} <br>
                            Thẻ: <?= ($l->vip == 1) ? 'Vĩnh viễn' : 'Không/HSD' ?> <br>
                            Rank: {{$l->rank}} <br>
                            Đăng ký: <?= ($l->signup == 1) ? 'Có sim' : 'Không sim' ?> <br>
                            Giá: {{$l->price}} <br>
                        </p>
                        <a href="{{route('chi-tiet-san-pham', ['id' => $l->id])}}" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div> -->
    </div>

    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {
            myFunction()
        };

        // Get the navbar
        var navbar = document.getElementById("navbar");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>