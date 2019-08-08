-- Tạo CSDL 'QL_SV'
CREATE DATABASE QL_SV;

-- Sử dụng CSDL đã tạo ở trên
USE QL_SV;

-- Tạo bảng 'tbl_Khoa'
CREATE TABLE tbl_Khoa
(
	MaKH char(10) PRIMARY KEY,
	TenKH varchar(50)
);

-- Tạo bảng 'tbl_Mon'
CREATE TABLE tbl_Mon
(
	MaMH char(5) PRIMARY KEY,
	TenMH varchar(50),
	Sotiet int
);

-- Tạo bảng 'tbl_SinhVien'
CREATE TABLE tbl_SinhVien
(
	MaSV char(10) PRIMARY KEY,
	Hodem varchar(20),
	Ten varchar(10),
	Gioitinh bit,
	Ngaysinh datetime,
	Noisinh varchar(50),
	Hocbong int,
	MaKH char(10),
	FOREIGN KEY (MaKH) REFERENCES tbl_Khoa(MaKH)
);

-- Tạo bảng 'tbl_KetQua'
CREATE TABLE tbl_KetQua
(
	MaSV char(10),
	MaMH char(5),
	Diem int,
	FOREIGN KEY (MaSV) REFERENCES tbl_SinhVien(MaSV),
	FOREIGN KEY (MaMH) REFERENCES tbl_Mon(MaMH),
	CONSTRAINT PK_tbl_KetQua PRIMARY KEY (MaSV,MaMH)
);







