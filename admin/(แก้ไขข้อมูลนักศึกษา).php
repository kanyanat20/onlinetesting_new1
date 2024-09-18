<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
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

    .sidebar h1 {
      margin-bottom: 20px;
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
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #008CBA;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #45a049;
    }

    .breadcrumbs {
      margin-bottom: 20px;
    }

    .breadcrumbs a {
      text-decoration: none;
      color: #008CBA;
    }

    .breadcrumbs a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
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
      <div class="breadcrumbs">
        <a href="#">หน้าหลัก</a> / 
        <a href="#">จัดการข้อมูลผู้ดูแลระบบ</a> /
        <a href="#">แก้ไข</a>
      </div>
      <h1>Edit student</h1>
      <form>
        ////////
        <div class="form-group">
          <label for="email">อีเมล:</label>
          <input type="text" id="email" name="email" value="student123456@admin.com" readonly>
        </div>
        <div class="form-group">
          <label for="password">รหัสผ่าน:</label>
          <input type="password" id="password" name="password" value="********">
        </div>
        <div class="form-group">
          <label for="confirm_password">ยืนยันรหัสผ่าน:</label>
          <input type="password" id="confirm_password" name="confirm_password" value="********">
        </div>
        <button type="submit" class="btn">Edit</button>
      </form>
    </div>
  </div>
</body>
</html>