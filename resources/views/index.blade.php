
<body class="bg-red-900">
@include('partials.header')
    <div class="overflow-x-auto">
        <table class="shadow-lg bg-white border-red-200">
            <thead>
                <tr class="text-white bg-red-900">
                    <th class="px-6 py-3">ID</th>
                    <th class="px-6 py-3">ISBN</th>
                    <th class="px-6 py-3">Title</th>
                    <th class="px-6 py-3">Author</th>
                    <th class="px-6 py-3">Description</th>
                    <th class="px-6 py-3">Date Published</th>
                </tr>
            </thead>
            <tbody class="text-red-900 text-LEFT">
                @foreach($books as $book)
                <tr class="bg-red-250">
                    <td class="px-6 py-4">{{ $book->id }}</td>
                    <td class="px-6 py-4">{{ $book->isbn }}</td>
                    <td class="px-6 py-4">{{ $book->title }}</td>
                    <td class="px-6 py-4">{{ $book->author }}</td>
                    <td class="px-6 py-4">{{ $book->description }}</td>
                    <td class="px-6 py-4">{{ $book->date_published }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@include('partials.footer')
</body>


