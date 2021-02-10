<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<style>  
      
	.l_c_h {
		width:300px;
		position:fixed;
		bottom:0;
		right:0px;
		background:#fff;
		border-radius:3px;
		z-index:5000;
						display:block;
					}
	.l_c_h .c_h {
		cursor:pointer;
		border-radius:0px;
				/*background:#c61432;*/
        background: #2dc3e8;
				line-height: 34px;
	}
	.l_c_h .left_c {
		color:#ebebeb;
		width:150px;
		font-size:16px;
		font-family:Arial, Helvetica, sans-serif;
	}
	.l_c_h .right_c {
		text-align:center;
		/*background:#DE4A4A;*/
    background:#ff8f32;
		line-height: 36px;
	}
	.l_c_h .right_c  a {
		color:#ebebeb;
		border-radius: 3px;
		box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset, 0 1px 2px rgba(0, 0, 0, 0.05) !important;
		cursor: pointer !important;
		font-size: 16px;
		line-height: normal !important;
		margin-top: 0 !important;
		padding: 1px 0px !important;
		text-align: center !important;
		text-decoration:none;
		font-weight:600;
	}
	.clear {
		clear:both;
	}
	.chat_container {
		  /*		display:none;*/
		  padding:5px 26px;
         }
	.chat_container .no_provider {
		text-align:left;
		color:#5E5652;
		font-size:12px;
		width:300px;
		padding:5px;
		font-family:Arial, Helvetica, sans-serif;
		margin-left:5px;
	}
	.chat_container .footer_c {
		text-align:left;
		color:#5E5652;
		font-size:12px;
		margin-left:10px;
		margin-bottom:10px;
		font-family:Arial, Helvetica, sans-serif;
	}
	.chat_container .footer_c a {
		text-decoration:underline;
		color:#777;
		font-size:11px;
	}
	.chat_container .chat_entry {
		margin:10px;
		margin-top:0px;
	}
	.chat_container .chat_entry p {
		margin-top:10px;
		margin-bottom:10px;
	}
	.chat_container .chat_entry h4 {
		text-align:left;
		color:#1A1A1A;
		font-weight:400;
		font-size:16px;
		margin-top:0px;
	}
	.chat_container .chat_entry input[type="text"] {
		background-color: #fff;
		background-image: none;
		border: 1px solid #ccc;
		border-radius:2px;
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
		color: #999;
		font-size: 13px;
		padding: 8px 8px;
		margin-bottom:5px;
		transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
		width:100%;
 /* 	height:30px; */ 
		font-family:Arial, Helvetica, sans-serif;
	}
	.chat_container .chat_entry input[type="text"]:focus {
		box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(102, 175, 233, 0.6);
		-webkit-box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(102, 175, 233, 0.6);
		-moz-box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(102, 175, 233, 0.6);
		outline:0 none;
		border-color:#66afe9;
	}
	.chat_container .chat_entry input[type="submit"]{
		padding: 5px 12px;
		margin-bottom: 0;
		font-size: 12px;
		font-weight: normal;
		text-align: center;
		vertical-align: middle;
		-ms-touch-action: manipulation;
		touch-action: manipulation;
		cursor: pointer;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		background-image: none;
		border: 1px solid transparent;
		border-radius:0px;
		color: #fff;
		/*background-color: #DD4A4A;*/
    background-color: #2dc3e8 !important;
		font-family:Arial, Helvetica, sans-serif;    
	}
	.chat_container .chat_entry input[type="submit"]:hover {
		background-color: #C64545;
	}
	.form-error {
		display:none;
	}
	.chat_message {
		height:250px;
		overflow-y:scroll;
		padding:10px;
		border-bottom:1px solid #222222;
		padding-top:10px;
	}
	.chat_message .message_contain {
		margin:5px;
		background:#FCF8E2;
		padding:5px;
	}
	.chat_message .user_message {
		background:#F5F5F5;
	}
	.chat_message .message_contain  .header_image {
		float:left;
		width:50px;
		margin-top:0px;
		margin-bottom:0px;
	}
	.chat_message .message_contain .chat_mess {
		font-size:13px;
		color:#444444;
		margin-top:0px;
	}
	.chat_message .message_contain .chat_date {
		color:#777;
		font-size:11px;
		margin-top:0px;
		margin-bottom:0px;
	}
	.chat_text_area {
		margin:5px;
	}
	.chat_text_area .messag_send {
		width:100%;
		resize:none;
		background-color: #fff;
		background-image: none;
		border: 1px solid #ccc;
		border-radius: 2px;
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
		color: #555;
		padding:5px;
		font-size:13px;
		height:35px;
	}
	.chat_text_area .messag_send:focus {
		box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(102, 175, 233, 0.6);
		-moz-box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(102, 175, 233, 0.6);
		-webkit-box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(102, 175, 233, 0.6);
		outline:0 none;
		border-color:#66afe9;
	}
	.left{
		float:left;
	}
	.right{
		float:right;
	}
	.left_icons{
		width:35px;
		height:auto;
		text-align:center;
		color:#999;
		/*background:#DE4A4A;*/
        background: #ff8f32;
		font-size:15px;
	}
	.left_icons a{
		color:#fff;
		font-weight:normal;
	}
	.center_icons{
		text-align:center;
		padding:2px 0px 0px 5px;
	}
	.logout img{
		margin-top:8px;
	}
      
      
      .float1{
	position:fixed;
	width:165px;
	height:60px;
	bottom:40px;
	right:220px;
	left:1px;
	background-color:white;
	color:#FFF;
	border-radius:50px;
	
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
     
  border: none;
  color: black;
 

  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.my-float1{
	margin-top:16px;
}
      .float2{
	position:fixed;
	width:155px;
	height:60px;
	bottom:40px;
	right:15px;
	background-color:white;
	color:#FFF;
	border-radius:50px;
	
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
     
  border: none;
  color: black;
 

  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.my-float2{
	margin-top:16px;
}
      

.button4 {border-radius: 12px;}

          </style>
 <footer>

        <div class="centered ">
            <div class="footer-logo ">
                <a href="# ">
                    <img class="logo " src="img/Hostelspaze2.png "></a>
                <div class="social ">
                    <a href="https://www.facebook.com/ ">
                        <svg viewBox="0 0 33 33 "><g><path d="M 17.996,32L 12,32 L 12,16 l-4,0 l0-5.514 l 4-0.002l-0.006-3.248C 11.993,2.737, 13.213,0, 18.512,0l 4.412,0 l0,5.515 l-2.757,0 c-2.063,0-2.163,0.77-2.163,2.209l-0.008,2.76l 4.959,0 l-0.585,5.514L
                            18,16L 17.996,32z "></path></g></svg>
                    </a>
                    <a href="https://www.instagram.com/">
                        <svg viewBox="0 0 551.034 551.034"><g><path class="" fill="#E5E5E5" d="M386.878,0H164.156C73.64,0,0,73.64,0,164.156v222.722 c0,90.516,73.64,164.156,164.156,164.156h222.722c90.516,0,164.156-73.64,164.156-164.156V164.156 C551.033,73.64,477.393,0,386.878,0z M495.6,386.878c0,60.045-48.677,108.722-108.722,108.722H164.156 c-60.045,0-108.722-48.677-108.722-108.722V164.156c0-60.046,48.677-108.722,108.722-108.722h222.722 c60.045,0,108.722,48.676,108.722,108.722L495.6,386.878L495.6,386.878z"/>
	
                            <path id="XMLID_81_" fill="#555" d="M275.517,133C196.933,133,133,196.933,133,275.516 s63.933,142.517,142.517,142.517S418.034,354.1,418.034,275.516S354.101,133,275.517,133z M275.517,362.6 c-48.095,0-87.083-38.988-87.083-87.083s38.989-87.083,87.083-87.083c48.095,0,87.083,38.988,87.083,87.083 C362.6,323.611,323.611,362.6,275.517,362.6z"/>
                            <circle id="XMLID_83_" fill="#555" cx="418.306" cy="134.072" r="34.149"/></svg></a>
                    <a href="https://www.linkedin.com/ " class="linkedin ">
                        <svg viewBox="0 0 512 512 "><g><path d="M186.4 142.4c0 19-15.3 34.5-34.2 34.5 -18.9 0-34.2-15.4-34.2-34.5 0-19 15.3-34.5 34.2-34.5C171.1 107.9 186.4 123.4 186.4 142.4zM181.4 201.3h-57.8V388.1h57.8V201.3zM273.8 201.3h-55.4V388.1h55.4c0
                            0 0-69.3 0-98 0-26.3 12.1-41.9 35.2-41.9 21.3 0 31.5 15 31.5 41.9 0 26.9 0 98 0 98h57.5c0 0 0-68.2 0-118.3 0-50-28.3-74.2-68-74.2 -39.6 0-56.3 30.9-56.3 30.9v-25.2H273.8z "></path></g></svg>
                        </a></a>
                        </div>
            </div>
            <div class="footer-contact ">
                <h3>Contact</h3>
                <p><a href="mailto: "><i class="fa fa-fw fa-envelope-open-o"></i> bhanu@hostelspaze.com</a></p>
                <p><a href="tel: "><i class="fa fa-fw fa-phone"></i>9620713899</a></p>
                <p><i class="fa fa-fw fa-map-marker"></i>victory layout, <br />Bengaluru,Karnataka</p>
            </div>
            <div class="footer-contact">
                <h3>Quick Links</h3>
                <p><a href="#">About Us</a></p>
                <p><a href="#">Team</a></p>
                <p><a href="#">FAQ<sub>s</sub></a></p>
                <p><a href="#">Contact Us</a></p>
                <p><a href="#">Refer and Earn</a></p>
            </div>
            <div class="footer-navigation ">
                <div class="footer-links-holder ">
                    <h3></h3>
                    <ul class="footer-links ">

                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>


                    </ul>
                </div>

                <div class="footer-links-holder ">
                    <h3>
                    </h3>
                    <ul class="footer-links ">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="footer-links-holder ">
                    <h3>location</h3>
                    <ul class="footer-links ">
                        <li>London</li>
                        <li>Singapore</li>
                        <li>Malaysia</li>
                        <li>Austria</li>
                        <li>Scotland</li>
                    </ul>
                </div>
            </div>
        </div>

       <div class="bottom-bar ">
            All Rights Reserved © 2020 HostelSpaze | <a href=" ">Privacy Policy</a> | <a href=" ">Terms of Service</a>
    
           <div class="l_c_h">
	<div class="c_h">
    	<div class="left_c">
            <div class="left right_c left_icons">
                   <a href="#" class="mini" style="font-size:23px;">+</a>
            </div>
            <div class="left center_icons"><!--center_icons-->
                 Live help!
            </div><!--end center_icons-->        	
        </div>
        <div class="right right_c" style="width:35px;">
        	<a href="#" class="logout" title="End chat" name="" style="display:none;"><img src="chat/logout.png"></a>        	
        </div>
        <div class="clear"></div>
    </div>
    <div class="chat_container" style="display: none;">
    <p class="no_provider">
         
        
            </p>
    
	<div class="chat_message" style="display: none;">
    <input type="hidden" class="my_user" value="">
    	    </div>
		<div class="chat_text_area" style="display:none;">
        	<textarea name="messag_send" class="messag_send" id="messag_send" placeholder="Enter Your Message and press CTRL"></textarea>
        </div>
    	<div class="chat_entry">
        	   <a href="https://api.whatsapp.com/send?phone=+919620713899&text=Hello how can help you." class="float2" target="_blank">
            <button  class="float2" class="button4"><img style="height:30px;width:30px;" target="_blank" src="whatsapp/what.png" alt=" " /> Chat with us</button></a>

         
           
            <a href="#" class="float1" target="_blank" style=" margin-bottom: 65px;">
            <button  class="float1" class="button4" style=" margin-bottom: 65px;"><i  style="font-size: 20px;" class="  icon-book"></i> Pre-Book Now</button></a>

        </div>
    	
        
    </div>
</div>
           <script type="text/javascript">/*$(document).ready(function(e) {
    var t = "socket.io",
        n = "8080",
        r = "localhost",
        i = "localhost/";
    var s = ("https:" == document.location.protocol ? "https://" : "http://") + i;
$.when(
    $.getScript( "/mypath/myscript1.js" ),
    $.getScript( "/mypath/myscript2.js" ),
    $.getScript( "/mypath/myscript3.js" ),
    $.Deferred(function( deferred ){
        $( deferred.resolve );
    })
).done(function(){

    //place your code here, the scripts are all loaded

});
    $.getScript("https://" + r + ":" + n + "/" + t + "/" + t + ".js", function() {
       
        $(".chat_message").animate({
            scrollTop: $(".chat_message").outerHeight() + 1e7
        }, 1e3);
        var e = $(".id").val();
        var t = $(".my_user").val();
        var i = io.connect("https://" + r + ":" + n);
        var s = "id=" + e;
        $.ajax({
            type: "POST",
            url: name + "chat/login_check.php",
            data: s,
            success: function(e) {
                if (e != "") {
                    i.emit("new_chat_js_user_enter", e)
                }
            }
        });
        $.validate({
            form: "#chat_form",
            onSuccess: function() {
                var e = $("#chat_form").serialize();
                $.ajax({
                    type: "POST",
                    url: name + "chat/login_user.php",
                    data: e,
                    success: function(e) {
                        var t = e.split("-");
                        $(".my_user").val(t[1]);
                        $(".logout").attr("name", e);
                        $(".chat_form")[0].reset();
                        $(".logout").show();
                        $(".chat_message").show();
                        $(".chat_text_area").show();
                        $(".chat_entry").hide();
                        i.emit("new_chat_js_user_enter", e)
                    }
                })
            }
        });
        i.on("admin_chat_status_update", function(t) {
            var n = t.user_id;
            var r = t.status;
            if (n == e) {
                if (r == "1") {
                    $(".no_provider").text("Operator Joined the Chat.")
                } else {
                    $(".no_provider").text("Sorry, no operators are currently available")
                }
            }
        });
        i.on("admin_message_emit_update", function(e) {
            var t = e.from_id;
            var n = e.to_id;
            var r = "from_id=" + t + "&to_id=" + n;
            $.ajax({
                type: "POST",
                url: name + "chat/get_last_message.php",
                data: r,
                success: function(e) {
                    $(".chat_message").append(e);
                    $(".chat_message div:last-child").hide().fadeIn("slow");
                    $(".chat_message").animate({
                        scrollTop: $(".chat_message").outerHeight() + 1e8
                    }, 1e3)
                }
            })
        });
        $(".messag_send").keypress(function(e) {
            if (e.which == 13) {
                var t = $(".id").val();
                var n = $(".my_user").val();
                var r = $(this).val();
                var s = $(this).val().replace(/(^[\s]+|[\s]+$)/g, "");
                var o = "message=" + r + "&id=" + t;
                if (s != "") {
                    $(".messag_send").val("");
                    $.ajax({
                        type: "POST",
                        url: name + "chat/message_send.php",
                        data: o,
                        success: function(e) {
                            i.emit("user_message_emit", {
                                from_id: n,
                                to_id: t
                            });
                            $(".chat_message").append(e);
                            $(".chat_message div:last-child").hide().fadeIn("slow");
                            $(".chat_message").animate({
                                scrollTop: $(".chat_message").outerHeight() + 1e8
                            }, 1e3)
                        }
                    })
                }
                return false
            }
        });
        $(".logout").click(function(e) {
            var t = $(this).attr("name");
            i.emit("user_left_chat", t);
            $.ajax({
                type: "POST",
                url: name + "chat/user_logout.php",
                success: function(e) {
                    $(".chat_message").text("");
                    $(".logout").hide();
                    $(".chat_message").hide();
                    $(".chat_text_area").hide();
                    $(".chat_entry").show();
                    $(".my_user").val("");
                    $(".logout").attr("name", "")
                }
            });
            return false
        })
    })
});
*/
$(function(){
   $(".c_h").click(function(e) {
            if ($(".chat_container").is(":visible")) {
                $(".c_h .right_c .mini").text("+")
            } else {
                $(".c_h .right_c .mini").text("-")
            }
            $(".chat_container").slideToggle("slow");
            return false
        });
});</script>
           
          
            </div>
    </footer>
    
    <script src="js/jquery-min.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/footer.js "></script>
