<?php

namespace App\Http\Controllers\Back;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $article = Article::with('Category')->latest()->get();
            return DataTables::of($article)
                // custom kolom
                ->addIndexColumn() //id article
                ->addColumn('category_id', function ($article) {
                    return $article->Category->name;
                })
                ->addColumn('status', function ($article) {
                    if ($article->status == 0) {
                        return '<span class="badge bg-danger">Private</span>';
                    } else {
                        return '<span class="badge bg-success">Published</span>';
                    }
                })
                ->addColumn('button', function ($article) {
                    return '<div class="text-center">
                            <a href="article/' . $article->id . '" class="btn btn-secondary">Detail</a>
                            <a href="article/' . $article->id . '/edit" class="btn btn-primary">Edit</a>
                            <a href="#" onclick="deleteArticle(this)" data-id=" ' . $article->id . ' " class="btn btn-danger">Delete</a>
                   </div>';
                })
                // panggil custom kolom
                ->rawColumns(['category_id', 'status', 'button'])
                ->make();
        }

        return view('back.article.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.article.create', [
            'categories' => Category::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $data = $request->validated();

        $file = $request->file('img'); //img
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //jpg,jpeg
        $file->storeAs('public/back/', $fileName); //public/back/namanya.jpg

        $data['img'] = $fileName;
        $data['slug'] = Str::slug($data['title']);

        Article::create($data);

        return redirect(url('article'))->with('success', 'Data has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('back.article.show', [
            'article' => Article::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('back.article.update', [
            'article' => Article::find($id),
            'categories' => Category::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, string $id)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $file = $request->file('img'); //img
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //jpg,jpeg
            $file->storeAs('public/back/', $fileName); //public/back/namanya.jpg

            //unlink img/delete old img
            Storage::delete(['public/back/' . $request->oldimg]);

            $data['img'] = $fileName;
        } else {
            $data['img'] = $request->oldimg;
        }

        $data['slug'] = Str::slug($data['title']);

        Article::find($id)->update($data);

        return redirect(url('article'))->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Article::find($id);
        Storage::delete(['public/back/' . $data->img]);
        $data->delete();

        return response()->json([
            'message' => 'Data Article has been DELETED'
        ]);
    }
}
