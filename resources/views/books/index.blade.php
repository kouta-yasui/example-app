<!DOCTYPE html>
<html>
<head>
    <title>レビュー表示</title>
    <style>
        .star {
            color: gold;
        }
    </style>
</head>
<body>
    <h1>書籍一覧</h1>

    @foreach ($books as $book)
        <div>
            <h2>{{ $book->title }}</h2>
            @php
                $avg = round($book->averageRating(), 1);
                $count = $book->reviewCount();
            @endphp

            <p>
                評価:
                @for ($i = 1; $i <= 5; $i++)
                    <span class="star">{{ $i <= floor($avg) ? '★' : '☆' }}</span>
                @endfor
                ({{ $avg }} / {{ $count }}件のレビュー)
            </p>
        </div>
    @endforeach

</body>
</html>
