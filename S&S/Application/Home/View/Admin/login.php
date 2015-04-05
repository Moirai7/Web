<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title> Shop & Share </title>
    <link rel="stylesheet" type="text/css" href=__PUBLIC__/css/style.css />
	<link rel="stylesheet" type="text/css" href=__PUBLIC__/css/demo.css />
    <link rel="stylesheet" type="text/css" href=__PUBLIC__/css/login.css />
	<link rel="stylesheet" type="text/css" href=__PUBLIC__/css/animate-custom.css />
	<script type="text/javascript" src=__PUBLIC__/js/jquery-1.11.1.min.js></script>
	<script type="text/javascript" src=__PUBLIC__/js/Validform_v5.3.2_min.js></script>
	<script type="text/javascript">
	$(function(){
		$(".registerform").Validform();
	})
	</script>
	</script>
</head>
<body>
<div class="container">
			<header>
                <h1>SHOP AND SHARE </h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="submit" method="get"  autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="usermail" class="uname" data-icon="u" > Your student id</label>
                                    <input id="usermail" name="usermail" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="joinus" method="get"  autocomplete="on" class="registerform">
                            
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690"/>
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" >  Your student id</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="text" placeholder="your student id"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="~15 datatype="*6-15" />
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO" datatype="*" recheck="passwordsignup">
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
 </div>
<div style="text-align:center;clear:both">
</div>
</body>
</html>