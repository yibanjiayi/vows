<script>
    function CheckPost() {
        if (myform.pick.value == ''){
            alert('请填写接收人');
            myform.pick.focus();
            return false;
        }
        if (myform.send.value == '') {
            alert("请填写发送人");
            myform.send.focus();
            return false;
        }
        if (myform.info.value.length < 3) {
            alert('字条内容不能少于3个字');
            myform.info.focus();
            return false;
        }
    }
</script>
<form action="insert.php" method="post" name="myform" onsubmit="return CheckPost();">
    <table class="tableadd">
        <tr>
            <td class="tdbg">许愿留言预览</td>
            <td class="tdbg">请填写愿望~~</td>
        </tr>
        <tr>
            <td rowspan="4" style="width: 300px;height: 250px">
                <div class="tddiv">
                    <p class="pheader"></p>
                    <p class="ppick"></p>
                    <p class="pinfo"></p>
                    <p class="psend"></p>
                    <p class="ptime"></p>
                </div>
            </td>
            <td class="addcls">接收人：</td>
            <td class="addinput"><input type="text" class="input" name="pick"></td>
        </tr>
        <tr>
            <td class="addcls">发送人：</td>
            <td class="addinput"><input type="text" class="input" name="send"></td>
        </tr>
        <tr>
            <td class="addcls">字条内容：</td>
            <td class="addinput">
                <textarea name="info" id=""></textarea>
            </td>
        </tr>
        <tr>
            <td class="addinput" colspan="2">
                <input type="submit" value="提交" class="sub2">
            </td>
        </tr>
    </table>
</form>