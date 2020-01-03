<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/w3.css">
<!--    <link rel="stylesheet" href="css/font-awesome.min.css">-->
<!--    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/admin.js"></script>

    <style>
        body{

            /*font-family: 'Satisfy',cursive;*/
            /*font-family: 'Great Vibes', cursive*/
            font-family: 'Great Vibes', cursive;
            font-family: 'Satisfy', cursive;
            font-family: 'Alice', serif;

        }
        .maindiv{
            background-color:white;
            height: 100vh;
            width: auto;
        }
        .leftdiv{
            width: 40vh;
            height: 100%;
            background-color:#32363C;
            overflow-x: hidden;
            overflow-y: scroll;

        }
        .rightdiv{
            width: 164.5vh;
            height: auto;
            background-color:#F6F6F6;
        }
        .header{
            width: 164.5vh;
            height:12vh;
            background-color: #FFFFFF;
            margin-top: -25px;

        }
        .header ul li {
            list-style-type: none;
            float: right;
            padding-left: 10px;
            padding-right:10px;
            margin-top: 25px;
            font-size:25px;
        }
        .header  ul li a{
            text-decoration:none;
            color: #0a0a0a;
        }



        .droprwidth{
            width:250px;
            margin-left: -10px;
            height: 40px;
            background-color: #32363C;

        }

        .dp{
            margin-top: -3px;
            width:270px;
            height: 50px;
            background-color: #3C4249;
            color: white;

        }
        .adminprofile{
            width:40vh;
            height:70px;
        }
        .dash{
            margin: 20px;
            width:1700px;
            height: 600px;
            background-color: #F5F5F5;


        }
        .da{
            margin: 20px;
            width:1600px;
            height: 200px;
            background-color: #3C4249;
        }

        .sus{
            height: 20px;
            width: 50px;
        }


        .leftdiv a, .dropdown-btn {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 15px;
            color: white;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }
        .leftdiv a:hover, .dropdown-btn:hover {
            color: #f1f1f1;
        }
        .active {
            background-color: blue;
            color: white;
        }
        .dropdown-container {
            display: none;
            background-color: #262626;
            padding-left: 8px;
        }

        /*/ Optional: Style the caret down icon /*/
        .fa-caret-down {
            float: right;
            padding-right: 8px;
        }
        /*/ Some media queries for responsiveness /*/
        @media screen and (max-height: 450px) {
            .leftdiv {padding-top: 15px;}
            .leftdiv a {font-size: 18px;}
        }
        #addflight td{
            padding: -10px;
            width: 0px;
        }
        /*This is the style for overlay add*/
        #popup{
            position: fixed;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.33);
            z-index: 2;
            cursor: pointer;

        }
        .inp-val{
            margin-left: 100px;

        }
        #add-button{
            width: 150px;

            padding: 10px;
        }
        #add-button button{
            width: 200px;
            margin-left: 150px;
            background-color: #42B142;
            color: white;
            border-radius: 10px;
            margin-right: 100px;
        }
        #text{
            position: absolute;
            /*top: 50%;
            left: 50%;*/
            font-size: 20px;
            background-color: #42B142;
            /*transform: translate(-50%,-50%);
             -ms-transform: translate(-50%,-50%)*/
            margin: 200px;
            margin-left: 470px;
            margin-top: 140px;
            border-radius: 8px;

        }
        #inputcar td{
            margin: 15px;
            padding: 15px;



        }
        /*#inputcar tr{
         padding: 30px;
            width: 200px;
            margin: 30px;
            background-color: white;
        }*/
        #inputcar{
            margin: 15px;
            background-color: #E5EBF2;
        }
        /*style for overlay ends here*/


        /* Full-width input fields */
        input[type=text], {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }



        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
        .dash div {
            margin-left:150px;

        }
    </style>

</head>
<body>
<div class="maindiv" style="display: flex">
    <div class="leftdiv" style="position: fixed">
        <div class="adminprofile" style="display: flex">
            <img src="img/favicon.png" height="40px" width="40px"/>
            <h1 style="color: white; font-size: 15px ;padding-left: 10px">Adminostrator</h1>
        </div>
        <div  class="adminpic" style="width: 40vh;height: 100px; background-color: #2B2E32;display: flex">
            <div class="adminimage" ><img src="img/vishalimage%20(2).jpg" style="width:50px;margin-top: 25px;border-radius: 50%; margin-left:10px;height:50px;"></div>
            <h1 STYLE="color: white;font-size: 20px;text-align: center;padding:30px ;font-family: 'Times New Roman'">SUPER ADMIN</h1>
        </div>

<!--        <button class="dropdown-btn droprwidth dp"  id="dashbtn">Dashboard-->
<!---->
<!--        </button>-->
        <div class="dropdown-container">

        </div>


        <button class="dropdown-btn droprwidth dp"  >Travel Hopes Fights&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa fa-plane"></i>
        </button>
        <div class="dropdown-container">
            <a href="#" id="flightbtn">Add New Flight</a>
            <a href="#" id="flightschedulebtn">Add New Flight Shedule</a>
            <a href="#" id="viewflightbookingbtn">View Flight Bookings</a>
        </div>

        <button class="dropdown-btn droprwidth dp" >Travel Hopes Car &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa fa-car"></i>
        </button>
        <div class="dropdown-container">
            <a href="#" id="carbtn" >Add New Car</a>
            <a href="#" id="carbookingbtn">View Bookings</a>
            <a href="#" id="carschedulebtn">Add New car Shedule</a>

        </div>
        <button class="dropdown-btn droprwidth dp"  >Travel Hopes Tours
            <i  class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a id="tourbtn" href="#">Add New tours</a>
            <a id="viewtourbtn" href="#">View Tour Booking</a>

        </div>
        <button class="dropdown-btn droprwidth dp"   id="accountbtn">Account
            <i class="fas fa-umbrella-beach"></i>
        </button>
        <div class="dropdown-container">
            <a href="#" id="userbtn">User Accounts</a>
            <a href="#" id="adminbtn">Admin Accounts</a>
        </div>

    </div>




<div class="dash">
    <div  class="rightdiv" >
        <!--<button class="w3-button" style="background-color: red; color: white;">kk</button>-->
        <div class="header" style="display: flex">
            <button class="w3-button" style="background-color: #E7E7E7; color: white; width: 90px;height: auto;"></button>
            <a href="index.php" style="text-decoration: none"><h1 style="background-color:#42B142;width:150px;  margin-left:20px;padding-left:40px; padding-top:5px;height:30px;font-size: 17px;color: white ;margin-top: 40px">WEBSITE</h1></a>
<!--            <input type="button" onclick=""  style="background-color:#42B142;width:150px;  margin-left:20px;padding-left:40px; padding-top:5px;height:30px;font-size: 17px;color: white ;margin-top: 40px">WEBSITE</input>-->

<!--            <a href="loginn.php"> <button class="w3-button" style="background-color: white; width: 100px;height:; color: black; margin-left: 700px;">Login</button></a>-->
<!--            <button class="w3-button" style="background-color: #DADADA; color: black;">Login</button>-->
        </div>
    </div>

        <div class="dash" id="dashboard">
<!--            <div class="da">-->
<!---->
<!--                <h1 style="color: #3C4249; margin-left: 600px;font-size: 10px" >hidded</h1>-->
<!--                <div class="dashboardsub1" style="width: 200px; border-radius: 7px; margin-left:510px; height: 150px;background-color: #2B2E32">-->
<!--                    <ul style="list-style-type: square;list-style-color: red;color: white">-->
<!--                        <li><a>Total Admins 0</a></li>-->
<!--                        <li> <a>Total Suppliers 1</a></li>-->
<!--                        <li><a>Total Customers 4</a></li>-->
<!--                        <li><a> Total Guests 2</a></li>-->
<!--                        <li> <a>Total Bookings 7</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="dashboardsub2" style="width: 265px; border-radius: 7px; height: 150px;background-color: #2B2E32; margin-top:-150px;margin-left:100px">-->
<!---->
<!--                </div>-->
<!--            </div>-->
            <h1 style="margin-left:400px;margin-top:200px;"> Welcome To Admin Page</h1>
        </div>

        <!--////////////////////////////////////CAR///////////////////////////////////////////////-->
        <div class="dash"  id="addcar" style="background-color:#F7F7F7">
            <br>
            <br>
            <div style="width: 1175px ;height:1000px;background-color:#F5F5F5;border: 2px solid #EEEEEE;">
                <h5 style="margin-top: 10px;margin-left: 5px">ADD CAR</h5>
                <hr/>
                <button onclick="document.getElementById('id001').style.display='block'" style=" display:flex;margin-left: 20px;background-color:#4B9501;border: none;height:40px;width:70px;color:white"><img src="img/trans1.jpg" style="width: 50%;height: 80%">ADD</button>

                <div id="id001" class="modal">

                    <form class="modal-content animate"  enctype=multipart/form-data action="#" method="post" onload="clear()">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id001').style.display='none'" class="close" title="Close Modal">&times;</span>

                        </div>

                        <div class="container" style="margin-left: 100px">
                            <label for="CarName"><b>Car Name</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"  name="CarName" required style="width: 30%;"><br><br>
                            <label for="Description"><b>Description</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                            <textarea type="text"  name="Description" style="width: 30%;"></textarea><br><br><br>
                            <label for="cImage"><b>Image</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="file"  name="fileToUpload"  style="margin-left: 200px"><br><br><br>
                            <label for="OwnedBy"><b>Owned By</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
                            <input type="text"  name="OwnedBy" required style="width: 30%;"><br><br><br>
                            <label for="Rates"><b>Rates</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"  name="Rates" required style="width: 30%;"><br><br><br>
                            <input type="submit"   value="Update" name="Update"><br><br><br>
                        </div>
                    </form>
                    <?php
                    include 'conn.php';
                    $target_dir = "img/carsimage/";
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                    $carname=$_POST['CarName'];
                    $Description=$_POST['Description'];
                    $tempname=$_FILES['cImage']['tempname'];
                    $OwnedBy=$_POST['OwnedBy'];
                    $cRates=$_POST['Rates'];
                    $dest="img/carsimage/".$cImage;
                    $Status=1;



                    $str="INSERT INTO car(CarName,Description,Image,OwnedBy,Rates,Status) VALUES ('$carname','$Description','$target_file','$OwnedBy','$cRates',$Status)";
                    if(isset($_POST['Update']))
                    {
                        if($sql->query($str)===TRUE)
                    {
                        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                        if($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }
                        if (file_exists($target_file)) {
                            echo "Sorry, file already exists.";
                            $uploadOk = 0;
                        }
// Check file size
                            if ($_FILES["fileToUpload"]["size"] > 500000) {
                                echo "Sorry, your file is too large.";
                                $uploadOk = 0;
                            }
// Allow certain file formats
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                && $imageFileType != "gif" ) {
                                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                            }
// Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
                            } else {
                                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                    echo "<script>alert('New Car Added Succesfully');</script>";
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                            }
                        //if(move_uploaded_file($tempname,$dest))
//                        {
//                            echo "<script>alert('New Car Added Succesfully');</script>";
//                        }

                    }
                    else
                    {
                        echo "<script>alert('Ad  ERROR');</script>";
                    }
                    }
                    ?>
                </div>
                <br>
                <br>
                <table class="table table-striped table-bordered table-hover" >
                    <tr>
                        <!--                    #		Image	Name	Stars	Owned By	Location	Gallery	Order	Status-->

                        <!--                    <td><input type="checkbox"></td>-->
                        <td>#</td>
                        <td>CarName</td>
                        <td>Description</td>
                        <td>Image</td>
                        <td>Owned By</td>
                        <td>Rates</td>
                        <td>Status</td>
                        <td>      </td>
                    </tr>
                    <?php

                    include 'conn.php';
                    $str="select * from car";

                    $result=$sql->query($str);
                    if($result->num_rows>0)
                    {
                        while ($row=$result->fetch_assoc())
                        {
                            ?>

                            <tr>
                                <td width="100px"><h5 ><?php echo $row['id']?></h5> </td>
                                <td><h6 ><?php echo $row['CarName']?> </h6></td>
                                <td><h6 ><?php echo $row['Description']?> </h6></td>
                                <td><image type="text" style="width:95px;height:45px" id="" src="<?php echo $row['Image']?>" ></td>
                                <td><h6 ><?php echo $row['OwnedBy']?> </h6></td>
                                <td><h6 ><?php echo $row['Rates']?> </h6></td>
                                <td><h6 ><?php echo $row['Status']?> </h6></td>
                                <td><button onclick="getcarid(<?php echo $row['id']?>)">DELETE</button></td>
                            </tr>
                            <?php
                        }
                    }

                    ?>
                </table>
                <script>
                    var cartbl='car';
                    var  carid='id';
                    function  getcarid(id) {

                        window.location.href="http://localhost/torism/delete.php?id="+id+"&TbName="+cartbl+"&Tbid="+carid;

                    }
                </script>
            </div>
        </div>
        <div class="dash"  id="carbooking" style="background-color:#F7F7F7">
            <br>
            <br>
            <div style="width: 1175px ;height:1000px;background-color:#F5F5F5;border: 2px solid #EEEEEE">
                <h5 style="margin-top: 10px;margin-left: 5px">VIEW CAR BOOKINGS</h5>
                <hr/>
<!--                <button onclick="document.getElementById('id001').style.display='block'" style=" display:flex;margin-left: 20px;background-color:#4B9501;border: none;height:40px;width:70px;color:white"><img src="img/trans1.jpg" style="width: 50%;height: 50%">ADD</button>-->

                <div id="idcarbooking" class="modal">

                    <form class="modal-content animate" enctype="multipart/form-data" action="#" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('idcarbooking').style.display='none'" class="close" title="Close Modal">&times;</span>

                        </div>

                        <div class="container" style="margin-left: 100px">

                            <label for="CarName"><b>Car Name</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"  name="CarName" required style="width: 30%;"><br><br>
                            <label for="Description"><b>Description</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                            <textarea type="text"  name="Description" style="width: 30%;"></textarea><br><br><br>
                            <label for="cImage"><b>Image</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="file"  name="cImage"  style="margin-left: 200px"><br><br><br>
                            <label for="OwnedBy"><b>Owned By</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
                            <input type="text"  name="OwnedBy" required style="width: 30%;"><br><br><br>
                            <label for="Rates"><b>Rates</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"  name="Rates" required style="width: 30%;"><br><br><br>
                            <input type="submit"   value="Update" name="Update1"><br><br><br>

                        </div>


                    </form>
                </div>
                <br>
                <br>
                <table class="table table-striped table-bordered table-hover" >
                    <tr>
                        <!--                    #		Image	Name	Stars	Owned By	Location	Gallery	Order	Status-->

                        <!--                    <td><input type="checkbox"></td>-->
                        <td>#</td>
                        <td>CustomerId</td>
                        <td>Carsid</td>
                        <td> PickLocation </td>
                        <td> DropLocation </td>
                        <td>PickUpDate</td>
                        <td>DropOfDate</td>
                        <td>Distance</td>
                        <td>cost</td>
                        <td></td>
                    </tr>
                    <?php
//                    BookingId CustomerId carsid PickLocation DropLocation PickUpDate DropOfDate Distance cost
                    include 'conn.php';
                    $str="select * from carbooking";
                    $result=$sql->query($str);
                    if($result->num_rows>0)
                    {
                        while ($row=$result->fetch_assoc())
                        {
                            ?>
                            <tr>
                                <td ><h5 ><?php echo $row['BookingId']?></h5> </td>
                                <td><h6 ><?php echo $row['CustomerId']?> </h6></td>
                                <td><h6 ><?php echo $row['carsid']?> </h6></td>
                                <td><h6 ><?php echo $row['PickLocation']?> </h6></td>
                                <td><h6 ><?php echo $row['DropLocation']?> </h6></td>
                                <td><h6 ><?php echo $row['PickUpDate']?> </h6></td>
                                <td><h6 ><?php echo $row['DropOfDate']?> </h6></td>
                                <td><h6 ><?php echo $row['Distance']?> </h6></td>
                                <td><h6 ><?php echo $row['cost']?> </h6></td>
                                <td><button onclick="getcarbookid(<?php echo $row['BookingId']?>)">DELETE</button></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
                <script>
                    var carbookingtbl='carbooking';
                    var   carbookingid='BookingId';
                    function  getcarbookid(id) {

                        window.location.href="http://localhost/torism/delete.php?id="+id+"&TbName="+carbookingtbl+"&Tbid="+carbookingid;

                    }
                </script>
            </div>
        </div>
        <div class="dash"  id="admintable" style="background-color:#F7F7F7">
            <br>
            <br>
            <div style="width: 1175px ;height:1000px;background-color:#F5F5F5;border: 2px solid #EEEEEE">
                <h5 style="margin-top: 10px;margin-left: 5px">ADMIN TABLE</h5>
                <hr/>
                <button onclick="document.getElementById('id4').style.display='block'" style=" display:flex;margin-left: 20px;background-color:#4B9501;border: none;height:40px;width:70px;color:white"><img src="img/trans1.jpg" style="width: 50%;height: 50%">ADD</button>

                <div id="id4" class="modal">

                    <form class="modal-content animate" action="" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id4').style.display='none'" class="close" title="Close Modal">&times;</span>

                        </div>

                        <div class="container" style="margin-left: 100px">

                            <label for="UserName"><b>UserName</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"  name="UserName" required style="width: 30%;"><br><br>
                            <label for="Password"><b>Password</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                            <input type="text"  name="Password" required style="width: 30%;"><br><br><br>
                            <input type="submit"   value="Update" name="Update2"><br><br><br>

                        </div>


                    </form>
                    <?php
                    include 'conn.php';
                    $UserName=$_POST['UserName'];
                    $Password=$_POST['Password'];

                    $str="INSERT INTO admin(Name,Password) VALUES  ('$UserName','$Password')";
                    if(isset($_POST['Update2']))
                    {
                        if($sql->query($str)===TRUE)
                        {
                            echo "<script>alert('admin registered');</script>";
                        }
                        else
                        {
                            echo "<script>alert('ERROR');</script>";
                        }
                    }
                    ?>

                </div>
                <br>
                <br>
                <table class="table table-striped table-bordered table-hover" >
                    <tr>

                        <td>#</td>
                        <td>Username</td>
                        <td>Password</td>
                        <td></td>
                    </tr>
                    <?php

                    include 'conn.php';
                    $str="select * from admin";
                    $result=$sql->query($str);
                    if($result->num_rows>0)
                    {
                        while ($row=$result->fetch_assoc())
                        {
                            ?>
                            <tr>
                                <td ><h5 ><?php echo $row['id']?></h5> </td>
                                <td><h6 ><?php echo $row['Name']?> </h6></td>
                                <td><h6 ><?php echo $row['Password']?> </h6></td>

                                <td><button onclick="getadminid(<?php echo $row['id']?>)">DELETE</button></td>
                            </tr>
                            <?php
                        }
                    }

                    ?>
                </table>
                <script>
                    var admintbl='admin';
                    var adminid='id';
                    function  getadminid(id) {
                        window.location.href="http://localhost/torism/delete.php?id="+id+"&TbName="+admintbl+"&Tbid="+adminid;

                    }
                </script>
            </div>
        </div>
        <div class="dash"  id="carschedule" style="background-color:#F7F7F7">
            <br>
            <br>
            <div style="width: 1175px ;height:1000px;background-color:#F5F5F5;border: 2px solid #EEEEEE">
                <h5 style="margin-top: 10px;margin-left: 5px">CAR SCHEDULE</h5>
                <hr/>
                <button onclick="document.getElementById('idc003').style.display='block'" style=" display:flex;margin-left: 20px;background-color:#4B9501;border: none;height:40px;width:70px;color:white"><img src="img/trans1.jpg" style="width: 50%;height: 50%">ADD</button>

                <div id="idc003" class="modal">

                    <form class="modal-content animate" action="#" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('idc003').style.display='none'" class="close" title="Close Modal">&times;</span>

                        </div>

                        <div class="container" style="margin-left: 100px">

                            <label for="CarId"><b>Car Id</b></label>
                            <input type="text"  name="CarId" required style="width: 30%;"><br><br>

                            <label for="CarName"><b>CarName</b></label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                            <textarea type="text"  name="CarName" style="width: 30%;"></textarea><br><br><br>

                            <label for="PickUpLocation"><b>PickUpLocation</b></label>
                            <input type="text"  name="PickUpLocation"  style="margin-left: 200px"><br><br><br>

                            <label for="DropingLocation"><b>DropingLocation</b></label>
                            <input type="text"  name="DropingLocation" required style="width: 30%;"><br><br><br>

                             <label for="Distance"><b>Distance</b></label>
                            <input type="text"  name="Distance" required style="width: 30%;"><br><br><br>

                            <label for="cost"><b>Cost</b></label>
                            <input type="text"  name="cost" required style="width: 30%;"><br><br><br>
                            <input type="submit"   value="Update" name="Update3">
                            <input type="reset"   value="Clear" name="Update"><br><br><br>
                        </div>


                    </form>
                    <?php
                    include 'conn.php';
                    $carname=$_POST['CarName'];
                    $CarId=$_POST['CarId'];
                    $PickUpLocationy=$_POST['PickUpLocation'];
                    $DropingLocation=$_POST['DropingLocation'];
                    $Distance=$_POST['Distance'];
                    $cost=$_POST['cost'];
                    $str="INSERT INTO carschedular(CarId,CarName,PickUpLocation,DropingLocation,Distance,cost) VALUES 
                    ('$carname','$CarId','$PickUpLocationy','$DropingLocation','$Distance',$cost)";
                    if(isset($_POST['Update3']))
                    {
                        if($sql->query($str)===TRUE)
                        {
                            echo "<script>alert('New Car Added Succesfully ');</script>";
                        }
                        else
                        {
                            echo "<script>alert('ERROR');</script>";
                        }
                    }
                    ?>
                </div>
                <br>
                <br>
                <table class="table table-striped table-bordered table-hover" >
                    <tr>
                        <!--                    #		Image	Name	Stars	Owned By	Location	Gallery	Order	Status-->

                        <!--                    <td><input type="checkbox"></td>-->
                        <td>#</td>
                        <td>Carid</td>
                        <td> CarName </td>
                        <td> PickUpLocation </td>
                        <td>DropingLocation</td>
                        <td>Distance</td>
                        <td>cost</td>
                        <td></td>
                    </tr>
                    <?php

                    include 'conn.php';
                    $str="select * from carschedular";
                    $result=$sql->query($str);
                    if($result->num_rows>0)
                    {
                        while ($row=$result->fetch_assoc())
                        {
                            ?>
                            <tr>
                                <td ><h5 ><?php echo $row['id']?></h5> </td>
                                <td><h6 ><?php echo $row['CarId']?> </h6></td>
                                <td><h6 ><?php echo $row['CarName']?> </h6></td>
                                <td><h6 ><?php echo $row['PickUpLocation']?> </h6></td>
                                <td><h6 ><?php echo $row['DropingLocation']?> </h6></td>
                                <td><h6 ><?php echo $row['Distance']?> </h6></td>
                                <td><h6 ><?php echo $row['cost']?> </h6></td>
                                <td><button onclick="getcarschedule(<?php echo $row['id']?>)">DELETE </button></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
                <script>
                    var carshdtbl='carschedular';
                    var carshdid='id';
                    function  getcarschedule(id) {
                        window.location.href="http://localhost/torism/delete.php?id="+id+"&TbName="+carshdtbl+"&Tbid="+carshdid;

                    }
                </script>

            </div>
        </div>
        <!--////////////////////////////////////CAR///////////////////////////////////////////////-->

        <!--//////////////////////////////////////////////////////////////////////////////-->

        <div class="dash"  id="addtour" style="background-color:#F7F7F7">
            <div style="width: 1175px ; overflow: scroll;height:600px;background-color:#F5F5F5;border: 2px solid #EEEEEE">
                <h5 style="margin-top: 10px;margin-left: 5px">TOUR AVAILABLE</h5>
                <hr/>
                <button onclick="document.getElementById('id01').style.display='block'" style=" display:flex;margin-left: 20px;background-color:#4B9501;border: none;height:40px;width:70px;color:white"><img src="img/trans1.jpg" style="width: 50%;height: 50%">ADD</button>
                <br>
                <br>

                <div id="id01" class="modal">

                    <form class="modal-content animate" action="#" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

                        </div>

                        <div class="container" style="margin-left: 100px">


                            <label for="CarName"><b>Tour Name</b></label>
                         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"  name="CarName" required style="width: 30%;"><br><br>
                            <label for="Description"><b>Description</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                            <textarea type="text"  name="Description" style="width: 30%;"></textarea><br><br><br>
                             <label for="cImage"><b>Image</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="file"  name="cImage"  style="margin-left: 200px"><br><br><br>
                            <label for="OwnedBy"><b>Owned By</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
                            <input type="text"  name="OwnedBy" required style="width: 30%;"><br><br><br>
                            <label for="Rates"><b>Rates</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"  name="Rates" required style="width: 30%;"><br><br><br>
                            <input type="submit"   value="Update" name="Update4"><br><br><br>
                        </div>


                    </form>
                </div>
                <table class="table table-striped table-bordered table-hover" >
                    <tr>
                        <td>#</td>
                        <td>TourName</td>
                        <td>Images</td>
                        <td>Location</td>
                        <td>Rooms Available</td>
                        <td>Cost</td>
                        <td>Rates</td>
                        <td>Status</td>
                        <td></td>
                    </tr>
                    <?php

                    include 'conn.php';
                    $str="select * from tour";
                    $result=$sql->query($str);
                    if($result->num_rows>0)
                    {
                        while ($row=$result->fetch_assoc())
                        {


                            ?>
                            <tr>
                                <td><h6 id=""><?php echo $row['Id']?></h6> </td>
                                <td><h6 ><?php echo $row['TourName']?> </h6></td>
                                <td><h6 ><?php echo $row['HotelName']?> </h6></td>
                                <td><h6 ><?php echo $row['Images']?> </h6></td>
                                <td><h6 ><?php echo $row['Location']?> </h6></td>
                                <td><h6 ><?php echo $row['RoomsAvailable']?> </h6></td>
                                <td><h6 ><?php echo $row['Cost']?> </h6></td>
                                <td><h6 ><?php echo $row['Rates']?> </h6></td>
                                <td><button onclick="gettour(<?php echo $row['Id']?>)">DELETE </button></td>


                            </tr>
                            <?php
                        }
                    }

                    ?>
                </table>
                <script>
                    var tourtbl='tour';
                    var tourid='Id';
                    function  gettour(id) {
                        window.location.href="http://localhost/torism/delete.php?id="+id+"&TbName="+tourtbl+"&Tbid="+tourid;

                    }
                </script>
            </div>
        </div>
        <div class="dash"  id="viewtour" style="background-color:#F7F7F7">
            <div style="width: 1175px ; overflow: scroll;height:600px;background-color:#F5F5F5;border: 2px solid #EEEEEE">
                <h5 style="margin-top: 10px;margin-left: 5px">TOUR AVAILABLE</h5>
                <hr/>
                <br>
                <br>




                <table class="table table-striped table-bordered table-hover" >
                    <tr>
                        <td>#</td>
                        <td>TourId</td>
                        <td>CustomerId</td>
                        <td>HotelName</td>
                        <td>NoOfRooms</td>
                        <td>BookingDate</td>
                        <td>Cost</td>
                        <td></td>
                    </tr>
                    <?php

                    include 'conn.php';
                    $str="select * from tourbooking";
                    $result=$sql->query($str);
                    if($result->num_rows>0)
                    {
                        while ($row=$result->fetch_assoc())
                        {
//                            Id tourid CustomerId HotelName NoOfRooms BookingDate Cost Status


                            ?>
                            <tr>
                                <td><h6><?php echo $row['Id']?></h6> </td>
                                <td><h6 ><?php echo $row['tourid']?> </h6></td>
                                <td><h6 ><?php echo $row['CustomerId']?> </h6></td>
                                <td><h6 ><?php echo $row['HotelName']?> </h6></td>
                                <td><h6 ><?php echo $row['NoOfRooms']?> </h6></td>
                                <td><h6 ><?php echo $row['BookingDate']?> </h6></td>
                                <td><h6 ><?php echo $row['Cost']?> </h6></td>
                                <td><button onclick="gettoura(<?php echo $row['Id']?>)">DELETE </button></td>
                            </tr>
                            <?php
                        }
                    }

                    ?>
                </table>
                <script>
                    var tourtbl='tourbooking';
                    var tourid='Id';
                    function  gettoura(id) {
                        window.location.href="http://localhost/torism/delete.php?id="+id+"&TbName="+tourtbl+"&Tbid="+tourid;

                    }
                </script>
            </div>
        </div>

        <div class="dash"  id="addaccount">

            <div style="width: 1175px ;height:1000px;background-color:#F5F5F5;border: 2px solid #EEEEEE">
                <h5 style="margin-top: 10px;margin-left: 5px">User Accounts</h5>
                <hr/>
                <button onclick="document.getElementById('id3').style.display='block'" style=" display:flex;margin-left: 20px;background-color:#4B9501;border: none;height:40px;width:70px;color:white"><img src="img/trans1.jpg" style="width: 50%;height: 50%">ADD</button>

                <div id="id3" class="modal">

                    <form class="modal-content animate" action="example.php" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id3').style.display='none'" class="close" title="Close Modal">&times;</span>

                        </div>


                        <div class="container" style="margin-left: 100px">

                            <label for="CarName"><b>Username</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"  class="Username" name="Username" required style="width: 30%;"><br><br>
                            <label for="Description"><b>Email</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                            <textarea type="email" class="Email" name="Email" style="width: 30%;"></textarea><br><br><br>
                            <label for="cImage"><b>Password</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="password"   class="Password" name="Password"  style="margin-left: 200px"><br><br><br>
                            <label for="OwnedBy"><b>ContactNo</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
                            <input type="text" name="ContactNo" required style="width: 30%;"><br><br><br>
                            <label for="Rates"><b>Status</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"   class="Status" name="Status" required style="width: 30%;"><br><br><br>
                            <label for="AV"><b>AV</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"   class="AV" name="AV" required style="width: 30%;"><br><br><br>
                            <input type="submit"   value="Update" name="Update5"><br><br><br>
                        </div>


                    </form>
                    <?php
                    include 'conn.php';
                    $Username=$_POST['Username'];
                    $Email=$_POST['Email'];
                    $Password=$_POST['Password'];
                    $ContactNo=$_POST['ContactNo'];
                    $Status=$_POST['Status'];
                    $AvailableSeats=$_POST['AV'];

                    $str="INSERT INTO flight(Username,Email,Password,ContactNo,Status,AvailableSeats) VALUES ('$Username','$Email','$Password',$ContactNo,$Status,$AvailableSeats)";
                    if(isset($_POST['Update5']))
                    {
                        if($sql->query($str)===TRUE)
                        {
                            echo "<script>alert('New Car Added Succesfully');</script>";
                        }
                        else
                        {
                            echo "<script>alert('ERROR');</script>";
                        }
                    }
                    ?>
                </div>
                <br>
                <br>
                <table class="table table-striped table-bordered table-hover" >
                    <tr>
                        <td>#</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Password</td>
                        <td>ContactNo</td>
                        <td>Status</td>
                        <td></td>

                    </tr>
                    <?php

                    include 'conn.php';
                    $str="select * from user";
                    $result=$sql->query($str);
                    if($result->num_rows>0)
                    {
                        while ($row=$result->fetch_assoc())
                        {
                            ?>
                            <tr>
                                <!--        Id	Username	Email	Password	ContactNo	Status-->

                                <td width="100px"><h5 ><?php echo $row['Id']?></h5> </td>
                                <td><h6 ><?php echo $row['Username']?> </h6></td>
                                <td><h6 ><?php echo $row['Email']?> </h6></td>
                                <td><h6 ><?php echo $row['Password']?> </h6></td>
                                <td><h6 ><?php echo $row['ContactNo']?> </h6></td>
                                <td><h6 ><?php echo $row['Status']?> </h6></td>
                                <td><button onclick="getuser(<?php echo $row['Id']?>)" >DELETE </button></td>
                            </tr>
                            <?php
                        }
                    }

                    ?>
                </table>
                <script>
                    var usertbl='user';
                    var userid='Id';
                    function  getuser(id) {
                        window.location.href="http://localhost/torism/delete.php?id="+id+"&TbName="+usertbl+"&Tbid="+userid;

                    }
                </script>
            </div>
        </div>


<!--        ////???????????????????????????///////////////////FLIGHT/////////////////?????????????????///////////////////-->
        <div class="dash"  id="addflight" style="background-color: #F7F7F7">

            <div style="width: 1175px ;height:1000px;overflow: scroll;height:1000px;background-color:#F5F5F5;border: 2px solid #EEEEEE">
                <h5 style="margin-top: 10px;margin-left: 5px">FLIGHT BOOKING</h5>
                <hr/>
                <button onclick="document.getElementById('id1').style.display='block'" style=" display:flex;margin-left: 20px;background-color:#4B9501;border: none;height:40px;width:70px;color:white"><img src="img/trans1.jpg" style="width: 100%;height: 100%">ADD</button>

                <div id="id1" class="modal">

                    <form class="modal-content animate"  enctype="multipart/form-data"  action="" method="post">
                        <div class="imgcontainer">
x                            <span onclick="document.getElementById('id1').style.display='none'" class="close" title="Close Modal">&times;</span>

                        </div>


                        <div class="container" style="margin-left: 100px">


                            <label for="FlightName"><b>FlightName</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                            <textarea type="text"  name="FlightName" style="width: 30%;"></textarea><br><br><br>
                            <label for="Description"><b>Description</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                            <textarea type="Description"  name="Description" style="width: 30%;"></textarea><br><br><br>
                            <label for="Images"><b>Image</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="file"  name="fileToUpload"  style="margin-left: 200px"><br><br><br>
                            <label for="Rates"><b>Rates</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
                            <input type="text"  name="Rates" required style="width: 30%;"><br><br><br>
                            <label for="Status"><b>Status</b></label>

                            <input type="text"  name="Status" required style="width: 30%;"><br><br><br>

                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;

                            <input type="submit"   value="Update" name="Update6"><br><br><br>
                        </div>



                    </form>
                    <?php
                    include 'conn.php';
                    $FlightName=$_POST['FlightName'];
                    $Description=$_POST['Description'];
                    $Images=$_FILE['Images']['name'];
                    $Rates=$_POST['Rates'];
                    $Status=$_POST['Status'];
                    $target_dir = "img/flightimages/";
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);


                    $str="INSERT INTO flight(FlightName,Description,Images,Rates,Status) VALUES ('$FlightName','$Description','$target_file','$Rates',$Status)";
                    if(isset($_POST['Update6']))
                    {
                        if($sql->query($str)===TRUE)
                        {
                            if($check !== false) {
                                echo "File is an image - " . $check["mime"] . ".";
                                $uploadOk = 1;
                            } else {
                                echo "File is not an image.";
                                $uploadOk = 0;
                            }
                            if (file_exists($target_file)) {
                                echo "Sorry, file already exists.";
                                $uploadOk = 0;
                            }
// Check file size
                            if ($_FILES["fileToUpload"]["size"] > 500000) {
                                echo "Sorry, your file is too large.";
                                $uploadOk = 0;
                            }
// Allow certain file formats
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                && $imageFileType != "gif" ) {
                                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                            }
// Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
                            } else {
                                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                    echo "<script>alert('New Flight Added Succesfully');</script>";
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                            }
                        }
                        else
                        {
                            echo "<script>alert('ERROR');</script>";
                        }
                    }
                    ?>
                </div>                <br>
                <br>
                <table id="caraddingtable"class="table table-striped table-bordered table-hover" >
                    <tr>
                        <!--                    #		Image	Name	Stars	Owned By	Location	Gallery	Order	Status-->

                        <!--                    <td><input type="checkbox"></td>-->
                        <td>#</td>
                        <td>Flight Name</td>
                        <td>Description</td>
                        <td>Image</td>
                        <td>Rates</td>
                        <td>Status</td>
                        <td></td>
                    </tr>
                    <?php

                    include 'conn.php';
                    $str="select * from flight";
                    $result=$sql->query($str);
                    if($result->num_rows>0)
                    {
                        while ($row=$result->fetch_assoc())
                        {
                            ?>
                            <tr>
                                <td><h6 id=""><?php echo $row['Id']?></h6> </td>
                                <td><h6 ><?php echo $row['FlightName']?> </h6></td>
                                <td><h6 ><?php echo $row['Description']?> </h6></td>
                                <td><image type="text"  src="<?php echo $row['Images']?>"  style="height: 50px;width: 50px"></td>
                                <td><h6 ><?php echo $row['Rates']?> </h6></td>
                                <td><h6 ><?php echo $row['Status']?> </h6></td>
                                <td><button onclick="getflight(<?php echo $row['Id']?> )">DELETE</button></td>


                            </tr>
                            <?php
                        }
                    }

                    ?>
                </table>
                <script>
                    var flighttbl='flight';
                    var flightid='Id';
                    function  getflight(id) {
                        window.location.href="http://localhost/torism/delete.php?id="+id+"&TbName="+flighttbl+"&Tbid="+flightid;

                    }
                </script>
            </div>
        </div>
        <div class="dash"  id="addflightsheduler" style="background-color: #F7F7F7">
            <div style="width: 1175px ;height:1000px;background-color:#F5F5F5;border: 2px solid #EEEEEE">
                <h5 style="margin-top: 10px;margin-left: 5px">FLIGHT SHEDULAR</h5>
                <hr/>
                <button onclick="document.getElementById('id2').style.display='block'" style=" display:flex;margin-left: 20px;background-color:#4B9501;border: none;height:40px;width:70px;color:white"><img src="img/trans1.jpg" style="width: 50%;height: 50%">ADD</button>

                <div id="id2" class="modal">

                    <form class="modal-content animate" action="#" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id2').style.display='none'" class="close" title="Close Modal">&times;</span>

                        </div>




                        <div class="container" style="margin-left: 100px">

                            <label for="CarName"><b>FightId</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"  name="FightId" required style="width: 30%;"><br><br>
                            <label for="Source"><b>Source</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                            <textarea type="text"  name="Source" style="width: 30%;"></textarea><br><br><br>
                            <label for="Destination"><b>Destination</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"  name="Destination"  style="margin-left: 200px"><br><br><br>
                            <label for="ArrivalTime"><b>ArrivalTime</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
                            <input type="datetime-local"  name="ArrivalTime" required style="width: 30%;"><br><br><br>
                            <label for="DepartureTime"><b>DepartureTime</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
                            <input type="datetime-local"  name="DepartureTime" required style="width: 30%;"><br><br><br>
                            <label for="Cost"><b>Cost</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"  name="Cost" required style="width: 30%;"><br><br><br>

                            <label for="Distance"><b>Distance</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"  name="Distance" required style="width: 30%;"><br><br><br>
                            <input type="submit"   value="Update" name="Update7"><br><br><br>
                        </div>
                    </form>
                        <?php
                        include 'conn.php';
                        $FightId=$_POST['FightId'];
                        $Source=$_POST['Source'];
                        $Destination=$_POST['Destination'];
                        $ArrivalTime=$_POST['ArrivalTime'];
                        $DepartureTime=$_POST['DepartureTime'];
                        $Cost=$_POST['Cost'];
                        $Distance=$_POST['Distance'];
                        echo "<h1>$FightId</h1>";
                        echo "<h1>$Source</h1>";
                        echo "<h1>$Destination</h1>";
                        echo "<h1>$ArrivalTime</h1>";
                        echo "<h1>$DepartureTime</h1>";
                        echo "<h1>$Cost</h1>";
                        echo "<h1>$Distance</h1>";


                        $str="INSERT INTO flightschedular(FightId,Source,Destination,ArrivalTime,DepartureTime,Cost,Distance) VALUES ($FightId,'$Source','$Destination','$ArrivalTime','$DepartureTime',$Cost,$Distance)";
                        if(isset($_POST['Update7']))
                        {
                            if($sql->query($str)===TRUE)
                            {
                                echo "<script>alert('New Car Added Succesfully');</script>";
                            }
                            else
                            {
                                echo "<script>alert('ERROR FLIGHT');</script>";
                            }
                        }
                        ?>
                    </form>
                </div>      <br>
                <br>

                <table class="table table-striped table-bordered table-hover" >
                    <tr>
                        <!--                    #		Image	Name	Stars	Owned By	Location	Gallery	Order	Status-->

                        <!--                    <td><input type="checkbox"></td>-->
                        <td>#</td>
                        <td>Flight Id</td>
                        <td>Source</td>
                        <td>Destination</td>
                        <td>ArrivalTime</td>
                        <td>DepartureTime</td>
                        <td>Cost </td>
                        <td>Distance</td>
                        <td></td>
                    </tr>
                    <?php

                    include 'conn.php';
                    $str="select * from flightschedular";
                    $result=$sql->query($str);
                    if($result->num_rows>0)
                    {
                        while ($row=$result->fetch_assoc())
                        {
                            ?>
                            <tr>
                                <td><h6 id=""><?php echo $row['id']?></h6> </td>
                                <td><h6 ><?php echo $row['FightId']?> </h6></td>
                                <td><h6 ><?php echo $row['Source']?> </h6></td>
                                <td><h6 ><?php echo $row['Destination']?> </h6></td>
                                <td><h6 ><?php echo $row['ArrivalTime']?> </h6></td>
                                <td><h6 ><?php echo $row['DepartureTime']?> </h6></td>
                                <td><h6 ><?php echo $row['Cost']?> </h6></td>
                                <td><h6 ><?php echo $row['Distance']?> </h6></td>
                                <td><button onclick="getflightschedular(<?php echo $row['id']?> )" >DELETE</button></td>


                            </tr>
                            <?php
                        }
                    }

                    ?>
                </table>
                <script>
                    var flightsched='flightschedular';
                    var flightschedid='id';
                    function  getflightschedular(id) {
                        window.location.href="http://localhost/torism/delete.php?id="+id+"&TbName="+flightsched+"&Tbid="+flightschedid;

                    }
                </script>
            </div>
        </div>
        <div class="dash"  id="viewflightbooking" style="background-color: #F7F7F7">
            <div style="width: 1175px ;height:1000px; overflow: scroll;height:600px;background-color:#F5F5F5;border: 2px solid #EEEEEE">
                <h5 style="margin-top: 10px;margin-left: 5px">FLIGHT BOOKING</h5>
                <hr/>
<!--                <button onclick="document.getElementById('id001').style.display='block'" style=" display:flex;margin-left: 20px;background-color:#4B9501;border: none;height:40px;width:70px;color:white"><img src="img/trans1.jpg" style="width: 50%;height: 50%">ADD</button>-->

                <div id="idcarbooking" class="modal">

                    <form class="modal-content animate" action="example.php" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('idcarbooking').style.display='none'" class="close" title="Close Modal">&times;</span>

                        </div>

                        <div class="container" style="margin-left: 100px">

                            <label for="CarName"><b>Car Name</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"  name="CarName" required style="width: 30%;"><br><br>
                            <label for="Description"><b>Description</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                            <textarea type="text"  name="Description" style="width: 30%;"></textarea><br><br><br>
                            <label for="cImage"><b>Image</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="file"  name="cImage"  style="margin-left: 200px"><br><br><br>
                            <label for="OwnedBy"><b>Owned By</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
                            <input type="text"  name="OwnedBy" required style="width: 30%;"><br><br><br>
                            <label for="Rates"><b>Rates</b></label>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            <input type="text"  name="Rates" required style="width: 30%;"><br><br><br>
                            <input type="submit"   value="Update" name="Update8"><br><br><br>
                        </div>


                    </form>
                </div>                <br>
                <br>

                <table class="table table-striped table-bordered table-hover" >
                    <tr>


                        <td>#</td>
                        <td>Flight Scheduling Id</td>
                        <td>FlightName</td>
                        <td>CustomerId</td>
                        <td>ArrivalTime</td>
                        <td>DepartureTime</td>
                        <td>Source</td>
                        <td>Destination</td>
                        <td>Cost</td>
                        <td></td>
                    </tr>
                    <?php

                    include 'conn.php';
                    $str="select * from flightbooking";
                    $result=$sql->query($str);
                    if($result->num_rows>0)
                    {
                        while ($row=$result->fetch_assoc())
                        {
//                               id FlightSid CustomerId ArrivalTime DepartureTime Source Destination Cost Status

                            ?>
                            <tr>
                                <td><h6 id=""><?php echo $row['id']?></h6> </td>
                                <td><h6 ><?php echo $row['FlightSid']?> </h6></td>
                                <td><h6 ><?php echo $row['CustomerId']?> </h6></td>
                                <td><h6 ><?php echo $row['ArrivalTime']?> </h6></td>
                                <td><h6 ><?php echo $row['DepartureTime']?> </h6></td>
                                <td><h6 ><?php echo $row['Source']?> </h6></td>
                                <td><h6 ><?php echo $row['Destination']?> </h6></td>
                                <td><h6 ><?php echo $row['Cost']?> </h6></td>
                                <td><h6 ><?php echo $row['Status']?> </h6></td>
                                <td><button onclick="flightbooking(<?php echo $row['id']?>)">DELETE </button></td>


                            </tr>
                            <?php
                        }
                    }

                    ?>
                </table>

                <script>
                    var flightbook='flightbooking';
                    var flightbookid='id';
                    function  getflightbooking(id) {
                        window.location.href="http://localhost/torism/delete.php?id="+id+"&TbName="+flightbook+"&Tbid="+flightbookid;

                    }
                </script>
            </div>

        </div>


        <!--        ////???????????????????????????///////////////////FLIGHT/////////////////?????????????????///////////////////-->



    </div>
    <script>
        // / Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict /
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
        var modal = document.getElementById('id01');
        var modal1 = document.getElementById('id001');
        var modal2 = document.getElementById('idc003');
        var modal3 = document.getElementById('id1');
        var modal4= document.getElementById('id2');
        var modal5= document.getElementById('id3');
        var modal6= document.getElementById('id4');


        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
            if (event.target == modal3) {
                modal3.style.display = "none";
            }
            if (event.target == modal4) {
                modal4.style.display = "none";
            }
            if (event.target == modal5) {
                modal5.style.display = "none";
            }

            if (event.target == modal6) {
                modal6.style.display = "none";
            }
        }

    </script>
</body>
</html>
