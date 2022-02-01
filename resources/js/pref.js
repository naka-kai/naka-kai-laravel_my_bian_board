
/**
 * チェックがついたかどうか
 */
//全選択・解除のチェックボックス
let pref_all = document.querySelector(".pref_all");

//全選択のチェックボックスのリスト
let pref_all_list = document.querySelectorAll(".pref_all_list");

//北海道のチェックボックス
let pref_hokk = document.querySelector(".pref_hokk");

//北海道のチェックボックスのリスト
let pref_hokk_list = document.querySelectorAll(".pref_hokk_list");

//東北地方のチェックボックス
let pref_toho = document.querySelector(".pref_toho");

//東北地方のチェックボックスのリスト
let pref_toho_list = document.querySelectorAll(".pref_toho_list");

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
let pref_chug = document.querySelector(".pref_chug");

//中国地方のチェックボックスのリスト
let pref_chug_list = document.querySelectorAll(".pref_chug_list");

//四国地方のチェックボックス
let pref_sik = document.querySelector(".pref_sik");

//四国地方のチェックボックスのリスト
let pref_sik_list = document.querySelectorAll(".pref_sik_list");

//九州地方のチェックボックス
let pref_kyu = document.querySelector(".pref_kyu");

//九州地方のチェックボックスのリスト
let pref_kyu_list = document.querySelectorAll(".pref_kyu_list");


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

//北海道の全て選択のチェックボックスがクリックされた時
pref_hokk.addEventListener('click', () => {
    for(val of pref_hokk_list) {
        pref_hokk.checked == true ? val.checked = true : val.checked = false;
    }
});

// 個別のチェックボックスがクリックされた時
pref_hokk_list.forEach(element => {
    element.addEventListener('click', () => {
        // チェックが1つでも外された時
        if(element.checked == false) {
            pref_hokk.checked = false;
        }
        // 全てにチェックがされた時
        if(document.querySelectorAll('.pref_hokk_list:checked').length == pref_hokk_list.length) {
            pref_hokk.checked = true;
        }
    });
});

//東北の全て選択のチェックボックスがクリックされた時
pref_toho.addEventListener('click', () => {
    for(val of pref_toho_list) {
        pref_toho.checked == true ? val.checked = true : val.checked = false;
    }
});

// 個別のチェックボックスがクリックされた時
pref_toho_list.forEach(element => {
    element.addEventListener('click', () => {
        // チェックが1つでも外された時
        if(element.checked == false) {
            pref_toho.checked = false;
        }
        // 全てにチェックがされた時
        if(document.querySelectorAll('.pref_toho_list:checked').length == pref_toho_list.length) {
            pref_toho.checked = true;
        }
    });
});

//関東の全て選択のチェックボックスがクリックされた時
pref_kan.addEventListener('click', () => {
    for(val of pref_kan_list) {
        pref_kan.checked == true ? val.checked = true : val.checked = false;
    }
});

// 個別のチェックボックスがクリックされた時
pref_kan_list.forEach(element => {
    element.addEventListener('click', () => {
        // チェックが1つでも外された時
        if(element.checked == false) {
            pref_kan.checked = false;
        }
        // 全てにチェックがされた時
        if(document.querySelectorAll('.pref_kan_list:checked').length == pref_kan_list.length) {
            pref_kan.checked = true;
        }
    });
});

//中部の全て選択のチェックボックスがクリックされた時
pref_chubu.addEventListener('click', () => {
    for(val of pref_chubu_list) {
        pref_chubu.checked == true ? val.checked = true : val.checked = false;
    }
});

// 個別のチェックボックスがクリックされた時
pref_chubu_list.forEach(element => {
    element.addEventListener('click', () => {
        // チェックが1つでも外された時
        if(element.checked == false) {
            pref_chubu.checked = false;
        }
        // 全てにチェックがされた時
        if(document.querySelectorAll('.pref_chubu_list:checked').length == pref_chubu_list.length) {
            pref_chubu.checked = true;
        }
    });
});

//近畿の全て選択のチェックボックスがクリックされた時
pref_kin.addEventListener('click', () => {
    for(val of pref_kin_list) {
        pref_kin.checked == true ? val.checked = true : val.checked = false;
    }
});

// 個別のチェックボックスがクリックされた時
pref_kin_list.forEach(element => {
    element.addEventListener('click', () => {
        // チェックが1つでも外された時
        if(element.checked == false) {
            pref_kin.checked = false;
        }
        // 全てにチェックがされた時
        if(document.querySelectorAll('.pref_kin_list:checked').length == pref_kin_list.length) {
            pref_kin.checked = true;
        }
    });
});

//中国の全て選択のチェックボックスがクリックされた時
pref_chug.addEventListener('click', () => {
    for(val of pref_chug_list) {
        pref_chug.checked == true ? val.checked = true : val.checked = false;
    }
});

// 個別のチェックボックスがクリックされた時
pref_chug_list.forEach(element => {
    element.addEventListener('click', () => {
        // チェックが1つでも外された時
        if(element.checked == false) {
            pref_chug.checked = false;
        }
        // 全てにチェックがされた時
        if(document.querySelectorAll('.pref_chug_list:checked').length == pref_chug_list.length) {
            pref_chug.checked = true;
        }
    });
});

//四国の全て選択のチェックボックスがクリックされた時
pref_sik.addEventListener('click', () => {
    for(val of pref_sik_list) {
        pref_sik.checked == true ? val.checked = true : val.checked = false;
    }
});

// 個別のチェックボックスがクリックされた時
pref_sik_list.forEach(element => {
    element.addEventListener('click', () => {
        // チェックが1つでも外された時
        if(element.checked == false) {
            pref_sik.checked = false;
        }
        // 全てにチェックがされた時
        if(document.querySelectorAll('.pref_sik_list:checked').length == pref_sik_list.length) {
            pref_sik.checked = true;
        }
    });
});

//九州の全て選択のチェックボックスがクリックされた時
pref_kyu.addEventListener('click', () => {
    for(val of pref_kyu_list) {
        pref_kyu.checked == true ? val.checked = true : val.checked = false;
    }
});

// 個別のチェックボックスがクリックされた時
pref_kyu_list.forEach(element => {
    element.addEventListener('click', () => {
        // チェックが1つでも外された時
        if(element.checked == false) {
            pref_kyu.checked = false;
        }
        // 全てにチェックがされた時
        if(document.querySelectorAll('.pref_kyu_list:checked').length == pref_kyu_list.length) {
            pref_kyu.checked = true;
        }
    });
});


/**
 * アコーディオン
 */
// $(function () {
//     $('.acd-area').click(function () {
//         $(this).next('.acd-prefs').slideToggle();
//         $(this).toggleClass("open");
//     });
// });

window.onload = function (e) {

    const acd_area = document.querySelectorAll(".acd-area")

    for (let i = 0; i < acd_area.length; i++) {
        acd_area[i].addEventListener("click", function toggle(event) {
            if (event.target.id == 'pref_hokk' || event.target.id == 'pref_toho' || event.target.id == 'pref_kan' || event.target.id == 'pref_chubu' || event.target.id == 'pref_kin' || event.target.id == 'pref_chug' || event.target.id == 'pref_sik' || event.target.id == 'pref_kyu') {
                const acd_prefs = this.nextElementSibling;
                this.classList.toggle("is-active");
                acd_prefs.classList.toggle("is-open");
            }
        });
    }
};

// const acd_area = document.querySelectorAll(".acd-area");
// const acd_prefs = document.querySelectorAll(".acd-prefs");

// for (let i = 0; i < acd_area.length; i++) {
//     acd_area[i].addEventListener("click", function () {
//         console.log('ok');
//         this.classList.toggle("active");
//         acd_prefs[i].classList.toggle("active");
//     });
// }
