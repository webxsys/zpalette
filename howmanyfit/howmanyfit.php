<?php

if (!defined('_PS_VERSION_'))
	exit;

class howManyFit extends Module
{
	/* @var boolean error */
	protected $_errors = false;
	protected $maxImageSize = 907200;


	public function __construct()
	{
		$this->name = 'howmanyfit';
		$this->tab = 'front_office_features';
		$this->version = '1.0';
		$this->author = 'Nemo';
		$this->need_instance = 0;
		$this->table_name = $this->name.'_brand';
		$this->table_name2 = $this->name.'_makeup';
		$this->table_name3 = $this->name.'_qties';

	 	parent::__construct();

		$this->displayName = $this->l('How Many Fit');
		$this->description = $this->l('How many Fit.');
		$this->confirmUninstall = $this->l('Are you sure you want to delete this module?');
	}
	
	public function install()
	{
		if (!parent::install() OR
			!$this->_installTables() OR			
			!$this->registerHook('header') OR
			!$this->registerHook('customCMSpage'))
			return false;
		return true;
	}
	
	public function uninstall()
	{
		if (!parent::uninstall() OR !$this->_eraseTables())
			return false;
		return true;
	}



	private function _installTables(){

		// 3 tables, brand, makeup, qties
		$sql = 'CREATE TABLE  `'._DB_PREFIX_.$this->table_name.'` (
				`id_brand` INT( 12 ) NOT NULL AUTO_INCREMENT,
				`name` VARCHAR( 64 ) NOT NULL ,
				PRIMARY KEY (  `id_brand` )
				) ENGINE =' ._MYSQL_ENGINE_;

		$sql2 = 'CREATE TABLE  `'._DB_PREFIX_.$this->table_name2.'` (
				`id_brand` INT( 12 ) NOT NULL ,
				`id_makeup` INT( 12 ) NOT NULL ,
				`name` VARCHAR( 64 ) NOT NULL ,
				PRIMARY KEY (  `id_brand`, `id_makeup` )
				) ENGINE =' ._MYSQL_ENGINE_;

		$sql3 = 'CREATE TABLE  `'._DB_PREFIX_.$this->table_name3.'` (
				`id_brand` INT( 12 ) NOT NULL ,
				`id_makeup` INT( 12 ) NOT NULL ,
				`xlarge` INT( 4 ) NOT NULL ,
				`dome` INT( 4 ) NOT NULL ,
				`large` INT( 4 ) NOT NULL ,
				`medium` INT( 4 ) NOT NULL ,
				`small` INT( 4 ) NOT NULL ,
				PRIMARY KEY (  `id_brand`, `id_makeup` )
				) ENGINE =' ._MYSQL_ENGINE_;


		if (!Db::getInstance()->Execute($sql) OR !Db::getInstance()->Execute($sql2) OR !Db::getInstance()->Execute($sql3))
			return false;
		else return true;
	}


	private function _eraseTables(){
		if(!Db::getInstance()->Execute('DROP TABLE `'._DB_PREFIX_.$this->table_name.'`') OR !Db::getInstance()->Execute('DROP TABLE `'._DB_PREFIX_.$this->table_name2.'`') OR !Db::getInstance()->Execute('DROP TABLE `'._DB_PREFIX_.$this->table_name3.'`'))
			return false;
		else return true;
	}
	

	public function getContent(){
		$this->_html = '<h2>'.$this->displayName.'</h2>';

		$this->_postProcess();

		$this->_displayForm();
		return	$this->_html;
	}
	
	private function _displayForm()
	{

		$this->context->controller->addJS($this->_path.'js/'.$this->name.'_bo.js', 'all');

		$brands = $this->getAllBrands();

		$this->_html .= '
			<form action="'.$_SERVER['REQUEST_URI'].'" method="post" enctype="multipart/form-data">
				<fieldset><legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Add a new brand').'</legend>
		';


		if($brands)
		{

			$this->_html .= '
				<table class="table">
					<thead>
						<tr>
							<th>'.$this->l('#').'</th>
							<th>'.$this->l('Name').'</th>
							<th>'.$this->l('Logo').'</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					';
	
					foreach ($brands as $brand) {
						$this->_html .= '
						<tr>
							<td>'.$brand['id_brand'].'</td>
							<td>'.$brand['name'].'</td>
							<td><img src="'.$this->_path.'/img/'.$brand['id_brand'].'.jpg" height="80"></td>
							<td><a href="'.AdminController::$currentIndex.'&token='.Tools::getValue('token').'&configure='.$this->name.'&delete_brand='.$brand['id_brand'].'" title="'.$this->l('delete this block').'"><img src="../img/admin/delete.gif" alt=""></a></td>
						</tr>';
					}
			$this->_html .= '
						
					</tbody>
				</table>
			';
		}

		$this->_html .='
					<label>'.$this->l('Brand name').'</label>
					<div class="margin-form">
						<input type="text" name="brandname" />
					</div>

					<label>'.$this->l('Brand logo').'</label>
					<div class="margin-form">
						<input type="file" name="brandlogo" />
					</div>
					
		';

		/* Submit button */
		$this->_html .='<p class="center"><input type="submit" name="submitAddBrand" value="'.$this->l('Add Brand').'" class="button"></p>';


		$this->_html .= '
				</fieldset>
			</form>';


		$this->_html .= '<p class="clear"></p>';
		// add makeups




		$this->_html .= '
			<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
				<fieldset><legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Makeup Selection').'</legend>
		';


		$makeups = $this->getAllMakeups();

		if (!$brands) {
			$this->_html .= '<p>'.$this->l('You need to add at least one brand first').'</p>';
		} else {



			if($makeups)
			{

				$this->_html .= '
					<table class="table">
						<thead>
							<tr>
								<th>'.$this->l('#').'</th>
								<th>'.$this->l('Name').'</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						';
		
						foreach ($makeups as $makeup) {
							$this->_html .= '
							<tr>
								<td>'.$makeup['id_makeup'].'</td>
								<td>'.$makeup['name'].'</td>
								<td><a href="'.AdminController::$currentIndex.'&token='.Tools::getValue('token').'&configure='.$this->name.'&delete_makeup='.$makeup['id_makeup'].'" title="'.$this->l('delete this block').'"><img src="../img/admin/delete.gif" alt=""></a></td>
							</tr>';
						}
				$this->_html .= '
							
						</tbody>
					</table>
				';
			}


			$this->_html .='
						<label>'.$this->l('Makeup Type').'</label>
						<div class="margin-form">
							<input type="text" name="makeupname" />
						</div>
						
			';

			$this->_html .='
						<label>'.$this->l('Brand').'</label>
						<div class="margin-form">
							<select name="id_brand">
							';


							foreach ($brands as $brand) {
								$this->_html .= '<option value="'.$brand['id_brand'].'">'.$brand['name'].'</option>';
							}

			$this->_html .= '
								
							</select>
						</div>
						
			';

			/* Submit button */
			$this->_html .='<p class="center"><input type="submit" name="submitAddMakeup" value="'.$this->l('Add Makeup').'" class="button"></p>';

		}

		


		$this->_html .= '
				</fieldset>
			</form>';



		$this->_html .= '
			<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
				<fieldset><legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Makeup Selection').'</legend>
		';
	

		if (!$makeups) {
			$this->_html .= '<p>'.$this->l('You need to add at least one makeup type first').'</p>';
		} else {



			$this->_html .= '
			<div style="float:left">
				


				<label>'.$this->l('Brand').'</label>
				<div class="margin-form">
					<select name="id_brand" id="checkbrand">
					';


					foreach ($brands as $brand) {
						$this->_html .= '<option value="'.$brand['id_brand'].'">'.$brand['name'].'</option>';
					}

			$this->_html .= '
					</select>
				</div>
						

			</div>

			';




			$this->_html .= '
			<div style="float:left">
		
				<label>'.$this->l('Makeup Type').'</label>
				<div class="margin-form">
					<select name="id_makeup" id="checkmakeup">
						<option value="0">--</option>
					</select>
				</div>
						

			</div>

			';



			$this->_html .= '
			<div style="float:left">
		
				<label>'.$this->l('X Large Qty').'</label>
				<div class="margin-form">
					<input type="number" name="palette_qt[xlarge]" />
				</div>
				
				<label>'.$this->l('Dome Qty').'</label>
				<div class="margin-form">
					<input type="number" name="palette_qt[dome]" />
				</div>

				<label>'.$this->l('Large Qty').'</label>
				<div class="margin-form">
					<input type="number" name="palette_qt[large]" />
				</div>

				<label>'.$this->l('Medium Qty').'</label>
				<div class="margin-form">
					<input type="number" name="palette_qt[medium]" />
				</div>

				<label>'.$this->l('Small Qty').'</label>
				<div class="margin-form">
					<input type="number" name="palette_qt[small]" />
				</div>

			</div>
			';


			$this->_html .= '<p class="clear"></p>';


			/* Submit button */
			$this->_html .='<p class="center"><input type="submit" name="submitAddAssociation" value="'.$this->l('Add Entry').'" class="button"></p>';

		}

		


		$this->_html .= '
				</fieldset>
			</form>';


			// here we hold all makeup types
		$this->_html .= '
			<div style="display:none">';
			// foreach brand, add matching makeups

			if ($makeups) {
				

				foreach ($makeups as $makeup) {
					$this->_html .= '
						<span class="brand_'.$makeup['id_brand'].' makeup_'.$makeup['id_makeup'].'" data-makeup-id="'.$makeup['id_makeup'].'">'.$makeup['name'].'</span>
					';
				}


			}
		$this->_html .= '
			</div>';

		$associations = $this->getAllAssociations();

		if ($associations) {
			$this->_html .= '
			<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
				<fieldset><legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Added combinations').'</legend>
				';

					$this->_html .= '
						<table class="table">
							<thead>
								<tr>
									<th>'.$this->l('Brand').'</th>
									<th>'.$this->l('Makeup Type').'</th>
									<th>'.$this->l('X Large').'</th>
									<th>'.$this->l('Dome').'</th>
									<th>'.$this->l('Large').'</th>
									<th>'.$this->l('Medium').'</th>
									<th>'.$this->l('Small').'</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							';
			
							foreach ($associations as $association) {
								$this->_html .= '
								<tr>
									<td>'.$brands[$association['id_brand']]['name'].'</td>
									<td>'.$makeups[$association['id_makeup']]['name'].'</td>
									<td>'.$association['xlarge'].'</td>
									<td>'.$association['dome'].'</td>
									<td>'.$association['large'].'</td>
									<td>'.$association['medium'].'</td>
									<td>'.$association['small'].'</td>
									<td><a href="'.AdminController::$currentIndex.'&token='.Tools::getValue('token').'&configure='.$this->name.'&delete_assoc='.$association['id_brand'].'_'.$association['id_makeup'].'" title="'.$this->l('delete this block').'"><img src="../img/admin/delete.gif" alt=""></a></td>
								</tr>';
							}
					$this->_html .= '
								
							</tbody>
						</table>
					';

		$this->_html .= '
				</fieldset>
			</form>';
		}


	}


	private function _postProcess()
	{
		if (Tools::isSubmit('submitAddBrand')) // handles the basic config update
		{	
			$name = Tools::getValue('brandname');
			if ($name && Validate::isGenericName($name)) {
				
				if(!Db::getInstance()->insert($this->table_name, array('name' => pSQL($name))))
					$this->_errors[] = $this->l('Error: ').mysql_error();

				if (!$this->_errors) {
					
					// get last insert ID
					
					$id_brand = Db::getInstance()->Insert_ID();

					/* Image Upload */
					$imageName = false;

					if (!$this->_errors AND isset($_FILES['brandlogo']) AND isset($_FILES['brandlogo']['tmp_name']) AND !empty($_FILES['brandlogo']['tmp_name']))
					{
						$imageName = $id_brand;

						if ($error = ImageManager::validateUpload($_FILES['brandlogo'], $this->maxImageSize))
							$this->_errors[] = $error;
						elseif (!$tmpName = tempnam(_PS_TMP_IMG_DIR_, 'PS') OR !copy($_FILES['brandlogo']['tmp_name'], $tmpName))
							$this->_errors[] = $this->displayError($this->l('An error occurred during the image upload(problems with the thumbnail).'));

						elseif (!move_uploaded_file($_FILES['brandlogo']['tmp_name'], dirname(__FILE__).'/img/'.$imageName.'.jpg'))
							$this->_errors[] = $this->displayError($this->l('An error occurred during the image upload.'));

						if (isset($tmpName))
							unlink($tmpName);					
						
					}//end image upload
				}



			} else $this->_errors[] = $this->l('Error: invalid name');
		} else if(Tools::isSubmit('submitAddMakeup'))
		{
			$name = Tools::getValue('makeupname');
			$id_brand = Tools::getValue('id_brand');

			if ($name && Validate::isGenericName($name)) {
				
				// check the highest makeup nbr and icrease it by 1
				$max_makeup = Db::getInstance()->getValue('SELECT MAX(id_makeup) FROM '._DB_PREFIX_.$this->table_name2);
				if(!$max_makeup)
					$max_makeup = 1;
				else $max_makeup++;

				if(!Db::getInstance()->insert($this->table_name2, array('name' => pSQL($name), 'id_brand' => (int)$id_brand, 'id_makeup' => (int)$max_makeup)))
					$this->_errors[] = $this->l('Error: ').mysql_error();

			} else $this->_errors[] = $this->l('Error: invalid name');

		} else if (Tools::isSubmit('submitAddAssociation'))
		{

			$id_brand = (int)Tools::getValue('id_brand');
			$id_makeup = (int)Tools::getValue('id_makeup');
			$qties = Tools::getValue('palette_qt');

			// check if this brand/type has already been added
			
			$added = Db::getInstance()->getValue('SELECT id_brand FROM ' . _DB_PREFIX_ . $this->table_name3 . ' WHERE id_brand = ' .$id_brand .' AND id_makeup = ' . $id_makeup);

			if($added)
				$this->_errors[] = $this->l('Error: you already added this combination');
			else {

				$qties['id_brand'] = $id_brand;
				$qties['id_makeup'] = $id_makeup;

				if(!Db::getInstance()->insert($this->table_name3, $qties))
					$this->_errors[] = $this->l('Error: ').mysql_error();

			}

		} else if(Tools::isSubmit('delete_assoc'))
		{
			$ids = Tools::getValue('delete_assoc');
			$ids_array = explode('_', $ids); // brand is 0, makeup is 1

			if(!Db::getInstance()->delete($this->table_name3, 'id_brand = ' . $ids_array[0] . ' AND id_makeup = ' . $ids_array[1] ))
				$this->_errors[] = $this->l('Error: ').mysql_error();
		} else if(Tools::isSubmit('delete_brand'))
		{
			$id_brand = Tools::getValue('delete_brand');

			if(!Db::getInstance()->delete($this->table_name, 'id_brand = ' . $id_brand) || !Db::getInstance()->delete($this->table_name2, 'id_brand = ' . $id_brand) || !Db::getInstance()->delete($this->table_name3, 'id_brand = ' . $id_brand))
				$this->_errors[] = $this->l('Error: ').mysql_error();
			else { // erase brand img
				if(file_exists(dirname(__FILE__).'/img/'.$id_brand.'.jpg'))
					unlink(dirname(__FILE__).'/img/'.$id_brand.'.jpg');
			}
		} else if(Tools::isSubmit('delete_makeup'))
		{
			$id_makeup = Tools::getValue('delete_makeup');

			if(!Db::getInstance()->delete($this->table_name2, 'id_makeup = ' . $id_makeup) || !Db::getInstance()->delete($this->table_name3, 'id_makeup = ' . $id_makeup))
				$this->_errors[] = $this->l('Error: ').mysql_error();
		}

		if ($this->_errors)
			$this->_html .= $this->displayError(implode($this->_errors, '<br />'));
		else 
			$this->_html .= $this->displayConfirmation($this->l('Values Updated'));
	}



	public function getAllBrands()
	{
		$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS('
			SELECT *
			FROM '._DB_PREFIX_.$this->table_name);

		if(!$result)    
			return false;
		foreach ($result as $item) {
			$items[$item['id_brand']] = $item;
		}
		return $items;
	}

	public function getAllMakeups()
	{
		$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS('
			SELECT *
			FROM '._DB_PREFIX_.$this->table_name2);

		if(!$result)    
			return false;
		foreach ($result as $item) {
			$items[$item['id_makeup']] = $item;
		}
		return $items;
	}

	public function getAllAssociations()
	{
		//get all makeup types, associated to brands
		return Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS('
			SELECT *
			FROM '._DB_PREFIX_.$this->table_name3);	
	}

	public function hookCustomCMSpage($params)
	{

		if (Tools::getValue('id_cms') == 29) { //  change to 29
			
			$brands = $this->getAllBrands();
			$makeups = $this->getAllMakeups();
			$associations = $this->getAllAssociations();
			
			if($brands && $makeups && $associations)
			{

				$this->context->smarty->assign(array(
					'hmf_brands' => $brands,
					'hmf_makeups' => $makeups,
					'hmf_associations' => $associations,
				));

				return $this->display(__FILE__, 'howmanyfit.tpl');

			}
			

		}

	}

	public function hookHeader($params)
	{
		$this->context->controller->addCSS($this->_path.'css/howmanyfit.css', 'all');
		$this->context->controller->addJS($this->_path.'js/howmanyfit.js', 'all');

		
	}

	
}
