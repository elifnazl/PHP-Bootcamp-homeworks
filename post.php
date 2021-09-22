<?php

/****************************** ODEV **************************
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 
****************************** ODEV **************************/

include_once "functions.php"; //functions.php'yi cektim.

if (var_dump(isset($id))==false):
  $id=1;
if (var_dump(isset($title))==false):
  $title="yazı";
if (var_dump(isset($type))==false):
  $type="urgent";

switch ($type) { 
    case "urgent":
        $color = "red";
        break;
    case "warning":
        $color = "yellow";
        break;
    case "normal":
        $color = "null";
        break;
}
?>
<div style="background-color:<?php echo $color ?>;"><?php getPostDetails($id,$title);?></div>
