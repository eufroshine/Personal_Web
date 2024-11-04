<!doctype html>
<html lang="en">
<head>
  <!-- DataTables CSS -->
  <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2 class="mb-4">Data Pengguna</h2>
  <table id="dataTable" class="display">
    <thead>
      <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
        <th>Start Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Airi Satou</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>33</td>
        <td>11/28/2008</td>
      </tr>
      <tr>
        <td>Angelica Ramos</td>
        <td>Chief Executive Officer (CEO)</td>
        <td>London</td>
        <td>47</td>
        <td>10/9/2009</td>
      </tr>
      <tr>
        <td>Ashton Cox</td>
        <td>Junior Technical Author</td>
        <td>San Francisco</td>
        <td>66</td>
        <td>1/12/2009</td>
      </tr>
      <tr>
        <td>Bradley Greer</td>
        <td>Software Engineer</td>
        <td>London</td>
        <td>41</td>
        <td>10/13/2012</td>
      </tr>
      <tr>
        <td>Brenden Wagner</td>
        <td>Software Engineer</td>
        <td>San Francisco</td>
        <td>28</td>
        <td>6/7/2011</td>
      </tr>
      <tr>
        <td>Brielle Williamson</td>
        <td>Integration Specialist</td>
        <td>New York</td>
        <td>61</td>
        <td>12/2/2012</td>
      </tr>
      <tr>
        <td>Bruno Nash</td>
        <td>Software Engineer</td>
        <td>London</td>
        <td>38</td>
        <td>5/3/2011</td>
      </tr>
      <tr>
        <td>Caesar Vance</td>
        <td>Pre-Sales Support</td>
        <td>New York</td>
        <td>21</td>
        <td>12/12/2011</td>
      </tr>
      <tr>
        <td>Cara Stevens</td>
        <td>Sales Assistant</td>
        <td>New York</td>
        <td>46</td>
        <td>12/6/2011</td>
      </tr>
      <tr>
        <td>Cedric Kelly</td>
        <td>Senior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>3/29/2012</td>
      </tr>
      <tr>
        <td>Charde Marshall</td>
        <td>Regional Director</td>
        <td>San Francisco</td>
        <td>36</td>
        <td>10/16/2008</td>
      </tr>
      <tr>
        <td>Colleen Hurst</td>
        <td>Javascript Developer</td>
        <td>San Francisco</td>
        <td>39</td>
        <td>9/15/2009</td>
      </tr>
      <tr>
        <td>Dai Rios</td>
        <td>Personnel Lead</td>
        <td>Edinburgh</td>
        <td>35</td>
        <td>9/26/2012</td>
      </tr>
      <tr>
        <td>Donna Snider</td>
        <td>Customer Support</td>
        <td>New York</td>
        <td>27</td>
        <td>1/25/2011</td>
      </tr>
      <tr>
        <td>Doris Wilder</td>
        <td>Sales Assistant</td>
        <td>Sydney</td>
        <td>23</td>
        <td>9/20/2010</td>
      </tr>
      <tr>
        <td>Finn Camacho</td>
        <td>Support Engineer</td>
        <td>San Francisco</td>
        <td>47</td>
        <td>7/7/2009</td>
      </tr>
      <tr>
        <td>Fiona Green</td>
        <td>Chief Operating Officer (COO)</td>
        <td>San Francisco</td>
        <td>48</td>
        <td>3/11/2010</td>
      </tr>
      <tr>
        <td>Garrett Winters</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>63</td>
        <td>7/25/2011</td>
      </tr>
      <tr>
        <td>Gavin Cortez</td>
        <td>Team Leader</td>
        <td>San Francisco</td>
        <td>22</td>
        <td>10/26/2008</td>
      </tr>
      <tr>
        <td>Gavin Joyce</td>
        <td>Developer</td>
        <td>Edinburgh</td>
        <td>42</td>
        <td>12/22/2010</td>
      </tr>
      <tr>
        <td>Gloria Little</td>
        <td>Systems Administrator</td>
        <td>New York</td>
        <td>59</td>
        <td>4/10/2009</td>
      </tr>
      <tr>
        <td>Haley Kennedy</td>
        <td>Senior Marketing Designer</td>
        <td>London</td>
        <td>43</td>
        <td>12/18/2012</td>
      </tr>
      <tr>
        <td>Hermione Butler</td>
        <td>Regional Director</td>
        <td>London</td>
        <td>47</td>
        <td>3/21/2011</td>
      </tr>
      <tr>
        <td>Herrod Chandler</td>
        <td>Sales Assistant</td>
        <td>San Francisco</td>
        <td>59</td>
        <td>8/6/2012</td>
      </tr>
      <tr>
        <td>Hope Fuentes</td>
        <td>Secretary</td>
        <td>San Francisco</td>
        <td>41</td>
        <td>2/12/2010</td>
      </tr>
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
