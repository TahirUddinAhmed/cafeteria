<?php
loadPartition('header');
?>
<main>
        <h2 class="text-center mt-3">Contact Us</h2>

        <section id="contact">
            <div class="container">
               <div class="contact-cards">
                   <div class="contact-card">
                       <div class="logo">
                           <i class="fa-solid fa-location-dot"></i>
                       </div>
   
                       <div class="details">
                           <h3>Our Address</h3>
                           <p>Morigaon, Assam, 782105</p>
                       </div>
   
                   </div>
                   <div class="contact-card">
                       <div class="logo">
                           <i class="fa-solid fa-envelope"></i>
                       </div>
   
                       <div class="details">
                           <h3>Email Us</h3>
                           <p><a href="mailto: ">minhaj@gmail.com</a></p>
                       </div>
                   </div>
                   <div class="contact-card">
                       <div class="logo">
                           <i class="fa-solid fa-phone-volume"></i>
                       </div>
   
                       <div class="details">
                           <h3>Call Us</h3>
                           <p><a href="tel: ">6901568807</a></p>
                       </div>
                   </div>
                   <div class="contact-card">
                       <div class="logo">
                           <i class="fa-solid fa-share-nodes"></i>
                       </div>
   
                       <div class="details">
                           <h3>Opening Hours</h3>
                           <p>Mon-Sun: 9AM to 11PM; Friday: Closed</p>
                       </div>
                   </div>
               </div>


                <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Thank you for contacting us, We will contact you soon
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> -->
            
               <div class="contact-form">
                <!-- <span class="text-danger"><?= $formErr ?? null ?></span> -->
                <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <input type="text" name="fullname" class="form-control" value="" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <input type="email" name="email" class="form-control" value="" placeholder="Enter Email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
                    </div>

                    <input type="submit" value="Send Message" class="contact-button">
                       
                </form>
               </div>
            </div>
        </section>


    </main>
<?php loadPartition('footer'); ?>