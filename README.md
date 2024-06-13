# WD_LAB
B1: Bắt đầu git cho 1 file

git init

B2: Kết nối với git online

git remote add origin <url>

B3: Thêm file vào kho lưu trữ cục bộ

- Thêm file hàng loạt: git add .
- Thêm file chỉ định: git add <tên file>

B4: Commit file đã thêm ở bước 3

git commit -m "<commit lần mấy,...>"

B5: Đẩy các source code trên lên git online

git push -u origin <tên nhánh (ở đây là nhanh master)>

//Các câu lệnh khác và ý nghĩa

1. Status

git status: sử dụng để biết được tệp nào đã được sử đổi, tệp nào nằm trong khu vực được chuẩn bị cho quá trình commit

2. Log

git log: dùng để show ra tất cả các commit đã được thực hiện cho đến hiện tại

3. Branches

git branch checkout -b <tên nhánh mới> : tạo nhánh mới và truy cập nhánh đó luôn (tuy nhiên chỉ ở kho cục bộ, khi nào push lên kho online thì mới thấy được nhánh đó trên github)

git branch: xem các nhánh đã được tạo ở kho cục bộ

4. Merge

- git checkoout master: trước khi gộp nhánh thì phải về nhánh chính
- git merge <tên nhánh>: gộp nhánh đó vào nhánh chính

5. Pull

git pull origin <tên nhánh>: dùng để kéo những thay đổi mới nhất từ kho lưu trữ từ xa vào kho lưu trữ cục bộ

6. Clone

git clone <url>: như tải file về thôi

7. Config: cấu hình git giúp chỉ định tên tài khoản và địa chỉ email; mỗi git sẽ sử dụng chúng cho mỗi lần commit

git config --global user.name "<tên người git>" : cấu hình tên

git config --global user.email <email của người git> : cấu hình email

git config --list: kiểm tra cấu hình cài đặt

git config user.name: coi từ khóa user.name




