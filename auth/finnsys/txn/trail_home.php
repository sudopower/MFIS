

<html>                                                
<head>

<title>TRAIL.HOME</title>

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
<form action="trail.home.asp" method=get>

<table height="30" border=0 cellpadding=0 cellspacing=0 width="100%" valign=top bgcolor="#eeeeee" >
		<tr  >
			<td width="85%" align=left class=smaller >
			<span class='datamgmt'><b>Data Management</b> -> Import Trail Reports</span>	
			</td>
        
		    <td class=smaller valign=middle align=center nowrap width="135px">	
                <A  onclick="window.open('/finnsys/help/main.asp?moveto=S','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;"  href="#"><img src="/finnsys/images/support.png" border=0></a>
		    </td>
		    <td class=smaller valign=middle align=center nowrap width="135px">	
			    <A  onclick="window.open('/finnsys/help/main.asp?page=TRAIL.HOME','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;" href="#"><img src="/finnsys/images/tutorial.png" border=0></a>
		    </td>
        
		</tr>
</table>

<table height="100" border=0 cellpadding=8 cellspacing=0 width="100%" valign=top>
		<tr><td valign="top">
			<table align=center width="100%" valign=top border=0 cellpadding=3 cellspacing=0>
				<tr><td width="35%" bgcolor="#f06601" height=35 class=normal align=center>
					<font color="white"><b>Trail Import Status</b></font>
				</td>
				<td bgcolor="#eeeeee" class=smallest align=right valign=bottom>
				<b>Select Month:</b>&nbsp;
				<select SIZE="1" NAME="REPMONTH" style="color: #477AB8; font-weight: bold; font-face: arial, verdana; font-size: 12; solid #477AB8; width: 50px; ">
					<option value="1" >Jan</option>
					<option value="2" selected>Feb</option>
					<option value="3" >Mar</option>
					<option value="4" >Apr</option>
					<option value="5" >May</option>
					<option value="6" >Jun</option>
					<option value="7" >Jul</option>
					<option value="8" >Aug</option>
					<option value="9" >Sep</option>
					<option value="10" >Oct</option>
					<option value="11" >Nov</option>
					<option value="12" >Dec</option>
				</select>&nbsp;
				
				<select SIZE="1" NAME="REPYEAR" style="color: #477AB8; font-weight: bold; font-face: arial, verdana; font-size: 12; solid #477AB8; width: 80px; ">
				
					<option value="2019" selected>2019</option>
				
					<option value="2018" >2018</option>
				
					<option value="2017" >2017</option>
				
					<option value="2016" >2016</option>
				
					<option value="2015" >2015</option>
				
					<option value="2014" >2014</option>
				
				</select>
				&nbsp;<INPUT style="FONT-WEIGHT: bold; FONT-SIZE: 10px; WIDTH: 30px; COLOR: #ffffff; FONT-FAMILY: Arial; HEIGHT: 20px; BACKGROUND-COLOR: #3787af" type=submit value=Go name=Search> 

				</td>
				</tr>
			</table>
			<br>
			<table width="100%" border=1 cellpadding=4 cellspacing=1 bordercolor="#eeeeee">
							
			
				<tr>
					<td class=smallest width="20%" align=center><b>Date Added</b></td>
					<td class=smallest width="20%" align=center><b>Registrar</b></td>
					<td class=smallest width="20%"><b>File</b></td>
				</tr>	
				
				<tr height="150"><td class=smaller colspan=3 align=center>
					<b><font color=red>No File Uploaded in this Month.</font></b>
				</td></tr>	
					
					<tr><td colspan=3 align=center>
						<input Onclick='return window.open("/FinnSys/txn/upload.trail.asp","CHILD","top=50,left=150,height=450,width=550,header=no,resizable=yes,scrollbars=1,status=1")' type=button name="STARTNEW" Value = "Upload New File" STYLE="font-family:Arial; font-size:10px; background-color: #3787af; font-weight:bold;color:#ffffff; width:150; height:20;">
						</td>
					</tr>
				</table>
							
		</td></tr>
</table>
</form>
</center>
</body>
</html>
