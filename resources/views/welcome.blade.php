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
    <div class="relative sm:flex sm:justify-center sm:items-start min-h-screen bg-dots-darker bg-center bg-blue-300 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="py-12">
            <div class="max-w-full mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <!-- Add the search input -->
                        <form method="POST" action="{{ route('welcome.display_data_by_level') }}">
                            @csrf
                            <div class="flex items-center my-2 gap-2">
                                <input type="text" name="search" placeholder="Search data" class="text-black bg-blue-100 border border-blue-600 rounded-md py-1 px-4 focus:outline-none focus:ring focus:border-blue-600">
                                
                                <button class="bg-blue-400 hover:bg-blue-500 focus:outline-none focus:ring focus:border-blue-600 border-blue-600 hover:border-blue-700 text-white font-semibold py-1 px-4 rounded-lg cursor-pointer" type="submit">Search</button>
                            </div>
                        </form>

                        <!-- Display the data (no need to check for 'post' request) -->
                        @if ($data->count() > 0)
                        {{-- All Data --}}
                        <table class="w-full border">
                            <thead>
                                <tr>
                                    <th class="w-1/6 border">Level</th>
                                    <th class="w-1/6 border">Topic Title</th>
                                    <th class="w-1/6 border">Sub Topic Title</th>
                                    <th class="w-1/6 border">Skill Name</th>
                                    <th class="w-1/6 border">Course Title</th>
                                    <th class="w-1/6 border">Lesson Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $level)
                                @foreach ($level->topics as $topic)
                                @foreach ($topic->subTopics as $subTopic)
                                @foreach ($subTopic->courseSkillTitles as $courseSkillTitle)
                                @foreach ($courseSkillTitle->lessons as $lesson)
                                <tr class="text-center">
                                    <td class="border">{{ $level->level }}</td>
                                    <td class="border">{{ $topic->topic_title }}</td>
                                    <td class="border">{{ $subTopic->sub_topic_title }}</td>
                                    <td class="border text-start p-2">{{ $courseSkillTitle->skill_name }}</td>
                                    <td class="border">{{ $courseSkillTitle->course_title }}</td>
                                    <td class="border">{{ $lesson->lesson_title }}</td>
                                </tr>
                                @endforeach
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