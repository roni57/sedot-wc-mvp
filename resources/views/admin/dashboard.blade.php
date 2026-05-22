<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Kontrol Admin - SedotWC.com</title>
    
    <!-- Google Fonts: Outfit & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
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
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.05);
            --shadow-md: 0 4px 6px -1px rgba(0,0,0,0.05), 0 2px 4px -1px rgba(0,0,0,0.03);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.02);
            --transition: all 0.25s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-body);
            background-color: #f1f5f9;
            color: var(--dark);
            min-height: 100vh;
            display: flex;
        }

        /* Sidebar styling */
        aside {
            width: 280px;
            background-color: var(--dark);
            color: var(--white);
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            box-shadow: 4px 0 10px rgba(15, 23, 42, 0.1);
        }

        .aside-header {
            padding: 24px;
            border-bottom: 1px solid rgba(255,255,255,0.06);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .aside-logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.1rem;
            box-shadow: 0 4px 10px rgba(2, 132, 199, 0.3);
        }

        .aside-logo-text {
            font-family: var(--font-title);
            font-weight: 800;
            font-size: 1.25rem;
            background: linear-gradient(to right, #ffffff, #e2e8f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .aside-nav {
            flex-grow: 1;
            padding: 24px 16px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            color: #94a3b8;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 500;
            font-size: 0.95rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .nav-item:hover {
            color: var(--white);
            background-color: rgba(255,255,255,0.03);
        }

        .nav-item.active {
            color: var(--white);
            background-color: var(--primary);
            box-shadow: 0 4px 12px rgba(2, 132, 199, 0.3);
        }

        .aside-footer {
            padding: 24px;
            border-top: 1px solid rgba(255,255,255,0.06);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .admin-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #38bdf8;
            color: var(--dark);
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
        }

        .admin-info h5 {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--white);
        }

        .admin-info p {
            font-size: 0.75rem;
            color: #64748b;
        }

        .btn-logout {
            background: none;
            border: none;
            color: #ef4444;
            cursor: pointer;
            font-size: 1.1rem;
            padding: 8px;
            border-radius: 6px;
            transition: var(--transition);
        }

        .btn-logout:hover {
            background-color: rgba(239, 68, 68, 0.1);
        }

        /* Main Area */
        main {
            margin-left: 280px;
            flex-grow: 1;
            padding: 40px;
            min-width: 0; /* fixes grid blowout */
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }

        .header-title h1 {
            font-family: var(--font-title);
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 4px;
        }

        .header-title p {
            color: var(--gray);
            font-size: 0.95rem;
        }

        .btn-action {
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            border: none;
            transition: var(--transition);
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 10px rgba(2, 132, 199, 0.2);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-1px);
        }

        .btn-secondary {
            background-color: var(--white);
            color: var(--dark-light);
            border: 1px solid var(--gray-light);
            box-shadow: var(--shadow-sm);
        }

        .btn-secondary:hover {
            background-color: var(--light);
        }

        .btn-danger {
            background-color: #ef4444;
            color: var(--white);
        }

        .btn-danger:hover {
            background-color: #dc2626;
        }

        /* Status Grid */
        .status-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            margin-bottom: 40px;
        }

        .status-card {
            background-color: var(--white);
            border-radius: 16px;
            padding: 24px;
            box-shadow: var(--shadow-sm);
            display: flex;
            align-items: center;
            gap: 20px;
            border: 1px solid rgba(226, 232, 240, 0.5);
        }

        .status-icon {
            width: 54px;
            height: 54px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
        }

        .status-icon.blue {
            background-color: var(--primary-light);
            color: var(--primary);
        }

        .status-icon.green {
            background-color: var(--accent-light);
            color: var(--accent);
        }

        .status-icon.orange {
            background-color: #fef3c7;
            color: #d97706;
        }

        .status-icon.purple {
            background-color: #f3e8ff;
            color: #7c3aed;
        }

        .status-info h4 {
            font-size: 1.5rem;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 4px;
        }

        .status-info p {
            font-size: 0.85rem;
            color: var(--gray);
            font-weight: 500;
        }

        /* Panels styling */
        .panel {
            background-color: var(--white);
            border-radius: 20px;
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(226, 232, 240, 0.5);
            display: none;
            overflow: hidden;
            animation: fadeIn 0.4s ease forwards;
        }

        .panel.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .panel-header {
            padding: 24px 30px;
            border-bottom: 1px solid var(--gray-light);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .panel-header h2 {
            font-family: var(--font-title);
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--dark);
        }

        .panel-body {
            padding: 30px;
        }

        /* Forms Layout */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .form-col-full {
            grid-column: span 2;
        }

        .form-label {
            display: block;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--dark-light);
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 1.5px solid var(--gray-light);
            border-radius: 10px;
            font-family: var(--font-body);
            font-size: 0.95rem;
            outline: none;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        .form-actions {
            margin-top: 30px;
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            border-top: 1px solid var(--gray-light);
            padding-top: 24px;
        }

        /* CRUD Table Elements */
        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th {
            padding: 16px 24px;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--gray);
            border-bottom: 1.5px solid var(--gray-light);
            font-weight: 700;
        }

        td {
            padding: 18px 24px;
            border-bottom: 1px solid var(--gray-light);
            font-size: 0.95rem;
            color: var(--dark-light);
        }

        tr:last-child td {
            border-bottom: none;
        }

        .icon-preview {
            width: 38px;
            height: 38px;
            border-radius: 8px;
            background-color: var(--primary-light);
            color: var(--primary);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.05rem;
        }

        .actions-cell {
            display: flex;
            gap: 8px;
        }

        .btn-mini {
            width: 32px;
            height: 32px;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: none;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .btn-mini-edit {
            background-color: #f0fdf4;
            color: var(--accent);
        }

        .btn-mini-edit:hover {
            background-color: var(--accent);
            color: var(--white);
        }

        .btn-mini-delete {
            background-color: #fef2f2;
            color: #ef4444;
        }

        .btn-mini-delete:hover {
            background-color: #ef4444;
            color: var(--white);
        }

        /* Alert Toast */
        .alert-toast {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--dark);
            color: var(--white);
            padding: 16px 24px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.25);
            display: flex;
            align-items: center;
            gap: 12px;
            z-index: 1000;
            animation: slideInLeft 0.3s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .alert-toast.success {
            border-left: 4px solid var(--accent);
        }

        .alert-toast i {
            color: var(--accent);
            font-size: 1.25rem;
        }

        @keyframes slideInLeft {
            from { transform: translateX(100px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        /* Modals (Pure CSS/JS) */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(15, 23, 42, 0.4);
            backdrop-filter: blur(4px);
            z-index: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .modal.open {
            opacity: 1;
            pointer-events: auto;
        }

        .modal-content {
            background-color: var(--white);
            border-radius: 20px;
            width: 100%;
            max-width: 600px;
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            transform: scale(0.95);
            transition: all 0.3s ease;
        }

        .modal.open .modal-content {
            transform: scale(1);
        }

        .modal-header {
            padding: 20px 24px;
            border-bottom: 1px solid var(--gray-light);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h3 {
            font-family: var(--font-title);
            font-size: 1.15rem;
            font-weight: 700;
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 1.25rem;
            cursor: pointer;
            color: var(--gray);
            transition: var(--transition);
        }

        .modal-close:hover {
            color: var(--dark);
        }

        .modal-body {
            padding: 24px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside>
        <div class="aside-header">
            <div class="aside-logo-icon">
                <i class="fas fa-pump-soap"></i>
            </div>
            <span class="aside-logo-text">SedotWC CMS</span>
        </div>
        
        <div class="aside-nav">
            <a onclick="showPanel('settings')" id="nav-settings" class="nav-item active">
                <i class="fas fa-sliders-h"></i> Pengaturan Umum
            </a>
            <a onclick="showPanel('services')" id="nav-services" class="nav-item">
                <i class="fas fa-trash-restore"></i> Layanan Kami
            </a>
            <a onclick="showPanel('benefits')" id="nav-benefits" class="nav-item">
                <i class="fas fa-star"></i> Keunggulan
            </a>
            <a onclick="showPanel('testimonials')" id="nav-testimonials" class="nav-item">
                <i class="fas fa-comments"></i> Testimoni
            </a>
            <a onclick="showPanel('steps')" id="nav-steps" class="nav-item">
                <i class="fas fa-route"></i> Cara Kerja
            </a>
            <a onclick="showPanel('stats')" id="nav-stats" class="nav-item">
                <i class="fas fa-chart-bar"></i> Statistik
            </a>
        </div>

        <div class="aside-footer">
            <div class="admin-profile">
                <div class="admin-avatar">AD</div>
                <div class="admin-info">
                    <h5>Admin</h5>
                    <p>Online</p>
                </div>
            </div>
            <form action="{{ route('admin.logout') }}" method="POST" id="logout-form">
                @csrf
                <button type="submit" class="btn-logout" title="Log Out">
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main>
        <header>
            <div class="header-title">
                <h1 id="page-title">Pengaturan Umum</h1>
                <p id="page-desc">Kelola identitas, deskripsi meta, kontak, dan teks utama di landing page.</p>
            </div>
            <a href="{{ route('home') }}" target="_blank" class="btn-action btn-secondary">
                Lihat Web <i class="fas fa-external-link-alt"></i>
            </a>
        </header>

        <!-- Status Metrics Panel -->
        <div class="status-grid">
            <div class="status-card">
                <div class="status-icon blue"><i class="fas fa-trash-restore"></i></div>
                <div class="status-info">
                    <h4>{{ count($services) }}</h4>
                    <p>Layanan Aktif</p>
                </div>
            </div>
            <div class="status-card">
                <div class="status-icon green"><i class="fas fa-star"></i></div>
                <div class="status-info">
                    <h4>{{ count($benefits) }}</h4>
                    <p>Keunggulan</p>
                </div>
            </div>
            <div class="status-card">
                <div class="status-icon orange"><i class="fas fa-comments"></i></div>
                <div class="status-info">
                    <h4>{{ count($testimonials) }}</h4>
                    <p>Testimoni User</p>
                </div>
            </div>
            <div class="status-card">
                <div class="status-icon purple"><i class="fas fa-route"></i></div>
                <div class="status-info">
                    <h4>{{ count($steps) }}</h4>
                    <p>Langkah Alur</p>
                </div>
            </div>
        </div>

        <!-- 1. SETTINGS PANEL -->
        <div id="panel-settings" class="panel active">
            <div class="panel-header">
                <h2>Edit Pengaturan Situs</h2>
            </div>
            <div class="panel-body">
                <form action="{{ route('admin.settings.update') }}" method="POST">
                    @csrf
                    <div class="form-grid">
                        <div class="form-col-full">
                            <h3 style="border-bottom: 1.5px solid var(--gray-light); padding-bottom: 8px; margin-bottom: 16px; font-size: 1.05rem; color: var(--primary);">1. Optimasi & Identitas SEO</h3>
                        </div>

                        <div>
                            <label class="form-label" for="site_title">Judul Web (Title Tag)</label>
                            <input class="form-control" type="text" name="site_title" id="site_title" value="{{ $settings['site_title'] ?? '' }}" required>
                        </div>
                        <div>
                            <label class="form-label" for="site_description">Meta Deskripsi SEO</label>
                            <input class="form-control" type="text" name="site_description" id="site_description" value="{{ $settings['site_description'] ?? '' }}" required>
                        </div>

                        <div class="form-col-full">
                            <h3 style="border-bottom: 1.5px solid var(--gray-light); padding-bottom: 8px; margin: 16px 0; font-size: 1.05rem; color: var(--primary);">2. Area Hero Section</h3>
                        </div>

                        <div>
                            <label class="form-label" for="hero_badge">Badge Hero</label>
                            <input class="form-control" type="text" name="hero_badge" id="hero_badge" value="{{ $settings['hero_badge'] ?? '' }}" required>
                        </div>
                        <div>
                            <label class="form-label" for="hero_image">URL Image Hero (lokal/eksternal)</label>
                            <input class="form-control" type="text" name="hero_image" id="hero_image" value="{{ $settings['hero_image'] ?? '' }}" required>
                        </div>
                        <div class="form-col-full">
                            <label class="form-label" for="hero_title">Judul Utama Hero (Gunakan tag span untuk highlight warna)</label>
                            <input class="form-control" type="text" name="hero_title" id="hero_title" value="{{ $settings['hero_title'] ?? '' }}" required>
                        </div>
                        <div class="form-col-full">
                            <label class="form-label" for="hero_description">Deskripsi Pendek Hero</label>
                            <textarea class="form-control" name="hero_description" id="hero_description" required>{{ $settings['hero_description'] ?? '' }}</textarea>
                        </div>

                        <div>
                            <label class="form-label" for="floating_badge_1_title">Badge Melayang 1 (Judul)</label>
                            <input class="form-control" type="text" name="floating_badge_1_title" id="floating_badge_1_title" value="{{ $settings['floating_badge_1_title'] ?? '' }}" required>
                        </div>
                        <div>
                            <label class="form-label" for="floating_badge_1_value">Badge Melayang 1 (Nilai)</label>
                            <input class="form-control" type="text" name="floating_badge_1_value" id="floating_badge_1_value" value="{{ $settings['floating_badge_1_value'] ?? '' }}" required>
                        </div>
                        <div>
                            <label class="form-label" for="floating_badge_2_title">Badge Melayang 2 (Judul)</label>
                            <input class="form-control" type="text" name="floating_badge_2_title" id="floating_badge_2_title" value="{{ $settings['floating_badge_2_title'] ?? '' }}" required>
                        </div>
                        <div>
                            <label class="form-label" for="floating_badge_2_value">Badge Melayang 2 (Nilai)</label>
                            <input class="form-control" type="text" name="floating_badge_2_value" id="floating_badge_2_value" value="{{ $settings['floating_badge_2_value'] ?? '' }}" required>
                        </div>

                        <div class="form-col-full">
                            <h3 style="border-bottom: 1.5px solid var(--gray-light); padding-bottom: 8px; margin: 16px 0; font-size: 1.05rem; color: var(--primary);">3. Kontak, Call To Action, & Footer</h3>
                        </div>

                        <div>
                            <label class="form-label" for="contact_whatsapp">Nomor WA Pemesanan (Format: 628123456789)</label>
                            <input class="form-control" type="text" name="contact_whatsapp" id="contact_whatsapp" value="{{ $settings['contact_whatsapp'] ?? '' }}" required>
                        </div>
                        <div>
                            <label class="form-label" for="contact_phone">Teks Telepon Tampilkan</label>
                            <input class="form-control" type="text" name="contact_phone" id="contact_phone" value="{{ $settings['contact_phone'] ?? '' }}" required>
                        </div>
                        <div>
                            <label class="form-label" for="contact_email">Email Kontak</label>
                            <input class="form-control" type="email" name="contact_email" id="contact_email" value="{{ $settings['contact_email'] ?? '' }}" required>
                        </div>
                        <div>
                            <label class="form-label" for="contact_address">Alamat Kantor Lengkap</label>
                            <input class="form-control" type="text" name="contact_address" id="contact_address" value="{{ $settings['contact_address'] ?? '' }}" required>
                        </div>
                        <div class="form-col-full">
                            <label class="form-label" for="footer_about">Keterangan Footer Tentang</label>
                            <textarea class="form-control" name="footer_about" id="footer_about" required>{{ $settings['footer_about'] ?? '' }}</textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-action btn-primary">
                            <i class="fas fa-save"></i> Simpan Semua Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- 2. SERVICES PANEL -->
        <div id="panel-services" class="panel">
            <div class="panel-header">
                <h2>Daftar Layanan Sanitasi</h2>
                <button onclick="openModal('modal-add-service')" class="btn-action btn-primary">
                    <i class="fas fa-plus"></i> Tambah Layanan Baru
                </button>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 80px;">Icon</th>
                                <th>Nama Layanan</th>
                                <th>Deskripsi Penjelasan</th>
                                <th>Pesan Kustom WA</th>
                                <th style="width: 80px; text-align: center;">Urutan</th>
                                <th style="width: 120px; text-align: right;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($services as $service)
                                <tr>
                                    <td>
                                        <div class="icon-preview"><i class="{{ $service->icon }}"></i></div>
                                    </td>
                                    <td style="font-weight: 700;">{{ $service->title }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td style="font-family: monospace; font-size: 0.8rem; color: var(--gray);">{{ $service->wa_text }}</td>
                                    <td style="text-align: center;">{{ $service->order_index }}</td>
                                    <td>
                                        <div class="actions-cell">
                                            <button onclick='openEditServiceModal(@json($service))' class="btn-mini btn-mini-edit" title="Edit"><i class="fas fa-edit"></i></button>
                                            <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus layanan ini?')" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn-mini btn-mini-delete" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" style="text-align: center; color: var(--gray); padding: 40px;">Belum ada layanan ditambahkan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 3. BENEFITS PANEL -->
        <div id="panel-benefits" class="panel">
            <div class="panel-header">
                <h2>Daftar Keunggulan Jasa</h2>
                <button onclick="openModal('modal-add-benefit')" class="btn-action btn-primary">
                    <i class="fas fa-plus"></i> Tambah Keunggulan
                </button>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 80px;">Icon</th>
                                <th>Nama Keunggulan</th>
                                <th>Deskripsi Keunggulan</th>
                                <th style="width: 80px; text-align: center;">Urutan</th>
                                <th style="width: 120px; text-align: right;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($benefits as $benefit)
                                <tr>
                                    <td>
                                        <div class="icon-preview"><i class="{{ $benefit->icon }}"></i></div>
                                    </td>
                                    <td style="font-weight: 700;">{{ $benefit->title }}</td>
                                    <td>{{ $benefit->description }}</td>
                                    <td style="text-align: center;">{{ $benefit->order_index }}</td>
                                    <td>
                                        <div class="actions-cell">
                                            <button onclick='openEditBenefitModal(@json($benefit))' class="btn-mini btn-mini-edit" title="Edit"><i class="fas fa-edit"></i></button>
                                            <form action="{{ route('admin.benefits.destroy', $benefit->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus keunggulan ini?')" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn-mini btn-mini-delete" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" style="text-align: center; color: var(--gray); padding: 40px;">Belum ada keunggulan ditambahkan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 4. TESTIMONIALS PANEL -->
        <div id="panel-testimonials" class="panel">
            <div class="panel-header">
                <h2>Daftar Testimoni Pelanggan</h2>
                <button onclick="openModal('modal-add-testimonial')" class="btn-action btn-primary">
                    <i class="fas fa-plus"></i> Tambah Testimoni
                </button>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Nama Pelanggan</th>
                                <th>Isi Ulasan Review</th>
                                <th style="width: 120px;">Bintang Rating</th>
                                <th style="width: 80px; text-align: center;">Urutan</th>
                                <th style="width: 120px; text-align: right;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($testimonials as $testimonial)
                                <tr>
                                    <td style="font-weight: 700;">{{ $testimonial->name }}</td>
                                    <td style="font-style: italic;">"{{ $testimonial->text }}"</td>
                                    <td style="color: #fbbf24;">
                                        @for($i=1; $i<=$testimonial->stars; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                    </td>
                                    <td style="text-align: center;">{{ $testimonial->order_index }}</td>
                                    <td>
                                        <div class="actions-cell">
                                            <button onclick='openEditTestimonialModal(@json($testimonial))' class="btn-mini btn-mini-edit" title="Edit"><i class="fas fa-edit"></i></button>
                                            <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus ulasan ini?')" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn-mini btn-mini-delete" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" style="text-align: center; color: var(--gray); padding: 40px;">Belum ada testimoni ditambahkan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 5. STEPS PANEL -->
        <div id="panel-steps" class="panel">
            <div class="panel-header">
                <h2>Alur & Cara Kerja Layanan</h2>
                <button onclick="openModal('modal-add-step')" class="btn-action btn-primary">
                    <i class="fas fa-plus"></i> Tambah Langkah
                </button>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 80px; text-align: center;">Nomor</th>
                                <th>Nama Langkah Kerja</th>
                                <th>Penjelasan Deskripsi</th>
                                <th style="width: 80px; text-align: center;">Urutan</th>
                                <th style="width: 120px; text-align: right;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($steps as $step)
                                <tr>
                                    <td style="text-align: center; font-weight: 800; color: var(--primary);">{{ $step->step_number }}</td>
                                    <td style="font-weight: 700;">{{ $step->title }}</td>
                                    <td>{{ $step->description }}</td>
                                    <td style="text-align: center;">{{ $step->order_index }}</td>
                                    <td>
                                        <div class="actions-cell">
                                            <button onclick='openEditStepModal(@json($step))' class="btn-mini btn-mini-edit" title="Edit"><i class="fas fa-edit"></i></button>
                                            <form action="{{ route('admin.steps.destroy', $step->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus alur ini?')" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn-mini btn-mini-delete" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" style="text-align: center; color: var(--gray); padding: 40px;">Belum ada langkah kerja ditambahkan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 6. STATS PANEL -->
        <div id="panel-stats" class="panel">
            <div class="panel-header">
                <h2>Statistik & Keberhasilan</h2>
                <button onclick="openModal('modal-add-stat')" class="btn-action btn-primary">
                    <i class="fas fa-plus"></i> Tambah Statistik
                </button>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Label Statistik</th>
                                <th>Nilai / Value Tampil</th>
                                <th style="width: 80px; text-align: center;">Urutan</th>
                                <th style="width: 120px; text-align: right;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($stats as $stat)
                                <tr>
                                    <td style="font-weight: 700;">{{ $stat->label }}</td>
                                    <td style="font-family: monospace; font-size: 1.1rem; color: var(--primary); font-weight: 700;">{{ $stat->value }}</td>
                                    <td style="text-align: center;">{{ $stat->order_index }}</td>
                                    <td>
                                        <div class="actions-cell">
                                            <button onclick='openEditStatModal(@json($stat))' class="btn-mini btn-mini-edit" title="Edit"><i class="fas fa-edit"></i></button>
                                            <form action="{{ route('admin.stats.destroy', $stat->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus statistik ini?')" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn-mini btn-mini-delete" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" style="text-align: center; color: var(--gray); padding: 40px;">Belum ada data statistik ditambahkan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

    <!-- SUCCESS TOAST NOTIFICATION -->
    @if(session('success'))
        <div class="alert-toast success" id="toast-success">
            <i class="fas fa-check-circle"></i>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <!-- ================= MODALS SECTION ================= -->

    <!-- A. SERVICE ADD MODAL -->
    <div class="modal" id="modal-add-service">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Tambah Layanan Baru</h3>
                <button onclick="closeModal('modal-add-service')" class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.services.store') }}" method="POST">
                    @csrf
                    <div class="form-grid">
                        <div>
                            <label class="form-label" for="add-service-title">Nama Layanan</label>
                            <input class="form-control" type="text" name="title" id="add-service-title" required placeholder="Contoh: Sedot WC Mampet">
                        </div>
                        <div>
                            <label class="form-label" for="add-service-icon">Icon Class (FontAwesome)</label>
                            <input class="form-control" type="text" name="icon" id="add-service-icon" required placeholder="Contoh: fas fa-shower">
                        </div>
                        <div class="form-col-full">
                            <label class="form-label" for="add-service-desc">Deskripsi Layanan</label>
                            <textarea class="form-control" name="description" id="add-service-desc" required placeholder="Jelaskan mengenai detail pengerjaan layanan ini..."></textarea>
                        </div>
                        <div>
                            <label class="form-label" for="add-service-wa">Custom Teks WhatsApp</label>
                            <input class="form-control" type="text" name="wa_text" id="add-service-wa" placeholder="Contoh: Halo saya ingin pesan layanan WC mampet...">
                        </div>
                        <div>
                            <label class="form-label" for="add-service-order">Urutan Tampil</label>
                            <input class="form-control" type="number" name="order_index" id="add-service-order" value="0" required>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" onclick="closeModal('modal-add-service')" class="btn-action btn-secondary">Batal</button>
                        <button type="submit" class="btn-action btn-primary">Tambah Layanan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- B. SERVICE EDIT MODAL -->
    <div class="modal" id="modal-edit-service">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit Layanan</h3>
                <button onclick="closeModal('modal-edit-service')" class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="form-edit-service">
                    @csrf
                    <div class="form-grid">
                        <div>
                            <label class="form-label" for="edit-service-title">Nama Layanan</label>
                            <input class="form-control" type="text" name="title" id="edit-service-title" required>
                        </div>
                        <div>
                            <label class="form-label" for="edit-service-icon">Icon Class (FontAwesome)</label>
                            <input class="form-control" type="text" name="icon" id="edit-service-icon" required>
                        </div>
                        <div class="form-col-full">
                            <label class="form-label" for="edit-service-desc">Deskripsi Layanan</label>
                            <textarea class="form-control" name="description" id="edit-service-desc" required></textarea>
                        </div>
                        <div>
                            <label class="form-label" for="edit-service-wa">Custom Teks WhatsApp</label>
                            <input class="form-control" type="text" name="wa_text" id="edit-service-wa">
                        </div>
                        <div>
                            <label class="form-label" for="edit-service-order">Urutan Tampil</label>
                            <input class="form-control" type="number" name="order_index" id="edit-service-order" required>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" onclick="closeModal('modal-edit-service')" class="btn-action btn-secondary">Batal</button>
                        <button type="submit" class="btn-action btn-primary">Simpan Layanan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- C. BENEFIT ADD MODAL -->
    <div class="modal" id="modal-add-benefit">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Tambah Keunggulan Baru</h3>
                <button onclick="closeModal('modal-add-benefit')" class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.benefits.store') }}" method="POST">
                    @csrf
                    <div class="form-grid">
                        <div>
                            <label class="form-label" for="add-benefit-title">Nama Keunggulan</label>
                            <input class="form-control" type="text" name="title" id="add-benefit-title" required placeholder="Contoh: Harga Transparan">
                        </div>
                        <div>
                            <label class="form-label" for="add-benefit-icon">Icon Class (FontAwesome)</label>
                            <input class="form-control" type="text" name="icon" id="add-benefit-icon" required placeholder="Contoh: fas fa-tags">
                        </div>
                        <div class="form-col-full">
                            <label class="form-label" for="add-benefit-desc">Deskripsi Keunggulan</label>
                            <textarea class="form-control" name="description" id="add-benefit-desc" required placeholder="Jelaskan mengenai detail keunggulan ini..."></textarea>
                        </div>
                        <div>
                            <label class="form-label" for="add-benefit-order">Urutan Tampil</label>
                            <input class="form-control" type="number" name="order_index" id="add-benefit-order" value="0" required>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" onclick="closeModal('modal-add-benefit')" class="btn-action btn-secondary">Batal</button>
                        <button type="submit" class="btn-action btn-primary">Tambah Keunggulan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- D. BENEFIT EDIT MODAL -->
    <div class="modal" id="modal-edit-benefit">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit Keunggulan</h3>
                <button onclick="closeModal('modal-edit-benefit')" class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="form-edit-benefit">
                    @csrf
                    <div class="form-grid">
                        <div>
                            <label class="form-label" for="edit-benefit-title">Nama Keunggulan</label>
                            <input class="form-control" type="text" name="title" id="edit-benefit-title" required>
                        </div>
                        <div>
                            <label class="form-label" for="edit-benefit-icon">Icon Class (FontAwesome)</label>
                            <input class="form-control" type="text" name="icon" id="edit-benefit-icon" required>
                        </div>
                        <div class="form-col-full">
                            <label class="form-label" for="edit-benefit-desc">Deskripsi Keunggulan</label>
                            <textarea class="form-control" name="description" id="edit-benefit-desc" required></textarea>
                        </div>
                        <div>
                            <label class="form-label" for="edit-benefit-order">Urutan Tampil</label>
                            <input class="form-control" type="number" name="order_index" id="edit-benefit-order" required>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" onclick="closeModal('modal-edit-benefit')" class="btn-action btn-secondary">Batal</button>
                        <button type="submit" class="btn-action btn-primary">Simpan Keunggulan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- E. TESTIMONIAL ADD MODAL -->
    <div class="modal" id="modal-add-testimonial">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Tambah Testimoni Baru</h3>
                <button onclick="closeModal('modal-add-testimonial')" class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.testimonials.store') }}" method="POST">
                    @csrf
                    <div class="form-grid">
                        <div>
                            <label class="form-label" for="add-testi-name">Nama Pelanggan</label>
                            <input class="form-control" type="text" name="name" id="add-testi-name" required placeholder="Contoh: Pak Budi, Jakarta">
                        </div>
                        <div>
                            <label class="form-label" for="add-testi-stars">Bintang Rating (1-5)</label>
                            <input class="form-control" type="number" name="stars" id="add-testi-stars" value="5" min="1" max="5" required>
                        </div>
                        <div class="form-col-full">
                            <label class="form-label" for="add-testi-text">Isi Review Ulasan</label>
                            <textarea class="form-control" name="text" id="add-testi-text" required placeholder="Masukkan kata-kata positif yang diberikan pelanggan..."></textarea>
                        </div>
                        <div>
                            <label class="form-label" for="add-testi-order">Urutan Tampil</label>
                            <input class="form-control" type="number" name="order_index" id="add-testi-order" value="0" required>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" onclick="closeModal('modal-add-testimonial')" class="btn-action btn-secondary">Batal</button>
                        <button type="submit" class="btn-action btn-primary">Tambah Testimoni</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- F. TESTIMONIAL EDIT MODAL -->
    <div class="modal" id="modal-edit-testimonial">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit Testimoni</h3>
                <button onclick="closeModal('modal-edit-testimonial')" class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="form-edit-testimonial">
                    @csrf
                    <div class="form-grid">
                        <div>
                            <label class="form-label" for="edit-testi-name">Nama Pelanggan</label>
                            <input class="form-control" type="text" name="name" id="edit-testi-name" required>
                        </div>
                        <div>
                            <label class="form-label" for="edit-testi-stars">Bintang Rating (1-5)</label>
                            <input class="form-control" type="number" name="stars" id="edit-testi-stars" min="1" max="5" required>
                        </div>
                        <div class="form-col-full">
                            <label class="form-label" for="edit-testi-text">Isi Review Ulasan</label>
                            <textarea class="form-control" name="text" id="edit-testi-text" required></textarea>
                        </div>
                        <div>
                            <label class="form-label" for="edit-testi-order">Urutan Tampil</label>
                            <input class="form-control" type="number" name="order_index" id="edit-testi-order" required>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" onclick="closeModal('modal-edit-testimonial')" class="btn-action btn-secondary">Batal</button>
                        <button type="submit" class="btn-action btn-primary">Simpan Testimoni</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- G. STEP ADD MODAL -->
    <div class="modal" id="modal-add-step">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Tambah Langkah Alur Kerja</h3>
                <button onclick="closeModal('modal-add-step')" class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.steps.store') }}" method="POST">
                    @csrf
                    <div class="form-grid">
                        <div>
                            <label class="form-label" for="add-step-title">Nama Langkah</label>
                            <input class="form-control" type="text" name="title" id="add-step-title" required placeholder="Contoh: Tim Meluncur">
                        </div>
                        <div>
                            <label class="form-label" for="add-step-num">Nomor Tampilan (Visual)</label>
                            <input class="form-control" type="number" name="step_number" id="add-step-num" value="1" required>
                        </div>
                        <div class="form-col-full">
                            <label class="form-label" for="add-step-desc">Penjelasan Detail Langkah</label>
                            <textarea class="form-control" name="description" id="add-step-desc" required placeholder="Jelaskan apa yang dilakukan pelanggan/tim pada tahap ini..."></textarea>
                        </div>
                        <div>
                            <label class="form-label" for="add-step-order">Urutan Urut</label>
                            <input class="form-control" type="number" name="order_index" id="add-step-order" value="0" required>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" onclick="closeModal('modal-add-step')" class="btn-action btn-secondary">Batal</button>
                        <button type="submit" class="btn-action btn-primary">Tambah Langkah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- H. STEP EDIT MODAL -->
    <div class="modal" id="modal-edit-step">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit Langkah Alur Kerja</h3>
                <button onclick="closeModal('modal-edit-step')" class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="form-edit-step">
                    @csrf
                    <div class="form-grid">
                        <div>
                            <label class="form-label" for="edit-step-title">Nama Langkah</label>
                            <input class="form-control" type="text" name="title" id="edit-step-title" required>
                        </div>
                        <div>
                            <label class="form-label" for="edit-step-num">Nomor Tampilan (Visual)</label>
                            <input class="form-control" type="number" name="step_number" id="edit-step-num" required>
                        </div>
                        <div class="form-col-full">
                            <label class="form-label" for="edit-step-desc">Penjelasan Detail Langkah</label>
                            <textarea class="form-control" name="description" id="edit-step-desc" required></textarea>
                        </div>
                        <div>
                            <label class="form-label" for="edit-step-order">Urutan Urut</label>
                            <input class="form-control" type="number" name="order_index" id="edit-step-order" required>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" onclick="closeModal('modal-edit-step')" class="btn-action btn-secondary">Batal</button>
                        <button type="submit" class="btn-action btn-primary">Simpan Langkah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- I. STAT ADD MODAL -->
    <div class="modal" id="modal-add-stat">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Tambah Statistik</h3>
                <button onclick="closeModal('modal-add-stat')" class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.stats.store') }}" method="POST">
                    @csrf
                    <div class="form-grid">
                        <div>
                            <label class="form-label" for="add-stat-label">Label Statistik</label>
                            <input class="form-control" type="text" name="label" id="add-stat-label" required placeholder="Contoh: Pekerjaan Selesai">
                        </div>
                        <div>
                            <label class="form-label" for="add-stat-value">Nilai Tampil</label>
                            <input class="form-control" type="text" name="value" id="add-stat-value" required placeholder="Contoh: 12k+">
                        </div>
                        <div>
                            <label class="form-label" for="add-stat-order">Urutan Tampil</label>
                            <input class="form-control" type="number" name="order_index" id="add-stat-order" value="0" required>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" onclick="closeModal('modal-add-stat')" class="btn-action btn-secondary">Batal</button>
                        <button type="submit" class="btn-action btn-primary">Tambah Statistik</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- J. STAT EDIT MODAL -->
    <div class="modal" id="modal-edit-stat">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit Statistik</h3>
                <button onclick="closeModal('modal-edit-stat')" class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="form-edit-stat">
                    @csrf
                    <div class="form-grid">
                        <div>
                            <label class="form-label" for="edit-stat-label">Label Statistik</label>
                            <input class="form-control" type="text" name="label" id="edit-stat-label" required>
                        </div>
                        <div>
                            <label class="form-label" for="edit-stat-value">Nilai Tampil</label>
                            <input class="form-control" type="text" name="value" id="edit-stat-value" required>
                        </div>
                        <div>
                            <label class="form-label" for="edit-stat-order">Urutan Tampil</label>
                            <input class="form-control" type="number" name="order_index" id="edit-stat-order" required>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" onclick="closeModal('modal-edit-stat')" class="btn-action btn-secondary">Batal</button>
                        <button type="submit" class="btn-action btn-primary">Simpan Statistik</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ================= JAVASCRIPT ================= -->
    <script>
        // Tab switching logic
        function showPanel(panelName) {
            // Hide all panels
            const panels = document.querySelectorAll('.panel');
            panels.forEach(p => p.classList.remove('active'));

            // Deactivate all nav items
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(n => n.classList.remove('active'));

            // Show active panel & nav item
            document.getElementById('panel-' + panelName).classList.add('active');
            document.getElementById('nav-' + panelName).classList.add('active');

            // Update titles
            const pageTitle = document.getElementById('page-title');
            const pageDesc = document.getElementById('page-desc');

            if (panelName === 'settings') {
                pageTitle.innerText = "Pengaturan Umum";
                pageDesc.innerText = "Kelola identitas, deskripsi meta, kontak, dan teks utama di landing page.";
            } else if (panelName === 'services') {
                pageTitle.innerText = "Layanan Kami";
                pageDesc.innerText = "Tambah, ubah, dan hapus jenis pelayanan sanitasi yang ditawarkan.";
            } else if (panelName === 'benefits') {
                pageTitle.innerText = "Keunggulan Jasa";
                pageDesc.innerText = "Kelola poin-poin keunggulan yang membuat jasa Anda terbaik.";
            } else if (panelName === 'testimonials') {
                pageTitle.innerText = "Testimoni Pelanggan";
                pageDesc.innerText = "Kelola ulasan dan tingkat kepuasan bintang lima dari konsumen.";
            } else if (panelName === 'steps') {
                pageTitle.innerText = "Alur & Cara Kerja";
                pageDesc.innerText = "Kelola tahapan dan proses pengerjaan dari kontak hingga selesai.";
            } else if (panelName === 'stats') {
                pageTitle.innerText = "Data Statistik";
                pageDesc.innerText = "Kelola angka-angka metrics keberhasilan dan reputasi perusahaan.";
            }
        }

        // Modal triggers
        function openModal(id) {
            document.getElementById(id).classList.add('open');
        }

        function closeModal(id) {
            document.getElementById(id).classList.remove('open');
        }

        // --- Edit Service Modal population ---
        function openEditServiceModal(service) {
            const form = document.getElementById('form-edit-service');
            form.action = "/admin/services/" + service.id + "/update";
            
            document.getElementById('edit-service-title').value = service.title;
            document.getElementById('edit-service-icon').value = service.icon;
            document.getElementById('edit-service-desc').value = service.description;
            document.getElementById('edit-service-wa').value = service.wa_text || '';
            document.getElementById('edit-service-order').value = service.order_index;
            
            openModal('modal-edit-service');
        }

        // --- Edit Benefit Modal population ---
        function openEditBenefitModal(benefit) {
            const form = document.getElementById('form-edit-benefit');
            form.action = "/admin/benefits/" + benefit.id + "/update";
            
            document.getElementById('edit-benefit-title').value = benefit.title;
            document.getElementById('edit-benefit-icon').value = benefit.icon;
            document.getElementById('edit-benefit-desc').value = benefit.description;
            document.getElementById('edit-benefit-order').value = benefit.order_index;
            
            openModal('modal-edit-benefit');
        }

        // --- Edit Testimonial Modal population ---
        function openEditTestimonialModal(testimonial) {
            const form = document.getElementById('form-edit-testimonial');
            form.action = "/admin/testimonials/" + testimonial.id + "/update";
            
            document.getElementById('edit-testi-name').value = testimonial.name;
            document.getElementById('edit-testi-stars').value = testimonial.stars;
            document.getElementById('edit-testi-text').value = testimonial.text;
            document.getElementById('edit-testi-order').value = testimonial.order_index;
            
            openModal('modal-edit-testimonial');
        }

        // --- Edit Step Modal population ---
        function openEditStepModal(step) {
            const form = document.getElementById('form-edit-step');
            form.action = "/admin/steps/" + step.id + "/update";
            
            document.getElementById('edit-step-title').value = step.title;
            document.getElementById('edit-step-num').value = step.step_number;
            document.getElementById('edit-step-desc').value = step.description;
            document.getElementById('edit-step-order').value = step.order_index;
            
            openModal('modal-edit-step');
        }

        // --- Edit Stat Modal population ---
        function openEditStatModal(stat) {
            const form = document.getElementById('form-edit-stat');
            form.action = "/admin/stats/" + stat.id + "/update";
            
            document.getElementById('edit-stat-label').value = stat.label;
            document.getElementById('edit-stat-value').value = stat.value;
            document.getElementById('edit-stat-order').value = stat.order_index;
            
            openModal('modal-edit-stat');
        }

        // Close toast alert automatically after 3.5s
        const toast = document.getElementById('toast-success');
        if (toast) {
            setTimeout(() => {
                toast.style.opacity = '0';
                toast.style.transition = 'opacity 0.5s ease';
                setTimeout(() => toast.remove(), 500);
            }, 3500);
        }
    </script>
</body>
</html>
