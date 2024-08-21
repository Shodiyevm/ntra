
<?php


$statuses = (new \App\Status())->getStatuses();

loadView('dashboard/status', ['statuses' => $statuses]);

