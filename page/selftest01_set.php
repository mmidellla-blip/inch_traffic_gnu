<?php 

	$restriction = '';
	$description = '';

	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.03% ~ 0.079%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "집행유예 기간 중")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
		
	}

	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.03% ~ 0.079%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "집행유예 기간 중")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.03% ~ 0.079%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "금고 이상의 형 종료/면제 후 3년 이내")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.03% ~ 0.079%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음" && $_POST['wr_5'] == "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "3";
			
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.03% ~ 0.079%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "금고 이상의 형 종료/면제 후 3년 이내" && $_POST['wr_5'] != "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	
	
		
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.03% ~ 0.079%" && $_POST['wr_3'] == "1회 적발")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';	
		$action = "5";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.03% ~ 0.079%" && $_POST['wr_3'] == "2회 이상 적발")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';	
		$action = "5";
	}


	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.08% ~ 0.19%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "집행유예 기간 중")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.08% ~ 0.19%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "금고 이상의 형 종료/면제 후 3년 이내")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.08% ~ 0.19%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] == "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "3";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.08% ~ 0.19%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] != "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.08% ~ 0.19%" && $_POST['wr_3'] != "없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}



	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.2% 이상" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "집행유예 기간 중")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.2% 이상" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "금고 이상의 형 종료/면제 후 3년 이내")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.2% 이상" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] == "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "5";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.2% 이상" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] != "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "0.2% 이상" && $_POST['wr_3'] != "없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}


	
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "기억나지 않음" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "집행유예 기간 중")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "기억나지 않음" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "금고 이상의 형 종료/면제 후 3년 이내")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "기억나지 않음" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] == "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "3";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "기억나지 않음" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] != "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "기억나지 않음" && $_POST['wr_3'] != "없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	
	
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "음주측정 불응" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "집행유예 기간 중")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "음주측정 불응" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "금고 이상의 형 종료/면제 후 3년 이내")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "음주측정 불응" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] == "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "3";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "음주측정 불응" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] != "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 경과" && $_POST['wr_7'] == "음주측정 불응" && $_POST['wr_3'] != "없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "4";
	}
	
		
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "0.03% ~ 0.079%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "집행유예 기간 중")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "0.03% ~ 0.079%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "금고 이상의 형 종료/면제 후 3년 이내")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "0.03% ~ 0.079%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] == "사고 없음")
	{
		$restriction = '<strong>스탠다드 서비스</strong>를 추천드립니다!';
		$description = '';
		$action = "1";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "0.03% ~ 0.079%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] != "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "0.03% ~ 0.079%" && $_POST['wr_3'] != "없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';	
		$action = "5";
	}
	
	
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "0.08% ~ 0.19%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "집행유예 기간 중")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "0.08% ~ 0.19%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "금고 이상의 형 종료/면제 후 3년 이내")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "0.08% ~ 0.19%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] == "사고 없음")
	{
		$restriction = '<strong>스탠다드 서비스</strong>를 추천드립니다!';
		$description = '';
		$action = "1";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "0.08% ~ 0.19%" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] != "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "0.08% ~ 0.19%" && $_POST['wr_3'] != "없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	
	
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "0.2% 이상" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "집행유예 기간 중")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "0.2% 이상" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "금고 이상의 형 종료/면제 후 3년 이내")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "0.2% 이상" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] == "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "5";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "0.2% 이상" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] != "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "0.2% 이상" && $_POST['wr_3'] != "없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}

	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "기억나지 않음" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "집행유예 기간 중")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "기억나지 않음" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "금고 이상의 형 종료/면제 후 3년 이내")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "기억나지 않음" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] == "사고 없음")
	{
		$restriction = '<strong>스탠다드 서비스</strong>를 추천드립니다!';
		$description = '';
		$action = "1";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "기억나지 않음" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] != "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "기억나지 않음" && $_POST['wr_3'] != "없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "음주측정 불응" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "집행유예 기간 중")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "음주측정 불응" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "금고 이상의 형 종료/면제 후 3년 이내")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "음주측정 불응" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] == "사고 없음")
	{
		$restriction = '<strong>스탠다드 서비스</strong>를 추천드립니다!';
		$description = '';
		$action = "1";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "음주측정 불응" && $_POST['wr_3'] == "없음" && $_POST['wr_4'] == "해당사항 없음"  && $_POST['wr_5'] != "사고 없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}
	if($_POST['wr_6'] == "운전면허 취소처분 통지서를 받은 날로부터 90일 이내" && $_POST['wr_7'] == "음주측정 불응" && $_POST['wr_3'] != "없음")
	{
		$restriction = '<span><strong>프리미엄 서비스</strong>를 추천드립니다!</span>';
		$description = '';
		$action = "2";
	}

	$resp['code'] = 1;
	
	$resp['restriction'] = $restriction;
	$resp['description'] = $description;
	$resp['action'] = $action;

	echo json_encode($resp);
	exit;
?>


