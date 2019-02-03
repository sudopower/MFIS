


<html>                                                
<head>

<title>TXN_HOME</title>

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
			<span class='datamgmt'><b>Data Management</b> -> Import Transactions</span>	
			</td>
        
		    <td class=smaller valign=middle align=center nowrap width="135px">	
                <A  onclick="window.open('/finnsys/help/main.asp?moveto=S','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;"  href="#"><img src="/finnsys/images/support.png" border=0></a>
		    </td>
		    <td class=smaller valign=middle align=center nowrap width="135px">	
			    <A  onclick="window.open('/finnsys/help/main.asp?page=TXN_HOME','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;" href="#"><img src="/finnsys/images/tutorial.png" border=0></a>
		    </td>
        
		</tr>
</table>

<FORM METHOD=POST name=form1 action="">		
			<table width="95%" cellspacing=0 cellpadding=0>	
			<tr><td>
			<table align=center width="100%" valign=top border=0 cellpadding=0 cellspacing=1 bgcolor= "#f06601">
				<tr><td>
					<table align=center width="100%" valign=top border=0 cellpadding=8 cellspacing=0 bgcolor= "white">		
					<tr><td class=smaller height="240" valign=top>
					<h3><font color="#3787af">Import Transactions</font></h3>
					
						<font color="#f06601"><b><u>List of files uploaded and waiting completion:</u></b></font>
						<br> 
							<br>
							<table width="100%"><tr><td class=smallest align=right>[ <b><a href="#"style="text-decoration:none"  Onclick='return window.open("/finnsys/txn/regfiles.status.asp?show=txn","ALLFILES","top=10,left=50,height=500,width=600,header=no,resizable=yes,scrollbars=1,status=1");'>Show all files</a></b> ]</td></tr></table>
							
							
							<table width="100%" border=1 cellpadding=4 cellspacing=1 bordercolor="#eeeeee">
							<tr>
								<td class=smallest width="5%" align=center><b>Select</b></td>
								<td class=smallest width="10%"  align=center><b>Date Added</b></td>
								<td class=smallest width="10%"  align=center><b>Registrar</b></td>
								<td class=smallest width="45%"><b>File</b></td>
                                <td class=smallest align=center valign=middle width="15%" nowrap><b>Upload Type</b>&nbsp;<img src="/finnsys/images/help.jpg" /></td>
								<td class=smallest width="15%"  align=center><b>Pending</b></td>
							</tr>	
								
									<tr>
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'CA13305565.dbf'"></td>
										<td class=smallest  align=center>16.Jan.2019</td>
										<td class=smallest align=center>CAMS</td>	
										<td class=smallest><a Onclick='return window.open("setfilesession.asp?sess_type=TXN&start=CA13305565.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">15012019175432_89648544R2.dbf</a></td>	
										<td class=smallest align=center>Auto</td>
                                        <td class=smallest align=center>3</td>	
									</tr>		
								
									<tr>
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'CA13304022.dbf'"></td>
										<td class=smallest  align=center>16.Jan.2019</td>
										<td class=smallest align=center>CAMS</td>	
										<td class=smallest><a Onclick='return window.open("setfilesession.asp?sess_type=TXN&start=CA13304022.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">15012019165324_89646893R2.dbf</a></td>	
										<td class=smallest align=center>Auto</td>
                                        <td class=smallest align=center>3</td>	
									</tr>		
								
								<tr><td colspan=6 align=center>
								<input Onclick='return window.open("/FinnSys/txn/wizard.step1.asp","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' type=button name="STARTNEW" Value = "Upload New File" STYLE="font-family:Arial; font-size:10px; background-color: #3787af; font-weight:bold;color:#ffffff; width:150; height:20;">
								<!--&nbsp;&nbsp;
								<input type=SUBMIT OnClick="return confirm('You are about to delete the uploaded file.\nPlease confirm.\n\nNote: You are strongly advised to take a backup of your system before deleting any data.')" id="DELETEFILES" name="DELETEFILES" Value = "Delete Selected File(s)" STYLE="font-family:Arial; font-size:10px; background-color: #3787af; font-weight:bold;color:#ffffff; width:150; height:20;">
                                -->
							</td></tr>	
							</table>	
								
						</td>
					</tr>
					</table>
				</td>
				</tr>
			</table>	
			</td>
			<td valign=top background="/FinnSys/images/shadow_rt.gif" width=7></td>
			</tr>
			<tr><td valign=top background="/FinnSys/images/shadow_bt.gif" height=8></td><td></td></tr>
			</table>
</FORM>			
		
</body>
</html>
