<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<title>::| Chocobo Riding {BETA} |::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php 
		// META
		$meta_tags = array(
			'author' => 'Menencia',
			'description' => "L'Univers des Courses de Chocobos",
			'keywords' => 'chocobo, chocobos, race, races, rides, riding, menencia',
			'generator' => 'Kohana 2.3.4', 
			'robots' => 'index, nofollow'
		);

		//foreach ($meta_tags as $meta)
		//{
			echo '<meta'.HTML::attributes($meta_tags).' />';
		//}

		// FAVICON
		//echo HTML::link('images/theme/favicon.ico', 'icon', 'image/ico');
		
		// CSS
		//$design = $this->session->get('design');
		echo HTML::style('media/css/default/style.css');
		
		// RSS
		//echo HTML::link('topic/rss_updates', 'alternate', 'application/rss+xml', false);
		
		// JQUERY
		echo HTML::script('media/js/lib/jquery.js');
		//echo html::script('http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js');
		
		// FCBKcomplete
		echo HTML::style('media/js/lib/FCBKcomplete/style.css');
		echo HTML::script('media/js/lib/FCBKcomplete/jquery.fcbkcomplete.js');
		
		// JGROWL
		echo HTML::script('media/js/lib/jGrowl/jquery.jgrowl.min.js');
		echo HTML::style('media/js/lib/jGrowl/jquery.jgrowl.css');
		
		// TIPSY
		echo HTML::script('media/js/lib/tipsy/jquery.tipsy.js'); 
		echo HTML::style('media/js/lib/tipsy/tipsy.css');

		// FANCYBOX
		echo HTML::style('media/js/lib/fancybox/jquery.fancybox.css');
		echo HTML::script('media/js/lib/fancybox/jquery.fancybox.pack.js');

		// DATATABLE
		echo HTML::script('media/js/lib/dataTables/js/jquery.dataTables.min.js'); 
		echo HTML::style('media/js/lib/dataTables/css/jquery.dataTables.css');
		
		// JTIP
		echo HTML::script('media/js/lib/jtip/jtip.js'); 
		echo HTML::style('media/js/lib/jtip/jtip.css');
		
		// MYSCRIPT
		echo HTML::script('media/js/script.js');
	?>

	<!--link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Advent+Pro' rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css"-->

	<script type="text/javascript">
	
		var baseUrl = "<?php echo ((Kohana::$environment === Kohana::PRODUCTION) ? "http://chocobo-riding.com/" : "http://localhost:8888/chocobo-riding/"); ?>";
		
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-5385370-6']);
		_gaq.push(['_trackPageview']);
		
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		
	</script>
	
</head>

<body>
	<div id="jgrowl_content"><?php echo View::factory("elements/jgrowl") ?></div>
	
	<div id="header"></div>

	<div class="hmenu">
		<div class="wrapper-hmenu">
			<div class="logo">
				<span class="part1">Chocobo</span><span class="part2">-</span><span class="part3">Riding</span><span class="part4">beta</span>
			</div>
			<div class="search">
				<?php //echo View::factory('elements/search') ?>
			</div>
		</div>
	</div>

	<div class="site">
					
		<div class="vmenu">
			<?php echo View::factory('elements/menu') ?>
		</div>
		
		<div id="page">
			<?php echo $content ?>
		</div>
		
		<div class="clearleft"></div>

		<?php //echo View::factory('profiler/stats') ?>
		
	</div>

	<div id="footer">
		<?php //echo View::factory('elements/footer') ?>
	</div>

</body>

</html>