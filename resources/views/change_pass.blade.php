<div style="margin: 30px auto; width: 500px;font-size: 20px;">
    <form method="POST" action="/change_password">
        @csrf

        <h3>Смена имейла и пароля</h3>

        @if (!empty($key))
            <br/>
            Введите ключ: <input type="text" style="width: 300px;" name="key" value="{{ $key }}">
        @else
            Введите ключ: <input type="text" style="width: 300px;" name="key">
        @endif
        <br/><br/>
        email: <input type="email" name="email"/>
        <br/>
        пароль: <input type="text" name="pass"/>
        <br/><br/>
        <input type="submit" value="Сменить">
    </form>
</div>