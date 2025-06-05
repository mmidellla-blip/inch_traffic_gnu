<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/adolescent.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "청소년전담센터 내일law";
$gr_id ='business';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<!-- sub-conts-wrap -->
<section class="sub-conts-wrap">
	<h1 class="sub-conts-title"><span><?php echo $g5['title']; ?></span></h1>
	<section class="business-wrap">
		<section class="business-inner">
			<h1>동주의 조력 <br><span>01</span></h1>
			<section class="business-conts">
				<section class="business-tit-wrap">
					<h1><span>대한변호사협회 등록 학교폭력전문변호사가 조력</span>성공사례 <strong>2,425</strong>건 보유</h1>
					<a href="#">청소년전담센터 바로가기</a>
				</section>
				<section class="business-box business-slogan">
					<h1>대한변협 인증 학교폭력, <br>형사전문변호사</h1>
					<ul>
						<li>수원교육지원청 자문변호사</li>
						<li>화성오산교육청, 강화교육청</li>
						<li>학교폭력대책심의위원</li>
						<li>인천교육청, 한일전산고 고문변호사</li>
						<li>인천광역시교육청 소청심사위원회 위원</li>
						<li>(전) 인천광역시 교육청 변호사 등</li>
					</ul>
				</section>
				<section class="business-box">
					<table>
						<thead>
							<tr>
								<th scope="col">학교폭력사안조사 및 학교폭력대책심의위원회</th>
								<th scope="col">보호처분 및 형사재판</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<ul>
										<li>학생 진술서 작성 조력</li>
										<li>증거자료 수집</li>
										<li>학부모 보호자확인서 작성 조력</li>
										<li>합의 조력</li>
										<li>변호사 의견서 작성</li>
									</ul>
								</td>
								<td>
									<ul>
										<li>증거자료 수집</li>
										<li>변호사의견서 작성 및 탄원서 조력</li>
										<li>감형 및 선처 조력</li>
										<li>반성문 작성 조력</li>
										<li>수사기관 동행 및 재판 동석</li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
				</section>
			</section>
		</section>
		<section class="business-inner">
			<h1>쉽게 보는 소송 절차 <br><span>02</span></h1>
			<section class="business-conts">
				<ul class="business-tab">
					<li class="on"><a href="#section01">학교폭력 사안조사</a></li>
					<li><a href="#section02">학교폭력대책심의위원회</a></li>
					<li><a href="#section03">보호처분</a></li>
					<li><a href="#section04">소년재판</a></li>
				</ul>
				<section class="business-detail-outer">
					<section class="business-detail no-bg on" id="section01">
						<section class="business-detail-box">
							<h1 class="tit">학교폭력 사안조사</h1>
							<h1 class="sub-tit"><span>사안조사 절차</span></h1>
							<p>학교폭력 발생 시 사안조사 절차는 다음과 같습니다.</p>
							<div class="img-wrap"><img src="/images/sub/business-detail-box.jpg" alt=""></div>
							<h1 class="sub-tit"><span>사안조사 방법</span></h1>
							<p>사안조사의 방법은 다음과 같습니다(교육부, 「2022년도 학교폭력 사안처리 가이드북」, 33면).</p>
							<ul>
								<li>피해 및 가해사실 여부 확인을 위한 구체적인 사안조사 실시(관련학생의 면담, 주변학생 조사, 설문조사, 객관적인 입증자료 수집 등)</li>
								<li>피해 및 가해학생 심층면담</li>
								<li>조사한 결과를 바탕으로 육하원칙에 따라 사안조사 보고서 작성</li>
								<li>성폭력의 경우, 비밀유지에 특별히 유의</li>
								<li>장애학생, 다문화학생에 대한 사안조사의 경우, 특수교육 전문가 등을 참여시켜 장애학생 및 다문화학생의 진술 기회 확보 및 조력 제공</li>
								<li>필요한 경우, 보호자 면담을 통해 각각의 요구사항을 파악하고 사안과 관련하여 조사된 내용을 관련 학생의 보호자가 충분히 이해할 수 있도록 안내</li>
							</ul>
							<h1 class="sub-tit"><span>사안조사 결과보고</span></h1>
							<p>사안조사 결과 작성된 보고서를 학교장에게 보고합니다(교육부, 「2022년도 학교폭력 사안처리 가이드북」, 36면).</p>
							<div class="qna-wrap">
								<h1><span>Q</span>가해학생에 대한 사안조사를 할 당시 교사가 욕설을 사용하는 등 강압적인 분위기를 조성한 경우, <br>그 사안의 처분에 효력이 있나요?</h1>
								<p><span>A</span>사안조사 당시 교사의 강압적인 언행이 있었던 경우 해당 진술서의 신빙성은 부인될 수 있지만 처분 효력 자체에는 <br>영향이 없습니다.</p>
								<span>(출처: 서울특별시교육청, 「2018학년도 학교폭력 사안처리 활동 사례집」, 25면 참조)</span>
							</div>
						</section>
						<section class="business-detail-box">
							<h1 class="tit">전담기구의 심의</h1>
							<h1 class="sub-tit"><span>사안조사 방법</span></h1>
							<p>- 교감, 전문상담교사, 보건교사 및 책임교사(학교폭력문제를 담당하는 교사를 말함), 학부모 등으로 학교폭력문제를 담당하는 전담기구(이하 "전담기구"라 함) 심의 시 유의사항은 다음과 같습니다(교육부, 「2022년도 학교폭력 사안처리 가이드북」, 50면).</p>
							<div class="img-wrap"></div>
							<h1 class="sub-tit"><span></span></h1>
							<p></p>
							<ul>
								<li>학교장의 자체해결 요건 해당 여부는 전담기구 심의에서 협의를 통해 결정합니다.</li>
								<li>피해학생이 1명이고 가해학생이 여러 명인 경우, 학교장 자체해결 요건에 충족하더라도 피해학생이 가해학생 모두에 대해 자체해결에 동의하는 경우에 한하여 학교장 자체해결이 가능합니다. <span>*다만, 피해학생이 여러 명인 경우에는 피해학생별로 학교장 자체해결 부의 여부를 판단합니다.</span></li>
							</ul>
							<h1 class="sub-tit"><span>심의 결과의 처리</span></h1>
							<ul class="no-bullet">
								<li>- 전담기구의 심의 결과 학교장 자체해결 요건에 해당하는 사안의 경우, 전담기구에서 객관적으로 판단한 기준에 대해 피해학생 및 그 보호자에게 설명하고, 피해학생과 그 보호자가 심의위원회 개최 요구 의사 확인서를 통해 학교장 자체해결에 동의하면 학교장이 자체해결할 수 있습니다(교육부, 「2022년도 학교폭력 사안처리 가이드북」, 50면).</li>
								<li> - 학교의 장이 자체해결한 학교폭력 사안에 대해서는 재산상의 피해 복구를 이행하지 않거나 해당 학교폭력 사안의 조사과정에서 확인되지 않았던 사실이 추가적으로 확인된 경우를 제외하고는 피해학생 및 그 보호자가 심의위원회 개최를 요청할 수 없다는 사실을 충분히 설명합니다(교육부, 「2022년도 학교폭력 사안처리 가이드북」, 50면).</li>
							</ul>
						</section>
					</section>
					<section class="business-detail no-bg" id="section02">
						<section class="business-detail-box">
							<h1 class="tit">학교폭력대책심의위원회</h1>
							<h1 class="sub-tit"><span>학교폭력대책심의위원회의 심의사항</span></h1>
							<p>학교폭력대책심의위원회(이하 "심의위원회"라 함)는 학교폭력의 예방 및 대책 등을 위하여 다음 사항을 심의합니다(규제「학교폭력예방 및 대책에 관한 법률」 제12조제2항 및 「학교폭력예방 및 대책에 관한 법률 시행령」 제13조제2항).</p>
							<ul>
								<li>학교폭력의 예방 및 대책</li>
								<li>피해학생의 보호</li>
								<li>가해학생에 대한 교육, 선도 및 징계</li>
								<li> 피해학생과 가해학생 간의 분쟁조정</li>
								<li>학교폭력의 예방 및 대책과 관련하여 학교의 장이 건의하는 사항</li>
							</ul>
							<h1 class="sub-tit"><span>심의위원회의 심의방식</span></h1>
							<ul class="no-bullet">
								<li>심의위원회의 심의는 대면 심의를 원칙으로 합니다. 즉, 피해 및 가해학생 및 보호자가 심의위원회에 직접 출석하여 진술해야 합니다. 다만, 피해 및 가해학생 측의 요구가 있거나 도서지역의 경우 등 특별한 여건을 고려할 필요가 있는 경우, 전화, 화상, 서면 등의 심의 방식을 활용할 수 있습니다(교육부, 「2022년도 학교폭력 사안처리 가이드북」, 63면).</li>
								<li>심의위원회는 심의 과정에서 소아청소년과 의사, 정신건강의학과 의사, 심리학자, 그 밖의 아동심리와 관련된 전문가를 출석하게 하거나 서면 등의 방법으로 의견을 청취할 수 있고, 피해학생이 상담·치료 등을 받은 경우 해당 전문가 또는 전문의 등으로부터 의견을 청취할 수 있습니다(규제「학교폭력예방 및 대책에 관한 법률」 제13조제4항 본문).</li>
							</ul>
							<ul>
								<li>다만, 심의위원회는 피해학생 또는 그 보호자의 의사를 확인하여 피해학생 또는 그 보호자의 요청이 있는 경우에는 반드시 의견을 청취해야 합니다(규제「학교폭력예방 및 대책에 관한 법률」 제13조제4항 단서).</li>
							</ul>
							<p>심의위원회는 필요하다고 인정할 때에는 학교폭력이 발생한 해당 학교 소속 교원이나 학교폭력 예방 및 대책과 관련된 분야의 전문가 등을 출석하게 하거나 서면 등의 방법으로 의견을 들을 수 있습니다(규제「학교폭력예방 및 대책에 관한 법률」 제13조제5항 및 「학교폭력예방 및 대책에 관한 법률 시행령」 제14조제8항).</p>
							<h1 class="sub-tit"><span>비밀누설금지</span></h1>
							<p>학교폭력의 예방 및 대책과 관련된 업무를 수행하거나 수행했던 사람은 그 직무로 인하여 알게 된 비밀 또는 가해학생·피해학생 및 신고자·고발자와 관련된 자료를 누설해서는 안됩니다(「학교폭력예방 및 대책에 관한 법률」 제21조제1항).</p>
							<p>피해학생 보호, 장애학생 보호, 가해학생에 대한 조치, 행정심판, 분쟁조정에 따른 심의위원회의 회의는 공개하지 않습니다(「학교폭력예방 및 대책에 관한 법률」 제21조제3항 본문).</p>
							<ul>
								<li>다만, 피해학생·가해학생 또는 그 보호자가 회의록의 열람·복사 등 회의록 공개를 신청한 때에는 학생과 그 가족의 성명, 주민등록번호 및 주소, 위원의 성명 등 개인정보에 관한 사항을 제외하고 공개해야 합니다(「학교폭력예방 및 대책에 관한 법률」 제21조제3항 단서).</li>
							</ul>
						</section>
					</section>
					<section class="business-detail no-bg" id="section03">
						<section class="business-detail-box">
							<h1 class="tit">보호처분</h1>
							<h1 class="sub-tit"><span>보호처분 요약표</span></h1>
							<p>보호처분에는 10가지 종류가 있는데 이를 요약하면 다음과 같습니다.</p>
							<table class="style1">
								<colgroup>
									<col style="width:70px;">
									<col>
									<col>
									<col>
								</colgroup>
								<thead>
									<tr>
										<th scope="col">구분</th>
										<th scope="col">보호처분의 종류	</th>
										<th scope="col">기간 또는 시간 제한</th>
										<th scope="col">대상 연령</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>보호자 또는 보호자를 대신하여 소년을 보호 할 수 있는 사람에게 감호 위탁</td>
										<td>6개월 <br>(6개월 연장 가능)</td>
										<td>10세 이상</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>수강명령</td>
										<td>100시간 이내</td>
										<td>12세 이상</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>사회봉사명령</td>
										<td>200시간 이내</td>
										<td>14세 이상</td>
									</tr>
									<tr>
										<th scope="row">4</th>
										<td>보호관찰관의 단기 보호관찰</td>
										<td>1년</td>
										<td>10세 이상</td>
									</tr>
									<tr>
										<th scope="row">5</th>
										<td>보호관찰관의 장기 보호관찰</td>
										<td>2년(1년 연장가능)</td>
										<td>10세 이상</td>
									</tr>
									<tr>
										<th scope="row">6</th>
										<td>「아동복지법」에 따른 복지시설이나 그 밖의 소년보호시설에 감호 위탁</td>
										<td>6개월 <br>(6개월 연장 가능)</td>
										<td>10세 이상</td>
									</tr>
									<tr>
										<th scope="row">7</th>
										<td>병원, 요양소 또는「보호소년 등의 처우에 관한 법률」에 따른 소년의료보호시설에 위탁</td>
										<td>6개월 <br>(6개월 연장 가능)</td>
										<td>10세 이상</td>
									</tr>
									<tr>
										<th scope="row">8</th>
										<td>1개월 이내의 소년원 송치</td>
										<td>1개월 이내</td>
										<td>10세 이상</td>
									</tr>
									<tr>
										<th scope="row">9</th>
										<td>단기 소년원 송치</td>
										<td>6개월 이내</td>
										<td>10세 이상</td>
									</tr>
									<tr>
										<th scope="row">10</th>
										<td>장기 소년원 송치</td>
										<td>2년 이내</td>
										<td>12세 이상</td>
									</tr>
								</tbody>
							</table>
						</section>
						<section class="business-detail-box">
							<h1 class="tit">보호처분의 상세한 내용</h1>
							<h1 class="sub-tit"><span>(1) 1호 처분</span></h1>
							<ul class="no-bullet">
								<li>- 보호자 또는 보호자를 대신하여 소년을 보호할 수 있는 사람에게 감호(보살피고 보호함)를 위탁하는 것입니다.</li>
								<li>- 보호자에게 감호를 위탁하는 것</li>
							</ul>
							<ul>
								<li>보호자란 법률상 감호교육을 할 의무가 있는 사람 또는 현재 감호하는 사람을 말합니다. 부모, 동거하는 고용주 등이 이에 속합니다.</li>
								<li>보호자에게 감호를 위탁하는 처분은 사실상 보호소년을 종래의 환경에 그대로 돌려놓는 것이지만, 법원의 결정에 따라 보호소년의 감호를 위탁하는 것으로서 보호자에 대한 주의의무를 환기시키는 의미가 있고, 보호자에 대한 특별교육명령을 함께 하여 보호자를 교육할 수 있습니다.</li>
								<li>소년부 판사는 보호자에게 소년에 관한 보고서나 의견서를 제출하도록 요구할 수 있고, 소년의 감호에 관한 지시를 할 수도 있습니다.</li>
								<li>소년부 판사는 그 위탁기간 중에 보호처분의 내용을 다른 보호처분으로 변경 할 수 있습니다.</li>
							</ul>
							<ul class="no-bullet">
								<li>- ‘보호자를 대신하여 소년을 보호할 수 있는 사람’에게 감호를 위탁하는 것</li>
							</ul>
							<ul>
								<li>소년에게 보호자가 없거나 보호자가 있더라도 그 보호자가 소년을 충분히 감호하기 어려운 경우 등에는 ‘보호자를 대신하여 소년을 보호할 수 있는 사람에게 감호를 위탁할 수 있습니다.</li>
								<li>대부분 법원은 ‘보호자를 대신하여 소년을 보호할 수 있는 사람’을 위촉하여 두고 있습니다. ‘보호자를 대신하여 소년을 보호할 수 있는 사람’을 보통 ’위탁보호위원‘이라고 부르고 있습니다.</li>
							</ul>
							<h1 class="sub-tit"><span>(2) 2호 처분</span></h1>
							<ul class="no-bullet">
								<li>- 소년에게 일정한 내용의 강의를 듣도록 명령하는 수강명령입니다.</li>
								<li>- 소년부 판사는 강의를 들어야 할 총 수강시간과 집행기한을 정하여 결정합니다. 소년부 판사는 수강할 강의의 종류나 방법 및 그 시설 등도 지정할 수 있습니다.</li>
								<li>- 보호관찰소 외에 현재 서울가정법원이 명한 수강명령을 집행하는 기관으로는 청소년폭력예방재단(http://www.jikim.net 참조), <br>서울특별시립청소년상담지원센터(http://www.teen1318.or.kr 참조), <br>사단법인 탁틴내일 부설 내일청소년상담소(http://www.tacteen.net 참조) 등이 있습니다.</li>
							</ul>
							<h1 class="sub-tit"><span>(3) 3호 처분</span></h1>
							<ul class="no-bullet">
								<li>- 소년에게 일정한 내용의 사회봉사를 하도록 명령하는 사회봉사명령입니다.</li>
								<li>- 소년부 판사는 총 사회봉사시간과 집행기한을 정합니다. 소년부 판사는 사회봉사의 종류나 방법 및 그 대상이 될 시설 등도 지정할 수 있습니다.</li>
							</ul>
							<h1 class="sub-tit"><span>(4) 4호 처분</span></h1>
							<ul class="no-bullet">
								<li>- 보호관찰관의 단기 보호관찰입니다. 보호관찰은 그 기간에 따라 단기 보호관찰과 장기 보호관찰로 나뉩니다.</li>
								<li>- 단기 보호관찰은 1년입니다.</li>
								<li>- 보호관찰은, 보호소년이 정상적인 사회생활을 할 수 있도록 하면서 전문가인 보호관찰관의 지도, 감독과 원호 등을 통하여 소년을 바르게 자라도록 하는 보호처분입니다. 보호관찰은 소년이 사는 것을 관할하는 보호관찰소의 보호관찰관이 담당합니다.</li>
							</ul>
							<h1 class="sub-tit"><span>(5) 5호 처분</span></h1>
							<ul class="no-bullet">
								<li>- 보호관찰관의 장기 보호관찰입니다, 보호관찰의 내용은 단기 보호관찰과 같습니다.</li>
								<li>- 단기 보호관찰 기간이 1년인데 비하여, 장기 보호관찰 기간은 2년이고 1년의 범위에서 한 번 연장할 수 있습니다.</li>
							</ul>
							<h1 class="sub-tit"><span>(6) 6호 처분</span></h1>
							<ul class="no-bullet">
								<li>- 「아동복지법」에 따른 아동복지시설이나 그 밖의 소년보호시설에 소년의 감호를 위탁하는 것입니다.</li>
								<li>- 일정한 시설 내에 수용을 하도록 명령하는 보호처분인 점에서 1호부터 5호까지의 처분과는 다릅니다.</li>
								<li>- 그 수용시설이 소년원 같은 공적시설이 아닌 사적 시설이라는 점에서 8호부터 10호까지의 소년원 송치 처분과 구별됩니다.</li>
								<li>- 2019. 2. 1. 현재 서울가정법원이 위촉한 6호 처분의 집행기관으로는, <br>보호치료시설 효광원(http://www.hyokwang.or.kr), <br>나사로 청소년의 집(http://www.nasaro.or.kr), <br>살레시오 청소년센터(http://isalesio.net), <br>로뎀청소년학교(http://www.rothemschool.kr), <br>마자렐로센터(http://www.mcmain.or.kr), <br>재단법인 돈보스코 센터(http://www.youthbosco.net) 등이 있습니다.</li>
							</ul>
							<h1 class="sub-tit"><span>(7) 7호 처분</span></h1>
							<ul class="no-bullet">
								<li>- 소년을 병원, 요양소 또는「보호소년 등의 처우에 관한 법률」에 따른 소년의료보호시설에 위탁하는 처분입니다.</li>
								<li>- 소년에게 정신질환이 있거나 약물남용을 한 경우와 같이 의학적인 치료와 요양이 필요한 때 내려지는 처분입니다.</li>
							</ul>
							<h1 class="sub-tit"><span>(8) 8호 처분</span></h1>
							<ul class="no-bullet">
								<li>- 1개월 이내의 짧은 기간 동안 소년원에 송치하는 처분입니다.</li>
								<li>- 단기간 동안 집중적인 교육 프로그램을 통하여 소년원 수용 기간을 최소화하면서 교육의 효과를 최대한으로 높이기 위한 처분입니다.</li>
								<li>- 보호처분 결정에서 입교할 소년원과 입교할 날짜를 정하면, 정해진 날짜에 해당 소년원에 입교하게 됩니다. 보호처분 결정에서 입교할 날짜를 별도로 정하지 않으면 보호처분 결정을 하는 날 바로 소년원에 입교합니다.</li>
							</ul>
							<h1 class="sub-tit"><span>(9) 9호 처분</span></h1>
							<ul class="no-bullet">
								<li>- 단기로 소년원에 송치하는 처분입니다. 단기로 소년원에 송치된 소년의 보호기간은 최장 6개월입니다.</li>
								<li>- 소년원에 수용된 보호소년은 각자의 특성에 따라 학교교육을 계속 받거나 직업훈련을 받게 됩니다.</li>
							</ul>
							<h1 class="sub-tit"><span>(10) 10호 처분</span></h1>
							<ul class="no-bullet">
								<li>- 장기로 소년원에 송치하는 처분입니다. 장기로 소년원에 송치된 소년의 보호기간은 최장 2년입니다.</li>
								<li>- 소년원에 수용된 보호소년은 각자의 특성에 따라 학교교육을 계속 받거나 직업훈련을 받게 됩니다.</li>
							</ul>
						</section>
						<section class="business-detail-box">
							<h1 class="tit"><span>보호처분 결정의 효력</span></h1>
							<ul class="no-bullet">
								<li>- 소년의 보호처분은 그 소년의 장래의 신상에 어떠한 영향도 미치지 아니합니다(소년법 제32조 제6항). 소년의 장래에 불이익을 주지 않음으로써 소년이 새로운 생활을 잘 할 수 있도록 도우려는 것입니다.</li>
								<li>- 보호처분 결정은 결정이 내려지면 곧바로 집행하게 됩니다. 만약 결정에 대하여 승복하지 못하여 항고를 하더라도 그 집행이 정지되지 않습니다.</li>
								<li>- 보호처분을 받은 소년에 대하여는 같은 사건으로 다시 공소를 제기하거나 소년부에 송치할 수 없습니다.</li>
						</section>
							</ul>
					</section>
					<section class="business-detail no-bg" id="section04">
						<section class="business-detail-box">
							<h1 class="tit">소년재판</h1>
							<h1 class="sub-tit"><span>적용대상</span></h1>
							<p>가해자의 연령에 따른 형사책임 절차는 다음과 같습니다(「소년법」 제2조, 제4조제1항, 「형법」 제9조 및 「소년심판규칙」 제42조제1항).</p>
							<table class="style1 tac">
								<colgroup>
									<col>
									<col>
									<col>
								</colgroup>
								<thead>
									<tr>
										<th scope="col">가해자 연령</th>
										<th scope="col">소년보호재판	</th>
										<th scope="col">형사재판</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>10세 미만</td>
										<td>〇</td>
										<td>×</td>
									</tr>
									<tr>
										<td>10세 이상~14세 미만</td>
										<td>〇</td>
										<td>×</td>
									</tr>
									<tr>
										<td>14세 이상</td>
										<td>〇(19세 미만)</td>
										<td>〇</td>
									</tr>
								</tbody>
							</table>
						</section>
						<section class="business-detail-box">
							<h1 class="tit">소년보호재판</h1>
							<h1 class="sub-tit"><span>보호사건의 대상</span></h1>
							<p>다음 어느 하나에 해당하는 소년은 소년부의 보호사건으로 심리합니다(「소년법」 제4조제1항).</p>
							<ul>
								<li>죄를 범한 소년</li>
								<li>형벌 법령에 저촉되는 행위를 한 10세 이상 14세 미만인 소년</li>
								<li>다음에 해당하는 사유가 있고 그의 성격이나 환경에 비추어 앞으로 형벌 법령에 저촉되는 행위를 할 우려가 있는 10세 이상인 소년<br>집단적으로 몰려다니며 주위 사람들에게 불안감을 조성하는 성벽(性癖)이 있는 것 <br>정당한 이유 없이 가출하는 것 <br>술을 마시고 소란을 피우거나 유해환경에 접하는 성벽이 있는 것</li>
							</ul>
							<h1 class="sub-tit"><span>심리 절차</span></h1>
							<p>소년보호재판의 절차는 다음과 같습니다.</p>
							<h1 class="sub-tit"><span>보호처분의 결정</span></h1>
							<p>가해자가 받을 수 있는 보호처분은 다음과 같습니다(「소년법」 제32조제1항 참조).</p>
							<table class="style1">
								<colgroup>
									<col style="width:70px;">
									<col>
									<col>
									<col>
								</colgroup>
								<thead>
									<tr>
										<th scope="col">구분</th>
										<th scope="col">보호처분의 종류	</th>
										<th scope="col">기간 또는 시간 제한</th>
										<th scope="col">대상 연령</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>보호자 또는 보호자를 대신하여 소년을 보호 할 수 있는 사람에게 감호 위탁</td>
										<td>6개월 <br>(6개월 연장 가능)</td>
										<td>10세 이상</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>수강명령</td>
										<td>100시간 이내</td>
										<td>12세 이상</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>사회봉사명령</td>
										<td>200시간 이내</td>
										<td>14세 이상</td>
									</tr>
									<tr>
										<th scope="row">4</th>
										<td>보호관찰관의 단기 보호관찰</td>
										<td>1년</td>
										<td>10세 이상</td>
									</tr>
									<tr>
										<th scope="row">5</th>
										<td>보호관찰관의 장기 보호관찰</td>
										<td>2년(1년 연장가능)</td>
										<td>10세 이상</td>
									</tr>
									<tr>
										<th scope="row">6</th>
										<td>「아동복지법」에 따른 복지시설이나 그 밖의 소년보호시설에 감호 위탁</td>
										<td>6개월 <br>(6개월 연장 가능)</td>
										<td>10세 이상</td>
									</tr>
									<tr>
										<th scope="row">7</th>
										<td>병원, 요양소 또는「보호소년 등의 처우에 관한 법률」에 따른 소년의료보호시설에 위탁</td>
										<td>6개월 <br>(6개월 연장 가능)</td>
										<td>10세 이상</td>
									</tr>
									<tr>
										<th scope="row">8</th>
										<td>1개월 이내의 소년원 송치</td>
										<td>1개월 이내</td>
										<td>10세 이상</td>
									</tr>
									<tr>
										<th scope="row">9</th>
										<td>단기 소년원 송치</td>
										<td>6개월 이내</td>
										<td>10세 이상</td>
									</tr>
									<tr>
										<th scope="row">10</th>
										<td>장기 소년원 송치</td>
										<td>2년 이내</td>
										<td>12세 이상</td>
									</tr>
								</tbody>
							</table>
							<h1 class="sub-tit"><span>보호처분의 취소</span></h1>
							<p>보호처분이 계속 중일 때에 사건 본인이 처분 당시 19세 이상인 것으로 밝혀진 경우에는 소년부 판사는 결정으로써 그 보호처분을 취소하고 다음에 따라 사건을 처리해야 합니다(「소년법」 제38조제1항).</p>
							<ul class="no-bullet">
								<li>1. 검사·경찰서장의 송치 또는 가해자를 발견한 보호자 또는 학교·사회복리시설·보호관찰소(보호관찰지소를 포함)의 장이 이를 관할 소년부에 통고한 사건인 경우에는 관할 지방법원에 대응하는 검찰청 검사에게 송치</li>
								<li>2. 소년에 대한 피고사건을 심리한 결과 보호처분에 해당할 사유가 있다고 인정하여 법원이 송치한 사건인 경우에는 송치한 법원에 이송</li>
							</ul>
							<ul class="no-bullet">
								<li>가해자에 대한 보호처분이 계속 중일 때에 사건 본인이 행위 당시 10세 미만으로 밝혀진 경우 또는 보호처분이 계속 중일 때에 처분 당시 10세 미만으로 밝혀진 경우에 소년부 판사는 결정으로써 그 보호처분을 취소해야 합니다(「소년법」 제38조제2항).</li>
								<li>보호처분을 받은 가해자에 대하여는 그 심리가 결정된 사건은 다시 공소를 제기하거나 소년부에 송치할 수 없습니다(「소년법」 제53조 본문).</li>
							</ul>
							<ul>
								<li>단, 위 1.의 경우에는 공소를 제기할 수 있습니다(「소년법」 제53조 단서).</li>
							</ul>
						</section>
						<section class="business-detail-box">
							<h1 class="tit">형사재판</h1>
							<h1 class="sub-tit"><span>적용대상</span></h1>
							<p>학교폭력의 가해자가 14세 이상인 경우에는 「소년법」의 적용대상이 되는 동시에 「형법」의 적용대상이 되므로, 보호처분 또는 형사처벌을 받을 수 있습니다(「소년법」 제2조 및 「형법」 제9조 참조).</p>
							<h1 class="sub-tit"><span>사건처리 절차</span></h1>
							<p>형사사건의 처리 절차는 다음과 같습니다.</p>
							<div class="img-wrap"><img src="/images/sub/crime.jpg" alt=""></div>
							<h1 class="sub-tit"><span>배상명령</span></h1>
							<p>학교폭력 사건에 대해서 법원이 유죄판결을 선고하는 경우 그 유죄판결과 동시에 범죄행위로 인해 발생한 직접적인 물적 피해 및 치료비 손해의 배상을 명하거나, 피고인과 범죄피해자 사이에 합의된 손해배상액에 관하여 배상을 명할 수 있습니다(「소송촉진 등에 관한 특례법」 제25조제1항 참조).</p>
						</section>
					</section>
				</section>
			</section>
		</section>
	</section>
</section>
<!-- //sub-conts-wrap -->

<?php
include_once('../_footer.php');
?>