using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;

/// <summary>
/// 搜索 的摘要说明
/// 此类是 BL 的实现类
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/06/09
/// 
namespace OxcoderBL
{
    public class QuizInfoBL:OxcoderIBL.QuizInfoIBL
    {
        public DataSet QuizInfo(string id)
        {
            OxcoderIDAL.QuizInfoIDAL en = new OxcoderDAL.QuizInfoDAL();
            return en.QuizInfo(id);
        }
    }
}
