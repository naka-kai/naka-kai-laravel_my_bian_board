/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/pref.js ***!
  \******************************/
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

/**
 * チェックがついたかどうか
 */
//全選択・解除のチェックボックス
var pref_all = document.querySelector(".pref_all"); //全選択のチェックボックスのリスト

var pref_all_list = document.querySelectorAll(".pref_all_list"); //北海道のチェックボックス

var pref_hokk = document.querySelector(".pref_hokk"); //北海道のチェックボックスのリスト

var pref_hokk_list = document.querySelectorAll(".pref_hokk_list"); //東北地方のチェックボックス

var pref_toho = document.querySelector(".pref_toho"); //東北地方のチェックボックスのリスト

var pref_toho_list = document.querySelectorAll(".pref_toho_list"); //関東地方のチェックボックス

var pref_kan = document.querySelector(".pref_kan"); //関東地方のチェックボックスのリスト

var pref_kan_list = document.querySelectorAll(".pref_kan_list"); //中部地方のチェックボックス

var pref_chubu = document.querySelector(".pref_chubu"); //中部地方のチェックボックスのリスト

var pref_chubu_list = document.querySelectorAll(".pref_chubu_list"); //近畿地方のチェックボックス

var pref_kin = document.querySelector(".pref_kin"); //近畿地方のチェックボックスのリスト

var pref_kin_list = document.querySelectorAll(".pref_kin_list"); //中国地方のチェックボックス

var pref_chug = document.querySelector(".pref_chug"); //中国地方のチェックボックスのリスト

var pref_chug_list = document.querySelectorAll(".pref_chug_list"); //四国地方のチェックボックス

var pref_sik = document.querySelector(".pref_sik"); //四国地方のチェックボックスのリスト

var pref_sik_list = document.querySelectorAll(".pref_sik_list"); //九州地方のチェックボックス

var pref_kyu = document.querySelector(".pref_kyu"); //九州地方のチェックボックスのリスト

var pref_kyu_list = document.querySelectorAll(".pref_kyu_list"); // 全て選択のチェックボックスがクリックされた時

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
}); //北海道の全て選択のチェックボックスがクリックされた時

pref_hokk.addEventListener('click', function () {
  var _iterator2 = _createForOfIteratorHelper(pref_hokk_list),
      _step2;

  try {
    for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
      val = _step2.value;
      pref_hokk.checked == true ? val.checked = true : val.checked = false;
    }
  } catch (err) {
    _iterator2.e(err);
  } finally {
    _iterator2.f();
  }
}); // 個別のチェックボックスがクリックされた時

pref_hokk_list.forEach(function (element) {
  element.addEventListener('click', function () {
    // チェックが1つでも外された時
    if (element.checked == false) {
      pref_hokk.checked = false;
    } // 全てにチェックがされた時


    if (document.querySelectorAll('.pref_hokk_list:checked').length == pref_hokk_list.length) {
      pref_hokk.checked = true;
    }
  });
}); //東北の全て選択のチェックボックスがクリックされた時

pref_toho.addEventListener('click', function () {
  var _iterator3 = _createForOfIteratorHelper(pref_toho_list),
      _step3;

  try {
    for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
      val = _step3.value;
      pref_toho.checked == true ? val.checked = true : val.checked = false;
    }
  } catch (err) {
    _iterator3.e(err);
  } finally {
    _iterator3.f();
  }
}); // 個別のチェックボックスがクリックされた時

pref_toho_list.forEach(function (element) {
  element.addEventListener('click', function () {
    // チェックが1つでも外された時
    if (element.checked == false) {
      pref_toho.checked = false;
    } // 全てにチェックがされた時


    if (document.querySelectorAll('.pref_toho_list:checked').length == pref_toho_list.length) {
      pref_toho.checked = true;
    }
  });
}); //関東の全て選択のチェックボックスがクリックされた時

pref_kan.addEventListener('click', function () {
  var _iterator4 = _createForOfIteratorHelper(pref_kan_list),
      _step4;

  try {
    for (_iterator4.s(); !(_step4 = _iterator4.n()).done;) {
      val = _step4.value;
      pref_kan.checked == true ? val.checked = true : val.checked = false;
    }
  } catch (err) {
    _iterator4.e(err);
  } finally {
    _iterator4.f();
  }
}); // 個別のチェックボックスがクリックされた時

pref_kan_list.forEach(function (element) {
  element.addEventListener('click', function () {
    // チェックが1つでも外された時
    if (element.checked == false) {
      pref_kan.checked = false;
    } // 全てにチェックがされた時


    if (document.querySelectorAll('.pref_kan_list:checked').length == pref_kan_list.length) {
      pref_kan.checked = true;
    }
  });
}); //中部の全て選択のチェックボックスがクリックされた時

pref_chubu.addEventListener('click', function () {
  var _iterator5 = _createForOfIteratorHelper(pref_chubu_list),
      _step5;

  try {
    for (_iterator5.s(); !(_step5 = _iterator5.n()).done;) {
      val = _step5.value;
      pref_chubu.checked == true ? val.checked = true : val.checked = false;
    }
  } catch (err) {
    _iterator5.e(err);
  } finally {
    _iterator5.f();
  }
}); // 個別のチェックボックスがクリックされた時

pref_chubu_list.forEach(function (element) {
  element.addEventListener('click', function () {
    // チェックが1つでも外された時
    if (element.checked == false) {
      pref_chubu.checked = false;
    } // 全てにチェックがされた時


    if (document.querySelectorAll('.pref_chubu_list:checked').length == pref_chubu_list.length) {
      pref_chubu.checked = true;
    }
  });
}); //近畿の全て選択のチェックボックスがクリックされた時

pref_kin.addEventListener('click', function () {
  var _iterator6 = _createForOfIteratorHelper(pref_kin_list),
      _step6;

  try {
    for (_iterator6.s(); !(_step6 = _iterator6.n()).done;) {
      val = _step6.value;
      pref_kin.checked == true ? val.checked = true : val.checked = false;
    }
  } catch (err) {
    _iterator6.e(err);
  } finally {
    _iterator6.f();
  }
}); // 個別のチェックボックスがクリックされた時

pref_kin_list.forEach(function (element) {
  element.addEventListener('click', function () {
    // チェックが1つでも外された時
    if (element.checked == false) {
      pref_kin.checked = false;
    } // 全てにチェックがされた時


    if (document.querySelectorAll('.pref_kin_list:checked').length == pref_kin_list.length) {
      pref_kin.checked = true;
    }
  });
}); //中国の全て選択のチェックボックスがクリックされた時

pref_chug.addEventListener('click', function () {
  var _iterator7 = _createForOfIteratorHelper(pref_chug_list),
      _step7;

  try {
    for (_iterator7.s(); !(_step7 = _iterator7.n()).done;) {
      val = _step7.value;
      pref_chug.checked == true ? val.checked = true : val.checked = false;
    }
  } catch (err) {
    _iterator7.e(err);
  } finally {
    _iterator7.f();
  }
}); // 個別のチェックボックスがクリックされた時

pref_chug_list.forEach(function (element) {
  element.addEventListener('click', function () {
    // チェックが1つでも外された時
    if (element.checked == false) {
      pref_chug.checked = false;
    } // 全てにチェックがされた時


    if (document.querySelectorAll('.pref_chug_list:checked').length == pref_chug_list.length) {
      pref_chug.checked = true;
    }
  });
}); //四国の全て選択のチェックボックスがクリックされた時

pref_sik.addEventListener('click', function () {
  var _iterator8 = _createForOfIteratorHelper(pref_sik_list),
      _step8;

  try {
    for (_iterator8.s(); !(_step8 = _iterator8.n()).done;) {
      val = _step8.value;
      pref_sik.checked == true ? val.checked = true : val.checked = false;
    }
  } catch (err) {
    _iterator8.e(err);
  } finally {
    _iterator8.f();
  }
}); // 個別のチェックボックスがクリックされた時

pref_sik_list.forEach(function (element) {
  element.addEventListener('click', function () {
    // チェックが1つでも外された時
    if (element.checked == false) {
      pref_sik.checked = false;
    } // 全てにチェックがされた時


    if (document.querySelectorAll('.pref_sik_list:checked').length == pref_sik_list.length) {
      pref_sik.checked = true;
    }
  });
}); //九州の全て選択のチェックボックスがクリックされた時

pref_kyu.addEventListener('click', function () {
  var _iterator9 = _createForOfIteratorHelper(pref_kyu_list),
      _step9;

  try {
    for (_iterator9.s(); !(_step9 = _iterator9.n()).done;) {
      val = _step9.value;
      pref_kyu.checked == true ? val.checked = true : val.checked = false;
    }
  } catch (err) {
    _iterator9.e(err);
  } finally {
    _iterator9.f();
  }
}); // 個別のチェックボックスがクリックされた時

pref_kyu_list.forEach(function (element) {
  element.addEventListener('click', function () {
    // チェックが1つでも外された時
    if (element.checked == false) {
      pref_kyu.checked = false;
    } // 全てにチェックがされた時


    if (document.querySelectorAll('.pref_kyu_list:checked').length == pref_kyu_list.length) {
      pref_kyu.checked = true;
    }
  });
});
/**
 * アコーディオン
 * 東北地方を押すとその都道府県が出る
 */

window.onload = function (e) {
  var acd_area = document.querySelectorAll(".acd-area");

  for (var i = 0; i < acd_area.length; i++) {
    acd_area[i].addEventListener("click", function toggle(event) {
      if (event.target.id == 'pref_hokk' || event.target.id == 'pref_toho' || event.target.id == 'pref_kan' || event.target.id == 'pref_chubu' || event.target.id == 'pref_kin' || event.target.id == 'pref_chug' || event.target.id == 'pref_sik' || event.target.id == 'pref_kyu') {
        var acd_prefs = this.nextElementSibling;
        this.classList.toggle("is-active");
        acd_prefs.classList.toggle("is-open");
      }
    });
  }
};
/******/ })()
;