<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index(Request $request){
       
        if ($request->ajax()) {
            $data = Products::all(); 
            return Datatables::of($data)
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm" data-id="'.$row->id.'" data-toggle="modal" data-target="#exampleModal">Edit</a>';
                    $btn .= ' <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-id="'.$row->id.'" >Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('admin.product.product_content');
    }

    public function store(Request $request)
    {
        $request->validate([
            'supplierName' => 'required|string|max:255',
            'supplierPhone' => 'required|string|max:15',
            'supplierAddress' => 'required|string|max:255',
            'transporterName' => 'required|string|max:255',
            'transporterPhone' => 'required|string|max:15',
            'vehicleNumber' => 'required|string|max:50',
            'vehicleType' => 'required|string|max:50',
            'materialType' => 'required|string|max:50',
            'materialUnit' => 'required|string|max:50',
            'machineType' => 'required|string|max:50',
            'machineNumber' => 'required|string|max:50',
            'dieselCapacity' => 'required|string|max:50',
            'ownedOrRental' => 'required|in:owned,rental',
            'siteAddress' => 'required|string|max:255',
            'siteName' => 'required|string|max:255',
            'siteID' => 'required|string|max:50',
            'siteManager' => 'required|string|max:255',
            'siteLoginPassword' => 'required|string|max:255',
            'productSelect' => 'required|string|max:255',
            'productQuantity' => 'required|integer|min:1',
            'employeeName' => 'required|string|max:255',
            'employeeDesignation' => 'required|string|max:255',
            'employeePhone' => 'required|string|max:15',
            'assignSite' => 'required|string|max:255',
            'id' => 'nullable|exists:products,id'
        ]);
    
        if ($request->id) {
            $product = Products::findOrFail($request->id);
            $product->update([
                'user_id' => Auth::user()->id, // Ensure the user ID is set correctly
                'supplier_name' => $request->supplierName,
                'supplier_phone' => $request->supplierPhone,
                'supplier_address' => $request->supplierAddress,
                'transporter_name' => $request->transporterName,
                'transporter_phone' => $request->transporterPhone,
                'vehicle_number' => $request->vehicleNumber,
                'vehicle_type' => $request->vehicleType,
                'material_type' => $request->materialType,
                'material_unit' => $request->materialUnit,
                'machine_type' => $request->machineType,
                'machine_number' => $request->machineNumber,
                'diesel_capacity' => $request->dieselCapacity,
                'owned_or_rental' => $request->ownedOrRental,
                'site_address' => $request->siteAddress,
                'site_name' => $request->siteName,
                'site_id' => $request->siteID,
                'site_manager' => $request->siteManager,
                'site_login_password' => bcrypt($request->siteLoginPassword), 
                'product_select' => $request->productSelect,
                'product_quantity' => $request->productQuantity,
                'employee_name' => $request->employeeName,
                'employee_designation' => $request->employeeDesignation,
                'employee_phone' => $request->employeePhone,
                'assign_site' => $request->assignSite,
            ]);
            return response()->json(['message' => 'Data updated successfully!'], 200);
        } else {
            
            Products::create([
                'user_id' => Auth::user()->id, 
                'supplier_name' => $request->supplierName,
                'supplier_phone' => $request->supplierPhone,
                'supplier_address' => $request->supplierAddress,
                'transporter_name' => $request->transporterName,
                'transporter_phone' => $request->transporterPhone,
                'vehicle_number' => $request->vehicleNumber,
                'vehicle_type' => $request->vehicleType,
                'material_type' => $request->materialType,
                'material_unit' => $request->materialUnit,
                'machine_type' => $request->machineType,
                'machine_number' => $request->machineNumber,
                'diesel_capacity' => $request->dieselCapacity,
                'owned_or_rental' => $request->ownedOrRental,
                'site_address' => $request->siteAddress,
                'site_name' => $request->siteName,
                'site_id' => $request->siteID,
                'site_manager' => $request->siteManager,
                'site_login_password' => bcrypt($request->siteLoginPassword), 
                'product_select' => $request->productSelect,
                'product_quantity' => $request->productQuantity,
                'employee_name' => $request->employeeName,
                'employee_designation' => $request->employeeDesignation,
                'employee_phone' => $request->employeePhone,
                'assign_site' => $request->assignSite,
            ]);
            return response()->json(['message' => 'Data collected successfully!'], 200);
        }
    }

    public function editData($id)
    {
        $product = Products::findOrFail($id); 
        return response()->json(['data' => $product]);
    }


    public function destroy($id)
    {
        $product = Products::find($id);
        
        if ($product) {
            $product->delete();
            return response()->json(['success' => 'Record deleted successfully']);
        }
        return response()->json(['error' => 'Record not found'], 404);
    }

    

}
