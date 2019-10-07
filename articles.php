<?php require ('RestApi.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require ('headhead.php'); ?>
     </head>
   
    

<body>
<?php require('header.php');?>


<section>
        <div class="container my-4">
            <h4 class = "py-2 text-center">
                Selahattin Akkaya hocamızın ilim, bilim, metafizik ve arge çalışmalarının sonucunda elde etmiş olduğu
                minareller, vitaminler, bakteriler, oksitler ve asitler bu elementlerin tamamının tüm canlılar üzerinde
                şifa etkisini kanıtlamış sular hazırlamaktadır. Aşağıdaki makalelerdede bazı minerallerin canlılar üzerindeki
                etkileri anlatılmaktadır.
            </h4>
            <div class="row">
                <div class="col-11">
                    <?php
                    $articles = RestApi::getArticles();
                    for($i=0;$i<sizeof($articles);$i++){
                        $article = $articles[$i];
                        $desc = $article['description'];
                        $desc = strlen($desc)>300?mb_substr($desc,0, 300).'...':$desc;
                    ?>
                    <div class="row my-3 hover">
                        <div class="col-4">
                             <a href="/article.php?id=<?=$article['id']?>" class = "text-decoration-none text-dark">
                                 <img src="<?=$article['thumbnail']?>" alt="" class = "w-100">
                             </a>
                        </div>
                        <div class="col-8">
                            <h5>
                                <a href="/article.php?id=<?=$article['id']?>" class = "text-decoration-none text-dark">
                                    <?=$article['title']?>
                                </a>
                            </h5>
                            <p class = "text-muted pb-0 mb-0">
                                <a href="/article.php?id=<?=$article['id']?>" class = "text-decoration-none text-dark">
                                <?=$desc?>
                                </a>
                            </p>
                            <a href="/article.php?id=<?=$article['id']?>">Daha fazla</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php require ('footer.php'); ?>
</body>
</html>