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
//    http://localhost/torism/booking2.php?id=1&bdate=2019-11-08&noseats=1
    $user=$_COOKIE['userid'];
    $carid=$_GET['id'];
    $bdate=$_GET['bdate'];
    $noseats=$_GET['noseats'];
    $avl=$_GET['avl'];
    include 'conn.php';
    $str="select * from flightschedular where id=$carid";
    $result=$sql->query($str);
    if($result->num_rows>0)
    {
        while ($row = $result->fetch_assoc())
        {
//            id FightId Source Destination ArrivalTime DepartureTime Cost Distance
            $carsid=$row['id'];
//            http://localhost/torism/Booking.php?id=1&bdate=2019-11-27&noroom=1&hotelname=raj
            ?>
            <div  class="sub2" style="background-color:#FFFFFF;height: 420px;width:340px;margin-left:90px; box-shadow: 10px 10px 5px gray;">
                <div class="Book" style="margin-left: 25px;margin-top:30px;">
                    <div style="width:230px;height:320px;background-color: #F4F5F8;border-radius: 2px;padding-top: 15px;width:280px;padding-left: 10px;">
                        <label>No of Seats :</label><label><?php echo $noseats?>  </label><br><button id="a"style="display: none;" value="<?php echo $noseats?>"></button>
                        <br>
                        <label>Source :</label><label><?php echo $row['Source']?>  </label><br><button id="b"style="display: none;" value="<?php echo $row['Source']?>"></button>
                        <br>
                        <label>Destination :</label><label><?php echo $row['Destination']?>  </label><br><button id="c"style="display: none;" value="<?php echo $row['Destination']?>"></button>
                        <br>
                        <label> Arrival Time:</label><label><?php echo $row['ArrivalTime']?>  </label><br><button id="d" style="display: none;" value="<?php echo $row['ArrivalTime']?>"></button>
                        <br>
                        <label>Departure Time:</label><label><?php echo $row['DepartureTime']?></label><button id="e" style="display: none;" value="<?php echo $row['DepartureTime']?>"></button>
                        <br><br>
                        <label>Booking Date</label><label><?php echo date('Y/m/d');?></label><button id="f" style="display: none;" value="<?php echo date('Y/m/d');?>"></button>
                        <h2>Total Amount  </h2><h2> <?php echo $row['Cost']?> INR </h2><button id="g" style="display: none;" value="<?php echo $row['Cost']?>"></button>

                    </div>
                    <br>
                    <br>

                </div>
            </div>
            <?php
        }
    }

    ?>
    <button id="gh" style="display: none;" value="<?php echo $avl ?>"></button>

</div>
<br>
<br>
<!--id FightId Source Destination ArrivalTime DepartureTime Cost Distance-->
<!--id FlightSid CustomerId ArrivalTime DepartureTime FlightName Cost Status-->
<!--echo $pickupdate;echo $picklocation;echo $droplocation;echo $dropdate;?>-->
<button  onclick="confirmbook(<?php echo $carsid;?>)"style="background-color:#0D9D66;color: white;border-radius: 2px;border: none;width:700px;height:50px">CONFIRM THIS BOOKING</button>
<script>
    function confirmbook(cid) {

        var Source=document.getElementById('b').value;
        var Destination=document.getElementById('c').value;
        var ArrivalTime=document.getElementById('d').value;
        var DepartureTime=document.getElementById('e').value;
        var FlightName=document.getElementById('f').value;
        var Cost=document.getElementById('g').value;
        var gh=document.getElementById('gh').value;
        // d	CustomerId	HotelName	NoOfRooms	BookingDate	Cost	Status


        window.location.href = "http://localhost/torism/pay3.php?id="+cid+"&Source="+Source+"&Destination="+Destination+"&ArrivalTime="+ArrivalTime+"&DepartureTime="+DepartureTime+"&Cost="+Cost+"&gh="+gh;
    }
</script>
</body>
</html>