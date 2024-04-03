<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Samuel Pfeiffer</title>
</head>
<body>

    <!-- Main Page -->
    <header>
        <h1 class="bigHeader">Welcome!</h1>
        <p class="indexBody">
            <?php include './textfiles/welcome.txt'; ?>
        </p>
        
    </header>

    <!-- About Me Section -->
    <section id="about">
        <h2>About Me</h2>
        <p>I am a 2023 graduate with a Bachelor of Science in Computer Science from Wayne State University.
            I have always enjoyed working with computers from a very young age, and like all aspects of them.
            Professionally, I have been working with IT for about 2 years, while also working on web development on the side.
        </p>
        <p href="./textfiles/intro.txt">Read in detail</p>
    </section>

    <!-- Resume Section -->
    <section id="resume">
        <h2>Resume</h2>
        <p>Most recent position: Level 3 IT Support Technician @ Universal Logistics</p>
        <!-- You can also provide a link to download your resume as a PDF -->
        <a href="path/to/your/resume.pdf" target="_blank" class="resumeLink">Download Resume</a>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio">
        <h2>Portfolio</h2>
        <div class="project">
            <img src="path/to/project1.jpg" alt="Project 1">
            <h3>iConnect</h3>
            <p>iConnect is an application that takes student data inputed from the mobile app
                and sends it through the shared database to the web app, which then creates graphs of the data for professors.
                The goal of the app was to get a better connection between students and professors at a university.
            </p>
            <a href="project1-details.html" class="projectLink">View Details</a>
        </div>

        <!-- Repeat the structure for other projects -->

    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact</h2>
        <p>You can reach me at <a href="mailto:spfeiffercol@gmail.com">spfeiffercol@gmail.com</a>.</p>
        <!-- Optionally, you can include a contact form or additional contact details -->
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Samuel Pfeiffer. All rights reserved.</p>
    </footer>

</body>
</html>