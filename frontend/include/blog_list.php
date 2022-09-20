
            <?php
            $page = "";
            $per_page = 3;
            if(isset($_GET['page'])){
            $page = $_GET['page'];
            }
            if(!empty($page) && ($page > 1)){
            $last_page = ($page*$per_page);
            $page_1 = ($last_page - $per_page);
            }else{
            $last_page = 3;
            $page_1 = 0;
            }
            $blog_query_count = "SELECT * FROM add_content a JOIN categories c ON  c.cat_id = a.content_types ";
            $find_count = $conn->query($blog_query_count);
            $count = $find_count->num_rows;
            $count = ceil($count/$per_page);
            $blog = "SELECT * FROM add_content ORDER BY add_content.created_at DESC LIMIT $page_1, $last_page ";
            $res_blog =$conn -> query($blog);
            while ($row_blog = $res_blog->fetch_assoc()){
            extract($row_blog);
            ?>
            <div class="blog-card style1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                 xmlns="http://www.w3.org/1999/html">
                <div class="blog-img"><img width="100" src="../admin/assets/images/content/<?php echo $feature_image;?>" alt="Image">
                </div>
                <div class="blog-info">
                    <a href="blog-details.php?blog=<?php echo $id;?>" class="blog-date"><?php echo $created_at;?></a>
                    <ul class="blog-metainfo  list-style">
                    </ul>
                    <h3><a href="blog-details.php?blog=<?php echo $id;?>"><?php echo $content_title;?></a></h3>
                    <a href="blog-details.php?blog=<?php echo $id;?>" class="link style1">Read More</a>
                </div>
            </div>
            <?php } ?>
