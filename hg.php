<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("dbconnect.php");
//echo("Hi");exit;
 
if(isset($_POST['Submit'])) {    
    $Name = $_POST['Name'];
    $RegNo = $_POST['RegNo'];
    $Class = $_POST['Class'];
	$Subject = $_POST['Subject'];
    $Nickname = $_POST['Nickname'];
	
        
    // checking empty fields
    if(empty($Name) || empty($RegNo) || empty($Class)) {                
        if(empty($Name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($RegNo)) {
            echo "<font color='red'>RegNo field is empty.</font><br/>";
        }
        
        if(empty($Class)) {
            echo "<font color='red'>Class field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO student(Name,RegNo,Class,Subject,Nickname) VALUES('$Name','$RegNo','$Class','$Subject','$Nickname')");
        print_r($result) ; exit;
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>