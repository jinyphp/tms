<x-theme>
	<x-main class="p-4">
		<x-main-content class="p-4 bg-white">


        <table border="0" width="100%" cellspacing="0" cellpadding="0">
	        <tr>
		        <td style="border:1px solid #E9E9E9;font-size:12px;padding:10px;" bgcolor="#FFFFFF">
		        {formstart}

                <table border="0" width="100%" cellspacing="0" cellpadding="0">
                <tr>
                    <td style="font-size:12px;padding:10px;" width="100">
                    <font size="2">plug 활성화:</font></td>
                    <td style="font-size:12px;padding:10px;"><font size="2">{enable}</font></td>
                </tr>
                <tr>
                    <td style="font-size:12px;padding:10px;" width="100">
                    plug
                    코드:</td>
                    <td style="font-size:12px;padding:10px;">{code}</td>
                </tr>
			    <tr>
                    <td style="font-size:12px;padding:10px;" width="100">
                    <font size="2">타이틀:</font></td>
                    <td style="font-size:12px;padding:10px;"><font size="2">{title}</font></td>
				</tr>
		        </table>

                <table border="0" width="100%" cellspacing="0" cellpadding="0">
                <tr>
                    <td style="font-size:12px;padding:10px;"><font size="2">{html}</font></td>
                </tr>
                </table>

                <p align="center">{form_submit}{formend}</p>

            </td>
            </tr>
        </table>


		</x-main-content>
	</x-main>
</x-theme>
