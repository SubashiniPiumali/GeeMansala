<div class="container">

    <h3 class="title is-3">Create New Post</h3>
    <div class="box">

        <?php echo form_open_multipart('writer/createpost'); ?>
        <div class="field">
            <label for="" class="label">Title</label>
            <div class="control has-icons-left">
                <input type="text" placeholder="Post title" name="title" class="input" required>
                <span class="icon is-small is-left">
                    <i class="fa fa-i-cursor"></i>
                </span>
            </div>
        </div>
        <div class="field">
            <label for="" class="label">Body</label>
            <textarea class="textarea" placeholder="Enter body..." name="body"></textarea>
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
                Create Post
            </button>
        </div>
        <?php echo form_close(); ?>

    </div>

</div>