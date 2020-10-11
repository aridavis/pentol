<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pentol</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=PT+Sans" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/concert.css') }}">
</head>
<body>
<div class="concert-container">
    <div class="main-video-container">
        <video autoplay class="main-video" controls>
            <source src="{{ asset('video/main-video.mp4') }}">
        </video>
    </div>
    <div class="right-container">
        <div class="right-top-container">
            <div class="top-tippers">
                <div class="top-tippers-label">
                    <div class="label-header">Top Tippers</div>
                    <div class="total-tip">
                        <i class="fa fa-gift"></i>100$
                    </div>
                </div>
                <div class="top-tippers-user-list">
                    <div class="user-picture" title="Luki Centuri (10$)">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-picture" title="Luki Centuri (10$)">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-picture" title="Luki Centuri (10$)">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-picture" title="Luki Centuri (10$)">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-picture" title="Luki Centuri (10$)">
                        <span class="fa fa-user"></span>
                    </div>
                </div>
            </div>
            <div class="chat-containers">
                <div class="chat-wrapper">
                    <div class="user-picture" title="Luki Centuri (10$)">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="chat-text-wrapper">
                        <div class="username">Luki Centuri</div>
                        <div class="chat-content">This is unbelievable asdf asdfa sfs adsf asfas dfsda fasf asfdsf asf sdf asdf sdfa fas fsdf asdfas fsd
                        </div>
                    </div>
                </div>

                <div class="chat-wrapper">
                    <div class="user-picture" title="Luki Centuri (10$)">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="chat-text-wrapper">
                        <div class="username">Luki Centuri</div>
                        <div class="chat-content">This is unbelievable amazing concert!!!
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-input-wrapper">
                <div class="username-wrapper">
                    <div class="user-picture" title="Luki Centuri (10$)">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="chat-text-wrapper">
                        <div class="username">Luki Centuri</div>
                    </div>
                </div>
                <div class="chat-input">
                    <input type="text" placeholder="Type here...">
                </div>
                <div class="chat-extension">
                    <div class="chat-extension-left">
                        <button class="fa fa-gift"></button>
                        <button class="fa fa-smile-o"></button>
                    </div>
                    <div class="chat-extension-right">
                        <button class="fa fa-paper-plane"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
