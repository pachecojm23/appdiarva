<!DOCTYPE html>
<html lang="en">

<head>
    @include('assets/head')

</head>

@include('navbar/navbar')

 <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contacto</h2>
                </div>
            </div>
            <!--div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div-->
                  <!-- Content Row -->
        <div class="row">
            
<!-- Map Column -->
<div class="col-md-8">
    <!-- Embedded Google Map -->
    <!--iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe-->
    <iframe src="https://mapsengine.google.com/map/embed?mid=zrSYJSnNy4AA.kMwmFs14StQk" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="480"></iframe>
</div>

            
            
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <p>
                    Barrio el Calvario<br> Av. Benjamín Estrada Valiente, Metapán, Santa Ana<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Teléfono</abbr>: (+503) 2402-3349</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">Email</abbr>: <a href="mailto:colegiobillgates@aguilasamericanas.net">colegiobillgates@aguilasamericanas.net</a>
                </p>
                <p>
                    <i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">Lunes a Viernes:</abbr> 7:30 AM a 12:30 PM<br>
                    
                    <i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">Lunes a Viernes:</abbr> 1:30 AM a 5:00 PM<br> 
                    
                    <i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">Sábados:</abbr> 7:30pm a 5:00pm
                </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="http://on.fb.me/1z8SwNx" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
        </div>
    </section>

@include('index/footer')

<!-- Contact Form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
   
@include('assets/javascript')

</body>

</html>