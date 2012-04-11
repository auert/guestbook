<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script language="javascript" type="text/javascript" src="/assets/jquery-1.7.1.min.js"></script>
<script>
    function sel()
{
    //alert('111');
    var checkItem = document.getElementsByName("c1[]");
        for(var i=0;i<checkItem.length;i++)
        {
            checkItem[i].checked=!checkItem[i].checked;   
        }
    
}


</script>
</head>
<body>
<div class="span1" style="width: 780px;">
<form action="/guestbook/view">
<input type="submit" value="新增留言" style="float: left">
</form>
<button href="#"  onclick="sel()" style="float: left">全選留言</button>
<button href="#" form="del" >刪除留言</button>




</div>
<table border="1" id="tab">
    <tr>
        <th width="50">&nbsp;</th>
        <th width="50">#</th>
        <th width="150">姓名</th>
        <th width="280" >留言</th>
        <th width="150">時間</th>
        <th width="80">動作</th>
    </tr>
<form id="del" method="post" action="/guestbook/deleteall">

<?php
if($data->num_rows()>0)
   {
        foreach($data->result_array()as $row)
        {
?>

<tr>
<td width="50">
<input type="checkbox" id="c1" name="c1[]" value="<?php echo $row["id"];?>">
<input type="hidden" name="id" value="<?php echo $row["id"];?>">
</td>
<td width="50"><?php echo $row["id"];?></td>
<td width="150"><?php echo $row["name"];?></td>

<td width="280"><?php echo $row["message"];?></td>
<td width="150"><?php echo $row["add_time"];?></td>
<td width="120">
<a href="/guestbook/edit/<?php echo $row["id"];?>"><button>修改</button></a>
<a href="/guestbook/delete/<?php echo $row["id"];?>"><button>刪除</button></a>
</td>
</tr>

<?php
        }
    }
?>
</form>
</table>
<table>
<form action="/guestbook/user" method="post">

<tr>
<td>姓名</td>
<td><input type="text" name="name"></td>
<td>公司</td>
<td><input type="text" name="company"></td>
<td><input type="submit" value="送出"></td>
</form>
</table>

</body>
</html>