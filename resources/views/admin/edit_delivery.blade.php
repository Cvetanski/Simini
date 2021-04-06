{{--@extends('admin.admin_layout')--}}
{{--@section('admin_content')--}}
{{--    <section class="content">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="card card-primary">--}}
{{--                    <div class="card-header">--}}
{{--                        <h3 class="card-title">Ажурирај Содржина</h3>--}}
{{--                        <form class="form-horizontal" action="{{route('update-delivery',['id'=>$delivery->id])}}" method="POST" enctype="multipart/form-data">--}}
{{--                            {{ csrf_field()}}--}}
{{--                            <fieldset>--}}
{{--                                <div class="card-tools">--}}
{{--                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">--}}
{{--                                        <i class="fas fa-minus"></i></button>--}}
{{--                                </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="inputType">Име на содржината</label>--}}
{{--                            <input type="text" name="type" value="{{$delivery->type}}" class="form-control">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="inputPrice">Име на содржината</label>--}}
{{--                            <input type="text" name="price" value="{{$delivery->price}}" class="form-control">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <button type="submit" class="btn btn-primary" style="margin-left: 12px">Ажурирај Содржина</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    </div>--}}
{{--    </fieldset>--}}
{{--    </form>--}}

{{--@endsection--}}


@extends('admin.admin_layout')
@section('admin_content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Додадете Категорија</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" action="{{route('update-delivery',['id'=>$delivery->id])}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}
            <!-- text input -->
                <div class="form-group">
                    <label>Град за достава</label>
                    <input type="text" name="type" id="type" value="{{$delivery->type}}" class="form-control" placeholder="Име на град">
                </div>
                <div class="form-group">
                    <label>Цена на достава</label>
                    <input type="text" name="price" id="price" value="{{$delivery->price}}" class="form-control" placeholder="цена">
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Додади</button>
                </div>
            </form>
            </fieldset>
        </div>
    </div>
@endsection
