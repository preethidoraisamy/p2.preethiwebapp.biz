<?php foreach($users as $user): ?>

<div class ="posted">
	<?=$user['first_name']?> <?=$user['last_name']?>
</div>
	<?php if(isset($connections[$user['user_id']])): ?>
		<a href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>
	<?php else: ?>
		<a href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
	<?php endif; ?>	
	
	<br><br>

<?php endforeach ?>