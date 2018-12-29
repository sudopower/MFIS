<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "fin_data");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "(SELECT folio_no as 'folio_no',INV_NAME as 'INV_NAME' FROM tr_cams WHERE INV_NAME LIKE ? ) UNION
    (SELECT FOLIOCHK as 'folio_no',INV_NAME as 'INV_NAME' FROM cm_cams WHERE INV_NAME LIKE ? ) UNION
    (SELECT folio_no as 'folio_no',INV_NAME as 'INV_NAME' FROM cm_franklin WHERE INV_NAME LIKE ? ) UNION
    (SELECT sno as 'folio_no',INVNAME as 'INV_NAME' FROM cm_karvy WHERE INVNAME LIKE ? ) UNION
    (SELECT folio_no as 'folio_no',INVESTOR_2 as 'INV_NAME' FROM tr_franklin WHERE INVESTOR_2 LIKE ? ) UNION
    (SELECT sno as 'folio_no',INVNAME as 'INV_NAME' FROM tr_karvy WHERE INVNAME LIKE ? )  ";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ssssss", $param_term,$param_term,$param_term,$param_term,$param_term,$param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p id=". $row["folio_no"] .">" . $row["INV_NAME"] . "</p>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
if(isset($_REQUEST["name"])){
    // Prepare a select statement
    $sql = "(SELECT folio_no as 'folio_no',INV_NAME as 'INV_NAME',SCHEME as 'SCHEME' FROM tr_cams WHERE INV_NAME LIKE ? ) UNION
    (SELECT FOLIOCHK as 'folio_no',INV_NAME as 'INV_NAME',SCH_NAME as 'SCHEME' FROM cm_cams WHERE INV_NAME LIKE ? ) UNION
    (SELECT folio_no as 'folio_no',INV_NAME as 'INV_NAME',COMP_CODE as 'SCHEME' FROM cm_franklin WHERE INV_NAME LIKE ? ) UNION
    (SELECT sno as 'folio_no',INVNAME as 'INV_NAME',FUNDDESC as 'SCHEME' FROM cm_karvy WHERE INVNAME LIKE ? ) UNION
    (SELECT folio_no as 'folio_no',INVESTOR_2 as 'INV_NAME',SCHEME_NA1 as 'SCHEME' FROM tr_franklin WHERE INVESTOR_2 LIKE ? ) UNION
    (SELECT sno as 'folio_no',INVNAME as 'INVNAME',SMCODE as 'SCHEME' FROM tr_karvy WHERE INVNAME LIKE ? )  ";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ssssss", $param_term,$param_term,$param_term,$param_term,$param_term,$param_term);
        
        // Set parameters
        $param_term = $_REQUEST["name"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                echo "<table border='1'>
<tr>
<th>Portfolio No.</th>
<th>Name</th>
<th>Scheme</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['folio_no'] . "</td>";
echo "<td>" . $row['INV_NAME'] . "</td>";
echo "<td>" . $row['SCHEME'] . "</td>";
echo "</tr>";
}
echo "</table>";
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($link);
?>