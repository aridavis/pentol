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
        'color': '#D0E3C4',
        'name': 'Kaden Fellows',
        'chat': 'This is so cool'
    },
    {
        'color': '#fcdada',
        'name': 'Khalil Pearson',
        'chat': 'Wow!!'
    },
    {
        'color': '#fadcaa',
        'name': 'Ikra Bartlett',
        'chat': 'I really like their music'
    },
    {
        'color': '#f08a5d',
        'name': 'Eden Branch',
        'chat': 'It feels like watching a real concert'
    },
    {
        'color': '#c3aed6',
        'name': 'Milla Mckenzie',
        'chat': 'Please say my name'
    },
    {
        'color': '#ffd57e',
        'name': 'Parker Salinas',
        'chat': 'Shout out to the concert organizer'
    },
    {
        'color': '#efbbcf',
        'name': 'Jaxson Rankin',
        'chat': 'This is it'
    },
    {
        'color': '#ffcb8e',
        'name': 'Eleni Duarte',
        'chat': 'YESSS !!!'
    },
    {
        'color': '#065c6f',
        'name': 'Zayd Booth',
        'chat': 'This is great'
    },
    {
        'color': '#065c6f',
        'name': 'Dion Bowler',
        'chat': 'I will definitely watch your next concert !!!'
    },
    {
        'color': '#fe7171',
        'name': 'Ryder Hilton',
        'chat': 'Cool!'
    },
    {
        'color': '#fe7171',
        'name': 'Selena Campbell',
        'chat': 'I really love youuuuu !!'
    },
    {
        'color': '#2ec1ac',
        'name': 'Robert J',
        'chat': 'praise the eor'
    },
    {
        'color': '#2ec1ac',
        'name': 'Mandy Collins',
        'chat': 'Been waiting for this !'
    },
    {
        'color': '#2ec1ac',
        'name': 'Eleanor',
        'chat': 'OMG !! aaa'
    },
    {
        'color': '#a37eba',
        'name': 'Emily Courtfen',
        'chat': 'Always love this song!!'
    },
    {
        'color': '#fcdab7',
        'name': 'Jason Pattinson',
        'chat': 'I will definitely watch your next concert !!!'
    },
    {
        'color': '#fcdab7',
        'name': 'Kevin',
        'chat': 'WE WANT MOREEEEEE !!!!!'
    },
    {
        'color': '#ffbb91',
        'name': 'STef',
        'chat': 'MORE PLEASEEEEEEE'
    },
    {
        'color': '#ffbb91',
        'name': 'Albert T',
        'chat': 'we want more!!'
    },
    {
        'color': '#ffbb91',
        'name': 'Margo Tremson',
        'chat': 'I love youuuuuuuuuu'
    },
    {
        'color': '#ffbb91',
        'name': 'Samantha',
        'chat': 'My favorite song OMG!!!'
    },
    {
        'color': '#ffbb91',
        'name': 'Zacky Berg',
        'chat': 'THIS IS LITTTTt'
    },
    {
        'color': '#ffbb91',
        'name': 'Damon',
        'chat': 'FInally got to see them live!'
    },
    {
        'color': '#fbe2e5',
        'name': 'Alicia Stef',
        'chat': 'Cool!'
    },
    {
        'color': '#fbe2e5',
        'name': 'Caroline Kempinsky',
        'chat': 'Please say my name'
    },
    {
        'color': '#f3e6e3',
        'name': 'Maria',
        'chat': 'AAAAAAAAAAAAA'
    },
    {
        'color': '#f3e6e3',
        'name': 'Kenny G',
        'chat': 'I REALLY WANT TO HUG YOUUUU'
    },
    {
        'color': '#f3e6e3',
        'name': 'Massimo Carte',
        'chat': 'yeeeeeeaaaaaaaa'
    },
    {
        'color': '#f3e6e3',
        'name': 'Merci',
        'chat': 'will never get bored of them omg'
    },
    {
        'color': '#f3e6e3',
        'name': 'Blessy Travis',
        'chat': 'XOXO'
    },
    {
        'color': '#e84a5f',
        'name': 'Kylie Manner',
        'chat': 'MARRYYY MEEEEE'
    },
    {
        'color': '#e84a5f',
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

function hideSignLanguage() {
    $("#sign-language-video-wrapper").removeClass('active');
}

function showSignLanguage() {
    $("#sign-language-video-wrapper").addClass('active');
}
