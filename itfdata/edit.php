<?php
	$conn = mysqli_connect('103.91.205.130', 'roong.pimmada', '^49M6v@FS/TuGR,r', 'roong.pimmada', 3306);

	$id = $_GET['id'];

	$sql = 'SELECT * FROM Guestbook WHERE ID = '.$id.'';
	$query = mysqli_query($conn, $sql);
	if(!$query) {
		header('Location: show.php');
	}
	else {
		$data = mysqli_fetch_assoc($query);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Comment Form</title>
</head>
<body>
  <form action = "update.php" method = "post" >
  <input type="text" name="ID" value="<?php echo $data['ID']; ?>" class="form-control d-none" required hidden><br>
    Name:<br>
    <input type="text" name = "name" ID="idName" placeholder="Enter Name" value="<?php echo $data['Name']; ?>"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" ID="IDComment" placeholder="Enter Comment"><?php echo $data['Comment']; ?></textarea><br>  
    Link:<br>
    <input type="text" name = "link" id="idLink" placeholder="Enter Link" value="<?php echo $data['Link']; ?>"> <br><br>
    <input type="submit" id="commentBtn">
  </form>
</body>
</html>
