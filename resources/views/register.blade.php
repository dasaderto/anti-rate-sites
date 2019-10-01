<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body class="page">
<div class="page__wrapper">
    @include('partials.nav')
    <main class="register">
        <div class="page-head">
            <div class="uk-container page-head__container">
                <div class="breadcrumbs">
                    <a href="/">Главная</a>
                    /
                    <span>Регистрация</span>
                </div>
                <div class="page-head__title">
                    <h1>Регистрация</h1>
                </div>
            </div>
        </div>
        <div class="register-content">
            <div class="uk-container">
                <div class="content__container">
                    <div class="register-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="register-form__title">
                                Контактная информация
                            </div>
                            <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name"
                                       placeholder="Имя или название компании" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                       name="phone" value="{{ old('phone') }}" required autocomplete="phone"
                                       placeholder="Телефон" autofocus>

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email"
                                       placeholder="Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" placeholder="Пароль"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control"
                                       placeholder="Повторите пароль" name="password_confirmation" required
                                       autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success jcc">
                                    {{ __('Отправить') }}
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="register-aside">
                        <img src="img/register-aside.png?6e0e3fdfe763be98b57aeedff0131e2f" alt="register-img">
                    </div>
                </div>
            </div>
        </div>
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
<script src="{{ asset('js/bundle.js') }}"></script>
</body>

</html>
