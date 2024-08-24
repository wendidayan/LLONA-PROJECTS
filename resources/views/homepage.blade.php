
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

/* Home Section */
.home{
    position: relative;
    width: 100%;
    justify-content: space-between;
    height: 100vh;
    background:var(--blue2-light);
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    padding: 0 5% 5%;
}
h1 {
    font-size: 50px;
    color: var(--blue1-light);
    
    }

.home-content{
    max-width: 600px;

}
.home-content h3{
    font-size: 32px;
    font-weight: 700;
   
}
.home-content h1{
    font-size: 56px;
    font-weight: 700;
    margin: -3px 0;
    
}
.home-content p{
    font-size: 20px;
    

}
.home-content h3 span{
    color:var(--blue1-light);
}
.home-content h3:nth-of-type(2){
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

.btn-box{
    display: inline-block;
    padding: 12px 15px;
    background: var(--blue3-light);
    border-radius: 40px;
    font-size: 16px;
    color: white;
    letter-spacing: 1px;
    text-decoration: none;
    font-weight: 600;
    border: 1px solid white;
    
    
}
.btn-box:hover{
    box-shadow: 0 0 5px white,
    0 0 25px white;
    background:white;
    color: var(--blue3-light);
}
.picture img {
position: absolute;
top:17%;
left:55%;
width: 100%;
max-width: 400px;
max-height: 400px;
border-radius: 50%; 
border: 5px solid var(--blue1-light);
padding: 0;
object-fit: cover;


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
    <section class="home">
        <div class="home-content">
            <h3 >Hello, Welcome To My Page!</h3>
            <h1>Wendee Diane Llona</h1>
            <h3>I'm a <span class="text"></span></h3>
            <p>I'm a third year Bachelor of Science in Information Technology student.</p>
            <div class="home-sci">
                <a href="https://www.facebook.com/wendeediane.floresllona" style="--1:6"><i class='bx bxl-facebook'></i></a>
                <a href="mailto:wendeedianellona@gmail.com" style="--1:7"><i class='bx bx-envelope'></i></a>
                <a href="https://www.instagram.com/dianthusprotea/" style="--1:8"><i class='bx bxl-instagram' ></i></a>
            </div>
            <a href="{{ url('/about') }}" class="btn-box"> See More </a>
            <div class="picture">   <img src="{{ asset('images/me2.jpg') }}" alt="Myself"></div>
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
