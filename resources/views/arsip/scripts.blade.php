@push('scripts')
<script>
    $('#table-request, #table-proses').DataTable({});

    $('.checkbox-request').on('change', function(){
        if($(this).is(':checked'))
            $(this).closest('tr').addClass('selected-row');
        else
            $(this).closest('tr').removeClass('selected-row');
    })

    $('#confirm-request').on('click', function(){
        $form = $('#form-request');
        countCheck = $form.find(':checkbox:checked').length;
        if(countCheck > 0){
            Swal.fire({
                title: 'Konfirmasi',
                text: "Yakin akan proses " + countCheck + " Berkas?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Konfirmasi',
                cancelButtonText: 'Batal'
                }).then((result) => {
                if (result.isConfirmed) {
                    $form.trigger('submit');
                }
            })
        } else {
            Swal.fire(
                'Opsss..',
                'belum ada data yang kamu pilih.',
            )
        }
    })
<<<<<<< HEAD



    $('#table-request, #table-proses').DataTable({});

$('.checkbox-proses').on('change', function(){
    if($(this).is(':checked'))
        $(this).closest('tr').addClass('selected-row');
    else
        $(this).closest('tr').removeClass('selected-row');
})

$('#confirm-proses').on('click', function(){
    $form = $('#form-request');
    countCheck = $form.find(':checkbox:checked').length;
    if(countCheck > 0){
        Swal.fire({
            title: 'Konfirmasi',
            text: "Yakin akan proses " + countCheck + " Berkas?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Konfirmasi',
            cancelButtonText: 'Batal'
            }).then((result) => {
            if (result.isConfirmed) {
                $form.trigger('submit');
            }
        })
    } else {
        Swal.fire(
            'Opsss..',
            'belum ada data yang kamu pilih.',
        )
    }
})
=======
>>>>>>> 90152913d42498e6c253a36950a4e2c2f9edce6f
</script>
@endpush
