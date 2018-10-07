<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
</head>

<body>
    <h1>List Bakery</h1>
    <ul>
        @foreach($bakeries_in_view as $item)
            <li>
                {{$item -> name}}
                <img src="{{$item -> image}}" alt="" style="width: 100px; border-radius: 50%">
                <a href="/admin/bakery/edit/{{$item -> id}}">Edit</a>
                <a href="/admin/bakery/edit/{{$item -> id}}">Delete</a>
            </li>
        @endforeach
    </ul>
</body>
</html>

// Tại sao cần ajax? Tiện lợi, có thể build single-page application