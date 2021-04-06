@extends('admin.admin_layout')
@section('admin_content')

    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


        <p class="alert-info" style="text-align: center" style="size: 44px" >
            <?php
            use Illuminate\Support\Facades\Session;$message=Session::get('message');
            if('message')
            {
                echo $message;
                Session::put('message', NULL);
            }
            ?>
        </p>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><b>Сите Категории</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div  id class="dataTables_wrapper form-inline dt-bootstrap">
                <table id="example1" class="table table-bordered table-striped">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="dataTables_length" id="example1_length">
                    <thead>
                    <tr>
                        <th>Реден број</th>
                        <th style="text-align: center">Име на категорија</th>
                        <th style="text-align: center">Опции</th>
                        @foreach($categories as $category)
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$category->id}}</td>
                        <td style="text-align: center">{{$category->title}}</td>
                        <td style="text-align: center">
                            <form class="inline"  action="{{route('edit-category',['id'=>$category->id])}}">
                                <button type="submit" class="btn btn-info">Измени</button>
                            </form>
                            <form class="inline" action="{{route('delete-category',['id'=>$category->id])}}">
                                <a class="btn btn-danger" onclick="return confirm('Дали сте сигурни дека сакате да ја избришите оваа категорија?')" href="{{route('delete-category', $category->id)}}">Избриши</a>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

            <script src="{{asset('public/backend/bower_components/jquery/dist/jquery.min.js')}}"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="{{asset('public/backend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
            <!-- DataTables -->
            <script src="{{asset('public/backend/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('public/backend/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
            <!-- SlimScroll -->
            <script src="{{asset('public/backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
            <!-- FastClick -->
            <script src="{{asset('public/backend/bower_components/fastclick/lib/fastclick.js')}}"></script>
            <!-- AdminLTE App -->
            <script src="{{asset('public/backend/dist/js/adminlte.min.js')}}"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="../../dist/js/demo.js"></script>
            <!-- page script -->
            <script>
                $(function () {
                    $('#example1').DataTable()
                    $('#example2').DataTable({
                        'paging'      : true,
                        'lengthChange': false,
                        'searching'   : false,
                        'ordering'    : true,
                        'info'        : true,
                        'autoWidth'   : false
                    })
                })
            </script>
            </body>
            </html>
    @endsection


















