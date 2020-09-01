<?php echo $find_rs[''] ?>

$variable = mysqli_real_escape_string($dbconnect, $_POST['foo']);

?>

<?php

<p>
					<b>Genre</b>:
					<?php echo $find_rs['Genre'] ?>
					<br />
					<b>Developer</b>:
					<?php echo $find_rs['DevName'] ?>
					<br />
					<b>Rating</b>:
					<?php echo $find_rs['User Rating'] ?> (based on <?php echo $find_rs['Rating count'] ?> votes)
				</p>
				<hr />
				<?php echo $find_rs['Description'] ?>