@extends("masterpage")
@section("page")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karachi Urban Solutions - Home</title>
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
            --gradient: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
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
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1569317002804-ab77bcf1bce4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;
            height: 100vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
        }
        
        .hero-content {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            animation: fadeIn 1.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .hero h2 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
        
        .btn {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-size: 1rem;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: var(--transition);
            z-index: -1;
        }
        
        .btn:hover::before {
            left: 100%;
        }
        
        .btn:hover {
            background: #c0392b;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .btn i {
            margin-right: 8px;
        }
        
        /* Problems Overview */
        .problems-section {
            padding: 80px 0;
            background: white;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 40px;
            color: var(--primary);
            font-size: 2.5rem;
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--accent);
        }
        
        .problems-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .problem-card {
            background: var(--light);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
        }
        
        .problem-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .problem-img {
            height: 200px;
            overflow: hidden;
            position: relative;
        }
        
        .problem-img::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 30%;
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 100%);
            opacity: 0;
            transition: var(--transition);
        }
        
        .problem-card:hover .problem-img::after {
            opacity: 1;
        }
        
        .problem-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .problem-card:hover .problem-img img {
            transform: scale(1.1);
        }
        
        .problem-content {
            padding: 25px;
        }
        
        .problem-content h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.4rem;
        }
        
        .problem-content p {
            margin-bottom: 20px;
        }
        
        .read-more {
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: var(--transition);
        }
        
        .read-more:hover {
            color: #c0392b;
        }
        
        .read-more i {
            margin-left: 5px;
            transition: var(--transition);
        }
        
        .read-more:hover i {
            transform: translateX(5px);
        }
        
        /* Statistics Section */
        .stats-section {
            background: var(--gradient);
            color: white;
            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .stats-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1516633630673-67bbad747022?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;
            opacity: 0.1;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 30px;
            position: relative;
        }
        
        .stat-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px 20px;
            border-radius: 8px;
            backdrop-filter: blur(5px);
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .stat-item:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
        }
        
        .stat-item i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        /* Projects Showcase */
        .projects-section {
            padding: 80px 0;
            background: var(--light);
        }
        
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .project-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
        }
        
        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .project-img {
            height: 200px;
            overflow: hidden;
            position: relative;
        }
        
        .project-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .project-card:hover .project-img img {
            transform: scale(1.1);
        }
        
        .project-status {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--accent);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 2;
        }
        
        .project-content {
            padding: 20px;
        }
        
        .project-content h3 {
            color: var(--primary);
            margin-bottom: 10px;
        }
        
        .project-content p {
            margin-bottom: 15px;
            font-size: 0.9rem;
        }
        
        .progress-bar {
            height: 8px;
            background: #e0e0e0;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 15px;
        }
        
        .progress {
            height: 100%;
            background: var(--secondary);
            border-radius: 4px;
            position: relative;
            overflow: hidden;
        }
        
        .progress::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-image: linear-gradient(
                -45deg, 
                rgba(255, 255, 255, 0.2) 25%, 
                transparent 25%, 
                transparent 50%, 
                rgba(255, 255, 255, 0.2) 50%, 
                rgba(255, 255, 255, 0.2) 75%, 
                transparent 75%, 
                transparent
            );
            z-index: 1;
            background-size: 50px 50px;
            animation: move 2s linear infinite;
            overflow: hidden;
        }
        
        @keyframes move {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: 50px 50px;
            }
        }
        
        /* Call to Action */
        .cta-section {
            padding: 100px 0;
            text-align: center;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://images.unsplash.com/photo-1519501025264-65ba15a82390?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;
            color: white;
            position: relative;
        }
        
        .cta-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }
        
        .cta-content .section-title {
            color: white;
        }
        
        .cta-content .section-title::after {
            background: var(--accent);
        }
        
        /* Testimonials Section */
        .testimonials-section {
            padding: 80px 0;
            background: white;
        }
        
        .testimonials-container {
            max-width: 1000px;
            margin: 0 auto;
            position: relative;
        }
        
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .testimonial-card {
            background: var(--light);
            padding: 25px;
            border-radius: 8px;
            box-shadow: var(--shadow);
            position: relative;
            transition: var(--transition);
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .testimonial-card::before {
            content: '\201C';
            font-size: 5rem;
            color: rgba(0, 0, 0, 0.05);
            position: absolute;
            top: 10px;
            left: 10px;
            font-family: 'Georgia', serif;
        }
        
        .testimonial-content {
            position: relative;
            z-index: 1;
        }
        
        .testimonial-text {
            margin-bottom: 20px;
            font-style: italic;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }
        
        .author-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .author-info h4 {
            margin-bottom: 5px;
            color: var(--primary);
        }
        
        .author-info p {
            font-size: 0.9rem;
            color: var(--secondary);
        }
        
        /* Map Section */
        .map-section {
            padding: 80px 0;
            background: var(--light);
        }
        
        .map-container {
            height: 400px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
            margin-top: 40px;
        }
        
        .map-placeholder {
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1587334274527-ba54f0b5a357?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
            position: relative;
        }
        
        .map-placeholder::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        
        .map-placeholder span {
            position: relative;
            z-index: 1;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .hero h2 {
                font-size: 2.8rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2.2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 576px) {
            .hero {
                height: 80vh;
            }
            
            .hero h2 {
                font-size: 2rem;
            }
            
            .stat-number {
                font-size: 2rem;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Transforming Karachi Together</h2>
            <p>Join us in addressing urban challenges and creating sustainable solutions for our megacity. Report issues, track progress, and be part of the change.</p>
            <a href="#" class="btn"><i class="fas fa-exclamation-circle"></i>Report a Problem</a>
        </div>
    </section>

    <!-- Problems Overview Section -->
    <section class="problems-section">
        <div class="container">
            <h2 class="section-title">Key Urban Challenges</h2>
            <div class="problems-grid">
                <div class="problem-card">
                    <div class="problem-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOXSvvo_FWEheyUa2jNj_J_w0VHluCkpymRHH9JYJc2Yw413hI0gkw_AeFEs7UJNrvmPI&usqp=CAU" alt="Water Supply">
                    </div>
                    <div class="problem-content">
                        <h3>Water Shortage</h3>
                        <p>Inconsistent water supply and distribution issues affecting millions of residents across the city.</p>
                        <a href="#" class="read-more">Learn more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="problem-card">
                    <div class="problem-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTixmmhFWZCzT8J_OjmET6p1T5poqEeuimJvQ&s" alt="Waste Management">
                    </div>
                    <div class="problem-content">
                        <h3>Waste Management</h3>
                        <p>Inadequate garbage collection and disposal systems leading to environmental and health hazards.</p>
                        <a href="#" class="read-more">Learn more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="problem-card">
                    <div class="problem-img">
                        <img src="https://navata.com/cms/wp-content/uploads/2021/05/transportation-modes-for-shifting-households.jpg" alt="Transportation">
                    </div>
                    <div class="problem-content">
                        <h3>Transportation Issues</h3>
                        <p>Overcrowded roads, inadequate public transport, and traffic congestion affecting daily commutes.</p>
                        <a href="#" class="read-more">Learn more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section">
        <div class="container">
            <h2 class="section-title">Karachi by Numbers</h2>
            <div class="stats-grid">
                <div class="stat-item">
                    <i class="fas fa-tint"></i>
                    <div class="stat-number" data-count="42">0</div>
                    <p>Face water shortages daily</p>
                </div>
                
                <div class="stat-item">
                    <i class="fas fa-trash"></i>
                    <div class="stat-number" data-count="12000">0</div>
                    <p>Daily waste generated (tons)</p>
                </div>
                
                <div class="stat-item">
                    <i class="fas fa-road"></i>
                    <div class="stat-number" data-count="72">0</div>
                    <p>Roads need immediate repair</p>
                </div>
                
                <div class="stat-item">
                    <i class="fas fa-lightbulb"></i>
                    <div class="stat-number" data-count="8">0</div>
                    <p>Average daily power outages (hours)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Showcase -->
    <section class="projects-section">
        <div class="container">
            <h2 class="section-title">Ongoing Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBLy6hMf52zHBLjVbjuPdNwsKPLiBMgKTwlg&s" alt="Water Project">
                        <span class="project-status">Ongoing</span>
                    </div>
                    <div class="project-content">
                        <h3>K-IV Water Supply Project</h3>
                        <p>Increasing water supply to address the chronic water shortage in the city.</p>
                        <div class="progress-bar">
                            <div class="progress" style="width: 65%"></div>
                        </div>
                        <p>65% Complete</p>
                    </div>
                </div>
                
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPdib91xLvbxeLaukf4kgq5ZFtKobUYq8VQA&s" alt="Waste Management">
                        <span class="project-status">Planning</span>
                    </div>
                    <div class="project-content">
                        <h3>Integrated Waste Management</h3>
                        <p>Modernizing waste collection and establishing recycling facilities across the city.</p>
                        <div class="progress-bar">
                            <div class="progress" style="width: 25%"></div>
                        </div>
                        <p>25% Complete</p>
                    </div>
                </div>
                
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEzoQUwIh6wlAPhm1Vb96Vyq-oHk0vUFF0RQ&s" alt="Transport Project">
                        <span class="project-status">Ongoing</span>
                    </div>
                    <div class="project-content">
                        <h3>Karachi Circular Railway</h3>
                        <p>Revival of the circular railway to provide mass transit solution for Karachiites.</p>
                        <div class="progress-bar">
                            <div class="progress" style="width: 45%"></div>
                        </div>
                        <p>45% Complete</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title">What Citizens Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p class="testimonial-text">"The water supply project in our area has made a significant difference. We now have access to clean water every day."</p>
                        <div class="testimonial-author">
                            <div class="author-img">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Ahmed Khan">
                            </div>
                            <div class="author-info">
                                <h4>Ahmed Khan</h4>
                                <p>Resident, Gulshan-e-Iqbal</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p class="testimonial-text">"Reporting issues through this platform is so easy, and I've seen actual action being taken on my complaints."</p>
                        <div class="testimonial-author">
                            <div class="author-img">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Fatima Ali">
                            </div>
                            <div class="author-info">
                                <h4>Fatima Ali</h4>
                                <p>Resident, Defence</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p class="testimonial-text">"The waste management initiative has transformed our neighborhood. It's cleaner and healthier for our children."</p>
                        <div class="testimonial-author">
                            <div class="author-img">
                                <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Bilal Hassan">
                            </div>
                            <div class="author-info">
                                <h4>Bilal Hassan</h4>
                                <p>Resident, North Nazimabad</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2 class="section-title">Issue Tracking Map</h2>
            <div class="map-container">
                <div class="map-placeholder">
                    <span>Interactive Map of Karachi Showing Reported Issues</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="section-title">Be Part of the Solution</h2>
                <p>Your voice matters! Report problems in your area, track ongoing projects, and help us make Karachi a better place to live. Together we can transform our city.</p>
                <a href="#" class="btn"><i class="fas fa-edit"></i>Register a Complaint</a>
            </div>
        </div>
    </section>

    <script>
        // Animated counter for statistics
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.stat-number');
            const speed = 200;
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-count'));
                let count = 0;
                
                const updateCount = () => {
                    const increment = Math.ceil(target / speed);
                    
                    if (count < target) {
                        count += increment;
                        counter.innerText = count;
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };
                
                // Start counter when element is in viewport
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCount();
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });
                
                observer.observe(counter);
            });
            
            // Animation on scroll
            const animateOnScroll = () => {
                const elements = document.querySelectorAll('.problem-card, .project-card, .stat-item, .testimonial-card');
                
                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;
                    
                    if (elementPosition < screenPosition) {
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }
                });
            };
            
            // Set initial state for animation
            const animatedElements = document.querySelectorAll('.problem-card, .project-card, .stat-item, .testimonial-card');
            animatedElements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                element.style.transition = 'opacity 0.5s, transform 0.5s';
            });
            
            window.addEventListener('scroll', animateOnScroll);
            // Trigger once on load
            animateOnScroll();
        });
    </script>
</body>
</html>
@endsection