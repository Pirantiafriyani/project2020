@push('scripts')
<script>
    $("#desa").select2({placeholder: "Pilih Desa"});
    $('#kecamatan').on('change', function(){
        $val = $(this).val();
        $("#desa option[data-kecamatan").attr('disabled', true);
        $("#desa option[data-kecamatan='"+$val+"']").removeAttr('disabled');
        $('#desa').val('');
        $("#desa").select2({placeholder: "Pilih Desa"});
    })
</script>
@endpush

