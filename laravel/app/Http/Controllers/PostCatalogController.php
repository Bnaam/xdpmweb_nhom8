<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use App\Models\PostCatalogModel;

use App\Models\PostModel;

use Illuminate\Support\Facades\DB;

class PostCatalogController extends Controller
{
    //
    private $postcatalog;

    private $post;

    public function __construct()
    {
        $this->postcatalog = new PostCatalogModel();
        $this->post = new PostModel();
    }
  

    public function index()
    {       
        $postcatalogList = $this->postcatalog->getAllPostCatalog();

        
        
        return view('admin.postcatalog.postcatalog', compact('postcatalogList'));
    }

    public function addPostCatalogForm()
    {      
 
        return view('admin.postcatalog.postcatalogadd');
    }

    public function addPostCatalog(Request $request)
    {
        $request->validate(
            [
                'tendm' => 'required|unique:danhmucbaiviet',
           
        ],
            [
                'tendm.required' => '*Tiêu đề bắt buộc nhập',
                'tendm.unique' => '*Tên danh mục đã tồn tại',
          
              
        ]);

        $data = [
            $request->tendm,
        
        ];

        $this->postcatalog->addPostCatalog($data);

        return redirect()->route('postcatalog.index');
    }

    public function editPostCatalogForm($id)
    {       
        $postcatalogList = $this->postcatalog->getAllpostcatalog(); 

        if(!empty($id))
        {
            $detail =  $this->postcatalog->getDetail($id);
            $detail = $detail[0];
     
        }else{
            return redirect()->route('postcatalog.index');
        }
  
        return view('admin.postcatalog.postcatalogedit', compact('detail','postcatalogList'));
    }

    public function editPostCatalog(Request $request, $id=0)
    {
        $request->validate(
            [
                'tendm' => 'required|unique:danhmucbaiviet'
                
        ],
            [
                'tendm.required' => '*Tiêu đề bắt buộc nhập',
                'tendm.unique' => '*Tên danh mục đã tồn tại',
        ]);
        
       
    

            $dataUpdate = [
                $request->tendm,
  
            ];
        
    
          
        $this->postcatalog->updatePostCatalog($dataUpdate, $id);

        return redirect()->route('postcatalog.index');
    }

    public function deletePostCatalog($id)
    {
        $posts = $this->post->countPost($id);
        if(!empty($id))
        {
            if($posts->count()>0)
            {
                    // foreach($posts as $data)
                    // {
                    //     $this->post->deletePost($data->mabv);
                    //     $this->postcatalog->deletePostCatalog($id);
                    // }
                return redirect()->route('postcatalog.index');
            }else{
                $this->postcatalog->deletePostCatalog($id);
                return redirect()->route('postcatalog.index');
            }
            
        }else{
            return redirect()->route('postcatalog.index');
        }

    }

    public function search(Request $request)
    {       
    
        $postcatalogList = $this->postcatalog->searchPostCatalog($request->txtkey);
        
        return view('admin.postcatalog.postcatalog', compact('postcatalogList'));
    }
}
