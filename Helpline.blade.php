@extends("masterpage")
@section("page")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karachi Urban Solutions - Helpline</title>
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
            --gradient-accent: linear-gradient(135deg, var(--accent) 0%, #c0392b 100%);
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
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;
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
        
        .btn-large {
            padding: 15px 30px;
            font-size: 1.1rem;
        }
        
        /* Section Styling */
        .section {
            padding: 80px 0;
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
        
        /* Contact Methods */
        .contact-methods {
            background: white;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .contact-card {
            background: var(--light);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            padding: 40px 30px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .contact-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            transition: var(--transition);
        }
        
        .contact-card:hover .contact-icon {
            transform: scale(1.1) rotate(5deg);
            background: var(--gradient-accent);
        }
        
        .contact-card h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.4rem;
        }
        
        .contact-info {
            margin-bottom: 20px;
            font-size: 1.1rem;
            flex-grow: 1;
        }
        
        .contact-note {
            font-size: 0.9rem;
            color: #666;
            margin-top: 15px;
        }
        
        /* Emergency Section */
        .emergency-section {
            background: var(--gradient);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .emergency-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1516627145497-ae6968895b74?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;
            opacity: 0.1;
        }
        
        .emergency-section .section-title {
            color: white;
            position: relative;
        }
        
        .emergency-section .section-title::after {
            background: white;
        }
        
        .emergency-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }
        
        .emergency-number {
            font-size: 2.5rem;
            font-weight: 700;
            margin: 20px 0;
            display: inline-block;
            background: rgba(255, 255, 255, 0.1);
            padding: 15px 40px;
            border-radius: 8px;
            border: 2px solid white;
            backdrop-filter: blur(5px);
            transition: var(--transition);
        }
        
        .emergency-number:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.2);
        }
        
        /* Department Contacts */
        .departments-section {
            background: white;
        }
        
        .department-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .department-card {
            background: var(--light);
            padding: 25px;
            border-radius: 8px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }
        
        .department-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--gradient);
            transition: var(--transition);
        }
        
        .department-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .department-card:hover::before {
            width: 8px;
            background: var(--gradient-accent);
        }
        
        .department-card h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
        }
        
        .department-card h3 i {
            margin-right: 10px;
            color: var(--secondary);
        }
        
        .department-info {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .department-info i {
            margin-right: 10px;
            color: var(--accent);
            width: 20px;
        }
        
        /* FAQ Section */
        .faq-section {
            background: var(--light);
        }
        
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .faq-item {
            background: white;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
        }
        
        .faq-item:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        
        .faq-question {
            padding: 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--primary);
            transition: var(--transition);
        }
        
        .faq-question:hover {
            color: var(--accent);
        }
        
        .faq-question i {
            transition: var(--transition);
        }
        
        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
        }
        
        .faq-item.active .faq-answer {
            max-height: 500px;
            padding: 0 20px 20px;
        }
        
        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }
        
        /* Contact Form */
        .contact-form-section {
            background: white;
        }
        
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: var(--light);
            padding: 30px;
            border-radius: 8px;
            box-shadow: var(--shadow);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--primary);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--secondary);
            box-shadow: 0 0 0 3px rgba(40, 116, 166, 0.2);
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        /* Quick Contact Buttons */
        .quick-contact {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 100;
        }
        
        .quick-contact-btn {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--gradient-accent);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: var(--transition);
            position: relative;
        }
        
        .quick-contact-btn:hover {
            transform: scale(1.1) rotate(10deg);
        }
        
        .quick-contact-options {
            position: absolute;
            bottom: 70px;
            right: 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            transition: var(--transition);
        }
        
        .quick-contact-options.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .quick-option {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--gradient);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
        }
        
        .quick-option:hover {
            transform: scale(1.1);
        }
        
        /* Office Hours */
        .office-hours {
            background: var(--light);
            padding: 30px;
            border-radius: 8px;
            margin-top: 40px;
            text-align: center;
        }
        
        .office-hours h3 {
            color: var(--primary);
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        
        .hours-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }
        
        .hour-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px dashed #ddd;
        }
        
        .hour-item:last-child {
            border-bottom: none;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .hero h2 {
                font-size: 2.5rem;
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
            
            .emergency-number {
                font-size: 2rem;
                padding: 10px 30px;
            }
            
            .form-container {
                padding: 20px;
            }
        }
        
        @media (max-width: 576px) {
            .hero {
                height: 50vh;
            }
            
            .hero h2 {
                font-size: 1.8rem;
            }
            
            .contact-grid,
            .department-grid {
                grid-template-columns: 1fr;
            }
            
            .quick-contact {
                bottom: 20px;
                right: 20px;
            }
            
            .quick-contact-btn {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
            
            .quick-option {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>We're Here to Help</h2>
            <p>Contact Karachi Urban Solutions for immediate assistance with urban issues, emergency reporting, or general inquiries about city services.</p>
            <a href="tel:021111123456" class="btn btn-large"><i class="fas fa-phone"></i>Call Now: 021-111-123456</a>
        </div>
    </section>

    <!-- Contact Methods Section -->
    <section class="section contact-methods">
        <div class="container">
            <h2 class="section-title">Contact Methods</h2>
            <div class="contact-grid">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Phone Support</h3>
                    <p class="contact-info"><strong>021-111-123456</strong></p>
                    <p>Monday to Saturday: 8:00 AM - 10:00 PM</p>
                    <p class="contact-note">Calls are answered by our trained support staff</p>
                    <a href="tel:021111123456" class="btn"><i class="fas fa-phone"></i>Call Now</a>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <p class="contact-info"><strong>support@karachiurban.gov.pk</strong></p>
                    <p>Response within 24 hours</p>
                    <p class="contact-note">For non-urgent matters and detailed inquiries</p>
                    <a href="mailto:support@karachiurban.gov.pk" class="btn"><i class="fas fa-envelope"></i>Send Email</a>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Live Chat</h3>
                    <p class="contact-info"><strong>Available on our website</strong></p>
                    <p>Monday to Friday: 9:00 AM - 6:00 PM</p>
                    <p class="contact-note">Instant messaging with our support team</p>
                    <a href="#" class="btn"><i class="fas fa-comment"></i>Start Chat</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Section -->
    <section class="section emergency-section">
        <div class="container">
            <h2 class="section-title">Emergency Hotline</h2>
            <div class="emergency-content">
                <p>For urgent matters that require immediate attention including water main breaks, sewer overflows, dangerous road conditions, or other public safety issues</p>
                <div class="emergency-number">
                    <i class="fas fa-phone-alt"></i> 021-999-887766
                </div>
                <p>24/7 availability for genuine emergencies</p>
                <a href="tel:021999887766" class="btn btn-large"><i class="fas fa-phone"></i>Call Emergency Line</a>
            </div>
        </div>
    </section>

    <!-- Department Contacts -->
    <section class="section departments-section">
        <div class="container">
            <h2 class="section-title">Department Contacts</h2>
            <div class="department-grid">
                <div class="department-card">
                    <h3><i class="fas fa-tint"></i> Water & Sewage</h3>
                    <div class="department-info">
                        <i class="fas fa-phone"></i>
                        <span>021-111-WATER</span>
                    </div>
                    <div class="department-info">
                        <i class="fas fa-envelope"></i>
                        <span>water@karachiurban.gov.pk</span>
                    </div>
                    <div class="department-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Block 7, Gulshan-e-Iqbal</span>
                    </div>
                </div>
                
                <div class="department-card">
                    <h3><i class="fas fa-trash"></i> Waste Management</h3>
                    <div class="department-info">
                        <i class="fas fa-phone"></i>
                        <span>021-111-WASTE</span>
                    </div>
                    <div class="department-info">
                        <i class="fas fa-envelope"></i>
                        <span>waste@karachiurban.gov.pk</span>
                    </div>
                    <div class="department-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Central District, Saddar</span>
                    </div>
                </div>
                
                <div class="department-card">
                    <h3><i class="fas fa-road"></i> Roads & Infrastructure</h3>
                    <div class="department-info">
                        <i class="fas fa-phone"></i>
                        <span>021-111-ROADS</span>
                    </div>
                    <div class="department-info">
                        <i class="fas fa-envelope"></i>
                        <span>roads@karachiurban.gov.pk</span>
                    </div>
                    <div class="department-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Civic Center, Gulberg</span>
                    </div>
                </div>
                
                <div class="department-card">
                    <h3><i class="fas fa-bolt"></i> Power & Electricity</h3>
                    <div class="department-info">
                        <i class="fas fa-phone"></i>
                        <span>021-111-POWER</span>
                    </div>
                    <div class="department-info">
                        <i class="fas fa-envelope"></i>
                        <span>power@karachiurban.gov.pk</span>
                    </div>
                    <div class="department-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Shahrah-e-Faisal</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section faq-section">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How quickly can I expect a response after reporting an issue?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>For emergency issues, we aim to respond within 2 hours. For routine matters, you will receive an acknowledgment within 24 hours and regular updates until resolution. The response time may vary based on the nature and complexity of the issue.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What information should I provide when reporting a problem?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Please provide as much detail as possible, including: exact location, description of the problem, when you first noticed it, and any relevant photos. For utilities issues, note if there's any immediate danger to public safety.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do I need to create an account to report an issue?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>No, you can report issues without an account. However, creating an account allows you to track the status of your reports, receive updates, and view your report history.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How can I check the status of my reported issue?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>You can check status through our mobile app, website, or by calling our helpline. You will need your reference number that was provided when you submitted the report.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What should I do in case of a water or sewer emergency?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>For water or sewer emergencies (major leaks, pipe bursts, sewer backups), please call our emergency hotline immediately at 021-999-887766. Avoid contact with flooding water and keep children and pets away from the affected area.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="section contact-form-section">
        <div class="container">
            <h2 class="section-title">Send Us a Message</h2>
            <div class="form-container">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Your Name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" class="form-control" placeholder="Your Phone Number">
                    </div>
                    
                    <div class="form-group">
                        <label for="department">Department</label>
                        <select id="department" class="form-control" required>
                            <option value="">Select Department</option>
                            <option value="water">Water & Sewage</option>
                            <option value="waste">Waste Management</option>
                            <option value="roads">Roads & Infrastructure</option>
                            <option value="power">Power & Electricity</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" placeholder="Your Message" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-large" style="width: 100%;">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Office Hours Section -->
    <section class="section">
        <div class="container">
            <div class="office-hours">
                <h3>Office Hours</h3>
                <div class="hours-grid">
                    <div class="hour-item">
                        <span>Monday - Thursday</span>
                        <span>8:00 AM - 6:00 PM</span>
                    </div>
                    <div class="hour-item">
                        <span>Friday</span>
                        <span>8:00 AM - 12:00 PM, 2:00 PM - 6:00 PM</span>
                    </div>
                    <div class="hour-item">
                        <span>Saturday</span>
                        <span>9:00 AM - 4:00 PM</span>
                    </div>
                    <div class="hour-item">
                        <span>Sunday</span>
                        <span>Closed</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Contact Buttons -->
    <div class="quick-contact">
        <div class="quick-contact-options" id="quickOptions">
            <a href="tel:021111123456" class="quick-option" title="Call Us">
                <i class="fas fa-phone"></i>
            </a>
            <a href="mailto:support@karachiurban.gov.pk" class="quick-option" title="Email Us">
                <i class="fas fa-envelope"></i>
            </a>
            <a href="#" class="quick-option" title="Live Chat">
                <i class="fas fa-comment"></i>
            </a>
        </div>
        <div class="quick-contact-btn" id="quickContactBtn">
            <i class="fas fa-comments"></i>
        </div>
    </div>

    <script>
        // FAQ toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', () => {
                    item.classList.toggle('active');
                });
            });
            
            // Quick contact toggle
            const quickContactBtn = document.getElementById('quickContactBtn');
            const quickOptions = document.getElementById('quickOptions');
            
            quickContactBtn.addEventListener('click', () => {
                quickOptions.classList.toggle('show');
            });
            
            // Form submission
            const contactForm = document.getElementById('contactForm');
            
            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();
                alert('Thank you for your message! We will get back to you soon.');
                contactForm.reset();
            });
            
            // Animation on scroll
            const animateOnScroll = () => {
                const elements = document.querySelectorAll('.contact-card, .department-card, .faq-item, .form-container');
                
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
            const animatedElements = document.querySelectorAll('.contact-card, .department-card, .faq-item, .form-container');
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