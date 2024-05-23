<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary">Create New Post</a>
        <table class="table-striped">
            <thead>
                <tr>
                    <th width="20%">Title</th>
                    <th width="15%">Author</th>
                    <th width="25%">Content</th>
                    <th width="20%">Created At</th>
                    <th width="30%">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($post->title); ?></td>
                        <td><?php echo e($post->author); ?></td>
                        <td><?php echo e($post->body); ?></td>
                        <td><?php echo e($post->created_at->format('M d, Y H:i:s')); ?></td>
                        <td>
                            <a href="<?php echo e(route('show', $post->id)); ?>" class="btn btn-primary mr-2 btn-sm">View</a>
                            <a href="<?php echo e(route('edit', $post->id)); ?>" class="btn btn-secondary mr-2 btn-sm">Edit</a>
                            <form action="<?php echo e(route('delete', $post->id)); ?>" method="POST" style="display:inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger mr-2 btn-sm" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\johnm\Downloads\forum\resources\views/posts/index.blade.php ENDPATH**/ ?>