<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;

use App\Models\Article;
use \Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ArticlesController extends Controller
{
    //
    public function  index(Request $request){
        $input = $request->input();
        //dd($input);
        //$list= Article::all();
        //var_dump($list);
        //echo 'hello word !';
        //dd($list);
        
        //按照条件查找
        $wlist = Article::where('id', '<' , 5)->orderBy('author','ASC')->get()->toArray();
       // var_dump(count($wlist));
        //dd($wlist);
        
        //获取单条数据
       // $one = Article::where('id',6)->first()->toArray();
       // $one2 = Article::find(6)->toArray();
       // echo '<pre>';
       // var_dump($one);
       // var_dump($one2);
        
        //查找不存在的
        try{
        //    $none = Article::findOrfail(21);
        }catch (Exception $e ){
            //echo 'Message: ' .$e->getMessage();
           // throw new ModelNotFoundException($e);
        }
       
        //统计总数
       // $count = Article::where('id','>',9)->count();
        //dd($count);
        
        
        //添加数据/更新
//         $article = new Article();
//         $article->title = '测试标题';
//         $article->content = '这是一个新的内容';
//         $article->author = 'my eker';
//         $article->save();
        
        //更新
//         $narticle = Article::findOrFail(21);
//         $narticle->author = 'my eker huang';
//         $narticle->save();
        
        
        //删除
        //$d = Article::findOrfail(21);
        //$d->delete();
        
        
        //通过条件删除
        //$deleted = Article::where('id','>',19)->delete();
        
        //添加
       $this->add();

       //统计总数
       $count = Article::count();
       var_dump($count);
       
        
    }
    
 
    
    public function show($response){
        var_dump($response);
    }
    
    public function showArticles($id){
        var_dump('id:'.$id);
    }
    
    
    public function test(Request $request){
        $input = $request->input();
        
        var_dump($_POST);
        var_dump($_GET);
      //  echo '<pre>';
        //var_dump($GLOBALS['id']);
        //dd($input);
    }
    
    /**
     * 添加数据
     */
    protected function add(){
        //添加数据/更新
        $article = new Article();
        $article->title = '测试标题';
        $article->content = '这是一个新的内容';
        $article->author = 'my eker';
        $article->save();
    }
}
