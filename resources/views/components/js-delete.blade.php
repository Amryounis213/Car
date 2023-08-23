<script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        const oTable = $('#kt_ecommerce_category_table').DataTable();
        $(document).on('click', ".del_rec_btn", function(e) {
            e.preventDefault();
            const id = $(this).data('id');
            let url = "{{ route($route, ':id') }}";
            url = url.replace(':id', id);

            Swal.fire({
                title: "{{ __('dashboard.warning') }}",
                text: "{{ __('dashboard.are_you_sure_you_want_to_delete_data') }}",
                icon: 'warning',
                confirmButtonText: "{{ __('dashboard.yes_delete') }}",
                confirmButtonColor: '#d33',
                cancelButtonText: "{{ __('dashboard.no_cancel') }}",
                showCancelButton: true,
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "DELETE",
                        url: url,
                        success: function(data) {
                            oTable.draw();
                            toastr.options.positionClass = 'toast-bottom-left';
                            toastr[data.status](data.message);
                        }
                    });
                }
            })
        });
    });
</script>