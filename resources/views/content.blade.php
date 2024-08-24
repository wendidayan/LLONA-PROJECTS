
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <style> 
   /* Base Styles */
* {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}

:root {
    --blue: #045d; 
    --blue1-light: hsl(185, 25%, 60%);
    --blue2-light: hsl(185, 30%, 70%);
    --blue3-light: hsl(195, 26%, 50%);
    --gray-700: #4a5568;
    --white: #fff;
    --pink-darker: #c2185b;
    --light-blue: #d0efff;
    --mustard: #edc531;
}

body {
    color: beige;
}

/* Header */
.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 90%;
    padding: 15px 5%; 
    display: flex;
    justify-content: space-between;
    z-index: 75;
    background: transparent; /* Ensure header is over content */
    background:var(--blue1-light);
    border-bottom: 2px solid var(--blue1-light);
    border-bottom-left-radius: 30px; /* Rounded corners at the bottom */
    border-bottom-right-radius: 30px; /* Rounded corners at the bottom */
    overflow: hidden; /* Ensures no content overflows the rounded corners */
    
}

.logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: var(--mustard);
    text-decoration: none;
   
}

.navbar {
    margin-left: auto;
    display: flex;
    align-items: center;
    
}

.navbar a {
    font-family: 'Poppins', sans-serif; /* Ensure non-cursive text */
    margin-left: 3rem;
    color: var(--blue);
    text-decoration: none;
    font-weight: bold;
    text-align: right;
    font-size: 20px;
    border-radius: 5px; /* Optional: adds rounded corners to the background */
    transition: background-color 0.3s ease; /* Optional: smooth transition effect */
    padding: 5px 15px 5px 15px;
}

.navbar a:hover {
    color: var(--blue);
    background-color: var(--white); /* Background color on hover */
}

.abthome{
    position: relative;
    width: 100%;
    justify-content: space-between;
    height: 100vh;
    background:var(--blue2-light);
    background-size: cover;
    background-position: center;
    display: grid;
    grid-template-rows: 1fr 1fr; 
    align-items: center;
    padding: 70px 5% 5%;
    
}
.container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
}

.left-column {
    flex: 1;
    padding-left: 10px;
    text-align: justify;
    margin-right: 50px; /* Adjust this value as needed */   
    
}

.right-column{
    flex: 1;
    margin-top: 30px;
    text-align: justify;
   
}
.left-column h3:nth-of-type(2){
    margin-bottom: 20px;

}
.home-sci a {
    display: inline-flex; 
    justify-content: center;
    align-items: center;
    width: 5px;
    height: 10px;
    background: transparent;
    font-size: 20px;
    color: var(--white);
    text-decoration: none;
    margin: 12px 17px 30px 0;
    border: 2px solid var(--white); 
    border-radius: 50%; 
    /*padding: 20px 0 20px 50px;*/
    padding: 10px 14px 10px 14px;
    
}
.home-sci a:hover{
    background:var(--blue3-light);
    font-weight: bold;
    box-shadow: 0 0 20px var(--blue3-light);
}
h1 {
    font-size: 50px;
    color: var(--blue1-light);
    }
.picture img {
width: 100%;
max-width: 176px;
max-height: 176px ;
border: 3px solid var(--white);
padding: 0;
object-fit: cover;
border-radius: 10%;

}
.picture2 img {
width: 100%;
max-width: 169px;
max-height: 169px ;
border: 3px solid var(--white);
padding: 0;
object-fit: cover;
position: absolute;
top: 43%;
left: 5%;
border-radius: 10%;

}
.picture3 img {
width: 100%;
max-width: 169px;
max-height: 169px ;
border: 3px solid var(--white);
padding: 0;
object-fit: cover;
position: absolute;
top: 43%;
left: 17%;
border-radius: 10%;

}
.picture4 img {
width: 100%;
max-width: 169px;
max-height: 169px ;
border: 3px solid var(--white);
padding: 0;
object-fit: cover;
position: absolute;
top: 43%;
left: 29%;
border-radius: 10%;

}
.picture5 img {
width: 100%;
max-width: 169px;
max-height: 169px ;
border: 3px solid var(--white);
padding: 0;
object-fit: cover;
position: absolute;
top: 37%;
left: 45%;
border-radius: 10%;

}
.right-column h2{
    padding-top: 20px;
    color: var(--white);
}
.container h3 span{
    color:var(--blue1-light);
}
.btn-box{
    padding: 12px 15px 12px 36px;
    background: var(--blue3-light);
    border-radius: 40px;
    font-size: 16px;
    color: white;
    letter-spacing: 1px;
    text-decoration: none;
    font-weight: 600;
    position: absolute;
    top: 59.6%;
    left: 78%;
    border: 1px solid white;
    
    
}
.btn-box:hover{
    box-shadow: 0 0 5px white,
    0 0 25px white;
    background:white;
    color: var(--blue3-light);
}
.btn2-box{
    padding: 12px 15px;
    background: var(--blue3-light);
    border-radius: 40px;
    border: 1px solid white;
    font-size: 16px;
    color: white;
    letter-spacing: 1px;
    text-decoration: none;
    font-weight: 600;
    position: absolute;
    top: 59.6%;
    left: 75%;
    
    
}
.btn2-box:hover{
    box-shadow: 0 0 5px white,
    0 0 25px white;
    background:white;
    color: var(--blue3-light);
}
.btn3-box{
    padding: 12px 15px;
    background: var(--blue3-light);
    border-radius: 40px;
    border: 1px solid white;
    font-size: 13px;
    color: white;
    letter-spacing: 1px;
    text-decoration: none;
    font-weight: 600;
    position: absolute;
    top: 35%;
    left: 5%;
    
    
}
.btn3-box:hover{
    box-shadow: 0 0 5px white,
    0 0 25px white;
    background:white;
    color: var(--blue3-light);
}
.btn4-box{
    padding: 12px 15px;
    background: var(--blue3-light);
    border-radius: 40px;
    border: 1px solid white;
    font-size: 13px;
    color: white;
    letter-spacing: 1px;
    text-decoration: none;
    font-weight: 600;
    position: absolute;
    top: 35%;
    left: 16.6%;
    
    
}
.btn4-box:hover{
    box-shadow: 0 0 5px white,
    0 0 25px white;
    background:white;
    color: var(--blue3-light);
}
.btn5-box{
    padding: 12px 15px;
    background: var(--blue3-light);
    border-radius: 40px;
    border: 1px solid white;
    font-size: 13px;
    color: white;
    letter-spacing: 1px;
    text-decoration: none;
    font-weight: 600;
    position: absolute;
    top: 35%;
    left: 29.8%;
    
    
}
.btn5-box:hover{
    box-shadow: 0 0 5px white,
    0 0 25px white;
    background:white;
    color: var(--blue3-light);
}
.btn6-box{
    padding: 12px 15px;
    background: var(--blue3-light);
    border-radius: 40px;
    border: 1px solid white;
    font-size: 13px;
    color: white;
    letter-spacing: 1px;
    text-decoration: none;
    font-weight: 600;
    position: absolute;
    top: 47%;
    left: 47%;
    
    
}
.btn6-box:hover{
    box-shadow: 0 0 5px white,
    0 0 25px white;
    background:white;
    color: var(--blue3-light);
}



    </style>
</head>

<body>
    <header class="header">
    <a href="#" class="logo">
        <i class="fas fa-user"></i> Get To Know Me
    </a>

        <nav class="navbar">
           <a href="{{ url('/') }}"><i class="fas fa-home"> Home</i></a>
           <a href="{{ url('/about') }}"><i class="fas fa-info-circle"> About</i></a>
           <a href="{{ url('/content') }}"><i class="fas fa-file-alt"> Content</i></a>              
        </nav>
    </header>
    <div class="title">ABOUT ME</div>
    <section class="abthome">
        <div class="container">
        <div class="left-column">
                <h1>MY CONTENTS</h1><br><br>
                <h3>I'm a <span class="text"></span></h3><br>
                <h2><i class="fas fa-project-diagram"></i> My Group Projects</h2><br>          
            </div> 
             <a href="#" class="btn3-box"> Scheduling System </a>
             <a href="#" class="btn4-box"> Inventory Management </a>
             <a href="#" class="btn5-box">  WeConnect Website </a>
             <div class="picture2">
             <img src="{{ asset('images/mj.png') }}" alt="Pj">
             </div>
             <div class="picture3">
             <img src="{{ asset('images/im.png') }}" alt="pj">
             </div>
             <div class="picture4">
             <img src="{{ asset('images/wc.png') }}" alt="pj">
             </div>
            <div class="right-column">
            <h2><i class="fas fa-list"></i> My Personal Details</h2><br>
                <div class="picture">
                <p>I live in Sacnangan, Pilar, Sorsogon. I was born on August 11, 2003. My blood type is O+, and my zodiac sign is Leo. I take pride in my roots and the unique qualities that shape who I am.</p>
             </div>
             <h2><i class="fas fa-cogs"></i> My Skills</h2><br>
                <div class="picture">
                <p>My skills include intrapersonal, adaptive, and communication abilities.These skills help me face challenges, connect with others, and ccontinuously improve.</p>
             </div>
             <h2><i class="fas fa-language"></i> My Languages</h2><br>
                <div class="picture">
                <p>I can speak both Filipino and English.</p>
             </div>
             <h2><i class="fas fa-address-book"></i> Contacts</h2>
        <div class="home-sci">
            <a href="https://www.facebook.com/wendeediane.floresllona" style="--1:6"><i class='bx bxl-facebook'></i></a>
            <a href="mailto:wendeedianellona@gmail.com" style="--1:7"><i class='bx bx-envelope'></i></a>
            <a href="https://www.instagram.com/wwindydyann/" style="--1:8"><i class='bx bxl-instagram' ></i></a>
        </div>
        <a href="{{ url('/about') }}" class="btn-box"> About </a>
        <a href="{{ url('/') }}" class="btn2-box"> Home </a>
      </div>
 </div>
</section> 
<script>
    var typed = new Typed('.text', {
    strings: ["Student", "Daughter", "Sibling", "Friend"],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
  });
</script>
</body>
</html>
