<?php if (isset($component)) { $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TemplateLayout::class, []); ?>
<?php $component->withName('template-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <h2 class="font-semiibold text-xl text-gray-800 leading-tight"></h2>
    
    <div class="rounded-tl-3xl bg-gradient-to-r from-orange-400 to-red-300 p-4 shadow text-2xl text-black">
  <i class="fas fa-bars">&nbsp &nbsp<?php echo e($title); ?></i>
<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
  <form action="<?php echo e((isset($berita))?route('berita.update', $berita->id):route('berita.store')); ?>" method="POST" enctype="multipart/from-data">&nbsp
    
    <?php echo csrf_field(); ?>
    <?php if(isset($berita)): ?>
      <?php echo method_field('PUT'); ?>
    <?php endif; ?>

    <div class="shadow overflow-hidden sm:rounded-md">
      <div class="px-5 py-6 bg-white sm:p-7">
        <div class="grid grid-cols-8 gap-2">
          <div class="col-span-10">
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="nama" id="nama" value="<?php echo e((isset($berita))?$berita->nama:old('nama')); ?>" autocomplete="given-name" class="text-gray-700 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>
        </div>
          <div class="col-span-6">
            <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
            <select id="jabatan" name="jabatan"  value="<?php echo e((isset($berita))?$berita->jabatan:old('jabatan')); ?>" autocomplete="jabatan" class="text-gray-700 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              <option>Prajuru Desa Dinas</option>
              <option>Juru Arah</option>
              <option>Pecalang</option>
              <option>Linmas</option>
              <option>Krama</option>
            </select>
          </div>
          <div class="col-span-10">
            <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
            <select id="keterangan" name="keterangan"  value="<?php echo e((isset($berita))?$berita->keterangan:old('keterangan')); ?>"autocomplete="keterangan" class="text-gray-700 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              <option>Mangku Dadia</option>
              <option>Nyada</option>
              <option>Ngampel</option>
              <option>-</option>
            </select>
          </div>
        </div>
      </div>
      <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Save
        </button>
      </div>
    </div>
  </form>
</div>
 <?php if (isset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4)): ?>
<?php $component = $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4; ?>
<?php unset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\belajar-laravel\resources\views/admin/inputberita.blade.php ENDPATH**/ ?>