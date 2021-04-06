@extends('admin.admin_layout')
@section('admin_content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Aжурирај Категорија</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" action="{{route('update-category',['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}
            <!-- text input -->
                <div class="form-group">
                    <label>Име на категорија</label>
                    <input type="text" name="title" id="type" class="form-control" value="{{$category->title}}" placeholder="Име на категорија">
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Ажурирај</button>
                </div>
            </form>
            </fieldset>
        </div>
    </div>
@endsection
