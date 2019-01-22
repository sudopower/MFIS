<?php 
include('session.php');

?>

<html>                                                
<head>

<title>NEW.FOLIOS.UPLOAD</title>

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
<FORM METHOD="POST" ENCTYPE="multipart/form-data" ACTION="import_preview.php" id=form1 name=form1> 

<table height="30" border=0 cellpadding=0 cellspacing=0 width="100%" valign=top bgcolor="#eeeeee" >
		<tr  >
			<td width="85%" align=left class=smaller >
				
			</td>
        
		    <td class=smaller valign=middle align=center nowrap width="135px">	
                <A  onclick="window.open('/finnsys/help/main.asp?moveto=S','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;"  href="#"><img src="/finnsys/images/support.png" border=0></a>
		    </td>
		    <td class=smaller valign=middle align=center nowrap width="135px">	
			    <A  onclick="window.open('/finnsys/help/main.asp?page=NEW.FOLIOS.UPLOAD','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;" href="#"><img src="/finnsys/images/tutorial.png" border=0></a>
		    </td>
        
		</tr>
</table>


<table height="200" border=0 cellpadding=0 cellspacing=8 width="100%" valign=top align=left>
<tr><td>
<table height="200" border=0 cellpadding=8 cellspacing=0 width="100%" valign=top>
		<tr><td valign="top">
			<table align=center width="100%" valign=top border=0 cellpadding=3 cellspacing=0>
				<tr><td width="35%" bgcolor="#f06601" height=35 class=normal align=center>
					<font color="white"><b>Import Clients</b></font>
				</td>
				<td bgcolor="#eeeeee">
				&nbsp;
				</td>
				</tr>
			</table>
				
			<table align=center width="100%" valign=top border=0 cellpadding=0 cellspacing=1 bgcolor= "#f06601">
				<tr><td >
					<table align=center width="100%" valign=top border=0 cellpadding=8 cellspacing=0 bgcolor= "white">		
					<tr><td colspan=3>&nbsp;</td></tr>
					<tr><td colspan=3>&nbsp;</td></tr>
					<tr><td colspan=2><b><font color="#f06601">&nbsp;<u>Import Clients</u></font></b></td>
					<td class=normal rowspan=10 width="40%" valign=top align=left>
					<font color="#477AB8">
					<img border=0 src="/FinnSys/images/help.jpg" alt="help">&nbsp;<b><u>Points to note:</u></b>
					<ul>
					<li>To upload new folios, select the registrar and choose the daily investors/folios file. Press "Upload File" when done.<br>&nbsp;</li>
					<li>The next step will show a preview of all the folios in the file uploaded.<br>&nbsp;</li>
					<li>Files from each registrar must be uploaded seperately.<br>&nbsp;</li>
					<li>You must then search & map all new folios with the existing investors.<br>&nbsp;</li>
					<li>Incase the investors are not found, you must create them.</li>
					</font></p>
					</ul>
					</td>
					</tr>
					<tr><td colspan=2>
					
						&nbsp;
					
					</td></tr>
					
					<tr><td class=smaller width="20%" align=right valign="center" >
						<b>Select Registrar:</b>
						</td>
						<td valign="center">
							
		
		<select SIZE="1" NAME="REGNAME" >
			<option value=""> 
				&nbsp;- Select Registrar -&nbsp; </option>
			
		
			<option value="KARVY"> KARVY </option>
			
			<option value="FRANKLIN"> FRANKLIN </option>
			
			<option value="CAMS"> CAMS </option>
			
			<option value="DEUTSCHE"> DEUTSCHE </option>
			
			<option value="SUNDARAM"> SUNDARAM </option>
			
		</select>
		
						</td>
					</tr>
					<tr>
						<td class=smaller valign="center" width="20%" align=right>
							<b>Select File:</b>
						</td>
						<td valign="center">
							<INPUT TYPE="FILE" SIZE="30" NAME="FILE1" value="D:\INETPUB\VHOSTS\katariaweb.com\httpdocs\FinnSys\daily_upload_data\new_folios" style="font-weight=normal; font-size=10px; font-face=verdana;"><BR> 
 						</td>
 					</tr>	
 					<tr><td>&nbsp;</td><td ><INPUT TYPE=SUBMIT VALUE="Upload File" name="UPLOADFILEBUTTON" style="height:22; width:120; font-weight=bold; font-size=10px; font-face=verdana;"></td></tr>
 					
 					<tr><td colspan=2>&nbsp;</td></tr>
 					<tr><td colspan=2 class=smaller><font color="#477AB8"><b><u>File Name / Type to import:</u></b></font></td></tr>
 					<tr><td colspan=2 class=smallest>
					<font color="#477AB8">
						 (<b>Important:</b> Ensure that the file is downlaoded in Excel with header format, from the registrar.)
					</font>
					</td></tr>
 					<tr>
					<td  class=smaller><font color="#477AB8"><b>CAMS: </b>"WBR9"</font></td>
					<td  class=smaller><font color="#477AB8"><b>Franklin: </b>"Client Master File"</font></td>
					</tr>
 					<tr>
					<td  class=smaller><font color="#477AB8"><b>Karvy: </b>"MFSD211"</font></td>
					<td  class=smaller><font color="#477AB8"><b>DISPL (Deutsche): </b>"Client Master File"</font></td>
					</tr>
					<tr>
					<td  COLSPAN=2 class=smaller><font color="#477AB8"><b>Sundaram: </b>"ER04-Investors static details with unit balances"</font></td>
					</tr>
 					</table>
				</td></tr>
			</table>	
		</td></tr>
</table>
</td></tr>
</table>
</FORM>
</body>
</html>
