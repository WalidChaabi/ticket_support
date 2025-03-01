<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Ticket System</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }
        header {
            background: #333;
            padding: 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            color: #fff;
            font-size: 24px;
            font-weight: 600;
        }
		.hero {
			display: flex;
			height: calc(100vh - 75px);
		}
        .hero-image {
            flex: 1;
            background: url('https://img.freepik.com/free-vector/circles-background-dark-tones_60389-166.jpg?t=st=1740507847~exp=1740511447~hmac=2972a219631794a0ff52c0327cda5e41f0fb07bbc4beb68d9a5a1d92a78b326f&w=1380') no-repeat center center;
            background-size: cover;
        }
        .hero-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px;
            background: white;
        }
        .hero-content h1 {
            font-size: 40px;
            font-weight: 600;
        }
        .hero-content p {
            font-size: 18px;
            margin-top: 20px;
            color: #666;
        }
        .btn-primary {
            background: #f4c430;
            color: #333;
            padding: 15px 30px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 30px;
            margin-top: 20px;
        }
        .btn-primary:hover {
            background: #f2b500;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">Support Hub</div>
</header>

<section class="hero">
    <div class="hero-image"></div>
    <div class="hero-content">
        <h1>Manage Your Support Tickets Effortlessly</h1>
        <p>Track, manage, and resolve your support issues with ease. Authenticate now to get started.</p>
        <a href="<?php echo base_url('user/login'); ?>" class="btn-primary">Authenticate to Start</a>
    </div>
</section>

<footer>
    <p>&copy; 2025 Support Hub. All Rights Reserved.</p>
</footer>

</body>
</html>
