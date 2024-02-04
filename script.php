<script>
$(function(){
    $(".add_cart").click(function(e){
        e.preventDefault();
        var id_product=$(this).attr("id_product");
        console.log(id_product);
        $.post("function/add_cart.php",{
            id_product:id_product
        },function(){
            // $("._num_cart").load(location.href+" ._num_cart");
        });
    });

});
</script>

<script>
  $(function(){
    $(".form").submit(function(s){
      s.preventDefault();
      var _name=$("._name").val();
      var _subject=$("._subject").val();
      var _email=$("._email").val();
      var _phone=$("._phone").val();
      var _message=$("._message").val();

if(!_name){
  $("._name").focus();
  $("._name").attr("placeholder","please enter your name").addClass("alert");
}
if(!_subject){
  $("._subject").attr("placeholder","please enter your subject").addClass("alert");
}
if(!_email){
  $("._email").attr("placeholder","please enter your email").addClass("alert");
}
if(!_phone){
  $("._phone").attr("placeholder","please enter your phone").addClass("alert");
}
if(!_message){
  $("._message").attr("placeholder","please enter your message").addClass("alert");
}
  if(_name && _subject && _email && _phone && _message){
      $.post("function/add_message.php",{
        N_name:_name,
        N_subject:_subject,
        N_email:_email,
        N_phone:_phone,
        N_message:_message
        
      },function(message_sent){
        $(".msg_sent").html(message_sent);
      });
      
      setTimeout(function(){
        $("._name").val("");
        $("._subject").val("");
        $("._email").val("");
        $("._phone").val("");
        $("._message").val("");
      },1000);
  }

    })

  })
</script>

<script>
$(function(){
    $(".remove").click(function(e){
        e.preventDefault();
        var cartitem=$(this).closest(".cart-item");
        cartitem.remove();

        var id_product=$(this).attr("id_pro");
        console.log(id_product);

        $.post("function/delete_cart.php",{
            id_product:id_product
        },function(data){
            $(".Total_price").html(data);

        });

    });

});
</script>

<script>
$(function(){
    $(".search").keyup(function(e){
        e.preventDefault();
        var text_search=$(this).val();
        // console.log(text_search);
        $.post("function/product_search.php",{
            text_search:text_search
        },function(product){
            $(".resultsearch").html(product);            
        });
    });

});
</script>
