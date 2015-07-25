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
				title: 'Prematricula de alumnos en la universidad',
                paging:'true',
				actions:
				 {
					 listAction: 'verprematricula.php'

				},

				fields:
				 {
					id_prematricula:
					{
						key: true,
						create: false,
						edit: false,
						list: false
					},


					id_estudiante: {
						title: 'ID'

                    },



					id_cl1: {
                        title: 'C1',
                        width: '10%'


					},


					s1: {
                        title: 'S',
                        width: '5%',
                        options: { '':'','A': 'A', 'B': 'B', 'C': 'C', 'D': 'D', 'E': 'E'
                }




					},
					id_cl2: {
						title: 'C2',
                        width: '10%'


					},
					s2: {
						title: 'S',
                        width: '5%',
                        options: { '':'','A': 'A', 'B': 'B', 'C': 'C', 'D': 'D', 'E': 'E'
                }


					},

					id_cl3: {
						title: 'C3',
                        width: '10%'

					},

					s3: {
						title: 'S',
                        width: '5%',
                         options: { '':'','A': 'A', 'B': 'B', 'C': 'C', 'D': 'D', 'E': 'E'
                }



					},

					id_cl4:
					{
						title: 'C4',
                        width: '10%'


					},

						s4:
					{
						title: 'S',
                        width: '5%',
                         options: { '':'','A': 'A', 'B': 'B', 'C': 'C', 'D': 'D', 'E': 'E'
                }



					},

					id_cl5:
					{
						title: 'C5',
                        width: '10%'

					},

						s5:
					{
						title: 'S',
                        width: '5%',
                        options: { '':'','A': 'A', 'B': 'B', 'C': 'C', 'D': 'D', 'E': 'E'
                }



					},

						id_cl6:
					{
						title: 'C6',
                        width: '10%'


					},

						s6:
					{
						title: 'S',
                        width: '5%',
                         options: { '':'','A': 'A', 'B': 'B', 'C': 'C', 'D': 'D', 'E': 'E'
                }



					},

						id_cl7:
					{
						title: 'C7',
                        width: '10%'


					},

						s7:
					{
						title: 'S',
                        width: '5%',
                        options: { '':'','A': 'A', 'B': 'B', 'C': 'C', 'D': 'D', 'E': 'E'
                }



					},
				}
			});
			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>

  </body>
</html>

