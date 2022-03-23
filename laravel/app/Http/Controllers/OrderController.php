<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use App\Models\OrderModel;

use Illuminate\Support\Facades\DB;




class OrderController extends Controller
{
    //
    private $Order;

  

    public function __construct()
    {
        $this->Order = new OrderModel();
    }
  

    public function index()
    {       
        $OrderList = $this->Order->getAllOrder();

        
        
        return view('admin.order.order', compact('OrderList'));
    }

   

    public function editOrderForm($id)
    {       
        $OrderDetailList = $this->Order->getAllOrderDetail($id); 

        if(!empty($id))
        {
            $detail =  $this->Order->getDetail($id);
            $detail = $detail[0];
     
        }else{
            return redirect()->route('orders.index');
        }
  
        return view('admin.order.orderedit', compact('detail','OrderDetailList'));
    }

    public function editOrder(Request $request, $id=0)
    {
            $dataUpdate = [
                $request->txt_giaohang,
                $request->cbx_trangthai,
  
            ];
          
        $this->Order->updateOrder($dataUpdate, $id);

        return redirect()->route('orders.index');
    }


    public function search(Request $request)
    {       
    
        $OrderList = $this->Order->searchOrder($request->txtkey);
        
        return view('admin.order.order', compact('OrderList'));
    }
}
