<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SedotWC.com</title>
    
    <!-- Google Fonts: Outfit & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --bg-color: #0b0f19;
            --primary: #0284c7;
            --primary-glow: rgba(2, 132, 199, 0.35);
            --accent: #10b981;
            --accent-glow: rgba(16, 185, 129, 0.3);
            --text-color: #f8fafc;
            --text-muted: #94a3b8;
            --card-bg: rgba(15, 23, 42, 0.65);
            --card-border: rgba(255, 255, 255, 0.08);
            --font-title: 'Outfit', sans-serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-body);
            background-color: var(--bg-color);
            color: var(--text-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
            position: relative;
        }

        /* Ambient Glow Backgrounds */
        .glow-1 {
            position: absolute;
            top: -20%;
            left: -10%;
            width: 60vw;
            height: 60vw;
            background: radial-gradient(circle, var(--primary-glow) 0%, rgba(2, 132, 199, 0) 70%);
            border-radius: 50%;
            z-index: 1;
            pointer-events: none;
            animation: moveGlow 15s ease-in-out infinite alternate;
        }

        .glow-2 {
            position: absolute;
            bottom: -20%;
            right: -10%;
            width: 50vw;
            height: 50vw;
            background: radial-gradient(circle, var(--accent-glow) 0%, rgba(16, 185, 129, 0) 70%);
            border-radius: 50%;
            z-index: 1;
            pointer-events: none;
            animation: moveGlow 20s ease-in-out infinite alternate-reverse;
        }

        @keyframes moveGlow {
            0% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(50px, 30px) scale(1.1); }
            100% { transform: translate(-30px, -50px) scale(0.9); }
        }

        .wrapper {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 440px;
            padding: 24px;
        }

        /* Glassmorphic Login Card */
        .card {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--card-border);
            border-radius: 24px;
            padding: 48px 40px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
            animation: slideUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 200%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.05), transparent);
            transform: skewX(-25deg);
            transition: 0.75s;
            pointer-events: none;
        }

        .card:hover::before {
            left: 100%;
            transition: 0.75s;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Header logo */
        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 18px;
            color: white;
            font-size: 1.75rem;
            box-shadow: 0 8px 24px rgba(2, 132, 199, 0.4);
            margin-bottom: 20px;
            position: relative;
        }

        .logo::after {
            content: '';
            position: absolute;
            top: -3px;
            left: -3px;
            right: -3px;
            bottom: -3px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 21px;
            z-index: -1;
            opacity: 0.5;
            filter: blur(6px);
        }

        .title {
            font-family: var(--font-title);
            font-size: 2rem;
            font-weight: 800;
            background: linear-gradient(to right, #ffffff, #cbd5e1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }

        .subtitle {
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        /* Form styling */
        .form-group {
            position: relative;
            margin-bottom: 28px;
        }

        .form-input {
            width: 100%;
            padding: 16px 20px 16px 50px;
            background: rgba(15, 23, 42, 0.5);
            border: 1.5px solid rgba(255, 255, 255, 0.08);
            border-radius: 14px;
            font-family: var(--font-body);
            font-size: 0.95rem;
            color: var(--text-color);
            outline: none;
            transition: var(--transition);
        }

        .form-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 20px rgba(2, 132, 199, 0.25), inset 0 1px 2px rgba(0, 0, 0, 0.2);
            background: rgba(15, 23, 42, 0.8);
        }

        .form-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            font-size: 1.1rem;
            transition: var(--transition);
            pointer-events: none;
        }

        .form-input:focus + .form-icon {
            color: var(--primary);
        }

        .toggle-password {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            cursor: pointer;
            font-size: 1.1rem;
            transition: var(--transition);
        }

        .toggle-password:hover {
            color: var(--text-color);
        }

        /* Custom Checkbox */
        .options-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
            font-size: 0.85rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            color: var(--text-muted);
            user-select: none;
        }

        .remember-checkbox {
            appearance: none;
            width: 18px;
            height: 18px;
            border: 1.5px solid rgba(255, 255, 255, 0.2);
            border-radius: 6px;
            background: rgba(15, 23, 42, 0.5);
            cursor: pointer;
            position: relative;
            outline: none;
            transition: var(--transition);
        }

        .remember-checkbox:checked {
            background: var(--primary);
            border-color: var(--primary);
        }

        .remember-checkbox:checked::after {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 0.65rem;
        }

        .forgot-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .forgot-link:hover {
            color: var(--accent);
            text-decoration: underline;
        }

        /* Button Gradient & Glow */
        .btn-submit {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border: none;
            border-radius: 14px;
            color: white;
            font-family: var(--font-title);
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(2, 132, 199, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(2, 132, 199, 0.4), 0 0 15px rgba(16, 185, 129, 0.3);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        /* Alert styling */
        .alert {
            padding: 14px 16px;
            border-radius: 12px;
            font-size: 0.85rem;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 10px;
            animation: fadeIn 0.4s ease;
        }

        .alert-danger {
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #f87171;
        }

        .alert-success {
            background: rgba(16, 185, 129, 0.15);
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: #34d399;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-5px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Footer info */
        .footer {
            text-align: center;
            margin-top: 32px;
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        .footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="glow-1"></div>
    <div class="glow-2"></div>

    <div class="wrapper">
        <div class="card">
            <div class="header">
                <div class="logo">
                    <i class="fas fa-pump-soap"></i>
                </div>
                <h1 class="title">CMS Admin</h1>
                <p class="subtitle">Kelola seluruh konten landing page secara dinamis</p>
            </div>

            <!-- Success Alert -->
            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <!-- Error Alerts -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-input" placeholder="Email Admin" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <i class="fas fa-envelope form-icon"></i>
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-input" placeholder="Kata Sandi" required autocomplete="current-password">
                    <i class="fas fa-lock form-icon"></i>
                    <i class="fas fa-eye toggle-password" id="togglePassword"></i>
                </div>

                <div class="options-row">
                    <label class="remember-me">
                        <input type="checkbox" name="remember" id="remember" class="remember-checkbox">
                        <span>Ingat saya</span>
                    </label>
                    <a href="{{ route('home') }}" class="forgot-link">Kembali ke Web <i class="fas fa-arrow-right" style="font-size: 0.75rem;"></i></a>
                </div>

                <button type="submit" class="btn-submit">
                    Masuk Sekarang <i class="fas fa-sign-in-alt"></i>
                </button>
            </form>
        </div>

        <div class="footer">
            &copy; 2026 <a href="{{ route('home') }}">SedotWC.com</a>. Seluruh hak cipta dilindungi.
        </div>
    </div>

    <script>
        // Password visibility toggler
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function () {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            // toggle the eye icon
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
