<?php $__env->startSection('content'); ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-4">
                <div class="img-logo text-center mt-5">
                    <img src="<?php echo e(asset('assets/img/company.png')); ?>"
                        style="width: 80px;">
                </div>
                <div class="card o-hidden border-0 shadow-lg mb-3 mt-5">
                    <div class="card-body p-4">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success alert-dismissible">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="text-center">
                            <h1 class="h5 text-gray-900 mb-3">TWO FACTOR CHALLANGE</h1>
                        </div>

                        <form method="POST" action="<?php echo e(url('/two-factor-challenge')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label class="text-uppercase">Code</label>
                                <input type="text" id="code" class="form-control" name="code" />
                            </div>
    
                            <p class="text-muted">
                                <i>Atau Anda dapat memasukkan salah satu recovery code.</i>
                            </p>
    
                            <div class="form-group">
                                <label class="text-uppercase">Recovery Code</label>
                                <input type="text" id="recovery_code" class="form-control" name="recovery_code" />
                            </div>
    
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    LOGIN
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', ['title' => 'Forgot Password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maulayyacyber/Development/LaravelProject/backend-shop/resources/views/auth/two-factor-challenge.blade.php ENDPATH**/ ?>