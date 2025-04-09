<?php
// Sayfa başlığını oluşturma
function page_title($title = "") {
    if (empty($title)) {
        return SITE_TITLE;
    } else {
        return SITE_TITLE . " - " . $title;
    }
}

// URL'yi temizleme ve güvenli hale getirme
function clean_url($string) {
    // Türkçe karakterleri değiştirme
    $string = str_replace(
        ['ı', 'ğ', 'ü', 'ş', 'ö', 'ç', 'İ', 'Ğ', 'Ü', 'Ş', 'Ö', 'Ç'], 
        ['i', 'g', 'u', 's', 'o', 'c', 'i', 'g', 'u', 's', 'o', 'c'], 
        $string
    );
    
    // Boşlukları tire ile değiştirme ve küçük harfe çevirme
    $string = strtolower(trim(preg_replace('/[^a-zA-Z0-9-]/', '-', $string), '-'));
    
    // Birden fazla tireyi tek tireye dönüştürme
    return preg_replace('/-+/', '-', $string);
}

// XSS saldırılarına karşı girdiyi temizleme
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Tarih formatını değiştirme
function format_date($date, $format = 'd.m.Y') {
    return date($format, strtotime($date));
}

// Kısa açıklama oluşturma (metin kısaltma)
function create_excerpt($text, $length = 150) {
    // HTML etiketlerini kaldırma
    $text = strip_tags($text);
    
    if (strlen($text) > $length) {
        $text = substr($text, 0, $length) . '...';
    }
    
    return $text;
}

// Oturum kontrolü (admin paneli için)
function is_logged_in() {
    return isset($_SESSION['user_id']);
}

// Redirect fonksiyonu
function redirect($url) {
    header("Location: " . $url);
    exit;
}

// Tüm iş kollarını getir
function get_all_businesses($active_only = true) {
    $sql = "SELECT * FROM businesses";
    
    if ($active_only) {
        $sql .= " WHERE is_active = 1";
    }
    
    $sql .= " ORDER BY sort_order ASC";
    
    return db_fetch_all($sql);
}

// Bir iş kolunu ID ile getir
function get_business_by_id($id) {
    $id = (int) $id;
    $sql = "SELECT * FROM businesses WHERE id = $id";
    return db_fetch_row($sql);
}

// Bir iş kolunu slug ile getir
function get_business_by_slug($slug) {
    $slug = db_escape($slug);
    $sql = "SELECT * FROM businesses WHERE slug = '$slug'";
    return db_fetch_row($sql);
}

// Bir iş kolunun hizmetlerini getir
function get_business_services($business_id, $active_only = true) {
    $business_id = (int) $business_id;
    $sql = "SELECT * FROM services WHERE business_id = $business_id";
    
    if ($active_only) {
        $sql .= " AND is_active = 1";
    }
    
    $sql .= " ORDER BY sort_order ASC";
    
    return db_fetch_all($sql);
}

// İletişim formu gönderimi
function save_contact_message($name, $email, $subject, $message, $phone = '') {
    $name = db_escape($name);
    $email = db_escape($email);
    $subject = db_escape($subject);
    $message = db_escape($message);
    $phone = db_escape($phone);
    
    $sql = "INSERT INTO contact_messages (name, email, subject, message, phone) 
            VALUES ('$name', '$email', '$subject', '$message', '$phone')";
    
    return db_query($sql);
}

// Site ayarlarını getir
function get_settings() {
    static $settings = null;
    
    if ($settings === null) {
        try {
            $sql = "SELECT setting_key, setting_value FROM settings";
            $result = db_query($sql);
            
            $settings = [];
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $settings[$row['setting_key']] = $row['setting_value'];
                }
                $result->free();
            }
        } catch (Exception $e) {
            // Veritabanı bağlantısı yoksa varsayılan değerleri kullan
            $settings = [
                'site_title' => SITE_TITLE,
                'site_description' => 'Meg Otomotiv',
                'contact_email' => 'info@megotomotiv.net',
                'contact_phone' => '+90 530 505 2251'
            ];
        }
    }
    
    return $settings;
}

// Belirli bir ayarı al
function get_setting($key, $default = '') {
    $settings = get_settings();
    return isset($settings[$key]) ? $settings[$key] : $default;
}
?>
