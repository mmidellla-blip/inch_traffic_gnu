<?php include('_common.php');?>
<!DOCTYPE html>
<html lang="ko">
<head>
	
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P8Q53R3V6W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-P8Q53R3V6W');
</script>

<meta charset="utf-8">
<?php
echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">'.PHP_EOL;
echo '<meta name="HandheldFriendly" content="true">'.PHP_EOL;
echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;

if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>
<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>

<title><?php echo $config['cf_title']; ?></title>
<link rel="stylesheet" type="text/css" href="/css/template.css" />
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<link rel="stylesheet" type="text/css" href="/css/swiper.css" />
<script src="/js/jquery-1.8.3.min.js"></script>
<script src="/js/jquery.fullPage.min.js"></script>
<script src="/js/slick.js"></script>
<script src="/js/swiper.js"></script>
<script src="/js/jquery.counterup.js"></script>
<script src="/js/main-case.js"></script>

<!-- 우클릭&드래그 금지 -->
<script type="text/javascript">
   document.oncontextmenu = function(){return false;}
</script>

<meta data-n-head="ssr" data-hid="description" name="description" content="음주운전변호사 법무법인 동주입니다. 음주운전 전문 상담을 통해 음주운전 사고 사건을 대처하세요. 음주운전 전문 변호사가 사건을 직접 진행합니다. 음주 사고, 음주운전 처벌, 음주운전 구제에 관한 정보를 지금 바로 확인하세요.">
<meta name="keywords" content="음주 면허 취소,음주운전 행정심판,음주운전 면허취소,행정소송,행정심판,행정법전문변호사,행정사,영업정지 구제, 행정처분">
<link rel="canonical" href="https://trafficdrinking-law-dongju.com/">
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta property="og:url" content="https://trafficdrinking-law-dongju.com">
<meta property="og:type" content="website">
<meta property="og:title" content="법무법인 동주 교통음주전담센터">
<meta property="og:description" content="음주운전변호사 법무법인 동주입니다. 음주운전 전문 상담을 통해 음주운전 사고 사건을 대처하세요. 음주운전 전문 변호사가 사건을 직접 진행합니다. 음주 사고, 음주운전 처벌, 음주운전 구제에 관한 정보를 지금 바로 확인하세요.">
<meta property="og:image" content="/images/common/ogimg-adm.png">

<link rel="apple-touch-icon" sizes="180x180" href="/images/common/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/common/favicon/favicon-32x32.png">
<link rel="icon" type="image/ico" sizes="16x16" href="/images/common/favicon/favicon.ico">
<link rel="manifest" href="/images/common/favicon/site.webmanifest">
<link rel="mask-icon" href="/images/common/favicon/safari-pinned-tab.svg" color="#877b77">
<meta name="msapplication-TileColor" content="#000000">
<meta name="theme-color" content="#ffffff">

</head>
<body class="index">
<meta name="naver-site-verification" content="8aca2004fc829309d2ad81a2bea09be81918272d" />

<!-- 요일별 모달 팝업 -->
<div id="weekendModal" class="modal">
	<div class="modal-content">
		<img src="/images/main/modal/upload.jpg" alt="주말팝업">
		<span class="modal-close">24시간 동안 보이지 않기 &times;</span>
	</div>
</div>
<!-- // 요일별 모달 팝업 -->

<!-- wrapper -->
<section id="wrapper">

	<?php include('_menu.php');?>
	<section class="quick-menu">
		<ul>
			<li><a href="/page/self_test.php?me_code=7010" target="_blank"><img src="/images/common/quick_icon_self.png" alt="">음주진단</a></li>
			<li><a href="tel:1522-3394" target="_blank"><img src="/images/common/quick_icon01.png" alt="">전화상담</a></li>
			<li><a href="https://pf.kakao.com/_Rpbxmxb/chat" target="_blank"><img src="/images/common/quick_icon02.png" alt="">카톡상담</a></li>
			<li><a href="/bbs/board.php?bo_table=online&me_code=6010"><img src="/images/common/quick_icon03.png" alt="">온라인 상담</a></li>
			<li><a href="/page/location.php?me_code=1040"><img src="/images/common/quick_icon04.png" alt="">오시는 길</a></li>
		</ul>
	</section>
	<!-- contents -->
	<section id="contents" class="main-contents">
		<!-- main-visual -->
		<section class="main-visual">
			<div class="main-menubg"></div>
			<div class="main-conts">
				<div class="main-box01">
					<!-- <div class="anony"><div class="anony_icon"></div>철저한 익명 보장 원칙</div>
					<h3>30분 이내 신속 답변 서비스</h3> -->
					<div class="copy">
						<div class="copy_icon"></div>
						<h5>철저한 익명 보장 원칙<br>30분 이내 신속 답변 서비스</h5>
					</div>
					<div class="space"></div>
					<a href="tel:1522-3394"><div class="telnum"><div class="telnum_icon"></div>1522-3394</div></a>
					<p>남겨 주신 문의 신속히 확인한 후<br>유선으로 안내해 드립니다.</p>
					<!-- <div class="telnum"><div class="telnum_icon"></div>1522-3394</div> -->
					<section class="online-form">
						<form action="<?php echo G5_URL ?>/_ok.php" method="post">
							<input type="hidden" name="wr_1" id="wr_1" value="<?php echo $write['wr_1'];?>">
							<input type="hidden" id="secret" name="secret" value="secret">
							<input type="hidden" id="gclid_field" name="gclid_field" value="gclid_field">
							<ul class="input-wrap">
								<li><label for="h_tel">연락처</label><input class="sec07_input" type="tel" name="h_tel" id="h_tel" placeholder="연락처를 입력하세요." required/></li>
								<li class="full"><label for="wr_content">내용</label><textarea name="wr_content" id="wr_content" cols="30" rows="10" placeholder="내용을 입력하세요."></textarea></li>
								<li><input type="checkbox" id="chk" required/><label for="chk">개인정보 수집동의</label><a href="#">자세히보기</a></li>
							</ul>
							<p class="btn-wrap"><button id='submit_btn'>상담신청</button></p>
							<section class="privacy-pop">
								<h2>개인정보 수집 및 이용안내</h2>
								<section class="pop-inner">
									<p>법무법인 동주는 아래와 같은 개인정보 처리방침을 수립·시행하고 있습니다.<br><br>
									<strong>개인정보의 처리 목적</strong><br>
									법률 상담 등 법률서비스 제공 및 그 이용 권유, 각종 서비스 안내, 고객이 의뢰한 사건의 처리, 고객과 관련된 사건의 처리를 함에 있어 필요한 연락 및 기타 필요한 정보의 제공<br><br>
									<strong>처리하는 개인정보의 항목</strong><br>
									성명, 연락처(전화번호), 이메일, 주소, 생년월일, 기타 고객을 위하여 또는 고객과 관련하여 수행하는 서비스 및 거래관계의 설정.유지.이행.관리 과정에서 생성되었거나 제공받은 정보<br><br>
									<strong>개인정보의 처리 및 보유 기간</strong><br>
									위 목적 달성 시까지 필요한 기간, 또는 고객의 동의 철회 시까지<br><br>
									<strong>개인정보의 파기절차 및 파기방법</strong><br>
									1) 개인정보 수집 및 이용목적이 달성되어 그 개인정보가 불필요하게 되었을 때 지체없이 개인정보 파기<br>
									2) 파기방법 : 인쇄물의 경우 파쇄, 전자적 파일형태의 개인정보는 재생할 수 없는 기술적 방법을 사용하여 영구삭제<br><br>
									<strong>정보주체의 권리ㆍ의무 및 그 행사방법에 관한 사항</strong><br>
									정보주체는 개인정보보호법 등 관계법령이 정하는 바에 따라 개인정보의 열람, 정정 및 삭제, 처리정지 요구 등 개인정보 보호관련 권리를 행사할 수 있음<br><br>
									<strong>개인정보의 안전성 확보조치</strong> <br>
									1) 관리적 조치 : 내부관리계획 수립․시행, 직원․종업원 등에 대한 정기적 교육 <br>
									2) 기술적 조치 : 개인정보처리시스템(또는 개인정보가 저장된 컴퓨터)의 비밀번호 설정 등 접근권한 관리, 백신소프트웨어 등 보안프로그램 설치, 개인정보가 저장된 파일의 암호화 <br>
									3) 물리적 조치 : 개인정보가 저장․보관된 장소의 시건, 출입통제 등 <br><br>
									</p>
								</section>
								<a href="#" class="pop-close">개인정보수집및이용안내닫기</a>
							</section>
						</form>
					</section>
				</div>
				<div class="main-area01">
					<div class="m-copy m-copy02">
						<div class="m-copy_icon"></div>
						<h5>형사부터 행정까지<br>음주운전 ONE-STOP 구제</h5>
					</div>
					<div class="main-box02">
						<div class="box02_list box02-1">
							<div class="box02-icon"></div>
							<h5>경찰조사 시뮬레이션 등<br>단계별 맞춤 서비스</h5>
						</div>
						<div class="box02_list box02-2">
							<div class="box02-icon"></div>
							<h5>대표/파트너변호사가<br>직접 상담 진행</h5>
						</div>
						<div class="box02_list box02-3">
							<div class="box02-icon"></div>
							<h5>개인이 아닌<br>'로이어팀'이 조력</h5>
						</div>
						<div class="box02_list box02-4">
							<div class="box02-icon"></div>
							<h5>형사/행정<br>'분야별' 연구팀</h5>
						</div>
					</div>

					<div class="m-copy m-copy03">
						<div class="m-copy_icon"></div>
						<h5>10년 이상 경력의<br>음주전문변호사 구성</h5>
					</div>
					<div class="main-box03">
						<div class="box03_list box03-1">
							<div class="profile">
								<div class="profile-name">
									<p><strong>박동진 </strong>대표변호사</p>
								</div>
								<div class="profile-career">
									<p>前 서울중앙지방검찰청 부장검사<br>前 부산지방검찰청 부장검사<br>前 대전지방검찰청 부장검사</p>
								</div>
							</div>
						</div>
						<div class="box03_list box03-2">
							<div class="profile">
								<div class="profile-name">
									<p><strong>이세환 </strong>대표변호사</p>
								</div>
								<div class="profile-career">
									<p>대한변호사협회 형사법 전문변호사<br>대한변호사협회 대의원<br>수원남부경찰서 수사민원상담변호사</p>
								</div>
							</div>
						</div>
						<div class="box03_list box03-3">
							<div class="profile">
								<div class="profile-name">
									<p><strong>조원진 </strong>파트너변호사</p>
								</div>
								<div class="profile-career">
									<p>대한변호사협회 형사법 전문변호사<br>대법원 국선변호인<br>해군본부 군검찰 국선변호인</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--//main-visual -->
		<!-- main-counselling-wrap -->
		<section class="section main-counselling-wrap">
			<section class="main-counselling">
				<div class="inner">
					<section class="main-conts-tit-wrap">
						<h2><span>Counselling</span>수임보다는 ‘<em>상담</em>’이 먼저입니다.</h2>
						<p><strong>‘동주’</strong>는 충분히 사건을 파악하고 검토한 후 의뢰인에게 이익이 될 때 수임을 제안드립니다.</p>
					</section>
					<section class="main-counselling-box">
						<ul>
							<li><span class="icon"><img src="/images/main/main_counselling_icon01.png" alt=""></span>평일·주말 <strong>24시간</strong><br>긴급상담 가능</li>
							<li><span class="icon"><img src="/images/main/main_counselling_icon02.png" alt=""></span>대표/파트너변호사가 <br><strong>직접 상담 진행</strong></li>
							<li><span class="icon"><img src="/images/main/main_counselling_icon03.png" alt=""></span>개인이 아닌  <br><strong>‘로이어팀’이 조력</strong></li>
							<li><span class="icon"><img src="/images/main/main_counselling_icon04.png" alt=""></span>분야별 <br><strong>‘진짜’ 전문 자문단</strong></li>
						</ul>
					</section>
				</div>
			</section>
			<section class="main-online">
				<div class="inner">
					<section class="main-conts-tit-wrap">
						<h2><span>Lawfirm Dongju</span>30분 내 <em>신속 답변 서비스</em></h2>
						<p>모든 문의는 신속히 확인하여 유선으로 안내해 드립니다.<br>영업시간 외 문의 역시 빠르게 안내 받으실 수 있습니다.</p>
						<dl>
							<dt><img src="/images/main/icon_clock.png" alt=""><strong>24시간 언제나</strong> 상담 가능</dt>
							<dd>주말 : 토요일 방문상담 가능</dd>
						</dl>
					</section>
					<section class="online-form">
						<form action="<?php echo G5_URL ?>/_ok.php" method="post">
							<input type="hidden" name="wr_1" id="wr_1" value="<?php echo $write['wr_1'];?>">
							<input type="hidden" id="secret" name="secret" value="secret">
							<input type="hidden" id="gclid_field" name="gclid_field" value="gclid_field">
							<ul class="input-wrap">
								<li><label for="h_tel">연락처</label><input class="sec07_input" type="tel" name="h_tel" id="h_tel" placeholder="연락처를 입력하세요." required/></li>
								<li>
									<label for="wr_5">분류</label>
									<select CLASS="sec07_input" name="wr_5" id="wr_5" placeholder="분류를 입력하세요." required>
										<option>상담분야를 선택해 주세요.</option>
										<option value="음주 행정심판">음주 행정심판</option>
										<option value="음주 형사처벌">음주 형사처벌</option>
										<option value="일반 교통범죄">일반 교통범죄</option>								
									</select>
								</li>
								<li class="full"><label for="wr_content">내용</label><textarea name="wr_content" id="wr_content" cols="30" rows="10" placeholder="내용을 입력하세요."></textarea></li>
								<li><input type="checkbox" id="chk" required/><label for="chk">개인정보 수집동의</label><a href="#">자세히보기</a></li>
							</ul>
							<p class="btn-wrap"><button id='submit_btn'>상담신청</button></p>
							<section class="privacy-pop">
								<h2>개인정보 수집 및 이용안내</h2>
								<section class="pop-inner">
									<p>법무법인 동주는 아래와 같은 개인정보 처리방침을 수립·시행하고 있습니다.<br><br>
									<strong>개인정보의 처리 목적</strong><br>
									법률 상담 등 법률서비스 제공 및 그 이용 권유, 각종 서비스 안내, 고객이 의뢰한 사건의 처리, 고객과 관련된 사건의 처리를 함에 있어 필요한 연락 및 기타 필요한 정보의 제공<br><br>
									<strong>처리하는 개인정보의 항목</strong><br>
									성명, 연락처(전화번호), 이메일, 주소, 생년월일, 기타 고객을 위하여 또는 고객과 관련하여 수행하는 서비스 및 거래관계의 설정.유지.이행.관리 과정에서 생성되었거나 제공받은 정보<br><br>
									<strong>개인정보의 처리 및 보유 기간</strong><br>
									위 목적 달성 시까지 필요한 기간, 또는 고객의 동의 철회 시까지<br><br>
									<strong>개인정보의 파기절차 및 파기방법</strong><br>
									1) 개인정보 수집 및 이용목적이 달성되어 그 개인정보가 불필요하게 되었을 때 지체없이 개인정보 파기<br>
									2) 파기방법 : 인쇄물의 경우 파쇄, 전자적 파일형태의 개인정보는 재생할 수 없는 기술적 방법을 사용하여 영구삭제<br><br>
									<strong>정보주체의 권리ㆍ의무 및 그 행사방법에 관한 사항</strong><br>
									정보주체는 개인정보보호법 등 관계법령이 정하는 바에 따라 개인정보의 열람, 정정 및 삭제, 처리정지 요구 등 개인정보 보호관련 권리를 행사할 수 있음<br><br>
									<strong>개인정보의 안전성 확보조치</strong> <br>
									1) 관리적 조치 : 내부관리계획 수립․시행, 직원․종업원 등에 대한 정기적 교육 <br>
									2) 기술적 조치 : 개인정보처리시스템(또는 개인정보가 저장된 컴퓨터)의 비밀번호 설정 등 접근권한 관리, 백신소프트웨어 등 보안프로그램 설치, 개인정보가 저장된 파일의 암호화 <br>
									3) 물리적 조치 : 개인정보가 저장․보관된 장소의 시건, 출입통제 등 <br><br>
									</p>
								</section>
								<a href="#" class="pop-close">개인정보수집및이용안내닫기</a>
							</section>
						</form>
					</section>
					<section  class="main-online-list">
						<h2>상담신청 현황</h2>
<ul>
							<?php 
								$result=sql_query("select wr_subject, wr_name, wr_id, wr_2, wr_3, wr_5, ca_name, wr_datetime from g5_write_online order by wr_id desc limit 6");
								for ($i=0; $online=sql_fetch_array($result); $i++){
							?>
							<?php if($online['wr_name']== "") 
								$online['wr_name'] = "신속"; 
								?>
							<li>
								<a href="/bbs/board.php?bo_table=online&wr_id=<?php echo $online['wr_id']?>">
									<ul>
										<li class="date"><?php echo date("Y.m.d", strtotime($online['wr_datetime']))?></li>
										<?php if($online['wr_name'] != "신속") { ?>
										<li class="subject"><?php echo cut_str($online['wr_name'],1,'**')?></li>
										<?php } else { ?>
										<li class="subject"><?php echo $online['wr_name'] ?></li>
										<?php } ?>
										<li class="cate"><?php echo $online['wr_5']?></li>
										<li class="type"><span class="<?php if($online['wr_2'] == "접수완료"){ echo "progress ing"; } else if($online['wr_2'] == "상담중") { echo "progress";} else if($online['wr_2'] == "상담완료"){ echo "progress end";}?>"><?php echo cut_str($online['wr_2'],4) ?></span></li>
									</ul>
								</a>
							</li>
							<?php }if(!$result){?>
								<li class="no-data">등록된 게시물이 없습니다.</li>
							<?}?>
						</ul>
					</section>
				</div>
			</section>
		</section>
		<!--//main-counselling-wrap -->
		
		<!-- main-review -->
		<section class="section main-review">
			<div class="inner">
				<section class="main-conts-tit-wrap">
					<h2><span>Client Review</span>의뢰인의 진짜 후기가 입증하는 동주의 실력</h2>
					<p>동주는 의뢰인에게 이익이 될 때만 수임을 제안 드립니다. 그리고 결과로 입증합니다.</p>
				</section>
				<!-- <h5>동주는 의뢰인에게 이익이 될 때만 수임을 제안 드립니다. 그리고 결과로 입증합니다.</h5> -->
				<div class="main-review-list">
					<?php 
					include_once(G5_LIB_PATH.'/thumbnail.lib.php');
					// 썸네일 크기 설정
					$thumb_width = '350';    //썸네일 넓이
					$thumb_height = '220';    //썸네일 높이

					$result=sql_query("select ca_name, wr_subject, wr_id, wr_content, wr_datetime, wr_id, wr_10, wr_1 from g5_write_review order by wr_id desc limit 12");
					for ($i=0; $list=sql_fetch_array($result); $i++){
					?>
					<div class="main-review-slide">
						<a href="/bbs/board.php?bo_table=review&wr_id=<?php echo $list['wr_id']?>">
							<div class="thumb">
							<?php 
								$thumb = get_list_thumbnail("review", $list['wr_id'], $thumb_width, $thumb_height); // 썸네일 크기를 위에서 선언한 크기사용

								if($thumb['src']) {
									$img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
								} else {
									$img_content = '<span>no image</span>';
								}
								echo $img_content;
							 ?>
							</div>
							 <div class="conts-wrap">
								<div class="cate"><?php echo $list['ca_name']?></div>
								<span class="subject"><?php echo cut_str($list['wr_subject'],100)?></span>
								<?php
								$list['wr_content'] = str_replace("BODY CONTENT","",$list['wr_content']);
								$list['wr_content'] = str_replace("본문 내용","",$list['wr_content']);
								$list['wr_content'] = preg_replace("/<(.*?)\>/"," ",$list['wr_content']); 
								$list['wr_content'] = preg_replace("/&nbsp;/"," ",$list['wr_content']); 
								$list['wr_content'] = str_replace("//##", " ", $list['wr_content']); 
								$list['wr_content'] = strip_tags($list['wr_content'], "<p>"); 
								?>
								<div class="bo-content"><?php echo conv_content($list['wr_content'], 10); ?></div>
							</div>
						</a>
					</div>
					<?php }if(!$result){?>
						<div class="no-data">등록된 게시물이 없습니다.</div>
					<?}?>
				</div>
				<a href="/bbs/board.php?bo_table=review&me_code=2010" class="view-more">View more<img src="/images/main/case_more.png" alt=""></a>
			</div>
		</section>
		<!--//main-review -->
		<!-- main-media -->
		<section class="section main-media">
			<div class="inner">
				<section class="main-conts-tit-wrap">
					<h2><span>Media</span>법무법인 동주의 실력과 전문성</h2>
					<p>다양한 언론사로부터 인정받고 있습니다.</p>
				</section>
				<div class="main-media-list">
					<?php 
					include_once(G5_LIB_PATH.'/thumbnail.lib.php');
					// 썸네일 크기 설정
					$thumb_width = '380';    //썸네일 넓이
					$thumb_height = '240';    //썸네일 높이

					$result=sql_query("select ca_name, wr_subject, wr_id, wr_content, wr_datetime, wr_id, wr_10, wr_1 from g5_write_media order by wr_id desc limit 12");
					for ($i=0; $list=sql_fetch_array($result); $i++){
					?>
					<div class="main-media-slide">
						<a href="/bbs/board.php?bo_table=media&wr_id=<?php echo $list['wr_id']?>">
							<div class="thumb">
							<?php 
								$thumb = get_list_thumbnail("media", $list['wr_id'], $thumb_width, $thumb_height); // 썸네일 크기를 위에서 선언한 크기사용

								if($thumb['src']) {
									$img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
								} else {
									$img_content = '<span>no image</span>';
								}
								echo $img_content;
							 ?>
							 <span class="icon"><img src="/images/main/thumb_icon.png" alt=""></span>
							</div>
							 <div class="conts-wrap">
							 	
								<span class="subject"><?php echo cut_str($list['wr_subject'],100)?></span>
								<?php
								$list['wr_content'] = str_replace("BODY CONTENT","",$list['wr_content']);
								$list['wr_content'] = str_replace("본문 내용","",$list['wr_content']);
								$list['wr_content'] = strip_tags($list['wr_content'], "<p>"); 
								?>
								<div class="bo-content"><?php echo conv_content($list['wr_content'], 10); ?></div>
							</div>
						</a>
					</div>
					<?php }if(!$result){?>
						<div class="no-data">등록된 게시물이 없습니다.</div>
					<?}?>
				</div>
				<a href="/bbs/board.php?bo_table=media&me_code=2010" class="view-more">View more<img src="/images/main/case_more_w.png" alt=""></a>
			</div>
		</section>
		<!--//main-media -->

		<!-- 메인페이지 : 구성원 (25.04.28) -->
		<section class="section main-members">
			<div class="inner">
				<section class="member-list">
					<div class="tit">
						<h5>음주운전 변호사 · 교통사고 변호사</h5>
						<p>음주운전 · 교통사고 분야 전문가들이 TF로 구성됩니다.</p>
					</div>
					<div class="slider-container">
						<button class="slider-nav prev" aria-label="Previous Slide">←</button>
						<button class="slider-nav next" aria-label="Next Slide">→</button>
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
										<img src="<?=$row['file'][0]['path'];?>/<?=$row['file'][0]['file'];?>" alt="">
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


		<!-- main-case -->
		<section class="section main-case">
			<h3>대표 성공사례를 확인해보세요</h3>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<a href="/bbs/board.php?bo_table=case&wr_id=77" class="swiper-slide"><img src="/images/main/main-case/main-case-01.jpg" alt="교통음주대표사례01"></a>
					<a href="/bbs/board.php?bo_table=case&wr_id=90" class="swiper-slide"><img src="/images/main/main-case/main-case-02.jpg" alt="교통음주대표사례02"></a>
					<a href="/bbs/board.php?bo_table=case&wr_id=72" class="swiper-slide"><img src="/images/main/main-case/main-case-03.jpg" alt="교통음주대표사례03"></a>
					<a href="/bbs/board.php?bo_table=case&wr_id=83" class="swiper-slide"><img src="/images/main/main-case/main-case-04.jpg" alt="교통음주대표사례04"></a>
					<a href="/bbs/board.php?bo_table=case&wr_id=76" class="swiper-slide"><img src="/images/main/main-case/main-case-05.jpg" alt="교통음주대표사례05"></a>
					<a href="/bbs/board.php?bo_table=case&wr_id=53" class="swiper-slide"><img src="/images/main/main-case/main-case-06.jpg" alt="교통음주대표사례06"></a>
					<a href="/bbs/board.php?bo_table=case&wr_id=44" class="swiper-slide"><img src="/images/main/main-case/main-case-07.jpg" alt="교통음주대표사례07"></a>
					<a href="/bbs/board.php?bo_table=case&wr_id=40" class="swiper-slide"><img src="/images/main/main-case/main-case-08.jpg" alt="교통음주대표사례08"></a>
				</div>
			</div>
			<div class="case-link"><a href="/bbs/board.php?bo_table=case&me_code=3010">더 많은 성공사례 알아보기</a></div>
		</section>
		<!--//main-case -->

		<!-- main-center -->
		<section class="section main-center">
			<div class="inner">
				<h2>법무법인 동주 <br>업무분야</h2>
				<ul>
					<li><a href="https://criminal-law-dongju.com" target="_blank"><div>형사</div></a></li>
					<li><a href="https://sexcrimecenter-dongju.com" target="_blank"><div>성범죄</div></a></li>
					<li><a href="https://student-tomolaw.com" target="_blank"><div>청소년범죄/학폭</div></a></li>
					<li><a href="https://trafficdrinking-law-dongju.com" target="_blank"><div>교통음주</div></a></li>
					<li><a href="https://fraudembezzlement-dongju.com" target="_blank"><div>사기횡령</div></a></li>
					<li><a href="https://dongju-criminal-victim.com" target="_blank"><div>고소대리</div></a></li>
					<li><a href="https://foreign-law-dongju.com" target="_blank"><div>외국인</div></a></li>
					<li><a href="https://divorce-law-dongju.com" target="_blank"><div>이혼/상속</div></a></li>
					<li><a href="https://oneclick-law-dongju.com" target="_blank"><div>원클릭</div></a></li>

				</ul>
			</div>
		</section>
		<!--//main-center -->

		<!-- main-location -->
		<section class="section main-location">
			<div class="inner">
				<div class="txt-wrap">
					<h2><span>Contact US</span>오시는 길</h2>
					<!-- 탭 -->
					<ul class="main-location-tab">
						<li class="on"><a href="#">서울사무소</a></li>
						<li><a href="#">수원사무소</a></li>
						<li><a href="#">인천사무소</a></li>
					</ul>
					<!-- 사무소 정보 -->
					<section class="location-address-wrap">
						<!-- 서울사무소 -->
						<dl class="on">
							<dt>주소</dt>
							<dd>서울 서초구 서초중앙로 123 (서초동), 13층 (서초동, 엘렌타워)</dd>
							<dt>TEL.</dt>
							<dd><strong>1522-3394</strong></dd>
							<dt>FAX.</dt>
							<dd><span>02-523-7260</span></dd>
						</dl>
						<!-- 수원사무소 -->
						<dl>
							<dt>주소</dt>
							<dd>수원시 영통구 광교중앙로248번길 7-2, B동 902-903호(하동, 원희캐슬광교)</dd>
							<dt>TEL.</dt>
							<dd><strong>1522-3394</strong></dd>
							<dt>FAX.</dt>
							<dd><span>031-216-1160</span></dd>
						</dl>
						<!-- 인천사무소 -->
						<dl>
							<dt>주소</dt>
							<dd>인천시 미추홀구 학익소로 66, 403-404호(학익동, 선정빌딩)</dd>
							<dt>TEL.</dt>
							<dd><strong>1522-3394</strong></dd>
							<dt>FAX.</dt>
							<dd><span>032-719-4059</span></dd>
						</dl>
					</section>
				</div>
				<!-- 지도 -->
				<div class="location-map-wrap">
					<!-- 서울사무소 -->
					<div class="map-box on">
						<a href="http://kko.to/dBj8nGkHz" target="_blank" class="map-view"><img src="/images/main/icon_map.png" alt=""><span>카카오맵 보기</span></a>
						<img src="/images/main/main-location/map01.jpg" alt="서울사무소">
						<div>출처 : <img src="/images/main/main-location/logo-kakao.png" alt="카카오맵"></div>
					</div>
					<!-- 수원사무소 -->
					<div class="map-box">
						<a href="http://kko.to/2tQ_xcEhY" target="_blank" class="map-view"><img src="/images/main/icon_map.png" alt=""><span>카카오맵 보기</span></a>
						<img src="/images/main/main-location/map03.jpg" alt="수원사무소">
						<div>출처 : <img src="/images/main/main-location/logo-kakao.png" alt="카카오맵"></div>
					</div>
					<!-- 인천사무소 -->
					<div class="map-box">
						<a href="http://kko.to/R_cP-PPp4" target="_blank" class="map-view"><img src="/images/main/icon_map.png" alt=""><span>카카오맵 보기</span></a>
						<img src="/images/main/main-location/map04.jpg" alt="인천사무소">
						<div>출처 : <img src="/images/main/main-location/logo-kakao.png" alt="카카오맵"></div>
					</div>
				</div>
				<!-- 사무소 사진 -->
				<div class="lawfirm-interior-wrap">
					<!-- 서울사무소 -->
					<div class="lawfirm-interior-box on">
						<div class="interior-slide"><img src="/images/main/interior1_01.jpg" alt=""></div>
						<div class="interior-slide"><img src="/images/main/interior1_02.jpg" alt=""></div>
						<div class="interior-slide"><img src="/images/main/interior1_03.jpg" alt=""></div>
						<div class="interior-slide"><img src="/images/main/interior1_04.jpg" alt=""></div>
						<div class="interior-slide"><img src="/images/main/interior1_05.jpg" alt=""></div>
						<div class="interior-slide"><img src="/images/main/interior1_06.jpg" alt=""></div>
						<div class="interior-slide"><img src="/images/main/interior1_07.jpg" alt=""></div>
						<div class="interior-slide"><img src="/images/main/interior1_08.jpg" alt=""></div>
						<div class="interior-slide"><img src="/images/main/interior1_09.jpg" alt=""></div>
						<div class="interior-slide"><img src="/images/main/interior1_10.jpg" alt=""></div>
					</div>
					<!-- 수원 사무소 -->
					<div class="lawfirm-interior-box">
						<div class="interior-slide"><img src="/images/main/interior2_01.jpg" alt=""></div>
						<div class="interior-slide"><img src="/images/main/interior2_02.jpg" alt=""></div>
						<div class="interior-slide"><img src="/images/main/interior2_03.jpg" alt=""></div>
						<div class="interior-slide"><img src="/images/main/interior2_04.jpg" alt=""></div>
					</div>
					<!-- 인천 사무소 -->
					<div class="lawfirm-interior-box">
						<div class="interior-slide"><img src="/images/main/interior3_01.jpg" alt=""></div>
						<div class="interior-slide"><img src="/images/main/interior3_02.jpg" alt=""></div>
						<div class="interior-slide"><img src="/images/main/interior3_03.jpg" alt=""></div>
						<div class="interior-slide"><img src="/images/main/interior3_04.jpg" alt=""></div>
					</div>
				</div>
				<ul class="hashtag">
					<li>#Lawfirm</li>
					<li>#DongJu</li>
				</ul>
			</div>
		</section>
		<!--//main-location -->

		<script>

			$(".main-visual-wrap").slick({
				slide: 'div',	
				fade: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				autoplay: true,
				autoplaySpeed: 4000,
				speed: 1000,
				dots: true,
				/*
				dotsClass: 'custom_paging',
				customPaging: function (slider, i) {
					console.log(slider);
					return  "<strong>" + (i + 1) + "</strong>" + '/' + slider.slideCount;
				}
				*/
			  responsive: [
				{
				  breakpoint: 1200,
				  settings: {
					slide: 'div',	
					fade: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					autoplay: true,
					autoplaySpeed: 4000,
					speed: 1000,
					dots: true,
				  }
				}
			  ]
			});
	
		$(".main-location-tab li").on("click",function() {
			var tabnum = $(this).index();
			$(".main-location-tab li").removeClass("on");
			$(this).addClass("on");
			$(".location-map-wrap>div").removeClass("on");
			$(".main-location .location-address-wrap dl").removeClass("on");
			$(".lawfirm-interior-wrap>div").removeClass("on");
			$(".location-map-wrap>div").eq(tabnum).addClass("on");
			$(".main-location .location-address-wrap dl").eq(tabnum).addClass("on");
			$(".lawfirm-interior-wrap>div").eq(tabnum).addClass("on");
			return false;
		});

		$(".lawfirm-interior-box").slick({
			infinite: false,
			dots: false,
			slide: 'div',	
			slidesToShow: 2,
			slidesToScroll: 2,
			arrows: true,
			autoplay: false,
			speed: 300,
			  responsive: [
				{
				  breakpoint: 950,
				  settings: {
					infinite: false,
					arrows: true,
					dots: false,
					slidesToShow: 1,
					slidesToScroll: 1,
				  }
				}
			  ]
		});

		$(".main-lawyer .member-list").slick({
			infinite: false,
			dots: false,
			slide: 'div',	
			slidesToShow: 4,
			slidesToScroll: 1,
			arrows: true,
			// autoplay: 2000,
			speed: 300,
			variableWidth: true,
			adaptiveHeight: true,
			dots: true,
			  responsive: [
				{
				  breakpoint: 1200,
				  settings: {
					infinite: false,
					arrows: true,
					dots: false,
					slidesToShow: 1,
					slidesToScroll: 1,
				  }
				}
			  ]
		});

		$(".main-review-list").slick({
			infinite: false,
			dots: false,
			slide: 'div',	
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: true,
			autoplay: false,
			variableWidth: true,
			speed: 300,
			  responsive: [
				{
				  breakpoint: 1200,
				  settings: {
					infinite: false,
					arrows: false,
					dots: false,
					slidesToShow: 1,
					slidesToScroll: 1,
				  }
				}
			  ]
		});

		$(".main-case-list").slick({
			infinite: false,
			dots: false,
			slide: 'div',	
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: true,
			autoplay: false,
			speed: 300,
			variableWidth: true,
		});

		$(".main-media-list").slick({
			infinite: false,
			dots: true,
			slide: 'div',	
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: true,
			autoplay: false,
			speed: 300,
			variableWidth: true,
		});

		  $(".online-form .input-wrap li a").click(function(e){
			e.preventDefault();
			$(".privacy-pop").show();
		  });
		  $(".privacy-pop .pop-close").click(function(e){
			e.preventDefault();
			$(".privacy-pop").hide();
		  });

		$(window).scroll(function(){
			if ($(window).scrollTop() >= 50) {
			   $('#header').addClass('fixed');
			}
			else {
			   $('#header').removeClass('fixed');
			}
		});
			
		function numberCounter(target_frame, target_number) {
			this.count = 0; this.diff = 0;
			this.target_count = parseInt(target_number);
			this.target_frame = document.getElementById(target_frame);
			this.timer = null;
			this.counter();
		};
		numberCounter.prototype.counter = function() {
			var self = this;
			this.diff = this.target_count - this.count;
			 
			if(this.diff > 0) {
				self.count += Math.ceil(this.diff / 50);
			}
			 
			this.target_frame.innerHTML = this.count.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
			 
			if(this.count < this.target_count) {
				this.timer = setTimeout(function() { self.counter(); }, 15);
			} else {
				clearTimeout(this.timer);
			}
		};

		new numberCounter("counter1", 1071);
		new numberCounter("counter2", 80);

		//비디오 팝업
		function onVideoLayer(youtubeCODE) { //실행
			var videoURL = '//www.youtube.com/embed/'+ youtubeCODE +'?rel=0&amp;autoplay=1&amp;vq=hd720';
			var playViewer = '<iframe src="'+videoURL+'" id="youTube" allowfullscreen="" frameborder="0"></iframe>';

			$('.youtube-box .fake-img').hide();
			$('.youtube-box .frame').addClass('active');
			$('.youtube-box .frame').append(playViewer);
		}
		</script>
		<!-- 요일별 모달 팝업 -->
		<script>
			const today = new Date();
			const dayOfWeek = today.getDay(); // 0: 일요일, 1: 월요일, ..., 6: 토요일

			const modalClosedTime = localStorage.getItem('modalClosedTime');

			const oneDay = 24 * 60 * 60 * 1000; // 24시간을 밀리초로 변환
			const currentTime = today.getTime();

			if ((dayOfWeek === 6 || dayOfWeek === 6) && (!modalClosedTime || currentTime - modalClosedTime > oneDay)) {
				const modal = document.getElementById("weekendModal");
				const closeBtn = document.querySelector(".modal-close");

				modal.style.display = "block";

				closeBtn.onclick = function() {
					modal.style.display = "none";
					localStorage.setItem('modalClosedTime', currentTime); // 모달 닫은 시간 저장
				}

				window.onclick = function(event) {
					if (event.target === modal) {
						modal.style.display = "none";
					}
				}
			}
    	</script>
		<!-- // 요일별 모달 팝업 -->

		<!-- 메인페이지 : 구성원 -->
		<script>
			$(document).ready(function(){
				// Slick 슬라이더 초기화
				$('.slider-wrapper').slick({
					infinite: true, 
					slidesToShow: 4, 
					slidesToScroll: 1,
					prevArrow: $('.prev'),
					nextArrow: $('.next'),
					responsive: [
					{
						breakpoint: 1200,
						settings: {
						slidesToShow: 4
						}
					},
					{
						breakpoint: 900,
						settings: {
						slidesToShow: 3
						}
					},
					{
						breakpoint: 600,
						settings: {
						slidesToShow: 2
						}
					},
					{
						breakpoint: 480,
						settings: {
						slidesToShow: 1
						}
					}
					]
				});
			});
		</script>
		<!-- // 메인페이지 : 구성원 -->

	<?php include('_footer.php');?>