<div>
  the Home Page of the backend
  <strong>Database Connected: </strong>
  @php
    try {
        \DB::connection()->getPDO();
        echo \DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        echo 'None';
    }
  @endphp

</div>
