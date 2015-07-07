
<div class="container">
	<h1>
		<?php
		echo($title_for_layout);
		?>
	</h1>








    <div class="container">
        <div id="toolbar">
            <div class="form-inline" role="form">
                <div class="form-group">
                    <input name="search" class="form-control" type="text" placeholder="Search">
                </div>
                <button id="ok" type="submit" class="btn btn-default">OK</button>
            </div>
        </div>
        <table id="table"
               data-toggle="table"
               data-height="460"
               data-toolbar="#toolbar"
               data-show-refresh="true"
               data-show-toggle="true"
               data-show-columns="true"
               data-query-params="queryParams"
               data-response-handler="responseHandler"
               data-url="<?php echo($this-> request-> base); ?>/suporte/chamados/resAjax.json">
            <thead>
            <tr>
                <th data-field="id">
                	Código
               	</th>
                <th data-field="titulo" data-formatter="addLink">
                	Assunto
                </th>
                <th data-field="statusChamado">
                	Status
                </th>
                <th data-field="enviadoEm">
                	Enviado em
                </th>
            </tr>
            </thead>
        </table>
    </div>

<script>
    var $table = $('#table'),
        $ok = $('#ok');

    $(function () {
        $ok.click(function () {
            $table.bootstrapTable('refresh');
        });
    });

    function queryParams() {
        var params = {};
        $('#toolbar').find('input[name]').each(function () {
            params[$(this).attr('name')] = $(this).val();
        });
        return params;
    }

    function responseHandler(res) {
        return res.rows;
    }
</script>

<script>


    function addLink(value, row, index) 
    {

        
        var link = '<a href="'+rootOfFramework()+'/suporte/chamados/ver/'+row.id + '">'+row.titulo + '</a>';
        return [link].join('');
    }







    window.operateEvents = {
        'click .like': function (e, value, row, index) {
            alert('You click like action, row: ' + JSON.stringify(row));
        }
    };


        $table.on('all.bs.table', function (e, name, args) {
            //console.log("os trens: " + name, args);
        });




        $('#table').on('click-row.bs.table', function (e, row, $element) {
              //here the hidden column is readable :)
              //console.log(row.id);
          });
</script>



<?php 
?>









	<?php
	//pr($lChamados[0]);
	//pr($this->Session->read('Auth.User'));
	if($lChamados)
	{
		?>


		<?php
		//var_dump($created);
	} else
	{
		?>

		Não há chamados!

		<?php
	}
	?>


	<p>
		Deseja 
		<a href="<?php echo($this-> request-> base); ?>/suporte/chamados/criar.html">
			criar novo chamado
		</a>
		?
	</p>

</div>
