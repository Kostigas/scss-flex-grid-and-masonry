<?php 
//pixabay api key
$key = 'YOUR_KEY_HERE';
//get data from pixabay api
$jsonData = @file_get_contents('https://pixabay.com/api/?key='.$key.'&q=yellow+flowers&image_type=photo&pretty=true');
$jsonDecoded = json_decode($jsonData, true);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kot Masonry</title>
	<link rel="stylesheet" type="text/css" href="assets/grid.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>

	<div class="grid">
		<?php 
		for ($i=0; $i < count($jsonDecoded['hits']); $i++) { 
		?>
		<div class="masonry-column col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2">
			<img class="masonry-item" src="<?php echo $jsonDecoded['hits'][$i]['webformatURL']  ?>">
		</div>
		<?php
		}
		?>	
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/masonry.js"></script>
</body>
</html>