<?php
$host = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'tasks';
$conn = mysql_connect($host,$dbusername,$dbpassword,$dbname);
$task  = $_POST['task'];
if ($conn)
	echo'connected successfully';
$sql = "insert into tasks(task) values('$task')";
$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if ($query)
	header('Location: new.php');
?>
 <html>
 <head>
 <title>
Welcome
</title>
<link rel = "stylesheet" type = "text/css" href = "style1.css">
</head>
<body BGCOLOR = "#239B56">
	<div class = "heading">
	<h1> To Do Lists</h1>
	</div>
	<form>
	<input type = "text" name = "task" class = "task_input">
	<button type = "submit" class = "add_btn" name = "submit">Add</button>
	</form>
<table>
<thead>
    <tr>
		<th>Index</th>
		<th> Task</th>
		<th> Choice</th>
     </tr>
</thead>
<tbody>
	<tr>
			<td>1</td>
			<td class= "task">this is my first todo</td>
			<td class = "delete">
			<a href = "#">x</a>
			</td>
		</tr>

</tbody>
</table>
</body>
</html>
