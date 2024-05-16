<?php


\Illuminate\Support\Facades\Route::get('/test', function() {
    $test = new \Protik\TestPackage\TestPackage();
    return $test->test();
});
