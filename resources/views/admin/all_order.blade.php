{{--@extends('admin.admin_layout')--}}
{{--@section('admin_content')--}}
{{--    <div class="card-header py-3">--}}
{{--        <h6 class="m-0 font-weight-bold text-primary float-left">Order Lists</h6>--}}
{{--    </div>--}}
{{--    <div class="card-body">--}}
{{--        <div class="table-responsive">--}}
{{--            @if(count($orders)>0)--}}
{{--                <table class="table table-bordered" id="order-dataTable" width="100%" cellspacing="0">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th>Реден Број</th>--}}
{{--                        <th>Адреса</th>--}}
{{--                        <th>Корисник</th>--}}
{{--                        <th>Email</th>--}}
{{--                        <th>Quantity</th>--}}
{{--                        <th>Charge</th>--}}
{{--                        <th>Total Amount</th>--}}
{{--                        <th>Status</th>--}}
{{--                        <th>Action</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($orders as $order)--}}
{{--                        @php--}}
{{--                            $users=DB::table('users')->select('name','surname')->get()->where('id',$order->user_id);--}}
{{--                            $deliveries=DB::table('deliveries')->select('type')->where('id',$order->delivery_id)->get();--}}
{{--                            $paymentMethods=DB::table('payment_methods')->select('payment_method')->where('id',$order->paymenth_methods_id)->get();--}}
{{--                        @endphp--}}
{{--                        <tr>--}}
{{--                            <td>{{$order->id}}</td>--}}
{{--                            <td>{{$order->address}}</td>--}}
{{--                            <td>@foreach($users as $user) {{$user->name}} {{$user->surname}}@endforeach</td>--}}
{{--                            <td>@foreach($deliveries as $delivery) {{$delivery->type}} @endforeach</td>--}}
{{--                            <td>@foreach($paymentMethods as $paymentMethod) {{$paymentMethods->paymenth_method}}@endforeach</td>--}}

{{--                            --}}{{--                                <td>{{$order->first_name}} {{$order->last_name}}</td>--}}
{{--                            --}}{{--                                <td>{{$order->email}}</td>--}}
{{--                            --}}{{--                                <td>{{$order->quantity}}</td>--}}
{{--                            --}}{{--                                <td>@foreach($shipping_charge as $data) $ {{number_format($data,2)}} @endforeach</td>--}}
{{--                            --}}{{--                                <td>${{number_format($order->total_amount,2)}}</td>--}}
{{--                            --}}{{--                                <td>--}}
{{--                            --}}{{--                                    @if($order->status=='new')--}}
{{--                            --}}{{--                                        <span class="badge badge-primary">{{$order->status}}</span>--}}
{{--                            --}}{{--                                    @elseif($order->status=='process')--}}
{{--                            --}}{{--                                        <span class="badge badge-warning">{{$order->status}}</span>--}}
{{--                            --}}{{--                                    @elseif($order->status=='delivered')--}}
{{--                            --}}{{--                                        <span class="badge badge-success">{{$order->status}}</span>--}}
{{--                            --}}{{--                                    @else--}}
{{--                            --}}{{--                                        <span class="badge badge-danger">{{$order->status}}</span>--}}
{{--                            --}}{{--                                    @endif--}}
{{--                            --}}{{--                                </td>--}}
{{--                            --}}{{--                                <td>--}}
{{--                            --}}{{--                                    <a href="{{route('order.show',$order->id)}}" class="btn btn-warning btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="view" data-placement="bottom"><i class="fas fa-eye"></i></a>--}}
{{--                            --}}{{--                                    <a href="{{route('order.edit',$order->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>--}}
{{--                            <form method="POST" action="{{route('delete-order',[$order->id])}}">--}}
{{--                                @csrf--}}
{{--                                @method('delete')--}}
{{--                                <button class="btn btn-danger btn-sm dltBtn" data-id={{$order->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>--}}
{{--                            </form>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--                <span style="float:right">{{$orders->links()}}</span>--}}
{{--            @else--}}
{{--                <h6 class="text-center">No orders found!!! Please order some products</h6>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--@endsection--}}



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
                                    <th style="text-align: center">Број на нарачка</th>
                                    <th style="text-align: center">Адреса</th>
                                    <th style="text-align: center">Корисник</th>
                                    <th style="text-align: center">Начин на плаќање</th>
                                    <th style="text-align: center">Опции</th>
                                    @foreach($orders as $order)
                                        @php
                                        $users=DB::table('users')->select('name','surname')->where('id',$order->user_id)->get();
                                        $paymentMethods=DB::table('payment_methods')->select('payment_method')->where('id',$order->payment_method_id)->get();
                                        @endphp
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td style="text-align: center">{{$order->order_number}}</td>
                                    <td style="text-align: center">{{$order->address}}</td>
                                    <td style="text-align: center" >@foreach($users as $user) {{$user->name}} {{$user->surname}}@endforeach</td>
                                    <td style="text-align: center">@foreach($paymentMethods as $paymentMethod) {{$paymentMethod->payment_method}}@endforeach</td>
                                    <td style="text-align: center">
                                        <form class="inline" action="{{route('delete-order',['id'=>$order->id])}}">
                                            <a href="{{route('order-show',$order->id)}}" class="btn btn-warning btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="view" data-placement="bottom"><i class="fa fa-eye"></i></a>
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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





