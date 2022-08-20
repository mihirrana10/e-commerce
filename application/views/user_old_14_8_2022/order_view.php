public function manage_order($param1="",$param2="",$param3="")
{
    if($param1=="create")
    {
        $data["order_invoice_number"]=$this->input->post("txt_order_invoice_number");$data["order_date"]=$this->input->post("txt_order_date");$data["order_status"]=$this->input->post("rdo_order_status");$data["order_amount"]=$this->input->post("txt_order_amount");$data["order_coupon_id"]=$this->input->post("");$data["order_coupon_discount_amount"]=$this->input->post("");$data["order_shipping_amount"]=$this->input->post("");$data["order_final_amount"]=$this->input->post("");$data["order_billing_name"]=$this->input->post("");$data["order_billing_company_name"]=$this->input->post("");$data["order_billing_address_line1"]=$this->input->post("");$data["order_billing_address_line2"]=$this->input->post("");$data["order_billing_country_id"]=$this->input->post("");$data["order_billing_state_id"]=$this->input->post("");$data["order_billing_city_id"]=$this->input->post("");$data["order_billing_pincode"]=$this->input->post("");$data["order_billing_email"]=$this->input->post("");$data["order_billing_phone_number"]=$this->input->post("");$data["order_billing_shipping_address_same"]=$this->input->post("");$data["order_shipping_name"]=$this->input->post("");$data["order_shipping_company_name"]=$this->input->post("");$data["order_shipping_address_line1"]=$this->input->post("");$data["order_shipping_address_line2"]=$this->input->post("");$data["order_shipping_country_id"]=$this->input->post("");$data["order_shipping_state_id"]=$this->input->post("");$data["order_shipping_city_id"]=$this->input->post("");$data["order_shipping_pincode"]=$this->input->post("");$data["order_shipping_email"]=$this->input->post("");$data["order_shipping_phone_number"]=$this->input->post("");$data["order_courier_receipt_id"]=$this->input->post("");$data["order_is_returned"]=$this->input->post("");$data["order_payment_type"]=$this->input->post("");$data["order_notes"]=$this->input->post("");$data["customer_id"]=$this->input->post("");
        $this->db->insert("tbl_order",$data);
        redirect(base_url()."admin/manage_order");
    }
    if($param1=="edit" && $param2=="do_update")
    {
        $data["order_invoice_number"]=$this->input->post("txt_order_invoice_number");$data["order_date"]=$this->input->post("txt_order_date");$data["order_status"]=$this->input->post("rdo_order_status");$data["order_amount"]=$this->input->post("txt_order_amount");$data["order_coupon_id"]=$this->input->post("");$data["order_coupon_discount_amount"]=$this->input->post("");$data["order_shipping_amount"]=$this->input->post("");$data["order_final_amount"]=$this->input->post("");$data["order_billing_name"]=$this->input->post("");$data["order_billing_company_name"]=$this->input->post("");$data["order_billing_address_line1"]=$this->input->post("");$data["order_billing_address_line2"]=$this->input->post("");$data["order_billing_country_id"]=$this->input->post("");$data["order_billing_state_id"]=$this->input->post("");$data["order_billing_city_id"]=$this->input->post("");$data["order_billing_pincode"]=$this->input->post("");$data["order_billing_email"]=$this->input->post("");$data["order_billing_phone_number"]=$this->input->post("");$data["order_billing_shipping_address_same"]=$this->input->post("");$data["order_shipping_name"]=$this->input->post("");$data["order_shipping_company_name"]=$this->input->post("");$data["order_shipping_address_line1"]=$this->input->post("");$data["order_shipping_address_line2"]=$this->input->post("");$data["order_shipping_country_id"]=$this->input->post("");$data["order_shipping_state_id"]=$this->input->post("");$data["order_shipping_city_id"]=$this->input->post("");$data["order_shipping_pincode"]=$this->input->post("");$data["order_shipping_email"]=$this->input->post("");$data["order_shipping_phone_number"]=$this->input->post("");$data["order_courier_receipt_id"]=$this->input->post("");$data["order_is_returned"]=$this->input->post("");$data["order_payment_type"]=$this->input->post("");$data["order_notes"]=$this->input->post("");$data["customer_id"]=$this->input->post("");
        $this->db->where("order_id",$param3);
        $this->db->update("tbl_order",$data);
        redirect(base_url()."admin/manage_order");
    }
    else if($param1=="edit")
    {
        $page_data["edit_profile"]=$this->db->get_where("tbl_order",array("order_id"=>$param2));
    }
    if($param1=="delete")
    {
        $this->db->where("order_id",$param2);
        $this->db->delete("tbl_order");
        redirect(base_url()."admin/manage_order");
    }

    /* paging starts here */
    $per_page=$_SESSION["per_page"];

    
        if($param1=="search" && trim($this->input->post("txt_search"))!="")
        {
            $search = trim($this->input->post("txt_search"));
            $search = htmlspecialchars($search);
            $this->db->like("order_invoice_number", $search,"after");
            
            $page_data["resultset"]=$this->db->get("tbl_order");
            $resultset=$this->db->get("tbl_order");
            $total_rows=$resultset->num_rows();
            $page_data["search_data"]=$search;          
           }
        else
        {
               $this->db->limit($per_page,$param1);
               
            $page_data["resultset"]=$this->db->get("tbl_order");
            $resultset=$this->db->get("tbl_order");
            $total_rows=$resultset->num_rows();
               $page_data["search_data"]="";           
            $page_data["paging_string"]=$this->paging_init("manage_order",$total_rows,$per_page);
          }
    
    $page_data["start_position"]=intval($param1)+1;    
    $page_data["page_title"]="Order View";
    $page_data["page_name"]="order_view";

    $this->load->view("admin/index",$page_data);
} 