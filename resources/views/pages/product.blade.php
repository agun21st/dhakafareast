@extends('layout.default')
@section('meta')
    @if($type=='All')
    <title>
        Our Products | Reliable Garments Factory in Bangladesh - DFL
    </title>
    <meta name="description" content="Specialized in OEM manufacturing of Workwear, Sportswear, Activewear, Safetywear, hi-vis, knitwear & Other Clothing. Our products include plain t-shirts, hoodies, boxers, fleece vests, jackets, shirts, shorts, sportswear & uniforms etc.">
    <meta name="keywords" content="Bangladesh Clothing Manufacturer, Underwear Manufacturing, Sportswear Manufacturing, Hooded Sweatshirt Manufacturer, workwear manufacturers, thermal winter nightwear supplier, Sports T-shirts Supplier, Garment Factorie in Bangladesh, garment sourcing, Apparel sourcing, clothing sourcing, Bangladesh T-shirts, Made in Bangladesh,  Activewear Manufacturer, Workwear Manufacturer, knitwear, womenswear, organic clothing, sourcing, organic cotton, apparel & fashion, women's apparel">
    @elseif ($type=='Workwear')
      <title>
        {{$type}} Manufacturer in Bangladesh - Dhaka Fareast LTD
      </title>
      <meta name="description" content="Worldwide high-quality workwear supplier. We provide customized uniform for corporate use. Get desired design & colour for your own company. Call now +88028416120 or email at info@dhakafareast.com">
      <meta name="keywords" content="{{$type}} Manufacturers in Bangladesh Dhaka | Wholesale, Suppliers, Exporters, OEM Factory:  wholesale {{$type}} bulk, Wholesale {{$type}} Suppliers in Canada, Luxembourg, Peru, Cambodia, Slovenia, Zambia, Kazakhstan, Uganda, Uruguay, Brunei, Norway, Latvia, Switzerland, Sweden, Ecuador, Botswana, Cameroon, Hungary, Cyprus, Malta, Iceland, Argentina, Trinidad, Chile, Lithuania, Angola, Mozambique, Bosnia, Herzegovina, Estonia, Romania, Vietnam, Jordan, Uzbekistan, Venezuela, Ukraine, Algeria, Japan, Iraq, Kosovo, Ireland, Turkey, Congo, Kenya, Libya, Senegal, Mexico, Qatar, South Africa, Mauritius, Bahrain, the Maldives, Israel, New Zealand, Finland, Belgium, Tunisia, Austria, Greece, Slovakia, Denmark, Kuwait, Spain, Italy, Saudi Arabia, Poland, Germany, Brazil, Oman, Hong Kong, Iran, Russia, Portugal, China, Indonesia, United Kingdom, Australia, Malaysia, United States, Singapore, Netherlands, Nigeria, the United Arab Emirates, France">
    @elseif ($type=='Work-wear')
      <title>
        {{ $type }} Suppliers in Bangladesh - DFL
      </title>
      <meta name="description" content="Find premium quality manufacturing workwear. We supply customized uniform for employees worldwide. Gear up with our top-quality wearing apparels. Call +88028416120 or email at info@dhakafareast.com">
      <meta name="keywords" content="{{$type}} Manufacturers in Bangladesh Dhaka | Wholesale, Suppliers, Exporters, OEM Factory:  wholesale {{$type}} bulk, Wholesale {{$type}} Suppliers in Canada, Luxembourg, Peru, Cambodia, Slovenia, Zambia, Kazakhstan, Uganda, Uruguay, Brunei, Norway, Latvia, Switzerland, Sweden, Ecuador, Botswana, Cameroon, Hungary, Cyprus, Malta, Iceland, Argentina, Trinidad, Chile, Lithuania, Angola, Mozambique, Bosnia, Herzegovina, Estonia, Romania, Vietnam, Jordan, Uzbekistan, Venezuela, Ukraine, Algeria, Japan, Iraq, Kosovo, Ireland, Turkey, Congo, Kenya, Libya, Senegal, Mexico, Qatar, South Africa, Mauritius, Bahrain, the Maldives, Israel, New Zealand, Finland, Belgium, Tunisia, Austria, Greece, Slovakia, Denmark, Kuwait, Spain, Italy, Saudi Arabia, Poland, Germany, Brazil, Oman, Hong Kong, Iran, Russia, Portugal, China, Indonesia, United Kingdom, Australia, Malaysia, United States, Singapore, Netherlands, Nigeria, the United Arab Emirates, France">
    @elseif ($type=='HI-vis')
      <title>
        Hi-Vis Manufacturer in Bangladesh | Hi Vis Clothing & Uniforms - DFL
      </title>
      <meta name="description" content="Your reliable high visibility clothing partner. Visit Dhaka Fareast for Hi-Vis clothing & uniforms! Stay safe & seen with our wide range of Hi-Vis products. Call +88028416120 or email at info@dhakafareast.com">
      <meta name="keywords" content="{{$type}} Manufacturers in Bangladesh Dhaka | Wholesale, Suppliers, Exporters, OEM Factory:  wholesale {{$type}} bulk, Wholesale {{$type}} Suppliers in Canada, Luxembourg, Peru, Cambodia, Slovenia, Zambia, Kazakhstan, Uganda, Uruguay, Brunei, Norway, Latvia, Switzerland, Sweden, Ecuador, Botswana, Cameroon, Hungary, Cyprus, Malta, Iceland, Argentina, Trinidad, Chile, Lithuania, Angola, Mozambique, Bosnia, Herzegovina, Estonia, Romania, Vietnam, Jordan, Uzbekistan, Venezuela, Ukraine, Algeria, Japan, Iraq, Kosovo, Ireland, Turkey, Congo, Kenya, Libya, Senegal, Mexico, Qatar, South Africa, Mauritius, Bahrain, the Maldives, Israel, New Zealand, Finland, Belgium, Tunisia, Austria, Greece, Slovakia, Denmark, Kuwait, Spain, Italy, Saudi Arabia, Poland, Germany, Brazil, Oman, Hong Kong, Iran, Russia, Portugal, China, Indonesia, United Kingdom, Australia, Malaysia, United States, Singapore, Netherlands, Nigeria, the United Arab Emirates, France">
    @elseif ($type=='Sports-and-Active')
      <title>
        Sportswear Manufacturer in Bangladesh - Dhaka Fareast LTD
      </title>
      <meta name="description" content="Want top-quality sportswear in wholesale? We manufacture & export bulk sportswear, active wear, athletic wearing & gym wear in cheap price. Call +88028416120 or email at info@dhakafareast.com">
      <meta name="keywords" content="{{$type}} Manufacturers in Bangladesh Dhaka | Wholesale, Suppliers, Exporters, OEM Factory:  wholesale {{$type}} bulk, Wholesale {{$type}} Suppliers in Canada, Luxembourg, Peru, Cambodia, Slovenia, Zambia, Kazakhstan, Uganda, Uruguay, Brunei, Norway, Latvia, Switzerland, Sweden, Ecuador, Botswana, Cameroon, Hungary, Cyprus, Malta, Iceland, Argentina, Trinidad, Chile, Lithuania, Angola, Mozambique, Bosnia, Herzegovina, Estonia, Romania, Vietnam, Jordan, Uzbekistan, Venezuela, Ukraine, Algeria, Japan, Iraq, Kosovo, Ireland, Turkey, Congo, Kenya, Libya, Senegal, Mexico, Qatar, South Africa, Mauritius, Bahrain, the Maldives, Israel, New Zealand, Finland, Belgium, Tunisia, Austria, Greece, Slovakia, Denmark, Kuwait, Spain, Italy, Saudi Arabia, Poland, Germany, Brazil, Oman, Hong Kong, Iran, Russia, Portugal, China, Indonesia, United Kingdom, Australia, Malaysia, United States, Singapore, Netherlands, Nigeria, the United Arab Emirates, France">
    @elseif ($type=='Basic-Wear')
      <title>
        Basic Wear Garment Factory - Dhaka Fareast LTD
      </title>
      <meta name="description" content="Trusted clothing manufacturer for small to large brands. Create & manufacture your clothing, headwear, labels, tags & packaging designs with low minimums. Call +88028416120 or email at info@dhakafareast.com">
      <meta name="keywords" content="{{$type}} Manufacturers in Bangladesh Dhaka | Wholesale, Suppliers, Exporters, OEM Factory:  wholesale {{$type}} bulk, Wholesale {{$type}} Suppliers in Canada, Luxembourg, Peru, Cambodia, Slovenia, Zambia, Kazakhstan, Uganda, Uruguay, Brunei, Norway, Latvia, Switzerland, Sweden, Ecuador, Botswana, Cameroon, Hungary, Cyprus, Malta, Iceland, Argentina, Trinidad, Chile, Lithuania, Angola, Mozambique, Bosnia, Herzegovina, Estonia, Romania, Vietnam, Jordan, Uzbekistan, Venezuela, Ukraine, Algeria, Japan, Iraq, Kosovo, Ireland, Turkey, Congo, Kenya, Libya, Senegal, Mexico, Qatar, South Africa, Mauritius, Bahrain, the Maldives, Israel, New Zealand, Finland, Belgium, Tunisia, Austria, Greece, Slovakia, Denmark, Kuwait, Spain, Italy, Saudi Arabia, Poland, Germany, Brazil, Oman, Hong Kong, Iran, Russia, Portugal, China, Indonesia, United Kingdom, Australia, Malaysia, United States, Singapore, Netherlands, Nigeria, the United Arab Emirates, France">
    @elseif ($type=='Fancy-Garments')
      <title>
        Fancy Garments Manufacturer in Bangladesh - DFL
      </title>
      <meta name="description" content="We are the experienced fancy clothing manufacturer, supplier & exporter in Bangladesh. Trusted fancy clothing manufacturer, supplier & exporter for small to large brands. Call +88028416120 or email at info@dhakafareast.com">
      <meta name="keywords" content="{{$type}} Manufacturers in Bangladesh Dhaka | Wholesale, Suppliers, Exporters, OEM Factory:  wholesale {{$type}} bulk, Wholesale {{$type}} Suppliers in Canada, Luxembourg, Peru, Cambodia, Slovenia, Zambia, Kazakhstan, Uganda, Uruguay, Brunei, Norway, Latvia, Switzerland, Sweden, Ecuador, Botswana, Cameroon, Hungary, Cyprus, Malta, Iceland, Argentina, Trinidad, Chile, Lithuania, Angola, Mozambique, Bosnia, Herzegovina, Estonia, Romania, Vietnam, Jordan, Uzbekistan, Venezuela, Ukraine, Algeria, Japan, Iraq, Kosovo, Ireland, Turkey, Congo, Kenya, Libya, Senegal, Mexico, Qatar, South Africa, Mauritius, Bahrain, the Maldives, Israel, New Zealand, Finland, Belgium, Tunisia, Austria, Greece, Slovakia, Denmark, Kuwait, Spain, Italy, Saudi Arabia, Poland, Germany, Brazil, Oman, Hong Kong, Iran, Russia, Portugal, China, Indonesia, United Kingdom, Australia, Malaysia, United States, Singapore, Netherlands, Nigeria, the United Arab Emirates, France">
    @elseif ($type=='Reguler-wear')
      <title>
        Regular Wear Clothing Manufacturer - DFL
      </title>
      <meta name="description" content="We are your reliable garment manufacturer in Bangladesh. Here, you can get classy regular wears in standard size at minimum price. For casual wear, t-shirt, pant, we ensure long durability.">
      <meta name="keywords" content="{{$type}} Manufacturers in Bangladesh Dhaka | Wholesale, Suppliers, Exporters, OEM Factory:  wholesale {{$type}} bulk, Wholesale {{$type}} Suppliers in Canada, Luxembourg, Peru, Cambodia, Slovenia, Zambia, Kazakhstan, Uganda, Uruguay, Brunei, Norway, Latvia, Switzerland, Sweden, Ecuador, Botswana, Cameroon, Hungary, Cyprus, Malta, Iceland, Argentina, Trinidad, Chile, Lithuania, Angola, Mozambique, Bosnia, Herzegovina, Estonia, Romania, Vietnam, Jordan, Uzbekistan, Venezuela, Ukraine, Algeria, Japan, Iraq, Kosovo, Ireland, Turkey, Congo, Kenya, Libya, Senegal, Mexico, Qatar, South Africa, Mauritius, Bahrain, the Maldives, Israel, New Zealand, Finland, Belgium, Tunisia, Austria, Greece, Slovakia, Denmark, Kuwait, Spain, Italy, Saudi Arabia, Poland, Germany, Brazil, Oman, Hong Kong, Iran, Russia, Portugal, China, Indonesia, United Kingdom, Australia, Malaysia, United States, Singapore, Netherlands, Nigeria, the United Arab Emirates, France">
    @elseif ($type=='Outer-wear')
      <title>
        Outer Wear Clothing Company – Dhaka Fareast LTD
      </title>
      <meta name="description" content="We supply outer wear clothing with unique fabric & fashionable look. From the threads to shipping, you can sense professional touch with us. Call +88028416120 or email at info@dhakafareast.com">
      <meta name="keywords" content="{{$type}} Manufacturers in Bangladesh Dhaka | Wholesale, Suppliers, Exporters, OEM Factory:  wholesale {{$type}} bulk, Wholesale {{$type}} Suppliers in Canada, Luxembourg, Peru, Cambodia, Slovenia, Zambia, Kazakhstan, Uganda, Uruguay, Brunei, Norway, Latvia, Switzerland, Sweden, Ecuador, Botswana, Cameroon, Hungary, Cyprus, Malta, Iceland, Argentina, Trinidad, Chile, Lithuania, Angola, Mozambique, Bosnia, Herzegovina, Estonia, Romania, Vietnam, Jordan, Uzbekistan, Venezuela, Ukraine, Algeria, Japan, Iraq, Kosovo, Ireland, Turkey, Congo, Kenya, Libya, Senegal, Mexico, Qatar, South Africa, Mauritius, Bahrain, the Maldives, Israel, New Zealand, Finland, Belgium, Tunisia, Austria, Greece, Slovakia, Denmark, Kuwait, Spain, Italy, Saudi Arabia, Poland, Germany, Brazil, Oman, Hong Kong, Iran, Russia, Portugal, China, Indonesia, United Kingdom, Australia, Malaysia, United States, Singapore, Netherlands, Nigeria, the United Arab Emirates, France">
    @elseif ($type=='Sports-Wear')
      <title>
        Sportswear Manufacturer in Bangladesh - Dhaka Fareast LTD
      </title>
      <meta name="description" content="Want top-quality sportswear in wholesale? We manufacture & export bulk sportswear, active wear, athletic wearing and gym wear in cheap price. Call +88028416120 or email at info@dhakafareast.com">
      <meta name="keywords" content="{{$type}} Manufacturers in Bangladesh Dhaka | Wholesale, Suppliers, Exporters, OEM Factory:  wholesale {{$type}} bulk, Wholesale {{$type}} Suppliers in Canada, Luxembourg, Peru, Cambodia, Slovenia, Zambia, Kazakhstan, Uganda, Uruguay, Brunei, Norway, Latvia, Switzerland, Sweden, Ecuador, Botswana, Cameroon, Hungary, Cyprus, Malta, Iceland, Argentina, Trinidad, Chile, Lithuania, Angola, Mozambique, Bosnia, Herzegovina, Estonia, Romania, Vietnam, Jordan, Uzbekistan, Venezuela, Ukraine, Algeria, Japan, Iraq, Kosovo, Ireland, Turkey, Congo, Kenya, Libya, Senegal, Mexico, Qatar, South Africa, Mauritius, Bahrain, the Maldives, Israel, New Zealand, Finland, Belgium, Tunisia, Austria, Greece, Slovakia, Denmark, Kuwait, Spain, Italy, Saudi Arabia, Poland, Germany, Brazil, Oman, Hong Kong, Iran, Russia, Portugal, China, Indonesia, United Kingdom, Australia, Malaysia, United States, Singapore, Netherlands, Nigeria, the United Arab Emirates, France">
    @else
    {{-- <title>
        Dhaka Fareast LTD | Cheap {{$type}} Manufacturers in Bangladesh Dhaka| Wholesale, Suppliers, Exporters, OEM Factory
    </title>
    <meta name="description" content="{{$type}} Manufacturers in Bangladesh Dhaka | Wholesale, Suppliers, Exporters, OEM Factory:  wholesale {{$type}} bulk, Wholesale {{$type}} Suppliers in Canada, Luxembourg, Peru, Cambodia, Slovenia, Zambia, Kazakhstan, Uganda, Uruguay, Brunei, Norway, Latvia, Switzerland, Sweden, Ecuador, Botswana, Cameroon, Hungary, Cyprus, Malta, Iceland, Argentina, Trinidad, Chile, Lithuania, Angola, Mozambique, Bosnia, Herzegovina, Estonia, Romania, Vietnam, Jordan, Uzbekistan, Venezuela, Ukraine, Algeria, Japan, Iraq, Kosovo, Ireland, Turkey, Congo, Kenya, Libya, Senegal, Mexico, Qatar, South Africa, Mauritius, Bahrain, the Maldives, Israel, New Zealand, Finland, Belgium, Tunisia, Austria, Greece, Slovakia, Denmark, Kuwait, Spain, Italy, Saudi Arabia, Poland, Germany, Brazil, Oman, Hong Kong, Iran, Russia, Portugal, China, Indonesia, United Kingdom, Australia, Malaysia, United States, Singapore, Netherlands, Nigeria, the United Arab Emirates, France">
    <meta name="keywords" content="{{$type}} Manufacturers in Bangladesh Dhaka | Wholesale, Suppliers, Exporters, OEM Factory:  wholesale {{$type}} bulk, Wholesale {{$type}} Suppliers in Canada, Luxembourg, Peru, Cambodia, Slovenia, Zambia, Kazakhstan, Uganda, Uruguay, Brunei, Norway, Latvia, Switzerland, Sweden, Ecuador, Botswana, Cameroon, Hungary, Cyprus, Malta, Iceland, Argentina, Trinidad, Chile, Lithuania, Angola, Mozambique, Bosnia, Herzegovina, Estonia, Romania, Vietnam, Jordan, Uzbekistan, Venezuela, Ukraine, Algeria, Japan, Iraq, Kosovo, Ireland, Turkey, Congo, Kenya, Libya, Senegal, Mexico, Qatar, South Africa, Mauritius, Bahrain, the Maldives, Israel, New Zealand, Finland, Belgium, Tunisia, Austria, Greece, Slovakia, Denmark, Kuwait, Spain, Italy, Saudi Arabia, Poland, Germany, Brazil, Oman, Hong Kong, Iran, Russia, Portugal, China, Indonesia, United Kingdom, Australia, Malaysia, United States, Singapore, Netherlands, Nigeria, the United Arab Emirates, France"> --}}
    @endif
@stop
@section('all-stories')
    <section class="all-banner-section">
        <div class="overley"></div>
        <div class="container">
            <div class="banner-header">
              <h1 class="title">{{$type}}</h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="product">Products</a></li>
                    <li class="active">
                       {{$type}}
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <section class="product-details">
      <div class="container">
        @if (url()->full()=='http://localhost:8005/product-type/Basic-Wear' || url()->full()=='http://localhost:8005/product-by-type?product_type=Basic-Wear')
            {{-- content text --}}
          <div>
            <h2>
              Basic wear
            </h2>
            <h4>
              Casuals for Everyday Life
            </h4>
            <p class="text-justify">
              Basic wears are simple clothes that you wear every day at home. For comfortable use and reasonable price, people choose these wearing for all seasons. Proudly, Dhaka Fareast is your authentic basic wear manufacturer in Bangladesh. In several countries across the world, we serve high-standard casual wear for daily use. So, you can get 100% export-quality basic wear from our organized and updated catalog, from anywhere. 
            </p>
          </div>
          <br/>
          <br/>
        @endif
        
        <div>
          @if ($type=="Workwear")
          <div>
            <h2>Clothing for safety</h2>
            <p class="text-justify" style="line-height: 26px;">
              Workwears are specially designed for durability and safety in manual labour. In Dhaka Fareast LTD, 
              we produce the best fabrics for clothes in the workplace. Looking for reliable workwear or uniform 
              manufacturers in Bangladesh? You are in the right place at the right time. Whether factory, construction 
              site, or road, prepare with 100% safety wearing made by our experts.
              <br/><br/>To get them at a preferable price and design check out our catalog now!
            </p>
          </div>
          <hr/>
          <div>
            <h2>Your dress, your identity </h2>
            <p class="text-justify" style="line-height: 26px;">
              Workwears are used to reduce workplace accidents globally. Also, these clothings bear your identity. 
              Each professional has their own style in dress up. For instance, a traffic policeman wears a unique vest than a factory engineer.
            </p>
            <h4>Look for your desired products here, in our vast collections.</h4>
          </div>
          @elseif($type=="HI-Vis")
          <div>
            <h2>Extra visible clothing for safety</h2>
            <p class="text-justify" style="line-height: 26px;">
              Almost 76% of fatal accidents can be prevented by using hi-vis clothing in 
              industrial works.  Also, in traffic and construction areas your workers need 
              to be seen each other in low light to avoid injuries. In Dhaka Fareast LTD, 
              we produce high-visibility reflective workwear. Exporting perfect reflective 
              background color and durable hi-vis make us the number one hi-vis Manufacturer 
              in Bangladesh.
            </p>
            <h2>Get Noticed, Even in darkness</h2>
          </div>
          @elseif($type=="Sports-Wear")
          <div>
            <h2>Play with Confidence</h2>
            <p class="text-justify" style="line-height: 26px;">
              Almost 40% of online retail was a contribution of sports and 
              activewear in 2020. In the timid situation worldwide, this category 
              shows pandemic-proof outcome in the statistics of NPD. To boost your 
              clothing business, Dhaka Fareast LTD is your reliable sports wear 
              manufacturer in Bangladesh. Here, we produce sportswears of standard 
              colors, sheen and cozy items to influence athleisure aesthetics. 
              With the production to quality control, we ensure the best performance 
              and eye-popping design. From production to quality control, our 
              dedicated team work for the performance of clothes that can keep 
              your body dry and cool.<br/>
              Use our top-quality clothes, feel full freedom to play with confidence.              
            </p>
            <h2>Breathable Pieces for Healthy Move</h2>
            <p>Find your desired item from our most updated catalog. We provide 
              hygienic and comfy jersey, shorts, athletic t-shirts and many more for your fit of the week.
            </p>
          </div>
          @elseif($type=="Basic-Wear")
          <div>
            <h2>Casuals for Everyday Life</h2>
            <p class="text-justify" style="line-height: 26px;">
              Basic wears are simple clothes that you wear every day at home. For comfortable use and reasonable price, people choose these wearing for all seasons. Proudly, Dhaka Fareast is your authentic basic wear manufacturer in Bangladesh. In several countries across the world, we serve high-standard casual wear for daily use. So, you can get 100% export-quality basic wear from our organized and updated catalog, from anywhere.              
            </p>
            <h2>Comfortable is the New Smartness</h2>
            <p>Smooth sewing, cozy collars, and patches are the specialty you get in our basic wear. Soft, convenient, elegance- you will feel all in one, ensured by our experts.
            </p>
          </div>
          @elseif($type=="Fancy-Garments")
          <div>
            <h2>Reinvent the clothing trend</h2>
            <p class="text-justify" style="line-height: 26px;">
              As your reliable garment factory in Bangladesh, Dhaka Fareast LTD manufactures uniquely designed top-quality fancy apparel. In the fashion world, these are the most demanding items nowadays. The young generation is choosing different designs of casual clothes. From daily wears to occasions, both males and females are now picking those clothes. Over 10 years, we work caring for your business. You can rely on us for the top-notch garments, anytime, any amount.
            </p>
            <h2>Smart casuals for getting noticed</h2>
            <p>
              In this 21st century, people prioritize comfort as well as look. We provide fancy items with high-quality fabrics. “Smartness lies in comfort” is our motto for production.
            </p>
          </div>
          @elseif($type=="Reguler-Wear")
          <div>
            <h2>Wear Better Everyday</h2>
            <p class="text-justify" style="line-height: 26px;">
              Comfort, simple, durable- we promise all for preparing your regular wear. Since 2010, Dhaka Fareast LTD is serving as the best apparel manufacturer in Bangladesh. Here, you can get daily wearable clothes at the most reasonable price for your business. Your satisfaction is our glory!
            </p>
            <h2>Specialty in ordinary</h2>
            <p>
              What makes our ordinary items special? Experience our best quality ordinary wear for the most comfort. No strings attached!
            </p>
          </div>
          @elseif($type=="Outer-Wear")
          <div>
            <h2>Discover the trends</h2>
            <p class="text-justify" style="line-height: 26px;">
              When it comes to outerwear, customers look for updated and fashionable designs. Appreciating this fact, Dhaka Fareast Ltd is working for years as the top outerwear manufacturer in Bangladesh. With the most comprehensive and resourceful facilities, we provide the most fashionable items to wear outside.  Several companies across the world keep their trust in us as their apparel partner. Gladly, we are serving with great dignity for over 10 years.
            </p>
            <h2>Get noticed with your clothing</h2>
            <p>
              Choose any size, shape, and color for your desired outer clothing. Please check out our size chart for the best-fit clothes.
            </p>
          </div>
          @else
              
          @endif
        </div>

        <div class="products-short-info">
            <p class="showing-items">Showing items</p>
            <form class="ordering-class" action="{{ route('product_by_type') }}" method="get">
                {{-- @csrf --}}
                <select onchange="this.form.submit()" name="product_type" class="orderby">
                    <option @if ($type=="All") selected @endif value="All" >All Products</option>
                    @php
                        $sub_menue =App\Product::distinct()
                                                ->get(['product_type']);
                    @endphp
                    @foreach ($sub_menue as $sub_menue)
                        <option @if ($type==$sub_menue->product_type) selected @endif value="{{$sub_menue->product_type}}">{{$sub_menue->product_type}}</option>
                    @endforeach

                </select>
            </form>
        </div>
        <div class="products-detail-list">
            <div class="row">
            @foreach ($products as $product)
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="single-product-details">
                        <a href="{{ route('product_details',$product->slug) }}">
                            <div class="product-image">
                                <div class="overley"></div>
                                <a href="{{ route('product_details',$product->slug) }}" class="product-img ">
                                    <img src="{{ Voyager::image( $product->product_img ) }}" class="img-responsive" alt="{{$product->product_title}}">
                                </a>
                                <a href="{{ route('product_details',$product->slug) }}" class="btn img-custom-btn">Read More</a>
                            </div>
                        </a>
                        <div class="product-cont">
                            <a href="{{ route('product_details',$product->slug) }}">
                                <h3 class="title text-center">{{$product->product_title}}</h3>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
        <div class="bottom-pagination">
            {{$products->links()}}
        </div>

        {{-- Products Bottom Content --}}
        <div>
          <div>
            <h2>Freedom in customization</h2>
            <p class="text-justify" style="line-height: 26px;">
              Focus on your workwear ideas and leave the rest on us. We prepare your custom design 
              clothes in standard size and desired shapes. Also, you can choose any design from our 
              catalog and fabric on budget. Clear print, well-knitted texture in clothes is our 
              promise.
            </p>
          </div>
          <div>
            <h2>Tremendous technology</h2>
            <p class="text-justify" style="line-height: 26px;">
              Using up-to-date technology, we make perfectly sewed comfortable workwear. 
              We provide you the best garment service with computerized machines. Seamless 
              inner loops of yarns in fabrics are ensured with the updated technology.
               Most importantly, our quality control is fully monetized by technology. So, 
               maintaining perfection has become our daily routine in production. You will 
               experience a professional uniform supply with us, without zero hassle.
            </p>
          </div>
          <div>
            <h2>Eco-friendly products</h2>
            <p class="text-justify" style="line-height: 26px;">
              Almost 86% of millennials are ready to pay more for eco-friendly clothes. 
              Appreciating this reality, we tend to maintain sustainability from production to 
              packaging. Our target is to preserve the environment by manufacturing apparel and 
              fashion items. Proudly, we are one of the most prominent eco-friendly apparel 
              manufacturers in Dhaka.
            </p>
          </div>
          <div>
          </div>
          <hr/><br/>
          <h2 style="color: crimson; font-weight: 700">FAQ's</h2><br/>
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#workwear_collapse1">What is the minimum amount I can order from you?</a>
                </h4>
              </div>
              <div id="workwear_collapse1" class="panel-collapse collapse in">
                <div class="panel-body"><strong>Ans:</strong> You have got to order a minimum of 500 pieces of items per color.</div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#workwear_collapse2">
                    Do you provide samples?
                  </a>
                </h4>
              </div>
              <div id="workwear_collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                  <strong>Ans:</strong> Yes, we provide samples. it's considerable to ascertain the standard before the ultimate order.
              </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#workwear_collapse3">
                    What is the pricing for sampling?
                  </a>
                </h4>
              </div>
              <div id="workwear_collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                  <strong>Ans:</strong> Our sampling cost is 3X the FOB price of the item (without a shipping cost).
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#workwear_collapse4">
                    How can I reach you?
                  </a>
                </h4>
              </div>
              <div id="workwear_collapse4" class="panel-collapse collapse">
                <div class="panel-body">
                  <strong>Ans:</strong> You can mail us or contact us directly over the phone. Our team is out there 24/7 for you.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#workwear_collapse5">
                    What is the manufacturing capacity of your company?
                  </a>
                </h4>
              </div>
              <div id="workwear_collapse5" class="panel-collapse collapse">
                <div class="panel-body">
                  <strong>Ans:</strong> Presently, our production capacity is 15000 pieces of t-shirts and 5000 pieces of jackets per day.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#workwear_collapse6">
                    Can I get a discount on bulk orders?
                  </a>
                </h4>
              </div>
              <div id="workwear_collapse6" class="panel-collapse collapse">
                <div class="panel-body">
                  <strong>Ans:</strong> Sure, we tend to quote the cheapest possible rate for bulk orders in any garment item.
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- Basic Ware Content --}}
        @if (url()->full()=='http://localhost:8005/product-type/Basic-Wear' || url()->full()=='http://localhost:8005/product-by-type?product_type=Basic-Wear')
            {{-- content text --}}
          <div>
            <h4>
              Comfortable is the New Smartness
            </h4>
            <p class="text-justify">
              Smooth sewing, cozy collars, and patches are the specialty you get in our basic wear. Soft, convenient, elegance- you will feel all in one, ensured by our experts.
            </p>
            <ul style="margin-left:50px">
              <li>Under Wear Set</li>
            </ul>
            <p><strong>Fabrication:</strong>  Fleece</p>
            <dl>
              <dt><strong>Description:</strong></dt>
            </dl>
          </div>
          <br/>
          <br/>
        @endif
      </div>
    </section>
@stop
@section('scripts')

@stop
