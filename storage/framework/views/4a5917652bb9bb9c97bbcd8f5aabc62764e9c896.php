<div class="review_comment">
    <ul class="review_com">
        <?php $__empty_1 = true; $__currentLoopData = $Review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <li>
            <div class="comment">
                <figure class="comment-media">
                    <a href="#">
                        <img src="<?php echo e(URL::asset('assets/media/avat.svg')); ?>" alt="avatar">
                    </a>
                </figure>
                <div class="comment-body">
                    <div class="comment-user">
                        <span class="comment-date text-body"><?php echo e(date('F d, Y',strtotime($review->updated_at))); ?> at
                            <?php echo e(date('h:i A',strtotime($review->updated_at))); ?></span>
                        <div class="comment-rating ratings-container mb-0">
                            <div class="ratings-full">
                                <span class="ratings" style="width:80%"></span>
                                <span class="tooltiptext tooltip-top">
                                    <div class="star_rating">
                                        <span class="fa fa-star <?php echo e(($review->rating >= 1)?'checked':''); ?>"></span>
                                        <span class="fa fa-star <?php echo e(($review->rating >= 2)?'checked':''); ?>"></span>
                                        <span class="fa fa-star <?php echo e(($review->rating >= 3)?'checked':''); ?>"></span>
                                        <span class="fa fa-star <?php echo e(($review->rating >= 4)?'checked':''); ?>"></span>
                                        <span class="fa fa-star <?php echo e(($review->rating >= 5)?'checked':''); ?>"></span>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <h4><a href="#"><?php echo e(($review->getuser() == "")?"":$review->getuser()->name); ?></a></h4>
                    </div>

                    <div class="comment-content">
                        <p><?php echo $review->command; ?></p>
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <li>No reviews & ratings yet</li>
        <?php endif; ?>
    </ul>
    

</div>
<?php if(Auth::user()): ?>
<?php if(count($reviewed)<1): ?> <div class="reply">
    <div class="title-wrapper text-left">
        <h3 class="title title-simple text-left text-normal">Add a Review</h3>
        <p>Your email address will not be published. Required fields are marked *</p>
    </div>
    <div class="rating-form" >
        <label for="rating" class="text-dark">Your rating * </label>
        <div class="star_rating" id="star_rating">
            <span data-star=1 class="fa fa-star "></span>
            <span data-star=2 class="fa fa-star "></span>
            <span data-star=3 class="fa fa-star "></span>
            <span data-star=4 class="fa fa-star"></span>
            <span data-star=5 class="fa fa-star"></span>
        </div>

        <select name="rating" id="rating" required="" style="display: none;">
            <option value="">Rate…</option>
            <option value="5">Perfect</option>
            <option value="4">Good</option>
            <option value="3">Average</option>
            <option value="2">Not that bad</option>
            <option value="1">Very poor</option>
        </select>
    </div>
    <form action="<?php echo e(route('product.review')); ?>" id="reviewSubmit">
        <?php echo csrf_field(); ?>
        <textarea id="reply-message" name="command" cols="30" rows="6" class="form-control mb-4" placeholder="Comment *" required=""></textarea>
        <input type="hidden" name="rating" id="rating" value="">
        <input type="hidden" name="product_id" id="product_id" value="<?php echo e($product->id); ?>">
        <input type="hidden" name="user_id" id="user_id" value="<?php echo e(Auth::user()->id); ?>">
        <input type="hidden" name="vendor_id" id="vendor_id" value="<?php echo e($product->vendor); ?>">
        <button type="submit" class="outoff_btn common-btn">Submit</button>
    </form>
    </div>

    <?php endif; ?>
    <?php endif; ?>
<?php /**PATH C:\xampp\htdocs\witcreat_witcom\resources\views/front/includes/review.blade.php ENDPATH**/ ?>