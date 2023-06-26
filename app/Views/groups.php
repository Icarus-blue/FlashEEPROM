<?php if (!$tableOnly): ?>
			<article>
				<h2>Preguntas</h2>
				<div id="questions-container">
<?php endif; ?>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Pregunta</th>
								<th>Administrar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($groups as $group): ?>
							<tr>
								<td><?= esc($group->name) ?></td>
								<td>
									<a class="btn btn-primary" href="<?= base_url() ?>/question/view/<?= $group->groupid ?>">
										<i class="bi-list-ul"></i>
									</a>
									<a class="btn btn-danger" href="<?= base_url() ?>/question/deleteGroup/<?= $group->groupid ?>" data-groupid="<?= $group->groupid ?>">
										<i class="bi-trash"></i>
									</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
<?php if (!$tableOnly): ?>
				</div>
				<div class="subscription-form">
					<h4>Agregar pregunta</h4>
					<form action="<?= base_url('question/addGroup/'); ?>" method="post">
						<?= csrf_field(); ?>
						<div class="row">
							<label class="col-md-5 col-sm-12" for="question_name">
								Pregunta
							</label>
							<div class="col-md-7 col-sm-12">
								<input type="text" name="question" id="question_name" value="" required>
							</div>
						</div>
						<p class="submission"><button type="submit">Agregar</button></p>
					</form>
				</div>
			</article>
<?php endif; ?>
