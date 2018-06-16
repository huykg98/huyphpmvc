-config: chứa file cấu hình
	+config.php: chứa các hằng số định nghĩa sử dụng trong hệ thống chính
-core: 
	+loader: chứa các đối tượng loader
		.FT_Helper_Loader.php: đối tượng quản lý và load helper
		.FT_Library_Loader.php: đối tượng quản lý và load library
		.FT_Model_Loader.php: đối tượng quản lý và load model
		.FT_View_Loader.php: đối tượng quản lý và load view
	+FT_Common.php: chứa các hàm bổ trợ cho hệ thống
	+FT_Controller.php: controller chính
	+FT_Model.php: model chính, các model trong ứng dụng sẽ kế thừa model này
-helper: thư mục chứa các file, trong file chứa hàm
-library: thư mục chứa library, mỗi library là các lớp(class)
