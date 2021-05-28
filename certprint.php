<?php
$color = imagecolorallocate($img, 0, 0, 0);
$color1 = imagecolorallocate($img, 255, 0, 0);
// указываем путь к шрифту
$font = 'assets/fonts/arialmt.ttf';
$font1 = 'assets/fonts/arial-boldmt.ttf';
$font2='assets/fonts/ofont.ru_Garamond cond.ttf';
$font3='assets/fonts/tnr.ttf';
$font4='assets/fonts/calibri.ttf';
$font5='assets/fonts/tnrb.ttf';
 $tar=explode('br',$cert_.>title);
 imagettftext($img, 37, 0, 456, 347, $color, $font3, 'Автономная некоммерческая организация');
 imagettftext($img, 37, 0, 351, 405, $color, $font3, 'дополнительного профессионального образования');
 imagettftext($img, 37, 0, 464, 463, $color, $font3, '«Богословская Семинария» в г. Москве');
  imagettftext($img, 30, 0, 364, 551, $color, $font4, 'Лицензия на осуществление');
   imagettftext($img, 30, 0, 364, 601, $color, $font4, 'образовательной деятельности № 40776 ');
    imagettftext($img, 30, 0, 364, 651, $color, $font4, 'от 28 мая 2020 года');
 imagettftext($img, 55, 0,607, 1087, $color, $font5, 'СЕРТИФИКАТ');
      imagettftext($img, 35, 0, 528, 1197, $color, $font5, 'о дополнительном образовании');
imagettftext($img, 30, 0, 588, 2191, $color, $font3, 'Регистрационный номер '.$cert->number);
imagettftext($img, 30, 0, 1988, 2191, $color, $font3, ' Дата выдачи: '.$cert->date);
imagettftext($img, 35, 0, 1936, 399, $color, $font3, 'Настоящий сертификат подтверждает, что');
$passed='успешно прошел(ла) обучение в';
if(file_exists(('protected/data/personalfiles/'.$student->id))){
    $prof= json_decode(file_get_contents('protected/data/personalfiles/'.$student->id), true);
    $passed=$prof['sex']=='женский'?'прошла обучение '.$cert->terms.' в':$passed;
    $passed=$prof['sex']=='мужской'?'прошел обучение '.$cert->terms.' в':$passed;
}
imagettftext($img, 35, 0, 1936, 756, $color, $font3, $passed);
imagettftext($img, 40, 0, 2073, 900, $color, $font5, 'Богословской Семинарии ');
imagettftext($img, 35, 0,1990, 1026, $color, $font5, 'по программе дополнительного образования ');
$name=$student->lastname.' '.$student->name.' '.$student->fname;


if(false){
imagettftext($img, 37, 0, 2273, 530, $color, $font1, $dlname);
imagettftext($img, 37, 0, 2186, 613, $color, $font1, $dname);
}else{
    
imagettftext($img, 43, 0, 2073, 590, $color, $font2, $name);
    
}
$vert=1168;
foreach($tar as $v){
  
imagettftext($img, 45, 0, 1990, $vert, $color, $font2, $v);
$vert+=75;   
}
imagettftext($img, 35, 0, 2584, 1782, $color, $font4, RECTOR);
imagettftext($img, 35, 0, 2570, 1882, $color, $font4, SECRETARY);
imagettftext($img, 35, 0, 2140, 1882, $color, $font3, 'МП');

imagettftext($img, 35, 0, 1936, 1437, $color, $font3, 'в объеме '.$cert->hours.' академических часов');

?>