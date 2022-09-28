<?php echo PageBuilder::section('head'); ?>


<?php echo PageBuilder::block('carousel'); ?>


<section id="sec1">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-10 col-sm-offset-1">
                <h2><?php echo e(PageBuilder::block('title')); ?></h2>
                <p class="lead"><?php echo e(PageBuilder::block('lead_text')); ?></p>
            </div>
        </div>
        <hr />
        <?php if($pageId = PageBuilder::block_selectpage('show_sub_pages')): ?>
        <?php echo PageBuilder::category(['page_id' => $pageId, 'view' => 'home', 'limit' => 4]); ?>

        <?php endif; ?>
    </div>
</section>

<?php echo PageBuilder::block('banner'); ?>


<?php echo PageBuilder::section('footer'); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/coaster2017/templates/home.blade.php ENDPATH**/ ?>