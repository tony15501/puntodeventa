class User_Model extends CI_Model {
	function __construct(){
		parent::__construct();
	}	

	function get_users(){
		$query = $this->db->get("usuarios");
		return $query;
	}
	
}