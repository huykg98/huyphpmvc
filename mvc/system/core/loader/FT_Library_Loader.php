<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
/**
 * @package     FT_Framework
 * @author      Freetuts Dev Team
 * @email       freetuts.net@gmail.com
 * @copyright   Copyright (c) 2015
 * @since       Version 1.0
 * @filesource  system/core/loader/FT_Library_Loader.php
 
 
 */
class FT_Library_Loader
{
    /**
     * Load library
     * 
     * @param   string
     * @param   array
     * @desc    hàm load library, tham số truyền vào là tên của library và 
     *          danh sách các biến trong hàm khởi tạo (nếu có)
 	 tạo một class tên là FT_Library_Loader và có một method load() gôm hai tham số:

$library là tên class muốn load.
$agrs là các tham số truyền vào hàm khởi tạo của class đó. Nếu không có thì bỏ qua tham số này
Các bạn chú ý tên class truyền vào phải tuân theo nguyên tắc như sau: Giả sử class bạn đặt tên là upload thì tên file phải là Upload_Library.php (viết hoa chữ đầu và thêm hậu tố _Library), tương tự tên class cũng phải đặt như vậy. Nếu bạn để ý kĩ trong phương thức load() mình cũng có đề cập đến vấn đề này.
 
 
     */
    public function load($library, $agrs = array())
    {
        // Nếu thư viện chưa được load thì thực hiện load
        if ( empty($this->{$library}) )
        {
            // Chuyển chữ hoa đầu và thêm hậu tố _Library
            $class = ucfirst($library) . '_Library';
            require_once(PATH_SYSTEM . '/library/' . $class . '.php');
            $this->{$library} = new $class($agrs);
        }
    }
}