- Trong file FT_Controller.php:
	+Phía trên cùng mình có sử dụng một đoạn kiểm tra một hằng số tồn tại không và nếu không tồn tại thì thoát khỏi chương trình. Đoạn code này giúp bảo vệ an toàn cho hệ thống vì hằng số PATH_SYSTEM chỉ tồn tại khi ban gọi thông qua file bootstrap.
	+Tại hàm load() có hai tham số truyền vào là controller và action. Đây cũng chính là hàm sẽ chạy ứng dụng
	Quy luật cua controller:
		+Tất cả các controller của ứng dụng (ứng dụng ở đây chính là folder admin) đề nằm trong folder admin/controller
		+Tên của controller phải ở dạng Controllername_Controller.php. Trong đó Controllername là tên mà bạn muốn đặt cho controller
		+Class của controller cũng phải giống tên file của nó, nghĩa là sẽ có tên Controllername_Controller
	Bạn chú ý trong code mình có dùng một số hàm chuyển đổi chuỗi như ucfirst, strtolower để đổi tên controller theo quy luật mà mình nói ở trên.

