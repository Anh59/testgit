<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ Học Tiếng Anh</title>
    <style>
        /* Các CSS hiện tại của bạn ở đây */
        /* ... */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #0056b3;
        }

        .feature {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .feature-icon {
            font-size: 48px;
            margin-right: 20px;
            color: #007BFF;
        }

        .feature-text {
            flex-grow: 1;
            font-size: 20px;
        }

        .feature-title {
            font-size: 24px;
            margin: 0;
        }

        @media screen and (max-width: 768px) {
            header {
                padding: 10px 0;
            }

            h1 {
                font-size: 24px;
            }

            .feature {
                flex-direction: column;
                text-align: center;
            }

            .feature-icon {
                margin-right: 0;
                margin-bottom: 10px;
            }
        }
        /* Hiệu ứng chạy nền quảng cáo */
        .ad-container {
            width: 100%;
            height: 50px;
            background-color: #007BFF;
            color: #fff;
            overflow: hidden;
            position: relative;
            animation: moveLeft 10s linear infinite;
        }

        .ad-content {
            display: flex;
            align-items: center;
            color: #fff;
            animation: fadeIn 2s ease 5s forwards, fadeOut 2s ease 8s forwards;
        }
        .ad-content p{
            color: red;
        }

        @keyframes moveLeft {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Học Tiếng Anh</h1>
    </header> 
    <!-- Quảng cáo chạy nền -->
    <div class="ad-container">
        <div class="ad-content">
            <p>Khám phá các khóa học tiếng Anh chương trình đa dạng. <a href="#">Xem chi tiết</a></p>
        </div>
    </div>
    <div class="container">
        <h2>Chào mừng bạn đến với trang web học tiếng Anh!</h2>
        <p>Chúng tôi cung cấp các khóa học tiếng Anh chất lượng để giúp bạn nâng cao kỹ năng ngôn ngữ của mình.</p>
        <p>Bạn có thể học từ vựng, ngữ pháp, và thực hành kỹ năng giao tiếp tiếng Anh thông qua các bài học hấp dẫn.</p>
        <p>Bắt đầu học ngay hôm nay và khám phá thế giới của tiếng Anh!</p>
        <a class="cta-button" href="#">Bắt đầu học</a>
        <div class="feature">
            <div class="feature-icon">&#x270D;</div>
            <div class="feature-text">
                <h3 class="feature-title">Học từ vựng</h3>
                <p>Chúng tôi cung cấp danh sách từ vựng phong phú và các bài tập giúp bạn mở rộng từ vựng của mình.</p>
            </div>
        </div>
        <div class="feature">
            <div class="feature-icon">&#x1F4D6;</div>
            <div class="feature-text">
                <h3 class="feature-title">Ngữ pháp</h3>
                <p>Học cách sử dụng ngữ pháp đúng cách qua các bài giảng và bài tập thực hành.</p>
            </div>
        </div>
        <div class="feature">
            <div class="feature-icon">&#x1F464;</div>
            <div class="feature-text">
                <h3 class="feature-title">Thực hành giao tiếp</h3>
                <p>Thực hành kỹ năng giao tiếp tiếng Anh thông qua các bài tập và cuộc trò chuyện thực tế.</p>
            </div>
        </div>
    </div>
   
</body>
</html>
