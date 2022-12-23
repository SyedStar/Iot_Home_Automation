<?php
  $servername = 'localhost';  
	$username = 'root';  
	$password = '';  
	$dbname = 'invenlly_syed';  
	//require_once('config.php');
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * FROM eron where id=1";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    $value_cmd = $row["value_cmd"];
    $text_LCD = $row["text_LCD"];
  }
  $conn->close();
?>


<!DOCTYPE html>
<html>
  <head>
    <title>index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="/iot/css/index.css">
  </head>
  <body>
    <div class="box">
        <h2>index</h2><br>
        
        <form action="cmd_update.php" method="POST">  
          <div class="name">
            <i class="fas fa-on"></i>
            <input type="radio" id="ON" name="cmd" value="1" >
            <label for="ON">ON</label>   
          </div><br>
          <div class="passward">
            <i class="fas fa-off"></i>
            <input type="radio" id="OFF" name="cmd" value="0">
            <label for="OFF">OFF</label>
          </div><br>
          <div class="old">
            <i class="fas fa-off"></i>
            <input  type="radio" id="AUTO" name="cmd" value="2">   
            <label  for="AUTO">AUTO</label>
          </div><br>
          <div>
            <i class="fas fa-off"></i>
            <label for="LCD">Please type here</label>
            <input type="text" class="tb1" id="LCD" name="LCD">
          </div><br>
          <table border ='2' class="tab-align" style="background:rgba(199, 185, 57, 0.644)" >
			      <tr>
			        <th class="tdx"><h4>Bulb cmd</h4></th>
			        <th class="tdx"><h4>LCD display</h4></th>
			      </tr>
         
          <div>
            <button type="submit" class="signupbtn" name="submit1">submit</button>
          </div><br>
        </form>
    </div>
  
			 
    <?php 

      $cmd_display = "";
      if($value_cmd==1){
        $cmd_display = "ON";
      }
      elseif($value_cmd==0){
        $cmd_display = "OFF";
      }
      elseif($value_cmd==2){
        $cmd_display = "Automatic";
      }
      elseif($value_cmd==3){
        $cmd_display = "IR_ON";
      }
      elseif($value_cmd==4){
        $cmd_display = "IR_OFF";
      }
    	echo "<tr>";
      echo "<td class=\"tabl\">"; echo $cmd_display; echo "</td>";
      echo "<td class=\"tabl\">"; echo $text_LCD; echo "</td>";
      echo "</tr>";
    ?>
     </table>  
    
  </body>
</html>
