@extends('layouts.master', ['current-page' => 'bakery-edit-form'])
@section('content')
    <form action="/admin/bakery" method="post">
        {{csrf_field()}}
        <div class="box-body">
            <div class="form-group">
                <label>Tên Sản Phẩm</label>
                <input type="text" class="form-control" placeholder="Điền tên sản phẩm" name="name">
                <span></span>
            </div>
            <div class="form-group">
                <label>Giá</label>
                <input type="text" class="form-control" placeholder="" name="price">
                <span></span>
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <input type="text" class="form-control" placeholder="Thêm mô tả" name="description">
                <span></span>
            </div>
            <div class="form-group">
                <label>Ảnh Sản Phẩm</label>
                <input type="text" name="images">
                {{--<span></span>--}}
                {{--<img id="preview" src="#" style="max-width: 200px; padding: 5px;">--}}
                {{--<input type="hidden" name="avatarUrl">--}}
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
    </form>
@endsection()