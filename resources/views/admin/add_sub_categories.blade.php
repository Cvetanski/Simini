@extends('admin.admin_layout')
@section('admin_content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Додадете поткатегорија</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" action="{{route('save-subCategory')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}
            <!-- text input -->
                <div class="form-group">
                    <label>Одбери големина</label>
                    <select multiple class="form-control" name="size[]">
                        <?php
                        use Illuminate\Support\Facades\DB;$allCategories=DB::table('categories')
                            ->get();
                        foreach ($allCategories as $category){?>
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Име на поткатегоријата</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Име на категоријата ...">
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Додади</button>
                </div>
            </form>
            </fieldset>
        </div>
    </div>
@endsection
