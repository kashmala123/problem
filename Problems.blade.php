@extends("masterpage")
@section("page")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karachi Urban Solutions - Problems</title>
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
            height: 60vh;
            min-height: 400px;
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
            font-size: 3rem;
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
        
        /* Problems Detail Section */
        .problems-detail-section {
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
        
        .problem-detail {
            margin-bottom: 60px;
            padding: 30px;
            border-radius: 8px;
            background: var(--light);
            box-shadow: var(--shadow);
        }
        
        .problem-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .problem-icon {
            width: 60px;
            height: 60px;
            background: var(--gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            color: white;
            font-size: 1.5rem;
        }
        
        .problem-title {
            color: var(--primary);
            font-size: 1.8rem;
        }
        
        .problem-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        
        .problem-text {
            padding-right: 15px;
        }
        
        .problem-text p {
            margin-bottom: 15px;
        }
        
        .problem-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin: 20px 0;
        }
        
        .stat-box {
            background: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            box-shadow: var(--shadow);
        }
        
        .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 0.9rem;
            color: var(--secondary);
        }
        
        .problem-image {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        .problem-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .problem-image:hover img {
            transform: scale(1.05);
        }
        
        .impact-section {
            margin: 30px 0;
        }
        
        .impact-title {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.4rem;
            display: flex;
            align-items: center;
        }
        
        .impact-title i {
            margin-right: 10px;
            color: var(--accent);
        }
        
        .impact-list {
            list-style-type: none;
        }
        
        .impact-list li {
            margin-bottom: 10px;
            padding-left: 30px;
            position: relative;
        }
        
        .impact-list li:before {
            content: '•';
            color: var(--accent);
            font-weight: bold;
            position: absolute;
            left: 10px;
        }
        
        /* Solutions Section */
        .solutions-section {
            padding: 80px 0;
            background: var(--light);
        }
        
        .solutions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .solution-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .solution-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .solution-img {
            height: 200px;
            overflow: hidden;
            position: relative;
        }
        
        .solution-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .solution-card:hover .solution-img img {
            transform: scale(1.1);
        }
        
        .solution-content {
            padding: 25px;
        }
        
        .solution-content h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.4rem;
        }
        
        .solution-content p {
            margin-bottom: 20px;
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
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .hero h2 {
                font-size: 2.5rem;
            }
            
            .problem-content {
                grid-template-columns: 1fr;
            }
            
            .problem-image {
                order: -1;
                height: 300px;
            }
        }
        
        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .problem-stats {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 576px) {
            .hero {
                height: 50vh;
            }
            
            .hero h2 {
                font-size: 1.8rem;
            }
            
            .problem-header {
                flex-direction: column;
                text-align: center;
            }
            
            .problem-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Understanding Karachi's Urban Challenges</h2>
            <p>Explore the key issues affecting our city and learn about their impacts and potential solutions.</p>
            <a href="#" class="btn"><i class="fas fa-exclamation-circle"></i>Report a Problem</a>
        </div>
    </section>

    <!-- Problems Detail Section -->
    <section class="problems-detail-section">
        <div class="container">
            <h2 class="section-title">Detailed Problem Analysis</h2>
            
            <!-- Water Shortage Problem -->
            <div class="problem-detail">
                <div class="problem-header">
                    <div class="problem-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h2 class="problem-title">Water Shortage</h2>
                </div>
                
                <div class="problem-content">
                    <div class="problem-text">
                        <p>Karachi faces an acute water shortage, with millions of residents receiving inadequate or no supply of clean drinking water. The city requires around 1,200 million gallons per day (MGD) but receives only about 650 MGD, creating a massive deficit.</p>
                        
                        <div class="problem-stats">
                            <div class="stat-box">
                                <div class="stat-number">42%</div>
                                <div class="stat-label">Face daily shortages</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-number">650 MGD</div>
                                <div class="stat-label">Current supply</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-number">1,200 MGD</div>
                                <div class="stat-label">Required supply</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-number">60%</div>
                                <div class="stat-label">Water lost to leaks/theft</div>
                            </div>
                        </div>
                        
                        <div class="impact-section">
                            <h3 class="impact-title"><i class="fas fa-exclamation-triangle"></i>Major Impacts</h3>
                            <ul class="impact-list">
                                <li>Health issues due to consumption of contaminated water</li>
                                <li>Economic losses from time spent collecting water</li>
                                <li>Increased social tensions and conflicts over water access</li>
                                <li>Financial burden of purchasing water from tankers</li>
                                <li>Negative impact on industrial and commercial activities</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="problem-image">
                        <img src="https://waterpartnership.org.au/wp-content/uploads/2017/02/howtotakethe.jpg" alt="Water Supply">
                    </div>
                </div>
            </div>
            
            <!-- Waste Management Problem -->
            <div class="problem-detail">
                <div class="problem-header">
                    <div class="problem-icon">
                        <i class="fas fa-trash"></i>
                    </div>
                    <h2 class="problem-title">Waste Management</h2>
                </div>
                
                <div class="problem-content">
                    <div class="problem-text">
                        <p>Karachi generates approximately 12,000 tons of solid waste daily, but only about 60% is collected and properly disposed of. The remaining waste ends up on streets, empty plots, and in drains, creating severe environmental and health hazards.</p>
                        
                        <div class="problem-stats">
                            <div class="stat-box">
                                <div class="stat-number">12,000</div>
                                <div class="stat-label">Tons of daily waste</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-number">40%</div>
                                <div class="stat-label">Uncollected waste</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-number">2</div>
                                <div class="stat-label">Functional landfill sites</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-number">15%</div>
                                <div class="stat-label">Recycling rate</div>
                            </div>
                        </div>
                        
                        <div class="impact-section">
                            <h3 class="impact-title"><i class="fas fa-exclamation-triangle"></i>Major Impacts</h3>
                            <ul class="impact-list">
                                <li>Clogged drainage systems leading to urban flooding</li>
                                <li>Spread of diseases through vectors breeding in waste</li>
                                <li>Environmental pollution of air, water, and soil</li>
                                <li>Visual pollution and degradation of urban landscape</li>
                                <li>Negative impact on tourism and city image</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="problem-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXyycz4cNB57USdVaXicBQxwv42PAzkeRqpg&s" alt="Waste Management">
                    </div>
                </div>
            </div>
            
            <!-- Transportation Problem -->
            <div class="problem-detail">
                <div class="problem-header">
                    <div class="problem-icon">
                        <i class="fas fa-road"></i>
                    </div>
                    <h2 class="problem-title">Transportation Issues</h2>
                </div>
                
                <div class="problem-content">
                    <div class="problem-text">
                        <p>Karachi's transportation system is overwhelmed by rapid urbanization and population growth. The city lacks an integrated mass transit system, leading to excessive reliance on private vehicles and poorly regulated public transport, resulting in severe congestion and commute delays.</p>
                        
                        <div class="problem-stats">
                            <div class="stat-box">
                                <div class="stat-number">72%</div>
                                <div class="stat-label">Of roads need repair</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-number">3+</div>
                                <div class="stat-label">Hours average commute</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-number">40%</div>
                                <div class="stat-label">Travel by public transport</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-number">2.5M</div>
                                <div class="stat-label">Registered vehicles</div>
                            </div>
                        </div>
                        
                        <div class="impact-section">
                            <h3 class="impact-title"><i class="fas fa-exclamation-triangle"></i>Major Impacts</h3>
                            <ul class="impact-list">
                                <li>Economic losses from time spent in traffic (estimated Rs. 100 billion annually)</li>
                                <li>Increased air and noise pollution from vehicle emissions</li>
                                <li>High accident rates and road safety concerns</li>
                                <li>Reduced productivity and quality of life for residents</li>
                                <li>Limited access to employment and services for low-income communities</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="problem-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA4BYZE8vWgjPmZs31hgAMjs5S6wFlXWGmGw&s" alt="Transportation">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section class="solutions-section">
        <div class="container">
            <h2 class="section-title">Potential Solutions</h2>
            <div class="solutions-grid">
                <div class="solution-card">
                    <div class="solution-img">
                        <img src="https://images.unsplash.com/photo-1570481662006-a3a137469177?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Water Solution">
                    </div>
                    <div class="solution-content">
                        <h3>Water Infrastructure Improvement</h3>
                        <p>Complete the K-IV water project, repair distribution networks to reduce losses, install water meters, and promote water conservation practices among residents.</p>
                    </div>
                </div>
                
                <div class="solution-card">
                    <div class="solution-img">
                        <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Waste Solution">
                    </div>
                    <div class="solution-content">
                        <h3>Modern Waste Management</h3>
                        <p>Develop integrated waste management system with segregation at source, increase recycling facilities, establish proper landfill sites, and promote community participation.</p>
                    </div>
                </div>
                
                <div class="solution-card">
                    <div class="solution-img">
                        <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Transport Solution">
                    </div>
                    <div class="solution-content">
                        <h3>Transportation Reform</h3>
                        <p>Complete the Bus Rapid Transit system, revive Karachi Circular Railway, improve traffic management, develop non-motorized transport infrastructure, and promote ride-sharing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="section-title">Help Us Address These Challenges</h2>
                <p>Your reports and engagement help us prioritize issues and work toward solutions. Report problems in your area and join community initiatives to make Karachi a better city for all.</p>
                <a href="#" class="btn"><i class="fas fa-edit"></i>Report an Issue</a>
            </div>
        </div>
    </section>

    <script>
        // Simple animation for elements when they come into view
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.problem-detail, .solution-card');
            
            animatedElements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                element.style.transition = 'opacity 0.5s, transform 0.5s';
            });
            
            const animateOnScroll = () => {
                animatedElements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;
                    
                    if (elementPosition < screenPosition) {
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }
                });
            };
            
            window.addEventListener('scroll', animateOnScroll);
            // Trigger once on load
            animateOnScroll();
        });
    </script>
</body>
</html>
@endsection