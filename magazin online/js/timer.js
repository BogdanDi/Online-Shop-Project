
var counter = function() {

    // Set the date we're counting down to
    var countDownDate = new Date("Sept 5, 2017 15:37:25").getTime();

    //console.log(zile + "time" + ore + "hour" + minute + "sec" + secunde);
    //console.log(countDownDate);

    var x = setInterval(function() {

      // Get todays date and time
      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
    //console.log(seconds);
      $('.timer_days')[0].innerHTML = days;
      $(".timer_hrs")[0].innerHTML = hours;
      $(".timer_min")[0].innerHTML = minutes;
      $(".timer_sec")[0].innerHTML = seconds;
      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000)

};
var counter2 = function() {

    // Set the date we're counting down to
    var countDownDate = new Date("Oct 5, 2017 15:37:25").getTime();

    //console.log(zile + "time" + ore + "hour" + minute + "sec" + secunde);
    //console.log(countDownDate);

    var x = setInterval(function() {

      // Get todays date and time
      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
    //console.log(seconds);
      $('.timer_days')[1].innerHTML = days;
      $(".timer_hrs")[1].innerHTML = hours;
      $(".timer_min")[1].innerHTML = minutes;
      $(".timer_sec")[1].innerHTML = seconds;
      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000)

};

var counter3 = function() {

    // Set the date we're counting down to
    var countDownDate = new Date("Nov 5, 2017 15:37:25").getTime();

    //console.log(zile + "time" + ore + "hour" + minute + "sec" + secunde);
    //console.log(countDownDate);

    var x = setInterval(function() {

      // Get todays date and time
      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
    //console.log(seconds);
      $('.timer_days')[2].innerHTML = days;
      $(".timer_hrs")[2].innerHTML = hours;
      $(".timer_min")[2].innerHTML = minutes;
      $(".timer_sec")[2].innerHTML = seconds;
      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000)

};
counter();
counter2();
counter3();