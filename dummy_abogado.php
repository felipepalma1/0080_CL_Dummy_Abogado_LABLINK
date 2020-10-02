<html>
    <head>
        
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css">
        <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>

        <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>    
        <link href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css" rel="stylesheet">
       
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Laboralink.com</title>

        <link href="https://fonts.googleapis.com/css?family=Red+Hat+Display:400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet"> 
        <link href="../admin.css" rel="stylesheet" type="text/css">
        <link href="admin.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>

        <link href="/registro/css/bootstrap.css" rel="stylesheet">
        <link href="/registro/css/autofaro.css" rel="stylesheet">
        <link href="/registro/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Red+Hat+Display:400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet"> 
        <script src="/registro/js/jquery.min.js"></script>

        <script type="text/javascript">
        function actualizar(){
            window.location.reload(true);
        }
        </script>
        <script type="text/javascript" src="/registro/js/sound-onclick.js"></script>

    </head>
    <body>
    <div class="tabla_admin">
     <div class="titulomenu">Pedro Simon</div>
     	<form action="products.php" method="get">

        <input type="hidden" name="desc_typep" value="">
        <input type="hidden" name="hi" value="">
        <input type="hidden" name="id_typep" value="1">

        <link href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css" rel="stylesheet">

<script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>

<table id="table">
  <thead>
    <tr>
      <th data-field="id">ID</th>
      <th data-field="name">Item Name</th>
      <th data-field="price">Item Price</th>
    </tr>
  </thead>
</table>

<script>
  var $table = $('#table')

  $(function() {
    var data = [
      {
        'id': 0,
        'name': 'Item 0',
        'price': '$0'
      },
      {
        'id': 1,
        'name': 'Item 1',
        'price': '$1'
      },
      {
        'id': 2,
        'name': 'Item 2',
        'price': '$2'
      },
      {
        'id': 3,
        'name': 'Item 3',
        'price': '$3'
      },
      {
        'id': 4,
        'name': 'Item 4',
        'price': '$4'
      },
      {
        'id': 5,
        'name': 'Item 5',
        'price': '$5'
      }
    ]
    $table.bootstrapTable({data: data})
  })
</script>
    
    </body>
</html>