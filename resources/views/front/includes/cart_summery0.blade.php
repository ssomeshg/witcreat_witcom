<div class="profileright-inner">
                    <div class="priceinfo-wraper">
                        <div class="priceinfo-title">
                            PRICE DETAILS
                        </div>
                        
                        <div class="amountsplit-single">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    Price ({{count(session()->get('cart')->items)}} items)
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                                    <div class="cartitem-value"><span><i class="fa fa-inr"></i>{{session()->get('cart')->totalPrice}}</span></div>
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
                                        <div class="cartitem-value"><span><i class="fa fa-inr"></i>{{session()->get('cart')->tax}}</span></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            @endif
                        </div>
                        <div class="totalamt-payable">
                            <div class="amountsplit-single">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                        Total
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right">
                                        <div class="cartitem-value"><span><i class="fa fa-inr"></i> {{session()->get('cart')->grandTotal}}</span></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad bottombtn-wraper">
                            <a class="placeorder-btn btn-block" href="{{(Auth::check())?route('view.deliveryaddress'):route('front.loginBlade')}}">CheckOut</a>
                        </div>

                    </div>
                </div>