<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Hotel Booking</title>
    <style>
        body, h1, h2, p, ul, li, a {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #fff;
            border-bottom: 2px solid #ddd;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar h1 {
            font-size: 1.5em;
            font-weight: bold;
            color: #000;
        }

        .navbar nav ul {
            display: flex;
            gap: 20px;
        }

        .navbar nav ul li a {
            font-size: 1em;
            color: #000;
            padding: 5px 10px;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        .navbar nav ul li a:hover {
            background-color: #ddd;
        }

        .navbar nav ul li a.active {
            color: #fff;
            background-color: #ff0000;
        }

        .hero {
            position: relative;
            text-align: center;
        }

        .hero img {
            width: 100%;
            height: auto;
            display: block;
        }

        .hero-text {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .hero-text h2 {
            margin-bottom: 10px;
            font-size: 2em;
            text-transform: uppercase;
        }

        .hero-text p {
            font-size: 1em;
            margin-top: 5px;
        }

        @media screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .hero-text {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <h1>URBAN HOTEL BOOKING</h1>
            <nav>
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="hero">
            <img src="hotel-pool.jpg" alt="Urban Hotel Pool">
            <div class="hero-text">
                <h2>URBAN HOTEL BOOKING</h2>
                <p>Get the Best Price on Booking your Hotel rooms at Urban Hotel Booking</p>
            </div>
        </div>
    </main>
</body>
</html>
