<?php require ('RestApi.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require ('headhead.php'); ?>
</head>

<body>
    <?php require ('whatsapp.php');?>
    <section class="back_image">
        <nav class="navbar mobilnav navbar-inverse  abs-navbar d-lg-none">
            <div class="container-fluid">
                <a href="<?=get_link('/')?>" class="col-8 own_logo text-decoration-none">
                    <span style="color: #ff7700;">SELAHATTIN</span><span class="text-light"> AKKAYA</span>
                </a>
                <div class="navbar-header">
                    <button type="button" class="clicknav navbar-toggle border-0 bg-transparent text-white"
                        data-toggle="collapse" data-target="#myNavbar" aria-expanded="true">
                        <span style="font-size: 2.5em;">
                            <i class="fas fa-bars"></i>
                        </span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="myNavbar">
                <?php require('menulistmobile.php');?>
                </div>
            </div>
        </nav>
        <section style="margin-bottom: 5%;" class="text-right bg-transparent abs-navbar  navbar  text-white d-none d-lg-block">
            <div class="row m-0 pt-3 pb-2">
                <a href="<?=get_link('/')?>" class="text-center own_logo col-4 mt-3 text-decoration-none">
                    <span style="color: #ff7700;">SELAHATTIN</span><span class="text-light"> AKKAYA</span>
                </a>
                <div class="col-8">
                    <?php require('menulist.php');?>
                </div>
            </div>
        </section>

        <section>
                <div class="container">
                    <div class="row">
                        <div class="d-flex col-md-8 mx-auto back_image_content text-light flex-column align-items-center justify-content-center ">
                            <span class="back_image_title text-center">
                                   <?=lang('main_title','Metafizik ve Bioenerji seanslarıyla hastalıklarınızdan kurtulun')?>
                            </span>
                            <div class="back_image_text text-center"><?=lang('Selahattin Akkaya Kimdir')?></div>

                            <div style="width: 132px" class="mt-4">
                                <div class="border border-light rounded-pill mt-2 px-3 py-1 text-center">
                                    <a href="<?=get_link('/about.php')?>" class="text-decoration-none text-white" target="_blank">
                                        <?=lang('DAHA FAZLA')?>
                                    </a>
                                </div>
                            </div>
                            <div class="text-center border border-light rounded-pill px-3 py-1 down" data-ol-has-click-handler="">
                                <span><?=lang('Hastalarımızın Yorumları')?></span>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </section>
    <section>
        <div class="container pt-4">
            <div class="row mt-3 mb-4">
                <div class="col-md-12">
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/padZPcOUD_8" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
            <h2 class="mb-4 text-center up"><?=lang('HASTALARIMIZIN DILINDEN')?></h2>
            <?php
            $videos = RestApi::getFromYousMain();
            $b = true;
            for($i=0;$i<sizeof($videos);$i++){
                $video = $videos[$i];
                $videoSnippet = $video['snippet'];
                $videoImage = $videoSnippet['thumbnails']['high']['url'];
            ?>

            <?php if($b){?>
            <div class="row mt-3 ">
                <div class="d-flex flex-row-reverse mt-2  col-md-6 justify-content-center align-items-center  ">
                    <iframe width="100%" height="260" src="https://www.youtube.com/embed/<?=$video['id']?>" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="d-flex flex-row mt-2 col-md-6 justify-content-center align-items-center  ">
                    <div class="px-2">
                        <h4 class=""><strong><?=lang($video['id'],$videoSnippet['title'])?></strong></h4>
                        <p class="review_text"></p>
                    </div>
                </div>
            </div>
            <?php }else{?>
            <div class="row mt-3 ">
                <div class="d-flex flex-row mt-2 col-md-6 justify-content-center align-items-center  ">
                    <div class="px-2">
                        <h4 class=""><strong><?=lang($video['id'], $videoSnippet['title'])?></strong></h4>
                        <p class="review_text"></p>
                    </div>
                </div>
                <div class="d-flex flex-row-reverse mt-2 col-md-6 justify-content-center align-items-center  ">
                    <iframe width="100%" height="260" src="https://www.youtube.com/embed/<?=$video['id']?>" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <?php   }?>

                <?php if($i<sizeof($videos)-1){?>
                    <hr>
                    <?php } ?>
                    <?php
                $b = !$b;
            }?>

            <div class="col-md-12 mt-3 text-center">
                <a href="/fromyou.php" class="btn btn-warning">
                    <?=lang('DIĞER HASTALARIMIZI DA DINLEYIN')?>
                </a>
            </div>
        </div>
    </section>
    <hr>
    <section>
            <div class="container mt-5">
                    <h2 class="mb-4 text-center"><?=lang('HIZMETLERIMIZ')?></h2>
                    <div class="row services_text pl-3 col-md-12 col-sm-12 col-12">
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-asthma-60.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#asthma"><?=lang('Astım')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-sprout-64.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#bio"><?=lang('Bioenerji')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-posture-100.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#spine"><?=lang('Bel ve Boyun Fıtığı Tedavisi')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-colon-100 (1).png" />
                            <a class="text-decoration-none text-dark" href="/services.php#bowelinfection"><?=lang('Bağırsak Iltihabı')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-colon-100 (2).png" />
                            <a class="text-decoration-none text-dark" href="/services.php#bowellaziness"><?=lang('Bağırsak Tembelliği')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 27px;" class="mr-2" src="assets/icons8-brain-stroke-100.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#subsconcious"><?=lang('Bilinçaltı Temizliği')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-olive-100.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#vitamind"><?=lang('D Vitamini Eksikliği')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-therapy-60.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#estetic"><?=lang('Estetik ve Cilt Tedavisi')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 32px;" class="mr-2" src="assets/icons8-epilepsy-smart-watch-128.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#epilepsi"><?=lang('Epilepsi')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 32px;" class="mr-2" src="assets/icons8-bandage-52.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#egzama"><?=lang('Egzama')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-general-massage-area-100.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#fibro"><?=lang('Fibromiyalji')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-eye-160.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#eye"><?=lang('Göz Tedavisi (Frekans Yöntemi)')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-physical-therapy-100.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#paralysis"><?=lang('Kısmi Felç Tedavisi')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-lungs-100.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#koah"><?=lang('KOAH Hastalığı')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-colon-100.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#kolit"><?=lang('KOLIT')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-development-skill-48.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#motivation"><?=lang('Motivasyon Artırım')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-physics-128.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#metaphysics"><?=lang('Metafizik Unsurlar')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 32px;" class="mr-2" src="assets/icons8-standing-man-80.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#multiplskleroz"><?=lang('Multipl skleroz')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-leg-48.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#meniskus"><?=lang('Menisküs Tedavisi')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-syringe-128.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#substanceabuse"><?=lang('Madde Bağımlılığı')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-bottle-of-water-100.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#minerallack"><?=lang('Mineral Eksikliği')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-headache-128.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#migren"><?=lang('Migren')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-hair-brush-100.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#hair"><?=lang('Saç Tedavisi (Frekans Yöntemi)')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-wise-mind-100.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#emotion"><?=lang('Terapi (Duygusal ve Zihinsel)')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-insomnia-160.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#sleep"><?=lang('Uyku Apnesi')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 28px;" class="mr-2" src="assets/icons8-personal-trainer-100.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#life"><?=lang('Yaşam Koçluğu')?></a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 p-2">
                            <img style="width: 23px;" class="mr-2" src="assets/icons8-bandage-52.png" />
                            <a class="text-decoration-none text-dark" href="/services.php#zona"><?=lang('Zona Hastalığı')?></a>
                        </div>


                    </div>
            </div>
        </section>
    <div class="d-flex justify-content-center mt-5 flex-column align-items-center">
        <h2 class="text-success text-center"><strong><?=lang('Sosyal Medyada Bizi Takib Edin')?></strong></h2>
        <div class="mt-4  justify-content-center d-flex flex-wrap flex-row">
                <a href="https://www.youtube.com/channel/UCzyIznzYBn1jLCziyT7QCOg" class="mr-4 text-decoration-none" style="font-size: 45px;color: #E62117">
                    <i class="fab fa-youtube mr-3"></i>
                    YouTube
                </a>
                <a href="https://www.instagram.com/prof.selahattinakkaya/" class="mr-4 text-decoration-none" style="font-size: 45px;color: #F58529">
                    <i class="fab fa-instagram mr-3"></i>
                    Instagram
                </a>
                <a href="https://www.facebook.com/selahattinakkaya.com.tr/" class="text-decoration-none" style="font-size: 45px;color: #007bff">
                    <i class="fab fa-facebook mr-3"></i>
                    Facebook
                </a>
        </div>

    </div>

    <?php require ('footer.php'); ?>
</body>

</html>
