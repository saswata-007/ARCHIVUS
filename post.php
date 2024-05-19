<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivus</title>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
    <nav>
        <div class="container nav__container">
            <div class="nav__logo-name">
                <a href="homepage.php"><img src="./images/logo.png" class="nav__logo-img"></a>
                <a href="homepage.php" class="nav__logo">ARCHIVUS</a>
            </div>
            <ul class="nav__items">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="signup.html">Sign Up</a></li>
                <li class="nav__profile">
                    <div class="profile__picture">
                        <img src="./images/pp_purple.png">
                    </div>
                    <ul>
                        <li><a href="manage-post.html">Dashboard</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
<!-- ==============================================end of nav s====================================== -->
<section class="singlepost">
    <div class="container   singlepost__container">
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, quidem!</h2>
        <div class="post__auther-avatar">
            <img src="./images/avatar2.jpg">
        </div>
        <div class="post__auther-info">
            <h5>By: Rahit Kumar Makhal</h5>
            <small>April 03,2024 - 18:44</small>
        </div>
        <div class="singlepost__thumbnail">
            <img src="./images/article4.png">
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quis excepturi architecto ex odit iste, autem necessitatibus. Labore atque illum voluptatibus? Enim eum consequuntur voluptates magni cupiditate maxime assumenda iusto?Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quis excepturi architecto ex odit iste, autem necessitatibus. Labore atque illum voluptatibus? Enim eum consequuntur voluptates magni cupiditate maxime assumenda iusto?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus facilis delectus blanditiis reprehenderit, neque assumenda! Earum minus laudantium rem excepturi dignissimos, praesentium numquam voluptate optio commodi reiciendis magnam maiores recusandae ea. Necessitatibus temporibus voluptates voluptatum totam ipsum ad minus quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, doloribus. Voluptates reprehenderit laudantium natus nisi laborum asperiores dolor! Repellat ullam ad accusamus impedit.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quis excepturi architecto ex odit iste, autem necessitatibus. Labore atque illum voluptatibus? Enim eum consequuntur voluptates magni cupiditate maxime assumenda iusto?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus facilis delectus blanditiis reprehenderit, neque assumenda! Earum minus laudantium rem excepturi dignissimos, praesentium numquam voluptate optio commodi reiciendis magnam maiores recusandae ea. Necessitatibus temporibus voluptates voluptatum totam ipsum ad minus quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur iure doloremque temporibus eligendi obcaecati iusto quaerat quam maiores, reprehenderit, eaque laudantium? Vel, nobis rerum. Expedita vero voluptas quo error assumenda?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quis excepturi architecto ex odit iste, autem necessitatibus. Labore atque illum voluptatibus? Enim eum consequuntur voluptates magni cupiditate maxime assumenda iusto?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus facilis delectus blanditiis reprehenderit, neque assumenda! Earum minus laudantium rem excepturi dignissimos, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati deleniti minima labore maiores quod. Soluta ad recusandae similique? Voluptatem iste adipisci facilis libero incidunt, ipsa quas, commodi dolore iusto cum voluptas optio eaque vitae neque fuga! Quis explicabo nam possimus ipsam magni tempore doloribus, est soluta vero similique unde itaque consectetur iusto! Rem, asperiores.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi aperiam temporibus, velit doloribus neque illum.</p>
    </div>
</section>
<!--==============================================end of singelpost======================================-->

<section class="comment">
    <div class="container comments__container">
        <h2>Comments</h2>
        <div class="comments">
            <div class="comment__auther-avatar">
                <img src="./images/avatar1.jpg">
            </div>
            <div class="comment__auther-info">
                <h5>By: Saswata Kayal</h5>
                <small>April 03,2024 - 18:44</small>
            </div>
            <div class="comment__info">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam impedit praesentium quaerat dicta unde velit, porro nisi eaque voluptate itaque quam nostrum enim est, et minima vitae exercitationem sequi at.</p>
            </div>
            <h5>Reply</h5>
        </div>
        
        <div class="comments">
            <div class="comment__auther-avatar">
                <img src="./images/avatar3.jpg">
            </div>
            <div class="comment__auther-info">
                <h5>By: Achirangshu Srimani</h5>
                <small>June 09,2023 - 15:01</small>
            </div>
            <div class="comment__info">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam impedit praesentium quaerat dicta unde velit, porro nisi eaque voluptate itaque quam nostrum enim est, et minima vitae exercitationem sequi at.</p>
            </div>
            <h5>Reply</h5>
        </div>

        <form class="comment__box">
            <div>
                <textarea name="comment__area" rows="4" cols="40"></textarea>
            </div>
            <div><button name="comment__submit">comment</button></div>
            <div class="comment__auther-avatar">
                <img src="./images/avatar2.jpg">
            </div>
            <div class="comment__auther-info">
                <h5>By: Rahit Kumar Makal </h5>
            </div>
        </form>

    </div>
</section>

<!-- ==============================================footer=================================================== -->
    <footer>
        <div class="footer__socials">
            <a href="https://youtube.com" target="blank"><i class="uil uil-youtube"></i></a>        
            <a href="https://facebook.com" target="blank"><i class="uil uil-facebook-f"></i></i></a>        
            <a href="https://linkedin.com" target="blank"><i class="uil uil-linkedin"></i></i></i></a>        
            <a href="https://twitter.com" target="blank"><i class="uil uil-twitter"></i></i></a>        
            <a href="https://instagram.com" target="blank"><i class="uil uil-instagram"></i></i></a>
        </div>
        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Indian History</a></li>
                    <li><a href="">Politics</a></li>
                    <li><a href="">Accident</a></li>
                    <li><a href="">Terror Attack</a></li>
                    <li><a href="">Inventions</a></li>
                    <li><a href="">Space</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Number</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Support</a></li>
                    <li><a href="">Location</a></li>
                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Populer</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </article>
            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Location</a></li>
                </ul>
            </article>
        </div>
        <div class="footer__copyright">
            <small>Copyright @ 2024 Archivus </small>
        </div>
    </footer>
    </body>
    </html>