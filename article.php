<?php require ('RestApi.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require ('headhead.php'); ?>
</head>
<body>
<?php
        require('header.php');
        $article = RestApi::getArticleById($_GET['id']);

?>
<div class="container ">
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 text-center mb-5">
					<img src="<?=$article['thumbnail']?>" class="w-50">
			</div>
			<div class="col-sm-12 col-md-12">
				<h4><?=$article['title']?></h4>
				<p class="text-muted">
                    <?=$article['description']?>
                </p>
			</div>
		</div>		
	</div>
<?php require ('footer.php'); ?>
</body>
</html>