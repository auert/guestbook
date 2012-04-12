<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php

if($data->num_rows()>0)
    {
        foreach($data->result_array()as $row)
        {
?>
<form action="/news/news_update" id="insert" method="post">
<div class="span1" style="width: 780px;">

<div id="hid1" class="span2"  style="width: 150px; float:left; text-align: right;">
<label for="input01" >標題</label>
</div>

<div class="span4" id="hid2"  style="width: 630px;">
<input type="hidden" name="news_id" style="width:300px;" value="<?php echo $row["news_id"];?>">
<input type="text" name="news_title" style="width:300px;" value="<?php echo $row["news_title"];?>">
</div>

<P>

<div class="span2" id="hid3" style="width: 150px; float:left; text-align: right;">
<label for="textarea" >訊息</label>
</div>

<div class="span4" id="hid4" style="width: 630px;">
<textarea rows="10"  name="news_message" style="width:300px;" >
<?php echo $row["news_message"];?>
</textarea>
</div>

<P>
</div>

<div id="hid5" class="spanb" style=" width: 780px; height:50px">
<input id="btn" type="submit"  value="修改" />
<input type="reset" value="重新填寫" />
</div>

</form>
<?php
        }
    }
?>
</table>

</body>
</html>


