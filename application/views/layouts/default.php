<!doctype html>
<html lang="sk">
<head>
	<meta charset="utf-8">
	<title>Vyrážame.sk</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Vyrazame.sk - Na bajk alebo na pivo?">
    <meta name="author" content="Michal Valasek">

    <!-- Le styles -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="/">Vyrážame.sk</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="/">Aktuálne</a></li>
              <li><a href="/new">Pridať udalosť</a></li>
              <li><a href="/about">O projekte</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

    	<? if(Session::get('status')): ?>
		<div class="alert alert-block">
  			<a class="close" data-dismiss="alert" href="#">×</a>
  			<?= Session::get('status') ?>
		</div>
    	<? endif ?>

    	<div class="page-header">
			<h1><?= $page_header_title ?></h1>
		</div>

		<?= $content ?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery-1.7.2.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <?= Config::get('application.anbu_enabled') ? Anbu::render() : '' ?>
</body>
</html>