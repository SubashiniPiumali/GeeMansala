<div class="container">

    <h3 class="title is-3">Edit Post</h3>


    <div class="box">
        <p class="has-text-right">
            <a href="<?php echo base_url(); ?>writer/index/<?php echo $post['post_id']; ?>"><button class="button is-danger ">
                    <span class="icon is-small">
                        <i class="fas fa-times"></i>
                    </span>
                    <span>Cancel</span>
                </button></a>
        </p>


        <!-----------post content------------------->

        <?php echo form_open_multipart('writer/updatepost'); ?>
        <div class="field">
            <input type="hidden" name="post_id" value="<?php echo $post['post_id']; ?>">
            <label for="" class="label">Title</label>
            <div class="control has-icons-left">
                <input type="text" placeholder="Post title" name="title" class="input" value="<?php echo $post['title']; ?>" required>
                <span class="icon is-small is-left">
                    <i class="fa fa-i-cursor"></i>
                </span>
            </div>
        </div>
        <div class="field">
            <label for="" class="label">Body</label>
            <textarea class="textarea" placeholder="Enter body..." name="body"><?php echo $post['body']; ?></textarea>
        </div>

        <script>
            CKEDITOR.replace('body');
        </script>

        <div class="field">
            <label for="" class="label">MP3 file</label>
            <div class="file">
                <label class="file-label">
                    <input class="file-input" type="file" name="userfile">
                    <span class="file-cta">
                        <span class="file-icon">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label">
                            Choose a file…
                        </span>
                    </span>
                </label>
            </div>
        </div>

        <div class="field">
            <label for="" class="label">Category</label>
            <div class="select">
                <select name="category">
                    <option value="Sinhala">Sinhala</option>
                    <option value="English">English</option>
                </select>
            </div>
        </div>

        <div class="field">
            <button class="button is-success">
                Update Post
            </button>
        </div>
        <?php echo form_close(); ?>


        <!-----------post content end------------------->



    </div>
</div>