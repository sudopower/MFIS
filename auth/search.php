


<script language="javascript" type="text/javascript">
    
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

<title>INVESTORSEARCH</title>

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
function HideAllSubMenus() {
    var divs = document.getElementsByTagName("div");
    for (var i = 0; i < divs.length; i++) {
        if ((divs[i].id.indexOf("DIV_MENUS_") == -1) && (divs[i].id.indexOf("DIV_SOA_") == -1))
        { divs[i].style.display = "none"; }
    }
}

function OpenFolio(inv_id)
{
    var DivToChange = document.getElementById('DIV_FOL_' + inv_id);
//var ImgToChange = document.getElementById('img_investor_' + inv_id);

if (DivToChange.style.display == "none")
    {
    HideAllSubMenus();
    DivToChange.style.display = "block";
    getFolioDetails(DivToChange, inv_id);
    document.getElementById("TAB_FOLIO_" + inv_id).style.backgroundColor = "#ffffff";
    document.getElementById("TAB_FOLIO_LNK_" + inv_id).style.color = "#3787af";
    document.getElementById("TAB_FOLIO_LNK_" + inv_id).style.fontWeight = "bold";
	//ImgToChange.src="/FinnSys/images/common/button_Close.gif";
	return false;
	}
else
	{
    HideAllSubMenus();
    DivToChange.style.display = "none";
    document.getElementById("TAB_FOLIO_" + inv_id).style.backgroundColor = "#3787af";
    document.getElementById("TAB_FOLIO_LNK_" + inv_id).style.color = "#ffffff";
    document.getElementById("TAB_FOLIO_LNK_" + inv_id).style.fontWeight = "normal";
	//ImgToChange.src="/FinnSys/images/common/button_Open.gif";
	return false;
	}	
}

function getFolioDetails(DivToChange, inv_id) {
    var url = '/finnsys/investors/getfolio.svc.asp?invid=' + inv_id + '&TO_REPORT=TXN_SUMM';
    $.ajax({
        method: "GET",
        url: url,
        dataType: "html"
    })
      .done(function (retMsg) {
          DivToChange.innerHTML = retMsg;
      });

    
}
</script>

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script type='text/javascript' src='/finnsys/reports/common/fxdhdr.js'></script>

<style type="text/css">
#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#eee;
  display:none;
}  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
}
#boxes .text {
  font-family:arial, verdana;
  font-size:15px;
  color:#ffffff;
  font-weight: bold; 
}

#boxes #dialog {
  width:300px; 
  height:25px;
  padding:10px;
  background-color:#3787af;
}
</style>

<script type="text/javascript">
    function ShowPopup(show) {
        var id = '#dialog';
        //alert(show);
        //Get the screen height and width

        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        //alert(maskHeight);
        //Set heigth and width to mask to fill up the whole screen
        $('#mask').css({ 'width': maskWidth, 'height': maskHeight });

        //transition effect		
        $('#mask').fadeIn(1000);
        $('#mask').fadeTo("slow", 0.8);

        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();

        //Set the popup window to center
        $(id).css('top', winH / 2 - $(id).height() / 2-200);
        $(id).css('left', winW / 2 - $(id).width() / 2);

        //transition effect
        $(id).fadeIn(2000);

        //default hide
        $('#mask').hide();
        $('.window').hide();

        if (show) {
            document.getElementById("boxes").style.display = 'block';
            $('#mask').show();
            $('.window').show();
        }
        else {
            document.getElementById("boxes").style.display = 'none';
            $('#mask').hide();
            $('.window').hide();
        }
    }


    
</script>


</head>
<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<center>
<div id="boxes" style="display:none;">
    <div style="display: none;" id="dialog" class="window">
        <table><tr><td><img src="/finnsys/nse/images/loader.gif" /></td><td class="text">Loading.. please wait</td></tr></table>
    </div>
    <!-- Mask to cover the whole screen -->
    <div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>
<script>ShowPopup(true);</script>

<form method="get" NAME="form1" action="search.asp">

<table height="30" border=0 cellpadding=0 cellspacing=0 width="100%" valign=top bgcolor="#eeeeee" >
		<tr  >
			<td width="85%" align=left class=smaller >
				
			</td>
        
		    <td class=smaller valign=middle align=center nowrap width="135px">	
                <A  onclick="window.open('/finnsys/help/main.asp?moveto=S','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;"  href="#"><img src="/finnsys/images/support.png" border=0></a>
		    </td>
		    <td class=smaller valign=middle align=center nowrap width="135px">	
			    <A  onclick="window.open('/finnsys/help/main.asp?page=INVESTORSEARCH','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;" href="#"><img src="/finnsys/images/tutorial.png" border=0></a>
		    </td>
        
		</tr>
</table>

<table border=0 cellpadding=8 cellspacing=1 width="100%" valign=top >
<tr>
	<td class=smaller valign=top>
        
	</td>
	<td class=smallest align=right valign=top>
	    <b>Search:</b>&nbsp;&nbsp;
	    <input type="text" size="30" name="srch_str" width="90%" value="arpit">&nbsp;
	    <input name="imageField" type="image" src="/FinnSys/images/srch.gif" border="0">
	    <input name="SHOWFOLIO" type="HIDDEN" VALUE="1" >
	    <input name="TO_REPORT" type="HIDDEN" VALUE="TXN_SUMM" >
	</td>
</tr>
</table>
<br>

	<table width="100%" border=1 cellpadding=4 cellspacing=1 bordercolor="#a1a1a3" id="table-1" >
    <thead>
	<tr bgcolor="#3787af">

        <td class=smallest width="5%" align=center rowspan="2" nowrap>
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=ADDDATE"><b><font color="#ffffff">Date Added</b></font></A>
		
		</td>	
		
		<td class=smallest width="10%" align=center>
		
			<b><font color="#ffffff">Name</b></font>&nbsp;<img src="/FinnSys/images/blue-asc.jpg" border=0>
		
		</td>	
		
		<td class=smallest width="10%" align=center>
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=GROUP_TITLE"><b><font color="#ffffff">Group</b></font></A>
		
		</td>
		
		<td class=smallest width="15%" align=center>
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=ADDRESS"><b><font color="#ffffff">Address</b></font></A>
			
		</td>

		<td class=smallest width="10%" align=center>
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=CITY"><b><font color="#ffffff">City</b></font></A>
			
		</td>

        <td class=smallest width="10%" align=center>
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=PINCODE"><b><font color="#ffffff">Pin Code</b></font></A>
			
		</td>

       <td class=smallest width="10%" align=center>
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=DOB"><b><font color="#ffffff">DOB</b></font></A>
		
		</td>
        
        <td class=smallest width="10%" align=center rowspan="2">
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=LOGIN"><b><font color="#ffffff">Login</b></font></A>
		
		</td>

        <td class=smallest width="10%" align=center rowspan="2">
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=RISK"><b><font color="#ffffff">Risk profile</b></font></A>
		
		</td>

        <td class=smallest width="10%" align=center rowspan="2">
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=ONLGW"><b><font color="#ffffff">Online Gateway</b></font></A>
		
		</td>

        <td class=smallest width="10%" align=center rowspan="2">
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=APP"><b><font color="#ffffff">APP User</b></font></A>
		
		</td>

	</tr>
	<tr bgcolor="#3787af">

        <td class=smallest width="5%" align=center>
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=PAN"><b><font color="#ffffff">PAN</b></font></A>
		
		</td>
		
        <td class=smallest width="10%" align=center>
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=MOBILE"><b><font color="#ffffff">Mobile</b></font></A>
		
		</td>

        <td class=smallest width="10%" align=center>
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=PHONE_RES"><b><font color="#ffffff">Phone (Res)</b></font></A>
			
		</td>

		<td class=smallest width="10%" align=center>
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=PHONE_OFF"><b><font color="#ffffff">Phone (Off)</b></font></A>
			
		</td>

        <td class=smallest width="10%" align=center>
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=EMAIL"><b><font color="#ffffff">Email</b></font></A>
		
		</td>
		
		 <td class=smallest width="10%" align=center>
			
			<A HREF="search.asp?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=KYC"><b><font color="#ffffff">KYC Status</b></font></A>
		
		</td>

	</tr>
	</thead>
	<tbody>

    
	
	
            <tr >
		        <td colspan=11 class=smaller >
		        <b>Total Matches Found:&nbsp;<font color=red>20</font></b>
		        </td>
	        </tr>
	    
	    
            <tr bgcolor="#eeeeee">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    30-Nov-2016
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=923','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>ANIL KUMAR CHAUBEY</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            
			            -
		            
		        </td>
		        <td class=smallest align=LEFT> A 21/1 ARPITA ENCLAVE NANAKHEDA</td>
		        <td class=smallest align=center>UJJAIN</td>
                <td class=smallest align=center>456001</td>
                <td class=smallest align=center>14-Apr-1973</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    anilk109047<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=923","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=923','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=923","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <td class=smallest align=center>ABEPC1623L</td>
                <td class=smallest align=center>9424560696</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>ANILCHAUBE21@GMAIL.COM</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_923').style.display=='block'){document.getElementById('DIV_MENUS_923').style.display='none';document.getElementById('IMG_MENUS_923').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_923').style.display='block';document.getElementById('IMG_MENUS_923').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_923">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_923" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_923">			
			                    <a id="TAB_FOLIO_LNK_923" href="#" class=smallest onClick="OpenFolio('923'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_923').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_923').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_923" name="UD_DIV_PORTF_923">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=923&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=923','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=923','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=923','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=923','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=923','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=923','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_923').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_923').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_923" name="UD_DIV_FINP_923">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=923','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=923','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_923').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_923').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_923" name="UD_DIV_ALERTS_923">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=923','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=923','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=923','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=923','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_923').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_923').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_923" name="UD_DIV_TOOLS_923">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=923','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=923","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_923').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_923').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_923" name="UD_DIV_SUBSC_923">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=923&invname=ANIL KUMAR CHAUBEY','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_923" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#d2d2d3">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    08-Dec-2016
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=1901','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>ARPIT BHAVSAR</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            
			            -
		            
		        </td>
		        <td class=smallest align=LEFT> C/O SHRI MAHESH BHAVSAR 179 NIKAS CHOURAHA </td>
		        <td class=smallest align=center>UJJAN</td>
                <td class=smallest align=center>456006</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    arpit230426<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=1901","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=1901','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=1901","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <td class=smallest align=center>AQAPB6569M</td>
                <td class=smallest align=center>-</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_1901').style.display=='block'){document.getElementById('DIV_MENUS_1901').style.display='none';document.getElementById('IMG_MENUS_1901').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_1901').style.display='block';document.getElementById('IMG_MENUS_1901').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_1901">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_1901" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_1901">			
			                    <a id="TAB_FOLIO_LNK_1901" href="#" class=smallest onClick="OpenFolio('1901'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_1901').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_1901').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_1901" name="UD_DIV_PORTF_1901">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=1901&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=1901','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=1901','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=1901','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=1901','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=1901','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=1901','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_1901').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_1901').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_1901" name="UD_DIV_FINP_1901">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=1901','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=1901','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_1901').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_1901').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_1901" name="UD_DIV_ALERTS_1901">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=1901','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=1901','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=1901','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=1901','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_1901').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_1901').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_1901" name="UD_DIV_TOOLS_1901">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=1901','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=1901","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_1901').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_1901').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_1901" name="UD_DIV_SUBSC_1901">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=1901&invname=ARPIT BHAVSAR','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_1901" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#eeeeee">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    30-Nov-2016
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=843','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>ARPIT DAS</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            
			            -
		            
		        </td>
		        <td class=smallest align=LEFT> 20 SURAJ PRASAD SETH MARG GOLA MANDI SATI MARG</td>
		        <td class=smallest align=center>UJJAIN</td>
                <td class=smallest align=center>456006</td>
                <td class=smallest align=center>13-Dec-1984</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    arpit98775<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=843","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=843','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=843","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <td class=smallest align=center>AMBPD3912D</td>
                <td class=smallest align=center>-</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_843').style.display=='block'){document.getElementById('DIV_MENUS_843').style.display='none';document.getElementById('IMG_MENUS_843').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_843').style.display='block';document.getElementById('IMG_MENUS_843').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_843">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_843" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_843">			
			                    <a id="TAB_FOLIO_LNK_843" href="#" class=smallest onClick="OpenFolio('843'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_843').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_843').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_843" name="UD_DIV_PORTF_843">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=843&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=843','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=843','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=843','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=843','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=843','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=843','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_843').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_843').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_843" name="UD_DIV_FINP_843">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=843','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=843','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_843').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_843').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_843" name="UD_DIV_ALERTS_843">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=843','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=843','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=843','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=843','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_843').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_843').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_843" name="UD_DIV_TOOLS_843">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=843','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=843","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_843').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_843').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_843" name="UD_DIV_SUBSC_843">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=843&invname=ARPIT DAS','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_843" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#d2d2d3">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    19-Oct-2016
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=84','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>Arpit Dubey</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            	
			            <A HREF="search.asp?CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=NAME&grp_only=20">
				            <b>Anildubey</b>
			            </A>
		            
		        </td>
		        <td class=smallest align=LEFT> FLAT NO 401 EMPIRE CHS PLOT NO 39 SEC 15 KOPERKHAIRANE </td>
		        <td class=smallest align=center>NAVIMUMBAI</td>
                <td class=smallest align=center>400709</td>
                <td class=smallest align=center>24-Nov-1981</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    arpit5157<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=84","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
				        <img src='/finnsys/images/trans_tick.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=84','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Moderate</a> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=84","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <td class=smallest align=center>AKBPD7525J</td>
                <td class=smallest align=center>+919987998482</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>arpit.dubey31@gmail.com</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_84').style.display=='block'){document.getElementById('DIV_MENUS_84').style.display='none';document.getElementById('IMG_MENUS_84').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_84').style.display='block';document.getElementById('IMG_MENUS_84').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_84">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_84" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_84">			
			                    <a id="TAB_FOLIO_LNK_84" href="#" class=smallest onClick="OpenFolio('84'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_84').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_84').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_84" name="UD_DIV_PORTF_84">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=84&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=84','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=84','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=84','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=84','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=84','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=84','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_84').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_84').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_84" name="UD_DIV_FINP_84">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=84','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=84','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_84').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_84').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_84" name="UD_DIV_ALERTS_84">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=84','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=84','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=84','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=84','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_84').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_84').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_84" name="UD_DIV_TOOLS_84">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=84','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=84","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_84').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_84').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_84" name="UD_DIV_SUBSC_84">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=84&invname=Arpit Dubey','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_84" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#eeeeee">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    01-Dec-2016
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=961','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>ARPIT GARG</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            	
			            <A HREF="search.asp?CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=NAME&grp_only=1">
				            <b>GARG</b>
			            </A>
		            
		        </td>
		        <td class=smallest align=LEFT> A - 81 V.D. CLOTH FAJALPURA </td>
		        <td class=smallest align=center>UJJAIN</td>
                <td class=smallest align=center>456010</td>
                <td class=smallest align=center>06-Sep-1989</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    arpitgarg<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=961","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
				        <img src='/finnsys/images/trans_tick.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=961','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Aggressive</a> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=961","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <td class=smallest align=center>AMSPG4798H</td>
                <td class=smallest align=center>9425915623</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>arpitgarg@live.com</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_961').style.display=='block'){document.getElementById('DIV_MENUS_961').style.display='none';document.getElementById('IMG_MENUS_961').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_961').style.display='block';document.getElementById('IMG_MENUS_961').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_961">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_961" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_961">			
			                    <a id="TAB_FOLIO_LNK_961" href="#" class=smallest onClick="OpenFolio('961'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_961').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_961').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_961" name="UD_DIV_PORTF_961">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=961&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=961','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=961','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=961','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=961','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=961','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=961','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_961').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_961').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_961" name="UD_DIV_FINP_961">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=961','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=961','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_961').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_961').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_961" name="UD_DIV_ALERTS_961">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=961','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=961','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=961','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=961','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_961').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_961').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_961" name="UD_DIV_TOOLS_961">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=961','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=961","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_961').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_961').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_961" name="UD_DIV_SUBSC_961">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=961&invname=ARPIT GARG','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_961" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#d2d2d3">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    01-Dec-2016
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=961','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>ARPIT GARG</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            	
			            <A HREF="search.asp?CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=NAME&grp_only=134">
				            <b>arpit_garg</b>
			            </A>
		            
		        </td>
		        <td class=smallest align=LEFT> A - 81 V.D. CLOTH FAJALPURA </td>
		        <td class=smallest align=center>UJJAIN</td>
                <td class=smallest align=center>456010</td>
                <td class=smallest align=center>06-Sep-1989</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    arpitgarg<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=961","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
				        <img src='/finnsys/images/trans_tick.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=961','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Aggressive</a> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=961","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <td class=smallest align=center>AMSPG4798H</td>
                <td class=smallest align=center>9425915623</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>arpitgarg@live.com</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_961').style.display=='block'){document.getElementById('DIV_MENUS_961').style.display='none';document.getElementById('IMG_MENUS_961').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_961').style.display='block';document.getElementById('IMG_MENUS_961').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_961">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_961" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_961">			
			                    <a id="TAB_FOLIO_LNK_961" href="#" class=smallest onClick="OpenFolio('961'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_961').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_961').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_961" name="UD_DIV_PORTF_961">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=961&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=961','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=961','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=961','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=961','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=961','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=961','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_961').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_961').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_961" name="UD_DIV_FINP_961">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=961','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=961','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_961').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_961').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_961" name="UD_DIV_ALERTS_961">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=961','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=961','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=961','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=961','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_961').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_961').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_961" name="UD_DIV_TOOLS_961">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=961','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=961","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_961').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_961').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_961" name="UD_DIV_SUBSC_961">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=961&invname=ARPIT GARG','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_961" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#eeeeee">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    14-Apr-2018
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=8780','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>ARPIT GUPTA</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            
			            -
		            
		        </td>
		        <td class=smallest align=LEFT> 3/2 GANESH VATIKA ANKPAT MARG .</td>
		        <td class=smallest align=center>UJJAIN</td>
                <td class=smallest align=center>456001</td>
                <td class=smallest align=center>01-Jan-1900</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    arpit10381198<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=8780","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=8780','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=8780","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <td class=smallest align=center>AMSPG8194P</td>
                <td class=smallest align=center>9406625827</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>ARPIT2287@GMAIL.COM</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_8780').style.display=='block'){document.getElementById('DIV_MENUS_8780').style.display='none';document.getElementById('IMG_MENUS_8780').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_8780').style.display='block';document.getElementById('IMG_MENUS_8780').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_8780">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_8780" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_8780">			
			                    <a id="TAB_FOLIO_LNK_8780" href="#" class=smallest onClick="OpenFolio('8780'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_8780').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_8780').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_8780" name="UD_DIV_PORTF_8780">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=8780&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=8780','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=8780','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=8780','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=8780','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=8780','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=8780','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_8780').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_8780').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_8780" name="UD_DIV_FINP_8780">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=8780','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=8780','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_8780').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_8780').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_8780" name="UD_DIV_ALERTS_8780">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=8780','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=8780','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=8780','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=8780','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_8780').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_8780').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_8780" name="UD_DIV_TOOLS_8780">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=8780','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=8780","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_8780').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_8780').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_8780" name="UD_DIV_SUBSC_8780">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=8780&invname=ARPIT GUPTA','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_8780" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#d2d2d3">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    24-Mar-2017
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=4347','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>arpit jain</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            	
			            <A HREF="search.asp?CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=NAME&grp_only=119">
				            <b>Kansal</b>
			            </A>
		            
		        </td>
		        <td class=smallest align=LEFT> A 62 vd market ujjain</td>
		        <td class=smallest align=center>ujjain</td>
                <td class=smallest align=center>456006</td>
                <td class=smallest align=center>02-May-1987</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    ajain<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=4347","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
				        <img src='/finnsys/images/trans_tick.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=4347','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Moderate</a> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_tick.png'><br /><br />
                        [ <A onclick='window.open("/FinnSys/app/tools/notif.investor.asp?log=ajain","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Send Notification</A> ]
                    
                </td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <td class=smallest align=center>AHUPJ3233D</td>
                <td class=smallest align=center>9770233222</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>kansalyarnagency@gmail.com</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_4347').style.display=='block'){document.getElementById('DIV_MENUS_4347').style.display='none';document.getElementById('IMG_MENUS_4347').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_4347').style.display='block';document.getElementById('IMG_MENUS_4347').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_4347">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_4347" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_4347">			
			                    <a id="TAB_FOLIO_LNK_4347" href="#" class=smallest onClick="OpenFolio('4347'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_4347').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_4347').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_4347" name="UD_DIV_PORTF_4347">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=4347&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=4347','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=4347','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=4347','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=4347','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=4347','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=4347','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_4347').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_4347').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_4347" name="UD_DIV_FINP_4347">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=4347','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=4347','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_4347').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_4347').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_4347" name="UD_DIV_ALERTS_4347">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=4347','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=4347','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=4347','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=4347','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_4347').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_4347').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_4347" name="UD_DIV_TOOLS_4347">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=4347','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=4347","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-top:1px solid #d2d2d3;">
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/app/tools/notif.investor.asp?log=ajain&todo=8","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Notify Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_4347').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_4347').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_4347" name="UD_DIV_SUBSC_4347">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=4347&invname=arpit jain','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_4347" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#eeeeee">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    26-Sep-2017
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=6865','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>ARPIT RATHOR</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            
			            -
		            
		        </td>
		        <td class=smallest align=LEFT> 59/2, JAIN COLONY UJJAIN </td>
		        <td class=smallest align=center>UJJAIN</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=6865','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  >Open Online Access</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=6865','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=6865','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  >Open Online Access</a> ]
                            
                </td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_6865').style.display=='block'){document.getElementById('DIV_MENUS_6865').style.display='none';document.getElementById('IMG_MENUS_6865').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_6865').style.display='block';document.getElementById('IMG_MENUS_6865').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_6865">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_6865" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_6865">			
			                    <a id="TAB_FOLIO_LNK_6865" href="#" class=smallest onClick="OpenFolio('6865'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_6865').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_6865').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_6865" name="UD_DIV_PORTF_6865">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=6865&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=6865','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=6865','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=6865','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=6865','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=6865','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=6865','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_6865').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_6865').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_6865" name="UD_DIV_FINP_6865">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=6865','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=6865','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_6865').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_6865').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_6865" name="UD_DIV_ALERTS_6865">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=6865','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=6865','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=6865','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=6865','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_6865').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_6865').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_6865" name="UD_DIV_TOOLS_6865">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=6865','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=6865","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_6865').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_6865').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_6865" name="UD_DIV_SUBSC_6865">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=6865&invname=ARPIT RATHOR','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_6865" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#d2d2d3">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    02-Oct-2017
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=6987','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>ARPIT SAMDANI</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            
			            -
		            
		        </td>
		        <td class=smallest align=LEFT> 11, GEETA COLONY UJJAIN </td>
		        <td class=smallest align=center>UJJAIN</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=6987','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  >Open Online Access</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=6987','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=6987','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  >Open Online Access</a> ]
                            
                </td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_6987').style.display=='block'){document.getElementById('DIV_MENUS_6987').style.display='none';document.getElementById('IMG_MENUS_6987').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_6987').style.display='block';document.getElementById('IMG_MENUS_6987').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_6987">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_6987" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_6987">			
			                    <a id="TAB_FOLIO_LNK_6987" href="#" class=smallest onClick="OpenFolio('6987'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_6987').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_6987').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_6987" name="UD_DIV_PORTF_6987">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=6987&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=6987','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=6987','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=6987','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=6987','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=6987','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=6987','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_6987').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_6987').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_6987" name="UD_DIV_FINP_6987">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=6987','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=6987','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_6987').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_6987').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_6987" name="UD_DIV_ALERTS_6987">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=6987','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=6987','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=6987','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=6987','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_6987').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_6987').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_6987" name="UD_DIV_TOOLS_6987">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=6987','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=6987","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_6987').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_6987').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_6987" name="UD_DIV_SUBSC_6987">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=6987&invname=ARPIT SAMDANI','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_6987" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#eeeeee">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    14-Dec-2016
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=2948','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>ARPIT SHARMA</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            
			            -
		            
		        </td>
		        <td class=smallest align=LEFT> L 304 PATEL COLONY BUDHWARIA UJJAIN M P</td>
		        <td class=smallest align=center>-</td>
                <td class=smallest align=center>456006</td>
                <td class=smallest align=center>25-Jan-1993</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    arpitsharma<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=2948","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=2948','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=2948","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_2948').style.display=='block'){document.getElementById('DIV_MENUS_2948').style.display='none';document.getElementById('IMG_MENUS_2948').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_2948').style.display='block';document.getElementById('IMG_MENUS_2948').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_2948">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_2948" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_2948">			
			                    <a id="TAB_FOLIO_LNK_2948" href="#" class=smallest onClick="OpenFolio('2948'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_2948').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_2948').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_2948" name="UD_DIV_PORTF_2948">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=2948&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=2948','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=2948','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=2948','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=2948','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=2948','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=2948','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_2948').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_2948').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_2948" name="UD_DIV_FINP_2948">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=2948','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=2948','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_2948').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_2948').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_2948" name="UD_DIV_ALERTS_2948">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=2948','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=2948','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=2948','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=2948','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_2948').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_2948').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_2948" name="UD_DIV_TOOLS_2948">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=2948','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=2948","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_2948').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_2948').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_2948" name="UD_DIV_SUBSC_2948">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=2948&invname=ARPIT SHARMA','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_2948" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#d2d2d3">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    27-Oct-2016
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=257','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>ARPIT SOLANKI</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            
			            -
		            
		        </td>
		        <td class=smallest align=LEFT> 35 MOCHIWADA </td>
		        <td class=smallest align=center>UJJAIN</td>
                <td class=smallest align=center>456006</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    arpit71052<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=257","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=257','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=257","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <td class=smallest align=center>EVZPS2952F</td>
                <td class=smallest align=center>9907022252</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>ARPIT.SOLANKI29@GMAIL.COM</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_257').style.display=='block'){document.getElementById('DIV_MENUS_257').style.display='none';document.getElementById('IMG_MENUS_257').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_257').style.display='block';document.getElementById('IMG_MENUS_257').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_257">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_257" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_257">			
			                    <a id="TAB_FOLIO_LNK_257" href="#" class=smallest onClick="OpenFolio('257'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_257').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_257').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_257" name="UD_DIV_PORTF_257">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=257&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=257','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=257','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=257','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=257','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=257','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=257','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_257').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_257').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_257" name="UD_DIV_FINP_257">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=257','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=257','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_257').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_257').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_257" name="UD_DIV_ALERTS_257">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=257','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=257','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=257','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=257','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_257').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_257').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_257" name="UD_DIV_TOOLS_257">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=257','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=257","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_257').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_257').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_257" name="UD_DIV_SUBSC_257">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=257&invname=ARPIT SOLANKI','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_257" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#eeeeee">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    19-Oct-2016
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=22','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>Arpit Textiles</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            	
			            <A HREF="search.asp?CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=NAME&grp_only=1">
				            <b>GARG</b>
			            </A>
		            
		        </td>
		        <td class=smallest align=LEFT> A - 81 V.D. CLOTH FAJALPURA </td>
		        <td class=smallest align=center>UJJAIN</td>
                <td class=smallest align=center>456010</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    arpit5227<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=22","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=22','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=22","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <td class=smallest align=center>AMSPG4798H</td>
                <td class=smallest align=center>+919425379911</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>mlgarg1093@rediffmail.com</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_22').style.display=='block'){document.getElementById('DIV_MENUS_22').style.display='none';document.getElementById('IMG_MENUS_22').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_22').style.display='block';document.getElementById('IMG_MENUS_22').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_22">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_22" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_22">			
			                    <a id="TAB_FOLIO_LNK_22" href="#" class=smallest onClick="OpenFolio('22'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_22').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_22').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_22" name="UD_DIV_PORTF_22">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=22&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=22','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=22','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=22','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=22','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=22','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=22','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_22').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_22').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_22" name="UD_DIV_FINP_22">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=22','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=22','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_22').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_22').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_22" name="UD_DIV_ALERTS_22">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=22','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=22','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=22','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=22','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_22').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_22').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_22" name="UD_DIV_TOOLS_22">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=22','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=22","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_22').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_22').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_22" name="UD_DIV_SUBSC_22">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=22&invname=Arpit Textiles','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_22" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#d2d2d3">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    19-Oct-2016
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=22','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>Arpit Textiles</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            	
			            <A HREF="search.asp?CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=NAME&grp_only=134">
				            <b>arpit_garg</b>
			            </A>
		            
		        </td>
		        <td class=smallest align=LEFT> A - 81 V.D. CLOTH FAJALPURA </td>
		        <td class=smallest align=center>UJJAIN</td>
                <td class=smallest align=center>456010</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    arpit5227<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=22","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=22','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=22","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <td class=smallest align=center>AMSPG4798H</td>
                <td class=smallest align=center>+919425379911</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>mlgarg1093@rediffmail.com</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_22').style.display=='block'){document.getElementById('DIV_MENUS_22').style.display='none';document.getElementById('IMG_MENUS_22').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_22').style.display='block';document.getElementById('IMG_MENUS_22').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_22">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_22" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_22">			
			                    <a id="TAB_FOLIO_LNK_22" href="#" class=smallest onClick="OpenFolio('22'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_22').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_22').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_22" name="UD_DIV_PORTF_22">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=22&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=22','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=22','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=22','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=22','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=22','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=22','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_22').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_22').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_22" name="UD_DIV_FINP_22">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=22','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=22','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_22').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_22').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_22" name="UD_DIV_ALERTS_22">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=22','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=22','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=22','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=22','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_22').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_22').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_22" name="UD_DIV_TOOLS_22">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=22','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=22","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_22').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_22').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_22" name="UD_DIV_SUBSC_22">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=22&invname=Arpit Textiles','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_22" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#eeeeee">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    27-Sep-2017
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=6889','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>Arpita Gare</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            	
			            <A HREF="search.asp?CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=NAME&grp_only=60">
				            <b>Gare</b>
			            </A>
		            
		        </td>
		        <td class=smallest align=LEFT>  </td>
		        <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    arpitagare<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=6889","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=6889','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
				        <img src='/finnsys/images/trans_tick.png'><br /><br />
                        
                            [ <A onclick='window.open("/FinnSys/nse/admin/investor.iinlist.asp?invid=6889&invname=Arpita Gare","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">IINs</A> | 
                                <A onclick='window.open("/FinnSys/nse/admin/investor.achlist.asp?invid=6889&invname=Arpita Gare","","top=50,left=100,height=500,width=800,header=no,resizable=yes,scrollbars=1"); return false;' href="#">OTMs</A>
                            ]
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=6889","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <td class=smallest align=center>AHDPG8508R</td>
                <td class=smallest align=center>-</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_6889').style.display=='block'){document.getElementById('DIV_MENUS_6889').style.display='none';document.getElementById('IMG_MENUS_6889').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_6889').style.display='block';document.getElementById('IMG_MENUS_6889').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_6889">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_6889" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_6889">			
			                    <a id="TAB_FOLIO_LNK_6889" href="#" class=smallest onClick="OpenFolio('6889'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_6889').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_6889').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_6889" name="UD_DIV_PORTF_6889">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=6889&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=6889','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=6889','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=6889','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=6889','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=6889','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=6889','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_6889').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_6889').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_6889" name="UD_DIV_FINP_6889">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=6889','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=6889','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_6889').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_6889').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_6889" name="UD_DIV_ALERTS_6889">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=6889','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=6889','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=6889','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=6889','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_6889').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_6889').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_6889" name="UD_DIV_TOOLS_6889">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=6889','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=6889","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_6889').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_6889').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_6889" name="UD_DIV_SUBSC_6889">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=6889&invname=Arpita Gare','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_6889" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#d2d2d3">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    05-May-2018
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=8841','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>Nitu Garg</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            	
			            <A HREF="search.asp?CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=NAME&grp_only=1">
				            <b>GARG</b>
			            </A>
		            
		        </td>
		        <td class=smallest align=LEFT> 0807 Dashera Maidan </td>
		        <td class=smallest align=center>Ujjain</td>
                <td class=smallest align=center>456010</td>
                <td class=smallest align=center>16-Apr-1990</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    nitug1029062<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=8841","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=8841','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
				        <img src='/finnsys/images/trans_tick.png'><br /><br />
                        
                            [ <A onclick='window.open("/FinnSys/nse/admin/investor.iinlist.asp?invid=8841&invname=Nitu Garg","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">IINs</A> | 
                                <A onclick='window.open("/FinnSys/nse/admin/investor.achlist.asp?invid=8841&invname=Nitu Garg","","top=50,left=100,height=500,width=800,header=no,resizable=yes,scrollbars=1"); return false;' href="#">OTMs</A>
                            ]
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=8841","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <td class=smallest align=center>ATCPJ5676N</td>
                <td class=smallest align=center>+919425915623</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>arpitgarg@live.com</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_8841').style.display=='block'){document.getElementById('DIV_MENUS_8841').style.display='none';document.getElementById('IMG_MENUS_8841').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_8841').style.display='block';document.getElementById('IMG_MENUS_8841').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_8841">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_8841" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_8841">			
			                    <a id="TAB_FOLIO_LNK_8841" href="#" class=smallest onClick="OpenFolio('8841'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_8841').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_8841').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_8841" name="UD_DIV_PORTF_8841">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=8841&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=8841','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=8841','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=8841','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=8841','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=8841','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=8841','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_8841').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_8841').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_8841" name="UD_DIV_FINP_8841">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=8841','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=8841','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_8841').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_8841').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_8841" name="UD_DIV_ALERTS_8841">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=8841','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=8841','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=8841','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=8841','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_8841').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_8841').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_8841" name="UD_DIV_TOOLS_8841">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=8841','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=8841","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_8841').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_8841').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_8841" name="UD_DIV_SUBSC_8841">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=8841&invname=Nitu Garg','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_8841" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#eeeeee">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    05-May-2018
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=8841','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>Nitu Garg</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            	
			            <A HREF="search.asp?CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=arpit&sortby=NAME&grp_only=134">
				            <b>arpit_garg</b>
			            </A>
		            
		        </td>
		        <td class=smallest align=LEFT> 0807 Dashera Maidan </td>
		        <td class=smallest align=center>Ujjain</td>
                <td class=smallest align=center>456010</td>
                <td class=smallest align=center>16-Apr-1990</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    nitug1029062<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=8841","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=8841','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
				        <img src='/finnsys/images/trans_tick.png'><br /><br />
                        
                            [ <A onclick='window.open("/FinnSys/nse/admin/investor.iinlist.asp?invid=8841&invname=Nitu Garg","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">IINs</A> | 
                                <A onclick='window.open("/FinnSys/nse/admin/investor.achlist.asp?invid=8841&invname=Nitu Garg","","top=50,left=100,height=500,width=800,header=no,resizable=yes,scrollbars=1"); return false;' href="#">OTMs</A>
                            ]
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=8841","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <td class=smallest align=center>ATCPJ5676N</td>
                <td class=smallest align=center>+919425915623</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>arpitgarg@live.com</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_8841').style.display=='block'){document.getElementById('DIV_MENUS_8841').style.display='none';document.getElementById('IMG_MENUS_8841').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_8841').style.display='block';document.getElementById('IMG_MENUS_8841').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_8841">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_8841" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_8841">			
			                    <a id="TAB_FOLIO_LNK_8841" href="#" class=smallest onClick="OpenFolio('8841'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_8841').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_8841').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_8841" name="UD_DIV_PORTF_8841">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=8841&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=8841','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=8841','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=8841','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=8841','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=8841','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=8841','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_8841').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_8841').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_8841" name="UD_DIV_FINP_8841">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=8841','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=8841','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_8841').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_8841').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_8841" name="UD_DIV_ALERTS_8841">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=8841','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=8841','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=8841','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=8841','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_8841').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_8841').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_8841" name="UD_DIV_TOOLS_8841">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=8841','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=8841","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_8841').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_8841').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_8841" name="UD_DIV_SUBSC_8841">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=8841&invname=Nitu Garg','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_8841" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#d2d2d3">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    10-Dec-2016
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=2536','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>Samarpit Gupta U/G Anju Gupta</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            
			            -
		            
		        </td>
		        <td class=smallest align=LEFT> 26/708, Govt Colony New Shivaji School Birla Gram</td>
		        <td class=smallest align=center>Nagda</td>
                <td class=smallest align=center>456331</td>
                <td class=smallest align=center>24-Nov-2001</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    samarpitguptauganjugupta<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=2536","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=2536','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=2536","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                
                <td class=smallest align=center>47925</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_2536').style.display=='block'){document.getElementById('DIV_MENUS_2536').style.display='none';document.getElementById('IMG_MENUS_2536').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_2536').style.display='block';document.getElementById('IMG_MENUS_2536').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_2536">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_2536" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_2536">			
			                    <a id="TAB_FOLIO_LNK_2536" href="#" class=smallest onClick="OpenFolio('2536'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_2536').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_2536').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_2536" name="UD_DIV_PORTF_2536">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=2536&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=2536','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=2536','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=2536','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=2536','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=2536','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=2536','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_2536').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_2536').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_2536" name="UD_DIV_FINP_2536">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=2536','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=2536','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_2536').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_2536').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_2536" name="UD_DIV_ALERTS_2536">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=2536','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=2536','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=2536','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=2536','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_2536').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_2536').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_2536" name="UD_DIV_TOOLS_2536">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=2536','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=2536","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_2536').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_2536').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_2536" name="UD_DIV_SUBSC_2536">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=2536&invname=Samarpit Gupta U/G Anju Gupta','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_2536" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#eeeeee">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    20-Dec-2016
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=3719','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>SHRI ARPIT SOLANKI</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            
			            -
		            
		        </td>
		        <td class=smallest align=LEFT> 94 LAKHERWADI MP</td>
		        <td class=smallest align=center>UJJAIN</td>
                <td class=smallest align=center>456006</td>
                <td class=smallest align=center>29-Apr-1987</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    shriarpitsolanki<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=3719","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=3719','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=3719","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_3719').style.display=='block'){document.getElementById('DIV_MENUS_3719').style.display='none';document.getElementById('IMG_MENUS_3719').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_3719').style.display='block';document.getElementById('IMG_MENUS_3719').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_3719">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_3719" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_3719">			
			                    <a id="TAB_FOLIO_LNK_3719" href="#" class=smallest onClick="OpenFolio('3719'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_3719').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_3719').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_3719" name="UD_DIV_PORTF_3719">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=3719&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=3719','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=3719','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=3719','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=3719','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=3719','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=3719','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_3719').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_3719').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_3719" name="UD_DIV_FINP_3719">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=3719','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=3719','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_3719').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_3719').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_3719" name="UD_DIV_ALERTS_3719">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=3719','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=3719','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=3719','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=3719','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_3719').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_3719').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_3719" name="UD_DIV_TOOLS_3719">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=3719','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=3719","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_3719').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_3719').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_3719" name="UD_DIV_SUBSC_3719">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=3719&invname=SHRI ARPIT SOLANKI','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_3719" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
            <tr bgcolor="#d2d2d3">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    19-Jul-2017
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick="window.open('/FinnSys/tools/master.investors.asp?invid=5485','','top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1'); return false;" title="Click to open Investor Record"  ><b>VIJAY KUMAR JAIN</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            
			            -
		            
		        </td>
		        <td class=smallest align=LEFT> 2 VIDHYAPATI NAGAR NANAKHEDA </td>
		        <td class=smallest align=center>UJJAIN</td>
                <td class=smallest align=center>456010</td>
                <td class=smallest align=center>01-Jan-1900</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    vijay3149418<br><br><br>
				        [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=1&tid=5485","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=5485','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'>
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src='/finnsys/images/trans_cross.png'><br /><br />
                        
                                [ <A onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=2&tid=5485","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <td class=smallest align=center>ANJPJ7407J</td>
                <td class=smallest align=center>9977810299</td>
                
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>-</td>
                <td class=smallest align=center>JANARPIT065@GMAIL.COM</td>
                <td class=smallest align=center>-</td>
	        </tr>
	        <tr bgcolor="#d2d2d3">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="if (document.getElementById('DIV_MENUS_5485').style.display=='block'){document.getElementById('DIV_MENUS_5485').style.display='none';document.getElementById('IMG_MENUS_5485').src='/FinnSys/images/common/button_Open.gif';} else {document.getElementById('DIV_MENUS_5485').style.display='block';document.getElementById('IMG_MENUS_5485').src='/FinnSys/images/common/button_Close.gif';} return false;" href="#" style="text-decoration:none;" ><img src="/FinnSys/images/common/button_Open.gif" border=0 id="IMG_MENUS_5485">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_5485" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_5485">			
			                    <a id="TAB_FOLIO_LNK_5485" href="#" class=smallest onClick="OpenFolio('5485'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_PORTF_5485').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_PORTF_5485').style.display='block';} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_5485" name="UD_DIV_PORTF_5485">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID=5485&det=n','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/cap_summ.asp?rep=c&invid=5485','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/inv.ledger.asp?invid=5485','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/sip.report.asp?invid=5485','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/tax_sheet.asp?invid=5485','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1');return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/txn.search.asp?invid=5485','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/reports/main/ms.aws.asp?invid=5485','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_FINP_5485').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_FINP_5485').style.display='block';} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_5485" name="UD_DIV_FINP_5485">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.asp?INVESTOR_ID=5485','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/finnsys/finplan/goal.tracker.asp?investor_id=5485','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1');return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_ALERTS_5485').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_ALERTS_5485').style.display='block';} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_5485" name="UD_DIV_ALERTS_5485">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID=5485','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.sip.asp?investor_id=5485','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.customized.asp?investor_id=5485','NEWALERT','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open('/FinnSys/alerts/set/alerts.all.asp?investor_id=5485','ALLALERTS','top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1');return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_TOOLS_5485').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_TOOLS_5485').style.display='block';} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_5485" name="UD_DIV_TOOLS_5485">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/tools/investor.cart.asp?invid=5485','SYSREPORT','top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1'); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick='window.open("/FinnSys/tools/mailer.investor.asp?todo=7&tid=5485","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;' href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById('UD_DIV_SUBSC_5485').style.display=='block'){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById('UD_DIV_SUBSC_5485').style.display='block';} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_5485" name="UD_DIV_SUBSC_5485">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open('/FinnSys/investors/billing/subs.payments.asp?invid=5485&invname=VIJAY KUMAR JAIN','SYSREPORT','top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1');return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_5485" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>

        
	
    </tbody>
	</table>			
				
				
				

</form>
    <br /><br /><br />
</center>
</body>
</html>
<script>ShowPopup(false);</script>
