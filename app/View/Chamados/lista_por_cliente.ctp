
<div class="container">
	<h1>
		<?php
		echo($title_for_layout);
		?>
	</h1>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.8.1/bootstrap-table.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.8.1/bootstrap-table.min.js"></script>








<table data-url="/sitesiah/data3.json" data-height="299" data-show-columns="true" data-id-field="id">
    <thead>
    <tr>
        <th data-field="state" data-radio="true"></th>
        <th data-field="name" data-switchable="false">Name</th>
        <th data-field="price">Price</th>
        <th data-field="column1">Columns1</th>
        <th data-field="column2" data-visible="false">Columns2</th>
        <th data-field="column3" data-switchable="false">Columns3</th>
        <th data-field="column4" data-visible="false">Columns4</th>
    </tr>
    </thead>
</table>










<hr />

<table id="table-large-columns" data-height="400" data-show-columns="true"></table>
<script>
    $(function () {
        $('#large-columns-table').next().click(function () {
            $(this).hide();
            buildTable($('#table-large-columns'), 50, 50);
        });
    });
</script>

<hr />

<table id="events-id2" data-url="data1.json" data-height="299" data-search="true">
    <thead>
    <tr>
        <th data-field="state" data-checkbox="true"></th>
        <th data-field="id" data-sortable="true">Item ID</th>
        <th data-field="name" data-sortable="true">Item Name</th>
        <th data-field="price" data-sortable="true">Item Price</th>
        <th data-field="operate" data-formatter="operateFormatter" data-events="operateEvents">Item Operate</th>
    </tr>
    </thead>
</table>
<script>
    function operateFormatter(value, row, index) {
        return [
            '<a class="like" href="javascript:void(0)" title="Like">',
                '<i class="glyphicon glyphicon-heart"></i>',
            '</a>',
            '<a class="edit ml10" href="javascript:void(0)" title="Edit">',
                '<i class="glyphicon glyphicon-edit"></i>',
            '</a>',
            '<a class="remove ml10" href="javascript:void(0)" title="Remove">',
                '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }

    window.operateEvents = {
        'click .like': function (e, value, row, index) {
            alert('You click like icon, row: ' + JSON.stringify(row));
            console.log(value, row, index);
        },
        'click .edit': function (e, value, row, index) {
            alert('You click edit icon, row: ' + JSON.stringify(row));
            console.log(value, row, index);
        },
        'click .remove': function (e, value, row, index) {
            alert('You click remove icon, row: ' + JSON.stringify(row));
            console.log(value, row, index);
        }
    };
</script>













	<?php
	//pr($lChamados[0]);
	//pr($this->Session->read('Auth.User'));
	if($lChamados)
	{
		?>

		<table class="tGenerica"  border=1>

		<?php 
		echo $this-> Html-> tableHeaders(array('Código', 'Assunto', 'Status', 'Enviado em'));
		?>


			<?php
			foreach ($lChamados as $key => $chamado)
			{
				$created = DateTime::createFromFormat('Y-m-d H:i:s', $chamado['Chamado']['created']);
				echo $this-> Html-> tableCells(
					array
						(
							$this-> Html-> link(
									$chamado['Chamado']['id'],
									array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", 'ext'=> "html", $chamado['Chamado']['id'])			
								),
							$this-> Html-> link(
									$chamado['Chamado']['titulo'],
									array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", 'ext'=> "html", $chamado['Chamado']['id'])			
								),
							$this-> Html-> link(
									$chamado['Chamado']['status'],
									array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", 'ext'=> "html", $chamado['Chamado']['id'])			
								),

							$this-> Html-> link(
									$created-> format('Y/m/d \a\s H:i'),
									array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", 'ext'=> "html", $chamado['Chamado']['id'])			
								),
						)
				);
			}
			?>

		</table>

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
