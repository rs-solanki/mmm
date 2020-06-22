<!DOCTYPE html>
<html>
<head>
	<title>Captcha</title>
	<link rel="stylesheet" type="text/css" href="Css/captcha.css">
</head>
<body>
<div class="box">
<div align="center"><img src="Images/mlogo.png">	</div>	
<p class="h">Enter captcha</p>

 <div id="captcha">
 	 <a href="#" class="refresh btn-common">Refresh</a>
                <div class="controls">
                    <input class="user-text btn-common" placeholder="Type here" type="text" />
                    <button class="validate btn-common">
                        <!-- this image should be converted into inline svg -->
                        Login
                    </button>
                    
                        <!-- this image should be converted into inline svg -->
                        <!-- <img src="img/refresh_icon.png" alt="refresh icon"> -->
                       
                   
                </div>
            </div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" defer></script>
    <script src="Js/client_captcha.js" defer></script>
     <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.body.scrollTop; //force css repaint to ensure cssom is ready

        var timeout; //global timout variable that holds reference to timer

        var captcha = new $.Captcha({
            onFailure: function() {

                $(".captcha-chat .wrong").show({
                    duration: 30,
                    done: function() {
                        var that = this;
                        clearTimeout(timeout);
                        $(this).removeClass("shake");
                        $(this).css("animation");
                        //Browser Reflow(repaint?): hacky way to ensure removal of css properties after removeclass
                        $(this).addClass("shake");
                        var time = parseFloat($(this).css("animation-duration")) * 1000;
                        timeout = setTimeout(function() {
                            $(that).removeClass("shake");
                        }, time);
                    }
                });

            },

            onSuccess: function() {
                alert("CORRECT!!!");
            }
        });

        captcha.generate();
    });
    </script>
</body>
</html>