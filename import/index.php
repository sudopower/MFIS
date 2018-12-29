<html>
<body>
<form id='import' action="" method='POST' enctype='multipart/formdata'>
<label>Choose Source and Upload Data Files</label><br><br>
<select name='source'>
<option value='c_cams'>CM CAMS</option>
<option value='c_frank'>CM FRANKLIN</option>
<option value='c_karvy'>CM KARVY</option>
<option value='t_cams'>TR CAMS</option>
<option value='t_frank'>TR FRANKLIN</option>
<option value='t_karvy'>TR KARVY</option>
</select>
<br><br>
<input name='file' id='file' type='file'><br><br>
<input type='submit' onclick="import_fn();">
</form>
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
</body>
</html>