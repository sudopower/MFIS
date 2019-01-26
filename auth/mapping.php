<?php 
include('session.php');
$q= 'SELECT foliochk,inv_name,sch_name,address1,city,pincode from investors where pan_no in 
(SELECT pangno from cm_karvy where datetime > CURRENT_DATE 
UNION SELECT panno1 from cm_franklin where datetime > CURRENT_DATE 
UNION SELECT pan_no from cm_cams where datetime > CURRENT_DATE ) or ac_no in 
(select bnkacno from cm_karvy where datetime > CURRENT_DATE 
UNION select ac_no from cm_cams where datetime > CURRENT_DATE 
UNION select accnt_no from cm_franklin where datetime > CURRENT_DATE) or inv_name in 
(select invname from cm_karvy where datetime > CURRENT_DATE 
UNION SELECT inv_name from cm_cams where datetime > CURRENT_DATE 
UNION select inv_name from cm_franklin where datetime > CURRENT_DATE)';
$result=$db->query($q);
echo '<table border=1><tr><th>Folio No</th><th>Investor Name</th><th>Scheme</th><th>Address</th><th>City</th><th>Pincode</th><th>Map Profile<hr>All<input id="all" type="checkbox" onclick="chk_all();"></th></tr>';
while($row=$result->fetch_row()){
    echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td><input type=checkbox></td></tr>';
}
echo '</table>';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
function chk_all(){
    if($('#all').prop("checked") == false){
    $("input[type=checkbox]").prop('checked', false);
            }
            else if($('#all').prop("checked") == true){
               
    $("input[type=checkbox]").prop('checked', true);
            }
}
</script>