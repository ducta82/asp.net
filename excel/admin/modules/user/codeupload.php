<?php if (!defined('IN_SITE')) die ('The request not found');
 
// Kiểm tra quyền, nếu không có quyền thì chuyển nó về trang logout
if (!is_admin()){
    redirect(base_url('admin'), array('m' => 'common', 'a' => 'logout'));
}
include_once('database/code_upload.php');
$code = db_get_code_upload();
header('Content-Type: text/html; charset=utf-8');  
if (is_submit('add_code_upload'))
{
    // Lấy danh sách dữ liệu từ form
    $data = array(
        'code'  => input_post('codeUpload')
    );
     
    // Thực hiện validate
    if($code){
        $error = $data['code'] == $code['code'] ? true : false ;   
    }else{
        $error = false;
    }
     
    // Nếu validate không có lỗi
    if ($error == false)
    {
        db_delete_all('codeupload');
        if (db_insert('codeupload', $data)){
            ?>
            <script language="javascript">
                alert('Thêm mã upload thành công!');
                window.location = '<?php echo create_link(base_url('admin'), array('m' => 'user', 'a' => 'codeupload')); ?>';
            </script>
            <?php
            die();
        }
    }else{
    ?>
    <script language="javascript">
        alert('Mã đang tồn tại, hay nhập mã mới!');
        window.location = '<?php echo create_link(base_url('admin'), array('m' => 'user', 'a' => 'codeupload')); ?>';
    </script>
    <?php 
    die();  
}   
}
?>
 
<?php include_once('widgets/header.php'); ?>
<h1>Thay đổi code upload!</h1>
<h2>Code upload hiện tại: <span style="color:red;"><?php echo $code['code'];?></span></h2> 
<div class="controls">
    <a class="button" onclick="$('#main-form').submit()" href="#">Lưu</a>
    <a class="button" href="<?php echo create_link(base_url('admin')); ?>">Trở về</a>
</div>
<form id="main-form" method="post" action="<?php echo create_link(base_url('admin/'), array('m' => 'user', 'a' => 'codeupload')); ?>">
    <input type="hidden" name="request_name" value="add_code_upload"/>
    <label for="code_upload">Nhập code upload mới:</label>
    <input id ="code_upload" type="text" name="codeUpload" value="<?php echo input_post('codeUpload'); ?>">
</form>
<?php include_once('widgets/footer.php'); ?>