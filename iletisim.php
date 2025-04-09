<?php
// Sayfa değişkenleri
$current_page = 'iletisim';
$page_title = 'İletişim';
$page_description = 'Meg Otomotiv ile iletişime geçin. Adres, telefon ve e-posta bilgilerimizi bulabilir, mesaj gönderebilirsiniz.';

// Formdan gelen verileri kontrol et
$message_sent = false;
$form_error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $name = isset($_POST['name']) ? clean_input($_POST['name']) : '';
    $email = isset($_POST['email']) ? clean_input($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? clean_input($_POST['subject']) : '';
    $message = isset($_POST['message']) ? clean_input($_POST['message']) : '';
    $phone = isset($_POST['phone']) ? clean_input($_POST['phone']) : '';
    
    // Basit doğrulama
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $form_error = 'Lütfen tüm zorunlu alanları doldurun.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_error = 'Lütfen geçerli bir e-posta adresi girin.';
    } else {
        // Mesajı veritabanına kaydet
        require_once "../includes/functions.php";
        
        if (save_contact_message($name, $email, $subject, $message, $phone)) {
            $message_sent = true;
            
            // Form alanlarını temizle
            $name = $email = $subject = $message = $phone = '';
        } else {
            $form_error = 'Mesajınız gönderilirken bir hata oluştu. Lütfen daha sonra tekrar deneyin.';
        }
    }
}

// İlgili dosyaları ekle
require_once "../includes/header.php";
?>

<!-- İletişim Bölümü Header -->
<section class="page-header bg-gray-800 text-white py-20">
    <div class="container">
        <h1 class="text-4xl font-bold text-center mb-4">İletişim</h1>
        <p class="text-xl text-center max-w-2xl mx-auto">Sorularınız, önerileriniz veya işbirliği teklifleriniz için bizimle iletişime geçebilirsiniz.</p>
    </div>
</section>

<!-- İletişim Bölümü -->
<section class="section py-16">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="reveal" style="--delay: 0.2s;">
                <h3 class="text-2xl font-bold mb-6" style="color: var(--meg-primary);">İletişim Bilgileri</h3>
                
                <div class="mb-6">
                    <h4 class="text-xl font-semibold mb-4">Merkez Ofis</h4>
                    <p class="flex items-start mb-3">
                        <i class="fas fa-map-marker-alt mt-1 mr-3" style="color: var(--meg-primary);"></i>
                        <span><?php echo get_setting('contact_address', 'Batı, Marintürk İstanbul City Port, 34890 Pendik/İstanbul'); ?></span>
                    </p>
                    <p class="flex items-start mb-3">
                        <i class="fas fa-phone-alt mt-1 mr-3" style="color: var(--meg-primary);"></i>
                        <span><?php echo get_setting('contact_phone', '+90 530 505 2251'); ?></span>
                    </p>
                    <p class="flex items-start mb-3">
                        <i class="fas fa-phone-alt mt-1 mr-3" style="color: var(--meg-primary);"></i>
                        <span><?php echo get_setting('contact_phone2', '+90 216 483 6353'); ?></span>
                    </p>
                    <p class="flex items-start mb-3">
                        <i class="fas fa-envelope mt-1 mr-3" style="color: var(--meg-primary);"></i>
                        <span><?php echo get_setting('contact_email', 'info@megotomotiv.net'); ?></span>
                    </p>
                </div>
                
                <div class="mb-8">
                    <h4 class="text-xl font-semibold mb-4">Çalışma Saatleri</h4>
                    <p class="flex justify-between border-b border-gray-200 py-2">
                        <span>Haftanın Her Günü</span>
                        <span>09:00 - 23:00</span>
                    </p>
                </div>
                
                <div class="social-icons mb-8">
                    <a href="<?php echo get_setting('facebook_url', '#'); ?>" target="_blank" class="social-icon" style="background-color: var(--meg-primary);"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php echo get_setting('instagram_url', '#'); ?>" target="_blank" class="social-icon" style="background-color: var(--meg-primary);"><i class="fab fa-instagram"></i></a>
                </div>
                
                <!-- Harita -->
                <div class="mt-8">
                    <h4 class="text-xl font-semibold mb-4">Konum</h4>
                    <div class="w-full h-64 bg-gray-300 rounded-lg overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3014.4862432572834!2d29.1186853!3d40.928376999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac79a66644c33%3A0x7ea6dfd8293e8c80!2sMarin%20T%C3%BCrk%20City%20Port!5e0!3m2!1str!2str!4v1679316122332!5m2!1str!2str" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            
            <div class="reveal" style="--delay: 0.4s;">
                <h3 class="text-2xl font-bold mb-6" style="color: var(--meg-primary);">Bize Yazın</h3>
                
                <?php if ($message_sent): ?>
                <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-6">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-xl mr-2"></i>
                        <span>Mesajınız başarıyla gönderildi. En kısa sürede sizinle iletişime geçeceğiz.</span>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if ($form_error): ?>
                <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-6">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-circle text-xl mr-2"></i>
                        <span><?php echo $form_error; ?></span>
                    </div>
                </div>
                <?php endif; ?>
                
                <form method="post" action="iletisim.php" id="contactForm">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="name" class="block mb-2 font-semibold">Adınız*</label>
                            <input type="text" id="name" name="name" value="<?php echo isset($name) ? $name : ''; ?>" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 font-semibold">E-posta Adresiniz*</label>
                            <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="phone" class="block mb-2 font-semibold">Telefon Numaranız</label>
                        <input type="tel" id="phone" name="phone" value="<?php echo isset($phone) ? $phone : ''; ?>" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    
                    <div class="mb-4">
                        <label for="subject" class="block mb-2 font-semibold">Konu*</label>
                        <input type="text" id="subject" name="subject" value="<?php echo isset($subject) ? $subject : ''; ?>" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    
                    <div class="mb-4">
                        <label for="message" class="block mb-2 font-semibold">Mesajınız*</label>
                        <textarea id="message" name="message" rows="5" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"><?php echo isset($message) ? $message : ''; ?></textarea>
                    </div>
                    
                    <div class="mb-4">
                        <p class="text-sm text-gray-500">* Zorunlu alanlar</p>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-full py-3">Mesaj Gönder</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
// Footer'ı dahil et
require_once "../includes/footer.php";
?>
