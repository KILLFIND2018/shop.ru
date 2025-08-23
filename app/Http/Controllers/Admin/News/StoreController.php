<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\StoreNewsRequest;
use App\Models\News;

class StoreController extends Controller
{
    public function __invoke(StoreNewsRequest $request)
    {
        $data = $request->validated();

        // Обработка изображения, если оно загружено
        if ($request->hasFile('img_path')) {
            $data['img_path'] = $request->file('img_path')->store('news', 'public');
        }

        News::create($data);

        return redirect()->route('admin.news.index')->with('success', 'News created');
    }
}
