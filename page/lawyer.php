<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/lawyer.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "변호사 구성원";
$gr_id ='member';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

$sql = "select * from g5_write_member order by wr_1 asc";
$result = sql_query($sql);

?>

<?php 
$quick_menu_path = dirname(__FILE__).'/../partials/sections/quick-menu.php';
if (file_exists($quick_menu_path)) include_once($quick_menu_path);
?>

<!-- sub-conts-wrap -->
<section class="sub-conts-wrap">
	<h1 class="sub-conts-title"><span><?php echo $g5['title']; ?></span></h1>
	<section class="member-list">
		<ul>
			<?php
			while ($row = sql_fetch_array($result)) {
				$row['file'] = get_file("member", $row['wr_id']);
			?>		
			<li>
				<a href="/page/lawyer_view.php?me_code=1020&wr_id=<?=$row['wr_id'];?>">
					<div class="img-wrap"><?php
						if ($row['file'][0]['view']) {
							?>	
								<img src="<?=$row['file'][0]['path'];?>/<?=$row['file'][0]['file'];?>" alt="">
								<?php if( $row['wr_8'] != "")
								{ ?>
									<span><?=$row['wr_8'];?></span>
						    <?php } ?>
						<?php
							}
						?>
					</div>
					<div class="txt-wrap">
						<span><strong><?=$row['wr_subject'];?> </strong> <?=$row['wr_7'];?></span>
					</div>
				</a>
			</li>
				<?php
					}
				?>

		</ul>

<!--	
			<li>
				<a href="/page/lawyer_view01.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer01.jpg" alt=""><span>형사∙학교폭력 전문 변호사</span></div>
					<div class="txt-wrap">
						<span><strong>이세환</strong> 대표 변호사</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view02.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer02.jpg" alt=""><span>형사∙학교폭력 전문 변호사</span></div>
					<div class="txt-wrap">
						<span><strong>조원진</strong> 파트너 변호사</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view03.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer03.jpg" alt=""><span>이혼∙민사 전문 변호사</span></div>
					<div class="txt-wrap">
						<span><strong>이세진</strong> 파트너 변호사</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view04.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer04.jpg" alt=""><span>행정법 전문 변호사</span></div>
					<div class="txt-wrap">
						<span><strong>오서진</strong> 파트너 변호사</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view17.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer17.jpg" alt=""></div>
					<div class="txt-wrap">
						<span><strong>김윤서</strong> 파트너 변호사</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view05.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer05.jpg" alt=""></div>
					<div class="txt-wrap">
						<span><strong>이가은</strong> 변호사</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view06.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer06.jpg" alt=""></div>
					<div class="txt-wrap">
						<span><strong>오지현</strong> 변호사</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view07.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer07.jpg" alt=""></div>
					<div class="txt-wrap">
						<span><strong>김민정</strong> 변호사</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view08.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer08.jpg" alt=""></div>
					<div class="txt-wrap">
						<span><strong>김형문</strong> 변호사</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view09.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer09.jpg" alt=""></div>
					<div class="txt-wrap">
						<span><strong>이소정</strong> 변호사</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view10.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer10.jpg" alt=""></div>
					<div class="txt-wrap">
						<span><strong>조현수</strong> 변호사</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view11.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer11.jpg" alt=""></div>
					<div class="txt-wrap">
						<span><strong>최영인</strong> 변호사</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view12.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer12.jpg" alt=""></div>
					<div class="txt-wrap">
						<span><strong>김동윤</strong> 행정사 / 상담실장</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view13.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer13.jpg" alt=""></div>
					<div class="txt-wrap">
						<span><strong>조선익</strong> 수석전문심리위원 / 행정사</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view14.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer14.jpg" alt=""></div>
					<div class="txt-wrap">
						<span><strong>이형수</strong> 고문위원</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view15.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer15.jpg" alt=""></div>
					<div class="txt-wrap">
						<span><strong>오상기</strong> 고문</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/page/lawyer_view16.php?me_code=1020">
					<div class="img-wrap"><img src="/images/sub/lawyer16.jpg" alt=""></div>
					<div class="txt-wrap">
						<span><strong>변인화</strong> 전문위원</span>
					</div>
				</a>
			</li>
		</ul>
	-->
	</section>
</section>
<!-- //sub-conts-wrap -->

<?php
include_once('../_footer.php');
?>