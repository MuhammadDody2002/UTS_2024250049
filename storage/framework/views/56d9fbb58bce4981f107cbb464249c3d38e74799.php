<!-- <?php echo $__env->make("layout.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->



<?php $__env->startSection('title'); ?>

    Halaman Detail Fakultas

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Detail Program Studi</h1>
    <p>
        Kode Prodi = <?php echo e($prodi->id); ?><br>
        Nama = <?php echo e($prodi->nama_prodi); ?><br>
        Alamat = <?php echo e($prodi->alamat); ?><br>
        Telepon = <?php echo e($prodi->telp); ?><br>
        Website = <?php echo e($prodi->website); ?><br>
        Fakultas = <?php echo e($fakultas->nama_fakultas); ?></p>

<?php $__env->stopSection(); ?>

<!-- <?php echo $__env->make("layout.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

<?php echo $__env->make("layout.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Dody\UTS_2024250049\UTS_2024250049\resources\views/program_studi/detail.blade.php ENDPATH**/ ?>