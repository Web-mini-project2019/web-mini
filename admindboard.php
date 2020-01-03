<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/w3.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.js"></script>
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
        height: auto;
        background-color:#32363C;

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
    .leftdiv ul li{
        list-style-type: none;
        font-size: 20px;
        color: white;
         padding: 4px;
    }
    .leftdiv ul li:hover{
        background-color: #1245ED;
    }

    .box {
        position: absolute;
        width: 40vh;
        height: auto;
        margin-top: 300px;
        margin-left: 150px;
        transform: translate(-50%, -50%);
    }

    .box select {
        background-color:#32363C;
        color: white;
        padding: 12px;
        width: 250px;

        border: none;
        font-size: 20px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
        -webkit-appearance: button;
        appearance: button;
        outline: none;
    }

    .box::before {
        content: "\f13a";
        font-family: FontAwesome;
        position: absolute;
        top: 0;
        right: 0;
        width: 20%;
        height: 100%;
        text-align: center;
        font-size: 28px;
        line-height: 45px;
        color: rgba(255, 255, 255, 0.5);
        background-color: rgba(255, 255, 255, 0.1);
        pointer-events: none;
    }

    .box:hover::before {
        color: rgba(255, 255, 255, 0.6);
        background-color: rgba(255, 255, 255, 0.2);
    }

    .box select option {
        padding: 30px;
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
        width:1300px;
        height: 600px;
        background-color: #3C4249;


    }
    .da{
        margin: 20px;
        width:1300px;
        height: 200px;
        background-color: #3C4249;
    }

    .sus{
        height: 20px;
        width: 50px;
    }
td{
    padding-left: 20px;
}
</style>

</head>
<body>
<div class="maindiv" style="display: flex">
    <div class="leftdiv">
<div class="adminprofile" style="display: flex">
    <img src="img/favicon.png" height="40px" width="40px"/>
    <h1 style="color: white; font-size: 15px ;padding-left: 10px">Adminostrator</h1>
</div>
        <div  class="adminpic" style="width: 40vh;height: 100px; background-color: #2B2E32;display: flex">
            <div class="adminimage" style="width:50px;margin-top: 25px;border-radius: 50%; margin-left:10px;height:50px;background-color: #04090f;"></div>
<h1 STYLE="color: white;font-size: 20px;text-align: center;padding:30px ;font-family: 'Times New Roman'">SUPER ADMIN</h1>
        </div>


        <div class="w3-container droprwidth">
            <div class="w3-dropdown-hover droprwidth">
                <button class="w3-button  dp " id="dashbtn">Dashboard</button>
                <div class="w3-dropdown-content w3-bar-block  ">
                    <div  style="background-color: red"href="#" class="w3-bar-item w3-button">Link 1</div>
                    <div href="#" class="w3-bar-item w3-button">Link 2</div>
                    <div href="#" class="w3-bar-item w3-button">Link 3</div>
                </div>
            </div>

        </div>
            <div class="w3-dropdown-hover droprwidth">
                <button class="w3-button  dp " id="carbtn">Travel Hopes Car</button>
                <div class="w3-dropdown-content w3-bar-block  ">
                    <div href="#" class="w3-bar-item w3-button">Link 1</div>
                    <div href="#" class="w3-bar-item w3-button">Link 2</div>
                    <div href="#" class="w3-bar-item w3-button">Link 3</div>
                </div>

            </div>
            <div class="w3-dropdown-hover droprwidth">
                <button class="w3-button  dp " id="flightbtn">Travel Hopes Flight</button>
                <div class="w3-dropdown-content w3-bar-block  ">
                    <div id="addF"class="w3-bar-item w3-button">Add Flights</div>
                    <div  id="addFS"class="w3-bar-item w3-button" >Add Flight Schedule</div>
                    <div  id="viewBooking"class="w3-bar-item w3-button">View Booking</div>
                </div>


            </div>
            <div class="w3-dropdown-hover droprwidth">
                <button class="w3-button  dp "id="tourbtn">Travel Hopes Tour</button>
                <div class="w3-dropdown-content w3-bar-block  ">
                    <a href="#" class="w3-bar-item w3-button">Link 1</a>
                    <a href="#" class="w3-bar-item w3-button">Link 2</a>
                    <a href="#" class="w3-bar-item w3-button">Link 3</a>
                </div>


            </div>
            <div class="w3-dropdown-hover droprwidth">
                <button class="w3-button  dp "id="accountbtn">Accounts</button>
                <div class="w3-dropdown-content w3-bar-block  ">
                    <a href="#" class="w3-bar-item w3-button">Link 1</a>
                    <a href="#" class="w3-bar-item w3-button">Link 2</a>
                    <a href="#" class="w3-bar-item w3-button">Link 3</a>
                </div>


            </div>
            <div class="w3-dropdown-hover droprwidth">
                <button class="w3-button  dp " id="settingbtn">Settings</button>
                <div class="w3-dropdown-content w3-bar-block  ">
                    <a href="#" class="w3-bar-item w3-button">Link 1</a>
                    <a href="#" class="w3-bar-item w3-button">Link 2</a>
                    <a href="#" class="w3-bar-item w3-button">Link 3</a>
                </div>


            </div>
            <div class="w3-dropdown-hover droprwidth">
                <button class="w3-button  dp ">Customer Reviews</button>
                <div class="w3-dropdown-content w3-bar-block  ">
                    <a href="#" class="w3-bar-item w3-button">Link 1</a>
                    <a href="#" class="w3-bar-item w3-button">Link 2</a>
                    <a href="#" class="w3-bar-item w3-button">Link 3</a>
                </div>


            </div>
            <!--<div class="w3-dropdown-hover droprwidth">-->
                <!--<button class="w3-button  dp ">Travel Hope Car</button>-->
                <!--<div class="w3-dropdown-content w3-bar-block  ">-->
                    <!--<a href="#" class="w3-bar-item w3-button">Link 1</a>-->
                    <!--<a href="#" class="w3-bar-item w3-button">Link 2</a>-->
                    <!--<a href="#" class="w3-bar-item w3-button">Link 3</a>-->
                <!--</div>-->


            <!--</div>-->
            <!--<div class="w3-dropdown-hover droprwidth">-->
                <!--<button class="w3-button  dp ">Travel Hope Car</button>-->
                <!--<div class="w3-dropdown-content w3-bar-block  ">-->
                    <!--<a href="#" class="w3-bar-item w3-button">Link 1</a>-->
                    <!--<a href="#" class="w3-bar-item w3-button">Link 2</a>-->
                    <!--<a href="#" class="w3-bar-item w3-button">Link 3</a>-->
                <!--</div>-->


            <!--</div>-->
            <!--<div class="w3-dropdown-hover droprwidth">-->
                <!--<button class="w3-button  dp ">Travel Hope Car</button>-->
                <!--<div class="w3-dropdown-content w3-bar-block  ">-->
                    <!--<a href="#" class="w3-bar-item w3-button">Link 1</a>-->
                    <!--<a href="#" class="w3-bar-item w3-button">Link 2</a>-->
                    <!--<a href="#" class="w3-bar-item w3-button">Link 3</a>-->
                <!--</div>-->


            <!--</div>-->
            <!--<div class="w3-dropdown-hover droprwidth">-->
                <!--<button class="w3-button  dp ">Travel Hope Car</button>-->
                <!--<div class="w3-dropdown-content w3-bar-block  ">-->
                    <!--<a href="#" class="w3-bar-item w3-button">Link 1</a>-->
                    <!--<a href="#" class="w3-bar-item w3-button">Link 2</a>-->
                    <!--<a href="#" class="w3-bar-item w3-button">Link 3</a>-->
                <!--</div>-->


            <!--</div>-->
            <!--<div class="w3-dropdown-hover droprwidth">-->
                <!--<button class="w3-button  dp ">Travel Hope Car</button>-->
                <!--<div class="w3-dropdown-content w3-bar-block  ">-->
                    <!--<a href="#" class="w3-bar-item w3-button">Link 1</a>-->
                    <!--<a href="#" class="w3-bar-item w3-button">Link 2</a>-->
                    <!--<a href="#" class="w3-bar-item w3-button">Link 3</a>-->
                <!--</div>-->


            <!--</div>-->
        </div>





    <div  class="rightdiv" >
                <!--<button class="w3-button" style="background-color: red; color: white;">kk</button>-->
        <div class="header" style="display: flex">
                    <button class="w3-button" style="background-color: #E7E7E7; color: white; width: 90px;height: auto;"></button>
                   <h1 style="background-color:#42B142;width:150px;  margin-left:20px;padding-left:40px; padding-top:5px;height:30px;font-size: 17px;color: white ;margin-top: 40px">WEBSITE</h1>
                    <button class="w3-button" style="background-color: white; width: 100px;height: auto; color: black; margin-left: 700px;">Account</button>
                    <button class="w3-button" style="background-color: #DADADA; color: black;">Login</button>
                </div>

        <div class="dash" id="dashboard">
            <div class="da">

                <h1 style="color: #3C4249; margin-left: 600px;font-size: 10px" >hidded</h1>
                <div class="dashboardsub1" style="width: 200px; border-radius: 7px; margin-left:510px; height: 150px;background-color: #2B2E32">
                    <ul style="list-style-type: square;list-style-color: red;color: white">
                        <li><a>Total Admins 0</a></li>
                        <li> <a>Total Suppliers 1</a></li>
                        <li><a>Total Customers 4</a></li>
                        <li><a> Total Guests 2</a></li>
                        <li> <a>Total Bookings 7</a></li>
                    </ul>
                </div>
                <div class="dashboardsub2" style="width: 265px; border-radius: 7px; height: 150px;background-color: #2B2E32; margin-top:-150px;margin-left:100px">

                </div>
            </div>
        </div>

        <!--///////////////////////////////////////////////////////////////////////////////////-->
        <div class="dash"  id="addcar" style="background-color:#F7F7F7">
           <br>
            <br>
            <div style="width: 1175px ;height:1000px;background-color:#F5F5F5;border: 2px solid #EEEEEE">
                <h5 style="margin-top: 10px;margin-left: 5px">CAR BOOKING</h5>
                <hr/>
                <button style=" display:flex;margin-left: 20px;background-color:#4B9501;border: none;height:40px;width:70px;color:white"><img src="img/trans1.jpg" style="width: 50%;height: 50%">ADD</button>
                <br>
                <br>
            <table class="table table-striped table-bordered table-hover" >
                <tr>
<!--                    #		Image	Name	Stars	Owned By	Location	Gallery	Order	Status-->

<!--                    <td><input type="checkbox"></td>-->
                    <td>#</td>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Stars</td>
                    <td>Owned By</td>
                    <td>Location</td>
                    <td>Gallery</td>
                    <td>Order</td>
                    <td>Status</td>
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
                    <td><h5 id=""><?php echo $row['id']?></h5> </td>
                    <td><image type="text" style="width:95px;height:45px" id="" src="<?php echo $row['Image']?>" ></td>
                    <td><h5 ><?php echo $row['Name']?> </h5></td>
                    <td><h5 ><?php echo $row['Stars']?> </h5></td>
                    <td><h5 ><?php echo $row['Owned']?> </h5></td>
                    <td><h5 ><?php echo $row['Location']?> </h5></td>
                    <td><image type="text" id="" src="<?php echo $row['Location']?>" ></td>
                    <td><h5 ><?php echo $row['OrderBy']?> </h5></td>
                    <td><h5 ><?php echo $row['Status']?> </h5></td>


                </tr>
                   <?php
                    }  
                }
                
                ?>
            </table>
            </div>
        </div>

        <!--//////////////////////////////////////////////////////////////////////////////-->
    <div class="dash"  id="addaccount" style="background-color: blue">
        <h1>Add account</h1>
    </div>
        <div class="dash"  id="addtour" style="background-color: green">
            <h1>Add tour</h1>
        </div>
        <div class="dash"  id="addflight" style="background-color: yellow">

            <div style="width: 1175px ;height:1000px;background-color:#F5F5F5;border: 2px solid #EEEEEE">
                <h5 style="margin-top: 10px;margin-left: 5px">FLIGHT BOOKING</h5>
                <hr/>
                <button style=" display:flex;margin-left: 20px;background-color:#4B9501;border: none;height:40px;width:70px;color:white"><img src="img/trans1.jpg" style="width: 50%;height: 50%">ADD</button>
                <br>
                <br>
                <table class="table table-striped table-bordered table-hover" >
                    <tr>
                        <!--                    #		Image	Name	Stars	Owned By	Location	Gallery	Order	Status-->

                        <!--                    <td><input type="checkbox"></td>-->
                        <td>#</td>
                        <td>Image</td>
                        <td>Name</td>
                        <td>Stars</td>
                        <td>Owned By</td>
                        <td>Location</td>
                        <td>Gallery</td>
                        <td>Order</td>
                        <td>Status</td>
                    </tr>
                    <?php

                    include 'conn.php';
                    $str="select * from flightbooking";
                    $result=$sql->query($str);
                    if($result->num_rows>0)
                    {
                        while ($row=$result->fetch_assoc())
                        {
                            ?>
                            <tr>
                                <td><h5 id=""><?php echo $row['id']?></h5> </td>
                                <td><image type="text" style="width:95px;height:45px" id="" src="<?php echo $row['Image']?>" ></td>
                                <td><h5 ><?php echo $row['Name']?> </h5></td>
                                <td><h5 ><?php echo $row['Stars']?> </h5></td>
                                <td><h5 ><?php echo $row['Owned']?> </h5></td>
                                <td><h5 ><?php echo $row['Location']?> </h5></td>
                                <td><image type="text" id="" src="<?php echo $row['Location']?>" ></td>
                                <td><h5 ><?php echo $row['OrderBy']?> </h5></td>
                                <td><h5 ><?php echo $row['Status']?> </h5></td>


                            </tr>
                            <?php
                        }
                    }

                    ?>
                </table>
            </div>
        </div>
    <div class="dash"  id="setting" style="background-color:dimgrey">
        <h1>Add setting</h1>
    </div>

</div>
</body>
</html>
