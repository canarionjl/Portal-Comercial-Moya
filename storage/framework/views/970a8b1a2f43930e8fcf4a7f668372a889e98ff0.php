<?php $source_field_id = str_replace(['[', ']'], ['_', ''], $name . '[source]'); ?>
<?php $image_preview_id = str_replace(['[', ']'], ['_', ''], $name . '[image]'); ?>

<div class="form-group">
    <?php echo Form::label($name, $label, ['class' => 'control-label col-sm-2']); ?>


    <div class="col-sm-3">
        <div class="thumbnail maxthumbnail">
            <?php if(!empty($content->file)): ?>
                <a class="fancybox" href="<?php echo $content->file; ?>">
                    <img id="<?php echo $image_preview_id; ?>" alt="<?php echo $content->title; ?>"
                         src="<?php echo Croppa::url($content->file, 200, 150); ?>"/>
                </a>
            <?php else: ?>
                <img id="<?php echo $image_preview_id; ?>" alt="No Image"
                     src="//placeholdit.imgix.net/~text?txtsize=19&bg=efefef&txtclr=aaaaaa%26text%3Dno%2Bimage&txt=no+image&w=200&h=150"/>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-sm-7">
        <label>Image Source:</label>
        <div class="input-group">
            <?php echo Form::text($name.'[source]', $content->file, ['id' => $source_field_id, 'class' => 'img_src form-control']); ?>

            <span class="input-group-btn">
                <a href="<?php echo URL::to(config('coaster.admin.public').'/filemanager/dialog.php?type=1&field_id='.$source_field_id); ?>"
                   class="btn btn-default iframe-btn">Select Image</a>
            </span>
        </div>
        <label style="clear:both; margin-top:20px;">Image Title: </label>
        <?php echo Form::text($name.'[alt]', $content->title, ['class' => 'form-control']); ?>

    </div>

</div>

<?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/blocks/image/main.blade.php ENDPATH**/ ?>