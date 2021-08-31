<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nefi's Home Page</title>
        <link rel='stylesheet' href='/Styles/styles.css'>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;1,100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
        <script src='/Scripts/main_script.js' defer></script>
    </head>
    <body>
        <div id='main'>
            <?php require './Pages/nav_bar.php'; ?>
            <div id='cover_page'>
                <div id="headline">
                    <h1>Nefi Aguilar</h1>
                    <H2>The full stack web developer you are looking for</H2>
                    <h3>Passionate about HTML, CSS, Javascript Libraries and Frameworks</h3>
                    <a href="/Pages/portfolio.php"><button id='button_1' class='button'>View Portfolio</button></a>
                </div>
            </div>
            <img id="cover_page_image" alt="" src="/Images/nefi_aguilar.png">
        </div>
        <div id='skills'>
        </div>
        <div id='contents'>
            <div id='resume'>
                <img id="resume_image" alt='' src='/Images/Nefi.jpg'>
                <a href="/docs/resume.pdf" download="Nefi's Resume" id='button_2'  class='button'>Download Resume</a>
            </div>
            <div id='story'>
                <h2>My journey into  development</h2>
                <p>
                    Since I was a kid, I was one of those kids that  always loved to break electronics apart to put 
                    them back together. 
                    I have always had a great interest for understanding how things work and how they are built. 
                </p>   
                <p>
                    Despite my interest, I  never though I would  become a developer. 
                </p>  
                <p>
                     
                    Right when I started college, I had a car accident with a guy that owned a  brand new BMW. 
                    The guy was loaded, and wrote me a check for my car. 
                    Just before he left I asked him about his job, and he happily told me that he was a developer. 
                </p>
                <p> 
                    That random incident gave me a slight incentive to enroll in my first programing class. 
                </p> 
                <p>
                    It has been some time since my first programming class.
                    What really have  kept me  motivated  is the great satisfaction I feel every time I resolve a  coding challenge or get a project done. 
                </p> 
                <p>   
                    I have felt that my calling is to help people through my coding skills, by building applications for them. 
                </p> 
                <p> 
                    That is what I love to do, and that is what makes me happy. 
                </p>
            </div>
        </div>
        <div class="separator"></div>
        <footer>
        <div class="separator"></div>
          Created by  Nefi Aguilar 2020
        </footer>
    </body>
</html>