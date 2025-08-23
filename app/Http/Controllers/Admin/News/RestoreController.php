<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class RestoreController extends Controller
{
    public function __invoke(News $news)
    {
        $news->restore(); // Restore from trash

        return redirect()->route('admin.news.index')->with('success', 'News restored');
    }
}
