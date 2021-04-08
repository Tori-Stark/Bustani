
<div class="form-group">
    <div>
        <label for="name">Name </label>
        <input type="text" name="name" value="<?php echo e(old('name') ?? $product->name); ?>">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p style="color: red"> <?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</div>

<div class="form-group">
    <div>
        <label for="description">Description</label>
        <input type="text"  name="description" value="<?php echo e(old('description') ?? $product->description); ?>">
        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p style="color: red"> <?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    </div>
</div>

<div class="form-group">
    <div>
        <label for="price">Price</label>
        <input type="number"  name="price" value="<?php echo e(old('price') ?? $product->price); ?>">
        <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p style="color: red"> <?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    </div>
</div>

<div class="form-group">
    <br/>
    <br/>
    <div>
        <label for="image">Product Image</label>
        <input type="file" id="product_image" name="product_image">
    </div>
    <br/>
    <br/>
</div>
<?php echo csrf_field(); ?>
<?php /**PATH /Users/mike/Desktop/Bustani/resources/views/admin/product/form.blade.php ENDPATH**/ ?>