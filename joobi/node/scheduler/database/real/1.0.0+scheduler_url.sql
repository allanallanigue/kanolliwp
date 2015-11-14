CREATE TABLE IF NOT EXISTS `#__scheduler_url` (
  `schurlid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `nextdate` int(10) unsigned NOT NULL DEFAULT '0',
  `frequency` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `priority` tinyint(4) NOT NULL DEFAULT '50',
  `attempt` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `lastdate` int(10) unsigned NOT NULL DEFAULT '0',
  `sendreport` tinyint(4) NOT NULL DEFAULT '0',
  `lastreport` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `publish` tinyint(4) NOT NULL DEFAULT '1',
  `created` int(10) unsigned NOT NULL DEFAULT '0',
  `timeout` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `lock` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`schurlid`),
  KEY `IX_scheduler_url_publish_lock_nextdate_priority` (`publish`,`lock`,`nextdate`,`priority`),
  KEY `IX_scheduler_url_uid` (`uid`)
) ENGINE=InnoDB   /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci*/;