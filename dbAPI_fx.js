function show_hide() {
  var login = document.getElementById("login_block1");
  var signup = document.getElementById("login_block2");
  var copyright = document.getElementById("login_copyright");

  if (login.style.display === "none") {
      login.style.display = "block";  //lonin出現
      document.getElementById("username").value="";
      document.getElementById("password").value="";
      signup.style.display = "none";  //signup消失
      copyright.style.margin = "200px 0px 0px 0px";
  } else {
      login.style.display = "none";   //login消失
      signup.style.display = "block"; //signup出現
      signup.style.visibility="visible";
      copyright.style.margin = "200px 0px 0px 0px";
   
      document.getElementById("fullname").value="";
      document.getElementById("username2").value="";
      document.getElementById("password2").value="";
      document.getElementById("comfirm_password").value="";
  }
}