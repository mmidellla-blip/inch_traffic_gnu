<?php
 include('_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/areasCaseList.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$gr_id ='speCaseList';
include_once(G5_LIB_PATH.'/latest.lib.php');
?>


<section class="case_section_wrap"> 
    <div class="js-case-slider"> <?php 
        include_once(G5_LIB_PATH.'/thumbnail.lib.php');
        $thumb_width = '238';
        $thumb_height = '288';
        $result=sql_query("select ca_name, wr_subject, wr_id, wr_content, wr_datetime, wr_id, wr_10, wr_1 from g5_write_case order by wr_id desc limit 12");
        for ($i=0; $list=sql_fetch_array($result); $i++){
        ?>
        <div class="case_card"> 
            <a href="/bbs/board.php?bo_table=case&wr_id=<?php echo $case['wr_id']?>" class="case_link">
                <div class="case_thumb">
                <?php 
                    $thumb = get_list_thumbnail("case", $list['wr_id'], $thumb_width, $thumb_height);
                    if($thumb['src']) {
                        $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
                    } else {
                        $img_content = '<span class="no-image">no image</span>';
                    }
                    echo $img_content;
                ?>
                </div>
                <div class="case_content">
                    <span class="case_subject"><?php echo cut_str($list['wr_subject'],100)?></span>
                    <?php
                    $list['wr_content'] = str_replace("BODY CONTENT","",$list['wr_content']);
                    $list['wr_content'] = str_replace("본문 내용","",$list['wr_content']);
                    $list['wr_content'] = strip_tags($list['wr_content'], "<p>"); 
                    ?>
                    <div class="case_summary"><?php echo conv_content($list['wr_content'], 10); ?></div>
                </div>
            </a>
        </div>
        <?php } if(!$result){?>
            <div class="no_data">등록된 게시물이 없습니다.</div>
        <?}?>
    </div>
</section>


<!-- Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function(){
        
        $('.js-case-slider').slick({
            slidesToShow: 4, 
            slidesToScroll: 1, 
            infinite: true,
            
            prevArrow: '<button type="button" class="slider-arrow slider-prev"></button>',
            nextArrow: '<button type="button" class="slider-arrow slider-next"></button>',
            responsive: [
                {
                    breakpoint: 1025, 
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768, 
                    settings: {
                        slidesToShow: 1, 
                        slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: '20px',
                        autoplay: true,
                        autoplaySpeed: 4000,
                        pauseOnFocus: false, 
                        pauseOnHover: false,
                        pauseOnDotsHover: false
                    }
                }
            ]
        });
    });
</script>