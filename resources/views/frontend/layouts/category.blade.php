<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Latest Categories</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">
                        @foreach ($categories as $category)
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="{{ url('products-category',$category->slug) }}"><i class="fa fa-eye"></i>{{ $category->title }}</a></li>
                                    </ul>
                                </div>
                                <img src="{{ $category->photo }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>{{ $category->title }}</h4>
                                <span><p>
                                {{ $category->summary }}    
                                </p></span>
                            </div>
                        </div>              
                        @endforeach
              
             
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>