CREATE DATABASE apg;
USE apg;

CREATE TABLE jabatan (
	id_jabatan INT(5) NOT NULL AUTO_INCREMENT,
	nama_jabatan VARCHAR(20) NOT NULL,
	PRIMARY KEY (id_jabatan)
);

INSERT INTO jabatan (id_jabatan, nama_jabatan) VALUES
	(1, 'Direktur'),
	(2, 'Manajer'),
	(3, 'Marketing'),
	(4, 'Sekretaris');
	
CREATE TABLE pegawai (
	id_pegawai INT(5) NOT NULL AUTO_INCREMENT,
	nama_pegawai VARCHAR(30) NOT NULL,
	jenis_kelamin VARCHAR(1) DEFAULT NULL,
	tgl_lahir DATE DEFAULT NULL,
	foto VARCHAR(50) DEFAULT NULL,
	keterangan TEXT,
	id_jabatan INT(5) DEFAULT NULL,
	PRIMARY KEY (id_pegawai)
);

INSERT INTO pegawai (id_pegawai, nama_pegawai, jenis_kelamin, tgl_lahir, foto, keterangan, id_jabatan) VALUES
	(1, 'Najma Faricha', 'P', '2007-08-12', '12-dark.jpg', '', 1);

CREATE TABLE user_ (
	id_user INT(5) NOT NULL AUTO_INCREMENT,
	nama_lengkap VARCHAR(50) DEFAULT NULL,
	username VARCHAR(20) DEFAULT NULL,
	password VARCHAR(50) DEFAULT NULL,
	 PRIMARY KEY (id_user)
);

INSERT INTO user_ (id_user, nama_lengkap, username, password) VALUES
	(1, 'Najma Faricha', 'admin', 'N4jm4F4r1ch4');