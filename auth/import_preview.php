<?php 
include('session.php');
if(isset($_POST['REGNAME'])){
    switch($_POST['REGNAME']){
			case 'CAMS': 
			$tbl = 'CAMS';
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
	}
	$db_path = "../dbffile/".$_FILES['FILE1']['name'];
	move_uploaded_file($_FILES['FILE1']['tmp_name'], $db_path);
}
if(isset($_POST['PROCEED'])){
	$tbl=$_POST['reg_type'];
    switch($_POST['reg_type']){
            case 'CAMS': $table = "CM_CAMS (`FOLIOCHK`, `INV_NAME`, `ADDRESS1`, `ADDRESS2`, `ADDRESS3`, `CITY`, `PINCODE`, `PRODUCT`, `SCH_NAME`, `REP_DATE`, `CLOS_BAL`, `RUPEE_BAL`, `JNT_NAME1`, `JNT_NAME2`, `PHONE_OFF`, `PHONE_RES`, `EMAIL`, `HOLDING_NA`, `UIN_NO`, `PAN_NO`, `JOINT1_PAN`, `JOINT2_PAN`, `GUARD_PAN`, `TAX_STATUS`, `BROKER_COD`, `SUBBROKER`, `REINV_FLAG`, `BANK_NAME`, `BRANCH`, `AC_TYPE`, `AC_NO`, `B_ADDRESS1`, `B_ADDRESS2`, `B_ADDRESS3`, `B_CITY`, `B_PINCODE`, `INV_DOB`, `MOBILE_NO`, `OCCUPATION`, `INV_IIN`, `NOM_NAME`, `RELATION`, `NOM_ADDR1`, `NOM_ADDR2`, `NOM_ADDR3`, `NOM_CITY`, `NOM_STATE`, `NOM_PINCOD`, `NOM_PH_OFF`, `NOM_PH_RES`, `NOM_EMAIL`, `NOM_PERCEN`, `NOM2_NAME`, `NOM2_RELAT`, `NOM2_ADDR1`, `NOM2_ADDR2`, `NOM2_ADDR3`, `NOM2_CITY`, `NOM2_STATE`, `NOM2_PINCO`, `NOM2_PH_OF`, `NOM2_PH_RE`, `NOM2_EMAIL`, `NOM2_PERCE`, `NOM3_NAME`, `NOM3_RELAT`, `NOM3_ADDR1`, `NOM3_ADDR2`, `NOM3_ADDR3`, `NOM3_CITY`, `NOM3_STATE`, `NOM3_PINCO`, `NOM3_PH_OF`, `NOM3_PH_RE`, `NOM3_EMAIL`, `NOM3_PERCE`, `IFSC_CODE`, `DP_ID`, `DEMAT`, `GUARD_NAME`, `BROKCODE`, `FOLIO_DATE`, `AADHAAR`, `TPA_LINKED`, `FH_CKYC_NO`, `JH1_CKYC`, `JH2_CKYC`, `G_CKYC_NO`, `JH1_DOB`, `JH2_DOB`, `GUARDIAN_D`, `AMC_CODE`, `GST_STATE_`)";
            break;
            case 'FRANKLIN': $table = "CM_FRANKLIN (`COMP_CODE`, `FOLIO_NO`, `INV_NAME`, `JOINT_NAM1`, `JOINT_NAM2`, `ADDRESS1`, `ADDRESS2`, `ADDRESS3`, `CITY`, `PINCODE`, `STATE`, `COUNTRY`, `TPIN`, `D_BIRTH`, `F_NAME`, `M_NAME`, `PHONE_RES`, `PHONE_RES1`, `PHONE_RES2`, `PHONE_OFF`, `PHONE_OFF1`, `PHONE_OFF2`, `FAX_RES`, `FAX_OFF`, `TAX_STATUS`, `OCCU_CODE`, `EMAIL`, `ACCNT_NO`, `BANK_NAME`, `AC_TYPE`, `BRANCH`, `B_ADDRESS1`, `B_ADDRESS2`, `B_ADDRESS3`, `B_CITY`, `B_PINCODE`, `B_STATE`, `B_COUNTRY`, `INVEST_ID`, `BROK_CODE`, `PANNO1`, `PANNO2`, `PANNO3`, `PAN_STATU0`, `PAN_STATU1`, `PAN_STATU2`, `MAPIN1`, `MAPIN2`, `MAPIN3`, `CREA_DATE`, `CREA_TIME`, `CUSTOMER_3`, `FAMILY_SO4`, `GOAL_SHEET`, `GOAL`, `GOAL_DETA5`, `KYC_ID`, `KYC_STATUS`, `HOLDING_T6`, `SOCIAL_ST7`, `FOLIO_SOU8`, `PBANK_NAME`, `PERSONAL_9`, `PAYMENT_10`, `ACCOUNT_11`, `BRANCH_N12`, `PAYMENT_13`, `CUSTOMER14`, `DD_PAYAB15`, `BANK_CODE`, `IFSC_CODE`, `PAYMENT_16`, `NEFT_CODE`, `DEFAULT_17`, `EUIN`, `SUB_BROK18`, `NOMINEE1`, `NOMINEE2`, `NOMINEE3`, `NOMINEE_19`, `DP_ID`, `BENF_ID`, `GUARDIAN20`, `GUARDIAN21`, `DIVIDEND22`, `CKYC_ID`, `H1_CKYC_ID`, `H2_CKYC_ID`, `G_CKYC_ID`)";
            break;
            case 'KARVY': $table = "CM_KARVY (`PRCODE`, `FUND`, `ACNO`, `DIVOPT`, `FUNDDESC`, `INVNAME`, `JTNAME1`, `JTNAME2`, `ADD1`, `ADD2`, `ADD3`, `CITY`, `PIN`, `STATE`, `COUNTRY`, `TPIN`, `DOB`, `FNAME`, `MNAME`, `RPHONE`, `PH_RES1`, `PH_RES2`, `OPHONE`, `PH_OFF1`, `PH_OFF2`, `FAX`, `FAX_OFF`, `STATUS`, `OCCPN`, `EMAIL`, `BNKACNO`, `BNAME`, `BNKACTYPE`, `BRANCH`, `BADD1`, `BADD2`, `BADD3`, `BCITY`, `BPHONE`, `BSTATE`, `BCOUNTRY`, `INV_ID`, `BROKCODE`, `PANGNO`, `MOBILE`, `CRDATE`, `CRTIME`, `OCCP_DESC`, `MODECD`, `MODEOFHOLD`, `MAPIN`, `IMCATEGORY`, `PAN2`, `PAN3`, `GUARDIANN0`, `NOMINEE`, `CLIENTID`, `DPID`, `CATEGORYD1`, `IFSC`, `STATUSDESC`, `NOMINEE2`, `NOMINEE3`, `KYC1FLAG`, `KYC2FLAG`, `KYC3FLAG`, `GUARDPANNO`, `LASTUPDAT2`, `CAN`, `NOMINEEREL`, `NOMINEE2R3`, `NOMINEE3R4`, `NOMINEERA5`, `NOMINEE2R6`, `NOMINEE3R7`, `ADRH1INFO`, `ADRH2INFO`, `ADRH3NFO`, `ADRGINFO`, `NOMINEE_A8`, `NOMINEE_A9`, `NOMINEE_10`, `NOMINEE_11`, `NOMINEE_12`, `NOMINEE_13`, `NOMINEE_14`, `NOMINEE_15`, `NOMINEE216`, `NOMINEE217`, `NOMINEE218`, `NOMINEE219`, `NOMINEE220`, `NOMINEE221`, `NOMINEE222`, `NOMINEE223`, `NOMINEE324`, `NOMINEE325`, `NOMINEE326`, `NOMINEE327`, `NOMINEE328`, `NOMINEE329`, `NOMINEE330`, `NOMINEE331`, `CKYC_NO`, `JH1_CKYC`, `JH2_CKYC`, `GUARDIAN32`, `JOINT_HO33`, `JOINT_HO34`, `INVESTOR35`)";
            break;            
	}
	$db_path =$_POST['fpath'];
	import_dbf(2);
	
	
}




// Open dbase file
$dbh = dbase_open($db_path, 0)
or die("Error! Could not open dbase database file '$db_path'.");

// Get column information
$column_info = dbase_get_header_info($dbh);

function import_dbf($flag)
{
global $conn,$f_col,$i_col,$a_col,$j_col,$b_col,$db,$table,$db_path;
if (!$dbf = dbase_open ($db_path, 0)){ die("Could not open $db_path for import."); }
$num_rec = dbase_numrecords($dbf);
$num_fields = dbase_numfields($dbf);
$fields = array();


if($flag==1){
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
	return $str;
}
elseif($flag==2){
	
	for ($i=1; $i<=$num_rec; $i++){
		$row = @dbase_get_record_with_names($dbf,$i);
		$q = "insert into $table values (";
		foreach ($row as $key => $val){
		if ($key == 'deleted'){ continue; }
		$q .= "'" . addslashes(trim($val)) . "',"; // Code modified to trim out whitespaces
		}
		if (isset($extra_col_val)){ $q .= "'$extra_col_val',"; }
		$q = substr($q, 0, -1);
		$q .= ')';
		//if the query failed - go ahead and print a bunch of debug info
		if (!$result = $db->query($q)){
			$stat=0;
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
		else{
			$stat=1;
		}	
		}
		if($stat!=0){
			echo '<script>alert("Success");location.replace("mapping.php")</script>';
		}
			
		
}
elseif($flag==0){
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
			Welcome <font color=red><?php echo $_SESSION['name'];?></font>
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
			<form action="#" method="POST" Name="WIZARD2FORM" >				
			<table align=center width="100%" valign=top border=0 cellpadding=0 cellspacing=1 bgcolor= "#f06601">
				<tr><td>
					<table align=center width="100%" valign=top border=0 cellpadding=2 cellspacing=0 bgcolor= "white">		
							
						
						<tr><td valign="top" align="left" class=normal>
							<b><font color="#f06601"><u>Registrar</u>: <?php if(isset($tbl)){echo $tbl;}?></font></b>
							</td>
							<td valign="top" align="right" class=normal><font color="#f06601"><b>[ Total Records - <?php $recs= import_dbf(0);echo $recs;?> ]</b></font>&nbsp;&nbsp;</td>
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
								<?php $res_str= import_dbf(1);
								if((isset($res_str['j'][0]))){
									for($i=0;$i<$recs;$i++)
								{	
									echo $res_str['f'][$i].$res_str['i'][$i].$res_str['a'][$i].$res_str['j'][$i].$res_str['b'][$i];
								}
								}
								elseif((is_null($_POST['reg_type']))){
									echo '<script>alert("Please Upload Correct Files and Choose Registrar");window.history.back();</script>';
								}
								elseif((isset($_POST['reg_type']))){

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
						<input type=hidden name="fpath" value="<?php echo $db_path;?>">
						<input type=hidden name="reg_type" value="<?php echo $tbl;?>">
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
