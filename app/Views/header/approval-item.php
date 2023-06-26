		<link href="<?= base_url() ?>/assets/approval-item.css" rel="stylesheet" type="text/css">
		<script src="<?= base_url() ?>/assets/ace/ace.js"></script>
		<script>
			window.addEventListener("DOMContentLoaded", function() {
				document.querySelectorAll(".ace-editor-placeholder").forEach(function(e) {
					let editor = ace.edit(e);
					editor.setTheme("ace/theme/textmate");
					editor.session.setMode("ace/mode/lua");
					editor.setOptions({
						showPrintMargin: false
					});
					editor.setReadOnly(true);
				});
			});
		</script>
