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
								<form action="edit.php" method='POST'>
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
							<b class="username">JonathanW</b>
							<p class="created_at">member since : <span>01/04/2013</span></p>
						</div>
						<a href="" class="logout">logout</a>
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
									<b class="username">JonathanW</b>
									<form action="#" method="POST">
										<textarea name="content">I am an awesome tweet, check it out!</textarea>
										<p class="clearfix"><button type="submit" class="valid pull-right"><i class="fa fa-check"></i> edit</button></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>