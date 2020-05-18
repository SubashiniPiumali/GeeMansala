<div class="container">
    <h4 class="title is-4"><a href=""><?php echo $post['title']; ?></a></h4>
    <br>


    <p class="subtitle is-6">
        <i class="fas fa-book"></i><small> <?php echo $post['category']; ?></small><i class="fas fa-clock"></i> <?php echo $post['created_at']; ?><br><br>
        <?php echo $post['body']; ?>
    </p>
    <hr>

    <p class="subtitle is-6">
        <strong>Audio File</strong>
    </p>
    <audio controls>
        <source src="<?php echo base_url(); ?>assets/files/audio/<?php echo $post['mp3']; ?>.mp3" type="audio/mpeg">

        Your browser does not support the audio tag.
    </audio>
    <hr>

    <?php foreach ($review as $re) : ?>


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
                            <strong><?php echo $re['name']; ?></strong>
                            <br>
                            <?php echo $re['review']; ?>
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
                        <div class="level-right">

                            <a href="<?php echo base_url(); ?>review/deletereview/<?php echo $re['review_id']; ?>/<?php echo $post['post_id']; ?>"> <button class="button is-danger is-hovered" onclick="return ConfirmDialog();" <?php if ($user_id = $this->session->userdata('user_id') === $re['user_id']) {
                                                                                                                                                                                                                    echo '';
                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    echo 'disabled';
                                                                                                                                                                                                                }
                                                                                                                                                                                                                ?>>
                                    <span class="icon is-small is-only-child">
                                        <i class="far fa-trash-alt"></i>
                                    </span>
                                    <span class="is-sr-only">Delete</span>
                                    <span>Delete Review</span>
                                </button>
                            </a>
                            &nbsp;&nbsp;




                            <script type="text/javascript">
                                var idreview = "<?php echo $re['review_id']; ?>";

                                function showDiv(idreview) {
                                    document.getElementById(idreview).style.display = "block";

                                }
                            </script>
                            <button  class="button is-warning is-hovered" onclick="showDiv(<?php echo $re['review_id']; ?>)" <?php if ($user_id = $this->session->userdata('user_id') === $re['user_id']) {
                                                                                                            echo '';
                                                                                                        } else {
                                                                                                            echo 'disabled';
                                                                                                        }
                                                                                                        ?>>
                                <span class="icon is-small">
                                    <i class="fas fa-edit"></i>
                                </span>
                                <span>Edit Review</span>
                            </button>

                        </div>



                    </nav>
                    <form action="<?php echo base_url(); ?>review/updatereview/<?php echo $post['post_id']; ?>/<?php echo $re['review_id']; ?>" method="post" id="<?php echo $re['review_id']; ?>" style="display:none;">
                        <input type="hidden" name="id" value="<?php echo $re['review_id']; ?>">
                        <textarea class="textarea" name="reviewupdate" placeholder="e.g. Hello world" required></textarea>

                        <br>
                        <div class="buttons">
                            <button class="button is-info ">Update</button>
                        </div>
                    </form>
                </div>
            </article>
        </div>

        <hr>

    <?php endforeach;  ?>
    <?php echo form_open('review/create'); ?>

    <textarea class="textarea" name="reviewcontent" placeholder="e.g. Hello world" required></textarea>
    <br>
    <input type="hidden" class="form-control" name="postid" value="<?php echo $post['post_id']; ?>">
    <div class="buttons">
        <button class="button is-primary is-rounded">Add Review</button>
    </div>
    </form>




</div>


<script type="text/javascript">
    function ConfirmDialog() {
        var x = confirm("Are you sure to delete record?")
        if (x) {
            return true;
        } else {
            return false;
        }
    }
</script>