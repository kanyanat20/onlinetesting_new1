<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จัดการข้อมูลวิชา</title>
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
            margin-top: 0;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #fff;
            margin-bottom: 5px;
        }
        .sidebar a:hover {
            background-color: #555;
        }
        .main {
            flex: 1;
            padding: 20px;
        }
        .main h1 {
            margin-bottom: 20px;
        }
        .main .box {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .main .box .title {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .main .box .form-group {
            margin-bottom: 15px;
        }
        .main .box .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .main .box .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .main .box .form-group button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .main .box .form-group button:hover {
            background-color: #0069d9;
        }
        .main .table {
            width: 100%;
            border-collapse: collapse;
        }
        .main .table th, .main .table td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        .main .table th {
            background-color: #f0f0f0;
        }
        .main .table .action {
            text-align: center;
        }
        .main .table .action button {
            padding: 5px 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 3px;
            cursor: pointer;
            margin-right: 5px;
        }
        .main .table .action button:hover {
            background-color: #ddd;
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
            <h1>จัดการข้อมูลวิชา</h1>
            <div class="box">
                <div class="title">เพิ่มข้อมูลวิชา</div>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name">ชื่อวิชา</label>
                        <input type="text" name="name" id="name" placeholder="ชื่อวิชา">
                    </div>
                    <div class="form-group">
                        <label for="file">เลือกไฟล์</label>
                        <input type="file" name="file" id="file">
                    </div>
                    <div class="form-group">
                        <button type="submit">เพิ่มข้อมูล</button>
                    </div>
                </form>
            </div>
            <div class="box">
                <div class="title">ข้อมูลวิชา ทั้งหมด</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>รูปภาพ</th>
                            <th>ชื่อวิชา</th>
                            <th>แก้ไข</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="images/html-css-js.png" alt="HTML, CSS, and JavaScript" width="100">
                            </td>
                            <td>ภาษา HTML เพื่อการพัฒนาเว็บไซต์</td>
                            <td class="action">
                                <button type="button">แก้ไข</button>
                                <button type="button">ลบ</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <img src="images/oops.png" alt="Object-Oriented Programming" width="100">
                            </td>
                            <td>Class and Object-Oriented Programming</td>
                            <td class="action">
                                <button type="button">แก้ไข</button>
                                <button type="button">ลบ</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <img src="images/python.png" alt="Python" width="100">
                            </td>
                            <td>Python</td>
                            <td class="action">
                                <button type="button">แก้ไข</button>
                                <button type="button">ลบ</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>