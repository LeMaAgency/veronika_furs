<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters['MESS_TITLE'] = array(
	'PARENT' => 'VISUAL',
	'NAME' => GetMessage('CP_MESS_TITLE'),
	'TYPE' => 'STRING',
	'DEFAULT' => GetMessage('CP_BCS_MESS_TITLE_DEFAULT')
);
$arTemplateParameters['MESS_TITLE_LINK'] = array(
	'PARENT' => 'VISUAL',
	'NAME' => GetMessage('CP_MESS_TITLE_LINK'),
	'TYPE' => 'CHECKBOX',
	'DEFAULT' => 'N'
);

$arListResponsiveCarousel = array(
	'1' => '1',
	'2' => '2',
	'3' => '3',
	'4' => '4',
	'5' => '5',
	'6' => '6',
	'7' => '7',
	'8' => '8'
);
$arTemplateParameters['RESPONSIVE_CAROUSEL_ITEMS_LG'] = array(
	'PARENT' => 'VISUAL',
	'NAME' => GetMessage('RESPONSIVE_CAROUSEL_ITEMS_LG'),
	'TYPE' => 'LIST',
	'VALUES' => $arListResponsiveCarousel,
	'DEFAULT' => '5',
);
$arTemplateParameters['RESPONSIVE_CAROUSEL_ITEMS_MD'] = array(
	'PARENT' => 'VISUAL',
	'NAME' => GetMessage('RESPONSIVE_CAROUSEL_ITEMS_MD'),
	'TYPE' => 'LIST',
	'VALUES' => $arListResponsiveCarousel,
	'DEFAULT' => '4',
);
$arTemplateParameters['RESPONSIVE_CAROUSEL_ITEMS_SM'] = array(
	'PARENT' => 'VISUAL',
	'NAME' => GetMessage('RESPONSIVE_CAROUSEL_ITEMS_SM'),
	'TYPE' => 'LIST',
	'VALUES' => $arListResponsiveCarousel,
	'DEFAULT' => '3',
);
$arTemplateParameters['RESPONSIVE_CAROUSEL_ITEMS_XS'] = array(
	'PARENT' => 'VISUAL',
	'NAME' => GetMessage('RESPONSIVE_CAROUSEL_ITEMS_XS'),
	'TYPE' => 'LIST',
	'VALUES' => $arListResponsiveCarousel,
	'DEFAULT' => '2',
);
$arTemplateParameters['RESPONSIVE_CAROUSEL_ITEMS_MOBILE'] = array(
	'PARENT' => 'VISUAL',
	'NAME' => GetMessage('RESPONSIVE_CAROUSEL_ITEMS_MOBILE'),
	'TYPE' => 'LIST',
	'VALUES' => $arListResponsiveCarousel,
	'DEFAULT' => '2',
);
$arTemplateParameters['SLIDER_AUTOPLAY'] = array(
	'PARENT' => 'VISUAL',
	'NAME' => GetMessage('SLIDER_AUTOPLAY'),
	'TYPE' => 'CHECKBOX',
	'DEFAULT' => 'N',
);
$arTemplateParameters['SLIDER_SPEED'] = array(
	'PARENT' => 'VISUAL',
	'NAME' => GetMessage('SLIDER_SPEED'),
	'TYPE' => 'STRING',
	'DEFAULT' => '1000',
);
$arTemplateParameters['SLIDER_SHOW_SPEED'] = array(
	'PARENT' => 'VISUAL',
	'NAME' => GetMessage('SLIDER_SHOW_SPEED'),
	'TYPE' => 'STRING',
	'DEFAULT' => '8000',
);
$arTemplateParameters['SLIDER_AUTOPLAY_HOVER_PAUSE'] = array(
	'PARENT' => 'VISUAL',
	'NAME' => GetMessage('SLIDER_AUTOPLAY_HOVER_PAUSE'),
	'TYPE' => 'CHECKBOX',
	'DEFAULT' => 'N',
);
$arTemplateParameters['MOUSE_DRAG'] = array(
	'PARENT' => 'VISUAL',
	'NAME' => GetMessage('MOUSE_DRAG'),
	'TYPE' => 'CHECKBOX',
	'DEFAULT' => 'Y',
);
$arTemplateParameters['SLIDER_NAV'] = array(
	'PARENT' => 'VISUAL',
	'NAME' => GetMessage('SLIDER_NAV'),
	'TYPE' => 'CHECKBOX',
	'DEFAULT' => 'N',
);
$arTemplateParameters['SLIDER_LOOP'] = array(
	'PARENT' => 'VISUAL',
	'NAME' => GetMessage('SLIDER_LOOP'),
	'TYPE' => 'CHECKBOX',
	'DEFAULT' => 'N',
);