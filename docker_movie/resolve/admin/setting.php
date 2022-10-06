<?php 
include('config.php'); 
$tips = '';
include('admincore.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('inc.php'); ?>
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.dragsort-0.4.min.js"></script>


</head>

<body>
<?php $nav = 'setting';include('head.php'); ?>

<div id="hd_main">
  <div align="center"><?php echo $tips?></div>
 <form name="configform" id="configform" action="./setting.php?act=setting&t=<?php echo time()?>" method="post" onsubmit="return subck()">

<table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="tablecss">
<tr class="thead">
<td colspan="10" align="center">基本设置</td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页标题：</td>
    <td valign="top"><input type="text" name="aik[title]" value="<?php echo $aik['title']?>" size="50">
      <span class="gray tips">显示在首页标题上</span></td>
</tr>

<tr>
    <td width="125" align="right" valign="middle" class="s_title">默认解析接口：</td>

    <td valign="top"><font color="red">全站默认主解析线路，</font>请输入解析接口！<div class="cl5"></div><textarea name="aik[youlian]" cols="80" rows="5"><?php $aik['youlian'] = str_replace("\\'","'",$aik['youlian']);echo htmlspecialchars($aik['youlian'])?></textarea>
      </td>

</tr>


<tr class="thead">
<td colspan="10" align="center">视频解析设置</td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">解析线路接口：</td>
    <td valign="top"><font color="red">请输入解析接口地址链接</font><div class="cl5"></div>    
	<textarea name="aik[jiekou2]" cols="80" rows="1"><?php echo $aik['jiekou2']?></textarea><br>
	<textarea name="aik[jiekou3]" cols="80" rows="1"><?php echo $aik['jiekou3']?></textarea><br>
	<textarea name="aik[jiekou4]" cols="80" rows="1"><?php echo $aik['jiekou4']?></textarea><br>
	<textarea name="aik[jiekou5]" cols="80" rows="1"><?php echo $aik['jiekou5']?></textarea><br>
		<textarea name="aik[jiekou6]" cols="80" rows="1"><?php echo $aik['jiekou6']?></textarea><br>
			<textarea name="aik[jiekou7]" cols="80" rows="1"><?php echo $aik['jiekou7']?></textarea><br>
				<textarea name="aik[jiekou8]" cols="80" rows="1"><?php echo $aik['jiekou8']?></textarea><br>
					<textarea name="aik[jiekou9]" cols="80" rows="1"><?php echo $aik['jiekou9']?></textarea><br>
						<textarea name="aik[jiekou10]" cols="80" rows="1"><?php echo $aik['jiekou10']?></textarea><br>
	<textarea name="aik[jiekou1]" cols="80" rows="1"><?php echo $aik['jiekou1']?></textarea><br>
	此接口为视频解析线路一
      </td>
</tr>
<tr class="thead">
<td colspan="10" align="center">账号设置</td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">登录账号：</td>
    <td valign="top"><input type="text" name="aik[admin_name]" value="<?php echo $aik['admin_name']?>" size="30">
      <span class="gray tips"></span></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">登录密码：</td>
    <td valign="top"><input type="text" name="aik[admin_pass]" value="" size="30">
      <span class="gray tips">不修改请留空</span></td>
</tr>


<tr><!--此处为更新及重要补充，请保留-->
<td colspan="10" align="center"><input name="edit" type="hidden" value="1" /><input id="configSave" type="submit" onclick="return getsort()" value="保 存"></td>
</tr>
</table>
</form>
<script type="text/javascript">
	$(".sxlist:first").dragsort();
</script>
</div>
<?php include('foot.php'); ?>
</body>
</html>
