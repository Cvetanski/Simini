@extends('admin.admin_layout')
@section('admin_content')

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
            <h3 class="box-title"><b>Сите Поткатегории</b></h3>
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
                                    <th style="text-align: center">Име и презиме</th>
                                    <th style="text-align: center">Години</th>
                                    <th style="text-align: center">Пол</th>
                                    <th style="text-align: center">Мејл Адреса</th>
                                    <th style="text-align: center">Адреса на живеење</th>
                                    <th style="text-align: center">Адреса на достава</th>
                                    <th style="text-align: center">Телефонски број</th>
                                    <th style="text-align: center">Опции</th>
                                    @foreach($users as $user)
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td style="text-align: center">{{$user->name}} {{$user->name}}</td>
                                    <td style="text-align: center">{{$user->age}}</td>
                                    <td style="text-align: center">{{$user->gender}}</td>
                                    <td style="text-align: center">{{$user->email}}</td>
                                    <td style="text-align: center">{{$user->living_address}}</td>
                                    <td style="text-align: center">{{$user->delivery_address}}</td>
                                    <td style="text-align: center">{{$user->phone}}</td>
                                    <td style="text-align: center">
                                        <form class="inline"  action="{{route('edit-user',['id'=>$user->id])}}">
                                            <button type="submit" class="btn btn-info">Измени</button>
                                        </form>
                                        <form class="inline" action="{{route('delete-user',['id'=>$user->id])}}">
                                            <button type="submit" class="btn btn-danger">Избриши</button>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                    @endforeach
                </table>
            </div>
        </div>
@endsection
