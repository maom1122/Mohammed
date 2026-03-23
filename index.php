<?php
// بياناتك الشخصية - يمكنك تعديلها بسهولة من هنا
$name = "محمد الزبيدي";
$job_title = "مطور ويب | مصمم إبداعي";
$bio = "أهلاً بك في عالمي الرقمي، حيث يلتقي الإبداع بالبرمجة لبناء تجارب مستخدم فريدة.";

// روابط التواصل الاجتماعي (أضف روابطك هنا)
$social_links = [
    ['icon' => 'fab fa-twitter', 'link' => 'https://twitter.com/your-username'],
    ['icon' => 'fab fa-instagram', 'link' => 'https://instagram.com/your-username'],
    ['icon' => 'fab fa-linkedin-in', 'link' => 'https://linkedin.com/in/your-username'],
    ['icon' => 'fab fa-github', 'link' => 'https://github.com/your-username'],
    ['envelope' => 'fas fa-envelope', 'link' => 'mailto:mohammed@example.com']
];
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> | الصفحة الشخصية</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-gradient: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            --glass-bg: rgba(255, 255, 255, 0.1);
            --text-color: #ffffff;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Cairo', sans-serif;
            color: var(--text-color);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            /* الخلفية المتحركة */
            background: var(--bg-gradient);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .card {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            max-width: 400px;
            width: 90%;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid rgba(255, 255, 255, 0.5);
            margin-bottom: 20px;
            object-fit: cover;
        }

        h1 { margin: 10px 0; font-size: 2rem; }
        p.title { font-weight: bold; color: #ffd700; margin-bottom: 15px; }
        p.bio { font-size: 0.9rem; line-height: 1.6; margin-bottom: 30px; opacity: 0.9; }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-icons a {
            color: white;
            font-size: 1.5rem;
            text-decoration: none;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            background: #fff;
            color: #e73c7e;
            transform: scale(1.2) rotate(360deg);
        }
    </style>
</head>
<body>

    <div class="card">
        <img src="https://via.placeholder.com/150" alt="محمد الزبيدي" class="profile-img">
        
        <h1><?php echo $name; ?></h1>
        <p class="title"><?php echo $job_title; ?></p>
        <p class="bio"><?php echo $bio; ?></p>

        <div class="social-icons">
            <?php foreach ($social_links as $social): ?>
                <?php 
                    $icon = isset($social['icon']) ? $social['icon'] : $social['envelope'];
                ?>
                <a href="<?php echo $social['link']; ?>" target="_blank">
                    <i class="<?php echo $icon; ?>"></i>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>
