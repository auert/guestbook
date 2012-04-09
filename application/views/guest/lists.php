<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<table border=1 id=tab>
<tr>
                <th width="50">&nbsp;</th>
                <th width="50">#</th>
                <th width="150">姓名</th>
                <th width="280" >留言</th>
                <th width="150">時間</th>
                <th width="80">動作</th>
    </tr>

<?php

if($data->num_rows()>0)
   {
foreach($data->result_array()as $row)
   {
?>
<form id="del" method="post">
<tr>
<td width="50">
<input type="checkbox" id="c1" name="c1">
</td>
<td width="50"><?php echo $row["id"];?></td>
<td width="150"><?php echo $row["name"];?></td>
<input type="hidden" name="id" value="<?php echo $row["id"];?>">
<td width="280"><?php echo $row["message"];?></td>
<td width="150"><?php echo $row["add_time"];?></td>
<td width="120">
<input type="button"  value="修改" onClick="delete(this,<?php echo $row["id"];?>)"/>
<input type="button"  value="刪除" onClick="delete(this,<?php echo $row["id"];?>)"/></td>
</tr>
</form>
<?php
   }
   }

?>
</table>

</body>
</html>