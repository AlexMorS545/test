<section class="catalog">
    <div class="catalog__grid">
        @foreach($catalog as $product)
            <div class="catalog__item">
                <div class="catalog__item-image" style="background-image:url(assets/images/common/{{$product->image}})"></div>
                <div class="catalog__item-content">
                    <div class="catalog__item-head">
                        <h4 class="h2">{{ $product->title }}</h4>
                    </div>
                    <div class="catalog__item-action">
                        <a href="javascript:void(0)">Подробнее
                            <svg class="svg-sprite-icon icon-arrow">
                                <use xlink:href="{{asset('assets/images/sprite/symbol/sprite.svg#arrow')}}"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
