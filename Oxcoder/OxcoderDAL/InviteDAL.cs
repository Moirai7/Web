using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;

namespace OxcoderDAL
{
    public class InviteDAL : OxcoderIDAL.InviteIDAL
    {
        public int GetInviteNumByEntp(string entpId)
        {
            String sql = "select Enterprice_Invite_Num from [Enterprice] as c where Enterprice_ID=@entpId";
            SqlParameter[] par ={
                                    new SqlParameter("@entpId",SqlDbType.UniqueIdentifier,50),
                                };
            par[0].Value = new Guid(entpId);
            return Convert.ToInt32(Common.DbHelperSQL.Query(sql.ToString(), par).Tables[0].Rows[0][0]);
        }
        public bool MinInviteNumByEntp(string entpId, int minNum)
        {
            String sql = "update Enterprice set Enterprice_Invite_Num = Enterprice_Invite_Num - @minNum where Enterprice_ID=@entpId";
            SqlParameter[] par ={
                                    new SqlParameter("@minNum",SqlDbType.Int,50),
                                    new SqlParameter("@entpId",SqlDbType.UniqueIdentifier,50),
                                };
            par[0].Value = minNum;
            par[1].Value = new Guid(entpId);
            if (Common.DbHelperSQL.ExecuteSql(sql.ToString(), par) != 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        public bool PlusInviteNumByEntp(string entpId, int plusNum)
        {
            String sql = "update Enterprice set Enterprice_Invite_Num = Enterprice_Invite_Num + @plusNum where Enterprice_ID=@entpId";
            SqlParameter[] par ={
                                    new SqlParameter("@plusNum",SqlDbType.Int,50),
                                    new SqlParameter("@entpId",SqlDbType.UniqueIdentifier,50),
                                };
            par[0].Value = plusNum;
            par[1].Value = new Guid(entpId);
            if (Common.DbHelperSQL.ExecuteSql(sql.ToString(), par) != 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
}
