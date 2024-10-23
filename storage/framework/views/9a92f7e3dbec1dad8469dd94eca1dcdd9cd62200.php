<table style="width: 100%;border: 1px solid #000;" class="table table-striped">
    <tr style="border-bottom: 1px solid black">
        <th style="width: 50%">Category Name</th>
        <th style="width: 50%">Sort Order</th>
    </tr>
    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td style="width: 50%"><?php echo e($data->category_name); ?></td>
        <td style="width: 50%"><input type="number" data-id="<?php echo e($data->id); ?>" name="sort[]" placeholder="Sort Category" required onchange="arraypush(this)"></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH C:\xampp\htdocs\witcreat_witcom\resources\views/admin/homecat/loadTable.blade.php ENDPATH**/ ?>