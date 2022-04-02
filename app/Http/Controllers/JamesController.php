<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JamesController extends Controller
{
    const BOOK_NAME = 'James';
    const BIBLE_VERSION = 'King James Version';
    public function readAll()
    {
        return view("james.all", [
            'book_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERSION,
        ]);
    }

    public function readByChapter($chapter_number)
    {
        return view("james.chapter", [
            'book_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'chapter_number' => $chapter_number
        ]);
    }
}
