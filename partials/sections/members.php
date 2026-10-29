<?php
if (!defined('_GNUBOARD_')) {
	exit;
}
$dj_base = rtrim(defined('LANDING_LIVE_URL') ? LANDING_LIVE_URL : 'https://trafficdrinking-law-dongju.com', '/');
$dj_h = htmlspecialchars($dj_base, ENT_QUOTES, 'UTF-8');
$e = static function ($s) {
	return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
};

/**
 * 공식 사이트 lawyer 슬라이더와 동일 순서·문구·이미지(data/file/member)
 * https://trafficdrinking-law-dongju.com/page/lawyer.php?me_code=1020
 */
$members_static = array(
	array(
		'name' => '김용빈', 'headline' => '총괄변호사',
		'label' => "서울고등법원 부장판사 역임\n음주운전사건 총괄변호사",
		'img' => '/data/file/member/2130706433_IAQtms8c_11e6df46982c945ce1bc9d7a95a7fc97b25e5668.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=61',
		'lines' => array('·前 서울고등법원 부장판사', '·前 서울중앙지방법원 부장판사', '·前 중앙선거관리위원회 사무총장'),
	),
	array(
		'name' => '박동진', 'headline' => '총괄변호사',
		'label' => "서울중앙지검 부장검사 역임\n음주운전사건 총괄변호사",
		'img' => '/data/file/member/2130706433_BeLWjp61_29f006809b4bdbde0dd16da70156d3cad27df904.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=32',
		'lines' => array('·前 서울중앙지방검찰청 부장검사', '·前 부산지방검찰청 부장검사', '·前 대구지검 서부지청 형사1부장검사'),
	),
	array(
		'name' => '이세환', 'headline' => '대표변호사',
		'label' => "대한변협 형사전문변호사\n음주운전사건 책임변호사",
		'img' => '/data/file/member/2130706433_a7UjpJn8_d6c7ab037e8185ca9935398a4a107113758d6369.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=1',
		'lines' => array('·수원남부경찰서 수사민원상담변호사', '·前 대법원 국선변호인', '·前 대한변호사협회 대의원'),
	),
	array(
		'name' => '조원진', 'headline' => '변호사',
		'label' => "대한변협 형사전문변호사\n군인·공무원음주운전 책임변호사",
		'img' => '/data/file/member/2130706433_cEQUfP0x_d1142bec1e1d5bd44ed6e28516be4ec4ecfbe1a2.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=2',
		'alt' => '조원진 음주운전 전문 변호사 프로필',
		'lines' => array('·인천광역시의회 법률·입법 고문변호사', '·前 국가정보원(NIS) 기획조정실 변호사', '·前 해군본부 국선변호인'),
	),
	array(
		'name' => '김윤서', 'headline' => '변호사',
		'label' => "대한변협 형사전문변호사\n음주운전교통사고 책임변호사",
		'img' => '/data/file/member/2130706433_cdty2lgO_7f530df90f915aabcb8e3e03f8043424da8c9acc.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=5',
		'lines' => array('·前 안양시청의회(안양시의회) 입법 전문위원', '·前 한국법제연구원', '·前 고려대학교 법학연구원 (형사법)'),
	),
	array(
		'name' => '오서진', 'headline' => '변호사',
		'label' => "대한변협 행정전문변호사\n행정심판 ·행정소송 책임변호사",
		'img' => '/data/file/member/2130706433_rN9nEXQS_b4e62df33a64844b0995fb44f9bc7b5e347e9669.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=4',
		'lines' => array('·前 서울중앙지방법원 외부조정센터 조정위원', '·現 인천광역시상담지원자문위원회 위원', '·現 인천광역시 미추홀구 인사위원회 위원'),
	),
	array(
		'name' => '이세진', 'headline' => '변호사',
		'label' => "형사·민사사건 변호사\n음주운전손해배상 책임변호사",
		'img' => '/data/file/member/2130706433_wvsg3n4M_1d7e44c6810d38b9f9b083379ea1e37a18217e16.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=3',
		'lines' => array('·前 대한변호사협회 대의원', '·前 대법원 국선변호인', '·수원지방검찰청 피해자 국선변호사'),
	),
	array(
		'name' => '박기화', 'headline' => '변호사',
		'label' => "대한변협 형사전문변호사\n음주운전교통사고 대응",
		'img' => '/data/file/member/2130706433_N6Rzfant_a0f3379c7b980c0af7e39c8f72195aceb144b235.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=40',
		'lines' => array('·대법원 국선변호인', '·한림대 평촌성심병원 IRB 위원', '·서울지방변호사협회 권익복지위원회 위원'),
	),
	array(
		'name' => '김민선', 'headline' => '변호사',
		'label' => "대한변협 형사전문변호사\n음주운전수사 및 재판 대응",
		'img' => '/data/file/member/2130706433_JdlYG6ew_9cda34dbed633afd049df905d9945f0c6ba1bf20.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=36',
		'lines' => array('·前 국방부 사무관', '·前 인천광역시교육청 변호사', '·前 국립대학법인 인천대학교 변호사'),
	),
	array(
		'name' => '강유정', 'headline' => '변호사',
		'label' => "대한변호사협회 형사전문변호사\n군인·공무원 음주운전 대응",
		'img' => '/data/file/member/2130706433_p6c9W21b_98b19e2e7c5625ad6717d8aaa7d2e8312dcdba57.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=37',
		'lines' => array('·前 육군 제8군단, 제7군단 법무실 군검사', '·前 육군 항공사령부 군검사 및 징계장교', '·前 육군 검찰단 경기지역보통검찰부 25검찰대장'),
	),
	array(
		'name' => '박연경', 'headline' => '변호사',
		'label' => "前 군검사\n군인·공무원 음주운전 대응",
		'img' => '/data/file/member/2130706433_gvnw9hy8_da69cb9de03c2d84a5a29c3dcc72c0445c6c371c.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=53',
		'lines' => array('·육군본부 검찰부 수사/공판 군검사', '·6군단 법무실 징계장교', '·군검찰 업무유공 육군본부 법무실장 표창'),
	),
	array(
		'name' => '김용진', 'headline' => '변호사',
		'label' => "대법원 국선변호인\n음주운전 면허취소 구제 대응",
		'img' => '/data/file/member/2130706433_LyeAfN6g_e6b39296c5e239b207d5154834cfcf5549b80cb9.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=31',
		'lines' => array('·前 법무부 행정소송과 법무관', '·前 대전고등검찰청 법무관', '·前 부산고등검찰청 법무관'),
	),
	array(
		'name' => '기정환', 'headline' => '변호사',
		'label' => "前 광주경찰청\n음주운전수사 및 재판 대응",
		'img' => '/data/file/member/2130706433_DXPR5sni_ef2427c25f55a26e13dc62eb109226b4bd947b77.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=27',
		'lines' => array('·前 광주경찰청', '·前 경찰 실무수습'),
	),
	array(
		'name' => '김지아', 'headline' => '변호사',
		'label' => "前 수원지방법원 외국인소송 지정변호사\n음주운전 면허취소 구제 대응",
		'img' => '/data/file/member/2130706433_Rhz0TEJ1_84d252b95e29b4156330114ae79e649e829545cd.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=33',
		'lines' => array('·現 고용노동부 **지청 정보공개심의회 위원', '·現 경기도 **시 행정처분배심원', '·現 **중소벤처기업청 보통징계위원회 위원'),
	),
	array(
		'name' => '이인아', 'headline' => '변호사',
		'label' => "대한변호사협회 형사전문변호사\n음주운전교통사고 대응",
		'img' => '/data/file/member/2130706433_gvfryenu_4a7a4827db5c4777b15b768c12477d1465a4d416.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=35',
		'lines' => array('·前 법무부 국가소송과'),
	),
	array(
		'name' => '권희영', 'headline' => '변호사',
		'label' => "대법원 국선변호인\n음주운전 면허취소 구제 대응",
		'img' => '/data/file/member/2130706433_ct2kyMVl_dfad1faa80a906ab7a14271dbfcdc855acca58b7.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=26',
		'lines' => array('·서울북부지방법원 국선변호인', '·국민권익위원회 전문상담위원'),
	),
	array(
		'name' => '박은경', 'headline' => '변호사',
		'label' => "現 성동구 공직자윤리위원회 위원\n음주운전 면허취소 구제 대응",
		'img' => '/data/file/member/2130706433_eG1g3oUn_eca935540b263059d388d7ffa055fd1bd252d3d9.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=42',
		'lines' => array('·前 신용회복위원회', '·前 서울특별시 공익변호사', '·前 서울지방변호사회 ESG 특별위원회 자문위원'),
	),
	array(
		'name' => '이창엽', 'headline' => '변호사',
		'label' => '음주운전수사 및 재판 대응',
		'img' => '/data/file/member/2130706433_TrGDuzgK_b104741229c442a92d62584fee956be4ffb7e3f1.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=54',
		'lines' => array('·서울대학교 법과대학 졸업(우등졸업)'),
	),
	array(
		'name' => '권효경', 'headline' => '변호사',
		'label' => "前 메트라이프생명보험 법무팀\n음주운전교통사고 대응",
		'img' => '/data/file/member/2130706433_o9RsCBmP_93e5fbbdaec9d2825cc20f6d69c3992df09e5fd2.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=25',
		'lines' => array('·前 서울동부지방법원 실무수습', '·前 대한민국 국회 실무수습', '·前 시청자미디어재단 미디어진흥부'),
	),
	array(
		'name' => '김민정', 'headline' => '변호사',
		'label' => "대한변호사협회 형사전문변호사\n음주운전수사 및 재판 대응",
		'img' => '/data/file/member/2130706433_r0NWvfYH_360365f67fe3e202bb234cfdd076aea8a7de3fe7.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=8',
		'lines' => array('·現 대법원국선변호인', '·前 법무부 국가소송과 실무수습'),
	),
	array(
		'name' => '정주은', 'headline' => '변호사',
		'label' => "경찰 실무실습\n음주운전수사 및 재판 대응",
		'img' => '/data/file/member/2130706433_MLB5TSvq_67350e9c4d2890517f5d6fdf50cb02ba5d00a8c5.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=23',
		'lines' => array('·법무부 서울서부보호관찰소 보호관찰위원', '·기획재정부 협동조합정책심의위원회 민간위원', '·서울지방변호사회 여성변호사특별위원회 위원'),
	),
	array(
		'name' => '이정원', 'headline' => '변호사',
		'label' => '음주운전 면허취소 구제 대응',
		'img' => '/data/file/member/2130706433_TM4vYr8J_bd053d67939c00763af51a00e61acc1f75023ac2.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=48',
		'lines' => array('·前 전주지방법원 실무수습', '·前 헌법재판소 재판연구원 실무수습'),
	),
	array(
		'name' => '민혜영', 'headline' => '변호사',
		'label' => '음주운전교통사고 대응',
		'img' => '/data/file/member/2130706433_T34s2atf_aa6b881d4c7e025698bca1409a041c1d7fabae3a.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=57',
		'lines' => array('·과학고, 카이스트 졸업', '·前 초록우산 어린이재단 대구지역본부 자문 변호사', '·The Asian Postgraduate Course on Victimology and Victim Assistance - World Society of Victimology and Tokiwa International Victimology Institute'),
	),
	array(
		'name' => '오제혁', 'headline' => '변호사',
		'label' => '음주운전수사 및 재판 대응',
		'img' => '/data/file/member/2130706433_LnDbmaYd_eba64fd013ceb79a759b9fd228d7a76953d1199f.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=55',
		'lines' => array(),
	),
	array(
		'name' => '고지수', 'headline' => '변호사',
		'label' => "서울북부지검/서울남부지방법원 실무수습\n외국인음주운전 대응",
		'img' => '/data/file/member/2130706433_9Ke4CFfO_e411d537c2f9b03c91d62cefbdc20331534a3984.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=56',
		'lines' => array('·English Available'),
	),
	array(
		'name' => '나은지', 'headline' => '변호사',
		'label' => '외국인음주운전 대응',
		'img' => '/data/file/member/2130706433_TViFhtKO_e453ff913954c73c14966c6533202896a9dc0798.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=50',
		'lines' => array('·English Available'),
	),
	array(
		'name' => '조선정', 'headline' => '변호사',
		'label' => '음주운전교통사고 대응',
		'img' => '/data/file/member/2130706433_BtTcVb3u_e8a35309fdd859661b0336b733f481b358968f6c.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=22',
		'lines' => array(),
	),
	array(
		'name' => '천현진', 'headline' => '변호사',
		'label' => '음주운전 면허취소 대응',
		'img' => '/data/file/member/2130706433_795NyZeQ_6dba964d087a13ffce0e61e30d76b5c2fa42d467.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=47',
		'lines' => array(),
	),
	array(
		'name' => '한채영', 'headline' => '변호사',
		'label' => '음주운전수사 및 재판 대응',
		'img' => '/data/file/member/2130706433_8Fxulgyw_c96abe557cbd1546278abb9892b9b290ae089c4d.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=49',
		'lines' => array(),
	),
	array(
		'name' => '김성연', 'headline' => '변호사',
		'label' => '음주운전교통사고 대응',
		'img' => '/data/file/member/2130706433_OyUVDLst_7bfe8ddf967d89af94a6e8e141c93982fdef9700.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=60',
		'lines' => array(),
	),
	array(
		'name' => '조선익', 'headline' => '수석 행정사',
		'label' => "前 대한 병원행정사협회 군진회장\n군인·공무원음주운전 대응",
		'img' => '/data/file/member/2130706433_qE1d97Z0_07dbabee6b5d6c21bee1bf4e51b842b3889a540f.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=14',
		'lines' => array('·前 육군 전역(의가사) 심사위원장', '·現 강원도 감사위원회 감사관(비상근)'),
	),
	array(
		'name' => '임웅수', 'headline' => '형사팀장∙행정사',
		'label' => "前 안산상록경찰서 강력팀장\n음주운전수사 및 재판 대응",
		'img' => '/data/file/member/2130706433_9ci6NVBs_b0b1546b7558c8f7725b42eb7caccd728491d7b1.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=59',
		'lines' => array('·前 경찰청 전임(전문)수사관', '·前 군포·양평경찰서 수사계장'),
	),
	array(
		'name' => '박상우', 'headline' => '형사팀장∙행정사',
		'label' => "前 서울서부경찰서 강력팀(형사강력계) 수사관\n음주운전교통사고 대응",
		'img' => '/data/file/member/2130706433_Thsj82NO_a364b9c1cb0b7ae45dad4fc3d2a68dfc81ece9d4.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=43',
		'lines' => array('·前 일산고양경찰서 여청계(여청수사팀) 수사관', '·前 종로경찰서 경제범죄수사팀(경제팀) 수사관'),
	),
	array(
		'name' => '손흥종', 'headline' => '행정사',
		'label' => "前 LG 전자·KT 근무\n음주운전수사 및 재판 대응",
		'img' => '/data/file/member/2130706433_SbLkWO3w_af790f3a191741f665ac3bf0f5710ef2525c2ef2.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=58',
		'lines' => array('·前 인천시 서부교육지원청 교육행정공무원', '·前 인천시 미추홀구 일반행정공무원'),
	),
	array(
		'name' => '정재선', 'headline' => '상담실장∙행정사',
		'label' => "손해보험설계사·생명보험설계사 자격\n음주운전교통사고 대응",
		'img' => '/data/file/member/2130706433_lgqMPGr7_0061f0d114acad3715240a1d912a4fd02edf61b3.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=52',
		'lines' => array('·前 IBM Korea 오퍼레이션 매니저(차장)', '·前 현대해상화재보험 근무', '·前 Apple Korea'),
	),
	array(
		'name' => '김동윤', 'headline' => '행정사',
		'label' => "행정사·가맹거래사 국가전문자격\n음주운전 면허취소 구제 대응",
		'img' => '/data/file/member/2130706433_SVcesvxR_d489763a02577aec9650f1d164df6cb549347421.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=46',
		'lines' => array('·前 경기도남부경찰청 사이버수사 누리캅스 위촉', '·前 고용노동부 고용노동혁신 국민자문단 위원', '·前 국민권익위원회 국민참여모니터단 단원'),
	),
	array(
		'name' => '김태희', 'headline' => '행정사',
		'label' => "행정사 국가전문자격\n음주운전수사 및 재판 대응",
		'img' => '/data/file/member/2130706433_C6xZcVTL_59344c1cce66434df3d85a1d77d592cbe59783a6.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=29',
		'lines' => array('·대한행정사회 정회원', '·대한행정사회 수원특례시 지회원', '·경기도 수원특례시 모니터단 단원'),
	),
	array(
		'name' => '허준', 'headline' => '행정사',
		'label' => "행정사 국가전문자격\n음주운전 면허취소 구제 대응",
		'img' => '/data/file/member/2130706433_V3XRnWzk_76c4dfe38f100c4984e7dac7545279456f339775.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=44',
		'lines' => array(),
	),
	array(
		'name' => '황병렬', 'headline' => '자문위원∙행정사',
		'label' => '',
		'img' => '/data/file/member/2130706433_uBADxcUM_efead59a65189118348c142f984a84228ec6fc7d.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=45',
		'lines' => array('·前 화성오산교육지원청 교권보호심의위원회 위원', '·경기도·강원도·울산·한국교원대 등 다수 강연'),
	),
	array(
		'name' => '김홍실', 'headline' => '상담실장',
		'label' => "前 재한중국인법학회 이사\n외국인음주운전 대응",
		'img' => '/data/file/member/2130706433_dL96PFwf_864805573af06c41bc17e00c129fb91d98560544.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=62',
		'lines' => array('·Chinese Available', '·現 서울중앙지방법원 통번역인'),
	),
	array(
		'name' => '이형수', 'headline' => '고문위원',
		'label' => '',
		'img' => '/data/file/member/2130706433_xwtkTGXZ_b152edeecfa8ce77546443dc7ed523cdbcad39db.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=15',
		'lines' => array('·前 외환은행 Global Market 및 Treasury 자금시장본부장', '·前 외환선물(주) 대표이사'),
	),
	array(
		'name' => '오상기', 'headline' => '고문위원',
		'label' => '',
		'img' => '/data/file/member/2130706433_eDN1grKm_f08ca4ebd543e07395d757064f3b9ae341b6de20.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=16',
		'lines' => array('·前 인천광역시 남동구 선거관리위원회 부위원장', '·現 인천광역시의회 시정자문위원'),
	),
	array(
		'name' => '변인화', 'headline' => '고문위원',
		'label' => '',
		'img' => '/data/file/member/2130706433_oNIwZ7ph_41f477e03ff3c79924daa7035eedfd6a491c5c48.jpg',
		'url' => '/page/lawyer_view.php?me_code=1020&wr_id=17',
		'lines' => array('·前 학교운영위원회 교사대표 위원 역임', '·前 학생생활지도부(현 학교폭력담당) 및 선도위원'),
	),
);
?>
<!-- 메인페이지 : 구성원 (공식 사이트 lawyer 슬라이더와 동일) -->
<section class="section main-members">
	<div class="inner">
		<section class="member-list">
			<div class="tit">
				<header class="section-head svc-title">
					<h2 class="title-h2 svc-main-heading">음주운전 변호사 · 교통사고 변호사</h2>
					<p class="title-sub">서울·수원·인천을 아우르는 음주운전·교통사고 전문 변호사들이 TF로 구성됩니다.</p>
				</header>
			</div>
			<div class="slider-container">
				<button class="slider-nav prev" aria-label="Previous Slide"><</button>
				<button class="slider-nav next" aria-label="Next Slide">></button>
				<div class="slider-wrapper">
					<?php foreach ($members_static as $m) {
						$label = isset($m['label']) ? $m['label'] : '';
						$lines = isset($m['lines']) && is_array($m['lines']) ? $m['lines'] : array();
						?>
						<div class="slider-item">
							<a href="<?php echo $dj_h . $e(isset($m['url']) ? $m['url'] : '/'); ?>">
								<div class="img-wrap">
									<img src="<?php echo $e($dj_base . $m['img']); ?>" alt="<?php echo $e(isset($m['alt']) ? $m['alt'] : ($m['name'] . ' 프로필')); ?>" width="300" height="360" loading="lazy">
									<?php if ($label !== '') { ?>
									<span class="label"><?php echo nl2br($e($label)); ?></span>
									<?php } ?>
								</div>
								<div class="txt-wrap">
									<span class="member-card-txt"><strong><?php echo $e($m['name']); ?></strong> <?php echo $e(isset($m['headline']) ? $m['headline'] : '변호사'); ?><?php
									foreach ($lines as $line) {
										echo '<br>' . $e($line);
									}
									?></span>
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
