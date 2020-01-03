<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title></title>
</head>
<style>
    input {
        border-radius: 4px ;
        height:30px;
        width: 300px;
        background-color: #F9F9F9;
        border-style: none;
        border: 1px solid #EDEDED;
    }
    .abcd {
        border-radius: 4px ;
        height:30px;
        width: 300px;
        /*margin-left:80px;*/
        background-color: white;
        border-style: none;
        border: 1px solid #EDEDED;
        padding-left: 10px;
    }
    label {
        color: #515263;
    }
    body{
        background-color: #F8F9FA;
    }
    .sub
    {
        margin-left: 5px;
    }
    .sub2 .Book label{
        padding-left: 10px;
    }
    #footer {
        background-color: gray;

        padding: 10px;
        font-family: "Baskerville Old Face";
    }

    #footer-data th{
        margin: 0px;
        padding: 30px;
        padding-left: 90px;
        padding-bottom: 5px;
        text-align: center;
        font-size:22px;
        color: whitesmoke;
    }




</style>

<body>
<div  class="main" style="display: flex">

    <div class="sub" style="background-color:#FFFFFF;width:750px;padding-left: 30px;padding-top: 20px;">
        <?php
        $user=$_COOKIE['userid'];
        include 'conn.php';
        $str="select * from user where Id=$user";
        $result=$sql->query($str);
        if($result->num_rows>0)
        {
            while ($row = $result->fetch_assoc())
            {

                ?>

                <!--            Full texts	Id Ascending 1	Username	Email	Password	ContactNo	Address-->
                <label class="texts ">First Name</label> <label class="b" style="margin-left:290px";>Last Name</label><br>
                <input type="text" name="first"  id="fname" value="<?php echo $row['Username'] ?>">   <input type="text" value="<?php echo $row['Username'] ?>"name="last"   class="b" style="margin-left:60px"><br><br>
                <label class="texts "> Email</label>                   <label class="b"  style="margin-left:330px";>Confirm Email</label><br>
                <input type="email" value="<?php echo $row['Email'] ?>" name="email" id="email" >          <input  style="margin-left:60px" type="email" value="<?php echo $row['Email'] ?>"name="cemail" class="b"><br><br>
                <label class="texts "> ContactNumber</label><br><input type="text"  value="<?php echo $row['ContactNo'] ?>" id="phone" placeholder="Contact Number" style="width:670px;"><br><br>

                <label class="texts ">Address</label><br>
                <input type="text"value="<?php echo $row['Address'] ?>"  name="adrr"  id="adrr" style="width:670px; " placeholder="Address"><br><br>
                <label class="">Country </label> <br>
                <select  name="Country" id="Country"style="width:670px;height:40px;">
                    <option>india</option>
                    <option >other</option>
                </select>
                <!--    id 	CarName 	Description 	Image 	OwnedBy 	Rates 	Status-->


                <?php
            }
        }

        ?>


    </div>
    <?php

    $user=$_COOKIE['userid'];
    $carid=$_GET['id'];

    $bdate=$_GET['bdate'];
    $noroom=$_GET['noroom'];
    $hotelname=$_GET['hotelname'];
    $location=$_GET['location'];
    include 'conn.php';
    $str="select * from tour where id=$carid";
    $result=$sql->query($str);
    if($result->num_rows>0)
    {
        while ($row = $result->fetch_assoc())
        {
//            http://localhost/torism/Booking.php?id=1&bdate=2019-11-27&noroom=1&hotelname=raj
            ?>
            <div  class="sub2" style="background-color:#FFFFFF;height: 420px;width:310px;margin-left:90px; box-shadow: 10px 10px 5px gray;">
                <div class="Book" style="margin-left: 25px;margin-top:30px;">
                    <div style="width:200px;height:80px;background-color: #F4F5F8;border-radius: 2px;padding-top: 15px;width:250px;padding-left: 10px;">
                        <label>Hotel Name:</label><label><?php echo $hotelname?>  </label><br><button id="a" style="display: none;" value="<?php echo $hotelname?>"></button>
                        <label>No of Rooms :</label><label><?php echo $noroom?>  </label><br><button id="b"style="display: none;" value="<?php echo $noroom?>"></button>
                        <label> Location :</label><label><?php echo $location?>  </label><br><button id="c" style="display: none;" value="<?php echo $location?>"></button>
                    </div>
                    <br>
                    <label>Booking Date</label><label><?php echo date('Y/m/d');?></label><button id="g" style="display: none;" value="<?php echo date('Y/m/d');?>"></button>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2>Total Amount  </h2><h2> <?php echo $row['Cost']?> INR </h2><button id="f" style="display: none;" value="<?php echo $row['Cost']?>"></button>
                </div>
            </div>
            <?php
        }
    }

    ?>
</div>
<br>
<br>

<!--echo $pickupdate;echo $picklocation;echo $droplocation;echo $dropdate;?>-->
<button  onclick="confirmbook(<?php echo $carid;?>)"style="background-color:#0D9D66;color: white;border-radius: 2px;border: none;width:700px;height:50px">CONFIRM THIS BOOKING</button>
<script>
    function confirmbook(cid) {

        var hotelname=document.getElementById('a').value;
        var noroom=document.getElementById('b').value;

        var cost=document.getElementById('f').value;
        var bdate=document.getElementById('g').value;
        // d	CustomerId	HotelName	NoOfRooms	BookingDate	Cost	Status


        window.location.href = "http://localhost/torism/pay1.php?id="+cid+"&hotelname="+hotelname+"&noroom="+noroom+"&cost="+cost+"&bdate="+bdate;
    }
</script>
</body>
</html>