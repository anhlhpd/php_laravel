<!DOCTYPE html >
<html lang = "en" >
<head >
    <meta charset = "UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
</head >
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="col-md-3">
            <a class="navbar-brand" href="#"><i class="fab fa_angrycreative fa-4x"></i></a>
            <span class="text-muted">Site slogan</span>
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
        <div class="col-md-2 mt-3">
            <img src="https://www.overleaf.com/assets/overleaf_og_logo.png" alt=""
            class="img-thumbnail rounded-circle w-25 mr-2 float-left">
            <div class="mt-3">
                <strong>Admin</strong>
                <a href="#">(Logout)</a>
            </div>
        </div>
    </nav>

    <div class=" container-fluid row mt-2">
        <div class="col-md-2">
            <div class="nav flex-column nav-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link" id="v-pills-profile-tab" href="/admin/bakery/list"
                aria-controls="v-pills-profile" aria-selected="false">Home</a>
                <a class="nav-link" id="v-pills-profile-tab" href="/admin/bakery/list"
                   aria-controls="v-pills-profile" aria-selected="false">Bakery Manager</a>
                <a class="nav-link" id="v-pills-profile-tab" href="/admin/category/list"
                   aria-controls="v-pills-profile" aria-selected="false">Category Manager</a>
                <a class="nav-link" id="v-pills-profile-tab" href="/admin/article/list"
                   aria-controls="v-pills-profile" aria-selected="false">Article Manager</a>
                <a class="nav-link" id="v-pills-profile-tab" href="#v-pills-profile"
                   aria-controls="v-pills-profile" aria-selected="false">Settings</a>
            </div>
        </div>
        <main class="col-md-10">
            @section('content')
            @show
        </main>

    </div>

    <footer class="container-fluid mt-3 mb-3">
        Copyright 2018
    </footer>
</body >
</html >