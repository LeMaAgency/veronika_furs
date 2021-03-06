<?use Bitrix\Main\Localization\Loc;?>
<?global $theme;?>
<div class="top-panel <?php echo $theme->Option()->get('top_panel_color', '', SITE_ID); ?> hidden-xs hidden-sm">
			<div class="container">
				<div class="row">
					<div class="top-panel-left col-md-6 col-lg-6">
						<ul class="nav nav-pills">
									<li>
										<a href="tel:<?$APPLICATION->IncludeComponent(
													"bitrix:main.include",
													"",
													Array(
														"AREA_FILE_SHOW" => "file",
														"PATH" => SITE_DIR."include/contact.php",
														"AREA_FILE_RECURSIVE" => "N",
														"EDIT_MODE" => "html",
													),
													false,
													Array('HIDE_ICONS' => 'Y')
												);?>" class="phone">
											<span><?$APPLICATION->IncludeComponent(
													"bitrix:main.include",
													"",
													Array(
														"AREA_FILE_SHOW" => "file",
														"PATH" => SITE_DIR."include/contact.php",
														"AREA_FILE_RECURSIVE" => "N",
														"EDIT_MODE" => "html",
													),
													false,
													Array('HIDE_ICONS' => 'N')
												);?></span>
										</a>
									</li>
								</ul>
							<?$APPLICATION->IncludeComponent(
								"unisoftmedia:recall", 
								"toppanel", 
								array(
									"COMPONENT_TEMPLATE" => "toppanel",
									"USE_CAPTCHA" => "Y",
									"MESS_TITLE" => Loc::getMessage('RECALL_MESS_TITLE'),
									"POPUP_FORM" => "Y",
									"OK_TEXT" => Loc::getMessage('RECALL_OK_TEXT'),
									"EMAIL_TO" => "sale@assfat.ru",
									"INCLUDE_FIELDS" => array(
										0 => "NAME",
										1 => "PHONE",
										2 => "MESSAGE",
									),
									"REQUIRED_FIELDS" => array(
										0 => "NAME",
										1 => "PHONE",
									),
									"EVENT_MESSAGE_ID" => array(
										0 => "80",
									),
									"USE_MASK" => "Y",
									"USE_ONECLICK" => "N",
									"MASK_PHONE" => "+7 (999) 999-9999"
								),
								false,
								array(
									"HIDE_ICONS" => "N"
								)
							);?>
						</div>
						<div class="col-md-6 col-lg-6">
							<div class="top-panel-left pull-right">
								<?$APPLICATION->IncludeComponent(
									"unisoftmedia:wishlist.list", 
									".default", 
									array(
										"COMPONENT_TEMPLATE" => ".default",
										"PATH_TO_WISHLIST" => SITE_DIR."personal/wishlist/",
										"MAX_WIDTH_WISHLIST" => "70",
										"MAX_HEIGHT_WISHLIST" => "70",
										"SHOW_PRODUCTS" => "Y"
									),
									false
								);?>
								<?$APPLICATION->IncludeComponent(
									"bitrix:system.auth.form", 
									"auth", 
									array(
										"REGISTER_URL" => SITE_DIR."auth/",
										"PROFILE_URL" => SITE_DIR."personal/",
										"SHOW_ERRORS" => "N",
										"FORGOT_PASSWORD_URL" => "",
										"USE_AUTH_Wishlist" => "Y",
										"COMPONENT_TEMPLATE" => "auth"
									),
									false
								);
									?>
							</div>
						</div>
					</div>
				</div>
			</div>
					<header id="header">
						<div class="container">
							<div class="row">
								<div class="block-table">
									<div class="block-table-row">
											<div class="col-md-3 block-table-td hidden-xs hidden-sm">
												<!-- Search -->
												<div class="hsearch">
													<?php $APPLICATION->IncludeComponent(
														"bitrix:search.title", 
														"search", 
														array(
															"NUM_CATEGORIES" => "1",
															"TOP_COUNT" => "5",
															"ORDER" => "date",
															"USE_LANGUAGE_GUESS" => "N",
															"CHECK_DATES" => "N",
															"SHOW_OTHERS" => "N",
															"PAGE" => SITE_DIR."catalog/",
															"CATEGORY_0_TITLE" => "",
															"CATEGORY_0" => array(
																0 => "iblock_catalog",
																),
															"SHOW_INPUT" => "Y",
															"INPUT_ID" => "title-search-input",
															"CONTAINER_ID" => "title-search",
															"PRICE_CODE" => array(
																0 => "BASE",
																),
															"PRICE_VAT_INCLUDE" => "N",
															"PREVIEW_TRUNCATE_LEN" => "",
															"SHOW_PREVIEW" => "Y",
															"PREVIEW_WIDTH" => "75",
															"PREVIEW_HEIGHT" => "75",
															"CONVERT_CURRENCY" => "N",
															"COMPONENT_TEMPLATE" => "search",
															"CATEGORY_0_iblock_catalog" => array(
																0 => "all",
																)
															),
														false
														); ?>
													</div>
													<!-- /Search -->
											</div>
		                   <div class="col-xs-12 col-sm-12 col-md-6 block-table-td">
												<div class="logo text-center">
													<a href="<?php echo SITE_DIR ?>"><?$APPLICATION->IncludeComponent(
														"bitrix:main.include",
														"",
														Array(
															"AREA_FILE_SHOW" => "file",
															"PATH" => SITE_DIR."include/logo.php",
															"AREA_FILE_RECURSIVE" => "N",
															"EDIT_MODE" => "html",
														),
														false,
														Array('HIDE_ICONS' => 'N')
													);?>
													</a>
													<small class="slogon">
													<?$APPLICATION->IncludeComponent(
			                        "bitrix:main.include",
			                        "",
			                        Array(
			                            "AREA_FILE_SHOW" => "file",
			                            "PATH" => SITE_DIR."include/slogon.php",
			                            "AREA_FILE_RECURSIVE" => "N",
			                            "EDIT_MODE" => "html",
			                        ),
			                        false,
			                        Array('HIDE_ICONS' => 'N')
			                    );?>
		                    </small>
												</div>
											</div>
		                   <div class="col-md-3 block-table-td hidden-xs hidden-sm">
				                   <div class="hminicart">
					                   <!-- minicart -->
															<?php $APPLICATION->IncludeComponent(
																"bitrix:sale.basket.basket.line", 
																"minicart", 
																array(
																	"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
																	"PATH_TO_PERSONAL" => SITE_DIR."personal/",
																	"SHOW_PERSONAL_LINK" => "N",
																	"SHOW_NUM_PRODUCTS" => "Y",
																	"SHOW_TOTAL_PRICE" => "Y",
																	"SHOW_PRODUCTS" => "Y",
																	"POSITION_FIXED" => "N",
																	"SHOW_EMPTY_VALUES" => "Y",
																	"SHOW_AUTHOR" => "N",
																	"PATH_TO_REGISTER" => SITE_DIR."login/",
																	"PATH_TO_PROFILE" => SITE_DIR."personal/",
																	"SHOW_DELAY" => "N",
																	"SHOW_NOTAVAIL" => "N",
																	"SHOW_SUBSCRIBE" => "N",
																	"SHOW_IMAGE" => "Y",
																	"SHOW_PRICE" => "Y",
																	"SHOW_SUMMARY" => "Y",
																	"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
																	"COMPONENT_TEMPLATE" => "minicart",
																	"HIDE_ON_BASKET_PAGES" => "N"
																),
																false
															);?>
													<!-- /minicart -->
													</div>
		                   </div>
									</div>
								</div>
							</div>
						</div>
					</header>
					<section id="catalog_menu" class="catalog_menu type_<?php echo $theme->Option()->get('menu_color', '', SITE_ID); ?> hidden-xs hidden-sm">
						<div class="container">
							<div class="row">
								<div class="col-sm-4 col-md-3 col-lg-3 hidden-xs hidden-sm">
								<?php $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"catalog_vertical", 
	array(
		"COMPONENT_TEMPLATE" => "catalog_vertical",
		"ROOT_MENU_TYPE" => "catalog",
		"EFFECT_OPEN_MENU" => "fadeIn",
		"EFFECT_OPEN_SUBMENU" => "fadeIn",
		"HOME_OPEN" => "Y",
		"MIN_HEIGHT" => "374",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "3",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
									</div>
									<div class="col-sm-8 col-md-9 col-lg-9 hidden-xs hidden-sm">
										<?php $APPLICATION->IncludeComponent("bitrix:menu", "top_navbar", 
														Array(
															"ROOT_MENU_TYPE" => "top",
															"MAX_LEVEL" => "2",
															"CHILD_MENU_TYPE" => "left",
															"USE_EXT" => "N",
															"MENU_CACHE_TYPE" => "A",
															"MENU_CACHE_TIME" => "3600",
															"MENU_CACHE_USE_GROUPS" => "Y",
															"MENU_CACHE_GET_VARS" => "",
															"DELAY" => "N",
															"ALLOW_MULTI_SELECT" => "N",
														),
														false
													); ?>
											</div>
								</div>
							</div>
						</section>