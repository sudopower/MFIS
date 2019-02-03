

<html>                                                
<head>

<title>GROUPHOME</title>

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

<table height="30" border=0 cellpadding=0 cellspacing=0 width="100%" valign=top bgcolor="#eeeeee" >
		<tr  >
			<td width="85%" align=left class=smaller >
			<span class='clntmgmt'><b>Client Management</b> -> Investor Groups / Families</span>	
			</td>
        
		    <td class=smaller valign=middle align=center nowrap width="135px">	
                <A  onclick="window.open('/finnsys/help/main.asp?moveto=S','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;"  href="#"><img src="/finnsys/images/support.png" border=0></a>
		    </td>
		    <td class=smaller valign=middle align=center nowrap width="135px">	
			    <A  onclick="window.open('/finnsys/help/main.asp?page=GROUPHOME','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;" href="#"><img src="/finnsys/images/tutorial.png" border=0></a>
		    </td>
        
		</tr>
</table>

<script language="javascript">
function CreateNewGroup()
{
	return window.open('/FinnSys/investors/new.grp.asp','GROUPDETAILS','top=20,left=100,height=500,width=550,header=no,resizable=yes,scrollbars=1');
}
function OpenGroup(Grp_Id)
{
	return window.open('/FinnSys/investors/new.grp.asp?todo=edit&grp_id='+Grp_Id,'GROUPDETAILS','top=20,left=100,height=500,width=550,header=no,resizable=yes,scrollbars=1');
}
function deletegroup(grpid, grpname)
{
	var resp = confirm("Are you sure you wish to delete group " + grpname.toUpperCase() + " permanently?");
	if (resp == true)
		return window.open("group.add.investors.asp?todo=delete&grp_id=" + grpid + "&inv_ids=","groupmem","top=100,left=200,height=200,width=400,header=no,resizable=yes,scrollbars=1");
	else
		return false;
}
</script>


<table border=0 cellpadding=5 cellspacing=1 width="100%" valign=top >
<tr >
	<td class=smallest VALIGN=center>
	<h3><font color="#3787af">Groups</font></h3>
	</td>
</tr>
</table>
<form name="form1">
<table border=0 cellpadding=0 cellspacing=0 width="70%" valign=top align=center>
<tr>
<td class=smaller align=center><b><font color="#3787af">Search: </b></font>
<input type="text" size="30" name="grp_srch" value="" >
&nbsp;<A onclick="window.open('/FinnSys/investors/grp_srch.asp?grp_srch=' + form1.grp_srch.value,'GRP_SRCH','top=20,left=100,height=500,width=550,header=no,resizable=yes,scrollbars=1,status=1');" href="#"><IMG alt="Click to Search Groups" src="/FinnSys/images/srch.gif" border=0></A>
<br><font color="#3787af">(enter text and click to search)</font><br><br>
<br>(Free Text Search - Group names and all details of group heads will be searched)
</td>
</tr>
</table>


<br>&nbsp;
<table border=0 cellpadding=5 cellspacing=1 width="100%" valign=top >
<tr >
	<td class=smaller VALIGN=bottom >
		<INPUT style="FONT-WEIGHT: bold; FONT-SIZE: 10px; WIDTH: 150px; COLOR: #ffffff; FONT-FAMILY: Arial; HEIGHT: 20px; BACKGROUND-COLOR: #3787af" OnClick="return CreateNewGroup();" type=button value="Define New Group" name=STARTNEW> 
	</td>
	<td class=smaller VALIGN=bottom align=center>
		<INPUT style="FONT-WEIGHT: bold; FONT-SIZE: 10px; WIDTH: 150px; COLOR: #ffffff; FONT-FAMILY: Arial; HEIGHT: 20px; BACKGROUND-COLOR: #3787af" OnClick="return window.open('/FinnSys/investors/grp_all.asp','GRP_SRCH','top=20,left=100,height=500,width=600,header=no,resizable=yes,scrollbars=1,status=1');" type=button value="Show All Groups" name=STARTNEW> 
	</td>
	<td class=smaller VALIGN=bottom align=right>
		<b><font color="#3787af">
			
			Showing Latest 5 / 139 Groups Added
		
		</font></b>
	</td>
</tr>
</table>

	<table bordercolor="#d2d2d3" border=1 cellpadding=8 cellspacing=1 width="98%" valign=top >
	<tr bgcolor="#d2d2d3">
		<td class=smaller align=center width="20%">
		<font color="#000000"><b>Date of Creation</b></font>
		</td>
		<td class=smaller align=center width="20%">
		<font color="#000000"><b>Group Name</b></font>
		</td>
		<td class=smaller align=center width="20%">
		<font color="#000000"><b>Group Head</b></font>
		</td>
		<td class=smaller align=center width="20%">
		<font color="#000000"><b>Total Members</b></font>
		</td>
		<td class=smaller align=center width="10%">
		<font color="#000000"><b>Group Creator</b></font>
		</td>
		<td class=smaller align=center width="10%">
		<font color="#000000"><b>Action</b></font>
		</td>
	</tr>
	
	
	<tr>
		<td class=smallest align=center >
			02.Feb.2019
		</td>
		<td class=smallest align=center >
			<b><a href="#" OnClick="return OpenGroup(141);" style="text-decoration:none;">TEJWANI</a></b>
		</td>
		<td class=smallest align=center >
			DR. LALIT KUMAR TEJWANI
		</td>
		<td class=smallest align=center >
			3
		</td>
		<td class=smallest align=center >
			SMART FUTURE INVESTOR SERVICES
		</td>
		<td class=smallest align=center >
		<A style="TEXT-DECORATION: none" onclick="return deletegroup(141,'TEJWANI');" href="#">
		<IMG alt="Delete Group" src="/FinnSys/images/delete.jpg" border=0></A>
		</td>
	</tr>
	
	
	<tr>
		<td class=smallest align=center >
			01.Feb.2019
		</td>
		<td class=smallest align=center >
			<b><a href="#" OnClick="return OpenGroup(140);" style="text-decoration:none;">MOGHE</a></b>
		</td>
		<td class=smallest align=center >
			ANJALI MOGHE
		</td>
		<td class=smallest align=center >
			3
		</td>
		<td class=smallest align=center >
			SMART FUTURE INVESTOR SERVICES / SHARMILA KEKRE(F)
		</td>
		<td class=smallest align=center >
		<A style="TEXT-DECORATION: none" onclick="return deletegroup(140,'MOGHE');" href="#">
		<IMG alt="Delete Group" src="/FinnSys/images/delete.jpg" border=0></A>
		</td>
	</tr>
	
	
	<tr>
		<td class=smallest align=center >
			30.Jan.2019
		</td>
		<td class=smallest align=center >
			<b><a href="#" OnClick="return OpenGroup(139);" style="text-decoration:none;">DHANWANI</a></b>
		</td>
		<td class=smallest align=center >
			HITESH DHANWANI
		</td>
		<td class=smallest align=center >
			3
		</td>
		<td class=smallest align=center >
			SMART FUTURE INVESTOR SERVICES
		</td>
		<td class=smallest align=center >
		<A style="TEXT-DECORATION: none" onclick="return deletegroup(139,'DHANWANI');" href="#">
		<IMG alt="Delete Group" src="/FinnSys/images/delete.jpg" border=0></A>
		</td>
	</tr>
	
	
	<tr>
		<td class=smallest align=center >
			09.Jan.2019
		</td>
		<td class=smallest align=center >
			<b><a href="#" OnClick="return OpenGroup(138);" style="text-decoration:none;">raina_patwa</a></b>
		</td>
		<td class=smallest align=center >
			RAINA PATWA
		</td>
		<td class=smallest align=center >
			3
		</td>
		<td class=smallest align=center >
			SMART FUTURE INVESTOR SERVICES
		</td>
		<td class=smallest align=center >
		<A style="TEXT-DECORATION: none" onclick="return deletegroup(138,'raina_patwa');" href="#">
		<IMG alt="Delete Group" src="/FinnSys/images/delete.jpg" border=0></A>
		</td>
	</tr>
	
	
	<tr>
		<td class=smallest align=center >
			08.Jan.2019
		</td>
		<td class=smallest align=center >
			<b><a href="#" OnClick="return OpenGroup(137);" style="text-decoration:none;">pushpendra_khandelwal</a></b>
		</td>
		<td class=smallest align=center >
			PUSHPENDRA KUMAR JASORIA
		</td>
		<td class=smallest align=center >
			11
		</td>
		<td class=smallest align=center >
			SMART FUTURE INVESTOR SERVICES
		</td>
		<td class=smallest align=center >
		<A style="TEXT-DECORATION: none" onclick="return deletegroup(137,'pushpendra_khandelwal');" href="#">
		<IMG alt="Delete Group" src="/FinnSys/images/delete.jpg" border=0></A>
		</td>
	</tr>
	
	</table>
	
<br>&nbsp;
</form>


</center>
</body>
</html>
