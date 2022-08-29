<?php 
session_start();
class user extends CI_Controller
{
    public function index()
	{
        $page_data["resultset"]=$this->db->get("tbl_product_new");
        $resultset=$this->db->get("tbl_product_new");

        
		$this->load->view('user/index',$page_data);
	}

    public function manage_cart()
	{
		$this->load->view('user/cartview');
	}
    public function manage_checkout()
	{
		$this->load->view('user/checkoutview');
	}
	public function manage_wishlist()
	{
        // $page_data['active_id']='wishlist';
        if(!isset($_SESSION["customer_id"]))
        {
            // redirect(base_url().'login');
        }
		$this->load->view('user/wishlistview');
	}
	public function manage_myaccount()
	{
		$this->load->view('user/myaccountview');
	}
	public function manage_about()
	{
		$this->load->view('user/aboutview');
	}
	public function manage_contact()
	{
		$this->load->view('user/contactview');
	}
	public function manage_faq()
	{
		$this->load->view('user/faqview');
	}
	public function manage_product_detail($product_slug="",$param1="")
	{

		 
		//  $product_id         = 0;
		//  if (isset($param1) && trim($param1) != "") {
		// 	 $product_id         = $param1;
			
		//  }

		// $page_data["resultset"]=$this->db->get_where("tbl_product_new", array(
        //     'product_id' => $product_id
        // ));
        
        // print_r($page_data["resultset"]);
        
        $page_data["resultset"]=$this->db->get_where('tbl_product_new',array('product_seo_slug'=>$product_slug));
        // $page_data['item']=$resultset->result();

        // echo "<pre>";
        //     print_r($page_data["resultset"]);
        // echo "</pre>";

		$this->load->view('user/product_detailview',$page_data);
	}


	public function manage_user($param1="",$param2="",$param3="")
	{
		if($param1=="create")
		{
			$data["user_email"]=$this->input->post("txt_user_email");
			$data["user_password"]=$this->input->post("txt_user_password");
			$this->db->insert("tbl_user",$data);
			redirect(base_url()."user/index");
		}
		$this->load->view('user/login_view');
	}

	public function place_order()
    {
        $query="SELECT max( order_invoice_number ) as `last_invoice_number` FROM tbl_order";

        $invoice_num_res=$this->db->query($query);
        $invoice_num_row=$invoice_num_res->result();

        $data['order_invoice_number']=$invoice_num_row[0]->last_invoice_number+1;
        /*
        print("<pre>");
        print_r($_POST);
        print("</pre>");
        */

        $data['order_billing_name']=$this->input->post('txt_first_name')." ".$this->input->post('txt_last_name');
        $data['order_billing_company_name']=$this->input->post('txt_company_name');
        $data['order_billing_country_id']=$this->input->post('cmb_country');
        $data['order_billing_state_id']=$this->input->post('cmb_state');
        $data['order_billing_city_id']=$this->input->post('cmb_city');
        $data['order_billing_address_line1']=$this->input->post('txt_address_line1');
        $data['order_billing_address_line2']=$this->input->post('txt_address_line2');
        $data['order_billing_pincode']=$this->input->post('txt_pincode');
        $data['order_billing_phone_number']=$this->input->post('txt_phone');
        $data['order_billing_email']=$this->input->post('txt_email');
        $data['order_notes']=$this->input->post('txt_order_notes');

        if(isset($_SESSION["customer_id"]))
        {
            $data['customer_id']=$_SESSION["customer_id"];
        }

        if(isset($_POST["create_account"]))
        {
            if($this->input->post('create_account')=="on")
            {
                $customer_data['customer_full_name']=$data['order_billing_name'];
                $customer_data['customer_status']='Active';
                $customer_data['customer_email_address']=$data['order_billing_email'];
                $customer_data['customer_mobile_number']=$data['order_billing_phone_number'];
                $customer_data['customer_country_id']=$data['order_billing_country_id'];
                $customer_data['customer_state_id']=$data['order_billing_state_id'];
                $customer_data['customer_city']=$data['order_billing_city_id'];
                $customer_data['customer_doj']=date('Y-m-d');


                //$this->db->insert('tbl_customer',$data);

                $exist_cust_res=$this->db->get_where('tbl_customer',array('customer_email_address'=>$data['order_billing_email']));

                if($exist_cust_res->num_rows()>0)
                {
                    $exist_cust_row=$exist_cust_res->result();
                    $data['customer_id']=$exist_cust_row[0]->customer_id;
                }
                else
                {
                    $this->db->insert('tbl_customer',$customer_data);
                    $data['customer_id']=$this->db->insert_id();
                }
            }
        }

        if(isset($_POST["chk_shiping_address"]))
        {
            if($this->input->post('chk_shiping_address')=="on")
            {
                $data['order_billing_shipping_address_same']='No';

                $data['order_shipping_name']=$this->input->post('txt_ship_first_name')." ".$this->input->post('txt_ship_last_name');
                $data['order_shipping_company_name']=$this->input->post('txt_ship_company_name');
                $data['order_shipping_country_id']=$this->input->post('cmb_ship_country');
                $data['order_shipping_state_id']=$this->input->post('cmb_ship_state');
                $data['order_shipping_city_id']=$this->input->post('cmb_ship_city');
                $data['order_shipping_address_line1']=$this->input->post('txt_ship_address_line1');
                $data['order_shipping_address_line2']=$this->input->post('txt_ship_address_line2');
                $data['order_shipping_pincode']=$this->input->post('txt_ship_pincode');
                $data['order_shipping_phone_number']=$this->input->post('txt_ship_phone');
                $data['order_shipping_email']=$this->input->post('txt_ship_email');
            }


        }

        else
        {
            $data['order_shipping_name']=$data['order_billing_name'];
            $data['order_shipping_company_name']=$data['order_billing_company_name'];
            $data['order_shipping_country_id']=$data['order_billing_country_id'];
            $data['order_shipping_state_id']=$data['order_billing_state_id'];
            $data['order_shipping_city_id']=$data['order_billing_city_id'];
            $data['order_shipping_address_line1']=$data['order_billing_address_line1'];
            $data['order_shipping_address_line2']=$data['order_billing_address_line2'];
            $data['order_shipping_pincode']=$data['order_billing_pincode'];
            $data['order_shipping_phone_number']=$data['order_billing_phone_number'];
            $data['order_shipping_email']=$data['order_billing_email'];
        }

        $this->db->join('tbl_product_new','tbl_cart.product_id=tbl_product_new.product_id');
        $cart_res=$this->db->get_where('tbl_cart',array('tbl_cart.cart_session'=>session_id()));
        
        $total=0;
        $final_total=0;
        foreach($cart_res->result() as $cart_row)
        {   
            $total=$total+($cart_row->product_selling_price*$cart_row->cart_qty);
        }
        $data['order_amount']=$total;
        if(isset($_SESSION["discount_amount"]))
        {
            //$data['order_coupon_id']=date('Y-m-d H:m:s');
            $data['order_coupon_id']=$_SESSION["coupon_id"];
            $data['order_coupon_discount_amount']=$_SESSION["discount_amount"];
        
            $final_total = $total-$_SESSION["discount_amount"];
        }
        else
        {
            $final_total = $total;
        }
        
        $data['order_date']=date('Y-m-d H:m:s');
        $data['order_status']="New";
        //$data['order_amount']=$total;
        /*
        if(isset($_SESSION["discount_amount"]))
        {
        }
        */

        if($this->input->post('txt_payment_type')=="cod")
        {
            $data['order_payment_type']='cod';
        }
        else if($this->input->post('txt_payment_type')=="online")
        {
            $data['order_payment_type']='online';
        }
        $data['order_shipping_amount']="0";
        $data['order_final_amount']=$final_total;

        $this->db->insert('tbl_order',$data);

        $current_order_id=$this->db->insert_id();

        foreach($cart_res->result() as $order_row)
        {
            $order_details_data['order_id']=$current_order_id;
            $order_details_data['product_id']=$order_row->product_id;
            $order_details_data['product_qty']=$order_row->cart_qty;

            $this->db->insert('tbl_order_details',$order_details_data);

        }


        /*
        print("<pre>");
        print_r($data);
        print("</pre>");
        */
        $_SESSION["current_order_id"]=$current_order_id;
        echo "<h1> Current order ".$current_order_id."</h1>";

        if($this->input->post('txt_payment_type')=="cod")
        {
            $_SESSION["mobile_number"] = $data['order_billing_phone_number'];
            //send otp
            echo "Send OTP";

            $otp=rand(100000,999999);


            $up_otp_data['order_otp']=$otp;
            $this->db->where('order_id',$_SESSION["current_order_id"]);
            $this->db->update('tbl_order',$up_otp_data);

            $msg="YOUR OTP FOR THE ORDER ".$otp;
            $msg=urlencode($msg);

            $sms_url="http://login.arihantsms.com/vendorsms/pushsms.aspx?user=vimlaprints&password=vimla1266&msisdn=".$_SESSION["mobile_number"]."&sid=VIMLAA&msg=".$msg."&fl=0&gwid=2";

            $response=file_get_contents($sms_url);
            

           

            /*
            print("<pre>");
            print_r($response);
            print("</pre>");
            */

            redirect(base_url().'user/otp_verify');

        }
        else if($this->input->post('txt_payment_type')=="online")
        {
            //razorpay

            $_SESSION["razorpay_receipt"]=$data['order_invoice_number'];
            $_SESSION["razorpay_amount"]=$data['order_final_amount'];
            $_SESSION["razorpay_name"]=$data['order_billing_name'];
            $_SESSION["razorpay_email"]=$data['order_billing_email'];
            $_SESSION["razorpay_contact"]=$data['order_billing_phone_number'];

            redirect(base_url().'razorpay/pay.php?checkout=manual');
        
        }

                
    }
	
	public function add_to_cart($p_id,$qty="")
    {
        $sid=session_id();
        //echo $sid;
        $cart_query="select * from tbl_cart where product_id='".$p_id."' and 
        cart_session='".$sid."' ";
        $cart_res=$this->db->query($cart_query); 
        if($cart_res->num_rows()>0)
        {
            if(trim($qty)!="" && $qty!=0)
            {
                $update_query="update tbl_cart set cart_qty=".$qty." where cart_session='".$sid."' and product_id='".$p_id."' ";
            }
            else
            {
                $update_query="update tbl_cart set cart_qty=cart_qty+1 where cart_session='".$sid."' and product_id='".$p_id."' ";
            }

            $this->db->query($update_query);
        }
        else
        {

            $insert_data['product_id']=$p_id;
            if(trim($qty)!="" && $qty!=0)
            {
                $insert_data['cart_qty']=$qty;
            }
            else
            {
                $insert_data['cart_qty']='1';
                
            }
            $insert_data['cart_session']=$sid;
            $this->db->insert('tbl_cart',$insert_data);
        }

        $url=$_SERVER["HTTP_REFERER"];
        redirect($url);
    }

	public function update_cart()
    {
        /*print("<pre>");
        print_r($_POST);
        print("</pre>");*/

        for($i=0;$i<count($_POST["txt_id"]);$i++)
        {
            $product_id=$_POST["txt_id"][$i];
            $up_cart_qty=$_POST["txt_qty"][$i];

            $update_cart_query="update tbl_cart set cart_qty='".$up_cart_qty."' where cart_session='".session_id()."' and product_id='".$product_id."' ";

            $this->db->query($update_cart_query);
        }

        $url=$_SERVER["HTTP_REFERER"];
        redirect($url);
    }

	public function remove_cart($id)
    {
        $sid=session_id();
        $query="delete from tbl_cart where cart_session='".$sid."' and product_id='".$id."' ";
        $this->db->query($query);
        $url=$_SERVER["HTTP_REFERER"];
        redirect($url);
    }

	// public function wishlist()
    // {
    //     $page_data['active_id']='wishlist';
    //     if(!isset($_SESSION["customer_id"]))
    //     {
    //         redirect(base_url().'user/register');
    //     }
    //     $this->load->view('user/wishlistview',$page_data);
    // }

	public function remove_wishlist($product_id)
    {
        $query="delete from tbl_wishlist where customer_id='".$_SESSION["customer_id"]."' and product_id='".$product_id."' ";
        
        $this->db->query($query);
        $url=$_SERVER["HTTP_REFERER"];
        redirect($url);
    }
	
	 public function wishlist_add($id)
    {
        if(isset($_SESSION["customer_id"]))
        {
            $data['customer_id']=$_SESSION["customer_id"];
            
            $resultset=$this->db->get_where('tbl_wishlist',array("customer_id"=>$_SESSION["customer_id"],"product_id"=>$id));
            if($resultset->num_rows==0)
            {
                $data['product_id']=$id;
                $this->db->insert("tbl_wishlist",$data);
            }
              
        }
        else
        {
            redirect(base_url()."login");
        }
        $url=$_SERVER["HTTP_REFERER"];
        redirect($url);
        
        // $this->load->view('user/index',$page_data);
    }
	

    public function apply_coupon()
    {
        // print("<pre>");
        // print_r($_POST);
        // print("</pre>");

        $page_data=array();

        $coupon_code = $this->input->post('checkout-discount-input');
        $current_date = date('Y-m-d H:m:s');
        $query="select * from tbl_coupon where BINARY coupon_code='".$coupon_code."' and coupon_status='Active' and '".$current_date."'  between coupon_start_time and coupon_end_time ";

        $res=$this->db->query($query);
        /*if($res->num_rows()>0)
        {
            foreach($res->result() as $row)
            {

                
            }
        }
        */
        if($res->num_rows()==1)
        {
            $row=$res->result();
            $_SESSION["coupon_id"]=$row[0]->coupon_id; 
            $_SESSION['coupon_code']=$row[0]->coupon_code;
            $_SESSION['coupon_on']=$row[0]->coupon_value_on;
            $_SESSION['coupon_value']=$row[0]->coupon_value;
            $url=$_SERVER["HTTP_REFERER"];
            //redirect($url);

            $url = str_replace("/msg", "", $url);
            redirect($url);
            
        }
        else
        {
            //echo "error";
            
            /*$page_data['coupon_msg']='<div class="alert alert-danger" role="alert" ><i class="icon-close"></i> Invalid Coupon Code
            </div>';
            */
            //echo $page_data['coupon_msg'];
            $url=$_SERVER["HTTP_REFERER"];

            redirect($url.'/msg');

        }

        //print_r($page_data);
        //$this->load->view('user/checkout_view',$page_data);


    }

    public function remove_coupon()
    {
        unset($_SESSION['coupon_code']);
        unset($_SESSION['coupon_on']);
        unset($_SESSION['coupon_value']);
        unset($_SESSION['discount_amount']);

        //$url=$_SERVER["HTTP_REFERER"];
        $url=base_url().'user/checkout';
        redirect($url);

    }


    public function manage_category_view($category_slug="")
    {

    //     $page_data['pr_id'] = 0;
    //     $category_id         = 0;
    //     if (isset($param1) && trim($param1) != "") {
    //         $category_id         = $param1;
    //         $page_data['pr_id'] = $param1;
    //     }
        
    //    $page_data["resultset"]=$this->db->get_where("tbl_category", array(
    //        'category_id' => $category_id
    //    ));
    //    $resultset=$this->db->get("tbl_category");

    $page_data["resultset"]=$this->db->get_where('tbl_category',array('category_seo_slug'=>$category_slug));


    

    

    // echo "<pre>";
    //     print_r($page_data["resultset"]);
    // echo "</pre>";    


        $this->load->view('user/category_view',$page_data);
    }

    public function manage_popup_email($param1="",$param2="",$param3="")
    {
            if($param1=="create")
                {
                    $data["subscriber_email"]=$this->input->post("txt_subscriber_email");
                    $this->db->insert("tbl_subscriber",$data);
                    redirect(base_url()."user");
                }
       
    }

    public function product360()
    {
       $this->load->view('user/360product');
    }


}
?>