<?php
/*
considering the following code:
class Article extends Model{
	public function __construct($db, $user, $password, $host){
		$this->db = $db;s
	}
}

Please refactor the code with Configuration Object pattern.
*/

class Article extends Model{
	public function __construct($config){
		$this->db = $config->db;
		$config->user;
		$config->password;
		$config->host;
	}
}

// Note: if we use don't use the configuration object pattern, like in line5, if we add want to add more two more arguments to the construct, the we need to change the code everywhere that we 'new' this class. While, if we use the configuration pattern, we don't need to change the class's code, we just need to change the configuration class. 


?>