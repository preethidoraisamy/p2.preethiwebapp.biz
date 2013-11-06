<form method='post' action='/posts/p_edit/<?=$post['post_id']?>'>

	<section class="formalign">
		<fieldset class="txtalign">
			<legend>Edit Post</legend>

				<textarea rows="4" cols="100" name='content'><?=$post['content']?></textarea>
	
				<br>
				<input type='Submit' value='Edit Post'>	
		
		</fieldset>
	</section>

        

</form>