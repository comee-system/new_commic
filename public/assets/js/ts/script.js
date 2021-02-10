"use strict";
//連載を作るクリック
var create = document.getElementById("create");
create === null || create === void 0 ? void 0 : create.addEventListener("click", function (event) {
    //連載を作るページに遷移
    location.href = "/mypage/write/";
});
//フォロワーのタブ表示切替
var tab1 = document.getElementById("tab1");
var tab2 = document.getElementById("tab2");
var followNav1 = document.getElementById("followNav1");
var followNav2 = document.getElementById("followNav2");
this.followButton(1);
followNav1 === null || followNav1 === void 0 ? void 0 : followNav1.addEventListener("click", function (event) {
    followButton(1);
});
followNav2 === null || followNav2 === void 0 ? void 0 : followNav2.addEventListener("click", function (event) {
    followButton(2);
});
function followButton(flg) {
    followNav1 === null || followNav1 === void 0 ? void 0 : followNav1.classList.remove("btn", "btn-primary");
    followNav2 === null || followNav2 === void 0 ? void 0 : followNav2.classList.remove("btn", "btn-primary");
    if (flg === 1) {
        tab1 === null || tab1 === void 0 ? void 0 : tab1.setAttribute("style", "display:block");
        tab2 === null || tab2 === void 0 ? void 0 : tab2.setAttribute("style", "display:none");
        followNav1 === null || followNav1 === void 0 ? void 0 : followNav1.classList.add("btn", "btn-primary");
        followNav2 === null || followNav2 === void 0 ? void 0 : followNav2.classList.add("btn", "btn-outline-primary");
    }
    if (flg === 2) {
        tab1 === null || tab1 === void 0 ? void 0 : tab1.setAttribute("style", "display:none");
        tab2 === null || tab2 === void 0 ? void 0 : tab2.setAttribute("style", "display:block");
        followNav1 === null || followNav1 === void 0 ? void 0 : followNav1.classList.add("btn", "btn-outline-primary");
        followNav2 === null || followNav2 === void 0 ? void 0 : followNav2.classList.add("btn", "btn-primary");
    }
    return false;
}
