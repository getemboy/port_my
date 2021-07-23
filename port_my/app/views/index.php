<?php
$this->view('header', $data);
?>

<div class="main-container">
    <div class="main-wrapper">
        <h1>My Portfolio</h1>
        <div class="btn-wrapper">
            <a href="<?=ROOT?>contacts">Contact me</a>
            <a href="<?=ROOT?>apps">See my work</a>
        </div>
    </div>
</div>


<div id=bio  class="CV-container">
    <div class="biography">
        <div class="head-section">
            <h2 class="dark big">
                Biography
            </h2>
            <hr>
        </div>
        <p>I have a degree in Statistics and strong experience in the Marketing industry. Not long ago I have discovered that I have interest in all aspects of programming and decided to develop my programming skills. I started with VBA so I can write excel macros and continued with PHP, MySQL, HTML, CSS and now I am participating in a course with a wide range of programming languages and technologies such as C++, C#, Linux, etc. My next goal is to master the frameworks of PHP and Javascript so I can work towards establishing myself as a full stack web developer. I am looking for an opportunity to join a company where I can apply what I have learned and I will continue to expand my knowledge in the programming field</p>
    </div>
<iframe src="<?=ASSETS?>CV/CV_Dimitar_Naydenov.pdf#toolbar=0" ></iframe>
</div>



<div class="head-section">
    <h2 class="dark big">
        Skills
    </h2>
    <hr>
</div>

<div class="grid-container-4">
    <div>
        <img src="<?=ASSETS?>img/logos/php3.jpg" alt="Skill image" title="Skill image1">
        <h3>Front & Back Web Development</h3>
    </div>

    <div>
        <img src="<?=ASSETS?>img/logos/data.jpg" alt="Skill image" title="Skill image2">
        <h3>Statistical analysis and data processing</h3>
    </div>

    <div>
        <img src="<?=ASSETS?>img/logos/logic.jpg" alt="Skill image" title="Skill image3">
        <h3>Logical thinking and methodical approach</h3>
    </div>

    <div>
        <img src="<?=ASSETS?>img/logos/teamwork2.jpg" alt="Skill image" title="Skill image4">
        <h3>Teamwork skills and self-reliance</h3>
    </div>
</div>

<div class="head-section">
    <h2 class="dark big">
        Courses
    </h2>
    <hr>
</div>

<div class="courses-section">
    <div>
        <i class="fas fa-graduation-cap"></i>
        <h2>Statistics and Econometrics</h2>
        <p>University of National and World Economics 2008-2013</p>
    </div>

    <div class="courses-middle">
        <img src="<?=ASSETS?>img/courses.jpg" alt="courses">
    </div>

    <div>
        <i class="fab fa-php"></i>
        <h2>Programming with PHP and MySQL</h2>
        <p>2019 from Computer education center "Progress"</p>
    </div>

    <div>
        <i class="fas fa-file-excel"></i>
        <h2>Programming with VBA & Excel Macros</h2>
        <p>2018 from Computer education center "Progress"</p>
    </div>

    <div>
        <i class="fas fa-laptop-code"></i>
        <h2>Programming maintenance</h2>
        <p>Backend & Frontend Web 
Development, C++, C#, OS, QA, PHP and others</p>
    </div>
</div>

<?php
$this->view('footer', $data);
?>