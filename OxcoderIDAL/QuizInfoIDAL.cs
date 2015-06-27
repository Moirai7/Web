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
namespace OxcoderIDAL
{
    public interface QuizInfoIDAL
    {
        DataSet AllQuizInfo();
        string QuizName(string id);
        DataSet QuizInfo(string id);
        bool insertAQuiz(Model.QuizForDB quiz);
    }
}
