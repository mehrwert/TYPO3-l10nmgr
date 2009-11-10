<?php

########################################################################
# Extension Manager/Repository config file for ext: "l10nmgr"
#
# Auto generated 02-04-2009 15:48
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Localization Manager',
	'description' => 'Module for managing localization import and export',
	'category' => 'module',
	'shy' => 0,
	'version' => '4.6',
	'dependencies' => 'static_info_tables, mvc, picocontainer',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'translate,export,import,cm1,cm2,cm3,mod1,mod2',
	'state' => 'beta',
	'uploadfolder' => 1,
	'createDirs' => 'uploads/tx_l10nmgr/settings,uploads/tx_l10nmgr/saved_files,uploads/tx_l10nmgr/jobs,uploads/tx_l10nmgr/jobs/out,uploads/tx_l10nmgr/jobs/in,uploads/tx_l10nmgr/jobs/done,uploads/tx_l10nmgr/jobs/_cmd,uploads/tx_l10nmgr/importfiles,uploads/tx_l10nmgr/exportfiles,,uploads/tx_l10nmgr/exportfiles/zips',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Kasper Skarhoj, Daniel Zielinski, Daniel Poetzinger, Fabian Seltmann, Andreas Otto, Michael Klapper, Timo Schmidt, Tolleiv Nietsch, Fabrizio Branca',
	'author_email' => 'kasperYYYY@typo3.com, info@L10Ntech.de',
	'author_company' => 'Localization Manager Team',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'static_info_tables' => '',
			'mvc' => '0.2.26',
			'php' => '5.2.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:110:{s:9:"ChangeLog";s:4:"97c5";s:10:"README.txt";s:4:"ee2d";s:4:"TODO";s:4:"15a7";s:30:"class.l10nmgr_tcemain_hook.php";s:4:"b42c";s:24:"class.tx_l10nmgr_cm1.php";s:4:"ce4a";s:26:"class.tx_l10nmgr_index.php";s:4:"9428";s:24:"class.tx_l10nmgr_zip.php";s:4:"8bbc";s:21:"ext_conf_template.txt";s:4:"00ff";s:12:"ext_icon.gif";s:4:"ec72";s:17:"ext_localconf.php";s:4:"9279";s:14:"ext_tables.php";s:4:"2c3a";s:14:"ext_tables.sql";s:4:"6653";s:13:"flags_new.png";s:4:"88c4";s:14:"flags_none.png";s:4:"4f46";s:12:"flags_ok.png";s:4:"9407";s:17:"flags_unknown.png";s:4:"13df";s:16:"flags_update.png";s:4:"ca64";s:23:"icon_tx_l10nmgr_cfg.gif";s:4:"ec72";s:30:"icon_tx_l10nmgr_priorities.gif";s:4:"dc05";s:13:"locallang.xml";s:4:"c6f2";s:25:"locallang_csh_l10nmgr.xml";s:4:"f83c";s:16:"locallang_db.xml";s:4:"c310";s:7:"tca.php";s:4:"c3ee";s:10:"cli/README";s:4:"bc83";s:18:"cli/cli.export.php";s:4:"a62b";s:18:"cli/cli.import.php";s:4:"ec9f";s:17:"cli/locallang.xml";s:4:"0812";s:12:"doc/TODO.txt";s:4:"2411";s:19:"doc/wizard_form.dat";s:4:"9c22";s:20:"doc/wizard_form.html";s:4:"e328";s:23:"templates/mod1_list.css";s:4:"3477";s:22:"templates/mod1_list.js";s:4:"63c8";s:23:"templates/mod1_list.php";s:4:"552c";s:45:"views/class.tx_l10nmgr_view_export_abstractExportView.php";s:4:"8788";s:43:"views/class.tx_l10nmgr_view_export_exporttypes_l10nHTMLList.php";s:4:"660a";s:44:"views/class.tx_l10nmgr_l10ncfgDetailView.php";s:4:"d788";s:35:"views/class.tx_l10nmgr_template.php";s:4:"2ad9";s:44:"views/CATXML/class.tx_l10nmgr_view_export_exporttypes_CATXML.php";s:4:"cf8f";s:48:"views/excelXML/class.tx_l10nmgr_view_export_exporttypes_excelXML.php";s:4:"587a";s:33:"views/excelXML/excel_template.xml";s:4:"6b5d";s:47:"domain/class.tx_l10nmgr_CATXMLImportManager.php";s:4:"e11a";s:36:"domain/class.tx_l10nmgr_Exporter.php";s:4:"d480";s:55:"domain/class.tx_l10nmgr_l10nAccumulatedInformations.php";s:4:"8ce5";s:43:"domain/class.tx_l10nmgr_l10nBaseService.php";s:4:"f6b8";s:45:"domain/class.tx_l10nmgr_l10nConfiguration.php";s:4:"89cc";s:40:"domain/class.tx_l10nmgr_l10nLanguage.php";s:4:"1120";s:48:"domain/class.tx_l10nmgr_mkPreviewLinkService.php";s:4:"c05c";s:43:"domain/class.tx_l10nmgr_translationData.php";s:4:"63e1";s:50:"domain/class.tx_l10nmgr_translationDataFactory.php";s:4:"7049";s:39:"domain/tools/class.tx_l10nmgr_tools.php";s:4:"c74b";s:43:"domain/tools/class.tx_l10nmgr_utf8tools.php";s:4:"76c5";s:42:"domain/tools/class.tx_l10nmgr_xmltools.php";s:4:"2b36";s:14:"mod2/clear.gif";s:4:"cc11";s:13:"mod2/conf.php";s:4:"176b";s:14:"mod2/index.php";s:4:"77c7";s:13:"mod2/list.php";s:4:"3f67";s:18:"mod2/locallang.xml";s:4:"5d30";s:22:"mod2/locallang_mod.xml";s:4:"6c48";s:19:"mod2/moduleicon.gif";s:4:"8074";s:27:"res/contrib/jquery-1.2.3.js";s:4:"7806";s:32:"res/contrib/jquery.dimensions.js";s:4:"0f94";s:32:"res/contrib/jquery.scrollable.js";s:4:"34ed";s:30:"res/contrib/jquery.tooltip.css";s:4:"2a0f";s:29:"res/contrib/jquery.tooltip.js";s:4:"01ca";s:20:"res/contrib/tabs.css";s:4:"2891";s:19:"res/contrib/tabs.js";s:4:"a448";s:41:"res/contrib/webtoolkit.scrollabletable.js";s:4:"f2b7";s:16:"import/clear.gif";s:4:"cc11";s:18:"import/cm_icon.gif";s:4:"ec72";s:15:"import/conf.php";s:4:"1c48";s:16:"import/index.php";s:4:"300a";s:20:"import/locallang.xml";s:4:"92b9";s:13:"cm1/clear.gif";s:4:"cc11";s:15:"cm1/cm_icon.gif";s:4:"ec72";s:12:"cm1/conf.php";s:4:"6e5e";s:13:"cm1/index.php";s:4:"f559";s:17:"cm1/locallang.xml";s:4:"fa4c";s:15:"cm3/cm_icon.gif";s:4:"8074";s:12:"cm3/conf.php";s:4:"deb2";s:13:"cm3/index.php";s:4:"d1e0";s:17:"cm3/locallang.xml";s:4:"f9a4";s:30:"tests/tx_xmltools_testcase.php";s:4:"42d1";s:103:"tests/l10nTranslatedInformationsFactory/class.tx_l10nmgr_l10nTranslatedInformationsFactory_testcase.php";s:4:"12cc";s:94:"tests/l10nTranslatedInformationsFactory/fixtures/canCreateAccumulatedInformationsForPageId.xml";s:4:"2ec5";s:77:"tests/l10nTranslatedInformationsFactory/fixtures/canLoadFixtureL10NConfig.xml";s:4:"5cd1";s:82:"tests/l10nTranslatedInformationsFactory/fixtures/canLoadFixturePreviewLanguage.xml";s:4:"5d43";s:81:"tests/l10nTranslatedInformationsFactory/fixtures/canLoadFixtureTargetLanguage.xml";s:4:"ad7c";s:61:"tests/l10nExporter/class.tx_l10nmgr_l10nExporter_testcase.php";s:4:"4526";s:71:"tests/l10nConfiguration/class.tx_l10nmgr_l10nConfiguration_testcase.php";s:4:"c01d";s:68:"tests/l10nConfiguration/fixtures/canDeterminePageIdsFromPageTree.xml";s:4:"bbfe";s:16:"export/clear.gif";s:4:"cc11";s:18:"export/cm_icon.gif";s:4:"ec72";s:15:"export/conf.php";s:4:"bf01";s:16:"export/index.php";s:4:"ef8a";s:20:"export/locallang.xml";s:4:"6a25";s:15:"cm2/cm_icon.gif";s:4:"8074";s:12:"cm2/conf.php";s:4:"d912";s:13:"cm2/index.php";s:4:"0a49";s:17:"cm2/locallang.xml";s:4:"a551";s:14:"mod1/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"3564";s:14:"mod1/index.php";s:4:"fa26";s:18:"mod1/locallang.xml";s:4:"2a3e";s:22:"mod1/locallang_mod.xml";s:4:"45a2";s:19:"mod1/moduleicon.gif";s:4:"ec72";s:18:"settings/MemoQ.xml";s:4:"524c";s:23:"settings/SDLPassolo.xfg";s:4:"89cf";s:31:"settings/SDLTradosTagEditor.ini";s:4:"f428";s:32:"settings/acrossL10nmgrConfig.dst";s:4:"7f83";s:34:"settings/dejaVuL10nmgrConfig.dvflt";s:4:"dffe";}',
	'suggests' => array(
	),
);

?>