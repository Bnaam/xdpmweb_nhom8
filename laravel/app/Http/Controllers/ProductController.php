<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use App\Models\ProductModel;

use Illuminate\Support\Facades\DB;




class ProductController extends Controller
{
    //
    private $product;

  

    public function __construct()
    {
        $this->product = new ProductModel();
    }
  

    public function index()
    {       
        $productList = $this->product->getAllProducts();

        
        
        return view('admin.products.products', compact('productList'));
    }

    public function addProductForm()
    {      
        $productCatalogList = $this->product->getAllProductCatalog(); 

        return view('admin.products.productadd', compact('productCatalogList'));
    }

    public function addProduct(Request $request)
    {
        $request->validate(
            [
                'txt_tensp' => 'required',
                'txt_Giamoi' => 'required|min:0',
                'txt_soluongsp' => 'required',
                'txt_mau' => 'required',
               
                'cbx_danhmuc' => 'required',
                
           
        ],
            [
                'txt_tensp.required' => '*Vui lòng điền tên sản phẩm',
                'txt_Giamoi.required' => '*Vui lòng nhập giá',
                'txt_Giamoi.min' => '*Vui lòng nhập giá > 0',
                'txt_soluongsp.required' => '*Vui lòng nhập số lượng',
              
                'cbx_danhmuc.required' => '*Vui lòng danh mục sản phẩm',
      
              
        ]);

        $name =  $request->file_avatar->getClientOriginalName();
        $request->file('file_avatar')->move('uploads/product',  $name);


        $data = [
            $request->txt_tensp,
            $request->txt_Giamoi,
            $request->txt_soluongsp,
            $request->txt_mau,
            $request->file_avatar->getClientOriginalName(),
            $request->cbx_danhmuc,
            $request->txt_mota,
        
        ];

        $this->product->addProduct($data);
        Session::put('message','Thêm thành công');
        Session::put('color','green');
        return redirect()->route('products.index');
    }

    public function editProductForm($id)
    {       
        $productList = $this->product->getAllProductCatalog(); 

        if(!empty($id))
        {
            $detail =  $this->product->getDetail($id);
            $detail = $detail[0];
     
        }else{
            return redirect()->route('products.index');
        }
  
        return view('admin.products.productedit', compact('detail','productList'));
    }

    public function editProduct(Request $request, $id=0)
    {
        $request->validate(
            [
                'txt_tensp' => 'required',
                'txt_Giamoi' => 'required|min:0',
                'txt_soluongsp' => 'required',
                'txt_mau' => 'required',
                
                'cbx_danhmuc' => 'required',
                
           
        ],
            [
                'txt_tensp.required' => '*Vui lòng điền tên sản phẩm',
                'txt_Giamoi.required' => '*Vui lòng nhập giá',
                'txt_Giamoi.min' => '*Vui lòng nhập giá > 0',
                'txt_soluongsp.required' => '*Vui lòng nhập số lượng',
               
                'cbx_danhmuc.required' => '*Vui lòng danh mục sản phẩm',
      
              
        ]);
        
        $productList = $this->product->getDetail($id);
        
        if(empty($request->file_avatar))
        {
            $request->file_avatar = $productList[0]->hinh;

            $dataUpdate = [
                $request->txt_tensp,
                $request->txt_Giamoi,
                $request->txt_soluongsp,
                $request->txt_mau,
                $request->file_avatar,
                $request->cbx_danhmuc,
                $request->txt_mota,
            ];
        }else{
            $dataUpdate = [
                $request->txt_tensp,
                $request->txt_Giamoi,
                $request->txt_soluongsp,
                $request->txt_mau,
                $request->file_avatar->getClientOriginalName(),
                $request->cbx_danhmuc,
                $request->txt_mota,
            ];
            $name =  $request->file_avatar->getClientOriginalName();
        $request->file('file_avatar')->move('uploads/product',  $name);
        }
      
        $this->product->updateProduct($dataUpdate, $id);

        return redirect()->route('products.index');
    }

    public function deleteProduct($id)
    {
        if(!empty($id))
        {
            $this->product->deleteProduct($id);
            return redirect()->route('products.index');
        }else{
            return redirect()->route('products.index');
        }

    }

    public function search(Request $request)
    {       
    
        $productList = $this->product->searchProduct($request->txtkey);
        
        return view('admin.products.products', compact('productList'));
    }
}
