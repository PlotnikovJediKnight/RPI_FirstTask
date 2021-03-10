<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3915c51246.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/style.css">
    <title>Первая работа по РПИ</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header_wrapper">
                <nav class="navigation">
                    <ul class="navigation_list">
                        <li class="navigation_item">home</li>
                        <li class="navigation_item">photoapp</li>
                        <li><img src="images/camera.png"></li>
                        <li class="navigation_item">design</li>
                        <li class="navigation_item">download</li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="main">
        <section class="section_main">
            <div class="container">

                <div class="section-main_wrapper">
                    <div class="section-main_content">
                        <h1 class="section-main_title">your life , a photo</h1>
                        <p  class="section-main_subtitle">print your life in a simple photo</p>
                        <a href="" class="section-main_content-btn">get started</a>
                    </div>
                    <div class="section-main_social">
                        <a href="https://twitter.com" class="section-main_social-ico"><img src="images/twitter.png"></a>
                        <a href="https://flickr.com" class="section-main_social-ico"><img src="images/flickr.png"></a>
                        <a href="https://dribbble.com" class="section-main_social-ico"><img src="images/dribbble.png"></a>
                    </div>
                </div>

            </div>
        </section>


        <section class="section_rappresent">
            <div class="secondContainer">

                <div class="section-rappresent_wrapper">
                    <div class="section-rappresent_text">
                        <h1 class="section-rappresent_title">rappresent your life with a  simple photo</h1>
                        <p  class="section-rappresent_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore 
                            magna aliqua. Ut <b>enim ad minim</b> veniam, quis 
                            nostrud exercitation ullamco laboris nisi 
                            ut aliquip ex ea commodo consequat.</p>
                        <a href="" class="section-rappresent_content-btn">get started</a>
                    </div>
                    <div class="section-rappresent_image">
                        <img src="images/handPhone.png">
                    </div>
                </div>


            </div>
        </section>


        <section class="section_design">
            <div class="thirdContainer">

                <div class="section-design_wrapper">
                    <div class="section-design_image">
                        <img src="images/frontPhone.png">
                    </div>

                    <div class="section-design_text">
                        <h1 class="section-design_title">design</h1>
                        <p  class="section-design_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore 
                            magna aliqua. Ut <b>enim ad minim</b> veniam, quis 
                            nostrud exercitation ullamco laboris nisi 
                            ut aliquip ex ea commodo consequat.</p>
                        <a href="" class="section-design_content-btn">learn more</a>

                        <div class="section-design_pages">
                            <p>01</p>
                            <p>/</p>
                            <p>05</p>
                        </div>

                        <div class="section-design_arrows">
                            <img src="images/left-arrow.png"  class="left_arrow">
                            <img src="images/right-arrow.png" class="right_arrow">
                        </div>
                    </div>

                </div>
            </div>
        </section>







        <section class="section_community">
            <div class="fourthContainer">

                <div class="section-community_wrapper">

                    <div class="section-community_text">
                        <img class="section-community_greenCamera" src="images/cameraGreen.png"> </img>
                        <p class="section-community_MainTitle">our community</p>
                        <p class="section-community_SubTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                    </div>

                    <div class="section-community_images">
                        <div class="section-community-LeftPhoto">
                            <img class="section-community_image1" src="images/truck.png"> </img>
                        </div>

                        <div class="section-community-RightPhoto">
                            <div class="section-community_arrows">  
                                <img src="images/left-arrow.png"  class="left_arrow">
                                <img src="images/right-arrow.png" class="right_arrow">
                            </div>
                            <img class="section-community_image2" src="images/leaves.png"> </img>
                        </div>
                    </div>

                </div>
            </div>
        </section>








        <section class="section_subscribe">
            <div class="fifthContainer">

                <div class="section-subscribe_wrapper">

                    <div class="section-subcribe_MainTitle">
                        <h1>subscribe to our community</h1>
                    </div>

                        <form action="" method="POST">
                            <div class="email-box">
                                <input class="mailInput" type="email" name="user_email" placeholder="your email">
                                <button class="lastButton" type="submit" name="button">
                                    <?php
                                        #очень плохо написанный и странно работающий "скрипт"
                                        $envelope_str = '<img><i class="fas fa-envelope-square"></i></img>';
                                        $check_str = '<img><i class="fas fa-check-square"></i></img>';
                                        $error_str = '<img><i class="fas fa-times"></i></img>';

                                        if (isset($_POST['user_email']) == true && empty($_POST['user_email']) == false){
                                            $email = $_POST['user_email'];
                                            if (filter_var($email, FILTER_VALIDATE_EMAIL) == true){
                                                echo $check_str;
                                            } else {
                                                echo $error_str;
                                            }
                                        } else {
                                            echo $envelope_str;
                                        }
                                    ?>
                                </button>
                            </div>
                        </form>

                </div>

            </div>
        </section>









        <section class="section_download">
            <div class="sixthContainer">

                <div class="section-download_wrapper">

                    <div class="section-download_SomeText">
                        <h1 class="MainTitle">download it</h1>
                        <p class="SubTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div class="section-download_SomeButtons">
                        <div class="ButtonOne">
                            <button class="appleTextButton">apple store</button>
                            <div class="iconWrapper">
                                <i class="fab fa-apple"></i>
                            </div>
                        </div>

                        <div class="ButtonTwo">
                            <button class="androidTextButton">play store</button>
                            <div class="iconWrapper">
                                <i class="fab fa-google-play"></i>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </main>




    <footer>
        <div class="footerContainer" >
            <div class="footer_wrapper" >
                <nav class="footer_navigation">
                    <ul class="footer_navigation_list">
                      <li class="footer_navigation_itemword1">CREDITS</li>
                      <li class="footer_navigation_itemsslash1">|</li>
                      <li class="footer_navigation_itemword2">PRIVACY</li>
                      <li class="footer_navigation_itemsslash2">|</li>
                      <li class="footer_navigation_itemword3">OUR TEAMS</li>
                    </ul>
                </nav>
                <p class="copyright_text">Copyright by phototime - all right reserved</p>
            </div>

            <div class="footer_camera" >
                <img src="./images/cameraGreen.png">
            </div>
        </div>
    </footer>




</body>

</html>