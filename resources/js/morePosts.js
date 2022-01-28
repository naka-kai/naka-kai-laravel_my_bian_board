let show = 2; //最初に表示する件数
let num = 2;  //clickごとに表示したい件数
let contents = '.post'; // 対象のlist

$(function() {

    $(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
    $('.more').on('click', function () {
        $(contents + '.is-hidden').slice(0, num).removeClass('is-hidden');
            if ($(contents + '.is-hidden').length == 0) {
                $('.more').fadeOut();
        }
    });
});


// let show = 3; //最初に表示する件数
// let num = 2; //clickごとに表示したい件数
// let post = '.post';
// const contents = document.querySelectorAll('.post');
// const hidden = document.querySelectorAll(post + '.is-hidden');

// window.onload = function () {

//     for(let i = 0; i < contents.length; i++) {
//         contents[i + show].classList.add('is-hidden');
//     }
//     // document.querySelector(post + ':nth-child(' + (show + 1) + ')').classList.add('is-hidden');
//     document.querySelector('.more').addEventListener('click', function() {
//         document.querySelectorAll(post + '.is-hidden').slice(0, num).classList.remove('is-hidden');
//         if(document.querySelector(post + '.is-hidden').length == 0) {
//             fadeOut(document.querySelector('.more'), 300);
//         }
//     });

//     function fadeOut(node, duration) {
//         node.style.opacity = 1;

//         let start = performance.now();

//         requestAnimationFrame(function tick(timestamp) {
//             //イージング計算式(linear)
//             let easing = (timestamp - start) / duration;

//             //opacityが0より小さくならないように
//             node.style.opacity = Math.max(1 - easing, 0);

//             //イージング計算式の値が1より小さいとき
//             if(easing < 1) {
//                 requestAnimationFrame(tick);
//             } else {
//                 node.style.opacity = '';
//                 node.style.display = 'none';
//             }
//         });
//     }
// }
