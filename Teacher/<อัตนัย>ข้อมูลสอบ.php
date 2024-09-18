<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จัดการข้อมูลข้อสอบ</title>
    <style>
         body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        .sidebar h2 {
            margin-top: 0;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        .content {
            flex: 1;
            padding: 20px;
        }
         h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
        }
        
        .header a {
            text-decoration: none;
            color: #333;
        }

        .header a:hover {
            text-decoration: underline;
        }
        .question-box {
            background-color: #f0fff0;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 1px dashed #ccc;
        }

        .question-box p {
            margin-bottom: 10px;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container textarea {
            height: 100px;
        }

        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo-container img {
            width: 50px;
            height: 50px;
        }

        .logo-container span {
            margin-left: 10px;
            font-weight: bold;
        }

        .quiz-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .quiz-container h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .quiz-container .question {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .quiz-container .answer {
            display: block;
            margin-bottom: 10px;
        }

        .quiz-container .answer input[type="radio"] {
            margin-right: 5px;
        }

        .quiz-container .buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .quiz-container .button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 0 10px;
            font-weight: bold;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .button-green {
            background-color: #4CAF50;
        }

        .button-red {
            background-color: #f44336;
        }

        .button:hover {
            opacity: 0.8;
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
        <h1>Teacher</h1>
        <a href="#">teacher123456@admin.com</a>
        <a href="#">หน้าหลัก</a>
        <a href="#">จัดการข้อมูลวิชา</a>
        <a href="#">จัดการข้อมูลข้อสอบ</a>
        <a href="#">ดูผลสอบรายบุคคล</a>
        <a href="#">Logout</a>
    </div>
    <div class="content">
    <h1>ข้อสอบอัตนัย</h1>
        <div class="header">
        <div class="logo logo-container img ">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript">
                <span>วิชา ภาษา HTML เพื่อการพัฒนาเว็บไซต์</span>
        </div>
                <div>
            <button class="button" style = "background-color: #CCFFFF;">
            <div class="dropdown ">
                    <a href="#">ระดับความยากง่าย</a>
                    <div class="dropdown-content ">
                        <a href="#">ง่าย</a>
                        <a href="#">ปานกลาง</a>
                        <a href="#">ยาก</a>
                    </div>
                </div>
            </button>
            <button class="button" style = "background-color: #FFFF99;">
            <div class="dropdown ">
                    <a href="#">กำหนดคะแนน</a>
                    <div class="dropdown-content ">
                        <a href="#">5 คะแนน</a>
                        <a href="#">10 คะแนน</a>
                        <a href="#">15 คะแนน</a>
                        <a href="#">20 คะแนน</a>
                    </div>
                </div>
            </button>
            </div>
        </div>
        <div class="box">
            <h2>คำชี้แจง</h2>
            <p>เติมคำที่กำหนดให้ลงในช่องว่าง</p>
            <div class="info-box" >
            <div class="table">
                <table style = "background-color:#FFCC99; border-radius: 10px;padding: 15px;">
                    <tr>
                        <th>คำตอบ</th>
                    </tr>
                    <tr>
                        <td>โรงเรียน</td>
                        <td>คอมพิวเตอร์</td>
                        <td>ล้างจาน</td>
                    </tr>
                    <tr>
                        <td>อินเทอร์เน็ต</td>
                        <td>ฟุตบอล</td>
                        <td>หนังสือพิมพ์</td>
                    </tr>
                    <tr>
                        <td>ทีวี</td>
                        <td>มะม่วง</td>
                        <td>หญ้า</td>
                    </tr>
                </table>
            </div> 
            </div>
            <form action="#" method="post">
                <div class="question">
                    <p>๑. โควิด -19 ทำให้ _____ สั่งปิดทั่วประเทศ</p>
                    <input type="text" class="answer" name="answer1">
                </div>
                <div class="question">
                    <p>๒. คุณแม่ไปซื้อผักที่ _____ มาทำกับข้าว</p>
                    <input type="text" class="answer" name="answer2">
                </div>
                <div class="question">
                    <p>๓. นุ่มนิ่มนั่งอ่าน _____ อย่างตั้งใจ</p>
                    <input type="text" class="answer" name="answer3">
                </div>
                <div class="question">
                    <p>๔. คุณตานั่งดู _____ ไม่สนใจอะไรเลย</p>
                    <input type="text" class="answer" name="answer4">
                </div>
                <div class="question">
                    <p>๕. คุณพ่อไปตัด _____ ที่ทุ่งนา</p>
                    <input type="text" class="answer" name="answer5">
                </div>
                <div class="question">
                    <p>๖. ช่าง3BBมาซ่อม _____ ที่บ้านของตึก</p>
                    <input type="text" class="answer" name="answer6">
                </div>
                <div class="question">
                    <p>๗. ฝนล้าง _____ ที่กินเสร็จแล้วอย่างสะอาด</p>
                    <input type="text" class="answer" name="answer7">
                </div>
                <div class="question">
                    <p>๘. คุณครูพานักเรียนเตะ _____ หลังเลิกรียนทุกวัน</p>
                    <input type="text" class="answer" name="answer8">
                </div>
                <div class="question">
                    <p>๙. โต้งกิน _____ เปรี้ยวมาก</p>
                    <input type="text" class="answer" name="answer9">
                </div>
                <div class="question">
                    <p>๑๐. ไอติมรอเรียนวิชา _____ คาบต่อไป</p>
                    <input type="text" class="answer" name="answer10">
                </div>
                <input type="submit" value="ส่งคำตอบ" class="button"style = "background-color:#33CC00;">
            </form>
        </div>
    </div>
    </div>
</body>
</html>