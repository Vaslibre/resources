<a href="{{ $url }}/{{ $token }}" target="_blank" style="text-decoration: underline;">
    <table border="0" cellpadding="0" cellspacing="0" align="center" style="max-width: 240px; min-width: 120px; border-collapse: collapse; border-spacing: 0; padding: 0;">
	    <tr>
		    <td align="center" valign="middle" style="padding: 12px 24px; margin: 0; text-decoration: underline; border-collapse: collapse; border-spacing: 0; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px;"bgcolor="#E9703E">
                <a target="_blank" style="text-decoration: underline;color: #FFFFFF; font-family: sans-serif; font-size: 17px; font-weight: 400; line-height: 120%;" href="{{ $url }}/{{ $token }}">
				    {{ $slot }}
				</a>
		    </td>
		</tr>
	</table>
</a>