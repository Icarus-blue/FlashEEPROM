<h2>Comentarios</h2>
<?php if ($isLoggedIn): ?>
<form action="<?= base_url('comment/post/' . $script->scriptid) ?>" method="post" id="comment-form">
	<?= csrf_field() ?>
	<p class="comment-rating">
		Calificación:
		<input type="radio" name="rating" value="1" id="comment-rating-1">
		<input type="radio" name="rating" value="2" id="comment-rating-2">
		<input type="radio" name="rating" value="3" id="comment-rating-3">
		<input type="radio" name="rating" value="4" id="comment-rating-4">
		<input type="radio" name="rating" value="5" id="comment-rating-5" checked>
		<label id="label-rating-1" for="comment-rating-1"><i class="bi-star"></i><i class="bi-star-fill"></i></label>
		<label id="label-rating-2" for="comment-rating-2"><i class="bi-star"></i><i class="bi-star-fill"></i></label>
		<label id="label-rating-3" for="comment-rating-3"><i class="bi-star"></i><i class="bi-star-fill"></i></label>
		<label id="label-rating-4" for="comment-rating-4"><i class="bi-star"></i><i class="bi-star-fill"></i></label>
		<label id="label-rating-5" for="comment-rating-5"><i class="bi-star"></i><i class="bi-star-fill"></i></label>
	</p>
	<div class="comment-form">
		<?= gravatar($user->email) ?>
		<div class="comment-text"><textarea name="comment" placeholder="Dejar un comentario" required></textarea></div>
		<button type="submit" class="btn btn-primary publish-comment"><i class="bi-send"></i></button>
	</div>
</form>
<?php endif; ?>
<?php if (count($comments)): ?>
<div class="comments">
	<ul>
		<?php foreach ($comments as $comment): ?>
		<li>
			<?= gravatar($comment->email) ?>
			<span class="username"><?= esc($comment->user) ?></span> - <?= $comment->posted ?>
			<?= (isset($comment->rating)) ? str_repeat('<i class="bi-star-fill"></i>', $comment->rating) : '' ?>
			<?php if ($isLoggedIn && $user->canManageAllUsers()): ?>
			<a href="<?= base_url('comment/delete/' . $comment->commentid) ?>" data-commentid="<?= $comment->commentid ?>"><i class="bi-trash"></i></a>
			<?php endif; ?>:
			<blockquote><?= esc($comment->comment) ?></blockquote>
		</li>
		<?php endforeach; ?>
	</ul>
</div>
<?php else: ?>
<div>
	<p>No hay comentarios</p>
</div>
<?php endif; ?>
