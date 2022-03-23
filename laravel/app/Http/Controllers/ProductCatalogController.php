<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use App\Models\ProductCatalogModel;

use Illuminate\Support\Facades\DB;

class ProductCatalogController extends Controller
{
    //
    private $productcatalog;

    public function __construct()
    {
        $this->productcatalog = new productcatalogModel();
    }
  

    public function index()
    {       
        $productcatalogList = $this->productcatalog->getAllProductCatalog();

        
        
        return view('admin.productcatalog.productcatalog', compact('productcatalogList'));
    }

    public function addProductCatalogForm()
    {      
 
        return view('admin.productcatalog.productcatalogadd');
    }

    public function addProductCatalog(Request $request)
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

        $this->productcatalog->addProductCatalog($data);

        return redirect()->route('productcatalog.index');
    }

    public function editProductCatalogForm($id)
    {       
        $productcatalogList = $this->productcatalog->getAllProductCatalog(); 

        if(!empty($id))
        {
            $detail =  $this->productcatalog->getDetail($id);
            $detail = $detail[0];
     
        }else{
            return redirect()->route('productcatalog.index');
        }
  
        return view('admin.productcatalog.productcatalogedit', compact('detail','productcatalogList'));
    }

    public function editProductCatalog(Request $request, $id=0)
    {
        $request->validate(
            [
                'tendm' => 'required|unique:danhmucsanpham'
                
        ],
            [
                'tendm.required' => '*Tiêu đề bắt buộc nhập',
                'tendm.unique' => '*Tên danh mục đã tồn tại',
        ]);
        

            $dataUpdate = [
                $request->tendm,
  
            ];
        
    
          
        $this->productcatalog->updateProductCatalog($dataUpdate, $id);

        return redirect()->route('productcatalog.index');
    }

    public function deleteProductCatalog($id)
    {
        if(!empty($id))
        {
            $this->productcatalog->deleteProductCatalog($id);
            return redirect()->route('productcatalog.index');
        }else{
            return redirect()->route('productcatalog.index');
        }

    }

    public function search(Request $request)
    {       
    
        $productcatalogList = $this->productcatalog->searchProductCatalog($request->txtkey);
        
        return view('admin.productcatalog.productcatalog', compact('productcatalogList'));
    }
}
