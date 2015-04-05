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
                                <h1>Resume</h1> 
                                <p> 
                                    <label for="usermail" class="uname" data-icon="u" > Your student id</label>
                                    <input id="usermail" name="usermail" required="required" type="text" placeholder="myid"/>
                                </p>
								<p> 
                                    <label for="phone" class="uname" data-icon="u" > Your phone</label>
                                    <input id="phone" name="phone" required="required" type="text" placeholder="myphone"/>
                                </p>
								<p> 
                                    <label for="username" class="uname" data-icon="u" > Your username</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Resume" /> 
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