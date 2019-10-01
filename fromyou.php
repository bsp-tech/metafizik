<?php require ('RestApi.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="/font/Rubik.css" 			rel="stylesheet">
        <link href="/font/FiraSans.css" 		rel="stylesheet">
        <link href="/font/Montserrat.css" 		rel="stylesheet">
        <link href="/css/bootstrap-4.3.1.css" 	rel="stylesheet">
        <link href="/css/fontawesome-4.7.0.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
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
<hr>
	<footer class="page-footer font-small mdb-color pt-4">

        
        <div class="container text-center text-md-left">
      
          <div class="row text-center text-md-left mt-3 pb-3">
      
        
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mt-3">
              <h4 class="text-uppercase mb-4 font-weight-bold"> <a  href="/about.html">SELAHATTIN AKKAYA</a></h4>
              <p>Selahattin AKKAYA 1966 Erzurum doğumludur. Eğitim ve Öğretimini İstanbul’da tamamlamıştır. Dünya çapında bu hizmeti veren AKKAYA gerekli bilgi, birikim, donanım ve referansa sahiptir.</p>
            </div>
           
      
            <hr class="w-100 clearfix d-md-none">
      
            <div class="col-md-2 col-lg-2 col-xl-2  pt-3 mx-auto mt-4">
                <p>
                  
                    <a href="/" class = "stretched-link btn btn-sm border border-warning rounded-pill text-decoration-none text-dark px-4">Ana sayfa</a>
                </p>
                <p>
                  
                    <a  href="/sessions.html" class = "stretched-link btn btn-sm border border-warning rounded-pill text-decoration-none text-dark px-4">Seanslar</a>
                </p>
                <p>
                  
                    <a href="/articles.html"  class = "stretched-link btn btn-sm border border-warning rounded-pill text-decoration-none text-dark px-4">Makaleler</a>
                </p>
               
      
             
             </div>
          
      
            <hr class="w-100 clearfix d-md-none">
      
          
            <div class="col-md-3 col-lg-2 col-xl-2 pt-3 mx-auto mt-4">
                <p>
                  
                    <a href="/fromyou.html"  class = "stretched-link btn btn-sm border border-warning rounded-pill text-decoration-none text-dark px-4">Sizden gelenler</a>
                </p>
              <p>
                <a href="#!"><a href="/media.html" class = "stretched-link btn btn-sm border border-warning rounded-pill px-4 text-decoration-none text-dark">Basında biz</a></a>
              </p>
              
           <p><a href="/contact.html" class = "stretched-link btn btn-sm border border-warning rounded-pill px-4 text-decoration-none text-dark">İletişim</a></p>
             
            </div>
      
            
            <hr class="w-100 clearfix d-md-none">
      
          
            <div class="col-md-4 col-lg-4 d-flex align-items-center flex-column col-xl-3 mx-auto mt-3">
              <h4 class="text-uppercase mb-4 font-weight-bold text-primary">Sosyal ağ</h4>
             <p>
                <a href="dasd" class=" text-decoration-none" style="font-size: 25px;color: #E62117">
                    <i class="fab fa-youtube mr-3"></i>YouTube</a>
             </p>
              <p><a href="#" class="text-decoration-none" style="font-size: 25px;color: #F58529">
                  <i class="fab fa-instagram mr-3"></i>Instagram</a>
              </p>
            </div>
            
      
          </div>
     
      
          <hr>
      
          <div class="row d-flex justif  justify-content-center">
      
            
            <div class="">
                
             
              <p class="text-center text-md-left">© 2019 -All Rights Reserved.Developed by:
                <a href="http://www.bsptechs.com">
                  <strong> BSP-TECH</strong>
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