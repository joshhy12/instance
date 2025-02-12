<!DOCTYPE html>
<html>  

    <head><title>blogs website</title></head>
    <link rel="stylesheet" href="../CSS/style.css">
    <marquee>    <header><p><header><b><h1 id="flashing-header">WELCOME TO BLOGS POSTING OF COMPUTER BUSINESS</h1></b></header></p>
    </header></marquee>

    <body> <h3>DASHBOARD</h3>
       
    
    <div id="navigation">
        <!-- Home Section -->
        <div class="nav-item" onclick="toggleSubsection('homeSubsection')">Home</div>
        <ul id="homeSubsection" class="subsection">
            <li><a style="color: red;" href="register.html">Register</a></li>
            <li><a style="color: red;" href="logout.php">logout</a></li>
        </ul>
       
        <!-- Categories Section -->
        <div class="nav-item" onclick="toggleSubsection('categoriesSubsection')" >categories</div>
        <ul id="categoriesSubsection" class="subsection">
            <li><a style="color: red;" href="post.php">post 1 </a></li>
            <li><a style="color: red;" href="post1.php">post 2</a></li>
            <li><a style="color: red;" href="post2.php"> post 3</a></li>
        </ul>

        <!-- tags Section -->
        <div class="nav-item" onclick="toggleSubsection('tagsSubsection')">tags</div>
        <ul id="tagsSubsection" class="subsection">
            <li><a style="color: red;" href="#tags">tags</a></li>
            <li><a style="color: red;" href="#tags">tags</a></li>
        </ul>

        <!-- individual blog post Section -->
        <div class="nav-item" onclick="toggleSubsection('individual blog postSubsection')">individual blog post</div>
        <ul id="individual blog postSubsection" class="subsection">
            <li><a style="color: red;" href="#post title 1 comprises of content, comment section, and related posts">post1 </a></li>
            <li><a style="color: red;" href="#post title 2 consist of content, comments section, and related posts">post2 </a></li>
            <li><a style="color: red;" href="#Offers">Offers</a></li>
            <li><a style="color: red;" href="#Our Team">Our Team</a></li>
        
  
    </div>
    <p>SAMPLE POST</p>
    <img src="../IMAGE/p1 (1).jpg" alt="computer business" style="width: 20%; height: 16%; text-align: center;">
    <img src="../IMAGE/p1 (2).jpg" alt="computer business" style="width: 20%; height: 16%; text-align: center;">
    <img src="../IMAGE/p1 (3).jpg" alt="computer business" style="width: 20%; height: 16%; text-align: center;">
    <img src="../IMAGE/p1 (4).jpg" alt="computer business" style="width: 20%; height: 16%; text-align: center;">
    <img src="../IMAGE/p1 (5).jpg" alt="computer business" style="width: 20%; height: 16%; text-align: center;">


    <div class="container">
    <div  class="wrapper">
        <img src="../IMAGE/h1 (2).jpg" style="width: 100%; height: 400px;">
        <img src="../IMAGE/h1 (1).gif" style="width: 100%; height: 400px;">
        <img src="../IMAGE/p1 (2).jpg" style="width: 100%; height: 400px;">
        <img src="../IMAGE/p1 (2).jpg" style="width: 100%; height: 400px;">



        
    </div>
</div>

    
        <script>
            // Function to toggle the visibility of subsections
            function toggleSubsection(id) {
                const subsection = document.getElementById(id);
                if (subsection.style.display === "none" || subsection.style.display === "") {
                    subsection.style.display = "block";
                } else {
                    subsection.style.display = "none";
                }
            }
        </script>
       


       <footer>
        <p>&copy; 2024 blogs post @ photos, media, moves</p>
        <p>follow us: whatsApp | Ticktock </p>
       </footer>

        
     

    </body>
    







</html>

