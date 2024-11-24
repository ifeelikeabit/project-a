function updateTime() {
    var now = new Date(); // Mevcut tarih ve saat
    var hours = now.getHours().toString().padStart(2, "0"); // Saat
    var minutes = now.getMinutes().toString().padStart(2, "0"); // Dakika
    var seconds = now.getSeconds().toString().padStart(2, "0"); // Saniye

    // Saatin HTML elementine yazılması
    document.getElementById("clock").innerHTML =
        hours + ":" + minutes + ":" + seconds;
}

// Sayfa yüklendiğinde updateTime fonksiyonunu çalıştır
window.onload = function () {
    updateTime(); // İlk yükleme için bir kere çalıştır
    setInterval(updateTime, 1000); // Her saniye updateTime fonksiyonunu çağır
};
