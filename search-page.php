<?php
include("assets/functions.php");

function getJsonDump() {
	$jsonDump = file_get_contents("https://jspmstudio.herokuapp.com/wp-json/posts?filter[posts_per_page]=74");
	return $jsonDump;
}

function GetScore($content, $query, $scoreAddition = 10) {
	$words = explode(" ", $query);
	$score = 0;
	foreach($words as $word) {
		if (strpos($content, $word) !== false) {
			$score += $scoreAddition;
		}
	}
	return $score;
}
if (isset($_GET["query"])) {
	$jsonDump = getJsonDump();
	$jsonedDump = json_decode($jsonDump);
	$result = array();
	$query = $_GET["query"];
	foreach($jsonedDump as $article) {
		$articleTemp = json_decode(json_encode($article), true);
		//$id = $article->ID;
		$content = $article->content;
		$score = 0;
		if (filter_var($content, FILTER_VALIDATE_URL)) {
			// is a link.
			$score += GetScore($content, $query, 1);
		} else {
			$score += GetScore($content, $query, 1);
		}
		$link = $article->link;
		$score += GetScore($link, $query, 1);
		$title = $article->title;
		$score += GetScore($link, $query, 1);
		$articleTemp["score"] = $score;
		if ($score > 0) {
			array_push($result, $articleTemp);
		}
	}
	if (count($result) > 0) $flag = 1;
	else $flag = -1;
} else {
	$flag = 0;
	$query = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<?php PrintHeadMetadata( "jspmstudio | Search Page"); ?>
</head>

<body>
	<!-- Loader -->
	<!--<div id="page-preloader"><span class="spinner"></span></div>-->
	<!-- Loader end -->
	<div class="layout-theme animated-css" data-header="sticky" data-header-top="200">
		<!-- UI create by mrunal Dixit -->
		<div id="wrapper">
			<!-- HEADER -->
			<?php include ( "assets/header.php"); ?>
			<!-- end header -->
			<div id="spacing"> </div>
			<div class="main-content">
				<div id="search-results">
					<div class="list-group" id="search-item">
						<?php if($flag !=0 ) { if($flag==1 ) { foreach($result as $single_result) { ?>
						<a href="<?php echo $single_result['link']; ?>" class="list-group-item">
							<h4 class="list-group-item-heading"><?php echo $single_result['title']; ?></h4> </a>
						<?php } } else { ?>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">No results.</h4>
							<p class="list-group-item-text">
								<h6>No results were found for your query, please check the spelling and try again.</h6>
							</p>
						</a>
						<?php } } else { ?>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">No query.</h4>
							<p class="list-group-item-text">
								<h6>Type in a query to search for it.</h6>
							</p>
						</a>
						<?php } ?> </div>
				</div>
			</div>
		</div>
		<!-- end wrapper -->
	</div>
	<!-- end layout-theme -->
	<?php include ( "assets/footer.php");?>
	<script type="text/javascript">
		var query = "<?php echo $query; ?>";
		document.getElementById("search").value = query;
</script>
</body>

</html>