
//全選択・解除のチェックボックス
let pref_all = document.querySelector(".pref_all");

//全選択のチェックボックスのリスト
let pref_all_list = document.querySelectorAll(".pref_all_list");

//北海道・東北地方のチェックボックス
let pref_hoto = document.querySelector(".pref_hoto");

//北海道・東北地方のチェックボックスのリスト
let pref_hoto_list = document.querySelectorAll(".pref_hoto_list");

//関東地方のチェックボックス
let pref_kan = document.querySelector(".pref_kan");

//関東地方のチェックボックスのリスト
let pref_kan_list = document.querySelectorAll(".pref_kan_list");


// 全て選択のチェックボックスがクリックされた時
pref_all.addEventListener('click', () => {
    for(val of pref_all_list) {
        pref_all.checked == true ? val.checked = true : val.checked = false;
    }
});

// 個別のチェックボックスがクリックされた時
pref_all_list.forEach(element => {
    element.addEventListener('click', () => {
        // チェックが1つでも外された時
        if(element.checked == false) {
            pref_all.checked = false;
        }
        // 全てにチェックがされた時
        if(document.querySelectorAll('.pref_all_list:checked').length == pref_all_list.length) {
            pref_all.checked = true;
        }
    });
});

//東北
pref_hoto.addEventListener('click', () => {
    for(val of pref_hoto_list) {
        pref_hoto.checked == true ? val.checked = true : val.checked = false;
    }
});

pref_hoto_list.forEach(element => {
    element.addEventListener('click', () => {
        if(element.checked == false) {
            pref_hoto.checked = false;
        }
        if(document.querySelectorAll('.pref_hoto_list:checked').length == pref_hoto_list.length) {
            pref_hoto.checked = true;
        }
    });
});

//関東
pref_kan.addEventListener('click', () => {
    for(val of pref_kan_list) {
        pref_kan.checked == true ? val.checked = true : val.checked = false;
    }
});

pref_kan_list.forEach(element => {
    element.addEventListener('click', () => {
        if(element.checked == false) {
            pref_kan.checked = false;
        }
        if(document.querySelectorAll('.pref_kan_list:checked').length == pref_kan_list.length) {
            pref_kan.checked = true;
        }
    });
});
