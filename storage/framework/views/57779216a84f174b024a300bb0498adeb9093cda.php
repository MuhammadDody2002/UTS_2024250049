<!-- <?php echo $__env->make("layout.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->



<?php $__env->startSection('title'); ?>

    Halaman Detail Fakultas

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Detail Mata Kuliah</h1>
    <p>
        Prodi = <?php echo e($prodi->nama_prodi); ?><br>
        Kode MK = <?php echo e($mata_kuliah->kode_mk); ?><br>
        Nama = <?php echo e($mata_kuliah->nama_mk); ?><br>
        SKS = <?php echo e($mata_kuliah->sks_mk); ?><br>
        SKS Praktik = <?php echo e($mata_kuliah->sks_praktik); ?><br>
        SKS Teori = <?php echo e($mata_kuliah->sks_teori); ?><br>
    </p>

<?php $__env->stopSection(); ?>

<!-- <?php echo $__env->make("layout.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

<?php echo $__env->make("layout.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Dody\UTS_2024250049\UTS_2024250049\resources\views/mata_kuliah/detail.blade.php ENDPATH**/ ?>