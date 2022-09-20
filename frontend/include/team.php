<!-- Team section start -->
<section class="team-wrap ptb-100 bg-mystic">
    <div class="container">
        <div class="section-title style1 text-center mb-30">
            <span>Organizers</span>
            <h2>Meet Our Lovely Team Member</h2>
        </div>
        <div class="team-slider-one owl-carousel">
            <?php
                 $team_query =  "SELECT * FROM team_member";
                 $team_res = $conn -> query($team_query);
                 if($team_res -> num_rows > 0){
                     while($row = $team_res -> fetch_assoc()){
                           extract($row);
            ?>
            <div class="team-card style1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <div class="team-member-img">
                    <img src="../admin/assets/images/member/<?php echo $member_profile;?>" alt="Image">
                    <div class="member-social">
                        <i class="ri-share-line"></i>
                        <ul class="social-profile list-style style1">
                            <li>
                                <a target="_blank" href="https://facebook.com/">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://pinterest.com/">
                                    <i class="ri-pinterest-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://twitter.com/">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://instagram.com/">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="team-member-info">
                    <h3><?php echo $member_name;?></h3>
                    <span><?php echo $member_position;?></span>
                </div>
            </div>
            <?php }} ?>
        </div>
    </div>
</section>
<!-- Team section end -->