using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Model
{
    public class Challenge
    {
        private Guid _Challenge_ID;

        public Guid Challenge_ID
        {
            get { return _Challenge_ID; }
            set { _Challenge_ID = value; }
        }
        private string _Challenge_Name;

        public string Challenge_Name
        {
            get { return _Challenge_Name; }
            set { _Challenge_Name = value; }
        }
        private DateTime _Challenge_Publish;

        public DateTime Challenge_Publish
        {
            get { return _Challenge_Publish; }
            set { _Challenge_Publish = value; }
        }

        private string _Challenge_Quiz0;

        public string Challenge_Quiz0
        {
            get { return _Challenge_Quiz0; }
            set { _Challenge_Quiz0 = value; }
        }
        private string _Challenge_Quiz1;

        public string Challenge_Quiz1
        {
            get { return _Challenge_Quiz1; }
            set { _Challenge_Quiz1 = value; }
        }
        private string _Challenge_Quiz2;

        public string Challenge_Quiz2
        {
            get { return _Challenge_Quiz2; }
            set { _Challenge_Quiz2 = value; }
        }
        private Guid _Challenge_OwnerID;

        public Guid Challenge_OwnerID
        {
            get { return _Challenge_OwnerID; }
            set { _Challenge_OwnerID = value; }
        }
        private DateTime _Challenge_Time;

        public DateTime Challenge_Time
        {
            get { return _Challenge_Time; }
            set { _Challenge_Time = value; }
        }
        private int _Challenge_Level;

        public int Challenge_Level
        {
            get { return _Challenge_Level; }
            set { _Challenge_Level = value; }
        }
        private int _Challenge_Type;

        public int Challenge_Type
        {
            get { return _Challenge_Type; }
            set { _Challenge_Type = value; }
        }
        private int _Challenge_Salary;

        public int Challenge_Salary
        {
            get { return _Challenge_Salary; }
            set { _Challenge_Salary = value; }
        }
        private string _Challenge_Area;

        public string Challenge_Area
        {
            get { return _Challenge_Area; }
            set { _Challenge_Area = value; }
        }
        private string _Challenge_Position0;

        public string Challenge_Position0
        {
            get { return _Challenge_Position0; }
            set { _Challenge_Position0 = value; }
        }

        private string _Challenge_Position1;

        public string Challenge_Position1
        {
            get { return _Challenge_Position1; }
            set { _Challenge_Position1 = value; }
        }

        private string _Challenge_Position2;

        public string Challenge_Position2
        {
            get { return _Challenge_Position2; }
            set { _Challenge_Position2 = value; }
        }
        private string _Challenge_EnTime;

        public string Challenge_EnTime
        {
            get { return _Challenge_EnTime; }
            set { _Challenge_EnTime = value; }
        }
        private int _Challenge_Num;

        public int Challenge_Num
        {
            get { return _Challenge_Num; }
            set { _Challenge_Num = value; }
        }
        private int _Challenge_State;

        public int Challenge_State
        {
            get { return _Challenge_State; }
            set { _Challenge_State = value; }
        }
    }
}
