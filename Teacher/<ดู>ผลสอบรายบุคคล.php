<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลสอบรายบุคคล</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            background-color: #333;
            color: #fff;
            width: 200px;
            padding: 20px;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            text-decoration: none;
            color: #fff;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        .content {
            padding: 20px;
            flex: 1;
        }

        h1, h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
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
            <a href="#" class="active">ดูผลสอบรายบุคคล</a>
            <a href="#">Logout</a>
        </div>
        <div class="content">
            <h1>ดูผลสอบรายบุคคล</h1>
            <h2>ผลสอบรายบุคคลของ useruser123456@gmail.com</h2>
            <table>
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>วิชา</th>
                        <th>ผลการสอบ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ภาษา HTML เพื่อการพัฒนาเว็บไซต์</td>
                        <td>1/2</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>