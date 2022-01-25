<script src="{{ asset('storage/app/public/Adminassets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('storage/app/public/Adminassets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('storage/app/public/Adminassets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('storage/app/public/Adminassets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('storage/app/public/Adminassets/libs/node-waves/waves.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

@yield('js')

<script src="{{ asset('storage/app/public/Adminassets/js/app.js') }}"></script>
<script type="text/javascript">
    function changePassword() {
        var oldpassword = $("#oldpassword").val();
        var newpassword = $("#newpassword").val();
        var confirmpassword = $("#confirmpassword").val();
        var CSRF_TOKEN = $('input[name="_token"]').val();

        if ($("#change_password_form").valid()) {
            // $('#loaderimg').show();
            $.ajax({
                headers: {
                    'X-CSRF-Token': CSRF_TOKEN
                },
                url: "{{ url('admin/changePassword') }}",
                method: 'POST',
                data: {
                    'oldpassword': oldpassword,
                    'newpassword': newpassword,
                    'confirmed': confirmpassword
                },

                success: function(data) {

                    if (data.password != '') {
                        $('#errors').html(data.password);

                    }
                    if (data.success != '') {
                        $('#errors').html('<p style="color:green">' + data.success + '</p>');
                    }
                    setTimeout(function() {
                        $('#errors').html('');
                    }, 10000);
                }
            });
        }
    }
    $(document).ready(function() {
        $("#change_password_form").validate({
            rules: {
                oldpassword: {
                    required: true,
                    minlength: 6
                },
                newpassword: {
                    required: true,
                    minlength: 6,
                    maxlength: 12,

                },
                confirmpassword: {
                    required: true,
                    equalTo: "#newpassword",
                    minlength: 6,

                },

            },

        });
    });

    const UpdateMeta = async (key, value) => {
        var form = new FormData();
        form.append("_token", "{{ csrf_token() }}")
        form.append("key", key);
        form.append("value", value);
        $.ajax({
            url: "{{ route('updateMeta') }}",
            method: "POST",
            cache: false,
            contentType: false,
            processData: false,
            data: form,
            success: function(data) {
                window.location.reload();
            },
            error: function(data) {
                console.log({
                    error: data
                });
            }
        })
    }
</script>
