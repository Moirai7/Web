using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;

namespace OxcoderDAL
{
    public class PayDAL:OxcoderIDAL.PayIDAL
    {
        public DataSet GetAccountDetail(string entpId)
        {
            String sql = "select Enterprice_Challenge_Num,Enterprice_Invite_Num from [Enterprice] as c where Enterprice_ID=@entpId";
            SqlParameter[] par ={
                                    new SqlParameter("@entpId",SqlDbType.UniqueIdentifier,50),
                                };
            par[0].Value = new Guid(entpId);
            return Common.DbHelperSQL.Query(sql.ToString(), par);
        }
    }
}
