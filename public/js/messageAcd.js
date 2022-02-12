/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/messageAcd.js ***!
  \************************************/
$(function () {
  if (sessionStorage.getItem('msg_acd') == 'block') {
    $('#msg_acd').show();
  }

  $('#msg_btn').on("click", function () {
    $(msg_acd).slideToggle('fast', function () {
      sessionStorage.setItem($(msg_acd).attr('id'), $(msg_acd).css('display'));
    });
  });
});
/******/ })()
;