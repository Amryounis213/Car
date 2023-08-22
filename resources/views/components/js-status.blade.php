{{-- update status status --}}
<script>
    $(document).on('click', '.sts-fld', function(e) {
        //e.preventDefault();
        const id = $(this).data('id');
        const checkedValue = $(this).is(":checked");
        $.ajax({
            type: "POST",
            url: "{{ route($route) }}",
            data: {
                'id': id
            },
            success: function(data) {
                if (data.type === 'yes') {
                    $(this).prop("checked", checkedValue);
                } else if (data.type === 'no') {
                    $(this).prop("checked", !checkedValue);
                }
                toastr.options.positionClass = 'toast-top-left';
                toastr[data.status](data.message);
            }
        });
    });
</script>