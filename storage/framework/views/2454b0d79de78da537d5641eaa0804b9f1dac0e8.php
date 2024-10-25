<div class="priceinfo-title">
								Cart Totals
						</div>
						
						<div class="amountsplit-single">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								Subtotal <?php if($StoreConfig->include_tax != 'Exclusive'): ?><br><small>(Inclusive of tax)</small><?php endif; ?>
                                        
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
								<div class="cartitem-value"><span><i class="fa fa-inr"></i> <?php echo e($Cart->totalPrice); ?></span></div>
							</div>
							
						</div>
						</div>

                        <?php if($StoreConfig->include_tax != 'Inclusive'): ?>
                        <div class="totalamt-payable">
						<div class="amountsplit-single">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								(+) Tax        
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
								<div class="cartitem-value"><span><i class="fa fa-inr"></i> <?php echo e($Cart->tax); ?></span></div>
							</div>
							
						</div>
						</div>
						</div>
                        <?php endif; ?>

						        <?php if($Cart->CouponClass): ?>
						        <div class="totalamt-payable">
                                <div class="amountsplit-single">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            (-) Coupon
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right">
                                            <div class="cartitem-value"><span><?php echo e($Cart->coupen); ?></span></div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <?php endif; ?>
                                <div class="totalamt-payable">
                                <div class="amountsplit-single">
                                <div class="row">
                                   <?php if($Cart->deliverycharge != null ): ?>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        (+) Delivery Charges
                        
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right">
                                        <div class="cartitem-value"><span><?php echo e($Cart->deliverycharge); ?></span></div>
                                    </div>
                                    <?php else: ?>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> Out Of Service </div>
                                    <?php endif; ?>
                                </div>
                                </div>
						        </div>
						
						<div class="totalamt-payable">
							<div class="amountsplit-single">
						<div class="row">
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
								Total

							</div>
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right">
								<div class="cartitem-value"><span><i class="fa fa-inr"></i><?php echo e($Cart->grandTotal); ?></span></div>
							</div>
							
						</div>
						</div>
						</div>
						
						 <!--<div class="totalamt-payable">-->
       <!--                     <div class="amountsplit-single">-->
       <!--                         <div class="row">-->
       <!--                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
       <!--                                 <?php if($Address->country_id == 100): ?>-->
       <!--                                 <input type="radio" name="payment" id="CODradio" value="COD" <?php if($Cart->deliveryextra): ?> checked <?php endif; ?>  onclick='paymenttype(event);'>-->
       <!--                                 <label for="CODradio">Cash On Delivery</label>-->
       <!--                                 <?php else: ?>-->
       <!--                                 <input type="radio" id="CODradio">-->
       <!--                                 <label for="CODradio">Cash On Delivery</label>-->
       <!--                                 <div class="over"></div>-->
       <!--                                 <?php endif; ?>-->
       <!--                             </div>-->
       <!--                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
       <!--                                 <input type="radio" name="payment" id="upiradio" value="upi" <?php if(!$Cart->deliveryextra): ?> checked <?php endif; ?> onclick='paymenttype(event);'>-->
       <!--                                 <label for="upiradio">Visa / Debit card</label>-->
       <!--                             </div>-->
       <!--                         </div>-->
       <!--                     </div>-->
       <!--                 </div>--><?php /**PATH /home/witcreat/public_html/THESILKASTIC.COM/resources/views/front/includes/paymentsummery.blade.php ENDPATH**/ ?>