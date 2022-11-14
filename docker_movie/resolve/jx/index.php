<?php
include ('./inc/aik.config.php');
$link=$aik['pcdomain'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $aik['title'];?></title>
<link href="./style.css" rel="stylesheet">
<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="./style.js" type="text/javascript"></script>
</head>
<body style="overflow-y:hidden;">
<div class="panel">
    <a href="javascript:JX('<?php echo $aik['jiekou1'];?><?php echo $_GET["url"]; ?>')">【1线】</a>
	<a href="javascript:JX('<?php echo $aik['jiekou2'];?><?php echo $_GET["url"]; ?>')">【2线】</a>
	<a href="javascript:JX('<?php echo $aik['jiekou3'];?><?php echo $_GET["url"]; ?>')">【3线】</a>
	<a href="javascript:JX('<?php echo $aik['jiekou4'];?><?php echo $_GET["url"]; ?>')">【4线】</a>
	<a href="javascript:JX('<?php echo $aik['jiekou5'];?><?php echo $_GET["url"]; ?>')">【5线】</a>
	<a href="javascript:JX('<?php echo $aik['jiekou6'];?><?php echo $_GET["url"]; ?>')">【6线】</a>
	<a href="javascript:JX('<?php echo $aik['jiekou7'];?><?php echo $_GET["url"]; ?>')">【7线】</a>
	<a href="javascript:JX('<?php echo $aik['jiekou8'];?><?php echo $_GET["url"]; ?>')">【8线】</a>
	<a href="javascript:JX('<?php echo $aik['jiekou9'];?><?php echo $_GET["url"]; ?>')">【9线】</a>
	<a href="javascript:JX('<?php echo $aik['jiekou10'];?><?php echo $_GET["url"]; ?>')">【10线】</a>

	
</div>
<p class="slide">
    <a class="WANG-WANG">其他播放</a></p>
<div style="margin:-36px auto;width:100%;height:100%;">
    <iframe id="WANG" scrolling="no" allowtransparency="true" frameborder="0"
            src="<?php echo $aik['youlian'];?><?php echo $_GET["url"]; ?>"width="100%" scrolling="no" height="100%" align="middle" frameborder="no" hspace="0" vspace="0" allowFullscreen="true" marginheight="0" marginwidth="0" name="tv"></iframe>
    <script type="text/javascript"> function JX(url) {
            $('#WANG').attr('src', decodeURIComponent(decodeURIComponent(url))).show();
        } </script>
</div>
<?php echo $aik['tongji'];?>
</body>
</html>
