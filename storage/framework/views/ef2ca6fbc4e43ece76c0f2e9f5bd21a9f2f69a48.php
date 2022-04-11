<?php $__env->startSection("title"); ?>

    Halaman Program Studi

<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>

<h3>Fakultas Ilmu Komputer dan Rekayasa</h3>

<ol>
    <?php $__currentLoopData = $prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo e($value->kode_prodi); ?> | <?php echo e($value->nama_prodi); ?> | <a href="<?php echo e(route('detail-prodi', [$value->id])); ?>"> Detail </a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Dody\UTS_2024250049\UTS_2024250049\resources\views/program_studi/index.blade.php ENDPATH**/ ?>