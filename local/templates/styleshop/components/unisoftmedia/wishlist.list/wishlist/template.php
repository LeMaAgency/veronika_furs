<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Localization\Loc;

$this->setFrameMode(false);

$APPLICATION->SetTitle(Loc::getMessage('SET_TITLE'));

if($arResult['NUM_PRODUCTS'] > 0)
{
	global $wishlistFilter;
	$wishlistFilter = array(
		"=ID" => $arResult['arID'],
	);?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file",
			"PATH" => SITE_DIR."personal/wishlist/section.php",
			"AREA_FILE_RECURSIVE" => "N",
			"EDIT_MODE" => "html",
		),
		false,
		Array('HIDE_ICONS' => 'N')
	);?>
<?}
else
{
	echo '<p class="msg bg-danger">'.Loc::getMessage('ERROR_EMPTY').'</p>';
}