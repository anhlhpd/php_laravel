<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
</head>

<body>
<h1>Create New Bakery</h1>
    <form action="{{$action}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$bakery -> id}}">
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{$bakery -> name}}">
        </div>
        <div>
            <label>Category</label>
            <select name="categoryId" value="{{$bakery -> categoryId}}">
                <option value="1">Bánh mặn</option>
                <option value="2">Bánh ngọt</option>
                <option value="3">Bánh kem</option>
            </select>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" value="{{$bakery -> price}}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" value="{{$bakery -> description}}">
        </div>
        <div>
            <label>Image</label>
            <input type="text" name="image" value="{{$bakery -> image}}">
        </div>
        <div>
            <label>Detail</label>
            <textarea name="detail" cols="30" rows="10">{{$bakery -> detail}}</textarea>
        </div>
        <div>
            <label>Note</label>
            <input type="text" name="note" value="{{$bakery -> note}}">
        </div>
        <div>
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
</html>