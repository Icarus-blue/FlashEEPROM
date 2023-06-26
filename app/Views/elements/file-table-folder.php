					<table class="table">
						<tbody>
							<?php foreach ($folders as $folder): ?>
							<tr data-id="<?= $folder['id'] ?>" data-parent="<?= $folder['parentid'] ?>" data-full-path="<?= $folder['full_path'] ?>">
								<td>
									<span class="folder">
										<?= esc($folder['name']) ?>
									</span>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
