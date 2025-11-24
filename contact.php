<html>
<head>
    <title>Contact</title>
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
        
        .box {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 2px 2px;
            text-align: center;
            width: 600px;
        }
        
        .contact {
            margin-bottom: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
        }
        
        .contact-head {
            font-size: 12px;
            color: #95a5a6;
            font-weight: bold;
        }
        
        .contact-info {
            font-size: 16px;
            color: #2c3e50;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="menu">☰ MENU</div>
        <a href="portfoliologin.php" class="item" style="color: white; text-decoration: none;">Home</a>
        <a href="about.php" class="item" style="color: white; text-decoration: none;">About</a>
        <a href="skills.php" class="item" style="color: white; text-decoration: none;">Skills</a>
        <a href="projects.php" class="item" style="color: white; text-decoration: none;">Projects</a>
        <a href="contact.php" class="item active" style="color: white; text-decoration: none;">Contact</a>
        <a href="portfolio.php" class="item" style="color: white; text-decoration: none;">Log out</a>
    </div>
    
    <div class="content">
        <div class="header">
            <h1>CONTACT ME</h1>
        </div>
        
        <div class="box">
            <div class="contact">
                <div class="contact-head">Email</div>
                <div class="contact-info">ankushkashyap@gmail.com</div>
            </div>
            
            <div class="contact">
                <div class="contact-head">Phone</div>
                <div class="contact-info">+91 8998999770</div>
            </div>
        </div>
    </div>
</body>
</html>