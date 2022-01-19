/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/pref.js ***!
  \******************************/
// let pref_areas = ['pref_all', 'pref_hoto', 'pref_kan', 'pref_chubu'];
// pref_areas.forEach(function(element) {
//     let element = document.querySelector(".element");
//     console.log(element);
// });
//全選択・解除のチェックボックス
var pref_all = document.querySelector(".pref_all"); //全選択のチェックボックスのリスト

var pref_list = document.querySelectorAll(".pref_all_list"); //北海道・東北地方のチェックボックス

var pref_hoto = document.querySelector(".pref_hoto"); //北海道・東北地方のチェックボックスのリスト

var pref_hoto_list = document.querySelectorAll(".pref_hoto_list"); //関東地方のチェックボックス

var pref_kan = document.querySelector(".pref_kan"); //関東地方のチェックボックスのリスト

var pref_kan_list = document.querySelectorAll(".pref_kan_list"); //中部地方のチェックボックス

var pref_chubu = document.querySelector(".pref_chubu"); //中部地方のチェックボックスのリスト

var pref_chubu_list = document.querySelectorAll(".pref_chubu_list"); //近畿地方のチェックボックス

var pref_kin = document.querySelector(".pref_kin"); //近畿地方のチェックボックスのリスト

var pref_kin_list = document.querySelectorAll(".pref_kin_list"); //中国地方のチェックボックス

var pref_chugoku = document.querySelector(".pref_chugoku"); //中国地方のチェックボックスのリスト

var pref_chugoku_list = document.querySelectorAll(".pref_chugoku_list"); //四国地方のチェックボックス

var pref_shi = document.querySelector(".pref_shi"); //四国地方のチェックボックスのリスト

var pref_shi_list = document.querySelectorAll(".pref_shi_list"); //九州地方のチェックボックス

var pref_kyu = document.querySelector(".pref_kyu"); //九州地方のチェックボックスのリスト

var pref_kyu_list = document.querySelectorAll(".pref_kyu_list"); //全選択のチェックボックスイベント

pref_all.addEventListener('change', change_all); //北海道・東北地方のチェックボックスイベント

pref_hoto.addEventListener('change', change_hoto); //関東地方のチェックボックスイベント

pref_kan.addEventListener('change', change_kan); //中部地方のチェックボックスイベント

pref_chubu.addEventListener('change', change_chubu); //近畿地方のチェックボックスイベント

pref_kin.addEventListener('change', change_kin); //中国地方のチェックボックスイベント

pref_chugoku.addEventListener('change', change_chugoku); //四国地方のチェックボックスイベント

pref_shi.addEventListener('change', change_shi); //九州地方のチェックボックスイベント

pref_kyu.addEventListener('change', change_kyu);

function change_all() {
  //チェックされているか
  if (pref_all.checked) {
    for (var i in pref_list) {
      if (pref_list.hasOwnProperty(i)) {
        pref_list[i].checked = true;
      }
    }
  } else {
    //全て解除
    for (var _i in pref_list) {
      if (pref_list.hasOwnProperty(_i)) {
        pref_list[_i].checked = false;
      }
    }
  }
}

function change_hoto() {
  if (pref_hoto.checked) {
    for (var i in pref_hoto_list) {
      if (pref_hoto_list.hasOwnProperty(i)) {
        pref_hoto_list[i].checked = true;
      }
    }
  } else {
    for (var _i2 in pref_hoto_list) {
      if (pref_hoto_list.hasOwnProperty(_i2)) {
        pref_hoto_list[_i2].checked = false;
      }
    }
  }
}

function change_kan() {
  if (pref_kan.checked) {
    for (var i in pref_kan_list) {
      if (pref_kan_list.hasOwnProperty(i)) {
        pref_kan_list[i].checked = true;
      }
    }
  } else {
    for (var _i3 in pref_kan_list) {
      if (pref_kan_list.hasOwnProperty(_i3)) {
        pref_kan_list[_i3].checked = false;
      }
    }
  }
}

function change_chubu() {
  if (pref_chubu.checked) {
    for (var i in pref_chubu_list) {
      if (pref_chubu_list.hasOwnProperty(i)) {
        pref_chubu_list[i].checked = true;
      }
    }
  } else {
    for (var _i4 in pref_chubu_list) {
      if (pref_chubu_list.hasOwnProperty(_i4)) {
        pref_chubu_list[_i4].checked = false;
      }
    }
  }
}

function change_kin() {
  if (pref_kin.checked) {
    for (var i in pref_kin_list) {
      if (pref_kin_list.hasOwnProperty(i)) {
        pref_kin_list[i].checked = true;
      }
    }
  } else {
    for (var _i5 in pref_kin_list) {
      if (pref_kin_list.hasOwnProperty(_i5)) {
        pref_kin_list[_i5].checked = false;
      }
    }
  }
}

function change_chugoku() {
  if (pref_chugoku.checked) {
    for (var i in pref_chugoku_list) {
      if (pref_chugoku_list.hasOwnProperty(i)) {
        pref_chugoku_list[i].checked = true;
      }
    }
  } else {
    for (var _i6 in pref_chugoku_list) {
      if (pref_chugoku_list.hasOwnProperty(_i6)) {
        pref_chugoku_list[_i6].checked = false;
      }
    }
  }
}

function change_shi() {
  if (pref_shi.checked) {
    for (var i in pref_shi_list) {
      if (pref_shi_list.hasOwnProperty(i)) {
        pref_shi_list[i].checked = true;
      }
    }
  } else {
    for (var _i7 in pref_shi_list) {
      if (pref_shi_list.hasOwnProperty(_i7)) {
        pref_shi_list[_i7].checked = false;
      }
    }
  }
}

function change_kyu() {
  if (pref_kyu.checked) {
    for (var i in pref_kyu_list) {
      if (pref_kyu_list.hasOwnProperty(i)) {
        pref_kyu_list[i].checked = true;
      }
    }
  } else {
    for (var _i8 in pref_kyu_list) {
      if (pref_kyu_list.hasOwnProperty(_i8)) {
        pref_kyu_list[_i8].checked = false;
      }
    }
  }
}
/******/ })()
;