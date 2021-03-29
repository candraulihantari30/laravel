<?php if (isset($component)) { $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TemplateLayout::class, []); ?>
<?php $component->withName('template-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
  <h2 class="font-semiibold text-xl text-gray-800 leading-tight"></h2>
    <div class="rounded-tl-3xl bg-gradient-to-r from-orange-400 to-red-300 p-4 shadow text-1xl text-black">
     <i class="fas fa-bars">&nbsp &nbsp<?php echo e($title); ?></i> &nbsp

     <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 sm:br-gray-100">
      <div class="grid grid-cols-12">
        <div class="col-span-6 p-4">
            <a href="<?php echo e(route('berita.create')); ?>"><button class="sm:px-1 sm:py-1 sm:br-purple-200 
              hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">Tambah
              <i class="fas fa-plus-square"></i>
              <button>
            </a>
          </div>
        </div>
      </div>
 
  
<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

  <table class="min-w-full divide-y divide-gray-200">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tandai</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
            <!-- More items... -->
            <?php $no = 1; ?>
            <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
              <td class="px-6 py-4 whitespace-nowrap"><input type="checkbox" name="" id="" w-1></td>
              <td class="px-6 py-4 whitespace-nowrap"><?php echo e($no); ?></td>
              <td class="px-6 py-4 whitespace-nowrap"><?php echo e($item->nama); ?></td>
              <td class="px-6 py-4 whitespace-nowrap"><?php echo e($item->jabatan); ?></td>
              <td class="px-6 py-4 whitespace-nowrap"><?php echo e($item->keterangan); ?></td>
              <td class="px-6 py-4 whitespace-nowrap">
                <button class="sm:px-1 sm:py-1 sm:br-purple-200 
                  hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none">
                  <a href="<?php echo e(route('berita.edit',$item->id)); ?>" class="text-red">
                    <i class="fas fa-edit"></i>Edit
                  </a></button> |
                  <form action="<?php echo e(route('berita.destroy', $item->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="sm:px-1 sm:py-1 sm:br-purpl600 
                    hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none"><i class="far fa-trash-alt"></i>Hapus</button>
                  </form>  
              </td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        
      
    </div>
  </div>
 <?php if (isset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4)): ?>
<?php $component = $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4; ?>
<?php unset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\belajar-laravel\resources\views/admin/berandaberita.blade.php ENDPATH**/ ?>