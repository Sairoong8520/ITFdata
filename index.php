  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LabITF</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-5" style="background-color: moccasin;">
                <form action = "ITFdata/insert.php" method = "post" id="CommentForm">
                    Name:<br>
                    <input type="text" name = "name" id="idName" placeholder="Enter Name"> <br>
                    Comment:<br>
                    <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment"></textarea><br>  
                    Link:<br>
                    <input type="text" name = "link" id="idLink" placeholder="Enter Link"> <br><br>
                    <input type="submit" id="commentBtn">
                  </form>
            </div>
            <div class="col-sm-3">
                <?php
$conn = mysqli_init();
mysqli_real_connect($conn, '103.91.205.130', 'roong.pimmada', '^49M6v@FS/TuGR,r', 'roong.pimmada', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM Guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td><a href='itfdata/delete.php?id=<?php echo $Result['ID'];?>' onclick=\"return confirm('Do you want to delete this record? !!!')\">Del</a></td>
    <td><a href='itfdata/edit.php?id=<?php echo $Result['ID'];?>' onclick=\"return confirm('Do you want to edit this record? !!!')\">Edit</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
        </div> <!-- Close Row 2 -->
    </div> <!-- Close container -->
</body>
</html>
