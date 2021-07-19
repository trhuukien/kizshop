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
        @if($p->cate_id == 1)
        <div class="row nso">
            <div class="col-3">
                <div class="card mb-3">
                    <img src="{{asset('storage/' . $p->image)}}" class="card-img-top" alt="ninja-school-online-kizshop">
                    <div class="card-body">
                        <h5 class="card-title">{{$p->name}}</h5>
                        <p class="card-text">
                            LV: {{$p->lv}} <br>
                            Server: {{$p->server->name}} <br>
                            Class: {{$p->class->name}} <br>
                            Tộc trưởng: <?= ($p->vip == 1) ? 'Có' : 'Không' ?> <br>
                            Đăng ký: <?= ($p->signup == 1) ? 'Có sim' : 'Không sim' ?> <br>
                            Giá: {{$p->price}} <br>
                        </p>
                        <a href="{{route('chi-tiet-san-pham', ['id' => $p->id])}}" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        @elseif($p->cate_id == 2)
        <div class="col-3">
            <div class="card mb-3">
                <img src="{{asset('storage/' . $p->image)}}" class="card-img-top" alt="ninja-school-online-kizshop">
                <div class="card-body">
                    <h5 class="card-title">{{$p->name}}</h5>
                    <p class="card-text">
                        Sức mạnh: {{$p->exp}} <br>
                        Server: {{$p->server->name}} <br>
                        Hành tinh: {{$p->class->name}} <br>
                        Bông tai: <?= ($p->vip == 1) ? 'Có' : 'Không' ?> <br>
                        Đăng ký: <?= ($p->signup == 1) ? 'Thật' : 'Ảo' ?> <br>
                        Giá: {{$p->price}} <br>
                    </p>
                    <a href="{{route('chi-tiet-san-pham', ['id' => $p->id])}}" class="btn btn-primary">Add to cart</a>
                </div>
            </div>
        </div>
        @elseif($p->cate_id == 3)
        <div class="col-3">
            <div class="card mb-3">
                <img src="{{asset('storage/' . $p->image)}}" class="card-img-top" alt="lang-la-kizshop">
                <div class="card-body">
                    <h5 class="card-title">{{$p->name}}</h5>
                    <p class="card-text">
                        LV: {{$p->lv}} <br>
                        Vũ khí: +{{$p->weapon}} <br>
                        Server: {{$p->server->name}} <br>
                        Class: {{$p->class->name}} <br>
                        Thẻ: <?= ($p->vip == 1) ? 'Vĩnh viễn' : 'Không/HSD' ?> <br>
                        Rank: {{$p->rank}} <br>
                        Đăng ký: <?= ($p->signup == 1) ? 'Có sim' : 'Không sim' ?> <br>
                        Giá: {{$p->price}} <br>
                    </p>
                    <a href="{{route('chi-tiet-san-pham', ['id' => $p->id])}}" class="btn btn-primary">Add to cart</a>
                </div>
            </div>
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