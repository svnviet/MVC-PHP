<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
 <head>
 <style>
 table {
   font-family: arial, sans-serif;
   border-collapse: collapse;
   width: 95%;
 }
 td, th {
   border: 3px solid #dddddd;
   text-align: left;
   padding: 5px;
 }
 </style>
 </head>
 <body>
<table>
	<tr>
    <th>ID</th>
		<th>Thumb</th>
		<th>Title</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
<?php foreach ($posts as $post):?>
        <tr>
		<h1><td><?php echo $post->id ;?></td></h1>
                <td><?php echo "<img src=".$post->image." >";?></td>
		<td><?php echo $post->title;?></td>
		<td><?php echo $post->status;?></td>
		<td>
			<a href="index.php?controller=posts&action=showPost&id='<?php echo $post->id;?>'">Show</a> |
			<a href="index.php?controller=adposts&action=editPost&id='<?php echo $post->id;?>'">Edit</a> |
			<a href="delpost('<?php echo $post->id;?>','<?php echo $post->title;?>')">Delete</a>
		</td>
		<?php
		echo '</tr>';?>
        </tr>
<?php endforeach; ?>
</div>
</body>
<!-- splitPage -->
<div class="pagination">
 <a href="#">&laquo;</a>
 <?php for ($x=1; $x<=$countpages;$x++):?>
 <a href="index.php?controller=adposts&action=index&pages=<?php echo $x;?>"><?php echo $x;?></a>
<?php endfor; ?>
 <a href="#">&raquo;</a>
</div>
	</table>
