<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\ModuleManager;

if(!CModule::IncludeModule("iblock"))
	return;

$mediaProperty = array(
	"" => GetMessage("MAIN_NO"),
);
$sliderProperty = array(
	"" => GetMessage("MAIN_NO"),
);
$propertyList = CIBlockProperty::GetList(
	array("sort"=>"asc", "name"=>"asc"),
	array("ACTIVE"=>"Y", "IBLOCK_ID"=>$arCurrentValues["IBLOCK_ID"])
);
while ($property = $propertyList->Fetch())
{
	$id = $property["CODE"]? $property["CODE"]: $property["ID"];
	if ($property["PROPERTY_TYPE"] == "S")
	{
		$mediaProperty[$id] = "[".$id."] ".$property["NAME"];
	}
	if ($property["PROPERTY_TYPE"] == "F")
	{
		$sliderProperty[$id] = "[".$id."] ".$property["NAME"];
	}
}

$arTemplateParameters = array(
	"DISPLAY_DATE" => array(
		"NAME" => GetMessage("TP_BND_DISPLAY_DATE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_NAME" => array(
		"NAME" => GetMessage("TP_BND_DISPLAY_NAME"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PICTURE" => array(
		"NAME" => GetMessage("TP_BND_DISPLAY_PICTURE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PREVIEW_TEXT" => array(
		"NAME" => GetMessage("TP_BND_DISPLAY_PREVIEW_TEXT"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"MEDIA_PROPERTY" => array(
		"NAME" => GetMessage("TP_BND_MEDIA_PROPERTY"),
		"TYPE" => "LIST",
		"VALUES" => $mediaProperty,
	),
	"SLIDER_PROPERTY" => array(
		"NAME" => GetMessage("TP_BND_SLIDER_PROPERTY"),
		"TYPE" => "LIST",
		"VALUES" => $sliderProperty,
	),
	"SEARCH_PAGE" => array(
		"NAME" => GetMessage("TP_BND_SEARCH_PAGE"),
		"TYPE" => "STRING",
		"DEFAULT" => "/search/",
	),
);

$arTemplateParameters["USE_SHARE"] = array(
	"NAME" => GetMessage("TP_BND_USE_SHARE"),
	"TYPE" => "CHECKBOX",
	"MULTIPLE" => "N",
	"VALUE" => "Y",
	"DEFAULT" =>"N",
	"REFRESH"=> "Y",
);
if ($arCurrentValues["USE_SHARE"] == "Y")
{
	$arTemplateParameters["SHARE_TEMPLATE"] = array(
		"NAME" => GetMessage("TP_BND_SHARE_TEMPLATE"),
		"DEFAULT" => "",
		"TYPE" => "STRING",
		"MULTIPLE" => "N",
		"COLS" => 25,
		"REFRESH"=> "Y",
	);

	if (strlen(trim($arCurrentValues["SHARE_TEMPLATE"])) <= 0)
		$shareComponentTemplate = false;
	else
		$shareComponentTemplate = trim($arCurrentValues["SHARE_TEMPLATE"]);

	include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/components/bitrix/main.share/util.php");

	$arHandlers = __bx_share_get_handlers($shareComponentTemplate);

	$arTemplateParameters["SHARE_HANDLERS"] = array(
		"NAME" => GetMessage("TP_BND_SHARE_HANDLERS"),
		"TYPE" => "LIST",
		"MULTIPLE" => "Y",
		"VALUES" => $arHandlers["HANDLERS"],
		"DEFAULT" => $arHandlers["HANDLERS_DEFAULT"],
	);

	$arTemplateParameters["SHARE_SHORTEN_URL_LOGIN"] = array(
		"NAME" => GetMessage("TP_BND_SHARE_SHORTEN_URL_LOGIN"),
		"TYPE" => "STRING",
		"DEFAULT" => "",
	);

	$arTemplateParameters["SHARE_SHORTEN_URL_KEY"] = array(
		"NAME" => GetMessage("TP_BND_SHARE_SHORTEN_URL_KEY"),
		"TYPE" => "STRING",
		"DEFAULT" => "",
	);
}
$arTemplateParameters["MAX_WIDTH"] = array(
	"NAME" => GetMessage("MAX_WIDTH"),
	"TYPE" => "STRING",
	"DEFAULT" => "280",
);

$arTemplateParameters["MAX_HEIGHT"] = array(
	"NAME" => GetMessage("MAX_HEIGHT"),
	"TYPE" => "STRING",
	"DEFAULT" => "200",
);