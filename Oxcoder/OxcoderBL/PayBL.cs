using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;

namespace OxcoderBL
{
    public class PayBL:OxcoderIBL.PayIBL
    {
        public DataSet GetAccountDetail(string entpId)
        {
            OxcoderIDAL.PayIDAL pidal = new OxcoderDAL.PayDAL();
            return pidal.GetAccountDetail(entpId);
        }
    }
}
