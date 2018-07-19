using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Web.Enterprise
{
    public partial class Buy : System.Web.UI.Page
    {
        public Model.Invoice invoice = new Model.Invoice();
        
        public string Name
        {
            get
            {
                if (Session["enterpriceName"] != null)
                {
                    return Session["enterpriceName"].ToString();
                }
                else
                {
                    Session["enterpriceName"] = "dyt有限公司";
                }
                return "公司";
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                SetBind();
            }
        }
        
        private void SetBind()
        {
            invoice.invoiceID = System.Guid.NewGuid();
            invoice.invoiceHead = Request.Form["corpname"];
            invoice.invoiceContent = Request.Form["receiptcontent"];
            invoice.invoiceType = Request.Form["receipttype"];
            invoice.invoiceAddress = Request.Form["receiptaddress"];
            invoice.invoiceType = Request.Form["phone"];

            if (Request.Form["type"].ToString().Equals("4"))
            {
                orderDetail.InnerHtml = "<input id=\"payment-url\" type=\"hidden\" value=\"https://mapi.alipay.com/gateway.do?_input_charset=utf-8&amp;body=套餐二&amp;logistics_fee=0.00&amp;logistics_payment=SELLER_PAY&amp;logistics_type=EXPRESS&amp;notify_url=http://www.oxcoder.com/hr-payment-notify.action&amp;out_trade_no=1432099044245&amp;partner=2088002081390452&amp;payment_type=1&amp;price=1900&amp;quantity=1&amp;receive_address=oxcoder&amp;receive_mobile=13312341234&amp;receive_name=oxcoder&amp;receive_phone=0571-88158090&amp;receive_zip=100044&amp;return_url=http://www.oxcoder.com/hr-payment-return.action&amp;seller_email=daneiku@yahoo.com.cn&amp;service=create_partner_trade_by_buyer&amp;show_url=http://www.oxcoder.com/sub-payment-choose.action?type=4&amp;sign=63583c7ff3fbd64a649f8f94950d0b28&amp;sign_type=MD5&amp;subject=套餐一\"><h2 class=\"grey\">感谢您购买oxcoder套餐4</h2><p>商品详情： 80个邀请+4个挑战</p><p>应付金额：1900元</p><span class=\"help-block\"><a class=\"btn btn-primary\" href=\"https://mapi.alipay.com/gateway.do?_input_charset=utf-8&body=%E5%A5%97%E9%A4%90%E4%BA%8C&logistics_fee=0.00&logistics_payment=SELLER_PAY&logistics_type=EXPRESS&notify_url=http://www.oxcoder.com/hr-payment-notify.action&out_trade_no=1432099044245&partner=2088002081390452&payment_type=1&price=1900&quantity=1&receive_address=oxcoder&receive_mobile=13312341234&receive_name=oxcoder&receive_phone=0571-88158090&receive_zip=100044&return_url=http://www.oxcoder.com/hr-payment-return.action&seller_email=daneiku@yahoo.com.cn&service=create_partner_trade_by_buyer&show_url=http://www.oxcoder.com/sub-payment-choose.action?type=4&sign=63583c7ff3fbd64a649f8f94950d0b28&sign_type=MD5&subject=%E5%A5%97%E9%A4%90%E4%B8%80\">去付款</a></span>";
            }
            else if (Request.Form["type"].ToString().Equals("5"))
            {
                orderDetail.InnerHtml = "<input id=\"payment-url\" type=\"hidden\" value=\"https://mapi.alipay.com/gateway.do?_input_charset=utf-8&amp;body=套餐二&amp;logistics_fee=0.00&amp;logistics_payment=SELLER_PAY&amp;logistics_type=EXPRESS&amp;notify_url=http://www.oxcoder.com/hr-payment-notify.action&amp;out_trade_no=1432099044245&amp;partner=2088002081390452&amp;payment_type=1&amp;price=1900&amp;quantity=1&amp;receive_address=oxcoder&amp;receive_mobile=13312341234&amp;receive_name=oxcoder&amp;receive_phone=0571-88158090&amp;receive_zip=100044&amp;return_url=http://www.oxcoder.com/hr-payment-return.action&amp;seller_email=daneiku@yahoo.com.cn&amp;service=create_partner_trade_by_buyer&amp;show_url=http://www.oxcoder.com/sub-payment-choose.action?type=4&amp;sign=63583c7ff3fbd64a649f8f94950d0b28&amp;sign_type=MD5&amp;subject=套餐一\"><h2 class=\"grey\">感谢您购买oxcoder套餐5</h2><p>商品详情： 400个邀请+20个挑战</p><p>应付金额：7900元</p><span class=\"help-block\"><a class=\"btn btn-primary\" href=\"https://mapi.alipay.com/gateway.do?_input_charset=utf-8&body=%E5%A5%97%E9%A4%90%E4%BA%8C&logistics_fee=0.00&logistics_payment=SELLER_PAY&logistics_type=EXPRESS&notify_url=http://www.oxcoder.com/hr-payment-notify.action&out_trade_no=1432099044245&partner=2088002081390452&payment_type=1&price=1900&quantity=1&receive_address=oxcoder&receive_mobile=13312341234&receive_name=oxcoder&receive_phone=0571-88158090&receive_zip=100044&return_url=http://www.oxcoder.com/hr-payment-return.action&seller_email=daneiku@yahoo.com.cn&service=create_partner_trade_by_buyer&show_url=http://www.oxcoder.com/sub-payment-choose.action?type=4&sign=63583c7ff3fbd64a649f8f94950d0b28&sign_type=MD5&subject=%E5%A5%97%E9%A4%90%E4%B8%80\">去付款</a></span>";
            }
            else
            {
                Response.Write("<script>alert(\"订单错误，请返回重新选择！\");</script>");
            }
            
            Page.DataBind();
        }
    }
}