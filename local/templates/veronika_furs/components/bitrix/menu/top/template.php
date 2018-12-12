<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;

$this->setFrameMode(true);

if (!empty($arResult))
{ ?>
   <? foreach($arResult as $arItem):?>
       <li>
            <a title="<?=$arItem['TEXT']?>" href="<?=$arItem['LINK']?>">
                <?=$arItem['TEXT']?>
            </a>
       </li>
      <? endforeach;?>
<?php } ?>