<?php 
include('session.php');
$db=constant('DB_DATABASE');
if(isset($_POST['REGNAME'])){
    switch($_POST['REGNAME']){
			case 'CAMS': $tbl = 'CAMS';
			$f_col='FOLIOCHK';
			$i_col='INV_NAME';
			$a_col='ADDRESS1';
			$j_col='JNT_NAME1';
			$b_col='BANK_NAME';
            break;
			case 'FRANKLIN': $tbl = 'FRANKLIN';
			$f_col='FOLIO_NO';
			$i_col='INV_NAME';
			$a_col='ADDRESS1';
			$j_col='JOINT_NAM1';
			$b_col='BANK_NAME';
            break;
			case 'KARVY': $tbl = 'KARVY';
			$f_col='ACNO';
			$i_col='INVNAME';
			$a_col='ADD1';
			$j_col='JTNAME1';
			$b_col='BNAME';
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

function import_dbf($db, $table, $dbf_file,$flag)
{
global $conn,$f_col,$i_col,$a_col,$j_col,$b_col;
if (!$dbf = dbase_open ($dbf_file, 0)){ die("Could not open $dbf_file for import."); }
$num_rec = dbase_numrecords($dbf);
$num_fields = dbase_numfields($dbf);
$fields = array();

for ($i=1; $i<=$num_rec; $i++){
$row = @dbase_get_record_with_names($dbf,$i);
foreach ($row as $key => $val){
if ($key == ''){ continue; }
if ($key == $f_col){ $str['f'][]= "<tr  bgcolor='#eeeeee'><td class=smallest align=center>" . addslashes(trim($row[$key])) . "</td>"; }
if ($key == $i_col){ $str['i'][]= "<td class=smallest>" . addslashes(trim($row[$key])) . "</td>"; }
if ($key == $j_col){ $str['j'][]= "<td class=smallest class=smallest>" . addslashes(trim($row[$key])) . "</td>"; }
if ($key == $a_col){ $str['a'][]= "<td class=smallest>" . addslashes(trim($row[$key])) . "</td>"; }
if ($key == $b_col){ $str['b'][] = "<td class=smallest>" . addslashes(trim($row[$key])) . "</td></tr>"; }
}
if (isset($extra_col_val)){ echo "<td>'$extra_col_val'</td>"; }
}
if($flag==1){
	return $str;
}
else{
	return $num_rec;
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
							<td valign="top" align="right" class=normal><font color="#f06601"><b>[ Total Records - <?php $recs= import_dbf($db, $tbl, $db_path,0);echo $recs;?> ]</b></font>&nbsp;&nbsp;</td>
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
								<font color="#ffffff"><b>Address1</b></font>
							</td>
							<td class=smaller align=center>
								<font color="#ffffff"><b>Joint Name #1</b></font>
							</td>
							<td class=smaller align=center>
								<font color="#ffffff"><b>Bank</b></font>
							</td>
						</tr>
								<?php $res_str= import_dbf($db, $tbl, $db_path,1);
								if((isset($res_str['j'][0]))){
									
								}
								else{
									echo '<script>alert("Please Upload Correct Files and Choose Registrar");window.history.back();</script>';
								}
								for($i=0;$i<$recs;$i++)
								{	
									echo $res_str['f'][$i].$res_str['i'][$i].$res_str['a'][$i].$res_str['j'][$i].$res_str['b'][$i];
								}
									
								?>
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
