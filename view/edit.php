<body>	
		<div class="row">
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
									<button type="submit"><i class="fa fa-twitter"></i> Tweet it</button>
								</form>
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
							<b class="username"><?php echo $_SESSION['username'] ?></b>
							<p class="created_at">member since : <span> <?php echo $_SESSION['created_at'] ?></span></p>
						</div>
						<a href="../login.php" class="logout">logout</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<div id="tweetfeed">
						<h1><i class="fa fa-pencil"></i> Editer ce tweet</h1>
						<div class="tweet animated fadeInDown">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
									<div class="author">
										<img src="view/profil_pic/undefined.jpg" alt="">
									</div>	
								</div>
								<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
									<b class="username">
										<?=
											$_GET['user_id']
										?>
									</b>
									<form action="#" method="POST">
										<textarea name="content">

										</textarea>
										<p class="clearfix"><button type="submit" class="valid pull-right"><i class="fa fa-check"><a href="dashboard.php"></i> edit</button></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

