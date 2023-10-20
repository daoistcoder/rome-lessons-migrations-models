<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')

</head>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <!-- Add the search input -->
                        <form method="POST" action="{{ route('welcome.display_data_by_level') }}">
                            @csrf
                            <div class="flex items-center">
                                <input type="text" name="search" placeholder="Search data" class="text-black">
                                <button type="submit">Search Data</button>
                            </div>
                        </form>

                        <!-- Display the data (no need to check for 'post' request) -->
                        @if ($data->count() > 0)
                        {{-- All Data --}}
                        <table class="w-full border">
                            <thead>
                                <tr>
                                    <th class="w-1/4 border">Level</th>
                                    <th class="w-1/4 border">Topic Title</th>
                                    <th class="w-1/4 border">Sub Topic Title</th>
                                    <th class="w-1/4 border">Skill Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $level)
                                @foreach ($level->topics as $topic)
                                @foreach ($topic->subTopics as $subTopic)
                                @foreach ($subTopic->courseSkillTitles as $skill)
                                <tr>
                                    <td class="border">{{ $level->level }}</td>
                                    <td class="border">{{ $topic->topic_title }}</td>
                                    <td class="border">{{ $subTopic->sub_topic_title }}</td>
                                    <td class="border">{{ $skill->skill_name }}</td>
                                </tr>
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p style="color: red;">No results found. Please refine your search criteria and try again.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>