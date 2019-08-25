<?php

 class MyDb{

 	private static $connection;


 	public function connect(){

 		if(!isset(self::$connection)){
 			$config = parse_ini_file('config.ini');
 			self::$connection = new mysqli($config['servername'],$config['username'],$config['password'],$config['dbname']);
 		}

 		if(self::$connection == false){

 			echo "No connection" . self::$connection->connect_error;
 			return false;
 		}

 		return self::$connection;
 	}


 

public function add($first_name,$last_name,$website,$email,$phone){

    $sql ="insert into info (first_name,last_name,website,email,phone) values ('$first_name','$last_name' ,'$website' , '$email','$phone')";

 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		
 		return $result;
 	}

public function add2($license,$license_num,$years_practice,$gender){

    
    $sql="insert into bio (license,license_num,years_practice,gender) values ('$license','$license_num','$years_practice','$gender')";

        $conn = $this->connect();
        $result2 = $conn->query($sql);
        echo $conn->error;
        
        return $result2;
    }

    public function add3($degree,$major,$school,$year){

    
    $sql="insert into edu (degree,major,school,year) values ('$degree','$major','$school','$year')";

        $conn = $this->connect();
        $result3 = $conn->query($sql);
        echo $conn->error;
        
        return $result3;
    }

    public function add4($country,$state,$city,$street,$postal){

    
    $sql="insert into address (country,state,city,street,postal) values ('$country','$state','$city','$street','$postal')";

        $conn = $this->connect();
        $result4 = $conn->query($sql);
        echo $conn->error;
        
        return $result4;
    }

}
 
 	?>
