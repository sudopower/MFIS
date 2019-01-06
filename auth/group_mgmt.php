<?php include('header.php');?>
<style>
a[href*="import"]{
    color:#007bff !important;
  }
</style>
<h1 class="h2">Group Management</h1>
</div>
<a class="btn btn-primary mb-2" style="color:#fff;" href="add_group.php" target="_blank">Create Group</a>
<a class="btn btn-success mb-2" style="color:#fff;">View Group</a>
<a class="btn btn-danger mb-2" style="color:#fff;" >Show All Groups</a>
<script
      src="https://code.jquery.com/jquery-3.3.1.js "
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous "
    ></script>    
<script>
function import_fn(){  
       event.preventDefault();            
       var form = $('#import')[0];           
       var data = new FormData(form); 
    $.ajax({
      type: "POST",
      enctype: 'multipart/form-data',
      url: "import_back.php",
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
			success: function(response){ 
        console.log(response);   
      if(response=='success'){
      alert(response);
      }                
      else if (response=='error'){
      alert('Error');
      }      
            }
			});
      
}
</script>
<?php include('footer.php');?>