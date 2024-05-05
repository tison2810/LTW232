DROP DATABASE IF EXISTS VINFAST;
CREATE DATABASE VINFAST;
USE VINFAST;

CREATE TABLE KhachHang (
    ID INT AUTO_INCREMENT,
    SoDienThoai CHAR(10),
    MatKhau VARCHAR(255) NOT NULL,
    HoTen VARCHAR(255) NOT NULL,
    Email VARCHAR(255) UNIQUE NOT NULL,
    Diachi VARCHAR(1000),
    PRIMARY KEY (ID)
);

CREATE TABLE Oto (
    ID INT AUTO_INCREMENT,
    Ten VARCHAR(255) NOT NULL,
    Anh1 VARCHAR(255),
    Anh2 VARCHAR(255),
    Anh3 VARCHAR(255),
    Anh4 VARCHAR(255),
    MoTa TEXT(65535),
    GiaGomPin INT,
    Dai INT,
    CongSuat VARCHAR(255),
    QuangDuongDiChuyen INT,
    PRIMARY KEY (ID)
);

CREATE TABLE XeMay (
    ID INT AUTO_INCREMENT,
    Ten VARCHAR(255) NOT NULL,
    Anh VARCHAR(255),
    MoTa TEXT(65535),
    Gia INT,
    TocDoToiDa INT,
    QuangDuongDiChuyen INT,
    DoRongCop INT,
    MauSac VARCHAR(255),
    ThoiGianSac VARCHAR(255),
    DongCo VARCHAR(255),
    CongSuat VARCHAR(255),
    GiamXoc VARCHAR(255),
    Pin VARCHAR(255),
    TuoiThoPin VARCHAR(255),
    TrongLuong VARCHAR(255),
    KhoangSangGamXe VARCHAR(255),
    Phanh VARCHAR(255),
    PRIMARY KEY (ID)
);

CREATE TABLE KhachThemOto (
    Email VARCHAR(30) NOT NULL,
    ID INT NOT NULL,
    SoLuong INT NOT NULL,
    PRIMARY KEY(Email, ID)
);
ALTER TABLE KhachThemOto
ADD CONSTRAINT FK__ThemOto_TDN FOREIGN KEY (Email) REFERENCES KhachHang(Email),
ADD CONSTRAINT FK__ThemOto_ID FOREIGN KEY (ID) REFERENCES Oto(ID);

CREATE TABLE KhachThemXeMay (
    Email VARCHAR(30) NOT NULL,
    ID INT NOT NULL,
    SoLuong INT NOT NULL,
    PRIMARY KEY(Email, ID)
);
ALTER TABLE KhachThemXeMay
ADD CONSTRAINT FK__ThemXeMay_TDN FOREIGN KEY (Email) REFERENCES KhachHang(Email),
ADD CONSTRAINT FK__ThemXeMay_ID FOREIGN KEY (ID) REFERENCES XeMay(ID);

CREATE TABLE DonHang (
    ID INT AUTO_INCREMENT,
    Email VARCHAR(30) NOT NULL,
    TongTien INT,
    NgayTao DATETIME,
    XacNhan CHAR(20),
    DiaChi TEXT(65535) NOT NULL,
    PRIMARY KEY(ID)
);
ALTER TABLE DonHang
ADD CONSTRAINT FK__DonHang__TDN FOREIGN KEY (Email) REFERENCES KhachHang(Email);

CREATE TABLE DangKyNhanTin (
    ID INT AUTO_INCREMENT,
    Email VARCHAR(255) NOT NULL,
    PRIMARY KEY(ID)
);

CREATE TABLE DangKyTuVan (
    ID INT AUTO_INCREMENT,
    Email VARCHAR(255) NOT NULL,
    HoTen VARCHAR(255) NOT NULL,
    SoDienThoai CHAR(10) NOT NULL,
    PRIMARY KEY(ID)
);

CREATE TABLE NhanVien (
    ID INT AUTO_INCREMENT,
    Email VARCHAR(20) NOT NULL,
    MatKhau VARCHAR(20) NOT NULL,
    HoTen VARCHAR(255) NOT NULL,
    SoDienThoai CHAR(10) NOT NULL,
    GioiTinh CHAR(1),
    PRIMARY KEY (ID)
);


INSERT INTO Oto VALUES (1, 'VF 5 Plus', 
                        'https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw09fddd8d/images/PDP/VF5/vf5-4.png',
                        'https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw2df39a3f/images/PDP/VF5/vf5-7.png',
                        'https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwe8ca0237/images/PDP/VF5/vf5-9.png',
                        'https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwf7907695/images/PDP/VF5/vf5-1.png',
                        'Với thiết kế hiện đại, độc đáo, được trang bị các công nghệ và tính năng thông minh vượt trội, khả năng vận hành mạnh mẽ, an toàn, VF 5 Plus hội tụ đầy đủ các yếu tố người dùng trẻ tìm kiếm cho một chiếc xe điện đô thị lý tưởng.',
                        548000000, 3967, 100, 300)

INSERT INTO Oto VALUES (2, 'VF 8', 
                        'https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw4d54f126/images/PDP/vf8/img-CE11.webp',
                        'https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw4d54f126/images/PDP/vf8/img-CE18.webp',
                        'https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw4d54f126/images/PDP/vf8/img-CE1M.webp',
                        'https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw4d54f126/images/PDP/vf8/img-CE1N.webp',
                        'VF 8 đạt đến sự kết hợp hoàn hoàn hảo giữa chất lượng và giá trị thông qua công nghệ cao cấp, kỹ thuật sản xuất đặc biệt và dịch vụ tận tâm.',
                        1290000000, 4750, 300, 471)

INSERT INTO Oto VALUES (1, 'VF 9', 
                        'https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwa6fa7521/images/PDP/vf9/img-CE11.webp',
                        'https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwa6fa7521/images/PDP/vf9/img-CE18.webp',
                        'https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwa6fa7521/images/PDP/vf9/img-CE1M.webp',
                        'https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwa6fa7521/images/PDP/vf9/img-CE1N.webp',
                        'VF 9 là mẫu xe SUV 7 chỗ hàng đầu của VinFast. Với kiểu dáng tinh tế, công nghệ tiên tiến nhất và sự tỉ mỉ trong từng chi tiết, VF 9 mang đến trải nghiệm đặc biệt cao cấp cho người sở hữu.',
                        1984000000, 3149, 300, 626)