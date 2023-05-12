<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function show() {
        $admins_id = Auth::user()->first();
        $article_data = Article::where('admins_id',$admins_id['id'])->get();
        return $article_data;
        // return view('pages.admin.article',[
        //     'article_data' => $article_data
        // ]);
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

        // log result
        dd($post->toArray());
    }
}
