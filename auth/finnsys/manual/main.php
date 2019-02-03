

<html>                                                
<head>

<title>MANUALENTRY</title>

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


<script language="javascript">
function openwin(whichwindow)
{
var radioselected = false;
var radioval = 0;

if (document.form1.MEFP_SELECTION == null)
	return false;
else
{

if (document.form1.MEFP_SELECTION.length == null)
{
	if (document.form1.MEFP_SELECTION.checked)
		{
		radioselected = true;
		radioval = document.form1.MEFP_SELECTION.value;
}		}
else
{
	for (var i=0; i < document.form1.MEFP_SELECTION.length; i++)
	   {
	   if (document.form1.MEFP_SELECTION[i].checked)
	      {
			radioselected = true;
			radioval = document.form1.MEFP_SELECTION[i].value;
	      }
	   }
	}
}

	if (radioselected == false)
	{
		alert("Select one of the Financial Products to continue")
		return false;	
	}

if (whichwindow == 'txn')
{
	window.open('/FinnSys/manual/addtxn.asp?uid=' + radioval,'ENTERMANUALLY','top=0,left=10,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');
	return true;
}
else
{
	if (confirm('Are you sure you wish to delete the selected financial product completely?'))
		{
			window.open('/FinnSys/manual/delete.prod.asp?uid='+radioval,'DELPROD','top=200,left=250,height=200,width=400,header=no,resizable=NO,scrollbars=0,status=1');
		}
	else
		{return false;}

}	


}	
</script>
</head>
<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<center>

<table height="30" border=0 cellpadding=0 cellspacing=0 width="100%" valign=top bgcolor="#eeeeee" >
		<tr  >
			<td width="85%" align=left class=smaller >
			<span class='datamgmt'><b>Data Management</b> -> Manual Entry</span>	
			</td>
        
		    <td class=smaller valign=middle align=center nowrap width="135px">	
                <A  onclick="window.open('/finnsys/help/main.asp?moveto=S','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;"  href="#"><img src="/finnsys/images/support.png" border=0></a>
		    </td>
		    <td class=smaller valign=middle align=center nowrap width="135px">	
			    <A  onclick="window.open('/finnsys/help/main.asp?page=MANUALENTRY','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;" href="#"><img src="/finnsys/images/tutorial.png" border=0></a>
		    </td>
        
		</tr>
</table>

<form action="main.asp" name="form1" method="post">
<table border=0 cellpadding=5 cellspacing=0 width="100%" valign=center >
<tr height=30>
	<td class=smallest valign=top>
	<h3><font color="#3787af">Financial Products - Click To Add</font></h3>
</td></tr>
</table>


<table border=0 cellpadding=5 cellspacing=1 width="100%" valign=center >
<tr><td colspan=2 align=center>
	<a href="#" onclick="window.open('/FinnSys/manual/addmf.asp','ENTERMANUALLY','top=0,left=10,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1')">
		<img src="images/Stocks.jpg" border=0></a>
	&nbsp;
	<a href="#" onclick="window.open('/FinnSys/manual/addmf.asp','ENTERMANUALLY','top=0,left=10,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1')">
		<img src="images/MutualFund.jpg" border=0></a>
	&nbsp;
	<a href="#" onclick="window.open('/FinnSys/manual/addother.asp','ENTERMANUALLY','top=0,left=10,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1')">
		<img src="images/Interest.jpg" border=0></a>
	&nbsp;
	<a href="#" onclick="window.open('/FinnSys/manual/addother.asp','ENTERMANUALLY','top=0,left=10,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1')">
		<img src="images/Preciousmetal.jpg" border=0></a>
</td></tr>
<tr><td class=smallest valign=top>
	Recently Added/Modified Financial Products (Top 5)
</td><td class=smallest valign=top align=right>
	<a href="/finnsys/manual/allproducts.asp"><b>View All / Edit / Search</b></a>&nbsp;&nbsp; 
</td></tr>
<tr><td class=smallest valign=top colspan=2>
	<table border=1 cellpadding=5 cellspacing=1 width="100%" valign=center bordercolor="#d2d2d3">
	<tr height=50 bgcolor="#eeeeee">
	<td class=smallest >
		<b>Date Added/Modified </b>
	</td>
	<td class=smallest >
		<b>Product Type</b>
	</td>
	<td class=smallest >
		<b>Investor</b>
	</td>
	<td class=smallest >
		<b>Folio</b>
	</td>
	<td class=smallest >
		<b>Product Name / Inst.</b>
	</td>
	<td class=smallest align=center>
		<b>Market Value</b><br>(Rupees)
	</td>
	<td class=smallest align=center>
		<b>Distributor</b>
	</td>
	</tr>
	
		<tr >
			<td class=smallest >
				01.Feb.2019
			</td>
			<td class=smallest >
				Stocks / Shares (Equity)
				
			</td>
			<td class=smallest >
				115
			</td>
			<td class=smallest >
				<A title="Click to open Transaction Summary" onclick="return window.open('/FinnSys/reports/main/txn_summ.asp?folio=ME_593.60/01-02-19','REPORTWINDOW','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');" href="#">
				593.60/01-02-19
				</a>
			</td>
			<td class=smallest >
				KAVERI SEED
				<br>
				(BSE / NSE)
			</td>
			<td class=smallest align=right>
				0.00
			</td>
			<td class=smallest align=CENTER>
				Other
			</td>
		</tr>
		
		<tr >
			<td class=smallest >
				01.Feb.2019
			</td>
			<td class=smallest >
				Stocks / Shares (Equity)
				
			</td>
			<td class=smallest >
				115
			</td>
			<td class=smallest >
				<A title="Click to open Transaction Summary" onclick="return window.open('/FinnSys/reports/main/txn_summ.asp?folio=ME_591/21-12-18','REPORTWINDOW','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');" href="#">
				591/21-12-18
				</a>
			</td>
			<td class=smallest >
				KAVERI SEED
				<br>
				(BSE / NSE)
			</td>
			<td class=smallest align=right>
				0.00
			</td>
			<td class=smallest align=CENTER>
				Other
			</td>
		</tr>
		
		<tr >
			<td class=smallest >
				25.Jan.2019
			</td>
			<td class=smallest >
				Stocks / Shares (Equity)
				
			</td>
			<td class=smallest >
				116
			</td>
			<td class=smallest >
				<A title="Click to open Transaction Summary" onclick="return window.open('/FinnSys/reports/main/txn_summ.asp?folio=ME_1174/21-01-19','REPORTWINDOW','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');" href="#">
				1174/21-01-19
				</a>
			</td>
			<td class=smallest >
				JUBL FOOD
				<br>
				(BSE / NSE)
			</td>
			<td class=smallest align=right>
				0.00
			</td>
			<td class=smallest align=CENTER>
				Other
			</td>
		</tr>
		
		<tr >
			<td class=smallest >
				25.Jan.2019
			</td>
			<td class=smallest >
				Stocks / Shares (Equity)
				
			</td>
			<td class=smallest >
				115
			</td>
			<td class=smallest >
				<A title="Click to open Transaction Summary" onclick="return window.open('/FinnSys/reports/main/txn_summ.asp?folio=ME_575/26-12-2018','REPORTWINDOW','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');" href="#">
				575/26-12-2018
				</a>
			</td>
			<td class=smallest >
				KAVERI SEED
				<br>
				(BSE / NSE)
			</td>
			<td class=smallest align=right>
				0.00
			</td>
			<td class=smallest align=CENTER>
				Other
			</td>
		</tr>
		
		<tr >
			<td class=smallest >
				24.Jan.2019
			</td>
			<td class=smallest >
				Stocks / Shares (Equity)
				
			</td>
			<td class=smallest >
				uj079  ayush satinder saluja
			</td>
			<td class=smallest >
				<A title="Click to open Transaction Summary" onclick="return window.open('/FinnSys/reports/main/txn_summ.asp?folio=ME_950/24-01-19','REPORTWINDOW','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');" href="#">
				950/24-01-19
				</a>
			</td>
			<td class=smallest >
				GODFREY PH
				<br>
				(BSE / NSE)
			</td>
			<td class=smallest align=right>
				0.00
			</td>
			<td class=smallest align=CENTER>
				Other
			</td>
		</tr>
			
	</table>
</td>
</tr>	
</table>	


</center>
</body>
</html>
