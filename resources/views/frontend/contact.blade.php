@extends('frontend.layouts.main')

@section('main-section')
      <section id="contant" class="contant main-heading team">
         <div class="row">
            <div class="container">
               <div class="contact">
                  <div class="col-md-12">
                     <div class="map"> 
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1276352.848944694!2d70.82592193228258!3d23.140674454202905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e83c17dc37ee3%3A0xab976f6a3a1f932d!2sNarendra%20Modi%20Stadium!5e0!3m2!1sen!2sin!4v1743931668274!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="contact-info">
                        <div class="kode-section-title">
                           <h3>Contact Info</h3>
                        </div>
                        <div class="kode-forminfo">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam aliquip..</p>
                           <ul class="kode-form-list">
                              <li>
                                 <i class="fa fa-home"></i> 
                                 <p><strong>Address:</strong> 805 consectetur adipiscing elit, sed do eiusmod tempor</p>
                              </li>
                              <li>
                                 <i class="fa fa-phone"></i> 
                                 <p><strong>Phone:</strong>  123 456 7890</p>
                              </li>
                              <li>
                                 <i class="fa fa-envelope-o"></i> 
                                 <p><strong>Email:</strong> Info@sportyleague.com</p>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="contact-us">
                        <form method="post" class="comments-form" id="contactform">
                           <ul>
                              <li><input type="text" id="name" name="name" class="required" placeholder="Name *"></li>
                              <li><input type="text" id="email" name="email" class="required email" placeholder="Email *"></li>
                              <li><input type="text" name="address" id="address" placeholder="Address:"></li>
                              <li><textarea name="message" id="message" placeholder="Add your message"></textarea></li>
                              <li><input class="thbg-color" type="submit" value="send"></li>
                           </ul>
                           <div class="hidden-me" id="contact_form_responce">
                              <p></p>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @endsection