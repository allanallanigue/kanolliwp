/*Export of the extension netcom.node*/

DELETE FROM `#__translation_en` WHERE `auto` = 1 AND `imac` IN ('1298350265OFHX','1298350265OFHY','1338581028LZCR','1351891949KVQG','1352928214LWCK','1369749852DBNC','1389293001AGCY','1392306654FFTR','1392306654FFTS','1428371805ACSK','1430154193FIWY' );
DELETE `#__translation_reference`.* FROM `#__extension_node` LEFT JOIN `#__translation_reference` ON `#__translation_reference`.`wid` = `#__extension_node`.`wid` WHERE `#__extension_node`.`namekey` IN ('netcom.node') ;
SET @pk_5_80 = ( SELECT `wid` FROM `#__extension_node`  WHERE `namekey`='netcom.node' LIMIT 1 );
UPDATE `#__extension_node`  SET `publish`='1',`folder`='netcom',`wid`=@pk_5_80,`params`='',`status`='1',`type`='150',`name`='Network Com',`destination`='node',`parent`='0',`trans`='1',`certify`='1',`namekey`='netcom.node',`version`='4371',`lversion`='4371',`pref`='1',`install`='',`core`='1',`showconfig`='1',`framework`='0' WHERE  `namekey`='netcom.node';
INSERT IGNORE INTO `#__extension_node` (`publish`,`folder`,`wid`,`params`,`status`,`type`,`name`,`destination`,`parent`,`trans`,`certify`,`namekey`,`version`,`lversion`,`pref`,`install`,`core`,`showconfig`,`framework`) VALUES ('1','netcom',@pk_5_80,'','1','150','Network Com','node','0','1','1','netcom.node','4371','4371','1','','1','1','0');

INSERT IGNORE INTO `#__translation_en` (`text`,`auto`,`imac`) VALUES ('The server is down for maintenance. Please try again later.','1','1298350265OFHX');
INSERT IGNORE INTO `#__translation_en` (`text`,`auto`,`imac`) VALUES ('The protocol requested is not available on the server.','1','1298350265OFHY'),('Apps update is disabled!','1','1338581028LZCR'),('Data format not supported.','1','1351891949KVQG'),('Could not establish a connection to $HOST','1','1352928214LWCK'),('The connection test failed. Your site could not reach the distribution site.','1','1369749852DBNC'),('allow_url_fopen is not enable on your server so we cannot connect to the server.','1','1389293001AGCY'),('allow_url_fopen is not enable on your server so file from external website cannot be downloaded.','1','1392306654FFTR'),('File from url : $url could not be opened!','1','1392306654FFTS'),('The file could not be downloaded due to the restriction on your server.<br>You need to allow \"allow_url_fopen\" or allow \"CURL\".','1','1428371805ACSK'),('XML-RPC communication error: $oneError','1','1430154193FIWY');
SET @wid_0 = ( SELECT `wid` FROM `#__extension_node`  WHERE `namekey`='netcom.node' LIMIT 1);
INSERT IGNORE INTO `#__translation_reference` (`wid`,`load`,`imac`) VALUES (@wid_0,'0','1298350265OFHX');
INSERT IGNORE INTO `#__translation_reference` (`wid`,`load`,`imac`) VALUES (@wid_0,'0','1298350265OFHY'),(@wid_0,'0','1338581028LZCR'),(@wid_0,'0','1351891949KVQG'),(@wid_0,'0','1352928214LWCK'),(@wid_0,'0','1369749852DBNC'),(@wid_0,'0','1389293001AGCY'),(@wid_0,'0','1392306654FFTR'),(@wid_0,'0','1392306654FFTS'),(@wid_0,'0','1428371805ACSK'),(@wid_0,'0','1430154193FIWY');