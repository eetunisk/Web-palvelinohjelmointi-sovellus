<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Luo Lasku</h1>
        </div>
        <div class="panel-body">	
            <h2>Asiakkaan tiedot</h2>
            <?php echo Form::open(['url' => 'lasku/submit']); ?>

            <div class="form-group">
                <?php echo e(Form::label('asiakas', 'Asiakkaan nimi')); ?>

                <?php echo e(Form::text('asiakas', '', ['class'=>'form-control', 'placeholder'=>'Anna nimi'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('osoite', 'Asiakkaan osoite')); ?>

                <?php echo e(Form::text('osoite', '', ['class'=>'form-control', 'placeholder'=>'Anna osoite'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('email', 'Sähköpostiosoite')); ?>

                <?php echo e(Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Anna sähköpostiosoite'])); ?>

            </div>
            <h2>Laskun tiedot</h2>
             <div class="form-group">
                <?php echo e(Form::label('tuote', 'Laskutettava tuote/palvelu')); ?>

                <?php echo e(Form::text('tuote', '', ['class'=>'form-control', 'placeholder'=>'Tuote/palvelu'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('viesti', 'Viesti laskun saajalle')); ?>

                <?php echo e(Form::textarea('viesti', '', ['class'=>'form-control', 'placeholder'=>'Viesti'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('hinta', 'Laskutettava summa')); ?>

                <?php echo e(Form::text('hinta', '', ['class'=>'form-control', 'placeholder'=>'Anna hinta'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('erapaiva', 'Laskun eräpäivä')); ?>

                <?php echo e(Form::date('erapaiva', '', ['class'=>'form-control', 'placeholder'=>'Eräpäivä'])); ?>

            </div>
            <div>
                <?php echo e(Form::submit('Luo lasku', ['class' => 'btn btn-primary'])); ?>

            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>