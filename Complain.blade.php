@extends("masterpage")
@section("page")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report an Issue - Karachi Urban Solutions</title>
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
            --primary-light: #2c81bb;
            --secondary: #2874a6;
            --accent: #e74c3c;
            --accent-light: #fd6d5d;
            --light: #f8f9fa;
            --light-gray: #eaecee;
            --dark: #2c3e50;
            --text: #333;
            --text-light: #6c757d;
            --success: #27ae60;
            --warning: #f39c12;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            --shadow-light: 0 2px 10px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s ease;
            --gradient: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            --gradient-accent: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
            --border-radius: 10px;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7f9;
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
            padding: 0;
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
        
        .page-header {
            background: var(--gradient);
            color: white;
            padding: 40px 20px;
            text-align: center;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }
        
        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='0.1' d='M0,128L48,117.3C96,107,192,85,288,112C384,139,480,213,576,218.7C672,224,768,160,864,138.7C960,117,1056,139,1152,138.7C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
            background-size: cover;
            background-position: center bottom;
        }
        
        .page-header-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .page-header h1 {
            font-size: 2.8rem;
            margin-bottom: 15px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .page-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto 40px;
            padding: 0 20px;
        }
        
        .progress-container {
            background: white;
            border-radius: var(--border-radius);
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: var(--shadow);
        }
        
        .progress-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-bottom: 30px;
            max-width: 800px;
            margin: 0 auto 30px;
        }
        
        .progress-steps::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            height: 4px;
            width: 100%;
            background: var(--light-gray);
            z-index: 1;
        }
        
        .progress-bar {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            height: 4px;
            width: 0%;
            background: var(--accent);
            z-index: 2;
            transition: var(--transition);
        }
        
        .step {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            border: 4px solid var(--light-gray);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: var(--text-light);
            position: relative;
            z-index: 3;
            transition: var(--transition);
        }
        
        .step.active {
            border-color: var(--accent);
            background: var(--accent);
            color: white;
        }
        
        .step-label {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            margin-top: 10px;
            font-size: 0.85rem;
            color: var(--text-light);
            white-space: nowrap;
        }
        
        .step.active .step-label {
            color: var(--accent);
            font-weight: 600;
        }
        
        .form-container {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 30px;
        }
        
        @media (max-width: 992px) {
            .form-container {
                grid-template-columns: 1fr;
            }
        }
        
        .complaint-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 30px;
            box-shadow: var(--shadow);
        }
        
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }
        
        .info-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 25px;
            box-shadow: var(--shadow);
        }
        
        .info-card h3 {
            color: var(--primary);
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light-gray);
            display: flex;
            align-items: center;
        }
        
        .info-card h3 i {
            margin-right: 10px;
            color: var(--secondary);
        }
        
        .info-card p {
            color: var(--text-light);
            font-size: 0.95rem;
            margin-bottom: 15px;
        }
        
        .similar-issues {
            margin-top: 15px;
        }
        
        .issue-item {
            display: flex;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid var(--light-gray);
        }
        
        .issue-item:last-child {
            border-bottom: none;
        }
        
        .issue-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background: rgba(231, 76, 60, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--accent);
        }
        
        .issue-content {
            flex: 1;
        }
        
        .issue-title {
            font-weight: 500;
            font-size: 0.95rem;
            margin-bottom: 4px;
        }
        
        .issue-meta {
            display: flex;
            align-items: center;
            font-size: 0.8rem;
            color: var(--text-light);
        }
        
        .issue-meta span {
            display: flex;
            align-items: center;
            margin-right: 15px;
        }
        
        .issue-meta i {
            margin-right: 5px;
            font-size: 0.7rem;
        }
        
        .complaint-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }
        
        .section-title {
            grid-column: span 2;
            color: var(--primary);
            margin: 10px 0 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light-gray);
            font-size: 1.4rem;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group.full-width {
            grid-column: span 2;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
            font-size: 0.95rem;
        }
        
        .required::after {
            content: '*';
            color: var(--accent);
            margin-left: 4px;
        }
        
        input, select, textarea {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid var(--light-gray);
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: var(--transition);
            background: white;
        }
        
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(40, 116, 166, 0.2);
        }
        
        textarea {
            min-height: 150px;
            resize: vertical;
        }
        
        .input-hint {
            font-size: 0.8rem;
            color: var(--text-light);
            margin-top: 6px;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--gradient-accent);
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
            text-align: center;
            box-shadow: var(--shadow);
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        
        .btn i {
            margin-right: 10px;
        }
        
        .submit-container {
            grid-column: span 2;
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid var(--light-gray);
        }
        
        .upload-container {
            border: 2px dashed #ddd;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            background: var(--light);
        }
        
        .upload-container:hover, .upload-container.dragover {
            border-color: var(--secondary);
            background: rgba(40, 116, 166, 0.03);
        }
        
        .upload-icon {
            font-size: 3rem;
            color: var(--secondary);
            margin-bottom: 15px;
        }
        
        .upload-text {
            color: var(--text);
            margin-bottom: 20px;
            font-size: 1.1rem;
        }
        
        .upload-text small {
            display: block;
            margin-top: 8px;
            color: var(--text-light);
            font-size: 0.85rem;
        }
        
        .upload-btn {
            background: white;
            color: var(--secondary);
            padding: 10px 20px;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition);
            border: 1px solid var(--secondary);
            display: inline-block;
            font-weight: 500;
        }
        
        .upload-btn:hover {
            background: var(--secondary);
            color: white;
        }
        
        #file-name {
            margin-top: 15px;
            font-size: 0.9rem;
            color: var(--secondary);
        }
        
        .map-preview {
            height: 200px;
            background: #f0f0f0;
            border-radius: 8px;
            margin-top: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text);
            text-align: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='200' viewBox='0 0 400 200'%3E%3Crect width='400' height='200' fill='%23f5f5f5'/%3E%3Cpath d='M0,0 L400,200 M400,0 L0,200' stroke='%23e0e0e0' stroke-width='1'/%3E%3C/svg%3E");
            background-size: cover;
        }
        
        .map-preview::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(26, 82, 118, 0.1) 0%, rgba(40, 116, 166, 0.1) 100%);
        }
        
        .map-marker {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 24px;
            height: 24px;
            background: var(--accent);
            border: 3px solid white;
            border-radius: 50%;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            z-index: 2;
        }
        
        .confirmation {
            display: none;
            text-align: center;
            padding: 50px 30px;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }
        
        .confirmation i {
            font-size: 5rem;
            color: var(--success);
            margin-bottom: 25px;
        }
        
        .confirmation h2 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 2.2rem;
        }
        
        .confirmation p {
            color: var(--text);
            margin-bottom: 10px;
            font-size: 1.1rem;
        }
        
        .ref-id {
            display: inline-block;
            background: var(--light);
            padding: 10px 20px;
            border-radius: 30px;
            margin: 20px 0;
            font-weight: 600;
            color: var(--primary);
            border: 1px dashed var(--primary-light);
        }
        
        .next-steps {
            background: #f9f9f9;
            padding: 25px;
            border-radius: 8px;
            margin: 30px 0;
            text-align: left;
        }
        
        .next-steps h3 {
            color: var(--primary);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .next-steps h3 i {
            margin-right: 10px;
        }
        
        .next-steps ul {
            padding-left: 20px;
            color: var(--text-light);
        }
        
        .next-steps li {
            margin-bottom: 10px;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .complaint-form {
                grid-template-columns: 1fr;
            }
            
            .section-title, .form-group.full-width, .submit-container {
                grid-column: span 1;
            }
            
            .page-header h1 {
                font-size: 2.2rem;
            }
            
            .page-header p {
                font-size: 1rem;
            }
            
            .progress-steps {
                max-width: 100%;
            }
            
            .step-label {
                font-size: 0.7rem;
            }
        }
        
        /* Checkbox styling */
        .checkbox-group {
            display: flex;
            align-items: center;
        }
        
        .checkbox-group input[type="checkbox"] {
            width: auto;
            margin-right: 10px;
            transform: scale(1.2);
        }
        
        /* Loading animation for submit */
        .btn.loading {
            position: relative;
            color: transparent;
        }
        
        .btn.loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin: -10px 0 0 -10px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 0.8s ease infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="page-header">
        <div class="page-header-content">
            <h1>Report an Urban Issue</h1>
            <p>Help us improve Karachi by reporting problems in your area. Your complaint will be directed to the relevant authorities.</p>
        </div>
    </div>
    
    <div class="container">
        <div class="progress-container">
            <div class="progress-steps">
                <div class="progress-bar" id="progressBar"></div>
                <div class="step active">
                    <span>1</span>
                    <div class="step-label">Details</div>
                </div>
                <div class="step">
                    <span>2</span>
                    <div class="step-label">Location</div>
                </div>
                <div class="step">
                    <span>3</span>
                    <div class="step-label">Review</div>
                </div>
                <div class="step">
                    <span>4</span>
                    <div class="step-label">Submit</div>
                </div>
            </div>
        </div>
        
        <div class="form-container">
            <div class="complaint-card">
                <form id="complaintForm" class="complaint-form">
                    <h3 class="section-title">Your Information</h3>
                    
                    <div class="form-group">
                        <label for="name" class="required">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="required">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                        <p class="input-hint">Optional - for follow-up questions</p>
                    </div>
                    
                    <div class="form-group">
                        <label for="category" class="required">Issue Category</label>
                        <select id="category" name="category" required>
                            <option value="">Select a category</option>
                            <option value="water">Water Supply</option>
                            <option value="waste">Waste Management</option>
                            <option value="transportation">Transportation</option>
                            <option value="roads">Roads & Infrastructure</option>
                            <option value="electricity">Electricity Issues</option>
                            <option value="safety">Public Safety</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <h3 class="section-title">Issue Details</h3>
                    
                    <div class="form-group full-width">
                        <label for="location" class="required">Issue Location</label>
                        <input type="text" id="location" name="location" placeholder="Street address, area, or landmark" required>
                        <div class="map-preview">
                            <div class="map-marker"></div>
                            <p>Map preview will appear here after location is entered</p>
                        </div>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="description" class="required">Issue Description</label>
                        <textarea id="description" name="description" placeholder="Please describe the issue in detail. Include information about when it started, how it's affecting the area, and any other relevant details." required></textarea>
                    </div>
                    
                    <div class="form-group full-width">
                        <label>Upload Photos (Optional)</label>
                        <div class="upload-container" id="uploadContainer">
                            <input type="file" id="fileInput" accept="image/*" multiple style="display: none;">
                            <div class="upload-icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <p class="upload-text">Drag & drop images here or click to browse<br><small>Maximum 5 images, 5MB each</small></p>
                            <div class="upload-btn" onclick="document.getElementById('fileInput').click()">Select Files</div>
                            <div id="file-name"></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="urgency">Urgency Level</label>
                        <select id="urgency" name="urgency">
                            <option value="low">Low - Minor inconvenience</option>
                            <option value="medium" selected>Medium - Needs attention</option>
                            <option value="high">High - Serious issue</option>
                            <option value="critical">Critical - Emergency situation</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="anonymous" class="checkbox-group">
                            <input type="checkbox" id="anonymous" name="anonymous">
                            Submit anonymously
                        </label>
                        <p class="input-hint">Your personal information will not be shared with authorities</p>
                    </div>
                    
                    <div class="submit-container">
                        <button type="submit" class="btn"><i class="fas fa-paper-plane"></i>Submit Complaint</button>
                    </div>
                </form>
                
                <div id="confirmation" class="confirmation">
                    <i class="fas fa-check-circle"></i>
                    <h2>Complaint Submitted Successfully!</h2>
                    <p>Thank you for reporting this issue. Your complaint has been registered and will be forwarded to the relevant department.</p>
                    
                    <div class="ref-id">Reference ID: KAR-2023-9872</div>
                    
                    <div class="next-steps">
                        <h3><i class="fas fa-info-circle"></i> What happens next?</h3>
                        <ul>
                            <li>Your complaint has been assigned to the relevant department</li>
                            <li>You will receive a confirmation email within 24 hours</li>
                            <li>Department officials will inspect the issue within 3-5 working days</li>
                            <li>You can track the status of your complaint using your reference ID</li>
                        </ul>
                    </div>
                    
                    <div style="margin-top: 30px;">
                        <button class="btn" onclick="resetForm()"><i class="fas fa-plus"></i>Report Another Issue</button>
                    </div>
                </div>
            </div>
            
            <div class="sidebar">
                <div class="info-card">
                    <h3><i class="fas fa-lightbulb"></i> Tips for Effective Reports</h3>
                    <p>Provide clear and specific information to help us address the issue faster:</p>
                    <ul>
                        <li>Take clear photos showing the problem</li>
                        <li>Be specific about the location</li>
                        <li>Mention how long the issue has existed</li>
                        <li>Describe how it's affecting the community</li>
                    </ul>
                </div>
                
                <div class="info-card">
                    <h3><i class="fas fa-exclamation-circle"></i> Similar Recent Issues</h3>
                    <p>Other reports in your area:</p>
                    
                    <div class="similar-issues">
                        <div class="issue-item">
                            <div class="issue-icon">
                                <i class="fas fa-road"></i>
                            </div>
                            <div class="issue-content">
                                <div class="issue-title">Pothole on Main Street</div>
                                <div class="issue-meta">
                                    <span><i class="fas fa-map-marker-alt"></i> 0.3km away</span>
                                    <span><i class="fas fa-clock"></i> 2 days ago</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="issue-item">
                            <div class="issue-icon">
                                <i class="fas fa-tint"></i>
                            </div>
                            <div class="issue-content">
                                <div class="issue-title">Water Pipeline Leak</div>
                                <div class="issue-meta">
                                    <span><i class="fas fa-map-marker-alt"></i> 0.5km away</span>
                                    <span><i class="fas fa-clock"></i> 5 days ago</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="issue-item">
                            <div class="issue-icon">
                                <i class="fas fa-trash"></i>
                            </div>
                            <div class="issue-content">
                                <div class="issue-title">Garbage Not Collected</div>
                                <div class="issue-meta">
                                    <span><i class="fas fa-map-marker-alt"></i> 0.7km away</span>
                                    <span><i class="fas fa-clock"></i> 1 day ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // File upload functionality
        const fileInput = document.getElementById('fileInput');
        const fileName = document.getElementById('file-name');
        const uploadContainer = document.getElementById('uploadContainer');
        const progressBar = document.getElementById('progressBar');
        
        fileInput.addEventListener('change', function() {
            if (this.files.length > 0) {
                if (this.files.length === 1) {
                    fileName.textContent = `Selected file: ${this.files[0].name}`;
                } else {
                    fileName.textContent = `Selected files: ${this.files.length}`;
                }
            } else {
                fileName.textContent = '';
            }
        });
        
        // Drag and drop functionality
        uploadContainer.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.classList.add('dragover');
        });
        
        uploadContainer.addEventListener('dragleave', function() {
            this.classList.remove('dragover');
        });
        
        uploadContainer.addEventListener('drop', function(e) {
            e.preventDefault();
            this.classList.remove('dragover');
            
            if (e.dataTransfer.files.length > 0) {
                fileInput.files = e.dataTransfer.files;
                
                if (e.dataTransfer.files.length === 1) {
                    fileName.textContent = `Selected file: ${e.dataTransfer.files[0].name}`;
                } else {
                    fileName.textContent = `Selected files: ${e.dataTransfer.files.length}`;
                }
            }
        });
        
        // Update progress bar as user fills the form
        const formFields = document.querySelectorAll('input, select, textarea');
        formFields.forEach(field => {
            field.addEventListener('input', updateProgress);
        });
        
        function updateProgress() {
            let filledFields = 0;
            formFields.forEach(field => {
                if (field.value.trim() !== '') {
                    filledFields++;
                }
            });
            
            const progress = (filledFields / formFields.length) * 100;
            progressBar.style.width = `${progress}%`;
        }
        
        // Form submission
        document.getElementById('complaintForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('button[type="submit"]');
            submitBtn.classList.add('loading');
            
            // Simulate form submission delay
            setTimeout(function() {
                document.getElementById('complaintForm').style.display = 'none';
                document.getElementById('confirmation').style.display = 'block';
                submitBtn.classList.remove('loading');
            }, 1500);
        });
        
        // Reset form function
        function resetForm() {
            document.getElementById('complaintForm').reset();
            fileName.textContent = '';
            document.getElementById('confirmation').style.display = 'none';
            document.getElementById('complaintForm').style.display = 'grid';
            progressBar.style.width = '0%';
        }
    </script>
</body>
</html>
@endsection