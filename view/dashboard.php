<body>

		<div class="row" style="background-color: #3498DB;margin:0">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="tweetbox" class="clearfix">
					<div class="container">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1 text-center">
								<a href="index.php" class="logo"><i class="fa fa-twitter"></i></a>
							</div>
							<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
								<form action="dashboard.php" method='POST'>
									<input type="text" name='tweet' placeholder="Hey, tell us what's up...">
									<button type="submit"><i class="fa fa-twitter"></i>Tweet it</button>
								</form>

								<?php

									// INSERTION D'UN TWEET DANS LA BDD

									if (!empty($_POST['tweet'])) {
										$tweet = $db->prepare("INSERT INTO tweets (message) VALUES (?)");
										$tweet -> execute(array($_POST['tweet']));
									}

								?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div id="userbox" class="text-center animated fadeInLeft">
						<div class="content">
							<div class="author">
								<img src="view/profil_pic/undefined.jpg" alt="">
							</div>
							<b class="username">JonathanW</b>
							<p class="created_at">member since : <span>01/04/2013</span></p>
						</div>
						<a href="index.php" class="logout">logout</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<div id="tweetfeed">
						<h1><i class="fa fa-clock-o"></i> Timeline</h1>
						<!-- <div class="alert alert-danger mgtop20">
							<h4>Oops...</i></h4>
							<p>Le tweet n'a pas été envoyé</p>
						</div> -->

						<?php $r = $db->query('SELECT * FROM tweets ORDER BY id DESC'); ?>


						<?php 

						foreach ($r as $tweet) { 
							
							
						?>
					
						<div class="tweet animated fadeInDown">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
									<div class="author">
										<img src="view/profil_pic/undefined.jpg" alt="">
									</div>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
									<div class="pull-right">
										<ul class="list-inline actionicon">

											<li><a href="edit.php?id="	><i class="fa fa-pencil"></i></a></li>
											<li><a href="dashboard.php<?php //$db->exec("DELETE FROM tweets WHERE $tweet[id]"); ?>"><i class="fa fa-times"></i></a></li>

										</ul>
									</div>
									<b class="username">JonathanW</b>
									<p class="content">
										<?php echo "$tweet[message]"; ?>
									</p>
									<p class="clearfix"><small class="date pull-right"><i class="fa fa-clock-o"></i>
									<?php echo "$tweet[created_at]"; ?>
									</small></p>
								</div>
							</div>
						</div>

						<?php } ?>



						<!-- <div class="tweet animated fadeInDown">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
									<div class="author">
										<img src="view/profil_pic/undefined.jpg" alt="">
									</div>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
									<div class="pull-right">
										<ul class="list-inline actionicon">
											<li><a href="index.php"><i class="fa fa-pencil"></i></a></li>
											<li><a href="index.php"><i class="fa fa-times"></i></a></li>
										</ul>
									</div>
									<b class="username">JonathanW</b>
									<p class="content">I am an awesome tweet by JonathanW, check it out!</p>
									<p class="clearfix"><small class="date pull-right"><i class="fa fa-clock-o"></i> 08/04/2013</small></p>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>