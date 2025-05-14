<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Si Teguh | Pengaduan Masyarakat</title>
  
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
    }
    
    .container {
      max-width: 1200px;
      margin: 30px auto;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    
    .title h2 {
      color: #2c3e50;
      font-weight: 600;
      margin-bottom: 30px;
      position: relative;
      padding-bottom: 10px;
    }
    
    .title h2:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 3px;
      background: linear-gradient(90deg, #3498db, #2c3e50);
    }
    
    .thead {
      background: linear-gradient(135deg, #3498db, #2c3e50);
      color: #ffffff;
      font-weight: 500;
    }
    
    .table {
      border-collapse: separate;
      border-spacing: 0;
      width: 100%;
      overflow: hidden;
    }
    
    .table th, 
    .table td {
      padding: 12px 15px;
      vertical-align: middle;
    }
    
    .table thead th {
      border: none;
    }
    
    .table tbody tr {
      transition: all 0.3s ease;
    }
    
    .table tbody tr:hover {
      background-color: #f1f9ff;
      transform: translateX(5px);
    }
    
    .table tbody tr:nth-child(even) {
      background-color: #f8fafc;
    }
    
    .table tbody tr:nth-child(even):hover {
      background-color: #f1f9ff;
    }
    
    .status-pending {
      color: #e67e22;
      font-weight: 500;
    }
    
    .status-processed {
      color: #3498db;
      font-weight: 500;
    }
    
    .status-completed {
      color: #2ecc71;
      font-weight: 500;
    }
    
    @media (max-width: 768px) {
      .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }
      
      .table {
        display: block;
      }
      
      .title h2 {
        font-size: 1.5rem;
      }
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-3 mt-md-5">
    <div class="title text-center mb-4 mb-md-5">
      <h2>Laporan Layanan Pengaduan Online</h2>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="thead">
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Pengaduan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pengaduan as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->user_nik }}</td>
              <td>{{ $item->name }}</td>
              <td>{{ $item->description }}</td>
              <td>{{ $item->created_at->format('l, d F Y') }}</td>
              <td class="status-{{ strtolower($item->status) }}">{{ $item->status }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>