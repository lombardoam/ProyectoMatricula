<html>
  <head>


    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/metro/blue/jtable.css" rel="stylesheet" type="text/css" />

	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
       <script src="scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
    <script src="jtable/localization/jquery.jtable.es.js" type="text/javascript"></script>

  </head>
  <body>
	<div align="center"><div id="PeopleTableContainer" style="width: 80%; height:"></div></div>
	<script type="text/javascript">

		$(document).ready(function ()
		 {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable(
			{
				title: 'Tipos de equivalencias',
                paging: 'true',
				actions:
				 {
					 listAction: 'vertipoeq.php',
                     createAction: 'creartipoeq.php',
					 updateAction: 'editartipoeq.php',
					 deleteAction: 'borrartipoeq.php'

				},


				fields:
				 {
					id_tipo:
					{
						key: true,
						create: false,
						edit: false,
						list: false
					},


					descripcion: {
						title: 'Descripción'

                    },



				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>

  </body>
</html>
