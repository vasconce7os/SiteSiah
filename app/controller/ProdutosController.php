<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class ProdutosController extends AppController 
{
	public $uses = array();
	public function index() 
	{
		$this-> set('title_for_layout', "Produtos da SIAH");
		$meta['description'] = "A SIAH soluções inteligentes tem como produto principal o pacote de software \"A7\"";
		$meta['keywords'] = "produtos SIAH, software SIAH, Software A7";
		$meta['abstract'] = "A SIAH soluções inteligentes tem como produto principal o pacote de software \"A7\" que tem todos os seu módulos voltados para automação de gestão empresarial.";
		$this-> setMetaTags($meta);
	}
	public function a7() 
	{
		$this-> set('title_for_layout', "Produtos da Siah");
		$meta['description'] = "a SIAH soluções inteligentes tem como produto principal o software A7";
		$meta['keywords'] = "produtos SIAH, software SIAH, software A7";
		$meta['abstract'] = "a SIAH soluções inteligentes tem como produto principal o software A7";
		$this-> setMetaTags($meta);
	}
}
