<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<style>
body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
    'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
    sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background-color: #f0f0f0;
}

code {
  font-family: source-code-pro, Menlo, Monaco, Consolas, 'Courier New',
    monospace;
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

.content table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

.content th,
.content td {
  padding: 10px;
  text-align: left;
  border: 1px solid #ddd;
}

.content th {
  background-color: #f0f0f0;
}

.content .button-container {
  display: flex;
}

.content .button {
  padding: 5px 10px;
  margin-right: 5px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.content .button-edit {
  background-color: #ffc107;
  color: #fff;
}

.content .button-delete {
  background-color: #dc3545;
  color: #fff;
}

.content .admin-box {
    background-color:#FFCC66;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    width: 300px;       
    height: 100px; 
}

.content .admin-box h2 {
  margin-top: 0;
}

.content .admin-box .admin-icon {
  font-size: 40px;
  margin-bottom: 10px;
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
      <h1>จัดการข้อมูลอาจารย์</h1>
      <div class="admin-box">
        <h2>2</h2>
        <h3>Teacher ทั้งหมด</h3>
        <h4><a href="#" class="button">New Teacher</a></h4>
        <i class="admin-icon fas fa-user-plus"></i>
      </div>
      <table>
        <thead>
          <tr>
            <th>ลำดับ</th>
            <th>อีเมล</th>
            <th>สถานะ</th>
            <th>แก้ไข</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Teacher123456@admin.com</td>
            <td>Teacher</td>
            <td class="button-container">
              <button class="button button-edit">แก้ไข</button>
              <button class="button button-delete">ลบ</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>thawit@gmail.com</td>
            <td>admin</td>
            <td class="button-container">
              <button class="button button-edit">แก้ไข</button>
              <button class="button button-delete">ลบ</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>