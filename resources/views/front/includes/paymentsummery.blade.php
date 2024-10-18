<div class="priceinfo-title">
								Cart Totals
						</div>
						
						<div class="amountsplit-single">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								Subtotal @if($StoreConfig->include_tax != 'Exclusive')<br><small>(Inclusive of tax)</small>@endif
                                        
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
								<div class="cartitem-value"><span><i class="fa fa-inr"></i> {{$Cart->totalPrice}}</span></div>
							</div>
							
						</div>
						</div>

                        @if($StoreConfig->include_tax != 'Inclusive')
                        <div class="totalamt-payable">
						<div class="amountsplit-single">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								(+) Tax        
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
								<div class="cartitem-value"><span><i class="fa fa-inr"></i> {{$Cart->tax}}</span></div>
							</div>
							
						</div>
						</div>
						</div>
                        @endif

						        @if($Cart->CouponClass)
						        <div class="totalamt-payable">
                                <div class="amountsplit-single">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            (-) Coupon
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right">
                                            <div class="cartitem-value"><span>{{$Cart->coupen}}</span></div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                @endif
                                <div class="totalamt-payable">
                                <div class="amountsplit-single">
                                <div class="row">
                                   @if($Cart->deliverycharge != null )
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        (+) Delivery Charges
                        
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right">
                                        <div class="cartitem-value"><span>{{$Cart->deliverycharge}}</span></div>
                                    </div>
                                    @else
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> Out Of Service </div>
                                    @endif
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
								<div class="cartitem-value"><span><i class="fa fa-inr"></i>{{$Cart->grandTotal}}</span></div>
							</div>
							
						</div>
						</div>
						</div>
						
						 <!--<div class="totalamt-payable">-->
       <!--                     <div class="amountsplit-single">-->
       <!--                         <div class="row">-->
       <!--                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
       <!--                                 @if($Address->country_id == 100)-->
       <!--                                 <input type="radio" name="payment" id="CODradio" value="COD" @if($Cart->deliveryextra) checked @endif  onclick='paymenttype(event);'>-->
       <!--                                 <label for="CODradio">Cash On Delivery</label>-->
       <!--                                 @else-->
       <!--                                 <input type="radio" id="CODradio">-->
       <!--                                 <label for="CODradio">Cash On Delivery</label>-->
       <!--                                 <div class="over"></div>-->
       <!--                                 @endif-->
       <!--                             </div>-->
       <!--                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
       <!--                                 <input type="radio" name="payment" id="upiradio" value="upi" @if(!$Cart->deliveryextra) checked @endif onclick='paymenttype(event);'>-->
       <!--                                 <label for="upiradio">Visa / Debit card</label>-->
       <!--                             </div>-->
       <!--                         </div>-->
       <!--                     </div>-->
       <!--                 </div>-->