<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(News $news)
    {
        $news->delete(); // Soft delete

        return redirect()->route('admin.news.index')->with('success', 'News moved to trash');
    }
}
