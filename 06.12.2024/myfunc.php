
<?php
//get the database connection file
require_once 'dbconf.php';
/*function PrintTable($tableName,$connect){
try{
	//Query
	$sql = "SELECT * FROM $tableName";

	//execute the query (call variable,query)
	$result = mysqli_query($connect,$sql);

	if (mysqli_num_rows($result)>0) {
		//fetch the data from rows

		echo "<table border=1> ";

	$col = mysqli_fetch_fields($result);
	//print the column
	echo "<tr>";
	foreach ($col as $value) {
		//return an object
		//print_r($value)
			echo "<td>".$value->name."</td>";
		}
		echo "</tr>";
		while($row = mysqli_fetch_assoc($result)){
			//print the data in table format

		echo "<tr>";
		foreach ($row as $key => $value) {
			echo "<td>$value</td>";
		}
		echo "</tr>";
		}
		echo "</table>";
	} 
	else{
		echo "No results"; //table is empty
	}

	}


catch(Exception $e){
	die($e->getMessage());
}
}*/
 //GET DATA FROM DB
 function student($connect){
            try{
            
                $sql = "SELECT id, name FROM  student";
            
            
                $result = mysqli_query($connect,$sql);
            
                if (mysqli_num_rows($result)>0) {
                
            
                    echo "<table border=1> ";
            
                $col = mysqli_fetch_fields($result);
            
                echo "<tr>";
                foreach ($col as $value) {
                    
                        echo "<td>".$value->name."</td>";
                    }

                    echo "<td> View details </td>";
                    echo "</tr>";
                    while($row = mysqli_fetch_assoc($result)){ 
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        echo "<td>$value</td>";
                    }
                    $student_id=$row['id'];
                    //query string
                    echo "<td><a href='printTable.php? id=$id '> View </a> </td>";
                    echo "</tr>";
                    
                    }

                    echo "</table>";
                } 
                else{
                    echo "No results"; 
                }
            
                }
            
            
            catch(Exception $e){
                die($e->getMessage());
            }
        }



         function Studentdetails($id,$connect){
            try{
            
                $sql = "SELECT * FROM  student where  id = id ";
            
            
                $result = mysqli_query($connect,$sql);
            
                if (mysqli_num_rows($result)>0) {
                
            
                    echo "<table border=1> ";
            
                $col = mysqli_fetch_fields($result);
            
                echo "<tr>";
                foreach ($col as $value) {
                    
                        echo "<td>".$value->name."</td>";
                    }
                    echo "</tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                    }
                    echo "</table>";
                } 
                else{
                    echo "No results"; 
                }
            
                }
            
            
            catch(Exception $e){
                die($e->getMessage());
            }
        }

       /* 
	Join the tables
       function Jointable($EMP_ID,$connect){
            try{
            
                $sql = "SELECT * FROM students INNER JOIN enrollments ON students.student_id = enrollments.student_id;
            
            
                $result = mysqli_query($connect,$sql);
            
                if (mysqli_num_rows($result)>0) {
                
            
                    echo "<table border=1> ";
            
                $col = mysqli_fetch_fields($result);
            
                echo "<tr>";
                foreach ($col as $value) {
                    
                        echo "<td>".$value->name."</td>";
                    }
                    echo "</tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                    }
                    echo "</table>";
                } 
                else{
                    echo "No results"; 
                }
            
                }
            
            
            catch(Exception $e){
                die($e->getMessage());
            }
        }*/
?>