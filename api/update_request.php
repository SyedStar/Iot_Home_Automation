<?php      
            $Sw1 = $_REQUEST["cmd"];


            
            $servername = 'localhost';  
			$username = 'root';  
			$password = '';  
			$dbname = 'invenlly_syed';  
			
		    $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
                 $sql = "UPDATE eron SET value_cmd=$Sw1 WHERE id=1";
                if ($conn->query($sql) === TRUE) {
                        echo "Record updated successfully";
                      
                    } 
                    else {
                        echo "Error updating record: " . $conn->error;
                         
                    }
                    echo $Sw1;
            $conn->close();
?>