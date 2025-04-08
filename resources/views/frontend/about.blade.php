@extends('frontend.layouts.main')
@section('main-section')
      <section id="contant" class="contant main-heading" style="padding-bottom:0;margin-bottom:-1px;position:relative;z-index:1;">
         <div class="aboutus">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-12">
                     <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="full">
                           <h3>SPORTY LEAGUE HISTORY</h3>
                           <p>The FIFA World Cup is the most prestigious football tournament in the world, uniting nations every four years in a celebration of sport,
                               culture, and passion. Organized by the Fédération Internationale de Football Association (FIFA), the event features 32 (soon 48) national 
                               teams competing for global glory. Since its inaugural edition in 1930, the World Cup has grown into a cultural phenomenon—watched by billions 
                               of fans worldwide and hosted across iconic stadiums and vibrant cities.
                           </p>
                           <ul class="icon-list">
                              <li><i class="fa fa-angle-right"></i> Global Reach: Over 200 nations compete in qualifiers; only the best reach the main stage.</li>
                              <li><i class="fa fa-angle-right"></i> Diverse Hosts: From Brazil to South Africa to Qatar—each edition showcases a unique cultural flavor.</li>
                              <li><i class="fa fa-angle-right"></i> Moments That Matter: Legendary goals, iconic players, and unforgettable drama.</li>
                              <li><i class="fa fa-angle-right"></i> Inclusive Spirit: A tournament that brings people together regardless of borders, language, or background.</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-5 col-sm-5 col-xs-12">
                        <img class="img-responsive" src="frontend/assets/css/images/img-07.jpg" alt="#" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="dark-section" style="background:url(frontend/assets/css/images/walle.jpg)">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-12">
                     <div class="heading-main">
                        <h2>Our Testimonials</h2>
                     </div>
                     <div class="testimonial-slider">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                           <!-- Carousel Slides / Quotes -->
                           <div class="carousel-inner text-center">
                              <!-- Quote 1 -->
                              <div class="item active">
                                 <blockquote>
                                    <div class="row">
                                       <div class="col-sm-10 col-sm-offset-1">
                                          <p>"Attending the FIFA World Cup was a dream come true. The energy inside the stadiums was electric, and the fan zones made every day an unforgettable celebration. The app made navigating everything so easy!"</p>
                                          <small>Maria Gómez – 🇪🇸 Football Fan from Spain</small>
                                       </div>
                                    </div>
                                 </blockquote>
                              </div>
                              <!-- Quote 2 -->
                              <div class="item">
                                 <blockquote>
                                    <div class="row">
                                       <div class="col-sm-10 col-sm-offset-1">
                                          <p>"The athlete village was beyond my expectations—smart rooms, healthy food, and training support 24/7. Every detail was taken care of. Truly world-class hospitality!"</p>
                                          <small>Samuel Kim – 🇰🇷 Athlete, National Team Player</small>
                                       </div>
                                    </div>
                                 </blockquote>
                              </div>
                              <!-- Quote 3 -->
                              <div class="item">
                                 <blockquote>
                                    <div class="row">
                                       <div class="col-sm-10 col-sm-offset-1">
                                          <p>"Organizing the World Cup was a massive challenge, but thanks to AI-driven logistics and real-time analytics, everything from crowd flow to transport was optimized smoothly. It was innovation in action."</p>
                                          <small>Aisha Al-Mansoori – 🇶🇦 Event Operations Manager</small>
                                       </div>
                                    </div>
                                 </blockquote>
                              </div>
                           </div>
                           <!-- Bottom Carousel Indicators -->
                           <ol class="carousel-indicators">
                              <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" alt="">
                              </li>
                              <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg" alt="">
                              </li>
                              <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                              </li>
                           </ol>
                           <!-- Carousel Buttons Next/Prev -->
                           <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                           <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @endsection