<?php include('header.php');?>
<script type="text/javascript">
$(document).ready(function(){
  $.noConflict();
    $('#search_inv_g').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        if(inputVal.length){
            $.get("livesearch.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                $('.result').html(data);
            });
        } else{
          $('.result').empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        var id= $('#search_inv_g').val($(this).text());       
        var res=id.val();
            $.get(
                
                "livesearch.php", {name: res}).done(function(data){
                // Display the returned data in browser
                
                $('#result').html(data);
                });        
                $('.result').empty();
    });
});
</script>
</div>
<form>
    <div class="form-group col-md-3">
        <input type='text' placeholder="Group Name" class='form-control'>       
    </div>
    <div class="form-group col-md-3">
        <input type='text' id='search_inv_g' placeholder="Search Group Head" class='form-control'>      
        <div id='result' class="table-responsive">        
        </div> 
    </div>
    <div class="form-group col-md-3">
        <button type='submit' class='btn btn-primary mb-2'>Create Group</button>
    </div>
</form>
<?php include('footer.php');?>