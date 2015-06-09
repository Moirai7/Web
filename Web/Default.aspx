<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="Web.Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        
        <div>
            <asp:Button ID="btnWrite" runat="server" OnClick="btnWrite_Click" Text="写二进制文件" Height="26px" />
            <asp:Button ID="btnRead" runat="server" OnClick="btnRead_Click" Text="读二进制文件" />
            <br />
            <asp:Label ID="lblShow" runat="server" Text="Label"></asp:Label>
            <asp:TreeView ID="TreeView1" runat="server">
            </asp:TreeView>
            <asp:TextBox ID="TextBox1" runat="server"></asp:TextBox>
            <asp:Button ID="Button1" runat="server" OnClick="Button1_Click" Text="Button" />
            <asp:Label ID="Label1" runat="server" Text="Label"></asp:Label>
            <br />
            姓名
        <asp:TextBox ID="tb_UserName" runat="server"></asp:TextBox><br />
            <br />
            留言
        <asp:TextBox ID="tb_Message" runat="server" Height="100px" TextMode="MultiLine" Width="300px"></asp:TextBox><br />
            <br />
            <asp:Button ID="btn_SendMessage" runat="server" Text="发表留言" OnClick="btn_SendMessage_Click" />
            <br />
            <asp:TextBox ID="info" runat="server" ></asp:TextBox>
            <br />
            <asp:TextBox ID="password" runat="server"></asp:TextBox>
            <br />
            <asp:Button ID="redirectButton" runat="server" Text="跳转" OnClick="btn_Redirect_Click" />
            <br />
            <asp:HyperLink ID="HyperLink" runat="server" NavigateUrl="Admin.aspx?username=lanlan">跳转到后台</asp:HyperLink>
            <asp:Repeater ID="rpt_Message" runat="server">
                <ItemTemplate>
                    <table width="600px" style="border: solid 1px #666666; font-size: 10pt; background-color: #f0f0f0">
                        <tr>
                            <td align="left" width="400px">
                                <%# Eval("Message")%>
                            </td>
                            <td align="right" width="200px">
                                <%# Eval("PostTime")%> - <%# Eval("UserName")%>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                                <hr width="300px" />
                                管理员回复：<%# Eval("IsReplied").ToString() == "False" ? "暂无" : Eval("Reply")%></td>
                        </tr>
                    </table>
                    <br />
                </ItemTemplate>
            </asp:Repeater>
        </div>
    </form>
</body>
</html>
