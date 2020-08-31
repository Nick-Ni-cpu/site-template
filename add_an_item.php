<?php echo $find_rs[''] ?>


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