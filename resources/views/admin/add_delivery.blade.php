@extends('admin.admin_layout')
@section('admin_content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Додадете Категорија</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" action="{{route('save-delivery')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}
            <!-- text input -->
                <div class="form-group">
                    <label>Град за достава</label>
                    <input type="text" name="type" id="type" class="form-control" placeholder="Име на град">
                </div>
                <div class="form-group">
                    <label>Цена на достава</label>
                    <input type="text" name="price" id="price" class="form-control" placeholder="цена">
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Додади</button>
                </div>
            </form>
            </fieldset>
        </div>
    </div>
@endsection
