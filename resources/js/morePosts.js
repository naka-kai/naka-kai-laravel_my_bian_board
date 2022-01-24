var show = 3; //最初に表示する件数
var num = 2;  //clickごとに表示したい件数
var contents = '.post'; // 対象のlist

$('.more').on('click', function () {
    $(contents + '.is-hidden').slice(0, num).removeClass('is-hidden');
        if ($(contents + '.is-hidden').length == 0) {
            $('.more').fadeOut();
    }
});
