<?php if (isset($component)) { $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TemplateLayout::class, []); ?>
<?php $component->withName('template-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div>
        <center>
            <img src="<?php echo e(asset('img/desa.jpeg')); ?>" alt="" width="500" >
        </center>
<img >
    </div>
    <div class="col-md-5 mt-5">
<p align="justify">
    
    Desa menurut definisi "universal", adalah sebuah aglomerasi permukiman di area perdesaan (rural). Di Indonesia, istilah desa adalah pembagian wilayah administratif di Indonesia di bawah kecamatan, yang dipimpin oleh Kepala Desa. Sebuah desa merupakan kumpulan dari beberapa unit permukiman kecil yang disebut kampung (Banten, Jawa Barat) atau dusun (Yogyakarta) atau Banjar (Bali) atau jorong (Sumatra Barat). Kepala Desa dapat disebut dengan nama lain misalnya Kepala Kampung.
</p>
    </div>
 <?php if (isset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4)): ?>
<?php $component = $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4; ?>
<?php unset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\belajar-laravel\resources\views/admin/dasboard.blade.php ENDPATH**/ ?>