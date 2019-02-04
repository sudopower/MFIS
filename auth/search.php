<?php 
include('../assets/session.php');
$sort='inv_name ASC';
if(isset($_GET['sortby'])){
    switch($_GET['sortby']){
        case 'ADDDATE': $sort='folio_date DESC';
        break;
        
    }
}

$q='select * from investors where inv_name like "%'.$_GET["srch_str"].'%" order by '.$sort.'';
$result=$db->query($q);
$num=$result->num_rows;
?>


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


<link REL="stylesheet" HREF="FinnSys/includes/standard.css" TYPE="text/css">


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
	//ImgToChange.src="FinnSys/images/common/button_Close.gif";
	return false;
	}
else
	{
    HideAllSubMenus();
    DivToChange.style.display = "none";
    document.getElementById("TAB_FOLIO_" + inv_id).style.backgroundColor = "#3787af";
    document.getElementById("TAB_FOLIO_LNK_" + inv_id).style.color = "#ffffff";
    document.getElementById("TAB_FOLIO_LNK_" + inv_id).style.fontWeight = "normal";
	//ImgToChange.src="FinnSys/images/common/button_Open.gif";
	return false;
	}	
}

function getFolioDetails(DivToChange, inv_id) {
    var url = 'finnsys/investors/getfolio.php?invid=' + inv_id + '&TO_REPORT=TXN_SUMM';
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
<script type='text/javascript' src='finnsys/reports/common/fxdhdr.js'></script>

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

<form method="get" NAME="form1" action="search.php">

<table height="30" border=0 cellpadding=0 cellspacing=0 width="100%" valign=top bgcolor="#eeeeee" >
		<tr  >
			<td width="85%" align=left class=smaller >
				
			</td>
        
		    <td class=smaller valign=middle align=center nowrap width="135px">	
                <A  onclick="window.open('/finnsys/help/main.asp?moveto=S','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;"  href="#"><img src="finnsys/images/support.png" border=0></a>
		    </td>
		    <td class=smaller valign=middle align=center nowrap width="135px">	
			    <A  onclick="window.open('/finnsys/help/main.asp?page=INVESTORSEARCH','HELP','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;" href="#"><img src="finnsys/images/tutorial.png" border=0></a>
		    </td>
        
		</tr>
</table>

<table border=0 cellpadding=8 cellspacing=1 width="100%" valign=top >
<tr>
	<td class=smaller valign=top>
        
	</td>
	<td class=smallest align=right valign=top>
	    <b>Search:</b>&nbsp;&nbsp;
	    <input type="text" size="30" name="srch_str" width="90%" value="<?php if(isset($_GET['srch_str'])){echo $_GET['srch_str'];}?>">&nbsp;
	    <input name="imageField" type="image" src="FinnSys/images/srch.gif" border="0">
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
			
			<A HREF="search.php?grp_only=&CHARONLY=&TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=<?php if(isset($_GET['srch_str'])){echo $_GET['srch_str'];}?>&sortby=ADDDATE"><b><font color="#ffffff">Date Added</b></font></A>
		
		</td>	
		
		<td class=smallest width="10%" align=center>
		
			<b><font color="#ffffff">Name</b></font>&nbsp;<img src="FinnSys/images/blue-asc.jpg" border=0>
		
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
		        <b>Total Matches Found:&nbsp;<font color=red><?php echo $num;?></font></b>
		        </td>
	        </tr>
        <?php 
        $flag=0;
        while($r=mysqli_fetch_array($result)){
            if($flag==0){
                $color='#eeeeee';
            }
            else{
                $color='#d2d2d3';
                $flag--;
            }
            echo '<tr bgcolor="'.$color.'">
                <td class=smallest align=CENTER rowspan="2" nowrap>
                    '.date("d-M-Y",strtotime($r['folio_date'])).'
                </td>                                    
		        <td class=smallest align=LEFT>
		            
		            <a href="#" OnClick=window.open("../client_management/add_new.php?invid='.$r['sno'].'","","top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1"); return false; title="Click to open Investor Record"  ><b>'.$r["inv_name"].'</b></a>
		            
                </td>
		        <td class=smallest align=CENTER>
		            
			            -
		            
		        </td>
		        <td class=smallest align=LEFT>'.$r['address1'].'</td>
		        <td class=smallest align=center>'.$r['city'].'</td>
                <td class=smallest align=center>'.$r['pincode'].'</td>
                <td class=smallest align=center>'.date("M-d-Y",strtotime($r['inv_dob'])).'</td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    '.$r['username'].'<br><br><br>
				        [ <A href="tools/mailer_investor.php?todo=1&tid='.$r['sno'].'">Email Password</A> ]
			        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src="finnsys/images/trans_cross.png"><br /><br />
                        [ <a href="#" style="text-decoration:none" Onclick="window.open("/finnsys/finplan/goal.asp?INVESTOR_ID='.$r['sno'].'","SYSREPORT","top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1");return false;">create</a> ]
                    
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src="finnsys/images/trans_cross.png">
                        
                </td>
                <td class=smallest align=center rowspan="2" valign="middle" nowrap>
                    
                        <img src="finnsys/images/trans_cross.png"><br /><br />
                        
                                [ <A onclick="window.open("FinnSys/tools/mailer.investor.asp?todo=2&tid='.$r['sno'].'","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;" href="#">Invite to use App</A> ]
				            
                </td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <td class=smallest align=center>'.$r['pan_no'].'</td>
                <td class=smallest align=center>'.$r['mobile_no'].'</td>
                
                <td class=smallest align=center>'.$r['phone_res1'].'</td>
                <td class=smallest align=center>'.$r['phone_off1'].'</td>
                <td class=smallest align=center>'.$r['email'].'</td>
                <td class=smallest align=center>'.$r['fh_ckyc_no'].'</td>
	        </tr>
	        <tr bgcolor="#eeeeee">
                <TD colspan=11 class=smallest style="border: 0px solid;" align="center">
                    <span class=smallest style="float:left;"><a onclick="open_div_fns(\''.$r['sno'].'\');" href="#" style="text-decoration:none;" ><img src="FinnSys/images/button_Open.gif" border=0 id="IMG_MENUS_'.$r['sno'].'">&nbsp;Reports & Utilities</a></span>

                    <DIV id="DIV_MENUS_'.$r['sno'].'" style="display:none;">

                        <table border="0" cellpadding="10" cellspacing="5" align="center">
                        <tr>
                
			                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;width:150px;text-align:center; background-color:#3787af;" id="TAB_FOLIO_'.$r['sno'].'">			
			                    <a id="TAB_FOLIO_LNK_'.$r['sno'].'" href="#" class=smallest onClick="OpenFolio(\''.$r['sno'].'\'); return false;" style="color:#ffffff;">Folio List</a>
			                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById("UD_DIV_PORTF_'.$r['sno'].'").style.display=="block"){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById("UD_DIV_PORTF_'.$r['sno'].'").style.display="block";} return false;" style="color:#ffffff;">Portfolio Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_PORTF_'.$r['sno'].'" name="UD_DIV_PORTF_'.$r['sno'].'">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open("FinnSys/reports/agents/aum.summary.asp?agent_id=1&INVESTOR_ID='.$r['sno'].'&det=n","SYSREPORT","top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1");return false;">AUM Report</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open("FinnSys/reports/main/cap_summ.asp?rep=c&invid='.$r['sno'].'","SYSREPORT","top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1");return false;">Portfolio Analysis</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open("FinnSys/reports/main/inv.ledger.asp?invid='.$r['sno'].'","SYSREPORT","top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1");return false;">Investment Ledger</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open("FinnSys/reports/main/sip.report.asp?invid='.$r['sno'].'","SYSREPORT","top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1");return false;">SIP / STP Report</A>
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open("FinnSys/reports/main/tax_sheet.asp?invid='.$r['sno'].'","SYSREPORT","top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1");return false;">Taxation Sheet</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open("FinnSys/reports/main/txn.search.asp?invid='.$r['sno'].'","SYSREPORT","top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1"); return false;">Search Transactions</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open("FinnSys/reports/main/ms.aws.asp?invid='.$r['sno'].'","SYSREPORT","top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1"); return false;">Morningstar AWS</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById("UD_DIV_FINP_'.$r['sno'].'").style.display=="block"){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById("UD_DIV_FINP_'.$r['sno'].'").style.display="block";} return false;" style="color:#ffffff;">Financial Planning Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_FINP_'.$r['sno'].'" name="UD_DIV_FINP_'.$r['sno'].'">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;" >
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open("/finnsys/finplan/goal.asp?INVESTOR_ID='.$r['sno'].'","SYSREPORT","top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1");return false;">Risk Profile & Goals</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" Onclick="window.open("/finnsys/finplan/goal.tracker.asp?investor_id='.$r['sno'].'","SYSREPORT","top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1");return false;">Goal Tracking & Mapping</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                                </TD>
                                <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById("UD_DIV_ALERTS_'.$r['sno'].'").style.display=="block"){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById("UD_DIV_ALERTS_'.$r['sno'].'").style.display="block";} return false;" style="color:#ffffff;">Set Alerts</a>
                                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_ALERTS_'.$r['sno'].'" name="UD_DIV_ALERTS_'.$r['sno'].'">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open("FinnSys/alerts/set/alerts.insurance.asp?INVESTOR_ID='.$r['sno'].'","NEWALERT","top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1");return false;">Set Insurance Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open("FinnSys/alerts/set/alerts.sip.asp?investor_id='.$r['sno'].'","NEWALERT","top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1");return false;">Set SIP/STP Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" onclick="window.open("FinnSys/alerts/set/alerts.customized.asp?investor_id='.$r['sno'].'","NEWALERT","top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1");return false;">Set Customized Alerts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="">
                                                <a href="#" style="text-decoration:none" onclick="window.open("FinnSys/alerts/set/alerts.all.asp?investor_id='.$r['sno'].'","ALLALERTS","top=10,left=100,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1");return false;">Show existing alerts</a>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
			                    </TD>
                                 <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById("UD_DIV_TOOLS_'.$r['sno'].'").style.display=="block"){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById("UD_DIV_TOOLS_'.$r['sno'].'").style.display="block";} return false;" style="color:#ffffff;">Investments / Carts</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_TOOLS_'.$r['sno'].'" name="UD_DIV_TOOLS_'.$r['sno'].'">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" style="border-bottom:1px solid #d2d2d3;">
                                                <a href="#" style="text-decoration:none" Onclick="window.open("FinnSys/tools/investor.cart.asp?invid='.$r['sno'].'","SYSREPORT","top5=0,left=150,height=540,width=900,header=no,resizable=yes,scrollbars=1"); return false;">Show/Create Cart</A>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <A style="text-decoration:none" onclick="window.open("FinnSys/tools/mailer.investor.asp?todo=7&tid='.$r['sno'].'","","top=50,left=200,height=500,width=600,header=no,resizable=yes,scrollbars=1"); return false;" href="#">Email Cart</A>
                                            </td>
                                        </tr>
                                        
                                        </table>
                                    </div>
                                </TD>
                            
                            <TD class="smallest" valign="top" nowrap style="border:1px solid #a1a1a3;color:#ffffff; width:150px;text-align:center;" bgcolor="#3787af">			
			                        <a href="#" onclick="if (document.getElementById("UD_DIV_SUBSC_'.$r['sno'].'").style.display=="block"){HideAllSubMenus();} else {HideAllSubMenus();document.getElementById("UD_DIV_SUBSC_'.$r['sno'].'").style.display="block";} return false;" style="color:#ffffff;">Subscription Reports</a>
				                    <div style="float:left;width:100px;padding:8px;display:none;position:absolute;" id="UD_DIV_SUBSC_'.$r['sno'].'" name="UD_DIV_SUBSC_'.$r['sno'].'">
                                        <table width="100px" cellpadding="6" cellspacing="0" style="border:1px solid #d2d2d3;">
                                        <tr>
                                            <td nowrap class="smallest" align="left" valign="middle" bgcolor="#eeeeee" >
                                                <a href="#" style="text-decoration:none" Onclick="window.open("FinnSys/investors/billing/subs.payments.asp?invid='.$r['sno'].'&invname=ANIL KUMAR CHAUBEY","SYSREPORT","top=10,left=20,height=400,width=750,header=no,resizable=yes,scrollbars=1");return false;">Payment Receipts</A>
                                            </td>
                                        </tr>
                                        </table>
                                    </div>
                            </TD>
                            
                        </tr></table>
                    </DIV>
                    <DIV id="DIV_FOL_'.$r['sno'].'" style="padding:8px; display:none; position:center; width:75%" class="smallest">
                        Loading. Please wait.........
                    </DIV>
                </TD>
            </tr>';

        $flag++;}
        
        ?>   
            

        
	
    </tbody>
	</table>			
				
				
				

</form>
    <br /><br /><br />
</center>
</body>
</html>
<script>
function open_div_fns(id) {
    if (document.getElementById("DIV_MENUS_"+id).style.display=="block")
    {
        document.getElementById("DIV_MENUS_"+id).style.display="none";
        document.getElementById("IMG_MENUS_"+id).src="FinnSys/images/button_Open.gif";
    }
     else 
    {
        document.getElementById("DIV_MENUS_"+id).style.display="block";
        document.getElementById("IMG_MENUS_"+id).src="FinnSys/images/button_Close.gif";
    }
    return false;
}

ShowPopup(false);</script>
