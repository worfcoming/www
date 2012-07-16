<?php echo $this->fetch('pageheader.htm'); ?>

<div class="list-div" style="margin-bottom: 5px; margin-top: 10px;" id="listDiv">
<form method="post" action="csys.php?act=<?php echo $this->_var['act']; ?>"  >
<table cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td class="label">请选择车品牌</td>
    <td>
    <select onchange="hideCatDiv()" name="cb_name">
    <option value="">请选择...</option>
    <?php $_from = $this->_var['csys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'sys');if (count($_from)):
    foreach ($_from AS $this->_var['sys']):
?>
    <option <?php if ($this->_var['cbname'] == $this->_var['sys']['id']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_var['sys']['id']; ?>"><?php echo $this->_var['sys']['cbrand_name']; ?></option>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </select>
    </td>
  </tr>
  <tr>
    <td class="label">车系名称</td>
    <td><input type="text" name="csys_name" size="40" value="<?php echo $this->_var['csname']; ?>">
    </td>
  </tr>
    <tr>
    <td class="label">生产公司</td>
    <td><input type="text" name="csys_com" size="40" value="<?php echo $this->_var['cscom']; ?>">
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center"><br />
      <input type="hidden" name = "csid" value="<?php echo $this->_var['csid']; ?>" />
      <input type="submit" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
    </td>
  </tr>
</table>
</form>
</div>
<?php echo $this->fetch('pagefooter.htm'); ?>