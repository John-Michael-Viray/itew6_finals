<!-- resources/views/posts/create.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Create New Post</h1>
        <form action="<?php echo e(route('create')); ?>" method="POST">
            <!-- the <?php echo csrf_field(); ?> directive is used to prevent cross-site request forgery -->
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="body" name="body" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\laravelplayground\midterm\forum\resources\views/posts/create.blade.php ENDPATH**/ ?>