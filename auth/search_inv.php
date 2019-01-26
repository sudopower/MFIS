

<html>                                                
<head>
<script language="javascript">
function SubmitSearchForm()
{
if (document.getElementById("FOLIO").value != "")
	{window.open('/FinnSys/reports/main/txn_summ.asp?folio=' + document.getElementById("FOLIO").value,'REPORTWINDOW','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); 
	return false;}
else
	{window.open('search.php?TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=' + document.getElementById("srch_str").value,'SEARCHWINDOW','top=0,left=10,height=540,width=780,header=no,resizable=yes,scrollbars=1');  
	return false;}
}
</script>

<title>TXN_SUMM_HOME</title>

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
<FORM id=form1 name=form1>

<table height="30" border=0 cellpadding=0 cellspacing=0 width="100%" valign=top bgcolor="#eeeeee" >
		<tr  >
			<td width="85%" align=left class=smaller >
			<span class='clntmgmt'><b>Client Management</b> -> Investor MIS</span>	
			</td>
        
		    <td class=smaller valign=middle align=center nowrap width="135px">	
                <A  onclick="window.open('/finnsys/help/main.asp?moveto=S','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;"  href="#"><img src="/finnsys/images/support.png" border=0></a>
		    </td>
		    <td class=smaller valign=middle align=center nowrap width="135px">	
			    <A  onclick="window.open('/finnsys/help/main.asp?page=TXN_SUMM_HOME','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;" href="#"><img src="/finnsys/images/tutorial.png" border=0></a>
		    </td>
        
		</tr>
</table>

<table border=0 cellpadding=5 cellspacing=5 width="100%" valign=center height="200">
<tr>
	<td class=smaller align=left colspan=2>
	<b><font color="#3787af">
	<h3 style="display:inline;">Investor MIS</h3>
	</b>
	</font>
	</td>
	<td rowspan=4 width="30%" valign=bottom align=center>
	
		<img src="/FinnSys/images/gear.gif" height="60" width="90"  >
		<br>
		<A style="TEXT-DECORATION: none" 
		onclick="window.open('/FinnSys/investors/querybuilder.asp','QBUILDER','top=0,left=150,height=530,width=500,header=no,resizable=yes,scrollbars=1');" href="#">
		<B>Launch Query Builder</B></a>
		<p align=justify class=smallest>(select your desired fields from the client master and generate excel output) 
		</A>
	
	</td>
</tr>
<tr>
	<td class=smaller width="10%" nowrap align=left valign=middle>&nbsp;&nbsp;&nbsp;<b>Search Investor:</b></td>
	<td class=smallest valign=top><input type="text" size="50" name="srch_str" id="srch_str" value="">
	<br>(Free Text Search)
	</td>
	
</tr>
<tr>
	<td class=smaller width="10%" align=left valign=middle nowrap>&nbsp;&nbsp;&nbsp;<b>Search Folio Number:</b></td>
	<td class=smallest valign=top><input type="text" size="30" name="FOLIO" id="FOLIO" value="">
	<br>(Opens Transaction Summary)</td>
</tr>
<tr>
	<td class=smallest colspan=2 align="center">
		<input onclick="return SubmitSearchForm();" type=SUBMIT name="SEARCH" Value = "Show" STYLE="font-family:Arial; font-size:11px; background-color: #3787af; font-weight:bold;color:#ffffff; width:150; height:20;">
	</td>
</tr>
</table>
</FORM>
<table width="95%" cellpadding=4> 
<tr><td class=smaller align=left><B>Search by initials</B></td></tr>
<tr><td class=smallest align=left style="border-top: solid 1px #000000; border-bottom: solid 1px #000000;">
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('a');"><b>A</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('b');"><b>B</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('c');"><b>C</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('d');"><b>D</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('e');"><b>E</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('f');"><b>F</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('g');"><b>G</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('h');"><b>H</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('i');"><b>I</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('j');"><b>J</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('k');"><b>K</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('l');"><b>L</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('m');"><b>M</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('n');"><b>N</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('o');"><b>O</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('p');"><b>P</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('q');"><b>Q</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('r');"><b>R</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('s');"><b>S</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('t');"><b>T</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('u');"><b>U</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('v');"><b>V</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('w');"><b>W</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('x');"><b>X</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('y');"><b>Y</b></a>&nbsp;|&nbsp;
<a style="text-decoration:none;" href="#" Onclick="return OpenSearch('z');"><b>Z</b></a>&nbsp;|&nbsp;
</td></tr>
</table>
</center>
</body>
<script language="javascript">
function OpenSearch(character)
{
	return window.open('/FinnSys/investors/search.asp?CHARONLY=1&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=' + character,'SEARCHWINDOW','top=0,left=10,height=540,width=780,header=no,resizable=yes,scrollbars=1');
}
</script>
</html>
