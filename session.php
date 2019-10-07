<?php require ('RestApi.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <?php require ('headhead.php'); ?>
</head>

<body>


    <?php
        $videos = RestApi::getSessions();
        $video = RestApi::getYoutubeVideoList([$_GET['id']])[0];
    ?>

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
					<div class="col-12">
						<div class="row">
							<div class="ml-auto">
								<span class="text-danger fa-2x">SHARE ON</span>
								<a href="/videodetails.php"
									class="bg-primary px-1 py-1 mx-1 text-white fa-2x fab fa-twitter"></a>
								<a href="/videodetails.php" style="background-color: #3B5998"
									class="px-1 py-1 mx-1 text-white fa-2x fab fa-facebook"></a>
								<a href="/videodetails.php"
									class="bg-danger px-1 py-1 mx-1 text-white fa-2x fab fa-youtube"></a>
							</div>
						</div>
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
								<a href="/fromyoudetails.php?id=<?=$video['id']?>">
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