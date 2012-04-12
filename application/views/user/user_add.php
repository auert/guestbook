<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script language="javascript" type="text/javascript" src="/assets/jquery-1.7.1.min.js"></script>
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
<h2>新增作者</h2>
<table>
<form action="/news/user" method="post">
<tr>
<td>姓名</td>
<td><input type="text" name="name"></td>
<td>公司</td>
<td><input type="text" name="company"></td>
<td>
<input type="submit" value="送出">
</td>
</form>
</table>
</div>


</body>
</html>