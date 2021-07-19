<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Sản phẩm!</title>
</head>

<body>
    <div class="container">
        @if($slug == 'ninja-school-online' || $slug == 1)
        <div class="row nso">
            <center>
                <h2 class="my-3 text-danger">Ninja school online</h2>
            </center>
            @foreach($products as $p1)
            <div class="col-3">
                <div class="card mb-3">
                    <img src="{{asset('storage/' . $p1->image)}}" class="card-img-top" alt="ninja-school-online-kizshop">
                    <div class="card-body">
                        <h5 class="card-title">{{$p1->name}}</h5>
                        <p class="card-text">
                            LV: {{$p1->lv}} <br>
                            Server: {{$p1->server->name}} <br>
                            Class: {{$p1->class->name}} <br>
                            Tộc trưởng: <?= ($p1->vip == 1) ? 'Có' : 'Không' ?> <br>
                            Đăng ký: <?= ($p1->signup == 1) ? 'Có sim' : 'Không sim' ?> <br>
                            Giá: {{$p1->price}} <br>
                        </p>
                        <a href="{{route('chi-tiet-san-pham', ['id' => $p1->id])}}" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @elseif($slug == 'ngoc-rong-online' || $slug == 2)
        <div class="row nro">
            <center>
                <h2 class="my-3 text-danger">Ngọc rồng online</h2>
            </center>
            @foreach($products as $p2)
            <div class="col-3">
                <div class="card mb-3">
                    <img src="{{asset('storage/' . $p2->image)}}" class="card-img-top" alt="ninja-school-online-kizshop">
                    <div class="card-body">
                        <h5 class="card-title">{{$p2->name}}</h5>
                        <p class="card-text">
                            Sức mạnh: {{$p2->exp}} <br>
                            Server: {{$p2->server->name}} <br>
                            Hành tinh: {{$p2->class->name}} <br>
                            Bông tai: <?= ($p2->vip == 1) ? 'Có' : 'Không' ?> <br>
                            Đăng ký: <?= ($p2->signup == 1) ? 'Thật' : 'Ảo' ?> <br>
                            Giá: {{$p2->price}} <br>
                        </p>
                        <a href="{{route('chi-tiet-san-pham', ['id' => $p2->id])}}" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @elseif($slug == 'lang-la-phieu-luu-ky' || $slug == 3)
        <div class="row llplk">
            <center>
                <h2 class="my-3 text-danger">Làng lá phiêu lưu ký</h2>
            </center>
            @foreach($products as $p3)
            <div class="col-3">
                <div class="card mb-3">
                    <img src="{{asset('storage/' . $p3->image)}}" class="card-img-top" alt="lang-la-kizshop">
                    <div class="card-body">
                        <h5 class="card-title">{{$p3->name}}</h5>
                        <p class="card-text">
                            LV: {{$p3->lv}} <br>
                            Vũ khí: +{{$p3->weapon}} <br>
                            Server: {{$p3->server->name}} <br>
                            Class: {{$p3->class->name}} <br>
                            Thẻ: <?= ($p3->vip == 1) ? 'Vĩnh viễn' : 'Không/HSD' ?> <br>
                            Rank: {{$p3->rank}} <br>
                            Đăng ký: <?= ($p3->signup == 1) ? 'Có sim' : 'Không sim' ?> <br>
                            Giá: {{$p3->price}} <br>
                        </p>
                        <a href="{{route('chi-tiet-san-pham', ['id' => $p3->id])}}" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="row none">
            Không tồn tại danh mục
        </div>
        @endif
    </div>
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