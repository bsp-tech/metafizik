<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require ('headhead.php'); ?>
     </head>
<body>
<?php require('header.php');

$text = lang('contact_us',"Numaramızda sadece whatsapp aktifdir. Direk olarak arama yapmanız mümkün değil. 
         Sadece whatsapp üzerinden yaza ve ya araya bilirsiniz.
         Çalışma saatlerimiz cuma hariç hergün saat 10:00 ile 17:00 arası. Lütfen arama yapmak isterseniz sadece çalışma saatlerinde ve
          Whatsapp üzerinden arama yapınız. Yazmak isterseniz saat ve gün farkı olmadan Whatsappdan yaza bilirsiniz. En kısa sürede okuyup cevaplayacağız:").$whatsapp;
?>
<section>
    <section>
        <h1 class="text-center py-3 font-weight-bold"><?=lang('Iletişime Geçin')?></h1>
        <div class="alert alert-warning font-weight-bold blockquote-footer px-5 mx-5 shadow">
            <?=$text?>
        </div>
        <div class="container my-5">
            <div class="row shadow-lg p-2 py-4">
                <div class="col-lg-6 py-3">
                    <div class="contact p-2 w-100 text-muted">
                        <p class = "p-1"><i class="fas fa-home pr-2"></i><?=lang('address','Yenibosna merkez mah güneşli Yolu Caddesi no 2/3 h blok kat 2 ofis 27 ikebana Evleri-Bahçelievler İstanbul Türkiye')?></p>
                        <p class = "p-1"><i class="fas fa-envelope pr-2"></i>info@metafizik.com.tr</p>
                        <p class = "p-1"><i class="fas fa-phone-alt pr-2"></i><?=$whatsapp?>
                            <span class="text-danger"><?=lang('contact_us_direct','(Direk olarak arama mümkün değil. Sadece Whatsapp üzerinden arama yapa ve ya yaza bilirsiniz.)')?></span>
                        </p>
                        <p class = "p-1">
                            <a href="https://wa.me/<?=$whatsapp?>" class="text-decoration-none text-dark">
                                <img src="/assets/whatsapp.png" style="width: 50px"/> Whatsapp
                            </a>
                        </p>
                    </div>
                </div>
                <!--map-->
                <div class="col-lg-6 py-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1505.1648099596953!2d28.825870000942945!3d41.018044016850446!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7a27bc41b65f175c!2s%C4%B0kebana%20Evleri%20Y%C3%B6netimi!5e0!3m2!1saz!2sus!4v1569498271247!5m2!1s<?=lang($_GET['lang'],'tr')?>!2sus" frameborder="0" style="border:0; width:100%;" height = "300" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>

    </section>

    <?php require ('footer.php'); ?>
</body>
</html>