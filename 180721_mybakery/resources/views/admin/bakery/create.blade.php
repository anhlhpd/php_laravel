<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css\_all-skins.min.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <title>Document</title>
    <style>
        body {
            min-height: 75rem;
        }

        .navbar {
            margin-bottom: 0;
        }

        .jumbotron {
            padding-top: 6rem;
            padding-bottom: 6rem;
            margin-bottom: 0;
            background-color: #fff;
        }

        .jumbotron p:last-child {
            margin-bottom: 0;
        }

        .jumbotron-heading {
            font-weight: 300;
        }

        .jumbotron .container {
            max-width: 40rem;
        }

        .album {
            min-height: 50rem; /* Can be removed; just added for demo purposes */
            padding-top: 3rem;
            padding-bottom: 3rem;
            background-color: #f7f7f7;
        }

        .card {
            float: left;
            width: 33.333%;
            padding: .75rem;
            margin-bottom: 2rem;
            border: 0;
        }

        .card > img {
            margin-bottom: .75rem;
        }

        .card-text {
            font-size: 85%;
        }

        footer {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        footer p {
            margin-bottom: .25rem;
        }
    </style>
</head>
<body>
    {{--<h1>Create bakery</h1>--}}
    {{--<ul>--}}
        {{--<li>--}}
            {{--<a href="/admin/bakery/create">Create New</a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="/admin/bakery">List</a>--}}
        {{--</li>--}}
    {{--</ul>--}}
    {{--<form action="/admin/bakery" method="post">--}}
        {{--{{csrf_field()}}--}}
        {{--<div>--}}
            {{--<label>Name</label>--}}
            {{--<input type="text" name="name">--}}
        {{--</div>--}}
        {{--<div>--}}
            {{--<label>Author</label>--}}
            {{--<input type="text" name="author">--}}
        {{--</div>--}}
        {{--<div>--}}
            {{--<label>Content</label>--}}
            {{--<input type="text" name="content">--}}
        {{--</div>--}}
        {{--<div>--}}
            {{--<label>Image</label>--}}
            {{--<input type="text" name="images">--}}
        {{--</div>--}}
        {{--<div>--}}
            {{--<input type="submit" value="Save">--}}
            {{--<input type="reset" value="Reset">--}}
        {{--</div>--}}
    {{--</form>--}}



    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">
          <b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">
          <b>Admin</b>FUNZONE</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Admin Nhóm 2</p>
                        <a href="#">
                            <i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Quản Lý Sản Phẩm</span>
                            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="admin-list-product.html?page=1&limit=5">
                                    <i class="fa fa-circle-o"></i>Danh sách sản phẩm</a>
                            </li>
                            <li>
                                <a href="admin-add-product.html">
                                    <i class="fa fa-circle-o"></i>Thêm sản phẩm</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Quản Lí Khách Hàng</span>
                            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="admin-customer-contact.html?page=1&limit=5">
                                    <i class="fa fa-circle-o"></i>Danh sách khách hàng liên hệ</a>
                            </li>
                            <li>
                                <a href="admin-customer-product.html?page=1&limit=5">
                                    <i class="fa fa-circle-o"></i>Danh sách khách hàng đặt order</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Quản Lí Order</span>
                            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="admin-order.html?page=1&limit=5">
                                    <i class="fa fa-circle-o"></i>Danh sách Order</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Admin form
                    <small>Admin Manager</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="#">Forms</a>
                    </li>
                    <li class="active">General Elements</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Danh Sách Sản Phẩm</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th>ID Sản Phẩm</th>
                                        <th>Giá</th>
                                        <th>Mô tả</th>
                                        <th>Ảnh</th>
                                        <th>Loại vé</th>
                                        <th>Độ tuổi</th>
                                        <th>Tình Trạng</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id="result">
                                    </tbody>
                                </table>
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
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2017
                <a href="https://adminlte.io">Aptech FPT</a>.</strong> All rights reserved.
        </footer>
        <div class="modal modal-success fade" id="modal-success">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4 class="modal-title">Action Success</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Ok</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="control-sidebar-bg"></div>
    </div>



</body>
</html>