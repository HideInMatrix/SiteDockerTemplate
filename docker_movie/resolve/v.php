<?php
include ('./inc/aik.config.php');
$link=$aik['pcdomain'];
?>
<!DOCTYPE html>  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />   
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<meta http-equiv="X-UA-Compatible" content="IE=11" />  
<title>云解析</title>  
<style type="text/css">body,html,.content{background-color:black;padding: 0;margin: 0;width:100%;height:100%;color:#999;}</style>
</head>
<body>
<div id="main">
	<style>
 html, body {
 margin: 0px;
 height: 100%;
 overflow: hidden;
    }
	</style>
</div>
    <iframe id="PLAYERS" scrolling="no" allowtransparency="true" frameborder="0" src="<?php echo $aik['youlian'];?><?php echo $_GET["url"]; ?>" width="100%" height="100%"  allowfullscreen="true"></iframe>

<div style="display:none">
<script>function fuckyou(){
window.close(); //关闭当前窗口(防抽)
window.location="//www.bo15.cn";  //F12跳转到百度
}
function click(e) {
    if (document.all) {
        if (event.button==2||event.button==3) { 
            alert("请勿盗链本站解析进行二次封装！");
            oncontextmenu='return false';
        }
    }
    if (document.layers) {
        if (e.which == 3) {
            oncontextmenu='return false';
        }
    }
}
if (document.layers) {
    fuckyou();
    document.captureEvents(Event.MOUSEDOWN);
}
document.onmousedown=click;
document.oncontextmenu = new Function("return false;")
document.onkeydown =document.onkeyup = document.onkeypress=function(){ 
    if(window.event.keyCode == 123) { 
        fuckyou();
        window.event.returnValue=false;
        return(false); 
    } 
}

</script>
