<?php if (!defined('IN_SITE')) die ('The request not found');
function db_get_code_upload(){
    $sql = "SELECT * FROM codeupload";
    return db_get_row($sql);
}