<?php
ob_start();
$servername = "localhost";


// Create connection
include 'db_cn.php';/////include basic DB connection , db name is inventory////////


?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="bootstrap/css/index.css">

     <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </head>

<body >



  
 

  <div class="container-fluid top-banner ">
    

  
    
      <div  style="float:left;padding-left:50px;text-aling:center">欢迎光临好时光保健商城</div>
     
      <div class='top-banner_1 menu_1'>
        <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;查看当前购物车</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
        <a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;新顾客注册</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#"><span class="glyphicon glyphicon-log-in"></span>&nbsp;老顾客登录</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#"><span class="glyphicon glyphicon-globe"></span>&nbsp;好时光官方微博</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>


  
  </div>


  


</div>
<div class='container'>
  <div class='col-lg-12 panel panel-danger相关产品' style='height:100px'>好时光logo banner</div>
</div>
<div class="container">
  <div class="row slider1">
  <div class="col-md-12 col-lg-12">
    <div id="myCarousel" class="carousel slide" style="border:1px solid #000000">
    <!-- 轮播（Carousel）指标 -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>   
   <!-- 轮播（Carousel）项目 -->
     <div class="carousel-inner">
        <div class="item active">
           <img id="slider1" src="image/slide_1.jpg" alt="First slide">
        </div>
        <div class="item">
           <img id="slider1" src="image/image.jpg" alt="Second slide">
        </div>
        <div class="item">
           <img id="slider1" src="image/image.jpg" alt="Third slide">
        </div>
     </div>
       <!-- 轮播（Carousel）导航
       <a class="carousel-control left" href="#myCarousel" 
          data-slide="prev">&lsaquo;</a>
       <a class="carousel-control right" href="#myCarousel" 
          data-slide="next">&rsaquo;</a> -->
    </div> 
    <script>
       $(function(){
          
          // 轮播1s
         $('#myCarousel').carousel({interval: 2000})
     
       });
    </script>


    </div>
  </div>
  <div class="row">


            <div class="col-lg-12 btn-group menu_row" role="button " aria-label="...">

              <a class="btn btn-danger menu glyphicon glyphicon-globe" role="button" href="http://www.baidu.com">&nbsp;公司首页</a>
              <a class="btn btn-danger menu glyphicon glyphicon-thumbs-up" role="button" href="#">&nbsp;精品推荐</a>
              <a class="btn btn-danger menu glyphicon glyphicon-usd" role="button" href="#">&nbsp;促销活动</a>
              <a class="btn btn-danger menu glyphicon glyphicon-th-list" role="button" href="#">&nbsp;产品细分</a>
              <a class="btn btn-danger menu glyphicon glyphicon-heart-empty" role="button" href="#">&nbsp;健康咨询</a>
              <a class="btn btn-danger menu glyphicon glyphicon-map-marker" role="button" href="#">&nbsp;经销网店</a>
              <a class="btn btn-danger menu glyphicon glyphicon-user" role="button" href="#">&nbsp;关于我们</a>
              <a class="btn btn-danger menu glyphicon glyphicon-shopping-cart" role="button" href="#">&nbsp;订购指南</a>
              
              
              
            </div>
            
   



    
  
    </div>

  <!--nav start-->
  <div class="row">
   <div class="col-lg-12">
    
      <div class="col-md-3 col-lg-3 nev">
      <div class="panel-group" id="accordion">
      	<!-- //////////////////one item unit//////////////////////-->
        
  

        <!-- ////////////////// unit end //////////////////////-->
        <?php 
        $query_menu = "SELECT id,menu_cate_name from menu_category";
        $query_menu_nav = mysqli_query($db_connect,$query_menu);
        $query_cate = "SELECT upper_cate,pro_cate_name FROM pro_category";
        $query_cate_nav = mysqli_query($db_connect,$query_cate);

        foreach ($query_menu_nav as $level_1) {
        	echo "<div class='panel panel-danger'>";
        	
        	echo "<div class='panel-heading'>
            		<h4 class='panel-title'>";

            			//////// display items of meun /////////////
            echo "<a data-toggle='collapse' data-parent='#accordion' href='#$level_1[id]'>$level_1[menu_cate_name]</a>";

            echo "</h4></div>";


            echo "<div id='$level_1[id]' class='panel-collapse collapse'>";
            echo "<div class='menu_1'>";
            /////// display every category in matched menu item ///////

            foreach ($query_cate_nav as $level_2){

            	if ($level_1['id'] == $level_2['upper_cate'])
            	{
            	
            	echo "<a data-toggle='collapse' data-parent='#accordion' href='#collapse2'>&nbsp&nbsp".$level_2['pro_cate_name']."&nbsp&nbsp</a>";
            	
            	 }

            }
            echo "</div>";
            echo "</div></div>";

           
    


        }




        ?>
      
        



       
      </div> 
    </div>
    <!--nav end -->
   
      <div class="col-md-9 col-lg-9 panel panel-danger product_list" >
      <!-- one inventory unit -->
      <div class="col-md-3 col-lg-3 panel panel-danger inventory">
      <img class="img-thumbnail preview-pic" src="image/image.jpg"/>
      <p>海洋单细胞海藻</p>
      <p>买3送1</p>
      <p>$20.00</p>
      <button type="button" class="btn btn-danger">在线订购</button>
      </div>
      <!-- one inventory unit -->
      <div class="col-md-3 col-lg-3 panel panel-danger inventory">
      <img class="img-thumbnail preview-pic" src="image/image.jpg"/>
      <p>海洋单细胞海藻</p>
      <p>买3送1</p>
      <p>$20.00</p>
      <button type="button" class="btn btn-danger">在线订购</button>
      </div>
      <!-- one inventory unit -->
      <div class="col-md-3 col-lg-3 panel panel-danger inventory">
      <img class="img-thumbnail preview-pic" src="image/image.jpg"/>
      <p>海洋单细胞海藻</p>
      <p>买3送1</p>
      <p>$20.00</p>
      <button type="button" class="btn btn-danger">在线订购</button>
      </div>
      <!-- one inventory unit -->
      <div class="col-md-3 col-lg-3 panel panel-danger inventory">
      <img class="img-thumbnail preview-pic" src="image/image.jpg"/>
      <p>海洋单细胞海藻</p>
      <p>买3送1</p>
      <p>$20.00</p>
      <button type="button" class="btn btn-danger">在线订购</button>
      </div>
      <!-- one inventory unit -->
      <div class="col-md-3 col-lg-3 panel panel-danger inventory">
      <img class="img-thumbnail preview-pic" src="image/image.jpg"/>
      <p>海洋单细胞海藻</p>
      <p>买3送1</p>
      <p>$20.00</p>
      <button type="button" class="btn btn-danger">在线订购</button>
      </div>
      <!-- one inventory unit -->
      <div class="col-md-3 col-lg-3 panel panel-danger inventory">
      <img class="img-thumbnail preview-pic" src="image/image.jpg"/>
      <p>海洋单细胞海藻</p>
      <p>买3送1</p>
      <p>$20.00</p>
      <button type="button" class="btn btn-danger">在线订购</button>
      </div>
      <!-- one inventory unit -->
      <div class="col-md-3 col-lg-3 panel panel-danger inventory">
      <img class="img-thumbnail preview-pic" src="image/image.jpg"/>
      <p>海洋单细胞海藻</p>
      <p>买3送1</p>
      <p>$20.00</p>
      <button type="button" class="btn btn-danger">在线订购</button>
      </div>
      <!-- one inventory unit -->
      <div class="col-md-3 col-lg-3 panel panel-danger inventory">
      <img class="img-thumbnail preview-pic" src="image/image.jpg"/>
      <p>海洋单细胞海藻</p>
      <p>买3送1</p>
      <p>$20.00</p>
      <button type="button" class="btn btn-danger">在线订购</button>
      </div>
      <!-- one inventory unit -->
      <div class="col-md-3 col-lg-3 panel panel-danger inventory">
      <img class="img-thumbnail preview-pic" src="image/image.jpg"/>
      <p>海洋单细胞海藻</p>
      <p>买3送1</p>
      <p>$20.00</p>
      <button type="button" class="btn btn-danger">在线订购</button>
      </div>
      <!-- one inventory unit -->
      <div class="col-md-3 col-lg-3 panel panel-danger inventory">
      <img class="img-thumbnail preview-pic" src="image/image.jpg"/>
      <p>海洋单细胞海藻</p>
      <p>买3送1</p>
      <p>$20.00</p>
      <button type="button" class="btn btn-danger">在线订购</button>
      </div>
      <!-- one inventory unit -->
      <div class="col-md-3 col-lg-3 panel panel-danger inventory">
      <img class="img-thumbnail preview-pic" src="image/image.jpg"/>
      <p>海洋单细胞海藻</p>
      <p>买3送1</p>
      <p>$20.00</p>
      <button type="button" class="btn btn-danger">在线订购</button>
      </div>
      <!-- one inventory unit -->
      <div class="col-md-3 col-lg-3 panel panel-danger inventory">
      <img class="img-thumbnail preview-pic" src="image/image.jpg"/>
      <p>海洋单细胞海藻</p>
      <p>买3送1</p>
      <p>$20.00</p>
      <button type="button" class="btn btn-danger">在线订购</button>
      </div>
      <!-- one inventory unit -->
      <div class="col-md-3 col-lg-3 panel panel-danger inventory">
      <img class="img-thumbnail preview-pic" src="image/image.jpg"/>
      <p>海洋单细胞海藻</p>
      <p>买3送1</p>
      <p>$20.00</p>
      <button type="button" class="btn btn-danger">在线订购</button>
      </div>
      <!-- one inventory unit -->
      <div class="col-md-3 col-lg-3 panel panel-danger inventory">
      <img class="img-thumbnail preview-pic" src="image/image.jpg"/>
      <p>海洋单细胞海藻</p>
      <p>买3送1</p>
      <p>$20.00</p>
      <button type="button" class="btn btn-danger">在线订购</button>
      </div>
    
      
    </div>
    
 </div>


</div>
<!--inventory row end-->
  
</div>

</body>
</html>