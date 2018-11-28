<?php $__env->startSection('content'); ?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>Laskun tietojen tarkastelu</h1><br> 
    </div>
    <div <div class="panel-body">
        <a href = "/laskut" class="btn btn-primary"><< Takaisin</a>
        <hr>

        <h3>Asiakkaan tiedot</h3>
        <table class="laskut">
            <thead>
                <tr>
                    <th>Nimi</th>
                    <th>Osoite</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $lasku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($invoice->asiakas); ?></th>
                        <th><?php echo e($invoice->osoite); ?></th>
                        <th><?php echo e($invoice->email); ?></th>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table><br>

        <h3>Laskun tiedot</h3>
        <table class="laskut">
            <thead>
                <tr>
                    <th>Tuote/palvelu</th>
                    <th>Hinta</th>
                    <th>Eräpäivä</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $lasku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($invoice->tuote); ?></th>
                        <th><?php echo e($invoice->hinta); ?></th>
                        <th><?php echo e($invoice->erapaiva); ?></th>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table><br>

        <h3>Laskuttajan tiedot</h3>
        <table class="laskut">
            <thead>
                <tr>
                    <th>Nimi</th>
                    <th>Osoite</th>
                    <th>Email</th>
                    <th>Pankkitiedot</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Eetu Niskanen</th>
                    <th>Mannisenmäentie 8</th>
                    <th>eetu@eetuniskanen.com</th>
                    <th>FI12 1234 1234 1234</th>
                </tr>       
            </tbody>
        </table><br>
        <div class="PDF_btn">
            <a href = "pdf/<?php echo e($invoice->id); ?>" class="btn btn-primary">Muodosta PDF</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>