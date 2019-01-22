<?php 

if(isset($_POST['REGNAME'])){
    switch($_POST['REGNAME']){
            case 'CAMS': $tbl = 'CAMS';
            break;
            case 'FRANKLIN': $tbl = 'FRANKLIN';
            break;
            case 'KARVY': $tbl = 'KARVY';
            break;
            case 't_cams': $tbl = "TR_CAMS";
            break;
            case 't_frank': $tbl = "TR_FRANKLIN";
            break;
            case 't_karvy': $tbl = "TR_KARVY";
            break;
    }
}

$db_path = "../dbffile/".$_FILES['FILE1']['name'];
move_uploaded_file($_FILES['FILE1']['tmp_name'], $db_path);

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
echo '<table>';
foreach ($row as $key => $val){
if ($key == 'deleted'){ continue; }
echo "<td>" . addslashes(trim($val)) . "</td>"; // Code modified to trim out whitespaces
}
if (isset($extra_col_val)){ $q .= "'$extra_col_val',"; }
$q = substr($q, 0, -1);
$q .= ')';
//if the query failed - go ahead and print a bunch of debug info
// if (!$result = $conn->query($q)){
// print (mysql_error() . " SQL: $q
// \n");
// print (substr_count($q, ',') + 1) . " Fields total.

// ";
// $problem_q = explode(',', $q);
// $q1 = "desc $db.$table";
// $result1 = $conn->query($q1);
// $columns = array();
// $i = 1;
// while ($row1 = mysqli_fetch_assoc($result1)){
// $columns[$i] = $row1['Field'];
// $i++;
// }
// $i = 1;
// foreach ($problem_q as $pq){
// print "$i column: {$columns[$i]} data: $pq
// \n";
// $i++;
// }
// die();
// }
}
if($result){
    echo 'success';
}
}


?>

<html>                                                
<head>

<title>NEW.FOLIOS.PREVIEW</title>

<style>
	.stdbackground{background-color:#EEEEEE; color:#000000; font-family: verdana,arial, helvetica, sans-serif; font-size: 11px; }
	.menumainheads{background-color:#D2D2D3; color:#000000; font-family: verdana,arial, helvetica, sans-serif; font-size: 11px; }
	
	a.menumainheadslink:link {font-weight: bold; color: #000000; font-size: 11px;  text-decoration:none;line-height:18px; font-family: verdana, arial, helvetica, sans-serif}
	a.menumainheadslink:visited {font-weight: bold; color: #000000; font-size: 11px;   text-decoration:none;line-height:18px; font-family: verdana, arial, helvetica, sans-serif} 
	a.menumainheadslink:visited:hover {font-weight: bold; color: #000000; font-size: 11px;text-decoration:underline; line-height:18px; font-family: verdana, arial, helvetica, sans-serif}	
	a.menumainheadslink:hover {font-weight: bold; color: #000000; font-size: 11px;text-decoration:underline;line-height:18px; font-family: verdana, arial, helvetica, sans-serif}
	a.menumainheadslink:active {font-weight: bold; color: #000000; font-size: 11px;   text-decoration:none;line-height:18px; font-family: verdana, arial, helvetica, sans-serif}

	a.menusubheadslink:link {font-weight: normal; color: #000000; font-size: 10px;  text-decoration:none;line-height:18px; font-family: verdana, arial, helvetica, sans-serif}
	a.menusubheadslink:visited {font-weight: normal; color: #000000; font-size: 10px;   text-decoration:none;line-height:18px; font-family: verdana, arial, helvetica, sans-serif} 
	a.menusubheadslink:visited:hover {font-weight: normal; color: #000000; font-size: 10px; text-decoration:underline;line-height:18px; font-family: verdana, arial, helvetica, sans-serif}	
	a.menusubheadslink:hover {font-weight: normal; color: #000000; font-size: 10px; text-decoration:underline; line-height:18px; font-family: verdana, arial, helvetica, sans-serif}
	a.menusubheadslink:active {font-weight: normal; color: #000000; font-size: 10px;   text-decoration:none;line-height:18px; font-family: verdana, arial, helvetica, sans-serif}

	a.menuactivesubheadslink:link {font-weight: bold; color: #000000; font-size: 11px;  text-decoration:none;line-height:18px; font-family: verdana, arial, helvetica, sans-serif}
	a.menuactivesubheadslink:visited {font-weight: bold; color: #000000; font-size: 11px;   text-decoration:none;line-height:18px; font-family: verdana, arial, helvetica, sans-serif} 
	a.menuactivesubheadslink:visited:hover {font-weight: bold; color: #000000; font-size: 11px; text-decoration:underline;line-height:18px; font-family: verdana, arial, helvetica, sans-serif}	
	a.menuactivesubheadslink:hover {font-weight: bold; color: #000000; font-size: 11px; text-decoration:underline; line-height:18px; font-family: verdana, arial, helvetica, sans-serif}
	a.menuactivesubheadslink:active {font-weight: bold; color: #000000; font-size: 11px;   text-decoration:none;line-height:18px; font-family: verdana, arial, helvetica, sans-serif}

</style>


<link REL="stylesheet" HREF="http://katariaweb.com/FinnSys/includes/standard.css" TYPE="text/css">


</head>
<body  OnUnload="opener.location.href='/FinnSys/txn/new.folios.home.asp'"  leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" >
<center>
<table height="200" border=0 cellpadding=0 cellspacing=8 width="100%" valign=top align=left>
<tr><td>
<table height="200" border=0 cellpadding=8 cellspacing=0 width="100%" valign=top>
		<tr><td height=30 align="right" bgcolor="#eeeeee" valign="center" ><b>
			Welcome <font color=red>ritud</font>
		</b></td></tr>
		<tr><td valign="top">
			<table align=center width="100%" valign=top border=0 cellpadding=3 cellspacing=0>
				<tr><td width="35%" bgcolor="#f06601" height=35 class=normal align=center>
					<font color="white"><b>New Folios Uploaded</b></font>
				</td>
				<td bgcolor="#eeeeee">
				&nbsp;
				</td>
				</tr>
			</table>
			<form action="new.folios.preview.asp" method="POST" Name="WIZARD2FORM" >				
			<table align=center width="100%" valign=top border=0 cellpadding=0 cellspacing=1 bgcolor= "#f06601">
				<tr><td>
					<table align=center width="100%" valign=top border=0 cellpadding=2 cellspacing=0 bgcolor= "white">		
							
						
						<tr><td valign="top" align="left" class=normal>
							<b><font color="#f06601"><u>Registrar</u>: <?php if(isset($tbl)){echo $tbl;}?></font></b>
							</td>
							<td valign="top" align="right" class=normal><font color="#f06601"><b>[ Total Records - 86 ]</b></font>&nbsp;&nbsp;</td>
						</tr>
						<tr><td>&nbsp;</td></tr>
						<tr>
						<td colspan=2 valign="top" align="left" class=smaller>
							<b><font color="#f06601">
							The following folios were uploaded. Please check if the data was uploaded in the right format.<br>
							Incase there are visible errors in the uploaded data, please donot proceed further. <br><br>
							Do the following (one by one in the below order):
							<ul>
								<li>Delete this file.</li>
								<li>Make corrections in the source file (original excel report file from the registrar).</li>
								<li>Start again.</li>
							</ul>
							</font></b>
							</td>
						</tr>
						<tr>
						<td>
							&nbsp;&nbsp;<input type=submit Onclick="return confirm('You are about to delete the uploaded file.\nPlease confirm.'); " name="DELETEUPLOADEDFILE" Value = "Delete File and Start Again" STYLE="font-family:Arial; font-size:xx-medium;font-weight:bold;color:#000000; width:220">
						</td>
						<td align=right>
							<input type=submit name="PROCEED" Value = "File OK, Proceed" STYLE="font-family:Arial; font-size:xx-medium;font-weight:bold;color:#000000; width:180">&nbsp;&nbsp;
						</td>
						</tr>
						<tr><td>&nbsp;</td></tr>
						
						<tr><td valign="top" align="left" class=smaller colspan=2>
							
							<table width="100%" valign=top bordercolor="#959696" border=0 cellspacing=1 cellpadding=3>
							<tr>
							<td colspan=5 valign="top" align="left" class=smaller>
							<font color="#317396"><b>
								
									Showing record#: 1 - 86 of Total 86 Records
								
								&nbsp;&nbsp;&nbsp;
								
								</b></font>
								</td>
								</tr>
							<tr bgcolor="#317396" height=30>
							<td class=smaller align=center>
								<font color="#ffffff"><b>Folio Number</b></font>
							</td>
							<td class=smaller align=center>
								<font color="#ffffff"><b>Investor Name</b></font>
							</td>
							<td class=smaller align=center>
								<font color="#ffffff"><b>Joint Name #1</b></font>
							</td>
							<td class=smaller align=center>
								<font color="#ffffff"><b>Address1</b></font>
							</td>
							<td class=smaller align=center>
								<font color="#ffffff"><b>Bank</b></font>
							</td>
						</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									11118959285
								</td>
								<td class=smallest >
									ASHOK JHALANI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									71 CHHOTA SARAFA
								</td>
								<td class=smallest >
									PUNJAB NATIONAL BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									11118959285
								</td>
								<td class=smallest >
									ASHOK JHALANI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									71 CHHOTA SARAFA
								</td>
								<td class=smallest >
									PUNJAB NATIONAL BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									11118959285
								</td>
								<td class=smallest >
									ASHOK JHALANI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									71 CHHOTA SARAFA
								</td>
								<td class=smallest >
									PUNJAB NATIONAL BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									501219632463
								</td>
								<td class=smallest >
									AMITA JAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									63/1 VARUCHI MARG
								</td>
								<td class=smallest >
									BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									501219632463
								</td>
								<td class=smallest >
									AMITA JAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									63/1 VARUCHI MARG
								</td>
								<td class=smallest >
									BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									501219632463
								</td>
								<td class=smallest >
									AMITA JAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									63/1 VARUCHI MARG
								</td>
								<td class=smallest >
									BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									51117356190
								</td>
								<td class=smallest >
									SHRI JINDEV KUMAR JAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									9, GEETA COLONY,
										UJJAIN
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									51117356190
								</td>
								<td class=smallest >
									SHRI JINDEV KUMAR JAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									9, GEETA COLONY,
										UJJAIN
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									51117356190
								</td>
								<td class=smallest >
									SHRI JINDEV KUMAR JAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									9, GEETA COLONY,
										UJJAIN
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									51117356190
								</td>
								<td class=smallest >
									SHRI JINDEV KUMAR JAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									9, GEETA COLONY,
										UJJAIN
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									51117356190
								</td>
								<td class=smallest >
									SHRI JINDEV KUMAR JAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									9, GEETA COLONY,
										UJJAIN
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									51117356190
								</td>
								<td class=smallest >
									SHRI JINDEV KUMAR JAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									9, GEETA COLONY,
										UJJAIN
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									51117356190
								</td>
								<td class=smallest >
									SHRI JINDEV KUMAR JAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									9, GEETA COLONY,
										UJJAIN
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									511176832331
								</td>
								<td class=smallest >
									KARISHMA SHAH
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									2 MUSADDIPURA
								</td>
								<td class=smallest >
									UNION BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									511195714186
								</td>
								<td class=smallest >
									Alka Jain
								</td>
								<td class=smallest >
									Jindev Kumar Jain
								</td>
								<td class=smallest >
									9, ANKPAT MARG,
										GEETA COLONY
								</td>
								<td class=smallest >
									Indian Overseas Bank
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									511195714186
								</td>
								<td class=smallest >
									Alka Jain
								</td>
								<td class=smallest >
									Jindev Kumar Jain
								</td>
								<td class=smallest >
									9, ANKPAT MARG,
										GEETA COLONY
								</td>
								<td class=smallest >
									Indian Overseas Bank
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									511195714186
								</td>
								<td class=smallest >
									Alka Jain
								</td>
								<td class=smallest >
									Jindev Kumar Jain
								</td>
								<td class=smallest >
									9, ANKPAT MARG,
										GEETA COLONY
								</td>
								<td class=smallest >
									Indian Overseas Bank
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									511209503302
								</td>
								<td class=smallest >
									ALKA JAIN
								</td>
								<td class=smallest >
									SHRI JINDER KUMAR JAIN
								</td>
								<td class=smallest >
									9, ANKPAT MARG,
										GEETA COLONY
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									511209503302
								</td>
								<td class=smallest >
									ALKA JAIN
								</td>
								<td class=smallest >
									SHRI JINDER KUMAR JAIN
								</td>
								<td class=smallest >
									9, ANKPAT MARG,
										GEETA COLONY
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									511209503302
								</td>
								<td class=smallest >
									ALKA JAIN
								</td>
								<td class=smallest >
									SHRI JINDER KUMAR JAIN
								</td>
								<td class=smallest >
									9, ANKPAT MARG,
										GEETA COLONY
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									51138202093
								</td>
								<td class=smallest >
									SHRI JINDEV KUMAR JAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									9, GEETA COLONY,
										UJJAIN
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									51138202093
								</td>
								<td class=smallest >
									SHRI JINDEV KUMAR JAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									9, GEETA COLONY,
										UJJAIN
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523231610612
								</td>
								<td class=smallest >
									TRUPTI JAIN
								</td>
								<td class=smallest >
									JINDEV JAIN
								</td>
								<td class=smallest >
									71, TUKOGANJ ROAD,
										DEWAS
								</td>
								<td class=smallest >
									ICICI BANK LTD
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523231610612
								</td>
								<td class=smallest >
									TRUPTI JAIN
								</td>
								<td class=smallest >
									JINDEV JAIN
								</td>
								<td class=smallest >
									71, TUKOGANJ ROAD,
										DEWAS
								</td>
								<td class=smallest >
									ICICI BANK LTD
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523231610623
								</td>
								<td class=smallest >
									TRUPTI JAIN
								</td>
								<td class=smallest >
									JINDEV KUMAR JAIN
								</td>
								<td class=smallest >
									71, TUKOGANJ ROAD,
										DEWAS
								</td>
								<td class=smallest >
									ICICI BANK LTD
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523231610623
								</td>
								<td class=smallest >
									TRUPTI JAIN
								</td>
								<td class=smallest >
									JINDEV KUMAR JAIN
								</td>
								<td class=smallest >
									71, TUKOGANJ ROAD,
										DEWAS
								</td>
								<td class=smallest >
									ICICI BANK LTD
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523231610623
								</td>
								<td class=smallest >
									TRUPTI JAIN
								</td>
								<td class=smallest >
									JINDEV KUMAR JAIN
								</td>
								<td class=smallest >
									71, TUKOGANJ ROAD,
										DEWAS
								</td>
								<td class=smallest >
									ICICI BANK LTD
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523231610623
								</td>
								<td class=smallest >
									TRUPTI JAIN
								</td>
								<td class=smallest >
									JINDEV KUMAR JAIN
								</td>
								<td class=smallest >
									71, TUKOGANJ ROAD,
										DEWAS
								</td>
								<td class=smallest >
									ICICI BANK LTD
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523276678096
								</td>
								<td class=smallest >
									ANIL KUMAR DUBEY
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									B - 6/8 SHRI GURU,
										MAHAKAL VANIJYA KENDRA
								</td>
								<td class=smallest >
									BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523276678096
								</td>
								<td class=smallest >
									ANIL KUMAR DUBEY
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									B - 6/8 SHRI GURU,
										MAHAKAL VANIJYA KENDRA
								</td>
								<td class=smallest >
									BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523302712716
								</td>
								<td class=smallest >
									AMITOJ BHARGAVA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									14 NEAR SETHI NAGAR POOJA,
										UJJAIN
								</td>
								<td class=smallest >
									ALLAHABAD BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523303952503
								</td>
								<td class=smallest >
									AMIT MANDIWAL
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									9/7, PRAGATI NAGAR,
										UJJAIN
								</td>
								<td class=smallest >
									STATE BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523303952503
								</td>
								<td class=smallest >
									AMIT MANDIWAL
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									9/7, PRAGATI NAGAR,
										UJJAIN
								</td>
								<td class=smallest >
									STATE BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523306365802
								</td>
								<td class=smallest >
									MANISHA PEDNEKAR
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									38/A UNIVERSITY ROAD,
										OPPOSIT DURGA PLAZA
								</td>
								<td class=smallest >
									ANDHRA BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523306365802
								</td>
								<td class=smallest >
									MANISHA PEDNEKAR
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									38/A UNIVERSITY ROAD,
										OPPOSIT DURGA PLAZA
								</td>
								<td class=smallest >
									ANDHRA BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523306365802
								</td>
								<td class=smallest >
									MANISHA PEDNEKAR
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									38/A UNIVERSITY ROAD,
										OPPOSIT DURGA PLAZA
								</td>
								<td class=smallest >
									ANDHRA BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523306365802
								</td>
								<td class=smallest >
									MANISHA PEDNEKAR
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									38/A UNIVERSITY ROAD,
										OPPOSIT DURGA PLAZA
								</td>
								<td class=smallest >
									ANDHRA BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523306365802
								</td>
								<td class=smallest >
									MANISHA PEDNEKAR
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									38/A UNIVERSITY ROAD,
										OPPOSIT DURGA PLAZA
								</td>
								<td class=smallest >
									ANDHRA BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523307045685
								</td>
								<td class=smallest >
									ISMAIL HUSSAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									92, TAIYABPURA BAKHAL,
										UJJAIN
								</td>
								<td class=smallest >
									BANK OF MAHARASHTRA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523307045685
								</td>
								<td class=smallest >
									ISMAIL HUSSAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									92, TAIYABPURA BAKHAL,
										UJJAIN
								</td>
								<td class=smallest >
									BANK OF MAHARASHTRA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523307045685
								</td>
								<td class=smallest >
									ISMAIL HUSSAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									92, TAIYABPURA BAKHAL,
										UJJAIN
								</td>
								<td class=smallest >
									BANK OF MAHARASHTRA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523307473483
								</td>
								<td class=smallest >
									ACHLA SHARMA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									9 AZAD NAGAR
								</td>
								<td class=smallest >
									BHARATIYA MAHILA BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523307473596
								</td>
								<td class=smallest >
									ACHLA SHARMA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									9 AZAD NAGAR
								</td>
								<td class=smallest >
									BHARATIYA MAHILA BANK LIMITED
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523309815147
								</td>
								<td class=smallest >
									DAKSHA CHIRANJILAL BHATHA
								</td>
								<td class=smallest >
									CHIRANJIVLAL BHATHA
								</td>
								<td class=smallest >
									16/10, VASANT VIHAR,
										UJJAIN
								</td>
								<td class=smallest >
									UCO BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523309815147
								</td>
								<td class=smallest >
									DAKSHA CHIRANJILAL BHATHA
								</td>
								<td class=smallest >
									CHIRANJIVLAL BHATHA
								</td>
								<td class=smallest >
									16/10, VASANT VIHAR,
										UJJAIN
								</td>
								<td class=smallest >
									UCO BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523309815147
								</td>
								<td class=smallest >
									DAKSHA CHIRANJILAL BHATHA
								</td>
								<td class=smallest >
									CHIRANJIVLAL BHATHA
								</td>
								<td class=smallest >
									16/10, VASANT VIHAR,
										UJJAIN
								</td>
								<td class=smallest >
									UCO BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523310094912
								</td>
								<td class=smallest >
									CHANDMAL JAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									29 1 SITARAM PLAZA MANANA MARG NEAR,
										CHHIPA DHARSHALA
								</td>
								<td class=smallest >
									ORIENTAL BANK OF COMMERCE
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523310094912
								</td>
								<td class=smallest >
									CHANDMAL JAIN
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									29 1 SITARAM PLAZA MANANA MARG NEAR,
										CHHIPA DHARSHALA
								</td>
								<td class=smallest >
									ORIENTAL BANK OF COMMERCE
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314248845
								</td>
								<td class=smallest >
									HAIDER ALI KANCHWALA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									16, ANKPAT MARG,
										BADA TELIWADA
								</td>
								<td class=smallest >
									ICICI BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314248845
								</td>
								<td class=smallest >
									HAIDER ALI KANCHWALA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									16, ANKPAT MARG,
										BADA TELIWADA
								</td>
								<td class=smallest >
									ICICI BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314418901
								</td>
								<td class=smallest >
									MALHAR RAO ZINGRE
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									A-13/2 MAHANANDA NAGAR,
										UJJAIN
								</td>
								<td class=smallest >
									STATE BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314418901
								</td>
								<td class=smallest >
									MALHAR RAO ZINGRE
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									A-13/2 MAHANANDA NAGAR,
										UJJAIN
								</td>
								<td class=smallest >
									STATE BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314449257
								</td>
								<td class=smallest >
									PRERANA ZINGRE
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									A 13 2,
										MAHANANDA NAGAR
								</td>
								<td class=smallest >
									BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314449257
								</td>
								<td class=smallest >
									PRERANA ZINGRE
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									A 13 2,
										MAHANANDA NAGAR
								</td>
								<td class=smallest >
									BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314449257
								</td>
								<td class=smallest >
									PRERANA ZINGRE
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									A 13 2,
										MAHANANDA NAGAR
								</td>
								<td class=smallest >
									BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314454536
								</td>
								<td class=smallest >
									KEENA JAIN
								</td>
								<td class=smallest >
									RAJENDRA KUMAR JAIN
								</td>
								<td class=smallest >
									13 C SURAJ NAGAR RANGBAWDI ROAD
								</td>
								<td class=smallest >
									BANK OF BARODA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314454536
								</td>
								<td class=smallest >
									KEENA JAIN
								</td>
								<td class=smallest >
									RAJENDRA KUMAR JAIN
								</td>
								<td class=smallest >
									13 C SURAJ NAGAR RANGBAWDI ROAD
								</td>
								<td class=smallest >
									BANK OF BARODA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314454536
								</td>
								<td class=smallest >
									KEENA JAIN
								</td>
								<td class=smallest >
									RAJENDRA KUMAR JAIN
								</td>
								<td class=smallest >
									13 C SURAJ NAGAR RANGBAWDI ROAD
								</td>
								<td class=smallest >
									BANK OF BARODA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314454536
								</td>
								<td class=smallest >
									KEENA JAIN
								</td>
								<td class=smallest >
									RAJENDRA KUMAR JAIN
								</td>
								<td class=smallest >
									13 C SURAJ NAGAR RANGBAWDI ROAD
								</td>
								<td class=smallest >
									BANK OF BARODA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314454536
								</td>
								<td class=smallest >
									KEENA JAIN
								</td>
								<td class=smallest >
									RAJENDRA KUMAR JAIN
								</td>
								<td class=smallest >
									13 C SURAJ NAGAR RANGBAWDI ROAD
								</td>
								<td class=smallest >
									BANK OF BARODA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314538037
								</td>
								<td class=smallest >
									BATUL KANCHWALA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									16 ANKPAT MARG,
										BADA TELIWADO CHOURAHA
								</td>
								<td class=smallest >
									ICICI BANK LIMITED
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314538037
								</td>
								<td class=smallest >
									BATUL KANCHWALA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									16 ANKPAT MARG,
										BADA TELIWADO CHOURAHA
								</td>
								<td class=smallest >
									ICICI BANK LIMITED
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314538037
								</td>
								<td class=smallest >
									BATUL KANCHWALA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									16 ANKPAT MARG,
										BADA TELIWADO CHOURAHA
								</td>
								<td class=smallest >
									ICICI BANK LIMITED
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314770991
								</td>
								<td class=smallest >
									AMITABH TRIPATHI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									153,,
										MAHASHWETA NAGAR
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314770991
								</td>
								<td class=smallest >
									AMITABH TRIPATHI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									153,,
										MAHASHWETA NAGAR
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314770991
								</td>
								<td class=smallest >
									AMITABH TRIPATHI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									153,,
										MAHASHWETA NAGAR
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314770991
								</td>
								<td class=smallest >
									AMITABH TRIPATHI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									153,,
										MAHASHWETA NAGAR
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314770991
								</td>
								<td class=smallest >
									AMITABH TRIPATHI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									153,,
										MAHASHWETA NAGAR
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314770991
								</td>
								<td class=smallest >
									AMITABH TRIPATHI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									153,,
										MAHASHWETA NAGAR
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523314770991
								</td>
								<td class=smallest >
									AMITABH TRIPATHI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									153,,
										MAHASHWETA NAGAR
								</td>
								<td class=smallest >
									INDIAN OVERSEAS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523315630534
								</td>
								<td class=smallest >
									REVANT DAVE
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									3/3 RISHI NAGAR,
										UJJAIN
								</td>
								<td class=smallest >
									AXIS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523315630534
								</td>
								<td class=smallest >
									REVANT DAVE
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									3/3 RISHI NAGAR,
										UJJAIN
								</td>
								<td class=smallest >
									AXIS BANK
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523318585763
								</td>
								<td class=smallest >
									SHAKUNTALA CHOPRA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									34 AMAR SINGH MARG,
										NEAR FAGUNIYA HALL FREEGANJ
								</td>
								<td class=smallest >
									STATE BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523318585763
								</td>
								<td class=smallest >
									SHAKUNTALA CHOPRA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									34 AMAR SINGH MARG,
										NEAR FAGUNIYA HALL FREEGANJ
								</td>
								<td class=smallest >
									STATE BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523318585763
								</td>
								<td class=smallest >
									SHAKUNTALA CHOPRA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									34 AMAR SINGH MARG,
										NEAR FAGUNIYA HALL FREEGANJ
								</td>
								<td class=smallest >
									STATE BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523318585763
								</td>
								<td class=smallest >
									SHAKUNTALA CHOPRA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									34 AMAR SINGH MARG,
										NEAR FAGUNIYA HALL FREEGANJ
								</td>
								<td class=smallest >
									STATE BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523318585763
								</td>
								<td class=smallest >
									SHAKUNTALA CHOPRA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									34 AMAR SINGH MARG,
										NEAR FAGUNIYA HALL FREEGANJ
								</td>
								<td class=smallest >
									STATE BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523318598197
								</td>
								<td class=smallest >
									THAKUR DAS CHANDNANI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									78 SHRIRAM NAGAR
								</td>
								<td class=smallest >
									STATE BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523318598197
								</td>
								<td class=smallest >
									THAKUR DAS CHANDNANI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									78 SHRIRAM NAGAR
								</td>
								<td class=smallest >
									STATE BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523318600201
								</td>
								<td class=smallest >
									MONIKA CHANDNANI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									78 SHREE RAM NAGAR
								</td>
								<td class=smallest >
									STATE BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523318600201
								</td>
								<td class=smallest >
									MONIKA CHANDNANI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									78 SHREE RAM NAGAR
								</td>
								<td class=smallest >
									STATE BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523318603155
								</td>
								<td class=smallest >
									JYOTI CHANDNANI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									A-78 SHREE RAM NAGAR BEHIND SAI BABA MAN
								</td>
								<td class=smallest >
									STATE BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523318603155
								</td>
								<td class=smallest >
									JYOTI CHANDNANI
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									A-78 SHREE RAM NAGAR BEHIND SAI BABA MAN
								</td>
								<td class=smallest >
									STATE BANK OF INDIA
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523319504755
								</td>
								<td class=smallest >
									HAIDER ALI KANCHWALA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									16, ANKPAT MARG,
										BADA TELIWADA
								</td>
								<td class=smallest >
									ICICI BANK LIMITED
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523319504755
								</td>
								<td class=smallest >
									HAIDER ALI KANCHWALA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									16, ANKPAT MARG,
										BADA TELIWADA
								</td>
								<td class=smallest >
									ICICI BANK LIMITED
								</td>
								</tr>
							
								<tr  bgcolor="#eeeeee">
								<td class=smallest align=center>
									523319504755
								</td>
								<td class=smallest >
									HAIDER ALI KANCHWALA
								</td>
								<td class=smallest >
									
								</td>
								<td class=smallest >
									16, ANKPAT MARG,
										BADA TELIWADA
								</td>
								<td class=smallest >
									ICICI BANK LIMITED
								</td>
								</tr>
							
							<tr><td colspan=9><hr size=1 width="100%" ></td></tr>
							</table>
							
						</td></tr>
							<tr><td class=smaller colspan=2>&nbsp;<br></td></tr>
							
						<tr>
						<td>
							&nbsp;&nbsp;<input type=submit Onclick="return confirm('You are about to delete the uploaded file.\nPlease confirm.'); " name="DELETEUPLOADEDFILE" Value = "Delete File and Start Again" STYLE="font-family:Arial; font-size:xx-medium;font-weight:bold;color:#000000; width:220">
						</td>
						<td align=right>
							<input type=submit name="PROCEED" Value = "File OK, Proceed" STYLE="font-family:Arial; font-size:xx-medium;font-weight:bold;color:#000000; width:180">&nbsp;&nbsp;
						</td>
						</tr>
						<tr><td colspan=2>&nbsp;</td></tr>
						<tr><td colspan=2>&nbsp;</td></tr>
						
						<input type=hidden name="todo" value="">
						
					</table>
				</td></tr>
			</table>	
		</td></tr>
</table>
</td></tr>
</table>
</form>

</body>
</html>
