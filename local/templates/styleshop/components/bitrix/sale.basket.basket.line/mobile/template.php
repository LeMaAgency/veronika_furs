<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$cartStyle = 'minicart';
$cartId = "minicart".$component->getNextNumber();
$arParams['cartId'] = $cartId;

?><script>
	var <?=$cartId?> = new BitrixSmallCart;
</script>

<div id="<?=$cartId?>" class="<?=$cartStyle?>"<?if($arParams["SHOW_PRODUCTS"] != 'Y'): ?> onclick="javascript:location.href='<?=$arParams['PATH_TO_BASKET']?>'"<?endif?>>
	<?
	
	$frame = $this->createFrame($cartId, false)->begin();
	
		require(realpath(dirname(__FILE__)).'/ajax_template.php');
	
	$frame->beginStub();
	
		require(realpath(dirname(__FILE__)).'/top_template.php');
	
	$frame->end();
	
	?>
</div>

<script type="text/javascript">
	<?=$cartId?>.siteId       = '<?=SITE_ID?>';
	<?=$cartId?>.cartId       = '<?=$cartId?>';
	<?=$cartId?>.ajaxPath     = '<?=$componentPath?>/ajax.php';
	<?=$cartId?>.templateName = '<?=$templateName?>';
	<?=$cartId?>.arParams     =  <?=CUtil::PhpToJSObject ($arParams)?>; // TODO \Bitrix\Main\Web\Json::encode
	<?=$cartId?>.activate();
</script>
