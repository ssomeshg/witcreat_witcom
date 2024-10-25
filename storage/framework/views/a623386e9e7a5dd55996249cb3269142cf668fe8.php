 

<?php $__env->startSection('content'); ?>  
<!--end::Header-->
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Product</h5>
                    <!--end::Page Title-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">

                            <a href="<?php echo e(route($list)); ?>" class="text-muted">List of Products</a>
                        </li>
                    </ul>
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">Edit Product</h3>

                        </div>
                        <!--begin::Form-->
                        <div class="alert alert-danger alert-dismissible fade show" style="display:none" role="alert">
                                                <div></div>
                                                <button type="button" class="close" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="alert alert-success alert-dismissible fade show" style="display:none" role="alert">
                                                <div></div>
                                                <button type="button" class="close" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div> 
                                             <?php
                                             if(Auth::user()->is_vendor != null || Auth::user()->is_vendor != ""){
            $link=route('admin-productv-update',$product->id);
            $url=route('admin-productv-cropimage');
        }else{
            $link=route('admin-product-update',$product->id);
            $url=route('admin-product-cropimage');
        }
                                            ?>
                        <form method="POST" action="<?php echo e($link); ?>" enctype="multipart/form-data" id="formEdit" onsubmit="if(typeof CKEditor1 != 'undefined'){ CKEditor1.updateSourceElement(); } if(typeof CKEditor4 != 'undefined'){ CKEditor4.updateSourceElement(); } CKEditor2.updateSourceElement();CKEditor3.updateSourceElement();">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="id" id="id" value="<?php echo e($product->id); ?>">
                            <input type="hidden" name="url" id="url" value="<?php echo e($url); ?>">
                            <div class="card-body">
                                <?php if(Auth::user()->is_vendor == null || Auth::user()->is_vendor == ""): ?>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-12 col-form-label">Vendor<span class="text-danger">*</span></label>
                                    <div class="col-lg-4 col-md-12">
                                        
                                        <select class="form-control" id="vendor" name="vendor" >
                                            <option value="">Select</option>
                                            <?php $__currentLoopData = $vendor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                               <option data-productPrefix="<?php echo e($v->manufacturerID); ?>" data-vendorperscent="<?php echo e($v->vendorperscent); ?>" value="<?php echo e($v->id); ?>" <?php echo e(($v->id == $product->vendor) ? 'selected' : ''); ?>><?php echo e($v->name.' / '.$StoreConfig->VendorIDPrefix.'-'.sprintf("%'03d", $v->id)); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <?php else: ?>
                                <input type="hidden" name="vendor" id="vendor" value="<?php echo e(Auth::user()->id); ?>">
                                <?php endif; ?>
                               <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Category<span class="text-danger">*</span></label>
                                <div class="col-lg-10 col-md-12">
                                    <select class="form-control" id="category" name="category[]" multiple> 
                                        <option value="">Select</option>
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option class="oprt" value="<?php echo e($category->id); ?>" <?php echo e(in_array($category->id,$product->category) ? 'selected' : ''); ?>><?php echo e($category->category_name); ?></option>
                                            <?php $__currentLoopData = $category->subs()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($sub->id); ?>" <?php echo e(in_array($sub->id,$product->category) ? 'selected' : ''); ?>><?php echo e($sub->category_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Product Title<span class="text-danger">*</span></label>

                                <div class="col-lg-4 col-md-12">
                                    <input class="form-control" type="text" value="<?php echo e($product->product_title); ?>" id="productTitle" name="productTitle" />
                                </div>
                            </div>
                            
                            <?php if(Auth::user()->is_vendor == null): ?>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Manufacturer Code<span class="text-danger">*</span></label>
                                <div class="col-lg-2 col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="Code"></span>
                                        </div>
                                        <input class="form-control" type="text" value="<?php echo e($product->manufacturerCode); ?>" id="manufacturerCode" name="manufacturerCode" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <span>Please enter your unique product code</span>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Manufacturer Price<span class="text-danger">*</span></label>
                                <div class="col-lg-4 col-md-12">
                                    <div class="input-group">
                                        <input class="form-control" type="text" value="<?php echo e($product->manufacturerPrice); ?>" id="manufacturerPrice" name="manufacturerPrice" onkeyup="baseprice(this.value)"/>
                                        <div class="input-group-append"><span class="input-group-text" id='Manufacturer'></span></div>
                                        <input type="hidden" id="persenttest" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <span>Enter your Product amount without GST</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12 col-lg-2 col-form-label">Mark Type<span class="text-danger">*</span></label>
                                <div class="col-lg-2 col-md-3">
                                    <select name="markup_type" class="form-control" id="markup_type">
                                        <option value="0" <?php echo e(($product->markup_type == '0') ? 'selected' : ''); ?>>%</option>
                                        <option value="1" <?php echo e(($product->markup_type == '1') ? 'selected' : ''); ?>>Flat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12 col-lg-2 col-form-label">Mark up <span class="text-danger">*</span></label>
                                <div class="col-lg-2 col-md-12">
                                    <div class="input-group">
                                        <input class="form-control" onkeyup="markupPrice(this.value)"  type="number" value="<?php echo e($product->markup); ?>" id="markup" name="markup" required/>
                                        <div class="input-group-append"><span class="input-group-text" id="markup_span"><?php echo e(($product->markup_type == '0') ? '%' : 'Flat'); ?></span></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <span>Enter Mark up Perscent </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Our Price<span class="text-danger">*</span></label>
                                <div class="col-lg-2 col-md-12">
                                    <input class="form-control" type="text" value="<?php echo e($product->product_base_price); ?>" id="basePrice" name="basePrice" />
                                    <input class="form-control" type="hidden" value="<?php echo e($attributeTemplate); ?>" id="attributeTemplate" name="attributeTemplate" />
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <span>This is Silkastic Price, No need to Enter</span>
                                </div>
                            </div>
                            <?php else: ?>    
                            <?php
                                $persenttest = App\Models\Vendor::findOrFail(Auth::user()->is_vendor);
                            ?>    
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Manufacturer Code<span class="text-danger">*</span></label>
                                <div class="col-lg-2 col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="Code"><?php echo e($persenttest->manufacturerID); ?></span>
                                        </div>
                                        <input class="form-control" type="text" value="<?php echo e($product->manufacturerCode); ?>" id="manufacturerCode" name="manufacturerCode" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <span>Please enter your unique product code</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Manufacturer Price<span class="text-danger">*</span></label>
                                <div class="col-lg-2 col-md-12">
                                    <input class="form-control" type="text" value="<?php echo e($product->manufacturerPrice); ?>" id="manufacturerPrice" name="manufacturerPrice" onkeyup="baseprice(this.value)" />
                                </div>
                                <div class="col-lg-2 col-md-12">
                                    <h5 class="font-weight-bold text-dark">Vendor % = <?php echo e($persenttest->vendorperscent); ?></h5>
                                    <input type="hidden" id="persenttest" value="<?php echo e($persenttest->vendorperscent); ?>">
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <span>Enter your Product amount without GST</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12 col-lg-2 col-form-label">Mark up Perscent<span class="text-danger">*</span></label>
                                <div class="col-lg-2 col-md-12">
                                    <div class="input-group">
                                        <input class="form-control" onkeyup="markupPrice(this.value)"  type="number" min=0 max=100 value=<?php echo e($product->markup); ?> id="markup" name="markup" required/>
                                        <div class="input-group-append"><span class="input-group-text" id="Manufacturer">%</span></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <span>Enter Mark up Perscent </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Our Price<span class="text-danger">*</span></label>
                                <div class="col-lg-2 col-md-12">
                                    <input class="form-control" type="text" value="<?php echo e($product->product_base_price); ?>" id="basePrice" name="basePrice" readonly/>
                                    <input class="form-control" type="hidden" value="<?php echo e($attributeTemplate); ?>" id="attributeTemplate" name="attributeTemplate" />
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <span>This is Silkastic Price, No need to Enter</span>
                                </div>
                            </div>                           
                            <?php endif; ?>

                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">SKU Code<span class="text-danger">*</span></label>

                                <div class="col-lg-3 col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><?php echo e($StoreConfig->productIdprefix); ?></span>
                                        </div>
                                        <input class="form-control" type="text" value="<?php echo e($product->product_sku); ?>" id="skuCode" name="skuCode" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <span>SKU is silkastic code, Enter based on last SKU</span>
                                </div>
                            </div>
                            
                            <?php if($attributeTemplate >0): ?>
                            <h3 class="card-title">Attribute</h3>
                                <?php $__currentLoopData = $processGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $processGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        if(!isset($attributeValues3[$processGroup[0]->id])){
                                                $attributeValues3[$processGroup[0]->id] = [$processGroup[0]->id,''];
                                            }
                                    ?>
                                    <?php if(!empty($processGroup[0])): ?>
                                        <?php switch($processGroup[0]->attribute_type):
                                            case (1): ?>
                                                <?php if(isset($attributeValues3[$processGroup[0]->id][1])): ?>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-md-12 col-form-label"><?php echo e($processGroup[0]->attribute_name); ?></label>
                    
                                                    <div class="col-lg-10 col-md-12">
                                                        <input class="form-control" type="text" value="<?php echo e($attributeValues3[$processGroup[0]->id][1]); ?>" id="<?php echo e($processGroup[0]->attribute_name); ?>" name="attributes[<?php echo e($processGroup[0]->id); ?>]" />
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php break; ?>
                                            <?php case (2): ?>
                                                <?php if(isset($attributeValues3[$processGroup[0]->id][1])): ?>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-md-12 col-form-label"><?php echo e($processGroup[0]->attribute_name); ?></label>
                    
                                                    <div class="col-lg-10 col-md-12">
                                                        <textarea name="attributes[<?php echo e($processGroup[0]->id); ?>]" id="ktckeditor4"><?php echo e($attributeValues3[$processGroup[0]->id][1]); ?></textarea>
                                                        <div class="fv-plugins-message-container"></div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php break; ?>
                                            <?php case (3): ?>
                                            <?php if(isset($attributeValues3[$processGroup[0]->id][1])): ?>
                                                <?php
                                                $attributeValues1=explode(',',$processGroup[0]->attribute_values);
                                                $attributeValues=(count($attributeValues1)>0)?count($attributeValues1):'0';
                                                ?>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-md-12 col-form-label"><?php echo e($processGroup[0]->attribute_name); ?></label>
                    
                                                    <div class="col-lg-10 col-md-12">
                                                      <select class="form-control" id="<?php echo e($processGroup[0]->attribute_name); ?>" name="attributes[<?php echo e($processGroup[0]->id); ?>]">
                                                          <?php if($attributeValues>0): ?>
                                                          <?php $__currentLoopData = $attributeValues1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributeValues1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                          <?php
                                                          ?>
                                                          <?php if(array_key_exists($processGroup[0]->id,$attributeValues3) && $attributeValues3[$key][0]==$processGroup[0]->id): ?>
                                                          <option value="<?php echo e($attributeValues1); ?>" <?php echo e((in_array($attributeValues1,explode(',',$attributeValues3[$key][1])))?'selected':''); ?>><?php echo e($attributeValues1); ?></option>
                                                          <?php else: ?>
                                                          <option value="<?php echo e($attributeValues1); ?>"><?php echo e($attributeValues1); ?></option>
                                                          <?php endif; ?>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                          <?php endif; ?>
                                                      </select>
                                                  </div>
                                              </div>
                                              <?php endif; ?>
                                              <?php break; ?>
                                            <?php case (4): ?>
                                                <?php if(isset($attributeValues3[$processGroup[0]->id][1])): ?>
                                                <?php
                                                $attributeValues1=explode(',',$processGroup[0]->attribute_values);
                                                $attributeValues=(count($attributeValues1)>0)?count($attributeValues1):'0';
                                                ?>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-md-12 col-form-label"><?php echo e($processGroup[0]->attribute_name); ?></label>
                    
                                                    <div class="col-lg-10 col-md-12">
                                                      <select class="form-control" id="<?php echo e($processGroup[0]->attribute_name); ?>" name="attributes[<?php echo e($processGroup[0]->id); ?>][]" multiple>
                                                          <?php if($attributeValues>0): ?>
                                                          <?php $__currentLoopData = $attributeValues1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributeValues1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                          <?php
                                                          ?>
                                                          <?php if(array_key_exists($processGroup[0]->id,$attributeValues3) && $attributeValues3[$key][0]==$processGroup[0]->id): ?>
                                                          <option value="<?php echo e($attributeValues1); ?>" <?php echo e((in_array($attributeValues1,explode(',',$attributeValues3[$key][1])))?'selected':''); ?>><?php echo e($attributeValues1); ?></option>
                                                          <?php else: ?>
                                                          <option value="<?php echo e($attributeValues1); ?>"><?php echo e($attributeValues1); ?></option>
                                                          <?php endif; ?>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                          <?php endif; ?>
                                                      </select>
                                                  </div>
                                              </div>
                                              <?php endif; ?>
                                              <?php break; ?>
                                          <?php case (5): ?>
                                            <?php if(isset($attributeValues3[$processGroup[0]->id][1])): ?>
                                              <?php
                                              $attributeValues1=explode(',',$processGroup[0]->attribute_values);
                                              $attributeValues=(count($attributeValues1)>0)?count($attributeValues1):'0';
                                              ?>
                                              <div class="form-group row">
                                                <label class="col-lg-2 col-md-12 col-form-label"><?php echo e($processGroup[0]->attribute_name); ?></label>
                    
                                                <div class="col-lg-10 col-md-12 col-form-label">
                                                    <div class="form-check pl-0 checkbox-inline">
                                                        <?php if($attributeValues>0): ?>
                                                        <?php $__currentLoopData = $attributeValues1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributeValues1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <label class="checkbox checkbox-outline">
                                                            <input type="checkbox" name="attributes[<?php echo e($processGroup[0]->id); ?>][]" <?php echo e((in_array($attributeValues1,explode(',',$attributeValues3[$key][1])))?'checked':''); ?> value="<?php echo e($attributeValues1); ?>">
                                                            <span></span><?php echo e($attributeValues1); ?></label>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php break; ?>
                                            <?php case (6): ?>
                                                <?php if(isset($attributeValues3[$processGroup[0]->id][1])): ?>
                                                <?php
                                                    $attributeValues1=explode(',',$processGroup[0]->attribute_values);
                                                    $attributeValues=(count($attributeValues1)>0)?count($attributeValues1):'0';
                                                ?>
                                                        <div class="form-group row">
                                                            <label class="col-lg-2 col-md-12 col-form-label"><?php echo e($processGroup[0]->attribute_name); ?></label>
                                                            <div class="col-lg-10 col-md-12 col-form-label">
                                                                <div class="form-check pl-0 checkbox-inline">
                                                                    <?php if($attributeValues>0): ?>
                                                                        <?php $__currentLoopData = $attributeValues1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributeValues1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <label class="checkbox checkbox-outline">
                                                                            <input type="radio" name="attributes[<?php echo e($processGroup[0]->id); ?>][]" <?php echo e((in_array($attributeValues1,explode(',',$attributeValues3[$key][1])))?'checked':''); ?>  value="<?php echo e($attributeValues1); ?>">
                                                                            <span></span><?php echo e($attributeValues1); ?></label>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php break; ?>
                                            <?php endswitch; ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                
                                 <!--End of seddion -->
                                 
                                <h3 class="card-title">Others</h3>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-12 col-form-label">Tax<span class="text-danger">*</span></label>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="input-group">
                                            <select class="form-control" id="tax" name="tax"  required>
                                                <option value="">select Tax</option>
                                            <?php $__currentLoopData = $tax; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option data-tax_type=<?php echo e($tax->tax_type); ?> data-tax_rate=<?php echo e($tax->tax_rate); ?> value="<?php echo e($tax->id); ?>" <?php echo e(($product->tax == $tax->id) ? 'selected' : ''); ?> ><?php echo e($tax->tax_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <div class="input-group-append"><span class="input-group-text" id="showtax"></span></div>
                                        </div>
                                  </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Weight<span class="text-danger">*</span></label>

                                <div class="col-lg-4 col-md-9">
                                    <input type="text" name="weight" value="<?php echo e($product->weight); ?>" class="form-control" required>
                                </div>
                                <div class="col-lg-2 col-md-3">
                                    <select name="weightUnit" class="form-control" >
                                        <option value="1" <?php echo e(($product->weight_unit == 1) ? 'selected' : ''); ?>>Gram</option>
                                        <option value="2" <?php echo e(($product->weight_unit == 2) ? 'selected' : ''); ?>>KG</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Product Description<span class="text-danger">*</span></label>

                                <div class="col-lg-10 col-md-12">
                                    <textarea name="productDescription" id="ktckeditor2"><?php echo e($product->product_description); ?></textarea>
                                    <div class="fv-plugins-message-container"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Trending</label>

                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <input data-switch="true" type="checkbox" checked="checked" data-on-color="success" data-off-color="danger" name="trending" <?php echo e(($product->trending == 'on') ? 'checked' : ''); ?> />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Delivery Date</label>
                                <div class="col-lg-4 col-md-12" >
                                    <input type="text" name="deliveryDate" placeholder="Select Date" class="form-control" data-id="<?php echo e($product->delivery_date); ?>" value="<?php echo e($product->delivery_date); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Meta Name</label>
                                <div class="col-lg-4 col-md-12">
                                    <input class="form-control" type="text" value="<?php echo e($product->metaname); ?>" id="metaname" name="metaname" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Meta Description</label>
                                <div class="col-lg-4 col-md-12">
                                    <textarea name="metadescription" id="ktckeditor3"><?php echo e($product->metadescription); ?></textarea>
                                    <div class="fv-plugins-message-container"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Meta Keyword
                                <span class="text-danger">*</span></label>
                                <div class="col-lg-4 col-md-12">
                                    <input class="form-control" type="text" value="<?php echo e($product->metakeyword); ?>" id="metakeyword" name="metakeyword" required/>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <span>Enter keyword separated by comma (E.g. Sarees, Pure)</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Quantity
                                <span class="text-danger">*</span></label>
                                <div class="col-lg-4 col-md-12">
                                    <input class="form-control" type="text" value="<?php echo e($product->quantity); ?>" id="quantity" name="quantity" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Min Quantity
                                <span class="text-danger">*</span></label>
                                <div class="col-lg-4 col-md-12">
                                    <input class="form-control" type="text" value="<?php echo e($product->minquantity); ?>" id="minquantity" name="minquantity" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Sold Out</label>

                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <input data-switch="true" type="checkbox"  data-on-color="success" data-off-color="danger" name="soldout" value="on" <?php echo e(($product->soldout == 'on') ? 'checked' : ''); ?> />
                                </div>
                            </div>

                            <h3 class="card-title">Pictures</h3>

                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Image 1<span class="text-danger">*</span> </label>
                                <div class="col-lg-3 col-md-12">
                                    <label for="image1"  ><img class="file-preview" style="width:250px;border:2px dashed #222;height: 310px"  src="<?php echo e(URL::asset('assets/media/products/'.$product->image1)); ?>">
                                    <input type="hidden" name="image1" value="<?php echo e($product->image1); ?>">
                                    </label>
                                    <input type="file" class="upload_image" id="image1" style="width:250px;border:2px dashed #222;height: 310px"  accept="image/*">
                                    <span class="form-text text-muted">Image width and height:700*875</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Image 2</label>

                                <div class="col-lg-3 col-md-9">
                                    <label for="image2">
                                        <?php if($product->image2): ?>
                                    <img class="file-preview"  style="width:250px;border:2px dashed #222;height: 310px" src="<?php echo e(URL::asset('assets/media/products/'.$product->image2)); ?>">
                                    <input type="hidden" name="image2" value="<?php echo e($product->image2); ?>">
                                    <?php else: ?>
                                    <img class="file-preview"  style="width:250px;border:2px dashed #222;height: 310px">
                                    <input type="hidden" name="image2" value="">
                                    <?php endif; ?>
                                    </label>
                                    <input type="file" id="image2"  class="upload_image" style="width:250px;padding:20px;border:2px dashed #222;" accept="image/*">
                                    
                                    <span class="form-text text-muted">Image width and height:700*875</span>
                                </div>
                                <div class="col-lg-2 col-md-3">
                                    <span class="btn btn-light-danger font-weight-bold mr-2 deletSpan">
                                        <i class="ki ki-bold-close icon-sm"></i> Delete
                                    </span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Image 3</label>

                                <div class="col-lg-3 col-md-9">
                                    <label for="image3">
                                        <?php if($product->image3): ?>
                                    <img class="file-preview"  style="width:250px;border:2px dashed #222;height: 310px" src="<?php echo e(URL::asset('assets/media/products/'.$product->image3)); ?>">
                                    <input type="hidden" name="image3" value="<?php echo e($product->image3); ?>">
                                    <?php else: ?>
                                    <img class="file-preview"  style="width:250px;border:2px dashed #222;height: 310px">
                                    <input type="hidden" name="image3" value="">
                                    <?php endif; ?>
                                    </label>
                                    <input type="file" id="image3"  class="upload_image" style="width:250px;padding:20px;border:2px dashed #222;" accept="image/*">
                                    
                                    <span class="form-text text-muted">Image width and height:700*875</span>
                                </div>
                                <div class="col-lg-2 col-md-3">
                                    <span class="btn btn-light-danger font-weight-bold mr-2 deletSpan">
                                        <i class="ki ki-bold-close icon-sm"></i> Delete
                                    </span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Image 4</label>

                                <div class="col-lg-3 col-md-9">
                                    <label for="image4">
                                        <?php if($product->image4): ?>
                                    <img class="file-preview"  style="width:250px;border:2px dashed #222;height: 310px" src="<?php echo e(URL::asset('assets/media/products/'.$product->image4)); ?>">
                                    <input type="hidden" name="image4" value="<?php echo e($product->image4); ?>">
                                    <?php else: ?>
                                    <img class="file-preview"  style="width:250px;border:2px dashed #222;height: 310px">
                                    <input type="hidden" name="image4" value="">
                                    <?php endif; ?>
                                    </label>
                                    <input type="file" id="image4" class="upload_image" style="width:250px;padding:20px;border:2px dashed #222;" accept="image/*">
                                    
                                    <span class="form-text text-muted">Image width and height:700*875</span>
                                   
                                </div>
                                <div class="col-lg-2 col-md-3">
                                    <span class="btn btn-light-danger font-weight-bold mr-2 deletSpan">
                                        <i class="ki ki-bold-close icon-sm"></i> Delete
                                    </span>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Similar Products</label>

                                
                                <div class="col-lg-10 col-md-12">
                                    <select name="similarProducts[]" id="similarProducts" class="form-control" multiple>
                                        <?php $__currentLoopData = $similarProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $similarProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($similarProduct->id); ?>" <?php echo e(in_array($similarProduct->id,explode(',',$product->similar_products)) ? 'selected' : ''); ?>><?php echo e($similarProduct->product_title); ?>/SKU: <?php echo e($StoreConfig->productIdprefix); ?><?php echo e($similarProduct->product_sku); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-md-12 col-form-label">Related Products</label>

                                
                                <div class="col-lg-10 col-md-12">
                                    <select name="relatedProducts[]" id="relatedProducts" class="form-control" multiple>
                                        <?php $__currentLoopData = $relatedProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($relatedProduct->id); ?>" <?php echo e(in_array($relatedProduct->id,explode(',',$product->related_products)) ? 'selected' : ''); ?>><?php echo e($relatedProduct->product_title); ?>/SKU: <?php echo e($StoreConfig->productIdprefix); ?><?php echo e($relatedProduct->product_sku); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card-->

                </div>

            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

<!--end::Content-->
<!--begin::Footer-->
<?php $__env->stopSection(); ?>                     

<?php $__env->startPush('script'); ?>
<script>

$('#category').select2({
        allowClear: true,
        dropdownAutoWidth:true,
        width:'resolve',
        dropdownCssClass: "test"
    });
    $('#relatedProducts').select2({
        allowClear: true,
        dropdownAutoWidth:true,
        width:'resolve',
    });
    $('#similarProducts').select2({
        allowClear: true,
        dropdownAutoWidth:true,
        width:'resolve',
    });

    $('.multis').select2({
        allowClear: true,
        dropdownAutoWidth:true,
        width:'resolve',
    });

    $(document).ready(function(){
        $("input[type=file]").css("display","none");
    });
   $("#category").change(function(){
    var category=$("#category").val();
    $.ajax({
        type:"POST",
        url:"<?php echo e(route('getSubCategory')); ?>",
        data:{"_token": "<?php echo e(csrf_token()); ?>",id:category},
        success:function(data){
            $.each(data, function(index, element) {
                $("#subCategory").append('<option value="'+element["id"]+'">'+element["category_name"]+'</option>');

            });
        }
    });
});
   $(".imagePreview").change(function(event){
       var temp= $(this);
            var reader = new FileReader();
            var imageField = document.getElementsByClassName("file-preview");
            reader.onload = function(){
                if(reader.readyState == 2){
                     temp.parent()[0].children[0].children[0].src=reader.result;
                }
            }
            reader.readAsDataURL(event.target.files[0]);
        
   });

   // Class definition

   var KTBootstrapSwitch = function() {

// Private functions
var demos = function() {
 // minimum setup
 $('[data-switch=true]').bootstrapSwitch();
};

return {
 // public functions
 init: function() {
     demos();
 },
};
}();

jQuery(document).ready(function() {
    KTBootstrapSwitch.init();
});

</script>
<script>
    var retu =  ($("#tax").find(':selected').data('tax_type')==1)?'%':'₹';
    $("#showtax").html($("#tax").find(':selected').data('tax_rate')+" "+retu);

    if($('#vendor').val() != ""){
        $("#Manufacturer").html("Vendor "+$('#vendor').find(':selected').data('vendorperscent')+" %");
        $("#Code").html($('#vendor').find(':selected').data('productprefix'));
        $("#persenttest").val(Number($('#vendor').find(':selected').data('vendorperscent')));
        }else{
            $("#persenttest").val(Number(0));
            $("#Code").html("Admin");
            $("#Manufacturer").html("");
        }
    function baseprice(price){
        var persent = Number($('#markup').val());
        var manufacturerPrice = Number(price);
        var onepersent = manufacturerPrice/100;
        $('#basePrice').val(Number((onepersent*persent)+manufacturerPrice));
    }
    function markupPrice(price){
        if($('#markup_type').val() == '0' && $('#markup').val() > 100){ 
            $('#markup').val(100)
        }
        var persent = Number($('#markup').val());
        var manufacturerPrice = Number($('#manufacturerPrice').val());
        if($('#markup_type').val() == '1'){
           $('#basePrice').val(Number((1*persent)+manufacturerPrice)); 
           return;
        }
        var onepersent = manufacturerPrice/100;
        $('#basePrice').val(Number((onepersent*persent)+manufacturerPrice));
    }
    $("#tax").change(function(){
        var retu =  ($(this).find(':selected').data('tax_type')==1)?'%':'₹';
        $("#showtax").html($(this).find(':selected').data('tax_rate')+" "+retu);
    });
    $("#vendor").change(function(){
        if($(this).val() != ""){
        $("#Manufacturer").html("Vendor "+$(this).find(':selected').data('vendorperscent')+" %");
        $("#Code").html($(this).find(':selected').data('productprefix'));
        $("#persenttest").val(Number($('#vendor').find(':selected').data('vendorperscent')));
        }else{
            $("#persenttest").val(Number(0));
            $("#Code").html("Admin");
            $("#Manufacturer").html("");
        }
    });
    var objectB = new Object();
    var objectA = new Object();
    $(document).ready(function(){
        $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
         width:700,
          height:875,
          type:'square' //circle
        },
        boundary:{
          width:800,
          height:800
        }
      });
    
      $('.upload_image').on('change', function(){
        objectB = this.parentElement;
        objectA = this;
        var reader = new FileReader();
        reader.onload = function (event) {
          $image_crop.croppie('bind', {
            url: event.target.result
          }).then(function(){
            console.log('jQuery bind complete');
          });
        }
        reader.readAsDataURL(this.files[0]);
        $('#uploadimageModal').modal('show');
      });
    
      $('.crop_image').click(function(event){
          var id= $("#id").val();
          var url= $("#url").val();
          var table_colum = objectA.id;
        $image_crop.croppie('result', {
          type: 'canvas',
          size: 'viewport'
        }).then(function(response){
            $.ajax({
                url:url,
                type: "POST",
                data:{id:id,table_colum:table_colum,"image": response,"_token": "<?php echo e(csrf_token()); ?>"},
                success:function(data){  
                    objectB.children[0].children[0].src = response;
                    $('#uploadimageModal').modal('hide');
                    objectB.children[0].children[1].value = data['Name'];
                },error:function(data){
                    $.notify("Reduce the quality & size of image !!","success");
                }
            });
            $('#uploadimageModal').modal('hide');
        })
      });
        $('.deletSpan').on('click',function(){
            this.parentElement.parentElement.children[1].children[0].children[0].src="";
            this.parentElement.parentElement.children[1].children[0].children[1].value = "";
        });
    });
    
    $('#markup_type').change(function(){
        $('#markup_span').text($(this).select2('data')[0]['text'])
    })
    </script>
    <script>
    ClassicEditor.create( document.querySelector( '#ktckeditor1' ) )
        .then( editor => { window.CKEditor1 = editor;} )
		.catch( error => { console.error( error ); });
		ClassicEditor.create( document.querySelector( '#ktckeditor2' ) )
        .then( editor => { window.CKEditor2 = editor;} )
		.catch( error => { console.error( error ); });
		ClassicEditor.create( document.querySelector( '#ktckeditor3' ) )
        .then( editor => { window.CKEditor3 = editor;} )
		.catch( error => { console.error( error ); });
		ClassicEditor.create( document.querySelector( '#ktckeditor4' ) )
        .then( editor => { window.CKEditor4 = editor;} )
		.catch( error => { console.error( error ); });
 </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/witcreat/public_html/THESILKASTIC.COM/resources/views/admin/product/edit.blade.php ENDPATH**/ ?>