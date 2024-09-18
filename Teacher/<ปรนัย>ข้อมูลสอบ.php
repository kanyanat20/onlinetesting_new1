<!DOCTYPE html>
<html lang="th">

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

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
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
            <h2>Teacher</h2>
            <p>teacher123456@admin.com</p>
            <a href="#">หน้าหลัก</a>
            <a href="#">จัดการข้อมูลวิชา</a>
            <a href="#">จัดการข้อมูลข้อสอบ</a>
            <a href="#">ดูผลสอบรายบุคคล</a>
            <a href="#">Logout</a>
        </div>

        <div class="content">
            <!-- Manage Exam Section -->
            <div class="header">
                <h1>จัดการข้อมูลข้อสอบ</h1>
                <a href="#">ข้อสอบทั้งหมด 2 ข้อ/คะแนนรวม 10 คะแนน</a>
            </div>
           
            <div class="logo-container">
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
            <div class="form-container">
                <label for="question">ข้อที่</label>
                <input type="text" id="question" name="question">
                <label for="answer">คำถาม</label>
                <textarea id="answer" name="answer"></textarea>
                <label for="choice1">คำตอบที่ 1</label>
                <input type="text" id="choice1" name="choice1" required>
                <label for="choice2">คำตอบที่ 2</label>
                <input type="text" id="choice2" name="choice2">
                <label for="choice3">คำตอบที่ 3</label>
                <input type="text" id="choice3" name="choice3">
                <label for="choice4">คำตอบที่ 4</label>
                <input type="text" id="choice4" name="choice4">
                <label for="correct">ข้อที่ถูก</label>
                <select id="correct" name="correct">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <button type="submit">เพิ่มข้อสอบ</button>
            </div>

            <!-- Quiz Section -->
            <div class="quiz-container">
                <h2>ข้อที่ 1</h2>
                <a href="#"> 5 คะแนน</a>
                <p class="question">คำถามๆๆๆ123w</p>
                <div class="answer">
                    <input type="radio" name="answer1" id="answer1_1">
                    <label for="answer1_1">1. คำตอบ1</label>
                </div>
                <div class="answer">
                    <input type="radio" name="answer1" id="answer1_2">
                    <label for="answer1_2">2. คำตอบ2</label>
                </div>
                <div class="answer">
                    <input type="radio" name="answer1" id="answer1_3">
                    <label for="answer1_3">3. คำตอบ33</label>
                </div>
                <p>ข้อที่ถูก: 2</p>
                <div class="buttons">
                    <button class="button button-green">แก้ไข</button>
                    <button class="button button-red">ลบ</button>
                </div>
            </div>

            <div class="quiz-container">
                <h2>ข้อที่ 2</h2>
                <a href="#">5 คะแนน</a>
                <p class="question">คำถาม2</p>
                <div class="answer">
                    <input type="radio" name="answer2" id="answer2_1">
                    <label for="answer2_1">1. คำตอบ1111</label>
                </div>
                <div class="answer">
                    <input type="radio" name="answer2" id="answer2_2">
                    <label for="answer2_2">2. คำตอบ1122</label>
                </div>
                <div class="answer">
                    <input type="radio" name="answer2" id="answer2_3">
                    <label for="answer2_3">3. คำตอบ1133</label>
                </div>
                <div class="answer">
                    <input type="radio" name="answer2" id="answer2_4">
                    <label for="answer2_4">4. คำตอบ1144</label>
                </div>
                <p>ข้อที่ถูก: 1</p>
                <div class="buttons">
                    <button class="button button-green">แก้ไข</button>
                    <button class="button button-red">ลบ</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
