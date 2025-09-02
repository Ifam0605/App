<?php
include 'libs/load.php';
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <?php load_template('_head'); ?>
    <style>
    /* Colorful Theme Styles */
    :root {
        --primary: #6f42c1;
        --secondary: #fd7e14;
        --accent: #20c997;
        --light: #f8f9fa;
        --dark: #212529;
        --gradient-start: #ff6b6b;
        --gradient-end: #6f42c1;
    }

    body {
        background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    header {
        background-color: rgba(33, 37, 41, 0.8);
        backdrop-filter: blur(10px);
    }

    .form-signin {
        max-width: 400px;
        padding: 2rem;

        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        margin: 2rem auto;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="text"],
    .form-signin input[type="email"],
    .form-signin input[type="password"] {
        margin-bottom: 15px;
        border-radius: 8px;
        padding: 12px;
        border: 2px solid #e9ecef;
        transition: all 0.3s;
    }

    .form-signin input:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.25rem rgba(111, 66, 193, 0.25);
    }

    .btn-primary {
        background: linear-gradient(to right, var(--primary), var(--secondary));
        border: none;
        padding: 12px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .form-title {
        text-align: center;
        color: var(--primary);
        margin-bottom: 1.5rem;
        font-weight: 700;
        font-size: 1.8rem;
    }

    .form-footer {
        text-align: center;
        margin-top: 1.5rem;
        color: #6c757d;
    }

    .form-footer a {
        color: var(--secondary);
        text-decoration: none;
        font-weight: 600;
    }

    .form-footer a:hover {
        text-decoration: underline;
        color: var(--primary);
    }

    footer {
        background-color: rgba(33, 37, 41, 0.9);
        backdrop-filter: blur(10px);
        margin-top: auto;
        color: white;
    }

    /* Decorative elements */
    .decoration {
        position: absolute;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background: linear-gradient(145deg, var(--accent), var(--primary));
        opacity: 0.1;
        z-index: -1;
    }

    .decoration-1 {
        top: 10%;
        left: 10%;
    }

    .decoration-2 {
        bottom: 10%;
        right: 10%;
        background: linear-gradient(145deg, var(--secondary), var(--accent));
    }

    /* Social buttons */
    .social-btn {
        display: block;
        text-align: center;
        padding: 10px;
        border-radius: 8px;
        margin-bottom: 10px;
        font-weight: 500;
        transition: all 0.3s;
    }

    .social-btn.google {
        background-color: #db4437;
        color: white;
    }

    .social-btn.facebook {
        background-color: #4267B2;
        color: white;
    }

    .social-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .divider {
        display: flex;
        align-items: center;
        text-align: center;
        color: #6c757d;
        margin: 20px 0;
    }

    .divider::before,
    .divider::after {
        content: '';
        flex: 1;
        border-bottom: 1px solid #dee2e6;
    }

    .divider::before {
        margin-right: .5em;
    }

    .divider::after {
        margin-left: .5em;
    }
    </style>
</head>

<body>
    <div class="decoration decoration-1"></div>
    <div class="decoration decoration-2"></div>

    <?php load_template('_them'); ?>

    <header data-bs-theme="dark">
        <?php load_template('_header'); ?>
    </header>

    <main>
        <div class="container">
            <?php load_template('_singup'); ?>
        </div>
    </main>

    <footer class="text-body-secondary py-5">
        <?php load_template('_footer'); ?>
    </footer>

    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>