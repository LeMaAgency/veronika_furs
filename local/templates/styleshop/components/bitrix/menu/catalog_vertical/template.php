<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

use Bitrix\Main\Localization\Loc;

?><?if (!empty($arResult)):?>
<?$curPage = $APPLICATION->GetCurPage(true);?>
<nav class="navbar navbar-inverse vertical">
	<div class="collapse navbar-collapse">
		<ul class="nav">
			<li class="menu-item-link catalog<?php echo ($curPage == SITE_DIR.'index.php' && $arParams['HOME_OPEN'] != 'Y' || $curPage != SITE_DIR.'index.php')? ' parent' : '' ?>"><a href="<?php echo SITE_DIR ?>catalog/"><?php echo Loc::getMessage('CATALOG')?></a>
			<ul class="<?php echo ($curPage == SITE_DIR.'index.php' && $arParams['HOME_OPEN'] != 'Y' || $curPage != SITE_DIR.'index.php')? ' dropdown-menu' : '' ?> animated <?php echo $arParams['EFFECT_OPEN_SUBMENU'] ?>" <?if($curPage == SITE_DIR.'index.php' && strlen($arParams['MIN_HEIGHT']) > 0):?> style="min-height: <?php echo intval($arParams['MIN_HEIGHT']) ?>px;"<?endif?>>
			<?
			$previousLevel = 0;
			$mmenu = '';

			$mmenu .= '<li class="mmenu-link"><a href="'.$arResult['IBLOCK']['LIST_PAGE_URL'].'">'.$arResult['IBLOCK']['NAME'].'</a>';
			$mmenu .= '<ul>';

			unset($arResult['IBLOCK']);
			foreach($arResult as $k => $arItem):
			        
					if (!$arItem['IS_PARENT'] && $arItem['PERMISSION'] < 'D') {
						continue;
					}

					if ($previousLevel && $arItem['DEPTH_LEVEL'] < $previousLevel) {
						$close = str_repeat('</ul></li>', ($previousLevel - $arItem['DEPTH_LEVEL']));
						$mmenu .= $close;
						echo $close;
						$close = '';
					}
					
					/* ---------- LINK ---------- */
					 if (!isset($arItem['TYPE'])):
							?><li class="menu-item-link menu-item-level-<?php echo $arItem['DEPTH_LEVEL'] ?><?php if('TYPE-1' == $arItem['UF_MENU_TYPE']):?> type dropdown-full type-1<?php elseif('TYPE-2' == $arItem['UF_MENU_TYPE']): ?> type dropdown-full type-2<?php elseif('TYPE-3' == $arItem['UF_MENU_TYPE']): ?> type dropdown-full type-3<?php endif; ?><?php echo $arItem['IS_PARENT'] ? ' parent' : '' ?>">
								<a title="<?=$arItem['TEXT']?>" href="<?=$arItem['LINK']?>" class="<?if ($arItem['SELECTED']):?>active<?endif?>"><?=$arItem['TEXT']?></a>
					
							<?$mmenu .= '<li class="mmenu-link"><a href="'.$arItem['LINK'].'">'.$arItem['TEXT'].'</a>';

					 endif; // type link

					 /* ---------- TEXT ---------- */
					if ('text' === $arItem['TYPE']): // type text
						?><li class="menu-item-<?php echo $arItem['TYPE'] ?> menu-item-level-<?php echo $arItem['DEPTH_LEVEL'] ?>">
							<? echo $arItem['HTML'];
					endif; // type text
					
					/* ---------- ROWS ---------- */
					if ('rows' === $arItem['TYPE']):
						?><li class="menu-item-<?php echo $arItem['TYPE'] ?> container">
					<? endif;
					
					if ($arItem['IS_PARENT']): // is_parent
						?><ul class="animated<?php echo 1 == $arItem['DEPTH_LEVEL']? ' dropdown-menu '.$arParams['EFFECT_OPEN_MENU'].'' : ' '.$arParams['EFFECT_OPEN_SUBMENU'] ?>">

						<?$mmenu .= '<ul>';

					endif; // is_parent

					if(is_array($arItem['UF_IMAGE_MENU']) && $arItem['IS_PARENT'])
					{
						if($arItem['UF_MENU_TYPE'] == 'TYPE-1' || $arItem['UF_MENU_TYPE'] == 'TYPE-3')
						{
							$style = 'background-image:url('.$arItem['UF_IMAGE_MENU']['SRC'].');';

							if($arItem['UF_INDENT'])
								$style .= 'margin-right:-'.$arItem['UF_INDENT'].'px;';

							if($arItem['UF_INDENT_BOTTOM'])
								$style .= 'margin-top:'.$arItem['UF_INDENT_BOTTOM'].'px;';

		          echo '<!--column--><div class="column pull-right image__container hidden-xs hidden-sm"><div class="image" style="'.$style.'"></div></div><!--/column-->';
						}
          }

					$previousLevel = $arItem['DEPTH_LEVEL'];
			            
			endforeach;

			if ($previousLevel > 1)//close last item tags
			{
				$close = str_repeat('</ul></li>', ($previousLevel-1) );
				$mmenu .= $close;
				echo $close;
				$close = '';
			}

		$mmenu .= '</ul>';
		$this->SetViewTarget("mmenu");
	    echo $mmenu;
		$this->EndViewTarget();
		?>
		</ul>
		</li>
		</ul>
	</div>
</nav>
<?endif?>