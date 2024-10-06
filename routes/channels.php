<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('email.progress', function () {
    return true;
});


Broadcast::channel('email.completed', function () {
    return true;
});
