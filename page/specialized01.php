<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/divorce.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "음주운전 사건특화";
$gr_id ='business';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>
<div class="subPage-wrapper">

    <!-- 섹션 1 : 성공사례 -->
    <section class="subPage_sec" id="area_specialized01-01">
        <div class="sec_header">
            <h2 class="header_title pc">음주운전 사건특화 법무법인 동주</h2>
            <h2 class="header_title mo">음주운전 사건특화<br>법무법인 동주</h2>
            <p>음주운전 초범 재범 | 뺑소니 | 무면허 | 측정거부</p>
            <h3 class="success_phrase pc">무혐의, 무죄, 불기소(기소유예), 항소 재심 성공사례 다수 보유</h3>
            <h3 class="success_phrase mo">무혐의, 무죄, 불기소(기소유예), 항소 재심<br>성공사례 다수 보유</h3>
        </div>

        <?php include_once('speCaseList.php'); ?>

        <a href="/bbs/board.php?bo_table=case" class="more_link">더 많은 성공사례 알아보기 👉</a>
    </section>

    <!-- 섹션 2 : 구성원 -->
    <section class="subPage_sec" id="area_specialized01-02">
        <div class="sec_header">
            <h2 class="header_title pc">부장검사 출신·형사법 전문 변호사 구성</h2>
            <h2 class="header_title mo">부장검사 출신·형사법 전문<br>변호사 구성</h2>
            <p>경찰조사, 검찰조사, 구공판, 재판에 전략적 대응</p>
            <h3 class="success_phrase pc">음주운전변호사·교통사고변호사 TF팀 1:1 조력</h3>
            <h3 class="success_phrase mo">음주운전변호사·교통사고변호사 TF팀 1:1 조력</h3>
        </div>

        <?php include_once('speMemList.php'); ?>

        <a href="/page/lawyer.php" class="more_link">변호사 소개 더보기 👉</a>
    </section>

    <!-- 섹션 3 : 차별점 -->
    <section class="subPage_sec" id="area_specialized01-03">
        <div class="sec_header">
            <h2 class="header_title pc">음주운전·교통사고 특화 전문로펌</h2>
            <h2 class="header_title mo">음주운전·교통사고<br>특화 전문로펌</h2>
            <p>법무법인 동주가 특별한 이유는?</p>
        </div>

        <div class="special_point_wrap">
            <div class="special_point_item">
                <div class="text_box">
                    <div class="point_icon">
                        <img src="../images/sub/areas/point-icon.png" alt="차별점 아이콘">
                    </div>
                    <span class="point_num">POINT 01</span>
                    <h4 class="point_tit">형사처벌 신속 방어 시스템</h4>
                    <ul class="point_list">
                        <li>초범뿐만 아니라 음주운전처벌로 실형 위험이 큰 사건에도 특화</li>
                        <li>음주운전재범 2회, 3회(2진, 삼진아웃), 4회, 5회 이상, 무면허음주운전</li>
                        <li>음주사고, 사망사고, 뺑소니 피해자 형사합의 및 음주운전합의금 조율</li>
                        <li>가해자 구속수사 막고 최소 집행유예로 방어</li>
                    </ul>
                </div>
                <div class="img_box">
                    <img src="../images/sub/areas/point01.jpg" alt="차별점 형사처벌방어">
                </div>
            </div>

            <div class="special_point_item">
                <div class="text_box">
                    <div class="point_icon">
                        <img src="../images/sub/areas/point-icon.png" alt="차별점 아이콘">
                    </div>
                    <span class="point_num">POINT 02</span>
                    <h4 class="point_tit">음주운전면허취소구제 One-Stop 대응</h4>
                    <ul class="point_list">
                        <li>10년 이상 경력의 행정법 전문 변호사·음주행정사 배치</li>
                        <li>이의신청, 행정심판, 행정소송 맞춤형 조력</li>
                        <li>벌점 누적된 음주운전면허정지, 음주면허취소 등 행정처분 구제</li>
                    </ul>
                </div>
                <div class="img_box">
                    <img src="../images/sub/areas/point03.jpg" alt="차별점 면허취소구제">
                </div>
            </div>

            <div class="special_point_item">
                <div class="text_box">
                    <div class="point_icon">
                        <img src="../images/sub/areas/point-icon.png" alt="차별점 아이콘">
                    </div>
                    <span class="point_num">POINT 03</span>
                    <h4 class="point_tit">수사부터 재판까지 단계별 서비스</h4>
                    <ul class="point_list">
                        <li>CCTV, 블랙박스, 목격자 진술 등 음주운전증거 조사</li>
                        <li>주차장 음주운전, 보복운전, 음주운전 방조죄, 공무원 음주운전 등 사안별 쟁점에 집중</li>
                        <li>수사 및 재판 경험이 풍부한 전문 변호사 투입</li>
                    </ul>
                </div>
                <div class="img_box">
                    <img src="../images/sub/areas/point02.jpg" alt="차별점 음주운전재판">
                </div>
            </div>
        </div>
    </section>

    <!-- 섹션 4 : 사무소 -->
    <section class="subPage_sec" id="area_specialized01-04">
        <div class="sec_header">
            <h2 class="header_title pc">음주운전전문변호사 법률상담 추천</h2>
            <h2 class="header_title mo">음주운전전문변호사<br>법률상담 추천</h2>
            <p>
                “선임료 수임료 비용 걱정 때문에 망설이고 계시나요?”<br>
                여러분과 가까운 동주를 찾아주세요.
            </p>
        </div>

        <div class="office_list_wrap">
            
            <!-- 서울사무소 -->
            <div class="office_item">
                <div class="office_info_box">
                    <h4 class="office_name">법무법인 동주 서울 사무소</h4>
                    <ul class="info_list">
                        <li class="info_row">
                            <span class="icon_box"><img src="../images/sub/areas/office-icon01.png" alt="사무소 주소"></span>
                            <div class="txt_group">
                                <strong>주소</strong>
                                <p>서울 서초구 서초중앙로 123 엘렌타워 13층</p>
                            </div>
                        </li>
                        <li class="info_row">
                            <span class="icon_box"><img src="../images/sub/areas/office-icon02.png" alt="사무소 전화번호"></span>
                            <div class="txt_group">
                                <strong>전화번호</strong>
                                <p>1522-3394</p>
                            </div>
                        </li>
                        <li class="info_row">
                            <span class="icon_box"><img src="../images/sub/areas/office-icon03.png" alt="사무소 지역"></span>
                            <div class="txt_group">
                                <strong>근처 지역</strong>
                                <div class="area_tags">
                                    <span>강남</span><span>강동구</span><span>강서구</span><span>고양시</span><span>구리</span><span>남양주</span><span>논현동</span><span>동대문</span><span>동두천</span><span>마포구</span><span>서대문구</span><span>서초구</span><span>성동구</span><span>송파구</span><span>양주</span><span>역삼동</span><span>영등포</span><span>용산</span><span>은평구</span><span>의정부</span><span>종로구</span><span>중랑구</span><span>파주</span><span>포천</span>
                                    </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="office_map_box">
                    <!-- <div id="daumRoughmapContainer1656517417699" class="root_daum_roughmap root_daum_roughmap_landing map_view"></div>
                    <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
                    <script charset="UTF-8">
                        new daum.roughmap.Lander({
                            "timestamp" : "1656517417699",
                            "key" : "2ashv",
                            "mapHeight" : "420"
                        }).render();
                    </script> -->
                    <div class="kakaomap-wrapper">
                        <div class="kakaomap-view">
                            <a href="https://map.kakao.com/?urlX=503004.00000000175&amp;urlY=1109238.9999999967&amp;itemId=1961523053&amp;q=%EB%B2%95%EB%AC%B4%EB%B2%95%EC%9D%B8%20%EB%8F%99%EC%A3%BC%20%EC%84%9C%EC%9A%B8%EC%82%AC%EB%AC%B4%EC%86%8C&amp;srcid=1961523053&amp;map_type=TYPE_MAP&amp;from=roughmap" target="_blank">
                                <img class="map-image" src="http://t1.daumcdn.net/roughmap/imgmap/31ac6d47ac67bd98a097a1b3eca62f376bfc8cbacb935bc2a05ace15b3bca311" alt="지도 이미지">
                            </a>
                        </div>

                        <div class="kakaomap-footer">
                            
                            <a href="https://map.kakao.com" target="_blank" class="footer-logo">
                                <img src="//t1.daumcdn.net/localimg/localimages/07/2018/pc/common/logo_kakaomap.png" width="72" height="16" alt="카카오맵">
                            </a>

                            <div class="footer-links">
                                <a target="_blank" href="https://map.kakao.com/?from=roughmap&amp;srcid=2070865816&amp;confirmid=2070865816&amp;q=%EB%B2%95%EB%AC%B4%EB%B2%95%EC%9D%B8%20%EB%8F%99%EC%A3%BC%20%EC%88%98%EC%9B%90%EC%82%AC%EB%AC%B4%EC%86%8C&amp;rv=on">로드뷰</a>
                                <span class="separator"></span>
                                
                                <a target="_blank" href="https://map.kakao.com/?from=roughmap&amp;eName=%EB%B2%95%EB%AC%B4%EB%B2%95%EC%9D%B8%20%EB%8F%99%EC%A3%BC%20%EC%88%98%EC%9B%90%EC%82%AC%EB%AC%B4%EC%86%8C&amp;eX=514777.9999999985&amp;eY=1053284.9999999977">길찾기</a>
                                <span class="separator"></span>
                                
                                <a target="_blank" href="https://map.kakao.com?map_type=TYPE_MAP&amp;from=roughmap&amp;srcid=2070865816&amp;itemId=2070865816&amp;q=%EB%B2%95%EB%AC%B4%EB%B2%95%EC%9D%B8%20%EB%8F%99%EC%A3%BC%20%EC%88%98%EC%9B%90%EC%82%AC%EB%AC%B4%EC%86%8C&amp;urlX=514777.9999999985&amp;urlY=1053284.9999999977">지도 크게 보기</a>
                            </div>
                        </div>
                        
                        <div class="hidden-offset">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 수원사무소 -->
            <div class="office_item">
                <div class="office_info_box">
                    <h4 class="office_name">법무법인 동주 수원 사무소</h4>
                    <ul class="info_list">
                        <li class="info_row">
                            <span class="icon_box"><img src="../images/sub/areas/office-icon01.png" alt="사무소 주소"></span>
                            <div class="txt_group">
                                <strong>주소</strong>
                                <p>경기 수원시 영통구 광교중앙로248번길 7-2 원희캐슬광교 B동 902호, 903호</p>
                            </div>
                        </li>
                        <li class="info_row">
                            <span class="icon_box"><img src="../images/sub/areas/office-icon02.png" alt="사무소 전화번호"></span>
                            <div class="txt_group">
                                <strong>전화번호</strong>
                                <p>1522-3394</p>
                            </div>
                        </li>
                        <li class="info_row">
                            <span class="icon_box"><img src="../images/sub/areas/office-icon03.png" alt="사무소 지역"></span>
                            <div class="txt_group">
                                <strong>근처 지역</strong>
                                <div class="area_tags">
                                    <span>경기 광주</span><span>과천</span><span>광교</span>
                                    <span>광명시</span><span>군포시</span><span>동탄</span>
                                    <span>매탄동</span><span>분당</span><span>성남시</span>
                                    <span>시흥시</span><span>안산</span><span>안양 양평</span>
                                    <span>여주시</span><span>오산시</span><span>용인</span>
                                    <span>의왕</span><span>이천</span><span>천안</span>
                                    <span>판교</span><span>평택</span><span>하남시</span>
                                    <span>하동</span><span>화성시</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="office_map_box">
                    <div class="kakaomap-wrapper">
                        <div class="kakaomap-view">
                            <a href="https://map.kakao.com/?urlX=514777.9999999985&amp;urlY=1053284.9999999977&amp;itemId=2070865816&amp;q=%EB%B2%95%EB%AC%B4%EB%B2%95%EC%9D%B8%20%EB%8F%99%EC%A3%BC%20%EC%88%98%EC%9B%90%EC%82%AC%EB%AC%B4%EC%86%8C&amp;srcid=2070865816&amp;map_type=TYPE_MAP&amp;from=roughmap" target="_blank">
                                <img class="map-image" src="http://t1.daumcdn.net/roughmap/imgmap/391c53430e34e903c0c588aa0fe0a7c62e88e42b6cb53e2f1719b6eb13d769c0" alt="지도 이미지">
                            </a>
                        </div>

                        <div class="kakaomap-footer">
                            
                            <a href="https://map.kakao.com" target="_blank" class="footer-logo">
                                <img src="//t1.daumcdn.net/localimg/localimages/07/2018/pc/common/logo_kakaomap.png" width="72" height="16" alt="카카오맵">
                            </a>

                            <div class="footer-links">
                                <a target="_blank" href="https://map.kakao.com/?from=roughmap&amp;srcid=2070865816&amp;confirmid=2070865816&amp;q=%EB%B2%95%EB%AC%B4%EB%B2%95%EC%9D%B8%20%EB%8F%99%EC%A3%BC%20%EC%88%98%EC%9B%90%EC%82%AC%EB%AC%B4%EC%86%8C&amp;rv=on">로드뷰</a>
                                <span class="separator"></span>
                                
                                <a target="_blank" href="https://map.kakao.com/?from=roughmap&amp;eName=%EB%B2%95%EB%AC%B4%EB%B2%95%EC%9D%B8%20%EB%8F%99%EC%A3%BC%20%EC%88%98%EC%9B%90%EC%82%AC%EB%AC%B4%EC%86%8C&amp;eX=514777.9999999985&amp;eY=1053284.9999999977">길찾기</a>
                                <span class="separator"></span>
                                
                                <a target="_blank" href="https://map.kakao.com?map_type=TYPE_MAP&amp;from=roughmap&amp;srcid=2070865816&amp;itemId=2070865816&amp;q=%EB%B2%95%EB%AC%B4%EB%B2%95%EC%9D%B8%20%EB%8F%99%EC%A3%BC%20%EC%88%98%EC%9B%90%EC%82%AC%EB%AC%B4%EC%86%8C&amp;urlX=514777.9999999985&amp;urlY=1053284.9999999977">지도 크게 보기</a>
                            </div>
                        </div>
                        
                        <div class="hidden-offset">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 인천사무소 -->
            <div class="office_item">
                <div class="office_info_box">
                    <h4 class="office_name">법무법인 동주 인천 사무소</h4>
                    <ul class="info_list">
                        <li class="info_row">
                            <span class="icon_box"><img src="../images/sub/areas/office-icon01.png" alt="사무소 주소"></span>
                            <div class="txt_group">
                                <strong>주소</strong>
                                <p>인천 미추홀구 학익소로 66 선정빌딩 403호, 404호</p>
                            </div>
                        </li>
                        <li class="info_row">
                            <span class="icon_box"><img src="../images/sub/areas/office-icon02.png" alt="사무소 전화번호"></span>
                            <div class="txt_group">
                                <strong>전화번호</strong>
                                <p>1522-3394</p>
                            </div>
                        </li>
                        <li class="info_row">
                            <span class="icon_box"><img src="../images/sub/areas/office-icon03.png" alt="사무소 지역"></span>
                            <div class="txt_group">
                                <strong>근처 지역</strong>
                                <div class="area_tags">
                                    <span>계양구</span><span>김포</span><span>남동구</span>
                                    <span>미추홀구</span><span>부천</span><span>부평</span>
                                    <span>서구</span><span>송도</span><span>일산</span>
                                    <span>청라</span><span>학익동</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="office_map_box">
                    <!-- <div id="daumRoughmapContainer1656517597419" class="root_daum_roughmap root_daum_roughmap_landing map_view"></div>
                    <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
                    <script charset="UTF-8">
                        new daum.roughmap.Lander({
                            "timestamp" : "1656517597419",
                            "key" : "2ashw",
                            "mapHeight" : "420"
                        }).render();
                    </script> -->
                    <div class="kakaomap-wrapper">
                        <div class="kakaomap-view">
                            <a href="https://map.kakao.com/?urlX=427063.0000000025&amp;urlY=1095271.0000000033&amp;itemId=1336922794&amp;q=%EB%B2%95%EB%AC%B4%EB%B2%95%EC%9D%B8%20%EB%8F%99%EC%A3%BC%20%EC%9D%B8%EC%B2%9C%EC%82%AC%EB%AC%B4%EC%86%8C&amp;srcid=1336922794&amp;map_type=TYPE_MAP&amp;from=roughmap" target="_blank">
                                <img class="map-image" src="http://t1.daumcdn.net/roughmap/imgmap/67ecf0db26608655638f73d155879ebee42b7780990d93bb30bb355d5c4b2e75" alt="지도 이미지">
                            </a>
                        </div>

                        <div class="kakaomap-footer">
                            
                            <a href="https://map.kakao.com" target="_blank" class="footer-logo">
                                <img src="//t1.daumcdn.net/localimg/localimages/07/2018/pc/common/logo_kakaomap.png" width="72" height="16" alt="카카오맵">
                            </a>

                            <div class="footer-links">
                                <a target="_blank" href="https://map.kakao.com/?from=roughmap&amp;srcid=2070865816&amp;confirmid=2070865816&amp;q=%EB%B2%95%EB%AC%B4%EB%B2%95%EC%9D%B8%20%EB%8F%99%EC%A3%BC%20%EC%88%98%EC%9B%90%EC%82%AC%EB%AC%B4%EC%86%8C&amp;rv=on">로드뷰</a>
                                <span class="separator"></span>
                                
                                <a target="_blank" href="https://map.kakao.com/?from=roughmap&amp;eName=%EB%B2%95%EB%AC%B4%EB%B2%95%EC%9D%B8%20%EB%8F%99%EC%A3%BC%20%EC%88%98%EC%9B%90%EC%82%AC%EB%AC%B4%EC%86%8C&amp;eX=514777.9999999985&amp;eY=1053284.9999999977">길찾기</a>
                                <span class="separator"></span>
                                
                                <a target="_blank" href="https://map.kakao.com?map_type=TYPE_MAP&amp;from=roughmap&amp;srcid=2070865816&amp;itemId=2070865816&amp;q=%EB%B2%95%EB%AC%B4%EB%B2%95%EC%9D%B8%20%EB%8F%99%EC%A3%BC%20%EC%88%98%EC%9B%90%EC%82%AC%EB%AC%B4%EC%86%8C&amp;urlX=514777.9999999985&amp;urlY=1053284.9999999977">지도 크게 보기</a>
                            </div>
                        </div>
                        
                        <div class="hidden-offset">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 섹션 5 : 포털 -->
    <section class="subPage_sec" id="area_specialized01-05">
        <div class="sec_header">
            <h2 class="header_title pc">지금이 마지막 “골든타임”입니다.</h2>
            <h2 class="header_title mo">지금이 마지막<br>“골든타임”입니다.</h2>
            <p>망설이는 시간에도 상황은 불리해질 수 있습니다.<br>지금 바로 전문가의 도움을 받으세요.</p>
        </div>

        <div class="page_link_wrap">

            <!-- 고객후기 -->
            <a href="/bbs/board.php?bo_table=review&me" class="link_item">
                <div class="link_hover_bg" style="background-image: url('../images/sub/areas/link-hover01.jpg');"></div>
                
                <div class="link_default">
                    <div class="icon_box">
                        <img src="../images/sub/areas/link-icon01.png" alt="링크 고객후기 아이콘">
                    </div>
                    <h3 class="link_tit">고객후기</h3>
                    <p class="link_desc">고객들의 높은 만족도 입증 후기</p>
                    <span class="view_more">후기가 궁금하면 CLICK ➜</span>
                </div>
            </a>

            <!-- 언론보도 -->
            <a href="/bbs/board.php?bo_table=media&me" class="link_item">
                <div class="link_hover_bg" style="background-image: url('../images/sub/areas/link-hover02.jpg');"></div>
                <div class="link_default">
                    <div class="icon_box">
                        <img src="../images/sub/areas/link-icon02.png" alt="링크 언론보도 아이콘">
                    </div>
                    <h3 class="link_tit">언론보도</h3>
                    <p class="link_desc">다양한 언론사로부터 인정</p>
                    <span class="view_more">보도자료 궁금하면 CLICK ➜</span>
                </div>
            </a>

            <!-- 전화상담 -->
            <a href="tel:1522-3394" class="link_item">
                <div class="link_hover_bg" style="background-image: url('../images/sub/areas/link-hover03.jpg');"></div>
                <div class="link_default">
                    <div class="icon_box">
                        <img src="../images/sub/areas/link-icon03.png" alt="링크 전화상담 아이콘">
                    </div>
                    <h3 class="link_tit">전화상담</h3>
                    <p class="link_desc">상황 분석 기반의 정확한 상담</p>
                    <span class="view_more">전문가와 상담은 CLICK ➜</span>
                </div>
            </a>

            <!-- 자가진단 -->
            <a href="https://trafficdrinking-law-dongju.com/page/self_test.php" class="link_item">
                <div class="link_hover_bg" style="background-image: url('../images/sub/areas/link-hover04.jpg');"></div>
                <div class="link_default">
                    <div class="icon_box">
                        <img src="../images/sub/areas/link-icon04.png" alt="링크 자가진단 아이콘">
                    </div>
                    <h3 class="link_tit">자가진단</h3>
                    <p class="link_desc">20초 이내로 끝나는 자가진단</p>
                    <span class="view_more">내 상황에 맞는 솔루션 CLICK ➜</span>
                </div>
            </a>

        </div>
    </section>

</div>


<?php
include_once('../_footer.php');
?>

<script>
	let currentTab = 0;

	function showTab(index) {
		const contents = document.querySelectorAll('.tab-content');
		const tabs = document.querySelectorAll('.tab');
		
		contents.forEach(content => {
			content.classList.remove('active');
		});

		tabs.forEach(tab => {
			tab.style.backgroundColor = '#D6D6D6'; // 기본 배경색으로 설정
		});

		document.getElementById(`tab-content-${index}`).classList.add('active');
		tabs[index].style.backgroundColor = '#3200A7'; // 선택된 탭의 배경색 변경

		currentTab = index;
	}

	// 첫 번째 탭을 기본으로 활성화
	showTab(currentTab);
</script>