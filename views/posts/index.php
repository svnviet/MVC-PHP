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
    padding: 5px;}
  </style>
  </head>
  <body>
   <a href="index.php?controller=adposts&action=index&pages=1">Adsite</a>
  <table>
    <tr>
      <th>ID</th>
  		<th>Thumb</th>
  		<th>Title</th>
    </tr>
    <tr>
  <?php foreach ($posts as $post):?>
          <tr>
  		<h1><td><?php echo $post->id ;?></td></h1>
      <td><?php echo "<img src=".$post->image." >";?></td>
  		<td><?php echo $post->title;?></td>
  		<?php
  		echo '</tr>';?>
  <?php endforeach; ?>
  </tr>
  </table>
  <div class="pagination">
   <?php for ($x=1; $x<=$countpages;$x++):?>
   <a href="index.php?controller=posts&action=index&pages=<?php echo $x;?>"><?php echo $x;?></a>
  <?php endfor; ?>
  </div>
  </body>
