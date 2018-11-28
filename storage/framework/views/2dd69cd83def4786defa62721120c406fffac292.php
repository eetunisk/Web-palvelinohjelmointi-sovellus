<?php $__env->startSection('content'); ?>
<div>
    <h2>Laskun tietojen esikatselu</h2>
    <a href="<?php echo e(url('valmislasku/pdf')); ?>" class="btn btn-danger">Convert into PDF</a>
    <table class="laskut">
        <thead>
            <tr>
                <th>Nimi</th>
                <th>Osoite</th>
                <th>Email</th>
                <th>Tuote/palvelu</th>
                <th>Hinta</th>
                <th>Eräpäivä</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e($invoice->asiakas); ?></th>
                    <th><?php echo e($invoice->osoite); ?></th>
                    <th><?php echo e($invoice->email); ?></th>
                    <th><?php echo e($invoice->tuote); ?></th>
                    <th><?php echo e($invoice->hinta); ?></th>
                    <th><?php echo e($invoice->erapaiva); ?></th>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>