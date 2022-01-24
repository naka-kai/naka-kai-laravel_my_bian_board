/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/pref.js ***!
  \******************************/
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

//全選択・解除のチェックボックス
var pref_all = document.querySelector(".pref_all"); //全選択のチェックボックスのリスト

var pref_all_list = document.querySelectorAll(".pref_all_list"); //北海道・東北地方のチェックボックス

var pref_hoto = document.querySelector(".pref_hoto"); //北海道・東北地方のチェックボックスのリスト

var pref_hoto_list = document.querySelectorAll(".pref_hoto_list"); //関東地方のチェックボックス

var pref_kan = document.querySelector(".pref_kan"); //関東地方のチェックボックスのリスト

var pref_kan_list = document.querySelectorAll(".pref_kan_list"); // 全て選択のチェックボックスがクリックされた時

pref_all.addEventListener('click', function () {
  var _iterator = _createForOfIteratorHelper(pref_all_list),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      val = _step.value;
      pref_all.checked == true ? val.checked = true : val.checked = false;
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}); // 個別のチェックボックスがクリックされた時

pref_all_list.forEach(function (element) {
  element.addEventListener('click', function () {
    // チェックが1つでも外された時
    if (element.checked == false) {
      pref_all.checked = false;
    } // 全てにチェックがされた時


    if (document.querySelectorAll('.pref_all_list:checked').length == pref_all_list.length) {
      pref_all.checked = true;
    }
  });
}); //東北

pref_hoto.addEventListener('click', function () {
  var _iterator2 = _createForOfIteratorHelper(pref_hoto_list),
      _step2;

  try {
    for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
      val = _step2.value;
      pref_hoto.checked == true ? val.checked = true : val.checked = false;
    }
  } catch (err) {
    _iterator2.e(err);
  } finally {
    _iterator2.f();
  }
});
pref_hoto_list.forEach(function (element) {
  element.addEventListener('click', function () {
    if (element.checked == false) {
      pref_hoto.checked = false;
    }

    if (document.querySelectorAll('.pref_hoto_list:checked').length == pref_hoto_list.length) {
      pref_hoto.checked = true;
    }
  });
}); //関東

pref_kan.addEventListener('click', function () {
  var _iterator3 = _createForOfIteratorHelper(pref_kan_list),
      _step3;

  try {
    for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
      val = _step3.value;
      pref_kan.checked == true ? val.checked = true : val.checked = false;
    }
  } catch (err) {
    _iterator3.e(err);
  } finally {
    _iterator3.f();
  }
});
pref_kan_list.forEach(function (element) {
  element.addEventListener('click', function () {
    if (element.checked == false) {
      pref_kan.checked = false;
    }

    if (document.querySelectorAll('.pref_kan_list:checked').length == pref_kan_list.length) {
      pref_kan.checked = true;
    }
  });
});
/******/ })()
;