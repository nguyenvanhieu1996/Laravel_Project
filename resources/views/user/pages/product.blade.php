@extends('user.master')
@section('description', 'Product Page')
@section('content')
  <section id="product">
    <div class="container">      
      <!-- Product Details-->
      <div class="row">
       <!-- Left Image-->
        <div class="col-lg-5">
          <ul class="thumbnails mainimage">
            <li>
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="{!! asset('resources/uploads/'.$product_detail->image) !!}">
                <img src="{!! asset('resources/uploads/'.$product_detail->image) !!}" alt="" title="">
              </a>
            </li>
            @foreach($image as $item_img)
            <li>
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="{!! asset('resources/uploads/detail/'.$item_img->image) !!}">
                <img  src="{!! asset('resources/uploads/detail/'.$item_img->image) !!}" alt="" title="">
              </a>
            </li>
            @endforeach
            
          </ul>
          <span>Mouse move on Image to zoom</span>
          <ul class="thumbnails mainimage">
            <li class="producthtumb">
              <a class="thumbnail" >
                <img  src="{!! asset('resources/uploads/'.$product_detail->image) !!}" alt="" title="">
              </a>
            </li>
            @foreach($image as $item_img)
            <li class="producthtumb">
              <a class="thumbnail" >
                <img  src="{!! asset('resources/uploads/detail/'.$item_img->image) !!}" alt="" title="">
              </a>
            </li>
            @endforeach
            
          </ul>
        </div>
         <!-- Right Details-->
        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="productname"><span class="bgnone">{!! $product_detail->name !!}</span></h1>
              <div class="productprice">
                <div class="productpageprice">
                  <span class="spiral"></span>{!! number_format($product_detail->price,0,",",".") !!}</div>
                <div class="productpageoldprice">Old price : $345.00</div>
                <ul class="rate">
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="off"></li>
                  <li class="off"></li>
                </ul>
              </div>
              <div class="quantitybox">
                <select class="selectsize">
                  <option>Select Size</option>
                  <option>Red</option>
                  <option>Green</option>
                  <option>Blue</option>
                  <option>Black</option>
                </select>
                <select class="selectqty">
                  <option>Select</option>
                  <option>24</option>
                  <option>36</option>
                  <option>48</option>
                </select>
                <div class="clear"></div>
                <div class="control-group">
                  <div class="controls">
                    <label class="checkbox">
                      <input type="checkbox" name="optionsCheckboxList2" value="option2">
                      Option two can also be checked and included in form results </label>
                    <label class="checkbox">
                      <input type="checkbox" name="optionsCheckboxList3" value="option3">
                      Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results </label>
                    `
                    <label class="radio">
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Option one is this and that—be sure to include why it's great </label>
                    <label class="radio">
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Option two can be something else and selecting it will deselect option one </label>
                  </div>
                </div>
              </div>
              <ul class="productpagecart">
                <li><a class="cart" href="#">Add to Cart</a>
                </li>
                <li><a class="wish" href="#" >Add to Wishlist</a>
                </li>
                <li><a class="comare" href="#" >Add to Compare</a>
                </li>
              </ul>
         <!-- Product Description tab & comments-->
         <div class="productdesc">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="#description">Description</a>
                  </li>
                  <li><a href="#specification">Specification</a>
                  </li>
                  <li><a href="#review">Review</a>
                  </li>
                  <li><a href="#producttag">Tags</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="description">
                    <h2>h2 tag will be appear</h2>
                    {!! $product_detail->description !!}<br>
                    <br>
                    <ul class="listoption3">
                      <li>Lorem ipsum dolor sit amet Consectetur adipiscing elit</li>
                      <li>Integer molestie lorem at massa Facilisis in pretium nisl aliquet</li>
                      <li>Nulla volutpat aliquam velit </li>
                      <li>Faucibus porta lacus fringilla vel Aenean sit amet erat nunc Eget porttitor lorem</li>
                    </ul>
                  </div>
                  <div class="tab-pane " id="specification">
                    <ul class="productinfo">
                      <li>
                        <span class="productinfoleft"> Product Code:</span> Product 16 </li>
                      <li>
                        <span class="productinfoleft"> Reward Points:</span> 60 </li>
                      <li>
                        <span class="productinfoleft"> Availability: </span> In Stock </li>
                      <li>
                        <span class="productinfoleft"> Old Price: </span> $500.00 </li>
                      <li>
                        <span class="productinfoleft"> Ex Tax: </span> $500.00 </li>
                      <li>
                        <span class="productinfoleft"> Ex Tax: </span> $500.00 </li>
                      <li>
                        <span class="productinfoleft"> Product Code:</span> Product 16 </li>
                      <li>
                        <span class="productinfoleft"> Reward Points:</span> 60 </li>
                    </ul>
                  </div>
                  <div class="tab-pane" id="review">
                    <h3>Write a Review</h3>
                    <form class="form-vertical">
                      <fieldset>
                        <div class="control-group">
                          <label class="control-label">Text input</label>
                          <div class="controls">
                            <input type="text" class="col-lg-3">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">Textarea</label>
                          <div class="controls">
                            <textarea rows="3"  class="col-lg-3"></textarea>
                          </div>
                        </div>
                      </fieldset>
                      <input type="submit" class="btn btn-orange" value="continue">
                    </form>
                  </div>
                  <div class="tab-pane" id="producttag">
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum <br>
                      <br>
                    </p>
                    <ul class="tags">
                      <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> html</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> html</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> css</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> jquery</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> css</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> jquery</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> css</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> jquery</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> html</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  Related Products-->
  <section id="related" class="row">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Related Products</span><span class="subtext"> See Our Most featured Products</span></h1>
      <ul class="thumbnails">
        @foreach($product_cate as $item_pro_cate)
        <li class="col-lg-3 col-sm-3">
          <a class="prdocutname" href="{{ URL('chi-tiet-san-pham', [$item_pro_cate->id, $item_pro_cate->alias]) }}">{!! $item_pro_cate->name !!}</a>
          <div class="thumbnail">
            <span class="sale tooltip-test">Sale</span>
            <a href="#"><img alt="" src="{!! asset('resources/uploads/'.$item_pro_cate->image) !!}"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">{!! $item_pro_cate->price !!}</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        @endforeach

      </ul>
    </div>
  </section>
  <!-- Popular Brands-->
  <section id="popularbrands" class="container">
    <h1 class="heading1"><span class="maintext">Popular Brands</span><span class="subtext"> See Our  Popular Brands</span></h1>
    <div class="brandcarousalrelative">
      <ul id="brandcarousal">
        <li><img src="img/brand1.jpg" alt="" title=""/></li>
        <li><img src="img/brand2.jpg" alt="" title=""/></li>
        <li><img src="img/brand3.jpg" alt="" title=""/></li>
        <li><img src="img/brand4.jpg" alt="" title=""/></li>
        <li><img src="img/brand1.jpg" alt="" title=""/></li>
        <li><img src="img/brand2.jpg" alt="" title=""/></li>
        <li><img src="img/brand3.jpg" alt="" title=""/></li>
        <li><img src="img/brand4.jpg" alt="" title=""/></li>
        <li><img src="img/brand1.jpg" alt="" title=""/></li>
        <li><img src="img/brand2.jpg" alt="" title=""/></li>
        <li><img src="img/brand3.jpg" alt="" title=""/></li>
        <li><img src="img/brand4.jpg" alt="" title=""/></li>
      </ul>
      <div class="clearfix"></div>
      <a id="prev" class="prev" href="#">&lt;</a>
      <a id="next" class="next" href="#">&gt;</a>
    </div>
  </section>
@endsection