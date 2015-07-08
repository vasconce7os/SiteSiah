
<?php
//sleep(3);
$lChamadosForJson['total'] = 0;
$lChamadosForJson['rows'] = array();
if($lChamados)
{
    $lChamadosForJson['total'] = count($lChamados);
    foreach ($lChamados as $key => $chamado) 
    {
        $created = DateTime::createFromFormat('Y-m-d H:i:s', $chamado['Chamado']['created']);
        $lChamadosForJson['rows'][] = array(
            'id' => $chamado['Chamado']['id'],
            'titulo' => $chamado['Chamado']['titulo'],
            'statusChamado' => utf8_encode($chamado['Chamado']['status']),
            'enviadoEm' => $created-> format('Y/m/d \a\s H:i'),
            );
    }
}
echo json_encode ($lChamadosForJson);
?>