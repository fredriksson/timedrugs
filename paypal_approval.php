<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/index.css">

    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    

</head>
<body>

<?php


?>
    <form id="f1" name="f1" runat="server"  action="https://www.paypal.com/cgi-bin/webscr"  method="post">
    <div>
    正在加载支付页面。。。
      <table width="100%" border="0" cellspacing="10" cellpadding="0" style="display:none">
                      <tr>
                        <td class="text_06" height="500px" valign="top"> 


<?php
$item_uuid = $_POST['ord_uuid'];

echo "<input type='hidden' name='item_name' value='111'>";


?>


  <input type="hidden" name="cmd" value="_xclick">
  <input type="hidden" name="business" value="superbc@gmail.com">

  <!--<input type="hidden" name="item_name" value=<?php echo $item_uuid ?>>-->
  <input type="hidden" name="item_number" value="100">
  <!--<input type="hidden" name="amount" value="999">-->
  <input type="hidden" name="custom" value="wang">
  <input type="hidden" name="invoice" value="enabled">
  <input type="hidden" name="no_shipping" value="1">  
        <input type="hidden" name="currency_code" value="CAD">
  <input type="hidden" name="no_note" value="1">


<br>
  <div align="center">
     </div>
 
 </td>
                      </tr>
                    </table>
    </div>
    </form>











<script language="javascript">
    document.f1.submit();
</script>




</body>

</html>