<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<?php include 'slogan.php' ?>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

<?php include 'header.php' ?>

<?php include 'menu.php' ?>
<div id="csf">
<div id="wrapper">
<table id="tb" border="0">
  <tr>
	<td id="tcont" valign="top">

			<center>
			<div id="content">
				<?php
$number="5";
include("/home/parukian/public_html/cutenews/show_news.php");
?>
			</div>
			</center>

	</td>
	<td id="tsid" valign="top">
<?php include 'sidebar.php' ?>
	</td>
	</tr>
</table>
</div>


<?php include 'footer.php' ?>


</body>
</html>
</div>



<!---TO DO LIST:

ADD LINKS IN FOOTER, AS WELL AS DROPDOWN MENU, AND SIDEBAR-->
