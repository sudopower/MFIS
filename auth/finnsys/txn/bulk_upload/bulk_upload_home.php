<html><head>

<title>BULK.UPLOAD.HOME</title>

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


<link rel="stylesheet" href="http://katariaweb.com/FinnSys/includes/standard.css" type="text/css">


</head>
<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<center>

<table height="30" border="0" cellpadding="0" cellspacing="0" width="100%" valign="top" bgcolor="#eeeeee">
		<tbody><tr>
			<td width="85%" align="left" class="smaller">
			<span class="datamgmt"><b>Data Management</b> -&gt; Bulk Import Masters</span>	
			</td>
        
		    <td class="smaller" valign="middle" align="center" nowrap="" width="135px">	
                <a onclick="window.open('/finnsys/help/main.asp?moveto=S','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;" href="#"><img src="/finnsys/images/support.png" border="0"></a>
		    </td>
		    <td class="smaller" valign="middle" align="center" nowrap="" width="135px">	
			    <a onclick="window.open('/finnsys/help/main.asp?page=BULK.UPLOAD.HOME','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;" href="#"><img src="/finnsys/images/tutorial.png" border="0"></a>
		    </td>
        
		</tr>
</tbody></table>

<table height="200" border="0" cellpadding="0" cellspacing="1" width="100%" valign="top" align="left">
<tbody><tr><td>
<table height="200" border="0" cellpadding="8" cellspacing="0" width="100%" valign="top">
		<tbody><tr><td valign="top">
<form method="POST" name="form1" action="">		
			<table width="100%" cellspacing="0" cellpadding="0">	
			<tbody><tr><td>
			<table align="center" width="100%" valign="top" border="0" cellpadding="0" cellspacing="1" bgcolor="#f06601">
				<tbody><tr><td>
					<table align="center" width="100%" valign="top" border="0" cellpadding="8" cellspacing="0" bgcolor="white">		
					<tbody><tr><td class="smaller" valign="top">
						<font color="#f06601"><b><u>BULK Upload / Process Historic Data</u></b></font>
						<br><br>
						To process the historic data or large mailback files, FTP the file(s) (in excel format from the registrars) in the designated folders, as below:
						<br><br><b><font color="red">Note: </font></b><font color="red">To convert <b>.dbf</b> extension report file into <b>.xls</b> format, simply open the <b>.dbf</b> file in excel and save the file with <b>Microsoft Excel 97-2000 &amp; 5.0/95 Workbook (*.xls)</b> in the <b>Save as type</b> option.</font>
						<br>&nbsp;
						<table align="center" width="100%" valign="top" border="1" cellpadding="8" cellspacing="1" bgcolor="white" bordercolor="#3787af">		
						<tbody><tr>
							<td class="smaller" align="center" width="50"><b>Registrar</b></td>
							<td class="smaller" align="center"><b>Folder</b></td>
						</tr>
						<tr>
							<td class="smaller" align="center" width="50"><b><font color="#3787af">CAMS</font></b><br><br>
							<input type="BUTTON" onclick="return window.open(&quot;bulk.upload.folders.asp?REGIS=CAMS&quot;,&quot;FOLDERLIST_BULK&quot;,&quot;top=80,left=120,height=400,width=600,header=no,resizable=yes,scrollbars=1,status=1&quot;)" name="SHOWCAMS" value="Show" style="font-family:Arial; font-size:10px; background-color: #3787af; font-weight:bold;color:#ffffff; width:60; height:20;">
							</td>
							<td class="smaller"><b><font color="#3787af">Client Master:</font></b> http://arpitdubey.com/FinnSys/bulk_upload_data/CAMS/CLIENTS/
							<br><br><b><font color="#3787af">Transactions:</font></b> http://arpitdubey.com/FinnSys/bulk_upload_data/CAMS/TXN/
							<br><br><b><font color="#3787af">Brokerage (Trail):</font></b> http://arpitdubey.com/FinnSys/bulk_upload_data/CAMS/TRAIL/
							</td>
						</tr>
						<tr>
							<td class="smaller" align="center" width="50"><b><font color="#3787af">FRANKLIN</font></b><br><br>
							<input type="BUTTON" onclick="return window.open(&quot;bulk.upload.folders.asp?REGIS=FRANKLIN&quot;,&quot;FOLDERLIST_BULK&quot;,&quot;top=80,left=120,height=400,width=600,header=no,resizable=yes,scrollbars=1,status=1&quot;)" name="SHOWFRANKLIN" value="Show" style="font-family:Arial; font-size:10px; background-color: #3787af; font-weight:bold;color:#ffffff; width:60; height:20;">
							</td>
							<td class="smaller"><b><font color="#3787af">Client Master:</font></b> http://arpitdubey.com/FinnSys/bulk_upload_data/FRANKLIN/CLIENTS/
							<br><br><b><font color="#3787af">Transactions:</font></b> http://arpitdubey.com/FinnSys/bulk_upload_data/FRANKLIN/TXN/
							<br><br><b><font color="#3787af">Brokerage (Trail):</font></b> http://arpitdubey.com/FinnSys/bulk_upload_data/FRANKLIN/TRAIL/
							</td>
						</tr>
						<tr>
							<td align="center" class="smaller" width="50"><b><font color="#3787af">KARVY</font></b><br><br>
							<input type="BUTTON" onclick="return window.open(&quot;bulk.upload.folders.asp?REGIS=KARVY&quot;,&quot;FOLDERLIST_BULK&quot;,&quot;top=80,left=120,height=400,width=600,header=no,resizable=yes,scrollbars=1,status=1&quot;)" name="SHOWKARVY" value="Show" style="font-family:Arial; font-size:10px; background-color: #3787af; font-weight:bold;color:#ffffff; width:60; height:20;">
							</td>
							<td class="smaller"><b><font color="#3787af">Client Master:</font></b> http://arpitdubey.com/FinnSys/bulk_upload_data/KARVY/CLIENTS/
							<br><br><b><font color="#3787af">Transactions:</font></b> http://arpitdubey.com/FinnSys/bulk_upload_data/KARVY/TXN/
							<br><br><b><font color="#3787af">Brokerage (Trail):</font></b> http://arpitdubey.com/FinnSys/bulk_upload_data/KARVY/TRAIL/
							</td>
						</tr>
						<tr>
							<td align="center" class="smaller" width="50"><b><font color="#3787af">DEUTSCHE</font></b><br><br>
							<input type="BUTTON" onclick="return window.open(&quot;bulk.upload.folders.asp?REGIS=DEUTSCHE&quot;,&quot;FOLDERLIST_BULK&quot;,&quot;top=80,left=120,height=400,width=600,header=no,resizable=yes,scrollbars=1,status=1&quot;)" name="SHOWDEUTSCHE" value="Show" style="font-family:Arial; font-size:10px; background-color: #3787af; font-weight:bold;color:#ffffff; width:60; height:20;">
							</td>
							<td class="smaller"><b><font color="#3787af">Client Master:</font></b> http://arpitdubey.com/FinnSys/bulk_upload_data/DEUTSCHE/CLIENTS/
							<br><br><b><font color="#3787af">Transactions:</font></b> http://arpitdubey.com/FinnSys/bulk_upload_data/DEUTSCHE/TXN/
							<br><br><b><font color="#3787af">Brokerage (Trail):</font></b> http://arpitdubey.com/FinnSys/bulk_upload_data/DEUTSCHE/TRAIL/
							</td>
						</tr>
						<tr>
							<td align="center" class="smaller" width="50"><b><font color="#3787af">SUNDARAM</font></b><br><br>
							<input type="BUTTON" onclick="return window.open(&quot;bulk.upload.folders.asp?REGIS=SUNDARAM&quot;,&quot;FOLDERLIST_BULK&quot;,&quot;top=80,left=120,height=400,width=600,header=no,resizable=yes,scrollbars=1,status=1&quot;)" name="SHOWSUNDARAM" value="Show" style="font-family:Arial; font-size:10px; background-color: #3787af; font-weight:bold;color:#ffffff; width:60; height:20;">
							</td>
							<td class="smaller"><b><font color="#3787af">Client Master:</font></b> http://arpitdubey.com/FinnSys/bulk_upload_data/SUNDARAM/CLIENTS/
							<br><br><b><font color="#3787af">Transactions:</font></b> http://arpitdubey.com/FinnSys/bulk_upload_data/SUNDARAM/TXN/
							<br><br><b><font color="#3787af">Brokerage (Trail):</font></b> http://arpitdubey.com/FinnSys/bulk_upload_data/SUNDARAM/TRAIL/
							</td>
						</tr>
						</tbody></table>
						
						</td>
					</tr>
					</tbody></table>
				</td>
				</tr>
			</tbody></table>	
			</td>
			<td valign="top" background="/FinnSys/images/shadow_rt.gif" width="7"></td>
			</tr>
			<tr><td valign="top" background="/FinnSys/images/shadow_bt.gif" height="8"></td><td></td></tr>
			</tbody></table>
</form>			
		</td>
		</tr>
</tbody></table>
</td></tr>
</tbody></table>


</center></body></html>