<div class="form-group <?php echo e($field_class); ?>">
    <?php echo Form::label($name, $label, ['class' => 'control-label col-sm-2']); ?>

    <div class="col-sm-10">
        <?php echo Form::textarea($name, $submitted_data?:$content, ['rows' => !empty($rows)?$rows:3, 'class' => 'form-control '.$class] + $input_attr); ?>

        <span class="help-block"><?php echo e($field_message); ?></span>
    </div>
</div><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/blocks/text/main.blade.php ENDPATH**/ ?>