$(document).ready(() => {
    //flowtype
    $('.main__ritem-header h3').flowtype({
        minimum: 500,
        maximum: 1200,
        minFont: 20,
        maxFont: 40,
        fontRatio: 30
    });

    $('#showall').flowtype({
        minimum: 500,
        maximum: 1200,
        minFont: 12,
        maxFont: 40,
        fontRatio: 30
    });

    const animeName = ['Naruto', 'One Piece', 'Fairy Tail', 'Bleach', 'One Punch Man', 'Dragon Ball Super', 'Pokemon', 'Black Rock Shooter', 'Sword Art Online', '5cm/s', 'Date A Live', 'Attack on the Titan', 'Bikini Warriors', 'Tokyo Ghoul', 'Fairy Tail', 'Hunter x Hunter', 'Digimon', 'Gumball', 'Stand By Me', 'Adventure Time', 'Inu Yasha', 'Masou Gakuen HxH', 'Overload', 'God Eater', 'Ajin', 'Gurren Lagann', 'Danmachi', 'Gintama'];

    setInterval(function () {
        let random = Math.floor(Math.random() * 28) + 1;
        $('.header').css('background-image', 'url("/public/img/' + random + '.jpg")');
        $('.header__album h2').html(animeName[random - 1]);
    }, 5000);

    $(function () {
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
})
