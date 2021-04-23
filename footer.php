<?php
if(isset($_REQUEST['error_msg'])){
  echo '<p style="text-align:center;">'.$_REQUEST['error_msg'].'</p>';
}
?>
<div class="fixed-footer">
        <div class="container" style="text-align:center;">Copyright &copy; 2021Your Company</div>        
    </div>
    </body>
    <script>
        
        $(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
}); 
        $(function(){
          $('input[type="text"]').keyup(function(){
             this.value = $.trim(this.value);
             });
        });


         function Check(evt)
           {
             if(evt.keyCode == 32)
           {
            alert("Space not allowed");
            return false;
           }
            return true;
          }

            $(document).ready(function() 
             {
              $('#country-dropdown').on('change', function() 
               {
                var country_id = this.value;
                 $.ajax
                 ({
                   url: "state.php",
                    type: "POST",
                      data: 
                       {
                       country_id: country_id
                       },
                        cache: false,
                        success: function(result)
                       {
                    $("#state-dropdown").html(result);
                  $('#city-dropdown').html('<option value="">Select State First</option>'); 
                       }
                  });
                });  

           $('#state-dropdown').on('change', function()
            {
             state_id = this.value;
              $.ajax
               ({
                 url: "city.php",
                  type: "POST",
                   data:
                   {
                     state_id: state_id
                   },
                    cache: false,
                    success: function(result)
                   {
                    $("#city-dropdown").html(result);
                   }
                 });
               });
             });


            $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});


            </script>
            </html>