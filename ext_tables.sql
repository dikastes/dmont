#
# Table structure for table 'tx_dmont_domain_model_mediumofperformance'
#
CREATE TABLE tx_dmont_domain_model_mediumofperformance (

	has_orchestra smallint(5) unsigned DEFAULT '0' NOT NULL,
	has_choir smallint(5) unsigned DEFAULT '0' NOT NULL,
	instrumental_soloists varchar(255) DEFAULT '' NOT NULL,
	vocal_soloists varchar(255) DEFAULT '' NOT NULL,
	instrument int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_dmont_domain_model_instrument'
#
CREATE TABLE tx_dmont_domain_model_instrument (

	name varchar(255) DEFAULT '' NOT NULL,
	gnd_id varchar(255) DEFAULT '' NOT NULL,
	shorthand varchar(255) DEFAULT '' NOT NULL,
	base_level smallint(5) unsigned DEFAULT '0' NOT NULL,
	root smallint(5) unsigned DEFAULT '0' NOT NULL,
	mapped_ids text,
	linked smallint(5) unsigned DEFAULT '0' NOT NULL,
	ensemble smallint(5) unsigned DEFAULT '0' NOT NULL,
	voice smallint(5) unsigned DEFAULT '0' NOT NULL,
	ignore_in_name smallint(5) unsigned DEFAULT '0' NOT NULL,
	super_instrument int(11) unsigned DEFAULT '0'

);

#
# Table structure for table 'tx_dmont_domain_model_genre'
#
CREATE TABLE tx_dmont_domain_model_genre (

	name varchar(255) DEFAULT '' NOT NULL,
	gnd_id varchar(255) DEFAULT '' NOT NULL,
	base_level smallint(5) unsigned DEFAULT '0' NOT NULL,
	root smallint(5) unsigned DEFAULT '0' NOT NULL,
	mapped_ids text,
	linked smallint(5) unsigned DEFAULT '0' NOT NULL,
	chamber_music smallint(5) unsigned DEFAULT '0' NOT NULL,
	super_genre int(11) unsigned DEFAULT '0'

);

#
# Table structure for table 'tx_dmont_work_genre_mm'
#
CREATE TABLE tx_dmont_work_genre_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_dmont_mediumofperformance_instrument_mm'
#
CREATE TABLE tx_dmont_mediumofperformance_instrument_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
