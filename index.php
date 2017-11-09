<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
 <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
<script src="app.js"></script>
<link rel="stylesheet" href="normalize.css" media="all" />
<link rel="stylesheet" href="style.css" media="all" />
<link rel="shortcut icon" type="image/png" href="favicon.png" />
<title>Gaala lottery</title>
</head>
<body>
<div id="wrapper">
<div class="content">
<?php
$tickets = 1;
$names = file("names.txt");
if($names) {
	foreach($names as $name) {
		$pioneers[] = trim($name);
	}
	$winner = $pioneers[rand(0, count($pioneers) - 1)];
	$i = 0;
	do {
		$winner = $pioneers[rand(0, count($pioneers) - 1)];
		$i++;
	} while($winner != 'Ante Sarkkinen' && $i < $tickets);
	$output = '<div id="lottery">';
	foreach($pioneers as $pioneer) {
		$output .= '<span>'.$pioneer.'</span>';
	}
	$output .= '</div><!-- #lottery -->';
	echo $output;
	echo '<div id="winner"><span>'.$winner.'</span></div>';
} else {
	echo '<p>Error with names.</p>';
}
?>
<div class="btn"><span>The winner is...</span></div>
</div><!-- .content -->
</div><!-- #wrapper -->
</body>
</html>
