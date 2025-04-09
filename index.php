<?php
// Ana sayfa için ayarlar
$currentPage = 'home-page';
$pageTitle = 'Meg Otomotiv - Ana Sayfa';
?>
<!DOCTYPE html>
<html lang="tr" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="Meg Otomotiv, AutoClub Marintürk, Dryclean Express, GoMarine ve VIP Taşıma markalarıyla otomotiv, denizcilik ve temizlik sektörlerinde profesyonel hizmetler sunan öncü bir şirkettir. Oto yıkama, kuru temizleme, tekne taşımacılığı, bakım ve VIP taşıma çözümleri.">
    <meta name="keywords" content="Meg Otomotiv, AutoClub Marintürk, Dryclean Express Marintürk, GoMarine, Marintürk Tekne Bakım, VIP Taşıma, Tır Tekne Taşıma, Oto Yıkama, Car Care, Detaylı Araç Bakım, Seramik Kaplama, Boya Koruma, İç Temizlik, Cam Filmi, Araç Kaplama, Kuru Temizleme, Organik Kuru Temizleme, Leke Çıkarma, Terzi Hizmetleri, Ev Tekstil Temizliği, Tekne Tekstil Temizliği, Tekne Taşımacılığı, Yat Taşımacılığı, Sigortalı Taşımacılık, Tekne Bakımı, Su Altı Temizliği, Gelcoat İşlemleri, Periyodik Bakım, Limuzin Hizmeti, Şoförlü Kiralama, Kurumsal Transfer, Havalimanı Transfer, Düğün Paketleri, Şehirlerarası Yolculuk, Nostaljik Otobüs, Modern Otobüs">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Turkish">
    <meta name="author" content="Meg Otomotiv">
    <meta name="revisit-after" content="7 days">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.megotomotiv.net/">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.megotomotiv.net/">
    <meta property="og:title" content="Meg Otomotiv - Ana Sayfa">
    <meta property="og:description" content="Meg Otomotiv olarak AutoClub Marintürk, Dryclean Express, GoMarine ve VIP Taşıma markalarımızla otomotiv, denizcilik ve temizlik sektörlerinde profesyonel hizmetler sunuyoruz. Oto yıkama, kuru temizleme, tekne taşımacılığı, bakım ve VIP taşıma çözümleri.">
    <meta property="og:image" content="https://pfst.cf2.poecdn.net/base/image/20b899e536f80ef9869ec84c7df93278fdc2f82f180de15c5655f43272145b00?w=963&h=834">
    <meta property="og:site_name" content="Meg Otomotiv">
    <meta property="og:locale" content="tr_TR">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.megotomotiv.net/">
    <meta name="twitter:title" content="Meg Otomotiv - Ana Sayfa">
    <meta name="twitter:description" content="Meg Otomotiv olarak AutoClub Marintürk, Dryclean Express, GoMarine ve VIP Taşıma markalarımızla otomotiv, denizcilik ve temizlik sektörlerinde profesyonel hizmetler sunuyoruz. Oto yıkama, kuru temizleme, tekne taşımacılığı, bakım ve VIP taşıma çözümleri.">
    <meta name="twitter:image" content="https://pfst.cf2.poecdn.net/base/image/20b899e536f80ef9869ec84c7df93278fdc2f82f180de15c5655f43272145b00?w=963&h=834">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- CSS Styles -->
    <style>
        :root {
            /* Ana Renkler - Meg Otomotiv (Kırmızı ve Siyah) */
            --meg-primary: rgba(225, 29, 72, 0.8);
            --meg-secondary: rgba(244, 63, 94, 0.8);
            --meg-accent: rgba(251, 113, 133, 0.8);
            --meg-light: #fff1f2;
            --meg-dark: #1c1917;
            
            /* AutoClub Renkleri (Turuncu) - Saydamlık eklendi */
            --auto-primary: rgba(234, 88, 12, 0.8);
            --auto-secondary: rgba(249, 115, 22, 0.8);
            --auto-accent: rgba(253, 186, 116, 0.8);
            --auto-light: #fff7ed;
            --auto-dark: #9a3412;
            
            /* Dryclean Express Renkleri (Mavi ve Beyaz) - Saydamlık eklendi */
            --dry-primary: rgba(29, 78, 216, 0.8);
            --dry-secondary: rgba(59, 130, 246, 0.8);
            --dry-accent: rgba(147, 197, 253, 0.8);
            --dry-light: #eff6ff;
            --dry-dark: #1e3a8a;
            
            /* GoMarine Renkleri (Turkuaz ve Beyaz) - Saydamlık eklendi */
            --marine-primary: rgba(8, 145, 178, 0.8);
            --marine-secondary: rgba(6, 182, 212, 0.8);
            --marine-accent: rgba(103, 232, 249, 0.8);
            --marine-light: #ecfeff;
            --marine-dark: #155e75;
            
            /* Meg Tekne Hizmetleri Renkleri (Turkuaz ve Siyah) - Saydamlık eklendi */
            --boat-primary: rgba(14, 116, 144, 0.8);
            --boat-secondary: rgba(6, 182, 212, 0.8);
            --boat-accent: rgba(34, 211, 238, 0.8);
            --boat-light: #cffafe;
            --boat-dark: #1c1917;
            
            /* Meg VIP Taşıma Renkleri (Siyah ve Altın) - Saydamlık eklendi */
            --vip-primary: rgba(133, 77, 14, 0.8);
            --vip-secondary: rgba(161, 98, 7, 0.8);
            --vip-accent: rgba(250, 204, 21, 0.8);
            --vip-light: #fef9c3;
            --vip-dark: #1c1917;
            
            /* Dark Mode Colors */
            --bg-light: #ffffff;
            --text-light: #333333;
            --card-light: #ffffff;
            --border-light: #e5e7eb;
            
            --bg-dark: #121212;
            --text-dark: #f3f4f6;
            --card-dark: #1e1e1e;
            --border-dark: #2d2d2d;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-light);
            line-height: 1.6;
            background-color: var(--bg-light);
        }
        
        html.dark body {
            color: var(--text-dark);
            background-color: var(--bg-dark);
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        /* Logo Styles */
        .real-logo {
            height: 50px;
            width: auto;
            object-fit: contain;
        }
        
        .autoclub-logo, .dryclean-logo, .gomarine-logo, .megboat-logo, .viptransport-logo {
            height: 50px;
            width: 200px;
            object-fit: contain;
            display: inline-block;
        }
        
        .hero-logo {
            height: 65px;
            width: 268px;
            object-fit: contain;
            margin-bottom: 20px;
        }
        
        .meg-logo {
            height: 40px;
            width: auto;
            object-fit: contain;
        }
        
        .meg-logo-lg {
            height: 60px;
            width: auto;
            object-fit: contain;
        }
        
        .card-logo {
            position: absolute;
            top: -30px;
            left: 15px;
            z-index: 2;
            background: var(--card-light);
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        html.dark .card-logo {
            background: var(--card-dark);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        
        .card-logo img {
            width: 80%;
            height: 80%;
            object-fit: contain;
        }
        
        .footer-logo {
            height: 30px;
            width: auto;
            margin-right: 10px;
            object-fit: contain;
        }
        
        /* Main Logo */
        .main-logo {
            position: relative;
            display: flex;
            align-items: center;
        }
        
        .logo-text {
            font-family: 'Roboto', sans-serif;
            font-weight: 900;
            letter-spacing: -1px;
            font-size: 1.8rem;
            margin-left: 10px;
            line-height: 1;
        }
        
        .logo-text span {
            display: block;
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 1px;
            color: #666;
        }
        
        html.dark .logo-text span {
            color: #aaa;
        }
        
        .logo-symbol {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: var(--meg-primary);
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
            position: relative;
            overflow: hidden;
        }
        
        .logo-symbol::after {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
        }
        
        /* Service card styles */
        .service-card {
            background-color: var(--card-light);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            z-index: 1;
        }
        
        html.dark .service-card {
            background-color: var(--card-dark);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        html.dark .service-card:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
        }
        
        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(5px);
            z-index: 1040;
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .modal-overlay.show {
            opacity: 1;
        }
        
        .modal-card {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.8);
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
            background-color: var(--card-light);
            border-radius: 10px;
            z-index: 1050;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
            display: none;
            opacity: 0;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }
        
        .modal-card.show {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }
        
        html.dark .modal-card {
            background-color: var(--card-dark);
        }
        
        .modal-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .modal-card .content {
            padding: 2rem;
        }
        
        .close-button {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: var(--auto-primary);
            color: white;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 1rem;
            z-index: 10;
            transition: all 0.2s ease;
        }
        
        .close-button:hover {
            background-color: var(--auto-dark);
            transform: scale(1.1);
        }
        
        .service-icon {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            background-color: var(--auto-light);
            color: var(--auto-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .category-card {
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
            background-color: var(--card-light);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        html.dark .category-card {
            background-color: var(--card-dark);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        
        html.dark .category-card:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
        }
        
        .category-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: var(--auto-primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        /* Dryclean Service Card Styles */
        .dryclean-service-card {
            background-color: var(--card-light);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        html.dark .dryclean-service-card {
            background-color: var(--card-dark);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .dryclean-service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        html.dark .dryclean-service-card:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        }
        
        .advantage-card {
            background-color: var(--card-light);
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        html.dark .advantage-card {
            background-color: var(--card-dark);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .advantage-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background-color: var(--dry-primary);
        }
        
        .advantage-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }
        
        html.dark .advantage-card:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        }
        
        .advantage-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: var(--dry-light);
            color: var(--dry-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        /* Campaign banner */
        .campaign-banner {
            background-color: var(--dry-primary);
            color: white;
            padding: 1.5rem;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        html.dark .campaign-banner {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .campaign-banner::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 100px;
            height: 100px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }
        
        .campaign-banner::after {
            content: '';
            position: absolute;
            bottom: -30px;
            left: -30px;
            width: 60px;
            height: 60px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }
        
        /* Award badge */
        .award-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #ffd700;
            color: #333;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-weight: bold;
            margin-bottom: 1rem;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }
        
        html.dark .award-badge {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.3);
        }
        
        .award-badge i {
            margin-right: 0.5rem;
            color: #b8860b;
        }
        
        /* Header Styles */
        .header {
            background-color: var(--card-light);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        html.dark .header {
            background-color: var(--card-dark);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        
        .header.scrolled {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        
        html.dark .header.scrolled {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }
        
        /* Page Transitions */
        .page-content {
            display: none;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        
        .page-content.active {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Hero Section */
        .hero {
            min-height: 100vh;
            padding-top: 80px;
            display: flex;
            align-items: center;
            position: relative;
            color: white;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(225, 29, 72, 0.5), rgba(28, 25, 23, 0.5));
            z-index: 1;
        }
        
        .hero-bg-grid {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            z-index: 0;
        }
        
        .hero-bg-item {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0.7;
        }
        
        .hero-bg-item:nth-child(1) {
            background-image: url('https://images.unsplash.com/photo-1520340356584-f9917d1eea6f?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80');
            background-color: #553; /* Fallback color */
        }
        
        .hero-bg-item:nth-child(2) {
            background-image: url('https://i.imgur.com/tkCYsNs.jpeg');
            background-color: #555; /* Fallback color */
        }
        
        .hero-bg-item:nth-child(3) {
            background-image: url('https://images.unsplash.com/photo-1545173168-9f1947eebb7f?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80');
            background-color: #557; /* Fallback color */
        }
        
        .hero-bg-item:nth-child(4) {
            background-image: url('https://images.unsplash.com/photo-1593351415075-3bac9f45c877?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80');
            background-color: #477; /* Fallback color */
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        /* Business Cards */
        .business-card {
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            height: 440px; /* Daha fazla alan ekledik */
            display: flex;
            flex-direction: column;
            margin-bottom: 20px; /* Mobil görünümde kartlar arası boşluk */
            background-color: var(--card-light);
        }
        
        html.dark .business-card {
            background-color: var(--card-dark);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
        
        .business-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        
        html.dark .business-card:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        }
        
        .card-image {
            height: 200px;
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
        }
        
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .business-card:hover .card-image img {
            transform: scale(1.1);
        }
        
        .card-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 6px 12px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .card-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
        }
        
        .card-body {
            padding: 1.5rem;
            position: relative;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
        }
        
        /* Buttons */
        .btn {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            z-index: 5;
            position: relative;
        }
        
        .btn-primary {
            background-color: var(--meg-primary);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--meg-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(30, 64, 175, 0.3);
        }
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--meg-primary);
            color: var(--meg-primary);
        }
        
        .btn-outline:hover {
            background-color: var(--meg-primary);
            color: white;
        }
        
        /* Navigation */
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
            color: var(--text-light);
        }
        
        html.dark .nav-link {
            color: var(--text-dark);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--meg-primary);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        .nav-link.active {
            color: var(--meg-primary);
            font-weight: 600;
        }
        
        /* Section Styles */
        .section {
            padding: 100px 0;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
            color: var(--text-light);
        }
        
        html.dark .section-title {
            color: var(--text-dark);
        }
        
        .section-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background-color: var(--meg-secondary);
        }
        
        /* Feature Cards */
        .feature-card {
            padding: 2rem;
            border-radius: 12px;
            background-color: var(--card-light);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        html.dark .feature-card {
            background-color: var(--card-dark);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        html.dark .feature-card:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            background-color: var(--meg-light);
            color: var(--meg-primary);
            font-size: 1.8rem;
        }
        
        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-light);
        }
        
        html.dark .mobile-menu-toggle {
            color: var(--text-dark);
        }
        
        .mobile-menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.95);
            z-index: 1001;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transform: translateY(-100%);
            transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0);
            overflow-y: auto;
        }
        
        .mobile-menu.open {
            transform: translateY(0);
        }
        
        .mobile-menu-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: white;
            cursor: pointer;
            padding: 10px;
            z-index: 1002;
        }
        
        .mobile-nav-links {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
            width: 100%;
        }
        
        .mobile-nav-links li {
            margin-bottom: 20px;
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.3s ease;
            transition-delay: calc(var(--i) * 0.1s);
        }
        
        .mobile-menu.open .mobile-nav-links li {
            transform: translateY(0);
            opacity: 1;
        }
        
        .mobile-nav-links a {
            color: white;
            font-size: 1.5rem;
            text-decoration: none;
            transition: all 0.3s ease;
            padding: 10px;
            display: inline-block;
        }
        
        .mobile-nav-links a:hover {
            color: var(--meg-secondary);
        }
        
        .mobile-business-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 30px;
        }
        
        .mobile-business-links a {
            margin: 10px;
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .mobile-business-links a:hover {
            background-color: var(--meg-secondary);
        }
        
        /* Dark mode toggle */
        .dark-mode-toggle {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
            color: var(--text-light);
            transition: all 0.3s ease;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 990;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: var(--card-light);
        }
        
        html.dark .dark-mode-toggle {
            color: var(--text-dark);
            background-color: var(--card-dark);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        
        .dark-mode-toggle:hover {
            transform: scale(1.1);
        }
        
        /* Back to top button */
        .back-to-top {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background-color: var(--meg-primary);
            color: white;
            position: fixed;
            bottom: 20px;
            right: 70px;
            z-index: 990;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }
        
        .back-to-top.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .back-to-top:hover {
            background-color: var(--meg-dark);
            transform: translateY(-3px);
        }
        
        /* Loading indicator */
        .loading-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--meg-primary);
            z-index: 2000;
            transform-origin: left;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        
        .loading-indicator.loading {
            animation: loading 2s infinite ease-in-out;
        }
        
        @keyframes loading {
            0% { transform: scaleX(0); }
            50% { transform: scaleX(0.5); }
            100% { transform: scaleX(0); transform-origin: right; }
        }
        
        /* Form styles */
        .form-input {
            width: 100%;
            background-color: var(--card-light);
            color: var(--text-light);
            padding: 1rem;
            border-radius: 8px;
            border: 1px solid var(--border-light);
            transition: all 0.3s ease;
        }
        
        html.dark .form-input {
            background-color: var(--card-dark);
            color: var(--text-dark);
            border-color: var(--border-dark);
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--meg-primary);
            box-shadow: 0 0 0 3px rgba(225, 29, 72, 0.2);
        }
        
        html.dark .form-input:focus {
            box-shadow: 0 0 0 3px rgba(225, 29, 72, 0.4);
        }
        
        /* Highlight text color in dark mode */
        html.dark .text-gray-600 {
            color: #a1a1aa !important;
        }
        
        html.dark .bg-gray-50,
        html.dark .bg-gray-100 {
            background-color: #1f1f1f !important;
        }
        
        /* Lazy Load Images */
        .lazy-image {
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .lazy-image.loaded {
            opacity: 1;
        }
        
        /* Success and error messages */
        .form-message {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            animation: slideDown 0.3s ease forwards;
        }
        
        .form-message i {
            margin-right: 0.5rem;
            font-size: 1.2rem;
        }
        
        .form-message.success {
            background-color: #dcfce7;
            color: #166534;
        }
        
        html.dark .form-message.success {
            background-color: #065f46;
            color: #d1fae5;
        }
        
        .form-message.error {
            background-color: #fee2e2;
            color: #b91c1c;
        }
        
        html.dark .form-message.error {
            background-color: #7f1d1d;
            color: #fecaca;
        }
        
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .desktop-nav {
                display: none;
            }
            
            .mobile-menu-toggle {
                display: block;
            }
            
            .header {
                padding: 1rem;
            }
            
            .section {
                padding: 70px 0;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .business-card {
                margin-bottom: 2rem;
            }
            
            .real-logo, .autoclub-logo, .dryclean-logo, .gomarine-logo, .megboat-logo, .viptransport-logo {
                height: 40px;
            }
            
            .hero-logo {
                height: 60px;
            }
            
            .dark-mode-toggle {
                bottom: 15px;
                right: 15px;
            }
            
            .back-to-top {
                bottom: 15px;
                right: 65px;
            }
        }
        
        /* Animations */
        .fade-in {
            animation: fadeIn 1s ease forwards;
        }
        
        .fade-up {
            animation: fadeUp 1s ease forwards;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Pulse animation for interactive elements */
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
        
        /* Scroll-based animations */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Gold accents for VIP Transport */
        .viptransport-gold-accent {
            background: linear-gradient(45deg, #854d0e, #ca8a04, #facc15);
            background-size: 200% 200%;
            animation: goldShine 4s ease infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
        }

        @keyframes goldShine {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .gold-border {
            border: 2px solid var(--vip-accent);
        }
        
        /* Footer */
        .footer {
            background-color: #0f172a;
            color: white;
            padding: 80px 0 30px;
        }
        
        .footer-title {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }
        
        .footer-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 30px;
            height: 3px;
            background-color: var(--meg-secondary);
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background-color: var(--meg-secondary);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <!-- Loading Indicator -->
    <div class="loading-indicator" id="loadingIndicator"></div>

    <!-- Header -->
    <header class="header py-4">
        <div class="container">
            <div class="flex justify-between items-center">
                <a href="index.php" class="logo main-logo" id="home-link">
                    <img src="https://pfst.cf2.poecdn.net/base/image/20b899e536f80ef9869ec84c7df93278fdc2f82f180de15c5655f43272145b00?w=963&h=834" alt="Meg Otomotiv Logo" class="meg-logo">
                </a>
                
                <!-- Desktop Navigation -->
                <nav class="desktop-nav hidden md:block">
                    <ul class="flex space-x-5">
                        <li><a href="index.php" class="nav-link active" id="home-nav">Ana Sayfa</a></li>
                        <li><a href="autoclub.php" class="nav-link" id="autoclub-nav">AutoClub Marintürk</a></li>
                        <li><a href="dryclean.php" class="nav-link" id="dryclean-nav">Dry Clean Express</a></li>
                        <li><a href="gomarine.php" class="nav-link" id="gomarine-nav">GoMarine</a></li>
                        <li><a href="megboat.php" class="nav-link" id="megboat-nav">Meg Tekne</a></li>
                        <li><a href="viptransport.php" class="nav-link" id="viptransport-nav">Meg VIP Taşıma</a></li>
                        <li><a href="#contact" class="btn btn-primary py-2 px-4">İletişim</a></li>
                    </ul>
                </nav>
                
                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" aria-label="Open mobile menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>
    
    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <button class="mobile-menu-close" aria-label="Close mobile menu">
            <i class="fas fa-times"></i>
        </button>
        
        <ul class="mobile-nav-links">
            <li style="--i:1;"><a href="index.php" class="mobile-nav-link" id="mobile-home-nav">Ana Sayfa</a></li>
            <li style="--i:2;"><a href="autoclub.php" class="mobile-nav-link" id="mobile-autoclub-nav">AutoClub Marintürk</a></li>
            <li style="--i:3;"><a href="dryclean.php" class="mobile-nav-link" id="mobile-dryclean-nav">Dry Clean Express</a></li>
            <li style="--i:4;"><a href="gomarine.php" class="mobile-nav-link" id="mobile-gomarine-nav">GoMarine</a></li>
            <li style="--i:5;"><a href="megboat.php" class="mobile-nav-link" id="mobile-megboat-nav">Meg Tekne</a></li>
            <li style="--i:6;"><a href="viptransport.php" class="mobile-nav-link" id="mobile-viptransport-nav">Meg VIP Taşıma</a></li>
            <li style="--i:7;"><a href="#contact" class="mobile-nav-link">İletişim</a></li>
        </ul>
    </div>
    
    <!-- Main Content -->
    <main>
        <!-- Home Page -->
        <div id="home-page" class="page-content active">
            <!-- Hero Section -->
            <section class="hero">
                <div class="hero-bg-grid">
                    <div class="hero-bg-item lazy-image" data-src="https://images.unsplash.com/photo-1520340356584-f9917d1eea6f?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80"></div>
                    <div class="hero-bg-item lazy-image" data-src="https://i.imgur.com/tkCYsNs.jpeg"></div>
                    <div class="hero-bg-item lazy-image" data-src="https://images.unsplash.com/photo-1545173168-9f1947eebb7f?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80"></div>
                    <div class="hero-bg-item lazy-image" data-src="https://images.unsplash.com/photo-1593351415075-3bac9f45c877?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80"></div>
                </div>
                <div class="container">
                    <div class="hero-content max-w-2xl fade-in">
                        <img src="https://pfst.cf2.poecdn.net/base/image/20b899e536f80ef9869ec84c7df93278fdc2f82f180de15c5655f43272145b00?w=963&h=834" alt="Meg Otomotiv Logo" class="meg-logo-lg mb-6">
                        <h1 class="text-3xl md:text-4xl font-bold mb-4">Uzman Çözüm Ortağınız</h1>
                        <p class="text-xl mb-8">MEG Otomotiv olarak, geniş hizmet yelpazemizle otomotiv, denizcilik ve temizlik sektörlerinde faaliyet gösteren öncü bir çatı şirketiyiz. Bünyemizde; oto kuaför, kuru temizleme, tır ile tekne, yat ve ticari araç taşımacılığı, tekne ve yat bakım-onarımı ile profesyonel temizlik hizmetleri sunmaktayız.</p>
                        <div class="flex flex-wrap gap-4">
                            <a href="#businesses" class="btn btn-primary pulse">Hizmetlerimiz</a>
                            <a href="#about" class="btn btn-outline text-white border-white hover:bg-white hover:text-blue-800">Hakkımızda</a>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- About Section -->
            <section id="about" class="section bg-gray-50 reveal">
                <div class="container">
                    <div class="text-center mb-12">
                        <h2 class="section-title text-center mx-auto">Hakkımızda</h2>
                        <p class="text-gray-600 max-w-2xl mx-auto">Meg Otomotiv, geniş hizmet yelpazesiyle otomotiv, denizcilik ve temizlik sektörlerinde faaliyet gösteren öncü bir çatı şirkettir. Bünyemizde oto yıkama, kuru temizleme, tır ile tekne ve yat taşımacılığı, tekne ve yat bakım-onarımı ile temizlik hizmetleri sunmaktayız.</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                        <div class="reveal" style="--delay: 0.2s;">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80" alt="Meg Otomotiv Ofis" class="w-full h-auto rounded-lg shadow-xl lazy-image" data-src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80">
                        </div>
                        
                        <div class="reveal" style="--delay: 0.4s;">
                            <h3 class="text-2xl font-bold mb-4" style="color: var(--meg-primary);">Vizyonumuz</h3>
                            <p class="text-gray-600 mb-6">Meg Otomotiv olarak, her bir iş kolunda sektörün lider markası olmayı, müşterilerimize yenilikçi ve kaliteli hizmetler sunmayı hedefliyoruz.</p>
                            
                            <h3 class="text-2xl font-bold mb-4" style="color: var(--meg-primary);">Misyonumuz</h3>
                            <p class="text-gray-600 mb-6">Müşteri memnuniyetini ve kaliteyi ön planda tutarak, araç ve deniz araçlarının bakımından temizliğine kadar her alanda profesyonel çözümler sağlıyoruz. Yenilikçi yaklaşımımız ve uzman ekibimizle, sektörümüzde güvenilir bir marka olarak fark yaratmaya devam ediyoruz.</p>
                            
                            <h3 class="text-2xl font-bold mb-4" style="color: var(--meg-primary);">Değerlerimiz</h3>
                            <ul class="grid grid-cols-2 gap-4">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2" style="color: var(--meg-secondary);"></i>
                                    <span>Müşteri Memnuniyeti</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2" style="color: var(--meg-secondary);"></i>
                                    <span>Kalite Odaklılık</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2" style="color: var(--meg-secondary);"></i>
                                    <span>Profesyonellik</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle mr-2" style="color: var(--meg-secondary);"></i>
                                    <span>Güvenilirlik</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Business Cards Section -->
            <section id="businesses" class="section reveal">
                <div class="container">
                    <div class="text-center mb-12">
                        <h2 class="section-title text-center mx-auto">İş Kollarımız</h2>
                        <p class="text-gray-600 max-w-2xl mx-auto">Meg Otomotiv Grubu bünyesinde, farklı sektörlerde hizmet veren profesyonel markalarımız</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
                        <!-- AutoClub Card -->
                        <div class="business-card reveal" style="--delay: 0.1s;">
                            <div class="card-image">
                                <img src="https://images.unsplash.com/photo-1520340356584-f9917d1eea6f?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80" alt="AutoClub Marintürk Oto Yıkama" class="w-full h-full object-cover lazy-image" data-src="https://images.unsplash.com/photo-1520340356584-f9917d1eea6f?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80">
                                <div class="card-badge" style="background-color: var(--auto-primary); color: white;">Oto Yıkama</div>
                                <div class="card-overlay"></div>
                            </div>
                            <div class="card-logo">
                                <img src="https://pfst.cf2.poecdn.net/base/image/e60ffcc21ac11b01ccd50cb19f2f3aa9a31df64875036b4c2005534619b8c3d0?w=268&amp;h=65" alt="AutoClub Marintürk Logo" class="w-full h-full object-contain">
                            </div>
                            <div class="card-body">
                                <h3 class="text-xl font-bold mb-2" style="color: var(--auto-primary);">AutoClub Marintürk</h3>
                                <div>
                                    <p class="text-gray-600 mb-4">Profesyonel car care, kuaför ve detaylı araç bakım hizmetleri sunuyoruz.</p>
                                </div>
                                <div>
                                    <a href="autoclub.php" class="btn w-full" style="background-color: var(--auto-primary); color: white;">Detaylı Bilgi</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Dryclean Express Card -->
                        <div class="business-card reveal" style="--delay: 0.2s;">
                            <div class="card-image">
                                <img src="https://images.unsplash.com/photo-1545173168-9f1947eebb7f?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80" alt="Dryclean Express Kuru Temizleme" class="w-full h-full object-cover lazy-image" data-src="https://images.unsplash.com/photo-1545173168-9f1947eebb7f?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80">
                                <div class="card-badge" style="background-color: var(--dry-primary); color: white;">Kuru Temizleme</div>
                                <div class="card-overlay"></div>
                            </div>
                            <div class="card-logo">
                                <img src="https://pfst.cf2.poecdn.net/base/image/f3eec4ed40a9ab4e9932d0b0b94ce01974af947057e95096142502f157750fc2?w=268&amp;h=65" alt="Dryclean Express Logo" class="w-full h-full object-contain">
                            </div>
                            <div class="card-body">
                                <h3 class="text-xl font-bold mb-2" style="color: var(--dry-primary);">Dry Clean Marintürk</h3>
                                <div>
                                    <p class="text-gray-600 mb-4">Hızlı ve kaliteli kuru temizleme hizmetleri ile kıyafetleriniz güvende.</p>
                                </div>
                                <div>
                                    <a href="dryclean.php" class="btn w-full" style="background-color: var(--dry-primary); color: white;">Detaylı Bilgi</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- GoMarine Card -->
                        <div class="business-card reveal" style="--delay: 0.3s;">
                            <div class="card-image">
                                <img src="https://i.imgur.com/tkCYsNs.jpeg" alt="GoMarine Tekne Taşımacılığı" class="w-full h-full object-cover lazy-image" data-src="https://i.imgur.com/tkCYsNs.jpeg">
                                <div class="card-badge" style="background-color: var(--marine-primary); color: white;">Tekne Taşımacılığı</div>
                                <div class="card-overlay"></div>
                            </div>
                            <div class="card-logo">
                                <img src="https://i.imgur.com/ofoB0nQ.png" alt="GoMarine Logo" class="w-full h-full object-contain">
                            </div>
                            <div class="card-body">
                                <h3 class="text-xl font-bold mb-2" style="color: var(--marine-primary);">GoMarine</h3>
                                <div>
                                    <p class="text-gray-600 mb-4">Tekne ve yat taşımacılığında güvenilir ve profesyonel çözümler.</p>
                                </div>
                                <div>
                                    <a href="gomarine.php" class="btn w-full" style="background-color: var(--marine-primary); color: white;">Detaylı Bilgi</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Meg Tekne Card -->
                        <div class="business-card reveal" style="--delay: 0.4s;">
                            <div class="card-image">
                                <img src="https://images.unsplash.com/photo-1593351415075-3bac9f45c877?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80" alt="Meg Tekne Hizmetleri" class="w-full h-full object-cover lazy-image" data-src="https://images.unsplash.com/photo-1593351415075-3bac9f45c877?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80">
                                <div class="card-badge" style="background-color: var(--boat-primary); color: white;">Tekne Hizmetleri</div>
                                <div class="card-overlay"></div>
                            </div>
                            <div class="card-logo">
                                <img src="https://i.imgur.com/jipth8o.png" alt="Meg Tekne Logo" class="w-full h-full object-contain">
                            </div>
                            <div class="card-body">
                                <h3 class="text-xl font-bold mb-2" style="color: var(--boat-primary);">Meg Tekne Hizmetleri</h3>
                                <div>
                                    <p class="text-gray-600 mb-4">Tekne bakım, onarım ve marina hizmetlerinde uzman kadromuz.</p>
                                </div>
                                <div>
                                    <a href="megboat.php" class="btn w-full" style="background-color: var(--boat-primary); color: white;">Detaylı Bilgi</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Meg VIP Taşıma Card -->
                        <div class="business-card reveal" style="--delay: 0.5s;">
                            <div class="card-image">
                                <img src="https://images.unsplash.com/photo-1541348263662-e068662d82af?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" alt="Meg VIP Taşıma" class="w-full h-full object-cover lazy-image" data-src="https://images.unsplash.com/photo-1541348263662-e068662d82af?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80">
                                <div class="card-badge" style="background-color: var(--vip-primary); color: white;">VIP Taşıma</div>
                                <div class="card-overlay"></div>
                            </div>
                            <div class="card-logo">
                                <img src="https://i.imgur.com/dddu15A.png" alt="Meg VIP Taşıma Logo" class="w-full h-full object-contain">
                            </div>
                            <div class="card-body">
                                <h3 class="text-xl font-bold mb-2" style="color: var(--vip-primary);">Meg VIP Taşıma</h3>
                                <div>
                                    <p class="text-gray-600 mb-4">Konforlu, güvenli ve lüks VIP taşımacılık hizmetlerimizle hizmetinizdeyiz.</p>
                                </div>
                                <div>
                                    <a href="viptransport.php" class="btn w-full" style="background-color: var(--vip-primary); color: white;">Detaylı Bilgi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Contact CTA Section -->
            <section class="py-20 bg-gray-100 reveal">
                <div class="container">
                    <div class="text-center max-w-xl mx-auto">
                        <h2 class="text-3xl font-bold mb-4" style="color: var(--meg-primary);">İletişime Geçin</h2>
                        <p class="text-gray-600 mb-8">Hizmetlerimiz hakkında detaylı bilgi almak için bizimle iletişime geçebilirsiniz.</p>
                        <a href="#contact" class="btn btn-primary">İletişim</a>
                    </div>
                </div>
            </section>
        </div>
        
        <!-- Diğer sayfalar (Ana sayfada gizliyiz) -->
        <div id="autoclub-page" class="page-content"></div>
        <div id="dryclean-page" class="page-content"></div>
        <div id="gomarine-page" class="page-content"></div>
        <div id="megboat-page" class="page-content"></div>
        <div id="viptransport-page" class="page-content"></div>
    </main>
    
    <!-- Contact Section -->
    <section id="contact" class="section bg-gray-900 text-white reveal">
        <div class="container">
            <div class="text-center mb-12">
                <div class="flex justify-center items-center mb-6">
                    <img src="https://pfst.cf2.poecdn.net/base/image/20b899e536f80ef9869ec84c7df93278fdc2f82f180de15c5655f43272145b00?w=963&h=834" alt="Meg Otomotiv Logo" class="meg-logo">
                </div>
                <h2 class="section-title text-center mx-auto text-white">İletişim</h2>
                <p class="text-gray-300 max-w-2xl mx-auto">Hizmetlerimiz hakkında detaylı bilgi almak için bizimle iletişime geçebilirsiniz.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="reveal" style="--delay: 0.2s;">
                    <h3 class="text-2xl font-bold mb-6 text-white">İletişim Bilgileri</h3>
                    
                    <div class="mb-6">
                        <h4 class="text-xl font-semibold mb-4 text-white">Merkez Ofis</h4>
                        <p class="flex items-start mb-3">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-blue-400"></i>
                            <span>Batı, Marintürk İstanbul City Port, 34890 Pendik/İstanbul</span>
                        </p>
                        <p class="flex items-start mb-3">
                            <i class="fas fa-phone-alt mt-1 mr-3 text-blue-400"></i>
                            <span>+90 530 505 2251</span>
                        </p>
                        <p class="flex items-start mb-3">
                            <i class="fas fa-phone-alt mt-1 mr-3 text-blue-400"></i>
                            <span>+90 216 483 6353</span>
                        </p>
                        <p class="flex items-start mb-3">
                            <i class="fas fa-envelope mt-1 mr-3 text-blue-400"></i>
                            <span>info@megotomotiv.net</span>
                        </p>
                    </div>
                    
                    <div class="mb-8">
                        <h4 class="text-xl font-semibold mb-4 text-white">Çalışma Saatleri</h4>
                        <p class="flex justify-between border-b border-gray-700 py-2">
                            <span>Haftanın Her Günü</span>
                            <span>09:00 - 23:00</span>
                        </p>
                    </div>
                    
                    <div class="social-icons">
                        <a href="https://www.facebook.com/people/AutoClub-Meg-Marinturk/100054246770704/" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/autoclubmeg/" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="reveal" style="--delay: 0.4s;">
                    <h3 class="text-2xl font-bold mb-6 text-white">Bize Yazın</h3>
                    
                    <form id="contactForm">
                        <div id="formMessages"></div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <input type="text" name="name" placeholder="Adınız" required class="form-input" minlength="2">
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="E-posta Adresiniz" required class="form-input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <input type="text" name="subject" placeholder="Konu" required class="form-input" minlength="3">
                        </div>
                        
                        <div class="mb-4">
                            <textarea rows="5" name="message" placeholder="Mesajınız" required class="form-input" minlength="10"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-full py-3">
                            <span id="submitBtnText">Mesaj Gönder</span>
                            <span id="submitBtnLoading" class="hidden">
                                <i class="fas fa-spinner fa-spin mr-2"></i> Gönderiliyor...
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <div>
                    <div class="flex items-center mb-6">
                        <img src="https://pfst.cf2.poecdn.net/base/image/20b899e536f80ef9869ec84c7df93278fdc2f82f180de15c5655f43272145b00?w=963&h=834" alt="Meg Otomotiv Logo" class="meg-logo mr-3">
                    </div>
                    <p class="text-gray-400 mb-6">Oto yıkamadan tekne taşımacılığına, kuru temizlemeden tekne hizmetlerine kadar geniş yelpazede profesyonel hizmetler sunuyoruz.</p>
                    <div class="flex mt-4">
                        <a href="https://www.facebook.com/people/AutoClub-Meg-Marinturk/100054246770704/" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/autoclubmeg/" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div>
                    <h3 class="footer-title text-white">Hızlı Erişim</h3>
                    <ul class="footer-links">
                        <li><a href="index.php" id="footer-home">Ana Sayfa</a></li>
                        <li><a href="#about">Hakkımızda</a></li>
                        <li><a href="#businesses">İş Kollarımız</a></li>
                        <li><a href="#contact">İletişim</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="footer-title text-white">İş Kollarımız</h3>
                    <ul class="footer-links">
                        <li>
                            <a href="autoclub.php" id="footer-autoclub" class="flex items-center">
                                <img src="https://pfst.cf2.poecdn.net/base/image/e60ffcc21ac11b01ccd50cb19f2f3aa9a31df64875036b4c2005534619b8c3d0?w=268&amp;h=65" alt="AutoClub Marintürk Logo" class="footer-logo" style="max-width: 24px;">
                                <span>AutoClub Marintürk</span>
                            </a>
                        </li>
                        <li>
                            <a href="dryclean.php" id="footer-dryclean" class="flex items-center">
                                <img src="https://pfst.cf2.poecdn.net/base/image/f3eec4ed40a9ab4e9932d0b0b94ce01974af947057e95096142502f157750fc2?w=268&amp;h=65" alt="Dryclean Express Logo" class="footer-logo" style="max-width: 24px;">
                                <span>Dry Clean Express</span>
                            </a>
                        </li>
                        <li>
                            <a href="gomarine.php" id="footer-gomarine" class="flex items-center">
                                <img src="https://i.imgur.com/ofoB0nQ.png" alt="GoMarine Logo" class="footer-logo" style="max-width: 24px;">
                                <span>GoMarine</span>
                            </a>
                        </li>
                        <li>
                            <a href="megboat.php" id="footer-megboat" class="flex items-center">
                                <img src="https://i.imgur.com/XH4yD5h.png" alt="Meg Tekne Logo" class="footer-logo" style="max-width: 24px;">
                                <span>Meg Tekne Hizmetleri</span>
                            </a>
                        </li>
                        <li>
                            <a href="viptransport.php" id="footer-viptransport" class="flex items-center">
                                <img src="https://i.imgur.com/dddu15A.png" alt="Meg VIP Taşıma Logo" class="footer-logo" style="max-width: 24px;">
                                <span>Meg VIP Taşıma</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="footer-title text-white">İletişim</h3>
                    <ul class="footer-links">
                        <li class="flex items-start text-gray-400 mb-3">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-blue-400"></i>
                            <span>Batı, Marintürk İstanbul City Port, 34890 Pendik/İstanbul</span>
                        </li>
                        <li class="flex items-start text-gray-400 mb-3">
                            <i class="fas fa-phone-alt mt-1 mr-3 text-blue-400"></i>
                            <span>+90 530 505 2251</span>
                        </li>
                        <li class="flex items-start text-gray-400 mb-3">
                            <i class="fas fa-phone-alt mt-1 mr-3 text-blue-400"></i>
                            <span>+90 216 483 6353</span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <i class="fas fa-envelope mt-1 mr-3 text-blue-400"></i>
                            <span>info@megotomotiv.net</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>© 2023 Meg Otomotiv. Tüm Hakları Saklıdır.</p>
            </div>
        </div>
    </footer>
    
    <!-- Dark Mode Toggle Button -->
    <button class="dark-mode-toggle" id="darkModeToggle" aria-label="Karanlık/Aydınlık mod değişimi">
        <i class="fas fa-moon"></i>
    </button>
    
    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" aria-label="Sayfanın başına dön">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Modal Overlay and Card -->
    <div id="modalOverlay" class="modal-overlay"></div>
    <div id="serviceModal" class="modal-card">
        <button id="closeModal" class="close-button" aria-label="Kapat">
            <i class="fas fa-times"></i>
        </button>
        <img id="modalImage" src="" alt="">
        <div id="modalContent" class="content">
            <!-- Modal content will be filled dynamically by JavaScript -->
        </div>
    </div>

    <script>
        // Sayfa yüklendiğinde doğru içeriği göster
        document.addEventListener('DOMContentLoaded', function() {
            // PHP'den gelen sayfa ID'sini al
            const currentPage = '<?php echo $currentPage; ?>';
            
            // Sayfa içeriğini göster
            showPage(currentPage);
            
            // Dark Mode Implementation
            const darkModeToggle = document.getElementById('darkModeToggle');
            const sunIcon = '<i class="fas fa-sun"></i>';
            const moonIcon = '<i class="fas fa-moon"></i>';
            
            // Check system preference and localStorage
            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.classList.add('dark');
                darkModeToggle.innerHTML = sunIcon;
            } else if (localStorage.getItem('darkMode') === 'enabled') {
                document.documentElement.classList.add('dark');
                darkModeToggle.innerHTML = sunIcon;
            } else if (localStorage.getItem('darkMode') === 'disabled') {
                document.documentElement.classList.remove('dark');
                darkModeToggle.innerHTML = moonIcon;
            }
            
            // Listen for dark mode changes
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
                if (event.matches) {
                    document.documentElement.classList.add('dark');
                    darkModeToggle.innerHTML = sunIcon;
                } else {
                    document.documentElement.classList.remove('dark');
                    darkModeToggle.innerHTML = moonIcon;
                }
            });
            
            // Toggle dark mode
            darkModeToggle.addEventListener('click', () => {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    darkModeToggle.innerHTML = moonIcon;
                    localStorage.setItem('darkMode', 'disabled');
                } else {
                    document.documentElement.classList.add('dark');
                    darkModeToggle.innerHTML = sunIcon;
                    localStorage.setItem('darkMode', 'enabled');
                }
            });
            
            // Lazy Load Images
            const lazyImages = [].slice.call(document.querySelectorAll('.lazy-image'));
            
            if ('IntersectionObserver' in window) {
                const lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            const lazyImage = entry.target;
                            lazyImage.src = lazyImage.dataset.src;
                            lazyImage.classList.add('loaded');
                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });
                
                lazyImages.forEach(function(lazyImage) {
                    lazyImageObserver.observe(lazyImage);
                });
            } else {
                // Fallback for browsers without intersection observer support
                let lazyLoadThrottleTimeout;
                
                function lazyLoad() {
                    if (lazyLoadThrottleTimeout) {
                        clearTimeout(lazyLoadThrottleTimeout);
                    }
                    
                    lazyLoadThrottleTimeout = setTimeout(function() {
                        const scrollTop = window.pageYOffset;
                        
                        lazyImages.forEach(function(lazyImage) {
                            if (lazyImage.offsetTop < (window.innerHeight + scrollTop)) {
                                lazyImage.src = lazyImage.dataset.src;
                                lazyImage.classList.add('loaded');
                            }
                        });
                        
                        if (lazyImages.length === 0) {
                            document.removeEventListener('scroll', lazyLoad);
                            window.removeEventListener('resize', lazyLoad);
                            window.removeEventListener('orientationChange', lazyLoad);
                        }
                    }, 20);
                }
                
                document.addEventListener('scroll', lazyLoad);
                window.addEventListener('resize', lazyLoad);
                window.addEventListener('orientationChange', lazyLoad);
            }
            
            // Page Navigation Function
            function showPage(pageId) {
                // Show loading indicator
                const loadingIndicator = document.getElementById('loadingIndicator');
                loadingIndicator.classList.add('loading');
                
                // Hide all pages
                document.querySelectorAll('.page-content').forEach(page => {
                    page.classList.remove('active');
                });
                
                // Show selected page
                document.getElementById(pageId).classList.add('active');
                
                // Update active nav link
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });
                
                const navId = pageId.replace('-page', '-nav');
                if (document.getElementById(navId)) {
                    document.getElementById(navId).classList.add('active');
                }
                
                // Scroll to top
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                closeMenu();
                
                // Hide loading indicator after a short delay
                setTimeout(() => {
                    loadingIndicator.classList.remove('loading');
                }, 500);
            }
            
            // Scroll Reveal Animation
            function revealOnScroll() {
                const reveals = document.querySelectorAll('.reveal');
                
                for (let i = 0; i < reveals.length; i++) {
                    const windowHeight = window.innerHeight;
                    const revealTop = reveals[i].getBoundingClientRect().top;
                    const revealPoint = 150;
                    
                    if (revealTop < windowHeight - revealPoint) {
                        reveals[i].classList.add('active');
                    }
                }
            }
            
            // Back to Top Button
            const backToTopButton = document.getElementById('backToTop');
            
            function toggleBackToTopButton() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.add('visible');
                } else {
                    backToTopButton.classList.remove('visible');
                }
            }
            
            backToTopButton.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
            
            // Mobile Menu Toggle
            const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
            const mobileMenu = document.querySelector('.mobile-menu');
            const mobileMenuClose = document.querySelector('.mobile-menu-close');
            
            function openMenu() {
                mobileMenu.classList.add('open');
                document.body.style.overflow = 'hidden'; // Prevent scrolling when menu is open
            }
            
            function closeMenu() {
                mobileMenu.classList.remove('open');
                document.body.style.overflow = ''; // Re-enable scrolling
            }
            
            mobileMenuToggle.addEventListener('click', openMenu);
            mobileMenuClose.addEventListener('click', closeMenu);
            
            // Header Scroll
            const header = document.querySelector('.header');
            
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
                
                toggleBackToTopButton();
                revealOnScroll();
            });
            
            // Run animation on load
            revealOnScroll();
            
            // Initialize animations for active page
            document.querySelectorAll('.page-content.active .reveal').forEach(element => {
                element.classList.add('active');
            });
            
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const target = document.querySelector(this.getAttribute('href'));
                    
                    if (target) {
                        const headerHeight = document.querySelector('.header').offsetHeight;
                        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                        
                        // Close mobile menu if open
                        closeMenu();
                    }
                });
            });
            
            // Form validation and submission
            const contactForm = document.getElementById('contactForm');
            const formMessages = document.getElementById('formMessages');
            const submitBtnText = document.getElementById('submitBtnText');
            const submitBtnLoading = document.getElementById('submitBtnLoading');
            
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Basic form validation
                    const inputs = contactForm.querySelectorAll('input, textarea');
                    let isValid = true;
                    
                    inputs.forEach(input => {
                        if (!input.checkValidity()) {
                            isValid = false;
                            input.classList.add('border-red-500');
                        } else {
                            input.classList.remove('border-red-500');
                        }
                    });
                    
                    if (!isValid) {
                        // Show error message
                        formMessages.innerHTML = `
                            <div class="form-message error">
                                <i class="fas fa-exclamation-circle"></i>
                                Lütfen tüm alanları doğru şekilde doldurun.
                            </div>
                        `;
                        return;
                    }
                    
                    // Show loading state
                    submitBtnText.classList.add('hidden');
                    submitBtnLoading.classList.remove('hidden');
                    
                    // Simulate form submission
                    setTimeout(() => {
                        // Show success message
                        formMessages.innerHTML = `
                            <div class="form-message success">
                                <i class="fas fa-check-circle"></i>
                                Mesajınız başarıyla gönderildi. En kısa sürede sizinle iletişime geçeceğiz.
                            </div>
                        `;
                        
                        // Reset form
                        contactForm.reset();
                        
                        // Hide loading state
                        submitBtnText.classList.remove('hidden');
                        submitBtnLoading.classList.add('hidden');
                        
                        // Remove success message after 5 seconds
                        setTimeout(() => {
                            formMessages.innerHTML = '';
                        }, 5000);
                    }, 1500);
                });
            }
        });
    </script>
</body>
</html>
