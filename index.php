<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="assets/dataTables.bootstrap.min.css">
  <script type="text/javascript" src="assets/jquery-2.2.3.min.js"></script>
  <script type="text/javascript" src="assets/jquery.dataTables.min.js"></script>
</head>
<body>
  <div class="container"><br><br>
    <table class="table table-striped table-bordered data" id="tableku">
      <thead>
        <tr>      
          <th>Nama</th>
          <th>Alamat</th>
          <th>Pekerjaan</th>
          <th>Usia</th>
        </tr>
      </thead>
      <tbody>
        <tr>        
          <td>Damar</td>
          <td>Semarang</td>
          <td>Web Progammer</td>
          <td>23</td>
        </tr>
        <tr>        
          <td>Rio</td>
          <td>Semarang</td>
          <td>Web Progammer</td>
          <td>23</td>
        </tr>
        <tr>        
          <td>Frans</td>
          <td>Semarang</td>
          <td>Web Progammer</td>
          <td>23</td>
        </tr>
        <tr>        
          <td>Malik</td>
          <td>Purwodadi</td>
          <td>Web Progammer</td>
          <td>21</td>
        </tr>
        <tr>        
          <td>Yogo</td>
          <td>Purwodadi</td>
          <td>Web Progammer</td>
          <td>24</td>
        </tr>
        <tr>        
          <td>Tatag</td>
          <td>Demak</td>
          <td>Web Progammer</td>
          <td>23</td>
        </tr>
        <tr>        
          <td>Lucky</td>
          <td>Tangerang</td>
          <td>Web Progammer</td>
          <td>22</td>
        </tr>
        <tr>        
          <td>Reza</td>
          <td>Semarang</td>
          <td>Web Progammer</td>
          <td>22</td>
        </tr>
        <tr>        
          <td>Dini</td>
          <td>Semarang</td>
          <td>Web Progammer</td>
          <td>25</td>
        </tr>
        <tr>        
          <td>Ruli</td>
          <td>Tangerang</td>
          <td>Web Progammer</td>
          <td>25</td>
        </tr>
        <tr>        
          <td>Yasim</td>
          <td>Pedurungan</td>
          <td>Web Designer</td>
          <td>26</td>
        </tr>
        <tr>        
          <td>Faldi</td>
          <td>Cirebon</td>
          <td>Web Designer</td>
          <td>23</td>
        </tr>
        <tr>        
          <td>Ary</td>
          <td>Genuk</td>
          <td>Web Designer</td>
          <td>24</td>
        </tr>
        </tr>
      </tbody>
    </table>
  </div>
</body>
<script type="text/javascript">
  $(document).ready(function(){
    $('#tableku').DataTable();
  });
</script>
</html>