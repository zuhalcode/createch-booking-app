<div class="col wow fadeInUp" data-wow-delay="0.4s">
    <div class="product-card4 option-bottom">
        <div class="img-box">
            <a href={{ url($href) }}>
                <img class="bg-img" src={{ asset($img) }} alt="product" />
            </a>
        </div>

        <a href={{ url($href) }} class="content-box">
            <h5>{{ $slot }}</h5>

            <div class="price-box">
                <div class="price"><span>{{ $price }}</span></div>
            </div>
        </a>
    </div>
</div>
