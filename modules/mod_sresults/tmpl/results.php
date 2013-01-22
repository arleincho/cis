<?php if(!empty($results)):?>

<h2>
    <span style="font-size: 22pt;"><strong><span style="color: #ff0000;"><?php echo $results[0]->sex.' '.$sportName.' ';?></span></strong></span>

    <?php if ($provinceName != ""):?>
        <span style="font-size: 24pt;">
            <span style="color: #ff0000;">
                <span style="font-size: 18pt;">
                    <?php echo '- '. $provinceName?>
                </span><br />
            </span>
        </span>
    <?php endif;?> 
</h2>
<?php foreach($results as $res):?>
<table style="width: 100%; border: 1px solid #dddddd;" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td colspan="3" style="border: 1px solid #dddddd; padding: 0 0 0 10px;">
<h2><?php echo $res->school ?>, <span style="color: #ff0000;"><?php echo $res->organization;?><?php if ($provinceName == ""): echo ', ' . $res->province;endif;?></span></h2>
</td>
</tr>
<tr valign="top">
<td style="border: 1px solid #dddddd; padding: 0 0 0 10px; width:200px;">
<h4>Address</h4>
<p><?php 
if($res->address == ''){
$add = "Info Not Available";
}
else{ $add = str_replace('<br />', ',<br />',$res->address);} echo $add;?></p>
</td>
<td style="border: 1px solid #dddddd; padding: 0 0 0 10px;width:200px;">
<h4>Contact Information</h4>
<p>Tel: <?php 
if($res->telephone == '0'):$tele = "Info Not Available";else:$tele = substr($res->telephone,0,3).'-'.substr($res->telephone,3,3).'-'.substr($res->telephone,6,4);endif;
if($res->fax == '0'):$fax = "Info Not Available";else:$fax = substr($res->fax,0,3).'-'.substr($res->fax,3,3).'-'.substr($res->fax,6,4);endif;
if($res->email == ''):$email = "Info Not Available";else:$email = $res->email;endif;
echo $tele;?><br /> Fax: <?php echo $fax; ?><br /> Email: <?php echo $email; ?></p>
</td>
<td style="border: 1px solid #dddddd; padding: 0 0 0 10px;width:200px;">
<h4>Website</h4>
<?php if($res->website == ''){$website = "Info Not Available";}
else{$website = $res->website;} ?>
<a href="<?php echo 'http://'.$website;?>" target="_blank"><?php echo 'http://'.$website; ?></a><br /> 
<ul>
</ul>
</td>
</tr>
</tbody>
</table>
<br /> 
<?php endforeach; 
else:?>
<p>Sorry, No results found.</p>
<?php endif;?>
<!--<table style="width: 100%; border: 1px solid #dddddd;" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td colspan="3" style="border: 1px solid #dddddd; padding: 0 0 0 10px;">
<h2>University of Calgary - Dinos</h2>
</td>
</tr>
<tr valign="top">
<td style="border: 1px solid #dddddd; padding: 0 0 0 10px;">
<h4>Address</h4>
<p>P220, Van Vliet Centre, <br />Athletics, Edmonton<br />Alberta, T6G 2H9</p>
</td>
<td style="border: 1px solid #dddddd; padding: 0 0 0 10px;">
<h4>Contact Information</h4>
<p>Tel: (780) 492-3365<br /> Fax: (780) 492-7307</p>
</td>
<td style="border: 1px solid #dddddd; padding: 0 0 0 10px;">
<h4>Website</h4>
<a href="http://www.pandas.ualberta.ca/">www.bears.ualberta.ca</a><br /><a href="http://www.pandas.ualberta.ca/">www.pandas.ualberta.ca</a> 
<ul>
</ul>
</td>
</tr>
</tbody>
</table>
<br /> 
<table style="width: 100%; border: 1px solid #dddddd;" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td colspan="3" style="border: 1px solid #dddddd; padding: 0 0 0 10px;">
<h2>University British Columbia - Thunderbirds</h2>
</td>
</tr>
<tr valign="top">
<td style="border: 1px solid #dddddd; padding: 0 0 0 10px;">
<h4>Address</h4>
<p>P220, Van Vliet Centre, <br />Athletics, Edmonton<br />Alberta, T6G 2H9</p>
</td>
<td style="border: 1px solid #dddddd; padding: 0 0 0 10px;">
<h4>Contact Information</h4>
<p>Tel: (780) 492-3365<br /> Fax: (780) 492-7307</p>
</td>
<td style="border: 1px solid #dddddd; padding: 0 0 0 10px;">
<h4>Website</h4>
<a href="http://www.pandas.ualberta.ca/">www.bears.ualberta.ca</a><br /><a href="http://www.pandas.ualberta.ca/">www.pandas.ualberta.ca</a> 
<ul>
</ul>
</td>
</tr>
</tbody>
</table>
<br /> 
<table style="width: 100%; border: 1px solid #dddddd;" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td colspan="3" style="border: 1px solid #dddddd; padding: 0 0 0 10px;">
<h2>University of the Fraser Valley - Cascades</h2>
</td>
</tr>
<tr valign="top">
<td style="border: 1px solid #dddddd; padding: 0 0 0 10px;">
<h4>Address</h4>
<p>P220, Van Vliet Centre, <br />Athletics, Edmonton<br />Alberta, T6G 2H9</p>
</td>
<td style="border: 1px solid #dddddd; padding: 0 0 0 10px;">
<h4>Contact Information</h4>
<p>Tel: (780) 492-3365<br /> Fax: (780) 492-7307</p>
</td>
<td style="border: 1px solid #dddddd; padding: 0 0 0 10px;">
<h4>Website</h4>
<a href="http://www.pandas.ualberta.ca/">www.bears.ualberta.ca</a><br /><a href="http://www.pandas.ualberta.ca/">www.pandas.ualberta.ca</a> 
<ul>
</ul>
</td>
</tr>
</tbody>
</table>-->