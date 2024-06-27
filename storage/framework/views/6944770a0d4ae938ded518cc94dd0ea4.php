<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Landing Page')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Landing Page')); ?></li>
<?php $__env->stopSection(); ?>

<?php
    $settings = \Modules\LandingPage\Entities\LandingPageSetting::settings();
    $logo = \App\Models\Utility::get_file('uploads/landing_page_image');
?>

<?php $__env->startPush('css-page'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('custom/libs/summernote/summernote-bs4.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script-page'); ?>
    <script src="<?php echo e(asset('custom/libs/summernote/summernote-bs4.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script-page'); ?>
    <script>
        document.getElementById('site_logo').onchange = function() {
            var src = URL.createObjectURL(this.files[0])
            document.getElementById('image').src = src
        }
    </script>

    <script src="<?php echo e(Module::asset('LandingPage:Resources/assets/js/plugins/tinymce.min.js')); ?>" referrerpolicy="origin">
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Landing Page')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('action-btn'); ?>
    <ul class="nav nav-pills cust-nav   rounded  mb-3" id="pills-tab" role="tablist">
        <?php echo $__env->make('landingpage::layouts.tab', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                
                <div>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <h5><?php echo e(__('Custom Page')); ?></h5>
                                </div>
                            </div>
                        </div>
    
                        <?php echo e(Form::open(['route' => 'custom_store', 'method' => 'post', 'enctype' => 'multipart/form-data'])); ?>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <?php echo e(Form::label('Site Logo Light', __('Site Logo Light'), ['class' => 'form-label'])); ?>

                                        <div class="logo-content mt-4">
                                            <img id="image"
                                                src="<?php echo e($logo . '/' . $settings['site_logo_light'] . '?timestamp=' . time()); ?>"
                                                class="big-logo" style="filter: drop-shadow(2px 3px 7px #011C4B);">
                                        </div>
                                        <div class="choose-files mt-5">
                                            <label for="site_logo_light">
                                                <div class=" bg-primary company_logo_update" style="cursor: pointer;">
                                                    <i class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?>

                                                </div>
                                                <input type="file" name="site_logo_light" id="site_logo_light"
                                                    class="form-control file" data-filename="site_logo_light">
                                            </label>
                                        </div>
                                        <?php $__errorArgs = ['site_logo_light'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="row">
                                                <span class="invalid-logo" role="alert">
                                                    <strong class="text-danger"><?php echo e($message); ?></strong>
                                                </span>
                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <?php echo e(Form::label('Site Logo Dark', __('Site Logo Dark'), ['class' => 'form-label'])); ?>

                                        <div class="logo-content mt-4">
                                            <img id="image"
                                                src="<?php echo e($logo . '/' . $settings['site_logo_dark'] . '?timestamp=' . time()); ?>"
                                                class="big-logo" style="filter: drop-shadow(2px 3px 7px #011C4B);">
                                        </div>
                                        <div class="choose-files mt-5">
                                            <label for="site_logo_dark">
                                                <div class=" bg-primary company_logo_update" style="cursor: pointer;">
                                                    <i class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?>

                                                </div>
                                                <input type="file" name="site_logo_dark" id="site_logo_dark"
                                                    class="form-control file" data-filename="site_logo_dark">
                                            </label>
                                        </div>
                                        <?php $__errorArgs = ['site_logo_dark'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="row">
                                                <span class="invalid-logo" role="alert">
                                                    <strong class="text-danger"><?php echo e($message); ?></strong>
                                                </span>
                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo e(Form::label('Site Description', __('Site Description'), ['class' => 'form-label'])); ?>

                                        <?php echo e(Form::text('site_description', $settings['site_description'], ['class' => 'form-control', 'placeholder' => __('Enter Description')])); ?>

                                        <?php $__errorArgs = ['mail_port'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-mail_port" role="alert">
                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <input class="btn btn-print-invoice btn-primary m-r-10" type="submit"
                                value="<?php echo e(__('Save Changes')); ?>">
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
    
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h5><?php echo e(__('Menu Bar')); ?></h5>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 justify-content-end d-flex">
                                    <a data-size="lg" data-url="<?php echo e(route('custom_page.create')); ?>" data-ajax-popup="true"
                                        data-bs-toggle="tooltip" data-title="<?php echo e(__('Create Page')); ?>" title="<?php echo e(__('Create')); ?>" class="btn btn-sm btn-primary">
                                        <i class="ti ti-plus text-light"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
    
                            
    
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><?php echo e(__('No')); ?></th>
                                            <th><?php echo e(__('Name')); ?></th>
                                            <th><?php echo e(__('Action')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(is_array($pages) || is_object($pages)): ?>
                                            <?php
                                                $no = 1;
                                            ?>
                                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($no++); ?></td>
                                                    <td><?php echo e($value['menubar_page_name']); ?></td>
                                                    <td>
                                                        <span>
                                                            <div class="action-btn ms-2">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon  bg-light-secondary me-2"
                                                                    data-url="<?php echo e(route('custom_page.edit', $key, $value['page_slug'])); ?>"
                                                                    data-ajax-popup="true" data-title="<?php echo e(__('Edit Page')); ?>"
                                                                    data-size="lg" data-bs-toggle="tooltip"
                                                                    title="<?php echo e(__('Edit')); ?>"
                                                                    data-original-title="<?php echo e(__('Edit')); ?>">
                                                                    <i class="ti ti-pencil"></i>
                                                                </a>
                                                            </div>
    
                                                            <?php if(
                                                                $value['page_slug'] != 'terms_and_conditions' &&
                                                                    $value['page_slug'] != 'about_us' &&
                                                                    $value['page_slug'] != 'privacy_policy'): ?>
                                                                <div class="action-btn ms-2">
                                                                    <?php echo Form::open([
                                                                        'method' => 'DELETE',
                                                                        'route' => ['custom.page.delete', $value['page_slug'], $key],
                                                                        'id' => 'delete-form-' . $key,
                                                                    ]); ?>

                                                                    <a class=" show_confirm btn btn-sm btn-icon  bg-light-secondary me-2"
                                                                        href="#" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="<?php echo e(__('Delete')); ?>">
                                                                        <i class="ti ti-trash f-20"></i>
                                                                    </a>
                                                                    <?php echo Form::close(); ?>

                                                                </div>
                                                            <?php endif; ?>
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hamza\OneDrive\Bureau\Whatsapp store Codebase\main-file\Modules/LandingPage\Resources/views/landingpage/menubar/index.blade.php ENDPATH**/ ?>