<!-- Testimonial Section Start -->
<section class="testimonial-wrap style2 ptb-100 bg-mystic">
    <div class="container">
        <div class="section-title style1 text-center mb-30">
            <span>Our Testimonial</span>
            <h2>Our Client's Feedback</h2>
        </div>
        <div class="testimonial-slider-one owl-carousel">
            <?php
            $client_query =  "SELECT * FROM testimonial";
            $client_res = $conn -> query($client_query);
            if($client_res -> num_rows > 0){
            while($row = $client_res -> fetch_assoc()){
            extract($row);
            ?>
            <div class="testimonial-card style1">
                <div class="client-img">
                    <img src="../admin/assets/images/testimonial/<?php echo $client_photo;?>" alt="Image">
                </div>
                <div class="client-info-area">
                    <ul class="ratings list-style">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                    </ul>
                    <p class="client-quote"><?php echo $testimonial;?></p>
                    <div class="client-info-wrap">
                        <div class="client-info">
                            <h3><?php echo $client_name;?></h3>
                            <span><?php echo $client_position;?></span>
                        </div>
                        <div class="quote-icon">
                            <i class="flaticon-straight-quotes"></i>
                        </div>
                    </div>
                </div>
            </div>
            <?php }} ?>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->