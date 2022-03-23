<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use App\Models\PostModel;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    private $posts;

    public function __construct()
    {
        $this->posts = new PostModel();
    }
  

    public function index()
    {       
        $postsList = $this->posts->getAllposts();

        
        
        return view('admin.posts.post', compact('postsList'));
    }

    public function addPostForm()
    {      
        $postsList = $this->posts->getAllPostsCatalog(); 
        
        
        return view('admin.posts.postadd', compact('postsList'));
    }

    public function addPost(Request $request)
    {
        $request->validate(
            [
                'tieude' => 'required',
                'cbx_danhmucbv' => 'required',
                'txt_noidung' => 'required|min:10',
                'file_avatar' => 'required',
        ],
            [
                'tieude.required' => '*Tiêu đề bắt buộc nhập',
                'cbx_danhmucbv.required' => '*Vui lòng chọn danh mục bài viết',
                'txt_noidung.required' => '*Vui lòng nhập nội dung',
                'txt_noidung.min' => '*Nội dung phải > 10 ký tự',
                'file_avatar.required' => '*Chon file',
              
        ]);
        $name =  $request->file_avatar->getClientOriginalName();
        $request->file('file_avatar')->move('uploads/post',  $name);
        $data = [
            $request->tieude,
            $request->cbx_danhmucbv,
      
            $request->txt_noidung,
            $request->file_avatar->getClientOriginalName(),
           
        ];

        $this->posts->addPost($data);

        return redirect()->route('posts.index');
    }

    public function editPostForm($id)
    {       
        $postsList = $this->posts->getAllPostsCatalog(); 

        if(!empty($id))
        {
            $detail =  $this->posts->getDetail($id);
            $detail = $detail[0];
     
        }else{
            return redirect()->route('posts.index');
        }
  
        return view('admin.posts.postedit', compact('detail','postsList'));
    }

    public function editPost(Request $request, $id=0)
    {
        $request->validate(
            [
                'tieude' => 'required',
                'cbx_danhmucbv' => 'required',
                'txt_noidung' => 'required|min:10',
                
        ],
            [
                'tieude.required' => '*Tiêu đề bắt buộc nhập',
                'cbx_danhmucbv.required' => '*Vui lòng chọn danh mục bài viết',
                'txt_noidung.required' => '*Vui lòng nhập nội dung',
                'txt_noidung.min' => '*Nội dung phải > 10 ký tự',
        ]);
        
        $postsList = $this->posts->getDetail($id);
        
        if(empty($request->file_avatar))
        {
            $request->file_avatar = $postsList[0]->hinh;

            $dataUpdate = [
                $request->tieude,
                $request->cbx_danhmucbv,
          
                $request->txt_noidung,
                $request->file_avatar,
            ];
        }else{
            $dataUpdate = [
                $request->tieude,
                $request->cbx_danhmucbv,
          
                $request->txt_noidung,
                $request->file_avatar->getClientOriginalName(),
            ];
            $name =  $request->file_avatar->getClientOriginalName();
            $request->file('file_avatar')->move('uploads/post',  $name);
        }
       
       
        $this->posts->updatePost($dataUpdate, $id);

        return redirect()->route('posts.index');
    }

    public function deletePost($id)
    {
        if(!empty($id))
        {
            $this->posts->deletePost($id);
            return redirect()->route('posts.index');
        }else{
            return redirect()->route('posts.index');
        }

    }

    public function search(Request $request)
    {       
    
        $postsList = $this->posts->searchPost($request->txtkey);
        
        return view('admin.posts.post', compact('postsList'));
    }
}
