<?php
include 'nav_menu_banner.php';
include 'promotion_function.php';
?>
    <!--nav end -->
   
      <div class="col-md-9 col-lg-9 panel panel-danger product_list" >
      <!-- one inventory unit -->
      <!--<div class="col-md-3 col-lg-3 panel panel-danger inventory">
      <img class="img-thumbnail preview-pic" src="image/image.jpg"/>
      <p>海洋单细胞海藻</p>
      <p>买3送1</p>
      <p>$20.00</p>
      <button type="button" class="btn btn-danger">在线订购</button>
      </div>-->
      <!-- one inventory unit -->

     <?php




     $query_buy_get = "SELECT pro_name,pro_img,pro_o_price,pro_code,promotion_enabled,promotion_id from product_info where promotion_enabled = '1' and whole_sale = '0'";
     $query_buy_get = mysqli_query($db_connect,$query_buy_get);
    echo "<div class='col-lg-10'></div>";
     show_product($query_buy_get);

    





     $query_all_pro  = "SELECT pro_name,pro_img,pro_o_price,pro_code,promotion_enabled,promotion_id from product_info where pro_onsell='1' and whole_sale='1' and promotion_enabled = '1'";
     $all_products = mysqli_query($db_connect,$query_all_pro);

     show_product($all_products);













     
     ?>
    
      
    </div>
    
 </div>


</div>
<!--inventory row end-->
  
</div>

</body>
</html>