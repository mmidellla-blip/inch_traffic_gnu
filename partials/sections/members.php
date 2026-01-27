<?php
/**
 * partials/sections/members.php
 * 
 * main-members 섹션 (구성원)
 * DB 쿼리 의존성 있음 (g5_write_member)
 * 
 * 주의사항:
 * - get_file() 함수 사용
 * - slick 슬라이더 사용 (main.js에서 초기화)
 */
?>
<!-- 메인페이지 : 구성원 (25.04.28) -->
<section class="section main-members">
	<div class="inner">
		<section class="member-list">
			<div class="tit">
				<h5>음주운전 변호사 · 교통사고 변호사</h5>
				<p>음주운전 · 교통사고 분야 전문가들이 TF로 구성됩니다.</p>
			</div>
			<div class="slider-container">
				<button class="slider-nav prev" aria-label="Previous Slide"><</button>
				<button class="slider-nav next" aria-label="Next Slide">></button>
				<div class="slider-wrapper">
					<?php
					$sql = "select * from g5_write_member order by wr_1 asc";
					$result = sql_query($sql);

					while ($row = sql_fetch_array($result)) {
						$row['file'] = get_file("member", $row['wr_id']);
					?>
						<div class="slider-item">
							<a href="/page/lawyer_view.php?me_code=1020&wr_id=<?=$row['wr_id'];?>">
								<div class="img-wrap">
									<?php if ($row['file'][0]['view']) { ?>
										<img src="<?=$row['file'][0]['path'];?>/<?=$row['file'][0]['file'];?>" alt="" width="300" height="360" loading="lazy">
										<?php if ($row['wr_8'] != "") { ?>
										<span class="label"><?=$row['wr_8'];?></span>
										<?php } ?>
									<?php } ?>
								</div>
								<div class="txt-wrap">
									<span><strong><?=$row['wr_subject'];?></strong> <?=$row['wr_7'];?></span>
								</div>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</section>
	</div>
</section>
<!-- // 메인페이지 : 구성원 -->
