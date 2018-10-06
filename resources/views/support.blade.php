@extends('template')

@section('content')
    <div class="container-narrow">
        <div class="jumbotron">
            <h3>Написать в поддержку</h3>

            <div class="control-group info">
                {{ Form::open(array('url'=>'support/send')) }}

                <label class="control-label" for="inputInfo">Введите ваш email</label>
                <div class="controls">
                    <input type="text" id="inputInfo" name="email" required>
                </div>

                <label class="control-label" for="inputText">Ваше сообщение</label>
                <textarea rows="3" id="inputText" name="message" required></textarea>

                <br/>
                <button type="submit" class="btn btn-success">Послать сообщение</button>


                {{ Form::close() }}

            </div>
        </div>
    </div>
@stop