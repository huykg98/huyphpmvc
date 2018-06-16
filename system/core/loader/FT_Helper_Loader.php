<?php
/**
 * @package     FT_Framework
 * @author      Freetuts Dev Team
 * @email       freetuts.net@gmail.com
 * @copyright   Copyright (c) 2015
 * @since       Version 1.0
 * @filesource  system/core/loader/FT_Helper_Loader.php
 Trong file này mình tạo mới một class tên là FT_Helper_Loader và trong nó có phương thức load(), phương thức này có tham số truyền vào là tên helper ở dạng chưa được chuyển đổi nên khi bạn load helper chỉ cần nhập vào tên là được. Ví dụ load helper string thì sẽ nhập tên là string chứ không phải String_Helper.


 */
class FT_Helper_Loader
{
    /**
     * Load helper
     * 
     * @param   string
     * @desc    hàm load helper, tham số truyền vào là tên của helper
     */
    public function load($helper)
    {
        $helper = ucfirst($helper) . '_Helper';
        require_once(PATH_SYSTEM . '/helper/' . $helper . '.php');
    }
}	