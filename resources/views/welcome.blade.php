<!DOCTYPE html>
<html>
<head>
<title>VaultX</title>

<style>

body{
    margin:0;
    font-family: Arial, sans-serif;
}

/* HERO SECTION */

.hero{
    background-image:url("/img/lock.jpg");
    background-size:cover;
    background-position:center;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:white;
    position:relative;
}

/* DARK OVERLAY */

.hero::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.55);
}

/* CONTENT */

.content{
    position:relative;
    z-index:2;
}

h1{
    font-size:50px;
    margin-bottom:10px;
}

p{
    font-size:20px;
    margin-bottom:30px;
}

/* BUTTONS */

a{
    padding:12px 25px;
    text-decoration:none;
    color:white;
    border-radius:6px;
    margin:10px;
    font-weight:bold;
}

.login{
    background:#4CAF50;
}

.register{
    background:#2196F3;
}

a:hover{
    opacity:0.9;
}

/* SECOND SECTION (SCROLL AREA) */

.section{
    padding:80px;
    text-align:center;
    color: white;
    background:black;
}

</style>

</head>

<body>

<!-- HERO SECTION -->

<div class="hero">

    <div class="content">

        <h1>Welcome to VaultX</h1>

        <p>Securely store your encrypted images</p>

        <a class="login" href="/login">Login</a>

        <a class="register" href="/register">Register</a>

    </div>

</div>

<!-- SCROLL SECTION -->

<div class="section">

<h2>Secure Image Vault</h2>

<p>
Upload images, encrypt them, and access them securely.
Only you can view your stored images.
</p>

</div>

</body>
</html>
