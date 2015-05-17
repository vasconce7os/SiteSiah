<?php
class ImagesComponent extends Component {
	var $tamanho;
	var $extencao;
	var $diretorio;
	var $produtoRef;
	var $imagemRef;
	
	/**
	 *
	 * @param array $extencoesP
	 *        	com as extenções, ex.: array ('image/jpeg', 'image/png');
	 * @param array $arrayGerado,
	 *        	array com arquivo temporário do arquivo a ser verificado
	 * @return array, se array['OK'] for igual a true esta tudo ok com o arquivo, caso contrário verificar as mensagens de erros em indices inteiros
	 */
	public function checaArquivo($extencoesP, $arrayGerado) {
		$naoEncontrouErro = true;
		// pr($arrayGerado);
		if ($arrayGerado ['error'] != 0) {
			$arrayErro [] = 'Erro inesperado!';
			$erroEncontrado = false;
		} else {
			if ($arrayGerado ['size'] == 0 or $arrayGerado ['tmp_name'] == null) {
				$arrayErro [] = 'Nenhum arquivo foi recebido';
				$naoEncontrouErro = false;
			} else {
				if ((array_search ( $arrayGerado ['type'], $extencoesP )) === false) {
					$arrayErro [] = 'Formato de arquivo inaceito';
					$naoEncontrouErro = false;
				}
			}
		}
		if ($naoEncontrouErro) {
			$retorno ['OK'] = $naoEncontrouErro;
		} else {
			$retorno = $arrayErro;
			$retorno ['OK'] = $naoEncontrouErro;
		}
		return $retorno;
	}
	public function salvaArqivoTemp($nomeP, $extencoesP, $diretorioP, $arquivoTemp) {
		$extensao = ($arquivoTemp ['type']);
		$extensao = explode ( '/', $extensao );
		$extensao = $extensao [1];
		$nomeP = Inflector::slug ( utf8_encode ( $nomeP ) );
		/*
		 * $nomeP = utf8_decode($nomeP); setlocale(LC_ALL, 'en_US.UTF8'); $nomeP = iconv('iso-8859-1', 'ASCII//TRANSLIT', $nomeP); $nomeP = str_replace('/ ', '-', $nomeP); $nomeP = str_replace('\ ', '-', $nomeP); $nomeP = str_replace('/', '-', $nomeP); $nomeP = str_replace("\\", '-', $nomeP); $nomeP = str_replace(' ', '-', $nomeP); $nomeP = str_replace('.', '', $nomeP);
		 */
		
		$code = $nomeP . '.' . $extensao;
		$uploadFile = $diretorioP . $code;
		// echo'<br />nome... '.$code."<br />temp "."<br />url: ".$uploadFile;
		// echo'<br />arquivo: <strong>'.$arquivoTemp['imagemGrande']['tmp_name'].'</strong>';
		// echo'<br />arquivo: <strong>'.$uploadFile.'</strong>';
		// exit;
		if (move_uploaded_file ( $arquivoTemp ['tmp_name'], $uploadFile )) {
			$info = 'Imagem alterada';
			$retorno ['OK'] = true;
			$retorno ['caminho'] = $diretorioP . $code;
			// echo('<br />'.$retorno['caminho']);
			// exit;
			return $retorno;
		} else {
			$info = 'Ocorreu um erro ao enviar imagem!';
			// echo"<script>window.alert('nao alt');</script>";
			$retorno ['OK'] = false;
			return $retorno;
		}
	}
	public function checaArquivoDimensaoExata($extencoesP, $dimensoes, $arrayGerado) {
		// pr($img);
		$arrayErro ['OK'] = FALSE;
		
		if ($arrayGerado ['size'] == 0 or $arrayGerado ['tmp_name'] == null) {
			$arrayErro [] = 'Nenhum arquivo foi recebido';
		} else {
			if ($arrayGerado ['error'] != 0) {
				// echo'<br />o php detectou erro';
				$arrayErro [] = 'Erro inesperado!';
			} else {
				// echo'<br />o php não detectu erro';
				if (array_search ( $arrayGerado ['type'], $extencoesP ) === false) {
					$formatos = implode ( ", ", $extencoesP );
					$arrayErro [] = 'O formato "' . $arrayGerado ['type'] . '" de arquivo não aceito, arquivo para este campo apenas nos formatos: ' . $formatos;
				} else 				// já sei que é imagem, por isto posso getar altura e largura
				{
					$tam_img = getimagesize ( $arrayGerado ['tmp_name'] );
					if ($tam_img [0] != $dimensoes ['larguraExata']) {
						$arrayErro [] = 'A largura da imagem deve ser de ' . $dimensoes ['larguraExata'] . ' px e a imagem que você enviou é de ' . $tam_img [0] . '!';
					}
					if ($tam_img [1] != $dimensoes ['alturaExata']) {
						$arrayErro [] = 'A altura da imagem deve ser de ' . $dimensoes ['alturaExata'] . ' px e a imagem que você enviou é de ' . $tam_img [1] . ' px!';
					}
				}
			}
		}
		
		$erroDoPhp = $arrayGerado ['error'];
		if (! isset ( $arrayErro [0] )) {
			$arrayErro ['OK'] = TRUE;
		} else {
			// echo"<br />Imagem, checaArquivo: treta";
		}
		return $arrayErro;
	}
	function doComplexOperation($amount1, $amount2) {
		return $amount1 + $amount2;
	}
}