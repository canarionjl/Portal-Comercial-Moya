<?php $link_field_id = str_replace(['[', ']'], ['_', ''], $name . '[custom]'); ?>

<div class="form-group">

    <div class="row">
        <?php echo Form::label($name, $label, ['class' => 'control-label col-sm-2']); ?>

        <div class="col-sm-4">
            <?php echo Form::select($name.'[internal]', $pageList, $selectedPage, ['class' => 'form-control internal-link']); ?>

        </div>
        <div class="col-sm-6">
            <div class="input-group">
                <?php echo Form::text($name.'[custom]', $content['link'], ['id' => $link_field_id, 'class' => 'form-control custom-link']); ?>

                <span class="input-group-addon">or</span>
                <span class="input-group-btn">
                    <a href="<?php echo URL::to(config('coaster.admin.public').'/filemanager/dialog.php?type=2&field_id='.$link_field_id); ?>"
                       class="btn btn-default iframe-btn">Select Doc</a>
                </span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo Form::select($name.'[target]', $targetOptions, $content['target'], ['class' => 'form-control']); ?>

        </div>
    </div>

</div><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/blocks/link/main.blade.php ENDPATH**/ ?>