<?php 
/*******************************************************************
SUMMARY
	1!FUNCTIONS
		1.1!userRegistration OK
		1.2!userConnection OK
		1.3!selectTweets
		1.4!selectTweet
		1.5!insertTweet
		1.6!updateTweet
		1.7!deleteTweet
		1.8!isEmailAvailable OK
		1.9!isUsernameAvailable OK
		2.0!isTweetOwner
		2.1!updateProfilPicture	

********************************************************************/

/**************************************************
					1!FUNCTIONS
**************************************************/
		

		/*1.1!userRegistration
			return :
				true for registration OK
				false for fail
			$db -> 				database object
			$username -> 		field value : username
			$email -> 			field value : email
			$password -> 		field value : password
		*/
	function userRegistration(PDO $db, $username, $email, $mdp){
		// A modifier
		$picture = 'view/profil_pic/undefined.jpg';

		$requete = $db->prepare("INSERT INTO users(username, email, password, picture) VALUES
					(?, ?, ?, ?)");
					$requete->bindParam(1, $username);
					$requete->bindParam(2, $email);
					$requete->bindParam(3, $mdp);
					$requete->bindParam(4, $picture);
					return $requete->execute();
	}


		/*1.2!userConnection
			return :
				true for connection OK
				false for fail
			$db -> 				database object
			$email -> 			field value : email
			$password -> 		field value : password
		*/
function userConnection(PDO $db, $email, $mdp){
	$check = $db->prepare('SELECT username, email, password FROM users WHERE email = ?');
	$check->execute(array($email));
	return $check->fetch();
}


		/*1.3!selectTweets
			return :
				list of tweets in array
			$db -> 				database object
		*/
	function selectTweets(PDO $db){

		

	}


		/*1.4!selectTweet
			return : 
				selected tweet in array
			$db -> 				database object
			$tweet_id ->				tweet's id
		*/
	function selectTweet(PDO $db, $tweet_id){

		

	}


		/*1.5!insertTweet
			return : 
				true
			$db -> 				database object
			$user_id ->			user's id (must be current $_SESSION['id'])
			$message ->			field value : message
		*/
	function insertTweet(PDO $db, $user_id, $message){
		$success = false;
		$errors = [];
		$post = new Post(); 

		if (!empty($_POST)){ 
			$postTable = new PostTable($db);
			Valisator::lang('fr');
			$v = new PostValidator($_POST, $postTable, $post->getID());
			ObjectHelper::hydrate($post, $_POST,['user_id', 'message']);
			if ($v->validate()){ 
				$postTable->update($post);
				$success = true;
			} else {
				$errors = $v->$errors();
			}
}


	}


		/*1.6!updateTweet
			return : 
				true if updated
				false for bad ownership or empty message
			$db -> 				database object
			$tweet_id ->				tweet's id
			$message ->			field value : message
			$user_id -> 		user's id (tweet's owner) | must use $_SESSION['id']
		*/
	function updateTweet(PDO $db, $tweet_id, $message, $user_id){

		

	}


		/*1.7!deleteTweet
			return : 
				true if deleted
				false for fail
			$db -> 				database object
			$tweet_id ->				tweet's id
			$user_id -> 		user's id (tweet's owner) | must use $_SESSION['id']
		*/
	function deleteTweet(PDO $db, $tweet_id, $user_id){

		

	}


		/*1.8!isEmailAvailable
			return : 
				true if email is available
				false if email is not available
			$db -> 				database object
			$email ->			email's value to verify
		*/
	function isEmailAvailable(PDO $db, $email){
		$req_email = $db->prepare("SELECT * FROM users WHERE email=?");
		$req_email->execute([$email]); 
		return $req_email->fetch();
	}		


		/*1.9!isUsernameAvailable
			return : 
				true if username is available
				false if username is not available
			$db -> 				database object
			$username ->		username's value to verify
		*/
	function isUsernameAvailable(PDO $db, $username){
		$req_username = $db->prepare("SELECT * FROM users WHERE username=?");
		$req_username->execute([$username]); 
		return $req_username->fetch();
	}		


		/*2.0!isTweetOwner
			return : 
				true if it's the good owner
				false if someone try to edit another user's tweet
			$db -> 				database object
			$tweet_id ->		tweet's id
			$user_id -> 		user's id
		*/
	function isTweetOwner(PDO $db, $tweet_id, $user_id){

		

	}	


		/*2.1!updateProfilPicture
			return : 
				'ok' if image is changed
				'{error}' if there is an error
			$db -> 				database object
			$imgInfos ->		must be $_FILES['image'] => $imgInfos = $FILES['image']
			$user_id -> 		user's id (picture's owner) | must use $_SESSION['id']
		*/
	function updateProfilPicture(PDO $db, $imgInfos, $user_id){

		

	}
