<?php

 $words=[
     'articles_title'=>'The minerals, vitamins, bacteria, oxides and acids that Selahattin Akkaya has obtained as a result of his science, knowledge, metaphysics studies that has proved the healing effect of all these elements on all living things. The following articles describe the effects of some minerals on living things.',
    'Ana Sayfa'=>'Home',
    'Seanslar'=>'Sessions',
    'Makaleler'=>'Articles',
    'Hizmetlerimiz'=>'Our Services',
     'HIZMETLERIMIZ'=>'OUR SERVICES',
    'Medya'=>'Media',
    'Hastalarımızın Dilinden'=>'Reviews of Our Clients',
    'Basında biz'=>'We on Media',
    'Hakkında'=>'About',
    'Iletişim'=>'Contact us',
     'Sosyal ağ'=>'Social Network',
     'DAHA FAZLA'=>'MORE',
     'Daha fazla'=>'More',
     'Hastalarımızın Yorumları'=>'Reviews of Our Patients',
     'HASTALARIMIZIN DILINDEN'=>'REVIEWS OF OUR PATIENTS',
     'DIĞER HASTALARIMIZI DA DINLEYIN'=>'LISTEN TO OTHER PATIENTS',
     'Selahattin Akkaya Kimdir'=>'Who Is Selahattin Akkaya',
     'Sosyal Medyada Bizi Takib Edin'=>'Follow Us',
     'Iletişime Geçin'=>'Contact Us',
     'en'=>'en',
     'Egzama'=>'Eczema',
     'Astım'=>'Asthma',
     'Bağırsak Iltihabı'=>'Intestinal inflammation',
     'D Vitamini Eksikliği'=>'Vitamin D Deficiency',
     'Fibromiyalji'=>'Fibromyalgia',
     'KOAH Hastalığı'=>'COPD Disease',
     'Metafizik Unsurlar'=>'Metaphysical Elements',
     'Madde Bağımlılığı'=>'Substance Addiction',
     'Saç Tedavisi (Frekans Yöntemi)'=>'Hair Treatment (Frequency Method)',
     'Saç Tedavisi'=>'Hair Treatment',
     'Yaşam Koçluğu'=>'Life Coaching',
     'Bioenerji'=>'Bioenergy',
     'Bağırsak Tembelliği'=>'Bioenergy',
     'Estetik ve Cilt Tedavisi'=>'Aesthetic and Skin Treatment',
     'Göz Tedavisi (Frekans Yöntemi)'=>'Eye Treatment (Frequency Method)',
     'KOLIT'=>'Colitis',
     'Multipl skleroz'=>'Multiple sclerosis',
     'Mineral Eksikliği'=>'Mineral Deficiency',
     'Terapi (Duygusal ve Zihinsel)'=>'Therapy (Emotional and Mental)',
     'Zona Hastalığı'=>'Shingles',
     'Zona'=>'Shingles',
     'Bel ve Boyun Fıtığı Tedavisi'=>'Waist and Neck Hernia Treatment',
     'Bel ve Boyun Fıtığı'=>'Waist and Neck Hernia',
     'Bilinçaltı Temizliği'=>'Subconscious Cleansing',
     'Epilepsi'=>'Epilepsy',
     'Kısmi Felç Tedavisi'=>'Partial Stroke Treatment',
     'Kısmi Felç'=>'Partial Stroke',
     'Motivasyon Artırım'=>'Motivation Increase',
     'Menisküs Tedavisi'=>'Meniscus Therapy',
     'Menisküs'=>'Meniscus',
     'Migren'=>'Migraine',
     'Uyku Apnesi'=>'Sleep Apnea',
     'main_title'=>'Get rid of Diseases with Metaphysics and Bioenergy Sessions',
     'about_footer'=> 'Selahattin AKKAYA was born in 1966 in Erzurum. He completed his education and training in Istanbul. He provides this service globally. AKKAYA has the necessary knowledge, experience and reference.',
     'L9hyI-UYZ2E'=>'Fight Against Cancer and Beat | How Can I Beat Cancer? | Believe and Try This Method',
     'yq-48XFGuso'=>'EYE TREATMENT',
     'xklD_AZqXJA'=>'Ending Epilepsy Seizures',
     'u1-2OjkpR8Y'=>'MIRACLE!!! SURVIVED FROM HIS ALL ADDICTED BAD HABITS',
     'Yaşam Koçluğu'=>'Life Coaching',
     'contact_us'=>'
     This number is available only for whatsapp chats and callings. It is not available to call it directly by cellular. 
     You can call or write through whatsapp.
     Working ours everyday between 10:00 and 17:00, except Friday. If you want to call please call only in working hours and by using whatsapp.
     If you want to write us you can write anytime you want. We will read and reply as soon as possible. 
     ',
     'contact_us_direct'=>'(It is not available to call outside of whatsapp. You can write or call only by using whatsapp.)',
     'address'=>'Yenibosna centeral neighborhood güneşli Yolu str. no 2/3 h block floor 2 ofice 27 houses of ikebana-Bahçelievler Istanbul Turkey',
     'about_us'=>'WHO IS SELAHATTIN AKKAYA?',
     'about_us_desc'=>'
            Selahattin AKKAYA was born in 1966 in Erzurum. He completed his education in Istanbul. 
            He provides this service globally. AKKAYA has the necessary knowledge, experience and reference in this speciality.
            <b><u>He specializes in metaphysics, bioenergy and frequency therapy.</b></u>
                <b>
                    <u>
                    Akkaya manages these processes in the light of science by giving importance to all possibilities in the diagnosis and treatment process of patients.
                    </u>
                </b>
            </br>
            Akkaya has made his name known to the world as a result of the studies he has made both in Turkey and abroad in his fields of expertise.<br/>
            S.Akkaya serves a variety of trainings to contribute of development of this area in Turkey.
     '
];

function lang($key, $default=null){
    global $words;

    if($_GET['lang']=='en'){
        $word = $words[$key];
        if(!$word) return $key;
        return $word;
    }else{
        if($default!=null) return $default;
        return $key;
    }
}

function get_link($lnk){
    $lang = $_GET['lang'];
    if($lang=='en'){
        if(strpos($lnk, '?') == false){
            $lnk .='?lang='.$lang;
        }else{
            $lnk .='&lang='.$lang;
        }
    }
    return $lnk;
}

function get_flag($actual_link, $lang){

    if(strpos($actual_link, 'lang=') !== false){
        $actual_link = str_replace('lang=en','lang='.$lang, $actual_link);
        $actual_link = str_replace('lang=tr','lang='.$lang, $actual_link);
    } else if(strpos($actual_link, '?') !== false){
        $actual_link = $actual_link.'&lang='.$lang;
    }else{
        $actual_link = $actual_link.'?lang='.$lang;
    }

    return $actual_link;
}