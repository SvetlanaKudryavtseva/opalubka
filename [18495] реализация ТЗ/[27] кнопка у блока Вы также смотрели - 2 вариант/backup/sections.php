<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

global $arTheme, $APPLICATION;
$APPLICATION->AddViewContent('right_block_class', 'catalog_page ');

$bShowLeftBlock = ($arTheme['LEFT_BLOCK_CATALOG_ROOT']['VALUE'] === 'Y' && !defined('ERROR_404'));
$bMobileSectionsCompact = $arTheme['MOBILE_LIST_SECTIONS_COMPACT_IN_SECTIONS']['VALUE'] === 'Y';
$APPLICATION->SetPageProperty('MENU', 'N');
?>
<div class="main-wrapper flexbox flexbox--direction-row">
	<div class="section-content-wrapper <?=($bShowLeftBlock ? 'with-leftblock' : '');?> flex-1">
		<?// intro text?>
		<?ob_start();?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "page",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => ""
			)
		);?>
		<?$html = ob_get_contents();?>
		<?ob_end_clean();?>
		<?if(trim($html)):?>
			<div class="text_before_items">
				<?= $html; ?>
			</div>
		<?endif;?>
		<?unset($html);?>
		<?
		// get section items count and subsections
		$arParams['CHECK_DATES'] = 'Y';
		$arItemFilter = CAllcorp3::GetCurrentSectionElementFilter($arResult["VARIABLES"], $arParams, false);
		$arSubSectionFilter = CAllcorp3::GetCurrentSectionSubSectionFilter($arResult["VARIABLES"], $arParams, false);
		$itemsCnt = CAllcorp3Cache::CIBlockElement_GetList(array("CACHE" => array("TAG" => CAllcorp3Cache::GetIBlockCacheTag($arParams["IBLOCK_ID"]))), $arItemFilter, array());
		$arSubSections = CAllcorp3Cache::CIBlockSection_GetList(array("CACHE" => array("TAG" => CAllcorp3Cache::GetIBlockCacheTag($arParams["IBLOCK_ID"]), "MULTI" => "Y")), $arSubSectionFilter, false, array("ID"));
		?>
		<?if(!$itemsCnt && !$arSubSections):?>
			<div class="alert alert-warning"><?=GetMessage("SECTION_EMPTY")?></div>
		<?else:?>
			<?CAllcorp3::CheckComponentTemplatePageBlocksParams($arParams, __DIR__);?>

			<?$sViewElementTemplate = ($arParams["SECTIONS_TYPE_VIEW"] == "FROM_MODULE" ? $arTheme["SECTIONS_TYPE_VIEW_CATALOG"]["VALUE"] : $arParams["SECTIONS_TYPE_VIEW"]);?>
			<?@include_once('page_blocks/'.$sViewElementTemplate.'.php');?>

			<?if(!$arSubSections):?>
				<?// section elements?>
				<?if(strlen($arParams["FILTER_NAME"])):?>
					<?$GLOBALS[$arParams["FILTER_NAME"]] = array_merge((array)$GLOBALS[$arParams["FILTER_NAME"]], $arItemFilter);?>
				<?else:?>
					<?$arParams["FILTER_NAME"] = "arrFilter";?>
					<?$GLOBALS[$arParams["FILTER_NAME"]] = $arItemFilter;?>
				<?endif;?>
				<?$sViewElementTemplate = ($arParams["SECTION_ELEMENTS_TYPE_VIEW"] == "FROM_MODULE" ? $arTheme["ELEMENTS_CATALOG_PAGE"]["VALUE"] : $arParams["SECTION_ELEMENTS_TYPE_VIEW"]);?>
				<?@include_once('page_blocks/'.$sViewElementTemplate.'.php');?>
			<?endif;?>
		<?endif;?>
		<?// outro text?>
		<?ob_start();?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "page",
				"AREA_FILE_SUFFIX" => "bottom",
				"EDIT_TEMPLATE" => ""
			)
		);?>
		<?$html = ob_get_contents();?>
		<?ob_end_clean();?>
		<?if(trim($html)):?>
			<div class="text_after_items">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "page",
						"AREA_FILE_SUFFIX" => "bottom",
						"EDIT_TEMPLATE" => ""
					)
				);?>
			</div>
		<?endif;?>
<?unset($html);?>
		<div class="catalog__block">
			<?/* ???????? ???????????????????????????? ???? ?????????????? ???????????????? ???????????????? */?>

			<?if($APPLICATION->GetCurPage() == "/catalog/") {?>

			<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"brands-list-seonik", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "brands-list-seonik",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "arRegionLinkFront",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "27",
		"IBLOCK_TYPE" => "-",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"ITEMS_OFFSET" => "N",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "??????????????",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"RIGHT_LINK" => "/company/brands/",
		"RIGHT_TITLE" => "?????? ??????????????????????????",
		"SEARCH_PAGE" => "/search/",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_PREVIEW_TEXT" => "Y",
		"SHOW_SECTION" => "Y",
		"SLIDER" => "1",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"SUBTITLE" => "",
		"TEMPLATE_THEME" => "blue",
		"TITLE" => "??????????????????????????",
		"TEXT_CENTER" => "1",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	),
	false
);
				?>

			<? } ?>
			
			<?/* end ???????? ???????????????????????????? ???? ?????????????? ???????????????? ???????????????? */?>
		</div> <!-- end catalog__block -->


			<? // ???????? "?????? ?????????? ??????????????????" ?> 
			<div class="catalog__block">

			<?
				// id ??????????????????, ?? ?????????????? ?????????? ???????????????? ????????????
				$IBLOCK_ID = 43;
		
				// ???????????????? ???????????? id-???????????? ??????????????????, ?????????????????? ?? ???????????????????????????????? ???????? "???????????? ?? ????????????????" ?? ???????????????????? ??????????????
				$rsSelectedItems = CIBlockSection::GetList(
				["SORT"=>"ASC"],
				["IBLOCK_ID"=>$IBLOCK_ID,"ID" =>$arResult["VARIABLES"]["ELEMENT_ID"]],
				false,
				["UF_ARTICLES_IN_CATALOG"],
				);

					$arSelectedIDs = $arSelectedArticles["UF_ARTICLES_IN_CATALOG"];



				if(!empty($arSelectedIDs)){
					print_r($arSelectedIDs);
					$GLOBALS["arArticlesByFilter"] = array("ID"=>$arSelectedIDs);
			

				} /*end if*/ ?>

			<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"blog-list-seonik", 
	array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "blog-list-seonik",
		"DETAIL_URL" => "/articles/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"FILTER_NAME" => "arArticlesByFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "37",
		"IBLOCK_TYPE" => "aspro_allcorp3_content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "ajax",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "REDIRECT",
			1 => "PERIOD",
			2 => "SALE_NUMBER",
			3 => "",
		),
		"RIGHT_LINK" => "/articles/",
		"RIGHT_TITLE" => "?????? ????????????",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_PREVIEW_TEXT" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"SUBTITLE" => "",
		"TITLE" => "?????? ?????????? ??????????????????",
		"USE_FILTER" => "Y"
	),
	false
);?>

</div> <!-- end catalog__block -->

			<? // end ???????? "?????? ?????????? ??????????????????" ?>

		<?// ???????? "???? ?????????? ????????????????" ?>
		<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.products.viewed", 
	".default_seonik", 
	array(
		"ACTION_VARIABLE" => "action_cpv",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default_seonik",
		"CONVERT_CURRENCY" => "N",
		"DEPTH" => "2",
		"DISPLAY_COMPARE" => "N",
		"ENLARGE_PRODUCT" => "STRICT",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "43",
		"IBLOCK_MODE" => "single",
		"IBLOCK_TYPE" => "aspro_allcorp3_catalog",
		"LABEL_PROP_POSITION" => "top-left",
		"MESS_BTN_ADD_TO_BASKET" => "?? ??????????????",
		"MESS_BTN_BUY" => "????????????",
		"MESS_BTN_DETAIL" => "??????????????????",
		"MESS_BTN_SUBSCRIBE" => "??????????????????????",
		"MESS_NOT_AVAILABLE" => "?????? ?? ??????????????",
		"PAGE_ELEMENT_COUNT" => "6",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'6','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "N",
		"SECTION_CODE" => "",
		"SECTION_ELEMENT_CODE" => "",
		"SECTION_ELEMENT_ID" => $GLOBALS["CATALOG_CURRENT_ELEMENT_ID"],
		"SECTION_ID" => $GLOBALS["CATALOG_CURRENT_SECTION_ID"],
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "Y",
		"TEMPLATE_THEME" => "green",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"MESS_SHOW_TITLE" => "???? ?????????? ????????????????"
	),
	false
);?>

		<?// end ???????? "???? ?????????? ????????????????"?>


	</div><!-- end section-content-wrapper-->
	<?if($bShowLeftBlock):?>
		<?CAllcorp3::ShowPageType('left_block');?>
	<?endif;?>
</div><!-- end main-wrapper flexbox flexbox--direction-row -->
