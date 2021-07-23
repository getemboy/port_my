<?php
Class User {
	
	function login($POST){
		$DB = new Database();
		$_SESSION['error'] = '';
		if(isset($POST['username_l']) && isset($POST['pass_l'])){
			$arr['username_l'] = $POST['username_l'];
			$arr['pass_l'] = $POST['pass_l'];
			$query = "SELECT * FROM users WHERE username = :username_l && password = :pass_l limit 1";
			$data = $DB->db_read($query,$arr);
			if (is_array($data)){
				$_SESSION['user_id'] = $data[0]->id;
				$_SESSION['user_name'] = $data[0]->username;
				$_SESSION['error'] = "ok";
			}
			else{
				$_SESSION['error'] = "Wrong username or password";
			}
		}
		else {
			$_SESSION['error'] = "Please enter valid username or password";
		}
	}

	function signin($POST){
		$DB = new Database();
		$_SESSION['error'] = '';
		if(isset($POST['username_s']) && isset($POST['pass_s'])){
			$arr['username_s'] = $POST['username_s'];
			$arr['email_s'] = $POST['email_s'];
			$arr['pass_s'] = $POST['pass_s'];
			$query = "INSERT INTO users (username,password,email) VALUES (:username_s, :pass_s, :email_s)";
			$data = $DB->db_write($query,$arr);
			if ($data){
				header('Location:' . ROOT . 'login');
				die;
			}

		}
		else {
			$_SESSION['error'] = "Please enter valid username or password";
		}


	}

	function check_logged_in(){
		$DB = new Database();
		if(isset($_SESSION['user_id'])){
			$arr['user_id'] = $_SESSION['user_id'];
			$query = "SELECT * FROM users WHERE id = :user_id limit 1";
			$data = $DB->db_read($query,$arr);
			if (is_array($data)){
				$_SESSION['user_id'] = $data[0]->id;
				$_SESSION['user_name'] = $data[0]->username;
				return true;
			}
		}
		return false;
	}

	function logout()
	{
		unset($_SESSION['user_id']);
		unset($_SESSION['user_name']);
		header('Location:' . ROOT . 'login');
				die;


	}

}

?>