<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings['site_title'] ?? 'Jasa Sedot WC Profesional - Solusi Cepat & Bergaransi 24/7' }}</title>
    <meta name="description" content="{{ $settings['site_description'] ?? 'Jasa Sedot WC Profesional, Murah, dan Bergaransi. Mengatasi WC mampet, septic tank penuh, dan saluran tersumbat 24 Jam dengan armada modern.' }}">
    
    <!-- Google Fonts: Outfit & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #0284c7;
            --primary-dark: #0369a1;
            --primary-light: #e0f2fe;
            --accent: #10b981;
            --accent-dark: #059669;
            --accent-light: #d1fae5;
            --dark: #0f172a;
            --dark-light: #1e293b;
            --light: #f8fafc;
            --gray: #64748b;
            --gray-light: #e2e8f0;
            --white: #ffffff;
            --font-title: 'Outfit', sans-serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
            --shadow-sm: 0 2px 4px rgba(15, 23, 42, 0.05);
            --shadow-md: 0 10px 25px -5px rgba(15, 23, 42, 0.08), 0 8px 10px -6px rgba(15, 23, 42, 0.08);
            --shadow-lg: 0 20px 25px -5px rgba(15, 23, 42, 0.1), 0 10px 10px -5px rgba(15, 23, 42, 0.04);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-body);
            background-color: var(--light);
            color: var(--dark-light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-title);
            color: var(--dark);
            font-weight: 700;
        }

        /* Container */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Navbar */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
            transition: var(--transition);
        }

        header.scrolled {
            background: var(--white);
            box-shadow: var(--shadow-sm);
            padding: 12px 0;
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
            transition: var(--transition);
        }

        header.scrolled .nav-wrapper {
            height: 70px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .logo-icon {
            width: 44px;
            height: 44px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.25rem;
            box-shadow: 0 4px 10px rgba(2, 132, 199, 0.3);
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 800;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: var(--font-title);
            letter-spacing: -0.5px;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .nav-link {
            text-decoration: none;
            color: var(--dark-light);
            font-weight: 600;
            font-size: 0.95rem;
            transition: var(--transition);
            position: relative;
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            transition: var(--transition);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-btn {
            background: linear-gradient(135deg, var(--accent), var(--accent-dark));
            color: var(--white);
            padding: 12px 24px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 14px rgba(16, 185, 129, 0.3);
            transition: var(--transition);
        }

        .nav-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
        }

        /* Hero Section */
        .hero {
            padding: 180px 0 100px;
            position: relative;
            background: radial-gradient(circle at 10% 20%, rgba(224, 242, 254, 0.5) 0%, rgba(255, 255, 255, 0) 90%);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            align-items: center;
            gap: 60px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background-color: var(--primary-light);
            color: var(--primary-dark);
            padding: 8px 16px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 24px;
        }

        .hero-badge i {
            color: var(--primary);
        }

        .hero-title {
            font-size: 3.5rem;
            line-height: 1.15;
            margin-bottom: 20px;
            letter-spacing: -1px;
        }

        .hero-title span {
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-desc {
            font-size: 1.15rem;
            color: var(--gray);
            margin-bottom: 36px;
            max-width: 580px;
        }

        .hero-cta {
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .btn {
            padding: 16px 32px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: var(--transition);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--accent), var(--accent-dark));
            color: var(--white);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.25);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.35);
        }

        .btn-secondary {
            background-color: var(--white);
            color: var(--dark-light);
            border: 1.5px solid var(--gray-light);
            box-shadow: var(--shadow-sm);
        }

        .btn-secondary:hover {
            border-color: var(--primary);
            color: var(--primary);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .hero-trust {
            display: flex;
            align-items: center;
            gap: 20px;
            border-top: 1px solid var(--gray-light);
            padding-top: 24px;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--gray);
        }

        .trust-item i {
            color: var(--accent);
            font-size: 1.1rem;
        }

        .hero-image-container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image-bg {
            position: absolute;
            width: 110%;
            height: 110%;
            background: radial-gradient(circle, rgba(2, 132, 199, 0.15) 0%, rgba(255, 255, 255, 0) 70%);
            z-index: -1;
            border-radius: 50%;
        }

        .hero-image {
            width: 100%;
            max-width: 480px;
            height: auto;
            border-radius: 24px;
            box-shadow: var(--shadow-lg);
            border: 8px solid var(--white);
            transform: rotate(-1.5deg);
            transition: var(--transition);
            object-fit: cover;
        }

        .hero-image:hover {
            transform: rotate(0) scale(1.02);
        }

        .floating-badge {
            position: absolute;
            background: var(--white);
            padding: 16px 20px;
            border-radius: 16px;
            box-shadow: var(--shadow-lg);
            display: flex;
            align-items: center;
            gap: 12px;
            border: 1px solid rgba(226, 232, 240, 0.8);
            z-index: 10;
        }

        .floating-badge.badge-1 {
            bottom: 20px;
            left: -20px;
            animation: float 6s ease-in-out infinite;
        }

        .floating-badge.badge-2 {
            top: 20px;
            right: -20px;
            animation: float 6s ease-in-out infinite 3s;
        }

        .floating-badge-icon {
            width: 40px;
            height: 40px;
            background-color: var(--accent-light);
            color: var(--accent-dark);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }

        .floating-badge-icon.blue {
            background-color: var(--primary-light);
            color: var(--primary);
        }

        .floating-badge-text p {
            font-size: 0.75rem;
            color: var(--gray);
            font-weight: 500;
        }

        .floating-badge-text h4 {
            font-size: 0.95rem;
            font-weight: 800;
        }

        /* Stats Section */
        .stats {
            padding: 60px 0;
            background-color: var(--white);
            border-top: 1px solid var(--gray-light);
            border-bottom: 1px solid var(--gray-light);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .stat-card {
            text-align: center;
            padding: 20px;
            border-right: 1px solid var(--gray-light);
        }

        .stat-card:last-child {
            border-right: none;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary-dark);
            line-height: 1;
            margin-bottom: 8px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .stat-label {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--gray);
        }

        /* Section Global Settings */
        .section {
            padding: 100px 0;
        }

        .section-header {
            text-align: center;
            max-width: 650px;
            margin: 0 auto 60px;
        }

        .section-subtitle {
            color: var(--primary);
            font-weight: 700;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 12px;
            display: block;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 16px;
            letter-spacing: -0.5px;
        }

        .section-desc {
            color: var(--gray);
            font-size: 1.05rem;
        }

        /* Services Section */
        .services {
            background-color: var(--light);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .service-card {
            background-color: var(--white);
            padding: 40px 30px;
            border-radius: 20px;
            border: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            opacity: 0;
            transition: var(--transition);
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
            border-color: rgba(2, 132, 199, 0.2);
        }

        .service-card:hover::before {
            opacity: 1;
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background-color: var(--primary-light);
            color: var(--primary);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 24px;
            transition: var(--transition);
        }

        .service-card:hover .service-icon {
            background-color: var(--primary);
            color: var(--white);
            transform: scale(1.05);
        }

        .service-card h3 {
            font-size: 1.3rem;
            margin-bottom: 14px;
        }

        .service-card p {
            color: var(--gray);
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .service-link {
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .service-link i {
            transition: var(--transition);
        }

        .service-card:hover .service-link i {
            transform: translateX(4px);
        }

        /* Benefits Section */
        .benefits {
            background-color: var(--white);
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 60px;
        }

        .benefits-content h2 {
            font-size: 2.25rem;
            margin-bottom: 20px;
            letter-spacing: -0.5px;
        }

        .benefits-content > p {
            color: var(--gray);
            margin-bottom: 30px;
        }

        .benefit-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .benefit-item {
            display: flex;
            gap: 16px;
        }

        .benefit-icon {
            flex-shrink: 0;
            width: 48px;
            height: 48px;
            background-color: var(--accent-light);
            color: var(--accent-dark);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.15rem;
        }

        .benefit-text h4 {
            font-size: 1.1rem;
            margin-bottom: 6px;
        }

        .benefit-text p {
            color: var(--gray);
            font-size: 0.95rem;
        }

        .benefits-image-container {
            position: relative;
            background: linear-gradient(135deg, var(--primary-light), var(--accent-light));
            padding: 30px;
            border-radius: 30px;
            display: flex;
            justify-content: center;
        }

        .benefits-card {
            background-color: var(--white);
            border-radius: 20px;
            padding: 30px;
            width: 100%;
            box-shadow: var(--shadow-lg);
        }

        .benefits-card h3 {
            margin-bottom: 20px;
            border-bottom: 1.5px solid var(--gray-light);
            padding-bottom: 12px;
            font-size: 1.35rem;
        }

        .review-item {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }

        .review-item:last-child {
            margin-bottom: 0;
        }

        .review-stars {
            color: #fbbf24;
            font-size: 0.9rem;
        }

        .review-text {
            font-style: italic;
            font-size: 0.95rem;
            color: var(--dark-light);
        }

        .review-user {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--gray);
        }

        /* Order Steps */
        .steps {
            background-color: var(--dark);
            color: var(--white);
        }

        .steps .section-title {
            color: var(--white);
        }

        .steps .section-desc {
            color: #94a3b8;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            position: relative;
        }

        .step-card {
            position: relative;
            text-align: center;
            padding: 20px;
            z-index: 2;
        }

        .step-num {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--white);
            margin: 0 auto 24px;
            box-shadow: 0 8px 20px rgba(2, 132, 199, 0.4);
        }

        .step-card h3 {
            color: var(--white);
            font-size: 1.25rem;
            margin-bottom: 12px;
        }

        .step-card p {
            color: #94a3b8;
            font-size: 0.95rem;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary-dark), var(--dark));
            color: var(--white);
            padding: 100px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.1) 0%, rgba(255, 255, 255, 0) 60%);
            z-index: 1;
        }

        .cta-content {
            position: relative;
            z-index: 2;
            max-width: 750px;
            margin: 0 auto;
        }

        .cta-title {
            font-size: 3rem;
            color: var(--white);
            margin-bottom: 20px;
            letter-spacing: -1px;
            line-height: 1.2;
        }

        .cta-desc {
            color: #cbd5e1;
            font-size: 1.15rem;
            margin-bottom: 40px;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .btn-whatsapp {
            background-color: #25d366;
            color: var(--white);
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.3);
        }

        .btn-whatsapp:hover {
            background-color: #20ba5a;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.4);
        }

        /* Footer */
        footer {
            background-color: #0b0f19;
            color: #94a3b8;
            padding: 80px 0 30px;
            border-top: 1px solid #1e293b;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr 1fr;
            gap: 60px;
            margin-bottom: 60px;
        }

        .footer-logo {
            margin-bottom: 20px;
        }

        .footer-logo .logo-text {
            background: linear-gradient(to right, var(--white), var(--primary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .footer-about p {
            font-size: 0.95rem;
            margin-bottom: 24px;
            line-height: 1.7;
        }

        .social-links {
            display: flex;
            gap: 12px;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            background-color: #1e293b;
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: var(--transition);
        }

        .social-btn:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }

        .footer-links h4, .footer-contact h4 {
            color: var(--white);
            font-size: 1.1rem;
            margin-bottom: 24px;
            font-family: var(--font-title);
        }

        .footer-links ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
            font-size: 0.95rem;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary);
            padding-left: 4px;
        }

        .contact-list {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .contact-item {
            display: flex;
            gap: 14px;
            font-size: 0.95rem;
        }

        .contact-item i {
            color: var(--primary);
            font-size: 1.1rem;
            margin-top: 4px;
        }

        .contact-item span {
            color: #cbd5e1;
        }

        .footer-bottom {
            border-top: 1px solid #1e293b;
            padding-top: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
        }

        .footer-bottom p {
            color: #64748b;
        }

        .footer-bottom-links {
            display: flex;
            gap: 24px;
        }

        .footer-bottom-links a {
            color: #64748b;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-bottom-links a:hover {
            color: var(--primary);
        }

        /* Floating WhatsApp Button */
        .wa-float {
            position: fixed;
            bottom: 40px;
            right: 40px;
            width: 60px;
            height: 60px;
            background-color: #25d366;
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
            z-index: 999;
            text-decoration: none;
            transition: var(--transition);
        }

        .wa-float:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.6);
        }

        /* Animations */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        /* Responsive Breakpoints */
        @media (max-width: 1024px) {
            .hero-grid {
                gap: 40px;
            }
            .hero-title {
                font-size: 3rem;
            }
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .stat-card {
                border-right: none;
                border-bottom: 1px solid var(--gray-light);
                padding-bottom: 20px;
            }
            .stat-card:nth-child(even) {
                border-right: none;
            }
            .stat-card:last-child {
                border-bottom: none;
            }
        }

        @media (max-width: 768px) {
            nav {
                display: none; /* simple responsive representation */
            }
            .hero-grid {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 50px;
            }
            .hero-title {
                font-size: 2.5rem;
            }
            .hero-desc {
                margin: 0 auto 30px;
            }
            .hero-cta {
                justify-content: center;
            }
            .hero-trust {
                justify-content: center;
            }
            .hero-image-container {
                order: -1;
            }
            .benefits-grid {
                grid-template-columns: 1fr;
            }
            .steps-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .footer-bottom {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
            .wa-float {
                bottom: 24px;
                right: 24px;
                width: 50px;
                height: 50px;
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/{{ $settings['contact_whatsapp'] ?? '628123456789' }}?text=Halo%20Admin%20Sedot%20WC,%20saya%20ingin%20memesan%20jasa%20sedot%20WC..." class="wa-float" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Header / Nav -->
    <header id="header">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-pump-soap"></i>
                    </div>
                    <div class="logo-text">SedotWC.com</div>
                </a>
                <nav>
                    <a href="#" class="nav-link">Beranda</a>
                    <a href="#layanan" class="nav-link">Layanan</a>
                    <a href="#keunggulan" class="nav-link">Keunggulan</a>
                    <a href="#cara-kerja" class="nav-link">Cara Kerja</a>
                </nav>
                <a href="https://wa.me/{{ $settings['contact_whatsapp'] ?? '628123456789' }}?text=Halo%20Admin%20Sedot%20WC,%20saya%20ingin%20konsultasi..." class="nav-btn" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-whatsapp"></i> Hubungi Kami
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <div class="hero-badge">
                        <i class="fas fa-shield-alt"></i> {{ $settings['hero_badge'] ?? '#1 Jasa Sanitasi Terpercaya' }}
                    </div>
                    <h1 class="hero-title">{!! $settings['hero_title'] ?? 'Solusi Cepat <span>WC Mampet</span> & Septic Tank Penuh!' !!}</h1>
                    <p class="hero-desc">{{ $settings['hero_description'] ?? 'Layanan profesional, berpengalaman, dan bergaransi resmi. Kami hadir 24 Jam siap mengatasi berbagai masalah sanitasi Anda secara tuntas tanpa repot.' }}</p>
                    <div class="hero-cta">
                        <a href="https://wa.me/{{ $settings['contact_whatsapp'] ?? '628123456789' }}?text=Halo%20Admin%20Sedot%20WC,%20saya%20ingin%20memesan%20jasa%20sekarang..." class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-whatsapp"></i> Pesan Sekarang
                        </a>
                        <a href="#layanan" class="btn btn-secondary">Pelajari Layanan</a>
                    </div>
                    <div class="hero-trust">
                        <div class="trust-item"><i class="fas fa-check-circle"></i> Harga Transparan</div>
                        <div class="trust-item"><i class="fas fa-check-circle"></i> Tanpa Bongkar</div>
                        <div class="trust-item"><i class="fas fa-check-circle"></i> Garansi Uang Kembali</div>
                    </div>
                </div>
                <div class="hero-image-container">
                    <div class="hero-image-bg"></div>
                    <img src="{{ $settings['hero_image'] ?? '/images/hero_sedot_wc.png' }}" alt="Jasa Sedot WC Profesional" class="hero-image">
                    
                    <div class="floating-badge badge-1">
                        <div class="floating-badge-icon">
                            <i class="fas fa-truck-moving"></i>
                        </div>
                        <div class="floating-badge-text">
                            <p>{{ $settings['floating_badge_1_title'] ?? 'Armada Canggih' }}</p>
                            <h4>{{ $settings['floating_badge_1_value'] ?? 'Selang 100m+' }}</h4>
                        </div>
                    </div>

                    <div class="floating-badge badge-2">
                        <div class="floating-badge-icon blue">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="floating-badge-text">
                            <p>{{ $settings['floating_badge_2_title'] ?? 'Respon Cepat' }}</p>
                            <h4>{{ $settings['floating_badge_2_value'] ?? '24 Jam Nonstop' }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                @foreach($stats as $stat)
                    <div class="stat-card">
                        <div class="stat-number">{{ $stat->value }}</div>
                        <div class="stat-label">{{ $stat->label }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section services" id="layanan">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Layanan Kami</span>
                <h2 class="section-title">Solusi Lengkap Masalah Sanitasi Anda</h2>
                <p class="section-desc">Kami menyediakan layanan sanitasi menyeluruh yang ditangani oleh teknisi ahli menggunakan peralatan modern berstandar internasional.</p>
            </div>
            
            <div class="services-grid">
                @foreach($services as $service)
                    <div class="service-card">
                        <div class="service-icon"><i class="{{ $service->icon }}"></i></div>
                        <h3>{{ $service->title }}</h3>
                        <p>{{ $service->description }}</p>
                        <a href="https://wa.me/{{ $settings['contact_whatsapp'] ?? '628123456789' }}?text={{ urlencode($service->wa_text) }}" class="service-link" target="_blank" rel="noopener noreferrer">Pesan Sekarang <i class="fas fa-arrow-right"></i></a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="section benefits" id="keunggulan">
        <div class="container">
            <div class="benefits-grid">
                <div class="benefits-content">
                    <span class="section-subtitle">Mengapa Memilih Kami</span>
                    <h2>Kualitas Pelayanan Utama untuk Kenyamanan Anda</h2>
                    <p>Kami memahami bahwa masalah WC penuh dan saluran mampet sangat mengganggu kenyamanan. Oleh karena itu, kami menghadirkan layanan prima yang terstandarisasi.</p>
                    
                    <div class="benefit-list">
                        @foreach($benefits as $benefit)
                            <div class="benefit-item">
                                <div class="benefit-icon"><i class="{{ $benefit->icon }}"></i></div>
                                <div class="benefit-text">
                                    <h4>{{ $benefit->title }}</h4>
                                    <p>{{ $benefit->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="benefits-image-container">
                    <div class="benefits-card">
                        <h3>Apa Kata Mereka?</h3>
                        
                        @foreach($testimonials as $index => $testimonial)
                            @if($index > 0)
                                <hr style="border: 0; border-top: 1px solid var(--gray-light); margin: 15px 0;">
                            @endif
                            <div class="review-item">
                                <div class="review-stars">
                                    @for($i = 0; $i < $testimonial->stars; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                </div>
                                <p class="review-text">"{{ $testimonial->text }}"</p>
                                <p class="review-user">- {{ $testimonial->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Steps Section -->
    <section class="section steps" id="cara-kerja">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Proses Mudah</span>
                <h2 class="section-title">3 Langkah Praktis Pesan Jasa Kami</h2>
                <p class="section-desc">Tidak perlu repot keluar rumah, selesaikan masalah WC penuh atau mampet Anda cukup dari ponsel.</p>
            </div>

            <div class="steps-grid">
                @foreach($steps as $step)
                    <div class="step-card">
                        <div class="step-num">{{ $step->step_number }}</div>
                        <h3>{{ $step->title }}</h3>
                        <p>{{ $step->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">WC Anda Mampet atau Septic Tank Penuh?</h2>
                <p class="cta-desc">Jangan tunggu sampai meluber dan menimbulkan penyakit! Hubungi kami sekarang dan nikmati diskon khusus pemesanan hari ini.</p>
                <div class="cta-buttons">
                    <a href="https://wa.me/{{ $settings['contact_whatsapp'] ?? '628123456789' }}?text=Halo%20Admin%20Sedot%20WC,%20saya%20ingin%20mendapatkan%20Diskon%20Sanitasi..." class="btn btn-whatsapp" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-whatsapp"></i> Hubungi WhatsApp (Respon Cepat)
                    </a>
                    <a href="tel:{{ $settings['contact_phone'] ?? '628123456789' }}" class="btn btn-secondary" style="background: transparent; color: white; border-color: white;">
                        <i class="fas fa-phone-alt"></i> Telepon Langsung
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <a href="#" class="logo footer-logo">
                        <div class="logo-icon">
                            <i class="fas fa-pump-soap"></i>
                        </div>
                        <div class="logo-text">SedotWC.com</div>
                    </a>
                    <p>{{ $settings['footer_about'] ?? 'SedotWC.com adalah penyedia jasa layanan sedot WC, pelancaran saluran mampet, dan pembuatan septic tank baru profesional berlisensi yang beroperasi 24 Jam setiap hari.' }}</p>
                    <div class="social-links">
                        <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="footer-links">
                    <h4>Peta Situs</h4>
                    <ul>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#layanan">Layanan Sanitasi</a></li>
                        <li><a href="#keunggulan">Mengapa Memilih Kami</a></li>
                        <li><a href="#cara-kerja">Cara Pemesanan</a></li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h4>Hubungi Kami</h4>
                    <div class="contact-list">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>{{ $settings['contact_address'] ?? 'Jl. Kesehatan Raya No. 12, Area Metropolitan, Indonesia' }}</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <span>{{ $settings['contact_phone'] ?? '+62 812-3456-7890' }}</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>{{ $settings['contact_email'] ?? 'info@sedotwc.com' }}</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <span>Operasional: 24 Jam / 7 Hari Seminggu</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 SedotWC.com. Hak Cipta Dilindungi Undang-Undang.</p>
                <div class="footer-bottom-links">
                    <a href="#">Kebijakan Privasi</a>
                    <a href="#">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Smooth shadow effect on navbar on scroll
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
