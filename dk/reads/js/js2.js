/*jslint browser: true*/
/*global $, jQuery, alert*/
$(function () {
  'use strict';
// Set the date we're counting down to
var d = new Date();
var year = d.getFullYear();
var month = d.getMonth();
var start_day = 15;
var hour = 0;
var min = 0;
var sec = 0;
var end_day = 26;

var lastday = function(y,m){
  return  new Date(y, m +1, 0).getDate();
  }
  
  var last_day = lastday(year,month);

// Set the date we're counting down to
var start_date = new Date(year,month,start_day,hour,min,sec);
var start_next_date = new Date(year,month+1,start_day,hour,min,sec);
var end_month = new Date(year,month,last_day,hour,min,sec);
var end_date = new Date(year,month,end_day,hour,min,sec);


var countDownDate = start_date.getTime();

var closedDownDate = end_date.getTime();

var last_month = end_month.getTime();

var next_start = start_next_date.getTime();



// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    var distance2 = closedDownDate - now;
  

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in an element with id="demo" 
  $('#counter2').html("<div class='col-md-3 numbers text-info'>" + days + "<p class='time'> يوم </p></div>" + "<div class='col-md-3 numbers text-info'>" + hours + "<p class='time'> ساعة </p></div>" + "<div class='col-md-3 numbers text-info'>" + minutes + "<p class='time'> دقيقة </p></div>" + "<div class='col-md-3 numbers text-info'>" + seconds + "<p class='time'> ثانية </p></div>");
     

  // If the count down is finished 
  if (distance < 0 ) {
    clearInterval(x); 
  } 

}, 1000);


var z = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  var distance2 = closedDownDate - now;

  var distance3 = last_month - now;
  var distance4 = next_start - now;

// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance4 / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance4 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance4 % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance4 % (1000 * 60)) / 1000);

  
// Display the result in an element with id="demo" 
$('#counter').html("<div class='col-md-3 numbers text-info'>" + days + "<p class='time'> يوم </p></div>" +
    "<div class='col-md-3 numbers text-info'>" + hours + "<p class='time'> ساعة </p></div>" +
    "<div class='col-md-3 numbers text-info'>" + minutes + "<p class='time'> دقيقة </p></div>" +
    "<div class='col-md-3 numbers text-info'>" + seconds + "<p class='time'> ثانية </p></div>");
   

//If the count down is finished 
if (distance4 < 0) {
  clearInterval(z); 
} 

}, 1000);



});