<?php
if(isset($_POST['source'])){
    switch($_POST['source']){
            case 'c_cams': $tbl = "CM_CAMS";
            break;
            case 'c_frank': $tbl = "CM_FRANKLIN";
            break;
            case 'c_karvy': $tbl = "CM_KARVY";
            break;
            case 't_cams': $tbl = "TR_CAMS";
            break;
            case 't_frank': $tbl = "TR_FRANKLIN";
            break;
            case 't_karvy': $tbl = "TR_KARVY";
            break;
    }
}

$db_uname = 'root';
$db_passwd = '';
$db = 'fin_data';
$conn = new mysqli('localhost', $db_uname, $db_passwd);
// Path to dbase file
$db_path = "dbffile/".$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], $db_path);

// Open dbase file
$dbh = dbase_open($db_path, 0)
or die("Error! Could not open dbase database file '$db_path'.");

// Get column information
$column_info = dbase_get_header_info($dbh);

// CREATE STRUCTURE
/*$line = array();

foreach($column_info as $col)
{
switch($col['type'])
{
case 'character':
$line[]= "`$col[name]` VARCHAR( $col[length] )";
break;
case 'number':
$line[]= "`$col[name]` FLOAT";
break;
case 'boolean':
$line[]= "`$col[name]` BOOL";
break;
case 'date':
$line[]= "`$col[name]` DATE";
break;
case 'memo':
$line[]= "`$col[name]` TEXT";
break;
}
}
$str = implode(",",$line);
$sql = "CREATE TABLE `$tbl` ( $str );";
$conn->query($sql);
set_time_limit(0); 
*/
// DATA

import_dbf($db, $tbl, $db_path);

function import_dbf($db, $table, $dbf_file)
{
global $conn;
if (!$dbf = dbase_open ($dbf_file, 0)){ die("Could not open $dbf_file for import."); }
$num_rec = dbase_numrecords($dbf);
$num_fields = dbase_numfields($dbf);
$fields = array();

for ($i=1; $i<=$num_rec; $i++){
$row = @dbase_get_record_with_names($dbf,$i);
$q = "insert into $db.$table values ('',";
foreach ($row as $key => $val){
if ($key == 'deleted'){ continue; }
$q .= "'" . addslashes(trim($val)) . "',"; // Code modified to trim out whitespaces
}
if (isset($extra_col_val)){ $q .= "'$extra_col_val',"; }
$q = substr($q, 0, -1);
$q .= ')';
//if the query failed - go ahead and print a bunch of debug info
if (!$result = $conn->query($q)){
print (mysql_error() . " SQL: $q
\n");
print (substr_count($q, ',') + 1) . " Fields total.

";
$problem_q = explode(',', $q);
$q1 = "desc $db.$table";
$result1 = $conn->query($q1);
$columns = array();
$i = 1;
while ($row1 = mysqli_fetch_assoc($result1)){
$columns[$i] = $row1['Field'];
$i++;
}
$i = 1;
foreach ($problem_q as $pq){
print "$i column: {$columns[$i]} data: $pq
\n";
$i++;
}
die();
}
}
if($result){
    echo 'success';
}
}


?>