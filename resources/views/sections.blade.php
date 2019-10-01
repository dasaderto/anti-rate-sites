<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body class="page">
    <div class="page__wrapper">
        @include('partials.nav')
        <main class="sections">
            <div class="internal-head">
                <div class="uk-container internal-head__container">
                    <div class="breadcrumbs">
                        <a href="/">Главная</a>
                        /
                        <span>Культура и искусство</span>
                    </div>
                    <div class="internal-head__title">
                        <h1>Культура и искусство</h1>
                    </div>
                </div>
            </div>
            <div class="uk-container">
                <div class="content__container">
                    <div class="sections-content">
                        <aside class="sections-content__aside">
                            <ul class="aside-list">
                                <li><a href="#">Культура и искусство</a></li>
                                <li><a href="#">Производство</a></li>
                                <li><a href="#">Культура и искусство</a></li>
                                <li><a href="#">Производство</a></li>
                                <li><a href="#">Культура и искусство</a></li>
                                <li><a href="#">Производство</a></li>
                            </ul>
                        </aside>
                        <div class="sections-info">
                            <form action="#" class="search-form">
                                <input type="text" placeholder="Поиск по названию или URL компании">
                                <button type="submit" class="btn btn-primary search-btn">Найти</button>
                            </form>
                            <div class="sections-info__date">
                                <a href="#" class="active">2019</a>
                                <a href="#">2018</a>
                                <a href="#">2017</a>
                                <a href="#">2016</a>
                            </div>
                            <div class="sections-info__about">
                                <div class="section-title">
                                    <h2>Основная информация</h2>
                                </div>
                                <p>
                                    Мы являемся производителем классических мужских костюмов, пиджаков, брюк и пальто, специализируемся на индивидуальном пошиве мужской одежды по технологии made to measure, когда размеры человека подгоняются под уже существующие лекала, что позволяет создать изделие с отличной посадкой, максимально соответствующее фигуре.
                                </p>
                                <p>
                                    Мы предоставляем своим клиентам возможность одеваться стильно и уникально. Наша команда состоит из профессионалов с опытом работы более 15 лет. Мы дорожим своей репутацией и стремимся работать качественно. Наши кредо- высокое качество по доступной цене.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="sections-table">
                        <div class="sections-title">
                            <h2>Название</h2>
                        </div>
                        <div class="sections-table__content uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider">
                                <thead>
                                    <tr>
                                        <td>Победители</td>
                                        <td>Баллы</td>
                                        <td>Разработчик</td>
                                        <td>Коментарии</td>
                                        <td>Кол-во голосов</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr onclick="document.location = '/';">
                                        <td>Сайт компании АС-АН
                                            <div class="sections-table__img">
                                                <img class="sections-table__img" src="img/table-img.png?df6c2bb8e96cfa35116b788d62992d13"
                                                    alt="table-img">
                                            </div>
                                        </td>
                                        <td>8.9</td>
                                        <td>Dextra</td>
                                        <td>7</td>
                                        <td>333</td>
                                    </tr>
                                    <tr onclick="document.location = '/';">
                                        <td>Сайт компании АС-АН
                                            <div class="sections-table__img">
                                                <img class="sections-table__img" src="img/table-img.png?df6c2bb8e96cfa35116b788d62992d13"
                                                    alt="table-img">
                                            </div>
                                        </td>
                                        <td>8.9</td>
                                        <td>Dextra</td>
                                        <td>7</td>
                                        <td>333</td>
                                    </tr>
                                    <tr onclick="document.location = '/';">
                                        <td>Сайт компании АС-АН
                                            <div class="sections-table__img">
                                                <img class="sections-table__img" src="img/table-img.png?df6c2bb8e96cfa35116b788d62992d13"
                                                    alt="table-img">
                                            </div>
                                        </td>
                                        <td>8.9</td>
                                        <td>Dextra</td>
                                        <td>7</td>
                                        <td>333</td>
                                    </tr>
                                    <tr onclick="document.location = '/';">
                                        <td>Сайт компании АС-АН
                                            <div class="sections-table__img">
                                                <img class="sections-table__img" src="img/table-img.png?df6c2bb8e96cfa35116b788d62992d13"
                                                    alt="table-img">
                                            </div>
                                        </td>
                                        <td>8.9</td>
                                        <td>Dextra</td>
                                        <td>7</td>
                                        <td>333</td>
                                    </tr>
                                    <tr onclick="document.location = '/';">
                                        <td>Сайт компании АС-АН
                                            <div class="sections-table__img">
                                                <img class="sections-table__img" src="img/table-img.png?df6c2bb8e96cfa35116b788d62992d13"
                                                    alt="table-img">
                                            </div>
                                        </td>
                                        <td>8.9</td>
                                        <td>Dextra</td>
                                        <td>7</td>
                                        <td>333</td>
                                    </tr>
                                    <tr onclick="document.location = '/';">
                                        <td>Сайт компании АС-АН
                                            <div class="sections-table__img">
                                                <img class="sections-table__img" src="img/table-img.png?df6c2bb8e96cfa35116b788d62992d13"
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
                            <a href="#" class="sections-all default-link">Все результаты</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('partials.footer')
    </div>
    <script src="{{ asset('js/bundle.js') }}"></script>
</body>

</html>
