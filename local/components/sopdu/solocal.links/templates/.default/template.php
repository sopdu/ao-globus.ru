<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<ul class="row p-0 w-75 social_icons">
	<?if(!empty($arResult["instagram"])):?>
		<li class="col">
			<a href="<?=$arResult["instagram"]?>">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/social/insta.svg" alt="" />
			</a>
		</li>
	<?endif;?>
	<?if(!empty($arResult["youtube"])):?>
		<li class="col">
			<a href="<?=$arResult["youtube"]?>">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/social/yt.svg" alt="" />
			</a>
		</li>
	<?endif;?>
	<?if(!empty($arResult["vk"])):?>
		<li class="col">
			<a href="<?=$arResult["vk"]?>">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/social/vk.svg" alt="" />
			</a>
		</li>
	<?endif;?>
	<?if(!empty($arResult["facebook"])):?>
		<li class="col">
			<a href="<?=$arResult["facebook"]?>">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/social/fb.svg" alt="" />
			</a>
		</li>
	<?endif;?>
	<?if(!empty($arResult["whatapp"])):?>
		<li class="col">
			<a href="<?=$arResult["whatapp"]?>">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/social/wa.svg" alt="" />
			</a>
		</li>
	<?endif;?>
</ul>