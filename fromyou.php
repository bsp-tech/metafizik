<?php require ('RestApi.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require ('headhead.php'); ?>
     </head>
<body>
    
<?php require('header.php');?>


	<div class="container">
		<div class="row pt-5">
            <?php
            $youtubeVides = RestApi::getFromYous();
            for($i=0;$i<sizeof($youtubeVides);$i++){
                $video = $youtubeVides[$i];
                $videoSnippet = $youtubeVides[$i]['snippet'];

                $videoImage = $videoSnippet['thumbnails']['high']['url'];
            ?>
				<div class="pb-3 col-md-4">
						<div class="col-12">
							<a href="/fromyoudetails.php?id=<?=$video['id']?>">
                                <div style="background-image: url(<?=$videoImage?>);"
                                     class="img-thumbnail yt-thumbnail"></div>
							</a>
						</div>
						<div class="col-12 mt-1">
							<h6 class="font-weight-bold">
								<a href="/fromyoudetails.php?id=<?=$videoSnippet['id']?>" class="text-decoration-none text-dark">
									<i aria-hidden="true" class="fa fa-play-circle text-primary"></i>
									<?=$videoSnippet['title']?>
								</a>
							</h6>
						</div>
				</div>
            <?php }?>
<!--				<div class="row col-4 mt-5 mb-5 offset-5">-->
<!--						<button class="btn btn-dark text-light">DAHA FAZLA</button>-->
<!--				</div>-->
		</div>
		
	</div>
<?php require ('footer.php'); ?>
</body>

</html>