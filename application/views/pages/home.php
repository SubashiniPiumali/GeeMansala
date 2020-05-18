<div class="columns">
    <div class="column is-full">

        <figure class="image is-3by1">
        <img src="https://www.justrecruitment.co.uk/site-media/5dde475f1bd40f000f73e26d/Want_to_get_into_classical_music_banner.jpg">
        </figure>
    </div>

</div>

<div class="container">

    <div class="columns">
        <div class="column is-8">
        <div class="box">
            <h2 class="title is-3">Latest Posts</h2>
            
                <h5 class="title is-4"><a href="<?php echo base_url(); ?>pages/<?php echo $latestposts['post_id']; ?>"><?php echo $latestposts['title']; ?></a></h5>
                <p class="subtitle is-6">
                    <i class="fas fa-book"></i><small> <?php echo $latestposts['category']; ?> </small><i class="fas fa-clock"></i> <?php echo $latestposts['created_at']; ?><br><br>
                    <?php echo $latestposts['body']; ?>
                </p>
                <hr>
                <p class="subtitle is-6">
                    <strong>Audio File</strong>
                    </p>
                        <audio controls>
                        <source src="<?php echo base_url(); ?>assets/files/audio/<?php echo $latestposts['mp3']; ?>.mp3" type="audio/mpeg">
                        
                        Your browser does not support the audio tag.
                        </audio>
                        <hr>
               
                <h5 class="title is-4"><a href="">Reviews</a></h5>
                <?php if($reviews == null){ ?>
                        <p>No reviews added.</p>
                    <?php } ?>  
                <?php foreach ($reviews as $review) : ?>
                   
                    <hr>
                    
                        <div class="box">
                        
                    <article class="media">
                    <figure class="media-left">
                        <p class="image is-64x64">
                        <img src="https://bulma.io/images/placeholders/128x128.png">
                        </p>
                    </figure>
                        <div class="media-content">
                        <div class="content">
                            
                            <p>
                            <strong><?php echo $review['name']; ?></strong>
                            <br>
                            <?php echo $review['review']; ?>
                            </p>
                        </div>


                        <nav class="level is-mobile">
                            <div class="level-left">
                            <a class="level-item" aria-label="reply">
                                <span class="icon is-small">
                                <i class="fas fa-reply" aria-hidden="true"></i>
                                </span>
                            </a>
                            <a class="level-item" aria-label="retweet">
                                <span class="icon is-small">
                                <i class="fas fa-retweet" aria-hidden="true"></i>
                                </span>
                            </a>
                            <a class="level-item" aria-label="like">
                                <span class="icon is-small">
                                <i class="fas fa-heart" aria-hidden="true"></i>
                                </span>
                            </a>
                            </div>
                        
                        

                        
                        </nav>

                        </div>
                    </article>
                    </div>
                <?php endforeach; ?>
        </div>
        </div>
        
        <div class="column is-4">
        <div class="box">
            <h2 class="title is-3">Recent Posts</h2>


            <?php foreach ($posts as $post) : ?>

                <h5 class="title is-4"><a href="<?php echo base_url(); ?>pages/<?php echo $post['post_id']; ?>">
                        <?php echo $post['title']; ?>

                    </a></h5>
                    <p class="subtitle is-6">
        <i class="fas fa-book"></i>
        <small> <?php echo $post['category']; ?> </small>
        <i class="fas fa-clock"></i> <?php 
                  $d=strtotime($post['created_at']);
                  echo date("F d,Y , H:m", $d); 
                ?><br>
        <?php //echo $post['body']; ?>
        <?php echo word_limiter($post['body'],15); ?>
      </p>
      <hr>


            <?php endforeach; ?>


            </div>
        </div>

    </div>




</div>