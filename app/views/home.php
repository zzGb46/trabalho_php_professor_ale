<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boxIcons -->

    <link rel="stylesheet" href="<?php BASE_URL ?>https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php BASE_URL ?>assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.svg" type="image/x-icon">
    <meta name="theme-color" content="#ed3814" />


    <title>Kioficina</title>
</head>

<body>
    <div class="container">

        <?php require_once('template/topo.php') ?>


        <main>

            <section id="home">

                <div class="home-container">



                    <div class="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img src="assets/img/hero_slider_bg_1.png" alt="Image 1"></div>
                            <div class="carousel-item"><img src="assets/img/hero_slider_bg_2.png" alt="Image 2"></div>
                            <div class="carousel-item"><img src="assets/img/hero_three_slider_bg_1.png" alt="Image 3"></div>
                            <div class="carousel-item"><img src="assets/img/hero_two_slider_bg_1.png" alt="Image 4"></div>
                        </div>
                    </div>

                    <div class="home-inner">

                        <div class="home-txt">

                            <ul class="home-icons">
                                <li><img src="assets/img/twitter.svg" alt=""></li>
                                <li><img src="assets/img/linkedin.svg" alt=""></li>
                                <li><img src="assets/img/facebook.svg" alt=""></li>
                                <li>
                                    <hr>
                                </li>
                                <li>
                                    <h3>FOLLOW US</h3>
                                </li>
                            </ul>

                            <ul class="home-title">
                                <li>
                                    <h2>CAR REPAIR & AUTO SERVICES</h2>

                                </li>
                                <li>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique assumenda
                                        magni officia odio cupiditate optio non quis dignissimos pariatur veritatis.</p>
                                </li>
                                <li><a href=""><button class="btn">APPOINTMENT</button></a></li>
                            </ul>
                        </div>


                        <div class="controles">
                            <div class="carousel-control">
                                <span class="control-btn" data-index="0">1</span>
                                <span class="control-btn" data-index="1">2</span>
                                <span class="control-btn" data-index="2">3</span>
                                <span class="control-btn" data-index="3">4</span>
                            </div>
                            <div class="btn-carrousel">
                                <button id="prevBtn"><i class='bx bx-left-arrow-alt'></i></button>
                                <button id="nextBtn"><i class='bx bx-right-arrow-alt'></i></button>
                            </div>
                        </div>


                    </div>

                </div>

            </section>

            <section id="sobre">
                <div class="sobre-titles">
                    <h4>01</h4>
                    <hr>
                    <h4>02</h4>
                    <hr>
                    <h4>03</h4>
                    <hr>
                </div>
                <div class="sobre-cards">
                    <ul>
                        <li><img src="assets/img/speedome.svg" alt=""></li>
                        <li>
                            <h3>Lorem, ipsum.</h3>
                        </li>
                        <li>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quisquam veritatis excepturi,
                                corrupti magni maiores vel dicta animi hic dolore?</p>
                        </li>
                    </ul>
                    <ul>
                        <li><img src="assets/img/car-repair.svg" alt=""></li>
                        <li>
                            <h3>Lorem, ipsum.</h3>
                        </li>
                        <li>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quisquam veritatis excepturi,
                                corrupti magni maiores vel dicta animi hic dolore?</p>
                        </li>
                    </ul>
                    <ul>
                        <li><img src="assets/img/car.svg" alt=""></li>
                        <li>
                            <h3>Lorem, ipsum.</h3>
                        </li>
                        <li>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quisquam veritatis excepturi,
                                corrupti magni maiores vel dicta animi hic dolore?</p>
                        </li>
                    </ul>
                </div>
            </section>


            <section id="oficina">

                <div class="oficina-txt">

                    <div class="txt1">
                        <h3>Feature</h3>
                        <ul>
                            <li>
                                <h4>Lorem, ipsum dolor.</h4>
                            </li>

                            <li>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto eos, impedit
                                    sequi dolor autem aperiam incidunt tempore cumque reiciendis ea in ut accusantium
                                    voluptas, nesciunt dolorum repudiandae ratione dicta quia sapiente. Nihil, dicta
                                    delectus laborum amet voluptate quas possimus placeat!</p>
                            </li>
                        </ul>


                    </div>

                    <div class="txt2">
                        <ul>
                            <li>


                                <a href="">Lorem, ipsum dolor.</a>
                            </li>
                            <li>
                                <a href="">Lorem, ipsum dolor.</a>
                            </li>
                            <li>
                                <a href="">Lorem, ipsum dolor.</a>
                            </li>
                            <li>
                                <a href="">Lorem, ipsum dolor.</a>
                            </li>

                            <li><a href="#"><button class="btn"> VIEW MORE</button></a></li>
                        </ul>

                    </div>

                </div>

                <div class="oficina-img">
                    <ul>


                        <li><img src="assets/img/choose-us.png" alt=""></li>
                        <li>
                            <img src="assets/img/Circle.png" alt="">
                        </li>
                    </ul>

                </div>

            </section>


            <section id="service">
                <div class="service-card1">
                    <div class="txt1">
                        <h3>services</h3>
                        <ul>
                            <li>
                                <h4>Lorem, ipsum dolor.</h4>
                            </li>

                            <li>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto eos, impedit
                                    sequi dolor autem aperiam incidunt tempore cumque reiciendis ea in ut accusantium
                                    voluptas, nesciunt dolorum repudiandae ratione dicta quia sapiente. Nihil, dicta
                                    delectus laborum amet voluptate quas possimus placeat!</p>
                            </li>

                            <li><a href=""><button class="btn-service">VIEW MORE</button></a></li>
                        </ul>


                    </div>



                </div>
                <div class="service-card2">
                    <div class="card">
                        <img src="assets/img/service_1.jpg" alt="">
                        <ul>
                            <li>
                                <h3>TIRES SERVICES</h3>
                            </li>
                            <li>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum atque totam pariatur
                                    illum voluptas. Vel dolor accusantium, maiores pariatur illo facere est,
                                    reprehenderit eaque placeat quas rem! Repellat, sint eum.</p>
                            </li>
                            <li><a href=""><button class="btn-service">VIEW MORE</button></a></li>
                        </ul>
                    </div>
                    <div class="card">
                        <img src="assets/img/service_2.jpg" alt="">
                        <ul>
                            <li>
                                <h3>TIRES SERVICES</h3>
                            </li>
                            <li>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum atque totam pariatur
                                    illum voluptas. Vel dolor accusantium, maiores pariatur illo facere est,
                                    reprehenderit eaque placeat quas rem! Repellat, sint eum.</p>
                            </li>
                            <li><a href=""><button class="btn-service">VIEW MORE</button></a></li>
                        </ul>
                    </div>
                    <div class="card">
                        <img src="assets/img/service_3.jpg" alt="">
                        <ul>
                            <li>
                                <h3>TIRES SERVICES</h3>
                            </li>
                            <li>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum atque totam pariatur
                                    illum voluptas. Vel dolor accusantium, maiores pariatur illo facere est,
                                    reprehenderit eaque placeat quas rem! Repellat, sint eum.</p>
                            </li>
                            <li><a href=""><button class="btn-service">VIEW MORE</button></a></li>
                        </ul>
                    </div>
                </div>
            </section>


            <section id="video-oficina">


                <video src="./video/hero-bg-video.mp4" autoplay muted loop controls></video>
            </section>


            <section id="contador-cliente">
                <div class="contador-container">
                    <ul>
                        <li>
                            <h3> <span id="counter1">10</span> +</h3>
                        </li>
                        <li>
                            <p>YEARS OF SERVICE</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h3> <span id="counter2">256</span> +</h3>
                        </li>
                        <li>
                            <p>HAPPY CUSTOMERS</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h3> <span id="counter3">112</span> +</h3>
                        </li>
                        <li>
                            <p>CUSTOMER SATISFATION</p>
                        </li>
                    </ul>
                </div>

                <div class="cliente-logo">

                    <h3>TRUSTED CLIENT</h3>



                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="assets/img/trusted-client_1.png" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/trusted-client_2.png" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/trusted-client_3.png" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/trusted-client_4.png" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/trusted-client_5.png" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/trusted-client_6.png" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/trusted-client_7.png" alt=""></div>

                        </div>

                    </div>




                </div>


            </section>



            <section id="depoimento">

                <div class="depoimento-container">
                    <div class="titulo-depoimento">
                        <div class="txt1">
                            <h3>testimaonial</h3>

                            <h4>SEE WHAT OUR SATISFIED CUSTOMER SAYS.</h4>


                        </div>
                    </div>
                    <div class="swiper mySwiper3">

                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-depoimento">

                                    <div class="mensagem">
                                        <div class="nome">
                                            <div class="nome-inner">
                                                <h4>Roberts Bush</h4>
                                                <p>From Canada</p>
                                            </div>

                                            <p class="aspas">"</p>
                                        </div>
                                        <div class="nome-mensagem">
                                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis nemo
                                                sit voluptate explicabo, voluptates quos ea alias recusandae sint
                                                quidem?"</p>
                                        </div>
                                    </div>

                                    <div class="foto-depoimento">
                                        <img src="assets/img/testimaonial-img-bg.png" alt="">
                                        <img src="assets/img/testimaonial.png" alt="">

                                    </div>


                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-depoimento">

                                    <div class="mensagem">
                                        <div class="nome">
                                            <div class="nome-inner">
                                                <h4>Roberts Bush</h4>
                                                <p>From Canada</p>
                                            </div>

                                            <p class="aspas">"</p>
                                        </div>
                                        <div class="nome-mensagem">
                                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis nemo
                                                sit voluptate explicabo, voluptates quos ea alias recusandae sint
                                                quidem?"</p>
                                        </div>
                                    </div>

                                    <div class="foto-depoimento">
                                        <img src="assets/img/testimaonial-img-bg.png" alt="">
                                        <img src="assets/img/testimaonial.png" alt="">

                                    </div>


                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-depoimento">

                                    <div class="mensagem">
                                        <div class="nome">
                                            <div class="nome-inner">
                                                <h4>Roberts Bush</h4>
                                                <p>From Canada</p>
                                            </div>

                                            <p class="aspas">"</p>
                                        </div>
                                        <div class="nome-mensagem">
                                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis nemo
                                                sit voluptate explicabo, voluptates quos ea alias recusandae sint
                                                quidem?"</p>
                                        </div>
                                    </div>

                                    <div class="foto-depoimento">
                                        <img src="assets/img/testimaonial-img-bg.png" alt="">
                                        <img src="assets/img/testimaonial.png" alt="">

                                    </div>


                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-depoimento">

                                    <div class="mensagem">
                                        <div class="nome">
                                            <div class="nome-inner">
                                                <h4>Roberts Bush</h4>
                                                <p>From Canada</p>
                                            </div>

                                            <p class="aspas">"</p>
                                        </div>
                                        <div class="nome-mensagem">
                                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis nemo
                                                sit voluptate explicabo, voluptates quos ea alias recusandae sint
                                                quidem?"</p>
                                        </div>
                                    </div>

                                    <div class="foto-depoimento">
                                        <img src="assets/img/testimaonial-img-bg.png" alt="">
                                        <img src="assets/img/testimaonial.png" alt="">

                                    </div>


                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-depoimento">

                                    <div class="mensagem">
                                        <div class="nome">
                                            <div class="nome-inner">
                                                <h4>Roberts Bush</h4>
                                                <p>From Canada</p>
                                            </div>

                                            <p class="aspas">"</p>
                                        </div>
                                        <div class="nome-mensagem">
                                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis nemo
                                                sit voluptate explicabo, voluptates quos ea alias recusandae sint
                                                quidem?"</p>
                                        </div>
                                    </div>

                                    <div class="foto-depoimento">
                                        <img src="assets/img/testimaonial-img-bg.png" alt="">
                                        <img src="assets/img/testimaonial.png" alt="">

                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next">Next</div>
                        <div class="swiper-button-prev">Prev</div>
                    </div>

                </div>

            </section>



            <section id="team">
                <div class="team-container">
                    <div class="team-txt">

                        <h3>TEAM</h3>
                        <ul>
                            <li>
                                <h4>our team</h4>
                            </li>

                            <li>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto eos, impedit
                                    sequi dolor autem aperiam incidunt tempore cumque reiciendis ea in ut accusantium
                                    voluptas, nesciunt dolorum repudiandae ratione dicta quia sapiente. Nihil, dicta
                                    delectus laborum amet voluptate quas possimus placeat!</p>
                            </li>
                            <li><a href=""><button> VIEW MORE</button></a></li>
                        </ul>




                    </div>
                    <div class="team-card">
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide"><img src="assets/img/team_single_page_slider_1.jpg" alt="">
                                    <ul>
                                        <li>
                                            <h4>lorem ipsum</h4>
                                        </li>
                                        <li>
                                            <p>lorem lorem</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="swiper-slide"><img src="assets/img/team_single_page_slider_2.jpg" alt="">
                                    <ul>
                                        <li>
                                            <h4>lorem ipsum</h4>
                                        </li>
                                        <li>
                                            <p>lorem lorem</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="swiper-slide"><img src="assets/img/team_single_page_slider_3.jpg" alt="">
                                    <ul>
                                        <li>
                                            <h4>lorem ipsum</h4>
                                        </li>
                                        <li>
                                            <p>lorem lorem</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="swiper-slide"><img src="assets/img/team_single_page_slider_4.jpg" alt="">
                                    <ul>
                                        <li>
                                            <h4>lorem ipsum</h4>
                                        </li>
                                        <li>
                                            <p>lorem lorem</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="swiper-slide"><img src="assets/img/team_single_page_slider_5.jpg" alt="">
                                    <ul>
                                        <li>
                                            <h4>lorem ipsum</h4>
                                        </li>
                                        <li>
                                            <p>lorem lorem</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="swiper-slide"><img src="assets/img/team_single_page_slider_6.jpg" alt="">
                                    <ul>
                                        <li>
                                            <h4>lorem ipsum</h4>
                                        </li>
                                        <li>
                                            <p>lorem lorem</p>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </section>

            <section id="blog">
                <div class="blog-container">
                    <div class="blog-txt">

                        <h3>BLOG NEWS</h3>
                        <ul>
                            <li>
                                <h4>BLOG/NEWS</h4>
                            </li>

                            <li>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto eos, impedit
                                    sequi dolor autem aperiam incidunt tempore cumque reiciendis ea in ut accusantium
                                </p>
                            </li>
                            <li><a href=""><button> VIEW MORE</button></a></li>
                        </ul>

                    </div>
                    <div class="blog-card">
                        <ul>
                            <li><img src="assets/img/blog_1.jpg" alt=""></li>
                            <li>
                                <p>05.11.2025</p>
                            </li>
                            <li>
                                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, magni.</h4>
                            </li>
                            <li><a href=""><button> READ MORE</button></a></li>
                        </ul>
                        <ul>
                            <li><img src="assets/img/blog_2.jpg" alt=""></li>
                            <li>
                                <p>05.11.2025</p>
                            </li>
                            <li>
                                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, magni.</h4>
                            </li>
                            <li><a href=""><button> READ MORE</button></a></li>
                        </ul>
                        <ul>
                            <li><img src="assets/img/blog_3.jpg" alt=""></li>
                            <li>
                                <p>05.11.2025</p>
                            </li>
                            <li>
                                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, magni.</h4>
                            </li>
                            <li><a href=""><button> READ MORE</button></a></li>
                        </ul>
                    </div>
                </div>
            </section>




            <a href="#" class="btn" id="back-to-top"><i class='bx bx-up-arrow-alt'></i></a>


        </main>

        <footer>

            <div class="footer-container">
                <div class="footer-links">

                    <div class="footer-logo">
                        <ul>
                            <li><img src="assets/img/logo.svg" alt=""></li>
                            <li>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non in mollitia possimus
                                    magni ad vitae numquam, sint nulla laborum perspiciatis.</p>
                            </li>
                            <li><img src="assets/img/phone.svg" alt=""><a href="#">(406)555-0120</a></li>

                        </ul>
                    </div>
                    <div class="links">
                        <ul>
                            <li>
                                <h4>QUICK LINK</h4>
                            </li>
                            <li><a href="">About</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Pricinq</a></li>
                            <li><a href="">Team</a></li>
                            <li><a href="">Contact Us</a></li>



                        </ul>
                        <ul>
                            <li>
                                <h4>QUICK LINK</h4>
                            </li>
                            <li><a href="">Appointment</a></li>
                            <li><a href="">Bloq / News</a></li>
                            <li><a href="">FA Question</a></li>
                            <li><a href="">Team</a></li>

                        </ul>
                        <ul>
                            <li>
                                <h4>LOCATION & CONTACT</h4>
                            </li>
                            <li><img src="assets/img/location.svg" alt=""><a href=""> 901 N Pitt Str., Suite 170
                                    Alexandria,NY,USA</a></li>
                            <li><a href=""><img src="assets/img/email.svg" alt=""> example@gmail.com</a></li>
                            <li><a href="#"> <img src="assets/img/calender.svg" alt="">Sun - Thi: Open 27/7</a></li>
                        </ul>
                    </div>

                </div>

                <div class="footer-copy">
                    <p>&copy;Copyright 2024,All Right reserved</p>

                    <ul>
                        <li><a href=""><img src="assets/img/linkedinicon.svg" alt=""></a></li>
                        <li><a href=""><img src="assets/img/facebookicon.svg" alt=""></a></li>
                        <li><a href=""><img src="assets/img/instagramicon.svg" alt=""></a></li>
                        <li><a href=""><img src="assets/img/twittericon.svg" alt=""></a></li>
                    </ul>
                </div>

            </div>
        </footer>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script/script.js"></script>
</body>

</html>