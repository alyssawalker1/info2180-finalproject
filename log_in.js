window.onload=function(){
    var username=document.getElementById("email");
    var password=document.getElementById("password");
    var login_button=document.getElementById("Login");
    console.log(username);
    console.log(password);
    console.log(login_button);

    login_button.addEventListener("click",function(x){
        x.preventDefault();
        var uname=username.value;
        var passw=password.value;
        if(uname=="admin@project2.com"&& passw=="password123")
        {
            alert("login successfully");
            window.open("home.html");
        } 
});

}