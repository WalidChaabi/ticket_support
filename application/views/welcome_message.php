<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Home Page</title>
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
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
			display: flex;
    		justify-content: space-between;
    		align-items: center;
        }
        header .logo {
            color: #fff;
            font-size: 24px;
            margin-left: 20px;
            font-weight: 600;
        }
        nav {
            float: right;
            margin-right: 20px;
        }
        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
        }
        nav a:hover {
            color: #f4c430;
        }
        .hero {
            background-image: url('https://img.freepik.com/free-vector/circles-background-dark-tones_60389-166.jpg?t=st=1740507847~exp=1740511447~hmac=2972a219631794a0ff52c0327cda5e41f0fb07bbc4beb68d9a5a1d92a78b326f&w=1380');
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }
		.hero-container{
			display: flex;
    		flex-direction: column;
    		justify-content: center;
    		align-items: center;
		}
        .hero h1 {
            font-size: 50px;
            font-weight: 600;
        }
        .hero p {
            font-size: 18px;
            margin-top: 20px;
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
        .services {
            display: flex;
            justify-content: space-around;
            margin: 50px 20px;
        }
        .service-card {
            background: white;
            padding: 30px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 30%;
            transition: transform 0.3s ease-in-out;
        }
		.service-img{
			width: 496px;
			height: 496px;
			border-radius: 10px;
		}
        .service-card:hover {
            transform: translateY(-10px);
        }
        .service-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #333;
        }
        .service-card p {
            color: #666;
            font-size: 16px;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 30px 0;
            text-align: center;
        }
        footer p {
            margin-bottom: 10px;
            font-size: 14px;
        }
        footer a {
            color: #f4c430;
            text-decoration: none;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">MyWebsite</div>
    <nav>
        <a href="#">Home</a>
        <a href="#">Services</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </nav>
</header>

<section class="hero">
    <div class="hero-container">
        <h1>Welcome to Our Website</h1>
        <p>Your journey to success starts here. Explore our services and solutions today.</p>
        <a href="#" class="btn-primary">Get Started</a>
    </div>
</section>

<section class="services">
    <div class="service-card">
		<img class="service-img" src="https://img.freepik.com/free-vector/laptop-with-program-code-isometric-icon-software-development-programming-applications-dark-neon_39422-971.jpg?t=st=1740509030~exp=1740512630~hmac=8b9e5274779ef975f31966d7fe4492da0288205225610bf20d2f949455e70c56&w=996">
        <h3>Web Development</h3>
        <p>We build stunning websites that deliver an exceptional user experience.</p>
    </div>
    <div class="service-card">
		<img class="service-img" src="https://img.freepik.com/free-vector/laptop-with-program-code-isometric-icon-software-development-programming-applications-dark-neon_39422-971.jpg?t=st=1740509030~exp=1740512630~hmac=8b9e5274779ef975f31966d7fe4492da0288205225610bf20d2f949455e70c56&w=996">
        <h3>Mobile Apps</h3>
        <p>Our mobile apps are designed to meet the needs of your business on the go.</p>
    </div>
    <div class="service-card">
		<img class="service-img" src="https://img.freepik.com/free-vector/laptop-with-program-code-isometric-icon-software-development-programming-applications-dark-neon_39422-971.jpg?t=st=1740509030~exp=1740512630~hmac=8b9e5274779ef975f31966d7fe4492da0288205225610bf20d2f949455e70c56&w=996">
        <h3>Digital Marketing</h3>
        <p>We create strategies to grow your business and reach the right audience.</p>
    </div>
</section>

<footer>
    <p>&copy; 2025 MyWebsite. All Rights Reserved.</p>
    <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
</footer>

</body>
</html>
