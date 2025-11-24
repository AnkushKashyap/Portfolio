<html>
<head>
    <title>Portfolio</title>
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
        
        .content-area {
            display: flex;
            gap: 20px;
        }
        
        .detail {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 1px 1px;
            flex: 1;
        }
        
        .info {
            background: orange;
            padding: 20px;
            border-radius: 10px;
            color: white;
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            box-shadow: 0px 2px 2px;
        }
        
        .pic {
            width: 120px;
            height: 120px;
            border-radius: 10px;
            background: #34495e;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            color: white;
        }
        
        .name h2 {
            margin-bottom: 10px;
        }
        
        .stats {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }
        
        .statitem {
            text-align: center;
        }
        
        .data {
            font-size: 20px;
            font-weight: bold;
        }
        
        .belowdata {
            font-size: 12px;
            opacity: 0.8;
        }
        
        .extra {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        
        
        .skills {
            background: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        
        .contact {
            background: white;
            color: #2c3e50;
            border: 1px solid #bdc3c7;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        
        .projects {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 1px 1px;
            width: 300px;
        }
        
        .proj {
            padding: 15px;
            border: 1px solid #ecf0f1;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        
        .projtitle {
            font-weight: bold;
            color: #2c3e50;
        }
        
        .projinfo {
            color: #7f8c8d;
            font-size: 14px;
        }
        
        .projlink {
            color: #95a5a6;
            font-size: 12px;
        }
        
        .hobby {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 1px 1px;
            margin-top: 20px;
        }
        
        .hobbybox {
            padding: 15px;
            border: 1px solid #ecf0f1;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        
        .hobbytitle {
            font-weight: bold;
            color: #2c3e50;
        }
        
        .hobbyinfo {
            color: #7f8c8d;
            font-size: 14px;
        }
        
        .hobbydesc {
            color: #95a5a6;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="menu">☰ MENU</div>
        <a href="portfoliologin.php" class="item active" style="color: white; text-decoration: none;">Home</a>
        <a href="about.php" class="item" style="color: white; text-decoration: none;">About</a>
        <a href="skills.php" class="item" style="color: white; text-decoration: none;">Skills</a>
        <a href="projects.php" class="item" style="color: white; text-decoration: none;">Projects</a>
        <a href="contact.php" class="item" style="color: white; text-decoration: none;">Contact</a>
        <a href="portfolio.php" class="item" style="color: white; text-decoration: none;">Log out</a>
    </div>
    
    <div class="content">
        <div class="header">
            <h1>HOME</h1>
        </div>
        
        <div class="content-area">
            <div class="detail">
                <div class="info">
                    <div class="pic"><img src="pfp.png" height=130px width=130px></div>
                    <div class="name">
                        <h2>Ankush Kashyap</h2>
                        <p><a href="https://www.linkedin.com/in/ankush-kashyap-25829331b" target="_blank" style="color: white">LinkedIn</a> | <a href="https://github.com/AnkushKashyap" target="_blank" style="color: white">github</a></p>
                        <div class="stats">
                            <div class="statitem">
                                <div class="data">10+</div>
                                <div class="belowdata">skills</div>
                            </div>
                            <div class="statitem">
                                <div class="data">4</div>
                                <div class="belowdata">softwares</div>
                            </div>
                            <div class="statitem">
                                <div class="data">3</div>
                                <div class="belowdata">projects</div>
                            </div>
                            <div class="statitem">
                                <div class="data">5</div>
                                <div class="belowdata">courses</div>
                            </div>
                        </div>
                        <p style="margin-top: 15px; font-size: 14px;">
                           A passionate and methodical full-stack developer currently pursuing Computer Science with a specialization in software development.
                        </p>
                        <div class="extra">
                            <a href="skills.php" class="skills" style="text-decoration: none">✨ Skills </a>
                            <a href="contact.php" class="contact" style="text-decoration: none">📞 Contact</a>
                        </div>
                    </div>
                </div>
                
                <div class="hobby">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                        <h3>HOBBIES</h3>
                    </div>
                    <div class="hobbybox">
                        <div class="hobbytitle">Photography</div>
                        <div class="hobbyinfo">Capturing moments through lenses</div>
                        <div class="hobbydesc">landscape, street, macro</div>
                    </div>
                    <div class="hobbybox">
                        <div class="hobbytitle">Web Development</div>
                        <div class="hobbyinfo">Crafting clean, responsive websites</div>
                        <div class="hobbydesc">responsive design, minimal UI, frontend layouts</div>
                    </div>
                    <div class="hobbybox">
                        <div class="hobbytitle">Video Editing</div>
                        <div class="hobbyinfo">Visual storytelling with precision</div>
                        <div class="hobbydesc">montage, tutorials, reels</div>
                    </div>
                    <div class="hobbybox">
                        <div class="hobbytitle">Cooking</div>
                        <div class="hobbyinfo">Experimenting with flavors and fire</div>
                        <div class="hobbydesc">comfort food, fusion dishes, grilled recipes</div>
                    </div>
                </div>
            </div>
            
            <div class="projects">
                <h3 style="margin-bottom: 15px;">PROJECTS</h3>
        
                <div class="proj">
                    <div class="projtitle">🍕FOOD MENU</div>
                    <div class="projinfo">College Mess Menu Portal</div>
                    <div class="projlink"><a href="https://juitmeal.vercel.app/" target="_blank">JUIT Menu</a></div>
                </div>
                <div class="proj">
                    <div class="projtitle">📓ATTENDANCE QR</div>
                    <div class="projinfo">QR-Based Attendance Logger</div>
                    <div class="projlink"><a href="https://juit-attendance.vercel.app/" target="_blank">Attendance</a></div>
                </div>
                <div class="proj">
                    <div class="projtitle">🧺E-COMMERCE</div>
                    <div class="projinfo">C++ E-Commerce Interface</div>
                    <div class="projlink"><a href="https://github.com/AnkushKashyap/Basic-E-commerce" target="_blank">E-Commerce</a></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>