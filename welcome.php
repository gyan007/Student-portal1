<?php
session_start();

// Function to increment page visit count
function incrementPageCount() {
    $countFile = 'page_visits.txt'; // File to store the visit count

    // Check if the count file exists
    if (file_exists($countFile)) {
        // Read the current count from the file
        $count = file_get_contents($countFile);
        // Check if the user has not already visited the page in this session
        if (!isset($_SESSION['page_visited']) || $_SESSION['page_visited'] !== true) {
            $count++; // Increment the count
            $_SESSION['page_visited'] = true; // Mark the page as visited in this session
            // Write the updated count back to the file
            file_put_contents($countFile, $count);
        }
    } else {
        // Initialize count to 1 if the count file doesn't exist
        $count = 1;
        // Write the initial count to the file
        file_put_contents($countFile, $count);
    }
}

// Increment the page visit count
incrementPageCount();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

// Check if logout is requested
if (isset($_GET['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to login page
    header("Location: login.php");
    exit();
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome - <?php echo $_SESSION['username'] ?></title>
    <style>
        body {
            background-color: black;
            color: white;
        }

        .logo {
            margin-left: 300px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-top: 20px;
        }

        .container1 {
            width: 40%;
            box-sizing: border-box;
        }

        .container2 {
            width: 55%;
            padding: 10px;
            box-sizing: border-box;
        }

        .container1>marquee {
            height: 350px;
            border: 3px solid burlywood;
            padding-left: 30px
        }

        h3 {
            text-align: center;
            text-decoration: underline;
        }

        .container2child1>p {
            padding: 10px;
        }

        .row-container {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .row-container .row {
            width: 60%;
        }

        .table1 {
            border: 5px solid rgba(4, 51, 4, 0.87);
            padding: 10px;
            box-sizing: border-box;
            display: inline-block;
            flex-direction: row;
            width: 40%;
            margin-left: 70px;
            height: 385px;
        }
        .table2 {
            border: 5px solid rgba(4, 51, 4, 0.87);
            margin-top: 80px;
            padding: 10px;
            box-sizing: border-box;
            display: inline-block;
            flex-direction: row;
            width: 40%;
            margin-left: 80px;
        }


        .table1>h4 {
            text-align: center;
            text-decoration: underline;
        }

        .table1 > ol {
            padding-left: 35px;
        }

        hr {
            border-top: 2px solid white;
            margin-top: 20px;
        }
        .row>img {
            border: 5px solid burlywood;
        }
        .contain>.btn {
            display: flex;
            float: right;
            padding: 3px;
        }
        footer{
            color: white;
            font-display: flex;
            margin-bottom: 30px;
            margin-right: 450px;
            color: white;
            font-display: flex;
            float: right;
        }  
        
        * {
            padding: 0;
            margin: 0;
        }



.menuItems > p {
  margin: 16px;
  font-size: 96px;
  color: #ccc;
  text-transform: uppercase;
  font-weight: 600;
  transition: all 1s ease-in-out;
  position: relative;

  &::before {
    content: attr(data-item);
    transition: all 1s ease-in-out;
    color: #8254ff;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 0;
    overflow: hidden;
  }

  &:hover {
    &::before {
      width: 100%;
    }
  }
}

nav {
    background-color: grey;
  .menuItems {
    list-style: none;
    display: flex;

    li {
      margin: 10px;

      a {
        text-decoration: none;
        color: white;
        font-size: 20px;
        font-weight: 400;
        transition: all 0.5s ease-in-out;
        position: relative;
        text-transform: uppercase;

        &::before {
          content: attr(data-item);
          transition: 0.5s;
          color: #8254ff;
          position: absolute;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          width: 0;
          overflow: hidden;
        }

        &:hover {
          &::before {
            width: 100%;
            transition: all 0.5s ease-in-out;
          }
        }
      }
    }
  }
}
#deletes{
        font-size: 20px;
        font-weight: 400;
        padding-left: 13px;
        padding-right: 0;
        padding-top: 0;
        padding-right: 0;

} 
.dropdown-menu{
        background-color: #202020;
}
.dropdown-toggle{
    margin-left: 550px;
}
.dropdown-menu > .btn{
    color: red;
}
.del > .btn{
    color: red;
}
#visit{
    margin-left: 460px;
    border: 10px solid white;
    border-radius: 5%;
    width: 400px;
    padding-left: 30px;
    padding-top: 40px;
    font-size: 30px;
}
#id1 > img{
    padding-bottom: 30px;
}
dropdown-menu > p{
    color: white;
    padding: 5px;
}
</style>
</head>
<body>
    
<div>
        
<div class="logo">
        <img id="img1" src="./bharati_vidyapeeth_logo.webp" alt="logos">
    </div>
    <hr>
<section>
  <nav>
    <ul class="menuItems">
      <li><a href='./Admission.php' data-item='Admission'>Admission</a></li>
      <li><a href='./fees.php' data-item='Fee'>Fees</a></li>
      <li><a href='./about.php' data-item='About'>About</a></li>
      <li><a href='./Contact.php' data-item='Contact'>Contact</a></li>
      <li><a href='./feedback.php' data-item='feedback'>Feedback</a></li>
      <li><a href='./Ask_your_doubt.php' data-item='doubts'>Doubts</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> 
        <p>Hi - <?php echo $_SESSION['username'] ?></p>
        <a href="update_prrofile.php" class="btn">Update your profile</a>
        <br>
        <a href="?logout" class="btn">Logout</a>
        <br>
        <form class="del" id="deleteForm" action="delete_account.php" method="post" onsubmit="return confirmDelete()">
            <button id="deletes" type="submit" name="delete" class="btn">DELETE ACCOUNT</button>
        </form>
        </div>
    </li>  
    </ul>
  </nav>

</section>

    Welcome - <?php echo $_SESSION['username'] ?>




    <div class="container">
        <div class="container1">
            <marquee direction="up" scrollamount="4">
                <ul>
                    <li>This college is accredited A++ by NBA.</li>
                    <br>
                    <li>It is also ranked 96 in NIRF ranking.</li>
                    <br>
                    <li>It is ranked 6 by Times of India editorial.</li>
                    <br>
                    <li>It is ranked 91 among the top Universities by NIRF Ranking 2023.</li>
                    <br>
                    <li>It is accredited with an A grade by the National Assessment and Accreditation Council (NAAC)
                        and
                        approved by University Grants Commission (UGC).
                    </li>
                    <br>
                </ul>
            </marquee>
            <div class="row-container">
                <div class="row" id="row1">
                    <img src="./student-library-books-book.jpg" alt="Student holding book" height="225"
                        width="260">
                </div>
                <div class="row" id="row2">
                    <img src="./OIP (1).jpeg" alt="Image" height="225" width="277">
                </div>
            </div>
        </div>
        <div class="container2">
            <h3>College Information</h3>
            <div class="container2child1">
                <p>
                    Bharati Vidyapeeth is a private deemed to be university established in Pune, India. It was
                    established
                    in 1964 by Indian politician and educationist Patangrao Kadam. Bharati Vidyapeeth has campuses
                    across
                    the country at New Delhi, Navi Mumbai, Sangli, Pune, Solapur, Kolhapur, Karad, Satara, and
                    Panchgani.
                    Among these are Bharati Vidyapeeth University Medical College, Dentistry, Ayurveda, Homeopathy,
                    Nursing,
                    Pharmacy, Engineering, Management, Hotel Management, Catering Technology, Environment Science and
                    Agriculture etc.
                </p>
                <p>
                    Bharati Vidyapeeth is one of the top-ranked universities in Maharashtra. Bharati Vidyapeeth Pune
                    has
                    been ranked 91st among the top 100 universities in India by NIRF 2023. India Today has also ranked
                    Bharati Vidyapeeth Pune at 43rd in the Medical stream. Various international ranking bodies have
                    ranked Bharati
                    Vidyapeeth Pune. Bharati Vidyapeeth University has been ranked 701-750 by the QS World University
                    Ranking 2023 in the Asian University category.
                </p>
                <p>
                    Established in 1964, Bharati Vidyapeeth Deemed University (BVDU) is a private university recognised
                    by
                    the Government of India. Bharati Vidyapeeth University Pune is accredited with an 'A+' grade by
                    NAAC.
                    All the programmes offered at Bharati Vidyapeeth Deemed University are approved by the UGC and
                    respective statutory councils. BVDU is a member of the Association of Indian Universities (AIU)
                    and the
                    Association of Commonwealth Universities (ACU).
                </p>
            </div>
        </div>
    </div>

    <div class="table1 my-4">
        <h4>
            Faculties in CE Department
        </h4>
        <ol>
            <li>S. B. Vanjale</li>
            <li>Veena jadhav</li>
            <li>Akshada Dighe</li>
            <li>M. S. Bewoor</li>
            <li>Aakash suryavanshi</li>
            <li>Shruti Gunjotikar</li>
            <li>Priyanka Bawiskar</li>
            <li>Dhotre</li>
            <li>Laxmi patil</li>
            <li>Mohite</li>
            <li>Sachin Wakurdekar</li>
        </ol>
    </div>
    <div class="table2 my-4">
        <h4>
            Virtual College walk
        </h4>
        <iframe width="470" height="315"
              src="./video.mp4?autoplay=1&mute=1&loop=1">
        </iframe>
    </div> 
    
    <div class="container" id="visit">
        <div id="id1"><img src="pho.jpg" height="100" width="100"></div>
        <div id="id2"><p>Total Visits: <?php echo file_get_contents('page_visits.txt'); ?></p></div>
    </div>   


    <footer><a href="./copyright.php">copyright</a> © Gyan 2024. All rights reserved.</footer>

    <script>
        function confirmDelete() {
           return confirm("Are you sure you want to delete your account?");
        }
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>