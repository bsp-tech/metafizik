<?php require ('RestApi.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require ('headhead.php');
    $actual_link = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    ?>
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
            <div class="col-12 row">
                <div class="ml-auto fb-share-button mt-3"
                     data-href="<?=$actual_link?>" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
            </div>
		</div>		
	</div>
<?php require ('footer.php'); ?>
</body>
</html>