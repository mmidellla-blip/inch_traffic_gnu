<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/divorce.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "피해자 고소대리";
$gr_id ='business';
include_once('../_header.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<!-- sub-conts-wrap -->
<section class="sub-conts-wrap">
	
	<section class="business-wrap">
		<section class="business-inner">
			<h1>피해자항고대리<br><span>01</span></h1>
			<section class="business-conts">
				<section class="business-tit-wrap">
					<p><strong>“성범죄 피해를 당해 경찰에 신고를 하였습니다.그런데 증거가 부족하다고 하면서 검사측이 무혐의 처분을 내렸습니다. 게다가 가해자가 오히려 저를 무고죄로 고소한 상황입니다.”</strong></p>
					</p>
				</section>
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
						<p>용기를 내어 고소를 했지만 검찰측이 불기소 처분을 내린 상황인가요?억울하고 답답한 상황, 우리가 돕겠습니다.<br>- 피해자전담센터 일동-
							
						</p>
					<a href="#">항고 인용 사례 바로가기</a>
					</section>
				</section>	
				<section class="business-tit-wrap">
					<p>성범죄 피해를 당해 수사기관에 고소를 하였으나, 검찰측에서 기소를 하지 않는 경우가 있습니다. 이런 경우 불기소처분을 내렸다고 하는데요. 대한민국의 경우 검찰에게 기소를 독점할 권리가 부여되어 있습니다. 즉, 기소를 할지 말지 여부는 검사의 재량이라는 점입니다.<br><br>
하지만 분명히 성범죄 피해를 당했는데도 혐의가 충분하지 않다는 등의 이유로 불기소 처분을 받는다면 황당할 수밖에 없습니다. 게다가 이런 경우 많은 가해자들이 뻔뻔하게도 오히려 피해자를 상대로 무고죄로 고소를 하곤 합니다. 오히려 성범죄 피해자가 무고죄의 가해자가 되어 수사를 받는 일이 발생하는 것입니다.<br><br>
이런 일이 발생할 경우 피해자는 어떻게 해야 할까요? 우선 무고죄로 고소당한 상황에 대처해야 합니다. 또한 검찰측에 다시 수사를 해서 기소를 해달라는 내용의 ‘검찰항고’를 진행해야 합니다. 하지만 현실적으로 항고 인용률은 10% 정도 밖에 되지 않습니다. 90%는 항고를 하더라도 기각되죠.<br><br>
이럴 때 필요한 것이 바로 오랜 연륜과 실무경험을 갖춘 성범죄피해자변호사의 조력을 받는 것입니다. <br>
실제로 당소의 경우 항고대리를 통해 높은 검찰항고 인용률을 보이고 있습니다. 또한 무고죄로 고소를 한 경우에는 오히려 이쪽에서 반론을 제시하여 소송까지 가지도 않고 수사단계에서 사건을 끝내도록 조력합니다.<br><br>
성범죄 피해자로써, 불기소 처분을 받아 고통받고 계시다면 당소로 문의주시기 바랍니다.


						
					</p>
				</section>	
								
				
			</section>
		</section>

		<section class="business-inner">
			<h1>동주 성범죄피해자<br>전담센터가 하는 일<br><span>02</span></h1>
			<section class="business-conts">
				<section class="business-tit-wrap">
					<p><span>1. 30일이 지나지 않았는지 확인</span></p>
					</p>
				</section>
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
						<p>항고의 경우 불기소처분을 받은 날로부터 30일 안에 신청해야 합니다. 만약 30일이 이미 지났다면 예외적인 상황을 제외하고는 신청을 할 수 없습니다. 대표적인 예외적인 상황은 항고를 할 수 있을만한 새로운 증거가 발견된 경우입니다.						
						</p>
						
					</section>
				</section>	
				<section class="business-tit-wrap">
					<p><span>2. 검찰청에 찾아가 불기소결정서 확인</span></p>
					
				</section>
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
						<p>당소가 항고대리를 맡게 될 경우, 우선 검찰청에 찾아가 불기소결정서를 발급받습니다. 불기소결정서에는 왜 검사측이 기소를 하지 않았는지 내용이 상세하게 기재되어 있습니다. 해당 이유를 살펴본 후 어떻게 항고이유서를 작성할지 판단합니다.
						
						</p>
						
					</section>
				</section>	
				<section class="business-tit-wrap">
					<p><span>3. 항고이유서 작성</span></p>
					
				</section>
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
						<p>불기소결정서를 확인한 후, 검찰측의 불기소가 왜 부당한지에 대해 각 목차마다 구체적으로 작성합니다. <br><br>
						만약 사실관계 측면에서 잘못 작성했거나 피해자가 잘못 진술한 부분이 있다면 시정을 요구하고, 법률 해석적 관점에서 잘못된 점이 있다고 판단된다면 판례와 법률 등에 대한 제대로 된 해석을 기재합니다.<br><br>
						만에 하나 항고이유서를 제출하였음에도 불구하고 또 검찰측에서 항고기각결정을 내리게 될 경우, 당소는 재항고를 하거나 재정신청, 헌법소원 등을 진행합니다.			
						</p>
						
					</section>
				</section>	

			</section>
		</section>	

		<section class="business-inner">
			<h1>분야별 전문가가 모인<br>로이어팀 상시대기<br><span>03</span></h1>
			<section class="business-conts">
				<section class="business-tit-wrap">
					<p>
						<img src="/images/sub/school06-img02.png">
					</p>
				</section>	
			<section class="business-detail no-bg on">
					<section class="business-detail-box">
						<p>성범죄의 경우 형사소송만 문제되는 것이 아니라 차후에 민사소송까지 함께 문제되는 경우가 많습니다. 가해자에게 금전배상을 받기 위해서는 민사소송을 따로 청구해야 하기 때문입니다.<br><br>
당소의 경우 대한변호사협회 형사전문변호사와 민사전문변호사 등 분야별 협력이 가능한 로이어팀이 상시 대기하고 있습니다. 성범죄 피해자를 위한 형사소송 조력부터, 차후 금전배상을 위한 민사소송까지 당소에서 한 번에 해결 하실 수 있습니다.<br><br>
						<strong>가해자에 대한 합당한 처벌을 위하여<br>			</strong>			
						</p>
					<a href="#">지금 바로 상담하기</a>
					</section>
				</section>				

			</section>
		</section>
	<?php
			include_once('business.php');
			?>		
				
	</section>
</section>
<!-- //sub-conts-wrap -->

<?php
include_once('../_footer.php');
?>