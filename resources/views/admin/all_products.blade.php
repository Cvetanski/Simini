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
                                <th style="text-align: center">Шифра на продуктот</th>
                                <th style="text-align: center">Име на Продукт</th>
                                <th style="text-align: center">Опис на продукт</th>
                                <th style="text-align: center">URL</th>
                                <th style="text-align: center">Количина</th>
                                <th style="text-align: center">Цена</th>
                                <th style="text-align: center">Попуст/Акција</th>
                                <th style="text-align: center">Категорија</th>
                                <th style="text-align: center">Поткатегорија</th>
                                <th style="text-align: center">Слика</th>
                                <th style="text-align: center">Опции</th>
                                @foreach($products as $product)
                                    @php
                                    $categories=DB::table('categories')->select('title')->where('id', $product->category_id)->get();
                                    $subCategories=DB::table('sub_categories')->select('title')->where('id', $product->sub_category_id)->get();
                                    @endphp
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$product->id}}</td>
                                <td style="text-align: center">{{$product->product_number}}</td>
                                <td style="text-align: center">{{$product->title}}</td>
                                <td style="text-align: center">{{strip_tags($product->description)}}</td>
                                <td style="text-align: center">{{$product->slug}}</td>
                                <td style="text-align: center">{{$product->quantity}}</td>
                                <td style="text-align: center">{{$product->price}}</td>
                                <td style="text-align: center">{{$product->discount}}</td>
                                <td style="text-align: center">@foreach($categories as $category) {{$category->title}} @endforeach</td>
                                <td style="text-align: center">@foreach($subCategories as $subCategory) {{$subCategory->title}} @endforeach</td>
                                <td style="text-align: center;"><img src="{{url('images/',$product->photo)}}"  class="img-fluid zoomIn" alt="{{$product->photo}}" width="50"></td>
                                <td style="text-align: center">
                                    <form class="inline"  action="{{route('edit-product',['id'=>$product->id])}}">
                                        <button type="submit" class="btn btn-info">Измени</button>
                                    </form>
                                    <form class="inline" action="{{route('delete-product',['id'=>$product->id])}}">
{{--                                        <button type="submit" class="btn btn-danger">Избриши</button>--}}
                                        <a class="btn btn-danger" onclick="return confirm('Дали сте сигурни дека сакате да го избришете овај продукт?')" href="{{route('delete-product', $product->id)}}">Избриши</a>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
