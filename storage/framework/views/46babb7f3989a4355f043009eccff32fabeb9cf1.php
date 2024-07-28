<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      body {text-align: center;}
      h1 {color: green;}
      .warning {color: red;}
    </style>
  </head>
  <body>
    <div>
      <h1>SPARK</h1>
      <p>Universitas Negeri Semarang</p>
      <p><strong>Tanggal: </strong><?php echo e($vehicles->tanggal); ?></p>
      <p><strong>Waktu:</strong> <?php echo e($vehicles->jam_masuk); ?></p>
      <p><strong>Jenis Kendaraan:</strong> <?php echo e($vehicles->jenis_kendaraan); ?></p>
      <p><strong>Code:</strong> <?php echo e($vehicles->plat); ?></p>
      <p class="warning">Please do not lose the slip</p>
      <p class="">Thanks, Have a nice day!</p>
    </div>
    
  </body>
</html><?php /**PATH C:\xampp\htdocs\project-spark\resources\views/print.blade.php ENDPATH**/ ?>