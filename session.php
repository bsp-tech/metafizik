<?php require ('RestApi.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <?php require ('headhead.php'); ?>
    <?php
    $response = RestApi::getSessions(null);
    $videos   = $response['items'];
    $video    = RestApi::getYoutubeVideoList([$_GET['id']])[0];
    ?>
    <meta property="og:title"       content="<?=$video['snippet']['title']?>"                     />
    <meta property="og:description" content="<?=$video['snippet']['description']?>"               />
    <meta property="og:image"       content="<?=$video['snippet']['thumbnails']['high']['url']?>" />
</head>

<body>




	<?php require('header.php');?>
	<section class="videos pt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="row mr-3">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$video['id']?>"
								frameborder="0"
								allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
						</div>
						<div class="col-12 mt-2">
							<div class="row">
								<p>
									 <?=$video['snippet']['description']?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-12 row">
                        <div class="ml-auto fb-share-button"
                             data-href="<?=$actual_link?>" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="row">
                        <?php

                        for($i=0;$i<sizeof($videos);$i++){
                            $video = $videos[$i];
                            $videoSnippet = $video['snippet'];
                            $videoImage = $videoSnippet['thumbnails']['high']['url'];
                        ?>
						<div class="row pb-3">
							<div class="col-12">
								<a href="/fromyoudetails.php?id=<?=$videoSnippet['resourceId']['videoId']?>">
                                    <div style="background-image: url(<?=$videoImage?>);"
                                         class="img-thumbnail yt-thumbnail"></div>
								</a>
							</div>
							<div class="col-12 mt-1">
								<h6 class="font-weight-bold">
									<a href="/videodetails.php" class="text-decoration-none text-dark">
										<i aria-hidden="true" class="fa fa-play-circle text-primary"></i>
										<?=$videoSnippet['title']?>
									</a>
								</h6>
							</div>
						</div>
						 <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>


    <?php require ('footer.php'); ?>
</body>

</html>