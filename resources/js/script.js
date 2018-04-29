$(document).ready(function() {
  $('#project-header').load('../header.html'); 
  $('#footer').load('footer.html');
  $('#project-footer').load('../footer.html');
   
  /* For the sticky navigation */
    $('.js--section-bio').waypoint(function(direction) {
      if (direction == 'down') {
        $('nav').addClass('sticky');
      } else {
        $('nav').removeClass('sticky');
      }
    }, {
        offset: '60px'
      });
 
    
/* scroll on buttons */
    
    $('.js--scroll-to-bio').click(function() {
      $('html, body').animate({scrollTop: $('.js--section-bio').offset().top}, 1000);
    });
    
    $('.js--scroll-to-projects').click(function() {
      $('html, body').animate({scrollTop: $('.js--section-projects').offset().top}, 1000);
    });
    
    
/* Navigation Scroll */

    // Select all links with hashes
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && 
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
    });    
    

    /* Animation on scroll */
    $('.js--wp-1').waypoint(function(direction) {
      $('.js--wp-1').addClass('animated fadeIn');
    }, {
      offset: '50%'
    });    
    
    $('.js--wp-2').waypoint(function(direction) {
      $('.js--wp-2').addClass('animated fadeInUp');
    }, {
      offset: '50%'
    });
    
    /* Mobile Nav */
    
    $('.js--nav-icon').click(function() {
      var icon = $('.js--nav-icon i');
      var nav = $('.js--main-nav');
        
      nav.slideToggle(200);
      if (icon.hasClass('ion-navicon-round')) {
        icon.addClass('ion-close-round');
        icon.removeClass('ion-navicon-round');
      } else {
        icon.addClass('ion-navicon-round');
        icon.removeClass('ion-close-round');
      }
    });    
    
    
    /* PROJECT 1 - TO DO LIST */
    
    function addToList() {
      if ($("#project1-input").val() != "") {
        var taskDescription = $("#project1-input").val();
        $("#list").append(taskItem(taskDescription));
        $("#project1-input").val("");
      } else {
        alert ("you need to write something!");
      }
    };
    
    function deleteFromList() {
      $(this).parent().remove();    
    };
        
        
    function taskItem(value) {
      return '<li contenteditable="true"><input type="checkbox" class="project1-checkbox js--project1-checkbox" contenteditable="false">' + value + '<button class="project1-deleteButton js--project1-deleteButton" contenteditable="false"><i class="ion-close-round"></i></button></li>'
    };
    
    function strikeThrough() {
      $(this).parent().toggleClass('project1-strikeThrough');   
    }
    
    $('.js--project1-addButton').click(addToList);
    $(document).on('click', '.js--project1-deleteButton', deleteFromList);
    $(document).on('change', '.js--project1-checkbox', strikeThrough);

    
    /* PROJECT 2 - LOCALIZED WEATHER API */
    
    var api, kelvin, city, country, weatherType, celcius, fahrenheit, tempswap;
    
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else {
        alert("Geolocation is not supported by this browser.");
      }
    }
    function showPosition(position) {
      api = "https://api.openweathermap.org/data/2.5/weather?lat=" + position.coords.latitude + "&lon=" + position.coords.longitude + "&appid=417adf22fba9a7d51b6505cc7f8086e1";
      $.getJSON(api, function(data){
        $("#city")[0].innerHTML = data.name;
        $("#country")[0].innerHTML = data.sys.country;
        $("#weatherType")[0].innerHTML = data.weather[0].description;
        kelvin = data.main.temp;
        celcius = Math.floor(kelvin - 273.15) + "&#8451";
        fahrenheit = Math.floor(kelvin * 9 / 5 -459.67) + "&#8457";
        $("#showTemp")[0].innerHTML = celcius;
        tempswap = false;
        $("#showTemp").click(function(){
          if (tempswap === false) {
            $("#showTemp")[0].innerHTML = fahrenheit;
            tempswap = true;
          } else {
            $("#showTemp")[0].innerHTML = celcius;
            tempswap = false;
          }
        })
        if (data.weather[0].description === "few clouds") {
          $('#weatherImage').attr('src','http://openweathermap.org/img/w/02d.png'); 
        } else if (data.weather[0].description === "clear sky") {
          $('#weatherImage').attr('src','http://openweathermap.org/img/w/01d.png');
        } else if (data.weather[0].description === "scattered clouds") {
          $('#weatherImage').attr('src','http://openweathermap.org/img/w/03d.png');
        } else if (data.weather[0].description === "broken clouds") {
          $('#weatherImage').attr('src','http://openweathermap.org/img/w/04d.png');
        } else if (data.weather[0].description === "shower rain") {
          $('#weatherImage').attr('src','http://openweathermap.org/img/w/09d.png');
        } else if (data.weather[0].description === "rain") {
          $('#weatherImage').attr('src','http://openweathermap.org/img/w/10d.png');
        } else if (data.weather[0].description === "thunderstorm") {
          $('#weatherImage').attr('src','http://openweathermap.org/img/w/11d.png');
        } else if (data.weather[0].description === "snow") {
          $('#weatherImage').attr('src','http://openweathermap.org/img/w/13d.png');
        } else if (data.weather[0].description === "mist") {
          $('#weatherImage').attr('src','http://openweathermap.org/img/w/50d.png');
        }
      })  
    }
    getLocation();

    
});
