<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pentol</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/concert.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
<div class="concert-container">
    <div class="main-video-container">
        <video autoplay class="main-video" controls>
            <source src="{{ asset('video/main-video.mp4') }}">
        </video>

        <div class="sign-language-container">
            <div id="sign-language-video-wrapper">
                <button class="close-button" onclick="hideSignLanguage()">x</button>
                <video autoplay class="main-video" muted loop>
                    <source src="{{ asset('video/sign-language.mp4') }}">
                </video>
            </div>
            <button class="show-button" onclick="showSignLanguage()">
                <i class="fa fa-sign-language"></i>
            </button>
        </div>
    </div>
    <div class="right-container">
        <div class="right-top-container">
            <div class="top-tippers">
                <div class="pb-2 pb-lg-3">
                    <a href="{{ url('/my-ticket') }}" class="text-orange">
                        <i class="fa fa-chevron-left"></i>
                        Exit concert
                    </a>
                </div>
                <div class="top-tippers-label">
                    <div class="label-header">Top Tippers</div>
                    <div class="total-tip">
                        <i class="fa fa-gift"></i>
                        <span id="tip-info">100$</span>
                    </div>
                </div>
                <div class="top-tippers-user-list">
                    <div class="user-picture" title="Luki Centuri (10$)">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-picture" title="Luki Centuri (10$)" style="background: #D0E3C4">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-picture" title="Luki Centuri (10$)" style="background: red">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-picture" title="Luki Centuri (10$)" style="background: pink">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-picture" title="Luki Centuri (10$)" style="background: #f08a5d">
                        <span class="fa fa-user"></span>
                    </div>
                </div>
            </div>
            <div class="chat-containers"><div id="chat-containers"></div></div>
            <div class="chat-input-wrapper">
                <div class="username-wrapper">
                    <div class="user-picture">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="chat-text-wrapper">
                        <div class="username">{{ Auth::user()['name'] }}</div>
                    </div>
                </div>
                <div class="chat-input">
                    <input type="text" autocomplete="off" placeholder="Type here..." id="chat-field" onkeydown="submitChat('purple', '{{ Auth::user()['name'] }}', event)">
                </div>
                <div class="chat-extension">
                    <div class="chat-extension-left">
                        <div>
                            <div class="tip-modal">
                                <div class="tip-wrapper">
                                    <input type="number" min="1" max="100" value="1" id="tip-value">
                                    <button class="btn btn-orange" onclick="tip('purple', '{{ Auth::user()['name'] }}')">Tip</button>
                                </div>
                                <div class="mt-2">
                                    By giving tip, you can use special sticker in this chat room
                                </div>
                            </div>
                            <button class="fa fa-gift" onclick="toggleGiftModal()"></button>
                        </div>
                        <div>
                            <div class="sticker-modal">
                                <h6>Sticker</h6>
                                <div class="sticker-modal-wrapper">
                                    <div class="row">
                                        @for($i = 1; $i < 9; $i++)
                                            <div class="col-4 mb-4">
                                                <img src="{{ url('images/stickers/sticker' . $i . '.png') }}" alt="" onclick="sticker('purple', '{{ Auth::user()['name'] }}', '{{ url('images/stickers/sticker' . $i . '.png') }}')">
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <button class="fa fa-smile-o d-none" id="sticker-button" onclick="toggleStickerModal()"></button>
                        </div>
                    </div>
                    <div class="chat-extension-right">
                        <div>
                            <button class="fa fa-paper-plane" onclick="submitChat('purple', '{{ Auth::user()['name'] }}')"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
