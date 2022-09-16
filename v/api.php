<!--
使用说明
把本文件放服务器
调用格式:https://域名/api.php?url=
本解析禁止直接调用 请使用本文件解析
-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=11" />
<title>极狐 - AFox</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
<style type="text/css">body,html,.content{background-color:black;padding: 0;margin: 0;width:100%;height:100%;color:#999;}</style>
</head>
<body>
<div id="main">
    <style>
 html, body {
 margin: 0px;
 height: 100%;
 overflow: hidden;
    }
    </style>
</div>
<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
  <div class="container-fluid">
    <a class="btn btn-outline-dark btn-sm" href="/">主页</a>
	<!-- Navbar text-->
    <span class="navbar-text"><dt>AFOX</dt></span>
    <form class="d-flex">
      <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">关于</button>
    </form>
  </div>
</nav>
<!-- 模态框 -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- 模态框头部 -->
      <div class="modal-header">
        <p class="modal-title"><strong>本页面由第三方网站提供 内容与极狐无关。</strong></p>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- 模态框内容 -->
      <div class="modal-body">
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>极狐搜索</strong> 仅供学习交流使用！
        </div>
		
        <form action="/v/api.php?url=">
		<div class="input-group">
		  <input class="form-control" name="url" type="text" placeholder="剧集 / 电影 / 动漫 / 综艺 ..." autocomplete="off">
		  <input type="submit" class="btn btn-dark" value="去看-Go!">
		</div>
		</form>
      </div>

      <!-- 模态框底部 -->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>

<iframe scrolling="auto" allowfullscreen="" frameborder="0" width="100%" style="position:absolute;left:0;top:56px;height:calc(100% - 56px)" src='//cupfox.app/search?key=<?php echo $_GET['url'];?>' style="width:100%;height:100%;">
</iframe>
</body>
</html>