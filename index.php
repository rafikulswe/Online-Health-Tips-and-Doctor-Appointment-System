<?php session_start();
    require_once('functions/function.php');
    needLogged();
    get_part('header.php');
    //print_r(time());
?>
 <?php
if(isset($_SESSION["user"]))
{
 if((time() - $_SESSION['last_time']) > 100)
 {
 header("location:logout.php");
 }
 else
 {
 $_SESSION['last_time'] = time();
 }
}
else
{
 header('Location:login.php');
}
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 10)) {

  session_destroy();
  session_unset();
     header("location:logout.php");
    }
 $_SESSION['LAST_ACTIVITY'] = time();

?>


<section class="slider-main">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

<!--   Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      <div class="item active">
  <img data-animation="animated pulse" src="img/slider.PNG" alt="...">
</div>





  </div>


  <a class="left left-control" href="#carousel-example-generic" role="button" data-slide="prev">
     <img src="img/left-slider.png" class="img-responsive" alt="">
  </a>
  <a class="right right-control" href="#carousel-example-generic" role="button" data-slide="next">
   <img src="img/right-slider.png" class="img-responsive" alt="">
  </a>
</div>
</section>



<section class="welcome">
    <div class="container">
        <div class="col-sm-12 text-center">
             <div class="welcome-item">
                 <h5>Welcome to our</h5>
                 <h4 class="title-school">Doctors<span> Appointment</span> Website</h4>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 <a class="btn-create" href="#">read more</a>
             </div>
        </div>
    </div>
</section>



 <section>
            <div class="container">
               <div class="col-sm-12 text-center">
                      <div class="controler">
                       <div class="img-responsive pre"><img src="img/arrow-right.png" alt=""></div>
                       <div class="title-school"> Health Tips </div>
                       <div class="img-responsive next"> <img src="img/arrow-left.png" alt=""></div>
                       <div class="clearfix"></div>
                      </div>
               </div>
              <div class="clearfix"></div>

           <div class="succes-slider">
               <div class="col-sm-4">
               <div class="success-item">
                	<div class="image-box">
                    	<img class="img-responsive" src="img/success-one.jpg" alt="Image-1">
                    	<h2>Truth About Coffee</h2>
                    </div>
                    <div class="text-desc">
                    	<h3>Truth About Coffee</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    	<a href="#" class="btn">Learn more</a>
                    </div>
                </div>
            </div><!--col-sm-4-main end-->


              <div class="col-sm-4">
               <div class="success-item">
                	<div class="image-box">
                    	<img class="img-responsive" src="img/sucees-two.jpg" alt="Image-1">
                    	<h2>Truth About Coffee</h2>
                    </div>
                    <div class="text-desc">
                    	<h3>Truth About Coffee</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    	<a href="#" class="btn">Learn more</a>
                    </div>
                </div>
            </div><!--col-sm-4-main end-->


              <div class="col-sm-4">
               <div class="success-item">
                	<div class="image-box">
                    	<img class="img-responsive" src="img/success-three.jpg" alt="Image-1">
                    	<h2>Truth About Coffee</h2>
                    </div>
                    <div class="text-desc">
                    	<h3>Truth About Coffee</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    	<a href="#" class="btn">Learn more</a>
                    </div>
                </div>
            </div><!--col-sm-4-main end-->
           </div><!--succes-slider-->
     </div> <!--container end-->
 </section>




<section class="section-default">
        <div class="container">
            <div class="col-sm-6">
                 <div class="news-event">
                     <h2>Featured Health Topics</h2>

                     <div class="news-slick">
                        <div class="news-item">
                         <a href="#">
                           <div class="news-clock">
                               <h4>March</h4>
                               <h3>06</h3>
                           </div>
                           <div class="news-details">
                               <p>Ten Scholastica students were awarded for achieving highest marks in different subjects in the world and in the  awarded for achieving highest ...</p>
                           </div>
                           <div class="clearfix"></div>
                         </a>
                       </div><!--news-item end-->


                       <div class="news-item">
                         <a href="#">
                           <div class="news-clock">
                               <h4>March</h4>
                               <h3>06</h3>
                           </div>
                           <div class="news-details">
                               <p>Ten Scholastica students were awarded for achieving highest marks in different subjects in the world and in the  awarded for achieving highest ...</p>
                           </div>
                           <div class="clearfix"></div>
                         </a>
                       </div><!--news-item end-->


                       <div class="news-item">
                         <a href="#">
                           <div class="news-clock">
                               <h4>March</h4>
                               <h3>06</h3>
                           </div>
                           <div class="news-details">
                               <p>Ten Scholastica students were awarded for achieving highest marks in different subjects in the world and in the  awarded for achieving highest ...</p>
                           </div>
                           <div class="clearfix"></div>
                         </a>
                       </div><!--news-item end-->


                       <div class="news-item">
                         <a href="#">
                           <div class="news-clock">
                               <h4>March</h4>
                               <h3>06</h3>
                           </div>
                           <div class="news-details">
                               <p>Ten Scholastica students were awarded for achieving highest marks in different subjects in the world and in the  awarded for achieving highest ...</p>
                           </div>
                           <div class="clearfix"></div>
                         </a>
                       </div><!--news-item end-->

                       <div class="news-item">
                         <a href="#">
                           <div class="news-clock">
                               <h4>March</h4>
                               <h3>06</h3>
                           </div>
                           <div class="news-details">
                               <p>Ten Scholastica students were awarded for achieving highest marks in different subjects in the world and in the  awarded for achieving highest ...</p>
                           </div>
                           <div class="clearfix"></div>
                         </a>
                       </div><!--news-item end-->


                       <div class="news-item">
                         <a href="#">
                           <div class="news-clock">
                               <h4>March</h4>
                               <h3>06</h3>
                           </div>
                           <div class="news-details">
                               <p>Ten Scholastica students were awarded for achieving highest marks in different subjects in the world and in the  awarded for achieving highest ...</p>
                           </div>
                           <div class="clearfix"></div>
                         </a>
                       </div><!--news-item end-->

                     </div>


                      <a href="#" class="news-info"><span>read more</span><i class="fa fa-angle-right"></i></a>
            </div><!--col-sm-6 end-->
            </div> <!--container end-->




            <div class="col-sm-6">
                 <div class="news-event">
                     <h2>Upcoming Events</h2>
                      <div class="news-right">
                          <div class="right-item">
                           <a href="#">
                              <div class="news-clock">
                              <img class="img-responsive" src="img/news-1.jpg" alt="">
                               </div>
                               <div class="news-details">
                               <h5>29, March, 2016</h5>
                               <p>Ten Scholastica students were awarded for achieving highest marks in different subjects in the world and in the  ...</p>
                              </div>
                           <div class="clearfix"></div>
                         </a>
                       </div><!--news-item end-->

                       <div class="right-item">
                           <a href="#">
                              <div class="news-clock">
                              <img class="img-responsive" src="img/news-1.jpg" alt="">
                               </div>
                               <div class="news-details">
                               <h5>29, March, 2016</h5>
                               <p>Ten Scholastica students were awarded for achieving highest marks in different subjects in the world and in the  ...</p>
                              </div>
                           <div class="clearfix"></div>
                         </a>
                       </div><!--news-item end-->


                       <div class="right-item">
                           <a href="#">
                              <div class="news-clock">
                              <img class="img-responsive" src="img/news-1.jpg" alt="">
                               </div>
                               <div class="news-details">
                               <h5>29, March, 2016</h5>
                               <p>Ten Scholastica students were awarded for achieving highest marks in different subjects in the world and in the  ...</p>
                              </div>
                           <div class="clearfix"></div>
                         </a>
                       </div><!--news-item end-->



                       <div class="right-item">
                           <a href="#">
                              <div class="news-clock">
                              <img class="img-responsive" src="img/news-1.jpg" alt="">
                               </div>
                               <div class="news-details">
                               <h5>29, March, 2016</h5>
                               <p>Ten Scholastica students were awarded for achieving highest marks in different subjects in the world and in the  ...</p>
                              </div>
                           <div class="clearfix"></div>
                         </a>
                       </div><!--news-item end-->



                       <div class="right-item">
                           <a href="#">
                              <div class="news-clock">
                              <img class="img-responsive" src="img/news-1.jpg" alt="">
                               </div>
                               <div class="news-details">
                               <h5>29, March, 2016</h5>
                               <p>Ten Scholastica students were awarded for achieving highest marks in different subjects in the world and in the  ...</p>
                              </div>
                           <div class="clearfix"></div>
                         </a>
                       </div><!--news-item end-->
                    </div><!--news-right end-->

                     <a href="#" class="news-info"><span>read more</span><i class="fa fa-angle-right"></i></a>
                 </div> <!--news-event end-->


            </div><!--col-sm-6 end-->
        </div>

</section>
<?php
get_part('footer.php');
?>
