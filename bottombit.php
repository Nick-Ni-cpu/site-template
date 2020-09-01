			<div class="box side">
				<h2>Add an App |
				<a class='side' href='showall.php'>Show All</a></h2>
				
				<form class="searchform" method="post" action="name_dev.php" enctype="mutipart/form-data">
				
					<input class="search" type="text" name="dev_name" size="30" value="" placeholder="App Nam / Developer Name..." required />
					
					<input class="submit" type="submit" name="find_game_name" value="&#xf002;" />
					
				</form>
				
				<form class='searchform' method='post' action='free.php' enctype='mutipart/form-data'>
					
					<input class="submit free" type='submit' name='free' value="Free with No In App Purchase &nbsp; &#xf002;" />
					
				</form>
				
				<br />
				<hr />
				<br />
				
				<div class='advanced-frame'>
				
				<h2>Advanced Search</h2>
				
				<form class='searchform' method='post' action='advanced.php' enctype='mutipart/form-data'>
				
					<input class="adv" type="text" name="app_name" size="30" value="" 
					placeholder="App Nam / Title..." />
					
					<input class="adv" type="text" name="dev_name" size="30" value="" 
					placeholder="Developer..." />
					
				
				<!-- Genre Dropdown-->
				
				<select name='genre' class="search adv">
				
				<option value='' selected>Genre..</option>
				
				<!-- get options from database -->
					<?php 
						$genre_sql="SELECT * FROM `genre` ORDER BY `genre`.`Genre` ASC ";
						$genre_query=mysqli_query($dbconnect, $genre_sql);
						$genre_rs=mysqli_fetch_assoc($genre_query);
					
						do{
							?>
							
							<option value="<?php echo $genre_rs['Genre'] ?>"><?php echo $genre_rs['Genre'] ?></option>
							
							<?php
						} // end genre do loop
					
						while($genre_rs=mysqli_fetch_assoc($genre_query))
					
					
					?>
					
				</select>
					
					<!-- Cost -->
					<div class="flex-container">
					
						<div class="adv-txt">
							Cost&nbsp;(less&nbsp;than):
						</div> <!-- / cost label -->
						
						<div>
							<input class='adv' type='text' name='cost' size='40' value='' placeholder='$...' />
						</div> <!-- / cost input box -->
					
					</div> <!-- / cost flexbox -->
					<!-- No In App Checkbox -->
					<input class='adv-txt' type='checkbox' name='in_app' value='0' />No In App Purchase
					<!-- Rating -->
					<div class='flex-container'>
						<div class='adv-txt'>
							Rating:
						</div> <!--  / rating label -->
						
						<div>
							<select class="search adv" name="rate_more_less">
								<option value="" >Choose...</option>
								<option value="at least">At Least</option>
								<option value="at most">At Most</option>
							</select>
						</div> <!--  / rating drop down -->
						
						<div>
							<input class="adv" type='text' name='rating' size='2' value='' placeholder='' />
						</div> <!--  / rating amount -->
					</div>
					<!-- Age -->
					<div class='flex-container'>
						<div class='adv-txt'>
							Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</div> <!--  / age label -->
						
						<div>
							<select class="search adv" name="age_more_less">
								<option value="">Choose...</option>
								<option value="at least">At Least</option>
								<option value="at most">At Most</option>
							</select>
						</div> <!--  / age drop down -->
						
						<div>
							<input class="adv" type='text' name='age' size='2' value='' placeholder='' />
						</div> <!--  / rating amount -->
					</div>	
					<!-- Search Button is below-->
					<input class="submit advanced-button" type='submit' name='advanced' value="Search &nbsp; &#xf002;" />

				</form>
				
				</div> <!-- / advanced frame -->
				
			</div> <!-- / side bar -->
			
			<div class="box footer">
				<p>CC GTT 20XX</p>
			</div> <!-- / footer -->
			
		</div> <!-- / wrapper -->
	</body>
</html>