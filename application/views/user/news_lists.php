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
<script language="javascript" type="text/javascript" src="/assets/jquery-1.7.1.min.js"></script>

</head>
<body>


<div style="float:left;width=150px">
<a href="/news/news_add"><button>發表新聞</button></a></br>
<a href="/news/user_add"><button>新增作者</button></a></br>
<a href="/news/news_lists"><button>新聞列表</button></a></br>
<a href="/news/user_lists"><button>作者列表</button></a>
</div>


<div class="s1" >
<h2>新聞列表</h2>
<table border="1">
<tr>
<td>news_id</td>
<td>user_id</td>
<td>標題</td>
<td>訊息</td>
<td>編輯</td>
</tr>
<?php
if($data->num_rows()>0)
   {
        foreach($data->result_array()as $row)
        {
?>
<tr>
<td><?php echo $row["news_id"];?></td>
<td><?php echo $row["user_id"];?></td>
<td><?php echo $row["news_title"];?></td>
<td><?php echo $row["news_message"];?></td>
<td>
<a href="/news/news_edit/<?php echo $row["news_id"];?>"><button>修改</button></a>
<a href="/news/news_delete/<?php echo $row["news_id"];?>"><button>刪除</button></a>
</td>
</tr>
<?php
        }
    }
?>
</table>
</div>


</body>
</html>