<?php include('header.php');?>
<style>
.search-top{
  display:block;
}
a[href*="index"]{
    color:#007bff !important;
  }
    /* Formatting search box */   
    
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
    }
     .result{
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
        background-color:#fff;
    }
    .result p:hover{
        background: #f2f2f2;
    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
</style>
<script type="text/javascript">
$(document).ready(function(){
  $.noConflict();
    $('#search_inv').on("keyup input", function(){
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
        var id= $('#search_inv').val($(this).text());       
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
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
        <div id='result' class="table-responsive">        
        </div>
      <?php include('footer.php');?>