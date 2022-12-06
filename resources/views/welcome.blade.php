@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <div class="card">
                    <div class="card-header">
                        <p class="text-monospace">
                            Prueba técnica, Jorge.
                        </p>
                    </div>
                    <div class="card-body text-monospace">
                        <p>Estas son algunas ayudas para agilizar el proceso</p>
                        <p>
                            Para traer todos los datos <code>http://127.0.0.1:8000/api/activity</code> método <code>GET</code>. <br>

                            Para registrar una Activity <code>http://127.0.0.1:8000/api/activity</code> método <code>POST</code>.<br>
                            Formato JSON de referencia:
<pre><code>{
    "monitor_id": 1,
    "cultural_right_id": 1,
    "nac_id": 1,
    "activity_date": "2022-06-22",
    "start_time": "11:11 AM",
    "final_hour": "11:12 AM",
    "expertise_id": 1
}</code></pre>
                            Para actualizar una Activity <code>http://127.0.0.1:8000/api/activity/{id}</code> método <code>PATCH or PUT</code>.<br>
                            Formato JSON de referencia:
<pre><code>{
    "monitor_id": 1,
    "cultural_right_id": 1,
    "nac_id": 1,
    "activity_date": "2022-06-22",
    "start_time": "11:11 AM",
    "final_hour": "11:45 PM",
    "expertise_id": 1
}</code></pre>
                            Para buscar una Activity <code>http://127.0.0.1:8000/api/activity/{id}</code> método <code>GET</code>.<br>
                            Para eliminar una Activity <code>http://127.0.0.1:8000/api/activity/{id}</code> método <code>DELETE</code>.<br>

                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <div class="pull-right hidden-xs">
                            <b>Version</b> 1.0
                        </div>
                        <strong>Copyright©2022.</strong> All rights reserved. <strong>ATS</strong>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection
