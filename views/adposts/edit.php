


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);?>

<form action='index.php?controller=adposts&action=updatePost' method='POST'>

    <input type='hidden' name='updateid' value='<?php echo $post->id;?>'></p>
    <p><label>Title</label>   <input type='text' name='updatetitle' value='<?php echo $post->title;?>'></p>
    <p><label>Description</label>		<textarea name='updatedesc' cols='60' rows='10'><?php echo $post->description;?></textarea></p>
    <p><label>Image</label>    <td><?php echo "<img src=".$post->image." >";?></td>
    <input type='file' name='image' ></input></p>
    <p><label>Status</label> 		<input type='text' name='updatestatus' value='<?php echo $post->status;?>'></p>
    <p><input type='submit' name='update' value='Update'></p>

	</form>
