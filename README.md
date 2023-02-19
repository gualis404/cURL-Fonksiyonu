# cURL-Fonksiyonu

Bu PHP fonksiyonu, verilen URL'ye bir istek göndermek için cURL kütüphanesini kullanır. 
<br>
İsteğin yöntemi (GET veya POST), veri (isteğe bağlı) ve sıkıştırma kodlaması (isteğe bağlı) gibi seçenekleri yapılandırmak için parametreler alır. 
<br>
Bu fonksiyon, curl_exec() işlevini kullanarak isteği gönderir ve sunucudan gelen yanıtı bir değişkende saklar. 
<br>
Son olarak, curl_close() işleviyle curl oturumunu kapatır ve sunucudan gelen yanıtı döndürür. 
<br>
Bu fonksiyon, verilen URL'ye GET veya POST isteği yapmak için kullanılabilir ve sunucudan gelen yanıtı almak için kullanılabilir.
