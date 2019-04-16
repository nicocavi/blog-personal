<?php

	/**
	 * 
	 */
	class UsersModel extends Model
	{

		public function set($user_data =  array()){
			foreach ($user_data as $key => $value) {
				$$key = $value;
			}

			$this->query = "REPLACE INTO users (name_user,pass) VALUES ('$name_user',MD5('$pass'))";
			$this->set_query();
		}

		public function get($user = ''){
			if($user = '')?"SELECT * FROM users":
				"SELECT * FROM user WHERE user_name = '$user'";

			$this->get_query();

			$data = array();

			foreach ($this->rows as $key => $value) {
				array_push($data, $value);
			}
			
			return $data;
		}

		public function del($user = ''){
			$this->query = "DELETE FROM users WHERE name_user = '$user'"
			$this->set_query();
		}

		public function validate_user($user,$pass){
			$this->query = "SELECT * FROM users WHERE user_name = '$user' AND pass = MD5('$pass')";

			$this->get_query();
			
			$data = array();

			foreach ($this->rows as $key => $value) {
				array_push($data, $value);
			}
			
			return $data;
		}
		
	}