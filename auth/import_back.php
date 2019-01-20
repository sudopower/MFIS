<?php
if(isset($_POST['source'])){
    switch($_POST['source']){
            case 'c_cams': $tbl = "CM_CAMS (`FOLIOCHK`, `INV_NAME`, `ADDRESS1`, `ADDRESS2`, `ADDRESS3`, `CITY`, `PINCODE`, `PRODUCT`, `SCH_NAME`, `REP_DATE`, `CLOS_BAL`, `RUPEE_BAL`, `JNT_NAME1`, `JNT_NAME2`, `PHONE_OFF`, `PHONE_RES`, `EMAIL`, `HOLDING_NA`, `UIN_NO`, `PAN_NO`, `JOINT1_PAN`, `JOINT2_PAN`, `GUARD_PAN`, `TAX_STATUS`, `BROKER_COD`, `SUBBROKER`, `REINV_FLAG`, `BANK_NAME`, `BRANCH`, `AC_TYPE`, `AC_NO`, `B_ADDRESS1`, `B_ADDRESS2`, `B_ADDRESS3`, `B_CITY`, `B_PINCODE`, `INV_DOB`, `MOBILE_NO`, `OCCUPATION`, `INV_IIN`, `NOM_NAME`, `RELATION`, `NOM_ADDR1`, `NOM_ADDR2`, `NOM_ADDR3`, `NOM_CITY`, `NOM_STATE`, `NOM_PINCOD`, `NOM_PH_OFF`, `NOM_PH_RES`, `NOM_EMAIL`, `NOM_PERCEN`, `NOM2_NAME`, `NOM2_RELAT`, `NOM2_ADDR1`, `NOM2_ADDR2`, `NOM2_ADDR3`, `NOM2_CITY`, `NOM2_STATE`, `NOM2_PINCO`, `NOM2_PH_OF`, `NOM2_PH_RE`, `NOM2_EMAIL`, `NOM2_PERCE`, `NOM3_NAME`, `NOM3_RELAT`, `NOM3_ADDR1`, `NOM3_ADDR2`, `NOM3_ADDR3`, `NOM3_CITY`, `NOM3_STATE`, `NOM3_PINCO`, `NOM3_PH_OF`, `NOM3_PH_RE`, `NOM3_EMAIL`, `NOM3_PERCE`, `IFSC_CODE`, `DP_ID`, `DEMAT`, `GUARD_NAME`, `BROKCODE`, `FOLIO_DATE`, `AADHAAR`, `TPA_LINKED`, `FH_CKYC_NO`, `JH1_CKYC`, `JH2_CKYC`, `G_CKYC_NO`, `JH1_DOB`, `JH2_DOB`, `GUARDIAN_D`, `AMC_CODE`, `GST_STATE_`)";
            break;
            case 'c_frank': $tbl = "CM_FRANKLIN (`COMP_CODE`, `FOLIO_NO`, `INV_NAME`, `JOINT_NAM1`, `JOINT_NAM2`, `ADDRESS1`, `ADDRESS2`, `ADDRESS3`, `CITY`, `PINCODE`, `STATE`, `COUNTRY`, `TPIN`, `D_BIRTH`, `F_NAME`, `M_NAME`, `PHONE_RES`, `PHONE_RES1`, `PHONE_RES2`, `PHONE_OFF`, `PHONE_OFF1`, `PHONE_OFF2`, `FAX_RES`, `FAX_OFF`, `TAX_STATUS`, `OCCU_CODE`, `EMAIL`, `ACCNT_NO`, `BANK_NAME`, `AC_TYPE`, `BRANCH`, `B_ADDRESS1`, `B_ADDRESS2`, `B_ADDRESS3`, `B_CITY`, `B_PINCODE`, `B_STATE`, `B_COUNTRY`, `INVEST_ID`, `BROK_CODE`, `PANNO1`, `PANNO2`, `PANNO3`, `PAN_STATU0`, `PAN_STATU1`, `PAN_STATU2`, `MAPIN1`, `MAPIN2`, `MAPIN3`, `CREA_DATE`, `CREA_TIME`, `CUSTOMER_3`, `FAMILY_SO4`, `GOAL_SHEET`, `GOAL`, `GOAL_DETA5`, `KYC_ID`, `KYC_STATUS`, `HOLDING_T6`, `SOCIAL_ST7`, `FOLIO_SOU8`, `PBANK_NAME`, `PERSONAL_9`, `PAYMENT_10`, `ACCOUNT_11`, `BRANCH_N12`, `PAYMENT_13`, `CUSTOMER14`, `DD_PAYAB15`, `BANK_CODE`, `IFSC_CODE`, `PAYMENT_16`, `NEFT_CODE`, `DEFAULT_17`, `EUIN`, `SUB_BROK18`, `NOMINEE1`, `NOMINEE2`, `NOMINEE3`, `NOMINEE_19`, `DP_ID`, `BENF_ID`, `GUARDIAN20`, `GUARDIAN21`, `DIVIDEND22`, `CKYC_ID`, `H1_CKYC_ID`, `H2_CKYC_ID`, `G_CKYC_ID`)";
            break;
            case 'c_karvy': $tbl = "CM_KARVY (`PRCODE`, `FUND`, `ACNO`, `DIVOPT`, `FUNDDESC`, `INVNAME`, `JTNAME1`, `JTNAME2`, `ADD1`, `ADD2`, `ADD3`, `CITY`, `PIN`, `STATE`, `COUNTRY`, `TPIN`, `DOB`, `FNAME`, `MNAME`, `RPHONE`, `PH_RES1`, `PH_RES2`, `OPHONE`, `PH_OFF1`, `PH_OFF2`, `FAX`, `FAX_OFF`, `STATUS`, `OCCPN`, `EMAIL`, `BNKACNO`, `BNAME`, `BNKACTYPE`, `BRANCH`, `BADD1`, `BADD2`, `BADD3`, `BCITY`, `BPHONE`, `BSTATE`, `BCOUNTRY`, `INV_ID`, `BROKCODE`, `PANGNO`, `MOBILE`, `CRDATE`, `CRTIME`, `OCCP_DESC`, `MODECD`, `MODEOFHOLD`, `MAPIN`, `IMCATEGORY`, `PAN2`, `PAN3`, `GUARDIANN0`, `NOMINEE`, `CLIENTID`, `DPID`, `CATEGORYD1`, `IFSC`, `STATUSDESC`, `NOMINEE2`, `NOMINEE3`, `KYC1FLAG`, `KYC2FLAG`, `KYC3FLAG`, `GUARDPANNO`, `LASTUPDAT2`, `CAN`, `NOMINEEREL`, `NOMINEE2R3`, `NOMINEE3R4`, `NOMINEERA5`, `NOMINEE2R6`, `NOMINEE3R7`, `ADRH1INFO`, `ADRH2INFO`, `ADRH3NFO`, `ADRGINFO`, `NOMINEE_A8`, `NOMINEE_A9`, `NOMINEE_10`, `NOMINEE_11`, `NOMINEE_12`, `NOMINEE_13`, `NOMINEE_14`, `NOMINEE_15`, `NOMINEE216`, `NOMINEE217`, `NOMINEE218`, `NOMINEE219`, `NOMINEE220`, `NOMINEE221`, `NOMINEE222`, `NOMINEE223`, `NOMINEE324`, `NOMINEE325`, `NOMINEE326`, `NOMINEE327`, `NOMINEE328`, `NOMINEE329`, `NOMINEE330`, `NOMINEE331`, `CKYC_NO`, `JH1_CKYC`, `JH2_CKYC`, `GUARDIAN32`, `JOINT_HO33`, `JOINT_HO34`, `INVESTOR35`)";
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
$db_path = "../dbffile/".$_FILES['file']['name'];
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
$q = "insert into $db.$table values (";
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