<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ดูผลสอบรายบุคคล</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .sidebar {
            width: 200px;
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        .sidebar h1 {
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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            border-radius: 4px;
            cursor: pointer;
        }
        .container {
            display: flex;
            width: 100%;
            height: 100vh;
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
        <h1>ดูผลสอบรายบุคคล</h1>
        <a href="#">หน้าหลัก/จัดการข้อมูลข้อสอบ</a>
        <table>
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>อีเมล</th>
                    <th>สถานะ</th>
                    <th>ดูผลสอบรายบุคคล</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>useruser123456@gmail.com</td>
                    <td>user</td>
                    <td><button class="button">ดู</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>T@gmail.com</td>
                    <td>user</td>
                    <td><button class="button">ดู</button></td>
                </tr>
            </tbody>
        </table>
        </div>  
    </div>
</body>
</html>