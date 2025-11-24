<html>
<head>
    <title>Skills - Portfolio</title>
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background: #f3e6bb;
            display: flex;
            position: fixed;
            min-height: 100vh;
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
        }
        
        .header {
            background: white;
            padding: 15px 30px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 1px;
        }
        
        .section {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 1px 1px;
        }
        
        .content {
            max-width: 800px;
        }
        
        
        .skillinfo {
            color: #7f8c8d;
            line-height: 1.8;
        }
        
        .skill-data {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        
        .skill-data h4 {
            margin-bottom: 10px;
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="menu">☰ MENU</div>
        <a href="portfoliologin.php" class="item" style="color: white; text-decoration: none;">Home</a>
        <a href="about.php" class="item" style="color: white; text-decoration: none;">About</a>
        <a href="skills.php" class="item active" style="color: white; text-decoration: none;">Skills</a>
        <a href="projects.php" class="item" style="color: white; text-decoration: none;">Projects</a>
        <a href="contact.php" class="item" style="color: white; text-decoration: none;">Contact</a>
        <a href="portfolio.php" class="item" style="color: white; text-decoration: none;">Log out</a>
    </div>
    
    <div class="content">
        <div class="header">
            <h1>SKILLS</h1>
        </div>
        
        <div class="section">
            <div class="content">
                <div>
                    <h3>Programming Languages</h3>
                    <div class="skill-data">
                        <h4>Core Languages</h4>
                        <div class="skillinfo">
                            JavaScript, HTML/CSS, C++, PHP, Python
                        </div>
                    </div>
                </div>

                <div>
                    <h3>Frameworks & Libraries</h3>
                    <div class="skill-data">
                        <h4>Web Development</h4>
                        <div class="skillinfo">
                            React.js, Node.js, Bootstrap, jQuery
                        </div>
                    </div>
                </div>

                <div>
                    <h3>Tools & Technologies</h3>
                    <div class="skill-data">
                        <h4>Development Tools</h4>
                        <div class="skillinfo">
                            Git & GitHub, MySQL, VS Code, Vercel
                        </div>
                    </div>
                </div>

                <div>
                    <h3>Design & UI/UX</h3>
                    <div class="skill-data">
                        <h4>Design Skills</h4>
                        <div class="skillinfo">
                            Responsive Design, Figma, Adobe Photoshop
                        </div>
                    </div>
                </div>
</body>
</html>