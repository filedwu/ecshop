<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>

<?php echo $this->_var['lang']['hello']; ?>，<font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font>，<?php echo $this->_var['lang']['welcome_return']; ?>！
<a class="user-name" href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a>|
<a class="user-lout"  href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>

<?php else: ?>
 <?php echo $this->_var['lang']['welcome']; ?>
 <a href="user.php"> 登录 </a>
 <a href="user.php?act=register"> 注册 </a>
<?php endif; ?>