
<?php 
include('session.php');
$q_name='select name from user where username= "'.$_SESSION['login_user'].'"';
$result=$db->query($q_name);
$row=$result->fetch_array();
$name=$row['name'];
$_SESSION['name']=$name;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Control Panel</title>

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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script language="JavaScript" src="/finnsys/includes/mm_menu.js"></script>

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


<script language="javascript">
    var i = 1;
    setInterval(function () {
        if (i < 10) {
            document.getElementById("timeelapsed").innerHTML = '0'+i;
        } else {
            document.getElementById("timeelapsed").innerHTML = i;
        }
        i++;
    }, 1000);
</script>
<!--Start of Zendesk Chat Script-->

<script type="text/javascript">var $zoho= $zoho || {livedesk:{values:{},ready:function(){$zoho.livedesk.chat.floatingwindow('all');}}};
var d=document;s=d.createElement("script");s.type="text/javascript";
s.defer=true;
s.src="https://salesiq.zoho.com/support.finnsyshelp/float.ls?embedname=finnsyshelp";
t=d.getElementsByTagName("script")[0];
t.parentNode.insertBefore(s,t);
</script>

<!--End of Zendesk Chat Script-->
</head>
<body style="background-color:#d1d1d1;">
<div id="boxes" style="display:none;">
    <div id="dialog" class="window" style="height:150px;display:none;">
        <table width="100%" border="0"><tr><td valign="top">
            <img src="/finnsys/nse/images/loader.gif" /></td><td class="text">Loading Dashboard.. please wait
            <br /><br /><p class="text" style="font-size:12px;font-weight:normal;text-align:justify">The latest nav and product masters are being refreshed. This may take upto a minute to complete. 
                Incase this takes longer than a minute, please <a href="#" onclick="ShowPopup(false);" style="color:#ffffff;">click here to load your dashboard</a> manually.</p>
                Time elapsed (seconds): <div id="timeelapsed" class="text" style="display:inline;"></div>
        </td></tr></table>
    </div>
    <!-- Mask to cover the whole screen -->
    <div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" class="mainbg" >
    		<!---- Main - Inner Table ------------------------------------------->
				

				<!---------------- Header ------------------------------>
				<table width="965" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr><td colspan="3">&nbsp;</td></tr>
				  <tr>
				    <td width="293" valign="top">
						<!---------------- Left Menu ------------------------------>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td width="5%">&nbsp;</td>
							<td height="25" nowrap align="center" class="greylink"><A href="/finnsys/main.asp">Home</A></td>
							<td width="1" align="center" class="divider">|</td>
						    <td height="25" nowrap align="center" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="/FinnSys/tools/edit.profile.asp">Edit Profile</a></td>
						    <td width="1" align="center" class="divider">|</td>
						    <td height="25" nowrap align="center" class="greylink"><A onclick='window.open("/FinnSys/tools/change_pass.asp?USER_ID=1&amp;User_Type=BR","","top=175,left=240,height=230,width=330,header=no,maximise=no,scrollbars=1"); return false;' href="#">Change Password</A></td>
						    <td width="1" align="center" class="divider">|</td>
						    <td height="25" align="center" nowrap class="greylink"><A href="/FinnSys/signout.asp">Sign Out</A></td>
						  </tr>
						  <tr>
						    <td width="16">&nbsp;</td>
						    <td colspan=7 width="234" height="25" align="left" ><span class="bluelink"><strong>Welcome <?php if(isset($name)){echo $name;}?></strong></span>
						    </td>
						  </tr>
						  <tr>
						    <td>&nbsp;</td>
						    <td colspan=7  align="left" class="grey">Monday, January 14, 2019</td>
						  </tr>
						</table>
						<!---------------- Left Menu ------------------------------>
				    </td>
				    <td width="350" align="center" valign=bottom>
						<!---------------- Logo ------------------------------>
							
								<img src="/FinnSys/advisor_img/adminlogo.jpg">
							
						<!---------------- Logo ------------------------------>
					</td>
				    <td width="322"  valign="top">
						<!---------------- Right Menu ------------------------------>
						<table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
						  <tr>
						    <td height="7px" colspan="10"></td>
						  </tr>
						  <tr>
							
                              <td align="center" class="greylink">
								<ul class="dropdwnmenu" id="mn_hdr_premium">
									<li>
										<a href="#" onclick="return false;"><font color=red><b>Premium Add-ons</b></font></a>
                                        <ul style="text-align:left;">
                                            
                                            <li><a href="#" onclick="window.open('/FinnSys/nse/admin/iin.mapping.asp','NSE.IIN.MAPPING','top=0,left=50,height=600,width=1100,header=no,resizable=yes,scrollbars=1,status=1'); return false;">NSE IIN Mapping</a></li>
                                            <li><a href="#" onclick="window.open('/FinnSys/nse/admin/ach.mandate.asp','NSE.IIN.MAPPING','top=0,left=50,height=600,width=1100,header=no,resizable=yes,scrollbars=1,status=1'); return false;">NSE ACH Mandate Report</a></li>
                                            
											<li><a href="#" onclick="window.open('/FinnSys/app/reports/network.asp','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1,status=1'); CollapseMenu(); return false;">Mobile App</a></li>
											<li><a href="#" onclick="window.open('/FinnSys/broadcast/finnmailer/main.asp','BROADCAST','top=0,left=50,height=600,width=1100,header=no,resizable=yes,scrollbars=1,status=1'); return false;">Mailers & Campaigns</a></li>
										</ul>
									</li>
								</ul>
							</td>
                              <td width="1" align="center" class="divider">|</td>
                              <td align="center" class="greylink">
								<ul class="dropdwnmenu" id="mn_hdr_manage">
									<li>
										<a href="#" onclick="return false;">Manage</a>
                                        <ul style="text-align:left;">
											<li><a href="/FinnSys/tools/sublogins.asp" onclick="CollapseMenu();" target="RESULTS_PANE">Sub Admin Logins</a></li>
											<li><a href="/FinnSys/system/logs.asp" onclick="CollapseMenu();" target="RESULTS_PANE">Error Logs</a></li>
											<li><a href="/FinnSys/system/settings.asp" onclick="CollapseMenu();" target="RESULTS_PANE">System Settings</a></li>
											<li><a href="/FinnSys/system/invpanel/customize.asp" onclick="CollapseMenu();" target="RESULTS_PANE">Customize Colors</a></li>
											<li><a href="/FinnSys/txn/calender.asp" onclick="CollapseMenu();" target="RESULTS_PANE">Txn Calander</a></li>
											<li><a href="/finnsys/system/status.asp" onclick="ExpandMenu();" target="RESULTS_PANE">System Monitor</a></li>
										</ul>
									</li>
								</ul>
							</td>
							
                              <td width="1" align="center" class="divider">|</td>
							<td  align="center" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="/FinnSys/system/backup.asp">Backup</a></td>
							<td width="1" align="center" class="divider">|</td>
							<td  align="center" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="/FinnSys/alerts/alerts.panel.asp">Set Alerts</a></td>
						    <td width="1" align="center" class="divider">|</td>
						    <td  align="center" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="/FinnSys/system/visits.asp">Login Traffic</a></td>
						    <td width="1" align="center" class="divider"></td>
						</tr>
						   <tr>
						    <td height="15px" colspan="10"></td>
						  </tr>
						  <tr>
						    <td height="25" colspan="10" align="right" class="bluelink"><a target="_BLANK" href="http://www.armfintech.com/MutualFundSoftware/kb/show.asp"><strong>Learning/Help Center</strong></a>&nbsp;&nbsp;&nbsp;</td>
						  </tr>
						</table>
						<!---------------- Right Menu ------------------------------>
				    </td>
				  </tr>
	
				  <tr><td colspan="3">
                      
				  </td></tr>
				  
				  <tr><td colspan="3" align=right>
					<!---------------- Search Table ------------------------------>
                            <form method="get" onsubmit="window.open('/FinnSys/investors/search.asp?TO_REPORT=TXN_SUMM&SHOWFOLIO=1&srch_str=' + document.getElementById('srch_str').value,'SEARCHWINDOW','top=0,left=10,height=540,width=780,header=no,resizable=yes,scrollbars=1'); return false;">
							<table width="70%" border="0" cellspacing="0" cellpadding="0">
							  <tr>
							    <td width="90%" align=right>
							      <b>Search:&nbsp;</b><input name="srch_str" type="text" class="textarea1" id="srch_str" size="88" />
							    </td>
							    <td width="10%" align=left>
									<input name="ImageSearch" type=image src="/finnsys/images/searchbutton.png" />
							    </td>
							  </tr>
							</table>
                            </form>
					<!---------------- Search Table ------------------------------>
				  </td></tr>
				</table>
				<!---------------- Header ------------------------------>
				
				<script type="text/javascript">
					var mn_hdr_manage=new menu.dd("mn_hdr_manage");
					mn_hdr_manage.init("mn_hdr_manage", "menuhover");
					var mn_hdr_premium = new menu.dd("mn_hdr_premium");
					mn_hdr_premium.init("mn_hdr_premium", "menuhover");
				</script>

				<!---------------- Menu ------------------------------>
				<table width="965" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
				    <td colspan="3" align=center>
						<div id="UD_MENU_MAX" style="display:block">
							<!---- Table Sys Snapshot + main menu ------------------------------------------->
							<table width="965" border="0" cellspacing="0" cellpadding="0">
							  <tr>
							    <td width="283" valign="top" align="center">
									<iframe allowTransparency="true" id="SNAPSHOT_PANE" name="SNAPSHOT_PANE" align="center" marginwidth="0"  marginheight="0" width="257px" height="200px" frameborder="0" scrolling="no" src="" ></iframe>
							    </td>
							    <td width="682" valign="top">
									<!---------------- Main Menu ------------------------------>
										<table width="100%" border="0" cellspacing="3" cellpadding="3">
										<tr>
										    <td colspan=2 align="left" valign="middle" ><span style='color:purple;'>Client Management</span></td>
										    <td colspan=2 align="left" valign="middle" ><span style='color:blue;'>Data Management</span></td>
										    <td colspan=2 align="left" valign="middle" ><span style='color:red;'>Financial Advisory</span></td>
										    <td colspan=2 align="left" valign="middle" ><span style='color:green;'>Business Management</span></td>
										</tr>
										<tr>
										    <td valign="middle" align="right" width="15px"><img src="finnsys/images/purple_sq.jpg"></td>
										    <td align="left" valign="middle" class="greylink"><a onclick='window.open("../client_management/add_new.php","NEW INVESTOR","top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1,status=1"); return false;' href="#">Add New Investor</a></td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/blue_sq.jpg"></td>
										    <td align="left" valign="middle" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="client_master.php">Import Client Master</a></td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/red_sq.jpg"></td>
										    <td align="left" class="greylink"><a href="#" onclick="return window.open('/finnsys/finplan/start.asp','SYSREPORT','top=100,left=100,height=550,width=850,header=no,resizable=yes,scrollbars=1,status=1'); return false;" >Create a new plan</a></td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/green_sq.jpg"></td>
										    <td align="left" valign="middle" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="/FinnSys/tools/agents.home.asp">Distributor Network</a></td>
										</tr>
										<tr>
										    <td valign="middle" align="right" width="15px"><img src="finnsys/images/purple_sq.jpg"></td>
										    <td align="left" class="greylink"><a onclick='window.open("../client_management/fix_detail.php","NEWINVESTOR","top=0,left=50,height=600,width=800,header=no,resizable=yes,scrollbars=1,status=1"); return false;' href="#">Update Emails & Mobile Nos</a></td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/blue_sq.jpg"></td>
										    <td align="left" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="/FinnSys/txn/new.txn.home.asp">Import Transactions</a></td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/red_sq.jpg"></td>
										    <td align="left" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="/FinnSys/finplan/master/all.risk.profiles.asp">Investor Risk Profiles</a></td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/green_sq.jpg"></td>
										    <td align="left" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="/FinnSys/inv/set.online.asp">Set AMC Links</a></td>
										</tr>
										<tr>
										    <td valign="middle" align="right" width="15px"><img src="finnsys/images/purple_sq.jpg"></td>
										    <td align="left" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="search_inv.php">Investor MIS</a></td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/blue_sq.jpg"></td>
										    <td align="left" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="/FinnSys/txn/trail.home.asp">Import Trail Reports </a></td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/red_sq.jpg"></td>
										    <td align="left" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="/FinnSys/finplan/master/all.goals.asp">Investor Goals</a></td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/green_sq.jpg"></td>
										    <td align="left" class="greylink"><a onclick="window.open('/FinnSys/reports/main/txn.search.asp','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1,status=1'); return false;" href="#">Search Transactions</a></td>
										</tr>
										<tr>
										    <td valign="middle" align="right" width="15px"><img src="finnsys/images/purple_sq.jpg"></td>
										    <td align="left" class="greylink"><a onclick="window.open('/FinnSys/finplan/master/latest.investors.asp','FINPLANREPORT','top=0,left=0,height=600,width=900,header=no,resizable=yes,scrollbars=1,status=1'); return false;" href="#">New Investors registered</a></td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/blue_sq.jpg"></td>
										    <td align="left" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="/FinnSys/txn/bulk_upload/bulk.upload.home.asp">Bulk Import Masters</a></td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/red_sq.jpg"></td>
										    <td align="left" valign="middle" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="/FinnSys/finplan/asset.alloc.asp">Set Asset Allocation</a></td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/green_sq.jpg"></td>
										    <td align="left" class="greylink">
												<ul class="dropdwnmenu" id="mn_busmgmt_mis">
													<li>
														<a href="#" onclick="return false;">MIS Reports</a>
														<ul>
                                                            <li><a href="#" onclick="window.open('/FinnSys/reports/agents/total.sales.asp','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1,status=1'); return false;" >Sales Mobilisation</a></li>
															<li><a href="#" onclick="window.open('/FinnSys/reports/main/inv_subscriptions.asp?agent_id=1','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1,status=1'); return false;" >Investor Subscriptions</a></li>
															<li><a href="/FinnSys/reports/agents/aum.home.asp" onclick="CollapseMenu();" target="RESULTS_PANE">AUM</a></li>
															<li><a href="#" onclick="window.open('/FinnSys/reports/agents/sips.asp?agent_id=1','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1,status=1'); return false;">Active SIPs & STPs</a></li>
															<li><a href="#" onclick="window.open('/FinnSys/schemes/productmat.asp?agent_id=1','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1,status=1'); return false;">Product Maturity Calendar</a></li>
                                                            <li><a href="#" onclick="window.open('/FinnSys/reports/agents/turnover.ratio.asp','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1,status=1'); return false;">AMFI Compliance Report</a></li>
														</ul>
													</li>
												</ul>
										    </td>
										</tr>
										<tr>
										    <td valign="middle" align="right" width="15px"><img src="finnsys/images/purple_sq.jpg"></td>
										    <td align="left" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="/FinnSys/investors/groups.asp">Investor Groups / Families</a></td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/blue_sq.jpg"></td>
										    <td align="left" class="greylink"><a onclick="CollapseMenu();" target="RESULTS_PANE" href="/FinnSys/manual/main.asp">Manual Entry</a></td>
										    <td valign="middle" align="right" width="15px">&nbsp;</td>
										    <td align="left" class="greylink">&nbsp;</td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/green_sq.jpg"></td>
										    <td align="left" class="greylink">
												<ul class="dropdwnmenu" id="mn_busmgmt_brok">
													<li>
														<a href="#" onclick="return false;">Brokerage</a>
														<ul>
															<li><a href="#" onclick="window.open('/FinnSys/reports/agents/brokerage.received.asp?agent_id=1','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1,status=1'); return false;" >Brokerage Received</a></li>
															<li><a href="/FinnSys/reports/agents/admin.commissions.asp" onclick="CollapseMenu();" target="RESULTS_PANE">Brokerage Payable</a></li>
															<li><a href="#" onclick="window.open('/FinnSys/reports/agents/brokerage.recon.asp','SYSREPORT','top=0,left=0,height=540,width=780,header=no,resizable=yes,scrollbars=1,status=1'); return false;" >Brokerage Rates Reconcilation</a></li>
														</ul>
													</li>
												</ul>
										    </td>
										</tr>
										<tr>
										    <td valign="middle" align="right" width="15px"><img src="finnsys/images/purple_sq.jpg"></td>
										    <td align="left" class="greylink"><a onclick="window.open('/FinnSys/investors/querybuilder.asp','QBUILDER','top=0,left=150,height=530,width=500,header=no,resizable=yes,scrollbars=1'); return false;" href="#">Query Builder</a></td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/blue_sq.jpg"></td>
										    <td align="left" class="greylink">
												<ul class="dropdwnmenu" id="mn_dtmgmt_tools">
													<li>
														<a href="#" onclick="return false;">Data Management tools</a>
														<ul>
															<li><a href="/FinnSys/investors/main.asp?edit=true" onclick="CollapseMenu();" target="RESULTS_PANE">Remove / Remap</a></li>
															<li><a href="/FinnSys/tools/folio.restore.asp" onclick="CollapseMenu();" target="RESULTS_PANE">Restore</a></li>
															<li><a onclick="window.open('/FinnSys/tools/shift.aum.asp','SHIFTAUM','top=50,left=100,height=600,width=900,header=no,resizable=yes,scrollbars=1'); return false;" href="#">Shift AUM</a></li>
															<li><a href="/FinnSys/tools/folio.fix.asp" onclick="CollapseMenu();" target="RESULTS_PANE">Fix (Multiple Distributors)</a></li>
															<li><a href="/FinnSys/tools/folio.negative.balances.asp" onclick="CollapseMenu();" target="RESULTS_PANE">Fix (Negative Unit Bal.)</a></li>
															<li><a href="/FinnSys/tools/file.splitter.asp" onclick="CollapseMenu();" target="RESULTS_PANE">File Splitter</a></li>
														</ul>
													</li>
												</ul>
										    </td>
										    <td valign="middle" align="right" width="15px">&nbsp;</td>
										    <td align="left" class="greylink">&nbsp;</td>
										    <td valign="middle" align="right" width="15px"><img src="/finnsys/images/green_sq.jpg"></td>
										    <td align="left" class="greylink">
												<ul class="dropdwnmenu" id="mn_busmgmt_brdcst">
													<li>
														<a href="#" onclick="return false;">Broadcast message</a>
														<ul>
															<li><a href="#" onclick="window.open('/FinnSys/broadcast/compose.brdcst.asp','BROADCAST','top=10,left=100,height=590,width=800,header=no,resizable=yes,scrollbars=1,status=1'); return false;" >Compose New</a></li>
															<li><a href="#" onclick="window.open('/FinnSys/broadcast/invite.all.asp','BROADCAST','top=0,left=0,height=600,width=980,header=no,resizable=yes,scrollbars=1,status=1'); return false;" >Invite Investors</a></li>
															<li><a href="#" onclick="window.open('/FinnSys/broadcast/tips.asp','BROADCAST','top=0,left=0,height=600,width=980,header=no,resizable=yes,scrollbars=1,status=1'); return false;" >Post Tips & Recc</a></li>
															<li><a href="#" onclick="window.open('/FinnSys/broadcast/finnmailer/main.asp','BROADCAST','top=0,left=50,height=600,width=1100,header=no,resizable=yes,scrollbars=1,status=1'); return false;" >My Library</a></li>
														</ul>
													</li>
												</ul>	
											</td>
										</tr>
										</table>
									<!---------------- Main Menu ------------------------------>
									<br>
									<table width="100%"> 
										<tr><td align=right class="greylink">
											<a href="#" onclick='CollapseMenu(); return false;'><b>[-] Collapse Menu</b></a>
										</td></tr>
									</table>
							    </td>
							  </tr>
							  </table>
							<!---- Table Sys Snapshot + main menu ------------------------------------------->
						</div>
				    </td>
				  </tr>
				  
				  <tr><td colspan=3 align=right>
				  		<div id="UD_MENU_MIN" style="display:none;">
						<br>
							<table width="680px" border="0" cellspacing="0" cellpadding="4" style="border: solid 0px #b8b8b8; background:none;">
							  <TR>
								
								<TD width="170px" vAlign="middle" align="left" width=""><IMG src="/finnsys/images/cl_mgmt.png"></TD>
								<TD width="160px" vAlign="middle" align="left"><IMG src="/finnsys/images/dt_mgmt.png"></TD>
								<TD width="160px" vAlign="middle" align="left"><IMG src="/finnsys/images/fin_adv.png"></TD>
								<TD width="190px" vAlign="middle" align="left"><IMG src="/finnsys/images/buss_mgmt.png"></TD>
							  </tr>		
							  <tr>
							    <td valign="middle" align=right colspan=5 class="greylink">
									<a href="#" onclick='ExpandMenu(); return false;'><b>[+] Expand Menu</b></a>
								</td>
							  </tr>
							 </table>
							 <br> 		
						</div>
				  </td></tr>
				</table>
				<!---------------- Menu ------------------------------>

<script language="javascript">
function ExpandMenu()
{
	document.getElementById("UD_MENU_MAX").style.display="block"; 
	document.getElementById("UD_MENU_MIN").style.display="none";
	CollapseResultHeight();
}

function CollapseMenu()
{
	document.getElementById("UD_MENU_MAX").style.display="none"; 
	document.getElementById("UD_MENU_MIN").style.display="block";
	ExpandResultHeight();
}

function ExpandResultHeight()
{
	document.getElementById("RESULTS_PANE").height = "550px"
}

function CollapseResultHeight()
{
	document.getElementById("RESULTS_PANE").height = "430px"
}
</script>	

<script type="text/javascript">
	var mn_busmgmt_mis=new menu.dd("mn_busmgmt_mis");
	mn_busmgmt_mis.init("mn_busmgmt_mis","menuhover");
	
	var mn_busmgmt_brok=new menu.dd("mn_busmgmt_brok");
	mn_busmgmt_brok.init("mn_busmgmt_brok","menuhover");
	
	var mn_busmgmt_brdcst=new menu.dd("mn_busmgmt_brdcst");
	mn_busmgmt_brdcst.init("mn_busmgmt_brdcst","menuhover");
	
	var mn_dtmgmt_tools=new menu.dd("mn_dtmgmt_tools");
	mn_dtmgmt_tools.init("mn_dtmgmt_tools","menuhover");
</script>
							

				 <table width="965" height="330px" border="0" align="center" cellpadding="0" cellspacing="0"> 
				  <tr>
				    <td colspan="3" valign="top" align=center>
						<iframe id="RESULTS_PANE" name="RESULTS_PANE" align="center" marginwidth="0"  marginheight="0" width="950px" height="430px" frameborder="0" scrolling="Yes" src=""></iframe>
				    </td>
				  </tr>
				</table>
				
			<!---- Main - Inner Table ------------------------------------------->
    </td>
  </tr>
  <tr>
    <td valign="top" >
		<iframe style="background:none" id="FOOTER_PANE" name="FOOTER_PANE" align="center" marginwidth="0"  marginheight="0" width="100%" height="50px" frameborder="0" scrolling="no" src=""></iframe>
	</td>
 </tr>	
</table>
</body>
</html>

