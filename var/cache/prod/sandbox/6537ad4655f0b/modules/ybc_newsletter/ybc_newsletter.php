<?php
/**
 * Copyright YourBestCode.com
 * Email: support@yourbestcode.com
 * First created: 21/12/2015
 * Last updated: NOT YET
*/

if (!defined('_PS_VERSION_'))
	exit;
class Ybc_newsletter extends Module
{
    private $errorMessage;
    public $configs;
    public $baseAdminPath;
    private $_html;
    public $templates;
    public function __construct()
	{
		$this->name = 'ybc_newsletter';
		$this->tab = 'front_office_features';
		$this->version = '1.0.1';
		$this->author = 'YBC-Themes';
		$this->need_instance = 0;
		$this->secure_key = Tools::encrypt($this->name);        
		$this->bootstrap = true;

		parent::__construct();
        $this->displayName = $this->l('Newsletter popup');
		$this->description = $this->l('Show newsletter popup');
		$this->ps_versions_compliancy = array('min' => '1.6.0.0', 'max' => _PS_VERSION_);
        if(isset($this->context->controller->controller_type) && $this->context->controller->controller_type =='admin')
            $this->baseAdminPath = $this->context->link->getAdminLink('AdminModules').'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $this->_files = array(
			'name' => array('newsletter_conf', 'newsletter_voucher','newsletter_verif'),
			'ext' => array(
				0 => 'html',
				1 => 'txt'
			)
		);
        //Templates
        $this->templates = array(
            'ynpt1' => array(
                'YBC_NEWSLETTER_POPUP_CONTENT' =>'<h1>'.$this->l('Sign up to our mailing list').'</h1><p>'.$this->l('Subscribe to our newsletter to stay up to date with our news and best offers').'</p>[email-input][donot-show-agian]',
                'YBC_NEWSLETTER_POPUP_COLOR' => '#ff4c65',
                'YBC_NEWSLETTER_POPUP_COLOR_HOVER' => '#ff314e',
                'YBC_NEWSLETTER_POPUP_BUTTON_TEXT_COLOR' => '#ffffff',
                'YBC_NEWSLETTER_POPUP_BUTTON_TEXT_HOVER_COLOR' => '#ffffff',
                'YBC_NEWSLETTER_IMAGE' => 'ynpt1.png',                
            ),
            
            'ynpt8' => array(
                'YBC_NEWSLETTER_POPUP_CONTENT' =>'<h1>'.$this->l('Newsletter signup').'</h1><p>'.$this->l('Subscrible to our newsletter by entering your email').'</p><h4><span>'.$this->l('Get 20% off your first order').'</span></h4>[email-input]<p>[donot-show-agian]</p>',
                'YBC_NEWSLETTER_POPUP_COLOR' => '#d4b07a',
                'YBC_NEWSLETTER_POPUP_COLOR_HOVER' => '#e3c394',
                'YBC_NEWSLETTER_POPUP_BUTTON_TEXT_COLOR' => '#ffffff',
                'YBC_NEWSLETTER_POPUP_BUTTON_TEXT_HOVER_COLOR' => '#ffffff',
                'YBC_NEWSLETTER_IMAGE' => 'ynpt8.png',                  
            ),                 
        );
        //Config fields        
        $this->configs = array(
            'YBC_NEWSLETTER_DISPLAY_POPUP' => array(
                'label' => $this->l('Show newsletter popup'),
                'type' => 'switch',
                'default' => 1
            ),
            'YBC_NEWSLETTER_TEMPLATE' => array(
                'label' => $this->l('Popup template'),
                'type' => 'select',
                'required' => true,                     
				'options' => array(
        			 'query' => array( 
                            array(
                                'id_option' => 'ynpt1', 
                                'name' => $this->l('Template 1')
                            ),                            
                            array(
                                'id_option' => 'ynpt8', 
                                'name' => $this->l('Template 8')
                            ),
                        ),                             
                     'id' => 'id_option',
        			 'name' => 'name'  
                ),    
                'default' => 'ynpt8'
            ), 
                  
            'YBC_NEWSLETTER_POPUP_COLOR' => array(
                'label' => $this->l('Button color'),
                'type' => 'color',
                'default' => $this->templates['ynpt8']['YBC_NEWSLETTER_POPUP_COLOR'],
            ),
            'YBC_NEWSLETTER_POPUP_COLOR_HOVER' => array(
                'label' => $this->l('Button hover color'),
                'type' => 'color',
                'default' => $this->templates['ynpt8']['YBC_NEWSLETTER_POPUP_COLOR_HOVER'],
            ),
            'YBC_NEWSLETTER_POPUP_BUTTON_TEXT_COLOR' => array(
                'label' => $this->l('Button text color'),
                'type' => 'color',
                'required' => true,
                'default' => $this->templates['ynpt8']['YBC_NEWSLETTER_POPUP_BUTTON_TEXT_COLOR'],
            ),
            'YBC_NEWSLETTER_POPUP_BUTTON_TEXT_HOVER_COLOR' => array(
                'label' => $this->l('Button text hover color'),
                'type' => 'color',
                'required' => true,
                'default' => $this->templates['ynpt8']['YBC_NEWSLETTER_POPUP_BUTTON_TEXT_HOVER_COLOR'],
            ),
            'YBC_NEWSLETTER_POPUP_CONTENT' => array(
                'label' => $this->l('Popup content'),
                'type' => 'textarea',
                'default' => $this->templates['ynpt8']['YBC_NEWSLETTER_POPUP_CONTENT'],
                'required' => true,
                'lang' => true,
                'autoload_rte' => true,
                'desc' => $this->l('Availabe shortcodes: [email-input], [donot-show-agian],[image]'),
            ),
            'YBC_NEWSLETTER_POPUP_THANK_YOU' => array(
                'label' => $this->l('Confirmation message'),
                'type' => 'textarea',
                'default' => '<h3>'.$this->l('Thank you').'</h3><p>'.$this->l('You have successfully subscribed to our mailing list. We have also sent a voucher code to your email').'</p>',
                'required' => true,
                'lang' => true,
                'autoload_rte' => true,
                'desc' => $this->l('Leave blank if you do not want to have a confirmation message'),
            ),
            'YBC_NEWSLETTER_IMAGE' => array(
                'label' => $this->l('Popup background image'),
                'type' => 'file',
                'default' => $this->templates['ynpt8']['YBC_NEWSLETTER_IMAGE'],      
            ),
            'YBC_NEWSLETTER_AUTO_HIDE' => array(
                'label' => $this->l('Auto hide popup after first time customer see it'),
                'type' => 'switch',
                'default' => 0
            ),  
            'YBC_NEWSLETTER_MOBILE_HIDE' => array(
                'label' => $this->l('Hide popup on mobile devices'),
                'type' => 'switch',
                'default' => 0
            ),              
        ); 
        
    }
    /**
	 * @see Module::install()
	 */
    public function install()
	{
	    $theme = new Theme(Context::getContext()->shop->id_theme);   
        return parent::install()        
        && $this->registerHook('displayHeader')
        && $this->registerHook('displayFooter')
        && $this->registerHook('NewsletterCustom')
        && $this->_installDb();        
    }
    /**
	 * @see Module::uninstall()
	 */
	public function uninstall()
	{
        $this->_uninstallDb();
        return parent::uninstall();
    }
    public function installTbls()
    {
        return Db::getInstance()->execute('
    		CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'newsletter` (
    			`id` int(6) NOT NULL AUTO_INCREMENT,
    			`id_shop` INTEGER UNSIGNED NOT NULL DEFAULT \'1\',
    			`id_shop_group` INTEGER UNSIGNED NOT NULL DEFAULT \'1\',
    			`email` varchar(255) NOT NULL,
    			`newsletter_date_add` DATETIME NULL,
    			`ip_registration_newsletter` varchar(15) NOT NULL,
    			`http_referer` VARCHAR(255) NULL,
    			`active` TINYINT(1) NOT NULL DEFAULT \'0\',
    			PRIMARY KEY(`id`)
    		) ENGINE='._MYSQL_ENGINE_.' default CHARSET=utf8');
    }
    public function _installDb()
    {
        $languages = Language::getLanguages(false);
        if($this->configs)
        {
            foreach($this->configs as $key => $config)
            {
                if(isset($config['lang']) && $config['lang'])
                {
                    $values = array();
                    foreach($languages as $lang)
                    {
                        $values[$lang['id_lang']] = isset($config['default']) ? $config['default'] : '';
                    }
                    Configuration::updateValue($key, $values,true);
                }
                elseif(isset($config['default']) && trim($config['default'])!='')
                    Configuration::updateValue($key, trim($config['default']) ,true);
            }
        }
        if(file_exists(dirname(__FILE__).'/images/temp/ynpt8.png'))
            @copy(dirname(__FILE__).'/images/temp/ynpt8.png', dirname(__FILE__).'/images/config/ynpt8.png');
        $this->installTbls();
        return true;
    }
    
    private function _uninstallDb()
    {
        if($this->configs)
        {
            foreach($this->configs as $key => $config)
            {
                Configuration::deleteByName($key);
            }
        } 
        $dirs = array('config');
        foreach($dirs as $dir)
        {
            $files = glob(dirname(__FILE__).'/images/'.$dir.'/*'); 
            foreach($files as $file){ 
              if(is_file($file))
                @unlink($file); 
            }
        }   
        if(!file_exists(dirname(__FILE__).'/images/index.php'))
            @file_put_contents(dirname(__FILE__).'/images/index.php','');    
        return true;
    }    
    public function getContent()
	{
	   if($template = Tools::getValue('loadteamplate'))
       {        
            $this->loadTemplate($template);
            
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);            
       }
	   $this->_postConfig();       
       //Display errors if have
       if($this->errorMessage)
            $this->_html .= $this->errorMessage;       
       //Render views
       $this->renderConfig(); 
       return $this->_html.'<script type="text/javascript">var ybc_newsletter_module_path=\''.$this->_path.'\';</script><script type="text/javascript" src="'.$this->_path.'js/admin.js"></script>'.$this->displayIframe();
    } 
    public function renderConfig()
    {
        $configs = $this->configs;
        $fields_form = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Newsletter popup settings'),
					'icon' => 'icon-AdminAdmin'
				),
				'input' => array(),
                'submit' => array(
					'title' => $this->l('Save'),
				)
            ),
		);
        if($configs)
        {
            foreach($configs as $key => $config)
            {
                $confFields = array(
                    'name' => $key,
                    'type' => $config['type'],
                    'label' => $config['label'],
                    'desc' => isset($config['desc']) ? $config['desc'] : false,
                    'required' => isset($config['required']) && $config['required'] ? true : false,
                    'autoload_rte' => isset($config['autoload_rte']) && $config['autoload_rte'] ? true : false,
                    'options' => isset($config['options']) && $config['options'] ? $config['options'] : array(),
                    'suffix' => isset($config['suffix']) && $config['suffix'] ? $config['suffix']  : false,
                    'values' => array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('Yes')
							),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('No')
							)
						),
                    'lang' => isset($config['lang']) ? $config['lang'] : false
                );
                if($config['type'] == 'file')
                {
                    if($imageName = Configuration::get($key))
                    {
                        $confFields['display_img'] = $this->_path.'images/config/'.$imageName;
                        if(!isset($config['required']) || (isset($config['required']) && !$config['required']))
                            $confFields['img_del_link'] = $this->baseAdminPath.'&delimage=yes&image='.$key; 
                    }
                }
                $fields_form['form']['input'][] = $confFields;
            }
        }        
        $helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table = $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		$this->fields_form = array();
		$helper->module = $this;
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'saveConfig';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&control=config';
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
        $fields = array();        
        $languages = Language::getLanguages(false);
        $helper->override_folder = '/';
        if(Tools::isSubmit('saveConfig'))
        {            
            if($configs)
            {                
                foreach($configs as $key => $config)
                {
                    if(isset($config['lang']) && $config['lang'])
                        {                        
                            foreach($languages as $l)
                            {
                                $fields[$key][$l['id_lang']] = Tools::getValue($key.'_'.$l['id_lang'],isset($config['default']) ? $config['default'] : '');
                            }
                        }
                        else
                            $fields[$key] = Tools::getValue($key,isset($config['default']) ? $config['default'] : '');
                }
            }
        }
        else
        {
            if($configs)
            {
                    foreach($configs as $key => $config)
                    {
                        if(isset($config['lang']) && $config['lang'])
                        {                    
                            foreach($languages as $l)
                            {
                                $fields[$key][$l['id_lang']] = Configuration::get($key,$l['id_lang']);
                            }
                        }
                        else
                            $fields[$key] = Configuration::get($key);                   
                    }
            }
        }
        $helper->tpl_vars = array(
			'base_url' => $this->context->shop->getBaseURL(),
			'language' => array(
				'id_lang' => $language->id,
				'iso_code' => $language->iso_code
			),
			'fields_value' => $fields,
			'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id,
            'export_link' => $this->baseAdminPath.'&exportNewsletter=yes'            
        );
        
        $this->_html .= $helper->generateForm(array($fields_form));		
     }
     private function _postConfig()
     {
        $errors = array();
        $languages = Language::getLanguages(false);
        $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
        $configs = $this->configs;
        
        //Delete image
        if(Tools::isSubmit('delimage'))
        {
            $image = Tools::getValue('image');
            if(isset($configs[$image]) && !isset($configs[$image]['required']) || (isset($configs[$image]['required']) && !$configs[$image]['required']))
            {
                $imageName = Configuration::get($image);
                $imagePath = dirname(__FILE__).'/images/config/'.$imageName;
                if($imageName && file_exists($imagePath))
                {
                    @unlink($imagePath);
                    Configuration::updateValue($image,'');
                }
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
            }
            else
                $errors[] = $configs[$image]['label'].$this->l(' is required');
        }
        if(Tools::isSubmit('saveConfig'))
        {            
            if($configs)
            {
                foreach($configs as $key => $config)
                {
                    if(isset($config['lang']) && $config['lang'])
                    {
                        if(isset($config['required']) && $config['required'] && $config['type']!='switch' && trim(Tools::getValue($key.'_'.$id_lang_default) == ''))
                        {
                            $errors[] = $config['label'].' '.$this->l('is required');
                        }                        
                    }
                    else
                    {
                        if(isset($config['required']) && $config['required'] && isset($config['type']) && $config['type']=='file')
                        {
                            if(Configuration::get($key)=='' && !isset($_FILES[$key]['size']))
                                $errors[] = $config['label'].' '.$this->l('is required');
                            elseif(isset($_FILES[$key]['size']))
                            {
                                $fileSize = round((int)$_FILES[$key]['size'] / (1024 * 1024));
                    			if($fileSize > 100)
                                    $errors[] = $config['label'].$this->l(' can not be larger than 100Mb');
                            }   
                        }
                        else
                        {
                            if(isset($config['required']) && $config['required'] && $config['type']!='switch' && trim(Tools::getValue($key) == ''))
                            {
                                $errors[] = $config['label'].' '.$this->l('is required');
                            }
                            elseif(!Validate::isCleanHtml(trim(Tools::getValue($key))))
                            {
                                $errors[] = $config['label'].' '.$this->l('is invalid');
                            } 
                        }                          
                    }                    
                }
            }            
            
            //Custom validation
            
            if(!$errors)
            {
                if($configs)
                {
                    foreach($configs as $key => $config)
                    {
                        if(isset($config['lang']) && $config['lang'])
                        {
                            $valules = array();
                            foreach($languages as $lang)
                            {
                                if($config['type']=='switch')                                                           
                                    $valules[$lang['id_lang']] = (int)trim(Tools::getValue($key.'_'.$lang['id_lang'])) ? 1 : 0;                                
                                else
                                    $valules[$lang['id_lang']] = trim(Tools::getValue($key.'_'.$lang['id_lang'])) ? trim(Tools::getValue($key.'_'.$lang['id_lang'])) : trim(Tools::getValue($key.'_'.$id_lang_default));
                            }
                            Configuration::updateValue($key,$valules,true);
                        }
                        else
                        {
                            if($config['type']=='switch')
                            {                           
                                Configuration::updateValue($key,(int)trim(Tools::getValue($key)) ? 1 : 0,true);
                            }
                            if($config['type']=='file')
                            {
                                //Upload file
                                if(isset($_FILES[$key]['tmp_name']) && isset($_FILES[$key]['name']) && $_FILES[$key]['name'])
                                {
                                    $salt = sha1(microtime());
                                    $type = Tools::strtolower(Tools::substr(strrchr($_FILES[$key]['name'], '.'), 1));
                                    $imageName = $salt.'.'.$type;
                                    $fileName = dirname(__FILE__).'/images/config/'.$imageName;                
                                    if(file_exists($fileName))
                                    {
                                        $errors[] = $config['label'].$this->l(' already exists. Try to rename the file then reupload');
                                    }
                                    else
                                    {
                                        
                            			$imagesize = @getimagesize($_FILES[$key]['tmp_name']);
                                        
                                        if (!$errors && isset($_FILES[$key]) &&				
                            				!empty($_FILES[$key]['tmp_name']) &&
                            				!empty($imagesize) &&
                            				in_array($type, array('jpg', 'gif', 'jpeg', 'png'))
                            			)
                            			{
                            				$temp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS');    				
                            				if ($error = ImageManager::validateUpload($_FILES[$key]))
                            					$errors[] = $error;
                            				elseif (!$temp_name || !move_uploaded_file($_FILES[$key]['tmp_name'], $temp_name))
                            					$errors[] = $this->l('Can not upload the file');
                            				elseif (!ImageManager::resize($temp_name, $fileName, null, null, $type))
                            					$errors[] = $this->displayError($this->l('An error occurred during the image upload process.'));
                            				if (isset($temp_name))
                            					@unlink($temp_name);
                                            if(!$errors)
                                            {
                                                if(Configuration::get($key)!='')
                                                {
                                                    $oldImage = dirname(__FILE__).'/images/config/'.Configuration::get($key);
                                                    if(file_exists($oldImage))
                                                        @unlink($oldImage);
                                                }                                                
                                                Configuration::updateValue($key, $imageName,true);                                                                                               
                                            }
                                        }
                                    }
                                }
                                //End upload file
                            }
                            else
                                Configuration::updateValue($key,trim(Tools::getValue($key)),true);   
                        }                        
                    }
                }
            }
            if (count($errors))
            {
               $this->errorMessage = $this->displayError(implode('<br />', $errors));  
            }
            else
               Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);            
        }
     }
     public function hookDisplayFooter()
     {
          if(!Configuration::get('YBC_NEWSLETTER_DISPLAY_POPUP') || $this->context->cookie->ybcnewsletter)
            return;
          if((int)Configuration::get('YBC_NEWSLETTER_AUTO_HIDE'))
            $this->context->cookie->ybcnewsletter = 'subcribed';
          
          $input = '<div class="ynp-input-row">
                                    <label for="ynp-email-input">'.$this->l('Email: ').'</label>
                                    <input type="text" id="ynp-email-input" class="ynp-email-input" value="" placeholder="'.$this->l('Enter your email...').'" />
                                    <input class="button ynp-submit" type="submit" name="ynpSubmit" id="ynp-submit" value="'.$this->l('Subscribe').'" />
                                </div>';
          $doNotShowAgain = '<div class="ynp-input-checkbox">
                                        <input type="checkbox" id="ynp-input-dont-show" class="ynp-input-dont-show" name="ynpcheckbox" />
                                        <label for="ynp-input-dont-show">'.$this->l('Do not show this again').'</label>
                                    </div>'; 
          $image = Configuration::get('YBC_NEWSLETTER_IMAGE') ? '<img src="'.$this->_path.'images/config/'.Configuration::get('YBC_NEWSLETTER_IMAGE').'"/>' : '';           
          $this->smarty->assign(array(
            'YBC_NEWSLETTER_POPUP_CONTENT' => str_replace(array('[email-input]','[donot-show-agian]','[image]'),array($input, $doNotShowAgain, $image),Configuration::get('YBC_NEWSLETTER_POPUP_CONTENT', (int)$this->context->language->id)),          
            'YBC_NEWSLETTER_IMAGE' => $image,
            'YBC_NEWSLETTER_ACTION' => $this->context->link->getModuleLink('ybc_newsletter', 'submit'),
            'YBC_NEWSLETTER_LOADING_IMG' => $this->_path.'images/icon/loading.gif',
            'YBC_NEWSLETTER_MOBILE_HIDE' => (int)Configuration::get('YBC_NEWSLETTER_MOBILE_HIDE') ? true : false,
            'YBC_NEWSLETTER_AUTO_HIDE' => (int)Configuration::get('YBC_NEWSLETTER_AUTO_HIDE') ? true : false,
            'YBC_NEWSLETTER_TEMPLATE' => Configuration::get('YBC_NEWSLETTER_TEMPLATE'),
            'YBC_NEWSLETTER_DONOTSHOWAGAIN' => $doNotShowAgain,
          ));
          return $this->display(__FILE__, 'popup.tpl');
     }
     public function hookNewsletterCustom()
     {
          $input = '<div class="ynp-input-row">
                                    <label for="ynp-email-input">'.$this->l('Email: ').'</label>
                                    <input type="text" id="ynp-email-input" value="" placeholder="'.$this->l('Enter your email...').'" />
                                    <input class="button" type="submit" name="ynpSubmit" id="ynp-submit" value="'.$this->l('Subscribe').'" />
                                </div>';
          $doNotShowAgain = '<div class="ynp-input-checkbox">
                                        <input type="checkbox" id="ynp-input-dont-show" name="ynpcheckbox" />
                                        <label for="ynp-input-dont-show">'.$this->l('Do not show this again').'</label>
                                    </div>'; 
          $image = Configuration::get('YBC_NEWSLETTER_IMAGE') ? '<img src="'.$this->_path.'images/config/'.Configuration::get('YBC_NEWSLETTER_IMAGE').'"/>' : '';           
          $this->smarty->assign(array(
            'YBC_NEWSLETTER_POPUP_CONTENT' => str_replace(array('[email-input]','[donot-show-agian]','[image]'),array($input, $doNotShowAgain, $image),Configuration::get('YBC_NEWSLETTER_POPUP_CONTENT', (int)$this->context->language->id)),          
            'YBC_NEWSLETTER_IMAGE' => $image,
            'YBC_NEWSLETTER_ACTION' => $this->context->link->getModuleLink('ybc_newsletter', 'submit'),
            'YBC_NEWSLETTER_LOADING_IMG' => $this->_path.'images/icon/loading.gif',
            'YBC_NEWSLETTER_MOBILE_HIDE' => (int)Configuration::get('YBC_NEWSLETTER_MOBILE_HIDE') ? true : false,
            'YBC_NEWSLETTER_TEMPLATE' => Configuration::get('YBC_NEWSLETTER_TEMPLATE'),
          ));
          return $this->display(__FILE__, 'newsleter_home.tpl');
     }
     
     
     
     public function hookDisplayHeader()
     {
        $this->context->controller->addCSS($this->_path.'css/newsletter.css','all');   
        $this->context->controller->addJS($this->_path.'js/newsletter.js'); 
        if(!Configuration::get('YBC_NEWSLETTER_DISPLAY_POPUP') || $this->context->cookie->ybcnewsletter)
            return;               
        
        /*Thinh ETS*/
        return $this->renderCustomCss();  
        /*End Thinh ETS*/   
           
     }
     public function getBlockNewsletterSubscriber()
	 {
		$rq_sql = 'SELECT `id`, `email`, `newsletter_date_add`, `ip_registration_newsletter`
			FROM `'._DB_PREFIX_.'newsletter`
			WHERE `active` = 1';

		if (Context::getContext()->cookie->shopContext)
			$rq_sql .= ' AND `id_shop` = '.(int)Context::getContext()->shop->id;

		$rq = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($rq_sql);

		return $rq;
	 }
     /*Thinh ETS*/
     private function renderCustomCss()
    {            
        $color_button = Configuration::get('YBC_NEWSLETTER_POPUP_COLOR');
        $color_hover = Configuration::get('YBC_NEWSLETTER_POPUP_COLOR_HOVER');     
        $color_text = Configuration::get('YBC_NEWSLETTER_POPUP_BUTTON_TEXT_COLOR');     
        $color_text_hover = Configuration::get('YBC_NEWSLETTER_POPUP_BUTTON_TEXT_HOVER_COLOR'); 
        $template = Configuration::get('YBC_NEWSLETTER_TEMPLATE');  
        $image = Configuration::get('YBC_NEWSLETTER_IMAGE') ? $this->_path.'images/config/'.Configuration::get('YBC_NEWSLETTER_IMAGE') : false;
        $css = '<style>';
        //Custom css here
        $css .= '#ynp-submit, .ynp-close{background:'.$color_button.';color: '.$color_text.';}
                 #ynp-submit:hover,.ynp-close:hover{background:'.$color_hover.';color: '.$color_text_hover.';}';
        if($template=='ynpt1' && $image)
        {
            $css .= ".ynp-div-l3{background: url('".$image."') top left no-repeat;}";            
        }
            
        $css .= '</style>';
        return $css;
    }
    public function loadTemplate($template)
    {
        $templates = $this->templates;
        if(isset($templates[$template]))
        {
            $languages = Language::getLanguages(false);
            foreach($templates[$template] as $key => $value)
            {
                if($key=='YBC_NEWSLETTER_POPUP_CONTENT')
                {
                   $values = array();
                   foreach($languages as $lang)
                   {
                        $values[$lang['id_lang']] = $value;
                   } 
                   Configuration::updateValue($key, $values, true); 
                }
                elseif($key == 'YBC_NEWSLETTER_IMAGE' && file_exists(dirname(__FILE__).'/images/temp/'.$value))
                {                    
                    if(@copy(dirname(__FILE__).'/images/temp/'.$value, dirname(__FILE__).'/images/config/'.$value))
                        Configuration::updateValue($key, $value);   
                }
                else
                    Configuration::updateValue($key, $value);   
            }                      
            Configuration::updateValue('YBC_NEWSLETTER_TEMPLATE',$template);
            return true;   
        }
        return false;
    }

    public function displayIframe()
    {
        switch($this->context->language->iso_code) {
            case 'en':
                $url = 'https://cdn.prestahero.com/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'it':
                $url = 'https://cdn.prestahero.com/it/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'fr':
                $url = 'https://cdn.prestahero.com/fr/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'es':
                $url = 'https://cdn.prestahero.com/es/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            default:
                $url = 'https://cdn.prestahero.com/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
        }
        $this->smarty->assign(
            array(
                'url_iframe' => $url
            )
        );
        return $this->display(__FILE__,'iframe.tpl');
    }
}