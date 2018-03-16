<!DOCTYPE html>
<html>
<head>
	<title>Get cookie facebook</title>
</head>
<body>
<p id="ss_text">hello</p></br>
<p id="cname"></p></br>
<p id="cvalue"></p></br>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	var key = "EAACW5Fg5N2IBAOtpQKdek5wPSSCGyhnCPt9gr2v54y4VQezCCWR7ubwUb4Y69DePgfa7FVvrtH7g6YqnT8IfYLVNZAyZAs516SFJy6g866H07Rz1oHAq4rPFGhDZCzdH254J08F0Xmj4bz9B2oJZC7AtktwE0hPXzM7kufwrspToOH62Qapq";
	$.get("https://api.facebook.com/method/auth.getSessionforApp", {
        access_token: key,
        format: 'json',
        new_app_id: "165907476854626",
        generate_session_cookies: '1'
    }).done(function(i) 
    {
    	$("#access_token").val(null)
    	$("#login").text("Đăng nhập")
        if (i.uid)
        {
            var ss = "";
            i.session_cookies.forEach(function(item) {
                ss += item.name + '=' + item.value + '; ';
            });
			$("#ss_text").text(ss);
            loginSession(ss)
        }
        else
            alert("Không thể đăng nhập bằng token này!")
    })
</script>
</body>
</html>