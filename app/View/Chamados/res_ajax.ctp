
<?php
if($lChamados)
{
    //pr($lChamados[0]);
    //echo("\nveio:\n");
    $lChamadosForJson['total'] = count($lChamados);
    foreach ($lChamados as $key => $chamado) 
    {
        $created = DateTime::createFromFormat('Y-m-d H:i:s', $chamado['Chamado']['created']);
        $lChamadosForJson['rows'][] = array(
            'id' => $chamado['Chamado']['id'],
            //'data-index' => $chamado['Chamado']['id'],
            'titulo' => $chamado['Chamado']['titulo'],
            'statusChamado' => utf8_encode($chamado['Chamado']['status']),
            'enviadoEm' => $created-> format('Y/m/d \a\s H:i'),
            );
    }
    echo json_encode ($lChamadosForJson);
} else
{
    $error = array('msgErrorJson' => "Não há nenhum elemento para listar!");
    echo json_encode ($error);
}
?>