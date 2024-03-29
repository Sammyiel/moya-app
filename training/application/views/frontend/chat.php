<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
</head>
<body>
	<h1>Welcome to the chat</h1>
</body>
<footer>
<script>
var chat_appid = '328709276e47307';
var chat_auth = 'e41e18c7e7deac244a594fcf7403c8cca016cc97';
</script>
<?php if($this->session->userdata('id') && $this->session->userdata('id') > 0) { ?>
 <script>
	var chat_id = "<?php echo $this->session->userdata('id'); ?>";
	var chat_name = "<?php echo $this->session->userdata('name'); ?>"; 
	var chat_link = "<?php echo $this->session->userdata('link'); ?>"; //Similarly populate it from session for user's profile link if exists
	var chat_avatar = "<?php echo $this->session->userdata('avatar'); ?>"; //Similarly populate it from session for user's avatar src if exists
	var chat_role = "<?php echo $this->session->userdata('role'); ?>"; //Similarly populate it from session for user's role if exists
	var chat_friends = '<?php echo $this->session->userdata('friends'); ?>'; //Similarly populate it with user's friends' site user id's eg: 14,16,20,31
	</script>
<?php } ?>
<script>
var chat_height = '600px';
var chat_width = '100%';

document.write('<div id="cometchat_embed_synergy_container" style="width:'+chat_width+';height:'+chat_height+';max-width:100%;border:1px solid #CCCCCC;border-radius:5px;overflow:hidden;"></div>');

var chat_js = document.createElement('script'); chat_js.type = 'text/javascript'; chat_js.src = 'https://fast.cometondemand.net/'+chat_appid+'x_xchatx_xcorex_xembedcode.js';

chat_js.onload = function() {
    var chat_iframe = {};chat_iframe.module="synergy";chat_iframe.style="min-height:"+chat_height+";min-width:"+chat_width+";";chat_iframe.width=chat_width.replace('px','');chat_iframe.height=chat_height.replace('px','');chat_iframe.src='https://'+chat_appid+'.cometondemand.net/cometchat_embedded.php'; if(typeof(addEmbedIframe)=="function"){addEmbedIframe(chat_iframe);}
}

var chat_script = document.getElementsByTagName('script')[0]; chat_script.parentNode.insertBefore(chat_js, chat_script);
</script>

</footer>
</html>