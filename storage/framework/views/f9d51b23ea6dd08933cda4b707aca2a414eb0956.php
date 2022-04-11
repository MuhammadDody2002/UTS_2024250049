<?php $__env->startSection("title"); ?>

    Halaman Utama

<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>

    <h3><a href="<?php echo e(url('matakuliah')); ?>">Mata Kuliah</a></h3>
    <h3><a href="<?php echo e(url('programstudi')); ?>">Program Studi</a></h3>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Dody\UTS_2024250049\UTS_2024250049\resources\views/index.blade.php ENDPATH**/ ?>