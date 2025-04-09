<?php
$currentPage = 'autoclub-page';
$pageTitle = 'Meg Otomotiv - AutoClub Marintürk';
?>
<!DOCTYPE html>
<html lang="tr" class="light">
<!-- Üstteki meta ve head bölümü index.php ile aynı, sadece title değişecek -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    
    <!-- Meta, CSS ve diğer head içeriği - index.php'den kopyalayın -->
    
</head>
<body>
    <!-- Body içeriği - index.php'den kopyalayın -->
    
    <script>
        // Sayfa yüklendiğinde AutoClub sayfasını göster
        document.addEventListener('DOMContentLoaded', function() {
            showPage('<?php echo $currentPage; ?>');
            
            // Menü aktifliğini güncelle
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            
            // AutoClub menü linkini aktif et
            if (document.getElementById('autoclub-nav')) {
                document.getElementById('autoclub-nav').classList.add('active');
            }
            
            // Diğer JavaScript kodları - index.php'den kopyalayın
        });
    </script>
</body>
</html>
