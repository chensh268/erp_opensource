<?php 

use eagle\modules\util\helpers\TranslateHelper;
?>
<div id="dlg" class="" style="width:400px;height:280px;padding:10px 20px"  >
    <form id="fm">
	    <input class="form-control" name="dhgate_uid" type=hidden value="<?php echo $dhgateUser['dhgate_uid']; ?>"  />
	    <table>
		    <tr>
			    <th><?= TranslateHelper::t('敦煌账号')?>:</th>
			    <td><input id="id_sellerloginid" name="sellerloginid" class="form-control" value="<?= $dhgateUser['sellerloginid']?>" readonly style="width:200px;"></td>
		    </tr>
		    <tr>
			    <th><?= TranslateHelper::t('是否启用')?>:</th>
			    <td>
				    <select class="form-control" name="is_active" style="width:200px;" >
						<option <?php if($dhgateUser['is_active'] == 1) echo "selected";?> value=1><?= TranslateHelper::t('是')?></option>
						<option <?php if($dhgateUser['is_active'] == 0) echo "selected";?> value=0><?= TranslateHelper::t('否')?></option>
					</select>
			    </td>
		    </tr>
	    </table>
    </form>
</div>
<div class="modal-footer">
    <a href="#" class="btn btn-primary" onclick="dhgateSaveUser()"><?= TranslateHelper::t('保存')?></a>
    <a href="#" class="btn btn-default" data-dismiss="modal"><?= TranslateHelper::t('取消')?></a>
</div>                                                                 