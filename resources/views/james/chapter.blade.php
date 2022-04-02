<h2>{{ $bible_version }}</h2>
<h3>{{ $book_name }}</h3>
<h4>Chapter {{ $chapter_number }}</h4>
<pre>
@include('james.chapter'. $chapter_number)
</pre>
