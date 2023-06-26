<?php if (!$tableOnly): ?>
			<article>
				<h2>Opciones para la pregunta "<?= esc($group->name) ?>"</h2>
				<div id="questions-container">
<?php endif; ?>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Opción</th>
								<th>Tokens</th>
								<th>Administrar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($questions as $question): ?>
							<tr>
								<td><?= esc($question->question) ?></td>
								<td><?= $question->tokens ?></td>
								<td>
									<a class="btn btn-danger" href="<?= base_url() ?>/question/delete/<?= $question->questionid ?>" data-questionid="<?= $question->questionid ?>">
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
					<h4>Agregar opción</h4>
					<form action="<?= base_url('question/add/'); ?>" method="post">
						<?= csrf_field(); ?>
						<input type="hidden" name="groupid" value="<?= $group->groupid ?>">
						<div class="row">
							<label class="col-md-5 col-sm-12" for="question_name">
								Opción
							</label>
							<div class="col-md-7 col-sm-12">
								<input type="text" name="question" id="question_name" value="" required>
							</div>
						</div>
						<div class="row">
							<label class="col-md-5 col-sm-12" for="question_tokens">
								Tokens
							</label>
							<div class="col-md-7 col-sm-12">
								<input type="number" name="tokens" id="question_tokens" value="10" required>
							</div>
						</div>
						<p class="submission"><button type="submit">Agregar</button></p>
					</form>
				</div>
			</article>
<?php endif; ?>
