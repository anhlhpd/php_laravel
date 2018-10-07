@extends('layouts.master', ['current-page' => 'bakery-list'])
@section('content')
<div class="card">
    <div class="box-header">
        <h3 class="box-title">Danh sách</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th></th>
                <th>ID danh mục</th>
                <th>Tên danh mục</th>
                <th>Mô tả</th>
                <th>Ảnh</th>
                <th>Tình Trạng</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody id="result">
            @foreach($list_obj as $item)
                <tr>
                    <th class="col-md-1 text-center">
                        <input type="checkbox" class="check-item">
                    </th>
                    <th>{{$item->id}}</th>
                    {{--<a href="/admin/article/{{$item -> id}}">{{$item -> name}}</a>--}}
                    <th><a href="/admin/category/{{$item->id}}">{{$item->name}}</a></th>
                    <th>{{$item->description}}</th>
                    <th><img src="{{$item -> images}}" alt="" style="width: 100px; height: 100px; border-radius: 50%"></th>
                    <th>{{$item->status}}</th>
                    <th><a href="/admin/category/{{$item -> id}}/edit">Edit</a></th>
                    <th><span class="btn-delete" id="{{$item-> id}}">Delete With Ajax</span></th>
                </tr>
            @endforeach
            <tr>
                <th class="col-md-1 text-center"><input type="checkbox" id="check-all"></th>
                <th></th>
                <th><input class="btn-outline-primary" value="Apply action"></th>
            </tr>
            <button class="btn" id="btn-apply"></button>
            </tbody>
        </table>
        <div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <!-- /.box-body -->
    <div class="box-footer">
        <div class="col-md-6 col-md-offset-6">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                </ul>
            </nav>
        </div>
    </div>
</div>

<script>
    $('#check-all').click(){
        $('.check-item').prop('checked', $(this).is(':checked'));
    };
    $('#btn-apply').click(){
        switch ($('#select-action').val()){
            case '0':
                break;
            case '1':
                processDelete();
                break;
            case '2':
                processAnother();
                break;
            default:
                aleart('Invalid action');
                break;
        }
    };

    function processDelete(){
        var arrayId = [];
        $('.check-item:checked').each(function (index, item){
            arrayId.push(item.closest('.row').id.replace('row-item-',''));
        });
        if (arrayId.length == 0){
            alert("Please choose an action");
            return;
        };
        if (confirm('Are you sure to delete these bakeries?')){
            $.ajax({
                method: 'POST',

            })
        };

    };
</script>
@endsection()