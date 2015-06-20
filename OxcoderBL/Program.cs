/*
 * ideone.com
 * API sample
 * 
 * This program shows how to use ideone api.
 * 
 * How to run it?
 *  1. Create C# Windows Console Application project in the Visual Studio;
 *  2. Include Program.cs and Ideone_Service.cs files to the project
 *      (you can generate the stub - Ideone_ServiceService.cs - by yourself 
 *      using wsdl.exe tool from Microsoft SDK);
 *  3. Add System.Web.Services reference to the project (right click on the
 *      project name in the Solution Explorer -> click Add Reference ...);
 *  4. Run the project.
 */

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Xml;

namespace OxcoderBL
{
    public class Program:OxcoderIBL.IProgram
    {
        private string link;
        private string user="moirai";
        private string pass = "304832851";
        private int tryTimes = 0;

        public bool createSub(string code,int lang,string input)
        {
            Dictionary<string, string> result = new Dictionary<string, string>();
            Ideone_Service client = new Ideone_Service(); // instantiating the stub
            Object[] ret = client.createSubmission(user,pass,code,lang,input,true,true); // calling the method

            // filling result with data returned by testFunction
            foreach (object o in ret)
            {
                if (o is XmlElement)
                {
                    XmlNodeList x = ((XmlElement)o).ChildNodes;
                    result.Add(x.Item(0).InnerText, x.Item(1).InnerText);
                }
            }

            // checking if everything went ok
            if ("OK" == result["error"])
            {
                link = result["link"];
                return true;
            }
            else
            {
                Console.WriteLine("Error occured: " + result["error"]);
                return false;
            }
        }

        public Model.Compile getStatus()
        {
            Dictionary<string, string> result = new Dictionary<string, string>();
            Ideone_Service client = new Ideone_Service(); // instantiating the stub
            Object[] ret = client.getSubmissionStatus(user, pass, link); // calling the method

            // filling result with data returned by testFunction
            foreach (object o in ret)
            {
                if (o is XmlElement)
                {
                    XmlNodeList x = ((XmlElement)o).ChildNodes;
                    result.Add(x.Item(0).InnerText, x.Item(1).InnerText);
                }
            }

            Model.Compile com = new Model.Compile();
            // checking if everything went ok
            if ("OK" == result["error"])
            {
                int status = int.Parse(result["status"]);
                if (status != 0)
                {
                    com.StatusCode = -1;
                    return com;
                    //if (tryTimes < 2)
                    //{
                    //    ++tryTimes;
                    //    getStatus();
                    //}
                    //else{
                    //    com.StatusCode=-1;
                    //    return com;
                    //}
                }
                else
                {
                    int results = int.Parse(result["result"]);
                    switch (results)
                    {
                        case 0:
                            com.StatusCode = 0;
                            com.RunInfo = "not running – the submission has been created with run parameter set to false"; 
                            return com;
                        case 11:
                             com.StatusCode = 0;
                             com.RunInfo = "compilation   error   –   the   program   could   not   be executed due to compilation error"; 
                            return com;
                        case 12:
                            com.StatusCode = 0;
                             com.RunInfo = "runtime error – the program finished because of  the runtime error, for example: division by zero,   array index out of bounds, uncaught exception Ideone API is powered ";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                            return com;                                                                                                                                                                                                                                                                                       
                        case 13:
                            com.StatusCode = 0;
                            com.RunInfo = "time limit exceeded – the program didn't stop before the time limit";
                            return com;
                        case 15:
                            com.StatusCode = 1;
                             com.RunInfo = "success";
                            return com;
                        case 17:
                            com.StatusCode = 0;
                            com.RunInfo = "memory limit exceeded – the program tried to use more memory than it is allowed to";
                            return com;
                        case 19:
                            com.StatusCode = 0;
                            com.RunInfo = "illegal system call – the program tried to call illegal system function";
                            return com;
                        case 20:
                            com.StatusCode = 0;
                            com.RunInfo = "internal   error   –   some   problem   occurred   on ideone.com; try to submit the program again and if that   fails   too,   then   please   contact   us   at contact@ideone.com";
                            return com;
                        default:
                            com.StatusCode = 0;
                            com.RunInfo = "DONT HAVE THIS CASE";
                            return com;
                    }
                }
            }
            else
            {
                com.StatusCode = -2;
                com.RunInfo = "ERROR";
                return com;
            }
            com.StatusCode = -1;
            com.RunInfo = "ERROR";
            return com;
        }

    }
}
