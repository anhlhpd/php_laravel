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
    <div class="card-body">
        <h3 class="card-title float-left">
            {{__('message.list_product')}}
            <small class="text-muted">{{__('message.show_all_bakery')}}</small>
        </h3>
        <a href="/admin/bakery/create" class="btn float-right"><i class="fas fa-plus-circle"></i> Create new</a>
        <div class="clearfix"></div>
        <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
        <div class="alert alert-danger d-none" role="alert" id="messageError"></div>
            <table class="table table-striped">
                <thead>
                <tr class="row">
                    <th class="col-md-1"></th>
                    <th class="col-md-1">{{__('message.id')}}</th>
                    <th class="col-md-2">{{__('message.thumbnail')}}</th>
                    <th class="col-md-2">{{__('message.name')}}</th>
                    <th class="col-md-2">{{__('message.description')}}</th>
                    <th class="col-md-1">{{__('message.price')}}</th>
                    <th class="col-md-3">{{__('message.action')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($apartments as $item)
                    <tr class="row" id="row-item-{{$item->id}}">
                        <td class="col-md-1 text-center">
                            <input type="checkbox" class="check-item">
                        </td>
                        <td class="col-md-1">{{$item->id}}</td>
                        <td class="col-md-2">
                            <div class="card"
                                 style="background-image: url('{{$item->images}}'); background-size: cover; width: 60px; height: 60px;">
                            </div>
                        </td>
                        <td class="col-md-2">{{$item->name}}</td>
                        <td class="col-md-2">{{$item->description}}</td>
                        <td class="col-md-1">{{$item->price}}</td>
                        <td class="col-md-3">
                            <a href="#" class="btn btn-link btn-quick-edit">Quick Edit</a>&nbsp;&nbsp;
                            <a href="/admin/bakery/edit/{{$item -> id}}" class="btn btn-link btn-edit">Edit</a>&nbsp;&nbsp;
                            <a href="#" id="{{$item-> id}}" class="btn btn-link btn-delete">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-8 form-inline">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="check-all">
                        <label class="form-check-label" for="defaultCheck1">
                            Check all
                        </label>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <select id="select-action" class="form-control">
                            <option selected value="0">--Select action--</option>
                            <option value="1">Delete all checked</option>
                            <option value="2">Another action</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2" id="btn-apply">Apply</button>
                </div>
                <div class="col-md-4">
                    <div class="float-right">
                        {{--{{ $bakeries_in_view ->links() }}--}}
                    </div>
                </div>
            </div>
            <div class="alert alert-info" role="alert">
                Have no bakery, click <a href="/admin/bakery/create">here</a> to create new.
            </div>
    </div>
</div>

</body>
</html>