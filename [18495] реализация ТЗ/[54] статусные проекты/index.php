<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");?><p style="text-align: center;">
 <img alt="company" src="/images/company/company-page.jpg" class="img-responsive rounded-4">
</p>
<p>
	 Allcorp3 — компания, которая занимается установкой систем безопасности, автоматизации и обеспечения комфортной жизнедеятельности. С 2009 года мы занимаемся сервисным обслуживанием и модернизацией любых инженерных систем.
</p>
<h3>Чем мы можем быть вам полезны</h3>
<ul>
	<li><b>Обеспечим вашу безопасность.</b> Проанализируем объект и установим лучшую систему охраны. Предложим квалифицированных операторов видеонаблюдения. Разработаем индивидуальную систему контроля доступа.</li>
	<li><b>Автоматизируем процессы.</b> Усовершенствуем ваши бизнес-процессы с помощью CRM-системы и IP-телефонии. Обучим персонал и предоставим доступ к обновлениям.</li>
	<li><b>Сделаем ваше жилье красивым.</b> Проконсультируем по материалам для отделки фасада. Положим надежную черепицу. Оформим террасу для летнего времяпрепровождения.</li>
</ul>
<p>
	 В Allcorp3 работает 246 квалифицированных инженеров, готовых помочь вам в любой момент. Мы тщательно анализируем помещение и близлежащую территорию перед началом работ. Наша система коммуникации, выстроенная за 8 лет общения с клиентами, позволяет достичь отличного совместного результата.
</p>
<p>
	 В нашем портфолио есть <a href="/projects/">проекты</a> для крупных промышленных предприятий и маленьких частных домов. Беремся за проекты любой сложности и одинаково ответственно относимся ко всем нашим клиентам.
</p>
<h3>Что уже сделано</h3>
<ul>
	<li>Установили 183 системы видеонаблюдения.</li>
	<li>За 1 месяц разработали систему контроля доступа на стадионе «Гладиатор».</li>
	<li>Поставили на заводы 1 000 тонн металлопроката.</li>
</ul>
<p>
	 Мы знаем, как сделать лучше. Многолетний опыт работы и профессионализм сотрудников позволяют нам занимать лидирующие позиции в сфере услуг. Заказывайте в Allcorp3 — сделаем качественно и за короткий срок.
</p>

<?$GLOBALS["FilterStatusnyeProjects"] = array("PROPERTY_STATUSNIY_PROJECT_VALUE"=>"Да");?> 
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"project-list",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE","DATE_ACTIVE_FROM",""),
		"FILTER_NAME" => "FilterStatusnyeProjects",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "41",
		"IBLOCK_TYPE" => "aspro_allcorp3_content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("STATUSNIY_PROJECT",""),
		"RIGHT_LINK" => "/projects/",
		"RIGHT_TITLE" => "Все проекты",
		"SET_BROWSER_TITLE" => "Y",
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
		"TITLE" => "Статусные проекты (инфоблок Проекты)"
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>