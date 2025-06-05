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
			<h1>합의대행<br><span>01</span></h1>
			<section class="business-conts">
				<section class="business-tit-wrap">
					<p><strong>“성범죄 피해를 당했는데이번에 합의를 진행하려고 합니다.<br>가해자 얼굴은 보기 싫은데, 합의대행 가능한가요?”</strong></p>
					</p>
				</section>
				<section class="business-detail no-bg on">
					<section class="business-detail-box">
						<p>가해자와 합의하여 합의서를 작성해주었으나 막상 합의금을 제대로 받지 못 하는 경우가 많습니다.<br>안전하고 확실하게 성범죄 합의를 진행하고 싶으시다면 지금 바로 문의주세요.<br>-  성범죄전담센터 일동-</p>
					<a href="#">성공사례 바로가기</a>
					</section>
				</section>	
				<section class="business-tit-wrap">
					<p>피해자의 경우 형사고소를 진행할 수도 있지만, 가해자와 중간에 합의를 하여 고소 자체를 취하하 할 수도 있습니다. 혹은 고소를 하여 형사소송이 진행되는 중에도 합의를 할 수 있는데요.<br><br>
					고소 전 합의의 경우 통상 “향후 민,형사상 어떠한 이의도 제기하지 않는다”와 같은 조항이 들어가고 이에 대한 합의금을 지급받게 됩니다.<br><br>
					그렇다면 고소를 한 이후 합의를 한 경우에는 어떻게 될까요? 우선 성범죄의 경우에는 반의사불벌죄에 해당하지 않아 고소취하가 불가능합니다. 하지만 재판 과정에서 피해자와 합의를 했다는 부분을 양형조건으로 참작하여 가해자의 형량이 감형될 수 있습니다.<br><br>
					따라서 합의는 제대로 진행해야 하는데요. 하지만 막상 합의를 해놓고도 합의금을 지불하지 않거나, 혹은 터무니 없이 적은 합의금을 입금 받는 경우가 있습니다. 문제는 피해자들이 법에 대해 잘 모르다보니 본인이 받게 될 합의금의 액수가 적당한 금액인지 모른다는 점입니다. 따라서 합의는 혼자 진행하기 보다는 연륜과 실무경험을 갖춘 변호사에게 맡기는 것이 좋습니다.<br><br>
					또한 피해자의 경우 아무리 합의를 하더라도 나에게 피해를 준 가해자측과 직접 얼굴을 맞대고 합의를 논하고 싶지 않을 수 있습니다. 이런 경우 변호사를 선임한다면 피해자를 대신하여 직접 가해자 또는 가해자의 변호인과 합의를 대신 진행해드립니다.<br><br>
					당소의 경우 변호사들의 공식협회인 대한변호사협회에서 공식적으로 인증한 민사법 전문 자격증을 부여받은 민사전문변호사가 자리하고 있습니다. 성범죄에 해당 해박한 지식과 민사법 지식까지 두루 갖춘 곳, 지금 합의대행을 원하신다면 당소로 문의주시기 바랍니다.
					
					</p>
				</section>	
							
				
			</section>
		</section>


		<section class="business-inner">
			<h1>분야별 전문가가 모인<br>로이어팀 상시대기<br><span>02</span></h1>
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
						<strong>피해자가 만족스러운 합의, 동주가 해내겠습니다<br>			</strong>			
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