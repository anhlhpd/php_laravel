<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>List Apartment</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <div class="card">
        <nav class="navbar navbar-light bg-light">
            <div class="col-md-3">
                <a class="navbar-brand" href="#"><i class="fab fa-angrycreative fa-4x"></i></a>
                <span class="text-muted">Site Slogan</span>
            </div>
            <div class="col-md-7">
                <form class="row">
                    <div class="col-md-8">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </nav>
        <div class="album py-5 bg-light">
            <div class="container">

                @foreach($apartments as $item)
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" data-src="{{$item->images}}" alt="Card image cap">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        {{$item->name}}
                                    </div>
                                    <p class="card-text">{{$item->overview}}</p>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid mt-3 mb-3">
        <p class="text-center">Copyright @2018 FPT Aptech</p>
    </footer>

</body>
</html>