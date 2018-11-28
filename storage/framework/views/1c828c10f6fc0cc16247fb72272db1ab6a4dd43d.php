<?php $__env->startSection('content'); ?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>Laskujen listaus</h1><br> 
    </div>
    <div class="panel-body">
    <table class="laskut">
        <thead>
            <tr>
                <th>Nimi</th>
                <th>Osoite</th>
                <th>Email</th>
                <th>Tuote/palvelu</th>
                <th>Hinta</th>
                <th>Eräpäivä</th>
                <th>Toiminnot</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $invoice_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e($invoice->asiakas); ?></th>
                    <th><?php echo e($invoice->osoite); ?></th>
                    <th><?php echo e($invoice->email); ?></th>
                    <th><?php echo e($invoice->tuote); ?></th>
                    <th><?php echo e($invoice->hinta); ?></th>
                    <th><?php echo e($invoice->erapaiva); ?></th>
                    <th><a href = 'poistaLasku/<?php echo e($invoice->id); ?>'>Poista</a> - <a href = 'tarkasteleLaskua/<?php echo e($invoice->id); ?>'>Tarkastele</a></th>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table><br>
    <div class="PDF_btn">
    <a href="<?php echo e(url('laskut/pdf')); ?>" class="btn btn-primary">Muodosta PDF listasta</a>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>