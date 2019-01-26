<?php 
include('session.php');
$q= 'SELECT foliochk,inv_name,address1,city,pincode from investors where pan_no in 
(SELECT pangno from cm_karvy where datetime > CURRENT_DATE 
UNION SELECT panno1 from cm_franklin where datetime > CURRENT_DATE 
UNION SELECT pan_no from cm_cams where datetime > CURRENT_DATE ) or ac_no in 
(select bnkacno from cm_karvy where datetime > CURRENT_DATE 
UNION select ac_no from cm_cams where datetime > CURRENT_DATE 
UNION select accnt_no from cm_franklin where datetime > CURRENT_DATE) or inv_name in 
(select invname from cm_karvy where datetime > CURRENT_DATE 
UNION SELECT inv_name from cm_cams where datetime > CURRENT_DATE 
UNION select inv_name from cm_franklin where datetime > CURRENT_DATE)';
?>