<?php 
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理后台</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="./images/woaik.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="./../favicon.ico">
</head>
<body>
<?php $nav = 'home';include('head.php'); ?>
<div id="hd_main">
   <div style="margin:20px;">

      <table width="600" border="0" class="tablecss" cellspacing="0" cellpadding="0" align="center">
   <tr>
    <td colspan="2" align="center">欢迎使用管理系统！</td>
    </tr>
  <tr>
    <td align="right">当前使用版：</td>
    <td><span>V1</span></td>
  </tr>
  <tr>
    <td align="right">最新版：</td>
    <td><a href="http://zhanwang.site" target="_blank"><font color="#FF0000">点击查看</font></a></td>
  </tr>
  <tr>
    <td width="213" align="right">服务器操作系统：</td>
    <td width="387"><?php $os = explode(" ", php_uname()); echo $os[0];?> (<?php if('/'==DIRECTORY_SEPARATOR){echo $os[2];}else{echo $os[1];} ?>)</td>
  </tr>
  <tr>
    <td width="213" align="right">服务器解译引擎：</td>
    <td width="387"><?php echo $_SERVER['SERVER_SOFTWARE'];?></td>
  </tr>
  <tr>
    <td width="213" align="right">PHP版本：</td>
    <td width="387"><?php echo PHP_VERSION?></td>
  </tr>
  <tr>
    <td align="right">域名：</td>
    <td><?php echo $_SERVER['HTTP_HOST']?></td>
  </tr>
  <tr>
    <td align="right">allow_url_fopen：</td>
    <td><?php echo ini_get('allow_url_fopen') ? '<span class="green">支持</span>' : '<span class="red">不支持</span>'?></td>
  </tr>
  <tr>
    <td align="right">curl_init：</td>
    <td><?php if ( function_exists('curl_init') ){ echo '<span class="green">支持</span>' ;}else{ echo '<span class="red">不支持</span>';}?></td>
  </tr>

<tr>
    <td align="right">/data/目录权限检测：</td>
    <td><?php echo is_writable('../data/') ? '<span class="green">可写</span>' : '<span class="red">不可写</span>'?></td>
  </tr>  


   
</table>

   </div>

</div>
<?php include('foot.php'); ?>
</body>
</html>
