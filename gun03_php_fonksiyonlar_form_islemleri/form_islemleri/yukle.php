<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['resim'])) {
        $dosyaAdi = $_FILES['resim']['name'];
        $tmpName = $_FILES['resim']['tmp_name'];
        
        //klasör yoksa 
        if (!is_dir("uploads")) {
    mkdir("uploads", 0777, true); // 0777 izin verir, true: alt dizinleri de oluşturur
}

        move_uploaded_file($tmpName, "uploads/" . $dosyaAdi);
        echo "Dosya yüklendi: $dosyaAdi";
    }
}
?>