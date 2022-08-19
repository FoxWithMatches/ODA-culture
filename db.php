<?php
$host = 'localhost';
$user = 'adminoda';
$password = 'studentkainey17';
$database = 'oda';

$mysqli = new mysqli($host, $user, $password, $database);

if(!$mysqli){ 
    echo 'Ошибка соединения: ' . mysqli_connect_error() . '<br>';
    echo 'Код ошибки: ' . mysqli_connect_errno();
}
else { 
    $connect = true;
}
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>База данных</title>
	</head>
<body>

<?php
	if ($connect) {
	$query = "SELECT * FROM orders";
	$result = $mysqli->query($query);
	
	
	if ($result) {
		foreach ($result as $row) {
			echo " id = " . $row['id'] . "<br>";
			echo " name = " . $row['fio'] . "<br>";
            echo " phone = " . $row['tel'] . "<br>";
			echo " message = " . $row['message'] . "<br>";					
		}
		
	}
	else {
        echo 'Ошибка запроса: ' . mysqli_error($mysqli) . '<br>';
        echo 'Код ошибки: ' . mysqli_errno($mysqli);
	}

	if ($result) {
		?>
		<table border = "1">
		<?php
		foreach ($result as $row) { ?>
			<tr>
				<?php
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['fio']}</td>";
					echo "<td>{$row['tel']}</td>";
					echo "<td>{$row['message']}</td>";
				?>
			</tr>
		<?php
		}
		?>
		</table>
	<?php
	}
	else {
		// запрос завершился ошибкой
        echo 'Ошибка запроса: ' . mysqli_error($mysqli) . '<br>';
        echo 'Код ошибки: ' . mysqli_errno($mysqli);
	}	

}

?>

</body>
</html>