
<body class="bg-red-900">
@include('partials.header')
    <div class="overflow-x-auto">
        <table class="shadow-lg bg-white">
            <thead>
                <tr class="text-white bg-red-900 font-bold border border-red-200">
                    <th class="px-6 py-3 border border-red-200">ID</th>
                    <th class="px-6 py-3 border border-red-200" >ISBN</th>
                    <th class="px-6 py-3 border border-red-200">Title</th>
                    <th class="px-6 py-3 border border-red-200">Author</th>
                    <th class="px-6 py-3 border border-red-200">Description</th>
                    <th class="px-6 py-3 border border-red-200">Date Published</th>
                </tr>
            </thead>
            <tbody class="text-red-900 text-left border-1 border border-red-200">
                @foreach($books as $book)
                <tr class="bg-red-250 border border-red-200">
                    <td class="px-6 py-4 border border-red-200">{{ $book->id }}</td>
                    <td class="px-6 py-4 border border-red-200">{{ $book->isbn }}</td>
                    <td class="px-6 py-4 border border-red-200">{{ $book->title }}</td>
                    <td class="px-6 py-4 border border-red-200">{{ $book->author }}</td>
                    <td class="px-6 py-4 border border-red-200">{{ $book->description }}</td>
                    <td class="px-6 py-4 border border-red-200">{{ $book->date_published }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@include('partials.footer')
</body>


