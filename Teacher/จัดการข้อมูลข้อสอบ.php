<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จัดการข้อมูลข้อสอบ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            width: 100%;
            height: 100vh;
        }

        .sidebar {
            background-color: #333;
            color: #fff;
            width: 200px;
            padding: 20px;
        }

        .sidebar h2 {
            margin-top: 0;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #fff;
            border-bottom: 1px solid #555;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
        }

        .header .user {
            display: flex;
            align-items: center;
        }

        .header .user img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .header .user span {
            font-weight: bold;
        }

        .info-box {
            background-color:#FFCC66;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            width: 300px;       
            height: 100px; 
        }

        .info-box h2 {
            margin-top: 0;
        }

        .info-box p {
            margin-bottom: 0;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f0f0f0;
        }

        .table td img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .button {
            display: inline-block;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
        <h2>Teacher</h2>
        <p>teacher123456@admin.com</p>
            <a href="#">หน้าหลัก</a>
            <a href="#">จัดการข้อมูลวิชา</a>
            <a href="#">จัดการข้อมูลข้อสอบ</a>
            <a href="#">ดูผลสอบรายบุคคล</a>
            <a href="#">Logout</a>
        </div>
        <div class="content">
            <div class="header">
                <h1>จัดการข้อมูลข้อสอบ</h1>
                <a href="#">หน้าหลัก/จัดการข้อมูลข้อสอบ</a>
            </div>
            <div class="info-box">
                <h2>ข้อมูลข้อสอบ</h2>
                <p>จำนวนข้อสอบทั้งหมด: 4</p>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>รูปภาพ</th>
                        <th>ชื่อวิชา</th>
                        <th>เลือก</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="html_logo.png" alt="HTML Logo">
                        </td>
                        <td>ภาษา HTML เพื่อการพัฒนาเว็บไซต์</td>
                        <td><button class="button">
                        <div class="dropdown">
            <a href="#">เลือก</a>
            <div class="dropdown-content">
                <a href="#">ข้อสอบปรนัย</a>
                <a href="#">ข้อสอบอัตนัย</a>
            </div>
        </div>
                        </button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <img src="oops_logo.png" alt="OOPs Logo">
                        </td>
                        <td>Class and Object-Oriented Programming</td>
                        <td><button class="button"><div class="dropdown">
            <a href="#">เลือก</a>
            <div class="dropdown-content">
                <a href="#">ข้อสอบปรนัย</a>
                <a href="#">ข้อสอบอัตนัย</a>
            </div>
        </div>
                    </button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <img src="python_logo.png" alt="Python Logo">
                        </td>
                        <td>Python</td>
                        <td><button class="button">
                        <div class="dropdown">
            <a href="#">เลือก</a>
            <div class="dropdown-content">
                <a href="#">ข้อสอบปรนัย</a>
                <a href="#">ข้อสอบอัตนัย</a>
            </div>
        </div>
                        </button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <img src="css_logo.png" alt="CSS Logo">
                        </td>
                        <td>CSS</td>
                        <td><button class="button">
                        <div class="dropdown">
            <a href="#">เลือก</a>
            <div class="dropdown-content">
                <a href="#">ข้อสอบปรนัย</a>
                <a href="#">ข้อสอบอัตนัย</a>
            </div>
        </div>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>