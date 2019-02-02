<?php 

include_once('../auth/session.php');
if(isset($_POST['SUBMIT_FORM'])){
    $q='insert into investors (username,password,inv_name,address1,address2,address3,city,state,pincode,phone_res1,phone_res2,phone_res3,phone_off1,phone_off2,phone_off3,mobile_no,fax_res,fax_off,email,inv_dob,inv_doa,pan_no,folio_date)
    values ("'.$_POST['Investor_Login'].'","'.$_POST['Investor_Pass'].'","'.$_POST['Investor_Name'].'","'.$_POST['Investor_Add1'].'","'.$_POST['Investor_Add2'].'",
    "'.$_POST['Investor_Add3'].'","'.$_POST['Investor_City'].'","'.$_POST['Investor_State'].'","'.$_POST['Investor_Pin'].'","'.$_POST['Investor_Res'].'",
    "'.$_POST['Investor_Res1'].'","'.$_POST['Investor_Res2'].'","'.$_POST['Investor_Off'].'","'.$_POST['Investor_Off1'].'","'.$_POST['Investor_Off2'].'",
    "'.$_POST['Investor_MOBILE'].'","'.$_POST['Investor_Fax_Res'].'","'.$_POST['Investor_Fax_Off'].'","'.$_POST['Investor_Email'].'","'.date("Y-m-d",strtotime($_POST['Investor_DOB'])).'",
	"'.date("Y-m-d",strtotime($_POST['Investor_Anniv'])).'","'.$_POST['Investor_PAN'].'","'.date('Y-m-d').'")';
	
	if($db->query($q)){
        echo '<p style="background-color:green;color:white;margin-top:0px;margin-left:50%;width:fit-content;padding:10 10 10 10;">Successfully Added</p>';
	}
	else{
		echo '<p style="background-color:red;color:white;margin-top:0px;margin-left:50%;width:fit-content;padding:10 10 10 10;">Error in the System</p>';
	}
}
else{
	
}
if(isset($_GET['invid'])){
	$q='select * from investors where sno="'.$_GET['invid'].'"';
	$res=$db->query($q);
	while($row=$res->fetch_array()){
		$username=$row['username'];
		$pass=$row['password'];
		$name=$row['inv_name'];
		$add1=$row['address1'];
		$add2=$row['address2'];
		$add3=$row['address3'];
		$city=$row['city'];
		$state=$row['state'];
		$pin=$row['pincode'];
		$pr1=$row['phone_res1'];
		$pr2=$row['phone_res2'];
		$pr3=$row['phone_res3'];
		$po1=$row['phone_off1'];
		$po2=$row['phone_off2'];
		$po3=$row['phone_off3'];
		$mob=$row['mobile_no'];
		$faxr=$row['fax_res'];
		$faxo=$row['fax_off'];
		$email=$row['email'];
		$dob=$row['inv_dob'];
		$doa=$row['inv_doa'];
		$pan=$row['pan_no'];
	}
}
if(isset($_POST['UPDATE_FORM'])){
	echo $_POST['Investor_DOB'];
$q='UPDATE investors set ';
if(isset($_POST['Investor_Login'])){$q.='username="'.$_POST['Investor_Login'].'",password="'.$_POST['Investor_RePass'].'",';}
$q.= 'inv_name="'.$_POST['Investor_Name'].'",address1="'.$_POST['Investor_Add1'].'",address2="'.$_POST['Investor_Add2'].'",
address3="'.$_POST['Investor_Add3'].'",city="'.$_POST['Investor_City'].'",state="'.$_POST['Investor_State'].'",
pincode="'.$_POST['Investor_Pin'].'",phone_res1="'.$_POST['Investor_Res'].'",phone_res2="'.$_POST['Investor_Res1'].'",
phone_res3="'.$_POST['Investor_Res2'].'",phone_off1="'.$_POST['Investor_Off'].'",phone_off2="'.$_POST['Investor_Off1'].'",
phone_off3="'.$_POST['Investor_Off2'].'",mobile_no="'.$_POST['Investor_MOBILE'].'",fax_res="'.$_POST['Investor_Fax_Res'].'",
fax_off="'.$_POST['Investor_Fax_Off'].'",email="'.$_POST['Investor_Email'].'",inv_dob="'.date("Y-m-d",strtotime($_POST['Investor_DOB'])).'"
,inv_doa="'.date("Y-m-d",strtotime($_POST['Investor_Anniv'])).'",pan_no="'.$_POST['Investor_PAN'].'" where sno="'.$_POST['invid'].'"';
if($db->query($q)){
	echo '<p style="background-color:green;color:white;margin-top:0px;margin-left:50%;width:fit-content;padding:10 10 10 10;">Successfully Updated</p>';
}
else{
	echo '<p style="background-color:red;color:white;margin-top:0px;margin-left:50%;width:fit-content;padding:10 10 10 10;">Error in the System</p>';
}
}

?><script language="javascript" type="text/javascript">
    
    function limitText(limitField, limitCount) {
        
        var limitNum = 120;
        if (limitField.value.length > limitNum) {
            limitField.value = limitField.value.substring(0, limitNum);
        } else {
            var remaining = limitNum - limitField.value.length
            limitCount.innerHTML = 'Remaining ' + remaining + ' characters';
        }
    }
</script>



<html>                                                

<head>

<style>

    #tabsJ {
      float:left;
      width:100%;
      background:#FFFFFF;
      font-size:93%;
      line-height:normal;
      border-bottom:5px solid #24618E;
      }
    #tabsJ ul {
	  margin:0;
	  padding:10px 10px 0 5px;
	  list-style:none;
	  font-family: verdana;
      }
  
    #tabsJ span.sel {
       float:left;
      display:block;
      background:url("/FinnSys/images/tabrightJ.gif") no-repeat right top;
      padding:5px 15px 4px 6px;
      color:#ffffff;
      background-position:100% -42px;
	}
 
    #tabsJ span.nsel{
       float:left;
      background:url("/FinnSys/images/tableftJ.gif") no-repeat left top;
      margin:0;
      padding:0 0 0 5px;
      color:#24618E;
	  background-position:0% -42px;
	}


</style>


<title>ADD INVESTOR</title>

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

<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<center>
<br>
<FORM NAME="FORM1" METHOD=POST ACTION="add_new.php">
<table width="600" cellpadding=0 cellspacing=0 border=0>
<tr>
<td valign=top >
	<div id="tabsJ" >
	  <ul>
	   <span class="nsel" ><span class="sel" ><b>New Investor</b></span></span>
	  </ul>
	</div>
</td>
<td></td>
</tr>
<tr><td>
	

	<table align=center width="100%" valign=top border=0 cellpadding=0 cellspacing=1 bgcolor= "#24618E">
	<tr><td>
		<table align=center width="100%" valign=top border=0 cellpadding=8 cellspacing=0 bgcolor= "white">		
		<tr bgcolor="#eeeeee" >
			<td valign="center" height=35 >
					&nbsp;<b>Investors</b>
			</td>
			<td valign="center" align=right >
					<img src="/FinnSys/images/i_close.gif" border=0 onclick="window.close()">
			</td>
		</tr>
		
		<tr><td class=smallest align=right>
			<font color=red>* Required</font>
		</td></tr>
		
		<tr><td class=smaller align="left">
			<font color="#317396">
			<input type=checkbox id="Investor_Allow_Web_Access" name="Investor_Allow_Web_Access" checked VALUE="1" OnClick="ShowLoginDetails();" OnBlur="ShowLoginDetails();"><b>&nbsp;Allow web access</b>
			</font>
			<br>&nbsp;
			<DIV id="showlogin" >
                

			        <table border=0 cellpadding=6 cellspacing=1 width="90%" valign=top align=center>
			        <tr>
                        <td width="30%" class=smallest bgcolor="#91bfd9">
				            <b>Login:</b> <font color=red>*</font>
			            </td>
			            <td class=smallest>
				            <input type=text name="Investor_Login" value="<?php if(isset($username)){echo $username;} ?>" size="30">
				            <br>(min 5 characters; only a-z 0-9 _ . @ - are allowed) 
			            </td>
			        </tr>
			        <tr>
                        <td width="30%" class=smallest bgcolor="#91bfd9">
				            <b>Password:</b> <font color=red>*</font>
			            </td>
			            <td class=smallest>
				            <?php if(isset($pass)){echo '<input type="text" name="Investor_Pass" value="'.$pass.'" size="20">';} else{
								echo '<input type="password" name="Investor_Pass" value=""  size="20">';
							} ?>
					        <br>(min 6 characters, 1 number required) 
				            
			            </td>
			        </tr>
			        <tr>
                        <td width="30%" class=smallest bgcolor="#91bfd9">
				            <b>Retype:</b> <font color=red>*</font>
			            </td>
			            <td>
				            <input type=password name="Investor_RePass" value="<?php if(isset($pass)){echo $pass;} ?>" size="20">
			            </td>
			        </tr>
			        <tr>
                        <td width="30%" class=smallest >
			            </td>
			            <td class=smallest align=right>
				            <a href="#" Onclick="return suggestlogin(FORM1.Investor_Email.value, FORM1.Investor_Name.value);">Suggest Login & Password</a>
			            </td>
			        </tr>
			        </table>

                
			<br>
			</div>
		</td></tr>
		<tr><td>
			<table border=0 cellpadding=6 cellspacing=1 width="90%" valign=top align=center>	
			<tr>
				<td width="30%" class=smallest bgcolor="#91bfd9"><b>Name:</b> <font color=red>*</font></td>
				<td><input type=text name="Investor_Name" value="<?php if(isset($name)){echo $name;} ?>" size=50 maxlength=50>
				</td>
			</tr>	
			<tr>
				<td width="30%" class=smallest bgcolor="#91bfd9"><b>Address:</b> <font color=red>*</font></td>
				<td ><input type=text name="Investor_Add1" value="<?php if(isset($add1)){echo $add1;} ?>" size=50 maxlength=50>
				<br><input type=text name="Investor_Add2" value="<?php if(isset($add2)){echo $add2;} ?>" size=50 maxlength=50>
				<br><input type=text name="Investor_Add3" value="<?php if(isset($add3)){echo $add3;} ?>" size=50 maxlength=50>
				</td>
			</tr>
			<tr>
				<td width="30%" class=smallest bgcolor="#91bfd9"><b>City:</b> <font color=red>*</font></td>
				<td><input type=text name="Investor_City" value="<?php if(isset($city)){echo $city;} ?>" size=40 maxlength=50></td>
			</tr>
			<tr>
				<td width="30%" class=smallest bgcolor="#91bfd9"><b>State:</b> <font color=red>*</font></td>
				<td><input type=text name="Investor_State" value="<?php if(isset($state)){echo $state;} ?>" size=40 maxlength=50></td>
			</tr>
			<tr>
				<td width="30%" class=smallest bgcolor="#91bfd9"><b>Pin:</b> <font color=red>*</font></td>
				<td><input type=text name="Investor_Pin" value="<?php if(isset($pin)){echo $pin;} ?>" size=30 maxlength=50></td>
			</tr>
			<tr>
				<td width="30%" class=smallest bgcolor="#91bfd9"><b>Phone (Res):</b></td>
				<td><input type=text name="Investor_Res" value="<?php if(isset($pr1)){echo $pr1;} ?>" size=30 maxlength=50>
				<br><input type=text name="Investor_Res1" value="<?php if(isset($pr2)){echo $pr2;} ?>" size=30 maxlength=50>
				<br><input type=text name="Investor_Res2" value="<?php if(isset($pr3)){echo $pr3;} ?>" size=30 maxlength=50>
				</td>
			</tr>

			<tr>
				<td width="30%" class=smallest bgcolor="#91bfd9"><b>Phone (Off):</b></td>
				<td><input type=text name="Investor_Off" value="<?php if(isset($po1)){echo $po1;} ?>" size=30 maxlength=50>
				<br><input type=text name="Investor_Off1" value="<?php if(isset($po2)){echo $po2;} ?>" size=30 maxlength=50>
				<br><input type=text name="Investor_Off2" value="<?php if(isset($po3)){echo $po3;} ?>" size=30 maxlength=50>
				</td>
			</tr>
			<tr>
				<td width="30%" class=smallest bgcolor="#91bfd9"><b>Mobile:</b> <font color=red>*</font></td>
				<td><input type=text name="Investor_MOBILE" value="<?php if(isset($mob)){echo $mob;} ?>" size=30 maxlength=50></td>
			</tr>
			<tr>
				<td width="30%" class=smallest bgcolor="#91bfd9"><b>Fax (Res):</b> </td>
				<td><input type=text name="Investor_Fax_Res" value="<?php if(isset($faxr)){echo $faxr;} ?>" size=30 maxlength=50></td>
			</tr>
			<tr>
				<td width="30%" class=smallest bgcolor="#91bfd9"><b>Fax (Off):</b></td>
				<td><input type=text name="Investor_Fax_Off" value="<?php if(isset($faxo)){echo $faxo;} ?>" size=30 maxlength=50></td>
			</tr>
			<tr>
				<td width="30%" class=smallest bgcolor="#91bfd9"><b>Email:</b> <font color=red>*</font></td>
				<td><input type=text name="Investor_Email" value="<?php if(isset($email)){echo $email;} ?>" size=30 maxlength=50></td>
			</tr>

			<tr>
				<td width="30%" class=smallest bgcolor="#91bfd9"><b>DOB:</b> <font color=red>*</font></td>
				<td class=smallest><input type=text name="Investor_DOB" value="<?php if(isset($dob)){echo date('d-m-Y',strtotime($dob));} ?>" size=30 maxlength=50>
				(e.g. 30-12-1975)</td>
			</tr>
			
			<tr>
				<td width="30%" class=smallest bgcolor="#91bfd9"><b>Marriage Anniversary:</b></td>
				<td class=smallest><input type=text name="Investor_Anniv" value="<?php if(isset($doa)){echo date('d-m-Y',strtotime($doa));;} ?>" size=30 maxlength=50>
				(e.g. 30-12-1995)</td>
			</tr>
			
			<tr>
				<td width="30%" class=smallest bgcolor="#91bfd9"><b>PAN:</b></td>
				<td><input type=text name="Investor_PAN" value="<?php if(isset($pan)){echo $pan;} ?>" size=30 maxlength=50></td>
			</tr>
			<tr>
				<td colspan=2 class=normal ALIGN=CENTER>
					<INPUT type="submit" value="<?php if(isset($_GET['invid'])){echo 'Update';}else{echo 'Create New Investor';} ?>" name="<?php if(isset($_GET['invid'])){echo 'UPDATE_FORM';}else{echo 'SUBMIT_FORM';} ?>" class=normal onClick="" STYLE="font-family:Arial; font-size:xx-medium;font-weight:bold;color:#000000; width:200">
					<input type="hidden" name="invid" value="<?php if(isset($_GET['invid'])){echo $_GET['invid'];}?>" >
					<input type=hidden name="SYS_ALLOW_WEB_ACCESS_FROM_DB" value="0">
				</td>
			</tr>
			<tr><td colspan=2>&nbsp;</td></tr>
			</table>
			</td></tr>
			
		</table>	
	</td>
	</tr>
	</table>
<script language=javascript>
ShowLoginDetails();

function ShowLoginDetails()
{
	var subobj=document.getElementById('showlogin');
	var chkobj=document.getElementById('Investor_Allow_Web_Access');
	
	//alert(chkobj.checked);
	if (chkobj != null)
	{
		if (chkobj.checked == true)
			subobj.style.display="block"
		else
			subobj.style.display="none"
	}
}

function suggestlogin(nEmail, nName)
{

    if (nEmail != "") {
        var newlogin = nEmail; // first preference
    }
    else if (nName != "") {
        var newlogin = nName; // second preference
    }
    else { return false; }

	newlogin = newlogin.replace(/^\s+|\s+$/g,"");
	newlogin = newlogin.replace(/ /g,'');
	newlogin = newlogin.toLowerCase();
	
	var lenoflogin = newlogin.length;
	if ((lenoflogin) < 5)
	{
		if (lenoflogin == 1)
			newlogin = newlogin + '0001'
		else if (lenoflogin == 2)	
			newlogin = newlogin + '001'
		else if (lenoflogin == 3)	
			newlogin = newlogin + '01'	
		else if (lenoflogin == 4)	
			newlogin = newlogin + '1'
	}
	var passwd=Math.floor(Math.random()*10000000);
	FORM1.Investor_Login.value=newlogin;
	FORM1.Investor_Pass.value=passwd;
	FORM1.Investor_RePass.value=passwd;
}

function updateopenerandclose(invid)
{
	//var frompage = String(opener.location);
	if (opener.form1){}
	else
		{//opener.location.reload();	
		window.close();}
	
	
	if (opener.form1.HIDDEN_SearchType)
	{
		opener.form1.HIDDEN_SearchType.value='INV_ID'; 
		opener.form1.SHOW_SearchStr.value=invid; 
		opener.form1.submit(); 
		window.close();
	}	
	else
	{
		opener.location.reload();	
		window.close();
	}
} 
</script>

</td>
<td background="/FinnSys/images/shadow_rt.gif" width="6"></td>
</tr>
<tr><td valign=top background="/FinnSys/images/shadow_bt.gif" height=8></td><td></td></tr>
</table>
</form>
</center>
</body>
</html>	
