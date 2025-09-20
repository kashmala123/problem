@extends("masterpage")
@section("page")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-IV Water Supply Project - Karachi Urban Solutions</title>
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
        
        /* Project Hero Section */
        .project-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1541976590-713941681591?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;
            height: 80vh;
            min-height: 500px;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
        }
        
        .project-hero-content {
            position: relative;
            max-width: 800px;
            padding: 20px;
            animation: fadeIn 1.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .project-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            line-height: 1.2;
        }
        
        .project-hero p {
            font-size: 1.3rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            max-width: 600px;
        }
        
        .project-status {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 20px;
        }

        .hero-stats {
            display: flex;
            gap: 30px;
            margin-top: 40px;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--accent);
            line-height: 1;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        /* Project Content Section */
        .project-content {
            padding: 100px 0;
            background: white;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
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

        .section-subtitle {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 50px;
            font-size: 1.1rem;
            color: #666;
        }
        
        .project-details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            margin-bottom: 60px;
        }
        
        .project-overview, .project-impact {
            background: var(--light);
            padding: 40px;
            border-radius: 8px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .project-overview:hover, .project-impact:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .project-overview h3, .project-impact h3 {
            color: var(--primary);
            margin-bottom: 20px;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }

        .project-overview h3 i, .project-impact h3 i {
            margin-right: 10px;
            color: var(--accent);
        }
        
        .project-overview p, .project-impact p {
            margin-bottom: 15px;
        }

        .project-impact ul {
            list-style: none;
            margin-top: 20px;
        }

        .project-impact li {
            margin-bottom: 10px;
            display: flex;
            align-items: flex-start;
        }

        .project-impact li i {
            color: var(--accent);
            margin-right: 10px;
            margin-top: 5px;
        }
        
        /* Progress Section */
        .progress-section {
            margin-bottom: 80px;
        }
        
        .progress-container {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: var(--shadow);
        }
        
        .progress-bar {
            height: 25px;
            background: #e0e0e0;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 20px;
            position: relative;
        }
        
        .progress {
            height: 100%;
            background: var(--secondary);
            border-radius: 12px;
            position: relative;
            overflow: hidden;
            width: 65%;
            transition: width 1.5s ease-in-out;
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
        
        .progress-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            align-items: center;
        }

        .progress-percentage {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
        }
        
        .progress-milestones {
            margin-top: 40px;
        }

        .milestones-timeline {
            position: relative;
            padding: 20px 0;
        }

        .milestones-timeline::before {
            content: '';
            position: absolute;
            left: 30px;
            top: 0;
            height: 100%;
            width: 4px;
            background: var(--secondary);
            border-radius: 2px;
        }
        
        .milestone {
            display: flex;
            margin-bottom: 40px;
            position: relative;
            padding-left: 80px;
        }
        
        .milestone::before {
            content: '';
            position: absolute;
            left: 26px;
            top: 5px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: white;
            border: 4px solid var(--secondary);
            z-index: 2;
            transition: var(--transition);
        }
        
        .milestone.completed::before {
            background: var(--accent);
            border-color: var(--accent);
            box-shadow: 0 0 0 4px rgba(231, 76, 60, 0.2);
        }

        .milestone-date {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 5px;
            font-size: 1.1rem;
        }

        .milestone-icon {
            position: absolute;
            left: 20px;
            top: 0;
            width: 40px;
            height: 40px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            z-index: 2;
        }
        
        /* Gallery Section */
        .gallery-section {
            margin-bottom: 80px;
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
        }
        
        .gallery-item {
            height: 250px;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 15px;
            transform: translateY(100%);
            transition: var(--transition);
        }

        .gallery-item:hover .gallery-caption {
            transform: translateY(0);
        }

        /* Lightbox */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .lightbox-content {
            max-width: 90%;
            max-height: 90%;
            position: relative;
        }

        .lightbox-content img {
            max-width: 100%;
            max-height: 90vh;
            border-radius: 8px;
        }

        .close-lightbox {
            position: absolute;
            top: -40px;
            right: 0;
            color: white;
            font-size: 2rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .close-lightbox:hover {
            color: var(--accent);
        }

        /* Stats Section */
        .stats-section {
            background: var(--gradient);
            padding: 80px 0;
            color: white;
            margin: 80px 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .stat-box {
            padding: 30px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            backdrop-filter: blur(5px);
            transition: var(--transition);
        }

        .stat-box:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
        }

        .stat-box i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: var(--accent);
        }

        .stat-box h3 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: white;
        }

        .stat-box p {
            opacity: 0.9;
        }
        
        /* Related Projects */
        .related-projects {
            padding: 100px 0;
            background: var(--light);
        }
        
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
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
        
        .project-card .project-status {
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 2;
        }
        
        .project-content-card {
            padding: 25px;
        }
        
        .project-content-card h3 {
            color: var(--primary);
            margin-bottom: 10px;
            font-size: 1.3rem;
        }
        
        .project-content-card p {
            margin-bottom: 20px;
            font-size: 0.95rem;
            color: #666;
        }

        .project-link {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition);
        }

        .project-link:hover {
            color: var(--accent);
        }

        .project-link i {
            margin-left: 5px;
            transition: var(--transition);
        }

        .project-link:hover i {
            transform: translateX(5px);
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://images.unsplash.com/photo-1541976590-713941681591?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;
            padding: 100px 0;
            text-align: center;
            color: white;
        }

        .cta-content {
            max-width: 700px;
            margin: 0 auto;
        }

        .cta-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .cta-content p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
        }

        .btn:hover {
            background: #c0392b;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid white;
            margin-left: 15px;
        }

        .btn-outline:hover {
            background: white;
            color: var(--primary);
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .project-hero h1 {
                font-size: 2.8rem;
            }
            
            .project-details-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .hero-stats {
                flex-wrap: wrap;
                gap: 20px;
            }
        }
        
        @media (max-width: 768px) {
            .project-hero {
                height: 70vh;
                min-height: 400px;
            }

            .project-hero h1 {
                font-size: 2.3rem;
            }
            
            .project-hero p {
                font-size: 1.1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }

            .stat-value {
                font-size: 2rem;
            }

            .btn {
                display: block;
                margin: 10px auto;
                width: max-content;
            }

            .btn-outline {
                margin-left: 0;
            }
        }
        
        @media (max-width: 576px) {
            .project-hero {
                height: 60vh;
                min-height: 350px;
            }
            
            .project-hero h1 {
                font-size: 2rem;
            }

            .project-hero-content {
                text-align: center;
            }

            .hero-stats {
                justify-content: center;
            }
            
            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .progress-container,
            .project-overview, 
            .project-impact {
                padding: 25px;
            }

            .milestone {
                padding-left: 60px;
            }

            .milestone-icon {
                left: 10px;
            }

            .milestones-timeline::before {
                left: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Project Hero Section -->
    <section class="project-hero">
        <div class="container">
            <div class="project-hero-content">
                <span class="project-status">Ongoing</span>
                <h1>K-IV Water Supply Project</h1>
                <p>Increasing water supply to address the chronic water shortage in Karachi and surrounding areas</p>
                
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-value">650 MGD</span>
                        <span class="stat-label">Water Supply</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">121 KM</span>
                        <span class="stat-label">Canal Length</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">15M+</span>
                        <span class="stat-label">People Served</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Content Section -->
    <section class="project-content">
        <div class="container">
            <h2 class="section-title">Project Details</h2>
            <p class="section-subtitle">The K-IV Water Supply Project is a major initiative to address Karachi's chronic water shortage by bringing additional water from the Indus River.</p>
            
            <div class="project-details-grid">
                <div class="project-overview">
                    <h3><i class="fas fa-info-circle"></i> Project Overview</h3>
                    <p>The K-IV Water Supply Project is a major initiative to address Karachi's chronic water shortage by bringing additional water from the Indus River. This project aims to supply 650 million gallons per day (MGD) of water to Karachi, significantly improving the water availability for the city's growing population.</p>
                    <p>The project involves the construction of a 121-kilometer-long canal, water treatment plants, and a extensive distribution network to ensure equitable water supply across all areas of Karachi.</p>
                </div>
                
                <div class="project-impact">
                    <h3><i class="fas fa-chart-line"></i> Expected Impact</h3>
                    <p>Once completed, the K-IV project will provide water to over 15 million residents of Karachi, reducing the current water deficit by more than 50%. The project will particularly benefit underserved areas that currently receive minimal water supply.</p>
                    <p>Key benefits include:</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Reduction in water-borne diseases</li>
                        <li><i class="fas fa-check-circle"></i> Improved public health and sanitation</li>
                        <li><i class="fas fa-check-circle"></i> Economic benefits from reliable water supply to industries</li>
                        <li><i class="fas fa-check-circle"></i> Reduction in water tanker mafia influence</li>
                        <li><i class="fas fa-check-circle"></i> Improved quality of life for citizens</li>
                    </ul>
                </div>
            </div>
            
            <!-- Stats Section -->
            <div class="stats-section">
                <div class="container">
                    <div class="stats-grid">
                        <div class="stat-box">
                            <i class="fas fa-tint"></i>
                            <h3>650 MGD</h3>
                            <p>Water Supply Capacity</p>
                        </div>
                        <div class="stat-box">
                            <i class="fas fa-road"></i>
                            <h3>121 KM</h3>
                            <p>Main Canal Length</p>
                        </div>
                        <div class="stat-box">
                            <i class="fas fa-users"></i>
                            <h3>15M+</h3>
                            <p>People Benefited</p>
                        </div>
                        <div class="stat-box">
                            <i class="fas fa-calendar-alt"></i>
                            <h3>2025</h3>
                            <p>Expected Completion</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Progress Section -->
            <div class="progress-section">
                <h3 class="section-title">Project Progress</h3>
                <p class="section-subtitle">Tracking the development and milestones of the K-IV Water Supply Project</p>
                <div class="progress-container">
                    <div class="progress-info">
                        <span>Overall Completion</span>
                        <span class="progress-percentage">65%</span>
                    </div>
                    <div class="progress-bar">
                        <div class="progress" style="width: 65%"></div>
                    </div>
                    
                    <div class="progress-milestones">
                        <h4>Project Milestones</h4>
                        <div class="milestones-timeline">
                            <div class="milestone completed">
                                <div class="milestone-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <div class="milestone-date">March 2022</div>
                                    <div class="milestone-desc">Feasibility study completed</div>
                                </div>
                            </div>
                            
                            <div class="milestone completed">
                                <div class="milestone-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <div class="milestone-date">September 2022</div>
                                    <div class="milestone-desc">Initial funding secured</div>
                                </div>
                            </div>
                            
                            <div class="milestone completed">
                                <div class="milestone-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <div class="milestone-date">January 2023</div>
                                    <div class="milestone-desc">Land acquisition completed</div>
                                </div>
                            </div>
                            
                            <div class="milestone">
                                <div class="milestone-icon">
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <div>
                                    <div class="milestone-date">June 2023 (Expected)</div>
                                    <div class="milestone-desc">Canal construction phase 1 completion</div>
                                </div>
                            </div>
                            
                            <div class="milestone">
                                <div class="milestone-icon">
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <div>
                                    <div class="milestone-date">December 2023 (Expected)</div>
                                    <div class="milestone-desc">Water treatment plant construction</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Section -->
            <div class="gallery-section">
                <h3 class="section-title">Project Gallery</h3>
                <p class="section-subtitle">Visual documentation of the K-IV Water Supply Project development</p>
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR95K3Z6LLQn9IzElGXJOV7Bi4FWNNo2Ba2uQ&s" alt="Project Site">
                        <div class="gallery-caption">Initial excavation work at the project site</div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdAGZvXU0VMzRSXUg1qzdJLPy-nfhkDDwlbQ&s" alt="Construction">
                        <div class="gallery-caption">Construction of the main water canal</div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZLB4SMu3QoxY03kf5CQ_QEJCqkHl-o_1UEw&s" alt="Water Treatment">
                        <div class="gallery-caption">Water treatment facility under construction</div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://www.letsbuild.com/wp-content/uploads/2023/07/types-of-infrastructure.jpeg" alt="Infrastructure">
                        <div class="gallery-caption">Pipeline installation in progress</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <span class="close-lightbox" id="closeLightbox">&times;</span>
        <div class="lightbox-content">
            <img src="" alt="" id="lightboxImage">
        </div>
    </div>

    <!-- Related Projects -->
    <section class="related-projects">
        <div class="container">
            <h2 class="section-title">Related Projects</h2>
            <p class="section-subtitle">Other infrastructure projects improving life in Karachi</p>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNpp98g-xOL6ah7PH4Byp-EbXdHASaPpxnmw&s" alt="Waste Management">
                        <img src="" alt="Waste Management">
                        <span class="project-status">Planning</span>
                    </div>
                    <div class="project-content-card">
                        <h3>Integrated Waste Management</h3>
                        <p>Modernizing waste collection and establishing recycling facilities across the city.</p>
                        <a href="#" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXST8lOzdTWlsAM-zIPKrq_kDS2yZd4ky5Eg&s" alt="Transport Project">
                        <span class="project-status">Ongoing</span>
                    </div>
                    <div class="project-content-card">
                        <h3>Karachi Circular Railway</h3>
                        <p>Revival of the circular railway to provide mass transit solution for Karachiites.</p>
                        <a href="#" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1mjJVknwhQKOIZKhbgiA33_ruU48CprGQew&s" alt="Drainage Project">
                        <span class="project-status">Completed</span>
                    </div>
                    <div class="project-content-card">
                        <h3>Storm Water Drainage</h3>
                        <p>Improving drainage systems to prevent urban flooding during monsoon seasons.</p>
                        <a href="#" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Stay Updated on Project Progress</h2>
                <p>Subscribe to our newsletter to receive regular updates about the K-IV Water Supply Project and other infrastructure developments in Karachi.</p>
                <div>
                    <a href="#" class="btn">Subscribe Now</a>
       
                </div>
            </div>
        </div>
    </section>

    <script>
        // Simple animation for elements when they come into view
        document.addEventListener('DOMContentLoaded', function() {
            const animateOnScroll = () => {
                const elements = document.querySelectorAll('.project-overview, .project-impact, .milestone, .gallery-item, .project-card, .stat-box');
                
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
            const animatedElements = document.querySelectorAll('.project-overview, .project-impact, .milestone, .gallery-item, .project-card, .stat-box');
            animatedElements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                element.style.transition = 'opacity 0.5s, transform 0.5s';
            });
            
            window.addEventListener('scroll', animateOnScroll);
            // Trigger once on load
            animateOnScroll();

            // Animate progress bar
            const progressBar = document.querySelector('.progress');
            setTimeout(() => {
                progressBar.style.width = '65%';
            }, 500);

            // Lightbox functionality
            const galleryItems = document.querySelectorAll('.gallery-item');
            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightboxImage');
            const closeLightbox = document.getElementById('closeLightbox');

            galleryItems.forEach(item => {
                item.addEventListener('click', function() {
                    const imgSrc = this.querySelector('img').src;
                    const imgAlt = this.querySelector('img').alt;
                    lightboxImage.src = imgSrc;
                    lightboxImage.alt = imgAlt;
                    lightbox.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                });
            });

            closeLightbox.addEventListener('click', function() {
                lightbox.style.display = 'none';
                document.body.style.overflow = 'auto';
            });

            lightbox.addEventListener('click', function(e) {
                if (e.target === lightbox) {
                    lightbox.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });
        });
    </script>
</body>
</html>
@endsection