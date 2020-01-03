$(document).ready(function() {
$('#addcar').hide();
$('#addflight').hide();
$('#addaccount').hide();
$('#addtour').hide();
$('#setting').hide();
$('#addflightsheduler').hide();
$('#viewflightbooking').hide();
$('#dashboard').show();
$('#carbooking').hide();
    $('#carschedule').hide();
    $('#popup').hide();
    $('#admintable').hide();
    $('#viewtour').hide();


    $('#dashbtn').click(function () {
        $('#dashboard').show();
        $('#addcar').hide();
        $('#addflight').hide();
        $('#setting').hide();
        $('#addtour').hide();
        $('#addaccount').hide();
        $('#addflightsheduler').hide();
        $('#viewflightbooking').hide();
        $('#carbooking').hide();
        $('#carschedule').hide();
        $('#admintable').hide();


        $('#viewtour').hide();

    })
    $('#carbtn').click(function () {
        $('#addcar').show();
        $('#addflight').hide();
        $('#dashboard').hide();
        $('#setting').hide();
        $('#addtour').hide();
        $('#addaccount').hide();
        $('#addflightsheduler').hide();
        $('#viewflightbooking').hide();
        $('#carbooking').hide();
        $('#carschedule').hide();
        $('#admintable').hide();
        $('#viewtour').hide();



    })
    $('#flightbtn').click(function () {
        $('#addcar').hide();
        $('#addflight').show();
        $('#dashboard').hide();
        $('#setting').hide();
        $('#addtour').hide();
        $('#addaccount').hide();
        $('#addflightsheduler').hide();
        $('#viewflightbooking').hide();
        $('#carbooking').hide();
        $('#carschedule').hide();
        $('#admintable').hide();
        $('#viewtour').hide();


    })
    $('#tourbtn').click(function () {
        $('#addcar').hide();
        $('#addtour').show();
        $('#dashboard').hide();
        $('#setting').hide();
        $('#addflight').hide();
        $('#addaccount').hide();
        $('#addflightsheduler').hide();
        $('#viewflightbooking').hide();
        $('#carbooking').hide();
        $('#carschedule').hide();
        $('#admintable').hide();
        $('#viewtour').hide();


    })
    $('#settingbtn').click(function () {
        $('#addcar').hide();
        $('#addflight').hide();
        $('#dashboard').hide();
        $('#setting').show();
        $('#addtour').hide();
        $('#addaccount').hide();
        $('#addflightsheduler').hide();
        $('#viewflightbooking').hide();
        $('#carbooking').hide();
        $('#carschedule').hide();
        $('#admintable').hide();
        $('#viewtour').hide();


    })
    $('#accountbtn').click(function () {
        $('#addcar').hide();
        $('#addflight').hide();
        $('#dashboard').hide();
        $('#setting').hide();
        $('#addtour').hide();
        $('#addaccount').show();
        $('#addflightsheduler').hide();
        $('#carbooking').hide();
        $('#viewflightbooking').hide();
        $('#carschedule').hide();
        $('#admintable').hide();
        $('#viewtour').hide();



    })
    $('#flightschedulebtn').click(function () {
        $('#addcar').hide();
        $('#addflight').hide();
        $('#dashboard').hide();
        $('#setting').hide();
        $('#addtour').hide();
        $('#addaccount').hide();
        $('#addflightsheduler').show();
        $('#viewflightbooking').hide();
        $('#carbooking').hide();
        $('#carschedule').hide();
        $('#admintable').hide();
        $('#viewtour').hide();



    })
    $('#viewflightbookingbtn').click(function () {
        $('#addcar').hide();
        $('#addflight').hide();
        $('#dashboard').hide();
        $('#setting').hide();
        $('#addtour').hide();
        $('#addaccount').hide();
        $('#addflightsheduler').hide();
        $('#viewflightbooking').show();
        $('#carbooking').hide()
        $('#carschedule').hide();
        $('#admintable').hide();
        $('#viewtour').hide();



    })
    $('#carbookingbtn').click(function () {
        $('#addcar').hide();
        $('#addflight').hide();
        $('#dashboard').hide();
        $('#setting').hide();
        $('#addtour').hide();
        $('#addaccount').hide();
        $('#addflightsheduler').hide();
        $('#viewflightbooking').hide();
        $('#carbooking').show();
        $('#carschedule').hide();
        $('#admintable').hide();
        $('#viewtour').hide();


    })
    $('#carschedulebtn').click(function () {
        $('#addcar').hide();
        $('#addflight').hide();
        $('#dashboard').hide();
        $('#setting').hide();
        $('#addtour').hide();
        $('#addaccount').hide();
        $('#addflightsheduler').hide();
        $('#viewflightbooking').hide();
        $('#carbooking').hide();
        $('#carschedule').show();
        $('#admintable').hide();
        $('#viewtour').hide();


    })
    $('#adminbtn').click(function () {
        $('#addcar').hide();
        $('#addflight').hide();
        $('#dashboard').hide();
        $('#setting').hide();
        $('#addtour').hide();
        $('#addaccount').hide();
        $('#addflightsheduler').hide();
        $('#viewflightbooking').hide();
        $('#carbooking').hide();
        $('#carschedule').hide();
        $('#carschedulebtn').hide();
        $('#admintable').show();
        $('#viewtour').hide();

    })
    $('#viewtourbtn').click(function () {
        $('#addcar').hide();
        $('#addflight').hide();
        $('#dashboard').hide();
        $('#setting').hide();
        $('#addtour').hide();
        $('#addaccount').hide();
        $('#addflightsheduler').hide();
        $('#viewflightbooking').hide();
        $('#carbooking').hide();
        $('#carschedule').hide();
        $('#carschedulebtn').hide();
        $('#admintable').hide();
        $('#viewtour').show();


    })
    $('#car').click(function () {
        $('#popup').show();
        document.getElementsById("popup").style.display = "block";
    })



})