# Host: localhost  (Version 5.6.17)
# Date: 2020-02-21 09:38:52
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "angka"
#

DROP TABLE IF EXISTS `angka`;
CREATE TABLE `angka` (
  `Id` varchar(20) NOT NULL DEFAULT '',
  `Nomor` varchar(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "angka"
#

INSERT INTO `angka` VALUES ('1','0'),('2','10'),('3','80'),('88','78');

#
# Structure for table "data_cabang"
#

DROP TABLE IF EXISTS `data_cabang`;
CREATE TABLE `data_cabang` (
  `kode_cabang` varchar(20) NOT NULL DEFAULT '',
  `nama_cabang` varchar(255) NOT NULL DEFAULT '',
  `IP` varchar(30) NOT NULL DEFAULT '',
  `cid` varchar(30) NOT NULL DEFAULT '',
  `cabang` varchar(255) NOT NULL DEFAULT '',
  `bandwidth` varchar(10) NOT NULL DEFAULT '',
  `provider` varchar(20) NOT NULL DEFAULT '',
  `alamat_cabang` varchar(95) NOT NULL DEFAULT '',
  PRIMARY KEY (`kode_cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "data_cabang"
#

INSERT INTO `data_cabang` VALUES ('0','cisauk','983-12093','9383012938943','Jacitase','2024','LINKNET','jl.cisauk utara'),('1','Link DRC Cyber','192.168.76.66','4703262-30933','Jacitase','10240','Telkom','Jl. Kuningan Barat  No. 8 RT. 001/03 Kuningan Barat, Mampang Prapatan, Jakarta Selatan, 12710'),('2','Link DRC Cyber','192168191.22','4703262-0029069608','Jacitase','20','Telkom','WOM FINANCE Mega Glodok Kemayoran'),('3','Backhaul-1 Telkom','192.168.191.205','4703262-27440','Jacitase','6144','Telkom','JNB XL Bintaro, Lt. 3, Kawasan CBD Bintaro Sektor 7 (Jl. H.R. Rasuna Said), Tangsel, Banten '),('4','Backup Backhaul-1 Telkom','192.168.39.206','4703262-0029035480','Jacitase','614455','Telkom','WOM FINANCE Mega Glodok Kemayoran'),('hnfhbfeh','hfhrfghf','hfhbhebf','bchunrbf','Jawa Barat ','6144','Telkom','hdywyrggf');

#
# Structure for table "data_user"
#

DROP TABLE IF EXISTS `data_user`;
CREATE TABLE `data_user` (
  `username` varchar(255) NOT NULL DEFAULT '',
  `nama` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `regional` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "data_user"
#


#
# Structure for table "dhasboard"
#

DROP TABLE IF EXISTS `dhasboard`;
CREATE TABLE `dhasboard` (
  `nama_wilayah` varchar(200) NOT NULL DEFAULT '',
  `ipaddress` varchar(10) NOT NULL DEFAULT '0',
  `Performance` varchar(20) NOT NULL DEFAULT '0',
  `lapor` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `nama_wilayah` (`nama_wilayah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "dhasboard"
#

INSERT INTO `dhasboard` VALUES ('BABAT','2939293','29',''),('BANYUWANGI','0','0',''),('BLITAR','0','0',''),('BOJONEGORO','0','0',''),('DENPASAR','0','',''),('GENTENG','0','0',''),('GIANYAR','0','0',''),('GRESIK','0','0',''),('JEMBER','0','0',''),('JOMBANG','0','0',''),('KEDIRI','0','0',''),('KEPANJEN','0','0',''),('KERTOSONO','0','0',''),('KRIAN','0','0',''),('KUPANG JAYA','0','0',''),('LAMONGAN','0','0',''),('MADIUN','0','0',''),('MAGETAN','0','0',''),('MALANG','0','0',''),('MATARAM','0','0',''),('MOJOKERTO','0','0',''),('MOJOSARI','0','0',''),('NARMADA','0','0',''),('NGANJUK','0','0',''),('NGAWI','0','0',''),('PASURUAN','0','0',''),('PONOROGO','0','0',''),('ROGOJAMPI','0','0',''),('RUNGKUT','0','0',''),('SELONG','0','0',''),('SIDOARJO','0','0',''),('SINGARAJA','0','0',''),('SURABAYA TIMUR','0','0',''),('SUTOJAYAN','0','0',''),('TABANAN','0','0',''),('TUBAN','0','0',''),('TULUNGAGUNG','0','0',''),('WIYUNG','0','0','');

#
# Structure for table "jacitase"
#

DROP TABLE IF EXISTS `jacitase`;
CREATE TABLE `jacitase` (
  `nama_wilayah` varchar(200) NOT NULL DEFAULT '',
  `ipaddress` varchar(225) NOT NULL DEFAULT '0',
  `Performance` varchar(225) NOT NULL DEFAULT '0',
  `lapor` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `nama_wilayah` (`nama_wilayah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "jacitase"
#

INSERT INTO `jacitase` VALUES ('AMU RAJEG','192.168.39.49','100',''),('BALARAJA','172.16.2.93','50',''),('BEKASI','192.168.39.137','30',''),('CIKARANG','192.168.39.161','120',''),('CIKUPA','192.168.76.25','1400',''),('CILEDUG','192.168.39.150','1829',''),('CIPUTAT','192.168.76.123','100',''),('CISAUK','192.168.39.137','1',''),('DAAN MOGOT','192.168.39.137','2',''),('DEALER PRIMA CILEDUG','192.168.39.137','3',''),('DEPOK','192.168.39.137','4',''),('GUDANG FILLING CIPUTAT','192.168.39.137','5',''),('JELAMBAR','192.168.39.137','6',''),('KARAWANG','192.168.39.137','78',''),('KEMAYORAN','192.168.39.137','100',''),('KHASANAH BSD TANGERANG','192.168.39.137','0',''),('KHASANAH SUNTER','192.168.39.137','45',''),('KOJA','192.168.39.137','23',''),('LABUAN','192.168.39.137','12',''),('MANDALA KEKAR ABADI (MKA)','192.168.39.137','32',''),('MAUK','192.168.39.137','12',''),('MEKAR JAYA ABADI (MJA)','192.168.39.137','4',''),('PAMULANG','192.168.39.137','1',''),('PONDOK AREN','192.168.39.137','0',''),('RAJEG','192.168.39.137','2',''),('RANGKASBITUNG','192.168.39.137','1',''),('RAWAMANGUN','192.168.39.137','4',''),('SERANG','192.168.39.137','1',''),('TAMBUN','192.168.39.137','5',''),('TANGERANG','192.168.39.137','2',''),('TIGARAKSA','192.168.39.137','0',''),('TMII','192.168.39.137','0','');

#
# Structure for table "jatim_bali"
#

DROP TABLE IF EXISTS `jatim_bali`;
CREATE TABLE `jatim_bali` (
  `nama_wilayah` varchar(200) NOT NULL DEFAULT '',
  `ipaddress` varchar(30) NOT NULL DEFAULT '0',
  `Performance` varchar(20) NOT NULL DEFAULT '0',
  `lapor` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `nama_wilayah` (`nama_wilayah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "jatim_bali"
#

INSERT INTO `jatim_bali` VALUES ('BABAT','192.168.39.49','29',''),('BANYUWANGI','192.168.39.49','0',''),('BLITAR','192.168.39.49','0',''),('BOJONEGORO','192.168.39.49','0',''),('DENPASAR','192.168.39.49','1',''),('GENTENG','192.168.39.49','0',''),('GIANYAR','192.168.39.49','0',''),('GRESIK','192.168.39.49','0',''),('JEMBER','192.168.39.49','0',''),('JOMBANG','192.168.39.49','44',''),('KEDIRI','192.168.39.49','24',''),('KEPANJEN','192.168.39.49','345',''),('KERTOSONO','192.168.39.49','564',''),('KRIAN','192.168.39.49','5765',''),('KUPANG JAYA','192.168.39.49','0',''),('LAMONGAN','192.168.39.49','0',''),('MADIUN','192.168.39.49','0',''),('MAGETAN','192.168.39.49','0',''),('MALANG','192.168.39.49','0',''),('MATARAM','192.168.39.49','78',''),('MOJOKERTO','192.168.39.49','896',''),('MOJOSARI','192.168.39.49','0',''),('NARMADA','192.168.39.49','0',''),('NGANJUK','192.168.39.49','9',''),('NGAWI','192.168.39.49','68',''),('PASURUAN','192.168.39.49','67',''),('PONOROGO','192.168.39.49','24',''),('ROGOJAMPI','192.168.39.49','234',''),('RUNGKUT','192.168.39.49','345',''),('SELONG','192.168.39.49','0',''),('SIDOARJO','192.168.39.49','0',''),('SINGARAJA','192.168.39.49','135',''),('SURABAYA TIMUR','192.168.39.49','232',''),('SUTOJAYAN','192.168.39.49','455',''),('TABANAN','192.168.39.49','50',''),('TUBAN','192.168.39.49','100',''),('TULUNGAGUNG','192.168.39.49','123',''),('WIYUNG','192.168.39.49','0','');

#
# Structure for table "jawa_barat"
#

DROP TABLE IF EXISTS `jawa_barat`;
CREATE TABLE `jawa_barat` (
  `nama_wilayah` varchar(200) NOT NULL DEFAULT '',
  `ipaddress` varchar(30) NOT NULL DEFAULT '0',
  `Performance` varchar(10) NOT NULL DEFAULT '0',
  `lapor` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `nama_wilayah` (`nama_wilayah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "jawa_barat"
#

INSERT INTO `jawa_barat` VALUES ('AMU BOGOR','192.168.76.123','34',''),('AMU CIREBON','192.168.76.123','0',''),('AMU JATIBARANG','192.168.76.123','0',''),('BANDUNG','192.168.76.123','32',''),('BOGOR','192.168.76.123','32',''),('CIANJUR','192.168.76.123','0',''),('CIBINONG','192.168.76.123','0',''),('CILEUNGSI','192.168.76.123','4',''),('CILILIN','192.168.76.123','1',''),('CIMAHI','192.168.76.123','3',''),('CIREBON','192.168.76.123','32',''),('GARUT','192.168.76.123','4',''),('GUNUNG PUTRI','192.168.76.123','0',''),('JATIBARANG','192.168.76.123','0',''),('JONGGOL','192.168.76.123','90',''),('KUNINGAN','192.168.76.123','100',''),('LEUWILIANG','192.168.76.123','0',''),('MAJALENGKA','192.168.76.123','80',''),('PAMANUKAN','192.168.76.123','120',''),('PATROL','192.168.76.123','3',''),('PURWAKARTA','192.168.76.123','2',''),('SETIABUDI','192.168.76.123','1',''),('SOREANG','192.168.76.123','24',''),('SUBANG','192.168.76.123','32',''),('SUKABUMI','192.168.76.123','3',''),('SUMEDANG','192.168.76.123','1',''),('TASIKMALAYA','192.168.76.123','8','');

#
# Structure for table "jawa_tengah"
#

DROP TABLE IF EXISTS `jawa_tengah`;
CREATE TABLE `jawa_tengah` (
  `nama_wilayah` varchar(200) NOT NULL DEFAULT '',
  `ipaddress` varchar(255) NOT NULL DEFAULT '',
  `Performance` varchar(255) NOT NULL DEFAULT '',
  `lapor` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `Id` (`nama_wilayah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "jawa_tengah"
#

INSERT INTO `jawa_tengah` VALUES ('AMBARAWA','192.168.76.25','0',''),('AMU MAGELANG','192.168.76.25','0',''),('BANJARNEGARA','192.168.76.25','0',''),('BANTUL','192.168.76.25','0',''),('BLORA','192.168.76.25','0',''),('BOYOLALI','192.168.76.25','0',''),('BREBES','192.168.76.25','0',''),('BUMIAYU','192.168.76.25','0',''),('CAWAS','192.168.76.25','0',''),('CEPU','192.168.76.25','0',''),('CILACAP','192.168.76.25','0',''),('DEPOK - YOGYAKARTA','192.168.76.25','0',''),('GOMBONG','192.168.76.25','0',''),('JEPARA','192.168.76.25','0',''),('KAJEN','192.168.76.25','90',''),('KARANGANYAR','192.168.76.25','80',''),('KEBUMEN','192.168.76.25','90',''),('KHASANAH SOLO','192.168.76.25','90',''),('KLATEN','192.168.76.25','0',''),('KUDUS','192.168.76.25','4',''),('LIMPUNG','192.168.76.25','0',''),('MAGELANG','192.168.76.25','0',''),('MAJENANG','192.168.76.25','1',''),('PATI','192.168.76.25','3',''),('PEKALONGAN','192.168.76.25','5',''),('PEMALANG','192.168.76.25','77',''),('PURBALINGGA','192.168.76.25','7',''),('PURWODADI','192.168.76.25','90',''),('PURWOKERTO','192.168.76.25','0',''),('PURWOREJO','192.168.76.25','0',''),('RANDUDONGKAL','192.168.76.25','0',''),('SALATIGA','192.168.76.25','80',''),('SEMARANG','192.168.76.25','3',''),('SIDAREJA','192.168.76.25','55',''),('SOLO','192.168.76.25','66',''),('SRAGEN','192.168.76.25','78',''),('TEGAL','192.168.76.25','34',''),('TEMANGGUNG','192.168.76.25','1',''),('UNGARAN','192.168.76.25','2345',''),('WELERI','192.168.76.25','0',''),('WONOGIRI','192.168.76.25','6',''),('WONOSARI','192.168.76.25','34',''),('WONOSOBO','192.168.76.25','0',''),('YOGYAKARTA','192.168.76.25','9','');

#
# Structure for table "kalsul"
#

DROP TABLE IF EXISTS `kalsul`;
CREATE TABLE `kalsul` (
  `nama_wilayah` varchar(200) NOT NULL DEFAULT '',
  `ipaddress` varchar(255) NOT NULL DEFAULT '',
  `Performance` varchar(255) NOT NULL DEFAULT '',
  `lapor` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `Id` (`nama_wilayah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "kalsul"
#

INSERT INTO `kalsul` VALUES ('BALIKPAPAN','192.168.76.25','89',''),('BANJARBARU','192.168.76.25','99',''),('BANJARMASIN','192.168.76.25','1',''),('BERAU','192.168.76.25','0',''),('BONTANG','192.168.76.25','0',''),('BULUKUMBA','192.168.76.25','2',''),('GORONTALO','192.168.76.25','0',''),('GOWA','192.168.76.25','3',''),('MAKASSAR','192.168.76.25','3',''),('MAROS','192.168.76.25','2',''),('PALOPO','192.168.76.25','0',''),('PALU','192.168.76.25','0',''),('PANGKEP','192.168.76.25','4',''),('PARE-PARE','192.168.76.25','55',''),('PINRANG','192.168.76.25','3',''),('SAMARINDA','192.168.76.25','4',''),('SENGKANG','192.168.76.25','77',''),('TENGGARONG','192.168.76.25','0','');

#
# Structure for table "lapor_jabar"
#

DROP TABLE IF EXISTS `lapor_jabar`;
CREATE TABLE `lapor_jabar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "lapor_jabar"
#


#
# Structure for table "lapor_jacitase"
#

DROP TABLE IF EXISTS `lapor_jacitase`;
CREATE TABLE `lapor_jacitase` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "lapor_jacitase"
#


#
# Structure for table "lapor_jateng"
#

DROP TABLE IF EXISTS `lapor_jateng`;
CREATE TABLE `lapor_jateng` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "lapor_jateng"
#


#
# Structure for table "lapor_jatimbali"
#

DROP TABLE IF EXISTS `lapor_jatimbali`;
CREATE TABLE `lapor_jatimbali` (
  `tanggal` int(11) NOT NULL DEFAULT '0',
  `jam` varchar(255) NOT NULL DEFAULT '',
  `deskerror` varchar(255) NOT NULL DEFAULT '',
  `picnohp` varchar(255) NOT NULL DEFAULT '',
  `cid` varchar(255) NOT NULL DEFAULT '',
  `indikatormodem` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "lapor_jatimbali"
#

INSERT INTO `lapor_jatimbali` VALUES (0,'','','','','');

#
# Structure for table "lapor_kalsul"
#

DROP TABLE IF EXISTS `lapor_kalsul`;
CREATE TABLE `lapor_kalsul` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "lapor_kalsul"
#


#
# Structure for table "lapor_sumsel"
#

DROP TABLE IF EXISTS `lapor_sumsel`;
CREATE TABLE `lapor_sumsel` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "lapor_sumsel"
#


#
# Structure for table "lapor_sumut"
#

DROP TABLE IF EXISTS `lapor_sumut`;
CREATE TABLE `lapor_sumut` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "lapor_sumut"
#


#
# Structure for table "sumbagsel"
#

DROP TABLE IF EXISTS `sumbagsel`;
CREATE TABLE `sumbagsel` (
  `nama_wilayah` varchar(200) NOT NULL DEFAULT '',
  `ipaddress` varchar(255) NOT NULL DEFAULT '',
  `Performance` varchar(255) NOT NULL DEFAULT '',
  `lapor` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `Id` (`nama_wilayah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "sumbagsel"
#

INSERT INTO `sumbagsel` VALUES ('aaaa','192.168.76.25','100',''),('ALANG ALANG LEBAR','192.168.76.25','120',''),('ARGA MAKMUR','192.168.76.25','8',''),('BATURAJA','192.168.76.25','0',''),('BELITANG','192.168.76.25','44',''),('BENGKULU','192.168.76.25','2',''),('BETUNG','192.168.76.25','1',''),('INDRALAYA','192.168.76.25','0',''),('JAMBI','192.168.76.25','3',''),('KAYU AGUNG','192.168.76.25','0',''),('LAHAT','192.168.76.25','5',''),('LAMPUNG','192.168.76.25','2',''),('LUBUK LINGGAU','192.168.76.25','33',''),('METRO','192.168.76.25','5',''),('MUARA ENIM','192.168.76.25','0',''),('PANGKAL PINANG','192.168.76.25','0',''),('PRABUMULIH','192.168.76.25','0',''),('SEI LILIN','192.168.76.25','2',''),('TEMBESI','192.168.76.25','112',''),('TUGU MULYO','192.168.76.25','23','');

#
# Structure for table "sumbagut"
#

DROP TABLE IF EXISTS `sumbagut`;
CREATE TABLE `sumbagut` (
  `nama_wilayah` varchar(200) NOT NULL DEFAULT '',
  `ipaddress` varchar(255) NOT NULL DEFAULT '',
  `Performance` varchar(255) NOT NULL DEFAULT '',
  `lapor` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `Id` (`nama_wilayah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "sumbagut"
#

INSERT INTO `sumbagut` VALUES ('AIR MOLEK','192.168.76.25','100',''),('AMU PEKANBARU','192.168.76.25','89',''),('BAGAN BATU','192.168.76.25','90',''),('BATAM','192.168.76.25','0',''),('BATU AJI','192.168.76.25','0',''),('BINJAI','192.168.76.25','0',''),('DUMAI','192.168.76.25','0',''),('DURI','192.168.76.25','1',''),('KANDIS','192.168.76.25','3',''),('KERINCI','192.168.76.25','45',''),('LUBUL PAKAM','192.168.76.25','44',''),('MEDAN','192.168.76.25','23',''),('MEDAN II','192.168.76.25','35',''),('PADANG','192.168.76.25','100',''),('PADANG SIDEMPUAN','192.168.76.25','23',''),('PANGKALAN BRANDAN','192.168.76.25','22',''),('PEKANBARU','192.168.76.25','1',''),('PERAWANG','192.168.76.25','0',''),('RANTAU PRAPAT','192.168.76.25','4',''),('STABAT','192.168.76.25','12',''),('TANJUNG PINANG','192.168.76.25','12',''),('TEBING TINGGI','192.168.76.25','34',''),('TEMBUNG','192.168.76.25','2',''),('UJUNG TANJUNG','192.168.76.25','0','');

#
# Structure for table "table80"
#

DROP TABLE IF EXISTS `table80`;
CREATE TABLE `table80` (
  `IP` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NamaCabang` varchar(30) NOT NULL,
  `Regioanl` varchar(30) DEFAULT NULL,
  `Bandwidth` varchar(30) DEFAULT NULL,
  `Provider` varchar(30) DEFAULT NULL,
  `CID` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "table80"
#

