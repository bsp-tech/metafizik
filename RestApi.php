<?php
class RestApi
{
    private static $base_url = "http://examapprest.herokuapp.com/api";

    public static function sendGetRequest($url){
        $response = file_get_contents($url);
        return json_decode($response, true);
    }


    public static function getFromYousMain(){

        $ids = [
                "L9hyI-UYZ2E",
                "yq-48XFGuso",
                "xklD_AZqXJA",
                "u1-2OjkpR8Y"
        ];

        $response = RestApi::getYoutubeVideoList($ids);
        return $response;
    }

    public static function getFromYous($nextPageToken){
        $response = RestApi::getYoutubePlaylistVideos("PL-YgwWLit4iupYDrms9j9Phew09QHGJ3i",$nextPageToken);
        return $response;
    }

    public static function getSessions($nextPageToken){
        $response = RestApi::getYoutubePlaylistVideos("PL-YgwWLit4iuxzxQqjwuhdQYYfJN4_lzH",$nextPageToken);
        return $response;
    }

    public static function getYoutubePlaylistVideos($playlistId, $nextPageToken){
        $url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet%2CcontentDetails&maxResults=10&playlistId=$playlistId&key=AIzaSyBtTOG57nn_5uLg9odfByQXl5O3xjiQ8xg&order=date&pageToken=$nextPageToken";
        $response = RestApi::sendGetRequest($url);

        return $response;
    }

    public static function getYoutubeVideoList($ids){
        $idsStr = "";
        $idsSize = sizeof($ids);
        for($i=0;$i<$idsSize;$i++){
            $idsStr.=$ids[$i];
            if($i<$idsSize-1){
                $idsStr.=",";
            }
        }

        $url = "https://www.googleapis.com/youtube/v3/videos?key=AIzaSyBtTOG57nn_5uLg9odfByQXl5O3xjiQ8xg&part=snippet&id=".$idsStr;
        $response = RestApi::sendGetRequest($url);

        return $response['items'];
    }


    public static function getArticleById($id){
        $result = RestApi::getArticles();
        return $result[$id-1];
    }

        public static function getArticles(){
        $result = [
            [
                'id'=>1,
                'title'=>'MANNA',
                'thumbnail'=>'/img/article1.jpg',
                'description'=> '   Antik Mısır’da Manna diye isimlendirilen bu gizemli madde, esasında mono atomik altındır, beyaz toz halindedir. Literatürde “ORMUS” olarak da geçmektedir. Ancak ORMUS içerisinde radyum, altın, gümüş, plâtin, magnezyum oksit bulunan bir nevi kokteyldir. Manna ise saf altındandır.
                                    MANNA NIN SAĞLIKLA İLGİLİ FAYDALARI!
                                    •    Manna Epifiz bezini tetikleyerek, diğer hormonlarla beraber Melatonin hormon salınımınıda artırmaktadır. Melatonin hormonu bağışıklık sistemini geliştiren ve koruyan bir hormon olarak, daha çok salındığında bağışıklık sistemini daha çok güçlendirdiği için insanların kansere ve diğer hastalıklara yakalanma riski çok düşük olmaktadır.
                                    
                                    •    Manna kullanımı ile başta, kanser, Alzheimer, astım, pankreas, kan dolaşım bozukluğu, Parkinson, beyin kanaması, böbrek hastalıkları ve denge bozuklukları olmak üzere daha pek çok hastalık tedavi edilmektedir ve bu hastalıklardan korunulmaktadır.
                '
            ],
            [
                'id'=>2,
                'title'=>'Gümüş suyu',
                'thumbnail'=>'/img/article2.jpg',
                'description'=>'Kanıtlanmış En İyi 8 Kolloidal Gümüş Suyu Faydaları
                                Antibakteriyel.
                                Yara Bakımı / Cilt Sağlığı
                                Pembe Göz / Kulak Enfeksiyonları
                                Antiviral- Virüslere Karşı Etkili.
                                Anti-inflamatuar.
                                Sinüzit.
                                Soğuk Algınlığı / Grip.
                                Zatürre (Pnömoni)'
            ],
            [
                'id'=>3,
                'title'=>'ALTIN SUYU',
                'thumbnail'=>'/img/article3.jpg',
                'description'=>'    FAYDALARI eklem ağrısı ve iltihabı azaltmak için altın SUYU kullanılır. Eklemdeki şişme rijitliğe neden olan ve eklem hareketliliğini etkileyen romatoid artrit vakalarında bile iyi çalışır. Düzenli alımda ağrı hafifletilir ve eklemlerin normal hareketi çok kısa bir süre içinde eski haline getirilir.
                                    Eklem ağrısı gidermede topikal olarak kullanılabilen 
                                    altın SUYU vücudumuzun hücreleri için doğal uyarıcı olarak davranır. Böylece beyindeki sinir hücreleri arasındaki elektrik sinyallerinin iletimi artar ve zihinsel uyanıklık artar ve konsantrasyonu artırır.
                                    altın,  SUYU beynin sağlıklı bir şekilde çalışması için konsantrasyon eksikliği ve hafıza kaybı gibi sorunlarla karşılaşanlara faydalı olduğu kanıtlanmıştır. 
                                    altın SUYU gergin sinirler üzerinde yatıştırıcı bir etkiye sahiptir. 
                                    Parkinson hastalığı gibi diğer beyin ile ilgili konularda altın SUYU alternatif bir ilaç olarak kullanılmıştır. 
                                    Sindirim sistemi düzgün çalışmadığında kilo alma eğilimindeyiz. Bağırsakların arkasında kalan sindirilmeyen gıdalar sıklıkla vücut ağırlığının arttırılmasından sorumludur. altın SUYU alındığında, sindirim sürecini iyileştirir ve obeziteyi azaltır.
                                    altın SUYU çeşitli cilt bozukluklarını tedavi etmek için  kullanılır. Egzama, mantar enfeksiyonları, deri döküntüleri, yaralar, deri yanıklarına faydalıdır.  Hücreleri yeniler, normal elastik özelliklerini geri kazandırır ve cilt durumunu iyileştirir.'
            ],
            [
                'id'=>4,
                'title'=>'MAGNEZYUM SUYU',
                'thumbnail'=>'/img/article4.jpg',
                'description'=>'MAGNEZYUM SUYU eksikliğinde uyuma güçlüğü,kas spazmları/ ağrı, endişe/ depresyon, kısırlık,/PMS(adet öncesi sendromu), başağrısı,yorgunluk gibi rahatsızlıklara neden olur .'
            ],
            [
                'id'=>5,
                'title'=>'POTASYUM SUYU ',
                'thumbnail'=>'/img/article5.jpg',
                'description'=>'POTASYUM SUYU EKSİKLİGİNDE OLUŞABİLCEK RAHATSIZLIKLAR:
                                Karın şişkinliği/krampları
                                Kalp çarpıntıları
                                Mide bulantısı/kusma
                                Kulaklarda çınlama
                                Göz karaması,baş dönmesi
                                Kabızlık'
            ],
            [
                'id'=>6,
                'title'=>'ÇİNKO SUYU',
                'thumbnail'=>'/img/article6.jpg',
                'description'=>'ÇİNKO SUYU EKSİKLİGİN DE OLUŞABİLECEK RAHATSIZLIKLAR
                                Zayıf bağışıklık, sivilce ya da isilik, ncelen saçlar,ishal, alerjiler, enfeksiyonlar'
            ],
            [
                'id'=>7,
                'title'=>'KALSİYUM SUYU',
                'thumbnail'=>'/img/article7.jpg',
                'description'=>'KALSİYUM SUYU EKSİKLİĞİNDE OLUŞABİLECEK RAHATSIZLIKLAR
                                Kolay kırılan tırnaklar/ kuru cilt, yüksek tansiyon, parmaklarda karıncalanma,kronik kaşınma, dişlerin çürümesi,uyuşukluk'
            ],
            [
                'id'=>8,
                'title'=>'Hayat Enerjisi Suyu',
                'thumbnail'=>'/img/article8.jpg',
                'description'=>'Hayat Enerjisi Suyu 

                                Bazı açıklamalar hayal ötesi gibi geliyor. Gerçekten hayal mi? Özellikle Kuran’ın dediği mucizeler. Kehf 31:
                                
                                İşte onlara (onlar için) adn cennetleri vardır. Onların altından nehirler akar. Orada altın bileziklerle süslenirler. İnce ipek ve atlastan yeşil elbiseler giyerler. Orada tahtlar üzerine yaslanırlar. Ne güzel bir sevap ve ne güzel bir destektir.
                                Bu şekilde meali ile pek anlaşılamıyor. Hâlbuki orada akımdan bahis eder. Bu akım insan bedeninin de olan elektrik sistemi ise bakınız:
                                İnsan vücudu yaşamsal fonksiyonlarını yerine getirebilmek için elektrokimyasal bir enerji sistemi kullanır. Vücudumuzun elektrikle işleyen bölümünü sinir sistemi oluşturur. Bir kaza veya sakatlık durumu olduğunda bile vücudumuz elektrik üretimini gerçekleştirir, ürettiği elektrik enerjisiyle yaşamsal faaliyetlerini sürdürür. Canlılardaki bu elektriksel sistem, metallerdeki elektrik sistemlerinden çok daha fazla avantaja sahiptir. Bu avantajların başında biyolojik sistemlerin kendi kendini tamir edebilmesi gelir. Örneğin parmağınızda bir kesik oluştuğunda kısa zamanda bu yara iyileşir. Bunu sağlayan sistemlerin ardında yine elektriksel bir düzen vardır. Bu hiçbir insan yapımı makinede mevcut olmayan taklit edilemez bir özelliktir.
                                
                                İnsan bu enerji ile yaşamını sürdürür?
                                Etrafımızda gördüğümüz her şeyin yapıtaşı atomdur. Atomun içinde ise proton, nötron ve elektron vardır. Proton ve nötron çekirdekte bulunur, elektronlar ise çekirdeğin etrafında sürekli dönen hareketli taneciklerdir. Protonlar pozitif, elektronlar negatif elektrik yüklü, nötron ise yüksüzdür. Atomdaki elektron ve proton miktarı birbirine eşittir. Bu eşitlik de atomun nötr durumda olmasına neden olur. Atom fazladan bir elektron kazandığında bu onu negatif hale getirir ve denge bozulur. Atom bir elektron kaybettiğinde ise bu kez de pozitif yüklü olur. Bu dengesizlik elektron akımı başlamasına yol açar ve işte bu elektron akımı da ‘elektrik’ olarak tanımlanır. Trilyonlarca atomdan meydana gelen insan vücudu elektronların hareketiyle ortaya çıkan enerjiyle çalışır.
                                Nefes almak, yürüyüp koşmak, yemek yemek, konuşmak, hareket etmek, kısacası yaşamımıza dair ne varsa bu enerjiye ihtiyaç duyarız ve bu enerji olmadan vücudun
                                SAYFA 94
                                yaşamsal faaliyetlerini sürdürmesi söz konusu bile olamaz. İnsanın yaşamı boyunca vücudunda gerçekleşen sayısız hücre faaliyetinin temelinde hep elektrik vardır. Başka bir deyişle, vücuttaki tüm kimyasal işlemler elektrikle olup biter.
                                İnsan vücudunun temel enerji kaynağı kimyasaldır ve elektrik temelli tek sistem olan sinir sistemi, karmaşık bir haberleşme, eşgüdüm ve yönetim sistemi olarak işlev görür. İnsan vücudundaki elektriği (DC) ya da (AC) olarak sınıflayamayız. İnsan vücudundaki sinyal iletisi, sinir sistemini oluşturan nöronlar tarafından iletilen atkılardan oluşur. Bu sistem, bir AC ya da DC güç sistemlerinden çok, bir telgraf sistemine benzetilebilir. Telgraf sistemi, çeşitli kodlar kullanılmak suretiyle mesafeler arasında elektrik sinyalleriyle yazılı bilgi gönderilmesini sağlayan bir cihazdır. Bizim vücudumuzda gerçeklesen ise elektriksel bilginin yazısız aktarımıdır. Yani ayağımıza batan bir dikeni hissedip değerlendirme ve tepki verme sırasında elektrik sinyalleri ile bilgi akışı sağlanır.
                                
                                İnsan Vücudunda Nasıl Elektrik Üretiliyor?
                                Bu sorunun cevabı aslında muazzam bir dengenin ürünüdür ve oldukça şaşırtıcıdır. Vücut, elektrik üretimini kendisi gerçekleştirir. Bu görevi vücudumuzdaki trilyonlarca hücre hep birlikte yerine getirirler. Küçük birer ‘pil’e benzetebileceğimiz hücrelerin dış çevresi potasyum, iç kısmı ise sodyum sıvısı ile doludur. Tüm hücrelerde, hücre zarları boyunca bir voltaj (elektriksel gerilim farkı) vardır. Hücre zarındaki voltaj farkı “elektrik potansiyeli” olarak ifade edilen bir elektrik akımının oluşmasını sağlar. Hücre zarının içerisindeki bu elektrik potansiyeline “dinlenme potansiyeli” de denir ve bu potansiyelin miktarı yaklaşık 50 milivolttur. Bütün hücreler bu potansiyel enerjilerini hücre içindeki faaliyetlerini yürütmek için kullanırlar. Ancak sinir ve kas hücreleri diğer hücrelerden farklı olarak bu enerjiyi fizyolojik görevler için de kullanırlar. Kas hücrelerinde bu akım sayesinde kasılma gerçekleşirken, sinir hücrelerinde bu akım uyarı iletimini sağlar.
                                Hücre zarı üzerinde sadece belirli iyonların geçişine izin veren kanallar mevcuttur. Bu kanallar aracılığıyla iyonlar hücre içine veya dışına hareket edebilir. Artı ve eksi yüklü parçacıkların hareketiyle hücre içi ve dışı arasında elektriksel bir dengesizlik meydana gelir. Hücre içi ve hücre dışı sıvılarındaki bu fark, denge oluşana kadar bir geçiş eğilimi oluşturur. İçerisini dışarıdan ayıran hücre zarı bazı iyonların geçmesine izin verirken diğerlerinin geçişini engelleyen yarı-geçirgen özelliktedir. Bu yüzden hücre, elektriğe ihtiyaç duyduğunda tüm yapması gereken, elektrik devresini tamamlamak için bu kanalların birini açmaktır.
                                
                                İnsan Vücudu’nda Üretilen Elektriğin Miktarı Ne Kadardır?
                                Bir hücrenin dışındaki yük ile içerisindeki yük arasındaki fark yaklaşık 50 milivolttur. Washington Eyalet Üniversitesi’nden farmakolog Prof. Steven M. Simasko’nun hesaplarına göre vücuttaki trilyonlarca hücrenin ürettiği elektrik toplanırsa elde edeceğimiz enerji, 40 watt’lık bir elektrik ampulünün aydınlatmasına denk bir enerjidir. Bazı hücreler diğerlerinden daha fazla elektrik üretir. Bunun miktarı hücrelerin yaptıkları işe ve elektriği neden kullandıklarına göre değişir. Örneğin sinir hücreleri ve kalp hücreleri çok fazla elektrik üretirler, çünkü sinir hücrelerinin, mesajlarını uzak.
                                mesafelere iletmeleri gerekir bu yüzden hem kendileri için hem de bu mesajları iletmek için daha fazla enerjiye ihtiyaç duyarlar.
                                En büyük elektrik mekanizmalarından biridir insan vücudu biz farkında olmasak da. İçimizdeki muazzam elektrik sistemi nefes aldığımız sürece bizi yaşatmaya devam ettirecektir.
                                İnsanın bu elektrik üretme sistemi arıza yaptığında?
                                Kehf 31 burada bizlere bunun yolunu öğretmektedir. Hatta gösterdiği Esmalarla yaraları tedavi edebilir, bedenin istenilen merkezlerine komutlar gönderebiliriz. Kısacası bildiğimiz yaşam enerjisini artırabiliriz'
            ],
            [
                'id'=>9,
                'title'=>'Bedeninizin Gizli Yöneticisi: Hipotalamus',
                'thumbnail'=>'/img/article9.jpg',
                'description'=>'Bedeninizin Gizli Yöneticisi: Hipotalamus
                                Beynin hemen altında bulunan ve bir fındık tanesi büyüklü¤ünde olan hipotalamus, vücutta metabolizmanın düzenlenmesi, böbrek üstü bezlerinin faaliyetlerinin yürütülmesi, büyümenin kontrolü, süt üretimi gibi pek çok hayati mekanizmayı kontrol eder. Bunu yaparken de emrindeki diğer hormonal bezleri kullanır. Yukarıdaki flemada hipotalamusa bağlı olarak çalışan hormonların hangileri oldukları belirtilmiştir. Bu küçük et parçalarının şuurlu insanlar gibi haberleşmeleri ve ortaklaşa çalışmalar yürütmeleri düşünen insanlar için
                                Allah’ın yüceliğini kavramada bir vesiledir'
            ],

        ];

        return $result;
    }

}