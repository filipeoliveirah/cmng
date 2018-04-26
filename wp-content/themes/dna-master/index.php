<!DOCTYPE html>
<html lang="pt-br">
    <head>	
		<? get_header();?>
    </head>

  <body>
  
	<?
	/*include_once("incs/menu.php");
    include_once("incs/slider.php");
	include_once("incs/content-blog.php");*/
	?>
	<?php	
	include_once("incs/menu.php");
	include_once("incs/slider.php");
	include_once("incs/content-blog.php");
	get_sidebar();
	include_once("footer.php");
	?>
  </body>
</html>