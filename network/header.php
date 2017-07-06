<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ZVulDrill</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://127.0.0.1/network/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="http://127.0.0.1/network/css/bootswatch.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    </script>
  </head>
  <body>
    <script src="http://127.0.0.1/network/js/bsa.js"></script>

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="http://127.0.0.1/network/index.php" class="navbar-brand">ZVulDrill</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="http://127.0.0.1/network/message/message.php">留言</a>
            </li>
            <li>
              <a href="http://127.0.0.1/network/chanllege.php">Chanllege</a>
            </li>
            <li>
              <a href="http://127.0.0.1/network/about.php?f=header.php">About<span></a>
            </li>
          </ul>
		  <form class="navbar-form navbar-left" action="http://127.0.0.1/network/search.php" method="get">
			<input type="text" name="search" class="form-control col-lg-8" placeholder="搜索留言">
          </form>
          <ul class="nav navbar-nav navbar-right">
		  <?php if (isset($_SESSION['username'])) {?>
            <li><a href="http://127.0.0.1/network/user/user.php"><?php echo $_SESSION['username'];?></a></li>
            <li><a href="http://127.0.0.1/network/user/logout.php">退出</a></li>
		  <?php } else if (isset($_SESSION['admin'])) {?>
		    <li><a href="http://127.0.0.1/network/admin/manage.php"><?php echo $_SESSION['admin'];?></a></li>
            <li><a href="http://127.0.0.1/network/user/logout.php">退出</a></li>
		  <?php } else {?>
			<li><a href="http://127.0.0.1/network/user/login.php">登录</a></li>
            <li><a href="http://127.0.0.1/network/user/register.php">注册</a></li>
			<?php }?>
          </ul>

        </div>
      </div>
    </div>
	
<br />
    <div class="container">