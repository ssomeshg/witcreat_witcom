@extends('front.includes.container')
@section('content')
<!-- main start -->

<script>
    var min = parseInt('{{$min}}');
    var max = parseInt('{{$max}}') +1;

</script>
<section class="banner-section">
	<div class="banner-inner">
		<div class="homeslider">
			<img src="{{URL::asset('assets/media/banner/0slider1.jpg')}}" class="img-responsive" alt="slider1">
			<div class="pagetitle-wraper">
				<div class="container">
					<div class="pagetitle">Sarees</div>
				</div>
			</div>
		</div>	
	</div>	
	<div class="banner-breadcrumb">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-12">
  					<ul class="breadcrumb">
					  <li><a href="{{route('front.index')}}">Home</a></li>					  
					  <li><a href="">All Products</a></li>
					  
				    </ul>
  				</div>
  			</div>
  		</div>
  	</div>
	</section>
<section class="prdlist-section common-section col-md-12">
    <main class="cd-main-content">
        <div class="container">
            <div class="row overhide">
                <div class="filterside">
                    <div class="cd-filter col-md-3 col-sm-3 mobfiltertop">
                        <a href="#0" class="cd-filter-trigger cd-show mobfilterhide">Filters <i
                                class="fa fa-long-arrow-right"></i></a>
                        <a href="javascript:void(0);" class="filtclear  cd-show mobfilterhide filter-clean clearm" style="position: absolute;right: 0;">Clear All</a>
                        <!--<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i> </a>-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 collapsemenu-wraper">
                            <div class="categorylist-wraper">
                                <ul class="collapsemenu">
                                    <li>
                                        <a class="firstlevel-collpase" href="javascript:void(0);">All Categories</a>
                                        <a aria-controls="collapseMenu1" aria-expanded="false" class="collapse-trigger collapsed"
                                            data-toggle="collapse" href="#collapseMenu1" id="flexible-packaging"
                                            role="button"></a>
                                        <div aria-expanded="false" class="collapse" id="collapseMenu1" style="">
                                            <div class="well">
                                                <ul class="collapse-submenu">
                                                    @foreach($categorys as $categorys)
                                                    @if(count($categorys->subs) >0)
                                                    <li>
			<a href="{{route('front.filter',[$categorys->id])}}"  data-id="{{$categorys->id}}" class="Category">{{$categorys->category_name}}</a> 
			<a aria-controls="collapseMenu1" aria-expanded="false"  data-toggle="collapse" href="#collapseMenu1{{$categorys->id}}" id="flexible-packaging" role="button"><i class="fa fa-minus" aria-hidden="true"></i></a>
			<div aria-expanded="false" class="collapse in" id="collapseMenu1{{$categorys->id}}" style="">
				<div class="well">
					<ul class="collapse-submenu">
					    @foreach($categorys->subs as $subCates)
					<li>
						<a href="{{route('front.filter',[$subCates->id])}}" data-id="{{$subCates->id}}" class="Category">{{$subCates->category_name}}</a> 
					</li>
					@endforeach
					</ul>
				</div>
				</div>
			</li>
                                                    @else
                                                    <li>
                                                        <a href="{{route('front.filter',[$categorys->id])}}" data-id="{{$categorys->id}}" class="Category">{{$categorys->category_name}}</a>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="pricerange-wraper">
                                <ul class="collapsemenu">
                                <li>
                                <a class="firstlevel-collpase" href="javascript:void(0);">Price</a> 
                                <a aria-controls="pricefilter1" aria-expanded="false" class="collapse-trigger collapsed" data-toggle="collapse" href="#pricefilter1" role="button"></a>
                                <div aria-expanded="false" class="collapse" id="pricefilter1" style="">
                                    <div class="well">
                                        <div class="filterlist">
                                            <form action="#" id="price" style="padding: 5px">
                                                <div class="filter-price-slider"></div>
                                                <div class="filter-actions">
                                                    <div class="priceinfo-title">Price:
                                                        <span class="filter-price-range"></span>
                                                    </div>
                                                    <button type="submit" class="placeorder-btn">Filter</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </li>	
                                </ul>
                            </div>
                            <div class="filtermain-wraper">
                                <ul class="collapsemenu">
                                    @php $i = 0 ;@endphp
                                    @foreach($attributeValues as $attributeValues)
                                    @if(count(explode(',',$attributeValues->attribute_values)) > 0)
                                    @php $i++;@endphp
                                    <li>
                                        <a class="firstlevel-collpase" href="javascript:void(0);">{{$attributeValues->attribute_name}}</a>
                                        <a aria-controls="delivery-availability{{$i}}" aria-expanded="false"
                                            class="collapse-trigger collapsed" data-toggle="collapse"
                                            href="#delivery-availability{{$i}}" role="button"></a>
                                        <div aria-expanded="false" class="collapse" id="delivery-availability{{$i}}" style="">
                                            <div class="well">
                                                <div class="filterlist">
                                                    @foreach(explode(',',$attributeValues->attribute_values) as $values)
                                                    <div>
                                                        <input type="checkbox" data-id="{{$attributeValues->id}}-{{$values}}" onclick="" name="attr[]" id="{{$attributeValues->id}}-{{$values}}" value="{{$attributeValues->id}}">
                                                        <label for="{{$attributeValues->id}}-{{$values}}">{{$values}}</label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="filter-bottom">
                                <span class="filterbot-single filter-result">
                                    <span></span> <span> </span>
                                </span>
                                <span class="filterbot-single filter-apply ">
                                    <a href="javascript:void(0);" onchange="fnAttrChanged();"
                                        class="apply-btn text-center"><span>Apply</span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <a href="#0" class="cd-filter-trigger">Filters <i class="fa fa-long-arrow-right"></i></a>
                    <a href="javascript:void(0);"  class="filt_clear filter-clean clear">Clear All</a>
                </div>
                <section class="cd-gallery col-md-9 col-sm-9 col-xs-12">
                    <div class="protitlesec">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-12" style="padding: 0px;">
                                <!--product found <span id="productCounts"></span>-->
                                <ul class="list-inline selectedfilter-wraper"><li>Product Found <span id="productCounts"></span></li></ul>
                                <ul class="list-inline selectedfilter-wraper selectfilter"></ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <form id="frmsortby" class="form-inline text-right">
                                    
                                    <div class="form-group">
                                        <label for="sel1">Sort by :</label>
                                        <select name="orderby" id="orderby" class="form-control">
                                            <option value="default">Default</option>
                                            <option value="new" selected="selected">New</option>
                                            <option value="top_rated">Top Rated</option>
                                            <option value="H-L">High to Low</option>
                                            <option value="L-H">Low to High</option>
                                            <option value="A-Z">A to Z</option>
                                            <option value="Z-A">Z to A</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="renderproduct">
                        @include('front.product-list')
                    </div>
                    <!--<div class="cd-fail-message">No results found</div>-->
                </section> <!-- cd-gallery -->
            </div>
        </div>
        </div>
    </main> <!-- cd-main-content -->
</section>
<style>
    
    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover{
        background-color: #ff3e6c;
        border-color: #ff3e6c;
        color: white;
    }
    .pagination>li>a, .pagination>li>span {
        border:none;
        color: #ff3e6c;
    }
    @media screen and (max-width: 767px){
        .clear{
            display:none !important;
        }
    }
    @media screen and (max-width: 767px){
        .clearm{
            display:none !important;
        }
    }
</style>

@endsection
@push('script')
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script type="text/javascript">
$('.filter-clean').hide(500);
var self = $('.filter-price-slider')[0];
    noUiSlider.create( self, $.extend( true, {
                    start: [ {{(isset($_GET['min']))?(int)$_GET['min']:(int)$min}},{{(isset($_GET['max']))?(int)$_GET['max']:(int)$max + 1}} ],
                    connect: true,
                    step: 1,
                    range: {
                        min: min,
                        max: max
                    }
                }));

                // Update Price Range
                self.noUiSlider.on( 'update', function ( values, handle ) {
                    var values = values.map( function ( value ) {
                        return ' ' + parseInt( value );
                    } )
                    $( self ).parent().find( '.filter-price-range' ).text( values.join( ' - ' ) );
                } );


        var cat = '{{!empty($cat)?$cat->id:null}}';
        var subcat ='{{!empty($subcat)?$subcat->id:null}}';
        var max1 = max;
        var min1 = min;
        var sort = null;
        var attribute = [];
        var page = null;
        $('.filter-clean').on('click',function (e){
            e.preventDefault();
            self.noUiSlider.reset();
            max1 = max;
            min1 = min;
            sort = null;
            page = null;
            attribute.forEach(element => {console.log(element);$("#"+element).prop("checked", false);});
            attribute = [];
            filter();
            $('.filter-clean').hide(500);
        });
        $('.Category').on('click', function (e) {
            e.preventDefault();
            cat = $(this).data('id');
            subcat = null;
            page = null;
            filter();
        });
        $('.sucategories').on('click', function (e) {
            e.preventDefault();
            cat = $(this).data('cat_id');
            subcat = $(this).data('id');
            page = null;
            filter();
        });
        $('#orderby').on('change',function(){
            sort = $(this).val();
            page = null;
            filter();
        });
        $("body").on('submit','#price',function(e){
            e.preventDefault();
            min1 = $('.noUi-handle-lower').attr('aria-valuetext');
            max1 = $('.noUi-handle-upper').attr('aria-valuetext');
            page = null;
            filter();
        });
        $('body').on('click','.pagination a' ,function(e){
            e.preventDefault();
            $('html, body').animate({ scrollTop: $("body #MixItUp2F266B").offset().top}, 1000);
            var url = $(this).attr('href');
            page = url.split('page=')[1];
            filter();
        });
        $('input[name="attr[]"]').change(function(e){
            setTimeout(function() {
                    attribute = $('input[name="attr[]"]:checked').map(function(){
                    return $(this).data('id');
                }).get();
                page = null;
                filter();
            },10);
        });
        function filter() {
            var selectfilter ='';
            var url = '{{route('front.filter')}}';
            if(cat != null){
                url += '/'+cat;
                if(subcat != null){
                    url += '/'+subcat;
                }
            }
            url += '?min='+min1+'&max='+max1;
            if(sort != null){
                url += '&sort='+sort;
            }
            if(attribute.length >= 1){
                url += '&attribute='+attribute.join('|').replace(/\s+/g, '*');
            }
            if(page != null){
                url += '&page='+page;
            }
            $('#renderproduct').load(url);
            // filter actions...
            if(attribute.length < 1 && min1 == min && max1 == max){
                $('.filter-clean').hide(500);
            }else{
                $('.filter-clean').show(500);
            }
            
            if(max1 != max || min1 != min){
                selectfilter += `<li>
							<span class="selected-filter" onclick="removeprice()">
								<span>${max1} - ${min1}</span><span class="select-close">×</span>
							</span>
						</li>`;  
            }
            for (let i = 0; i < attribute.length; i++) {
                var attr = attribute[i].split('-');
            selectfilter += `<li>
							<span class="selected-filter" onclick="removeselect('${attribute[i]}')">
								<span>${attr[1]}</span><span class="select-close">×</span>
							</span>
						</li>`;   
            }
            $("body .selectfilter").html(selectfilter);
        }
        function removeprice(){
            self.noUiSlider.reset();
            max1 = max;
            min1 = min;
            filter();
        }
        function removeselect(att){
            var attnew = [];
            for (let i = 0; i < attribute.length; i++) {
                if(attribute[i] != att){
                    attnew.push(attribute[i]);
                }else{
                    $("input[data-id='"+attribute[i]+"']").prop("checked", false);
                    // $("#"+attribute[i]).prop("checked", false);
                }
            }
            attribute = attnew;
            filter();
        }

        // $('body').on('click','.btn-wishlist',function(e){
        //     e.preventDefault();
        //         if(!$(this).hasClass("added")){
        //         $.ajax({
        //             method:"GET",
        //             url:'{{route('wishlistAdd')}}',
        //             data:{id:$(this).data('id')},
        //             success:function(data){
        //              },
        //             error:function(erroe){ }
        //         });
        //         }else{
        //             $.ajax({
        //                 method:"GET",
        //                 url:'{{route('wishlistremove')}}',
        //                 data:{id:$(this).data('id')},
        //                 success:function(data){ 
        //                     toastr["error"]('Removed from wishlist');
        //                 },
        //                 error:function(erroe){ }
        //             });
        //         }
        // });
    </script>
@endpush
