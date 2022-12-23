 <?php
    if(isset($_POST['submit1'])){        
        $Sw1 = $_REQUEST["cmd"];
        $Sw2 = $_REQUEST["LCD"];
            
        $servername = 'localhost';  
        $username = 'root';  
        $password = '';  
        $dbname = 'invenlly_syed';  
			
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "UPDATE eron SET value_cmd=$Sw1, text_LCD = '$Sw2' WHERE id=1";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully2"
            header("location: index.php");
        } 
        else {
            echo "Error updating record: " . $conn->error;
            header("location: index.php");
        }
        $conn->close();
    }
?>