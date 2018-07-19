using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;

namespace OxcoderIDAL
{
    public interface PayIDAL
    {
        DataSet GetAccountDetail(string entpId);
    }
}
