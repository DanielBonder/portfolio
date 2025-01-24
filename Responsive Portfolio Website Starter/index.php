<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio DB</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet">
      
<script type="importmap">
  {
    "imports": {
      "three": "./node_modules/three/build/three.module.js",
      "three/examples/jsm/loaders/GLTFLoader": "./node_modules/three/examples/jsm/loaders/GLTFLoader.js"
    }
  }
  </script>

      
    />
  </head>
  <body>
    <header class = "header">
    <a href="#home" class="logo">
      Daniel <span>Bonder</span>
    </a>      
    <i class="bx bx-menu" id="menu-icon"></i>
    <nav class="navbar">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#services">Servises</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
    </nav>
    <button class="gardient-btn">Contact Me</button>
    </header>


    <section class="home" id="home">
      <div class="canvas-container">
        <canvas id="bg-canvas"></canvas>
      </div>
      
    <div class="home-content">
    <h1>Hi, It's <span>Daniel</span></h1>
    <h3> 
      I'm a <span>Web Developer</span>
    </h3>
    <p>BA Student at Tel Hai, Economics and Information Systems. Data Engineer | Backend Engineer | Python Developer</p>
  
    <div class="social-icons">
    <a href="#">
    <i class="bx bxl-github" ></i>
    </a>
    

    <i class="bx bxl-linkedin-square" ></i>
      </a>
  
   <a href="#">
    <i class="bx bxl-instagram-alt" ></i>
    </a>

   <a href="#">
    <i class="bx bxl-twitter" ></i>
    </a>
  </div>

<div class="btn-group">
    <a href="#" class="btn">Hire</a>
    <a href="#contact" class="btn">Contact</a>
  </div>
</div>

    <div class="home-img" > 
    <img src="imag.jpeg" alt="">
  </div>
</section>

<section class="about" id="about">
<div class="about-img">
  <canvas id="bg-canvas2"></canvas>
  <img src="imag.jpeg" alt="">
</div>
<div class="about-content">
  <h2>About<span>Me</span></h2>
  <p>As a third-year student pursuing a BA in Economics with a specialization in Information Systems, I've cultivated a diverse skill set merging economic theory with practical tech applications.
    My foundational skills encompass a solid grasp of accounting, finance, statistics, micro and macroeconomics, enabling me to effectively analyze economic trends and data.
    Additionally, I've delved into software development, gaining proficiency in HTML, CSS, JavaScript, React, Three.js, and Node.js for both front-end and back-end web development, alongside API development. I excel in Python programming, focusing on OOP principles, recursion algorithms, data structures, and time complexity analysis, facilitating the creation of dynamic web apps and addressing complex computational challenges.
    I also possess hands-on experience with commercial database management systems like SQL Server, Oracle, and MySQL, honing my ability to design, implement, and optimize databases for efficient data management.
    Complementing my technical skills, I have a keen interest in data analysis, leveraging my analytical prowess to extract valuable insights for informed decision-making.
    Overall, my multidisciplinary background equips me with the versatility and expertise to thrive in a dynamic professional landscape, integrating economics, information systems, software development, and data analytics.</p>
  <a href="#" class="btn">Read More</a>
</div>
</section>

<section class="services" id="services">
  <h2 class="heading">Services</h2>
  <div class="services-container">

      <div class="service-box">
        <div class="three-model-container">
            <div id="model-web" class="three-model"></div>  <!-- מודל תלת מימד -->
        </div>
        <div class="service-info">
            <h4>Python Developer</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nihil exercitationem voluptate, saepe recusandae sint reiciendis laborum suscipit velit veniam tempore unde fugit soluta nesciunt iure sit cum ducimus asperiores?</p>
        </div>
    </div>

      <div class="service-box">
        <div class="three-model-container">
          <div id="model-web-2" class="three-model"></div>
        </div>
          <div class="service-info">
              <h4>Web Developer</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam magnam vel necessitatibus laudantium laborum id nobis dolor dignissimos quo maxime repellat, ea voluptatum accusantium? Quas soluta quae explicabo iste alias?</p>
          </div>
      </div>

      <div class="service-box">
        <div class="three-model-container">
          <div id="model-web-3" class="three-model"></div>
        </div>
        <div class="service-info">
              <h4>Analyze Data</h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi atque rerum consequatur iusto suscipit eligendi iure eveniet harum, a, libero sed quaerat minus doloribus ipsam sequi inventore soluta, nihil ipsum!</p>
          </div>
      </div>

      <div class="service-box">
        <div class="three-model-container">
          <div id="model-web-4" class="three-model"></div>
        </div>
        <div class="service-info">
              <h4>Economist</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quisquam consequatur maxime adipisci rerum dolores voluptatibus eaque, ex at hic voluptatem iste placeat recusandae libero tempora magnam? Similique, ducimus ab.</p>
          </div>
      </div>
  </div>
</section>

<section class="projects" id="projects">
  <h2 class="heading">Projects</h2>
  <div class="projects-box">
    <div class="project-card">
      <img src="project1.png" alt="" >
      <h3>Projects 1</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ex quaerat assumenda repudiandae reiciendis impedit, dicta provident voluptate. Optio repudiandae nesciunt, suscipit aut tempore omnis porro maxime aliquam quod perferendis?</p>
      <div class="btn"> Review Projects</div>
    </div>

        <div class="project-card">
          <img src="project2.png" alt="" >
          <h3>Projects 2</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ex quaerat assumenda repudiandae reiciendis impedit, dicta provident voluptate. Optio repudiandae nesciunt, suscipit aut tempore omnis porro maxime aliquam quod perferendis?</p>
          <div class="btn"> Review Projects</div>
        </div>

          <div class="project-card">
            <img src="project3.png" alt="" >
            <h3>Projects 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ex quaerat assumenda repudiandae reiciendis impedit, dicta provident voluptate. Optio repudiandae nesciunt, suscipit aut tempore omnis porro maxime aliquam quod perferendis?</p>
            <div class="btn"> Review Projects</div>
          </div>

            <div class="project-card">
              <img src="project4.png" alt="" >
              <h3>Projects 4</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ex quaerat assumenda repudiandae reiciendis impedit, dicta provident voluptate. Optio repudiandae nesciunt, suscipit aut tempore omnis porro maxime aliquam quod perferendis?</p>
              <div class="btn"> Review Projects</div>
            </div>

              <div class="project-card">
                <img src="project5.png" alt="" >
                <h3>Projects 5</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ex quaerat assumenda repudiandae reiciendis impedit, dicta provident voluptate. Optio repudiandae nesciunt, suscipit aut tempore omnis porro maxime aliquam quod perferendis?</p>
                <div class="btn"> Review Projects</div>
              </div>

                <div class="project-card">
                  <img src="project6.png" alt="" >
                  <h3>Projects 6</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ex quaerat assumenda repudiandae reiciendis impedit, dicta provident voluptate. Optio repudiandae nesciunt, suscipit aut tempore omnis porro maxime aliquam quod perferendis?</p>
                  <div class="btn"> Review Projects</div>
                </div>
            </div>
  </section>

<section class="contact" id="contact">
  <h2 class="heading">Contact <span>Me</span></h2>

  <form action="contact.php" method="POST">
    <div class="input-group">
        <div class="input-box">
            <input type="text" name="full_name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-box">
            <input type="number" name="phone_number" placeholder="Phone Number" required>
            <input type="text" name="subject" placeholder="Subject" required>
        </div>
    </div>
    <div class="input-group2">
        <textarea name="message" placeholder="Your Message" cols="30" rows="10" required></textarea>
        <input type="submit" value="Send Message" class="btn">
    </div>
</form>

</section>
<footer class="footer">
  <div class="social-icons">
    <a href="#">
    <i class="bx bxl-github" ></i>
    </a>
    
    <a href="#">
      <i class="bx bxl-linkedin-square" ></i>
      </a>
  
   <a href="#">
    <i class="bx bxl-instagram-alt" ></i>
    </a>

   <a href="#">
    <i class="bx bxl-twitter" ></i>
    </a>
  </div>
  <ul class="list">
    <li>
      <a href="#">FAQ</a>
    </li>

    <li>
      <a href="#services">Services</a>
    </li>

    <li>
      <a href="#about">About</a>
    </li>
    <li>
      <a href="#projects">Projects</a>
    </li>
    <li>
      <a href="#contact">Contact</a>
    </li>
  </ul>
  <p class="copyright">© Daniel Bonder | Rights Reserved</p>
</footer>

<script type="module" src="script.js"></script>


</body>
</html>

