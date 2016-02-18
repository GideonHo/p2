<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Home</title>
	
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<?php require("logic.php"); ?>
	<div id="header">
		<h1>XKCD Password Generator</h1>
	</div>
	<div id="wraper">
		<div id="nav">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="p1.gideonho.com">Project 1</a></li>
			</ul>
		</div>
		<div id="main">
				<form action="index.php" method="post">
					<fieldset>
						<div class="title">
							<h1>User Inputs</h1>
				 			
				 			<?php if (isset($password)): ?> 
 								<h2>Your password is: <?=$password?></h2> 
 							<?php endif ?>	 

						</div>
						<div id="contact-details">
							<p>
								<label for="numwords"> # of words(1-9): </label>
								<input type="text" name="numwords" id="numwords" maxlength="1" value="3" style="text-align: center">
          						<span class="error"></span>
							</p>
							<p>
								<label for="uppercase">Uppercase?: </label> 
								<input type="checkbox" name="uppercase" id="uppercase" value="uppercase" />
							</p>
							<p>
 								<label for="symbol">Include a symbol?: </label> 
 								<input type="checkbox" name="symbol" id="symbol" value="symbol" />
 							</p>
 							<p>
 								<label for="number">Include a number?: </label> 
 								<input type="checkbox" name="number" id="number" value="number" />
 							</p>
						</div>
						<div class="buttons">
							<p><label>  </label><input type="submit" id="submit" name="submit" value="Submit"></p>	
							<p><label>  </label><input type="reset" id="reset" name="submit" value="Cancel"></p>	
						</div>
					</fieldset>			
				</form>
		</div>
		<div id="sidebar">
			<p>Sponsors:</p>
			<p><img src="photo/logo.png" alt="logo"></p>
			<p><img id="sponsor" src="photo/austen.jpg" alt="austen"></p>
		</div>
	</div>
	<div id="footer">© Copyright 2016 Gideon Ho. All Rights Reserved.</div>
	
	<!-- javascript -->
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="assignment3.js"></script>
</body>
</html>