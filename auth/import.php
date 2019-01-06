<?php include('header.php');?>
<style>
a[href*="import"]{
    color:#007bff !important;
  }
</style>
<h1 class="h2">Choose Registrar and Upload Data Files</h1>
</div>
<form  id='import' action="" method='POST' enctype='multipart/formdata'>
<div class="form-group col-md-2">
<select class="form-control" name='source'>
<option value='c_cams'>CM CAMS</option>
<option value='c_frank'>CM FRANKLIN</option>
<option value='c_karvy'>CM KARVY</option>
<option value='t_cams'>TR CAMS</option>
<option value='t_frank'>TR FRANKLIN</option>
<option value='t_karvy'>TR KARVY</option>
</select>
</div>
<div class="form-group col-md-2">
<input class="form-control-file" name='file' id='file' type='file'>
</div>
<div  class="form-group">
<input class="btn btn-primary ml-3" type='submit' onclick="import_fn();" value="Import">
</div>
</form>
<script
      src="https://code.jquery.com/jquery-3.3.1.js "
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous "
    ></script>
    <script>
    $( '#topheader .navbar-nav a' ).on( 'click', function () {
	$( '#topheader .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});
    </script>
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