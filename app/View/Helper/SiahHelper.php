<?php
/**
 * @copyleft      Cerebro Vasconcelos
 * @package       app.View.Helper
 * @license       Ctrl+c Ctrl+v e seja feliz
 * @author        Cerebro Vasconcelos
 * @created       2014-09-29
 * @update        2015-04-14
 */

//App::uses('AppHelper', 'View/Helper');
App::uses('Helper', 'View');

/**
 * Aqui vai ter uns helpres extras como escape de html e tals
 */
class SiahHelper extends AppHelper 
{
	/**
	 * @param string
	 * @return void
	 * printa na tela a string com os caracteres html escapados
	 */
	function printHtmlEscaped($string = null)
	{
		print(htmlspecialchars($string, ENT_QUOTES, $this-> _View-> response-> charset()));
	}
	
	/**
	 * 
	 * @param array $dados, array $dados array
	 * @return string que corresponde a uma tabala html
	 */
	public function printToTable($dados = array(), $indices = array())
	{
		/* $foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
		$bar = each($foo);
		pr($bar);
		 */
		//print("<br />");
		//print_r($indices[0]);
		//print_r($dados);
		?>
		
		<table class="tGenerica">
			<tr>
			
				<?php 
				foreach ($indices as $indice)
				{
					?>
					
					<td>
						<?php 
						echo($indice['label']."\n");
						?>
					</td>
					<?php
				}
				?>
				
			</tr>
			
			<?php
			foreach($dados as $key => $value)
			{
				?>
				
				<tr>
					<?php 
					foreach($indices as $indice)
					{
						?>
						
						<td>
							<?php
							
							if(isset($indice['link']))
							{
							?>
							
							<a href="<?php echo($this-> substituiVariavelDeString($value, $indice['link'])); ?>">
							<?php
							}
							
							$pigmentosIndices = explode(".", $indice['indice']);
							if($pigmentosIndices[1] == 'created' || $pigmentosIndices[1] == 'modified')
							{
								$date = DateTime::createFromFormat('Y-m-d H:i:s', $value[$pigmentosIndices[0]][$pigmentosIndices[1]]);
								print($date->format('Y/m/d'));
							} else
							{
								print($value[$pigmentosIndices[0]][$pigmentosIndices[1]]);
							}
							if(isset($indice['link']))
							{
							?>
							
							</a>
							<?php	
							}
							
							?>
							
						</td>
						<?php
					}
					?>
					
				</tr>
				<?php
			}
			?>

		</table>
		
		<?php
		//print ("teste:... ");
		//pr($dados);
	}
	
	
	
	
	/**
	 * 
	 * @param array $extras
	 * @return void 
	 */
	public function assetsExtra($extras)
	{
        //pr($cssExtra);
		$cssExtra = array();
        if($extras['cssExtra'])
        {
        	$cssExtra = $extras['cssExtra'];
        }
        if(count($cssExtra) > 0)
        {
        	?>
        	
        	
	        <!-- Estes arquivos de css estão presentes exclusivamente aqui nesta página e eventualmente 
	        em algumas outras mas não em todas
	        -->
        	
        	<?php 
        	foreach ($cssExtra as $arquivo)
        	{
        		if($arquivo['shortPath'])
        		{
        			$href = $this-> request-> base. '/' . $arquivo['file'].'.css';
        		} else
        		{
        			$href = $arquivo['file'];
        		}
        		if($arquivo['media'])
        		{
        			$media = $arquivo['media'];
        		} else
        		{
        			$media = 'all';
        		}
        		if($arquivo['comment'])
        		{
        			$comentario = "<!-- ".$arquivo['comment']." -->\n";
        		} else
        		{
        			$comentario = null;
        		}
        		//pr($arquivo);
        		
        		?>
        		
        <?php echo ($comentario); ?>
        <link href="<?php echo $href; ?>" rel="stylesheet" type="text/css" media="<?php echo ($media); ?>">
        		
        		<?php 
        	}
        }
		
        
        

        //pr($jsExtra);
        $jsExtra = array();
        if(isset($extras['jsExtra']) && !empty($extras['jsExtra']))
        {
        	$jsExtra = $extras['jsExtra'];
        }
        if(count($jsExtra) > 0)
        {
        	?>
        	        	
        	        	
        	        <!-- Estes arquivos de js estão presentes exclusivamente aqui nesta página e eventualmente 
        	        em algumas outras mas não em todas
        	        -->
        	        	
        	<?php 
        	foreach ($jsExtra as $arquivo)
        	{
        		if($arquivo['shortPath'])
        		{
        			$href = $this-> request-> base. '/js/' . $arquivo['file'].'.js';
        		} else
        		{
        			$href = $arquivo['file'];
        		}
        		if($arquivo['comment'])
        		{
        			$comentario = "<!-- ".$arquivo['comment']." -->\n";
        		} else
        		{
        			$comentario = null;
        		}
        		//pr($arquivo);
        
        		?>
                		
                	<?php echo ($comentario); ?>
                		
                	<script src="<?php echo $href; ?>"></script>
                		
                	<?php 
                }
			}
        		
	}
	
	private function substituiVariavelDeString($value, $variavel)
	{
		$indice['link'] = $variavel;
		$linkPronto = $indice['link'];
		preg_match_all ("/{(.*)}/U", $indice['link'], $variaveisNaUrl);
		if(count($variaveisNaUrl[0]) > 0)
		{
			foreach ($variaveisNaUrl[0] as $kVariaveis => $variavelNaUrl)
			{
				$pigmentosIndicesVar = explode(".", substr($variavelNaUrl, 1, (strlen($variavelNaUrl) - 2) ));
				//print_r($pigmentosIndicesVar);
				$linkPronto = str_replace($variavelNaUrl, $value[$pigmentosIndicesVar[0]][$pigmentosIndicesVar[1]], $linkPronto);
			}
		}
		return $linkPronto;
	}

	/**
	* Escreve as variáveis passada por parametros ou por url em forma de
	* string para url
	* $params = array()
	* @return String
	*
	*/
	public function paramsToString($params = array())
	{
		// //unset($arrayDeFiltros[$chaveFiltro]);
		$ct = 0;
		$stringParams = '';
		if(!$params)
		{
			$params = $this-> request-> query;
		}
		foreach($params as $key => $value)
		{
			if($ct == 0)
			{
				$prefix = '?';
			} else
			{
				$prefix = '&';	
			}
			$stringParams .= $prefix . $key . '=' .$value;
			$ct++;
			//pr(" -- ".$key);
		}
		return $stringParams;
	}
	
	/**
	* 
	* 
	* @return String
	*
	*/
	public function replaceParam($chaveASubstituir = '',$valorASubstituir = '', $params = array())
	{
		//unset($arrayDeFiltros[$chaveFiltro]);
		$ct = 0;
		$stringParams = '';
		if(!$params)
		{
			$params = $this-> request-> query;
		}
		$params[$chaveASubstituir] = $valorASubstituir;
		foreach($params as $key => $value)
		{
			if($ct == 0)
			{
				$prefix = '?';
			} else
			{
				$prefix = '&';	
			}
			$stringParams .= $prefix . $key . '=' .$value;
			$ct++;
			//pr(" -- ".$key);
		}
		return $stringParams;
	}
	
	
	/**
	* 
	* 
	* @return String
	*
	*/
	public function removeParam($chaveARemover = '', $params = array())
	{
		$ct = 0;
		$stringParams = $this-> request-> base;
		//pr($this-> request-> params['pass']);
		foreach($this-> request-> params['pass'] as $keyParam => $valueParam)
		{
			
			$stringParams .= '/' . $valueParam;
			//pr(" -- ".$key);
		}
		//echo("<br />lol: stringParams". $stringParams);
		if(!$params)
		{
			$params = $this-> request-> query;
		}
		//$params[$chaveASubstituir] = $valorASubstituir;
		unset($params[$chaveARemover]);
		foreach($params as $key => $value)
		{
			if($ct == 0)
			{
				$prefix = '?';
			} else
			{
				$prefix = '&';	
			}
			$stringParams .= $prefix . $key . '=' .$value;
			$ct++;
			//pr(" -- ".$key);
		}
		return ($stringParams);
	}
	
	
	public function backWithParams()
	{
		$stringParams = $this-> request-> base;
		$paramsBase = $this-> request-> params['pass'];
		array_pop($paramsBase);
		//pr($this-> request-> params['pass']);
		foreach($paramsBase as $keyParam => $valueParam)
		{
			
			$stringParams .= '/' . $valueParam;
			//pr(" -- ".$key);
		}
		
		//$stringParams .= ($this-> paramsToString());
		//PR($stringParams);
		return($stringParams . $this-> paramsToString());
	}
	
	
	public function getParam($param = null, $valorDefault = 'default')
	{
		if(!isset($this-> request-> query[$param]))
		{
			$classLayoutLista = $valorDefault;
		} else
		{
			$classLayoutLista = $this-> request-> query[$param];
		}
		return($classLayoutLista);
	}
	
	
	public function printOnly($stringToCut = '', $long = 10)
	{
		if(strlen(utf8_decode($stringToCut)) <= $long)
		{
			$string = $stringToCut;
		} else 
		{
			//$cortar =  2; //($long - 3);
			//pr($cortar);
			//$string = substr($stringToCut, 0, ($long - 3)). '...';
			$string = mb_substr($stringToCut, 0, ($long - 3)) . "...";
		}
		$this-> printHtmlEscaped($string);
	}
	
	public function test()
	{
		print ("teste: ");
		//pr($this-> response-> charset());
		
		//pr($this-> _View-> response-> charset());
	}
	
	/**
	 * created in 2014-08-13
	 * @param string $message
	 */
	public  function printMsgErro($message = "Erro desconhecido!")
	{
		?>
		
		<p class="message msgErro">
			<?php 
			//noticeSuccess, notice, message
			print(htmlspecialchars($message, ENT_QUOTES, $this-> _View-> response-> charset()));
			?>
		<p>
		
		<?php
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	function Siah()
	{
		?>
		
		<!-- 
		
		-->
		
		<?php 
	}
}
