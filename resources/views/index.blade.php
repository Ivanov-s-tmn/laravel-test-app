<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
@foreach($offerItems as $offerItem)
    <div class="container">
        <div class="apartments">
            <div class="apartment-card">
                <div class="apartment-card__header">
                    <div class="apartment-card__header--left">
                        <div class="apartment-card__name">Квартира - {{ $offerItem->square }} м2</div>
                        <div class="apartment-card__location">{{ $offerItem->complex }}, {{ $offerItem->house }}</div>
                    </div>
                    <div class="apartment-card__header--right">
                        <div class="apartment-card__price">{{ $offerItem->price }} ₽</div>
                    </div>
                </div>
                <div class="apartment-card__body">
                    <div class="row">
                        <div class="col-12 col-xl-8">
                            <div
                                class="chocolat-parent apartment-card__gallery owl-carousel owl-carousel--theme-psk owl-carousel-init-apartment-card-main owl-loaded owl-drag"
                            >
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="width: 740px">
                                        <div
                                            class="owl-item active center"
                                            style="width: 729.333px; margin-right: 10px"
                                        >
                                            <a
                                                href="{{ asset(json_decode($offerItem->images)) }}"
                                                class="apartment-card__picture apartment-card__picture--main chocolat-image"
                                            >
                                                <img class="img-fluid"
                                                    src="{{ asset(json_decode($offerItem->images)) }}"
                                                />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="apartment-card__content">
                                <div class="row row--around">
                                    <div class="col-12 d-none d-xl-block"></div>
                                    <div class="col-12 col-md-7 col-xl-12">
                                        <div class="apartment-card__description">
                                            <div class="collapse-block collapse-block--type-apartment-card">
                                                <div class="collapse-block__content">
                                                    <div
                                                        class="collapsing collapsing--type-apartment-card collapsing--color-white"
                                                    >
                                                        <div class="typography">
                                                            Продается квартира площадью {{ $offerItem->square }} м2, на 3-м этаже, в 4-этажной
                                                            секции,
                                                            4-этажного дома в от ПСК Дом девелопмент.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-5 col-xl-12">
                                        <div class="apartment-card__controls">
                                            <div class="apartment-card__buttons order-1 order-xl-0">
                                                <div class="apartment-card__button">
                                                    <a href="#" class="button button--color-red">
                                                        <span class="button__text">Позвонить</span>
                                                    </a>
                                                </div>
                                                <div class="apartment-card__button">
                                                    <a href="#" class="button button--color-white">
                                                        <span class="button__text">Написать</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
