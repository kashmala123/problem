<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar - Karachi Urban Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary: #1a5276;
            --secondary: #2874a6;
            --accent: #e74c3c;
            --light: #f8f9fa;
            --dark: #2c3e50;
            --text: #333;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
            padding: 20px;
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 50px;
            margin-right: 10px;
        }
        
        .logo h1 {
            font-size: 1.8rem;
            font-weight: 700;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 20px;
            position: relative;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 5px 10px;
            border-radius: 4px;
            transition: var(--transition);
        }
        
        nav ul li a:hover, 
        nav ul li a.active {
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: white;
            bottom: 0;
            left: 0;
            transition: var(--transition);
        }
        
        nav ul li a:hover::after,
        nav ul li a.active::after {
            width: 100%;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }
            
            nav ul {
                margin-top: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            nav ul li {
                margin: 5px 10px;
            }
        }
        
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary: #1a5276;
            --secondary: #2874a6;
            --accent: #e74c3c;
            --light: #f8f9fa;
            --dark: #2c3e50;
            --text: #333;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 60px 0 20px;
            margin-top: auto;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-section h3 {
            margin-bottom: 20px;
            font-size: 1.3rem;
            position: relative;
            padding-bottom: 10px;
            font-family: 'Montserrat', sans-serif;
        }
        
        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: var(--accent);
        }
        
        .footer-section p, .footer-section li {
            margin-bottom: 10px;
        }
        
        .footer-section ul {
            list-style: none;
        }
        
        .footer-section a {
            color: #ddd;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .footer-section a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            transition: var(--transition);
        }
        
        .social-icons a:hover {
            background: var(--accent);
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #aaa;
        }
        
        .footer-section i {
            margin-right: 10px;
            color: var(--accent);
        }
        
        .demo-content {
            flex: 1;
            padding: 40px 20px;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .demo-content h2 {
            color: var(--primary);
            margin-bottom: 20px;
            font-family: 'Montserrat', sans-serif;
        }
        
        .demo-content p {
            margin-bottom: 15px;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }
    </style>
</head>
<body>
    <!-- Header with Navigation -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MCIgaGVpZ2h0PSI1MCIgdmlld0JveD0iMCAwIDUwIDUwIj48Y2lyY2xlIGN4PSIyNSIgY3k9IjI1IiByPSIyMyIgZmlsbD0iI2ZmZiIgc3Ryb2tlPSIjMWExYTI5IiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzUgMTVIMTVWMzVIMzVWMTVaTTE4IDI4VjMySDE1VjI4SDE4Wk0xOCAyMlYyNkgxNVYyMkgxOFpNMTggMTZWMjBIMTVWMTZIMThaTTMyIDI4VjMySDI5VjI4SDMyWk0zMiAyMlYyNkgyOVYyMkgzMlpNMzIgMTZWMjBIMjlWMTZIMzJaTTI1IDI4VjMySDIyVjI4SDI1Wk0yNSAyMlYyNkgyMlYyMkgyNVpNMjUgMTZWMjBIMjJWMTZIMjVaIiBmaWxsPSIjMWExYTI5Ii8+PC9zdmc+" alt="Karachi Logo">
                    <h1>Karachi Urban Solutions</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">Complain</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Problems</a></li>
                        <li><a href="#">Helpline</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

   

    <script>
        // Simple script to highlight the active menu item on click
        document.addEventListener('DOMContentLoaded', function() {
            const menuItems = document.querySelectorAll('nav ul li a');
            
            menuItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all items
                    menuItems.forEach(i => i.classList.remove('active'));
                    
                    // Add active class to clicked item
                    this.classList.add('active');
                });
            });
        });
    </script>
    @yield("page")
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About Us</h3>
                    <p>Karachi Urban Solutions is a citizen-government initiative aimed at addressing urban challenges and improving quality of life in Karachi.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Submit Complaint</a></li>
                        <li><a href="#">Ongoing Projects</a></li>
                        <li><a href="#">Problem Categories</a></li>
                        <li><a href="#">Emergency Helpline</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Main Office: Civic Center, Karachi</p>
                    <p><i class="fas fa-phone"></i> Helpline: 021-111-456-789</p>
                    <p><i class="fas fa-envelope"></i> Email: info@karachisolutions.gov.pk</p>
                    
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Karachi Urban Solutions. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>

