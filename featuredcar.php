<html>
<head>
    <title>
        car
    </title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style>
    #footer{
        background-color: gray;
        padding: 10px;
        font-family: "Baskerville Old Face";
    }
    #above-footer{
        background-color: whitesmoke;
        padding: 40px;
        margin: 0px;
        padding-left: 150px;
        width: 100%;
    }
    #above-footer th{
        font-size: 15px;
        padding-left: 35px;
    }
    #above-footer td{
        color: black;
        text-align: center;
        font-size: 20px;
        padding: 0%;
    }
    #above-footer img{
        padding: 10px;
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
    td{
        margin: 0px;
        padding-left: 90px;
        text-align:left;
        color: whitesmoke;
    }
    #spclpck{
        height: 200px;
        background-color: #5bc0de;
        margin-bottom: 50px;
    }
    #spclpck-img img{
        width: 92%;
        padding-left: 250px;
    }
    #spclpck-para{
        font-size: 15px;
    }
    #spclpck-para input{
        padding-top: 4px;
        width: 390px;
        height: 60px;
        background-color: #c9302c;
        font-size: 25px;
        border-style: groove;
        border-width: 3px;

    }
    #car-options{
        display: flex;
        flex-flow: row wrap;
        /*align-content: space-between;*/
        /*justify-content: space-between;*/
    }
    #car-options table{

        margin: 20px;
        font-size: 20px;
    }
    .row{
        margin: 20px;
    }
    .car-opt{

        background-color: rgba(236, 250, 250, 0.02);
        box-shadow: 10px 10px 5px gray;
        width: 320px;
    }
    #car-opt ul li{

        font-size: 25px;
    }
    .car-img img{
        width: 210px;


    }

    #car-options #cars {

        padding-bottom: 280px;

        font-size: 30px;
    }
    .dp{
        margin-top: -3px;
        width:270px;
        height: 50px;
        background-color: #3C4249;
        color: white;


    }
    .a{
        border-radius: 10px;

        border:2px solid white;


    }
    .row ul li
    {
       list-style-type: none;
        padding:10px;
        font-family: "Times New Roman";
        font-size: 25px;
    }

</style>
<body>
<?php
if(isset($_COOKIE['userid']))
{
$user=$_COOKIE['userid'];
}
else{
$user=0;
}
?>
<button id="userinfo"  style="display: none" value="<?php echo $user?>"></button>
<div id="car-options" >

    <?php
    include 'conn.php';

    $str="select * from car where Status=0;";
    $result=$sql->query($str);
    if($result->num_rows>0)
    {
        while ($row = $result->fetch_assoc())
        {
            $cid=$row['id'];
            ?>

            <div class="row" id="cars<?php echo $row['id'] ?>" style="margin-left: 90px;">
                <div class="col-md-3 car-opt">
                    <ul>
                        <li class="car-img"><img src="<?php echo $row['Image'] ?>"></li>
                        <br><br><br>
                        <li><img src="pricetag.jpg" style="width: 30px">INR</li>
                        <li><?php  echo $row['CarName'] ?></li>
                        <li><img src="locationlogo.jpg" style="width: 30px"> Muskat</li>
                        <button  class="a" style="height:50px;width:180px;background-color:blue;color:white;" onclick="cat(<?php  echo $cid?>)">BOOK NOW</button>
                    </ul>
                </div>

            </div>

            <?php

        }
    }

    ?>
</div>
<script>
    function cat(id)
    {
var c=document.getElementById('userinfo').value;
if(c==0)
{
    alert("please login before booking");
}
else {
    window.location.href = "http://localhost/torism/insertcar.php?id="+id;
}
    }
</script>
</body>
</html>