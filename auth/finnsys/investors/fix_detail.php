<?php
include_once('../../../assets/session.php');
if(isset($_GET['inv_srch'])){$name=$_GET['inv_srch'];}else{$name='';}
if(isset($_GET['UD_NO_REC'])){$limit=$_GET['UD_NO_REC'];}else{$limit='50';}
if(isset($_GET['pgno'])){$offset=$_GET['pgno'];}else{$offset='0';}
if(isset($_GET['UD_REC_TYPE'])){
	switch($_GET['UD_REC_TYPE']){
		case 'ALL': 
		$q='select sno,inv_name,address1,city,phone_res1,mobile_no,email,broker_code from investors where inv_name like "%'.$name.'%" and (email is null or mobile_no is null) LIMIT '.$offset.','.$limit.'';
		break;
		case 'EML': 
		$q='select sno,inv_name,address1,city,phone_res1,mobile_no,email,broker_code from investors where inv_name like "%'.$name.'%" and email is null  LIMIT '.$offset.','.$limit.'';
		break;
		case 'MOB': 
		$q='select sno,inv_name,address1,city,phone_res1,mobile_no,email,broker_code from investors where inv_name like "%'.$name.'%" and mobile_no is null  LIMIT '.$offset.','.$limit.'';
		break;
		default: 
		$q='select sno,inv_name,address1,city,phone_res1,mobile_no,email,broker_code from investors where inv_name like "%'.$name.'%" and (email is null or mobile_no is null)  LIMIT '.$offset.','.$limit.'';
		break;
	}
}
else
{
	$q='select sno,inv_name,address1,city,phone_res1,mobile_no,email,broker_code from investors where inv_name like "%'.$name.'%" and (email is null or mobile_no is null)  LIMIT '.$offset.','.$limit.'';
}
$result=$db->query($q);
?>
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
<form action="fix_detail.php" method="get" name="form1">
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
		
			
<?php 
        $count=1;
        while($r=mysqli_fetch_array($result)){
            
            echo '<tr>
			<td class=smaller align=center >'.$count.'</td>
			<td class=smaller align=left >
			<A title="Click to open Investor Record" onclick="return window.open(\'../../tools/add_new.php?invid='.$r['sno'].'\',\'\',\'top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1\');" href="#">
				<B>'.$r['inv_name'].'</B>
			</A>
			</td>
			<td class=smaller align=left >
					
					<A title="Click to open Investor Record" onclick="return window.open(\'../../tools/add_new.php?invid='.$r['sno'].'\',\'\',\'top=0,left=50,height=540,width=700,header=no,resizable=yes,scrollbars=1\');" href="#">
						<B>'.''.'</B>
					</A>	
				
			</td>
			<td class=smaller align=left >'.$r['address1'].'</td>
			<td class=smaller align=left >'.$r['city'].'</td>
			<td class=smaller align=left >'.$r['phone_res1'].'</td>
			<td class=smaller align=left ><font color=red>'.$r['mobile_no'].'</font></td>
			<td class=smaller align=left ><font color=red>'.$r['email'].'</font></td>
			<td class=smaller align=left >'.$r['broker_code'].'</td>
            </tr>';

        $count++;}
        
        ?> 
			
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
