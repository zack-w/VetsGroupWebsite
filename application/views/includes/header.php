<!DOCTYPE html>
<html>
	<head>
		<title>The Vets Group</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/navigation.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/simple-slideshow-styles.css" />
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
		<script src='<?= base_url(); ?>assets/js/better-simple-slideshow.min.js'></script>
	</head>
	
	<body>
		<div class="topStripe">
			&nbsp;
		</div>
		
		<div class="header">
			<a href="<?= base_url(); ?>"><div class="logo">&nbsp;</div></a>
			<div class="topHeadPane">
				<div class="button" onclick="javascript: window.open('#');">Login</div>
				<div class="button" onclick="javascript: window.open('#');">Email</div>
				<input type="text" class="searchBar" placeholder="Search the Vets Group" />
			</div>
			
			<nav>
				<?php
					foreach( $nav_info as $nav_element ) {
						echo "<li><a href='{$nav_element["url"]}'>{$nav_element[ "name" ]}</a><ul>";
						
						foreach( $nav_element[ "children" ] as $childNav ) {
							echo "<li><a href='{$childNav["url"]}'>{$childNav["name"]}</a></li>";
						}
						
						echo "</ul></li>";
					}
				?>
			</nav>
		</div>