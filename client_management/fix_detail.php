

<html>                                                
<head>

<title>Fix.Investor.Contacts</title>

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
<form action="fix.contacts.asp" method="get" name="form1">
<center>

<table height="30" border=0 cellpadding=0 cellspacing=0 width="100%" valign=top bgcolor="#eeeeee" >
		<tr  >
			<td width="85%" align=left class=smaller >
			<span class='clntmgmt'><b>Client Management</b> -> Update Emails & Mobile Nos</span>	
			</td>
        
		    <td class=smaller valign=middle align=center nowrap width="135px">	
                <A  onclick="window.open('/finnsys/help/main.asp?moveto=S','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;"  href="#"><img src="/finnsys/images/support.png" border=0></a>
		    </td>
		    <td class=smaller valign=middle align=center nowrap width="135px">	
			    <A  onclick="window.open('/finnsys/help/main.asp?page=Fix.Investor.Contacts','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;" href="#"><img src="/finnsys/images/tutorial.png" border=0></a>
		    </td>
        
		</tr>
</table>

<table align=center width="100%" valign=top border=1 cellpadding=4 cellspacing=1 bgcolor=#eeeeee bordercolor="#ffffff">		
	<tr height="20"><td colspan=2 class=smaller valign=top >
		<h3 style="display:inline"><font color="#3787af">Update Investor Details</font></h3>
	</td></tr>
	<tr >
		<td class=smaller valign=middle width="20%" nowrap>
			<b>Show Investor Records with:</b>
		</td>
		<td class=smaller valign=middle width="80%" nowrap>
			<select name = "UD_REC_TYPE">
				<option selected value="ALL">either no email address or no mobile number</option>
				<option  value="EML">no email address</option>
				<option  value="MOB">no mobile number</option>
			</select>
		</td>
	</tr>
	<tr >
		<td class=smaller valign=middle width="20%" nowrap>
			<B>Investor Name contains:</B>
		</td>
		<td class=smaller valign=middle width="80%" nowrap>
			<INPUT name=inv_srch value="">&nbsp;(optional)
		</td>
	</tr>
	<tr >
		<td class=smaller valign=middle width="20%" nowrap>
			<b>No of Records to Show (per page):&nbsp;</b>
		</td>
		<td class=smaller valign=middle width="80%" nowrap>
			<select name = "UD_NO_REC">
				<option selected value="50">50</option>
				<option  value="100">100</option>
				<option  value="150">150</option>
				<option  value="200">200</option>
			</select>&nbsp;
			<INPUT style="FONT-WEIGHT: bold; FONT-SIZE: 10px; WIDTH: 150px; COLOR: #000000; FONT-FAMILY: Arial; HEIGHT: 20px;" type=submit value="Show" name="SHOW"> 
		</td>
	</tr>	
	<TR BGCOLOR="#FFFFFF"><TD ALIGN=RIGHT COLSPAN=2 CLASS=SMALLEST>
		Sort by:&nbsp;
		
			<b>Investor Name</b>
		
		&nbsp;|&nbsp;
			 
			<A href="fix.contacts.asp?srt=g&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">Group Head</A>
		
		&nbsp;|&nbsp;
			 
			<A href="fix.contacts.asp?srt=c&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">City</A>
		
		&nbsp;|&nbsp;
			 
			<A href="fix.contacts.asp?srt=m&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">Mobile</A>
		
		&nbsp;|&nbsp;
			 
			<A href="fix.contacts.asp?srt=e&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">Email</A>
		
		&nbsp;|&nbsp;
			 
			<A href="fix.contacts.asp?srt=a&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">Distributor</A>
		
		
	</TD></TR>
</table>
<table align=center width="100%" valign=top border=1 cellpadding=4 cellspacing=1 bgcolor=#ffffff bordercolor="#d2d2d3">		
<tr bgcolor="#eeeeee">
	<td class=smaller width="5%" align=center nowrap><b>Sno</b></td>
	<td class=smaller width="10%" align=center nowrap><b>Investor</b></td>
	<td class=smaller width="10%" align=center nowrap><b>Group Head</b></td>
	<td class=smaller width="15%" align=center nowrap><b>Postal Address</b></td>
	<td class=smaller width="10%" align=center nowrap><b>City</b></td>
	<td class=smaller width="15%" align=center nowrap><b>Phone Numbers</b></td>
	<td class=smaller width="10%" align=center nowrap><b>Mobile</b></td>
	<td class=smaller width="15%" align=center nowrap><b>Email</b></td>
	<td class=smaller width="10%" align=center nowrap><b>Distributor</b></td>
</tr>
		
			<tr>	
				<td class=smaller align=center >1</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=8907','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>-</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left >9425459125</td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >-</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >2</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=9140','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>-</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left >9926351189</td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >-</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >3</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=9155','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>-</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left >7974713242</td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >-</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >4</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=8752','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>-</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left >9907517617</td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >-</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >5</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=8962','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>-</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left >9407131301</td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >-</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >6</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=8961','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>-</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left >9407131301</td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >-</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >7</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=8176','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>-</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left >8349695251</td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >-</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >8</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=8960','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>-</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left >9407131301</td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >-</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >9</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=4395','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>113</B>
				</A>
				</td>
				<td class=smaller align=left >
						
						<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=111','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
							<B>LAXMI KUMAR DHOOT</B>
						</A>	
					
				</td>
				<td class=smaller align=left >shashi kala dhoot uj113 self Ujjain</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >10</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=5459','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>113</B>
				</A>
				</td>
				<td class=smaller align=left >
						
						<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=111','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
							<B>LAXMI KUMAR DHOOT</B>
						</A>	
					
				</td>
				<td class=smaller align=left >uj113 ayush shahikala dhoot</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >Other</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >11</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=5459','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>113</B>
				</A>
				</td>
				<td class=smaller align=left >
						
						<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=111','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
							<B>LAXMI KUMAR DHOOT</B>
						</A>	
					
				</td>
				<td class=smaller align=left >uj113 ayush shahikala dhoot</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >12</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=4395','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>113</B>
				</A>
				</td>
				<td class=smaller align=left >
						
						<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=111','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
							<B>LAXMI KUMAR DHOOT</B>
						</A>	
					
				</td>
				<td class=smaller align=left >shashi kala dhoot uj113 self Ujjain</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / DHOOT GROUP</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >13</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=4394','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>115</B>
				</A>
				</td>
				<td class=smaller align=left >
						
						<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=111','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
							<B>LAXMI KUMAR DHOOT</B>
						</A>	
					
				</td>
				<td class=smaller align=left >uj115 laxmi dhoot Ujjain</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >14</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=4394','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>115</B>
				</A>
				</td>
				<td class=smaller align=left >
						
						<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=111','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
							<B>LAXMI KUMAR DHOOT</B>
						</A>	
					
				</td>
				<td class=smaller align=left >uj115 laxmi dhoot Ujjain</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >Other</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >15</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=4394','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>115</B>
				</A>
				</td>
				<td class=smaller align=left >
						
						<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=111','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
							<B>LAXMI KUMAR DHOOT</B>
						</A>	
					
				</td>
				<td class=smaller align=left >uj115 laxmi dhoot Ujjain</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / DHOOT GROUP</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >16</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=6975','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>A</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >-</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >17</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=6574','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>A.D KULKARNI</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >28, BANK COLONY SUBHASH NAGAR UJJAIN</td>
				<td class=smaller align=left >UJJAIN</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >-</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >18</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=6698','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>A.N SORTHI</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >319, SETHI NAGAR UJJAIN</td>
				<td class=smaller align=left >UJJAIN</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >-</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >19</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=3898','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AADHYA SHAH</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >47 CHANDRA SHEKHAR MARG</td>
				<td class=smaller align=left >JHABUA</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >20</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=3897','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AADHYA SHAH</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >41/1 DAVE JI KA MAKAN DIST UJJAIN</td>
				<td class=smaller align=left >TARANA</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >21</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=2190','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AADITI DANGE</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >C/O M P DANGE C 29 VED NAGAR NANAKHEDA</td>
				<td class=smaller align=left >UJJAIN M P</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >22</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=2765','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AADITI JAIN</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >H NO-49 VIJAYINDER NAGAR,DABA ROAD SHERPUR</td>
				<td class=smaller align=left >LUDHIANA</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >23</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=2188','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AAFREIN QURESHI</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >31 MIRZA NAIM BEG MARG UJJAIN M P</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >24</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=1222','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AAISHA SANA</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >79/A-2 AADARSH NAGAR COLONY DEWAS ROAD</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >25</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=3007','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AAKANKSHARAJE R GAEKWAD</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >GAEKWAD WADA OPP CITY POLICE STATION MANDVI PANIGATE MAIN ROAD</td>
				<td class=smaller align=left >VADODARA</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >26</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=7094','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>Aakash</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >133 vrindavan pura  naya pura</td>
				<td class=smaller align=left >ujjain</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >27</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=3006','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AAKASH CHOUHAN</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >C/O SHRI MAHADEV NARAYAN M NO 5 SURAJ NAGAR RANG BAWDI</td>
				<td class=smaller align=left >UJJAIN M P</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >28</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=666','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AANCHAL RATHI</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >11 MAHASHWETA NAGAR UJJAIN</td>
				<td class=smaller align=left >UJJAIN</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >AANCHALRATHI@GMAIL.COM</td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / INDIRA KATARIA</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >29</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=1040','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AARAN DHING</B>
				</A>
				</td>
				<td class=smaller align=left >
						
						<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=6667','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
							<B>MAYANK DHING</B>
						</A>	
					
				</td>
				<td class=smaller align=left >49, SHIVAJI PARK COLONY, DEWAS ROAD</td>
				<td class=smaller align=left >UJJAIN</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / INDIRA KATARIA</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >30</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=1040','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AARAN DHING</B>
				</A>
				</td>
				<td class=smaller align=left >
						
						<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=6667','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
							<B>MAYANK DHING</B>
						</A>	
					
				</td>
				<td class=smaller align=left >49, SHIVAJI PARK COLONY, DEWAS ROAD</td>
				<td class=smaller align=left >UJJAIN</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >31</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=422','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AARNA GUPTA</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >H-54 THATIPUR COLONY GAWALIOR</td>
				<td class=smaller align=left >GAWALIOR</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / VIMAL CHANDRA JAIN(F)</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >32</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=421','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AAROHI JAIN</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >MIG-38 DHANCHA BHAWA ROAD MASJID KE PASS</td>
				<td class=smaller align=left >UJJAIN</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / VIMAL CHANDRA JAIN(F)</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >33</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=2115','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AARTI KHUSHWAHA</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >B-2/28 ARVIND NAGAR HIRAMILLS ROAD UJJAI</td>
				<td class=smaller align=left >UJJAIN</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >34</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=2187','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AASHI NEEMA</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >C/O SHRI VINOD NEEMA 29/1 SHREE KRISHNA COLONY ANKPAT MARG</td>
				<td class=smaller align=left >UJJAIN MP</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >35</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=2186','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AASHITA GUPTA</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >C/O SHRI AJAY KUMAR GUPTA 35 SHREE NAGAR EXTN</td>
				<td class=smaller align=left >INDORE</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >36</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=3287','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AASHLESHA DESHPANDE</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >VIJAY DEEP L I G 46 CIVIL LINES</td>
				<td class=smaller align=left >DEWAS</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >37</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=8336','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AASTHA GUPTA</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >2/3, KSHIR SAGAR COLONY UJJAIN</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >-</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >38</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=3005','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AAUSHI JAIN</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >37 JHALANI BULLDING CHHOTA SARAFA UJJAIN UJJAIN</td>
				<td class=smaller align=left >M P</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >39</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=1921','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AAYUSH BHORASKAR</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >86 SANT NAGAR</td>
				<td class=smaller align=left >UJJAIN</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >40</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=3004','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AAYUSH SUWTA</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >206 TOPKHANA MAHAKAL MARG UJJAIN UJJAIN</td>
				<td class=smaller align=left >M P</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >41</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=3003','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AAYUSHI AGIWAL</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >C 12/10 LIG RISHI NAGAR  UJJAIN</td>
				<td class=smaller align=left >MP</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >42</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=2185','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AAYUSHI CHAUDHARI</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >ADVOCATE LALIT BHAWAN NIJATPURA UJJAIN M P</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >43</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=3002','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AAYUSHI JAIN</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >37, JHALANI BLDG, CHOTA SARAF,</td>
				<td class=smaller align=left >UJJAIN, M. P.</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >44</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=787','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>AAYUSHI PARMAR</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >5/8 CHANDRA SHEKHAR AZAD MARG BILOTIPURA</td>
				<td class=smaller align=left >UJJAIN</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / INDIRA KATARIA</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >45</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=417','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>ABDUL HAFIZ</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >3/3 TOPKHANA KHRRATI MASJID KE PICHE</td>
				<td class=smaller align=left >UJJAIN</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >46</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=8522','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>Abdul Noushad</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >77, GREEN PARK COLONY UJJAIN</td>
				<td class=smaller align=left >ujjain</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / PRATIBHA MUNDRA</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >47</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=1861','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>ABDUL QUADIR PITHAWALA</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >26 PITHAWALA BUILDING BAHADURPURA</td>
				<td class=smaller align=left >UJJAIN</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >SMART FUTURE INVESTOR SERVICES / Sumit Kataria</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >48</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=8510','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>ABDUL RAHIM GHISA KHAN</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >45, MADARGATE UJJAIN</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >-</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >49</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=7026','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>ABDUL RASHID</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >80, KL MANANA MARG UJJAIN</td>
				<td class=smaller align=left >UJJAIN</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >-</td>
			</tr>
					
			<tr>	
				<td class=smaller align=center >50</td>
				<td class=smaller align=left >
				<A title="Click to open Investor Record" onclick="return window.open('/FinnSys/tools/master.investors.asp?invid=8658','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1');" href="#">
					<B>ABDUL RASHID</B>
				</A>
				</td>
				<td class=smaller align=left >
					
						-
					
				</td>
				<td class=smaller align=left >RK AGENCY RAM GI KI GALI UJJAIN</td>
				<td class=smaller align=left >-</td>
				<td class=smaller align=left >, , , , , </td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left ><font color=red>Not Found</font></td>
				<td class=smaller align=left >-</td>
			</tr>
			
			<TR bgcolor="#eeeeee" height=30>
				<TD width="100%" valign="center" align = "left" colspan = "9" class=smaller>
					<b>Page</b>
				1
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=2&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">2</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=3&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">3</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=4&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">4</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=5&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">5</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=6&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">6</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=7&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">7</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=8&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">8</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=9&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">9</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=10&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">10</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=11&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">11</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=12&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">12</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=13&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">13</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=14&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">14</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=15&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">15</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=16&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">16</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=17&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">17</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=18&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">18</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=19&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">19</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=20&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">20</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=21&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">21</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=22&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">22</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=23&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">23</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=24&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">24</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=25&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">25</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=26&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">26</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=27&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">27</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=28&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">28</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=29&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">29</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=30&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">30</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=31&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">31</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=32&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">32</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=33&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">33</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=34&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">34</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=35&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">35</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=36&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">36</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=37&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">37</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=38&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">38</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=39&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">39</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=40&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">40</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=41&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">41</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=42&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">42</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=43&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">43</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=44&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">44</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=45&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">45</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=46&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">46</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=47&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">47</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=48&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">48</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=49&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">49</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=50&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">50</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=51&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">51</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=52&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">52</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=53&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">53</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=54&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">54</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=55&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">55</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=56&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">56</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=57&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">57</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=58&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">58</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=59&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">59</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=60&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">60</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=61&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">61</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=62&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">62</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=63&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">63</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=64&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">64</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=65&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">65</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=66&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">66</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=67&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">67</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=68&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">68</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=69&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">69</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=70&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">70</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=71&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">71</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=72&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">72</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=73&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">73</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=74&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">74</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=75&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">75</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=76&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">76</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=77&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">77</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=78&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">78</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=79&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">79</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=80&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">80</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=81&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">81</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=82&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">82</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=83&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">83</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=84&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">84</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=85&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">85</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=86&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">86</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=87&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">87</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=88&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">88</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=89&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">89</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=90&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">90</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=91&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">91</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=92&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">92</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=93&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">93</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=94&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">94</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=95&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">95</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=96&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">96</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=97&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">97</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=98&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">98</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=99&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">99</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=100&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">100</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=101&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">101</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=102&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">102</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=103&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">103</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=104&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">104</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=105&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">105</A>	
						
							<A class="SMALLER" HREF="fix.contacts.asp?pgno=106&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">106</A>	
						
			&nbsp;
				
					<strong>Prev</strong>
				
				&nbsp;
				
					<strong>
					<A class="SMALLER" HREF="fix.contacts.asp?pgno=2&srt=&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">Next</A>
					</strong>
				
					
				
				</TD>
			</TR>	
			
			<TR BGCOLOR="#FFFFFF"><TD ALIGN=RIGHT COLSPAN=9 CLASS=SMALLEST>
				Sort by:&nbsp;
				
					<b>Investor Name</b>
				
				&nbsp;|&nbsp;
					 
					<A href="fix.contacts.asp?srt=g&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">Group Head</A>
				
				&nbsp;|&nbsp;
					 
					<A href="fix.contacts.asp?srt=c&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">City</A>
				
				&nbsp;|&nbsp;
					 
					<A href="fix.contacts.asp?srt=m&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">Mobile</A>
				
				&nbsp;|&nbsp;
					 
					<A href="fix.contacts.asp?srt=e&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">Email</A>
				
				&nbsp;|&nbsp;
					 
					<A href="fix.contacts.asp?srt=a&inv_srch=&UD_REC_TYPE=&UD_NO_REC=">Distributor</A>
				
				
			</TD></TR>
	
	
</table>	
</center>
</form>	
</body>
</html>
