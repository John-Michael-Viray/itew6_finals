<!-- resources/views/posts/edit.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Edit Post</h1>
        <form action="<?php echo e(route('update', $post->id)); ?>" method="POST">
            <!-- the <?php echo csrf_field(); ?> and method are Laravel directives that prevent Cross-Site Request Forgery attacks -->
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo e($post->title); ?>">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="body" name="body" rows="5"><?php echo e($post->body); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\laravelplayground\midterm\forum\resources\views/posts/edit.blade.php ENDPATH**/ ?>