<?php include("topbit.php");
 
	$app_name = mysqli_real_escape_string($dbconnect, $_POST['app_name']);
	$developer = mysqli_real_escape_string($dbconnect, $_POST['dev_name']);
	$genre = mysqli_real_escape_string($dbconnect, $_POST['genre']);
	$cost = mysqli_real_escape_string($dbconnect, $_POST['cost']);
 
    $find_sql = "SELECT * FROM `game_details` 
	JOIN genre ON (game_details.GenreID = genre.GenreID)
	JOIN developer ON (game_details.DeveloperID = developer.ID)
	WHERE `Name` LIKE '%$app_name%' 
	AND `DevName` LIKE '%$developer%'
	AND `Genre` LIKE '%$genre%'
	AND `Price` LIKE '%$cost%'
	";
	$find_query = mysqli_query($dbconnect, $find_sql);
	$find_rs = mysqli_fetch_assoc($find_query);
	$count = mysqli_num_rows($find_query);
?>
			<div class="box main">
				<h2>Name / Developer Results</h2>
				
				<?php
				include("results.php");
				?>
			</div> <!-- / main -->
			
<?php include("bottombit.php") ?>