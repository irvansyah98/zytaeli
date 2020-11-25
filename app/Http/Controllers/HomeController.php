<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function dashboard()
    {
        $client = new \GuzzleHttp\Client();
        $get_order = $client->request('GET', 'https://api-test.godig1tal.com/order/all_order');
        $get_customer = $client->request('GET', 'https://api-test.godig1tal.com/customer/all_customer');
        $get_product = $client->request('GET', 'https://api-test.godig1tal.com/product/all_product');

        $order = json_decode($get_order->getBody());
        $customer = json_decode($get_customer->getBody());
        $product = json_decode($get_product->getBody());

        $data['count_order'] = count($order->data);
        $data['count_customer'] = count($customer->data);
        $data['count_product'] = count($product->data);

        $url_terlaris = "https://api-test.godig1tal.com/order/top_10_product";
    
        $response_terlaris = $client->request('POST', $url_terlaris, [
            'form_params' => [
                'region' => '',
                'year' => '',
            ]
        ]);

        $response_terlaris2 = json_decode($response_terlaris->getBody());

        $data['produk_terlaris'] = $response_terlaris2->data;

        $url_kurangterlaris = "https://api-test.godig1tal.com/order/worst_10_product";
    
        $response_kurangterlaris = $client->request('POST', $url_kurangterlaris, [
            'form_params' => [
                'region' => '',
                'year' => '',
            ]
        ]);

        $response_kurangterlaris2 = json_decode($response_kurangterlaris->getBody());

        $data['produk_kurang_terlaris'] = $response_kurangterlaris2->data;

        $url_sales = "https://api-test.godig1tal.com/order/sales_region_yearly";
    
        $response_sales = $client->request('POST', $url_sales, [
            'form_params' => [
                'region' => '',
            ]
        ]);

        $response_sales2 = json_decode($response_sales->getBody());

        $data['sales'] = $response_sales2->data;

        $url_customer = "https://api-test.godig1tal.com/order/customer_ot_year";
    
        $response_customer = $client->request('POST', $url_customer, [
            'form_params' => [
                'region' => '',
            ]
        ]);

        $response_customer2 = json_decode($response_customer->getBody());

        $data['coty'] = $response_customer2->data;

        // var_dump($request->getBody()->getContents()).die();
        return view('admin.pages.dashboard.index',$data);
    }

    public function order_south(Request $request){
        $client = new \GuzzleHttp\Client();
        $url = "https://api-test.godig1tal.com/order/range_date_region_order";
    
        $response = $client->request('POST', $url, [
            'form_params' => [
                'region' => 'South',
                'date_start' => $request->get('date_start') ? $request->get('date_start') : '',
                'date_end' => $request->get('date_end') ? $request->get('date_end') : '',
            ]
        ]);

        $response2 = json_decode($response->getBody());

        $data['data'] = $response2->data;
        return view('admin.pages.order.south',$data);
    }

    public function order_west(Request $request){
        $client = new \GuzzleHttp\Client();
        $url = "https://api-test.godig1tal.com/order/range_date_region_order";
    
        $response = $client->request('POST', $url, [
            'form_params' => [
                'region' => 'West',
                'date_start' => $request->get('date_start') ? $request->get('date_start') : '',
                'date_end' => $request->get('date_end') ? $request->get('date_end') : '',
            ]
        ]);

        $response2 = json_decode($response->getBody());

        $data['data'] = $response2->data;
        return view('admin.pages.order.west',$data);
    }

    public function order_east(Request $request){
        $client = new \GuzzleHttp\Client();
        $url = "https://api-test.godig1tal.com/order/range_date_region_order";
    
        $response = $client->request('POST', $url, [
            'form_params' => [
                'region' => 'East',
                'date_start' => $request->get('date_start') ? $request->get('date_start') : '',
                'date_end' => $request->get('date_end') ? $request->get('date_end') : '',
            ]
        ]);

        $response2 = json_decode($response->getBody());

        $data['data'] = $response2->data;
        return view('admin.pages.order.east',$data);
    }

    public function order_central(Request $request){
        $client = new \GuzzleHttp\Client();
        $url = "https://api-test.godig1tal.com/order/range_date_region_order";
    
        $response = $client->request('POST', $url, [
            'form_params' => [
                'region' => 'Central',
                'date_start' => $request->get('date_start') ? $request->get('date_start') : '',
                'date_end' => $request->get('date_end') ? $request->get('date_end') : '',
            ]
        ]);

        $response2 = json_decode($response->getBody());

        $data['data'] = $response2->data;
        return view('admin.pages.order.central',$data);
    }

    public function add_order(){
        $client = new \GuzzleHttp\Client();
        $get_customer = $client->request('GET', 'https://api-test.godig1tal.com/customer/all_customer');
        $get_product = $client->request('GET', 'https://api-test.godig1tal.com/product/all_product');

        $data['customer'] = json_decode($get_customer->getBody());
        $data['product'] = json_decode($get_product->getBody());

        return view('admin.pages.add_order.index',$data);
    }

    public function submit_order(){
        $client = new \GuzzleHttp\Client();
        $url = "https://api-test.godig1tal.com/order/new_order";

        $get_order = $client->request('GET', 'https://api-test.godig1tal.com/order/all_order');
        $order = json_decode($get_order->getBody());
        $count_order = count($order->data);

        $count = 100000 + $count_order;
    
        $response = $client->request('POST', $url, [
            'form_params' => [
                'order_id' => "CA-".date('Y')."-".$count,
                'customer_id' => request('customer_id'),
                'product_id' => request('product_id'),
                'region' => request('region'),
                'sales' => request('sales'),
                'date' => date('Y-m-d'),
            ]
        ]);

        $response2 = json_decode($response->getBody());

        if($response2->status == '200 - success'){
            return redirect('/');
        }else{
            return redirect()->back();
        }
    }
}
