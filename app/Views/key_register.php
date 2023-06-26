<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php if (!$tableOnly) : ?>
<article class="dashboard">
    <h2>Administración</h2>
    <form method="post" id="skeyform" action="<?= base_url('admin/smtgenerator_admin/'); ?>">
        <?= csrf_field() ?>
        <p>Regsitar Equipment ID:<input type="search" id="equipmentID" name="equipmentID" class="search-field"
                placeholder="Buscar" required>
            <button type="submit" id="btn">Registrar</button>
        </p>
    </form>

    <div id="dashboard-container">
        <?php endif; ?>
        <table id="users" class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Equipment ID</th>
                    <th>Secret Key</th>
                    <th>Admin Registered Date</th>
                    <th>User Registered Date</th>
                    <th>Linked UserName</th>
                    <th>Count</th>
                    <th>Status</th>
                    <th>Administrar</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($keylist as $key) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $key['equipID'] ?></td>
                    <td><?= $key["secretkey"] ?></td>
                    <td><?= date('Y-m-d H:i:s', strtotime($key['created_at'])) ?></td>
                    <td><?= date('Y-m-d H:i:s', strtotime($key['updated_at'])) ?></td>
                    <td><?= $key["user_name"] ?></td>
                    <td><?= $key["count"] ? $key["count"] : 0 ?></td>
                    <td>
                        <?php if ($key["status"] !== null && $key["status"] != "0") : ?>
                        Activated
                        <?php else : ?>
                        <a class="btn btn-primary" href="<?= base_url() ?>/admin/status/<?= $key['id'] ?>"
                            style="margin-top:0px">Activation </a>
                        <?php endif ?>
                    <td>

                        <a class="btn btn-primary" href="<?= base_url() ?>/admin/update_secretkey/<?= $key['id'] ?>">
                            <i class="bi-calendar-check"></i>
                        </a>
                        <a class="btn btn-danger" href="<?= base_url() ?>/admin/delete_secretkey/<?= $key['id'] ?>"
                            data-userid="<?= $key['id'] ?>">
                            <i class="bi-trash"></i>
                        </a>

                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= ($pager->getPageCount() > 1) ? $pager->links() : '' ?>
        <?php if (!$tableOnly) : ?>

    </div>

</article>
<?php endif; ?>
<script>
// $(".activate").on('click', () => {
//     $.ajax({
//         url: "<?php echo base_url('user/status'); ?>",
//         method: "get",
//         data: {},
//         success: function(response) {
//             console.log(response);
//         },
//         error: function(xhr, status, error) {
//             console.error(error);
//         }
//     });
// })
</script>