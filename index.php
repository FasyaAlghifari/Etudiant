<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Étudiant | Home</title>

    <!-- box icon -->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header>
        <a href="#" class="logo">
            <!-- <img src="./img/Logo.png" alt="Etudiant"> -->
            <i class='bx bxs-home'></i>Étudiant
        </a>
            <ul class="navlist">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#shop">Menu</a></li>
                <li><a href="#about">About Us</a></li>
                <!-- <li><a href="#review">Our Costumer</a></li> -->
                <li><a href="#contact">Contact Us</a></li>
            </ul>

            <div class="nav-icons">
                <a href="#"><i class='bx bxs-user'></i></a>
                <a href="#"><i class='bx bx-cart'></i></a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
    </header>
    
    <!-- home -->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Meet, <span>Eat &</span> <br>Enjoy The Food</br> taste</h1>
            <a href="#shop" class="btn">Explore Menu<i class='bx bxs-right-arrow'></i></a>
            <a href="#" class="btn2">Order Now</a>
        </div>

        <div class="home-img">
            <img src="./img/baner.png" alt="">
        </div>
    </section>

    <!-- Container -->
    <section class="container">
        <div class="container-box">
            <img src="./img/c1.png" alt="" srcset="">
            <h3>08.00 am - 08.00 pm</h3>
            <a href="#">Working Hours</a>
        </div>

        <div class="container-box">
            <img src="./img/c2.png" alt="" srcset="">
            <h3>Jln. Inofthank No.52</h3>
            <a href="#">Get Directions</a>
        </div>

        <div class="container-box">
            <img src="./img/c3.png" alt="" srcset="">
            <h3>(+62) 8xx xxxx xxxx</h3>
            <a href="#">Call us</a>
        </div>
    </section>

    <!--our shop -->
    <section class="shop" id="shop">
        <div class="middle-text">
            <h4>Menu</h4>
            <h2>Lets Check Popular Menu In Étudiant</h2>
        </div>

        <div class="shop-content">
        <?php
                include 'koneksi.php';

                $details = mysqli_query($koneksi, "select * from menu where soldout='no'");
                $cek = mysqli_num_rows($details);

                if ($cek > 0) {
                    while ($d = mysqli_fetch_assoc($details)) {
                        $id_menu = $d['id_menu'];
                        $nama = $d['nama'];
                        $keterangan = $d['keterangan'];
                        $harga = $d['harga'];
                        $gambar = $d['gambar'];                  
                ?>
            <div class="row">
            <?php
                if ($gambar == "") {
                echo "<div>Gambar tidak tersedia</div>";
                } else {
                ?>
                <img src="admin/gambar_menu/<?php echo $gambar ?>" alt="">
                <h3><?php echo $nama; ?></h3>
                <p><?php echo $keterangan; ?></p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp.<?php echo $harga; ?></h6>
                    </div>
                    <div class="s-btnn">
                        <a href="#">Pesan</a>
                    </div>
                </div>

                <div class="top-icon">
                    <a href="#"><i class='bx bx-heart'></i></a>
                </div>
            </div>
                <?php
                    }
                }
            }
                ?>
            <!-- <div class="row">
                <img src="./img/p3.png" alt="">
                <h3>Blueberry Ice</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp 150.000</h6>
                    </div>
                    <div class="s-btnn">
                        <a href="#">Pesan</a>
                    </div>
                </div>

                <div class="top-icon">
                    <a href="#"><i class='bx bx-heart'></i></a>
                </div>
            </div>

            <div class="row">
                <img src="./img/p2.png" alt="">
                <h3>Blueberry Ice</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp 150.000</h6>
                    </div>
                    <div class="s-btnn">
                        <a href="#">Pesan</a>
                    </div>
                </div>

                <div class="top-icon">
                    <a href="#"><i class='bx bx-heart'></i></a>
                </div>
            </div>

            <div class="row">
                <img src="./img/p3.png" alt="">
                <h3>Blueberry Ice</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp 150.000</h6>
                    </div>
                    <div class="s-btnn">
                        <a href="#">Pesan</a>
                    </div>
                </div>

                <div class="top-icon">
                    <a href="#"><i class='bx bx-heart'></i></a>
                </div>
            </div>

            <div class="row">
                <img src="./img/p3.png" alt="">
                <h3>Blueberry Ice</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp 150.000</h6>
                    </div>
                    <div class="s-btnn">
                        <a href="#">Pesan</a>
                    </div>
                </div>

                <div class="top-icon">
                    <a href="#"><i class='bx bx-heart'></i></a>
                </div>
            </div>

            <div class="row">
                <img src="./img/p3.png" alt="">
                <h3>Blueberry Ice</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="in-text">
                    <div class="price">
                        <h6>Rp 150.000</h6>
                    </div>
                    <div class="s-btnn">
                        <a href="#">Pesan</a>
                    </div>
                </div>

                <div class="top-icon">
                    <a href="#"><i class='bx bx-heart'></i></a>
                </div>
            </div> -->
        </div>

        <div class="row-btn">
            <a href="#shop" class="btn">Etudiant Menu<i class='bx bxs-right-arrow'></i></a>

        </div>
    </section>

    <!-- reviews -->
    <!-- <section class="review" id="review">
        <div class="middle-text">
            <h4>Our Costumer</h4>
            <h2>Cilent Review About Our Food</h2>
        </div>
    </section> -->

    <!-- <div class="review-content">
        <div class="box">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, perferendis itaque? Cum dolore, mollitia aliquam tenetur, officiis blanditiis doloribus asperiores ad quod ullam a similique repudiandae in quas dignissimos provident.</p>
            <div class="in-box">
                <div class="bx-img">
                    <img src="./img/r1.jpg" alt="">
                </div>
                <div class="bxx-text">
                    <h4>Irfal Mujafar</h4>
                    <h5>Dosen S2</h5>
                    <div class="rating">
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, perferendis itaque? Cum dolore, mollitia aliquam tenetur, officiis blanditiis doloribus asperiores ad quod ullam a similique repudiandae in quas dignissimos provident.</p>
            <div class="in-box">
                <div class="bx-img">
                    <img src="./img/r2.jpg" alt="">
                </div>
                <div class="bxx-text">
                    <h4>Rega Agustian</h4>
                    <h5>Magic Chess</h5>
                    <div class="rating">
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, perferendis itaque? Cum dolore, mollitia aliquam tenetur, officiis blanditiis doloribus asperiores ad quod ullam a similique repudiandae in quas dignissimos provident.</p>
            <div class="in-box">
                <div class="bx-img">
                    <img src="./img/r3.jpg" alt="">
                </div>
                <div class="bxx-text">
                    <h4>Bpk Reza</h4>
                    <h5>Costum</h5>
                    <div class="rating">
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--about us -->
    <section id="about">
        <div class="middle-text">
            <h4>About Étudiant</h4>
        </div>
    </section>
    <section class="about">
        <div class="about-img">
            <img src="./img/Logo.png" alt="">
        </div>

        <div class="about-text">
            <h2>Living well begins <br> with eating in Etudiant</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing  elit. Autem dignissimos adipisci delectus quas dolor sit maxime possimus assumenda numquam cum quos corporis deserunt quasi atque, ex iste ratione repellendus quae reiciendis, voluptatibus doloribus nihil unde quidem? Fugiat beatae temporibus iusto labore voluptatem ducimus. Quos laudantium ut neque corrupti tenetur saepe quisquam sequi iusto eius voluptates, ipsa cupiditate?</p>
            <a href="#shop" class="btn">Explore Menu<i class='bx bxs-right-arrow'></i></a>
        </div>
    </section>

    <!-- team -->
    <section class="team" id="team">
        <div class="middle-text">
            <h4>Team of Étudiant</h4>
        </div>
    </section>

    <div class="team-content">
        <div class="row-team">
            <div class="team-img">
                <img src="img/r1.jpg">
            </div>
            <h4>Fasya Alghifari</h4>
            <p>Web Developer and UI</p>
            <div class="team-icon">
                <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
            </div>
        </div>
    </div>
    
    <!-- contact -->
    <!-- <section class="contact" id="contact">
        <div class="contact-content">
            <div class="contact-img">
                <div class="c-one">
                    <img src="./img/f1.png" alt="">
                </div>
                <div class="c-one">
                    <img src="./img/f2.png" alt="">
                </div>
            </div>

            <div class="content-text">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda deserunt molestiae autem, dolor animi iusto possimus earum, delectus eligendi beatae repellendus reiciendis omnis necessitatibus soluta sit. Quod voluptatum explicabo molestias.</p>
                <div class="social">
                    <a href="#" class="crl"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-google'></i></a>
                </div>
            </div>

            <div class="detail">
                <div class="main-d">
                    <a href="#"><i class='bx bxs-location-plus' ></i><i>SMK PI</i></i></a>
                </div>

                <div class="main-d">
                    <a href="#"><i class='bx bxs-mobile'></i><i>Fasya</i></i></a>
                </div>

                <div class="main-d">
                    <a href="#"><i class='bx bxl-youtube'></i><i>Fasya</i></i></a>
                </div>

                <div class="main-d">
                    <a href="#"><i class='bx bxs-bell'></i><i>Subcribe</i></i></a>
                </div>
            </div>
        </div>
    </section> -->

    <section class="contact" id="contact">
		<div class="contact-box">
			<h3>Étudiant</h3>
			<h5>Connect With Us</h5>
			<div class="social">
				<a href="#"><i class='bx bxl-facebook' ></i></a>
				<a href="#"><i class='bx bxl-instagram-alt' ></i></a>
				<a href="#"><i class='bx bxl-twitter' ></i></a>
			</div>
		</div>

		<div class="contact-box">
			<h3>Menu Links</h3>
			<li><a href="#home" class="active">Home</a></li>
			<li><a href="#menu">Menu</a></li>
			<li><a href="#about">About Us</a></li>
			<li><a href="#team">Team</a></li>
			<li><a href="#contact">Contact</a></li>
		</div>

		<!-- <div class="contact-box">
			<h3>Our Foods</h3>
			<li><a href="#">Pizza</a></li>
			<li><a href="#">Indian Burger</a></li>
			<li><a href="#">Beef Burger</a></li>
			<li><a href="#">Toa Heftiba</a></li>
			<li><a href="#">Shevtsova</a></li>
		</div> -->

		<div class="contact-box address">
			<h3>Conatct</h3>
			<i class='bx bxs-map' ><span>1952 SMK PI Inofthank, Bandung</span></i>
			<i class='bx bxs-envelope' ><span>Fasya@gmail.com</span></i>
			<i class='bx bxs-phone' ><span>(+62) 123 456 789</span></i>
		</div>

	</section>

	<div class="end-text">
		<p>© late 2023 Etudiant. All Rights Reserved.</p>
	</div>

    <!-- scroll top -->
    <a href="#" class="scroll">
        <i class='bx bx-up-arrow-alt'></i>
    </a>

    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- js link -->
    <script src="./js/user.js"></script>
</body>
</html>