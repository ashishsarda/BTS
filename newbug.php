
<?php
session_start();
$db = mysqli_connect ("localhost", "root", "", "practice");

if(isset($_POST["submit"])) {
  $bug = ($_POST["bug"]);
  $relation = ($_POST["relation"]);
  $dop = ($_POST["dop"]);
  $name = ($_POST["name"]);
  $comm = ($_POST["comm"]);
  $status=($_POST["status"]);

//Takes the info entered by user and stores it into the table "prisoners"
    if (!empty($bug) || !empty($relation) || !empty($dop) || !empty($name) || !empty($comm) || !empty($status)){

      $sql = "INSERT INTO developers(bug, relation, dop, name, comm, status,) VALUES ('$bug', '$relation', '$dop', '$name', '$comm', '$status')";
      mysqli_query ($db, $sql);
      header("location: developerfiles.php"); //this will take you to the page of prisoner files after submission.

    }

    else{
  // if not all fields have inputs, it gives following message:
      echo "Complete all boxes before submitting";

    }
  }

?>

  <!DOCTYPE html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!--works on all devices and screen resolutions-->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link href = "style.css" rel = "stylesheet" type = "text/css">

  <html>
  <body>
    <style>

    html {
       min-height:100%;
       width:100%;
       position:absolute;
  }
    body {
        box-sizing: border-box;
        background-color: #f1f1f1;
        margin:0;
        padding:0;
        height:100%;
      }

      .topnav {
        margin-bottom: 5px;
      }



      input[type=text], input[type=number], input[type=date] {

        padding: 8px;
        border: 1px solid #888888;
        border-radius: 4px;
        float:left;
        margin-bottom: 5px;
        width: 75%;

      }

      .wrapper-class input[type="radio"] {

        display: inline;
        vertical-align: baseline;
        padding: 10px;
        margin: 10px;

      }

      label {

        float: left;
        width: 25%;
        margin-bottom: 5px;
        font-size: 15px;
      }


      .footer{

        background-color: #008CBA;
        position: absolute;
        bottom: 0;
        width: 100%;
        text-align: center;
        font-size: 25px;
        color: white;
        height:40px;


    }

      .footer a.active{
        color: white;

       }


      input[type=submit] {

        color: black;
        padding: 10px 20px;
        background-color:  #E8E8E8;
        border-radius: 5px solid  ;
        border: 1px solid #696969;
        float:right;
      }

  </style>


<!-- Header -->
  <div class="header1" >
    <h1 class="text-center">New Bug</h1>
  </div>

<!-- Navigation bar  -->
  <div class="topnav">
    <a class="active" href="PMS.php ">Home</a>
  </div>
      <form method = "post", action = 'newbug.php' style = "  border-radius: 5px solid;padding: 15px 30px ">
        <label for="bug"> Bug</label>
        <input type="text" name="bug" required> <br>
        <label for="relation"> Related to :</label>
        <input type="text"  name="relation" required>  <br>
        <label for="name"> Posted to:</label>
        <input type="text" id="name" required> <br>
        <label for="dop"> Posted on:</label>
        <input type="date" id="dop" name="dop" required> <br>
        <label for="comm">Comments : </label>
        <input type="text"  name="comm" > <br>
      </div>
        <div class = "wrapper-class">
          <label for="block"> Issue Fixed : </label>
            <input type="radio" id="A" name="block" value="A" for="A" required > yes
            <input type="radio" id="B" name="block" value="B"for="B"> No
          </div>
          <label for="status">Status</label>
<select name="status" id="options">
  <option value="open">Open</option>
  <option value="close">Close</option>
    </select>
        <input type="submit" name="submit", value="submit" > </button>
      </form>


     <div class = "footer">
      <a class="active" href = "logout.php"> Log Out </a>
    </div>



  </body>
  </html>
