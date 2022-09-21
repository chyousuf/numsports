<!--?php
// Program to display current page URL.
  
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . 
                dirname($_SERVER['PHP_SELF']);
  

?-->
<!--Footer Start-->
<footer class="design_2">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-left-none md-padding-left-none sm-padding-left-15 xs-padding-left-15">
        <h4>Services</h4>

        <ul class="serv-footer">
          <li><a href="ceramicpro-inner">Ceramic Pro</a></li>
          <li><a href="paint-protection-film">Paint Protection Film</a></li>
          <li><a href="auto-detailing">Auto Detailing</a></li>
          <li><a href="chrome-delete-protection">Chrome Delete</a></li>
          <li><a href="calipers-paint">Caliper Paint</a></li>
          <li><a href="window-tinting">Window Tinting</a></li>
          <li><a href="powder-coating-wheels">Powder Coating Wheels</a></li>
          <li><a href="sitemap">Sitemap</a></li>
        </ul>

      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <h4>Contact us</h4>
        <div class="footer-contact">
          <ul>
            <li><i class="fa fa-phone"></i> <strong>Phone:</strong><a href="tel:5106573224">510-657-3224</a></li>
            <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong><a href="mailto:info@mumsports.com">info@mumsports.com</a></li>
            <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> <a target="_blank" href="https://www.google.com/maps/place/Mum+Sports/@37.5157927,-121.9814993,17z/data=!3m1!4b1!4m5!3m4!1s0x808fc74fa7a050b7:0xba488061f4df6e47!8m2!3d37.5157927!4d-121.9793106">MUM Sports 41431 Albrae Street, Fremont, CA</a> </li>
          </ul>

          <a target="_blank" href="https://www.google.com/maps/place/Mum+Sports/@37.5157927,-121.9814993,17z/data=!3m1!4b1!4m5!3m4!1s0x808fc74fa7a050b7:0xba488061f4df6e47!8m2!3d37.5157927!4d-121.9793106" rel="noopener"><img src="images/GoogleMaps.png" class="map-icon" alt="map-icon"></a>

        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-right-none md-padding-right-none sm-padding-right-15 xs-padding-right-15">
        <h4>Social Links</h4>
        <ul class="social margin-bottom-25 md-margin-bottom-25 sm-margin-bottom-20 xs-margin-bottom-20 xs-padding-top-10 clearfix pull-left">
          <li><a class="sc-1" href="https://web.facebook.com/mumsport?_rdc=1&_rdr" target="_blank"></a></li>
          <li><a class="sc-2" href="https://twitter.com/mumsports" target="_blank"></a></li>
          <li><a class="sc-3" href="https://www.youtube.com/channel/UCryIGiNzRG2SRXhZOB3Vlyg" target="_blank"></a></li>
          <li><a class="sc-10" href="https://www.pinterest.com/mumsports/" target="_blank"></a></li>
          <li><a class="sc-4" href="https://www.instagram.com/mumsports/" target="_blank"></a></li>
          <li><a class="sc-5" href="https://www.yelp.com/biz/mum-sports-fremont-2" target="_blank"></a></li>
        </ul>
        <br style="clear:both;">
        <p>Designed by <a href="http://www.remoteface.com/" target="_blank" rel="noopener">Remoteface</a></p>

      </div>
    </div>
  </div>
</footer>


<div class="clearfix"></div>
<section class="copyright-wrap padding-bottom-10">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <p>&copy; 2022 All Rights Reserved.</p>
      </div>
    </div>
  </div>
</section>

<ul class="social social-floating">
  <li><a class="sc-1" href="https://web.facebook.com/mumsport?_rdc=1&amp;_rdr" target="_blank"></a></li>
  <li><a class="sc-2" href="https://twitter.com/mumsports" target="_blank"></a></li>
  <li><a class="sc-3" href="https://www.youtube.com/channel/UCryIGiNzRG2SRXhZOB3Vlyg" target="_blank"></a></li>
  <li><a class="sc-10" href="https://www.pinterest.com/mumsports/" target="_blank"></a></li>
  <li><a class="sc-4" href="https://www.instagram.com/mumsports/" target="_blank"></a></li>
  <li><a class="sc-5" href="https://www.yelp.com/biz/mum-sports-fremont-2" target="_blank"></a></li>
</ul>


<div class="back_to_top"> <img src="images/arrow-up.png" alt="scroll up" /> </div>
<!-- Bootstrap core JavaScript -->

<script type="text/javascript" src="js/jquery.parallax.js"></script>
<script src="js/modernizr.custom.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script src="js/jquery.mixitup.min.js" type="text/javascript"></script>
<!-- <script src="js/retina.js"></script>  -->
<script src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script src="js/modernizr.custom.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script src="js/jquery.bxslider.js" type="text/javascript"></script>
<script src="js/jquery.selectbox-0.2.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>



<script>
  $(document).ready(function() {
    $("#covidLongBar").show();
    $("#covidClose").click(function() {
      $("#covidLongBar").hide();
    });
  });
</script>

<div id="covidLongBar" class="text-center">
  <span id="covidClose">X</span>
  <p>During COVID-19 Crises, we are working with appointment only</p> <a class="schedule-popup-btn" href="covid-crises">Schedule Now!</a>
</div>

<div class="back_to_top"> <img src="images/arrow-up.png" alt="scroll up" /> </div>
<?php
if (basename($_SERVER["SCRIPT_FILENAME"], '.php') != 'index') {
?>
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<?php
}
?>
<script>
  $(function() {
    $('.bxslider').bxSlider({
      mode: 'fade',
      captions: true,
      dots: false,
      slideWidth: 600
    });
  });
</script>
<style>
  .bx-pager {
    display: none;
  }
</style>
<?php
if (basename($_SERVER["SCRIPT_FILENAME"], '.php') != 'index') {
?>
  <script type="application/javascript">
    jQuery(document).ready(function() {

      $(document).on("submit", "#frmEmailService", function(e) {
        e.preventDefault();

        myForm = document.getElementById('frmEmailService');
        showLoader();
        //jQuery('.ajax-loader').css('display', 'block');
        var isFormValid = false;
        var focusInvalidField = false;
        var requiredFields = ['name', 'email', 'phone', 'model', 'make', 'year'];
        areValidFields(requiredFields);
        if (!window['isFormValid']) {
          showMessage('');
          return false;
        }

        /*var googleResponse = jQuery('#g-recaptcha-response').val();
    if (googleResponse == '') {
      showMessage("error", "Please verify that you are not a robot.");
      return false;
  }*/
        // var googleResponse2 = grecaptcha.getResponse(widgetId1);
        // if(googleResponse2.length == 0){
        //   showMessage("error", "Please verify that you are not a robot.");
        //   return false;
        // }
        $.post("sendmail-covid", $("#frmEmailService").serialize(),
          function(data) {
            if (data.email_check == 'OK') {
              showMessage('success', 'Your message has been sent!');
              //jQuery('.ajax-loader').css('display', 'none');
              myForm.reset();
              //grecaptcha.reset();
              //window.location.href = 'thanks'; 
            } else {
              showMessage('error', data.email_check);
            }
          }, "json");
        return false;
      });

      function areValidFields(requiredFields) {
        requiredFields.forEach(function(id, index) {
          if (id == "email") {
            if (jQuery('#' + id).val() == "" || !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(jQuery('#' + id).val()))) {
              showInvalidField(id);
            } else {
              showValidField(id);
            }
          } else {
            if (jQuery('#' + id).val() == "") {
              showInvalidField(id);
            } else {
              showValidField(id);
            }
          }
        })
      }

      function showMessage(type = '', str) {
        if (str != "") {
          hideLoader();
          if (type == 'error') {
            divMessage('error', str)
          } else if (type == 'success') {
            divMessage('success', str)
          }
          //clearTimeout(errorMessage);
          //errorMessage = setTimeout(function(){ divMessage('') }, 7000);
        } else {
          hideLoader();
          divMessage('');
        }
      }

      function showInvalidField(id, css = true) {
        hideLoader();
        if (css) {
          jQuery('#' + id).css('border-bottom', '3px solid #d12435');
        }
        if (!window['focusInvalidField'])
          jQuery('#' + id).focus();
        window['isFormValid'] = false;
        window['focusInvalidField'] = true;
      }
      showValidField = function(id, css = true) {
        if (css) {
          jQuery('#' + id).css('border-bottom', '1px solid #DFB6E3');
        }
        window['isFormValid'] = true;
        window['focusInvalidField'] = false;
      }

      function divMessage(type, str) {
        jQuery('.form-response-output').html('');
        if (str != '') {
          if (type == "error")
            jQuery('.form-response-output').html('<div class="alert alert-danger" role="alert">' + str + '</div>');
          else if (type == "success")
            jQuery('.form-response-output').html('<div class="alert alert-success" role="alert">' + str + '</div>');
        }
      }

      function showLoader(str) {
        jQuery('.ajax-loader').css('visibility', 'visible');
      }

      function hideLoader(str) {
        jQuery('.ajax-loader').css('visibility', 'hidden');
      }

      $('#appointmentForm').on('submit', function(e) {
        var formData = $('#appointmentForm').serialize();
        e.preventDefault();
        var isFormValid = false;
        var focusInvalidField = false;
        var requiredFields = ['name', 'email', 'phone', 'model', 'make', 'year'];
        areValidFields(requiredFields);
        if (!window['isFormValid']) {
          showMessage('');
          return false;
        }
        if (areValidFields) {
          var gResponse = grecaptcha.getResponse(0);
          if (gResponse == '') {
            alert('Please fill captcha');
            return false;
          }

          $("#submit_btn").attr("disabled", true);
          $("#submit_btn").val("PROCESSING...");

          $.ajax({
            type: 'post',
            url: 'sendgrid/schedule-form', //forms/.php
            data: formData,
            success: function(res) {
              var json_data = JSON.parse(res);
              //console.log(res);
              if (json_data.status == 'success') {
                window.location.href = 'thank-you'; //.php

              } else if (json_data.status == 'fail') {
                alert(res.msg);
                $("#submit_btn").attr("disabled", false);
                $("#submit_btn").val("SUBMIT");
                return false;
              }

            },
            error: function(res) {
              alert('Oooops, Error is occured.');
              $("#submit_btn").attr("disabled", false);
              $("#submit_btn").val("SUBMIT");
              return false;
            }
          });
        }

      });

      $('#contactUsForm').on('submit', function(e) {
        var formData = $('#contactUsForm').serialize();
        e.preventDefault();
        var isFormValid = false;
        var focusInvalidField = false;
        var requiredFields = ['name', 'email', 'phone', 'model', 'make', 'year'];
        areValidFields(requiredFields);
        if (!window['isFormValid']) {
          showMessage('');
          return false;
        }
        if (areValidFields) {

          var gResponse = grecaptcha.getResponse(0);
          if (gResponse == '') {
            alert('Please fill captcha');
            return false;
          }

          $("#submit_btn").attr("disabled", true);

          $("#submit_btn").val("PROCESSING...");


          $.ajax({
            type: 'post',
            url: 'sendgrid/contact-us-form', //forms/.php //
            data: formData,
            success: function(res) {
              var json_data = JSON.parse(res);
              //console.log(res);
              if (json_data.status == 'success') {
                window.location.href = 'thank-you'; //.php
              } else if (json_data.status == 'fail') {
                alert(res.msg);
                $("#submit_btn").attr("disabled", false);
                $("#submit_btn").val("SUBMIT");
                return false;
              }

            },
            error: function(res) {
              alert('Oooops, Error is occured.');
              $("#submit_btn").attr("disabled", false);
              $("#submit_btn").val("SUBMIT");
              return false;
            }
          });

        }

      });


      $('#cartForm').on('submit', function(e) {
        var formData = $('#cartForm').serialize();
        e.preventDefault();
        var isFormValid = false;
        var focusInvalidField = false;
        var requiredFields = ['firstname', 'lastname', 'email', 'phone', 'model', 'make', 'year'];
        areValidFields(requiredFields);
        if (!window['isFormValid']) {
          showMessage('');
          return false;
        }
        if (areValidFields) {

          var gResponse = grecaptcha.getResponse(0);
          if (gResponse == '') {
            alert('Please fill captcha');
            return false;
          }

          $("#submit_btn").attr("disabled", true);

          $("#submit_btn").val("PROCESSING...");


          $.ajax({
            type: 'post',
            url: 'sendgrid/cart-form', //forms/.php //
            data: formData,
            success: function(res) {
              var json_data = JSON.parse(res);
              //console.log(res);
              if (json_data.status == 'success') {
                window.location.href = 'thank-you'; //.php
              } else if (json_data.status == 'fail') {
                alert(res.msg);
                $("#submit_btn").attr("disabled", false);
                $("#submit_btn").val("SUBMIT");
                return false;
              }

            },
            error: function(res) {
              alert('Oooops, Error is occured.');
              $("#submit_btn").attr("disabled", false);
              $("#submit_btn").val("SUBMIT");
              return false;
            }
          });

        }

      });



    });
  </script>
<?php
}
?>
</body>

</html>