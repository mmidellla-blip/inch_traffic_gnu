<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/lawyer_view_case.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$gr_id ='member';
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<ul class="lawyer-case-list">
	<?php 
	$result=sql_query("select ca_name, wr_subject, wr_id, wr_content, wr_datetime, wr_id, wr_10, wr_1 from g5_write_case order by wr_id desc limit 52");
	for ($i=0; $list=sql_fetch_array($result); $i++){
	?>
	<li>
		<a href="/bbs/board.php?bo_table=case&wr_id=<?php echo $case['wr_id']?>">
			<?php echo cut_str($list['wr_subject'],100)?>
		</a>
	</li>
	<?php }if(!$result){?>
		<li class="no-data">등록된 게시물이 없습니다.</li>
	<?}?>
</ul>
