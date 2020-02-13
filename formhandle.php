<?php



class person{
	public $name;
	public $email;
	public $gender;

	function set_name($name){
		$this->name=$name;
	}
	function get_name(){
		return $this->name;
	}
	function set_email($email){
		$this->email=$email;
	}
	function get_email(){
		return $this->email;
	}
function set_gender($gender){
		$this->gender=$gender;
	}
	function get_gender(){
		return $this->gender;
	}

} 





if(empty($_POST["name"])){
	echo "name is empty";
	}

else if(empty($_POST["gender"])){
	echo "select a gender";
	}


else {


		$obj= new person();

		if(isset($_POST["submit"])){
		$obj->set_name($_POST["name"]);
		$obj->set_email($_POST["email"]);
		$obj->set_gender($_POST["gender"]);

		$ditails=$obj->get_name()." ".$obj->get_email()." ".$obj->get_gender()."\n";

		$myfile = fopen("userditails.txt", "w") or die("Unable to open file!");
		//echo $ditails;
	
		fwrite($myfile,$ditails);

}

}



 ?>