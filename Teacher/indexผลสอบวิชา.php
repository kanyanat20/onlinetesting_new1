<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลสอบวิชา</title>
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
            width: 100%;
            height: 100vh;
        }

        .sidebar {
            background-color: #333;
            color: #fff;
            width: 200px;
            padding: 20px;
        }

        .sidebar h3 {
            margin-bottom: 20px;
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
            flex-grow: 1;
            padding: 20px;
        }

        .content h1 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f0f0f0;
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

        .button:hover {
            background-color: #45a049;
        }

        .nav-link {
            text-decoration: none;
            color: #3366FF;
        }

        .nav-link:hover {
            text-decoration: underline;
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
        <div class="content">
        <a href="#" class="nav-link">หน้าหลัก</a> / <a href="#" class="nav-link">ผลสอบ</a>
            <h1>ผลสอบวิชา</h1>
            <button class="button">Export to Excel</button>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>email</th>
                        <th>status</th>
                        <th>score</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>useruser123456@gmail.com</td>
                        <td>exam</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>T@gmail.com</td>
                        <td>exam</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>