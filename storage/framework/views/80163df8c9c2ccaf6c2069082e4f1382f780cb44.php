<!-- resources/views/posts/show.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1><?php echo e($post->title); ?></h1>
        <p><strong><?php echo e($post->author); ?></strong></p>
        <p><strong>Created At:</strong> <?php echo e($post->created_at->format('M d, Y H:i:s')); ?></p>
        <p><?php echo e($post->body); ?></p>
        <a href="<?php echo e(route('edit', $post->id)); ?>" class="btn btn-primary">Edit</a>
        <form action="<?php echo e(route('delete', $post->id)); ?>" method="POST" style="display:inline">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\johnm\Downloads\forum\resources\views/posts/show.blade.php ENDPATH**/ ?>