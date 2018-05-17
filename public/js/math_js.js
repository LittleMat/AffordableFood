function put_input(name, type){
	if(type=='input' && !$( "."+name ).children().is(':text')){
		$text = $( "."+name ).children().text();
		$( "."+name ).text(''); 
		input = jQuery('<input name='+name+'>');
		$( "."+name ).append(input);
	}
}