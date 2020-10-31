 // <!----------- whishlist toggle in symbole-------------->
 $(document).ready(function(){
            $('.heart').click(function(){
            $(this).find('#iheart').toggleClass('far fa-heart fa fa-heart');
            });
       });



 // <!---------------filtering Data price,Alphbetically---------------------!>
  $(document).ready(function(){
       // alert('hii');
            $('#filterDisplay');
            var action = 'fetch_data';
            $('#select1').change(function(){
                // alert('select');
            filterData();

        });

        function filterData(){

            var sort = $('#select1').val();

            $.ajax({
                url:"filterData.php",
                method:"POST",
                data:{
                    action:action,
                    sort:sort
                },
                success:function(data){
                 $('#filterDisplay').html(data);

            }

            });
        }
     });

  // <!--------------Login Form js validation---------------->
  $().ready(function(){
        $('form[id="userLogin"]').validate({
            rules: {
                email:{
                    required:true,
                },
                password:{
                    required:true,
                    minlength: 8,
                }
            },
            messages:{
                email:{
                    required: "Please enter your email",
                },
                password:{
                    required: "Please provide a password",
                    minlength: "your password must be at least 8 characters",
                }
            },
            submitHandler: function(form) {
            form.submit();
            }
        });
    });

 // <!----------------- Register Form js validation------------>
 $().ready(function(){
        $('form[id="userReg"]').validate({
            rules: {
                firstname:{
                    required:true,
                },
                lastname:{
                    required:true,
                },
                email:{
                    required:true,
                },
                password:{
                    required:true,
                    minlength: 8,
                }
            },
            messages:{
                firstname:{
                    required: "Please, Enter your firstname",
                },
                lastname:{
                    required: "Please, Enter your lastname",
                },
                email:{
                    required: "Please, Enter your email",
                },
                password:{
                    required: "Please provide a password",
                    minlength: "your password must be at least 8 characters",
                }
            },
            submitHandler: function(form) {
            form.submit();
            }
        });
    });

 // <!----------------search product by like-------------------->

 $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#filterDisplay #data").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


// <!------------------qty change then price will be change on click--------------->

// $(document).ready(function() {
//   var qty = $("#qty");
//   qty.keyup(function() {
//     var total = isNaN(parseInt(qty.val() * $("#single_price").val())) ? 0 : (qty.val() * $("#single_price").val())
//     $("#total").val(total);
//   });
// });

$(document).ready(function() {
      alert("hello");
            $('#qty_cart').keyup(function(ev) {
                alert(qty);
                var price = document.getElementById('single_price');              
                var total = $('#qty_cart').val() * 1;

                var tot_price = total * price;
                var divobj = document.getElementById('total');
                divobj.value = tot_price;
            });
        });