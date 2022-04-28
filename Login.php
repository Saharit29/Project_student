<style>
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: url(https://images.pexels.com/photos/52608/pexels-photo-52608.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    background-size: cover;
    margin: 0;
    padding: 0;
    
}
.login-box{
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50% ,-50%);
    color: black;
    background-color: white;
    border-radius: 12px;
    
    
}
.login-box h1{
    float:left;
    font-size:40px;
    border-bottom: 6px solid black;
    margin-bottom: 50px;
    padding: 13px 0;

}
.textbox{
    width: 100%;
    margin:8px 0;
    padding:8px 0;
    overflow: hidden;
    font-size: 20px;
    border-bottom:1px solid black ;
    
}
.textbox i{
    width: 26px;
    float: left;
    text-align: center;
    
}
.textbox input{
    outline:none ;
    border: none;
    background: none;
    color: black;
    width: 80%;
    font-size: 18px;
    float: left;
    margin: 0 10px;

}
::-webkit-textbox-input-placeholder{
    color: black;
}
:-ms-textbox-input-placeholder{
    color:black;
}
::placeholder {
    color: black;
}
.btn{
    width: 100%;
    background-color:  #ff0157;
    border: 2px solid #ff0157;
    padding: 8px 0;
    font-size: 20px;
    color: black;
    cursor: pointer;
    margin: 8px 0;
    
}
a {
    color: rgb(255, 0, 0);
}
  
p {
    width: 100%;
    margin:8px 0;
    padding:8px 0;
    overflow: hidden;
    font-size: 16px;
    border-bottom:1px solid white ;
    background-color: #000000;
    text-align: center;
}
.header{
    width: 100%;
    margin:8px 0;
    padding:8px 0;
    overflow: hidden;
    font-size: 20px;
    border-bottom:1px solid white ;
    
}
</style>

    <form action="./Logindata.php" method="post">
    <div class="login-box">
            <div class="imgcontainer">
                <img src="https://campus.campus-star.com/app/uploads/2015/06/%E0%B8%95%E0%B8%A3%E0%B8%B2%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%9A.jpg" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <form action="login.php" method="post">
                <div class="textbox">
                    <label for="username"><b>ชื่อผู้ใช้</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>
            </div>
                <div class="textbox">
                    <label for="password"><b>รหัสผ่าน</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                </div>
                    <button type="submit" name="submit" value="Login">เข้าสู่ระบบ</button>
            </div>
    </div>
    </form> 
