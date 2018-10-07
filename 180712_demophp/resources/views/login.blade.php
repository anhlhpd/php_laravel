<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width">
    <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        body {
            /*display: -ms-flexbox;*/
            /*display: flex;*/
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div>
        <div class="text-center">
            <form action="/customer/login" method="POST" style="border:1px solid #ccc" class="form-signin">
                {{csrf_field()}}
               <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
                <label for="inputUsername" class="sr-only">Username</label>
                <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>

                <label for="inputPassword" class="sr-only">Password</label>
                <input name="password" type="password" class="form-control" placeholder="Password" required>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </form>
        </div>
    </div>
</body>
</html>
