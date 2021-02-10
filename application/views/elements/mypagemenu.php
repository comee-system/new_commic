<?php
	$active1 = "";
	if(!empty($mypage) && $mypage == 1) $active1 = "active";
	$active2 = "";
	if(!empty($serial) && $serial == 1) $active2 = "active";
	$active3 = "";
	if(!empty($follow) && $follow == 1) $active3 = "active";
	$active4 = "";
	if(!empty($dashboards) && $dashboards == 1) $active4 = "active";
	$links = "mypage";
	$id = "";
	if(isset($creater) && $creater == 1){
		$links = "creater";
		$id = 1;
	}
?>
<div class="table-responsive mt-5 col-12 scroll_box">
	<table class="table mb-0">
		<tr>
			<td class="border border-0 links " nowrap>
			<a href="/<?=$links?>/<?=$id?>" class="<?=$active1?>" >作品一覧</a>
			</td>
			<td class="border border-0 links" nowrap>
			<a href="/<?=$links?>/serial/<?=$id?>" class="<?=$active2?>">連載一覧</a>
			</td>
			<td class="border border-0 links" nowrap>
			<a href="/<?=$links?>/dashboards/"  class="<?=$active4?>">ダッシュボード</a>
			</td>
			<td class="border border-0 links" nowrap>
			<a href="/<?=$links?>/follow/<?=$id?>" class="<?=$active3?>" >フォロー</a>
			</td>
			<?php if(empty($creater)): ?>
			<td class="border border-0 links" nowrap>
			<a href="">購入した記事</a>
			</td>
			<?php endif; ?>

			<td class="border border-0 links" nowrap>
			<a href="">Likeした記事</a>
			</td>
		</tr>
	</table>
</div>
