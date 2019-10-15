<?php

 $words=[
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
     'Hastalarımızın Yorumları'=>'Reviews of Our Patients',
     'HASTALARIMIZIN DILINDEN'=>'REVIEWS OF OUR PATIENTS',
     'DIĞER HASTALARIMIZI DA DINLEYIN'=>'LISTEN TO OTHER PATIENTS',
     'Selahattin Akkaya Kimdir'=>'Who Is Selahattin Akkaya',
     'Sosyal Medyada Bizi Takib Edin'=>'Follow Us',
     'Iletişime Geçin'=>'Contact Us',
     'tr'=>'en',
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
     'Yaşam Koçluğu'=>'Life Coaching'

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