<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: sans-serif;
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
            margin-bottom: 20px;
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

        .main {
            flex-grow: 1;
            padding: 20px;
        }

        .main h1 {
            margin-bottom: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .card h2 {
            margin-bottom: 10px;
        }

        .card p {
            margin-bottom: 10px;
        }

        .card .button {
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .card .button:hover {
            background-color: #45a049;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f0f0f0;
        }

        .table img {
            max-width: 100px;
        }
        .dropdown {
            position: relative;
            display: inline-block;
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
        <div class="main">
            <h1>หน้าหลัก</h1>
            <div class="card">
                <h2>จำนวนครั้งที่สอบทั้งหมด</h2>
                <p>7</p>
                <a href="#" class="button">Show all result</a>
            </div>
            <div class="card">
                <h2>ข้อสอบทั้งหมด</h2>
                <p>5</p>
                <a href="#" class="button">More info</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>รูปภาพ</th>
                        <th>ชื่อวิชา</th>
                        <th>ดูผลสอบ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1200px-HTML5_logo_and_wordmark.svg.png" alt="HTML"></td>
                        <td>ภาษา HTML เพื่อการพัฒนาเว็บไซต์</td>
                        <td><a href="#" class="button">ดูผลสอบ</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/OOP_diagram.svg/1200px-OOP_diagram.svg.png" alt="OOP"></td>
                        <td>Class and Object-Oriented Programming</td>
                        <td><a href="#" class="button">ดูผลสอบ</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/1200px-Python-logo-notext.svg.png" alt="Python"></td>
                        <td>Python</td>
                        <td><a href="#" class="button">ดูผลสอบ</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>