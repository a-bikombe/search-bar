<?php
require_once '../../aribikombe/groups.php';
const PAGE_TITLE = "Search Bar";
?>

<!doctype html>
<html>

<head>
	<title><?= PAGE_TITLE ?></title>
	<link href="style.css" rel="stylesheet">
	<script src="main.js" defer></script>
</head>

<body>
	<h1><?= PAGE_TITLE ?></h1>
	<div class="search">
		<div class="search-child">
			<input type="text" class="search-input" id="searchbar" placeholder="Search for a Group..." pattern="[^<>]+">
			<button type="button" class="search-input">Search</button>
		</div>
		<div class="search-child search-input" id="searchOutputDiv">
			<output id="searchOutput"></output>
		</div>
	</div>

	<pre>
	<?php
	echo 'groups:' . PHP_EOL;
	foreach ($grouptabs as $group) {
		echo $group . PHP_EOL;
	}

	?>
	</pre>
</body>

</html>