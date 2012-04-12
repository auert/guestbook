<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<style type="text/css">
.s1 {
    margin-left: 200px;
}
</style>
</head>
<body>

<div style="float:left;width=150px">
<a href="/news/news_add"><button>發表新聞</button></a></br>
<a href="/news/user_add"><button>新增作者</button></a></br>
<a href="/news/news_lists"><button>新聞列表</button></a></br>
<a href="/news/user_lists"><button>作者列表</button></a>
</div>
<div class="s1" >
<h2>join顯示</h2>
<table border="1">

<tr>
<td>姓名</td>
<td>標題</td>
<td>訊息</td>
<td>公司</td>
</tr>
<?php
if($data->num_rows()>0)
   {
        foreach($data->result_array()as $row)
        {
?>
<tr>
<td><?php echo $row["user_name"];?></td>
<td><?php echo $row["news_title"];?></td>
<td><?php echo $row["news_message"];?></td>
<td><?php echo $row["user_company"];?></td>
</tr>
<?php
        }
    }
?>
</table>
</div>


</body>
</html>