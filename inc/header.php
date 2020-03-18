<!DOCTYPE html>
<?php
$color="#fff";
$fonts="verdana";
session_start();
setcookie('visited',"",time() -3600);
?>
<head>
<title>jquery Fundamentals</title>
   <style>
        body{font-family:<?php echo $fonts;?>}
       .maincontent{width:900px;margin:0 auto;background:#ddd;}
       .header,.footer{color:<?php echo $color;?>;padding:2px;background:#444;text-align:center;}
       .content{min-height:400px;padding:20px;}
       .header h2,.footer h2{font-size:27px;}.para{height:200px;width:815px;background:#fff;border:1px solid #999;padding:15px;margin-top:10px;display:none}
       .fade{height:200px;width:815px;background:#fff;border:1px solid #999;padding:15px;margin-top:10px;}
       .animate{height:200px;width:815px;background:#fff;border:1px solid #999;padding:15px;margin-top:10px;position:relative;} .inside{position:absolute;height:150px;width:150px;background:red;border:1px solid #999;padding:5px;border-radius:50%; color:#fff;}
       .par{height:200px;width:815px;background:#fff;border:1px solid #999;padding:15px;margin-top:10px;}
       .text{color:red; border:2px solid red;border-radius:5px;float:right;padding:10px;}
       .bg{background:green;}
       .dimen{background:#ddd none repeat scroll 0 0; border: 40px solid #999;margin:40px;padding:50px;text-align:center;font-size:30px;}
	    p(margin:0)
      /* .text{border:1px solid #fff;border-radius:5px;color:red;float:right;padding:10px;} */
   </style>
   <script src="js/jquery.js"></script>
</head>
