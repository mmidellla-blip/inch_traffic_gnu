<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/civil.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "원클릭소송센터";
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
					<h1>법무법인 동주는 단 한 명의 의뢰인도  포기하지 않습니다 <br><em>소송이 필요하지 않은 소액분쟁을 겪고 계신가요? <br>당소만의 AI 시스템을 통한 자가진단 프로그램으로 간편하고 신속하게 도와 드립니다.</em></h1>
					<a href="#">간편소송센터 바로가기</a>
				</section>
				<section class="business-box">
					<table>
						<thead>
							<tr>
								<th scope="col">소송 전 단계</th>
								<th scope="col">소송 단계</th>
								<th scope="col">집행 단계</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<ul class="no-bullet">
										<li>1. 내용증명 작명</li>
										<li>2. 지급명령 작성</li>
										<li>3. 임차권등기명령 신청</li>
										<li>4. 그 외 기타 서류 작성</li>
									</ul>
								</td>
								<td>
									<ul class="no-bullet">
										<li>1. 소장 작성</li>
										<li>2. 답변서 작성</li>
										<li>3. 증거자료 수집</li>
										<li>4. 보전처분 신청</li>
									</ul>
								</td>
								<td>
									<ul class="no-bullet">
										<li>1. 채무자 재산명시 신청</li>
										<li>2. 채무자 재산조회 신청</li>
										<li>3. 압류 절차 진행</li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
				</section>
			</section>
		</section>
		<section class="business-inner">
			<h1>한 눈에 보는 간이소송절차 <br><span>02</span></h1>
			<section class="business-conts">
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
						<h1 class="tit">간이소송절차</h1>
						<h1 class="sub-tit"><span>내용증명</span></h1>
						<p>내용증명은 우편물의 내용과 발송사실만을 증명해 줄 뿐 법적효력이 있는 것은 아니지만, 채무자를 심적으로 압박하여 변제의 이행을 촉구하는 기능이 있습니다. <br><br>
						‘언제까지 갚지 않으면 법적조치를 취하겠다.’는 취지의 내용이 담긴 문서를 받으면 그때서야 빚을 갚기 위해 서두르게 되는 심리적 압박과 재촉이 가능합니다.</p>
						<h1 class="sub-tit"><span>지급명령</span></h1>
						<p>지급명령은 금전을 받아야 한다는 청구가 인정되면 법원에 출석시키지 않고 주장만으로 채무자에게 변제하도록 명하는 재판입니다. 간이하고 일반 소송보다 훨씬 저렴한 비용으로 분쟁을 해결할 수 있는 독촉절차입니다.</p>
						<h1 class="sub-tit"><span>임차권등기</span></h1>
						<p>임차인에게 보증금을 돌려받지 못하고 이사를 해야 하는 경우, 대항력 및 우선변제권을 상실하게 되어 보증금을 돌려받기 어려워집니다. <br>
						이러한 문제를 해결하기 위해 점유를 상실하거나, 주민등록을 전출하더라도 종전 취득한 대항력 및 우선변제권을 그대로 유지시키는 제도입니다.</p>
						<h1 class="sub-tit"><span>한정승인</span></h1>
						<p>피상속인에게 물려받은 재산 내에서 채무와 유증을 변제하는 제도입니다.</p>
						<h1 class="sub-tit"><span>임의배당</span></h1>
						<p>임의배당(재산분배)는 한정승인 후 잔여 재산을 채권자들에게 분배하도록 하는 절차입니다. <br>
						한정승인을 한 경우 잔여 재산이 있다면 반드시 채권자들에게 공평하게 분배하여야 합니다. <br>
						잔여재산이 있는데도 임의배당을 하지 않으면 한정승인의 효력 상실 또는 손해배상의 책임을 질 수 있습니다.</p>
						<h1 class="sub-tit"><span>상속재산파산</span></h1>
						<p>상속재산파산은 한정승인 상속인과 상속채권자를 위한 제도입니다. <br>
						상속재산으로 상속채권자 및 유증을 받은 자에 대한 채무를 완전히 변제하기 어려운 경우 파산관재인을 통해 상속재산과 상속인 고유재산을 분리하여 청산할 수 있도록 하는 파산절차입니다. <br>
						이 상속재산파산의 선고를 받은 경우 상속인은 한정승인을 한 것으로 간주되며, 상속채권자 및 유증을 받은 자는 전액에 대한 파산채권자로 권리 행사가 가능합니다.</p>
						<h1 class="sub-tit"><span>상속포기</span></h1>
						<p>상속포기는 피상속인의 재산을 일체 물려받지 않고 포기하는 제도입니다. <br>
						상속포기자의 상속분은 후순위 상속인에게 귀속됩니다. 모든 상속인이 상속을 포기한다면 다음 순위자가 상속인이 됩니다.</p>
						<h1 class="sub-tit"><span>합의대행</span></h1>
						<p>합의에도 전략이 필요합니다. <br>
						피해자와 합의하지 못하면 강한 처벌을 면하기 어렵습니다. <br>
						대부분의 피해자는 가해자와 합의를 원하지 않아 통화조차 어렵습니다. <br>
						명예훼손,모욕,성범죄 등 형사범죄는 합의를 하지 않을 경우 실형 선고 가능성이 높습니다. <br>
						다수의 합의를 이끌어낸 동주에서 적정 합의금과 노련한 설득으로 도와 드립니다.</p>
						<h1 class="sub-tit"><span>형사보상청구</span></h1>
						<p>형사보상은 누명으로 구속되거나 형의 집행을 받은 사람에 대해 국가가 손해를 보상해주는 제도입니다. <br>
						보통의 재판 및 재심, 상소권회복, 비상상고의 상소 절차에서 무죄가 인정되는 경우 변호사 비용, 숙박료, 여비 등에 대한 보상을 받을 수 있습니다.</p>
						<h1 class="sub-tit"><span>고소장작성대행</span></h1>
						<p>경찰서를 통해 고소장을 접수하면 고소장이 반려되거나, 처리가 늦어지는 경우가 많습니다. <br>
						고소장에는 명확한 사실관계가 정리되어 있지 않거나, 법리적으로 오류가 있는 경우가 많은데, 수사기관에서 수사의 방향을 결정짓는데 기본이 되는 중요한 서면입니다.</p>
						<h1 class="sub-tit"><span>압류신청</span></h1>
						<p>압류명령이 제3채무자에게 송달되면, 채무자에게 송달되지 않았다고 하더라도 효력이 발생합니다. 압류명령을 받은 제3채무자는 채무자에 대한 지급이 금지됩니다. <br>
						[압류+재산명시+재산조회+경매 등 강제집행 일체] <br>
						강제집행은 채권자를 위한 제도입니다. 국가권력에 기하여 강제적으로 실현하는 법적 절차입니다. <br>
						강제집행에 필요한 일체의 모든 절차를 이행합니다.</p>
						<div class="shortcut">
							<dl>
								<dt></dt>
								<dd><a href="#" target="_blank">간편소송센터 바로가기</a></dd>
							</dl>
						</div>
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