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
  text-align: center; /* Center the heading */
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

.content .button-success {
  background-color: green; 
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

.content .top-section {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.content .top-section input[type="text"] {
  padding: 5px;
  border: 1px solid #ddd;
  border-radius: 3px;
}

.content table thead tr th:first-child {
  width: 5%; 
}

.content table thead tr th:nth-child(2) {
  width: 30%; 
}

.content table thead tr th:nth-child(3) {
  width: 30%; 
}

.content table thead tr th:nth-child(4) {
  width: 15%; 
}

.content table thead tr th:nth-child(5) {
  width: 10%; 
}

.content table thead tr th:nth-child(6) {
  width: 10%; 
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
</style>
</head>
<body>
  <div class="container">
    <div class="sidebar">
    <h2>Teacher</h2>
        <p>teacher123456@gmail.com</p>
        <a href="#">หน้าหลัก</a>
            <a href="#">จัดการข้อมูลวิชา</a>
            <a href="#">จัดการข้อมูลข้อสอบ</a>
            <a href="#">จัดการรายชื่อผู้เข้าสอบ</a>
            <a href="#">ตรวจคำตอบข้อสอบอัตนัย</a>
            <a href="#">ดูผลสอบรายบุคคล</a>
            <a href="#">Logout</a>
    </div>
    <div class="content">
      <div class="top-section">
        <h1>ตรวจคำตอบ</h1>
        <input type="text" placeholder="ค้นหาชื่อนักศึกษา">
      </div>
      <div class="info-box">
                <h1>CSS</h1>
            </div>
      <table>
        <thead>
        <h1>คำถาม</h1>
        <h1>ภาษาคอมพิวเตอร์มีอะไรบ้าง</h1>
          <tr>
            <th>ลำดับ</th>
            <th>รหัสประจำตัว</th>
            <th>รายชื่อ</th>
            <th>คำตอบ</th>
            <th>คะแนน</th>
            <th>แก้ไข</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>1234-XXX</td>
            <td>นาย ก</td>
            <td>ภาษา C</td>
            <td><input type="fill" checked></td>
            <td>
              <button class="button button-edit">แก้ไข</button>
              <button class="button button-success">ยืนยัน</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>1235-XXX</td>
            <td>นาย ข</td>
            <td>ภาษา Python</td>
            <td><input type="fill"></td>
            <td>
              <button class="button button-edit">แก้ไข</button>
              <button class="button button-success">ยืนยัน</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>