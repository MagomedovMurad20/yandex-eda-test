{{--TODO СДЕЛАТЬ ДОБВАЛЕНИЕ ДАТ В БД --}}
@extends('layouts.main')
@section('content')
<div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
        <div class="loginbackground box-background--white padding-top--64">
            <div class="loginbackground-gridContainer">
                <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                    <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                    </div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                    <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                    <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                    <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                    <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                    <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                    <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                    <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                    <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
                </div>
            </div>
        </div>
        <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
            <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                <h1><a href="{{'/'}}" rel="dofollow">На главную</a></h1>
            </div>
            <div class="formbg-outer">
                <div class="formbg">
                    <div class="formbg-inner padding-horizontal--48">
                        <span class="padding-bottom--15">Создать заказ</span>
                        <form id="stripe-login" method="post" action="{{route('order.store')}}">
                            @csrf

                            <span>Имя клиента</span>

                            <select class="form-control" name="user_id">

                                @foreach ($users as $user)
                                @if ($user)
                                <option value="{{ $user->id }}">{{ $user->name}} {{$user->lastname}}</option>
                                @endif
                                @endforeach

                            </select></br>
                            <span>Телефон клиента</span>

                            <select class="form-control" name="user_id">

                                @foreach ($users as $user)
                                @if ($user)
                                <option value="{{ $user->id }}">{{ $user->phone}}</option>
                                @endif
                                @endforeach

                            </select></br>
                            <span>Название продукта</span>

                            <select class="form-control" name="product_id">

                                @foreach ($products as $product)
                                @if ($product)
                                <option value="{{ $product->id }}">{{ $product->title }} </option>
                                @endif
                                @endforeach
                            </select></br>

                            <div class="field padding-bottom--24">
                                <div class="grid--50-50">
                                    <label for="comment">Comment</label>
                                </div>
                                <input type="text" name="comment">
                            </div>
                            <div class="field padding-bottom--24">
                                <div class="grid--50-50">
                                    <label for="period_begin">period_begin</label>
                                </div>
                                <input type="date" name="period_begin">
                            </div>
                            <div class="field padding-bottom--24">
                                <div class="grid--50-50">
                                    <label for="period_end">period_end</label>
                                </div>
                                <input type="date" name="period_end">
                            </div>

                            </br>
                            <div class="field padding-bottom--24">
                                <input type="submit" name="submit" value="Continue">
                            </div>

                        </form>

                    </div>
                </div>

                <div class="footer-link padding-top--24">
                    <span>На главную<a href="/">На главную</a></span>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
