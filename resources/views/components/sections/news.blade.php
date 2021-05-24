<section class="news">
    <div class="container-aurinko">
        <div class="news__top">
            <div class="news__head">
                <h2 class="h2">{{ $title }}</h2>
            </div>
            <div class="news__link"><a class="btn btn-secondary" href="javascript:void(0)">Все новости</a></div>
        </div>
    </div>
    <div class="news__grid">
        @forelse($news as $n)
            <div class="news__item">
                <div class="news__date">{{ $n->created_at }}</div>
                <div class="news__image" style="background-image:url(assets/images/common/{{$n->image}})"></div>
                <div class="news__title">
                    <h3 class="h3"><a href="javascript:void(0)">{{ $n->title }}</a></h3>
                </div>
                <div class="news__descr">
                    <p>{{ $n->description }}</p>
                </div>
            </div>
        @empty
            <p>Новостей пока нет</p>
        @endforelse
    </div>
</section>
