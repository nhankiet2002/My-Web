<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đàm Nhân Kiệt</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom CSS for smooth scrolling and animations */
        html {
            scroll-behavior: smooth;
        }
        .hero-bg {
            background: linear-gradient(135deg, rgba(22, 101, 52, 0.8) 0%, rgba(34, 197, 94, 0.8) 100%);
        }
        .section-title {
            position: relative;
            display: inline-block;
        }
        .section-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            bottom: -8px;
            left: 25%;
            background: #16a34a; /* green-600 */
        }
        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .work-card:hover .work-overlay {
            opacity: 1;
        }
        .work-overlay {
            transition: all 0.3s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in {
            animation: fadeIn 0.8s ease forwards;
        }
    </style>
</head>
<body class="font-sans bg-gray-50 text-gray-800">
    <!-- Navigation -->
    <header class="fixed w-full bg-white shadow-sm z-50">
        <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#home" class="text-2xl font-bold text-green-600">DevPortfolio</a>
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-700 hover:text-green-600 transition">Home</a>
                <a href="#skills" class="text-gray-700 hover:text-green-600 transition">Skills</a>
                <a href="#experience" class="text-gray-700 hover:text-green-600 transition">Experience</a>
                <a href="#employment" class="text-gray-700 hover:text-green-600 transition">Employment</a>
                <a href="#works" class="text-gray-700 hover:text-green-600 transition">Works</a>
                <a href="#contact" class="text-gray-700 hover:text-green-600 transition">Contact</a>
            </div>
            <button class="md:hidden focus:outline-none" id="mobile-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </nav>
        <!-- Mobile Menu -->
        <div class="hidden md:hidden bg-white shadow-lg" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-green-600">Home</a>
                <a href="#skills" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-green-600">Skills</a>
                <a href="#experience" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-green-600">Experience</a>
                <a href="#employment" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-green-600">Employment</a>
                <a href="#works" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-green-600">Works</a>
                <a href="#contact" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-green-600">Contact</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero-bg min-h-screen flex items-center justify-center pt-20 pb-20">
        <div class="container mx-auto px-6 text-center md:text-left">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 fade-in">
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Hi, I'm <span class="text-green-200">Đàm Nhân Kiệt</span></h1>
                    <h2 class="text-2xl md:text-3xl font-semibold text-green-100 mb-6">Full Stack Web Developer</h2>
                    <p class="text-white text-lg mb-8 max-w-lg mx-auto md:mx-0">
                        I build exceptional digital experiences with modern web technologies. 
                        Passionate about creating responsive, performant, and accessible web applications.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center md:justify-start">
                        <a href="#contact" class="px-8 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                            Hire Me
                        </a>
                        <a href="#" class="px-8 py-3 bg-white text-green-600 rounded-lg hover:bg-gray-100 transition flex items-center justify-center">
                            <i class="fas fa-download mr-2"></i> DOWNLOAD CV
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center fade-in">
                    <div class="relative w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden border-4 border-white shadow-xl">
                        <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" 
                             alt="Profile" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
            <div class="mt-16 flex justify-center space-x-6">
                <a href="#" class="text-white hover:text-green-200 text-2xl transition">
                    <i class="fab fa-github"></i>
                </a>
                <a href="#" class="text-white hover:text-green-200 text-2xl transition">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="#" class="text-white hover:text-green-200 text-2xl transition">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-white hover:text-green-200 text-2xl transition">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-white hover:text-green-200 text-2xl transition">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16 section-title">My Skills</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Frontend Skills -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md skill-card transition transform hover:shadow-lg">
                    <div class="text-green-600 text-4xl mb-4 flex items-center">
                        <i class="fas fa-laptop-code mr-3"></i>
                        <h3 class="text-xl font-semibold">Frontend</h3>
                    </div>
                    <div class="space-y-4 mt-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">HTML5 & CSS3</span>
                                <span class="text-gray-600">95%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">JavaScript</span>
                                <span class="text-gray-600">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">React.js</span>
                                <span class="text-gray-600">88%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">Vue.js</span>
                                <span class="text-gray-600">80%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backend Skills -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md skill-card transition transform hover:shadow-lg">
                    <div class="text-green-600 text-4xl mb-4 flex items-center">
                        <i class="fas fa-server mr-3"></i>
                        <h3 class="text-xl font-semibold">Backend</h3>
                    </div>
                    <div class="space-y-4 mt-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">Node.js</span>
                                <span class="text-gray-600">92%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">Express.js</span>
                                <span class="text-gray-600">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">PHP</span>
                                <span class="text-gray-600">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">Python/Django</span>
                                <span class="text-gray-600">80%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Other Skills -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md skill-card transition transform hover:shadow-lg">
                    <div class="text-green-600 text-4xl mb-4 flex items-center">
                        <i class="fas fa-tools mr-3"></i>
                        <h3 class="text-xl font-semibold">Other</h3>
                    </div>
                    <div class="space-y-4 mt-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">MySQL/MongoDB</span>
                                <span class="text-gray-600">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">Git/Version Control</span>
                                <span class="text-gray-600">88%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">Docker</span>
                                <span class="text-gray-600">75%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">AWS</span>
                                <span class="text-gray-600">70%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16 section-title">My Experience</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="text-green-600 text-4xl mb-4">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">8+ Years</h3>
                    <p class="text-gray-600">Web Development Experience</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="text-green-600 text-4xl mb-4">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">50+ Projects</h3>
                    <p class="text-gray-600">Completed Successfully</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="text-green-600 text-4xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">30+ Clients</h3>
                    <p class="text-gray-600">Satisfied Worldwide</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Employment Section -->
    <section id="employment" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16 section-title">Employment History</h2>
            
            <div class="space-y-8 max-w-3xl mx-auto">
                <!-- Job 1 -->
                <div class="p-6 border-l-4 border-green-600 bg-gray-50 rounded-r-lg shadow-sm">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                        <div>
                            <h3 class="text-xl font-semibold">Senior Full Stack Developer</h3>
                            <h4 class="text-gray-600">TechCorp Solutions</h4>
                        </div>
                        <span class="text-gray-500 mt-2 md:mt-0">Jan 2020 - Present</span>
                    </div>
                    <ul class="mt-4 list-disc list-inside text-gray-600 space-y-2">
                        <li>Led a team of 5 developers in building enterprise-level web applications</li>
                        <li>Developed RESTful APIs handling over 100k requests per minute</li>
                        <li>Implemented CI/CD pipelines reducing deployment time by 70%</li>
                        <li>Optimized frontend performance, improving page load times by 50%</li>
                    </ul>
                </div>
                
                <!-- Job 2 -->
                <div class="p-6 border-l-4 border-green-600 bg-gray-50 rounded-r-lg shadow-sm">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                        <div>
                            <h3 class="text-xl font-semibold">Web Developer</h3>
                            <h4 class="text-gray-600">Digital Creations</h4>
                        </div>
                        <span class="text-gray-500 mt-2 md:mt-0">Mar 2016 - Dec 2019</span>
                    </div>
                    <ul class="mt-4 list-disc list-inside text-gray-600 space-y-2">
                        <li>Developed and maintained 10+ client websites with WordPress and custom solutions</li>
                        <li>Built a SaaS platform with React frontend and Node.js backend</li>
                        <li>Implemented responsive designs for mobile compatibility</li>
                        <li>Improved website security, eliminating all SQL injection vulnerabilities</li>
                    </ul>
                </div>
                
                <!-- Job 3 -->
                <div class="p-6 border-l-4 border-green-600 bg-gray-50 rounded-r-lg shadow-sm">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                        <div>
                            <h3 class="text-xl font-semibold">Junior Developer</h3>
                            <h4 class="text-gray-600">WebStart Inc.</h4>
                        </div>
                        <span class="text-gray-500 mt-2 md:mt-0">Sep 2014 - Feb 2016</span>
                    </div>
                    <ul class="mt-4 list-disc list-inside text-gray-600 space-y-2">
                        <li>Assisted in developing and maintaining company websites</li>
                        <li>Built custom WordPress themes and plugins</li>
                        <li>Learned modern web development practices and frameworks</li>
                        <li>Fixed bugs and improved existing code quality</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Works Section -->
    <section id="works" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16 section-title">My Works</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md work-card">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZGFzaGJvYXJkfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" 
                             alt="Project 1" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-green-600 bg-opacity-75 flex items-center justify-center opacity-0 work-overlay">
                            <a href="#" class="text-white font-semibold px-4 py-2 border border-white rounded hover:bg-white hover:text-green-600 transition">View Details</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Analytics Dashboard</h3>
                        <p class="text-gray-600 mb-4">A comprehensive analytics platform with real-time data visualization</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">React</span>
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">Node.js</span>
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">MongoDB</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md work-card">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1541462608143-67571c6738dd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZWNvbW1lcmNlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" 
                             alt="Project 2" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-green-600 bg-opacity-75 flex items-center justify-center opacity-0 work-overlay">
                            <a href="#" class="text-white font-semibold px-4 py-2 border border-white rounded hover:bg-white hover:text-green-600 transition">View Details</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">E-commerce Platform</h3>
                        <p class="text-gray-600 mb-4">Full-featured online store with payment integration</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">Vue.js</span>
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">Laravel</span>
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">MySQL</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md work-card">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1607748862156-7c548e7e98f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8bW9iaWxlJTIwYXBwfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" 
                             alt="Project 3" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-green-600 bg-opacity-75 flex items-center justify-center opacity-0 work-overlay">
                            <a href="#" class="text-white font-semibold px-4 py-2 border border-white rounded hover:bg-white hover:text-green-600 transition">View Details</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Task Management App</h3>
                        <p class="text-gray-600 mb-4">Collaborative project management tool with real-time updates</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">React Native</span>
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">Firebase</span>
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">Redux</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="px-8 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition inline-block">
                    View More Projects
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16 section-title">Get In Touch</h2>
            
            <div class="flex flex-col md:flex-row gap-12 max-w-6xl mx-auto">
                <div class="md:w-1/2">
                    <h3 class="text-xl font-semibold mb-4">Contact Information</h3>
                    <p class="text-gray-600 mb-6">Feel free to reach out to me for any questions or opportunities. I'll get back to you as soon as possible.</p>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="text-green-600 mr-4 mt-1">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium">Email</h4>
                                <p class="text-gray-600">john.doe@example.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="text-green-600 mr-4 mt-1">
                                <i class="fas fa-phone-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium">Phone</h4>
                                <p class="text-gray-600">+1 (555) 123-4567</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="text-green-600 mr-4 mt-1">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium">Location</h4>
                                <p class="text-gray-600">San Francisco, CA</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <h4 class="font-medium mb-4">Follow Me</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-600 hover:text-green-600 transition">
                                <i class="fab fa-github fa-lg"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-green-600 transition">
                                <i class="fab fa-linkedin fa-lg"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-green-600 transition">
                                <i class="fab fa-twitter fa-lg"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-green-600 transition">
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="md:w-1/2">
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-gray-700 mb-1">Your Name</label>
                            <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-600 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-gray-700 mb-1">Your Email</label>
                            <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-600 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-gray-700 mb-1">Subject</label>
                            <input type="text" id="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-600 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-gray-700 mb-1">Message</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-600 focus:border-transparent"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <a href="#" class="text-2xl font-bold text-green-400">DevPortfolio</a>
                    <p class="text-gray-400 mt-1">© 2023 All Rights Reserved</p>
                </div>
                
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Smooth scrolling for all links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                mobileMenu.classList.add('hidden');
            });
        });
        
        // Add fade-in animation to elements when they come into view
        const fadeElements = document.querySelectorAll('.fade-in');
        
        const fadeInObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });
        
        fadeElements.forEach(el => {
            fadeInObserver.observe(el);
        });
        
        // Simulate CV download
        document.querySelector('[href="#"]').addEventListener('click', function(e) {
            // Check if the link is a download link before alerting
            if (this.innerText.includes('DOWNLOAD CV')) {
                e.preventDefault();
                alert('CV download would start here. This is a demo.');
            }
        });
    </script>
</body>
</html>