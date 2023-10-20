<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Level;

class DataByLevelController extends Controller
{

public function displayAllData()
{
    $data = Level::with(['topics.subTopics.courseSkillTitles'])->get();
    return view('welcome', ['data' => $data]);
}

public function displayDataByLevel(Request $request)
{
    $search = $request->input('search');

    $query = Level::with(['topics.subTopics.courseSkillTitles']);

    if ($search) {
        if (is_numeric($search)) {
            $query->where('level', 'LIKE', '%' . $search . '%');
        } else {
            $query->whereHas('topics.subTopics.courseSkillTitles', function ($subQuery) use ($search) {
                $subQuery->where('sub_topic_title', 'LIKE', '%' . $search . '%')
                    ->orWhere('skill_name', 'LIKE', '%' . $search . '%');
            });
        }
    }

    $data = $query->get();

    return view('welcome', ['data' => $data, 'search' => $search]);
}


}
