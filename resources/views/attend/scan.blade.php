<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>qr scanner</title>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

  <a href="{{ url('/event/' . $item->id) }}" title="View Event"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View Event</button></a>
        
        <div class="container col-lg-4 py-5">
        {{-- Scanner --}} 
            <div class="card bg-white shadow rounded-3 p-3 border-0">

            {{-- Message --}}
            @if (session()->has('failed'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session()->get('failed') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session()->get('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
                <video id="preview"></video>

                {{-- form --}}

                <form action="{{ route('store') }}" method="POST" id="form">
                    @csrf
                <input type="hidden" name="id_siswa" id="id_siswa">
                </form>
                    
            </div> 

            {{-- Scanner --}}
        <div class="table-responsive mt-5">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                </tr>

                @foreach ($absen as $item)
                <tr>
                    <td>{{ $item->siswa->nama }}</td>
                    <td>{{ $item->tanggal }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        </div>

        
        
        <script type="text/javascript">
            let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
            scanner.addListener('scan', function (content) {
                console.log(content);
            });
            Instascan.Camera.getCameras().then(function (cameras) {
                if (cameras.length > 0) {
                scanner.start(cameras[0]);
                } else {
                console.error('No cameras found.');
                }
            }).catch(function (e) {
                console.error(e);
            });

            scanner.addListener('scan', function(c){
                document.getElementById('id_siswa').value = c;
                document.getElementById('form').submit();
            })
            </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>