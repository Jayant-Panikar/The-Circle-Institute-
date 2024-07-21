<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Circle Institute</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
    <link rel="stylesheet" href="/project/Styles/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
        <header>
            <nav>
                <h1 class="logo"><a href="home.php">The Circle</a></h1>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="course.html">Courses</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </header>

        <div class="page" id="home">
            <video autoplay loop muted playsinline id="bg-video">
                <source src="/project/Assets/homevideo2.mp4" type="video/mp4">
            </video>
            <div class="content">
                <h2>Welcome to The Circle Institute</h2>
                <p>Empowering Future Innovators</p>
            </div>
        </div>

        <div class="page" id="overview">
            <div class="cont">
                <h2>Brief Overview</h2>
                <p>The Circle Institute is a cutting-edge educational center dedicated to nurturing the next generation
                    of technology leaders. We specialize in providing comprehensive, hands-on training in today's most
                    in-demand programming languages and technologies.</p>
                <h3>Our Core Offerings:</h3>
                <ul>
                    <li>Python: From basics to advanced concepts, including data science and machine learning
                        applications.</li>
                    <li>Java: Comprehensive courses covering core Java, object-oriented programming, and enterprise
                        applications.</li>
                    <li>C and C++: Fundamental to advanced level courses, emphasizing system programming and software
                        development.</li>
                    <li>Web Development: Full-stack web development, including HTML, CSS, JavaScript, and popular
                        frameworks.</li>
                </ul>
            </div>
        </div>

        <div class="page" id="mission">
            <div class="cont">
                <h2>Our Mission</h2>
                <p>At The Circle Institute, we aim to bridge the gap between theoretical knowledge and practical
                    application. We believe in fostering a collaborative learning environment that encourages
                    creativity, critical thinking, and problem-solving skills.</p>
                <h3>Who We Serve:</h3>
                <ul>
                    <li>High school graduates looking to start a career in tech</li>
                    <li>College students seeking to supplement their education</li>
                    <li>Working professionals aiming to upskill or change careers</li>
                    <li>Tech enthusiasts of all ages wanting to explore programming</li>
                </ul>
            </div>
        </div>

        <div class="page" id="vision">
            <div class="cont">
                <h2>Our Vision: Shaping the Future of Technology Education</h2>
                <p>At The Circle Institute, our vision is to be the leading catalyst for technological innovation and
                    education. We aspire to:</p>
                <ul>
                    <li>Pioneer Excellence: Set the gold standard in programming and technology education, continuously
                        evolving our curriculum to stay ahead of industry trends.</li>
                    <li>Foster Innovation: Create an environment where creativity thrives, encouraging students to push
                        boundaries and develop groundbreaking solutions.</li>
                    <li>Build a Global Tech Community: Connect learners, educators, and industry leaders worldwide,
                        fostering collaboration and knowledge exchange.</li>
                    <li>Democratize Tech Education: Make high-quality programming education accessible to diverse
                        learners, regardless of their background or prior experience.</li>
                    <li>Drive Technological Progress: Contribute to advancements in technology by producing skilled,
                        forward-thinking graduates who will lead the next wave of digital transformation.</li>
                    <li>Cultivate Ethical Tech Leaders: Instill a strong sense of ethics and responsibility in our
                        students, preparing them to address the complex challenges of the digital age.</li>
                    <li>Bridge Industry-Academia Gap: Maintain strong partnerships with tech companies to ensure our
                        education remains relevant and our graduates are industry-ready.</li>
                    <li>Promote Lifelong Learning: Inspire a passion for continuous learning and adaptation in the
                        ever-evolving tech landscape.</li>
                </ul>
            </div>
        </div>

        <div class="page" id="highlights">
            <div class="cont">
                <h2>Highlights</h2>
                <ul>
                    <li><strong>500+ Graduates:</strong> Our alumni are making waves in tech companies worldwide.</li>
                    <li><strong>95% Job Placement Rate:</strong> Within 6 months of graduation, most of our students
                        secure fulfilling tech roles.</li>
                    <li><strong>20+ Industry Partnerships:</strong> Collaborations with leading tech firms ensure our
                        curriculum stays cutting-edge.</li>
                    <li><strong>Diverse Learning Paths:</strong> From web development to AI and machine learning, we
                        offer a wide range of specializations.</li>
                    <li><strong>Hands-on Projects:</strong> Students complete over 10 real-world projects during their
                        course.</li>
                    <li><strong>Expert Instructors:</strong> Learn from industry professionals with years of experience
                        in top tech companies.</li>
                </ul>
            </div>
        </div>

        <div class="page" id="achievements">
            <div class="cont">
                <h2>Achievements</h2>
                <ul>
                    <li><strong>Top Coding Institute 2023:</strong> Recognized by TechEdu Magazine for excellence in
                        programming education.</li>
                    <li><strong>Innovation in Education Award:</strong> Received the prestigious EdTech Innovator Award
                        for our adaptive learning platform.</li>
                    <li><strong>Best Student Experience 2022:</strong> Voted #1 for student satisfaction among coding
                        bootcamps.</li>
                    <li><strong>Industry Impact Award:</strong> Acknowledged for contributing skilled professionals to
                        the tech workforce.</li>
                    <li><strong>Diversity in Tech Initiative:</strong> Awarded for our efforts in promoting inclusivity
                        in the tech industry.</li>
                </ul>
            </div>
        </div>

        <div class="page" id="testimonials">
            <div class="cont">
                <h2>Testimonials</h2>
                <blockquote>
                    "The Circle Institute transformed my career. Their hands-on approach and expert instructors made all
                    the difference. Within two months of graduating, I landed my dream job as a software engineer at a
                    leading tech company."
                    <footer>- Jane D., Software Engineer at TechGiant Inc.</footer>
                </blockquote>
                <blockquote>
                    "As a career switcher, I was worried about transitioning into tech. The Circle Institute not only
                    taught me valuable coding skills but also provided excellent career support. Their network and
                    reputation in the industry opened doors I never thought possible."
                    <footer>- Mark S., Full Stack Developer at InnovateNow</footer>
                </blockquote>
                <blockquote>
                    "The project-based curriculum at The Circle Institute gave me practical experience that set me apart
                    in job interviews. The collaborative environment and the lifelong connections I made with fellow
                    students and instructors are invaluable."
                    <footer>- Sarah L., Data Scientist at DataDriven Corp</footer>
                </blockquote>
            </div>
        </div>

        <footer>
            <div class="footer-cont">
                <div class="footer-sec">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#overview">Overview</a></li>
                        <li><a href="#mission">Mission</a></li>
                        <li><a href="#vision">Vision</a></li>
                    </ul>
                </div>
                <div class="footer-sec">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>Email: info@circleinstitute.com</li>
                        <li>Phone: (123) 456-7890</li>
                        <li>Address: 123 Tech Street, Codeville, TX 12345</li>
                    </ul>
                </div>
                <div class="footer-sec">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">LinkedIn</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 The Circle Institute. All rights reserved.</p>
            </div>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
    <script src="/project/Script/home.js"></script>
</body>

</html>