<div class="container">
    <div class="hero" style="background: url({{ asset('admin/images/banners/'.$banner->image) }}); background-position: center;
        background-size: cover;">
        <div class="hero__title">
            <h1>{{ $banner->title }}</h1>
            <p>{{ $banner->description }} </p>
        </div>
        <!-- <div class="hero__video">
            <video src="assets/video/classroom.mp4" autoplay loop muted></video>
        </div> -->
    </div>
</div>
