using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;

/// <summary>
/// 搜索 的摘要说明
/// 此类是 BL 的接口类
/// </summary>
/// 
/// Author:岚岚姐
/// Date：2015/06/09
/// 
namespace OxcoderIBL
{
    public interface SearchChallengeIBL
    {

        //  Salary 工资范围
        //	Provice 省份
        //	Retype 技术方向
        //	Flag 按热度 时间 薪资 排序
        //	SearchCondition 搜索条件
        DataSet Search(int pageindex, int pagesize, int salary = -1, string provice = null, int retype = -1, int flag = -1, string searchCondition = null);

        //	Eid 企业
        DataSet SearchByOwner(string id, int pageindex, int pagesize);

        //  Userid 用户id
        //	State 通过状态
        //	Flag 进行中还是历史
        DataSet SearchByUser(string userid, int state, int flag, int pageindex, int pagesize);

        //  Userid 用户id
        //	State 通过状态
        //	Flag 进行中还是历史
        DataSet SearchByChallengeID(string id, int pageindex, int pagesize);
    }
}
