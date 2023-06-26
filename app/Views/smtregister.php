<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>
<article>
    <h2>Registrar SMT-Multipro</h2>
    <?php if ($error): ?>
    <p class="alert alert-danger">El usuario o la contraseña no son correctos</p>
    <?php endif; ?>
    <form id="my-form" action="<?php echo base_url('user/register_equID'); ?>" method="post">
        <?= csrf_field(); ?>
        <div class="row">
            <label class="col-md-5 col-sm-12" for="equip_ID">Serial</label>
            <div class="col-md-7 col-sm-12">
                <input type="text" name="equip_ID" id="equip_ID" required>
            </div>
        </div>
        <div class="row">
            <label class="col-md-5 col-sm-12" for="secret_key">Clave</label>
            <div class="col-md-7 col-sm-12">
                <input type="password" name="secret_key" id="secret_key" required>
            </div>
        </div>
        <p><a href="<?= base_url('user/recovery') ?>">perdi my clave</a></p>
        <p><button type="submit">Registrar</button></p>
    </form>
</article>

<script>
$(document).ready(function() {
    $('#my-form').on('submit', function(e) {
        e.preventDefault(); // prevent default form submission behavior
        e.stopPropagation()
        // get form data
        var formData = $(this).serialize();

        // send AJAX request
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: function(response) {
                const res = JSON.parse(response)
                if (res.res === 0) {
                    Swal.fire({
                        title: 'Warning',
                        text: 'There is no secretkey mattached to your input?Try again',
                        icon: 'error',
                        showConfirmButton: false,
                        showCancelButton: true,
                    });
                } else {
                    Swal.fire({
                        title: 'success',
                        text: 'success',
                        icon: 'success',
                        timer: 1000,
                        showConfirmButton: false,
                        showCancelButton: false,
                    });
                }

            },
            error: function(xhr, status, error) {
                // handle error response
                console.log(error);
            }
        });

    });
});
</script>