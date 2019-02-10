<?php 
include('../assets/session.php');
$q= 'SELECT foliochk,inv_name,sch_name,address1,city,pincode from investors where pan_no in 
(SELECT pangno from cm_karvy where folio_status_system="pending" 
UNION SELECT panno1 from cm_franklin where folio_status_system="pending" 
UNION SELECT pan_no from cm_cams where folio_status_system="pending" ) or ac_no in 
(select bnkacno from cm_karvy where folio_status_system="pending" 
UNION select ac_no from cm_cams where folio_status_system="pending" 
UNION select accnt_no from cm_franklin where folio_status_system="pending") or inv_name in 
(select invname from cm_karvy where folio_status_system="pending" 
UNION SELECT inv_name from cm_cams where folio_status_system="pending" 
UNION select inv_name from cm_franklin where folio_status_system="pending")';
$result=$db->query($q);
echo '<h1>Mapped</h1><table border=1><tr><th>Folio No</th><th>Investor Name</th><th>Scheme</th><th>Address</th><th>City</th><th>Pincode</th><th>Map Profile<hr>All<input id="all" type="checkbox" onclick="chk_all();"></th></tr>';
while($row=$result->fetch_row()){
    echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td><input type=checkbox></td></tr>';
}
echo '</table>';
$q= 'SELECT ACNO,INVNAME,FUNDDESC,ADD1,CITY,PIN from cm_karvy where PANGNO not in (SELECT PAN_NO from investors) or bnkacno not in (SELECT ac_no from investors) or INVNAME not in  (SELECT inv_name from investors) and folio_status_system = "pending"';
$result=$db->query($q);
echo '<h1>Unmapped</h1><table border=1><tr><th>Folio No</th><th>Investor Name</th><th>Scheme</th><th>Address</th><th>City</th><th>Pincode</th><th>Map Profile<hr>All<input id="all" type="checkbox" onclick="chk_all();"></th></tr>';
while($row=$result->fetch_row()){
    echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td><input type=checkbox></td></tr>';
}
echo '</table>';
?>
<button>Apply</button>
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