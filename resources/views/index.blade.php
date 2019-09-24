<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body class="page">
<div class="page__wrapper">
    @include('partials.nav')
    <main class="home">
        <section class="banner">
            <div class="uk-container uk-container-xsmall banner-container">
                <div class="banner-title">
                    <h1>Добавляйте любой <br> сайт в рейтинг</h1>
                </div>
                <div class="banner-title__desc">и мы определим его преимущества и недостатки</div>
                <div class="banner-cardbox">
                    <div class="banner-card">
                        <div class="banner-card__icon">
                            <object class="banner-card__svg" data="../img/banner-agent.svg"
                                    type="image/svg+xml"></object>
                            <object data="{{ asset('img/banner-flag.svg') }}" type="image/svg+xml"></object>
                        </div>
                        <div class="banner-card__content">
                            <span>Проверяем по 100 показателям</span>
                        </div>
                    </div>
                    <div class="banner-card">
                        <div class="banner-card__icon">
                            <object class="banner-card__svg" data="{{ asset('img/banner-hand.svg') }}"
                                    type="image/svg+xml"></object>
                            <object data="../img/banner-flag.svg" type="image/svg+xml"></object>
                        </div>
                        <div class="banner-card__content">
                            <span>Более 200 экспертов</span>
                        </div>
                    </div>
                    <div class="banner-card">
                        <div class="banner-card__icon">
                            <object class="banner-card__svg" data="../img/banner-search.svg"
                                    type="image/svg+xml"></object>
                            <object data="../img/banner-flag.svg" type="image/svg+xml"></object>
                        </div>
                        <div class="banner-card__content">
                            <span>Проверяем по 100 показателям</span>
                        </div>
                    </div>
                    <div class="banner-card">
                        <div class="banner-card__icon">
                            <object class="banner-card__svg" data="../img/banner-close.svg"
                                    type="image/svg+xml"></object>
                            <object data="../img/banner-flag.svg" type="image/svg+xml"></object>
                        </div>
                        <div class="banner-card__content">
                            <span>Проверяем по 100 показателям</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="rating">
            <div class="uk-container rating-container">
                <div class="rating-title section-title">
                    <h2>Ближайшие рейтинги</h2>
                </div>
                <div class="rating-cardbox">
                    <div class="rating-card">
                        <div class="rating-card__date">14 марта</div>
                        <div class="rating-card__title">
                            <h3>Рейтинг сайтов по обслуживанию</h3>
                        </div>
                        <div class="rating-card__desc">небольшое уточнение, чтобы было понятно что подходит</div>
                        <div class="rating-card__amount"><a href="#">238 участников</a></div>
                        <button class="btn btn-success rating-card__request">
                            <object data="../img/btn-plus.svg" type="image/svg+xml"></object>
                            Подать заявку
                        </button>
                    </div>
                    <div class="rating-card">
                        <div class="rating-card__date">14 марта</div>
                        <div class="rating-card__title">
                            <h3>Рейтинг сайтов по обслуживанию</h3>
                        </div>
                        <div class="rating-card__desc">небольшое уточнение, чтобы было понятно что подходит</div>
                        <div class="rating-card__amount"><a href="#">238 участников</a></div>
                        <button class="btn btn-success rating-card__request">
                            <object data="../img/btn-plus.svg" type="image/svg+xml"></object>
                            Подать заявку
                        </button>
                    </div>
                    <div class="rating-card">
                        <div class="rating-card__date">14 марта</div>
                        <div class="rating-card__title">
                            <h3>Рейтинг сайтов по обслуживанию</h3>
                        </div>
                        <div class="rating-card__desc">небольшое уточнение, чтобы было понятно что подходит</div>
                        <div class="rating-card__amount"><a href="#">238 участников</a></div>
                        <button class="btn btn-success rating-card__request">
                            <object data="../img/btn-plus.svg" type="image/svg+xml"></object>
                            Подать заявку
                        </button>
                    </div>
                    <div class="rating-card">
                        <div class="rating-card__date">14 марта</div>
                        <div class="rating-card__title">
                            <h3>Рейтинг сайтов по обслуживанию</h3>
                        </div>
                        <div class="rating-card__desc">небольшое уточнение, чтобы было понятно что подходит</div>
                        <div class="rating-card__amount"><a href="#">238 участников</a></div>
                        <button class="btn btn-success rating-card__request">
                            <object data="../img/btn-plus.svg" type="image/svg+xml"></object>
                            Подать заявку
                        </button>
                    </div>
                    <div class="rating-card">
                        <div class="rating-card__date">14 марта</div>
                        <div class="rating-card__title">
                            <h3>Рейтинг сайтов по обслуживанию</h3>
                        </div>
                        <div class="rating-card__desc">небольшое уточнение, чтобы было понятно что подходит</div>
                        <div class="rating-card__amount"><a href="#">238 участников</a></div>
                        <button class="btn btn-success rating-card__request">
                            <object data="../img/btn-plus.svg" type="image/svg+xml"></object>
                            Подать заявку
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="market">
            <div class="uk-container market-container">
                <div class="market-title">Здесь могла быть ваша реклама</div>
            </div>
        </section>
        <section class="examples">
            <div class="uk-container examples-container">
                <div class="section-title examples-title">
                    <h2>Худшие из худших</h2>
                </div>
                <div class="examples-slider" uk-slider>
                    <div class="uk-position-relative">
                        <div class="uk-slider-container uk-light">
                            <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                                @foreach ($topBadSites as $badSite)
                                    <li>
                                        <div class="examples-slider__item examples-card">
                                            <div class="examples-card__img">
                                                <img src="{{ $badSite->img }}" alt="slide1">
                                                <div class="examples-card__rate">{{ $badSite->rate }}</div>
                                            </div>
                                            <div class="examples-card__content">
                                                <div class="examples-card__title">Сайт
                                                    владельца {{ $badSite->owner }}</div>
                                                <div class="examples-card__body">{{ $badSite->nomination }}</div>
                                                <div class="examples-card__bottom">
                                                    <div class="examples-card__comments">
                                                        <object data="../img/eye.svg"
                                                                type="image/svg+xml"></object>
                                                        {{ $badSite->watchers }}
                                                    </div>
                                                    <div class="examples-card__comments">
                                                        <object
                                                            data="../img/comment.svg" type="image/svg+xml"></object>
                                                        {{ $badSite->site_comment }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="uk-hidden@s uk-light">
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous
                           uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next
                           uk-slider-item="next"></a>
                    </div>

                    <div class="uk-visible@s">
                        <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous
                           uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next
                           uk-slider-item="next"></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="results">
            <div class="uk-container results-container">
                <div class="section-title--light results-title">
                    <h2>Результаты</h2>
                </div>
                <div class="results-table">
                    <div class="results-table__title">
                        Лучший из худших 2019
                    </div>
                    <div class="results-table__content uk-overflow-auto">
                        <table class="uk-table uk-table-small uk-table-divider">
                            <thead>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>Победители</td>
                                <td>Баллы</td>
                                <td>Разработчик</td>
                                <td>Коментарии</td>
                                <td>Кол-во голосов</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr onclick="document.location = '/';">
                                <td>
                                    <div class="table__counter">1</div>
                                </td>
                                <td>Сайт компании АС-АН
                                    <div class="results-table__img">
                                        <img class="results-table__img"
                                             src="img/table-img.png?df6c2bb8e96cfa35116b788d62992d13"
                                             alt="table-img">
                                    </div>
                                </td>
                                <td>8.9</td>
                                <td>Dextra</td>
                                <td>7</td>
                                <td>333</td>
                            </tr>
                            <tr onclick="document.location = '/';">
                                <td>
                                    <div class="table__counter">2</div>
                                </td>
                                <td>Сайт компании АС-АН
                                    <div class="results-table__img">
                                        <img class="results-table__img"
                                             src="img/table-img.png?df6c2bb8e96cfa35116b788d62992d13"
                                             alt="table-img">
                                    </div>
                                </td>
                                <td>8.9</td>
                                <td>Dextra</td>
                                <td>7</td>
                                <td>333</td>
                            </tr>
                            <tr onclick="document.location = '/';">
                                <td>
                                    <div class="table__counter">3</div>
                                </td>
                                <td>Сайт компании АС-АН
                                    <div class="results-table__img">
                                        <img class="results-table__img"
                                             src="img/table-img.png?df6c2bb8e96cfa35116b788d62992d13"
                                             alt="table-img">
                                    </div>
                                </td>
                                <td>8.9</td>
                                <td>Dextra</td>
                                <td>7</td>
                                <td>333</td>
                            </tr>
                            <tr onclick="document.location = '/';">
                                <td>
                                    <div class="table__counter">4</div>
                                </td>
                                <td>Сайт компании АС-АН
                                    <div class="results-table__img">
                                        <img class="results-table__img"
                                             src="img/table-img.png?df6c2bb8e96cfa35116b788d62992d13"
                                             alt="table-img">
                                    </div>
                                </td>
                                <td>8.9</td>
                                <td>Dextra</td>
                                <td>7</td>
                                <td>333</td>
                            </tr>
                            <tr onclick="document.location = '/';">
                                <td>
                                    <div class="table__counter">5</div>
                                </td>
                                <td>Сайт компании АС-АН
                                    <div class="results-table__img">
                                        <img class="results-table__img"
                                             src="img/table-img.png?df6c2bb8e96cfa35116b788d62992d13"
                                             alt="table-img">
                                    </div>
                                </td>
                                <td>8.9</td>
                                <td>Dextra</td>
                                <td>7</td>
                                <td>333</td>
                            </tr>
                            <tr onclick="document.location = '/';">
                                <td>
                                    <div class="table__counter">6</div>
                                </td>
                                <td>Сайт компании АС-АН
                                    <div class="results-table__img">
                                        <img class="results-table__img"
                                             src="img/table-img.png?df6c2bb8e96cfa35116b788d62992d13"
                                             alt="table-img">
                                    </div>
                                </td>
                                <td>8.9</td>
                                <td>Dextra</td>
                                <td>7</td>
                                <td>333</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="#" class="results-all">Все результаты</a>
                    </div>
                </div>
                <div class="results-table">
                    <div class="results-table__title">
                        Худшие из лучших 2019
                    </div>
                    <div class="results-table__content uk-overflow-auto">
                        <table class="uk-table uk-table-small uk-table-divider">
                            <thead>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>Победители</td>
                                <td>Баллы</td>
                                <td>Разработчик</td>
                                <td>Коментарии</td>
                                <td>Кол-во голосов</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($topBadBest as $key=>$badBestSite)
                                <tr onclick="document.location = '/';">
                                    <td>
                                        <div class="table__counter">{{ $key+1 }}</div>
                                    </td>
                                    <td>Сайт владельца {{ $badBestSite->owner }}
                                        <div class="results-table__img">
                                            <img class="results-table__img"
                                                 src="{{ $badBestSite->img }}"
                                                 alt="table-img">
                                        </div>
                                    </td>
                                    <td>{{ $badBestSite->rate }}</td>
                                    <td>{{ $badBestSite->developer }}</td>
                                    <td>{{ $badBestSite->site_comment }}</td>
                                    <td>{{ $badBestSite->votes }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="#" class="results-all">Все результаты</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog">
            <div class="uk-container blog-container">
                <div class="blog-head">
                    <div class="section-title blog-title">
                        <h2>Блог</h2>
                    </div>
                    <button class="btn btn-primary blog-head__suggest">Предложить новость</button>
                </div>
                <div class="blog-content">
                    <div class="blog-content__post blog-post">
                        <div class="blog-post__img">
                            <a href="#"><img src="{{ asset('img/post1.png') }}" alt="post1"></a>
                        </div>
                        <div class="blog-post__content">
                            <div class="blog-post__title">
                                <a href="#">Оператором единой федеральной автоматизированной</a>
                            </div>
                            <div class="blog-post__body">
                                <p>Является Федеральный фонд социальной
                                    и экономической поддержки отечественной кинематографии нагрузка под конец года
                                    растет,
                                    вырваться в спортзал получается не
                                </p>
                            </div>
                            <div class="blog-post__bottom">
                                <div class="blog-post__comments">
                                    <object data="../img/eye.svg" type="image/svg+xml"></object>
                                    167
                                </div>
                                <div class="blog-post__comments">
                                    <object data="../img/comment.svg" type="image/svg+xml"></object>
                                    32
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content__post blog-post">
                        <div class="blog-post__img">
                            <a href="#"><img src="img/post2.png?93796ca82deaa0daa91a725f272307a2" alt="post2"></a>
                        </div>
                        <div class="blog-post__content">
                            <div class="blog-post__title">
                                <a href="#">Оператором единой федеральной автоматизированной</a>
                            </div>
                            <div class="blog-post__body">
                                <p>Является Федеральный фонд социальной
                                    и экономической поддержки отечественной кинематографии нагрузка под конец года
                                    растет,
                                    вырваться в спортзал получается не
                                </p>
                            </div>
                            <div class="blog-post__bottom">
                                <div class="blog-post__comments">
                                    <object data="../img/eye.svg" type="image/svg+xml"></object>
                                    167
                                </div>
                                <div class="blog-post__comments">
                                    <object data="../img/comment.svg" type="image/svg+xml"></object>
                                    32
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content__post blog-post">
                        <div class="blog-post__img">
                            <a href="#"><img src="img/post3.png?3a49f4ada99e2609a93d072252fbc486" alt="post3"></a>
                        </div>
                        <div class="blog-post__content">
                            <div class="blog-post__title">
                                <a href="#">Оператором единой федеральной автоматизированной</a>
                            </div>
                            <div class="blog-post__body">
                                <p>Является Федеральный фонд социальной
                                    и экономической поддержки отечественной кинематографии нагрузка под конец года
                                    растет,
                                    вырваться в спортзал получается не
                                </p>
                            </div>
                            <div class="blog-post__bottom">
                                <div class="blog-post__comments">
                                    <object data="../img/eye.svg" type="image/svg+xml"></object>
                                    167
                                </div>
                                <div class="blog-post__comments">
                                    <object data="../img/comment.svg" type="image/svg+xml"></object>
                                    32
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="blog-all__posts" href="#">Все статьи</a>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="uk-container footer-container">
            <ul class="footer-nav">
                <li><a href="#">Компании</a></li>
                <li><a href="#">Сервисы</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Рейтинги</a></li>
                <li><a href="#">Фонды</a></li>
                <li><a href="#">Известные люди</a></li>
                <li><a href="#">Личный кабинет</a></li>
                <li><a href="#">Компании</a></li>
                <li><a href="#">Сервисы</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Рейтинги</a></li>
                <li><a href="#">Фонды</a></li>
                <li><a href="#  ">Известные люди</a></li>
                <li><a href="#">Личный кабинет</a></li>
            </ul>
            <div class="footer-privacy">
                <a href="#">Политика конфиденциальности</a>
                <a href="#">Пользовательское соглашение</a>
            </div>
            <div class="footer-right">
                <button class="btn btn-primary footer-add__rate">Добавить сайт в рейтинг</button>
                <div class="footer-right__more">
                    <a href="#" class="footer-market">Реклама</a>
                    <a href="#" class="btn btn-default__outline footer-register">Регистрация</a>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{ asset('js/bundle.js') }}"></script>
</body>

</html>
