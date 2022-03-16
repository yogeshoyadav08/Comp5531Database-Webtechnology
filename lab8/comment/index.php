<?php 
	include_once 'controllers/Comment.php';
	$com = new Comment();
 ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Comment System in PHP</title>
 	<style>
 		.box{border: 6px solid #999;margin: 30px auto 0;padding: 20px;width: 1000px;height: 250px;overflow: scroll;}
 		.box ul{margin: 0;padding: 0;list-style: none;}
 		.box li{display: block;border-bottom: 1px dashed #ddd;margin-bottom: 5px;padding-bottom: 5px;}
 		.box li:last-child{border-bottom: 0 dashed #ddd;}
 		.box span{color: #888;}
 	</style>
 </head>
 <body style="background: linear-gradient(to right, #0f2027, #203a43, #2c5364);font-family: 'Poppins', sans-serif;line-height: 1.6;">
 	<center><h1 style="color: white;">Comment System</h1></center>
 	<div class="box">
 		<ul>
 			<?php 
 				$result = $com->index();
 				while ($data = $result->fetch_assoc()) {
 			 ?>
 			<li><b style="color:white"><?php echo $data['name']; ?><b>  -  <?php echo $com->dateFormat($data['comment_time']); ?> <br>	 <h3><?php echo $data['comment'] ?></h3></li>
 			<?php } ?>
 		</ul>
 	</div><br><br>
 	<center>
 		<?php 
 			if (isset($_GET['msg'])) {
 				$msg = $_GET['msg'];
 				echo "<span style='color:white;font-size:20px;font-family: 'Poppins', sans-serif'>".$msg."</span>";
 			}
 		 ?>
 	
	<div style="border-style: groove;width: 25%;height: 280px">
		<form action="post_comment.php" method="post"><br><br><br>
 		<table>
 			<tr>
 				<td>Your Name:</td>
 				<td><input style="width: 221px;height: 30px;font-family: 'Poppins', sans-serif'" type="" name="name" placeholder="Please enter your name"></td>
 			</tr>
 			<tr>
 				<td>Comment:</td>
 				<td>
 					<textarea name="comment" rows="5" cols="30" placeholder="Please enter your comment"></textarea>
 				</td>
 			</tr>
 			<tr>
 				<td></td>
 				<td><input style="width: 230px;height: 40px;font-family: 'Poppins', sans-serif'" type="submit" name="submit" value="Post"></td>
 			</tr>
 		</table>
 	</form>
	</div>
 	<center>
 </body>
 </html>