
//全選択・解除のチェックボックス
let pref_all = document.querySelector(".pref_all");
//全選択のチェックボックスのリスト
let pref_list = document.querySelectorAll(".pref_all_list");

//北海道・東北地方のチェックボックス
let pref_hoto = document.querySelector(".pref_hoto");
//北海道・東北地方のチェックボックスのリスト
let pref_hoto_list = document.querySelectorAll(".pref_hoto_list");

//関東地方のチェックボックス
let pref_kan = document.querySelector(".pref_kan");
//関東地方のチェックボックスのリスト
let pref_kan_list = document.querySelectorAll(".pref_kan_list");

//中部地方のチェックボックス
let pref_chubu = document.querySelector(".pref_chubu");
//中部地方のチェックボックスのリスト
let pref_chubu_list = document.querySelectorAll(".pref_chubu_list");

//近畿地方のチェックボックス
let pref_kin = document.querySelector(".pref_kin");
//近畿地方のチェックボックスのリスト
let pref_kin_list = document.querySelectorAll(".pref_kin_list");

//中国地方のチェックボックス
let pref_chugoku = document.querySelector(".pref_chugoku");
//中国地方のチェックボックスのリスト
let pref_chugoku_list = document.querySelectorAll(".pref_chugoku_list");

//四国地方のチェックボックス
let pref_shi = document.querySelector(".pref_shi");
//四国地方のチェックボックスのリスト
let pref_shi_list = document.querySelectorAll(".pref_shi_list");

//九州地方のチェックボックス
let pref_kyu = document.querySelector(".pref_kyu");
//九州地方のチェックボックスのリスト
let pref_kyu_list = document.querySelectorAll(".pref_kyu_list");


//全選択のチェックボックスイベント
pref_all.addEventListener('change', change_all);

//北海道・東北地方のチェックボックスイベント
pref_hoto.addEventListener('change', change_hoto);

//関東地方のチェックボックスイベント
pref_kan.addEventListener('change', change_kan);

//中部地方のチェックボックスイベント
pref_chubu.addEventListener('change', change_chubu);

//近畿地方のチェックボックスイベント
pref_kin.addEventListener('change', change_kin);

//中国地方のチェックボックスイベント
pref_chugoku.addEventListener('change', change_chugoku);

//四国地方のチェックボックスイベント
pref_shi.addEventListener('change', change_shi);

//九州地方のチェックボックスイベント
pref_kyu.addEventListener('change', change_kyu);


function change_all() {
    //チェックされているか
    if(pref_all.checked) {
        for (let i in pref_list) {
            if(pref_list.hasOwnProperty(i)) {
                pref_list[i].checked = true;
            }
        }
    } else {
        //全て解除
        for (let i in pref_list) {
            if(pref_list.hasOwnProperty(i)) {
                pref_list[i].checked = false;
            }
        }
    }
}

function change_hoto() {
    if(pref_hoto.checked) {
        for (let i in pref_hoto_list) {
            if(pref_hoto_list.hasOwnProperty(i)) {
                pref_hoto_list[i].checked = true;
            }
        }
    } else {
        for (let i in pref_hoto_list) {
            if(pref_hoto_list.hasOwnProperty(i)) {
                pref_hoto_list[i].checked = false;
            }
        }
    }
}

function change_kan() {
    if(pref_kan.checked) {
        for (let i in pref_kan_list) {
            if(pref_kan_list.hasOwnProperty(i)) {
                pref_kan_list[i].checked = true;
            }
        }
    } else {
        for (let i in pref_kan_list) {
            if(pref_kan_list.hasOwnProperty(i)) {
                pref_kan_list[i].checked = false;
            }
        }
    }
}

function change_chubu() {
    if(pref_chubu.checked) {
        for (let i in pref_chubu_list) {
            if(pref_chubu_list.hasOwnProperty(i)) {
                pref_chubu_list[i].checked = true;
            }
        }
    } else {
        for (let i in pref_chubu_list) {
            if(pref_chubu_list.hasOwnProperty(i)) {
                pref_chubu_list[i].checked = false;
            }
        }
    }
}

function change_kin() {
    if(pref_kin.checked) {
        for (let i in pref_kin_list) {
            if(pref_kin_list.hasOwnProperty(i)) {
                pref_kin_list[i].checked = true;
            }
        }
    } else {
        for (let i in pref_kin_list) {
            if(pref_kin_list.hasOwnProperty(i)) {
                pref_kin_list[i].checked = false;
            }
        }
    }
}

function change_chugoku() {
    if(pref_chugoku.checked) {
        for (let i in pref_chugoku_list) {
            if(pref_chugoku_list.hasOwnProperty(i)) {
                pref_chugoku_list[i].checked = true;
            }
        }
    } else {
        for (let i in pref_chugoku_list) {
            if(pref_chugoku_list.hasOwnProperty(i)) {
                pref_chugoku_list[i].checked = false;
            }
        }
    }
}

function change_shi() {
    if(pref_shi.checked) {
        for (let i in pref_shi_list) {
            if(pref_shi_list.hasOwnProperty(i)) {
                pref_shi_list[i].checked = true;
            }
        }
    } else {
        for (let i in pref_shi_list) {
            if(pref_shi_list.hasOwnProperty(i)) {
                pref_shi_list[i].checked = false;
            }
        }
    }
}

function change_kyu() {
    if(pref_kyu.checked) {
        for (let i in pref_kyu_list) {
            if(pref_kyu_list.hasOwnProperty(i)) {
                pref_kyu_list[i].checked = true;
            }
        }
    } else {
        for (let i in pref_kyu_list) {
            if(pref_kyu_list.hasOwnProperty(i)) {
                pref_kyu_list[i].checked = false;
            }
        }
    }
}
