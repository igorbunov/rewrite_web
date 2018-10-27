@extends('template')

@section('content')
    <section class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content-text">
                    <h2>Написать в поддержку</h2>

                    <div style="text-align: left;">
                        {{ Form::open(array('url'=>'support/send')) }}

                        <label for="inputInfo">Введите ваш email</label><br/>

                        <input type="text" id="inputInfo" name="email" required><br/><br/>

                        <label for="inputText">Ваше сообщение</label><br/>
                        <textarea rows="3" id="inputText" name="message" required></textarea>

                        <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}"></div>

                        <br/>
                        <button type="submit" class="btn btn-success">Послать сообщение</button>


                        {{ Form::close() }}

                    </div>

                </div>
            </div>
        </div>
    </section>

    {{--<div class="container-narrow">--}}
        {{--<div class="jumbotron">--}}
            {{--<h3>Написать в поддержку</h3>--}}

            {{--<div class="control-group info">--}}
                {{--{{ Form::open(array('url'=>'support/send')) }}--}}

                {{--<label class="control-label" for="inputInfo">Введите ваш email</label>--}}
                {{--<div class="controls">--}}
                    {{--<input type="text" id="inputInfo" name="email" required>--}}
                {{--</div>--}}

                {{--<label class="control-label" for="inputText">Ваше сообщение</label>--}}
                {{--<textarea rows="3" id="inputText" name="message" required></textarea>--}}

                {{--<div class="controls" style="text-align: -webkit-center;">--}}
                    {{--<div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}"></div>--}}
                {{--</div>--}}

                {{--<br/>--}}
                {{--<button type="submit" class="btn btn-success">Послать сообщение</button>--}}


                {{--{{ Form::close() }}--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@stop