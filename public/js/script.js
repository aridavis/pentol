let dummyChat = [
    {
        'color': 'pink',
        'name': 'John Doe',
        'chat': 'I love this concert'
    },
    {
        'color': 'red',
        'name': 'Mary Frost',
        'chat': 'Great concept'
    },
    {
        'color': 'red',
        'name': 'Kaden Fellows',
        'chat': 'This is so cool'
    },
    {
        'color': 'pink',
        'name': 'Khalil Pearson',
        'chat': 'Wow!!'
    },
    {
        'color': 'pink',
        'name': 'Ikra Bartlett',
        'chat': 'I really like their music'
    },
    {
        'color': 'pink',
        'name': 'Eden Branch',
        'chat': 'It feels like watching a real concert'
    },
    {
        'color': 'pink',
        'name': 'Milla Mckenzie',
        'chat': 'Please say my name'
    },
    {
        'color': 'pink',
        'name': 'Parker Salinas',
        'chat': 'Shout out to the concert organizer'
    },
    {
        'color': 'pink',
        'name': 'Jaxson Rankin',
        'chat': 'This is it'
    },
    {
        'color': 'pink',
        'name': 'Eleni Duarte',
        'chat': 'YESSS !!!'
    },
    {
        'color': 'pink',
        'name': 'Zayd Booth',
        'chat': 'This is great'
    },
    {
        'color': 'pink',
        'name': 'Dion Bowler',
        'chat': 'I will definitely watch your next concert !!!'
    },
    {
        'color': 'pink',
        'name': 'Ryder Hilton',
        'chat': 'Cool!'
    },
    {
        'color': 'pink',
        'name': 'Selena Campbell',
        'chat': 'I really love youuuuu !!'
    },
    {
        'color': 'pink',
        'name': 'Robert J',
        'chat': 'praise the eor'
    },
    {
        'color': 'pink',
        'name': 'Mandy Collins',
        'chat': 'Been waiting for this !'
    },
    {
        'color': 'pink',
        'name': 'Eleanor',
        'chat': 'OMG !! aaa'
    },
    {
        'color': 'pink',
        'name': 'Emily Courtfen',
        'chat': 'Always love this song!!'
    },
    {
        'color': 'pink',
        'name': 'Jason Pattinson',
        'chat': 'I will definitely watch your next concert !!!'
    },
    {
        'color': 'pink',
        'name': 'Kevin',
        'chat': 'WE WANT MOREEEEEE !!!!!'
    },
    {
        'color': 'pink',
        'name': 'STef',
        'chat': 'MORE PLEASEEEEEEE'
    },
    {
        'color': 'pink',
        'name': 'Albert T',
        'chat': 'we want more!!'
    },
    {
        'color': 'pink',
        'name': 'Margo Tremson',
        'chat': 'I love youuuuuuuuuu'
    },
    {
        'color': 'pink',
        'name': 'Samantha',
        'chat': 'My favorite song OMG!!!'
    },
    {
        'color': 'pink',
        'name': 'Zacky Berg',
        'chat': 'THIS IS LITTTTt'
    },
    {
        'color': 'pink',
        'name': 'Damon',
        'chat': 'FInally got to see them live!'
    },
    {
        'color': 'pink',
        'name': 'Alicia Stef',
        'chat': 'Cool!'
    },
    {
        'color': 'pink',
        'name': 'Caroline Kempinsky',
        'chat': 'Please say my name'
    },
    {
        'color': 'pink',
        'name': 'Maria',
        'chat': 'AAAAAAAAAAAAA'
    },
    {
        'color': 'pink',
        'name': 'Kenny G',
        'chat': 'I REALLY WANT TO HUG YOUUUU'
    },
    {
        'color': 'pink',
        'name': 'Massimo Carte',
        'chat': 'yeeeeeeaaaaaaaa'
    },
    {
        'color': 'pink',
        'name': 'Merci',
        'chat': 'will never get bored of them omg'
    },
    {
        'color': 'pink',
        'name': 'Blessy Travis',
        'chat': 'XOXO'
    },
    {
        'color': 'pink',
        'name': 'Kylie Manner',
        'chat': 'MARRYYY MEEEEE'
    },
    {
        'color': 'pink',
        'name': 'Hamish D',
        'chat': 'love this'
    },
    {
        'color': 'pink',
        'name': 'Adam Hubert',
        'chat': 'its cool brooooo'
    },
    {
        'color': 'pink',
        'name': 'Janson COol',
        'chat': 'cant get enough :('
    },
    {
        'color': 'pink',
        'name': 'Nancy Drew',
        'chat': 'YESSS !!!'
    },
    {
        'color': 'pink',
        'name': 'Gracia KInsky',
        'chat': 'yes yes yessss !!!'
    },
    {
        'color': 'pink',
        'name': 'Sarah Millenia',
        'chat': 'omg favoriti song ! finally '
    },
    {
        'color': 'pink',
        'name': 'Alyssa dandeli',
        'chat': 'WUHUUUU SO EXCITEDDDDD'
    },
];
let tipModal = false;
let stickerModal = false;
let currentTip = 100;

window.onload = function() {
    main();
};

function main() {
    setInterval(() => {
        randomChat();
    }, 1000);
}

function randomChat() {
    let chat = dummyChat[Math.floor(Math.random() * dummyChat.length)];
    appendChat(chat.color, chat.name, chat.chat);
}

function appendChat(color, name, chat, isCurrentUser = false) {
    const length = $("#chat-containers > div").length;
    if (length > 30) {
        $("#chat-containers > div:first-child").remove();
    }

    $("#chat-containers").append(`
        <div class="chat-wrapper ${isCurrentUser ? 'current' : ''}">
            <div class="user-picture" style="background: ${color}">
                <span class="fa fa-user"></span>
            </div>
            <div class="chat-text-wrapper">
                <div class="username">${name}</div>
                <div class="chat-content">${chat}
                </div>
            </div>
        </div>
    `).scrollTop(9999);
}

function submitChat(color, name, event) {
    const field = $("#chat-field");
    if (!event || event.keyCode === 13) {
        if (field.val()) {
            appendChat(color, name, field.val(), true);

            $("#chat-field").val('');
        }
    }
}

function toggleGiftModal() {
    if (this.tipModal) {
        $(".tip-modal").removeClass('active');
    } else {
        $(".tip-modal").addClass('active');
    }
    this.tipModal = !this.tipModal;
}

function tip(color, name) {
    this.tipModal = false;
    $(".tip-modal").removeClass('active');

    const tipValue = +$("#tip-value").val();
    currentTip += tipValue;

    $("#tip-info").html(currentTip + '$');

    $("#chat-containers").append(`
        <div class="chat-wrapper tip">
            <div class="user-picture" style="background: ${color}">
                <span class="fa fa-user"></span>
            </div>
            <div class="chat-text-wrapper">
                <div class="username">${name}</div>
                <div class="chat-content">Just giving tip ${tipValue}$!!
                </div>
            </div>
        </div>
    `).scrollTop(9999);

    $("#sticker-button").removeClass('d-none');
}

function toggleStickerModal() {
    if (this.stickerModal) {
        $(".sticker-modal").removeClass('active');
    } else {
        $(".sticker-modal").addClass('active');
    }
    this.stickerModal = !this.stickerModal;
}

function sticker(color, name, url) {
    this.stickerModal = false;
    $(".sticker-modal").removeClass('active');

    $("#chat-containers").append(`
        <div class="chat-wrapper current">
            <div class="user-picture" style="background: ${color}">
                <span class="fa fa-user"></span>
            </div>
            <div class="chat-text-wrapper">
                <div class="username">${name}</div>
                <img src="${url}" alt="sticker" height="100">
            </div>
        </div>
    `).scrollTop(9999);
}
