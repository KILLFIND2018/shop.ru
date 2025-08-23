<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ForceDestroyController extends Controller
{
    public function __invoke(News $news)
    {
        // Удаление изображения, если оно существует
        if ($news->img_path) {
            Storage::disk('public')->delete($news->img_path);
        }

        $news->forceDelete(); // Окончательное удаление

        return redirect()->route('admin.news.index')->with('success', 'News permanently deleted');
    }
}
