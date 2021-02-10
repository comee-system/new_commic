//連載を作るクリック
const create = document.getElementById("create");
create?.addEventListener("click",event=>{
	//連載を作るページに遷移
	location.href="/mypage/write/";
});

//フォロワーのタブ表示切替
const tab1 = document.getElementById("tab1");
const tab2 = document.getElementById("tab2");
const followNav1 = document.getElementById("followNav1");
const followNav2 = document.getElementById("followNav2");
this.followButton(1);
followNav1?.addEventListener("click",event=>{
	followButton(1);
});
followNav2?.addEventListener("click",event=>{
	followButton(2);
});


function followButton(flg:number){
	followNav1?.classList.remove("btn","btn-primary");
	followNav2?.classList.remove("btn","btn-primary");

	if(flg === 1){
		tab1?.setAttribute("style","display:block");
		tab2?.setAttribute("style","display:none");
		followNav1?.classList.add("btn","btn-primary");
		followNav2?.classList.add("btn","btn-outline-primary");
	}
	if(flg === 2){
		tab1?.setAttribute("style","display:none");
		tab2?.setAttribute("style","display:block");
		followNav1?.classList.add("btn","btn-outline-primary");
		followNav2?.classList.add("btn","btn-primary");
	}
	return false;
}


