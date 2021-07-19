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
        div.sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            background-color: #9f5424;
            padding: 50px;
            font-size: 20px;
            z-index: 999999;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sticky">
            <ul class="d-flex justify-content-between">
                <li>
                    <a href="{{route('danh-muc', ['slug' => 'ninja-school-online'])}}">Ninja school</a>
                </li>
                <li>
                    <a href="{{route('danh-muc', ['slug' => 'ngoc-rong-online'])}}">Ngọc rồng</a>
                </li>
                <li>
                    <a href="{{route('danh-muc', ['slug' => 'avatar'])}}">Avatar</a>
                </li>
                <li>
                    <a href="{{route('danh-muc', ['slug' => 'lien-quan-mobile'])}}">Liên quân</a>
                </li>
                <li>
                    <a href="{{route('danh-muc', ['slug' => 'free-fire'])}}">Free fire</a>
                </li>
            </ul>
        </div>

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
        </div>
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