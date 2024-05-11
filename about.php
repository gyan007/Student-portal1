<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engineering School Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: black;
        }

        h1 {
            color: white;
            text-align: center;
        }
        .container {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 80%;
  margin: auto;
  padding: 20px;
  text-align: center;
}

        .section {
            margin-bottom: 30px;
            background-color: black;
            width: 100%;
        }

        .section > h2 {
            color: white;
            text-align: center;
        }

        .course,
        .professor,
        .class {
            background-color: #fff;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        button {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
            cursor: pointer;
        }

        footer {
            color: white;
            font-display: flex;
            margin-top: 20px;
            text-align: center;
            width: 100%;
        }

        @media screen and (max-width: 768px) {
            .container {
                width: 90%;
            }

            .course,
            .professor,
            .class {
                max-width: 100%;
            }
        }
        button {
  display: block;
  margin: 0 auto;
  background-color: red;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  margin-bottom: 20px;
  cursor: pointer;
}
.section{
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 80%;
  margin: auto;
  padding: 20px;
  text-align: center;
}
    </style>
</head>

<body>
    <div class="container">
        <h1>Information about the college</h1>

        <div class="section" id="container1">
            <h2>Courses Offered</h2>
            <div class="course">
                <h3>Computer Engineering</h3>
                <p>This course covers various topics in computer science including algorithms, data structures,
                    programming languages, and software engineering.</p>
            </div>
            <div class="course">
                <h3>Computer Science</h3>
                <p>This course covers various topics in computer science including algorithms, data structures,
                    programming languages, and software engineering.</p>
            </div>
            <div class="course">
                <h3>Electrical Engineering</h3>
                <p>This course focuses on electrical circuits, electronics, power systems, and control systems.</p>
            </div>
            <div class="course">
                <h3>Electronics and Tele-communication Engineering</h3>
                <p>Electronics & Telecommunication Engineering is an undergraduate degree course. The duration of the
                    course is 4-years separated into 8 semesters. The basic eligibility for enrolling in this program is
                    to qualify class 10+2 from the equivalent board/ university with a minimum of 60% and an entrance
                    exam.</p>
            </div>
            <div class="course">
                <h3>Robotics</h3>
                <p>Robotics is the interdisciplinary study and practice of the design, construction, operation, and use
                    of robots. Within mechanical engineering, robotics is the design and construction of the physical
                    structures of robots, while in computer science, robotics focuses on robotic automation algorithms.
                </p>
            </div>
        </div>


        <div class="section" id="container2">
            <h2>Professors</h2>
            <div class="professor">
                <h3>Veena jadhav</h3>
                <p>Professor of Computer Engineering</p>
            </div>
            <div class="professor">
                <h3>Shruti Gunjotikar</h3>
                <p>Professor of Computer Science</p>
            </div>
            <div class="professor">
                <h3>Aakash Suryavanshi</h3>
                <p>Professor of Electrical Engineering</p>
            </div>
            <div class="professor">
                <h3>Akshida Dighe</h3>
                <p>Professor of Electronics and Tele-communication Engineering</p>
            </div>
            <div class="professor">
                <h3>Mayuri ma'am</h3>
                <p>Professor of Robotics</p>
            </div>
        </div>



        <div class="section" id="container3">
            <h2>Classes Schedule</h2>
            <div class="class">
                <h3>Computer Engineering 101</h3>
                <p>Monday & Wednesday, 10:00 AM - 11:30 AM</p>
            </div>
            <div class="class">
                <h3>Computer Science 201</h3>
                <p>Monday & Wednesday, 10:00 AM - 11:30 AM</p>
            </div>
            <div class="class">
                <h3>Electrical Engineering 301</h3>
                <p>Tuesday & Thursday, 2:00 PM - 3:30 PM</p>
            </div>
            <div class="class">
                <h3>Electronics and Tele-communication Engineering 401</h3>
                <p>Monday & Wednesday, 10:00 AM - 11:30 AM</p>
            </div>
            <div class="class">
                <h3>Robotics 501</h3>
                <p>Tuesday & Thursday, 2:00 PM - 3:30 PM</p>
            </div>
        </div>


    </div>
    <button onclick="window.location.href = './welcome.php';">Home Page</button>

    <footer><a href="./copyright.php">copyright</a> © Gyan 2024. All rights reserved.</footer>


</body>

</html>