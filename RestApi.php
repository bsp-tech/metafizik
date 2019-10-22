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
        $result = null;
        if($_GET['lang']=='en'){
            $result = [
                [
                    'id'=>1,
                    'title'=>'Silver Water',
                    'thumbnail'=>'/img/article2.jpg',
                    'description'=>'Proven Top 8 Colloidal Silver Water Benefits:<br/>
                                    1. Antibacterial. <br/>
                                    2. Wound Care / Skin Health <br/>
                                    3. Pink Eye / Ear Infections <br/>
                                    4. Antiviral - Effective Against Viruses. <br/>
                                    5. Anti-inflammatory. <br/>
                                    6. Sinusitis. <br/>
                                    7. Cold / Flu. <br/>
                                    8. Pneumonia (Pneumonia)'
                ],
                [
                    'id'=>2,
                    'title'=>'MAGNESIUM WATER',
                    'thumbnail'=>'/img/article4.jpg',
                    'description'=>'Lack of Magnesium water causes the following ailments:<br/>
                                    1. Sleeping difficulty <br/>
                                    2. Muscle spasms / pain <br/>
                                    3. Anxiety / depression <br/>
                                    4. Infertility <br/>
                                    5. PMS (premenstrual syndrome) <br/>
                                    6. Headache <br/>
                                    7. Fatigue <br/>'
                ],
                [
                    'id'=>3,
                    'title'=>'POTASSIUM WATER',
                    'thumbnail'=>'/img/article5.jpg',
                    'description'=>'Lack of Potassium water causes the following ailments:<br/>
                                    1. Abdominal bloating / cramps <br/>
                                    2. Heart palpitations <br/>
                                    3. Nausea / vomiting <br/>
                                    4. Tinnitus in the ears <br/>
                                    5. Eye dimming <br/>
                                    6. Dizziness <br/>
                                    7. Constipation<br/>'
                ],
                [
                    'id'=>4,
                    'title'=>'ZINC WATER',
                    'thumbnail'=>'/img/article6.jpg',
                    'description'=>'Lack of Zinc water causes the following ailments:<br/>
                                    1. Weak immunity <br/>
                                    2. Pimples or rashes <br/>
                                    3. Examined hair <br/>
                                    4. Diarrhea <br/>
                                    5. Allergies <br/>
                                    6. Infections <br/>'
                ],
                [
                    'id' => 5,
                    'title' => 'CALCIUM WATER',
                    'thumbnail' => '/img/article7.jpg',
                    'description' => 'Lack of Calcium water causes the following ailments:<br/>
                                        1. Easy broken nails / dry skin <br/>
                                        2. High blood pressure <br/>
                                        3. Tingling in the fingers <br/>
                                        4. Chronic itching <br/>
                                        5. Tooth decay <br/>
                                        6. Drowsiness <br/>'
                ],
                [
                    'id'=>6,
                    'title'=>'The Secret Manager of Your Body: Hypothalamus',
                    'thumbnail'=>'/img/article9.jpg',
                    'description'=>'The hypothalamus, is located just below the brain and is int the size of a nut, 
                    it controls many vital mechanisms described below:<br/>
                    1. Regulation of metabolism in the body <br/>
                    2. Conducting the activities of the adrenal glands <br/>
                    3. Growth control <br/>
                    4. Milk production <br/> <br/> 
                    During these processes it uses the other hormonal glands. These small meat pieces can communicate and collaborate like conscious people. It is an occasion to comprehend the glory of Allah.<br/><br/>
                    For those who think...'
                ],
                [
                    'id'=>7,
                    'title'=>'MANNA',
                    'thumbnail'=>'/img/article1.jpg',
                    'description'=> '
                                    This mysterious substance is called Manna in ancient Egypt. It is essentially mono-atomic gold and in white powder form. 
                                    In the literature it is also referred as ORMUS.
                                    However, ORMUS is a mix of radium, gold, silver, platinum and magnesium oxide. Manna is pure gold.
                                    Manna triggers the pineal gland and increases melatonin hormone secretion along with other hormones. 
                                    Melatonin hormone develops and protects the immune system. In case of melatonin hormone is much produced immune system gets much stronger, therefore the risk of people getting cancer and other diseases get lower.
                                    With the use of manna the following diseases and many other diseases are treated:
                                        <br/> 1. Cancer
                                        <br/> 2. Alzheimer
                                        <br/> 3. Asthma
                                        <br/> 4. Pancreas
                                        <br/> 5. Impaired blood circulation
                                        <br/> 6. Parkinson
                                        <br/> 7. Celebral hemorrhage
                                        <br/> 8. Kidney Diseases
                                        <br/> 9. Balance disorders
                                        
                '
                ],
                [
                    'id'=>8,
                    'title'=>'GOLD WATER',
                    'thumbnail'=>'/img/article3.jpg',
                    'description'=>'
                              BENEFITS:
                        <br/> 1. Gold Water is used to reduce joint pain and inflammation. Swelling in the joint works well even in cases of rheumatoid arthritis that cause stiffness and affect joint mobility. With regular intake, the pain is relieved and the normal movement of the joints is restored in a very short time.
                              Gold Water, which can be used topically to relieve joint pain, acts as a natural stimulant for the cells of our body.
                              Thus, the transmission of electrical signals between nerve cells in the brain increases, mental alertness and concentration improve.
                        <br/> 2. It improves healthy functioning of the brain and it is useful for those who experience problems such as lack of concentration and memory loss.
                        <br/> 3. It has a soothing effect on nervous nerves.
                        <br/> 4. Gold Juice has been used as an alternative drug in other brain-related subjects such as Parkinson\'s disease.
                        <br/> 5. When the digestive system is not working properly, we tend to gain weight. Indigestible food behind the intestines is often responsible for increasing body weight. When Gold Water is taken, it improves the digestion process and reduces obesity.
                        <br/> 6. It is used to treat various skin disorders.
                        <br/> 7. It is useful for eczema, fungal infections, skin rashes, wounds, skin burns. It regenerates cells, restores normal elastic properties and improves skin condition.
                    '],
                [
                    'id'=>9,
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
                ]

            ];
        }else {
            $result = [
                [
                    'id' => 1,
                    'title' => 'MANNA',
                    'thumbnail' => '/img/article1.jpg',
                    'description' => 'Antik Mısır’da Manna diye isimlendirilen bu gizemli madde, esasında mono atomik altındır, beyaz toz halindedir. Literatürde “ORMUS” olarak da geçmektedir.
                                    Ancak ORMUS içerisinde radyum, altın, gümüş, plâtin, magnezyum oksit bulunan bir nevi kokteyldir. Manna ise saf altındandır.
                                    Manna Epifiz bezini tetikleyerek, diğer hormonlarla beraber Melatonin hormon salınımınıda artırmaktadır. Melatonin hormonu bağışıklık sistemini geliştiren ve koruyan bir hormon olarak, daha çok salındığında bağışıklık sistemini daha çok güçlendirdiği için insanların kansere ve diğer hastalıklara yakalanma riski çok düşük olmaktadır.
                                    Manna kullanımı ile aşağıdaki hastalıklar ve daha pek çok hastalıklar tedavi edilmektedir:
                                        <br/>1. Kanser
                                        <br/>2. Alzheimer
                                        <br/>3. Astım
                                        <br/>4. Pankreas
                                        <br/>5. Kan dolaşım bozukluğu
                                        <br/>6. Parkinson
                                        <br/>7. Beyin kanaması
                                        <br/>8. Böbrek hastalıkları
                                        <br/>9. Denge bozuklukları'
                ],
                [
                    'id' => 2,
                    'title' => 'Gümüş suyu',
                    'thumbnail' => '/img/article2.jpg',
                    'description' => 'Kanıtlanmış En İyi 8 Kolloidal Gümüş Suyu Faydaları:<br/><br/>
                                1. Antibakteriyel.<br/>
                                2. Yara Bakımı / Cilt Sağlığı<br/>
                                3. Pembe Göz / Kulak Enfeksiyonları<br/>
                                4. Antiviral- Virüslere Karşı Etkili.<br/>
                                5. Anti-inflamatuar.<br/>
                                6. Sinüzit.<br/>
                                7. Soğuk Algınlığı / Grip.<br/>
                                8. Zatürre (Pnömoni)'
                ],
                [
                    'id' => 3,
                    'title' => 'ALTIN SUYU',
                    'thumbnail' => '/img/article3.jpg',
                    'description' => 'FAYDALARI:<br/> 
                    1. Eklem ağrısı ve iltihabı azaltmak için altın SUYU kullanılır. Eklemdeki şişme rijitliğe neden olan ve eklem hareketliliğini etkileyen romatoid artrit vakalarında bile iyi çalışır. Düzenli alımda ağrı hafifletilir ve eklemlerin normal hareketi çok kısa bir süre içinde eski haline getirilir.
                       Eklem ağrısı gidermede topikal olarak kullanılabilen altın SUYU vücudumuzun hücreleri için doğal uyarıcı olarak davranır. 
                       Böylece beyindeki sinir hücreleri arasındaki elektrik sinyallerinin iletimi artar ve zihinsel uyanıklık artar ve konsantrasyonu artırır.
                       <br/>
                    2. Beynin sağlıklı bir şekilde çalışması için konsantrasyon eksikliği ve hafıza kaybı gibi sorunlarla karşılaşanlara faydalı olduğu kanıtlanmıştır. 
                    <br/>3. Gergin sinirler üzerinde yatıştırıcı bir etkiye sahiptir. 
                    <br/>4. Parkinson hastalığı gibi diğer beyin ile ilgili konularda altın SUYU alternatif bir ilaç olarak kullanılmıştır. 
                    <br/>5. Sindirim sistemi düzgün çalışmadığında kilo alma eğilimindeyiz. Bağırsakların arkasında kalan sindirilmeyen gıdalar sıklıkla vücut ağırlığının arttırılmasından sorumludur. Altın SUYU alındığında, sindirim sürecini iyileştirir ve obeziteyi azaltır.
                    <br/>6. Çeşitli cilt bozukluklarını tedavi etmek için  kullanılır. 
                    <br/>7. Egzama, mantar enfeksiyonları, deri döküntüleri, yaralar, deri yanıklarına faydalıdır. Hücreleri yeniler, normal elastik özelliklerini geri kazandırır ve cilt durumunu iyileştirir.
                    '
                ],
                [
                    'id'=>4,
                    'title'=>'MAGNEZYUM SUYU',
                    'thumbnail'=>'/img/article4.jpg',
                    'description'=>'Magnezyum suyu eksikliğinde oluşa bilecek rahatsızlıklar:<br/><br/>
                     1. Uyuma güçlüğü<br/>
                     2. Kas spazmları/ağrı <br/>
                     3. Endişe/depresyon<br/>
                     4. Kısırlık<br/>
                     5. PMS(adet öncesi sendromu)<br/>
                     6. Başağrısı<br/>
                     7. Yorgunluk<br/>'
                ],
                [
                    'id'=>5,
                    'title'=>'POTASYUM SUYU',
                    'thumbnail'=>'/img/article5.jpg',
                    'description'=>'Potasyum suyu eksikliğinde oluşa bilecek rahatsızlıklar:<br/><br/>
                                1. Karın şişkinliği/krampları<br/>
                                2. Kalp çarpıntıları<br/>
                                3. Mide bulantısı/kusma<br/>
                                4. Kulaklarda çınlama<br/>
                                5. Göz karaması<br/>
                                6. Baş dönmesi<br/>
                                7. Kabızlık<br/>'
                ],
                [
                    'id'=>6,
                    'title'=>'ÇINKO SUYU',
                    'thumbnail'=>'/img/article6.jpg',
                    'description'=>'Çinko suyu eksikliğinde oluşa bilecek rahatsızlıklar:<br/><br/>
                                1. Zayıf bağışıklık<br/>
                                2. Sivilce ya da isilik<br/>
                                3. Incelen saçlar<br/>
                                4. Ishal<br/>
                                5. Alerjiler<br/>
                                6. Enfeksiyonlar<br/>'
                ],
                [
                    'id' => 7,
                    'title' => 'KALSIYUM SUYU',
                    'thumbnail' => '/img/article7.jpg',
                    'description' => 'Kalsiyum suyu eksikliğinde oluşa bilecek rahatsızlıklar:<br/><br/>
                                      1. Kolay kırılan tırnaklar/kuru cilt<br/>
                                      2. Yüksek tansiyon<br/>
                                      3. Parmaklarda karıncalanma<br/>
                                      4. Kronik kaşınma<br/>
                                      5. Dişlerin çürümesi<br/>
                                      6. Uyuşukluk<br/>'
                ],
                [
                    'id' => 8,
                    'title' => 'Hayat Enerjisi Suyu',
                    'thumbnail' => '/img/article8.jpg',
                    'description' => 'Hayat Enerjisi Suyu 

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
                    'id' => 9,
                    'title' => 'Bedeninizin Gizli Yöneticisi: Hipotalamus',
                    'thumbnail' => '/img/article9.jpg',
                    'description' => 'Beynin hemen altında bulunan ve bir fındık tanesi büyüklüğünde olan hipotalamus, <br/>
                                1. Vücutta metabolizmanın düzenlenmesi<br/>
                                2. Böbrek üstü bezlerinin faaliyetlerinin yürütülmesi, <br/>
                                3. Büyümenin kontrolü<br/>
                                4. Süt üretimi <br/>
                                gibi pek çok hayati mekanizmayı kontrol eder. Bunu yaparken de emrindeki diğer hormonal bezleri kullanır. Bu küçük et parçalarının şuurlu insanlar gibi haberleşmeleri ve ortaklaşa çalışmalar yürütmeleri düşünen insanlar için
                                Allah’ın yüceliğini kavramada bir vesiledir'
                ],

            ];
        }
        return $result;
    }

}