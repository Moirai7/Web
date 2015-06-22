using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;


/// <summary>
/// 搜索 的摘要说明
/// 此类是 DAL 的接口类
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/06/09
/// 

namespace OxcoderIDAL
{
    public interface SearchChallengeIDAL
    {
        //  Salary 工资范围
        //	Provice 省份
        //	Retype 技术方向
        //	Flag 按热度 时间 薪资 排序
        //	SearchCondition 搜索条件
        DataSet SearchUseCondition(String salary, string provice, int retype, int flag, string searchCondition, int pageindex, int pagesize);
        
        //  Userid 用户id
	    //  State 通过状态
        DataSet SearchByUserHistory(string userid,int state, int pageindex, int pagesize);

        //  Userid 用户id
	    //  State 通过状态
        DataSet SearchByUser(string userid, int state, int pageindex, int pagesize);

        DataSet SearchByOwner(string id, int pageindex, int pagesize);

        // id 挑战id
        DataSet SearchByChallengeID(string id);
    }
}
