


<html>                                                
<head>

<title>New.Folios.Home</title>

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
<script language="javascript">
function OpenOptions(inv_id)
{
var DivToChange = document.getElementById(inv_id);

if (DivToChange.style.display == "none")
	{
	DivToChange.style.display="block";
	return false;
	}
else
	{
	DivToChange.style.display="none";
	return false;
	}	
}

function startauto(filename)
{

var ans = confirm("The Auto Mapping tool is designed to help you do the following:\n\na) Automatically create new Investors from the Client Master file on the basis of their PAN Numbers\n\nb) Copy changes in the Folio Master like bank details change, nominee change etc from the RTA's Client Master file into your System.\n\nc) Automatically create new folios and map them to the existing Investors on the basis of PAN Numbers.\n\nDo you wish to start automatic mapping?");
if (ans)
	{
		window.open("setfilesession.asp?tofile=auto&sess_type=FLO&start=" + filename,"CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1");
	}
	else
		return false;

}
</script>

<table height="30" border=0 cellpadding=0 cellspacing=0 width="100%" valign=top bgcolor="#eeeeee" >
		<tr  >
			<td width="85%" align=left class=smaller >
			<span class='datamgmt'><b>Data Management</b> -> Import Client Master</span>	
			</td>
        
		    <td class=smaller valign=middle align=center nowrap width="135px">	
                <A  onclick="window.open('/finnsys/help/main.asp?moveto=S','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;"  href="#"><img src="/finnsys/images/support.png" border=0></a>
		    </td>
		    <td class=smaller valign=middle align=center nowrap width="135px">	
			    <A  onclick="window.open('/finnsys/help/main.asp?page=New.Folios.Home','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;" href="#"><img src="/finnsys/images/tutorial.png" border=0></a>
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
					<h3><font color="#3787af">Import Client Master</font></h3>
					
						<font color="#f06601"><b><u>List of files uploaded and waiting completion:</u></b></font>
						<br>

							

							<table width="100%">
							<tr>
								<td class=smallest align=left>Sort By: 
									<select name="nsort" onchange="window.location.href='new.folios.home.asp?nsort='+this.value;">
										<option selected value="d">Date</option>
										<option  value="i">Incomplete Files</option>
									</select>
								</td>
								<td class=smallest align=right>[ <b><a href="#"style="text-decoration:none"  Onclick='return window.open("/finnsys/txn/regfiles.status.asp?show=clients","ALLFILES","top=10,left=50,height=500,width=600,header=no,resizable=yes,scrollbars=1,status=1");'>Show all files</a></b> ]</td>
							</tr>
							</table>
							
							
							<br>
							
							
							<table width="100%" border=1 cellpadding=4 cellspacing=1 bordercolor="#eeeeee">
							<tr>
								<td class=smallest width="5%" align=center><b>Select</b></td>
								<td class=smallest width="10%" align=center><b>Date Added</b></td>
								<td class=smallest width="10%" align=center><b>Registrar</b></td>
								<td class=smallest width="30%"><b>File</b></td>
                                <td class=smallest align=center valign=middle width="15%" nowrap><b>Upload Type</b>&nbsp;<img src="/finnsys/images/help.jpg" /></td>
								<td class=smallest width="15%" align=center><b>Total Records</b></td>
								<td class=smallest width="15%" align=center><b>Mapped Records</b></td>
								
							</tr>	
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA1802659.dbf'"></td>
										<td class=smallest align=center>17.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13201');">M66551A.dbf</a>
										<DIV class=popup id="13201" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA1802659.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA1802659.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA1802659.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>69</td>
										<td class=smallest align=center>69</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'SU1501696.dbf'"></td>
										<td class=smallest align=center>17.Jan.2019</td>
										<td class=smallest align=center>SUNDARAM</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13199');">ER04---Investors-static-details-with-unit-balances-ARN-85092-16-JAN-19-21958174.dbf</a>
										<DIV class=popup id="13199" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('SU1501696.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=SU1501696.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=SU1501696.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>6</td>
										<td class=smallest align=center>6</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA13305346.dbf'"></td>
										<td class=smallest align=center>17.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13196');">M54750j.dbf</a>
										<DIV class=popup id="13196" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA13305346.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA13305346.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA13305346.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>40</td>
										<td class=smallest align=center>40</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA1401590.dbf'"></td>
										<td class=smallest align=center>17.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13193');">M72241s.dbf</a>
										<DIV class=popup id="13193" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA1401590.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA1401590.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA1401590.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>325</td>
										<td class=smallest align=center>325</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA13304410.dbf'"></td>
										<td class=smallest align=center>17.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13192');">M17732s.dbf</a>
										<DIV class=popup id="13192" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA13304410.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA13304410.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA13304410.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>314</td>
										<td class=smallest align=center>314</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'CA13303823.dbf'"></td>
										<td class=smallest align=center>17.Jan.2019</td>
										<td class=smallest align=center>CAMS</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13191');">17012019052653_79070152R9.dbf</a>
										<DIV class=popup id="13191" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('CA13303823.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=CA13303823.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=CA13303823.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>21</td>
										<td class=smallest align=center>21</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'CA1305334.dbf'"></td>
										<td class=smallest align=center>17.Jan.2019</td>
										<td class=smallest align=center>CAMS</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13190');">tmp621_17012019055058_79070153R9.dbf</a>
										<DIV class=popup id="13190" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('CA1305334.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=CA1305334.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=CA1305334.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>8</td>
										<td class=smallest align=center>8</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'CA12302640.dbf'"></td>
										<td class=smallest align=center>17.Jan.2019</td>
										<td class=smallest align=center>CAMS</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13188');">17012019055058_79070153R9.dbf</a>
										<DIV class=popup id="13188" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('CA12302640.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=CA12302640.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=CA12302640.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>8</td>
										<td class=smallest align=center>8</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA1605216.dbf'"></td>
										<td class=smallest align=center>16.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13187');">M7244n.dbf</a>
										<DIV class=popup id="13187" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA1605216.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA1605216.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA1605216.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>330</td>
										<td class=smallest align=center>330</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'SU1604832.dbf'"></td>
										<td class=smallest align=center>16.Jan.2019</td>
										<td class=smallest align=center>SUNDARAM</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13185');">ER04---Investors-static-details-with-unit-balances-ARN-85092-15-JAN-19-21928683.dbf</a>
										<DIV class=popup id="13185" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('SU1604832.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=SU1604832.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=SU1604832.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>3</td>
										<td class=smallest align=center>3</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA1404932.dbf'"></td>
										<td class=smallest align=center>16.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13183');">M26817A.dbf</a>
										<DIV class=popup id="13183" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA1404932.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA1404932.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA1404932.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>66</td>
										<td class=smallest align=center>66</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA14304155.dbf'"></td>
										<td class=smallest align=center>16.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13181');">M9843j.dbf</a>
										<DIV class=popup id="13181" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA14304155.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA14304155.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA14304155.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>39</td>
										<td class=smallest align=center>39</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'CA12303129.dbf'"></td>
										<td class=smallest align=center>16.Jan.2019</td>
										<td class=smallest align=center>CAMS</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13160');">16012019054640_79070153R9.dbf</a>
										<DIV class=popup id="13160" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('CA12303129.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=CA12303129.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=CA12303129.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>8</td>
										<td class=smallest align=center>8</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'CA12302151.dbf'"></td>
										<td class=smallest align=center>16.Jan.2019</td>
										<td class=smallest align=center>CAMS</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13159');">16012019052629_79070152R9.dbf</a>
										<DIV class=popup id="13159" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('CA12302151.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=CA12302151.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=CA12302151.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>21</td>
										<td class=smallest align=center>21</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA13301114.dbf'"></td>
										<td class=smallest align=center>15.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13152');">M16621A.dbf</a>
										<DIV class=popup id="13152" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA13301114.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA13301114.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA13301114.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>56</td>
										<td class=smallest align=center>56</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA1401598.dbf'"></td>
										<td class=smallest align=center>15.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13150');">M78450j.dbf</a>
										<DIV class=popup id="13150" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA1401598.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA1401598.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA1401598.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>2</td>
										<td class=smallest align=center>2</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA13301369.dbf'"></td>
										<td class=smallest align=center>15.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13146');">M32619n.dbf</a>
										<DIV class=popup id="13146" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA13301369.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA13301369.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA13301369.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>99</td>
										<td class=smallest align=center>99</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'SU14302285.dbf'"></td>
										<td class=smallest align=center>15.Jan.2019</td>
										<td class=smallest align=center>SUNDARAM</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13142');">ER04---Investors-static-details-with-unit-balances-ARN-85092-14-JAN-19-21903026.dbf</a>
										<DIV class=popup id="13142" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('SU14302285.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=SU14302285.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=SU14302285.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>3</td>
										<td class=smallest align=center>3</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA13301273.dbf'"></td>
										<td class=smallest align=center>15.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13141');">M28233s.dbf</a>
										<DIV class=popup id="13141" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA13301273.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA13301273.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA13301273.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>57</td>
										<td class=smallest align=center>57</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'CA1303717.dbf'"></td>
										<td class=smallest align=center>15.Jan.2019</td>
										<td class=smallest align=center>CAMS</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13140');">15012019060537_79070153R9.dbf</a>
										<DIV class=popup id="13140" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('CA1303717.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=CA1303717.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=CA1303717.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>5</td>
										<td class=smallest align=center>5</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'CA1302990.dbf'"></td>
										<td class=smallest align=center>15.Jan.2019</td>
										<td class=smallest align=center>CAMS</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13139');">15012019053728_79070152R9.dbf</a>
										<DIV class=popup id="13139" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('CA1302990.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=CA1302990.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=CA1302990.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>3</td>
										<td class=smallest align=center>3</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA14303738.dbf'"></td>
										<td class=smallest align=center>14.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13132');">M48835A.dbf</a>
										<DIV class=popup id="13132" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA14303738.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA14303738.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA14303738.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>147</td>
										<td class=smallest align=center>147</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA12010874.dbf'"></td>
										<td class=smallest align=center>14.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13131');">M52813A.dbf</a>
										<DIV class=popup id="13131" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA12010874.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA12010874.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA12010874.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>103</td>
										<td class=smallest align=center>103</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA14302607.dbf'"></td>
										<td class=smallest align=center>14.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13130');">M87734A.dbf</a>
										<DIV class=popup id="13130" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA14302607.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA14302607.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA14302607.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>256</td>
										<td class=smallest align=center>256</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA14303961.dbf'"></td>
										<td class=smallest align=center>14.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13126');">M55646j.dbf</a>
										<DIV class=popup id="13126" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA14303961.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA14303961.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA14303961.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>17</td>
										<td class=smallest align=center>17</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA12305314.dbf'"></td>
										<td class=smallest align=center>14.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13125');">M5135j.dbf</a>
										<DIV class=popup id="13125" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA12305314.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA12305314.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA12305314.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>7</td>
										<td class=smallest align=center>7</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA12011901.dbf'"></td>
										<td class=smallest align=center>14.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13124');">M27647j.dbf</a>
										<DIV class=popup id="13124" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA12011901.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA12011901.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA12011901.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>50</td>
										<td class=smallest align=center>50</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA12010457.dbf'"></td>
										<td class=smallest align=center>14.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13110');">M31338n.dbf</a>
										<DIV class=popup id="13110" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA12010457.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA12010457.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA12010457.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>136</td>
										<td class=smallest align=center>136</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'KA1402263.dbf'"></td>
										<td class=smallest align=center>14.Jan.2019</td>
										<td class=smallest align=center>KARVY</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13109');">M8995n.dbf</a>
										<DIV class=popup id="13109" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('KA1402263.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=KA1402263.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=KA1402263.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>192</td>
										<td class=smallest align=center>192</td>
									</tr>		
								
									<tr bgcolor="#eeeeee">
									
										<td class=smallest align=center><input type="checkbox"  id="selectedfiles" name="selectedfiles" value="'SU14301787.dbf'"></td>
										<td class=smallest align=center>14.Jan.2019</td>
										<td class=smallest align=center>SUNDARAM</td>	
										<td class=smallest><a href="#" onClick="return OpenOptions('13098');">ER04---Investors-static-details-with-unit-balances-ARN-85092-11-JAN-19-21837858.dbf</a>
										<DIV class=popup id="13098" style="border: 0px solid #gray; padding: 8px; display:none; overflow:auto;">
										<table align=right>
										<tr><td class=smallest nowrap>
											<a style="text-decoration:none" Onclick="return startauto('SU14301787.dbf');" href="#"><b>[Auto map]</b></a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=daily&sess_type=FLO&start=SU14301787.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Normal]</a>&nbsp;|&nbsp;
											<a style="text-decoration:none" Onclick='return window.open("setfilesession.asp?tofile=bulk&sess_type=FLO&start=SU14301787.dbf","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' href="#">[Bulk]</a>
										</td></tr>
										</table>
										</DIV>
										<br>(all folios done)
										</td>	
                                        <td class=smallest align=center>Auto</td>
										<td class=smallest align=center>3</td>
										<td class=smallest align=center>3</td>
									</tr>		
								
							<tr height=30 >
								<td width="100%" valign="center" align = "left" colspan = "7" class=smallest>
								<b>Page</b>
								1
										<A class="SMALLER" HREF="new.folios.home.asp?nsort=&pgno=2">2</A>	
									
										<A class="SMALLER" HREF="new.folios.home.asp?nsort=&pgno=3">3</A>	
									
										<A class="SMALLER" HREF="new.folios.home.asp?nsort=&pgno=4">4</A>	
									
								&nbsp;
								
									<strong>Prev</strong>
								
									<strong>
									<A class="SMALLER" HREF="new.folios.home.asp?nsort=&pgno=2">Next</A>
									</strong>
								
								</td>
							</tr>		
							<tr><td colspan=7 align=center>
								<input Onclick='return window.open("import.php","CHILD","top=0,left=10,height=520,width=780,header=no,resizable=yes,scrollbars=1,status=1")' type=button name="STARTNEW" Value = "Upload New File" STYLE="font-family:Arial; font-size:10px; background-color: #3787af; font-weight:bold;color:#ffffff; width:150; height:20;">
								&nbsp;&nbsp;
								<input type=Submit OnClick="return confirm('You are about to complete the uploaded file.\nPlease confirm.')" id="COMPLETEFILES" name="COMPLETEFILES" Value = "Complete Done File(s)" STYLE="font-family:Arial; font-size:10px; background-color: #3787af; font-weight:bold;color:#ffffff; width:150; height:20;">
								<!--
                                &nbsp;&nbsp;
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
		</td>
		</tr>
	<input type=hidden name="pgno" value="">	
</FORM>		

</body>
</html>
