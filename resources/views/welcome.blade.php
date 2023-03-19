<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главнная</title>
</head>

<body>
    <header id="header">
        <nav class="links" style="--items: 5;">

            <a href="{{ route('order.index') }}">Заказы</a>
            <a href="{{ route('order.create') }}">Добавить заказ</a>
            <a href="{{ route('product.index') }}">Продукты</a>
            <a href="{{ route('product.create') }}">Добавить продукт</a>
            <a href="{{ route('user.index') }}">Пользователи</a>
            <a href="{{ route('user.create') }}">Добавить пользователя</a>
            <span class="line"></span>
        </nav>
    </header>
    <h1 style="padding-top: 10em">
        Главная страница
    </h1>

</body>

<style>
    /*@import url('//https://fonts.googleapis.com/css?family=Inconsolata|Lato:300,400,700');*/
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    li,
    ol,
    ul,
    pre {
        margin: 0;
        padding: 0;
    }

    html,
    body {
        min-height: 100%;
    }

    body {
        background-color: #345;
        background-image: linear-gradient(to bottom, #0009, transparent);
        color: #eee;
        font-family: 'Lato', sans-serif;
        font-size: 40.5%;
        padding: 0 20px;
        box-sizing: border-box;
    }

    code {
        background: #fff1;
        font-family: 'Inconsolata', monospace;
        padding: .2em .4em;
    }

    .content {
        background-color: #fff;
        border-radius: 8px;
        box-sizing: border-box;
        color: #666;
        font-size: 1em;
        line-height: 1.4em;
        margin: 10px auto;
        margin-top: 80px;
        padding: 20px;
        width: 100%;
        max-width: 800px;
    }

    .content ul {
        margin: .5em 2em;
        padding: 0;
    }

    #footer {
        background-color: #246c;
        background-image: linear-gradient(to bottom, transparent, #0009);
        border-top: 1px solid #fff3;
        box-shadow: inset 0 1px 0 #fff3, 0 0 32px #000;
        overflow: hidden;
        padding: 8px;
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 9001;
    }

    #footer a {
        color: #85c6f6;
        padding: 1em 0;
        text-decoration: none;
    }

    #footer ul {
        display: flex;
        list-style: none;
        justify-content: center;
        font-size: 1em;
        font-weight: 300;
    }

    #footer ul li {
        padding: 0 .5em;
    }

    /* Appearance */
    .links {
        background-color: #123;
        background-image: linear-gradient(to bottom, #0003, transparent);
        border-bottom: 1px solid #0003;
        box-shadow: 0 0 32px #0003;
        font-size: 2em;
        font-weight: 300;
    }

    .links>a {
        color: #9ab;
        padding: .75em;
        text-align: center;
        text-decoration: none;
        transition: all .5s;
    }

    .links>a:hover {
        background: #ffffff06;
        color: #adf;
    }

    .links>.line {
        background: #68a;
        height: 1px;
        pointer-events: none;
    }

    /* The Magic */
    #header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
    }

    .links {
        display: grid;
        grid-template-columns: repeat(var(--items), 1fr);
        position: relative;
    }

    .links>.line {
        opacity: 0;
        transition: all .5s;
        position: absolute;
        bottom: 0;
        left: var(--left, calc(100% / var(--items) * (var(--index) - 1)));
        width: var(--width, calc(100% / var(--items)));
        --index: 0;
    }

    .links>a:hover~.line {
        opacity: 1;
    }

    .links>a:nth-of-type(1):hover~.line {
        --index: 1;
    }

    .links>a:nth-of-type(2):hover~.line {
        --index: 2;
    }

    .links>a:nth-of-type(3):hover~.line {
        --index: 3;
    }

    .links>a:nth-of-type(4):hover~.line {
        --index: 4;
    }

    .links>a:nth-of-type(5):hover~.line {
        --index: 5;
    }

    .links>a:nth-of-type(6):hover~.line {
        --index: 6;
    }

    .links>a:nth-of-type(7):hover~.line {
        --index: 7;
    }

    .links>a:nth-of-type(8):hover~.line {
        --index: 8;
    }

    .links>a:nth-of-type(9):hover~.line {
        --index: 9;
    }

    .links>a:nth-of-type(10):hover~.line {
        --index: 10;
    }

    .links>a:last-of-type:hover~.line {
        --index: var(--items);
    }
</style>

</html>
