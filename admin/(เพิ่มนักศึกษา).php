<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f5f5f5;
            display: flex;
        }

        .sidebar {
            width: 200px;
            background-color: #333;
            color: #fff;
            padding: 20px;
            height: 100vh;
        }

        .sidebar h1 {
            margin-top: 0;
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
            flex: 1;
            padding: 20px;
        }

        .content h1 {
            margin-top: 0;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0062cc;
        }

        .breadcrumb {
            margin-bottom: 20px;
        }

        .breadcrumb a {
            color: #333;
            text-decoration: none;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h1>Admin</h1>
        <p>admin123456@admin.com</p>
        <a href="#">หน้าหลัก</a>
        <a href="#">จัดการข้อมูลผู้ดูแลระบบ</a>
        <a href="#">จัดการข้อมูลอาจารย์</a>
        <a href="#">จัดการข้อมูลนักศึกษา</a>
        <a href="#">Logout</a>
    </div>
    <div class="content">
        <div class="breadcrumb">
            <a href="#">หน้าหลัก</a>
            <span>/</span>
            <a href="#">จัดการข้อมูลนักศึกษา</a>
            <span>/</span>
            <span>New student</span>
        </div>
        <h1>New student</h1>
        <form>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm password">
            </div>
            <button type="submit" class="button">New student</button>
        </form>
    </div>
</body>
</html>