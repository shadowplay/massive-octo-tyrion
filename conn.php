<?php
	include('adodb/adodb.inc.php');
	
	class Conn {
		protected $foo = 1;
		protected $db;
		protected $db_driver;
		protected $db_host;
		protected $db_name;
		protected $db_user;
		protected $db_pass;
		
		public function setDBtype($val) {
			$this->db_driver = $val;
		}
		
		public function setDBserver($val) {
			$this->db_host = $val;
		}
		
		public function setDBname($val) {
			$this->db_name = $val;
		}
		
		public function setDBuser($val) {
			$this->db_user = $val;
		}
		
		public function setDBpass($val) {
			$this->db_pass = $val;
		}
		
		public function connect(){
			$db = &ADONewConnection($this->db_driver.'://'.$this->db_user.':'.$this->db_pass.'@'.$this->db_host.'/'.$this->db_name);
			return $db;
		}
	}
?>