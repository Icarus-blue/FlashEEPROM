<table class="table">
    <thead>
        <th>Nombre</th>
        <th>Tamaño</th>
        <th>Creado el</th>
        <th></th>
    </thead>

    <tbody>

        <?php foreach ($files as $file) : ?>
        <tr data-href="<?= $file->isDirectory() ? '' :  base_url() . '/developer/smtgenerator/'.$file->developerfileid ?>"
            data-id="<?= $file->developerfileid ?>" data-parent="<?= $file->parentid ?>"
            data-type="<?= $file->isDirectory() ? 'folder' : "file" ?>" data-folder-type="<?= $file->directory_type ?>"
            id="nav-folder-<?= $file->developerfileid ?>" data-imageid="<?= $file->imageid ?>"
            data-editable="<?= $file->canBeEdited() ? 1 : 0 ?>" data-template="<?= $file->is_template ?>"
            <?= isset($file->luascriptid) ? 'data-luaid="' . $file->luascriptid . '"' : '' ?>
            <?= isset($file->login) ? 'data-developer="' . esc($file->login) . '"' : '' ?>
            <?= isset($file->questions) ? 'data-questions="' . $file->questions . '"' : '' ?>
            <?= isset($file->script_type) ? 'data-script-type="' . $file->script_type . '"' : '' ?>
            <?= isset($file->tokens) ? 'data-tokens="' . $file->tokens . '"' : '' ?> onclick="">
            <td>
                <span class="<?= $file->isDirectory() ? 'folder' : ($file->isScript() ? 'file' : 'file') ?>">
                    <?= esc(pathinfo($file->name, PATHINFO_FILENAME)) ?>
                </span>
            </td>
            <td><?= $file->isDirectory() ? '' : $file->size ?></td>
            <td><?= $file->created_at ?></td>
            <td>
                <span class="file-actions">
                    <?php if ($file->canBeRenamedOrDeleted($canEditTemplates)) : ?>
                    <a class="file-rename" href="#"><i class="bi bi-pencil"></i></a>
                    <a class="file-delete" href="#"><i class="bi bi-trash"></i></a>
                    <?php endif; ?>
                </span>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<script>
// Define a function to handle the double-click event
function handleDoubleClick() {
    // Get the value of the data-href attribute of the row
    var href = this.getAttribute("data-href");

    // If the data-href attribute is set, redirect to the specified URL
    if (href) {
        window.location.href = href;
    }
}

// Get all the table rows
var rows = document.getElementsByTagName("tr");

// Add double-click event listeners to each row
for (var i = 0; i < rows.length; i++) {
    rows[i].addEventListener("dblclick", handleDoubleClick);
}
</script>