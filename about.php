<html>
<head>
    <title>About</title>
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background: #f3e6bb;
            display: flex;
            position: fixed;
            min-height: 100%;
        }
        
        .sidebar {
            width: 200px;
            background: #2d3748;
            padding: 20px 0;
            color: white;
        }
        
        .menu {
            padding: 20px;
            border-bottom: 1px solid #4a5568;
            font-weight: bold;
        }
        
        .item {
            padding: 15px 20px;
            cursor: pointer;
            border-left: 3px solid transparent;
            display: block;
        }
        
        .item:hover {
            background: #4a5568;
        }

        .item.active {
            background: #181f2bff;
        }
        
        .content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .header {
            background: white;
            padding: 15px 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 1px;
            width: 100%;
        }
        
        .about {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 1px 1px;
        }
        
        .about-content {
            max-width: 800px;
        }
        
        
        .section p {
            color: #7f8c8d;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        
        .skillinfo {
            color: #7f8c8d;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="menu">☰ MENU</div>
        <a href="portfoliologin.php" class="item" style="color: white; text-decoration: none;">Home</a>
        <a href="about.php" class="item active" style="color: white; text-decoration: none;">About</a>
        <a href="skills.php" class="item" style="color: white; text-decoration: none;">Skills</a>
        <a href="projects.php" class="item" style="color: white; text-decoration: none;">Projects</a>
        <a href="contact.php" class="item" style="color: white; text-decoration: none;">Contact</a>
        <a href="portfolio.php" class="item" style="color: white; text-decoration: none;">Log out</a>
    </div>
    
    <div class="content">
        <div class="header">
            <h1>ABOUT ME</h1>
        </div>
        
        <div class="about">
            <div class="about-content">
                <div class="section">
                    <p>
                        I'm Ankush Kashyap, a passionate Computer Science student at Jaypee University of Information Technology (JUIT). 
                        I'm dedicated to creating innovative solutions through technology and have a deep love for full-stack development, 
                        problem-solving, and continuous learning.
                    </p>
                    <p>
                        My journey in tech started with curiosity about how websites work, and now I'm building comprehensive web applications 
                        and exploring the endless possibilities of software development.
                    </p>
                </div>

                
                <div>
                    <div>
                        <div class="skill">
                            <h4>Web Development</h4>
                            <div class="skillinfo">
                                Building responsive and modern web applications using latest technologies and frameworks
                            </div>
                        </div>
                        <div>
                            <h4>Photography</h4>
                            <div class="skillinfo">
                                Capturing landscapes, street moments, and macro details to highlight beauty in everyday life
                            </div>
                        </div>

</body>
</html>