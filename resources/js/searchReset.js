// console.log('ok');

//リセットボタンを押すと
document.addEventListener("DOMContentLoaded", function () {

    let reset_btn = document.getElementById('reset_btn');

    reset_btn.addEventListener('click', function () {
        // function clearFormAll() {
            for (let i = 0; i < document.forms.length; ++i) {
                // console.log('ok');
                clearForm(document.forms[i]);
            }
        // }

        function clearForm(form) {
            for (let i = 0; i < form.elements.length; ++i) {
                // console.log('ok');
                clearElement(form.elements[i]);
            }
        }

        function clearElement(element) {
            // console.log('ok');
            switch (element.type) {
                case "hidden":
                case "submit":
                case "reset":
                case "button":
                case "image":
                    return;

                case "file":
                    return;

                case "text":
                case "password":
                case "textarea":
                    element.value = "";

                    return;
                case "checkbox":
                case "radio":
                    element.checked = false;
                    return;

                case "select-one":
                case "select-multiple":
                    element.selectedIndex = 0;
                    return;

                default:
            }
        }
    });
});
