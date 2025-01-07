<!--Subscribe Area-->
    <section class="suscribe_area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="subscribe_left">
              <h5>SUBSCRIBE TO OUR NEWS LETTER</h5>
              <p>
                Enter your e-mail address to receive regular updates, as well as news on upcoming events and special offers.
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="subscribe-right">
              <form>
                <input type="email" placeholder="Email Address" required>
                <button type="submit" value="submit"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Subscribe Area-->








    <!--Modal Area-->
    <!-- <div class="modal fade modal-lg first-order-popup " id="myModal" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-modal="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body my-modal">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            <a class="modal-brand" href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo">
              </a>  
            <h3 class="title"> GET 10% OFF YOUR FIRST ORDER! </h3>
            <p><strong> Register your Email</strong> and you will be added to our <strong> Email Mailing List</strong> and you will receive a <strong> 10% off Voucher</strong> to use on your next order. (Valid Once per Customer)</p> <br>
            <p><strong> Don’t worry, we hate spam too</strong> – that’s why we send out emails only to showcase new items or announce <strong> Special Offers</strong> and <strong> Launch Drops</strong> for this specific website. You have the option to unsubscribe at any moment.</p>
            <form class="subscript_form_box">
                      <div class="form-group frm_box">
                        <input type="text" required="" class="form-control" id="exampleInputtext" aria-describedby="emailHelp" placeholder="Name">
                      </div>
                      <div class="form-group frm_box">
                        <input type="email" required="" class="form-control" id="exampleInputemail" placeholder="info@gmail.com">
                      </div>
                      <div class="frm_box_submit text-center">
                      <input type="submit" value="SUBSCRIBE">
                      </div>
                  </form>

          </div>
        </div>
      </div>
    </div> -->
    <!--Modal Area-->
    
    <!--Jquery JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--Jquery JS-->
    <!--Slick JS-->
    <script src="<?php bloginfo('template_directory'); ?>/js/slick.min.js"></script>
    <!--Slick JS-->
    <!--Slick JS-->
    <script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
    <!--Slick JS-->
    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!--Bootstrap JS-->
    <!--Other JS-->
    <!--Animation JS-->
    <!---animation-js-->
    <script src="<?php bloginfo('template_directory'); ?>/js/aos.js"></script> 
    <script>
      // Init AOS
      function aos_init() {
        AOS.init({
          duration: 1000,
          easing: "ease-in-out-back",
          once: true
        });
      }
      $(window).on('load', function() {
        aos_init();
      });
    </script> 
    <!---animation-js-->
    <!---fancybox---->
    <script src="<?php bloginfo('template_directory'); ?>/js/fancybox.min.js"></script>
    <!---animation-js-->
    <script>
        $(document).ready(function(){
    $(".blog_box").slice(0, 3).show();
    $("#loadMore").on("click", function(e){
      e.preventDefault();
      $(".blog_box:hidden").slice(0, 4).slideDown();
      if($(".blog_box:hidden").length == 0) {
        $("#loadMore").text("No Content").addClass("noContent");
      }
    });
    
  })
    </script>


<?php wp_footer(); ?>
</body>
</html>
