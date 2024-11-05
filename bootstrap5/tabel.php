<!doctype html>
<html lang="en">
<head>
  <!-- DataTables CSS -->
  <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
  
  <!-- Bootstrap CSS (optional, for layout) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

  <style>
    body {
      background-color: #0d0d0d;
      color: #ffffff;
      font-family: 'Orbitron', sans-serif;
      overflow-x: hidden;
    }

    h2 {
      color: #00e5ff;
      text-shadow: 0 0 10px #00e5ff, 0 0 20px #00e5ff;
    }

    .table {
      margin-top: 20px;
      background-color: rgba(25, 25, 25, 0.9);
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
    }

    th {
      background-color: #1a1a1a;
      color: #ff1c8d;
      text-shadow: 0 0 5px #ff1c8d;
    }

    td {
      background-color: rgba(25, 25, 25, 0.7);
      color: #ffffff;
      border-bottom: 1px solid #333;
    }

    tr:hover td {
      background-color: rgba(0, 229, 255, 0.2);
      color: #00e5ff;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
      background: #00e5ff;
      color: #0d0d0d;
      border: none;
      border-radius: 5px;
      padding: 5px 10px;
      margin: 0 2px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
      background: #ff1c8d;
      color: #ffffff;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
      background: #ff1c8d;
      color: #ffffff;
    }
  </style>
</head>
<body>
<div class="container mt-5">
  <h2 class="mb-4">Data Pengguna</h2>
  <table id="dataTable" class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Position</th>
        <th scope="col">Office</th>
        <th scope="col">Age</th>
        <th scope="col">Start Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Airi Satou</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>33</td>
        <td>11/28/2008</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Angelica Ramos</td>
        <td>CEO</td>
        <td>London</td>
        <td>47</td>
        <td>10/9/2009</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Ashton Cox</td>
        <td>Junior Technical Author</td>
        <td>San Francisco</td>
        <td>66</td>
        <td>1/12/2009</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Bradley Greer</td>
        <td>Software Engineer</td>
        <td>London</td>
        <td>41</td>
        <td>10/13/2012</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Brenden Wagner</td>
        <td>Software Engineer</td>
        <td>San Francisco</td>
        <td>28</td>
        <td>6/7/2011</td>
      </tr>
      <!-- Add more rows as needed -->
    </tbody>
  </table>
</div>

<!-- jQuery and DataTables JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>
</body>
</html>
