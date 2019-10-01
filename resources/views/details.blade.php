<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body class="page">
<div class="page__wrapper">
    @include('partials.nav')
    <main class="blogpage details">
        <div class="page-head">
            <div class="uk-container page-head__container">
                <div class="breadcrumbs">
                    <a href="/">Главная</a>
                    /
                    <span>Блог</span>
                </div>
                <div class="page-head__title">
                    <h1>Статья</h1>
                </div>
            </div>
        </div>
        <div class="blogpage-content">
            <div class="uk-container">
                <div class="content__container">
                    <div class="blogpage-postbox">
                        <div class="internal-content__watch internal-watch">
                            <div class="internal-watch__date">
                                <span>{{ $post->created_at }}</span>
                            </div>
                            <div class="internal-watch__view">
                                <span><object data="../img/eye.svg"
                                              type="image/svg+xml"></object>{{ $post->watch }}</span>
                            </div>
                            <div class="internal-watch__comment">
                                <a href="#">
                                    <object data="../img/comment.svg" type="image/svg+xml"></object>{{ $comments }}</a>
                            </div>
                        </div>
                        <div class="details-post">
                            <div class="details-post__title">{{ $post->title }}</div>
                            <div class="details-post__content">
                                <div class="details-post__img">
                                    <img src="{{ $post->img }}" alt="">
                                </div>
                                <p>{{$post->body}}</p>
                            </div>
                        </div>
                        <div class="details-share">
                            <span>Поделиться</span>
                            <a href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="222px" height="29px">
                                    <image x="0px" y="0px" width="222px" height="29px"
                                           xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAN4AAAAdCAMAAADyxSKfAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABmFBMVEX///+Vr8xTfaxKdqiRptJLb7ZCZ7J7yPcopvMdofJ3xewioeAXnN72tnLwiBrvgg7qkordTUHbRDf2uXj4yJX3wIbwih1OcbfQ2ez74MP+9/Dxkizh6PHS3emDocO7zN65xuI5rfQrp/O44vvx+f6c1vlIs/RWufVRteb1sWn86NPzoUr50KX62LT43drAz+F8nMB3mL7Z4u23yNyOqcno7fbE0OeO0PnU7f3V7v2Ayvg0qOKZ1PHi8/vj8/v3wYfpioLdUETyubSQq8nb5O73+ft+ncHQ2+ihs9lkvvZ/yvjk9P0mouBtwerF5vfU7fm34PX62LPymjv20c743NniZ1399PP66ObH1eSQq8rn7PXj8/3H6PxDr+So2vPw+f1uweqLzu/98OL98/L76Od0lryGpMWku9Od1vnG5/fx+f19x+zxubTgW1CrwNfD0eKJoM/y+f5gu+j97+H2uHf1sWjk6vLv8/e6y95rj7iMqMhyxPep2vP++PGYsc3L2OZojbdjvvaq3Pqr3Pr859L4yZZxjcVaerxD5XeGAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+MJEBMGHF02EIIAAAK5SURBVFjD7dj7UxJRFAfwr1yQNwgkQUkpESaiZS/THqz0wqIoFHthmpoVaCb2TtNe9m939+5KZO5ZZlAyh+8PO+yZMwyf4d57dhZo5H9Ok4FpxtCkNhlNzZoxGdUms8WqGYtZbbLZHZqx29Qmp8utGZdTbWrxeDXjadnQMTKKz9hMRvGZrWQUn81BRvE53WQUX4uXjOoz0DyDaDLRPJNostA8i2iy0zy7aHLRPJdo8tA8j8JjOhFNzToRTVadiCaHTkSTWyeiyauTBm9X8Hz7Wv315O0PbC7tJC/ICwcO1sprkz+GgBBjh0KhwxSvHTq8jrB8DR+JHI12VsE7RvG6EOuOo4fi9f6ecr1avOPACdYHnGTsFHCa4p3BWXpx9p/r4NcBuTioxzt/4eIlipdAF/fECJ40lNzQJYckDd5l4IqMucquAdfJxQmkaN4wIjeignMzTPLSt24jgzsUz4e72VYECd7IaE4SlTEpdw8aPHYfeMDke17sI3gBvvMeBtopXvQRv43ItTy198YfTyAzOYEnFM8/JVd8FA/TUm4GmMlJ09DkPeU3s0rtGXW0KC0BitdZ3gvPCd4LoFDkOpB7z+2PB4NdbpIHzM0nk/Nzf5Q3n5wvyz9qgeKlUhyXekWenP2L6jdFqX+vlElPyrU0xYstve5+E0SW5mE0lxsFyWML8v3b2XfA+9r2Ht98SirX5hZ7ryR0GXIw9IjKlF+HVw4x92RfiH3gM+JjbTzrJ3FsLnbozL1MYRlYpudedgVI6C3Oqnjs8yr4xFsLoW2tFl70y1e5MFC5NLfkFccdpUKR5sV5YclfLW+s9qcWXV54MJ/Pfxuu7qklnSZ5Caxk4/hOzb2Rikh14G3nQ9mPKX6qxKmxvt3PnOvrP+vH2yo7y/s7Dd4/4u3xlxF7/FXSHn8R2EgjuzW/AGfh7lqRu1IOAAAAAElFTkSuQmCC"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="blogpage-aside">
                        <div class="blogpage-aside__box aside-box">
                            <div class="aside-box__title">
                                Обсуждаемое
                            </div>
                            <div class="aside-post">
                                <div class="aside-post__content">
                                    <span>S7 за месяц собрала средства на посадку миллиона деревьев в Сибири с </span>
                                </div>
                                <div class="aside-post__append">
                                    <div class="blog-post__comments">
                                        <object data="../img/eye.svg" type="image/svg+xml"></object>
                                        167
                                    </div>
                                </div>
                            </div>
                            <div class="aside-post">
                                <div class="aside-post__content">
                                    <span>S7 за месяц собрала средства на посадку миллиона деревьев в Сибири с </span>
                                </div>
                                <div class="aside-post__append">
                                    <div class="blog-post__comments">
                                        <object data="../img/eye.svg" type="image/svg+xml"></object>
                                        167
                                    </div>
                                </div>
                            </div>
                            <div class="aside-post">
                                <div class="aside-post__content">
                                    <span>S7 за месяц собрала средства на посадку миллиона деревьев в Сибири с </span>
                                </div>
                                <div class="aside-post__append">
                                    <div class="blog-post__comments">
                                        <object data="../img/eye.svg" type="image/svg+xml"></object>
                                        167
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="default-link">Смотреть все</a>
                        </div>
                        <div class="blogpage-aside__box aside-box">
                            <div class="aside-box__title">
                                ТОП авторов
                            </div>
                            <ul class="aside-list">
                                @foreach( $top_authors as $author )
                                    <li>
                                        <a href="#">
                                            <img class="aside-author__img" src="{{ $author->photo }}" alt="">
                                            {{ $author->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="blog">
            <div class="uk-container blog-container">
                <div class="blog-head">
                    <div class="section-title blog-title">
                        <h2>C этим читают</h2>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="blog-content__post blog-post">
                        <div class="blog-post__img">
                            <a href="#"><img src="../img/post1.png?9562c650e8efb8a903810911e9d9d418" alt="post1"></a>
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
                            <a href="#"><img src="../img/post2.png?93796ca82deaa0daa91a725f272307a2" alt="post2"></a>
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
                            <a href="#"><img src="../img/post3.png?3a49f4ada99e2609a93d072252fbc486" alt="post3"></a>
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
        <div class="subscribe">
            <div class="uk-container subscribe-container">
                <h3 class="subscribe-slug">
                    Подпишитесь, чтобы получать новые статьи на почту
                </h3>
                <form action="/" class="subscribe-form">
                    <input type="email" placeholder='Email'>
                    <button class="btn btn-primary">Подписаться</button>
                </form>
            </div>
        </div>
    </main>
    @include('partials.footer')
</div>
<script src="{{asset('js/bundle.js')}}"></script>
</body>

</html>
