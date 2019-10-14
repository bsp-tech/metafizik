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
            $response = RestApi::getSessions($_GET['nextpage']);
            $nextPageToken = $response['nextPageToken'];
            $prevPageToken = $response['prevPageToken'];

            $youtubeVides = $response['items'];
            for($i=0;$i<sizeof($youtubeVides);$i++){
                $video = $youtubeVides[$i];
                $videoSnippet = $youtubeVides[$i]['snippet'];

                $videoImage = $videoSnippet['thumbnails']['high']['url'];
            ?>
				<div class="pb-3 col-md-4">
						<div class="col-12">
							<a href="/session.php?id=<?=$videoSnippet['resourceId']['videoId']?>">
                                <div style="background-image: url(<?=$videoImage?>);"
                                     class="img-thumbnail yt-thumbnail"></div>
							</a>
						</div>
						<div class="col-12 mt-1">
							<h6 class="font-weight-bold">
								<a href="/session.php?id=<?=$videoSnippet['resourceId']['videoId']?>" class="text-decoration-none text-dark">
									<i aria-hidden="true" class="fa fa-play-circle text-primary"></i>
									<?=$videoSnippet['title']?>
								</a>
							</h6>
						</div>
				</div>
            <?php }?>
            <div class="col-md-12 row mt-3 text-center">
                <div class="col-md-4"></div>
                <?php
                if($_GET['nextpage']!=null){?>
                    <div class="col-md-2 text-center mt-3">
                        <a href="/sessions.php?nextpage=<?=$prevPageToken?>" class="btn btn-warning">
                            ÖNCEKİ SAYFA
                        </a>
                    </div>
                <?php } ?>
                <?php
                if($nextPageToken!=null){
                ?>
                <div class="col-md-2 text-center mt-3">
                    <a href="/sessions.php?nextpage=<?=$nextPageToken?>" class="btn btn-warning">
                        SONRAKİ SAYFA
                    </a>

                </div>
                <?php } ?>
        </div>
		</div>
		
	</div>
    <?php require ('footer.php'); ?>
</body>

</html>