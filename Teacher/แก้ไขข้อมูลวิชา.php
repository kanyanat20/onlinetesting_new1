<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลวิชา</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 200px;
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            text-decoration: none;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .header {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .breadcrumbs {
            margin-bottom: 20px;
            font-size: 14px;
            color: #666;
        }

        .breadcrumbs a {
            text-decoration: none;
            color: #666;
            margin-right: 5px;
        }

        .breadcrumbs span {
            color: #999;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-container button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        .logo {
            text-align: center;
        }

        .logo img {
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img src="logo.png" alt="Logo">
            </div>
            <a href="#">หน้าหลัก</a>
            <a href="#">จัดการข้อมูลผู้ดูแลระบบ</a>
            <a href="#">จัดการข้อมูลวิชา</a>
            <a href="#">จัดการข้อมูลข้อสอบ</a>
            <a href="#">ดูผลสอบรายบุคคล</a>
            <a href="#">Logout</a>
        </div>
        <div class="content">
            <div class="header">
                <h1>แก้ไขข้อมูลวิชา</h1>
                <div class="breadcrumbs">
                    <a href="#">หน้าหลัก</a> <span>/</span>
                    <a href="#">จัดการข้อมูลวิชา</a> <span>/</span>
                    <span>แก้ไขข้อมูลวิชา</span>
                </div>
            </div>
            <div class="form-container">
                <div class="logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1024px-HTML5_logo_and_wordmark.svg.png" alt="HTML, CSS, JavaScript logo">
                </div>
                <label for="name">ชื่อวิชา:</label>
                <input type="text" id="name" name="name" placeholder="ชื่อวิชา">

                <label for="description">คำอธิบาย:</label>
                <textarea id="description" name="description" placeholder="คำอธิบาย"></textarea>

                <button type="submit">แก้ไขข้อมูล</button>
            </div>
        </div>
    </div>
</body>
</html>