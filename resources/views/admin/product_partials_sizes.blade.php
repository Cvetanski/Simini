<table>
    @foreach($sizes as $size)
        <tr>
            <td><input {{ $size->size ? 'checked' : null }} data-id="{{ $size->id }}" type="checkbox" class="size-enable"></td>
            <td>{{ $size->size }}</td>
            <td><input value="{{ $size->size ?? null }}" {{ $size->size ? null : 'disabled' }} data-id="{{ $size->id }}" name="size[{{ $size->id }}]" type="text" class="size-quantity form-control" placeholder="Количина"></td>
        </tr>
    @endforeach
</table>

@section('scripts')
    @parent
    <script>
        $('document').ready(function () {
            $('.size-enable').on('click', function () {
                let id = $(this).attr('data-id')
                let enabled = $(this).is(":checked")
                $('.size-quantity[data-id="' + id + '"]').attr('disabled', !enabled)
                $('.size-quantity[data-id="' + id + '"]').val(null)
            })
        });
    </script>
@endsection
