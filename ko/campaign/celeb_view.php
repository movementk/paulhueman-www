<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php');
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/campaign.css" rel="stylesheet">
</head>
<body class="sub campaign">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
	<main id="content" class="celeb-view">
		<div class="container">
			<!-- page-path -->
			<div class="page-path">
				<ol class="breadcrumb">
					<li><a href="/ko/"><i class="icon-home"></i></a></li>
					<li><a href="#">CAMPAIGN</a></li>
					<li class="active">CELEB</li>
				</ol>
			</div>
			<div class="campaign-view">
				<div class="row">
					<div class="col-xs-12 col-lg-2">
						<div class="lnb">
							<h2 class="visible-lg">CAMPAIGN</h2>
							<ul>
								<li class="active"><a href="<?php echo _langBase; ?>/campaign/celeb_list.php">CELEB</a></li>
								<li><a href="<?php echo _langBase; ?>/campaign/look_book.php">LOOKBOOK</a></li>
								<li><a href="<?php echo _langBase; ?>/campaign/video_list.php">VIDEO</a></li>
								<li><a href="<?php echo _langBase; ?>/campaign/diary_list.php">DIARY</a></li>
							</ul>
						</div>
					</div>
					<?php
					$sql = " select * from g5_write_{$bo_table} where wr_id = '{$wr_id}' ";
					$row = sql_fetch($sql);
					?>
					<div class="col-xs-12 col-lg-10">
						<!--div class="page-header">
							<h2><?php echo $row["wr_subject"]; ?></h2>
							<p class="font-lato"><?php echo substr($row["wr_datetime"],0,10)?></p>
						</div-->
						<!-- 본문 내용 시작 { -->
						<div id="bo_v_con"><?php echo get_view_thumbnail($row['wr_content']); ?></div>
						<?php//echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
						<!-- } 본문 내용 끝 -->
						<!--
						<figure class="details-img">
							<img src="/ko/assets/images/campaign/view_img01.jpg" class="img-responsive" alt="상세이미지">
							<figcaption>
								As Capricorns, Kate Moss, Betty White, Michelle Obama, Muhammad Ali and Martin Luther King,
								Jr. are all celebrating their birthdays inthe upcoming month. Here, our astrologyexpert Susie Cox tells us what we can expect under this sign <br class="visible-xs">
								(December 21st – January 19th).
							</figcaption>
						</figure>
						<div class="product-front">
							<div class="row">
								<div class="col-xs-12 col-md-9">
									<p class="product-img">
										<img src="/ko/assets/images/campaign/product_glasses01.jpg" class="img-responsive" alt="상품 측면이미지">
									</p>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="product-info">
										<h3>PHS-1089D Col.5</h3>
										<p class="amount">255,000 won</p>
										<dl>
											<dt>LENS WIDTH</dt>
											<dd>49</dd>
											<dt>NOSE BRIDGE</dt>
											<dd>22</dd>
											<dt>FRAME SIDE</dt>
											<dd>143</dd>
											<dt>MATERIAL</dt>
											<dd>TR</dd>
										</dl>
									</div>
								</div>
							</div>
						</div>
						<div class="product-aspect">
							<p class="product-img">
								<img src="/ko/assets/images/campaign/product_glasses02.jpg" class="img-responsive" alt="상품 측면이미지">
							</p>
							<div class="product-feature">
								<p>
									폴휴먼 PHS-1070A 모델 선글라스는 둥근 렌즈와 곡선의 안경 브릿지가<br>
									착용했을때 콧대를 입체적으로 연출해주어 더욱 예쁜 패션아이템입니다!
								</p>
								<p>
									선글라스의 아이보리 프론트는 스킨톤과 어우러져<br>
									부드러운 세련미를 연출해 주어 도시적인 분위기를 연출하기에 안성맞춤이죠^^<br>
									하금테 스타일의 깔끔한 디자인이 눈길을 사로잡죠!
								</p>
								<p>
									민효린씨처럼 세련된 분위기를 연출하고 싶다면 폴휴먼 선글라스로 포인트를 더해보세요~<br>
									아이템 하나만으로도 멋진 분위기를 연출 할 수 있습니다.
								</p>
							</div>
						</div>
						-->
					</div>
				</div>
			</div>
		</div><!--// Container -->
	</main><!--// Main Content -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/docfoot.php'); ?>
</body>
</html>