<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
  
  public function __construct()
   {
     $this->middleware('auth', ['except' => ['getActivate', 'anotherMethod','index','ProductCategoriesPage','ProductDetailsPage','CheckoutPage','SignUpPage','SignInPage','ResetPasswordPage','ResetPasswordPageReset']]);
   }
  
  //This if for frontend part
   public function index()
    {
    	return view('frontend.index');
    }

   public function ProductCategoriesPage()
    {
    	return view('frontend.ProductCategoriesPage');
    }

   public function ProductDetailsPage()
    {
    	return view('frontend.ProductDetailsPage');
    }

   public function CheckoutPage()
    {
    	return view('frontend.CheckoutPage');	
    }

   public function OrderConfirmationPage()
    {
    	return view('frontend.OrderConfirmationPage');
    }   

   public function SignUpPage()
    {
    	return view('frontend.SignUpPage');
    }

   public function ResetPasswordPage()
    {
    	return view('frontend.ResetPasswordPage');
    }    
   /*public function ResetPasswordPageReset()
    {
    	return view('frontend.ResetPasswordPageReset');
    }*/

   public function SignInPage()
    {
    	return view('frontend.SignInPage');
    }        

   public function UserOrderHistoryPage()
    {
    	return view('frontend.User-OrderHistoryPage');
    }   
   public function UserMyProfilePage()
    {
    	return view('frontend.User-MyProfilePage');
    }    

   public function UserMyProfilePageEdit()
    {
    	return view('frontend.User-MyProfilePage-Edit');
    }

    //This part is now for backed part


    public function Dashboard()
    {
     return view('backend.Dashboard'); 
    }

    public function OrderListingPage()
    {
      return view('backend.OrderListingPage');
    }

    /*public function CategoryPage()
     {
       return view('backend.CategoryPage');
     } 

     public function CategoryPageAddCategory()
     {
      return view('backend.CategoryPageAddCategory');
     }

     public function CategoryPageEditCategory()
     {
      return view('backend.CategoryPageEditCategory');
     }*/

      public function CategoryPageListattributes()
      {
        return view('backend.CategoryPageListattributes');
      }

      public function CategoryPageProductListing()
      {
        return view('backend.CategoryPageProductListing');
      }    

     /* public function ProductsPage()
      {
        return view('backend.ProductsPage');
      }    
      
      public function  ProductsPageAddProduct()
      {
        return view('backend.ProductsPageAddProduct');
      }    
      
      public function ProductsPageEditProduct()
      {
        return view('backend.ProductsPageEditProduct');
      }*/
      
      public function BannersPage()
      {
        return view('backend.BannersPage');
      }

      public function StaticPages()
      {
        return view('backend.StaticPages');
      }        
}
