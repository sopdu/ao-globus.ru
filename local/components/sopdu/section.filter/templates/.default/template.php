<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>


<div class="product_filters_categories">
	<div class="dropdown-menu_test">
		<ul class="main-item">
			<?php foreach ($arResult as $arItem): ?>
				<li class="item_test pt-2 pb-2">
					<a href="<?=$arItem['LINK']?>"><span><?=$arItem['NAME']?></span></a>
					<i class="fa fa-angle-up" aria-hidden="true"></i>
					<?if ($arItem['ITEM']):?>
						<ul class="submain none">
							<?foreach ($arItem['ITEM'] as $subItem):?>
								<li class="subitem"><a href="<?=$subItem['LINK']?>"><?=$subItem['NAME']?></a></li>
							<?endforeach?>
						</ul>
					<?endif?>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
</div>