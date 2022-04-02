<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamesController;

Route:: get('/chapter/{chapter_number}',[JamesController::class, 'readByChapter']);
Route:: get('/all-chapters', [JamesController::class, 'readAll']);