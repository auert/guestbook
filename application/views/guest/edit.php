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
<form action="/guestbook/updata" id="insert" method="get">
<div class="span1" style="width: 780px;">

<div id="hid1" class="span2"  style="width: 150px; float:left; text-align: right;">
<label for="input01" >姓名</label>
</div>

<div class="span4" id="hid2"  style="width: 630px;">
<input type="hidden" name="id" id="input01" style="width:300px;" value="<?php echo $row["id"];?>">
<input type="text" name="name" id="input01" style="width:300px;" value="<?php echo $row["name"];?>">
</div>

<P>

<div class="span2" id="hid3" style="width: 150px; float:left; text-align: right;">
  <label for="textarea" >留言內容</label>
</div>

<div class="span4" id="hid4" style="width: 630px;">
<textarea rows="10"  name="message" id="textarea" style="width:300px;" >
<?php echo $row["message"];?>
</textarea>
</div>

<P>
</div>
<div id="hid5" class="spanb" style=" width: 780px; height:50px">

<input id="btn" type="submit"  value="新增留言" />
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


