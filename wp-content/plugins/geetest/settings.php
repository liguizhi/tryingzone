<?php   
  function _checked($value){
    if($value == "1"){
       echo "checked";
    }
  }
  //print_r($this->options);
?>

<div class="wrap">
   <a name="geetest"></a>
   <h2>极验设置</h2>   
   
   <form method="post" action="options.php">
      <?php settings_fields('geetest_options_group'); ?>
      <h3>KEY</h3>
      <p>请访问<a href="http://www.geetest.com" title="注册">geetest</a>点击注册申请自己的key.</p>
      
      <table class="form-table">
	  	<tr valign="top">
            <th scope="row">您的极验公钥</th>
            <td>
               <input type="text" name="geetest_options[public_key]" size="40" value="<?php echo $this->options['public_key']; ?>" />
            </td>
         </tr>
         <tr valign="top">
            <th scope="row">您的极验私钥</th>
            <td>
               <input type="text" name="geetest_options[private_key]" size="40" value="<?php echo $this->options['private_key']; ?>" />               
            </td>
         </tr>
      </table>
      <h3>评论设置</h3>
      <table class="form-table">
         <tr valign="top">
            <th scope="row">开启</th>
            <td>
               <input type="checkbox" id ="geetest_options[show_in_comments]" name="geetest_options[show_in_comments]" value="1" <?php _checked($this->options['show_in_comments']); ?> />
               <label for="geetest_options[show_in_comments]">评论使用验证码</label>
            </td>
         </tr>
      </table>
      <h3>登陆设置</h3>
      <table class="form-table">
         <tr valign="top">
            <th scope="row">开启</th>
            <td>
               <input type="checkbox" id ="geetest_options[show_in_login]" name="geetest_options[show_in_login]" value="1" <?php _checked($this->options['show_in_login']); ?> />
               <label for="geetest_options[show_in_login]">登陆使用验证码</label>
            </td>
         </tr>
      </table>      
      <h3>注册设置</h3>
      <table class="form-table">
         <tr valign="top">
            <th scope="row">开启</th>
            <td>
               <input type="checkbox" id ="geetest_options[show_in_registration]" name="geetest_options[show_in_registration]" value="1" <?php _checked($this->options['show_in_registration']); ?> />
               <label for="geetest_options[show_in_registration]">注册使用验证码</label>
            </td>
         </tr>
      </table>

      <p class="submit"><input type="submit" class="button-primary" title="保存更改" value="保存更改 &raquo;" /></p>
   </form>
   
   <?php do_settings_sections('geetest_options_page'); ?>
</div>