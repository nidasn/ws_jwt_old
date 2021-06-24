<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-shopping-cart"></i> DETAIL ORDER</h6>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td style="width: 25%">
                                NO. INVOICE
                            </td>
                            <td style="width: 1%">:</td>
                            <td>
                                <?php echo e($invoice->invoice); ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                NAMA LENGKAP
                            </td>
                            <td>:</td>
                            <td>
                                <?php echo e($invoice->name); ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                NO. TELP / WA
                            </td>
                            <td>:</td>
                            <td>
                                <?php echo e($invoice->phone); ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                KURIR / SERVICE / COST
                            </td>
                            <td>:</td>
                            <td>
                                <?php echo e($invoice->courier); ?> / <?php echo e($invoice->service); ?> / <?php echo e(moneyFormat($invoice->cost_courier)); ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                ALAMAT LENGKAP
                            </td>
                            <td>:</td>
                            <td>
                                <?php echo e($invoice->address); ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                TOTAL PEMBELIAN
                            </td>
                            <td>:</td>
                            <td>
                                <?php echo e(moneyFormat($invoice->grand_total)); ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                STATUS
                            </td>
                            <td>:</td>
                            <td>
                                <?php echo e($invoice->status); ?>

                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="card border-0 rounded shadow mt-4">
                <div class="card-body">
                    <h5><i class="fa fa-shopping-cart"></i> DETAIL ORDER</h5>
                    <hr>
                    <table class="table"
                        style="border-style: solid !important;border-color: rgb(198, 206, 214) !important;">
                        <tbody>

                            <?php $__currentLoopData = $invoice->orders()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr style="background: #edf2f7;">
                                    <td class="b-none" width="25%">
                                        <div class="wrapper-image-cart">
                                            <img src="<?php echo e($product->image); ?>" style="width: 100%;border-radius: .5rem">
                                        </div>
                                    </td>
                                    <td class="b-none" width="50%">
                                        <h5><b><?php echo e($product->product_name); ?></b></h5>
                                        <table class="table-borderless" style="font-size: 14px">
                                            <tr>
                                                <td style="padding: .20rem">QTY</td>
                                                <td style="padding: .20rem">:</td>
                                                <td style="padding: .20rem"><b><?php echo e($product->qty); ?></b></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="b-none text-right">
                                        <p class="m-0 font-weight-bold"><?php echo e(moneyFormat($product->price)); ?></p>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['title' => 'Detail Order'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jwt_ws\resources\views/admin/order/show.blade.php ENDPATH**/ ?>