using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;

/// <summary>
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
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.QuizInfoIDAL en = factory.getQuizInstance();
            return en.QuizInfo(id);
        }

        public DataSet AllQuizInfo()
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.QuizInfoIDAL en = factory.getQuizInstance();
            return en.AllQuizInfo();
        }

        public bool insertAQuiz(Model.QuizForDB quiz)
        {
            OxcoderIFactory.IFactory factory = new OxcoderFactory.SqlSeverFactory();
            OxcoderIDAL.QuizInfoIDAL en = factory.getQuizInstance();
            if (quiz.Quiz_Type.Equals("php"))
            {
                quiz.Quiz_TypeID = 29;
            }
            else if (quiz.Quiz_Type.Equals("cpp"))
            {
                quiz.Quiz_TypeID = 1;
            }
            else if (quiz.Quiz_Type.Equals("python"))
            {
                quiz.Quiz_TypeID = 4;
            }
            else if (quiz.Quiz_Type.Equals("c"))
            {
                quiz.Quiz_TypeID = 34;
            }
            else if (quiz.Quiz_Type.Equals("java"))
            {
                quiz.Quiz_TypeID = 10;
            }
            return en.insertAQuiz(quiz);
        }
    }
}
