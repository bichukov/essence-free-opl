<?php
    use Bitrix\Main\Localization\Loc;
    use Bitrix\Main\HttpApplication;
    use Bitrix\Main\Loader;
    use Bitrix\Main\Config\Option;

    Loc::loadMessages(__FILE__);

    global $APPLICATION;

    $request = HttpApplication::getInstance()->getContext()->getRequest();
    $module_id = htmlspecialchars($request['mid'] != '' ? $request['mid'] : $request['id']);

    if(!Loader::includeModule($module_id))
        return;


    $aTabs = array(
        array(
            'DIV'     => 'edit1',
            'TAB'     => Loc::getMessage('ALTOP_INSTAGRAM_OPTIONS_TAB_GENERAL'),
            'TITLE'   => Loc::getMessage('ALTOP_INSTAGRAM_OPTIONS_TAB_GENERAL'),
            'OPTIONS' => array(
                array(
                    'USER_INSTAGRAM_TOKEN',
                    Loc::getMessage('ALTOP_OPTIONS_USER_TOKEN'),
                    '',
                    array('text', 50)
                ),
				 array(
                    'USER_INSTAGRAM_USE_GALLERY',
                    Loc::getMessage('ALTOP_OPTIONS_INSTAGRAM_USE_GALLERY'),
                    '',
                    array('checkbox')
                ),
            )
        ),
    );

    $tabControl = new CAdminTabControl(
        'tabControl',
        $aTabs
    );

    $tabControl->begin();
?>

    <form action="<?= $APPLICATION->getCurPage(); ?>?mid=<?=$module_id; ?>&lang=<?= LANGUAGE_ID; ?>" method="POST">

        <?= bitrix_sessid_post(); ?>
        <?php
            foreach ($aTabs as $aTab) { // цикл по вкладкам
                if ($aTab['OPTIONS']) {
                    $tabControl->beginNextTab();
                    __AdmSettingsDrawList($module_id, $aTab['OPTIONS']);
                }
            }
            $tabControl->buttons();

        ?>

        <input type="submit" name="apply"
               value="<?= Loc::GetMessage('ALTOP_OPTIONS_INPUT_APPLY'); ?>" class="adm-btn-save" />
        <input type="submit" name="default"
               value="<?= Loc::GetMessage('ALTOP_OPTIONS_INPUT_DEFAULT'); ?>" />
    </form>

<?php
    $tabControl->end();

    if ($request->isPost() && check_bitrix_sessid()) {
        foreach ($aTabs as $aTab) {
            foreach ($aTab['OPTIONS'] as $arOption) {

                if (!is_array($arOption)) {
                    continue;
                }
                if ($arOption['note']) {
                    continue;
                }

                if ($request['apply']) {
                    $optionValue = $request->getPost($arOption[0]);
                    Option::set($module_id, $arOption[0], is_array($optionValue) ? implode(',', $optionValue) : $optionValue);

                } elseif ($request['default']) {
                    Option::set($module_id, $arOption[0], $arOption[2]);
                }
            }
        }

        LocalRedirect($APPLICATION->getCurPage().'?mid='.$module_id.'&lang='.LANGUAGE_ID);
    }
?>