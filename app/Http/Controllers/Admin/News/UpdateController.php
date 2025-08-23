<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\StoreNewsRequest;
use App\Http\Requests\News\UpdateNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateNewsRequest $request, News $news)
    {
        $data = $request->validated();

        // Обработка is_published
        $data['is_published'] = $request->has('is_published') ? 1 : 0;

        // Обработка изображения, если оно загружено
        if ($request->hasFile('img_path')) {
            // Удаление старого изображения, если оно существует
            if ($news->img_path) {
                Storage::disk('public')->delete($news->img_path);
            }
            $data['img_path'] = $request->file('img_path')->store('news', 'public');
        }

        $news->update($data);

        return redirect()->route('admin.news.show', $news->id)->with('success', 'News updated');
    }
}
