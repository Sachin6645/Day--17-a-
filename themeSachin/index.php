<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-2</title>
    <link rel="stylesheet" href="./Sachin.css">
    
    <?php wp_head(); ?>
</head>
<body>
    <!-- header part staart -->
    <div class="cont">
        <div class="row header">
            <div class="col-lg-6 header_left">
                <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
            <div class="col-lg-6 header_right d-flex justify content-end">
                <p>৯ অগ্রহায়ণ, ১৪২৯</p>
                <a href="#">English</a>
            </div>
        </div>
    </div>
    <!-- header part end-->
    <!-- logo paart start -->
    <div class=" logo cont">
        <div class="row">
            <div class="col-lg-5 logo_left">
                <a href="#">
                  <?php the_custom_logo(); ?>
                  
                </a>
            </div>
            <div class="col-lg-5 logo_search">
                <input type="text" placeholder="খুঁজুন "> <button>অনুসন্ধান</button>
            </div>
            <div class="col-lg-2 logo_right d-flex justify content-end">
                <div class="logo_1">
                    <img src="./asstes/images/header/a2i-logo-footer.png" alt="">
                </div>
                <div class="logo_2">
                    <p>সাথে থাকুন:</p>
                    <img src="./asstes/images/header/facebook-icon.png" alt="">
                    <img src="./asstes/images/header/twitter-blue-icon.png" alt="">
                    <img src="./asstes/images/header/youtube-icon.png" alt="">
                    <img src="./asstes/images/header/gplus-icon.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- logo paart end -->
    <!-- menu part start -->
    <div class="cont">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                    wp_nav_menu([
                      'menu_location'=>'TM',
                      'menu_class'=>'navbar-nav'
                    ]); 
                     ?>
                    <!-- <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">হোম</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">ই-সেবাসমূহ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">সেবাখাত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">ব্যবসা-বাণিজ্য</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> বৈদেশিক বিনিয়োগ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">আইন-বিধি</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">তথ্য বাতায়ন</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">সেবাকুঞ্জ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">ফরমস</a>
                      </li>
                      
                    </ul> -->
                  </div>
                </div>
              </nav>
        </div>
    </div>
    <!-- menu part end -->
    <!-- hero part start -->
    <section class="cont">
        <div class="row">
            <div class="col-lg-8 hero_left">
                <div class="banner mt-3">
                    <a href="#">
                      <?php  dynamic_sidebar('mainbanner'); ?>
                      <img src="./asstes/images/padmabanner.jpg" class="d-block w-100" alt="">
                    </a>

                </div>
                <div class="slider_1">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <!-- <?php $qry1= new WP_Query([
                            'post_type'=>"post",
                            'category_name'=>'slider'
                        ]); ?> -->
                        <div class="carousel-inner">
                          <?php
                          $x=0;
                           while(have_posts()):the_post();
                           $x++;
                           ?>
                          <div class="carousel-item <?= ($x==1)?'active':''?> ">
                            <?php the_post_thumbnail(); ?>
                          </div>
                          <?php endwhile;?>
                          
                        </div>
                        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button> -->
                      </div>
                </div>
                <div class="tab mt-3">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">দপ্তর ভিত্তিক সেবা</button>
                          </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >সকল ই-সেবা</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row"> 
                                <div class="col-lg-2 tab_1">
                                    <a href="#"><img src="./asstes/images/tab/agriculture.png" alt="">কৃষি</a>
                                </div>
                                <div class="col-lg-2 tab_1">
                                    <a href="#"><img src="./asstes/images/tab/call_center.png" alt="">কল সেন্টার</a>
                                </div>
                                <div class="col-lg-2 tab_1">
                                    <a href="#"><img src="./asstes/images/tab/agriculture.png" alt="">মৎস্য ও প্রাণী</a>
                                </div>
                                <div class="col-lg-2 tab_1">
                                    <a href="#"><img src="./asstes/images/tab/mobile_service.png" alt="">মোবাইল সেবা</a>
                                </div>
                                <div class="col-lg-2 tab_1">
                                    <a href="#"><img src="./asstes/images/tab/helpdesk.png" alt="">হেল্পডেস্ক</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            
                        </div>
                        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                      </div>
                </div>
                <div class="news">
                    <h1>উদ্যোগ</h1>
                    <?php dynamic_sidebar('list'); ?>
                    <!-- <ul><li><a href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০) (১৩-০৬-২০১৬)</a></li></ul>
                    <ul><li><a href="#">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা। (১১-০৪-২০১৫)</a></li></ul>
                    <ul><li><a href="#">বাংলাদেশ সরকারের ষষ্ঠ পঞ্চবার্ষিক পরিকল্পনা। (০৭-০৪-২০১৫)</a></li></ul>
                    <ul><li><a href="#">বাংলাদেশ সরকারের প্রেক্ষিত পরিকল্পনা (২০১০-২০২১)। (০৭-০৪-২০১৫)</a></li></ul>
                    <ul><li><a href="#">দূর্যোগ ব্যবস্থাপনা জন্য জাতীয় পরিকল্পনা ২০১০-২০১৫। (০৭-০৪-২০১৫)</a></li></ul> -->

                </div>
                <div class="btn"><button><a href="#">সকল</a></button></div>
                <section class="cont">
                    <div class="row">
                        <div class="col-lg-4 hb d-block w-100">
                            <img src="./asstes/forms_portal_logo (1).png" alt="">
                            <img src="./asstes/forms_portal_logo (1).png" alt="">
                            <img src="./asstes/forms_portal_logo (1).png" alt="">
                            <img src="./asstes/vision_2021_bn.png" alt="">
                            <img src="./asstes/infokosh-logo (1).png" alt="">
                            <img src="./asstes/visit-bangladesh-logo (1).png" alt="">
                        </div>
                        <div class="col-lg-4 hV d-block w-100">
                            <p>আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</p>
                            <iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p>অন্যান্য ভিডিও</p>
                            <iframe width="237" height="200" src="https://www.youtube.com/embed/zBAKSZqTkRg" title="How to Identify and Scout for Fall Armyworm in Bangla (accent from Bangladesh)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="237" height="200" src="https://www.youtube.com/embed/zBAKSZqTkRg" title="How to Identify and Scout for Fall Armyworm in Bangla (accent from Bangladesh)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="237" height="200" src="https://www.youtube.com/embed/zBAKSZqTkRg" title="How to Identify and Scout for Fall Armyworm in Bangla (accent from Bangladesh)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                
               
                    </div>
                </section>
            </div>
            
            
            <div class="col-lg-4 hero_right">

                <div class="sideber_img">
                  <?php dynamic_sidebar('sideimg'); ?>
                    <!-- <img src="./asstes/images/side bar/Bangladesh-Directory.jpg" class="d-block w-100 mb-2" alt="">
                    <img src="./asstes/images/side bar/mygov_bn.jpg" class="d-block w-100 mb-2" alt="">
                    <img src="./asstes/images/side bar/discount_bn.jpg" class="d-block w-100 mb-2" alt="">
                    <img src="./asstes/images/side bar/Jonotar-Sorkar-banner-Bangl (1).jpg" class="d-block w-100 mb-2" alt="">
                    <img src="./asstes/images/side bar/Bangladesh-Directory.jpg" class="d-block w-100 mb-2" alt=""> -->
                </div>
                <div class="sideber_video">
                    <h1>সকল বাতায়ন</h1>
                    <form action="">
                        <select name="" id="">
                            <option value="">ওয়েবসাইট বাছাই করুন</option>
                            <option value="">মন্ত্রণালয়</option>
                            <option value="">অধিদপ্তর</option>
                            <option value="">ঢাকা বিভাগ</option>
                        </select>
                        <button>চলুন</button>
                    </form>
                    <h2>মুজিব১০০ আ্যাপ</h2>
                    <?php dynamic_sidebar('sidevideo');?>
                  
                    <h3>মাস্ক পরুন সেবা নিন</h3>
                    <img src="./asstes/mask-bd-portal (1).jpg" class="d-block w-100" alt="">
                    <h4>ডেঙ্গু প্রতিরোধে করণীয়</h4>
                    <img src="./asstes/images/side bar/dengu.jpg" class="d-block w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- hero part end -->
    
    
    <!-- footer part staart -->
    <div class="cont">
        <div class="row footer_top">
        <?php dynamic_sidebar('footer'); ?>

            <!-- <img src="./asstes/images/footer/download.png" alt=""> -->
        </div>
        <div class="row footer_bottom">
            <div class="col-lg-8 fb_1">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                      
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">গোপনীয়তার নীতিমালা</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">ব্যবহারের শর্তাবলি</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">সার্বিক সহযোগিতায়</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">সাইট ম্যাপ</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">সচরাচর জিজ্ঞাসা</a>
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                  </nav>
                  <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
            </div>
            <div class="col-lg-4 fb_2 text-end">
                <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
                <img src="./asstes/images/footer/np-logo-set.png" alt="">
            </div>
        </div>
    </div>
    <!-- footer part end -->
    <?php wp_Footer(); ?>
    <script src="./asstes/js/bootstrap.bundle.min.js"></script>
</body>
</html>