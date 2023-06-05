<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function show() {
        $admins_id = Auth::user()->first();
        $article_data = Article::where('admins_id',$admins_id['id'])->orderBy('updated_at', 'desc')->get();
        $admins_id = explode(' ',$admins_id->name)[0];
        return view('pages.admin.Article',[
            'admin_name' => $admins_id,
            'article_data' => $article_data
        ]);
    }
    
    public function showIndex(Request $request) {
        $admins_id = Auth::user()->first();
        $article_data = Article::join('admins','admins.id','=','articles.admins_id')->where('articles.id',$request->article_id)->select('articles.*','admins.name')->first();
        return view('pages.admin.ViewArticle',[
            'article_data' => $article_data
        ]);
    }
    
    public function postArticle(Request $request)
    {
        $admins_id = Auth::user()->first();
        $this->validate($request, [
             'articleTitle' => 'required',
             'articleImage' => ['required','mimes:png,jpg,jpeg','max:2048'],
             'content' => 'required',
        ]);

        // for each content and images on summarnote editor
        $content = $request->content;
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        foreach($imageFile as $item => $image){
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name= "/articles/" . time().$item.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);
            
            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
            }
            
        // for thumbnail image
        if($request->file('articleImage')){
            $file= $request->file('articleImage');
            $filename= time().$file->getClientOriginalName();
            $file-> move(public_path('/articles'), $filename);
            $thumPath = '/articles/'. $filename;
        }

        $content = $dom->saveHTML();
        $post = Article::create([
                'articleTitle' => $request->articleTitle,
                'articleImage' => $thumPath,
                'content' => $content,
                'admins_id' => $admins_id['id']
        ]);
        return redirect('/adminArticle')->with(['success' => 'Berhasil Membuat Artikel Baru']);
    }

    public function edit(Request $request)
    {
        $article_data = Article::join('admins','admins.id','=','articles.admins_id')->where('articles.id',$request->article_id)->select('articles.*','admins.name')->first();
        return view('pages.admin.EditArticle',[
            'article' => $article_data,
        ]);
    }

    public function update(Request $request)
    {
        $admins_id = Auth::user()->first();
        $this->validate($request, [
            'articleTitle' => 'required',
            'content' => 'required'
        ]);
        $article_data = Article::where('articles.id',$request->article_id)->first();
        if ($admins_id->id == $article_data->admins_id) {
            Article::where('articles.id',$request->article_id)->update([
                'articleTitle' => $request->articleTitle,
                'content' => $request->content
            ]);
            return redirect('/adminArticle')->with(['success' => 'Produk Berhasil Diperbarui']);
        }else {
            return view('errors.404');
        }
    }
}
