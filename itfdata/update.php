<?php
	$conn = mysqli_connect('103.91.205.130', 'roong.pimmada', '^49M6v@FS/TuGR,r', 'roong.pimmada', 3306);

	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$link = $_POST['link'];
	$id = $_POST['id'];

	$sql = 'UPDATE guestbook SET Name = "'.$name.'", Comment = "'.$comment.'", Link = "'.$link.'" WHERE ID = '.$id.'';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
<?php
							if(mysqli_query($conn, $sql)) {
                                echo 'Success'
								?>
							else 
								{
									echo "Fail to load";
							}
						?>
</body>
</html>
