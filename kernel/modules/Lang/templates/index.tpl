{literal}
<script type="text/javascript">
	var ModLang = {
		onChange: function(lang) {
			$('#mod_lang_id').val(lang);
			$('#mod_lang_form').submit();
		}
	}
</script>
{/literal}

<div class="mod_Lang">
	<span>
		{"lang"|label}:&nbsp;
		{if $current_lang == 'us'}{'mod_lang_us'|label}{/if}
		{if $current_lang == 'ua'}{'mod_lang_ua'|label}{/if}
		{if $current_lang == 'ru'}{'mod_lang_ru'|label}{/if}
	</span>

	<form id="mod_lang_form" method="POST">
		<input id="mod_lang_id" type="hidden" name="mod_lang_value">
		<div onclick="ModLang.onChange('us');" class="l_flag l_flag_us {if $current_lang == 'us'}selected{/if}" title="{'mod_lang_us'|label}"></div>
		<div onclick="ModLang.onChange('ua');" class="l_flag l_flag_ua {if $current_lang == 'ua'}selected{/if}" title="{'mod_lang_ua'|label}"></div>
		<div onclick="ModLang.onChange('ru');" class="l_flag l_flag_ru {if $current_lang == 'ru'}selected{/if}" title="{'mod_lang_ru'|label}"></div>
	</form>
</div>