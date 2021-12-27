<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">
            @foreach ($banners as $banner)
            <div class="col-lg-12">
                <div class="left-content">
                    <div class="thumb">
                        <div class="inner-content">
                            <h4>{{ $banner->title }}</h4>
                            <span>{{ $banner->description }}</span>
                            <div class="main-border-button">
                                <a href="#">Purchase Now!</a>
                            </div>
                        </div>
                        <img src="banners_photo/{{ $banner->photo }}" alt="">
                    </div>
                </div>
            </div>     
            @endforeach
           
      
        </div>
    </div>
</div>