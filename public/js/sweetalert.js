$(function () {
    $('.dropify').dropify();

    $('[data-toggle="tooltip"]').tooltip()


    $('.error').show(function () {
        let message = $(this).data('message')
        Swal.fire(
            'Warning',
            message,
            'error'
        )
    });
    $('.success').show(function () {
        let message = $(this).data('message')
        Swal.fire(
            'Success',
            message,
            'success'
        )
    });
    $(document).on('click', '.delete-item', function () {
        var url = $(this).data('url');
        Swal.fire({
            title: 'Warning',
            text: "Are you sure for delete this ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                var id = $(this).data("id");
                var token = $("meta[name='csrf-token']").attr("content");
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        "id": id,
                        "_token": token,
                    },
                    success: function (data) {
                        Swal.fire(
                            'Deleted!',
                            data.message,
                            'success'
                        )
                        window.location.reload().time(3)
                    }
                });
            }
        })
    })

})
