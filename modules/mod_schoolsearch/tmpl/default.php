<div style="background-image: url(images/stories/form.png); background-repeat: no-repeat; height: 330px; width:970px; margin:-10px 0 0 -20px;">
<table style="width: 100%;" border="0" cellpadding="5" cellspacing="5">
<tbody>
<tr valign="top">
<td>&nbsp;</td>
<td style="height: 200px;">&nbsp;</td>
<td>&nbsp;</td>
<td rowspan="2">
<form action="" method="post" >
<div style="margin: 100px 0 0 0;">
<p><strong>You are a:</strong> <label>
<input type="radio" id="sex1" value="Men's" checked="checked" name="sex">Male</label> <label> <input type="radio" id="sex2" value="Women's" name="sex">Female</label></p>
<p><strong>Sport:</strong>
<select id="sport" name="sport">
<option value="">- Select a Sport -</option>
<?php foreach($sports as $ss):?>
<option value="<?php echo $ss->id;?>"><?php echo $ss->sname;?></option>
<?php endforeach;?></select></p>
<p><strong>Province:</strong> <select id="province" name="province">
<option value="">- All Provinces -</option>
<?php foreach($province as $pp):?>
<option value="<?php echo $pp->id;?>"><?php echo $pp->province;?></option>
<?php endforeach; ?></select></p>
<p><input type="submit" value="SEARCH NOW!" id="submit" name="submit" onclick="return validateform();"></p>
</div>
</form>
</td>
<td>&nbsp;</td>
</tr>
<tr valign="top">
<td style="width: 30px;">&nbsp;</td>
<td style="width: 600px;"><span style="color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus  at urna bibendum convallis ac vel eros. Sed justo est, vehicula vel  blandit vitae, elementum nec nulla. In pharetra nibh semper nulla  pretium a semper odio cursus. Morbi feugiat egestas aliquet. Aenean  scelerisque leo sit amet odio vestibulum ullamcorper.</span></td>
<td style="width: 30px;">&nbsp;</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
</div>
<script type="text/javascript">
function validateform()
{
  if(document.getElementById('sport').value  == '')
  {
    alert('Please select Sport');
	return false;
  }
  else
  {
  return true;
  }
 }

</script>