<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>

    </style>
</head>
<body>



    <div class="collapse bg-inverse" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-inverse bg-inverse">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand">Album</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
            <p>
                <a href="#" class="btn btn-primary">Main call to action</a>
                <a href="#" class="btn btn-secondary">Secondary action</a>
            </p>
        </div>
    </section>

    <div class="album text-muted">
        <div class="container">

            <div class="row">

                @foreach($list_obj as $item)
                    <div class="card">
                    <img src="{{$item -> images}}">
                    <p class="card-text">{{$item -> name}}</p>
                        {{--<a href="/admin/bakery/{{$item -> id}}">{{$item -> name}}</a>--}}
                        {{--<img src="{{$item -> images}}" alt="" style="width: 100px; border-radius: 50%">--}}
                        {{--<a href="/admin/bakery/{{$item -> id}}/edit">Edit</a>&nbsp;&nbsp;--}}
                        {{--<span class="btn-delete" id="{{$item-> id}}">Delete With Ajax</span>--}}
                    </div>
                @endforeach

                {{--<div class="card">--}}
                    {{--<img data-src="holder.js/100px280/thumb" alt="Card image cap">--}}
                    {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                {{--</div>--}}
            </div>

        </div>
    </div>





    {{--<h1>List bakery</h1>--}}
    {{--<ul>--}}
        {{--<li>--}}
            {{--<a href="/admin/bakery/create">Create New</a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="/admin/bakery">List</a>--}}
        {{--</li>--}}
    {{--</ul>--}}
    {{--<ul>--}}
        {{--@foreach($bakeries_in_view as $item)--}}
            {{--<li>--}}
                {{--<a href="/admin/bakery/{{$item -> id}}">{{$item -> name}}</a>--}}
                {{--<img src="{{$item -> images}}" alt="" style="width: 100px; border-radius: 50%">--}}
                {{--<a href="/admin/bakery/{{$item -> id}}/edit">Edit</a>&nbsp;&nbsp;--}}
                {{--<span class="btn-delete" id="{{$item-> id}}">Delete With Ajax</span>--}}
            {{--</li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}
    <script>

        var listDeleteButton = document.getElementsByClassName('btn-delete');
        for (var i = 0; i < listDeleteButton.length; i++) {
            listDeleteButton[i].onclick = function () {
                if(confirm('Are you sure ?')){
                    var params = '_token={{csrf_token()}}';
                    var currentId = this.id;
                    var xhttp = new XMLHttpRequest();
                    xhttp.open("DELETE", "/admin/article/" + currentId, true);
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            alert('Delete success!');
                            window.location.reload();
                        }
                    };
                    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhttp.send(params);
                }
            }
        }
    </script>
</body>
</html>