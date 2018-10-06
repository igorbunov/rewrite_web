@extends('template')

@section('content')
    <div class="container-narrow">
        <div class="jumbotron">
            <h1>Программа для рерайта</h1>
            <p class="lead">Разработана уникальная программа для рерайтеров, которая подойдет как для новичков, так и для опытных рерайтеров и копирайтеров. Она поможет благополучно втянуться в работу, повысит ее продуктивность и быстроту выполнения. Рерайт программа станет настоящим помощником и будет приносить не только деньги, но и удовольствие. Разработана рерайтерами для рерайтеров.</p>

            <table border="0" cellpadding="20">
                <tbody>
                <tr>
                    <td valign="top"><div class="pic pic-all" data-pik="all"></div></td>
                    <td valign="top"><p class="lead">Внешний вид окна программы выглядит примерно так. Удобное расположение редактора слева и примеры текстов для рерайта справа.</p></td>
                </tr>
                <tr>
                    <td valign="top"><p class="lead">Форма для добавления ключевых фраз и количества их повторений. Здесь также видно сколько раз ключевая фраза встречается в тексте.</p></td>
                    <td valign="top"><div class="pic pic-keys" data-pik="keys"></div></td>
                </tr>
                <tr>
                    <td valign="top"><div class="pic pic-plan" data-pik="plan"></div></td>
                    <td valign="top"><p class="lead">Каждый работник в сфере рерайта знает, что первое необходимое средство для создания качественного текста с заголовками и подзаголовками необходим план. Поэтому наша программа для рерайта оснащена удобным окошком для написания плана на который можно посмотреть или отредактировать, нажав всего одну кнопку.</p></td>
                </tr>
                <tr>
                    <td valign="top"><p class="lead">Семь вкладок с редакторами, для вставки оригинальных текстов из сайтов. Помогут сэкономить время на постоянных переключениях между редактором и браузером. Также можно сразу посмотреть синонимы для выделенных слов или скопировать выделенный текст в главный редактор.</p></td>
                    <td valign="top"><div class="pic pic-tabs" data-pik="tabs"></div></td>
                </tr>
                <tr>
                    <td valign="top"><div class="pic pic-highlighting" data-pik="highlighting"></div></td>
                    <td valign="top"><p class="lead">Внешний вид главного окна с подкрашиванием совпадающих слов, ошибок и подсветкой ключевых фраз дает возможность сразу видеть какие слова повторяются, какие слова ключевые. Вы сможете спокойно добиться 100% уникальности, если захотите.</p></td>
                </tr>
                <tr>
                    <td valign="top"><p class="lead">Для поиска необходимых слов сделан поиск, который находит и подсвечивает любые совпадения с введенным текстом.</td>
                    <td valign="top"><div class="pic pic-search" data-pik="search"></p></div></td>
                </tr>
                <tr>
                    <td valign="top"><div class="pic pic-context_menu" data-pik="context_menu"></div></td>
                    <td valign="top"><p class="lead">Для форматирования текста сделано удобное меню. В основном используется для быстрой замены слова его синонимом.</p></td>
                </tr>
                <tr>
                    <td valign="top"><p class="lead">Больше не нужно искать синонимы в интернете. Огромная база синонимов существенно сократит время выполнения задания.</p></td>
                    <td valign="top"><div class="pic pic-synonims" data-pik="synonims"></div></td>
                </tr>
                <tr>
                    <td valign="top"><div class="pic pic-unused_keys" data-pik="unused_keys"></div></td>
                    <td valign="top"><p class="lead">Всегда перед глазами виден список ключевых фраз, которые еще не использовались.</p></td>
                </tr>
                <tr>
                    <td valign="top"><p class="lead">История изменений, которую можно просмотреть и в любой момент перейти к сохраненной части. Больше не нужно искать предыдущий вариант текста если после правки уникальность снизилась. Несколько нажатий и Ваш текст восстановлен.</p></td>
                    <td valign="top"><div class="pic pic-history" data-pik="history"></div></td>
                </tr>
                <tr>
                    <td valign="top"><div class="pic pic-buttons" data-pik="buttons"></div></td>
                    <td valign="top"><p class="lead">Удобные кнопки для частых действий заменят вам надоевшие CTRL+C и CTRL+V</p></td>
                </tr>
                <tr>
                    <td valign="top"><p class="lead">Простое сохранение всего проекта (включая историю действий, план и ключевые слова). Больше не нужно боятся, что Ваша работа пропадет если вы забыли ее сохранить, функция "открыть последний документ" все восстановит. Также можно сохранить финальный текст в word документ.</p></td>
                    <td valign="top"><div class="pic pic-save" data-pik="save"></div></td>
                </tr>
                <tr>
                    <td valign="top"><div class="pic pic-turn_off_highlighting" data-pik="turn_off_highlighting"></div></td>
                    <td valign="top"><p class="lead">Если подсветка отвлекает или раздражает, можно ее отключить раз и навсегда.</p></td>
                </tr>
                <tr>
                    <td valign="top"><p class="lead">Быстрые ссылки для переходов на топовые текстовые сайты. Больше не нужно помнить все ссылки на нужные сайты проверки, один клик и браузер по умолчанию откроет Вам нужную страничку.</p></td>
                    <td valign="top"><div class="pic pic-sites" data-pik="sites"></div></td>
                </tr>
                <tr>
                    <td valign="top"><div class="pic pic-timer" data-pik="timer"></div></td>
                    <td valign="top"><p class="lead">Для учета проработанного времени добавлен таймер.</p></td>
                </tr>
                <tr>
                    <td valign="top">
                        <p class="lead">Видео по программе:</p><iframe width="420" height="315" src="https://www.youtube.com/embed/duOk73fo7ac" frameborder="0" allowfullscreen></iframe>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="jumbotron">
            <a id="file-download-btn" class="btn btn-large btn-success" href="{{ env('FILE_DOWNLOAD_LINK') }}" target="blank">Скачать программу</a>
            <a class="btn btn-large btn-success" href="{{ url('activate') }}">Активация</a>
        </div>
    </div>

    <div id="modal_form"></div>
    <div id="overlay"></div>
@stop