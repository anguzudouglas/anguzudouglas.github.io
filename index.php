<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anguzu Douglas | Web Developer</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --github-dark: #0d1117;
            --github-darker: #010409;
            --github-light: #c9d1d9;
            --github-green: #238636;
            --github-blue: #58a6ff;
            --github-border: #30363d;
            --github-secondary: #8b949e;
            --github-card: #161b22;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: var(--github-dark);
            color: var(--github-light);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Header */
        header {
            padding: 1rem 0;
            position: sticky;
            top: 0;
            background: var(--github-darker);
            z-index: 100;
            border-bottom: 1px solid var(--github-border);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile-pic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--github-border);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--github-light);
            font-weight: 500;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-links a:hover {
            color: var(--github-blue);
        }

        /* Hero Section */
        .hero {
            min-height: 90vh;
            display: flex;
            align-items: center;
            padding: 4rem 0;
            background: var(--github-darker);
            border-bottom: 1px solid var(--github-border);
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            line-height: 1.2;
            background: linear-gradient(45deg, var(--github-blue), var(--github-green));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.25rem;
            color: var(--github-secondary);
            margin-bottom: 2rem;
        }

        .tech-stack {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .tech-item {
            background: var(--github-card);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            border: 1px solid var(--github-border);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .tech-item i {
            color: var(--github-blue);
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            background: var(--github-green);
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background: #2ea043;
        }

        /* Experience Section */
        .experience {
            padding: 4rem 0;
            background: var(--github-dark);
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
            color: var(--github-light);
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            width: 2px;
            height: 100%;
            background: var(--github-border);
        }

        .timeline-item {
            margin-bottom: 3rem;
            position: relative;
            width: 50%;
            padding: 0 2rem;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-content {
            background: var(--github-card);
            padding: 1.5rem;
            border-radius: 6px;
            border: 1px solid var(--github-border);
        }

        .timeline-date {
            color: var(--github-blue);
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        /* Skills Section */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .skill-card {
            background: var(--github-card);
            padding: 2rem;
            border-radius: 6px;
            border: 1px solid var(--github-border);
        }

        .skill-card i {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--github-blue);
        }

        /* Projects Section */
        .projects {
            padding: 4rem 0;
            background: var(--github-darker);
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background: var(--github-card);
            border-radius: 6px;
            overflow: hidden;
            border: 1px solid var(--github-border);
            transition: transform 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .project-content {
            padding: 1.5rem;
        }

        .project-tech {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .project-tech span {
            background: var(--github-dark);
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.8rem;
            color: var(--github-secondary);
        }

        /* Footer */
        footer {
            background: var(--github-darker);
            color: var(--github-light);
            padding: 2rem 0;
            border-top: 1px solid var(--github-border);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .social-links a {
            color: var(--github-light);
            font-size: 1.5rem;
            margin-left: 1rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: var(--github-blue);
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .nav-links {
                display: none;
            }

            .timeline::before {
                left: 0;
            }

            .timeline-item {
                width: 100%;
                left: 0 !important;
            }

            .footer-content {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="container">
            <img src="/api/placeholder/200/200" alt="Anguzu Douglas" class="profile-pic">
            <div class="nav-links">
                <a href="#home"><i class="fas fa-home"></i> Home</a>
                <a href="#experience"><i class="fas fa-briefcase"></i> Experience</a>
                <a href="#skills"><i class="fas fa-code"></i> Skills</a>
                <a href="#projects"><i class="fas fa-project-diagram"></i> Projects</a>
                <a href="#contact"><i class="fas fa-envelope"></i> Contact</a>
            </div>
        </nav>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="container hero-content">
                <h1>Anguzu Douglas</h1>
                <p>Advanced Website Developer with 10+ years of experience building exceptional digital experiences. Specializing in full-stack development with a focus on scalable, user-centric solutions.</p>
                <div class="tech-stack">
                    <span class="tech-item"><i class="fab fa-html5"></i> HTML5</span>
                    <span class="tech-item"><i class="fab fa-css3-alt"></i> CSS3</span>
                    <span class="tech-item"><i class="fab fa-js"></i> JavaScript</span>
                    <span class="tech-item"><i class="fab fa-php"></i> PHP</span>
                    <span class="tech-item"><i class="fas fa-database"></i> SQL</span>
                </div>
                <div style="margin-top: 2rem;">
                    <a href="#contact" class="cta-button">Get in touch <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <section id="experience" class="experience">
            <div class="container">
                <h2 class="section-title">Professional Journey</h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-date">2020 - Present</div>
                            <h3>Senior Full Stack Developer</h3>
                            <p>Leading development teams and architecting large-scale web applications</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-date">2017 - 2020</div>
                            <h3>Web Development Team Lead</h3>
                            <p>Managed development projects and mentored junior developers</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-date">2014 - 2017</div>
                            <h3>Full Stack Developer</h3>
                            <p>Developed and maintained enterprise web applications</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="container" style="padding: 4rem 0;">
            <h2 class="section-title">Technical Expertise</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <i class="fas fa-laptop-code"></i>
                    <h3>Frontend Development</h3>
                    <p>- Advanced HTML5, CSS3, JavaScript (ES6+)</p>
                    <p>- Responsive Design & Mobile-First Approach</p>
                    <p>- Performance Optimization</p>
                </div>
                <div class="skill-card">
                    <i class="fas fa-server"></i>
                    <h3>Backend Development</h3>
                    <p>- PHP Development & Framework Expertise</p>
                    <p>- Database Design & Optimization</p>
                    <p>- RESTful API Development</p>
                </div>
                <div class="skill-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Security & DevOps</h3>
                    <p>- Web Security Best Practices</p>
                    <p>- Version Control (Git)</p>
                    <p>- Deployment Automation</p>
                </div>
            </div>
        </section>

        <section id="projects" class="projects">
            <div class="container">
                <h2 class="section-title">Featured Projects</h2>
                <div class="projects-grid">
                    <div class="project-card">
                        <img src="/api/placeholder/400/200" alt="E-commerce Platform">
                        <div class="project-content">
                            <h3>E-commerce Platform</h3>
                            <p>Full-stack e-commerce solution with advanced features and secure payment integration.</p>
                            <div class="project-tech">
                                <span>PHP</span>
                                <span>MySQL</span>
                                <span>JavaScript</span>
                            </div>
                        </div>
                    </div>
                    <div class="project-card">
                        <img src="/api/placeholder/400/200" alt="CMS Dashboard">
                        <div class="project-content">
                            <h3>Enterprise CMS</h3>
                            <p>Custom content management system with real-time analytics and user management.</p>
                            <div class="project-tech">
                                <span>Laravel</span>
                                <span>Vue.js</span>
                                <span>SQLite</span>
                            </div>
                        </div>
                    </div>
                    <div class="project-card">
                        <img src="/api/placeholder/400/200" alt="API Platform">
                        <div class="project-content">
                            <h3>REST API Platform</h3>
                            <p>Scalable API platform with advanced authentication and rate limiting.</p>
                            <div class="project-tech">
                                <span>PHP</span>
                                <span>JWT</span>
                                <span>Redis</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="contact">
        <div class="container footer-content">
            <p>&copy; 2024 Anguzu Douglas. All rights reserved.</antArtifact