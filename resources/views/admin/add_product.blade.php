@extends('admin.admin_layout')
@section('admin_content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Додади Продукт</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form"  action="{{asset('/save-product')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <fieldset>
                    <div class="control-group">
                        <div class="controls">
                            <input type="hidden" name="section_id" value="1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Име на продуктот</label>
                        <input type="text"  name="title" id="title" class="form-control" placeholder="Име">
                    </div>
                    <!-- textarea -->
                    <div class="form-group">
                        <label for="inputDescription">Опис за продуктот</label>
                        <textarea  name="description" id="description" class="ckeditor" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Цена</label>
                        <input type="text" name="price" id="price" class="form-control" placeholder="Цена">
                    </div>
                    <div class="form-group">
                        <label>Количина</label>
                        <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Количина">
                    </div>
                    <div class="form-group">
                        <label>Боја</label>
                        <input type="text" name="color" id="color" class="form-control" placeholder="Боја">
                    </div>
                    <div class="form-group">
                        <label>Попуст</label>
                        <input type="text" name="discount" id="discount" class="form-control" placeholder="Попуст">
                    </div>
                    <div class="form-group">
                        <label>Одбери Категорија</label>
                        <select class="form-control" name="category_id">
                            <option></option>
                            <?php
                            use Illuminate\Support\Facades\DB;$allCategory=DB::table('categories')
                                ->get();
                            foreach ($allCategory as $category){?>
                            <option  value="{{$category->id}}">{{$category->title}}</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Одбери подкатегорија</label>
                        <select class="form-control" name="sub_category_id">
                            <option></option>
                            <?php
                            $allSubCategory=DB::table('sub_categories')
                                ->get();
                            foreach ($allSubCategory as $subCategory){?>
                            <option value="{{$subCategory->id}}">{{$subCategory->title}}</option>
                            <?php } ?>
                        </select>
                    </div>

                    <!-- Select multiple-->
                    <div class="form-group">
                        <label>Одбери големина</label>
                        <select multiple class="form-control" name="size">
                            <?php
                            $allSizes=DB::table('sizes')
                                ->get();
                            foreach ($allSizes as $size){?>
                            <option value="{{$size->id}}">{{$size->size}}</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="fileInput">Прикачи Слика</label>
                        <div class="input-group">
                            <input class="input-file uniform_on" name="photo" id="photo" type="file" value="{{old('photo')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="textarea2">Објави ја содржината</label>
                        <div class="controls">
                            <input type="checkbox" name="publication_status" value="1">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Прикачи</button>
                </fieldset>
            </form>
        </div>
{{--          <div class="form-group">--}}
{{--                <label for="exampleInputFile">Прикачи фотографија</label>--}}
{{--                    <input type="file" id="exampleInputFile">--}}
{{--                         </div>--}}
{{--                        <div class="form-group">--}}
{{--                          <div class="checkbox">--}}
{{--                        <label>--}}
{{--                    <input type="checkbox">--}}
{{--                <b>Објави</b>--}}
{{--            </label>--}}
{{--         </div>--}}
{{--        </div>--}}
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
    <!--/.col (right) -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                {
                    ranges   : {
                        'Today'       : [moment(), moment()],
                        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate  : moment()
                },
                function (start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            })

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass   : 'iradio_minimal-blue'
            })
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass   : 'iradio_minimal-red'
            })
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass   : 'iradio_flat-green'
            })

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            //Timepicker
            $('.timepicker').timepicker({
                showInputs: false
            })
        })
    </script>
    <!-- jQuery 3 -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    </body>
    </html>
@endsection

