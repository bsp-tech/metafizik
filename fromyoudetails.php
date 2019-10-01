<?php require ('RestApi.php'); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Document</title>
	<link href="/font/Rubik.css" rel="stylesheet">
    <link href="/font/FiraSans.css" rel="stylesheet">
    <link href="/font/Montserrat.css" rel="stylesheet">
    <link href="/css/bootstrap-4.3.1.css" rel="stylesheet">
    <link href="/css/fontawesome-4.7.0.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>


    <?php
        $videos = RestApi::getFromYous();
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

	<hr>
	<footer class="page-footer font-small mdb-color pt-4">


			<div class="container text-center text-md-left">
	
				<div class="row text-center text-md-left mt-3 pb-3">
	
	
					<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mt-3">
						<h4 class="text-uppercase mb-4 font-weight-bold"> <a href="/about.php">SELAHATTIN AKKAYA</a></h4>
						<p>Selahattin AKKAYA 1966 Erzurum doğumludur. Eğitim ve Öğretimini İstanbul’da tamamlamıştır. Dünya
							çapında bu hizmeti veren AKKAYA gerekli bilgi, birikim, donanım ve referansa sahiptir.</p>
					</div>
	
	
					<hr class="w-100 clearfix d-md-none">
	
					<div class="col-md-2 col-lg-2 col-xl-2  pt-3 mx-auto mt-4">
						<p>
	
							<a href="/"
								class="stretched-link btn btn-sm border border-warning rounded-pill text-decoration-none text-dark px-4">Ana
								sayfa</a>
						</p>
						<p>
	
							<a href="/sessions.php"
								class="stretched-link btn btn-sm border border-warning rounded-pill text-decoration-none text-dark px-4">Seanslar</a>
						</p>
						<p>
	
							<a href="/articles.php"
								class="stretched-link btn btn-sm border border-warning rounded-pill text-decoration-none text-dark px-4">Makaleler</a>
						</p>
	
	
	
					</div>
	
	
					<hr class="w-100 clearfix d-md-none">
	
	
					<div class="col-md-3 col-lg-2 col-xl-2 pt-3 mx-auto mt-4">
						<p>
	
							<a href="/fromyou.php"
								class="stretched-link btn btn-sm border border-warning rounded-pill text-decoration-none text-dark px-4">Sizden
								gelenler</a>
						</p>
						<p>
							<a href="/media.php" class="stretched-link btn btn-sm border border-warning rounded-pill px-4 text-decoration-none text-dark">
									Basında biz
							</a>
						</p>
	
						<p><a href="/contact.php"
								class="stretched-link btn btn-sm border border-warning rounded-pill px-4 text-decoration-none text-dark">İletişim</a>
						</p>
	
					</div>
	
	
					<hr class="w-100 clearfix d-md-none">
	
	
					<div class="col-md-4 col-lg-4 d-flex align-items-center flex-column col-xl-3 mx-auto mt-3">
						<h4 class="text-uppercase mb-4 font-weight-bold text-primary">Sosyal ağ</h4>
						<p>
							<a href="https://www.youtube.com/channel/UCzyIznzYBn1jLCziyT7QCOg" class=" text-decoration-none" style="font-size: 25px;color: #E62117">
								<i class="fab fa-youtube mr-3"></i>YouTube</a>
						</p>
						<p><a href="" class="text-decoration-none" style="font-size: 25px;color: #F58529">
								<i class="fab fa-instagram mr-3"></i>Instagram</a>
						</p>
					</div>
				</div>
				<hr>
				<div class="row d-flex justif  justify-content-center">
					<div class="">
						<p class="text-center text-md-left"> <strong>
								© 2019 Developed by:
							</strong>
							<a href="http://www.bsptechs.com">
								<strong>BSP TECH</strong>
							</a>
						</p>
					</div>
				</div>
			</div>
	</footer>
	<script src="/js/fontawesome.js"></script>
	<script src="/js/jquery-3.3.1.js"></script>
	<script src="/js/popper-1.14.7.js"></script>
	<script src="/js/bootstrap-4.3.1.js"></script>
</body>

</html>