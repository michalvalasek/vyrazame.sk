<!doctype html>
<html lang="sk">
<head>
	<meta charset="utf-8">
	<title>Vyrážame.sk</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Vyrazame.sk - Na bajk alebo na pivo?">
    <meta name="author" content="Michal Valasek">

    <!-- Le styles -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/custom.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/assets/css/custom-responsive.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/assets/css/ui-lightness/jquery-ui-1.7.2.custom.css">

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
          <a href="/new" class="btn btn-navbar">
            <span class="icon-plus icon-white"></span>
          </a>
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-chevron-down"></span>
          </a>
          <a class="brand" href="/">Vyrážame.sk</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="/">Aktuálne udalosti</a></li>
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
    <script src="/assets/js/jquery-ui-1.7.2.custom.min.js"></script>
    <script src="/assets/js/timepicker.js"></script>
    <script src="/assets/js/application.js"></script>

    <?= Config::get('application.anbu_enabled') ? Anbu::render() : '' ?>
</body>
</html>